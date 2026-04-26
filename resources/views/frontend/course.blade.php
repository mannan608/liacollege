@extends('frontend.layouts.app')
@section('title', 'Course List')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Course List</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
    <!-- Course -->
    <section class="course-content">
        <div class="container">
            <div class="row align-items-baseline">
                <div class="col-lg-3 theiaStickySidebar">
                    <div class="filter-clear">
                        <div class="clear-filter mb-4 pb-lg-2 d-flex align-items-center justify-content-between">
                            <h5><i class="feather-filter me-2"></i>Filters</h5>
                            <a href="javascript:void(0);" class="clear-text">
                                Clear
                            </a>
                        </div>

                        <div class="accordion accordion-customicon1 accordions-items-seperate">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon1One">
                                    <a href="#" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon1One" aria-expanded="false"
                                        aria-controls="collapsecustomicon1One">
                                        Categories <i class="fas fa-solid fa-chevron-down"></i>
                                    </a>
                                </h2>
                                <div id="collapsecustomicon1One" class="accordion-collapse collapse show"
                                    aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example"
                                    style="">
                                    <div class="accordion-body">
                                        @foreach($categories as $category)
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span>{{ $category->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9">

                    <!-- Filter -->
                    <div class="showing-list mb-4">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="show-result text-center text-lg-start">
                                    <h6 class="fw-medium">Showing 1-9 of 50 results</h6>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="show-filter add-course-info">
                                    <form action="#">
                                        <div class="d-sm-flex justify-content-center justify-content-lg-end mb-1 mb-lg-0">
                                            <select class="form-select">
                                                <option>Newly Published </option>
                                                <option>Trending Courses</option>
                                                <option>Top Rated</option>
                                                <option>Free Courses</option>
                                            </select>
                                            <div class=" search-group">
                                                <i class="isax isax-search-normal-1"></i>
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Filter -->

                    <div class="row">
                        @foreach($courses as $course)
                            <div class="col-xl-4 col-md-6">
                                <div class="course-item-two course-item mx-0">
                                    <div class="course-img">
                                        <a href="{{ url('course',$course->id) }}">
                                            <img src="{{ asset('uploads/courses/' . $course->banner) }}" alt="img"
                                                class="img-fluid">
                                        </a>
                                        <div
                                            class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <div class="badge text-bg-danger">15% off</div>
                                            <a href="javascript:void(0);" class="fav-icon ms-auto"><i
                                                    class="isax isax-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <a href="instructor-details.html" class="avatar avatar-sm">
                                                    <img src="{{ asset('assets/img/avatar.png') }}" alt="img"
                                                        class="img-fluid avatar avatar-sm rounded-circle">
                                                </a>
                                                <div class="ms-2">
                                                    <a href="instructor-details.html" class="link-default fs-14">Brenda
                                                        Slaton</a>
                                                </div>
                                            </div>
                                            <span
                                                class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                                Design
                                            </span>
                                        </div>
                                        <h6 class="title mb-2"><a href="{{ url('course',$course->id) }}">{{ $course->title }}</a></h6>
                                        <p class="d-flex align-items-center mb-3"><i
                                                class="fa-solid fa-star text-warning me-2"></i>4.9 (200 Reviews)</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-secondary mb-0">$120</h5>
                                            <a href="{{ url('course',$course->id) }}"
                                                class="btn btn-dark btn-sm d-inline-flex align-items-center">View
                                                Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- /pagination -->
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <p class="pagination-text">Page 1 of 2</p>
                        </div>
                        <div class="col-md-10">
                            <ul class="pagination lms-page justify-content-center justify-content-md-end mt-2 mt-md-0">
                                <li class="page-item prev">
                                    <a class="page-link" href="javascript:void(0)" tabindex="-1"><i
                                            class="fas fa-angle-left"></i></a>
                                </li>
                                <li class="page-item first-page active">
                                    <a class="page-link" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item next">
                                    <a class="page-link" href="javascript:void(0)"><i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /pagination -->

                </div>
            </div>
        </div>
    </section>
    @include('frontend.common.reviews')
@endsection
@push('scripts')
    <script src="{{ asset('frontend/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/plugins/ion-rangeslider/js/custom-rangeslider.js') }}" type="text/javascript"></script>
@endpush