@extends('frontend.layouts.app')
@section('title', 'Student Dashboard')


@section('content')

    <div class="dashboard-container mt-5">

        <div class="enroll-courses">
            <h5 class="">Enrolled Courses</h5>
        </div>

        <div class="enroll-courses">
            <div class="d-flex gap-5">
                <a href="#" class="enroll-course">Assessment Planning</a>
                <a href="#" class="enroll-course">Human resources</a>
                <a href="#" class="enroll-course">Dignity and Choice</a>
            </div>
        </div>

        <div class="course-details mt-5">
            <h5 class="mb-3">AP - Assessment Planning</h5>
            <div class="d-flex flex-column gap-4">
                <div class="course-content w-50">
                    <h6 class="m-0">AP – Policies & Procedures</h6>
                    <div class="d-flex flex-column gap-3 mt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="">AP5 – Management of Falls Policy and Procedure</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="">AP4 – Individualised Plans Policy and Procedure</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="">AP3 – Reporting and Recording Behaviour Policy and
                                Procedure</a>
                        </div>
                    </div>
                </div>
                <div class="course-content w-50">
                    <h6 class="m-0">Course Assignment</h6>
                    <div class="d-flex flex-column gap-4 mt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="file-info w-50 ">
                                <span class="pdf-icon">
                                    <i class="fi fi-tr-file-pdf"></i>
                                </span>
                                <span class="line-clamp-1"> AP T4 - Falls Risk Assessment Tool</span>
                            </a>
                            <div class="d-flex gap-4">
                                <a href="#" class="download-btn">
                                    <i class="fi fi-rr-download"></i>
                                    Download
                                </a>
                                <a href="#" class="download-btn">
                                    <i class="fi fi-rr-upload"></i>
                                    Upload
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="file-info w-50">
                                <span class="pdf-icon">
                                    <i class="fi fi-tr-file-pdf"></i>
                                </span>
                                <span class="line-clamp-1">AP T4 - Falls Risk Assessment Tool</span>
                            </a>
                            <div class="d-flex gap-4">
                                <a href="#" class="download-btn">
                                    <i class="fi fi-rr-download"></i>
                                    Download
                                </a>
                                <a href="#" class="download-btn">
                                    <i class="fi fi-rr-upload"></i>
                                    Upload
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-content w-50">
                    <h6 class="m-0">Course Study Materials</h6>
                    <div class="d-flex flex-column gap-4 mt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="line-clamp-1 w-50">AP SD8 - Individual Care Plan - Faith Holden</a>
                            <div class="d-flex gap-4">
                                <a href="#" class="download-btn">
                                    <i class="fi fi-rr-download"></i>
                                    Download
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="line-clamp-1 w-50">AP SD7 - Pain and Symptom Management Plan</a>
                            <div class="d-flex gap-4">
                                <a href="#" class="download-btn">
                                    <i class="fi fi-rr-download"></i>
                                    Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
