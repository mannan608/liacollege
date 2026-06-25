@extends('backend.layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="page-sub-header d-flex justify-content-between align-items-center">
                            <span>{{ optional($course)->id ? 'Edit' : 'Add' }} Course</span>
                            <a href="{{ route('course.index') }}">Course List</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <form
                                action="{{ optional($course)->id ? route('course.update', $course->id) : route('course.store') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (optional($course)->id)
                                    @method('PUT')
                                @endif

                                <div class="row w-50">
                                    {{-- Title --}}
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="title" class="form-label fw-semibold">
                                                Course Title <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="title" name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                placeholder="Enter course title..."
                                                value="{{ old('title', $course->title ?? '') }}" required>

                                            @error('title')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-12">
                                        <div class="mb-3">
                                            <label for="section" class="form-label fw-semibold">
                                                Add Course Section <span class="text-danger">*</span>
                                            </label>

                                            <select name="section" id="section" class="form-select">
                                                <option value="">Select Section</option>
                                                <option value="policies">Policies & Procedures</option>
                                                <option value="assignment">Course Assignment</option>
                                                <option value="materials">Course Study Materials</option>
                                            </select>
                                        </div>
                                    </div> --}}

                                    <div class="col-12">

                                        <!-- Policies & Procedures -->
                                        <div class="card shadow-sm border-0 mb-3">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h6 class="mb-0">Policies & Procedures</h6>

                                                <button type="button" class="btn btn-sm btn-primary"
                                                    onclick="addPolicyRow()">
                                                    <i class="fas fa-plus"></i> Add More
                                                </button>
                                            </div>

                                            <div class="card-body">
                                                <div id="policy-wrapper">

                                                    <div class="policy-row border rounded p-3 mb-3">
                                                        <div class="row g-3">

                                                            <div class="col-md-5">
                                                                <label class="form-label">Title</label>
                                                                <input type="text" name="policy_title[]"
                                                                    class="form-control" placeholder="Enter Title">
                                                            </div>

                                                            <div class="col-md-5">
                                                                <label class="form-label">URL</label>
                                                                <input type="url" name="policy_url[]"
                                                                    class="form-control" placeholder="https://example.com">
                                                            </div>

                                                            <div class="col-md-2 d-flex align-items-end">
                                                                <button type="button"
                                                                    class="btn btn-danger w-100 remove-row">
                                                                    Remove
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Assignment -->
                                        {{-- <div class="card shadow-sm border-0 mb-3">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h6 class="mb-0">Course Assignment</h6>

                                                <button type="button" class="btn btn-sm btn-primary"
                                                    onclick="addAssignmentRow()">
                                                    <i class="fas fa-plus"></i> Add More
                                                </button>
                                            </div>

                                            <div class="card-body">
                                                <div id="assignment-wrapper">

                                                    <div class="assignment-row border rounded p-3 mb-3">
                                                        <div class="row g-3">

                                                            <div class="col-md-3">
                                                                <label>Assignment Name</label>
                                                                <input type="text" name="assignment_name[]"
                                                                    class="form-control">
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label>File</label>
                                                                <input type="file" name="assignment_file[]"
                                                                    class="form-control">
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label>Show Submit</label>
                                                                <select name="show_submit[]" class="form-select">
                                                                    <option value="1">Yes</option>
                                                                    <option value="0">No</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label>Submission Limit</label>
                                                                <select name="submission_limit[]" class="form-select">
                                                                    <option value="1">One Time</option>
                                                                    <option value="999">Multiple</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-2 d-flex align-items-end">
                                                                <button type="button"
                                                                    class="btn btn-danger w-100 remove-row">
                                                                    Remove
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="card border-0 shadow-sm rounded-4">
    <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
        <div>
            <h5 class="mb-0 fw-bold">📚 Course Assignments</h5>
            <small class="text-muted">Upload assignments for this course</small>
        </div>

        <button type="button" class="btn btn-primary rounded-pill px-4"
            onclick="addAssignmentRow()">
            <i class="fas fa-plus me-1"></i> Add Assignment
        </button>
    </div>

    <div class="card-body">
        <div id="assignment-wrapper">

            <div class="assignment-row border rounded-4 p-4 mb-4 bg-light">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0 fw-semibold">
                        <i class="fas fa-file-alt text-primary me-2"></i>
                        Assignment
                    </h6>

                    <button type="button"
                        class="btn btn-sm btn-outline-danger remove-row">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>

                <div class="row g-3">

                    <div class="col-lg-6">
                        <label class="form-label fw-semibold">
                            Assignment Name
                        </label>
                        <input type="text"
                            name="assignment_name[]"
                            class="form-control"
                            placeholder="Enter assignment title">
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label fw-semibold">
                            Upload File
                        </label>
                        <input type="file"
                            name="assignment_file[]"
                            class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Allow Student Submission
                        </label>
                        <select name="show_submit[]" class="form-select">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Submission Limit
                        </label>
                        <select name="submission_limit[]" class="form-select">
                            <option value="1">One Time</option>
                            <option value="999">Unlimited</option>
                        </select>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

                                        <!-- Study Materials -->
                                        <div class="card shadow-sm border-0 mb-3">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h6 class="mb-0">Study Materials</h6>

                                                <button type="button" class="btn btn-sm btn-primary"
                                                    onclick="addMaterialRow()">
                                                    <i class="fas fa-plus"></i> Add More
                                                </button>
                                            </div>

                                            <div class="card-body">
                                                <div id="material-wrapper">

                                                    <div class="material-row border rounded p-3 mb-3">
                                                        <div class="row g-3">

                                                            <div class="col-md-5">
                                                                <label>Material Name</label>
                                                                <input type="text" name="material_name[]"
                                                                    class="form-control">
                                                            </div>

                                                            <div class="col-md-5">
                                                                <label>File</label>
                                                                <input type="file" name="material_file[]"
                                                                    class="form-control">
                                                            </div>

                                                            <div class="col-md-2 d-flex align-items-end">
                                                                <button type="button"
                                                                    class="btn btn-danger w-100 remove-row">
                                                                    Remove
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Actions --}}
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <a href="{{ route('course.index') }}"
                                                class="btn btn-secondary me-2">Cancel</a>
                                            <button type="submit" class="btn btn-primary">
                                                {{-- {{ optional($course)->id ? 'Update' : 'Create' }} --}}
                                                {{ isset($course) ? 'Update' : 'Create' }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="bg-red-100 p-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    {{-- Course Material Preview --}}
    {{-- Banner Preview --}}
    <script>
        function previewBanner(event) {
            const img = document.getElementById('banner-preview');
            img.src = URL.createObjectURL(event.target.files[0]);
            img.style.display = 'block';
        }
    </script>

    <script>
        function addPolicyRow() {

            let html = `
    <div class="policy-row border rounded p-3 mb-3">
        <div class="row g-3">
            <div class="col-md-5">
                <input type="text"
                    name="policy_title[]"
                    class="form-control"
                    placeholder="Enter Title">
            </div>

            <div class="col-md-5">
                <input type="url"
                    name="policy_url[]"
                    class="form-control"
                    placeholder="https://example.com">
            </div>

            <div class="col-md-2">
                <button type="button"
                    class="btn btn-danger w-100 remove-row">
                    Remove
                </button>
            </div>
        </div>
    </div>`;

            document
                .getElementById('policy-wrapper')
                .insertAdjacentHTML('beforeend', html);
        }

     function addAssignmentRow() {

    let html = `
    <div class="assignment-row border rounded-4 p-4 mb-4 bg-light">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h6 class="mb-0 fw-semibold">
                <i class="fas fa-file-alt text-primary me-2"></i>
                Assignment
            </h6>

            <button type="button"
                class="btn btn-sm btn-outline-danger remove-row">
                <i class="fas fa-trash"></i>
            </button>
        </div>

        <div class="row g-3">

            <div class="col-lg-6">
                <label class="form-label fw-semibold">
                    Assignment Name
                </label>

                <input type="text"
                    name="assignment_name[]"
                    class="form-control"
                    placeholder="Enter assignment title">
            </div>

            <div class="col-lg-6">
                <label class="form-label fw-semibold">
                    Upload File
                </label>

                <input type="file"
                    name="assignment_file[]"
                    class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label fw-semibold">
                    Allow Student Submission
                </label>

                <select name="show_submit[]" class="form-select">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-semibold">
                    Submission Limit
                </label>

                <select name="submission_limit[]" class="form-select">
                    <option value="1">One Time</option>
                    <option value="999">Unlimited</option>
                </select>
            </div>

        </div>

    </div>`;

    document
        .getElementById('assignment-wrapper')
        .insertAdjacentHTML('beforeend', html);
}

        function addMaterialRow() {

            let html = `
    <div class="material-row border rounded p-3 mb-3">
        <div class="row g-3">

            <div class="col-md-5">
                <input type="text"
                    name="material_name[]"
                    class="form-control"
                    placeholder="Material Name">
            </div>

            <div class="col-md-5">
                <input type="file"
                    name="material_file[]"
                    class="form-control">
            </div>

            <div class="col-md-2">
                <button type="button"
                    class="btn btn-danger w-100 remove-row">
                    Remove
                </button>
            </div>

        </div>
    </div>`;

            document
                .getElementById('material-wrapper')
                .insertAdjacentHTML('beforeend', html);
        }

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-row')) {
                e.target.closest('.border').remove();
            }
        });
    </script>
@endsection
