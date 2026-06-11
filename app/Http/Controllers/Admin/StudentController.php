<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('role','student')->get();
        return view('admin.students.index', compact('students'));
    }

    public function edit($id)
    {
        $student = User::findOrFail($id);

        $categories = Category::where('status',1)->get();
        $courses = Course::where('status',1)->get();

        return view('admin.students.edit', compact('student','categories','courses'));
    }

    // 🔑 Assign Categories
    public function assignCategories(Request $request, $id)
    {
        $student = User::findOrFail($id);

        $student->categories()->sync($request->category_ids ?? []);

        return back()->with('success','Categories assigned');
    }

    // 🔑 Assign Courses
    public function assignCourses(Request $request, $id)
    {
        $student = User::findOrFail($id);

        $student->courses()->sync($request->course_ids ?? []);

        return back()->with('success','Courses assigned');
    }
}
