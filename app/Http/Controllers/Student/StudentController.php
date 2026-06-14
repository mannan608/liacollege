<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard');
    }

    // ✅ Categories
    public function categories()
    {
        $categories = auth()->user()
            ->categories()
            ->where('status',1)
            ->get();

        return view('student.categories', compact('categories'));
    }

    // ✅ Courses (MAIN LOGIC)
    public function courses()
    {
        $user = auth()->user();

        $courses = Course::where(function($q) use ($user){
            $q->whereIn('category_id', $user->categories->pluck('id'))
              ->orWhereIn('id', $user->courses->pluck('id'));
        })
        ->where('status',1)
        ->with('category')
        ->get();

        return view('student.courses', compact('courses'));
    }

    // ✅ Course Details
    public function show(Course $course)
    {
        if (!$this->canAccessCourse($course)) {
            abort(403);
        }

        return view('student.course-show', compact('course'));
    }

    // ✅ Download
    public function download(Course $course)
    {
        if (!$this->canAccessCourse($course)) {
            abort(403);
        }

        return response()->download(
            storage_path('app/private/'.$course->pdf_file)
        );
    }

    // 🔥 CORE PERMISSION CHECK
    private function canAccessCourse($course)
    {
        $user = auth()->user();

        if (!$course->status) return false;

        if ($user->courses->contains($course->id)) return true;

        if ($user->categories->contains($course->category_id)) return true;

        return false;
    }
}
