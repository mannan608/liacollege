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
                        <h2 class="section-title" style="font-weight: bold;">CHC33021<br />CERTIFICATE IV
                            IN DISABILITY SUPPORT</h2>
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
                        <h3 class="rts-section-title">CHC43121 Certificate IV in Disability Support</h3>
                    </div>
                    <div class="col-lg-6">
                        <p class="rts-section-description">
                            This qualification reflects the role of workers in a range of community services and clients’ homes, who provide training and support in a manner that empowers people with disabilities to achieve greater levels of independence, self-reliance, community participation and wellbeing.
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
                                <img src="{{ asset('frontend/images/course/b1.jpg') }}" alt="disability support worker with client">
                            </div>

                            <!-- ABOUT THE PROGRAM (updated description, delivery, duration, entry) -->
                            <div class="program-about">
                                <h4 class="title">About the program</h4>
                                <p>This qualification reflects the role of workers in a range of community services and clients’ homes, who provide training and support in a manner that empowers people with disabilities to achieve greater levels of independence, self-reliance, community participation and wellbeing.</p>
                                <p>Workers promote a person-centred approach, work without direct supervision and may be required to supervise and/or coordinate a small team.</p>

                                <!-- delivery mode & duration block -->
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-circle-check text-primary me-2"></i>Delivery mode</h6>
                                        <p>Online delivery, with a work placement component of at least 120 hours of work as detailed in the Assessment Requirements of the units of competency.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-clock me-2 text-primary"></i>Course duration</h6>
                                        <p>6 – 12 months online self-paced study. The course is self‑paced, hours vary depending on time dedicated.</p>
                                    </div>
                                </div>

                                <!-- entry requirements + pre-requisites (updated) -->
                                <div class="mt-3">
                                    <h6>Entry requirements</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>18 years of age or over at time of enrolment</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Satisfactorily completed Year 12 or equivalent</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Access to computer with word processing, PDF reader and internet</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Ability to read and comprehend course materials</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Ability to allocate appropriate study hours per week</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Suitable work placement clothing: black pants, white polo, leather fully enclosed shoes with non-slip soles.</li>
                                    </ul>
                                    <p class="fst-italic text-secondary mt-2"><strong>Pre-requisites:</strong> Completion of CHC33021 Certificate III in Individual Support (Disability) OR CHC33015 Certificate III in Individual Support (Disability) OR CHC30408 Certificate III in Disability PLUS the CHCSS00125 Entry to Certificate IV in Disability Support Skill Set.</p>
                                </div>
                            </div>

                            <!-- COURSE CONTENT / UNITS (7 core + 3 electives) -->
                            <div class="program-credit-area">
                                <h5 class="title">Course content – 10 units (7 core + 3 electives)</h5>
                                <p class="mb-4">This qualification consists of 7 core units and 3 elective units:</p>

                                <!-- CORE UNITS (7) -->
                                <h6 class="fw-bold mb-3">CORE UNITS</h6>
                                <div class="row row-cols-1 row-cols-md-2 g-2 mb-4">
                                    <div class="col"><code>HLTWHS003</code> – Maintain work health and safety</div>
                                    <div class="col"><code>CHCMHS001</code> – Work with people with mental health issues</div>
                                    <div class="col"><code>CHCLEG003</code> – Manage legal and ethical compliance</div>
                                    <div class="col"><code>CHCDIS019</code> – Provide person-centred services to people with disability with complex needs</div>
                                    <div class="col"><code>CHCDIS018</code> – Facilitate ongoing skills development using a person-centred approach</div>
                                    <div class="col"><code>CHCDIS017</code> – Facilitate community participation and social inclusion</div>
                                    <div class="col"><code>CHCCCS044</code> – Follow established person-centred behaviour supports</div>
                                </div>

                                <!-- ELECTIVE UNITS (3) -->
                                <h6 class="fw-bold mb-3">ELECTIVE UNITS</h6>
                                <div class="row row-cols-1 row-cols-md-2 g-2 mb-3">
                                    <div class="col"><code>CHCDIS020</code> – Work effectively in disability support</div>
                                    <div class="col"><code>CHCADV001</code> – Facilitate the interest and rights of clients</div>
                                    <div class="col"><code>CHCCOM002</code> – Use communication to build relationships</div>
                                </div>

                                <!-- OUTCOMES block (skills gained) -->
                                <div class="mt-4">
                                    <h6>Outcomes – skills gained</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Follow established person-centred behaviour supports</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Facilitate community participation and social inclusion</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Facilitate ongoing skills development using a person-centred approach</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Provide person-centred services to people with disability with complex needs</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Manage legal and ethical compliance</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Work with people with mental health issues</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Maintain work health and safety</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Work effectively in disability support</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Facilitate the interest and rights of clients</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Use communication to build relationships</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mt-3">Successful completion leads to <strong>CHC43121 Certificate IV in Disability Support</strong>. For partial completion, a Statement of Attainment is issued electronically within 10 business days of unit completion. All certificates, record of results and statements of attainment are issued electronically within 10 business days.</p>
                                </div>

                                <!-- Accordion for career pathways, work placement, credit transfer -->
                                <div class="program-accordion mt-4">
                                    <div class="accordion" id="rts-accordion">
                                        <!-- CAREER PATHWAYS + FURTHER EDUCATION -->
                                        <div class="accordion-item">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                Career pathways & further education
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p><strong>Possible career opportunities:</strong> Development Officer, Residential Care Officer, Senior Personal Care Assistant (PCA), Social Educator, Employment Co-ordinator (disability), Disability Support Officer / worker, Behavioural Support Officer.</p>
                                                    <p class="mt-3"><strong>Pathways for further education:</strong> This qualification provides a pathway for students to continue their studies and enhance their skills through CHC52021 Diploma of Community Services.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- WORK PLACEMENT (120h) & LEARNER SUPPORT -->
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                                Work placement (120h) & support
                                            </button>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p>All students undertaking this qualification are required to complete <strong>120 hours of work placement</strong>. Students will be placed with a host NDIS provider and may be involved in a number of programs as part of their placement including: Supported independent living programs, Short Term accommodation, Day programs or Community Programs.</p>
                                                    <p>During work placement students will be required to complete a logbook and undertake assessments whilst on the job. Work placement provides the opportunity to utilise skills learnt in the classroom into actual practice.</p>
                                                    <p>Students are required to undertake a Working with Children’s Check and must have this in place at the commencement of their work placement. Depending on host provider requirements, a National Police Record check may also be required prior to placement. Additional information given during course orientation.</p>
                                                    <p class="mt-2"><i class="fa-regular fa-circle-info me-2"></i> <strong>Learner support:</strong> If you need extra learning support, please indicate when booking your course and detail what kind of additional support you may require. A Unique Student Identifier (USI) is mandatory – provide on enrolment.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- CREDIT TRANSFER block (updated) -->
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                                Credit transfer
                                            </button>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p>Students who have previously completed CHC33021 Certificate III in Individual Support (Ageing and Disability) or similar are entitled to credit transfer for the following units:</p>
                                                    <ul>
                                                        <li><code>CHCAGE011</code> – Provide support to people living with dementia</li>
                                                        <li><code>CHCCCS041</code> – Recognise healthy body systems</li>
                                                        <li><code>CHCDIS020</code> – Work effectively in disability support</li>
                                                        <li><code>CHCPAL003</code> – Deliver care services using a palliative approach</li>
                                                    </ul>
                                                    <p>Granting of credit transfer is conditional upon the supplying of a copy of relevant qualifications record of result and/or statements of attainment.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- STUDENT TESTIMONIAL (keeping style) -->
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
                                                    <p class="rt-testimonial-text">"The online learning was flexible, and the work placement gave me real confidence. I'm now working as a disability support worker."</p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img"><img src="{{ asset('frontend/images/testimonial/author-1.png') }}" alt="author"></div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">James Smith</h5>
                                                                <p>Disability Support Officer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon"><img src="{{ asset('frontend/images/testimonial/quote.svg') }}" alt="quote"></div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-testimonial-item rt-relative">
                                                    <div class="rating-star mb--10"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                                    <p class="rt-testimonial-text">"The person-centred approach units were eye-opening. Teachers were super supportive, and I felt prepared for complex needs support. Highly recommend this cert IV."</p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img"><img src="{{ asset('frontend/images/testimonial/author-1.png') }}" alt="author"></div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">Sarah Lee</h5>
                                                                <p>Behavioural Support Officer</p>
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

                    <!-- SIDEBAR (right col) - updated with relevant program info -->
                    <div class="col-lg-4 sticky-coloum-item">
                        <div class="program-sidebar">
                            <!-- curriculum quick menu -->
                            <div class="program-curriculum">
                                <h6 class="heading-title">Our Programs</h6>
                                @include('frontend.common.programs')
                            </div>

                            <!-- enroll now button -->
                            <div class="program-event">
                                <div class="program-event-content" style="background: linear-gradient(145deg, #1b4a6b, #18435c);">
                                    <a href="#" class="rts-theme-btn btn-arrow btn-white">Enroll Now <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                </div>
                            </div>

                            <!-- USI note & credit transfer note -->
                            <div class="program-info mt-3 p-3 small bg-light-soft">
                                <i class="fa-regular fa-id-card me-2"></i> <strong>USI required:</strong> You must have a Unique Student Identifier (USI) to receive your certificate. Provide on enrolment. <br><br>
                                <i class="fa-regular fa-file-lines me-2"></i> <strong>Credit transfer available</strong> for prior Cert III Individual Support (see accordion).
                            </div>
                            <div class="program-info mt-3 p-3 small bg-light-soft">
                                <i class="fa-regular fa-clock"></i> <strong>Placement:</strong> 120 hours with NDIS providers (SIL, day programs, etc). WWCC & possible police check required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- program content end -->

@endsection