@extends('frontend.layouts.app')

@section('title', 'Course Payment Policy')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-bar text-center py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold mb-2">Course Payment Policy</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Course Payment Policy</li>
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
                    <ul class="list">
                        <li>All fees are payable at least 1 week in advance and enrollments are considered tentative until payment is received.</li>
                        <li>Sagarmatha College cannot accept prepaid fees from individual clients in excess of a total of $1500. If the student fees are in excess of this amount, then students are required to pay in installments. In such cases not installment fee will be charged.</li>
                        <li>Flexible payment arrangements/ options will accommodate individual circumstances.</li>
                        <li>Fees must be paid in full before certification will be issued</li>
                        <li>Flexible payment arrangements, such as installments, credit card, direct debit, cheques and EFT remittance are acceptable to accommodate the diverse financial situations of clients.</li>
                    </ul>
                    <div class="text-center mb-3"></div>
                    <strong>Paying in Installments</strong>
                    <p>Fees for qualification program may be paid via a payment arrangement in advance.  Students must pay at least 25% up front and an installment fee of $100 will be charged.</p>

                    <p>If payment installment / arrangements are in place, and a payment becomes overdue and remains unpaid for a period in excess of 14 days, Sagarmatha College reserves the right to suspend the clients learning or assessment (or both) until all fee payments are up-to-date.</p>

                    <p>AC may review fees for courses from time to time without notice.</p>

                </div>
            </div>
        </div>
    </section>
    <!-- /FAQ Section -->

    @include('frontend.common.reviews')

@endsection