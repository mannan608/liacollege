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
                            IN AGEING SUPPORT</h2>
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
                        <h3 class="rts-section-title">CHC43015 Certificate IV in Ageing Support</h3>
                    </div>
                    <div class="col-lg-6">
                        <p class="rts-section-description">
                            This qualification reflects the role of support workers who complete specialised tasks and functions in aged services; either in residential, home or community-based environments. Workers take responsibility for their own outputs within defined organisation guidelines and maintain quality service delivery through individualised service planning.
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
                                <img src="{{ asset('frontend/images/course/b1.jpg') }}" alt="aged care support worker with client">
                            </div>

                            <!-- ABOUT THE PROGRAM (description, delivery, duration, entry) – fully updated -->
                            <div class="program-about">
                                <h4 class="title">About the program</h4>
                                <p>This qualification reflects the role of support workers who complete specialised tasks and functions in aged services; either in residential, home or community-based environments. Workers will take responsibility for their own outputs within defined organisation guidelines and maintain quality service delivery through the development, facilitation and review of individualised service planning and delivery.</p>
                                <p>Workers may be required to demonstrate leadership and have limited responsibility for the organisation and the quantity and quality of outputs of others within limited parameters.</p>

                                <!-- delivery mode & duration block -->
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-circle-check text-primary me-2"></i>Delivery mode</h6>
                                        <p>Currently this qualification is being offered online with arrangements for the required 120 hours of work placement to be organised with students.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-clock me-2 text-primary"></i>Course duration</h6>
                                        <p>6 – 12 months online self-paced study. The course is self‑paced, hours vary depending on time dedicated.</p>
                                    </div>
                                </div>

                                <!-- entry requirements + prereq (compact) -->
                                <div class="mt-3">
                                    <h6>Entry requirements</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>18 years of age or over at time of enrolment</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Access to computer with word processing, PDF reader and internet</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Ability to read and comprehend course materials</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Ability to allocate appropriate study hours per week</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Suitable work placement clothing: black pants, white polo, leather fully enclosed shoes with non-slip soles.</li>
                                    </ul>
                                    <p class="fst-italic text-secondary mt-2">There are no pre-requisites for entry into this qualification. Australian Community and Management College recommends that students complete CHC33021 Certificate III in Individual Support (Ageing and Disability) prior to enrolment.</p>
                                </div>
                            </div>

                            <!-- COURSE CONTENT / UNITS (15 core + 3 electives) -->
                            <div class="program-credit-area">
                                <h5 class="title">Course content – 18 units (15 core + 3 electives)</h5>
                                <p class="mb-4">This qualification consists of 15 core units and 3 elective units:</p>

                                <!-- CORE UNITS (15 as provided) -->
                                <h6 class="fw-bold mb-3">CORE UNITS</h6>
                                <div class="row row-cols-1 row-cols-md-2 g-2 mb-4">
                                    <div class="col"><code>CHCADV001</code> – Facilitate the interests and rights of clients</div>
                                    <div class="col"><code>CHCAGE001</code> – Facilitate the empowerment of older people</div>
                                    <div class="col"><code>CHCAGE003</code> – Coordinate services for older people</div>
                                    <div class="col"><code>CHCAGE004</code> – Implement interventions with older people at risk</div>
                                    <div class="col"><code>CHCAGE005</code> – Provide support to people living with dementia</div>
                                    <div class="col"><code>CHCCCS006</code> – Facilitate individual service planning and delivery</div>
                                    <div class="col"><code>CHCCCS011</code> – Meet personal support needs</div>
                                    <div class="col"><code>CHCCCS025</code> – Support relationships with carers and families</div>
                                    <div class="col"><code>CHCCCS040</code> – Support independence and wellbeing</div>
                                    <div class="col"><code>CHCCCS041</code> – Recognise healthy body systems</div>
                                    <div class="col"><code>CHCDIV001</code> – Work with diverse people</div>
                                    <div class="col"><code>CHCLEG003</code> – Manage legal and ethical compliance</div>
                                    <div class="col"><code>CHCPAL001</code> – Deliver care services using a palliative approach</div>
                                    <div class="col"><code>CHCPRP001</code> – Develop and maintain networks and collaborative partnerships</div>
                                    <div class="col"><code>HLTWHS002</code> – Follow safe work practices for direct client care</div>
                                </div>

                                <!-- ELECTIVE UNITS (3 specified) -->
                                <h6 class="fw-bold mb-3">ELECTIVE UNITS</h6>
                                <div class="row row-cols-1 row-cols-md-2 g-2 mb-3">
                                    <div class="col"><code>CHCMHS001</code> – Work with people with mental health issues</div>
                                    <div class="col"><code>CHCPRP003</code> – Reflect on and improve own professional practice</div>
                                    <div class="col"><code>CHCOM002</code> – Use communication to build relationships</div>
                                </div>

                                <!-- OUTCOMES block (skills gained) – list exactly as given -->
                                <div class="mt-4">
                                    <h6>Outcomes – skills gained</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Facilitate the interests and rights of clients</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Facilitate the empowerment of older people</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Coordinate services for older people</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Implement interventions with older people at risk</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Provide support to people living with dementia</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Facilitate individual service planning and delivery</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Meet personal support needs</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Support independence and wellbeing</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Support relationships with carers and families</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Work with diverse people</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Manage legal and ethical compliance</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Deliver care services using a palliative approach</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Develop and maintain networks and collaborative partnerships</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Recognise healthy body systems</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Follow safe work practices for direct client care</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Work with people with mental health issues</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Reflect on and improve own professional practice</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Use communication to build relationships</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mt-3">Successful completion leads to <strong>CHC43015 Certificate IV in Ageing Support</strong>. For partial completion, a Statement of Attainment is issued electronically within 10 business days of unit completion. All certificates, record of results and statements of attainment are issued electronically within 10 business days.</p>
                                </div>

                                <!-- Accordion for career pathways + work placement etc -->
                                <div class="program-accordion mt-4">
                                    <div class="accordion" id="rts-accordion">
                                        <!-- CAREER PATHWAYS + FURTHER EDUCATION -->
                                        <div class="accordion-item">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                Career pathways & further education
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p><strong>Possible career opportunities:</strong> Aged care team leader, Care supervisor, Care team leader, Day activity worker, Personal care worker, Program coordinator – social programs, Support worker, Aged Care Facility Manager.</p>
                                                    <p class="mt-3"><strong>Pathways for further education:</strong> This qualification provides a pathway for students to continue their studies and enhance their skills through CHC52015 Diploma of Community Services.</p>
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
                                                    <p>All students undertaking this qualification are required to complete <strong>120 hours of work placement</strong>. Students will be placed with a host Aged Care provider in close proximity to their location where available. During work placement students will be required to complete a logbook and undertake assessments whilst on the job. Work placement provides the opportunity to utilise skills learnt into actual practice.</p>
                                                    <p>Students are required to undertake a Working with Children’s Check and a National Police Record check and must have these in place prior to the commencement of their work placement. Additional information given during course orientation.</p>
                                                    <p class="mt-2"><i class="fa-regular fa-circle-info me-2"></i> <strong>Learner support:</strong> If you need extra learning support, please indicate when booking your course and detail what kind of additional support you may require. A Unique Student Identifier (USI) is mandatory – provide on enrolment.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- CREDIT TRANSFER block (new) -->
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                                Credit transfer
                                            </button>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p>Students who have previously completed CHC33021 Certificate III in Individual Support (Ageing and Disability) or similar are entitled to credit transfer for the following units:</p>
                                                    <ul>
                                                        <li><code>CHCCCS040</code> – Support independence and wellbeing</li>
                                                        <li><code>CHCDIV001</code> – Work with diverse people</li>
                                                        <li><code>CHCCCS041</code> – Recognise healthy body systems</li>
                                                        <li><code>HLTWHS002</code> – Follow safe work practices for direct client care</li>
                                                    </ul>
                                                    <p>Granting of credit transfer is conditional upon the supplying of a copy of relevant qualifications record of result and/or statements of attainment.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- STUDENT TESTIMONIAL (keeping original slider but cosmetic) -->
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
                                                                <p>Residential Care Worker</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon"><img src="{{ asset('frontend/images/testimonial/quote.svg') }}" alt="quote"></div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-testimonial-item rt-relative">
                                                    <div class="rating-star mb--10"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                                    <p class="rt-testimonial-text">"I loved the palliative care unit. Teachers were super supportive, and I felt prepared for aged care. Highly recommend this cert IV."</p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img"><img src="{{ asset('frontend/images/testimonial/author-1.png') }}" alt="author"></div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">Sarah Lee</h5>
                                                                <p>Aged Care Team Leader</p>
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
                            <!-- curriculum quick menu (points to sections) -->
                            <div class="program-curriculum">
                                <h6 class="heading-title">Our Programs</h6>
                                @include('frontend.common.programs')
                            </div>

                            <!-- join event (replaced with work placement / USI reminder) + enroll now button -->
                            <div class="program-event">
                                <div class="program-event-content" style="background: linear-gradient(145deg, #1b4a6b, #18435c);">
                                    <a href="#" class="rts-theme-btn btn-arrow btn-white">Enroll Now <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                </div>
                            </div>

                            <!-- extra: USI note & credit transfer note -->
                            <div class="program-info mt-3 p-3 small bg-light-soft">
                                <i class="fa-regular fa-id-card me-2"></i> <strong>USI required:</strong> You must have a Unique Student Identifier (USI) to receive your certificate. Provide on enrolment. <br><br>
                                <i class="fa-regular fa-file-lines me-2"></i> <strong>Credit transfer available</strong> for prior Cert III Individual Support (see accordion).
                            </div>
                            <div class="program-info mt-3 p-3 small bg-light-soft">
                                <i class="fa-regular fa-clock"></i> <strong>Placement:</strong> 120 hours organised with host providers. WWCC & police check required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- program content end -->

@endsection