@extends('frontend.layouts.app')
@section('title', 'Student Dashboard')


@section('content')

    <div class="dashboard-container mt-5">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="enroll-courses">
            <h5 class="">Enrolled Courses</h5>
        </div>

        @if ($courses->isNotEmpty())
            @foreach ($courses as $category => $categoryCourses)
                <div class="enroll-courses mb-4">
                    <h6 class="text-muted mb-3">{{ $category }}</h6>
                    <div class="d-flex flex-wrap gap-3">
                        @foreach ($categoryCourses as $course)
                            <a href="#course-{{ $course->id }}" class="enroll-course">{{ $course->title }}</a>
                        @endforeach
                    </div>
                </div>

                @foreach ($categoryCourses as $course)
                    <div class="course-details mt-5" id="course-{{ $course->id }}">
                        <h5 class="mb-3">{{ $course->title }}</h5>
                        <div class="d-flex flex-column gap-4">
                            @if ($course->policies->isNotEmpty())
                                <div class="course-content w-50">
                                    <h6 class="m-0">{{ $course->title }} – Policies & Procedures</h6>
                                    <div class="d-flex flex-column gap-3 mt-4">
                                        @foreach ($course->policies as $policy)
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="{{ $policy->url }}" target="_blank">{{ $policy->title }}</a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            @if ($course->assignments->isNotEmpty())
                                <div class="course-content w-50">
                                    <h6 class="m-0">Course Assignment</h6>
                                    <div class="d-flex flex-column gap-4 mt-4">
                                        @foreach ($course->assignments as $assignment)
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="#" class="file-info w-50">
                                                    <span class="pdf-icon">
                                                        <i class="fi fi-tr-file-pdf"></i>
                                                    </span>
                                                    <span class="line-clamp-1">{{ $assignment->title }}</span>
                                                </a>
                                                <div class="d-flex gap-4">
                                                    @if ($assignment->file)
                                                        <a href="{{ asset('uploads/assignments/' . $assignment->file) }}"
                                                            class="download-btn" download>
                                                            <i class="fi fi-rr-download"></i>
                                                            Download
                                                        </a>
                                                    @endif

                                                    @php
                                                        $submission = $assignment->submissions
                                                            ->where('user_id', auth()->user()->id)
                                                            ->first();
                                                    @endphp

                                                    <button type="button" class="download-btn  {{ $submission ? 'submitted-btn' : '' }} "
                                                        onclick="showUploadForm({{ $assignment->id }})">

                                                        <i class="fi fi-rr-upload"></i>

                                                        {{ $submission ? 'Submitted' : 'Submit' }}
                                                    </button>
                                                </div>
                                            </div>

                                            <div id="upload-form-{{ $assignment->id }}" class="show-upload-form"
                                                style="display:none;">

                                                @include('frontend.student.submit-assignment')

                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            @if ($course->materials->isNotEmpty())
                                <div class="course-content w-50">
                                    <h6 class="m-0">Course Study Materials</h6>
                                    <div class="d-flex flex-column gap-4 mt-4">
                                        @foreach ($course->materials as $material)
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="#" class="line-clamp-1 w-50">{{ $material->title }}</a>
                                                @if ($material->file)
                                                    <div class="d-flex gap-4">
                                                        <a href="{{ asset('uploads/materials/' . $material->file) }}"
                                                            class="download-btn" download>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {

        document.querySelectorAll(
            '.assignment-upload-card'
        ).forEach(function(card) {

            const fileInput =
                card.querySelector('.fileInput');

            const chooseBtn =
                card.querySelector('.chooseFileBtn');

            const previewBox =
                card.querySelector('.previewBox');

            const previewName =
                card.querySelector('.previewName');

            const previewSize =
                card.querySelector('.previewSize');

            const previewIcon =
                card.querySelector('.previewIcon');

            const removeFile =
                card.querySelector('.removeFile');

            chooseBtn.addEventListener(
                'click',
                function() {

                    fileInput.click();

                }
            );

            fileInput.addEventListener(
                'change',
                function() {

                    if (!this.files.length) {

                        previewBox.classList.add(
                            'd-none'
                        );

                        return;
                    }

                    const file =
                        this.files[0];

                    if (file.size > 10485760) {

                        alert(
                            'Maximum file size is 10MB'
                        );

                        this.value = '';

                        return;
                    }

                    previewName.textContent =
                        file.name;

                    previewSize.textContent =
                        (
                            file.size /
                            1024 /
                            1024
                        ).toFixed(2) +
                        ' MB';

                    const ext =
                        file.name
                        .split('.')
                        .pop()
                        .toLowerCase();

                    if (ext === 'pdf') {

                        previewIcon.className =
                            'previewIcon fas fa-file-pdf';

                    } else {

                        previewIcon.className =
                            'previewIcon fas fa-file-word';

                    }

                    previewBox.classList.remove(
                        'd-none'
                    );
                }
            );

            removeFile.addEventListener(
                'click',
                function() {

                    fileInput.value = '';

                    previewBox.classList.add(
                        'd-none'
                    );
                }
            );

        });

    });
</script>

<script>
    function showUploadForm(id) {

        const form = document.getElementById('upload-form-' + id);
        const isVisible = form.style.display === 'block';

        document.querySelectorAll('.show-upload-form').forEach(function(item) {
            item.style.display = 'none';
        });

        if (!isVisible) {
            form.style.display = 'block';
        }
    }
</script>
