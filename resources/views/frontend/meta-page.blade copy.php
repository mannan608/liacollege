<!-- fgdhfgdhf -->

@php
    $qualifications = [
        [
            'title' => 'Ageing Support',
            'description' => 'Turn your aged care experience into a nationally recognised qualification.',
            'image' => asset('frontend/images/banner/ageing.png'),
            'url' => url('ageing-support'),
        ],
        [
            'title' => 'Disability Support',
            'description' => 'Gain official recognition for your work supporting people with disability.',
            'image' => asset('frontend/images/course/b1.jpg'),
            'url' => url('disability-support'),
        ],
        [
            'title' => 'Project Management',
            'description' => 'Validate your project delivery and leadership skills with a recognised diploma.',
            'image' => asset('frontend/images/banner/project-management.png'),
            'url' => url('project-management'),
        ],
        [
            'title' => 'Leadership & Management',
            'description' => 'Formalise your management experience and unlock higher level opportunities.',
            'image' => asset('frontend/images/banner/leadership.png'),
            'url' => url('leadership-management'),
        ],
        [
            'title' => 'Individual Support',
            'description' => 'Certification for home care, community care and personal support workers.',
            'image' => asset('frontend/images/banner/individual.png'),
            'url' => url('individual-support'),
        ],
        [
            'title' => 'Community Services',
            'description' => 'Recognise your community services experience through a direct RTO pathway.',
            'image' => asset('frontend/images/banner/community_services.png'),
            'url' => url('community-services'),
        ],
    ];

    $trustPoints = [
        'Save time and money',
        'Direct RTO certification',
        'No repeat study where RPL applies',
        'Fast eligibility check',
    ];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Academic Authority | Leadership Institute Australia</title>
    <meta name="description" content="Turn your experience into a nationally recognised qualification through RPL with Leadership Institute Australia.">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/logo/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: '#000a1e',
                        navy: '#002147',
                        leaf: '#1b6d24',
                        mist: '#f8f9fa',
                        line: '#d9dde5',
                    },
                    fontFamily: {
                        body: ['Inter', 'sans-serif'],
                        display: ['Manrope', 'sans-serif'],
                    },
                    boxShadow: {
                        soft: '0 20px 45px rgba(0, 33, 71, 0.08)',
                    },
                },
            },
        };
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 500, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-mist font-body text-slate-900 antialiased">
    <header class="sticky top-0 z-40 border-b border-line/70 bg-white/90 backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <a href="{{ url('/') }}" class="font-display text-lg font-extrabold tracking-tight text-navy">
                The Academic Authority
            </a>
            <a href="{{ url('application') }}" class="rounded-lg bg-ink px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-navy">
                Check Eligibility
            </a>
        </div>
    </header>

    <main>
        <section class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-16 md:grid-cols-[1fr_0.9fr] md:py-24">
            <div>
                <p class="mb-4 inline-flex items-center rounded-full border border-leaf/20 bg-white px-4 py-2 text-sm font-semibold text-leaf">
                    RTO Code 46049 Verified
                </p>
                <h1 class="font-display text-4xl font-extrabold leading-tight tracking-tight text-ink md:text-6xl">
                    Get qualified directly from an RTO, starting from $1000
                </h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600">
                    Turn your workplace experience into a nationally recognised qualification with Recognition of Prior Learning. Build a pathway into support work, aged care, disability care, leadership, project management and community services.
                </p>
                <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ url('application') }}" class="inline-flex items-center justify-center rounded-xl bg-ink px-7 py-4 font-semibold text-white shadow-soft transition hover:bg-navy">
                        Check Eligibility Now
                    </a>
                    <a href="#qualifications" class="inline-flex items-center justify-center rounded-xl border border-line bg-white px-7 py-4 font-semibold text-ink transition hover:border-ink">
                        View Qualifications
                    </a>
                </div>
                <div class="mt-10 grid gap-4 sm:grid-cols-2">
                    @foreach($trustPoints as $point)
                        <div class="flex items-center gap-3 text-sm font-semibold uppercase tracking-wide text-slate-600">
                            <span class="material-symbols-outlined text-leaf">check_circle</span>
                            {{ $point }}
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="overflow-hidden rounded-2xl bg-white shadow-soft ring-1 ring-line">
                <img
                    src="{{ asset('frontend/images/banner/embark.png') }}"
                    alt="Leadership Institute Australia students"
                    class="h-full min-h-[360px] w-full object-cover"
                >
            </div>
        </section>

        <section class="bg-navy px-6 py-20 text-white">
            <div class="mx-auto max-w-5xl text-center">
                <h2 class="font-display text-3xl font-extrabold leading-tight md:text-4xl">
                    A direct Registered Training Organisation offering genuine, nationally recognised qualifications.
                </h2>
                <p class="mx-auto mt-5 max-w-3xl text-base leading-7 text-white/75">
                    Get a reliable alternative to non-compliant providers, with clear eligibility checks and a process built around evidence from your real work experience.
                </p>
            </div>
        </section>

        <section class="bg-white px-6 py-20">
            <div class="mx-auto max-w-3xl rounded-2xl border border-line bg-mist p-8 shadow-soft md:p-12">
                <div class="mb-8">
                    <div class="mb-3 flex items-center justify-between text-xs font-bold uppercase tracking-widest text-slate-500">
                        <span>Eligibility Check</span>
                        <span>3 of 7</span>
                    </div>
                    <div class="h-2 overflow-hidden rounded-full bg-slate-200">
                        <div class="h-full w-[42%] rounded-full bg-leaf"></div>
                    </div>
                </div>

                <h3 class="font-display text-2xl font-extrabold text-ink">
                    How many years of work experience do you have in your relevant industry?
                </h3>

                <div class="mt-8 grid gap-4 md:grid-cols-2">
                    @foreach(['Less than 2 years', '2 - 5 years', '5 - 10 years', '10+ years'] as $option)
                        <button type="button" class="flex items-center rounded-xl border {{ $option === '5 - 10 years' ? 'border-ink bg-white' : 'border-line bg-white/70' }} p-5 text-left font-semibold text-ink transition hover:border-ink">
                            <span class="mr-4 flex h-6 w-6 rounded-full border-2 {{ $option === '5 - 10 years' ? 'border-ink bg-ink' : 'border-slate-400' }}">
                                @if($option === '5 - 10 years')
                                    <span class="m-auto h-2 w-2 rounded-full bg-white"></span>
                                @endif
                            </span>
                            {{ $option }}
                        </button>
                    @endforeach
                </div>

                <div class="mt-8 flex items-center justify-between gap-4">
                    <button type="button" class="inline-flex items-center gap-2 font-semibold text-slate-500">
                        <span class="material-symbols-outlined">arrow_back</span>
                        Back
                    </button>
                    <a href="{{ url('application') }}" class="rounded-lg bg-ink px-7 py-3 font-bold text-white transition hover:bg-navy">
                        Next Step
                    </a>
                </div>
            </div>
        </section>

        <section id="qualifications" class="px-6 py-20">
            <div class="mx-auto max-w-7xl">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <h2 class="font-display text-3xl font-extrabold text-ink md:text-4xl">Choose Your Career Path</h2>
                    <p class="mt-4 text-slate-600">Get nationally recognised qualifications through Recognition of Prior Learning.</p>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($qualifications as $qualification)
                        @include('frontend.partials.meta-page-course-card', ['qualification' => $qualification])
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-line bg-white px-6 py-12">
        <div class="mx-auto grid max-w-7xl gap-10 md:grid-cols-2">
            <div>
                <h2 class="font-display text-lg font-extrabold text-navy">The Academic Authority</h2>
                <ul class="mt-5 space-y-3 text-sm leading-6 text-slate-600">
                    <li>Phone: 1300 000 000</li>
                    <li>Email: info@theacademicauthority.edu.au</li>
                    <li>Location: Melbourne, Victoria, Australia</li>
                </ul>
            </div>
            <div class="md:text-right">
                <h2 class="text-xs font-bold uppercase tracking-[0.2em] text-ink">Accreditation</h2>
                <p class="mt-5 text-sm leading-6 text-slate-600">
                    Registered Training Organisation (RTO)<br>
                    <strong>Provider No. 46049</strong>
                </p>
            </div>
        </div>
        <div class="mx-auto mt-10 flex max-w-7xl flex-col gap-4 border-t border-line pt-6 text-sm text-slate-500 md:flex-row md:items-center md:justify-between">
            <p>&copy; {{ date('Y') }} Leadership Institute Australia. All rights reserved.</p>
            <div class="flex gap-5">
                <a href="#" class="hover:text-ink">Privacy Policy</a>
                <a href="#" class="hover:text-ink">Terms of Service</a>
                <a href="#" class="hover:text-ink">Governance</a>
            </div>
        </div>
    </footer>
</body>
</html>
