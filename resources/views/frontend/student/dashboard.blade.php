@extends('frontend.layouts.app')
@section('title', 'Student Dashboard')


@section('content')

    <div class="dashboard-container mt-5">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="enroll-courses">
            <h5 class="">Enrolled Courses</h5>
        </div>

        @if($courses->isNotEmpty())
            @foreach($courses as $category => $categoryCourses)
                <div class="enroll-courses mb-4">
                    <h6 class="text-muted mb-3">{{ $category }}</h6>
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
                                                        @php
                                                            $canSubmit = true;
                                                            if ($assignment->submission_limit !== 999) {
                                                                $canSubmit = $assignment->submission_count < $assignment->submission_limit;
                                                            }
                                                        @endphp

                                                        @if($canSubmit)
                                                            <button type="button" class="download-btn" data-bs-toggle="modal" data-bs-target="#submitModal-{{ $assignment->id }}">
                                                                <i class="fi fi-rr-upload"></i>
                                                                Submit
                                                            </button>
                                                        @else
                                                            <span class="text-muted">Submission limit reached</span>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>

                                            {{-- Show previous submissions --}}
                                            @if($assignment->submissions->isNotEmpty())
                                                <div class="submissions-list ms-4 mt-2">
                                                    <small class="text-muted">Submissions ({{ $assignment->submission_count }} / {{ $assignment->submission_limit == 999 ? 'Unlimited' : $assignment->submission_limit }}):</small>
                                                    <ul class="mt-1">
                                                        @foreach($assignment->submissions as $submission)
                                                            <li class="mb-1">
                                                                <small>
                                                                    <a href="{{ asset('uploads/submissions/' . $submission->file) }}" target="_blank">
                                                                        {{ $submission->created_at->format('Y-m-d H:i') }} - {{ basename($submission->file) }}
                                                                    </a>
                                                                    @if($submission->notes)
                                                                        <br><span class="text-muted ms-2">{{ Str::limit($submission->notes, 50) }}</span>
                                                                    @endif
                                                                </small>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            {{-- Submission Modal --}}
                                            <!-- @if($assignment->allow_submission && $canSubmit)
                                                <div class="modal fade" id="submitModal-{{ $assignment->id }}" tabindex="-1" aria-labelledby="submitModalLabel-{{ $assignment->id }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="submitModalLabel-{{ $assignment->id }}">Submit Assignment: {{ $assignment->title }}</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ route('student.assignment.submit', $assignment) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="file-{{ $assignment->id }}" class="form-label">Assignment File <span class="text-danger">*</span></label>
                                                                        <input type="file" class="form-control" id="file-{{ $assignment->id }}" name="file" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="notes-{{ $assignment->id }}" class="form-label">Notes (Optional)</label>
                                                                        <textarea class="form-control" id="notes-{{ $assignment->id }}" name="notes" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Submit Assignment</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif -->
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
