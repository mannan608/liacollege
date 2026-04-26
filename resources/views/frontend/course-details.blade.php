@extends('frontend.layouts.app')
@section('content')
    <!-- banner -->
    <section class="inner-banner"
        style="background-image: url('{{ asset('uploads/courses/' . ($course->banner ?? 'default.jpg')) }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="text-white mb-3 mb-sm-2 pb-5">{{ optional($course)->title }}</h1>
                    {{-- <p class="text-white fs-14 mb-3">Learn Web Development by building 25 websites and mobile apps using
                        HTML, CSS, Javascript, PHP, Python</p> --}}
                    <div
                        class="d-flex align-items-center gap-2 gap-sm-3 gap-xl-4 flex-wrap justify-content-md-start justify-content-center">
                        <div class="d-flex mt-sm-0 mt-2 align-items-center justify-content-sm-start justify-content-center">
                            <i class="isax isax-star text-warning me-1"></i>
                            <i class="isax isax-star text-warning me-1"></i>
                            <i class="isax isax-star text-warning me-1"></i>
                            <i class="isax isax-star text-warning me-1"></i>
                            <i class="isax isax-star text-white me-1"></i>
                            <p class="text-white fs-14"><span class="text-warning">4.0</span> (15) </p>
                        </div>
                        <p class="fw-medium text-white d-flex align-items-center mb-0"><img class="me-2"
                                src="https://dreamslms.dreamstechnologies.com/laravel/template/public/./build/img/icons/people.svg"
                                alt="img">32 students enrolled</p>
                        <span class="badge badge-sm rounded-pill bg-success fs-12">{{ $categoryById[$course->category_id] ?? '' }}</span>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-sm-between mt-5">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner -->
    <!-- Course detail -->
    <section class="course-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-page-content">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="subs-title mb-3">Overview</h5>
                                {!! $course->description ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course-sidebar-sec">
                        <div class="card">
                            <div class="card-body">
                                <div class="position-relative mb-4">
                                        <img class="img-fluid"
                                            src="{{ asset('uploads/courses/' . $course->banner) }}"
                                            alt="img">
                                </div>
                                <a href="{{ url('application') }}" class="btn btn-primary w-100 mt-4 btn-enroll">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Course detail -->
@endsection