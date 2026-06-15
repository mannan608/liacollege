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

                                {{-- <div class="form-group local-forms">
                                    <label>Select Course <span class="login-danger">*</span></label>
                                    <select name="courses[]" multiple class="form-control">
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}" @selected(in_array($course->id, old('courses', $student->courses->pluck('id')->toArray())))>
                                                {{ $course->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label>Select Course <span class="login-danger">*</span></label>

                                    @php
                                        $selectedCourses = old('courses', $student->courses->pluck('id')->toArray());
                                    @endphp

                                    <div class="row">
                                        @foreach ($courses as $course)
                                            <div class="col-md-4">
                                                <label style="display: flex; align-items: center; gap: 6px;">
                                                    <input type="checkbox" name="courses[]" value="{{ $course->id }}"
                                                        {{ in_array($course->id, $selectedCourses) ? 'checked' : '' }}>
                                                    {{ $course->title }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group local-forms">
                                    <label>Select Role <span class="login-danger">*</span></label>

                                    <select name="role" class="form-control">
                                        <option value="">Select Role</option>

                                        <option value="student"
                                            {{ old('role', $student->role) == 'student' ? 'selected' : '' }}>
                                            Student
                                        </option>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <button class="btn btn-primary  w-fit" type="submit">Update Student</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .w-fit {
        width: fit-content;
    }
</style>
