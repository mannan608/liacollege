<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    /** home dashboard */
    public function index(Request $request)
    {
        return view('backend.dashboard', [
            'users'       => User::count(),
        ]);
    }

    /** profile user */
    public function profile()
    {
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.profile', compact('setting','reviews'));
    }

    /** teacher dashboard */
    public function teacherDashboardIndex()
    {
        return view('dashboard.teacher_dashboard');
    }

    /** student dashboard */
    public function studentDashboardIndex()
    {
        return view('dashboard.student_dashboard');
    }
}
