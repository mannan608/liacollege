<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
        return view('auth.register',compact('courses'));
    }
    public function storeUser(Request $request)
    {

        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'phone'     => 'required|string|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
            'course'    => 'nullable',
        ]);  
        
        User::create([
            'name'      => $request->name,
            'avatar'    => $request->image,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'course'    => $request->course,
            'password'  => Hash::make($request->password),
        ]);
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
        $student = User::find($id);
        $courses = DB::table('courses')->get();
        return view('backend.students.edit', compact('student', 'courses'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users,email,'.$id,
            'phone'     => 'required|string|max:255|unique:users,phone,'.$id,
            'role' => 'required|in:admin,student',
            'course_id'    => 'nullable',
        ]);
        $student = User::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->role = $request->role;
        $student->course_id = $request->course_id;
      
        $student->save();
        return redirect()->route('student.index')->with('success', 'Update student successfully :)');
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
