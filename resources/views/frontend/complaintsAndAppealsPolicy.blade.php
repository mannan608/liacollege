@extends('frontend.layouts.app')

@section('title', 'Complaints and Appeals Policy')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-bar text-center py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold mb-2">Complaints and Appeals Policy</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Complaints and Appeals Policy</li>
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
                    <h5 class="mt-3 mb-1">Complaints Policy</h5>
                    <p>AC  has a fair and equitable process for dealing with student complaints.</p>

                    All students have the right to express a concern or problem they may be experiencing when undergoing training.  The following is an outline of the Complaints Policy.

                    <h5 class="mt-3 mb-1">Principles</h5>
                    <ul class="list">
                        <li>Complaints are treated seriously and dealt with promptly, impartially, sensitively and confidentially.</li>
                        <li>Complaints will be resolved on an individual case basis, as they arise.</li>
                        <li>All students have the right to express a concern or problem and/or lodge a complaint if they are dissatisfied with the training and assessment services that they have been provided (including through a third party) or the behavioural conduct of another learner.</li>
                        <li>All complaints are acknowledged in writing and finalized as soon as practicable.</li>
                        <li>The complaint resolution procedure is based on the understanding that no action will be taken without consulting the complainant and respondent, using a process of discussion, cooperation and conciliation.</li>
                        <li>The rights of the complainant and respondent will be acknowledged and protected throughout the complaint resolution process, including the conduct of separate interviews initially.</li>
                        <li></li>In the interest of confidentiality, the number of people involved in the resolution process will be kept to a minimum.</li>
                        <li>Final decisions will be made by the Director or an independent party to the complaint.</li>
                        <li>The complaint resolution procedure emphasises mediation and education while acknowledging that in some instances formal procedures and disciplinary action may be required.</li>
                        <li>If the complaints process fails to resolve the complaint or the complainant is not satisfied with the outcome of the complaint the matter will be referred to an independent third party for review, at the request of the complainant. All costs incurred for the third party review will be advised to the complainant.</li>
                        <li>If the complaint will take in excess of 60 calendar days to finalize will inform the complainant in writing providing the reasons why more than 60 calendar days are required.  The complainant will also be provided with regular updates on the progress of the complaint.</li>
                        <li>Victimization of complainants, respondents or anyone one else involved in the complaint resolution process will not be tolerated.</li>
                        <li>All complaints will be handled as Staff-In-Confidence and will not affect or bias the progress of the student in any current of future training. The rights of the complainant and respondent will be acknowledged and protected throughout the complaint resolution process.</li>
                    </ul>
                    <h5 class="mt-3 mb-1">Lodging a Complaint</h5>

                    Should you wish to lodge a complaint, please send your complaint to info@sagarmathacollege.edu.au please

                    <h5 class="mt-3 mb-1">Appeals Policy</h5>
                    <p>AC ensures that students have access to a fair and equitable process for appeals against assessment decisions.  An appeals and reassessment process is an integral part of all training and assessment pathways leading to a nationally recognised qualification or Statement of Attainment under the Australian Qualifications Framework (AQF).</p>

                    <ul class="list">
                        <li>Students have the right to lodge an appeal against an assessment decision if they feel they were unfairly treated during an assessment, and/or where they feel the assessment decision is incorrect and they have grounds for an appeal.</li>
                        <li>The principles of natural justice and procedural fairness are adopted at every stage of the appeal process.</li>
                        <li>The appellant can provide detail of their appeal either verbally and/or in writing.</li>
                        <li>All appeals must be lodged within 7 calendar days of the date of the assessment result notification to the student.</li>
                        <li>If the appeals process fails to resolve the appeal or the appellant is not satisfied with the outcome of the appeal, the matter will be referred to an independent third party for review, at the request of the appellant. All costs incurred for the third party review will be advised to the appellant.</li>
                        <li>Every appeal is heard by a suitably qualified independent assessor or panel, who will be asked to make an independent assessment of the application.</li>
                    <li>All appeals are acknowledged in writing and finalized as soon as practicable.</li>
                    <li>AC may charge a fee for the appeals process where an external assessor is engaged.  Should this be the case, all costs incurred will be advised to the appellant.</li>
                    <li>If the appeal will take in excess of 60 calendar days to finalize will inform the appellant in writing providing the reasons why more than 60 calendar days are required.  The appellant will also be provided with regular updates on the progress of the appeal.</li>
                    <li>AC strives to deal with appeal issues as soon as they emerge, in order to avoid further disruption or the need for a formal complaint process.</li>
                    <li>All appeals will be handled ‘In-Confidence’ and will not affect or bias the progress of the participant in any current of future training.</li>
                    </ul>
                    <h5 class="mt-3 mb-1">Grounds of appeal</h5>

                    <p>Valid grounds for an appeal against an assessment decision (where the trainee feels the assessment decision is incorrect) could include the following:</p>

                    <ul class="list">
                        <li>The judgement as to whether competency has been achieved and demonstrated was made incorrectly,</li>
                        <li>The judgement was not made in accordance with the Assessment Plan.</li>
                        <li>Alleged bias of the assessor;</li>
                        <li>Alleged lack of competence of the assessor;</li>
                        <li>Alleged wrong information from the assessor regarding the assessment process;</li>
                        <li>Alleged inappropriate assessment process for the particular competency;</li>
                        <li>Faulty or inappropriate equipment; and/or</li>
                        <li>Inappropriate conditions.</li>
                    </ul>
                    <h5 class="mt-3 mb-1">Appeal Outcomes</h5>

                    <p>Appeal outcomes may include:</p>
                    <p>Appeal is upheld; in this event the following options will be available:</p>
                    <ul class="list">
                        <li>The original assessment will be re-assessed, potentially by another assessor.</li>
                    </ul>
                    <p>Appropriate recognition will be granted.</p>
                    <p>A new assessment shall be conducted/arranged.</p>
                    <p>Appeal is rejected/ not upheld; in accordance with assessment policy the student will be required to:</p>
                    <ul class="list">
                        <li>undertake further training or experience prior to further assessment; or</li>
                        <li>re-submit further evidence; or</li>
                    </ul>
                    <p>submit/undertake a new assessment</p>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.common.reviews')

@endsection