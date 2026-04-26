@extends('frontend.layouts.app')

@section('title', 'Learning Resources Policy')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-bar text-center py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold mb-2">Learning Resources Policy</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Learning Resources Policy</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- /Breadcrumb -->

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p>Sagarmatha College provides students with digital access to all of learning and assessment resources that they need to complete the course. In the event that a student requires hard copies of these resources the student will be required to pay $100 for a printed set of all the learning and assessment resources.</p>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.common.reviews')

@endsection