@extends('frontend.layouts.app')

@section('title', 'Enrolment')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-bar text-center py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold mb-2">Enrolment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Enrolment</li>
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

                    <p>Thank you for your interest in enrolling in Sagarmatha College. This page provides you with
                        information about the enrolment process.</p>



                    <h2 class="my-2" id="formfill">Enrolment</h2>



                    <p>Being a domestic RTO, we do not enrol international students holding a primary student visa. If you
                        hold a student visa, please do not apply to our college. You need to provide evidence that you are
                        not a primary international student, before the confirmation of enrolment to us. For the enrolment,
                        you need to provide one/one IDs from the following two groups:</p>



                        <table>
                            <tbody>
                                <tr>
                                    <td><strong>Group 1: Identification (anyone from the lists)</strong></td>
                                    <td><strong>Group 2: Residency Status (anyone from the lists)</strong></td>
                                </tr>
                                <tr>
                                    <td>• Australian Driving License<br>• Australian Passport<br>• Government Issued Photo
                                        Card<br>• Foreign Passport</td>
                                    <td>• Medicare card<br>• Valid Australian Visa</td>
                                </tr>
                            </tbody>
                        </table>



                    <p>Once you have those two IDs from each group, you can choose any of those three options to enrol to
                        us, based on your preferred and convenient choice of enrolment.</p>



                    <ul class="list">
                        <li><strong>PDF Form Fill and Apply via email</strong></li>



                        <li><strong>Face to Face Enrolment</strong></li>
                    </ul>



                    <hr class="has-css-opacity">



                    <ul class="list">
                        <li><strong>PDF Form Fill and Apply via email: </strong>You can <strong>download</strong> the
                            fillable PDF Enrolment form of the college. You can fill it in any PDF reader or web but need to
                            save it once filled. You need to send the properly filled application form along with two IDs
                            (one from each group as mentioned above) to our email: <a
                                href="mailto:info@Sagarmathacollege.edu.au">info@Sagarmathacollege.edu.au</a>. Once we
                            receive your email, we will verify the details and get back to you by no later than TWO working
                            days.<br><strong>Download PDF Form</strong><br></li>



                        <li><strong>Face to Face enrolment:</strong> You can visit our college at Burwood, fill out the
                            handwritten form and apply for the enrolment. You can bring copies of two IDs either printed or
                            in soft. Also, if you need some assistance in applying or are unable to apply online, you are
                            always welcome to our Burwood office.</li>
                    </ul>



                    <h4 class="my-2">Note:</h4>



                    <p>Based on the enrolled course, student’s competency, work experience, and past qualification, you may
                        need to submit additional documents such as previous academic transcript(s), local job payslip(s),
                        or job letter. You will be advised whether you need to submit other documents.</p>



                    <p>Before proceeding with the enrolment, please make sure you have clear information about the course,
                        enrolment terms, and conditions. You can also read our <strong>Student Handbook</strong>,
                        <strong>Enrolment Terms and Conditions</strong>, <strong>Course Cancellation and Refund
                            Policies</strong>, among others.</p>



                    <p>You are being assessed on language literacy and numeracy (LLN) to determine if you have the required
                        English reading, writing, and numeracy levels, once you are enrolled in the qualification, except
                        for short courses. The LLN test will determine whether you will be required additional support to
                        complete the enrolled course. If the client needs additional support for language, literacy, or
                        numeracy support, they might need to pay additional support fees, as determined in the enrolment
                        condition. The trainer/assessor may ask the client to sit on the interview, either face to face or
                        online, if they wanted to further determine what level and type of support the client may need to
                        complete the applied course.</p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    @include('frontend.common.reviews')

@endsection