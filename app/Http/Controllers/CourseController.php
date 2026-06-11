<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('category')->latest()->get();
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('admin.courses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'pdf' => 'required|mimes:pdf'
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('courses/images','public');
        }

        $pdf = $request->file('pdf')->store('courses/pdfs','private');

        Course::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $image,
            'pdf_file' => $pdf,
            'status' => $request->status ?? 1
        ]);

        return redirect()->route('courses.index');
    }

    public function edit(Course $course)
    {
        $categories = Category::pluck('name','id');
        return view('admin.courses.edit', compact('course','categories'));
    }

    public function update(Request $request, Course $course)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('courses/images','public');
        }

        if ($request->hasFile('pdf')) {
            $data['pdf_file'] = $request->file('pdf')->store('courses/pdfs','private');
        }

        $course->update($data);

        return redirect()->route('courses.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return back();
    }
}