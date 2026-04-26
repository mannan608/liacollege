@extends('frontend.layouts.app')
@section('title', 'BSB50420 - Diploma of Leadership and Management')
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
                            <div class="dlm-section-label">BSB50420</div>
                            <h2 class="dlm-section-title">Diploma of Leadership and Management</h2>
                            <img src="{{ asset('frontend/images/banner/leadership.png') }}" />

                            <div class="dlm-feature-cards">
                                <div class="dlm-feature-card">
                                    <p>A nationally recognised qualification designed for experienced professionals who are ready to strengthen their leadership capability, manage operational performance and guide teams toward organizational success. Delivered online, through workplace-based programs, corporate training or Recognition of Prior Learning (RPL), with up to 12 months to complete.<br /><br />
                                        Whether you are stepping into a management role, currently supervising teams, running a small business, or preparing for senior leadership responsibilities, the BSB50420 Diploma of Leadership and Management provides the advanced skills required to lead people, manage resources and achieve strategic goals. This qualification enhances your ability to communicate with influence, think critically, manage risk and drive continuous improvement in today's dynamic business environment.<br /><br />
                                        With flexible study options and structured trainer support, this nationally recognised diploma supports career growth across a wide range of industries including retail, hospitality, health, trades, finance, logistics, professional services, government and corporate sectors.<br />
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
                                        src="/widget/form/VOPxTFPA6EawBGwuOgly"
                                        style="width:100%;height:100%;border:none;border-radius:3px"
                                        id="inline-VOPxTFPA6EawBGwuOgly" 
                                        data-layout="{'id':'INLINE'}"
                                        data-trigger-type="alwaysShow"
                                        data-trigger-value=""
                                        data-activation-type="alwaysActivated"
                                        data-activation-value=""
                                        data-deactivation-type="neverDeactivate"
                                        data-deactivation-value=""
                                        data-form-name="BSB50420 Diploma of Leadership and Management"
                                        data-height="undefined"
                                        data-layout-iframe-id="inline-VOPxTFPA6EawBGwuOgly"
                                        data-form-id="VOPxTFPA6EawBGwuOgly"
                                        title="BSB50420 Diploma of Leadership and Management"
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
                <p class="dlm-section-desc">The Diploma of Leadership and Management (BSB50420) reflects the role of individuals who apply knowledge, practical skills and leadership experience to manage workplace operations and teams effectively.</p>
                <h5 style="font-family:var(--font-display);font-weight:700;margin-top:36px;margin-bottom:12px;">Throughout this qualification, you will develop the capability to:</h5>
                <div class="dlm-jobs-strip">
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Lead and manage effective workplace relationships</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Communicate with influence across diverse stakeholders</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Develop and implement operational plans</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Manage business risk and compliance</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Allocate and monitor business resources</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Build high-performing teams</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Apply emotional intelligence in leadership contexts</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Support innovation and continuous improvement</div>
                </div>
                
                <div class="dlm-divider"></div>

                <!-- WHO IT'S FOR -->
                <section id="audience">
                    <div class="dlm-section-label">Ideal Candidates</div>
                    <h2 class="dlm-section-title">This Course Is For You If…</h2>
                    <p class="dlm-section-desc">Designed for working professionals who are supervising teams, managing
                        operations, or preparing for senior leadership responsibilities.</p>

                    <div class="dlm-audience-grid">
                        <div class="dlm-audience-chip"><span class="chip-icon">👥</span> Team Leaders</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏢</span> Supervisors</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📈</span> Business Managers</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">⚙️</span> Operations Coordinators</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📋</span> Program Coordinators</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏗️</span> Department Managers</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">💼</span> Small Business Operators</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🎯</span> Career Changers</div>
                    </div>
                </section>

                <div class="dlm-divider"></div>

                <!-- OUTCOMES -->
                <section id="outcomes">
                    <div class="dlm-section-label">Course</div>
                    <h2 class="dlm-section-title">Outcomes</h2>
                    <p class="dlm-section-desc">On completion, you receive a nationally recognised <strong>BSB50420 Diploma
                            of Leadership and Management</strong> — opening doors to senior roles across every industry.</p>

                    <h5 style="font-family:var(--font-display);font-weight:700;margin-top:36px;margin-bottom:12px;">Possible
                        Job Titles After Graduating</h5>
                    <div class="dlm-audience-grid">
                        <div class="dlm-audience-chip"><span class="chip-icon">👥</span> Business Manager</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏢</span> Operations Manager</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📈</span> Team Leader</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">⚙️</span> Department Manager</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📋</span> Project Coordinator</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏗️</span> Senior Supervisor</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">💼</span> Small Business Operators</div>
                    </div>

                    <h5 style="font-family:var(--font-display);font-weight:700;margin-top:28px;margin-bottom:12px;">
                        Industries That Value This Qualification</h5>
                    <div class="dlm-industries">
                        <span class="dlm-industry-tag">🛒 Retail</span>
                        <span class="dlm-industry-tag">🍽️ Hospitality</span>
                        <span class="dlm-industry-tag">🏥 Health Services</span>
                        <span class="dlm-industry-tag">🔧 Trades & Construction</span>
                        <span class="dlm-industry-tag">💰 Financial Services</span>
                        <span class="dlm-industry-tag">🏠 Real Estate</span>
                        <span class="dlm-industry-tag">🚛 Logistics</span>
                        <span class="dlm-industry-tag">🏛️ Government</span>
                        <span class="dlm-industry-tag">📊 Professional Services</span>
                    </div>
                </section>

                <div class="dlm-divider"></div>

                <!-- UNITS -->
                <section id="units">
                    <div class="dlm-section-label">Units of Competency</div>
                    <h2 class="dlm-section-title">12 Units to Complete</h2>
                    <p class="dlm-section-desc">6 core units build essential leadership foundations. 6 elective units deepen
                        specialist capabilities.</p>

                    <div class="dlm-unit-tabs" style="margin-top:28px;">
                        <button class="dlm-unit-tab active" onclick="switchTab('core', this)">Core Units (6)</button>
                        <button class="dlm-unit-tab" onclick="switchTab('elective', this)">Elective Units (6)</button>
                    </div>

                    <div id="panel-core" class="dlm-unit-panel active">
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBCMM511</span>
                            <span class="unit-title">Communicate with influence</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBCRT511</span>
                            <span class="unit-title">Develop critical thinking in others</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBLDR523</span>
                            <span class="unit-title">Lead and manage effective workplace relationships</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBOPS502</span>
                            <span class="unit-title">Manage business operational plans</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBPEF502</span>
                            <span class="unit-title">Develop and use emotional intelligence</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">BSBTWK502</span>
                            <span class="unit-title">Manage team effectiveness</span>
                        </div>
                    </div>

                    <div id="panel-elective" class="dlm-unit-panel">
                        <div class="dlm-unit-row">
                            <span class="unit-badge">BSBOPS501</span>
                            <span class="unit-title">Manage business resources</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">BSBOPS503</span>
                            <span class="unit-title">Develop administrative systems</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">BSBOPS504</span>
                            <span class="unit-title">Manage business risk</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">BSBPEF501</span>
                            <span class="unit-title">Manage personal and professional development</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">BSBWHS521</span>
                            <span class="unit-title">Ensure a safe workplace for a work area</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">BSBXCM501</span>
                            <span class="unit-title">Lead communication in the workplace</span>
                        </div>
                        <p style="font-size:13px;color:rgba(10,10,18,0.45);margin-top:12px;">Alternate elective combinations
                            available for corporate groups or custom workplace programs.</p>
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
                                <p>All students complete a Language, Literacy, Numeracy and Digital (LLND) review prior to
                                    enrolment. This ensures you have the foundation skills required for written assessments,
                                    planning tasks and leadership documentation.</p>
                            </div>
                        </div>
                        <div class="dlm-step">
                            <div class="dlm-step-content">
                                <h6>Age & Identification</h6>
                                <p>You must be at least 18 years old, provide valid photo identification and have the right
                                    to study in Australia.</p>
                                <!--<p>⚠️ This course is not available to international students on a-->
                                <!--    Student Visa (subclass 500).</p>-->
                            </div>
                        </div>
                        <div class="dlm-step">
                            <div class="dlm-step-content">
                                <h6>Digital Access</h6>
                                <p>Since learning includes online components, you'll need:</p>
                                <ul>
                                    <li>A computer or laptop</li>
                                    <li>Stable internet connection</li>
                                    <li>Basic to intermediate digital literacy</li>
                                    <li>Microsoft Office or equivalent software</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dlm-step">
                            <div class="dlm-step-content">
                                <h6>Additional Support Available</h6>
                                <p>We're committed to inclusive education. If you require reasonable adjustments, additional
                                    learning support or have specific participation needs, our team will work with you
                                    during enrolment to ensure equitable access.</p>
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
                        <!--    <p>Study anytime, anywhere. Structured materials with full trainer support — built for busy-->
                        <!--        professionals.</p>-->
                        <!--    <ul>-->
                        <!--        <li>Study at your own schedule</li>-->
                        <!--        <li>Structured learning resources</li>-->
                        <!--        <li>Assessment guidance included</li>-->
                        <!--        <li>Dedicated trainer support</li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                        <!--<div class="dlm-delivery-card">-->
                        <!--    <div class="dc-icon-wrap">🏢</div>-->
                        <!--    <div class="dc-title">Workplace / Corporate</div>-->
                        <!--    <p>Designed for organisations building leadership capability across teams. Electives can be-->
                        <!--        tailored to your workplace goals.</p>-->
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
                            <p>Already doing the work? Get credit for your experience through an evidence-based RPL
                                assessment process.</p>
                            <ul>
                                <li>Evidence-based assessment</li>
                                <li>Suitable for experienced leaders</li>
                                <li>Guided documentation support</li>
                                <li>Fastest path to qualification</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <div class="dlm-divider"></div>

                <!-- PATHWAYS -->
                <section id="pathways">
                    <div class="dlm-section-label">Your Learning Journey</div>
                    <h2 class="dlm-section-title">Study Pathways</h2>
                    <p class="dlm-section-desc">This diploma is a powerful step toward senior and executive-level leadership
                        qualifications.</p>

                    <div class="dlm-pathway-flow" style="margin-top:28px;">
                        <div class="dlm-pathway-card">
                            <div class="pf-icon">📜</div>
                            <div class="pf-code">BSB40520</div>
                            <div class="pf-title">Cert IV in Leadership & Management</div>
                        </div>
                        <div class="dlm-pathway-arrow">→</div>
                        <div class="dlm-pathway-card current">
                            <div class="pf-icon">⭐</div>
                            <div class="pf-code">BSB50420</div>
                            <div class="pf-title">Diploma of Leadership & Management</div>
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
                            <div class="pf-title">Graduate Management Programs</div>
                        </div>
                    </div>
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
                                <p>The BSB50420 is part of the Business Services Training Package, regulated by the
                                    Australian Skills Quality Authority (ASQA). It is recognised by employers across every
                                    state and territory and all industry sectors in Australia.</p>
                            </div>
                        </div>

                        <div class="dlm-accordion-item">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">📅</div>
                                <h6>How long does the course take?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>Students have up to 12 months to complete the qualification. The self-paced nature means
                                    you can progress faster if your schedule allows, or take the full duration around your
                                    work and personal commitments.</p>
                            </div>
                        </div>

                        <div class="dlm-accordion-item">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">💡</div>
                                <h6>What if I already have management experience?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>You may be eligible for Recognition of Prior Learning (RPL). This allows you to
                                    demonstrate existing competence through workplace evidence, reducing or eliminating the
                                    need to complete traditional assessments. Our team will guide you through the process.
                                </p>
                            </div>
                        </div>

                        <div class="dlm-accordion-item">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">🧑‍💼</div>
                                <h6>Who are your trainers?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>Our trainers are industry-experienced professionals who have led teams and managed
                                    operations across a range of sectors. They bring real-world context to every unit,
                                    ensuring your learning is practical and immediately applicable.</p>
                            </div>
                        </div>

                        <div class="dlm-accordion-item">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">🔒</div>
                                <h6>Are there any licensing requirements after completing the course?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>There are no specific licensing or regulatory requirements attached to the BSB50420. It
                                    is a standalone qualification that demonstrates your leadership and management
                                    capability to employers.</p>
                            </div>
                        </div>

                        <div class="dlm-accordion-item">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">🤲</div>
                                <h6>Do you offer support for learners with additional needs?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>Absolutely. We are committed to inclusive education. Students requiring reasonable
                                    adjustments, additional learning support or have specific participation needs are
                                    encouraged to discuss this during enrolment. Support services and reasonable adjustment
                                    processes ensure equitable participation for all learners.</p>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- CTA Banner -->
                <div class="dlm-cta-banner">
                    <div>
                        <h3>Ready to lead with confidence?</h3>
                        <p>Enrol in Australia's most respected leadership diploma today.</p>
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
                            ['name' => 'Carly Bishop', 'role' => 'Individual Support', 'text' => "I highly recommend them. I was hired before finishing my placement and love working in this industry. My teacher helped me all the way through — found me placement, very friendly, professional and caring."],
                            ['name' => 'Roslyn Brakes', 'role' => 'Aged Care', 'text' => "I completed my Certificate IV in Ageing Support with no complaints. They explained everything and were supportive throughout. They helped me find work placement quickly. Highly recommended."],
                            ['name' => 'Jess Heffernan', 'role' => 'Community Service', 'text' => "Had a great experience. A huge thank you to Olivia and Margaret — I wouldn't have done it without your patience and support. Well organised, managed everything brilliantly."],
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