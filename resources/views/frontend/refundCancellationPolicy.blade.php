@extends('frontend.layouts.app')

@section('title', 'Refund / Cancellation Policy')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-bar text-center py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold mb-2">Refund / Cancellation Policy</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Refund / Cancellation Policy</li>
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

                        <p>All notifications of cancellations must be received in writing via the Sagarmatha College email
                            address <a href="mailto:info@sagarmathacollege.edu.au"
                                class="rank-math-link">info@sagarmathacollege.edu.au</a>.</p>



                        <p>If a refund of the course fees is required, notification of this should be included within the
                            cancellation email so that a refund request form can be sent.</p>



                        <h4 class="mt-2 mb-2">Cancellation</h4>



                        <p><strong>If sagarmatha College cancels the course</strong>:</p>



                        <ul class="list">
                            <li>Students will be eligible for a full refund if Sagarmatha College cancels the course</li>



                            <li>Student will not be required to request the refund; Sagarmatha College will process the refund
                                automatically after receiving students bank account details</li>



                            <li>If the student is withdrawn from a course by Sagarmatha College due to inappropriate behavior,
                                they will not be entitled to a refund. These withdrawals must be done within the guidelines
                                as outlined in the Student Conduct Policy</li>
                        </ul>



                        <h4 class="mt-2 mb-2">Refund</h4>



                        <p>Sagarmatha College offers a 5-day cooling-off period during which you can request a refund if you
                            decide not to continue with your course.</p>



                        <p><strong>Refund Period:</strong></p>



                        <ul class="list">
                            <li>The Refund Period is 5 calendar days from the date you enrolled and accepted the terms and
                                conditions.</li>



                            <li>If you wish to cancel your enrolment within this period, you must submit a written request
                                to the Sagarmatha College email address.&nbsp;<a href="mailto:info@sagarmathacollege.edu.au"
                                    target="_blank" rel="noreferrer noopener">info@sagarmathacollege.edu.au</a>.</li>
                        </ul>



                        <p><strong>Eligibility for Refund:</strong></p>



                        <ul class="list">
                            <li>To qualify for a refund, you must submit a written request to cancel your enrolment and send
                                it to the Sagarmatha College email address.&nbsp;<a href="mailto:info@sagarmathacollege.edu.au"
                                    target="_blank" rel="noreferrer noopener">info@sagarmathacollege.edu.au</a>.</li>



                            <li>If eligible a refund will be issued, minus a $100 enrollment fee and a $150 cancellation
                                fee, if the request is made within the specified time frame.</li>



                            <li>Cancellations made after the 5-day Refund Period will not be eligible for a refund.</li>
                        </ul>



                        <p><strong>Payment Obligations:</strong></p>



                        <ul class="list">
                            <li>If you have set up a payment plan, you are still responsible for paying any remaining
                                balance, even if you cancel the course.</li>



                            <li>Sagarmatha College may take legal action to recover any outstanding fees if necessary.</li>
                        </ul>



                        <p><strong>Refund Processing:</strong></p>



                        <ul class="list">
                            <li>Refunds will be issued to the original payer and will be processed within four weeks of
                                receiving the request (if eligible).</li>
                        </ul>



                        <h4 class="mt-2 mb-2"><strong>Special Circumstances</strong>:</h4>



                        <p>Sagarmatha College does not accept responsibility for changes to a student’s work commitments or
                            personal circumstances. The following situations are not considered special circumstances</p>



                        <ul class="list">
                            <li>Change in work hours</li>



                            <li>Inconvenience of travel or travel issues</li>



                            <li>Family commitments</li>
                        </ul>



                        <p>Sagarmatha College will consider refunds for special circumstances in the following situations</p>



                        <ul class="list">
                            <li>Serious misadventure</li>



                            <li>Serious Illness</li>



                            <li>Serious Illness of an immediate family member</li>
                        </ul>



                        <p>For students to be considered for a refund for special circumstances, the student will be
                            required to provide evidence of the special circumstances occurring.</p>



                        <p><strong>Course Extensions</strong>:</p>



                        <ul class="list">
                            <li>Students must complete the course within the due date. Students who are unable to complete
                                the course within the due date may seek a 3-month extension per application, with a maximum
                                of four applications allowed. The course extension fee is $100.00 per application for the
                                first two extensions and $200.00 per application for the rest two extensions.</li>



                            <li>The request for the extension should be made before the expiry of the enrolment. If the
                                student has not approached for the extension before the due date, the enrolled course will
                                be automatically cancelled after the due date. The college will not be responsible for
                                enrolment or any refund. The student must re-enroll with a full course fee if they want to
                                continue the course.</li>
                        </ul>



                        <p><strong>Course Commencement dates</strong>:</p>



                        <ul class="list">
                            <li>Commencement date for a blended mode (Sydney-based) learning is the date ‘course offer
                                intake’ is started. The student mentions the commencement date in the enrolment form, or
                                during the online application.</li>



                            <li>For the distance, the commencement of the courses is the date the student enrolled in the
                                course, or the date mentioned by the student in the enrolment form when they apply.</li>



                            <li>Commencement for online students is the date that online access is provided to an individual
                                student for a particular course.</li>



                            <li>Commencement date for a classroom-based learning mode is the first day of the course.</li>



                            <li>Student must nominate the start date of the course in the enrolment form.</li>
                        </ul>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.common.reviews')

@endsection