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
                        <h2 class="section-title" style="font-weight: bold;">CHC33021<br />CERTIFICATE III
                            IN INDIVIDUAL SUPPORT (AGEING/DISABILITY)</h2>
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
                        <h3 class="rts-section-title">CHC33021 Certificate III in Individual Support (Ageing & Disability)
                        </h3>
                    </div>
                    <div class="col-lg-6">
                        <p class="rts-section-description">This qualification reflects the role of individuals in community,
                            home or residential care who work under supervision, following an individualised plan to provide
                            person‑centred support to people due to ageing, disability or other reasons.</p>
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
                                <img src="{{ asset('frontend/images/course/b1.jpg') }}" alt="support worker with client">
                            </div>

                            <!-- ABOUT THE PROGRAM (description, delivery, duration, entry) -->
                            <div class="program-about">
                                <h4 class="title">About the program</h4>
                                <p>This qualification reflects the role of individuals in the community, home or residential
                                    care setting who work under supervision and delegation as a part of a multi-disciplinary
                                    team, following an individualised plan to provide person-centred support to people who
                                    may require support due to ageing, disability or some other reason.</p>
                                <p>These individuals take responsibility for their own outputs within the scope of their job
                                    role and delegation. Workers have a range of factual, technical and procedural
                                    knowledge, as well as some theoretical knowledge of the concepts and practices required
                                    to provide person-centred support.</p>

                                <!-- delivery mode & duration block (simple rows) -->
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-circle-check text-primary me-2"></i>Delivery mode</h6>
                                        <p>Online delivery, with a work placement component of at least 120 hours of work as
                                            detailed in the Assessment Requirements.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-clock me-2 text-primary"></i>Course duration</h6>
                                        <p>6 – 12 months online self-paced study. The course is self‑paced, hours vary
                                            depending on time dedicated.</p>
                                    </div>
                                </div>

                                <!-- entry requirements + prereq (compact) -->
                                <div class="mt-3">
                                    <h6>Entry requirements</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>18 years of age or
                                            over at time of enrolment</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Satisfactorily
                                            completed Year 12 or equivalent</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Access to computer
                                            with word processing, PDF reader and internet</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Ability to read and
                                            comprehend course materials</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Ability to allocate
                                            appropriate study hours per week</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Suitable work
                                            placement clothing: black pants, white polo, leather fully enclosed shoes</li>
                                    </ul>
                                    <p class="fst-italic text-secondary mt-2">There are no pre-requisites for entry into
                                        this qualification.</p>
                                </div>
                            </div>

                            <!-- COURSE CONTENT / UNITS (replacing credits with core/elective) -->
                            <div class="program-credit-area">
                                <h5 class="title">Course content – 15 units (9 core + 6 electives)</h5>
                                <p class="mb-4">This qualification consists of 9 core units and 6 elective units:</p>

                                <!-- CORE UNITS list (styled like a table but cleaner) -->
                                <h6 class="fw-bold mb-3">CORE UNITS</h6>
                                <div class="row row-cols-1 row-cols-md-2 g-2 mb-4">
                                    <div class="col"><code>CHCLEG001</code> – Work legally and ethically</div>
                                    <div class="col"><code>CHCDIV001</code> – Work with diverse people</div>
                                    <div class="col"><code>CHCCOM005</code> – Communicate and work in health or community
                                        services</div>
                                    <div class="col"><code>CHCCCS041</code> – Recognise healthy body systems</div>
                                    <div class="col"><code>CHCCCS040</code> – Support independence and wellbeing</div>
                                    <div class="col"><code>CHCCCS038</code> – Facilitate the empowerment of people receiving
                                        support</div>
                                    <div class="col"><code>CHCCCS031</code> – Provide individualised support</div>
                                    <div class="col"><code>HLTINF006</code> – Apply basic principles of infection prevention
                                        and control</div>
                                    <div class="col"><code>HLTWHS002</code> – Follow safe work practices for direct client
                                        care</div>
                                </div>

                                <!-- ELECTIVE UNITS -->
                                <h6 class="fw-bold mb-3">ELECTIVE UNITS</h6>
                                <div class="row row-cols-1 row-cols-md-2 g-2 mb-3">
                                    <div class="col"><code>CHCDIS020</code> – Work effectively in disability support</div>
                                    <div class="col"><code>CHCDIS012</code> – Support community participation and social
                                        inclusion</div>
                                    <div class="col"><code>CHCDIS011</code> – Contribute to ongoing skills development using
                                        a strengths-based approach</div>
                                    <div class="col"><code>CHCPAL003</code> – Deliver care services using a palliative
                                        approach</div>
                                    <div class="col"><code>CHCAGE013</code> – Work effectively in aged care</div>
                                    <div class="col"><code>CHCAGE011</code> – Provide support to people living with dementia
                                    </div>
                                </div>

                                <!-- OUTCOMES block (we can show as bullet list) -->
                                <div class="mt-4">
                                    <h6>Outcomes – skills gained</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Communicate
                                                    and work in health/community</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Follow safe
                                                    work practices for direct care</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Recognise
                                                    healthy body systems</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Apply
                                                    infection prevention and control</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Work legally,
                                                    ethically and with diverse people</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Provide
                                                    individualised support</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Facilitate
                                                    empowerment & support independence</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Contribute to
                                                    skills development (strengths‑based)</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Support
                                                    people with dementia & palliative approach</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Work
                                                    effectively in aged care & disability</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Support
                                                    community participation and inclusion</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mt-3">Successful completion leads to <strong>CHC33021 Certificate III in
                                            Individual Support (Ageing and Disability)</strong>. For partial completion, a
                                        Statement of Attainment is issued electronically within 10 business days.</p>
                                </div>

                                <!-- optional accordion? We can keep it but replace with simple list – however we keep the accordion section to preserve style but we collapse it? Let's replace with work placement & learner support info (neat accordion for pathways) -->
                                <div class="program-accordion mt-4">
                                    <div class="accordion" id="rts-accordion">
                                        <!-- CAREER PATHWAYS + FURTHER EDUCATION -->
                                        <div class="accordion-item">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true">
                                                Career pathways & further education
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p><strong>Possible career opportunities:</strong> Personal Care Worker,
                                                        Residential Care Worker, Accommodation Support Worker, Care
                                                        Assistant, Disability Worker.</p>
                                                    <p class="mt-3"><strong>Pathways for further education:</strong>
                                                        CHC43121 Certificate IV in Disability Support; or CHC43015
                                                        Certificate IV in Ageing Support.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- WORK PLACEMENT + LEARNER SUPPORT -->
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                                Work placement (120h) & support
                                            </button>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p>All students must complete <strong>120 hours of work
                                                            placement</strong> with a host aged care provider near their
                                                        location. During placement, a logbook and assessments are
                                                        undertaken.</p>
                                                    <p>Students require a Working with Children’s Check and a National
                                                        Police Record check prior to placement. Additional information given
                                                        during orientation.</p>
                                                    <p class="mt-2"><i class="fa-regular fa-circle-info me-2"></i>
                                                        <strong>Learner support:</strong> If you need extra learning
                                                        support, please indicate when booking. A Unique Student Identifier
                                                        (USI) is mandatory for Australian nationally recognised training –
                                                        you must provide it on enrolment.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- optional: USI info already inside -->
                                    </div>
                                </div>
                            </div>

                            <!-- STUDENT TESTIMONIAL (keeping original slider but cosmetic, keep same structure) -->
                            <div class="program-student-testimonial rt-relative">
                                <h5 class="title">Student Testimonials</h5>
                                <div class="single-testimonial-box">
                                    <div class="single-testimonial-active swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-testimonial-item rt-relative">
                                                    <div class="rating-star mb--10">
                                                        <i class="fa-sharp fa-solid fa-star"></i><i
                                                            class="fa-sharp fa-solid fa-star"></i><i
                                                            class="fa-sharp fa-solid fa-star"></i><i
                                                            class="fa-sharp fa-solid fa-star"></i><i
                                                            class="fa-sharp fa-light fa-star"></i>
                                                    </div>
                                                    <p class="rt-testimonial-text">"The online learning was flexible, and
                                                        the work placement gave me real confidence. I'm now working as a
                                                        disability support worker."</p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img"><img
                                                                    src="{{ asset('frontend/images/testimonial/author-1.png') }}"
                                                                    alt="author"></div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">James Smith</h5>
                                                                <p>Residential Care Worker</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon"><img
                                                            src="{{ asset('frontend/images/testimonial/quote.svg') }}"
                                                            alt="quote"></div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-testimonial-item rt-relative">
                                                    <div class="rating-star mb--10"><i
                                                            class="fa-sharp fa-solid fa-star"></i><i
                                                            class="fa-sharp fa-solid fa-star"></i><i
                                                            class="fa-sharp fa-solid fa-star"></i><i
                                                            class="fa-sharp fa-solid fa-star"></i><i
                                                            class="fa-sharp fa-solid fa-star"></i></div>
                                                    <p class="rt-testimonial-text">"I loved the palliative care unit.
                                                        Teachers were super supportive, and I felt prepared for aged care.
                                                        Highly recommend this cert III."</p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img"><img
                                                                    src="{{ asset('frontend/images/testimonial/author-1.png') }}"
                                                                    alt="author"></div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">James Smith</h5>
                                                                <p>Residential Care Worker</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon"><img
                                                            src="{{ asset('frontend/images/testimonial/quote.svg') }}"
                                                            alt="quote"></div>
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

                            <!-- join event (replaced with work placement / USI reminder) -->
                            <div class="program-event">
                                <div class="program-event-content"
                                    style="background: linear-gradient(145deg, #1b4a6b, #18435c);">
                                    <a href="#" class="rts-theme-btn btn-arrow btn-white">Enroll Now <span><i
                                                class="fa-thin fa-arrow-right"></i></span></a>
                                </div>
                            </div>

                            <!-- extra: USI note -->
                            <div class="program-info mt-3 p-3 small bg-light-soft">
                                <i class="fa-regular fa-id-card me-2"></i> <strong>USI required:</strong> You must have a
                                Unique Student Identifier (USI) to receive your certificate. Provide on enrolment.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- program content end -->

@endsection