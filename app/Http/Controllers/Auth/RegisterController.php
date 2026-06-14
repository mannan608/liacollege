<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;

use Hash;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register()
    {
        // $role = DB::table('roles')->get();
        $courses = DB::table('courses')->get();
        return view('auth.register', compact('courses'));
    }
    public function storeUser(Request $request)
    {

        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'phone'     => 'required|string|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
            'courses' => 'required|array|min:1',
            'courses.*' => 'exists:courses,id',
        ]);

        $user = User::create([
            'name'      => $request->name,
            'avatar'    => $request->image,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'role'      => null,
            'password'  => Hash::make($request->password),
            
        ]);
        $user->courses()->sync($request->courses);
        return redirect()->route('login')->with('success', 'Create new account successfully :)');
    }
    
    public function index()
    {
        $students = User::all();;
        return view('backend.students.index', compact('students'));
    }
    public function show($id)
    {
        $student = User::find($id);
        $courses = DB::table('courses')->get();
        return view('backend.students.show', compact('student', 'courses'));
    }
   public function edit($id)
{
    $student = User::with('courses')->findOrFail($id);
    $courses = Course::all();

    return view('backend.students.edit', compact('student', 'courses'));
}
  public function update(Request $request, $id)
{
    $student = User::findOrFail($id);

    $validated = $request->validate([
        'name'      => ['required', 'string', 'max:255'],
        'email'     => ['required', 'email', 'max:255', 'unique:users,email,' . $student->id],
        'phone'     => ['required', 'max:255', 'unique:users,phone,' . $student->id],

        // optional
        'role'      => ['nullable', 'in:student'],

        // multiple courses
        'courses'   => ['nullable', 'array'],
        'courses.*' => ['exists:courses,id'],
    ]);

    $student->update([
        'name'  => $validated['name'],
        'email' => $validated['email'],
        'phone' => $validated['phone'],

        // keep old role if nothing selected
        'role'  => $request->filled('role')
                    ? $request->role
                    : $student->role,
    ]);

    // update courses only when submitted
    if ($request->has('courses')) {
        $student->courses()->sync($request->courses);
    }

    return redirect()
        ->route('student.index')
        ->with('success', 'Student updated successfully.');
}

    public function destroy($id)
    {
        $student = User::find($id);
        if ($student) {
            $student->delete();
            return redirect()->route('student.index')->with('success', 'Delete student successfully :)');
        }
        return redirect()->route('student.index')->with('error', 'Student not found.');
    }
}
