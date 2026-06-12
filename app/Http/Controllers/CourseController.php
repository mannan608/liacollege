<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query()->orderByDesc('id');

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
        $categoryById = Category::select('id', 'name')->pluck('name', 'id')->toArray();
        $users   = User::select('id', 'name')->get();

        return view('backend.course.index', compact('courses', 'users', 'categoryById'));
    }

    public function create()
    {
        $categories = Category::all();
        $course = null;
        return view('backend.course.create', compact('course', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:255',
                'category_id' => 'required|exists:categories,id',
                'banner' => 'nullable|image|max:5120',
                'course_material' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx,zip|max:10240',
            ],
            [
                'title.required' => 'Course title is required.',
                'category_id.required' => 'Please select a category.',
                'banner.image' => 'Banner must be an image.',
                'banner.max' => 'Banner size cannot exceed 5MB.',
                'course_material.mimes' => 'Only PDF, DOC, DOCX, PPT, PPTX and ZIP files are allowed.',
                'course_material.max' => 'Course material size cannot exceed 10MB.',
            ]
        );

        try {

            DB::beginTransaction();

            $bannerName = null;
            $courseMaterialName = null;

            $uploadPath = public_path('uploads/courses');

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Banner Upload
            if ($request->hasFile('banner')) {

                $file = $request->file('banner');

                $bannerName = 'banner-' .
                    uniqid() .
                    '-' .
                    now()->format('d_m_Y') .
                    '.' .
                    $file->getClientOriginalExtension();

                $file->move($uploadPath, $bannerName);
            }

            // Course Material Upload
            if ($request->hasFile('course_material')) {

                $file = $request->file('course_material');

                $courseMaterialName = 'material-' .
                    uniqid() .
                    '-' .
                    now()->format('d_m_Y') .
                    '.' .
                    $file->getClientOriginalExtension();

                $file->move($uploadPath, $courseMaterialName);
            }

            Course::create([
                'title' => $request->title,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'price' => $request->price,
                'discount_percentage' => $request->discount_percentage,
                'banner' => $bannerName,
                'course_material' => $courseMaterialName,
                'created_by' => auth()->id(),
            ]);

            DB::commit();

            return redirect()
                ->route('course.index')
                ->with('success', 'Course created successfully');
        } catch (\Exception $e) {

            DB::rollBack();

            return back()
                ->withInput()
                ->withErrors([
                    'error' => $e->getMessage()
                ]);
        }
    }

    public function edit($id)
    {
        $course = Course::find($id);
        $categories = Category::all();
        return view('backend.course.create', compact('course', 'categories'));
    }

    public function show($id)
    {
        $course = Course::find($id);
        return view('backend.course.show', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'price' => 'nullable|numeric',
            'discount_percentage' => 'nullable|numeric|min:0|max:100',
            'banner' => 'nullable|image|max:5120',
            'course_material' => 'nullable|file|max:10240',
        ]);

        try {

            DB::beginTransaction();

            $course = Course::findOrFail($id);

            $uploadPath = public_path('uploads/courses');

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $bannerName = $course->banner;
            $courseMaterialName = $course->course_material;

            // Banner Update
            if ($request->hasFile('banner')) {

                if (
                    $course->banner &&
                    file_exists($uploadPath . '/' . $course->banner)
                ) {
                    unlink($uploadPath . '/' . $course->banner);
                }

                $file = $request->file('banner');

                $bannerName = 'banner-' .
                    uniqid() .
                    '-' .
                    now()->format('d_m_Y') .
                    '.' .
                    $file->getClientOriginalExtension();

                $file->move($uploadPath, $bannerName);
            }

            // Course Material Update
            if ($request->hasFile('course_material')) {

                if (
                    $course->course_material &&
                    file_exists($uploadPath . '/' . $course->course_material)
                ) {
                    unlink($uploadPath . '/' . $course->course_material);
                }

                $file = $request->file('course_material');

                $courseMaterialName = 'material-' .
                    uniqid() .
                    '-' .
                    now()->format('d_m_Y') .
                    '.' .
                    $file->getClientOriginalExtension();

                $file->move($uploadPath, $courseMaterialName);
            }

            $course->update([
                'title' => $request->title,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'price' => $request->price,
                'discount_percentage' => $request->discount_percentage,
                'banner' => $bannerName,
                'course_material' => $courseMaterialName,
                'updated_by' => auth()->id(),
            ]);

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

            $course = Course::findOrFail($id);

            $uploadPath = public_path('uploads/courses');

            if (
                $course->banner &&
                file_exists($uploadPath . '/' . $course->banner)
            ) {
                unlink($uploadPath . '/' . $course->banner);
            }

            if (
                $course->course_material &&
                file_exists($uploadPath . '/' . $course->course_material)
            ) {
                unlink($uploadPath . '/' . $course->course_material);
            }

            $course->delete();

            return back()->with('success', 'Course deleted successfully');
        } catch (\Exception $e) {

            return back()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }
}
