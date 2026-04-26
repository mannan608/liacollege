@extends('frontend.layouts.app')

@section('title', 'Work Placement')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-bar text-center py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold mb-2">Work Placement</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Work Placement</li>
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
                    <div class="block-course_content">


                        <p>Work placement is a mandatory component of all the courses we deliver, except short courses such
                            as first aid, CPR, and manual handling.</p>



                        <p>Students translate the skills they learned in the classroom-based environment into the actual
                            workplace through workplace tasks. The work placement duration is at least 120 hours for the
                            certificate level qualification and 240 hours for the diploma level.</p>



                        <p>As mentioned in the specific course pages, distance students will have to have an additional 40
                            hours on top of the mandatory work placement hours. The work placement is volunteering work. The
                            work placement is into the aged care facility, and disability facility, respectively for aged
                            care courses, disability courses.</p>



                        <h4 class="my-2"><span id="Arranging_Placement">Arranging Placement</span></h4>



                        <p>For the blended study mode of Sydney-based students, Sagarmatha College is responsible for arranging
                            the placement in the Sydney region for one time. For the distance study mode, it will be the
                            primary responsibility of the student while the college fully helps in finding the placement. In
                            some cases, we might provide the placement even for distance students, which, should have been
                            communicated in the email during the enrolment. Meaning that, if the college has assured the
                            student to provide the placement for distance students, that should have been in the enrolment
                            communication.</p>



                        <p>Thus, for the distance study mode, it is the primary responsibility of the student to find the
                            placement while the college fully supports communication, and documentation, and puts necessary
                            efforts in ensuring timely placement. Please note that placement arrangements are only in the
                            normal business context, placement can be affected if some unforeseen circumstances happen
                            beyond the control of the college.</p>



                        <h4 class="my-2"><span id="Placement_shifts">Placement shifts</span></h4>



                        <p>The usual shifts for the work placement are morning. However, arrangements of the shifts or
                            working hours can be based on mutual understanding between the facility manager/supervisor and
                            the student. The evening shift and a limited weekend-only shift are also available for some
                            courses and locations. If you are looking for a weekend-only or evening shift, it is based on
                            mutual understanding and availability. We no longer guarantee to place them at the designated
                            shift.</p>



                        <h4 class="my-2"><span id="Approaching_for_the_Placement">Approaching for the
                                Placement</span></h4>



                        <p>The student should have completed the theory assessments and must have attended all the practical
                            classes for blended study mode to start the work placement. Distance students need to complete
                            the theory assessment and obtain the first-aid certificate.</p>



                        <p>The student may send the assessments via email or bring along the printed copy to get to know the
                            trainer/assessor that they have made substantial progress in theory tasks. The trainer/assessor
                            and placement coordinator determine whether the student can start the work placement. When
                            approaching the placement, the student needs to submit the following documents:</p>



                        <ul class="list">
                            <li>Criminal history (police) check, issued within six months</li>



                            <li>Updated Vaccination Report: Covid-19 vaccination, Flu vaccination</li>



                            <li>Completion of Infection Control training (we need the certificate)</li>



                            <li>Complete screening for Working with Children Check(WWCC), NDIS worker screening, Ochre card,
                                and working with vulnerable people (WWVP) – (different state has different screening)</li>
                        </ul>



                        <p>The student does not need to submit this document to process the placement.</p>



                        <p>The student needs to make sure that all the due fees are paid before approaching the placement.
                            If the course fee is cleared and the college receives all the mentioned documents, we place the
                            student in the queue. Based on the student’s enrolled course, location preference, time
                            preference, and the availability of the placement facility, we will communicate with the
                            students when they can start the placement.</p>



                        <p>We always try to proximate the distance of the facility to the student’s residence, but the
                            distance can keep up with a reasonable travel time when using public transport. Once we arrange
                            the work placement, students cannot cancel it without any legitimate reasons. If they cancel it,
                            the college may not be liable to re-organize the placement and the student should find the
                            placement by himself/herself. If the student requests to re-organize the placement, the student
                            must pay the additional charges of $150.</p>



                        <h4 class="my-2"><span id="DocumentationPlacement_Orientation">Documentation/Placement
                                Orientation</span></h4>



                        <p>The work placement has a separate booklet (log book) in addition to the workplace tasks of the
                            assessment booklet II. The work placement booklet must be duly filled and completed during the
                            work placement. To ensure that placement is being done as per the college requirements, the
                            college will organise a mandatory placement orientation session, just before starting the
                            placement. For the blended mode students, they must attend a two-hour face-to-face session while
                            distance students must attend virtually.</p>



                        <p>All the ethical codes of practice, responsibilities of each party involved in the work placement,
                            dress code, dealing with different workplace situations, and point of contact, among others,
                            will be discussed during the placement orientation.</p>



                        <h4 class="my-2"><span id="During_the_placement">During the placement</span></h4>



                        <p>Students need to work sincerely and responsibly as if they are actual employees of the facility
                            but under the direct supervision of the facility staff all the time of their work placement. Any
                            dishonesty or disciplinary issues might result in an early termination of the placement,
                            resulting in incomplete work placement leading to the course cancellation.</p>



                        <p>If any issue arises such that you cannot continue the work placement, the student must notify the
                            college and the facility as soon as possible. Once the student can be back to the placement, the
                            remaining hours of the placement can be completed. However, to join the placement again, the
                            student must get confirmation from the facility and notify the college.</p>



                        <h4 class="my-2"><span id="After_the_placement">After the placement</span></h4>



                        <p>When the students complete the work placement, they need to make sure that they have properly
                            filled the work placement booklet; and completed all the practical tasks to be done during the
                            work placement. Also, they need to double-check the attendance, daily activity log, and
                            signature of the supervisor.</p>



                        <p>The student also needs to ensure that the workplace supervisor has provided the feedback. Once
                            they complete all the workplace-related tasks, students can submit the placement paper along
                            with the practical booklet for the final assessment.</p>                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.common.reviews')

@endsection