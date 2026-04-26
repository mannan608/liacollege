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
        $query->when($request->title, fn($q) => $q->where('name', 'LIKE', "%{$request->title}%"));
        $query->when($request->created_by, fn($q) => $q->where('created_by', $request->created_by));

        if ($request->date_from) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->date_to) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $courses = $query->get();
        $categoryById = Category::select('id', 'name')->pluck('name','id')->toArray();
        $users   = User::select('id', 'name')->get();

        return view('backend.course.index', compact('courses', 'users','categoryById'));
    }

    public function create()
    {   
        $categories = Category::all();
        $course = null;
        return view('backend.course.create', compact('course','categories'));
    }

    public function store(Request $request)
    {   
        // return $request->all();
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable',
            'banner'        => 'nullable|file|max:5120',
        ]);

        try {
            DB::beginTransaction();

            $fileName = null;

            if ($request->hasFile('banner')) {
                $file = $request->file('banner');

                // Use getClientOriginalExtension() instead of ->extension()
                $file_extension = $file->getClientOriginalExtension();

                $fileName = sprintf(
                    'banner-%s-%s.%s',
                    uniqid(),
                    now()->format('d_m_Y'),
                    $file_extension
                );

                // Ensure folder exists
                $uploadPath = public_path('uploads/courses');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                // Move file
                $file->move($uploadPath, $fileName);
            }

            Course::create([
                'title'       => $request->title,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'price' => $request->price,
                'discount_percentage' => $request->discount_percentage,
                'banner'        => $fileName,
                'created_by'  => auth()->id(),
                'created_at'  => now(),
            ]);

            DB::commit();
            return redirect()->route('course.index')->with('success', 'Course created successfully!');
        } catch (\Throwable $e) {
            return $e->getMessage();
            DB::rollBack();
            return back()->withErrors(['error' => $e->getMessage()]);
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
            'title'       => 'required|max:255',
            'description' => 'nullable',
            'banner'        => 'nullable|file|max:5120',
        ]);

        try {
            DB::beginTransaction();

            $course  = Course::find($id);
            $oldFile = $course->banner;
            $fileName = $oldFile;

            if ($request->hasFile('banner')) {
                $file = $request->file('banner');

                // Use getClientOriginalExtension() instead of ->extension()
                $file_extension = $file->getClientOriginalExtension();

                $fileName = sprintf(
                    'collection-%s-%s.%s',
                    uniqid(),
                    now()->format('d_m_Y'),
                    $file_extension
                );

                // Ensure folder exists
                $uploadPath = public_path('uploads/Courses');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                // Move file
                $file->move($uploadPath, $fileName);
            }

            $course->update([
                'title'       => $request->title,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'price' => $request->price,
                'discount_percentage' => $request->discount_percentage,
                'banner'        => $fileName,
                'updated_by'  => auth()->id(),
                'updated_at'  => now(),
            ]);

            DB::commit();
            return redirect()->route('course.index')->with('success', 'Course updated successfully!');
        } catch (\Throwable $e) {

            DB::rollBack();
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $course = Course::find($id);

            if ($course->file && file_exists(public_path('uploads/Courses/' . $course->file))) {
                unlink(public_path('uploads/courses/' . $course->file));
            }

            $course->delete();

            return back()->with('success', 'Course deleted!');


        } catch (\Throwable $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}