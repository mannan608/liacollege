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
                        <h2 class="section-title" style="font-weight: bold;">BSB50420<br />Diploma of Leadership and Management
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
                        <h3 class="rts-section-title">BSB50420 Diploma of Leadership and Management</h3>
                    </div>
                    <div class="col-lg-6">
                        <p class="rts-section-description">
                            Lead with confidence. Drive performance. Manage teams with impact. A nationally recognised qualification designed for experienced professionals who are ready to strengthen their leadership capability, manage operational performance and guide teams toward organisational success.
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
                                <img src="{{ asset('frontend/images/course/b1.jpg') }}" alt="leadership team meeting">
                            </div>

                            <!-- ABOUT THE PROGRAM (updated description) -->
                            <div class="program-about">
                                <h4 class="title">About the program</h4>
                                <p>Whether you are stepping into a management role, currently supervising teams, running a small business, or preparing for senior leadership responsibilities, the BSB50420 Diploma of Leadership and Management provides the advanced skills required to lead people, manage resources and achieve strategic goals. This qualification enhances your ability to communicate with influence, think critically, manage risk and drive continuous improvement in today’s dynamic business environment.</p>
                                <p>With flexible study options and structured trainer support, this nationally recognised diploma supports career growth across a wide range of industries including retail, hospitality, health, trades, finance, logistics, professional services, government and corporate sectors.</p>
                                
                                <!-- Course overview block (replacing generic delivery) -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6><i class="fa-regular fa-circle-check text-primary me-2"></i>Course overview</h6>
                                        <p>The Diploma of Leadership and Management (BSB50420) reflects the role of individuals who apply knowledge, practical skills and leadership experience to manage workplace operations and teams effectively. Throughout this qualification, you will develop the capability to:</p>
                                        <ul class="list-unstyled">
                                            <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Lead and manage effective workplace relationships</li>
                                            <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Communicate with influence across diverse stakeholders</li>
                                            <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Develop and implement operational plans</li>
                                            <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Manage business risk and compliance</li>
                                            <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Allocate and monitor business resources</li>
                                            <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Build high-performing teams</li>
                                            <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Apply emotional intelligence in leadership contexts</li>
                                            <li><i class="fa-regular fa-arrow-right me-2 text-primary"></i>Support innovation and continuous improvement</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Who it's suited for -->
                                <div class="mt-3">
                                    <h6>This course is suited to individuals who are:</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Team Leaders</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Supervisors</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Business Managers</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Operations Coordinators</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Program Coordinators</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Department Managers</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Small Business Operators</li>
                                    </ul>
                                </div>

                                <!-- delivery & duration block (updated) -->
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-circle-check text-primary me-2"></i>Delivery options</h6>
                                        <p>Online (self-paced), workplace/corporate training, or Recognition of Prior Learning (RPL). Students have up to 12 months to complete.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6><i class="fa-regular fa-clock me-2 text-primary"></i>Course duration</h6>
                                        <p>Up to 12 months self-paced. Flexible to suit professional commitments.</p>
                                    </div>
                                </div>

                                <!-- entry requirements (updated) -->
                                <div class="mt-3">
                                    <h6>Entry requirements</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>18 years or older</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Valid ID and right to study in Australia (not available to international students on Student Visa subcl 500)</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Complete a Language, Literacy, Numeracy and Digital (LLND) review prior to enrolment</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Access to computer/laptop with stable internet</li>
                                        <li><i class="fa-regular fa-circle-check text-success me-2"></i>Basic to intermediate digital literacy (Microsoft Office etc.)</li>
                                    </ul>
                                    <p class="fst-italic text-secondary mt-2">Reasonable adjustments and learning support available. Discuss during enrolment.</p>
                                </div>
                            </div>

                            <!-- COURSE CONTENT – Units of Competency (12 units: 6 core + 6 electives) -->
                            <div class="program-credit-area">
                                <h5 class="title">Units of competency – 12 units (6 core + 6 electives)</h5>
                                <p class="mb-4">To achieve the BSB50420 Diploma of Leadership and Management, students must complete 12 units of competency:</p>

                                <!-- CORE UNITS (6) -->
                                <h6 class="fw-bold mb-3">CORE UNITS</h6>
                                <div class="row row-cols-1 row-cols-md-2 g-2 mb-4">
                                    <div class="col"><code>BSBCMM511</code> – Communicate with influence</div>
                                    <div class="col"><code>BSBCRT511</code> – Develop critical thinking in others</div>
                                    <div class="col"><code>BSBLDR523</code> – Lead and manage effective workplace relationships</div>
                                    <div class="col"><code>BSBOPS502</code> – Manage business operational plans</div>
                                    <div class="col"><code>BSBPEF502</code> – Develop and use emotional intelligence</div>
                                    <div class="col"><code>BSBTWK502</code> – Manage team effectiveness</div>
                                </div>

                                <!-- ELECTIVE UNITS (6 as listed) -->
                                <h6 class="fw-bold mb-3">ELECTIVE UNITS</h6>
                                <div class="row row-cols-1 row-cols-md-2 g-2 mb-3">
                                    <div class="col"><code>BSBOPS501</code> – Manage business resources</div>
                                    <div class="col"><code>BSBOPS503</code> – Develop administrative systems</div>
                                    <div class="col"><code>BSBOPS504</code> – Manage business risk</div>
                                    <div class="col"><code>BSBPEF501</code> – Manage personal and professional development</div>
                                    <div class="col"><code>BSBWHS521</code> – Ensure a safe workplace for a work area</div>
                                    <div class="col"><code>BSBXCM501</code> – Lead communication in the workplace</div>
                                </div>
                                <p class="small text-secondary">Alternate elective combinations may be available for corporate groups (additional fees may apply).</p>

                                <!-- OUTCOMES block -->
                                <div class="mt-4">
                                    <h6>Course outcome</h6>
                                    <p>On successful completion, you will receive a nationally recognised <strong>BSB50420 Diploma of Leadership and Management</strong>. This qualification demonstrates your ability to manage business operations, lead teams and contribute strategically to organisational success.</p>
                                    <p><strong>Possible job outcomes:</strong> Business Manager, Operations Manager, Team Leader, Department Manager, Project Coordinator, Program Coordinator, Senior Supervisor, Small Business Manager.</p>
                                    <p>You will graduate with practical leadership skills including strategic planning, performance management, risk management, stakeholder communication and team development — capabilities that significantly enhance career progression into senior roles.</p>
                                </div>

                                <!-- Accordion for career pathways, delivery options, RPL, etc -->
                                <div class="program-accordion mt-4">
                                    <div class="accordion" id="rts-accordion">
                                        <!-- CAREER PATHWAYS & FURTHER EDUCATION -->
                                        <div class="accordion-item">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                Career pathways & further study
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <p><strong>Career outcomes:</strong> Graduates can pursue roles such as Business Manager, Operations Manager, Team Leader, Project Manager, Program Coordinator, Department Manager, Senior Supervisor, Small Business Owner across retail, hospitality, health, trades, finance, logistics, government and corporate sectors.</p>
                                                    <p class="mt-2"><strong>Pathways for further education:</strong> Advanced Diploma of Leadership and Management (BSB60420), graduate-level management programs, or specialised project management qualifications.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- DELIVERY OPTIONS (online, workplace, RPL) -->
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                                Delivery options
                                            </button>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <ul>
                                                        <li><strong>Online (Self-Paced):</strong> Ideal for busy professionals. Study at your own pace with structured materials and trainer support.</li>
                                                        <li><strong>Workplace / Corporate Training:</strong> Customised delivery and elective selection aligned with workplace objectives.</li>
                                                        <li><strong>Recognition of Prior Learning (RPL):</strong> For experienced leaders. Evidence-based assessment to achieve qualification. Ideal for Team Leaders, Operations Managers, Business Owners.</li>
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
                                                    <p><i class="fa-regular fa-circle-info me-2"></i> <strong>Learner support:</strong> If you need extra learning support (including disability, learning differences, or individual needs), please discuss during enrolment. Reasonable adjustments are available.</p>
                                                    <p><strong>Unique Student Identifier (USI):</strong> Every student requires a USI to receive a nationally recognised qualification. Provide on enrolment.</p>
                                                    <p><strong>LLND review:</strong> All students complete a Language, Literacy, Numeracy and Digital review prior to enrolment.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- STUDENT TESTIMONIAL (adjusted for leadership) -->
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
                                                    <p class="rt-testimonial-text">"The online learning was flexible, and the units on emotional intelligence and critical thinking were directly applicable to my role as team leader. I gained real confidence."</p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img"><img src="{{ asset('frontend/images/testimonial/author-1.png') }}" alt="author"></div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">Jessica Tran</h5>
                                                                <p>Operations Coordinator</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon"><img src="{{ asset('frontend/images/testimonial/quote.svg') }}" alt="quote"></div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-testimonial-item rt-relative">
                                                    <div class="rating-star mb--10"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                                    <p class="rt-testimonial-text">"The RPL process was smooth and recognised my years of management experience. I now have a formal qualification that matches my leadership role."</p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img"><img src="{{ asset('frontend/images/testimonial/author-1.png') }}" alt="author"></div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">David Chen</h5>
                                                                <p>Business Manager</p>
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

                    <!-- SIDEBAR (right col) - updated for Diploma -->
                    <div class="col-lg-4 sticky-coloum-item">
                        <div class="program-sidebar">
                            <!-- quick program menu -->
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

                            <!-- USI & LLND note -->
                            <div class="program-info mt-3 p-3 small bg-light-soft">
                                <i class="fa-regular fa-id-card me-2"></i> <strong>USI required:</strong> Must have a Unique Student Identifier. <br><br>
                                <i class="fa-regular fa-pen-to-square"></i> <strong>LLND review:</strong> Completed before enrolment.
                            </div>
                            <div class="program-info mt-3 p-3 small bg-light-soft">
                                <i class="fa-regular fa-clock"></i> <strong>Duration:</strong> Up to 12 months self-paced. <br>
                                <i class="fa-regular fa-building"></i> <strong>Delivery:</strong> Online, workplace, or RPL.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- program content end -->

@endsection