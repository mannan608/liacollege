@extends('frontend.layouts.app')
@section('title', 'BSB50820 - Diploma of Project Management')
@section('content')
    @include('frontend.course_css')
    <div class="dlm-page">
        <div class="dlm-main">
            <div class="container">
                <div class="row g-5">
                    <!-- LEFT: main content -->
                    <div class="col-lg-8">
                        <!-- ABOUT -->
                        <section id="about">
                            <div class="dlm-section-label">BSB50820</div>
                            <h2 class="dlm-section-title">Diploma of Project Management</h2>
                            <img src="{{ asset('frontend/images/banner/project-management.png') }}" alt="Project Management" />

                            <div class="dlm-feature-cards">
                                <div class="dlm-feature-card">
                                    <p>A nationally recognized qualification designed for professionals who are responsible for planning, managing and delivering projects across a range of industries. This course equips learners with the advanced knowledge and practical skills required to lead project teams, manage project scope, allocate resources and ensure successful project outcomes.<br /><br />
                                        The BSB50820 Diploma of Project Management prepares individuals to manage projects effectively from initiation through to completion, ensuring projects meet organisational objectives, timelines and quality expectations. This qualification can be delivered through online learning, workplace-based training, corporate programs or Recognition of Prior Learning (RPL). Students have up to 12 months to complete the course.<br /><br />
                                        Whether you are currently working in project coordination roles, leading organizational initiatives, or seeking to develop formal project management skills, this qualification provides the expertise required to manage complex projects and teams in dynamic business environments.<br /><br />
                                        With flexible study options and structured trainer support, this nationally recognized diploma supports career development across industries including construction, IT, government, finance, healthcare, logistics, marketing and professional services.<br />
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- RIGHT: sidebar -->
                    <div class="col-lg-4">
                        <div class="dlm-sidebar-sticky" id="enquiry">

                            <!-- Review card -->
                            <div class="dlm-review-card">
                                <div class="rc-title">Excellent</div>
                                <div class="rc-head">
                                    <div class="rc-stars">★★★★★</div>
                                    <div class="rc-count">Based on <strong>70 reviews</strong></div>
                                </div>
                                <img src="{{ asset('frontend/images/logo/google.png') }}" style="height:24px;"
                                    alt="Google Reviews">
                            </div>

                            <!-- Enquiry form card -->
                            <div class="dlm-sidebar-card">
                                <div class="dlm-sidebar-card-head">
                                    <h5>Quick Enquiry</h5>
                                    <p>Get a response within 1 business day</p>
                                </div>
                                <div class="dlm-sidebar-form-wrap">
                                    <iframe
                                        src="https://api.leadconnectorhq.com/widget/form/KSmGQZqWNAxU1itNZYAq"
                                        style="width:100%;height:100%;border:none;border-radius:3px"
                                        id="inline-KSmGQZqWNAxU1itNZYAq" 
                                        data-layout="{'id':'INLINE'}"
                                        data-trigger-type="alwaysShow"
                                        data-trigger-value=""
                                        data-activation-type="alwaysActivated"
                                        data-activation-value=""
                                        data-deactivation-type="neverDeactivate"
                                        data-deactivation-value=""
                                        data-form-name="BSB50820 Diploma of Project Management"
                                        data-height="487"
                                        data-layout-iframe-id="inline-KSmGQZqWNAxU1itNZYAq"
                                        data-form-id="KSmGQZqWNAxU1itNZYAq"
                                        title="BSB50820 Diploma of Project Management"
                                            >
                                    </iframe>
                                    <script src="https://link.msgsndr.com/js/form_embed.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="dlm-divider mb-0"></div>
                <!-- Progress Nav -->
                <nav class="dlm-progress-nav mb-5">
                    <div class="container">
                        <div class="dlm-progress-nav-inner">
                            <a href="#about" class="dlm-nav-step active">
                                <span class="step-num">1</span> About
                            </a>
                            <a href="#audience" class="dlm-nav-step">
                                <span class="step-num">2</span> Who It's For
                            </a>
                            <a href="#outcomes" class="dlm-nav-step">
                                <span class="step-num">3</span> Outcomes
                            </a>
                            <a href="#units" class="dlm-nav-step">
                                <span class="step-num">4</span> Units
                            </a>
                            <a href="#entry" class="dlm-nav-step">
                                <span class="step-num">5</span> Entry Requirements
                            </a>
                            <a href="#delivery" class="dlm-nav-step">
                                <span class="step-num">6</span> Delivery
                            </a>
                            <a href="#pathways" class="dlm-nav-step">
                                <span class="step-num">7</span> Pathways
                            </a>
                            <a href="#why" class="dlm-nav-step">
                                <span class="step-num">8</span> Why Us
                            </a>
                        </div>
                    </div>
                </nav>

                <h2 class="dlm-section-title">Course Overview</h2>
                <p class="dlm-section-desc">The Diploma of Project Management (BSB50820) reflects the role of individuals who apply specialised project management knowledge, skills and leadership capability to deliver projects within organisational frameworks. Project managers at this level are responsible for managing project scope, time, cost, quality, risk and stakeholder relationships, while ensuring project objectives are achieved.</p>
                <h5 style="font-family:var(--font-display);font-weight:700;margin-top:36px;margin-bottom:12px;">Throughout this qualification, you will develop the capability to:</h5>
                <div class="dlm-jobs-strip">
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Initiate and define project scope and objectives</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Develop detailed project management plans</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Manage project schedules, budgets and resources</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Lead and coordinate project teams</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Monitor project performance and quality outcomes</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Identify and manage project risks and issues</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Communicate effectively with project stakeholders</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Implement procurement and contract management processes</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Ensure successful project completion and evaluation</div>
                </div>
                
                <div class="dlm-divider"></div>

                <!-- WHO IT'S FOR -->
                <section id="audience">
                    <div class="dlm-section-label">Ideal Candidates</div>
                    <h2 class="dlm-section-title">This Course Is For You If…</h2>
                    <p class="dlm-section-desc">This course is suited to individuals who are managing projects or seeking formal project management qualifications.</p>

                    <div class="dlm-audience-grid">
                        <div class="dlm-audience-chip"><span class="chip-icon">📋</span> Project Coordinators</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">👥</span> Project Managers</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏢</span> Team Leaders</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">⚙️</span> Operations Managers</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📊</span> Business Analysts</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📈</span> Program Coordinators</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏗️</span> Supervisors</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🎯</span> Professionals seeking formal PM qualifications</div>
                    </div>
                    <p class="dlm-section-desc" style="margin-top:16px;">Delivered online, through traineeships, workplace training programs or via Recognition of Prior Learning (RPL), this qualification offers flexibility to suit professional commitments. Students have up to 12 months to complete the course.</p>
                </section>

                <div class="dlm-divider"></div>

                <!-- OUTCOMES -->
                <section id="outcomes">
                    <div class="dlm-section-label">Course</div>
                    <h2 class="dlm-section-title">Outcomes</h2>
                    <p class="dlm-section-desc">On successful completion, you will receive a nationally recognised <strong>BSB50820 Diploma of Project Management</strong> — demonstrating your ability to plan, execute, monitor and deliver projects while managing teams, resources and organisational expectations.</p>

                    <h5 style="font-family:var(--font-display);font-weight:700;margin-top:36px;margin-bottom:12px;">Possible
                        Job Outcomes After Graduating</h5>
                    <div class="dlm-audience-grid">
                        <div class="dlm-audience-chip"><span class="chip-icon">📋</span> Project Manager</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📊</span> Project Coordinator</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📈</span> Program Coordinator</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">👥</span> Project Team Leader</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">⚙️</span> Operations Manager</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📁</span> Project Administrator</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏢</span> Business Project Manager</div>
                    </div>

                    <h5 style="font-family:var(--font-display);font-weight:700;margin-top:28px;margin-bottom:12px;">
                        Industries That Value This Qualification</h5>
                    <div class="dlm-industries">
                        <span class="dlm-industry-tag">🏗️ Construction</span>
                        <span class="dlm-industry-tag">💻 Information Technology</span>
                        <span class="dlm-industry-tag">💰 Finance & Banking</span>
                        <span class="dlm-industry-tag">🏛️ Government & Public Sector</span>
                        <span class="dlm-industry-tag">🏥 Healthcare</span>
                        <span class="dlm-industry-tag">🚛 Logistics & Supply Chain</span>
                        <span class="dlm-industry-tag">📊 Marketing</span>
                        <span class="dlm-industry-tag">⚙️ Engineering & Infrastructure</span>
                        <span class="dlm-industry-tag">📋 Professional Services</span>
                    </div>
                </section>

                <div class="dlm-divider"></div>

                <!-- UNITS -->
                <section id="units">
                    <div class="dlm-section-label">Units of Competency</div>
                    <h2 class="dlm-section-title">12 Units to Complete</h2>
                    <p class="dlm-section-desc">8 core units build essential project management foundations. 4 elective units deepen specialist capabilities.</p>

                    <div class="dlm-unit-tabs" style="margin-top:28px;">
                        <button class="dlm-unit-tab active" onclick="switchTab('core', this)">Core Units (8)</button>
                        <button class="dlm-unit-tab" onclick="switchTab('elective', this)">Elective Units (4)</button>
                    </div>

                    <div id="panel-core" class="dlm-unit-panel active">
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBPMG530</span>
                            <span class="unit-title">Manage project scope</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBPMG531</span>
                            <span class="unit-title">Manage project time</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBPMG532</span>
                            <span class="unit-title">Manage project quality</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBPMG533</span>
                            <span class="unit-title">Manage project cost</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBPMG534</span>
                            <span class="unit-title">Manage project human resources</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBPMG535</span>
                            <span class="unit-title">Manage project information and communication</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBPMG536</span>
                            <span class="unit-title">Manage project risk</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBPMG540</span>
                            <span class="unit-title">Manage project integration</span>
                        </div>
                    </div>

                    <div id="panel-elective" class="dlm-unit-panel">
                        <div class="dlm-unit-row">
                            <span class="unit-badge">BSBPMG537</span>
                            <span class="unit-title">Manage project procurement</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">BSBPMG538</span>
                            <span class="unit-title">Manage project stakeholder engagement</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">BSBPMG539</span>
                            <span class="unit-title">Manage project governance</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">BSBSTR502</span>
                            <span class="unit-title">Facilitate continuous improvement</span>
                        </div>
                        <p style="font-size:13px;color:rgba(10,10,18,0.45);margin-top:12px;">Alternate elective combinations available for corporate groups or custom workplace programs (additional fees may apply).</p>
                    </div>
                </section>

                <div class="dlm-divider"></div>

                <!-- ENTRY REQUIREMENTS -->
                <section id="entry">
                    <div class="dlm-section-label">Getting Started</div>
                    <h2 class="dlm-section-title">Entry Requirements</h2>
                    <p class="dlm-section-desc">Here's exactly what you need to enrol — a simple, guided process.</p>

                    <div class="dlm-steps">
                        <div class="dlm-step">
                            <div class="dlm-step-content">
                                <h6>Complete an LLND Review</h6>
                                <p>All students must complete a Language, Literacy, Numeracy and Digital (LLND) review prior to enrolment. This ensures learners have the required foundation skills to successfully complete written assessments, project documentation, reports and planning activities. Information about the LLND process will be provided during enrolment.</p>
                            </div>
                        </div>
                        <div class="dlm-step">
                            <div class="dlm-step-content">
                                <h6>Age & Identification Requirements</h6>
                                <p>To enrol in this qualification, students must:</p>
                                <ul>
                                    <li>Be at least 18 years old</li>
                                    <li>Provide valid identification</li>
                                    <li>Have the right to study in Australia</li>
                                </ul>
                                <!--<p>⚠️ This course is not available to international students on a Student Visa (subclass 500).</p>-->
                            </div>
                        </div>
                        <div class="dlm-step">
                            <div class="dlm-step-content">
                                <h6>Digital Requirements</h6>
                                <p>As this qualification includes online learning components, students require:</p>
                                <ul>
                                    <li>Access to a computer or laptop</li>
                                    <li>A stable internet connection</li>
                                    <li>Basic to intermediate digital literacy</li>
                                    <li>Ability to use Microsoft Office or equivalent software</li>
                                </ul>
                                <p>Students may need to complete project plans, reports, presentations and documentation using digital tools.</p>
                            </div>
                        </div>
                        <div class="dlm-step">
                            <div class="dlm-step-content">
                                <h6>Support for Disability, Learning Differences or Individual Needs</h6>
                                <p>We are committed to providing inclusive learning opportunities for all students. Students who require reasonable adjustments, additional support or clarification regarding course participation are encouraged to discuss their needs during enrolment. Support services and reasonable adjustment processes are available to ensure equitable participation in training and assessment.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="dlm-divider"></div>

                <!-- DELIVERY -->
                <section id="delivery">
                    <div class="dlm-section-label">How You'll Study</div>
                    <h2 class="dlm-section-title">Flexible Delivery Options</h2>
                    <p class="dlm-section-desc">Choose the study mode that fits your schedule, experience and goals.</p>

                    <div class="dlm-delivery-cards">
                        <!--<div class="dlm-delivery-card">-->
                        <!--    <div class="dc-icon-wrap">💻</div>-->
                        <!--    <div class="dc-title">Online Self-Paced</div>-->
                        <!--    <p>Ideal for professionals who require flexibility while managing work and personal commitments. Students can study at their own pace with access to learning materials, project-based assessments and trainer support.</p>-->
                        <!--    <ul>-->
                        <!--        <li>Working professionals</li>-->
                        <!--        <li>Project coordinators seeking advancement</li>-->
                        <!--        <li>Managers responsible for project delivery</li>-->
                        <!--        <li>Individuals transitioning into PM roles</li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                        <!--<div class="dlm-delivery-card">-->
                        <!--    <div class="dc-icon-wrap">🏢</div>-->
                        <!--    <div class="dc-title">Workplace / Corporate Training</div>-->
                        <!--    <p>Designed for organisations aiming to build internal project management capability and improve project delivery outcomes. Customised delivery can align with organisational frameworks, project methodologies and workplace procedures.</p>-->
                        <!--    <ul>-->
                        <!--        <li>Customised delivery</li>-->
                        <!--        <li>Flexible elective selection</li>-->
                        <!--        <li>Aligned to business objectives</li>-->
                        <!--        <li>Group enrolment available</li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                        <div class="dlm-delivery-card">
                            <div class="dc-icon-wrap">✅</div>
                            <div class="dc-title">Recognition of Prior Learning</div>
                            <p>RPL is available for experienced professionals who already manage or coordinate projects within their roles. Through an evidence-based assessment process, candidates may achieve the qualification by demonstrating existing knowledge, skills and workplace experience.</p>
                            <ul>
                                <li>Experienced Project Coordinators</li>
                                <li>Project Managers</li>
                                <li>Operations Managers</li>
                                <li>Team Leaders managing projects</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <div class="dlm-divider"></div>

                <!-- PATHWAYS -->
                <section id="pathways">
                    <div class="dlm-section-label">Your Learning Journey</div>
                    <h2 class="dlm-section-title">Study Pathways</h2>
                    <p class="dlm-section-desc">This qualification provides strong pathways into higher-level business and leadership programs.</p>

                    <div class="dlm-pathway-flow" style="margin-top:28px;">
                        <div class="dlm-pathway-card current">
                            <div class="pf-icon">⭐</div>
                            <div class="pf-code">BSB50820</div>
                            <div class="pf-title">Diploma of Project Management</div>
                        </div>
                        <div class="dlm-pathway-arrow">→</div>
                        <div class="dlm-pathway-card">
                            <div class="pf-icon">🏆</div>
                            <div class="pf-code">BSB60720</div>
                            <div class="pf-title">Advanced Diploma of Program Management</div>
                        </div>
                        <div class="dlm-pathway-arrow">→</div>
                        <div class="dlm-pathway-card">
                            <div class="pf-icon">🏆</div>
                            <div class="pf-code">BSB60420</div>
                            <div class="pf-title">Advanced Diploma of Leadership & Management</div>
                        </div>
                        <div class="dlm-pathway-arrow">→</div>
                        <div class="dlm-pathway-card">
                            <div class="pf-icon">🎓</div>
                            <div class="pf-code">POST-GRAD</div>
                            <div class="pf-title">Graduate PM Programs / PMP / PRINCE2</div>
                        </div>
                    </div>
                    <p style="margin-top:16px; color:rgba(10,10,18,0.7);">Further study can support progression into senior project management, program management or executive leadership roles. There are no specific licensing requirements attached to this qualification. However, some industries may require additional certifications depending on project types or organisational requirements.</p>
                </section>

                <div class="dlm-divider"></div>

                <!-- WHY CHOOSE US -->
                <section id="why">
                    <div class="dlm-section-label">Why Choose Us</div>
                    <h2 class="dlm-section-title">Frequently Asked Questions</h2>
                    <p class="dlm-section-desc">Everything you need to know before enrolling.</p>

                    <div class="dlm-accordion">

                        <div class="dlm-accordion-item open">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">🏅</div>
                                <h6>Why is this qualification nationally recognised?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>The BSB50820 is part of the Business Services Training Package, regulated by the Australian Skills Quality Authority (ASQA). It is recognised by employers across every state and territory and all industry sectors in Australia as the standard for project management competence.</p>
                            </div>
                        </div>

                        <div class="dlm-accordion-item">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">📅</div>
                                <h6>How long does the course take?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>Students have up to 12 months to complete the qualification. The self-paced nature means you can progress faster if your schedule allows, or take the full duration around your work and personal commitments.</p>
                            </div>
                        </div>

                        <div class="dlm-accordion-item">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">💡</div>
                                <h6>What if I already have project management experience?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>You may be eligible for Recognition of Prior Learning (RPL). This allows you to demonstrate existing competence through workplace evidence, reducing or eliminating the need to complete traditional assessments. Our team will provide guidance regarding required documentation, workplace evidence and assessment procedures.</p>
                            </div>
                        </div>

                        <div class="dlm-accordion-item">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">🧑‍💼</div>
                                <h6>Who are your trainers?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>Our trainers are industry-experienced professionals who have managed complex projects across a range of sectors including construction, IT, government and professional services. They bring real-world context to every unit, ensuring your learning is practical and immediately applicable.</p>
                            </div>
                        </div>

                        <div class="dlm-accordion-item">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">🔒</div>
                                <h6>Are there any licensing requirements after completing the course?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>There are no specific licensing requirements attached to this qualification. However, some industries may require additional certifications depending on project types or organisational requirements. This qualification provides a strong foundation for further specialised certifications such as PMP or PRINCE2.</p>
                            </div>
                        </div>

                        <div class="dlm-accordion-item">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">🤲</div>
                                <h6>Do you offer support for learners with additional needs?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>Absolutely. We are committed to inclusive education. Students requiring reasonable adjustments, additional learning support or have specific participation needs are encouraged to discuss this during enrolment. Support services and reasonable adjustment processes ensure equitable participation for all learners.</p>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- CTA Banner -->
                <div class="dlm-cta-banner">
                    <div>
                        <h3>Ready to lead projects with confidence?</h3>
                        <p>Enrol in Australia's most respected project management diploma today.</p>
                    </div>
                    <a href="#enquiry" class="dlm-cta-btn-white">Enquire Now</a>
                </div>
            </div>
        </div>

        <!-- ============================================================
           TESTIMONIALS
           ============================================================ -->
        <section class="dlm-testimonials">
            <div class="container" style="position:relative;">
                <div class="dlm-section-label">Student Stories</div>
                <h2 class="dlm-section-title">What Our Graduates Say</h2>

                <div class="dlm-testi-cards">

                    @php
                        $reviews = [
                            ['name' => 'Carly Bishop', 'role' => 'Project Coordinator', 'text' => "I highly recommend them. I was hired before finishing my placement and love working in this industry. My teacher helped me all the way through — found me placement, very friendly, professional and caring."],
                            ['name' => 'Roslyn Brakes', 'role' => 'Project Manager', 'text' => "I completed my Diploma of Project Management with no complaints. They explained everything and were supportive throughout. They helped me find work placement quickly. Highly recommended."],
                            ['name' => 'Jess Heffernan', 'role' => 'Program Coordinator', 'text' => "Had a great experience. A huge thank you to Olivia and Margaret — I wouldn't have done it without your patience and support. Well organised, managed everything brilliantly."],
                        ];
                    @endphp

                    @foreach($reviews as $review)
                        <div class="dlm-testi-card">
                            <div class="tc-stars">★★★★★</div>
                            <p class="tc-text">"{{ $review['text'] }}"</p>
                            <div class="tc-author">
                                <div class="tc-avatar">{{ strtoupper(substr($review['name'], 0, 1)) }}</div>
                                <div>
                                    <div class="tc-name">{{ $review['name'] }}</div>
                                    <div class="tc-role">{{ $review['role'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

    </div>

    <script>
        // Tabs
        function switchTab(tab, btn) {
            document.querySelectorAll('.dlm-unit-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.dlm-unit-panel').forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById('panel-' + tab).classList.add('active');
        }

        // Accordion
        function toggleAccordion(btn) {
            const item = btn.closest('.dlm-accordion-item');
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.dlm-accordion-item').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        }

        // Active nav highlight on scroll
        const navLinks = document.querySelectorAll('.dlm-nav-step');
        const sections = document.querySelectorAll('section[id]');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(l => l.classList.remove('active'));
                    const active = document.querySelector(`.dlm-nav-step[href="#${entry.target.id}"]`);
                    if (active) active.classList.add('active');
                }
            });
        }, { rootMargin: '-20% 0px -60% 0px' });

        sections.forEach(s => observer.observe(s));

        // Smooth scroll
        navLinks.forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault();
                const target = document.querySelector(link.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });
    </script>

@endsection