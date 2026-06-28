@extends('backend.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="page-sub-header d-flex justify-content-between align-items-center">
                            <a href="{{ route('course.index') }}" class="btn btn-secondary btn-sm">
                                <i class="fas fa-arrow-left"></i> Back to Courses
                            </a>
                            <span>{{ $course->title }} - Assignments</span>
                        </div>
                    </div>
                </div>
            </div>

            @if($course->assignments->isNotEmpty())
                @foreach($course->assignments as $assignment)
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">{{ $assignment->title }}</h6>
                            <span class="badge bg-secondary">
                                {{ $assignment->submissions->count() }} submissions
                            </span>
                        </div>
                        <div class="card-body">
                            @if($assignment->file)
                                <p>
                                    <strong>Assignment File:</strong>
                                    <a href="{{ asset('uploads/assignments/' . $assignment->file) }}" download class="text-primary">
                                        <i class="fas fa-download me-1"></i>{{ basename($assignment->file) }}
                                    </a>
                                </p>
                            @endif

                            <p><strong>Allow Submission:</strong> {{ $assignment->allow_submission ? 'Yes' : 'No' }}</p>
                            <p><strong>Submission Limit:</strong> {{ $assignment->submission_limit == 999 ? 'Unlimited' : $assignment->submission_limit }}</p>

                            @if($assignment->submissions->isNotEmpty())
                                <h6 class="mt-4 mb-3">Submissions</h6>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Student</th>
                                                <th>Submitted At</th>
                                                <th>File</th>
                                                <th>Notes</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($assignment->submissions as $submission)
                                                <tr>
                                                    <td>{{ $submission->user->name ?? 'Unknown' }}</td>
                                                    <td>{{ $submission->created_at->format('Y-m-d H:i') }}</td>
                                                    <td>{{ basename($submission->file) }}</td>
                                                    <td>{{ Str::limit($submission->notes, 50) }}</td>
                                                    <td>
                                                        @if($submission->file)
                                                            <a href="{{ route('submission.download', $submission) }}" class="btn btn-primary btn-sm">
                                                                <i class="fas fa-download"></i> Download
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p class="text-muted">No submissions yet.</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-info">
                    No assignments for this course yet.
                </div>
            @endif
        </div>
    </div>
@endsection