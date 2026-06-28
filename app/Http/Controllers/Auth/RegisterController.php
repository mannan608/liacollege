<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;

use Hash;
use DB;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function register()
    {
        // $role = DB::table('roles')->get();
        $courses = DB::table('courses')->get();
        return view('backend.students.create', compact('courses'));
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

        $plainPassword = $request->password;

        $user = User::create([
            'name'      => $request->name,
            'avatar'    => $request->image,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'role'      => 'student',
            'password'  => Hash::make($plainPassword),
        ]);

        $user->courses()->sync($request->courses);

        // Send login details to student
        $message = "
                Hello {$user->name},

                Welcome to our Learning Portal.

                Your account has been created successfully.

                Login Details:

                Email: {$user->email}
                Password: {$plainPassword}

                Please login and change your password after your first login.

                Regards,
                Admin
                ";

        Mail::raw($message, function ($mail) use ($user) {
            $mail->to($user->email)
                ->subject('Your Student Account');
        });

        return redirect()
            ->route('student.index')
            ->with('success', 'Student Created Successfully.');
    }

    public function index(Request $request)
    {
        $query = User::where('role', 'student');

        if ($request->filled('name')) {
            $search = $request->name;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        $students = $query->latest()->paginate(10)->withQueryString();

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
        $student = User::with(['courses', 'coursePolicies', 'courseAssignments', 'courseMaterials'])->findOrFail($id);
        $courses = Course::with(['policies', 'assignments', 'materials'])->get();

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

            // policies, assignments, materials
            'course_policies' => ['nullable', 'array'],
            'course_policies.*' => ['exists:course_policies,id'],
            'course_assignments' => ['nullable', 'array'],
            'course_assignments.*' => ['exists:course_assignments,id'],
            'course_materials' => ['nullable', 'array'],
            'course_materials.*' => ['exists:course_materials,id'],
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

        // sync policies
        $student->coursePolicies()->sync($request->input('course_policies', []));
        $student->courseAssignments()->sync($request->input('course_assignments', []));
        $student->courseMaterials()->sync($request->input('course_materials', []));

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
