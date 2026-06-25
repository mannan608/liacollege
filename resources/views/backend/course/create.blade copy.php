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

                                <div class="row">
                                    {{-- Title --}}
                                    <div class="col-md-6">
                                        <div class="form-group local-forms">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Course Title"
                                                value="{{ old('title', $course->title ?? '') }}" required>
                                        </div>
                                    </div>

                                    {{-- Banner --}}
                                    <div class="col-md-4">
                                        <div class="form-group local-forms">
                                            <label>Banner</label>
                                            <input type="file" name="banner" class="form-control" accept="image/*"
                                                onchange="previewBanner(event)">

                                            <div class="mt-2">
                                                <img id="banner-preview"
                                                    src="{{ optional($course)->banner ? asset('uploads/courses/' . $course->banner) : '' }}"
                                                    class="img-thumbnail" width="150"
                                                    style="{{ optional($course)->banner ? '' : 'display:none;' }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group local-forms">
                                            <label>Course Material</label>
                                            <input type="file" name="course_material"
                                                class="form-control @error('course_material') is-invalid @enderror"
                                                accept=".pdf,.doc,.docx,.ppt,.pptx,.zip">

                                            @error('course_material')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Description --}}
                                    <div class="col-md-12">
                                        <div class="form-group local-forms">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" id="my-editor" required>{{ old('description', $course->description ?? '') }}</textarea>
                                        </div>
                                    </div>

                                    {{-- Actions --}}
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <a href="{{ route('course.index') }}" class="btn btn-secondary me-2">Cancel</a>
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
@endsection
