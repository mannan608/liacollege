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

                            <form method="POST" enctype="multipart/form-data"
                                action="{{ isset($course) ? route('courses.update', $course->id) : route('courses.store') }}">

                                @csrf

                                @if (isset($course))
                                    @method('PUT')
                                @endif

                                <input type="text" name="name" value="{{ $course->name ?? old('name') }}"
                                    placeholder="Course Name">

                                <select name="category_id">
                                    @foreach ($categories as $id => $name)
                                        <option value="{{ $id }}"
                                            {{ isset($course) && $course->category_id == $id ? 'selected' : '' }}>
                                            {{ $name }}
                                        </option>
                                    @endforeach
                                </select>

                                <input type="file" name="image">
                                @if (isset($course) && $course->image)
                                    <img src="{{ asset('storage/' . $course->image) }}" width="80">
                                @endif

                                <input type="file" name="pdf">

                                <button type="submit">
                                    {{ isset($course) ? 'Update' : 'Create' }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
