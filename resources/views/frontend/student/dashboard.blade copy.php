@extends('frontend.layouts.app')
@section('title', 'Student Dashboard')
<style>
    .card {
        border-radius: 8px;
        padding: 10px 14px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    .course-section{
        border-radius: 8px;
        padding: 20px;
        background-color: #f8f9fa;
    }
</style>

@section('content')

    <!-- about university -->
    <section class="mt-5">
        <div class="container">
            <div class="section-category row">
                <div class="col-xl-6 col-12">
                    <div class="card" style="border-radius: 8px;padding: 10px 14px;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex gap-4">
                                    <div style="font-size: 34px; color: #007bff;">
                                        <i class="fi fi-rr-paper-plane"></i>
                                    </div>
                                    <div class="media-body d-flex flex-column gap-1">
                                        <h6 class="m-0">Assessment Planning</h6>
                                        <span style="font-size: 12px">Jump to section</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="card" style="border-radius: 8px;padding: 10px 14px;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex gap-4">
                                    <div style="font-size: 34px; color: #007bff;">
                                        <i class="fi fi-rs-employees"></i>
                                    </div>
                                    <div class="media-body d-flex flex-column gap-1">
                                        <h6 class="m-0">Assessment Planning</h6>
                                        <span style="font-size: 12px">Jump to section</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="course-section">
                <div class="title mb-3">
                    <h4 class="mb-0">Assessment Planning</h4>
                </div>
            {{-- show category of courses --}}
            <div class="row">
                <div class="col-xl-6 col-12">
                    <div class="card" style="border-radius: 8px;padding: 10px 14px;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex flex-column gap-1">
                                    <a href="#">AS-Assessment Planning</a>
                                   <a href="#">Documents</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="card" style="border-radius: 8px;padding: 10px 14px;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex flex-column gap-1">
                                    <a href="#">AS-Assessment Planning</a>
                                   <a href="#">Documents</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
            </div>
        </div>
    </section>


@endsection
