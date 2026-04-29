@extends('meta-service.layout.meta-page')

@section('content')
<div class="max-w-7xl mx-auto mt-0 md:mt-6 lg:mt-10 bg-white rounded-[14px] overflow-hidden">

    {{-- TOP BAR --}}
    <div class="border-b px-5 md:px-10 py-5 flex flex-col md:flex-row gap-4 md:items-center md:justify-between">

        <div class="flex items-start gap-2">
            <div class="flex-shrink-0">
                <svg class="lg:w-10 lg:h-10 md:w-8 md:h-8 w-6 h-6 text-[#0c4a6e]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor">
                    <path d="M341.9 38.1C328.5 29.9 311.6 29.9 298.2 38.1C273.8 53 258.7 57 230.1 56.4C214.4 56 199.8 64.5 192.2 78.3C178.5 103.4 167.4 114.5 142.3 128.2C128.5 135.7 120.1 150.4 120.4 166.1C121.1 194.7 117 209.8 102.1 234.2C93.9 247.6 93.9 264.5 102.1 277.9C117 302.3 121 317.4 120.4 346C120 361.7 128.5 376.3 142.3 383.9C164.4 396 175.6 406 187.4 425.4L138.7 522.5C132.8 534.4 137.6 548.8 149.4 554.7L235.4 597.7C246.9 603.4 260.9 599.1 267.1 587.9L319.9 492.8L372.7 587.9C378.9 599.1 392.9 603.5 404.4 597.7L490.4 554.7C502.3 548.8 507.1 534.4 501.1 522.5L452.5 425.3C464.2 405.9 475.5 395.9 497.6 383.8C511.4 376.3 519.8 361.6 519.5 345.9C518.8 317.3 522.9 302.2 537.8 277.8C546 264.4 546 247.5 537.8 234.1C522.9 209.7 518.9 194.6 519.5 166C519.9 150.3 511.4 135.7 497.6 128.1C472.5 114.4 461.4 103.3 447.7 78.2C440.2 64.4 425.5 56 409.8 56.3C381.2 57 366.1 52.9 341.7 38zM320 160C373 160 416 203 416 256C416 309 373 352 320 352C267 352 224 309 224 256C224 203 267 160 320 160z" />
                </svg>
            </div>
            <h2 class="font-extrabold text-base sm:text-lg md:text-xl lg:text-2xl text-[#0c4a6e] flex-1 leading-tight">
                Leadership Institute Australia | RTO 46049
            </h2>
        </div>

        <div class="flex flex-wrap gap-3">
            <div class="bg-slate-50 border rounded-full px-3 py-1.5 md:px-4 md:py-2 text-xs md:text-sm font-semibold text-green-600 flex items-center gap-2">
                <!-- Check Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                ASQA Approved
            </div>

            <div class="bg-slate-50 border rounded-full px-3 py-1.5 md:px-4 md:py-2 text-xs md:text-sm font-semibold text-green-600 flex items-center gap-2">
                <!-- Building Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V7a2 2 0 012-2h10a2 2 0 012 2v14M9 9h1m4 0h1m-6 4h1m4 0h1m-6 4h1m4 0h1" />
                </svg>
                SkillsIQ Endorsed
            </div>
        </div>
    </div>

    {{-- HERO --}}
    <section class="bg-gradient-to-r from-slate-900 to-sky-900 text-white px-6 md:px-10 py-10 md:py-14">

        <div class="flex flex-col md:flex-row gap-4 md:items-center md:justify-between justify-center items-center">

            <span class="bg-yellow-400/20 border border-yellow-300 text-sm px-4 py-2 rounded-full font-semibold w-fit">
                🏅 NATIONALLY RECOGNISED TRAINING
            </span>

            <span class="bg-orange-400 text-slate-900 px-5 py-2 rounded-full font-extrabold text-sm w-fit">
                🔥 OFFER ENDS SOON
            </span>

        </div>

        <h1 class="text-center md:text-start text-xl md:text-2xl lg:text-3xl font-extrabold mt-6 leading-tight">
            CERTIFICATE III IN <br>
            INDIVIDUAL SUPPORT
        </h1>

        <p class="text-center md:text-start text-base md:text-xl text-yellow-200 font-semibold mt-4">
            Become a Certified
            <span class="border-b-4 border-orange-400">SUPPORT WORKER</span>
        </p>

        <div class="flex flex-wrap gap-3 mt-8 justify-center md:justify-start">

            @foreach([
            'NATIONALLY RECOGNISED',
            'RECOGNITION OF PRIOR LEARNING',
            'NO STUDY REQUIRED*',
            'FASTER PROCESS'
            ] as $item)

            <div class="bg-white/10 px-5 py-3 rounded-full ">
                <h6 class="text-xs md:text-sm font-semibold"> ✓ {{ $item }}</h6>
            </div>

            @endforeach

        </div>
    </section>

    {{-- FORM --}}
    <section class="-mt-4 md:-mt-8 px-4 md:px-8 pb-8">

        <div class="bg-white rounded-3xl shadow-2xl p-5 sm:p-8 lg:p-12 overflow-hidden">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">

                <!-- LEFT SIDE -->
                <div>

                    <span class="inline-block bg-orange-100 text-orange-700 text-xs sm:text-sm font-bold px-4 py-2 rounded-full mb-4">
                        LIMITED SEATS AVAILABLE
                    </span>

                    <h2 class="text-xl sm:text-2xl lg:text-3xl font-black text-slate-900 leading-tight">
                        BOOK A SLOT NOW
                    </h2>

                    <p class="text-slate-500 text-base sm:text-lg mt-3 mb-8 leading-relaxed">
                        Fast-track your Recognition of Prior Learning (RPL) assessment and get certified quicker.
                    </p>

                    <form id="leadForm" class="space-y-5">

                        <!-- Name -->
                        <div>
                            <label class="text-sm font-semibold text-slate-700 block mb-2">
                                Full Name
                            </label>

                            <input
                                type="text"
                                id="fullName"
                                placeholder="Enter your full name"
                                class="w-full h-14 sm:h-16 px-5 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-sky-600 focus:ring-4 focus:ring-sky-100 outline-none transition text-base sm:text-lg">
                        </div>

                        <!-- Mobile -->
                        <div>
                            <label class="text-sm font-semibold text-slate-700 block mb-2">
                                Mobile Number
                            </label>

                            <input
                                type="text"
                                id="mobile"
                                placeholder="04XX XXX XXX"
                                class="w-full h-14 sm:h-16 px-5 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-sky-600 focus:ring-4 focus:ring-sky-100 outline-none transition text-base sm:text-lg">
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="text-sm font-semibold text-slate-700 block mb-2">
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="email"
                                placeholder="you@example.com"
                                class="w-full h-14 sm:h-16 px-5 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-sky-600 focus:ring-4 focus:ring-sky-100 outline-none transition text-base sm:text-lg">
                        </div>

                        <!-- Button -->
                        <button
                            type="submit"
                            class="w-full h-14 sm:h-16 rounded-2xl bg-[#0c4a6e] hover:bg-[#0c4a6e] active:scale-[0.98] transition-all text-white font-black text-sm md:text-base shadow-lg">
                            APPLY NOW →
                        </button>

                        <!-- Bottom Badge -->
                        <div class="bg-orange-50 border border-orange-100 text-orange-700 text-center text-sm sm:text-base rounded-2xl py-4 px-4 font-semibold">
                            ⚡ Fast Assessment • No Hidden Fees • Free Eligibility Check
                        </div>

                    </form>

                </div>

                <!-- RIGHT SIDE -->
                <div class="bg-gradient-to-br from-slate-50 to-sky-50 rounded-3xl p-4 sm:p-8 border border-slate-100">

                    <h3 class="text-lg sm:text-2xl font-black text-sky-900 mb-8">
                        Your Path to Certification
                    </h3>

                    @php
                    $steps = [
                    ['Free Eligibility Check', 'We review your experience and match it to the qualification.'],
                    ['Evidence Collection', 'Submit references, payslips, photos or work samples.'],
                    ['Professional Assessment', 'Qualified assessors review everything against standards.'],
                    ['Get Certified', 'Receive your nationally recognised Certificate III qualification.'],
                    ];
                    @endphp

                    <div class="space-y-4">

                        @foreach($steps as $index => $step)
                        <div class="flex items-start gap-3">

                            <!-- Number -->
                            <div class="md:min-w-[48px] md:h-[48px] min-w-[32px] h-[32px] rounded-2xl bg-sky-900 text-white flex items-center justify-center font-black text-sm md:text-base shadow-md">
                                {{ $index + 1 }}
                            </div>

                            <!-- Content -->
                            <div>
                                <h4 class="font-bold ttext-sm md:text-base text-slate-900 mb-1">
                                    {{ $step[0] }}
                                </h4>

                                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                                    {{ $step[1] }}
                                </p>
                            </div>

                        </div>
                        @endforeach

                    </div>

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

        <div class="bg-white">

            <div class="py-5">
                <h2 class="text-xl md:text-2xl font-bold text-sky-900 flex items-center gap-2">
                    <span class="text-lg flex-shrink-0 bg-gradient-to-br from-sky-100 to-blue-50 p-2 w-[44px] text-center rounded-[8px]">📚</span>
                    <span class="flex-1 leading-tight">Units Covered in Certificate III in Individual Support</span>
                </h2>
            </div>

            <div class=" grid md:grid-cols-2 lg:grid-cols-3 gap-4">

                @foreach($units as $unit)
                <div class="bg-slate-50 px-4 py-3 rounded-full border-l-4 border-[#0c4a6e] text-sm font-medium">
                    {{ $unit }}
                </div>
                @endforeach

            </div>

        </div>

    </section>

    {{-- JOB ROLES --}}
    <section class="px-4 md:px-8 pb-6">

        <div class="bg-white">

            <div class="py-5">
                <h2 class="text-xl md:text-2xl font-bold text-sky-900 flex items-center gap-2">
                    <span class="text-lg flex-shrink-0 bg-gradient-to-br from-sky-100 to-blue-50 p-2 rounded-[8px]  w-[44px] text-center">💼</span>
                    <span class="flex-1 leading-tight"> Common Job Roles</span>
                </h2>
            </div>

            <div class="flex flex-wrap gap-3 justify-center md:justify-start ">

                @foreach([
                'Aged Care Worker',
                'Disability Support Worker',
                'PCA',
                'Home Care Assistant',
                'Community Care Worker',
                'NDIS Support Worker'
                ] as $job)

                <span class="bg-sky-50 px-4 py-2 text-xs md:text-sm rounded-full font-semibold text-sky-900">
                    {{ $job }}
                </span>

                @endforeach

            </div>

        </div>

    </section>

    {{-- REVIEWS --}}
    <section class="px-4 md:px-8 pb-8">

        <div class="bg-white">

            <div class="py-5">
                <h2 class="text-xl md:text-2xl font-bold text-sky-900 flex items-center  gap-2">
                    <span class="text-lg flex-shrink-0 bg-gradient-to-br from-sky-100 to-blue-50 p-2 rounded-[8px]  w-[44px] text-center">⭐ </span>
                    <span class="flex-1 leading-tight"> What Our Graduates Say</span>
                </h2>
            </div>

            <div class=" grid md:grid-cols-2 lg:grid-cols-3 gap-4">

                @foreach([
                ['Michelle Tran', 'The RPL process was smooth. I got certified quickly and promoted.'],
                ['Daniel Cooper', 'Fast, transparent and supportive assessors. Great experience.'],
                ['Priya Sharma', 'From eligibility check to certificate only 3 weeks. Amazing.']
                ] as $review)

                <div class="border rounded-3xl p-4">

                    <div class="text-orange-400 text-base">
                        ★★★★★
                    </div>

                    <p class="italic text-slate-600 mt-4 text-sm">
                        "{{ $review[1] }}"
                    </p>

                    <div class="mt-4 font-bold text-sky-900 text-sm">
                        – {{ $review[0] }}
                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </section>

</div>

{{-- TOAST --}}
<div id="toastMsg"
    class="fixed bottom-5 left-1/2 -translate-x-1/2 bg-slate-900 text-white px-6 py-3 rounded-full hidden z-50">
</div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {

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