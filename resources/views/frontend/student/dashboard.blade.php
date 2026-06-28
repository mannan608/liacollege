@extends('frontend.layouts.app')
@section('title', 'Student Dashboard')


@section('content')

    <div class="dashboard-container mt-5">

        <div class="enroll-courses">
            <h5 class="">Enrolled Courses</h5>
        </div>

        @if($courses->isNotEmpty())
            @foreach($courses as $category => $categoryCourses)
                <div class="enroll-courses mb-4">
                    <!-- <h6 class="text-muted mb-3">{{ $category }}</h6> -->
                    <div class="d-flex flex-wrap gap-3">
                        @foreach($categoryCourses as $course)
                            <a href="#course-{{ $course->id }}" class="enroll-course">{{ $course->title }}</a>
                        @endforeach
                    </div>
                </div>

                @foreach($categoryCourses as $course)
                    <div class="course-details mt-5" id="course-{{ $course->id }}">
                        <h5 class="mb-3">{{ $course->title }}</h5>
                        <div class="d-flex flex-column gap-4">
                            @if($course->policies->isNotEmpty())
                                <div class="course-content w-50">
                                    <h6 class="m-0">{{ $course->title }} – Policies & Procedures</h6>
                                    <div class="d-flex flex-column gap-3 mt-4">
                                        @foreach($course->policies as $policy)
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="{{ $policy->url }}" target="_blank">{{ $policy->title }}</a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            @if($course->assignments->isNotEmpty())
                                <div class="course-content w-50">
                                    <h6 class="m-0">Course Assignment</h6>
                                    <div class="d-flex flex-column gap-4 mt-4">
                                        @foreach($course->assignments as $assignment)
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="#" class="file-info w-50">
                                                    <span class="pdf-icon">
                                                        <i class="fi fi-tr-file-pdf"></i>
                                                    </span>
                                                    <span class="line-clamp-1">{{ $assignment->title }}</span>
                                                </a>
                                                <div class="d-flex gap-4">
                                                    @if($assignment->file)
                                                        <a href="{{ asset('uploads/assignments/' . $assignment->file) }}" class="download-btn" download>
                                                            <i class="fi fi-rr-download"></i>
                                                            Download
                                                        </a>
                                                    @endif
                                                    @if($assignment->allow_submission)
                                                        <a href="#" class="download-btn">
                                                            <i class="fi fi-rr-upload"></i>
                                                            Upload
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            @if($course->materials->isNotEmpty())
                                <div class="course-content w-50">
                                    <h6 class="m-0">Course Study Materials</h6>
                                    <div class="d-flex flex-column gap-4 mt-4">
                                        @foreach($course->materials as $material)
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="#" class="line-clamp-1 w-50">{{ $material->title }}</a>
                                                @if($material->file)
                                                    <div class="d-flex gap-4">
                                                        <a href="{{ asset('uploads/materials/' . $material->file) }}" class="download-btn" download>
                                                            <i class="fi fi-rr-download"></i>
                                                            Download
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endforeach
        @else
            <div class="alert alert-info mt-4">
                You are not enrolled in any courses yet.
            </div>
        @endif
    </div>

@endsection
