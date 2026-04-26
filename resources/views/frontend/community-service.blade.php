@extends('frontend.layouts.app')
@section('title', 'CHC52021 - Diploma of Community Services')
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
                            <div class="dlm-section-label">CHC52021</div>
                            <h2 class="dlm-section-title">Diploma of Community Services</h2>
                            <img src="{{ asset('frontend/images/banner/community.png') }}" alt="Community Services" />

                            <div class="dlm-feature-cards">
                                <div class="dlm-feature-card">
                                    <p>A nationally recognized qualification designed for individuals seeking to develop advanced knowledge and leadership skills within the community services sector. This course prepares learners to support individuals, families and communities facing complex challenges while coordinating services and leading community programs.<br /><br />
                                        The CHC52021 Diploma of Community Services equips students with the professional skills required to work with diverse populations, respond to complex social needs, and contribute to the development and delivery of effective support programs. This qualification can be delivered through online learning, workplace-based training, corporate training programs or Recognition of Prior Learning (RPL), with students having up to 12 months to complete the course.<br /><br />
                                        Whether you are currently working in the community services sector, seeking career progression into leadership roles, or aiming to build specialised skills in case management and service coordination, this diploma provides the practical knowledge and leadership capability required to make a meaningful impact.<br /><br />
                                        With flexible study options and structured trainer support, this nationally recognized diploma supports career opportunities across a wide range of community service organisations, government agencies, social services and non-profit sectors.<br />
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
                                        src="https://api.leadconnectorhq.com/widget/form/r7gSmBzGE4oxHv6wYG21"
                                        style="width:100%;height:100%;border:none;border-radius:3px"
                                        id="inline-r7gSmBzGE4oxHv6wYG21" 
                                        data-layout="{'id':'INLINE'}"
                                        data-trigger-type="alwaysShow"
                                        data-trigger-value=""
                                        data-activation-type="alwaysActivated"
                                        data-activation-value=""
                                        data-deactivation-type="neverDeactivate"
                                        data-deactivation-value=""
                                        data-form-name="CHC52021 Diploma of Community Services"
                                        data-height="487"
                                        data-layout-iframe-id="inline-r7gSmBzGE4oxHv6wYG21"
                                        data-form-id="r7gSmBzGE4oxHv6wYG21"
                                        title="CHC52021 Diploma of Community Services"
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
                <p class="dlm-section-desc">The Diploma of Community Services (CHC52021) reflects the role of community services workers who manage, coordinate and deliver person-centred services to individuals, families and communities experiencing social disadvantage or complex needs. Workers in these roles may support people experiencing issues such as housing instability, mental health challenges, family conflict, disability, financial hardship or social exclusion.</p>
                <h5 style="font-family:var(--font-display);font-weight:700;margin-top:36px;margin-bottom:12px;">Throughout this qualification, you will develop the capability to:</h5>
                <div class="dlm-jobs-strip">
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Manage and coordinate community service programs</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Provide person-centred support to individuals and families</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Apply case management frameworks</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Support clients with complex needs</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Work collaboratively with community organisations</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Facilitate community participation and empowerment</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Promote culturally responsive practices</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Apply legal and ethical frameworks</div>
                    <div class="dlm-job-tag"><span class="tag-dot"></span>Support continuous improvement in community programs</div>
                </div>
                
                <div class="dlm-divider"></div>

                <!-- WHO IT'S FOR -->
                <section id="audience">
                    <div class="dlm-section-label">Ideal Candidates</div>
                    <h2 class="dlm-section-title">This Course Is For You If…</h2>
                    <p class="dlm-section-desc">This course is suited to individuals who are working in or seeking leadership roles within community services.</p>

                    <div class="dlm-audience-grid">
                        <div class="dlm-audience-chip"><span class="chip-icon">👥</span> Community Support Workers</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📋</span> Case Workers</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏢</span> Welfare Support Officers</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📊</span> Community Program Coordinators</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🧑‍🤝‍🧑</span> Youth Support Workers</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏠</span> Housing Support Workers</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">👪</span> Family Support Workers</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📈</span> Individuals seeking leadership roles</div>
                    </div>
                    <p class="dlm-section-desc" style="margin-top:16px;">Delivered online, through traineeships, workplace programs or via Recognition of Prior Learning (RPL), this qualification provides flexibility for individuals balancing professional and personal commitments. Students have up to 12 months to complete the course.</p>
                </section>

                <div class="dlm-divider"></div>

                <!-- OUTCOMES -->
                <section id="outcomes">
                    <div class="dlm-section-label">Course</div>
                    <h2 class="dlm-section-title">Outcomes</h2>
                    <p class="dlm-section-desc">On successful completion, you will receive a nationally recognised <strong>CHC52021 Diploma of Community Services</strong> — demonstrating your ability to design, coordinate and deliver community support programs while assisting individuals and families to improve their wellbeing and access appropriate services.</p>

                    <h5 style="font-family:var(--font-display);font-weight:700;margin-top:36px;margin-bottom:12px;">Possible
                        Job Outcomes After Graduating</h5>
                    <div class="dlm-audience-grid">
                        <div class="dlm-audience-chip"><span class="chip-icon">👥</span> Community Services Worker</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📋</span> Case Manager</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">📊</span> Community Program Coordinator</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">👪</span> Family Support Worker</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🧑‍🤝‍🧑</span> Youth Worker</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏢</span> Welfare Support Worker</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏘️</span> Community Development Officer</div>
                        <div class="dlm-audience-chip"><span class="chip-icon">🏠</span> Housing Support Worker</div>
                    </div>

                    <h5 style="font-family:var(--font-display);font-weight:700;margin-top:28px;margin-bottom:12px;">
                        Industries That Value This Qualification</h5>
                    <div class="dlm-industries">
                        <span class="dlm-industry-tag">🏢 Community Service Organisations</span>
                        <span class="dlm-industry-tag">🏛️ Government Social Services</span>
                        <span class="dlm-industry-tag">🧑‍🤝‍🧑 Youth Support Services</span>
                        <span class="dlm-industry-tag">👪 Family Support Agencies</span>
                        <span class="dlm-industry-tag">🏠 Housing & Homelessness Services</span>
                        <span class="dlm-industry-tag">🧠 Mental Health Support</span>
                        <span class="dlm-industry-tag">🤝 Non-Profit Organisations</span>
                        <span class="dlm-industry-tag">♿ Disability & Social Inclusion Programs</span>
                    </div>
                </section>

                <div class="dlm-divider"></div>

                <!-- UNITS -->
                <section id="units">
                    <div class="dlm-section-label">Units of Competency</div>
                    <h2 class="dlm-section-title">20 Units to Complete</h2>
                    <p class="dlm-section-desc">12 core units build essential community services foundations. 8 elective units deepen specialist capabilities.</p>

                    <div class="dlm-unit-tabs" style="margin-top:28px;">
                        <button class="dlm-unit-tab active" onclick="switchTab('core', this)">Core Units (12)</button>
                        <button class="dlm-unit-tab" onclick="switchTab('elective', this)">Elective Units (8)</button>
                    </div>

                    <div id="panel-core" class="dlm-unit-panel active">
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">CHCCCS004</span>
                            <span class="unit-title">Assess co-existing needs</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">CHCCCS007</span>
                            <span class="unit-title">Develop and implement service programs</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">CHCCCS019</span>
                            <span class="unit-title">Recognise and respond to crisis situations</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">CHCCSM013</span>
                            <span class="unit-title">Facilitate and review case management</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">CHCDEV005</span>
                            <span class="unit-title">Analyse impacts of sociological factors</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">CHCDFV001</span>
                            <span class="unit-title">Recognise and respond to domestic and family violence</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">CHCDIV001</span>
                            <span class="unit-title">Work with diverse people</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">CHCLEG003</span>
                            <span class="unit-title">Manage legal and ethical compliance</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">CHCMHS001</span>
                            <span class="unit-title">Work with people with mental health issues</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">CHCPRP003</span>
                            <span class="unit-title">Reflect on and improve own professional practice</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">HLTWHS003</span>
                            <span class="unit-title">Maintain work health and safety</span>
                        </div>
                        <div class="dlm-unit-row dlm-core-badge">
                            <span class="unit-badge">CHCMGT005</span>
                            <span class="unit-title">Facilitate workplace debriefing and support processes</span>
                        </div>
                    </div>

                    <div id="panel-elective" class="dlm-unit-panel">
                        <div class="dlm-unit-row">
                            <span class="unit-badge">CHCYTH022</span>
                            <span class="unit-title">Provide services for the needs of young people</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">CHCCCS016</span>
                            <span class="unit-title">Respond to client needs</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">CHCADV001</span>
                            <span class="unit-title">Facilitate the interests and rights of clients</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">CHCPRT001</span>
                            <span class="unit-title">Identify and respond to children at risk</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">BSBPEF502</span>
                            <span class="unit-title">Develop and use emotional intelligence</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">CHCDIS019</span>
                            <span class="unit-title">Provide person-centred services to people with disability</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">CHCCCS017</span>
                            <span class="unit-title">Provide loss and grief support</span>
                        </div>
                        <div class="dlm-unit-row">
                            <span class="unit-badge">CHCCCS033</span>
                            <span class="unit-title">Identify and report abuse</span>
                        </div>
                        <p style="font-size:13px;color:rgba(10,10,18,0.45);margin-top:12px;">Alternate elective combinations available for corporate programs or customised workplace delivery (additional fees may apply).</p>
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
                                <p>All students must complete a Language, Literacy, Numeracy and Digital (LLND) review prior to enrolment. This ensures learners have the required foundation skills to successfully complete written assessments, case management documentation and program planning activities. Information about the LLND process will be provided during enrolment.</p>
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
                                <p>Students may need to complete reports, case studies, assessments and documentation using digital tools.</p>
                            </div>
                        </div>
                        <div class="dlm-step">
                            <div class="dlm-step-content">
                                <h6>Support for Disability, Learning Differences or Individual Needs</h6>
                                <p>We are committed to providing inclusive learning environments and equal access to education. Students who require reasonable adjustments, additional support or clarification regarding course participation are encouraged to discuss their needs during enrolment. Support services and reasonable adjustment processes are available to ensure equitable participation for all learners.</p>
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
                        <!--    <p>Ideal for learners who require flexibility while balancing work or family commitments. Students can study at their own pace while accessing learning materials, assessments and trainer support.</p>-->
                        <!--    <ul>-->
                        <!--        <li>Existing community service workers</li>-->
                        <!--        <li>Career changers entering social services</li>-->
                        <!--        <li>Support workers seeking leadership roles</li>-->
                        <!--        <li>Individuals balancing work and study</li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                        <!--<div class="dlm-delivery-card">-->
                        <!--    <div class="dc-icon-wrap">🏢</div>-->
                        <!--    <div class="dc-title">Workplace / Corporate Training</div>-->
                        <!--    <p>Designed for organisations aiming to develop leadership capability within their community services workforce. Training delivery can be customised to align with organisational programs, policies and service delivery frameworks.</p>-->
                        <!--    <ul>-->
                        <!--        <li>Customised delivery</li>-->
                        <!--        <li>Flexible elective selection</li>-->
                        <!--        <li>Aligned to organisational goals</li>-->
                        <!--        <li>Group enrolment available</li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                        <div class="dlm-delivery-card">
                            <div class="dc-icon-wrap">✅</div>
                            <div class="dc-title">Recognition of Prior Learning</div>
                            <p>RPL is available for individuals who already have significant experience working in community services, welfare support or case management roles. Through an evidence-based assessment process, candidates may achieve the qualification by demonstrating existing workplace knowledge, skills and experience.</p>
                            <ul>
                                <li>Community Support Workers</li>
                                <li>Case Workers</li>
                                <li>Youth Workers</li>
                                <li>Welfare Support Officers</li>
                                <li>Housing Support Workers</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <div class="dlm-divider"></div>

                <!-- PATHWAYS -->
                <section id="pathways">
                    <div class="dlm-section-label">Your Learning Journey</div>
                    <h2 class="dlm-section-title">Study Pathways</h2>
                    <p class="dlm-section-desc">This qualification provides strong pathways into higher-level education and specialised community service fields.</p>

                    <div class="dlm-pathway-flow" style="margin-top:28px;">
                        <div class="dlm-pathway-card">
                            <div class="pf-icon">📜</div>
                            <div class="pf-code">CHC42021</div>
                            <div class="pf-title">Cert IV in Community Services</div>
                        </div>
                        <div class="dlm-pathway-arrow">→</div>
                        <div class="dlm-pathway-card current">
                            <div class="pf-icon">⭐</div>
                            <div class="pf-code">CHC52021</div>
                            <div class="pf-title">Diploma of Community Services</div>
                        </div>
                        <div class="dlm-pathway-arrow">→</div>
                        <div class="dlm-pathway-card">
                            <div class="pf-icon">🎓</div>
                            <div class="pf-code">BACHELOR</div>
                            <div class="pf-title">Bachelor of Social Work / Community Services</div>
                        </div>
                        <div class="dlm-pathway-arrow">→</div>
                        <div class="dlm-pathway-card">
                            <div class="pf-icon">🏆</div>
                            <div class="pf-code">POST-GRAD</div>
                            <div class="pf-title">Postgraduate Qualifications</div>
                        </div>
                    </div>
                    
                    <h5 style="font-family:var(--font-display);font-weight:700;margin-top:28px;margin-bottom:12px;">Licensing Requirements</h5>
                    <p style="color:rgba(10,10,18,0.7);">There are no specific licensing requirements attached to this qualification. However, depending on the workplace, employers may require:</p>
                    <ul style="color:rgba(10,10,18,0.7); margin-bottom:20px;">
                        <li>National Police Check</li>
                        <li>Working With Children Check</li>
                        <li>NDIS Worker Screening Check</li>
                        <li>Evidence of vaccinations</li>
                    </ul>
                    <p style="color:rgba(10,10,18,0.7);">These requirements may vary depending on the organisation and service area.</p>
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
                                <p>The CHC52021 is part of the Community Services Training Package, regulated by the Australian Skills Quality Authority (ASQA). It is recognised by employers across every state and territory and all community service sectors in Australia as the standard for community services practice.</p>
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
                                <h6>What if I already have community services experience?</h6>
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
                                <p>Our trainers are industry-experienced professionals who have worked in community services, case management and social support roles across a range of sectors. They bring real-world context to every unit, ensuring your learning is practical and immediately applicable.</p>
                            </div>
                        </div>

                        <div class="dlm-accordion-item">
                            <button class="dlm-accordion-trigger" onclick="toggleAccordion(this)">
                                <div class="acc-icon">🔒</div>
                                <h6>Are there any licensing requirements after completing the course?</h6>
                                <span class="acc-chevron">▼</span>
                            </button>
                            <div class="dlm-accordion-body">
                                <p>There are no specific licensing requirements attached to this qualification. However, depending on your workplace, employers may require a National Police Check, Working With Children Check, NDIS Worker Screening Check or evidence of vaccinations. These requirements vary depending on the organisation and service area.</p>
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
                        <h3>Ready to make a meaningful impact?</h3>
                        <p>Enrol in Australia's most respected community services diploma today.</p>
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
                            ['name' => 'Carly Bishop', 'role' => 'Community Support Worker', 'text' => "I highly recommend them. I was hired before finishing my placement and love working in this industry. My teacher helped me all the way through — found me placement, very friendly, professional and caring."],
                            ['name' => 'Roslyn Brakes', 'role' => 'Case Manager', 'text' => "I completed my Diploma of Community Services with no complaints. They explained everything and were supportive throughout. They helped me find work placement quickly. Highly recommended."],
                            ['name' => 'Jess Heffernan', 'role' => 'Youth Worker', 'text' => "Had a great experience. A huge thank you to Olivia and Margaret — I wouldn't have done it without your patience and support. Well organised, managed everything brilliantly."],
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