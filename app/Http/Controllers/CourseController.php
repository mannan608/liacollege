<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('category')->latest()->get();
        return view('backend.courses.index', compact('courses'));
    }

    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('backend.courses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'category_id' => 'required',
        'image' => 'nullable|image',
        'pdf' => 'required|mimes:pdf'
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')
            ->store('courses/images','public');
    }

    $pdfPath = $request->file('pdf')
        ->store('courses/pdfs','public');

    Course::create([
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'category_id' => $request->category_id,
        'image' => $imagePath,
        'pdf_file' => $pdfPath,
        'status' => 1
    ]);

        return redirect()->route('backend.courses.index')->with('success','Course created successfully');
    }

    public function edit(Course $course)
    {
        $categories = Category::pluck('name','id');
        return view('backend.courses.edit', compact('course','categories'));
    }

    public function update(Request $request, Course $course)
    {
         $request->validate([
        'name' => 'required',
        'category_id' => 'required',
    ]);

    $data = [
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'category_id' => $request->category_id,
        'status' => $request->status ?? 1
    ];

    // image replace
    if ($request->hasFile('image')) {

        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }

        $data['image'] = $request->file('image')
            ->store('courses/images','public');
    }

    // pdf replace
    if ($request->hasFile('pdf')) {

        if ($course->pdf_file) {
            Storage::disk('public')->delete($course->pdf_file);
        }

        $data['pdf_file'] = $request->file('pdf')
            ->store('courses/pdfs','public');
    }

    $course->update($data);

        return redirect()->route('backend.courses.index')->with('success','Course updated successfully');
    }

    public function destroy(Course $course)
    {
         // delete image
    if ($course->image) {
        Storage::disk('public')->delete($course->image);
    }

    // delete pdf
    if ($course->pdf_file) {
        Storage::disk('public')->delete($course->pdf_file);
    }

    $course->delete();
        return back()->with('success','Course deleted successfully');
    }
}