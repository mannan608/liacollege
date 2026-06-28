<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CoursePolicy;
use App\Models\CourseAssignment;
use App\Models\CourseMaterial;
use App\Models\User;
use App\Traits\FileUploadTrait;
use App\Http\Requests\CourseStoreRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    use FileUploadTrait;
    public function index(Request $request)
    {
        $query = Course::with(['createdBy', 'updatedBy'])->orderByDesc('id');

        // ===== Filters =====
        $query->when($request->id, fn($q) => $q->where('id', $request->id));
        $query->when(
            $request->title,
            fn($q) =>
            $q->where('name', 'LIKE', "%{$request->title}%")
        );
        $query->when($request->created_by, fn($q) => $q->where('created_by', $request->created_by));

        if ($request->date_from) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->date_to) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $courses = $query->get();
        $users   = User::select('id', 'name')->get();

        return view('backend.course.index', compact('courses', 'users'));
    }

    public function create()
    {
        $course = null;
        return view('backend.course.create', compact('course'));
    }

    public function store(CourseStoreRequest $request)
    {
        try {
            DB::beginTransaction();

            $bannerPath = null;
            if ($request->hasFile('banner')) {
                $bannerPath = $this->uploadFile($request->file('banner'), 'uploads/courses');
            }

            $course = Course::create([
                'title' => $request->title,
                'description' => $request->description,
                'banner' => $bannerPath,
                'created_by' => auth()->id(),
                'updated_by' => auth()->id(),
            ]);

            if ($request->has('policy_title')) {
                foreach ($request->policy_title as $index => $title) {
                    if (!empty($title) && !empty($request->policy_url[$index])) {
                        CoursePolicy::create([
                            'course_id' => $course->id,
                            'title' => $title,
                            'url' => $request->policy_url[$index],
                            'sort_order' => $index,
                        ]);
                    }
                }
            }

            if ($request->has('assignment_name')) {
                foreach ($request->assignment_name as $index => $name) {
                    if (!empty($name)) {
                        $filePath = null;
                        if ($request->hasFile("assignment_file.$index")) {
                            $filePath = $this->uploadFile($request->file("assignment_file.$index"), 'uploads/assignments');
                        }

                        CourseAssignment::create([
                            'course_id' => $course->id,
                            'title' => $name,
                            'file' => $filePath,
                            'allow_submission' => $request->show_submit[$index] ?? 1,
                            'submission_limit' => $request->submission_limit[$index] ?? 1,
                            'sort_order' => $index,
                        ]);
                    }
                }
            }

            if ($request->has('material_name')) {
                foreach ($request->material_name as $index => $name) {
                    if (!empty($name) && $request->hasFile("material_file.$index")) {
                        $filePath = $this->uploadFile($request->file("material_file.$index"), 'uploads/materials');

                        CourseMaterial::create([
                            'course_id' => $course->id,
                            'title' => $name,
                            'file' => $filePath,
                            'sort_order' => $index,
                        ]);
                    }
                }
            }

            DB::commit();

            return redirect()
                ->route('course.index')
                ->with('success', 'Course created successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()
                ->withInput()
                ->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $course = Course::with(['policies', 'assignments', 'materials'])->findOrFail($id);
        return view('backend.course.create', compact('course'));
    }

    public function show($id)
    {
        $course = Course::with(['policies', 'assignments', 'materials'])->findOrFail($id);
        return view('backend.course.show', compact('course'));
    }

    public function update(CourseStoreRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $course = Course::findOrFail($id);

            $bannerPath = $course->banner;
            if ($request->hasFile('banner')) {
                $bannerPath = $this->uploadFile($request->file('banner'), 'uploads/courses', $course->banner);
            }

            $course->update([
                'title' => $request->title,
                'description' => $request->description,
                'banner' => $bannerPath,
                'updated_by' => auth()->id(),
            ]);

            $course->policies()->delete();
            if ($request->has('policy_title')) {
                foreach ($request->policy_title as $index => $title) {
                    if (!empty($title) && !empty($request->policy_url[$index])) {
                        CoursePolicy::create([
                            'course_id' => $course->id,
                            'title' => $title,
                            'url' => $request->policy_url[$index],
                            'sort_order' => $index,
                        ]);
                    }
                }
            }

            foreach ($course->assignments as $assignment) {
                if ($assignment->file) {
                    $this->deleteFile($assignment->file);
                }
            }
            $course->assignments()->delete();
            if ($request->has('assignment_name')) {
                foreach ($request->assignment_name as $index => $name) {
                    if (!empty($name)) {
                        $filePath = null;
                        if ($request->hasFile("assignment_file.$index")) {
                            $filePath = $this->uploadFile($request->file("assignment_file.$index"), 'uploads/assignments');
                        }

                        CourseAssignment::create([
                            'course_id' => $course->id,
                            'title' => $name,
                            'file' => $filePath,
                            'allow_submission' => $request->show_submit[$index] ?? 1,
                            'submission_limit' => $request->submission_limit[$index] ?? 1,
                            'sort_order' => $index,
                        ]);
                    }
                }
            }

            foreach ($course->materials as $material) {
                if ($material->file) {
                    $this->deleteFile($material->file);
                }
            }
            $course->materials()->delete();
            if ($request->has('material_name')) {
                foreach ($request->material_name as $index => $name) {
                    if (!empty($name) && $request->hasFile("material_file.$index")) {
                        $filePath = $this->uploadFile($request->file("material_file.$index"), 'uploads/materials');

                        CourseMaterial::create([
                            'course_id' => $course->id,
                            'title' => $name,
                            'file' => $filePath,
                            'sort_order' => $index,
                        ]);
                    }
                }
            }

            DB::commit();

            return redirect()
                ->route('course.index')
                ->with('success', 'Course updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()
                ->withInput()
                ->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $course = Course::with(['policies', 'assignments', 'materials'])->findOrFail($id);

            if ($course->banner) {
                $this->deleteFile($course->banner);
            }

            foreach ($course->assignments as $assignment) {
                if ($assignment->file) {
                    $this->deleteFile($assignment->file);
                }
            }

            foreach ($course->materials as $material) {
                if ($material->file) {
                    $this->deleteFile($material->file);
                }
            }

            $course->delete();

            return back()->with('success', 'Course deleted successfully');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
