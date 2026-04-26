@extends('frontend.layouts.app')

@section('title', 'Reassessment Policy')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-bar text-center py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold mb-2">Reassessment Policy</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Reassessment Policy</li>
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
                    <p>All students will have the option to be reassessed once without any further charges being occurred.</p>
                    <p>Sagarmatha College will provide the student the option of attending an additional training session on campus prior to being reassessed.</p>
                    <p>All re-assessments that require to be conducted in the workplace must be completed before the end of work placement. Sagarmatha College will reschedule all training sessions and reassessments prior to the students work placement concluding. If the student is unable to complete their training session or assessments in this time, the student will be responsible for ensuring access to a work placement facility to be reassessed at a date that suits them.</p>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.common.reviews')

@endsection