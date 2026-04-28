@extends('meta-service.layout.meta-page')

@section('content')
<div class="max-w-7xl mx-auto my-6 bg-white rounded-[40px] shadow-2xl overflow-hidden">

    {{-- TOP BAR --}}
    <div class="border-b px-6 md:px-10 py-5 flex flex-col md:flex-row gap-4 md:items-center md:justify-between">

        <div class="flex items-center gap-3">
            <i class="fas fa-award text-2xl text-sky-900"></i>
            <h2 class="font-extrabold text-lg md:text-xl text-slate-900">
                Leadership Institute Australia | RTO 46049
            </h2>
        </div>

        <div class="flex flex-wrap gap-3">

            <div class="bg-slate-50 border rounded-full px-4 py-2 text-sm font-semibold flex items-center gap-2">
                <i class="fas fa-check-circle text-green-600"></i>
                ASQA Approved
            </div>

            <div class="bg-slate-50 border rounded-full px-4 py-2 text-sm font-semibold flex items-center gap-2">
                <i class="fas fa-building text-green-600"></i>
                SkillsIQ Endorsed
            </div>

        </div>
    </div>

    {{-- HERO --}}
    <section class="bg-gradient-to-r from-slate-900 to-sky-900 text-white px-6 md:px-10 py-10 md:py-14">

        <div class="flex flex-col md:flex-row gap-4 md:items-center md:justify-between">

            <span class="bg-yellow-400/20 border border-yellow-300 text-sm px-4 py-2 rounded-full font-semibold w-fit">
                🏅 NATIONALLY RECOGNISED TRAINING
            </span>

            <span class="bg-orange-400 text-slate-900 px-5 py-2 rounded-full font-extrabold text-sm w-fit">
                🔥 OFFER ENDS SOON
            </span>

        </div>

        <h1 class="text-4xl md:text-6xl font-extrabold mt-6 leading-tight">
            CERTIFICATE III IN <br>
            INDIVIDUAL SUPPORT
        </h1>

        <p class="text-xl md:text-2xl text-yellow-200 font-semibold mt-4">
            Become a Certified
            <span class="border-b-4 border-orange-400">SUPPORT WORKER</span>
        </p>

        <div class="flex flex-wrap gap-3 mt-8">

            @foreach([
                'NATIONALLY RECOGNISED',
                'RECOGNITION OF PRIOR LEARNING',
                'NO STUDY REQUIRED*',
                'FASTER PROCESS'
            ] as $item)

                <div class="bg-white/10 px-5 py-3 rounded-full font-semibold text-sm md:text-base">
                    ✓ {{ $item }}
                </div>

            @endforeach

        </div>
    </section>

    {{-- FORM --}}
    <section class="-mt-4 md:-mt-8 px-4 md:px-8 pb-8">

        <div class="bg-white rounded-[30px] shadow-xl p-6 md:p-10">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                {{-- LEFT --}}
                <div>

                    <h3 class="text-3xl font-bold text-slate-900">
                        BOOK A SLOT NOW
                    </h3>

                    <p class="text-slate-500 mt-2 mb-6">
                        Limited seats — RPL fast-track assessment
                    </p>

                    <form id="leadForm" class="space-y-5">

                        <div>
                            <label class="font-semibold text-sm block mb-2">
                                Full Name
                            </label>
                            <input
                                type="text"
                                id="fullName"
                                class="w-full border rounded-full px-5 py-4 focus:outline-none focus:ring-2 focus:ring-sky-700"
                                placeholder="e.g. Sarah Johnson"
                            >
                        </div>

                        <div>
                            <label class="font-semibold text-sm block mb-2">
                                Mobile Number
                            </label>
                            <input
                                type="text"
                                id="mobile"
                                class="w-full border rounded-full px-5 py-4 focus:outline-none focus:ring-2 focus:ring-sky-700"
                                placeholder="04XX XXX XXX"
                            >
                        </div>

                        <div>
                            <label class="font-semibold text-sm block mb-2">
                                Email
                            </label>
                            <input
                                type="email"
                                id="email"
                                class="w-full border rounded-full px-5 py-4 focus:outline-none focus:ring-2 focus:ring-sky-700"
                                placeholder="sarah@example.com"
                            >
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-orange-400 hover:bg-orange-500 transition rounded-full py-4 font-extrabold text-lg text-slate-900"
                        >
                            APPLY NOW →
                        </button>

                        <div class="bg-orange-50 text-orange-700 text-center text-sm rounded-full py-3 font-semibold">
                            ⚡ Fast assessment · No hidden fees · Free eligibility check
                        </div>

                    </form>

                </div>

                {{-- RIGHT --}}
                <div class="bg-slate-50 rounded-3xl p-6">

                    <h3 class="text-2xl font-bold text-sky-900 mb-6">
                        Your Path to Certification
                    </h3>

                    @php
                        $steps = [
                            ['Free Eligibility Check', 'Initial screening to see if your experience matches the qualification.'],
                            ['Evidence Collection', 'Gather payslips, references, and photos of your work in action.'],
                            ['Assessment', 'Our assessors review your portfolio against national standards.'],
                            ['Get Certified', 'Receive your nationally recognised Certificate III.'],
                        ];
                    @endphp

                    @foreach($steps as $index => $step)
                        <div class="flex gap-4 mb-6">

                            <div class="w-10 h-10 rounded-full bg-sky-900 text-white flex items-center justify-center font-bold">
                                {{ $index + 1 }}
                            </div>

                            <div>
                                <h4 class="font-bold text-lg text-slate-900">
                                    {{ $step[0] }}
                                </h4>
                                <p class="text-sm text-slate-500">
                                    {{ $step[1] }}
                                </p>
                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </section>

    {{-- COMMON SECTION COMPONENT --}}
    @php
        $units = [
            'CHCCOM005 Communicate and work in health or community services',
            'HLTWHS002 Follow safe work practices for direct client care',
            'CHCCCS041 Recognise healthy body systems',
            'HLTINF006 Apply infection prevention and control',
            'CHCLEG001 Work legally and ethically',
            'CHCDIV001 Work with diverse people',
            'CHCCCS031 Provide individualised support',
            'CHCCCS038 Facilitate empowerment',
            'CHCCCS040 Support independence and wellbeing',
            'CHCDIS011 Strengths-based support',
            'CHCAGE011 Support people with dementia',
            'CHCPAL003 Palliative approach care',
        ];
    @endphp

    {{-- UNITS --}}
    <section class="px-4 md:px-8 pb-6">

        <div class="bg-white border rounded-[28px] overflow-hidden">

            <div class="bg-slate-50 px-6 py-5 border-b">
                <h2 class="text-2xl font-bold text-sky-900">
                    📚 Units Covered in Certificate III in Individual Support
                </h2>
            </div>

            <div class="p-6 grid md:grid-cols-2 lg:grid-cols-3 gap-4">

                @foreach($units as $unit)
                    <div class="bg-slate-50 px-4 py-3 rounded-full border-l-4 border-orange-400 text-sm font-medium">
                        {{ $unit }}
                    </div>
                @endforeach

            </div>

        </div>

    </section>

    {{-- JOB ROLES --}}
    <section class="px-4 md:px-8 pb-6">

        <div class="bg-white border rounded-[28px] overflow-hidden">

            <div class="bg-slate-50 px-6 py-5 border-b">
                <h2 class="text-2xl font-bold text-sky-900">
                    💼 Common Job Roles
                </h2>
            </div>

            <div class="p-6 flex flex-wrap gap-3">

                @foreach([
                    'Aged Care Worker',
                    'Disability Support Worker',
                    'PCA',
                    'Home Care Assistant',
                    'Community Care Worker',
                    'NDIS Support Worker'
                ] as $job)

                    <span class="bg-sky-50 px-5 py-3 rounded-full font-semibold text-sky-900">
                        {{ $job }}
                    </span>

                @endforeach

            </div>

        </div>

    </section>

    {{-- REVIEWS --}}
    <section class="px-4 md:px-8 pb-8">

        <div class="bg-white border rounded-[28px] overflow-hidden">

            <div class="bg-slate-50 px-6 py-5 border-b">
                <h2 class="text-2xl font-bold text-sky-900">
                    ⭐ What Our Graduates Say
                </h2>
            </div>

            <div class="p-6 grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach([
                    ['Michelle Tran', 'The RPL process was smooth. I got certified quickly and promoted.'],
                    ['Daniel Cooper', 'Fast, transparent and supportive assessors. Great experience.'],
                    ['Priya Sharma', 'From eligibility check to certificate only 3 weeks. Amazing.']
                ] as $review)

                    <div class="border rounded-3xl p-6 shadow-sm">

                        <div class="text-orange-400 text-lg">
                            ★★★★★
                        </div>

                        <p class="italic text-slate-600 mt-4">
                            "{{ $review[1] }}"
                        </p>

                        <div class="mt-4 font-bold text-sky-900">
                            – {{ $review[0] }}
                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- FOOTER --}}
    <div class="px-8 pb-10 text-center text-xs text-slate-400 leading-relaxed">
        *RPL pathway – no additional study required if prior experience meets criteria.
        Leadership Institute Australia (RTO 46049) offers Recognition of Prior Learning
        for eligible candidates.
    </div>

</div>

{{-- TOAST --}}
<div id="toastMsg"
     class="fixed bottom-5 left-1/2 -translate-x-1/2 bg-slate-900 text-white px-6 py-3 rounded-full hidden z-50">
</div>
@endsection
<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('leadForm');
    const toast = document.getElementById('toastMsg');

    function showToast(msg, error = false) {
        toast.innerText = msg;
        toast.classList.remove('hidden');
        toast.classList.toggle('bg-red-600', error);
        toast.classList.toggle('bg-slate-900', !error);

        setTimeout(() => {
            toast.classList.add('hidden');
        }, 3000);
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        let name = document.getElementById('fullName').value.trim();
        let mobile = document.getElementById('mobile').value.trim();
        let email = document.getElementById('email').value.trim();

        if (!name || !mobile || !email) {
            showToast('Please fill all fields.', true);
            return;
        }

        showToast('✅ Application received! We will contact you shortly.');
        form.reset();
    });

});
</script>
