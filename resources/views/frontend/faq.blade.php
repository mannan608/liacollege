@extends('frontend.layouts.app')

@section('title', 'FAQ')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-bar text-center py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold mb-2">Frequently Asked Questions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
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

                    <div class="text-center mb-5">
                        <h2 class="fw-bold">Got Questions?</h2>
                        <p class="text-muted">
                            Here are some of the most common questions students ask us.
                        </p>
                    </div>

                    <div class="accordion accordion-flush shadow-sm rounded bg-white p-3" id="faqAccordion">

                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse1">
                                    What is the difference between Certificate III and Certificate IV courses?
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Both courses are entry-level qualifications with no prior experience required.
                                    Certificate IV is more advanced and includes medication support (aged care),
                                    team leadership, communication, and coordination skills that prepare you for
                                    supervisory roles.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse2">
                                    What is the difference between accredited and non-accredited qualifications?
                                </button>
                            </h2>
                            <div id="faqCollapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Accredited qualifications are nationally recognised and regulated by ASQA,
                                    ensuring consistent training standards across Australia.
                                    Non-accredited courses focus on specific skills and do not contribute toward
                                    a nationally recognised qualification.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse3">
                                    Can I study the course online?
                                </button>
                            </h2>
                            <div id="faqCollapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, courses are offered online. However, practical and work placement
                                    components must be completed onsite. Some Certificate IV units require
                                    supervision by a registered nurse, and proof of supervision is required.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse4">
                                    Can international students enrol at Sagarmatha College?
                                </button>
                            </h2>
                            <div id="faqCollapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Sagarmatha College is a domestic RTO and does not enrol students holding a
                                    primary international student visa. Please contact reception for guidance
                                    on alternative options.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse5">
                                    Can I study disability courses without a driving license?
                                </button>
                            </h2>
                            <div id="faqCollapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, you can study both Certificate III and IV disability courses without a
                                    driving license. However, many employers now require one, so enrolment is
                                    not recommended if driving is not possible.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse6">
                                    How long does it take to complete the Aged Care course?
                                </button>
                            </h2>
                            <div id="faqCollapse6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Students have up to one year to complete the course. You may finish earlier
                                    if all theory, practical, and work placement components are successfully
                                    completed.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse7">
                                    What happens if I cannot complete the course within the 1-year period?
                                </button>
                            </h2>
                            <div id="faqCollapse7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    You must apply for a course extension before the one-year period expires by paying the
                                    extension fee.
                                    Otherwise, your enrolment will be cancelled. In special circumstances, the college may
                                    grant a free
                                    3-month extension.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse8">
                                    What happens if I cannot attend classes?
                                </button>
                            </h2>
                            <div id="faqCollapse8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Your study mode will be considered distance learning, even if you live in Sydney or
                                    nearby regions.
                                    Distance students must complete additional placement hours. If your course includes a
                                    First Aid unit,
                                    a valid First Aid certificate is required.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 9 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse9">
                                    What if I don’t have a health or nursing background?
                                </button>
                            </h2>
                            <div id="faqCollapse9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Most units are basic and do not require prior knowledge. Learning guides and resources
                                    are provided.
                                    Trainers can explain concepts when needed, but all answers must be completed by the
                                    student.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 10 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse10">
                                    Can I complete the course in one or two months?
                                </button>
                            </h2>
                            <div id="faqCollapse10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Courses include theory, practical training, and work placement. Placement requires 120
                                    hours
                                    (plus 40 additional hours for distance students). Most students complete the course
                                    within
                                    4 to 6 months.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 11 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse11">
                                    Do you offer weekend or evening placements?
                                </button>
                            </h2>
                            <div id="faqCollapse11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, but availability is limited and course-specific. Please confirm with the college.
                                    Shift changes or hour adjustments should be discussed directly with the workplace
                                    supervisor.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 12 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq12">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse12">
                                    Can I get a placement close to my home?
                                </button>
                            </h2>
                            <div id="faqCollapse12" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    We try to arrange placements close to your location, depending on availability.
                                    In Sydney, students usually travel no more than one hour using public transport.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 13 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq13">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse13">
                                    Can I arrange my own placement?
                                </button>
                            </h2>
                            <div id="faqCollapse13" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes. The college will assist with required documentation, but must communicate with the
                                    facility.
                                    Placement orientation is mandatory.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 14 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq14">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse14">
                                    What if the college cannot arrange placement at my preferred time?
                                </button>
                            </h2>
                            <div id="faqCollapse14" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Morning shift placement is guaranteed in Sydney. Afternoon or weekend shifts may require
                                    longer waiting times and are not guaranteed, especially for distance students.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 15 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq15">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse15">
                                    Can I cancel my placement after it is confirmed?
                                </button>
                            </h2>
                            <div id="faqCollapse15" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    No. Once confirmed, placement cannot be cancelled without a genuine reason such as a
                                    medical emergency.
                                    Additional charges may apply for reorganisation.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 16 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq16">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse16">
                                    What if I become sick and cannot continue the course?
                                </button>
                            </h2>
                            <div id="faqCollapse16" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    You must inform the college immediately. In special circumstances, extensions beyond one
                                    year
                                    may be granted without additional charges.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 17 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq17">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse17">
                                    What if I am away for a long time after enrolment?
                                </button>
                            </h2>
                            <div id="faqCollapse17" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Courses must be completed within the enrolment period unless there is a genuine reason.
                                    Otherwise, enrolment will be cancelled after one year.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 18 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq18">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse18">
                                    Are there additional charges apart from the course fee?
                                </button>
                            </h2>
                            <div id="faqCollapse18" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Course fees include training, materials, placement, and certification. Separate charges
                                    apply
                                    for Police Checks, Working With Children Checks, NDIS clearance, printed materials,
                                    express postage,
                                    and course extensions.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 19 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq19">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse19">
                                    Can I continue my course if I move to a regional area?
                                </button>
                            </h2>
                            <div id="faqCollapse19" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes. You will be treated as a distance student. Course fees remain unchanged, but
                                    placement
                                    conditions will follow distance student guidelines.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 20 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq20">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse20">
                                    What is blended mode and distance mode of study?
                                </button>
                            </h2>
                            <div id="faqCollapse20" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Blended mode combines face-to-face classes and distance learning.
                                    Distance mode is fully remote with no face-to-face training or onsite assessor
                                    supervision.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 21 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq21">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse21">
                                    Who are classified as domestic students at Sagarmatha College?
                                </button>
                            </h2>
                            <div id="faqCollapse21" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Sagarmatha College enrols domestic students only, including Australian or New Zealand
                                    citizens,
                                    permanent residents, and temporary visa holders with study rights (excluding student
                                    visas).
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /FAQ Section -->

    @include('frontend.common.reviews')

@endsection