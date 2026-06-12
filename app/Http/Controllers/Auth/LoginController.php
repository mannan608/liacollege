<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Providers\RouteServiceProvider;
use DB;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout',
            'locked',
            'unlock'
        ]);
    }
    /** index page login */
    public function login()
    {
        if (Auth::check()) {

            if (strtolower(Auth::user()->role) === 'student') {
                return redirect()->route('student.dashboard');
            }

            return redirect()->route('dashboard');
        }

        $setting = Setting::first();

        return view('auth.login', compact('setting'));
    }

    /** login with databases */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email'    => 'required|string',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('error', 'Email or password is incorrect');
        }

        $request->session()->regenerate();

        $user = Auth::user();

        // Student
        if (strtolower(trim($user->role)) === 'student') {

            return redirect()
                ->route('student.dashboard')
                ->with('success', 'Login successfully :)');
        }

        // Admin
        return redirect()
            ->route('dashboard')
            ->with('success', 'Login successfully :)');
    }

    /** logout */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login')->with('success', 'Logout successfully :)');
    }
}
