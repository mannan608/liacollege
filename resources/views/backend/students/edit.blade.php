@extends('backend.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="page-sub-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Edit Student</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <form action="{{ route('student.update', $student->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Full Name <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ $student->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone <span class="login-danger">*</span></label>
                                    <input type="phone" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" value="{{ $student->phone }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $student->email }}" required>
                                </div>
                                {{-- insert defaults --}}
                                <input type="hidden" class="image" name="image" value="photo_defaults.png">

                                <div class="form-group local-forms">
                                    <label>Select Course <span class="login-danger">*</span></label>
                                    <select class="form-control select @error('course_id') is-invalid @enderror"
                                        name="course_id" id="course_id">
                                        <option selected disabled>Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}"
                                                {{ $student->course_id == $course->id ? 'selected' : '' }}>
                                                {{ $course->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('course_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group local-forms">
                                    <label>Select Role <span class="login-danger">*</span></label>

                                    <select class="form-control select @error('role') is-invalid @enderror" name="role"
                                        id="role">
                                        <option value="">Select Role</option>

                                        <option value="admin"
                                            {{ old('role', $user->role ?? '') == 'admin' ? 'selected' : '' }}>
                                            Admin
                                        </option>

                                        <option value="student"
                                            {{ old('role', $user->role ?? '') == 'student' ? 'selected' : '' }}>
                                            Student
                                        </option>
                                    </select>

                                    @error('role')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">Update Student</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
