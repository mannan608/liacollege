@extends('backend.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="page-sub-header bg-white shadow-sm rounded-3 p-3 mb-4">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 w-100">

                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">
                                        <i class="fas fa-home me-1"></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active fw-semibold text-dark" aria-current="page">
                                    All Courses
                                </li>
                            </ol>
                        </nav>

                        <!-- Add Button -->
                        <a href="{{ route('course.create') }}" class="btn btn-primary d-flex align-items-center gap-2 px-4">
                            <i class="fas fa-plus"></i>
                            <span>Add New Course</span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body">
                                    <form method="GET" action="{{ route('course.index') }}">
                                        <div class="row g-3 align-items-end">

                                            <!-- Search Title -->
                                            <div class="col-lg-4 col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-search"></i>
                                                    </span>
                                                    <input type="text" name="title" class="form-control"
                                                        placeholder="Search by title..." value="{{ request('title') }}">
                                                </div>
                                            </div>

                                            <!-- Actions -->
                                            <div class="col-lg-4 col-md-6">
                                                <div class="d-flex gap-2">
                                                    <button type="submit" class="btn btn-primary px-4">
                                                        <i class="fas fa-filter me-1"></i>
                                                        Filter
                                                    </button>

                                                    <a href="{{ route('course.index') }}" class="btn btn-light border px-4">
                                                        <i class="fas fa-rotate-left me-1"></i>
                                                        Reset
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive mt-3">
                                <table class="table table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>ID</th>
                                            <th>Documents</th>
                                            <th>Title</th>
                                            <th>Section</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                                <td>{{ $course->id }}</td>
                                                <td>
                                                    @if ($course->course_material)
                                                        @php
                                                            $file = $course->course_material;
                                                            $extension = strtolower(
                                                                pathinfo($file, PATHINFO_EXTENSION),
                                                            );
                                                            $url = asset('uploads/courses/' . $file);
                                                        @endphp

                                                        @if ($extension === 'pdf')
                                                            <a href="{{ $url }}" target="_blank"
                                                                class="btn btn-danger btn-sm">
                                                                <i class="fas fa-file-pdf"></i> View PDF
                                                            </a>
                                                        @elseif(in_array($extension, ['doc', 'docx']))
                                                            <a href="{{ $url }}" target="_blank"
                                                                class="btn btn-primary btn-sm">
                                                                <i class="fas fa-file-word"></i> View DOC
                                                            </a>
                                                        @else
                                                            <a href="{{ $url }}" target="_blank"
                                                                class="btn btn-secondary btn-sm">
                                                                <i class="fas fa-file"></i> Open File
                                                            </a>
                                                        @endif
                                                    @else
                                                        <span class="text-muted">No File</span>
                                                    @endif
                                                </td>
                                                <td>{{ $course->title }}</td>
                                                <td>{{ $categoryById[$course->category_id] ?? '' }}</td>


                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="{{ route('course.show', $course->id) }}"
                                                            class="btn btn-sm bg-primary-light mr-2">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('course.edit', $course->id) }}"
                                                            class="btn btn-sm bg-primary-light mr-2">
                                                            <i class="far fa-edit"></i>
                                                        </a>

                                                        <form action="{{ route('course.destroy', $course->id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm bg-danger"
                                                                onclick="return confirm('Are you sure?')">
                                                                <i class="far fa-trash-alt text-white"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- /table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
