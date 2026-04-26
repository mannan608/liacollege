@extends('frontend.layouts.app')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">{{ $category->name ?? 'Category Details' }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <div class="container mt-5">
        <section">
            {!! $category->description !!}
        </section>
    </div>


    <div class="container">
        <section class="categories-top bg-light border">
            <img src="{{ asset('uploads/categories/' . $category->banner) }}" alt="img" class="d-none d-lg-flex course-bg2">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12">
                    <div class="caetgory-form">
                        <h2 class="mb-2">Browse by Categories</h2>
                        <form class="position-relative">
                            <input class="form-control" type="text"
                                placeholder="Search School, Online educational centres, etc">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Course -->
    <section class="course-category-three">
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{ url('course',$course->id) }}">
                            <div class="category-item-3">
                                <div class="category-item-3-image">
                                    <img src="{{ asset('uploads/courses/' . $course->banner) }}" class="img-fluid" alt="img">
                                </div>
                                <div class="course-category-3-card-body">
                                    <h6 class="mb-2">{{ $course->title }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{-- <a href="#" target="_blank" class="btn btn-primary">Load More</a> --}}
        </div>
    </section>
    <!-- /Course -->
@endsection