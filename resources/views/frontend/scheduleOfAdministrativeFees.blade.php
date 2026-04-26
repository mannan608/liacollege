@extends('frontend.layouts.app')

@section('title', 'Schedule of Administrative Fees')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-bar text-center py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold mb-2">Schedule of Administrative Fees</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Schedule of Administrative Fees</li>
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
                    <table>
                        <tbody>
                            <tr>
                                <td><strong>Fee Type</strong></td>
                                <td><strong>Fee Amount</strong></td>
                            </tr>
                            <tr>
                                <td>Enrolment Fee </td>
                                <td>$100</td>
                            </tr>
                            <tr>
                                <td>Cancellation Fee</td>
                                <td>$150</td>
                            </tr>
                            <tr>
                                <td>Installment fee </td>
                                <td>$100</td>
                            </tr>
                            <tr>
                                <td><strong>No show fees</strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Practical Classes no show</td>
                                <td>$20 each class no show</td>
                            </tr>
                            <tr>
                                <td>Placement orientation no show</td>
                                <td>$50</td>
                            </tr>
                            <tr>
                                <td>Placement facility no show</td>
                                <td>$100</td>
                            </tr>
                            <tr>
                                <td>Placement re-organising fee</td>
                                <td>$250</td>
                            </tr>
                            <tr>
                                <td><strong>3-month course extension fee </strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>– First two extensions</td>
                                <td>$100 each</td>
                            </tr>
                            <tr>
                                <td>– Third and fourth extension</td>
                                <td>$200 each</td>
                            </tr>
                            <tr>
                                <td>Replacement Qualification </td>
                                <td>$50</td>
                            </tr>
                            <tr>
                                <td>RPL Application Fee </td>
                                <td>$400</td>
                            </tr>
                            <tr>
                                <td>RPL Assessment per unit (up to maximum course fee) </td>
                                <td>$200</td>
                            </tr>
                            <tr>
                                <td>Late payment fee </td>
                                <td>2% of instalment amount</td>
                            </tr>
                            <tr>
                                <td>Re-assessment Fees (see re-assessment policy) </td>
                                <td>$100 per unit<br>$299 for a half day one on one assessment</td>
                            </tr>
                            <tr>
                                <td>Full suite of hard copy assessments and learning materials (including replacement
                                    materials) </td>
                                <td>$100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.common.reviews')

@endsection