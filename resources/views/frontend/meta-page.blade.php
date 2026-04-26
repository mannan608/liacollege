@extends('frontend.layouts.meta-page')

@php
  $trustPoints = [
    'Save Time & Money',
    'Direct RTO Certification',
    'No Study Required',
    'Fast Process',
  ];

  $quizOptions = [
    ['label' => 'Less than 2 years', 'selected' => false],
    ['label' => '2 - 5 years', 'selected' => false],
    ['label' => '5 - 10 years', 'selected' => true],
    ['label' => '10+ years', 'selected' => false],
  ];

  $courses = [
    [
      'title' => 'Ageing Support',
      'description' => 'Turn your years of dedication in aged care into a professional certification today.',
      'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAgBAtsA2KsS81pCiM3LmSVSxlTSIuS8q28vLWfdjC0oFk-SYYfMOstLSakjb9FFeO_-CI7YRXipYK-EBcfxHBC9gijbBEybHdyv3bp3E1U_oTHypeFdu95iVyV7ARadoxdg-J8ATtoRCXZkiB4RJGKz3qUeHdZyNKYNNwukwzEloBm2TeACVfVQFuD6AnhoC2HBHqVE1Qcu-UIqsY_lv8WGqDJv2gH0lZlwaZQ8YFdbzbADA4I1GOkB4LsI2BRSbVTG6eq-TerEuM',
      'alt' => 'Close-up of a compassionate aged care worker holding the hand of an elderly person in a brightly lit residential facility',
    ],
    [
      'title' => 'Disability Support',
      'description' => 'Gain official recognition for your essential work supporting individuals in the disability sector.',
      'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCUM6wp18XiOi2rpTsdrPKKN0v_GQN5pD9RpZuqthpsloOv0V35_Pl35XiqXkdPA0LXfNHrWIZ4xPoAjakrUPBU4aKwKsvFJ811axQr0hsyDgEbDw-vrBjFNrQdaGxCeEIw81y3XpR045Pc1bKNwRhWwElxA5w0UNnJyVqfDmXyaKovrYgPi17X8FBgSNz4g5TlBGSByRdB4jBq6o8TmMg_iH5dUcOJpUbUgIDrRPMTUA8bu80W-LEjvSJr5c-dUvIgsBP9R0bfCDw',
      'alt' => 'Professional health worker smiling while assisting a person with a disability in a modern community center with vibrant colors',
    ],
    [
      'title' => 'Project Management',
      'description' => 'Validate your leadership skills with a nationally recognised Diploma of Project Management.',
      'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCRQZ2RlIVHdgZHySfurmJQhyYrWdXobwrYmzYwSdGb7YNYrC1JjwZLN81HL-t0VVm1w1oPEB98ZbCOg6nvod_mBI3QYDOJPRiA9vicAjZcbE4wh2iI1vGyLUTaXA5QwJBoVSTHtZZcY1f0EbSR2SRiwU3s7o7xoWXyUZhH4oEsQ-YA1jRVYzSdNyze5Eql9Wd6DGzjBgzC92P3P5_HOxm_nFAvqWWVqeWSGNg5lLB9hDnHPPc4xQyFP9pfcPF9Ch9jZt-4YUYNow0',
      'alt' => 'A confident project manager pointing at a colorful chart during a high-stakes corporate meeting in a glass-walled office',
    ],
    [
      'title' => 'Leadership & Management',
      'description' => 'Formalise your management experience and unlock high-level career opportunities.',
      'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA9qUBBzF_n6I9zNNG2u75C-lhx6ezZYxcvP7CyidTD1JtTYf0qM5KynRxG_RGluqGxEfFhjG5nUSa7HAsw4sAeBD5TevUvBKdDSD-VMHb41P_1Z0nrbBMW_QDbUIt7cyFI6SyC4BneZ2cyWyzUfMnrocXeoQgtvAGrhhajnyICmog6ItbM0XT1CQBcIzHEZbT_F-R5wyQbLvasauP-0xENAQbu73kUDhJUlR2MnSxGb-mJJ9bf4SvthcfTl7mfYuq4jELvMMJcDbY',
      'alt' => 'Two business leaders shaking hands in front of a sleek corporate skyscraper at dawn with cool blue tones',
    ],
    [
      'title' => 'Individual Support',
      'description' => 'Certification for community and home care workers looking to advance their professional standing.',
      'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBh8qcEk4XWAvUgXYZNIITslDFmOtA6V5A8iudyczCmqoB28kg_EPs27a84OyxQlmqELgGcQR_qRmQG8EIEB5KL7kq2p6vgWU7xz1NHRWt7SaLrDLA6EmeEP1Z5I9CUX7Mt7-CjTIyUsvWGjq8sESlCtHQxn6pub1fvq9EFyM5xIikgl3M3ZjF0OqAbz2gz8aurL2UEVbGJnNg3WMp2EHi6zbK2peTXUS_KnHUF9pXBr4nPpOBbqGUYNPfRxxbA5yRy4hvLx7YFKPw',
      'alt' => 'Close up of childcare educator reading a storybook to engaged toddlers in a sun-drenched, cheerful early learning classroom',
    ],
    [
      'title' => 'Business Administration',
      'description' => 'Certify your administrative and organizational expertise with direct RTO accreditation.',
      'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLu77KWPMFsc95sMbktEmo72HOUrSqW3upOBGWh80_KdIXpbKbp-SY1jjiNRKmB2r3PSPx3dzVBsWvyiZbhGoR1KH8-H9g3U723ASYzN0-6UXf_5H-yXC7TNbpRf6R4UBptGMUvTGDLappYMjAeAyh6Rt7RU1Vr_uD3-mKKSuFt4SYgAu1ijVi1lp7cd26R7kMgT0qmYOEtpp3nweMK3skkICbeG0BP8J-QmMG9yFgK29Ebryyiyc2OT7LHeDi6TzTPQ3w_CdhoOQ',
      'alt' => 'Group of diverse corporate professionals engaged in a brainstorming session with whiteboards and sticky notes in a loft office',
    ],
  ];
@endphp

@section('content')
  <section class="max-w-7xl mx-auto px-6 py-16 md:py-24 flex flex-col items-center text-center">
    <h1 class="font-display font-bold text-4xl md:text-6xl tracking-tight text-primary mb-6 max-w-4xl">
      Get Qualified Directly from an RTO &ndash; Starting from $1000
    </h1>
    <p class="font-body text-lg md:text-xl text-on-surface-variant max-w-2xl mb-12 leading-relaxed">
      Turn your experience into a nationally recognised qualification with RPL. Become a certified Support worker, Aged Care worker, Disability care worker, Leader, project manager.
    </p>

    <div class="w-full aspect-video max-w-5xl rounded-xl overflow-hidden ambient-shadow mb-12 relative group bg-surface-container-highest">
      <img
        class="w-full h-full object-cover"
        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6pYmuVkrEfwt7pgYvXd5NQ2c76-hd7l-avTCpOMhhGZSJg9TdSpq-ySaJ7NgeNvwxO9_8iLiHowIklm5T63KGDPh_GrXaoSqZuWPskFTLicSPKL85wPPV3YM8Rn5JE3XNSehlPIH_hFTizb-nblwcCiJbkI9xJP3jPnP7uyZ2kS7aoik3-n35I2u4OLPR0xSC_f3c7tUfS7ujq9YKcLLXZVMIzgHb6J3i6esqWBK8Ob7C3wLnLg-K2gPPuy9gd8udG2GqytdDDm0"
        alt="Cinematic wide shot of diverse professional students collaborating in a high-end, modern academic library with soft natural lighting and elegant wooden finishes"
      >
      <div class="absolute inset-0 flex items-center justify-center bg-primary/20 transition-all group-hover:bg-primary/10">
        <button class="w-20 h-20 bg-surface-container-lowest rounded-full flex items-center justify-center ambient-shadow transition-transform hover:scale-110 active:scale-95" type="button" aria-label="Play video">
          <span class="material-symbols-outlined text-primary text-4xl" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
        </button>
      </div>
    </div>

    <button class="bg-primary text-on-primary px-8 py-4 rounded-xl font-semibold text-lg ambient-shadow transition-all hover:scale-105 active:scale-100 mb-8" type="button">
      Check Eligibility Now
    </button>

    <div class="flex flex-wrap justify-center gap-6 md:gap-12">
      @foreach ($trustPoints as $point)
        <div class="flex items-center gap-2">
          <span class="material-symbols-outlined text-secondary font-bold">check_circle</span>
          <span class="font-label uppercase tracking-wider text-xs font-semibold text-on-surface-variant">{{ $point }}</span>
        </div>
      @endforeach
    </div>
  </section>

  <section class="bg-primary-container py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h2 class="font-display font-bold text-2xl md:text-4xl text-on-primary leading-tight max-w-5xl mx-auto">
        We are a direct Registered Training Organisation (RTO) offering genuine, nationally recognised qualifications&mdash;ensuring a safe and reliable alternative to non-compliant providers.
      </h2>
      <div class="mt-8 inline-flex items-center px-4 py-2 bg-secondary-fixed/10 border border-secondary-fixed/20 rounded-full">
        <span class="w-3 h-3 bg-secondary-fixed rounded-full mr-3 animate-pulse"></span>
        <span class="text-secondary-fixed text-sm font-semibold tracking-wide uppercase">RTO Code 46049 Verified</span>
      </div>
    </div>
  </section>

  <section class="py-24 bg-surface-container-low">
    <div class="max-w-3xl mx-auto px-6">
      <div class="bg-surface-container-lowest rounded-xl p-8 md:p-12 ambient-shadow border border-outline-variant/15">
        <div class="mb-10">
          <div class="flex justify-between items-center mb-4">
            <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Question 3 of 7</span>
            <span class="text-xs font-bold text-primary">42% Complete</span>
          </div>
          <div class="h-2 w-full bg-surface-container-highest rounded-full overflow-hidden">
            <div class="h-full bg-secondary transition-all" style="width: 42%"></div>
          </div>
        </div>

        <div class="space-y-8">
          <h3 class="font-headline font-bold text-2xl text-primary leading-snug">
            How many years of work experience do you have in your relevant industry?
          </h3>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($quizOptions as $option)
              <button
                class="{{ $option['selected'] ? 'flex items-center p-6 bg-primary-container/5 border-2 border-primary rounded-xl transition-all text-left' : 'flex items-center p-6 bg-surface-container rounded-xl border border-outline-variant/15 hover:border-primary transition-all text-left' }}"
                type="button"
              >
                @if ($option['selected'])
                  <span class="w-6 h-6 rounded-full border-2 border-primary bg-primary flex items-center justify-center mr-4">
                    <span class="w-2 h-2 bg-white rounded-full"></span>
                  </span>
                  <span class="font-body font-bold text-primary">{{ $option['label'] }}</span>
                @else
                  <span class="w-6 h-6 rounded-full border-2 border-outline mr-4"></span>
                  <span class="font-body font-medium text-on-surface">{{ $option['label'] }}</span>
                @endif
              </button>
            @endforeach
          </div>
          <div class="flex justify-between items-center pt-6">
            <button class="text-primary font-bold flex items-center gap-2 opacity-60 hover:opacity-100 transition-opacity" type="button">
              <span class="material-symbols-outlined">arrow_back</span> Back
            </button>
            <button class="bg-primary text-on-primary px-10 py-3 rounded-lg font-bold transition-all hover:scale-105" type="button">
              Next Step
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-surface">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="font-display font-bold text-3xl md:text-4xl text-primary mb-4">Choose Your Career Path</h2>
        <p class="text-on-surface-variant max-w-xl mx-auto">Get nationally recognised qualifications through Recognition of Prior Learning.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($courses as $course)
          @include('frontend.partials.meta-page-course-card', ['course' => $course])
        @endforeach
      </div>
    </div>
  </section>
@endsection
