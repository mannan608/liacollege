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
                    <!-- <div class="form-group">
                        <label>Permission Course <span class="login-danger">*</span></label>

                        @php
                        $selectedCourses = old('courses', $student->courses->pluck('id')->toArray());
                        $selectedPolicies = old('course_policies', $student->coursePolicies->pluck('id')->toArray());
                        $selectedAssignments = old('course_assignments', $student->courseAssignments->pluck('id')->toArray());
                        $selectedMaterials = old('course_materials', $student->courseMaterials->pluck('id')->toArray());
                        @endphp

                        <div class="accordion" id="courseAccordion">
                            @foreach ($courses as $course)
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="heading{{ $course->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $course->id }}" aria-expanded="false" aria-controls="collapse{{ $course->id }}">
                                        <label style="display: flex; align-items: center; gap: 8px; margin: 0;" onclick="event.stopPropagation();">
                                            <input type="checkbox" name="courses[]" value="{{ $course->id }}" class="form-check-input course-checkbox"
                                                {{ in_array($course->id, $selectedCourses) ? 'checked' : '' }}
                                                data-course-id="{{ $course->id }}">
                                            <strong>{{ $course->title }}</strong>
                                        </label>
                                    </button>
                                </h2>
                                <div id="collapse{{ $course->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $course->id }}" data-bs-parent="#courseAccordion">
                                    <div class="accordion-body">
                                        @if ($course->policies->count() > 0)
                                        <div class="mb-4">
                                            <h6 class="mb-2">
                                                <label class="d-flex align-items-center gap-2">
                                                    <input type="checkbox" class="form-check-input select-all-policies" data-course-id="{{ $course->id }}">
                                                    Select All Policies
                                                </label>
                                            </h6>
                                            <div class="row">
                                                @foreach ($course->policies as $policy)
                                                <div class="col-md-6">
                                                    <label style="display: flex; align-items: center; gap: 6px;">
                                                        <input type="checkbox" name="course_policies[]" value="{{ $policy->id }}" class="form-check-input policy-checkbox policy-course-{{ $course->id }}"
                                                            {{ in_array($policy->id, $selectedPolicies) ? 'checked' : '' }}>
                                                        {{ $policy->title }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif

                                        @if ($course->assignments->count() > 0)
                                        <div class="mb-4">
                                            <h6 class="mb-2">
                                                <label class="d-flex align-items-center gap-2">
                                                    <input type="checkbox" class="form-check-input select-all-assignments" data-course-id="{{ $course->id }}">
                                                    Select All Assignments
                                                </label>
                                            </h6>
                                            <div class="row">
                                                @foreach ($course->assignments as $assignment)
                                                <div class="col-md-6">
                                                    <label style="display: flex; align-items: center; gap: 6px;">
                                                        <input type="checkbox" name="course_assignments[]" value="{{ $assignment->id }}" class="form-check-input assignment-checkbox assignment-course-{{ $course->id }}"
                                                            {{ in_array($assignment->id, $selectedAssignments) ? 'checked' : '' }}>
                                                        {{ $assignment->title }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif

                                        @if ($course->materials->count() > 0)
                                        <div class="mb-4">
                                            <h6 class="mb-2">
                                                <label class="d-flex align-items-center gap-2">
                                                    <input type="checkbox" class="form-check-input select-all-materials" data-course-id="{{ $course->id }}">
                                                    Select All Materials
                                                </label>
                                            </h6>
                                            <div class="row">
                                                @foreach ($course->materials as $material)
                                                <div class="col-md-6">
                                                    <label style="display: flex; align-items: center; gap: 6px;">
                                                        <input type="checkbox" name="course_materials[]" value="{{ $material->id }}" class="form-check-input material-checkbox material-course-{{ $course->id }}"
                                                            {{ in_array($material->id, $selectedMaterials) ? 'checked' : '' }}>
                                                        {{ $material->title }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="fw-bold fs-5 text-dark mb-4 d-flex align-items-center gap-2">
                            Permission Course
                            <span class="text-danger">*</span>
                        </label>

                        @php
                        $selectedCourses = old('courses', $student->courses->pluck('id')->toArray());
                        $selectedPolicies = old('course_policies', $student->coursePolicies->pluck('id')->toArray());
                        $selectedAssignments = old('course_assignments', $student->courseAssignments->pluck('id')->toArray());
                        $selectedMaterials = old('course_materials', $student->courseMaterials->pluck('id')->toArray());
                        @endphp

                        <div class="accordion" id="courseAccordion">
                            @foreach ($courses as $course)
                            <div class="accordion-item border-0 shadow-sm rounded-4 overflow-hidden mb-3">
                                <h2 class="accordion-header" id="heading{{ $course->id }}">
                                    <button class="accordion-button collapsed px-4 py-4 bg-white border-0 shadow-sm"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $course->id }}"
                                        aria-expanded="false"
                                        aria-controls="collapse{{ $course->id }}">

                                        <div class="d-flex justify-content-between align-items-center w-100 pe-3">
                                            <strong class="">{{ $course->title }}</strong>

                                            <span class="badge bg-light text-dark rounded-pill px-3 py-2">
                                                {{ $course->policies->count() + $course->assignments->count() + $course->materials->count() }}
                                            </span>
                                        </div>
                                    </button>
                                </h2>

                                <div id="collapse{{ $course->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $course->id }}" data-bs-parent="#courseAccordion">
                                    <div class="accordion-body bg-light py-4 px-4">                                  

                                        <!-- Policies -->
                                        @if ($course->policies->count() > 0)
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <h6 class="fw-semibold text-primary mb-0">
                                                    <i class="bi bi-shield-check me-2"></i>Policies
                                                </h6>
                                                <label class="d-flex align-items-center gap-2 cursor-pointer user-select-none">
                                                    <input type="checkbox" class="form-check-input select-all-policies" data-course-id="{{ $course->id }}">
                                                    <small class="fw-medium text-muted">Select All</small>
                                                </label>
                                            </div>
                                            <div class="row g-3">
                                                @foreach ($course->policies as $policy)
                                                <div class="col-md-6">
                                                    <label class="d-flex align-items-center gap-3 bg-white p-3 rounded-3 border hover-border-primary transition-all cursor-pointer">
                                                        <input type="checkbox"
                                                            name="course_policies[]"
                                                            value="{{ $policy->id }}"
                                                            class="form-check-input policy-checkbox policy-course-{{ $course->id }}"
                                                            {{ in_array($policy->id, $selectedPolicies) ? 'checked' : '' }}>
                                                        <span class="small fw-medium">{{ $policy->title }}</span>
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif

                                        <!-- Assignments -->
                                        @if ($course->assignments->count() > 0)
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <h6 class="fw-semibold text-success mb-0">
                                                    <i class="bi bi-clipboard-check me-2"></i>Assignments
                                                </h6>
                                                <label class="d-flex align-items-center gap-2 cursor-pointer user-select-none">
                                                    <input type="checkbox" class="form-check-input select-all-assignments" data-course-id="{{ $course->id }}">
                                                    <small class="fw-medium text-muted">Select All</small>
                                                </label>
                                            </div>
                                            <div class="row g-3">
                                                @foreach ($course->assignments as $assignment)
                                                <div class="col-md-6">
                                                    <label class="d-flex align-items-center gap-3 bg-white p-3 rounded-3 border hover-border-success transition-all cursor-pointer">
                                                        <input type="checkbox"
                                                            name="course_assignments[]"
                                                            value="{{ $assignment->id }}"
                                                            class="form-check-input assignment-checkbox assignment-course-{{ $course->id }}"
                                                            {{ in_array($assignment->id, $selectedAssignments) ? 'checked' : '' }}>
                                                        <span class="small fw-medium">{{ $assignment->title }}</span>
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif

                                        <!-- Materials -->
                                        @if ($course->materials->count() > 0)
                                        <div>
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <h6 class="fw-semibold text-info mb-0">
                                                    <i class="bi bi-book me-2"></i>Materials
                                                </h6>
                                                <label class="d-flex align-items-center gap-2 cursor-pointer user-select-none">
                                                    <input type="checkbox" class="form-check-input select-all-materials" data-course-id="{{ $course->id }}">
                                                    <small class="fw-medium text-muted">Select All</small>
                                                </label>
                                            </div>
                                            <div class="row g-3">
                                                @foreach ($course->materials as $material)
                                                <div class="col-md-6">
                                                    <label class="d-flex align-items-center gap-3 bg-white p-3 rounded-3 border hover-border-info transition-all cursor-pointer">
                                                        <input type="checkbox"
                                                            name="course_materials[]"
                                                            value="{{ $material->id }}"
                                                            class="form-check-input material-checkbox material-course-{{ $course->id }}"
                                                            {{ in_array($material->id, $selectedMaterials) ? 'checked' : '' }}>
                                                        <span class="small fw-medium">{{ $material->title }}</span>
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif

                                    </div>
                                </div>
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

<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all policies
        document.querySelectorAll('.select-all-policies').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var courseId = this.getAttribute('data-course-id');
                var policyCheckboxes = document.querySelectorAll('.policy-course-' + courseId);
                policyCheckboxes.forEach(function(cb) {
                    cb.checked = checkbox.checked;
                });
            });
        });

        // Select all assignments
        document.querySelectorAll('.select-all-assignments').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var courseId = this.getAttribute('data-course-id');
                var assignmentCheckboxes = document.querySelectorAll('.assignment-course-' + courseId);
                assignmentCheckboxes.forEach(function(cb) {
                    cb.checked = checkbox.checked;
                });
            });
        });

        // Select all materials
        document.querySelectorAll('.select-all-materials').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var courseId = this.getAttribute('data-course-id');
                var materialCheckboxes = document.querySelectorAll('.material-course-' + courseId);
                materialCheckboxes.forEach(function(cb) {
                    cb.checked = checkbox.checked;
                });
            });
        });

        // If course is checked, expand the accordion
        document.querySelectorAll('.course-checkbox').forEach(function(checkbox) {
            var courseId = checkbox.getAttribute('data-course-id');
            var collapse = document.getElementById('collapse' + courseId);
            if (checkbox.checked && collapse) {
                collapse.classList.add('show');
            }
        });
    });
</script> -->

<script>
    document.addEventListener('DOMContentLoaded', function() {

        // ==========================
        // Get Select All Element
        // ==========================
        function getSelectAllElement(courseId, type) {

            const selectors = {
                policy: `.select-all-policies[data-course-id="${courseId}"]`,
                assignment: `.select-all-assignments[data-course-id="${courseId}"]`,
                material: `.select-all-materials[data-course-id="${courseId}"]`
            };

            return document.querySelector(selectors[type]);
        }

        // ==========================
        // Update Section Select All
        // ==========================
        function updateSectionSelectAll(courseId, type) {

            const items = document.querySelectorAll(
                `.${type}-course-${courseId}`
            );

            const selectAll = getSelectAllElement(courseId, type);

            if (!selectAll || items.length === 0) {
                return;
            }

            selectAll.checked = [...items].every(item => item.checked);
        }

        // ==========================
        // Select All Policies
        // ==========================
        document.querySelectorAll('.select-all-policies').forEach(selectAll => {

            selectAll.addEventListener('change', function() {

                const courseId = this.dataset.courseId;

                document.querySelectorAll(
                    `.policy-course-${courseId}`
                ).forEach(item => {
                    item.checked = this.checked;
                });

            });

        });

        // ==========================
        // Select All Assignments
        // ==========================
        document.querySelectorAll('.select-all-assignments').forEach(selectAll => {

            selectAll.addEventListener('change', function() {

                const courseId = this.dataset.courseId;

                document.querySelectorAll(
                    `.assignment-course-${courseId}`
                ).forEach(item => {
                    item.checked = this.checked;
                });

            });

        });

        // ==========================
        // Select All Materials
        // ==========================
        document.querySelectorAll('.select-all-materials').forEach(selectAll => {

            selectAll.addEventListener('change', function() {

                const courseId = this.dataset.courseId;

                document.querySelectorAll(
                    `.material-course-${courseId}`
                ).forEach(item => {
                    item.checked = this.checked;
                });

            });

        });

        // ==========================
        // Individual Item Change
        // ==========================
        document.querySelectorAll(
            '.policy-checkbox, .assignment-checkbox, .material-checkbox'
        ).forEach(item => {

            item.addEventListener('change', function() {

                let courseId = null;
                let type = null;

                this.classList.forEach(cls => {

                    if (cls.startsWith('policy-course-')) {
                        courseId = cls.replace('policy-course-', '');
                        type = 'policy';
                    }

                    if (cls.startsWith('assignment-course-')) {
                        courseId = cls.replace('assignment-course-', '');
                        type = 'assignment';
                    }

                    if (cls.startsWith('material-course-')) {
                        courseId = cls.replace('material-course-', '');
                        type = 'material';
                    }

                });

                if (!courseId || !type) {
                    return;
                }

                updateSectionSelectAll(courseId, type);

            });

        });

        // ==========================
        // Initial Load State
        // ==========================
        document.querySelectorAll('.accordion-collapse').forEach(collapse => {

            const courseId = collapse.id.replace('collapse', '');

            updateSectionSelectAll(courseId, 'policy');
            updateSectionSelectAll(courseId, 'assignment');
            updateSectionSelectAll(courseId, 'material');

            // Open accordion if any item selected
            const checkedItems = collapse.querySelectorAll(
                '.policy-checkbox:checked, .assignment-checkbox:checked, .material-checkbox:checked'
            );

            if (checkedItems.length > 0) {
                collapse.classList.add('show');
            }

        });

    });
</script>