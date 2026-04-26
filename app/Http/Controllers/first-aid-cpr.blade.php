@extends('frontend.layouts.app')

@section('title', 'Work Placement')

@section('content')

    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
        style="background-image: url({{ asset('frontend/images/banner/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="section-title" style="font-weight: bold;">CHC33021<br />Provide First Aid including CPR
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB AREA END -->


    <!-- program content -->
    <div class="rts-program rts-section-padding">
        <div class="container">
            <!-- header section with course title and brief -->
            <div class="rts-program-single-header">
                <div class="row align-items-center g-3">
                    <div class="col-lg-6">
                        <h3 class="rts-section-title">HLTAID011 Provide First Aid (including CPR)</h3>
                    </div>
                    <div class="col-lg-6">
                        <p class="rts-section-description">
                            This unit describes the skills and knowledge required to provide a first aid response to a casualty in line with first aid guidelines determined by the Australian Resuscitation Council (ARC) and other Australian national peak clinical bodies. The unit applies to all persons who may be required to provide a first aid response in a range of situations, including community and workplace settings.
                        </p>
                    </div>
                </div>
            </div>

            <div class="rts-program-description">
                <div class="row sticky-coloum-wrap">
                    <!-- LEFT MAIN CONTENT (8 cols) -->
                    <div class="col-lg-8">
                        <div class="program-description-area" id="curriculum">

                            <!-- big thumb (representative image) -->
                            <div class="program-big-thumb">
                                <img src="{{ asset('frontend/images/course/b1.jpg') }}" alt="first aid training with manikin">
                            </div>

                            <!-- ABOUT THE PROGRAM (description, delivery, duration, entry) -->
                            <div class="program-about">
                                <h4 class="title">About the program</h4>
                                <p>This unit describes the skills and knowledge required to provide a first aid response to a casualty in line with first aid guidelines determined by the Australian Resuscitation Council (ARC) and other Australian national peak clinical bodies. The unit applies to all persons who may be required to provide a first aid response in a range of situations, including community and workplace settings.</p>
                                
                                <!-- delivery mode & duration block (updated) -->
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-circle-check text-primary me-2"></i>Delivery mode & duration</h6>
                                        <p>8 hrs of pre-course online reading, plus the successful completion of a multiple-choice online assessment and 1 day face to face training including practical assessment.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-clock me-2 text-primary"></i>Course duration</h6>
                                        <p>Blended delivery: self-paced online pre-work (approx. 8 hrs) + 1 day face-to-face. Total completion within recommended timeframe.</p>
                                    </div>
                                </div>

                                <!-- entry requirements + pre-requisites -->
                                <div class="mt-3">
                                    <h6>Entry requirements</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Minimum age 14 years (under 18 requires signed parental consent on enrolment)</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Physical ability to kneel on the floor and perform at least 2 minutes of uninterrupted CPR on an adult and infant manikin</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Access to a computer, phone or tablet with internet to complete pre-course online learning and assessment</li>
                                    </ul>
                                    <p class="fst-italic text-secondary mt-2"><strong>Pre-requisites:</strong> There are no pre-requisites to undertake this unit.</p>
                                </div>
                            </div>

                            <!-- COURSE CONTENT (skills & knowledge areas) -->
                            <div class="program-credit-area">
                                <h5 class="title">Course content – skills and knowledge covered</h5>
                                <p class="mb-4">This course will provide participants with skills and knowledge in the following areas:</p>

                                <div class="row row-cols-1 row-cols-md-2 g-2 mb-4">
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Recognise and assess an emergency situation</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Ensure safety for self, bystanders, and casualty</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Assess the casualty and recognise the need for first aid response</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Seek assistance from emergency services</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Perform CPR in accordance with ARC guidelines</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Provide first aid in accordance with established first aid principles</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Display respectful behaviour towards casualty</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Obtain consent from casualty where possible</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Use available resources and equipment to make casualty comfortable</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Operate first aid equipment according to manufacturers’ instructions</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Monitor the casualty’s condition and respond in accordance with first aid principles</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Accurately convey incident details to emergency services</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Report details of incident in line with workplace or site procedures</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Complete applicable workplace documentation, including incident report form</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Maintain privacy and confidentiality in line with statutory/organisational policies</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Recognise possible psychological impacts on self and other rescuers and seek help when required</div>
                                    <div class="col"><i class="fa-regular fa-circle-check text-success me-2"></i>Contribute to a review of the first aid response as required</div>
                                </div>

                                <!-- OUTCOMES block -->
                                <div class="mt-4">
                                    <h6>Outcomes – certification</h6>
                                    <p>Participants who successfully complete this unit will receive a statement of attainment for <strong>HLTAID009 Provide cardiopulmonary resuscitation</strong> and <strong>HLTAID011 Provide First Aid</strong> which is valid for a period of three (3) years from the completion date.</p>
                                    <p>Statements of attainment are issued electronically within 5 business days after successful completion of the training.</p>
                                    <p class="fst-italic">The Australian Resuscitation Council recommends that cardiopulmonary resuscitation skills are refreshed on an annual basis.</p>
                                </div>

                                <!-- Accordion for pre-course learning, target group etc -->
                                <div class="program-accordion mt-4">
                                    <div class="accordion" id="rts-accordion">
                                        <!-- PRE-COURSE LEARNING -->
                                        <div class="accordion-item">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                Pre-course learning & LMS
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p>All pre-course learning material is available online via our LMS. Participants must have access to a computer, phone, tablet etc with internet to complete the pre-course online learning materials and assessment.</p>
                                                    <p>Participants must have completed the pre-course learning materials and assessment before attending the 1-day practical training session. Participants who have not completed the online learning competent will not be issued with a statement of attainment until such time as they have completed the online component.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- TARGET GROUP -->
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                                Target group
                                            </button>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p>This course is designed for:</p>
                                                    <ul>
                                                        <li>Those with existing first aid experience</li>
                                                        <li>Participants who are new to first aid and comfortable learning in a blended delivery setting</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- LEARNER SUPPORT & USI -->
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                                Learner support & USI
                                            </button>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p><i class="fa-regular fa-circle-info me-2"></i> <strong>Learner support:</strong> If you need extra learning support, please indicate when booking your course and detail what kind of additional support you may require.</p>
                                                    <p><strong>Unique Student Identifier (USI):</strong> Every student requires a USI to obtain a certificate or qualification from their RTO when studying a nationally recognised course in Australia. Provide your USI on the enrolment form or in person on the day of the course.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- STUDENT TESTIMONIAL (keeping style, adjusted for first aid) -->
                            <div class="program-student-testimonial rt-relative mt-5">
                                <h5 class="title">Student Testimonials</h5>
                                <div class="single-testimonial-box">
                                    <div class="single-testimonial-active swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-testimonial-item rt-relative">
                                                    <div class="rating-star mb--10">
                                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-light fa-star"></i>
                                                    </div>
                                                    <p class="rt-testimonial-text">"The online pre-work was clear and the face-to-face session was very practical. I feel confident to handle emergencies now."</p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img"><img src="{{ asset('frontend/images/testimonial/author-1.png') }}" alt="author"></div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">Emma Watson</h5>
                                                                <p>Workplace Health & Safety Officer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon"><img src="{{ asset('frontend/images/testimonial/quote.svg') }}" alt="quote"></div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-testimonial-item rt-relative">
                                                    <div class="rating-star mb--10"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                                    <p class="rt-testimonial-text">"Instructor was engaging and the CPR practice on manikins was very realistic. Highly recommend this first aid course."</p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img"><img src="{{ asset('frontend/images/testimonial/author-1.png') }}" alt="author"></div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">Michael Chen</h5>
                                                                <p>Community Support Worker</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon"><img src="{{ asset('frontend/images/testimonial/quote.svg') }}" alt="quote"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SIDEBAR (right col) - updated for First Aid course -->
                    <div class="col-lg-4 sticky-coloum-item">
                        <div class="program-sidebar">
                            <!-- curriculum quick menu (keeping program list but can adapt) -->
                            <div class="program-curriculum">
                                <h6 class="heading-title">Our Programs</h6>
                                @include('frontend.common.programs')
                            </div>

                            <!-- enroll now button (direct to booking) -->
                            <div class="program-event">
                                <div class="program-event-content" style="background: linear-gradient(145deg, #1b4a6b, #18435c);">
                                    <a href="#" class="rts-theme-btn btn-arrow btn-white">Enroll Now <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                </div>
                            </div>

                            <!-- USI & physical requirements note -->
                            <div class="program-info mt-3 p-3 small bg-light-soft">
                                <i class="fa-regular fa-id-card me-2"></i> <strong>USI required:</strong> Provide on enrolment. <br><br>
                                <i class="fa-regular fa-heart-pulse"></i> <strong>Physical requirement:</strong> Must be able to kneel and perform 2 min CPR on floor manikin.
                            </div>
                            <div class="program-info mt-3 p-3 small bg-light-soft">
                                <i class="fa-regular fa-clock"></i> <strong>Blended course:</strong> 8h online pre-work + 1 day face-to-face.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- program content end -->

@endsection