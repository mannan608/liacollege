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
                        <h2 class="section-title" style="font-weight: bold;">CHC33021<br />Provide Cardiopulmonary Resuscitation
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
                        <h3 class="rts-section-title">CHC52021 Provide Cardiopulmonary Resuscitation
                    </div>
                    <div class="col-lg-6">
                        <p class="rts-section-description">
                            This qualification reflects the role of community services workers involved in the delivery, management and coordination of person‑centred services to individuals, groups, and communities. Workers have specialised skills and may supervise others or undertake case management and program coordination.
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
                                <img src="{{ asset('frontend/images/course/b1.jpg') }}" alt="community services worker with client">
                            </div>

                            <!-- ABOUT THE PROGRAM (updated description, delivery, duration, entry) -->
                            <div class="program-about">
                                <h4 class="title">About the program</h4>
                                <p>This qualification reflects the role of community services workers involved in the delivery, management and coordination of person‑centred services to individuals, groups, and communities. At this level, workers have specialised skills in community services and work autonomously within their scope of practice under broad directions from senior management.</p>
                                <p>Workers support people to make change in their lives to improve personal and social wellbeing and may also have responsibility for the supervision of other workers and volunteers. They may also undertake case management and program coordination.</p>

                                <!-- delivery mode & duration block -->
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-circle-check text-primary me-2"></i>Delivery mode</h6>
                                        <p>This qualification is delivered online through a combination of written and visual lesson materials and assessments. To achieve this qualification, the candidate must have completed at least 200 hours of work as detailed in the Assessment Requirements of units of competency.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-clock me-2 text-primary"></i>Course duration</h6>
                                        <p>6 – 12 months online self-paced. The course is self‑paced, hours vary depending on time dedicated.</p>
                                    </div>
                                </div>

                                <!-- entry requirements + pre-requisites (updated) -->
                                <div class="mt-3">
                                    <h6>Entry requirements</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>16 years of age or over at time of enrolment</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Satisfactorily completed Year 10 or equivalent</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Access to a computer (desktop or laptop), tablet or smartphone. It is recommended assessment activities are completed on a computer or tablet only.</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Access to an internet connection and an email address</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Ability to read and comprehend course materials</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Ability to allocate appropriate study hours per week to complete online material and assessments</li>
                                    </ul>
                                    <p class="fst-italic text-secondary mt-2"><strong>Note:</strong> Students under 18 require signed parental consent on enrolment form. There are no pre-requisites for this qualification.</p>
                                </div>
                            </div>

                            <!-- COURSE CONTENT / UNITS (12 core + 8 electives) -->
                            <div class="program-credit-area">
                                <h5 class="title">Course content – 20 units (12 core + 8 electives)</h5>
                                <p class="mb-4">This qualification consists of 12 core units and 8 elective units:</p>

                                <!-- CORE UNITS (12) -->
                                <h6 class="fw-bold mb-3">CORE UNITS</h6>
                                <div class="row row-cols-1 row-cols-md-2 g-2 mb-4">
                                    <div class="col"><code>CHCCCS004</code> – Assess co-existing needs</div>
                                    <div class="col"><code>CHCCCS007</code> – Develop and implement service programs</div>
                                    <div class="col"><code>CHCCCS019</code> – Recognise and respond to crisis situations</div>
                                    <div class="col"><code>CHCCSM013</code> – Facilitate and review case management</div>
                                    <div class="col"><code>CHCDEV005</code> – Analyse impacts of sociological factors on people in community work and services</div>
                                    <div class="col"><code>CHCDFV001</code> – Recognise and respond appropriately to domestic and family violence</div>
                                    <div class="col"><code>CHCDIV001</code> – Work with diverse people</div>
                                    <div class="col"><code>CHCDIV002</code> – Promote Aboriginal and/or Torres Strait Islander cultural safety</div>
                                    <div class="col"><code>CHCLEG003</code> – Manage legal and ethical compliance</div>
                                    <div class="col"><code>CHCMGT005</code> – Facilitate workplace debriefing and support processes</div>
                                    <div class="col"><code>CHCPRP003</code> – Reflect on and improve own professional practice</div>
                                    <div class="col"><code>HLTWHS003</code> – Maintain work health and safety</div>
                                </div>

                                <!-- ELECTIVE UNITS (8) -->
                                <h6 class="fw-bold mb-3">ELECTIVE UNITS</h6>
                                <div class="row row-cols-1 row-cols-md-2 g-2 mb-3">
                                    <div class="col"><code>CHCCSM012</code> – Coordinate complex case requirements</div>
                                    <div class="col"><code>CHCCSM010</code> – Implement case management practice</div>
                                    <div class="col"><code>CHCCSM009</code> – Facilitate goal-directed planning</div>
                                    <div class="col"><code>CHCCSM014</code> – Provide case management supervision</div>
                                    <div class="col"><code>CHCCSM015</code> – Undertake case management in a child protection framework</div>
                                    <div class="col"><code>CHCCSM016</code> – Undertake advanced assessments</div>
                                    <div class="col"><code>CHCMHS001</code> – Work with people with mental health issues</div>
                                    <div class="col"><code>CHCPRP001</code> – Develop and maintain networks and collaborative partnerships</div>
                                </div>

                                <!-- OUTCOMES block (skills gained) -->
                                <div class="mt-4">
                                    <h6>Outcomes – skills gained</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Assess co-existing needs</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Develop and implement service programs</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Recognise and respond to crisis situations</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Facilitate and review case management</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Analyse impacts of sociological factors on people in community work and services</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Recognise and respond appropriately to domestic and family violence</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Work with diverse people</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Promote Aboriginal and/or Torres Strait Islander cultural safety</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Manage legal and ethical compliance</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Facilitate workplace debriefing and support processes</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Reflect on and improve own professional practice</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Maintain work health and safety</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Coordinate complex case requirements</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Implement case management practice</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Facilitate goal-directed planning</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Provide case management supervision</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Undertake case management in a child protection framework</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Undertake advanced assessments</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Work with people with mental health issues</li>
                                                <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Develop and maintain networks and collaborative partnerships</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mt-3">Upon successful completion of this qualification the student will receive a <strong>CHC52021 Diploma of Community Services (Case Management)</strong>. For partial completion, a Statement of Attainment is issued electronically within 10 business days of unit completion. All certificates, record of results and statements of attainment are issued electronically within 10 business days.</p>
                                </div>

                                <!-- Accordion for career pathways, work placement, learner support (placement now 200h) -->
                                <div class="program-accordion mt-4">
                                    <div class="accordion" id="rts-accordion">
                                        <!-- CAREER PATHWAYS + FURTHER EDUCATION -->
                                        <div class="accordion-item">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                Career pathways & further education
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p><strong>Possible career opportunities:</strong> Management positions within the different community services sectors (including team leader; Coordinators of Support and Case Managers).</p>
                                                    <p class="mt-3"><strong>Pathways for further education:</strong> This qualification provides a pathway for students to continue their studies and enhance their skills through university level undergraduate degrees.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- WORK PLACEMENT (200h) & LEARNER SUPPORT -->
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                                Work placement (200h) & support
                                            </button>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p>All students undertaking this qualification are required to complete <strong>200 hours of work placement</strong> as detailed in the Assessment Requirements of units of competency. Students will be placed with a host community service provider in a suitable program area.</p>
                                                    <p>During work placement students will be required to complete a logbook and undertake assessments whilst on the job. Work placement provides the opportunity to utilise skills learnt in the classroom into actual practice.</p>
                                                    <p>Students may be required to undertake a Working with Children’s Check and/or a National Police Record check depending on host requirements. Additional information given during course orientation.</p>
                                                    <p class="mt-2"><i class="fa-regular fa-circle-info me-2"></i> <strong>Learner support:</strong> If you need extra learning support, please indicate when booking your course and detail what kind of additional support you may require. A Unique Student Identifier (USI) is mandatory – provide on enrolment.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Optional extra: note that credit transfer block removed as per content (no longer relevant) -->
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
                                                    <p class="rt-testimonial-text">"The online learning was flexible, and the work placement gave me real confidence. I'm now working as a case manager."</p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img"><img src="{{ asset('frontend/images/testimonial/author-1.png') }}" alt="author"></div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">James Smith</h5>
                                                                <p>Case Coordinator</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon"><img src="{{ asset('frontend/images/testimonial/quote.svg') }}" alt="quote"></div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-testimonial-item rt-relative">
                                                    <div class="rating-star mb--10"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                                    <p class="rt-testimonial-text">"The case management units were incredibly practical. Teachers were super supportive, and I felt prepared for leadership in community services. Highly recommend this diploma."</p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img"><img src="{{ asset('frontend/images/testimonial/author-1.png') }}" alt="author"></div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">Sarah Lee</h5>
                                                                <p>Team Leader, Community Services</p>
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
                                <div class="program-menu">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>BSB50820 Diploma of Project Management</a></li>
                                        <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>CHC33021 Certificate III in Individual Support</a></li>
                                        <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>CHC43121 Certificate IV in Disability Support</a></li>
                                        <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>CHC52021 Diploma of Community Services</a></li>
                                        <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Diploma of Leadership and Management (BSB50420)</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- enroll now button -->
                            <div class="program-event">
                                <div class="program-event-content" style="background: linear-gradient(145deg, #1b4a6b, #18435c);">
                                    <a href="{{ url('application') }}" class="rts-theme-btn btn-arrow btn-white">Enroll Now <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                </div>
                            </div>

                            <!-- USI note & work placement note -->
                            <div class="program-info mt-3 p-3 small bg-light-soft">
                                <i class="fa-regular fa-id-card me-2"></i> <strong>USI required:</strong> You must have a Unique Student Identifier (USI) to receive your certificate. Provide on enrolment. <br><br>
                                <i class="fa-regular fa-clock"></i> <strong>Placement:</strong> 200 hours with community service providers. WWCC & police check may be required.
                            </div>
                            <div class="program-info mt-3 p-3 small bg-light-soft">
                                <i class="fa-regular fa-circle-info"></i> <strong>Under 18?</strong> Parental consent required on enrolment form.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- program content end -->

@endsection