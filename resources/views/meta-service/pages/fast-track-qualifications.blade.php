@extends('meta-service.layout.meta-page')

@php
$trustPoints = [
'Save Time & Money',
'Direct RTO Certification',
'No Study Required',
'Fast Process',
];

$courses = [
[
'title' => 'Ageing Support',
'slug'=>'ageing-support',
'description' => 'Turn your years of dedication in aged care into a professional certification today.',
'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAgBAtsA2KsS81pCiM3LmSVSxlTSIuS8q28vLWfdjC0oFk-SYYfMOstLSakjb9FFeO_-CI7YRXipYK-EBcfxHBC9gijbBEybHdyv3bp3E1U_oTHypeFdu95iVyV7ARadoxdg-J8ATtoRCXZkiB4RJGKz3qUeHdZyNKYNNwukwzEloBm2TeACVfVQFuD6AnhoC2HBHqVE1Qcu-UIqsY_lv8WGqDJv2gH0lZlwaZQ8YFdbzbADA4I1GOkB4LsI2BRSbVTG6eq-TerEuM',
'alt' => 'Close-up of a compassionate aged care worker holding the hand of an elderly person in a brightly lit residential facility',
],
[
'title' => 'Disability Support',
'slug'=>'disability-support',
'description' => 'Gain official recognition for your essential work supporting individuals in the disability sector.',
'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCUM6wp18XiOi2rpTsdrPKKN0v_GQN5pD9RpZuqthpsloOv0V35_Pl35XiqXkdPA0LXfNHrWIZ4xPoAjakrUPBU4aKwKsvFJ811axQr0hsyDgEbDw-vrBjFNrQdaGxCeEIw81y3XpR045Pc1bKNwRhWwElxA5w0UNnJyVqfDmXyaKovrYgPi17X8FBgSNz4g5TlBGSByRdB4jBq6o8TmMg_iH5dUcOJpUbUgIDrRPMTUA8bu80W-LEjvSJr5c-dUvIgsBP9R0bfCDw',
'alt' => 'Professional health worker smiling while assisting a person with a disability in a modern community center with vibrant colors',
],
[
'title' => 'Project Management',
'slug'=>'project-management',
'description' => 'Validate your leadership skills with a nationally recognised Diploma of Project Management.',
'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCRQZ2RlIVHdgZHySfurmJQhyYrWdXobwrYmzYwSdGb7YNYrC1JjwZLN81HL-t0VVm1w1oPEB98ZbCOg6nvod_mBI3QYDOJPRiA9vicAjZcbE4wh2iI1vGyLUTaXA5QwJBoVSTHtZZcY1f0EbSR2SRiwU3s7o7xoWXyUZhH4oEsQ-YA1jRVYzSdNyze5Eql9Wd6DGzjBgzC92P3P5_HOxm_nFAvqWWVqeWSGNg5lLB9hDnHPPc4xQyFP9pfcPF9Ch9jZt-4YUYNow0',
'alt' => 'A confident project manager pointing at a colorful chart during a high-stakes corporate meeting in a glass-walled office',
],
[
'title' => 'Leadership & Management',
'slug'=>'leadership-management',
'description' => 'Formalise your management experience and unlock high-level career opportunities.',
'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA9qUBBzF_n6I9zNNG2u75C-lhx6ezZYxcvP7CyidTD1JtTYf0qM5KynRxG_RGluqGxEfFhjG5nUSa7HAsw4sAeBD5TevUvBKdDSD-VMHb41P_1Z0nrbBMW_QDbUIt7cyFI6SyC4BneZ2cyWyzUfMnrocXeoQgtvAGrhhajnyICmog6ItbM0XT1CQBcIzHEZbT_F-R5wyQbLvasauP-0xENAQbu73kUDhJUlR2MnSxGb-mJJ9bf4SvthcfTl7mfYuq4jELvMMJcDbY',
'alt' => 'Two business leaders shaking hands in front of a sleek corporate skyscraper at dawn with cool blue tones',
],
[
'title' => 'Individual Support',
'slug'=>'individual-support',
'description' => 'Certification for community and home care workers looking to advance their professional standing.',
'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBh8qcEk4XWAvUgXYZNIITslDFmOtA6V5A8iudyczCmqoB28kg_EPs27a84OyxQlmqELgGcQR_qRmQG8EIEB5KL7kq2p6vgWU7xz1NHRWt7SaLrDLA6EmeEP1Z5I9CUX7Mt7-CjTIyUsvWGjq8sESlCtHQxn6pub1fvq9EFyM5xIikgl3M3ZjF0OqAbz2gz8aurL2UEVbGJnNg3WMp2EHi6zbK2peTXUS_KnHUF9pXBr4nPpOBbqGUYNPfRxxbA5yRy4hvLx7YFKPw',
'alt' => 'Close up of childcare educator reading a storybook to engaged toddlers in a sun-drenched, cheerful early learning classroom',
],
[
'title' => 'Business Administration',
'slug'=>'business-administration',
'description' => 'Certify your administrative and organizational expertise with direct RTO accreditation.',
'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLu77KWPMFsc95sMbktEmo72HOUrSqW3upOBGWh80_KdIXpbKbp-SY1jjiNRKmB2r3PSPx3dzVBsWvyiZbhGoR1KH8-H9g3U723ASYzN0-6UXf_5H-yXC7TNbpRf6R4UBptGMUvTGDLappYMjAeAyh6Rt7RU1Vr_uD3-mKKSuFt4SYgAu1ijVi1lp7cd26R7kMgT0qmYOEtpp3nweMK3skkICbeG0BP8J-QmMG9yFgK29Ebryyiyc2OT7LHeDi6TzTPQ3w_CdhoOQ',
'alt' => 'Group of diverse corporate professionals engaged in a brainstorming session with whiteboards and sticky notes in a loft office',
],
];
@endphp

@section('content')
<section class="max-w-7xl mx-auto px-5 py-3 md:py-12 flex flex-col items-center text-center">
  <h1 class="font-display font-bold text-lg sm:text-xl md:text-2xl lg:text-3xl tracking-tight text-primary mb-3 max-w-4xl">
    Get Qualified Directly from an RTO &ndash; Starting from $1000
  </h1>
  <p class="font-body text-sm md:text-md lg:text-lg text-on-surface-variant max-w-2xl mb-6 leading-relaxed">
    Turn your experience into a nationally recognised qualification with RPL. Become a certified Support worker, Aged Care worker, Disability care worker, Leader, project manager.
  </p>

  <div class="flex flex-wrap justify-center gap-2 md:gap-6 mb-8 md:mb-12">
    @foreach ($trustPoints as $point)
    <div class="flex items-center gap-2">
      <span class="material-symbols-outlined text-secondary font-bold">check_circle</span>
      <span class="font-label uppercase tracking-wider text-xs font-semibold text-on-surface-variant">{{ $point }}</span>
    </div>
    @endforeach
  </div>

  <div
    id="introVideo"
    class="w-full aspect-video max-w-5xl rounded-xl overflow-hidden ambient-shadow mb-6 md:mb-12 relative group bg-surface-container-highest"
    data-video-id="Cy8u0pLZEOU">
    <iframe
      id="youtubePlayer"
      class="absolute inset-0 h-full w-full opacity-0 transition-opacity duration-300"
      title="LIA Collage introduction video"
      src=""
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

    <button
      id="playOverlay"
      type="button"
      class="absolute inset-0 z-10 flex items-center justify-center overflow-hidden bg-primary/20 transition-opacity duration-300 focus:outline-none focus-visible:ring-4 focus-visible:ring-secondary/70"
      aria-label="Play video">
      <img
        class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
        src="https://img.youtube.com/vi/Cy8u0pLZEOU/hqdefault.jpg"
        alt=""
        aria-hidden="true"
        loading="lazy">
      <span class="absolute inset-0 bg-primary/25 transition-colors group-hover:bg-primary/10"></span>
      <span class="relative flex h-16 w-16 items-center justify-center rounded-full bg-[#ff0000] shadow-2xl transition-transform duration-200 group-hover:scale-110 group-active:scale-95 md:h-20 md:w-20">
        <span class="material-symbols-outlined text-white text-4xl md:text-5xl" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
      </span>
    </button>
  </div>
    <button
    type="button"
    onclick="document.getElementById('metaPageQuiz').scrollIntoView({ behavior: 'smooth', block: 'center' })"
    class="bg-primary text-on-primary md:px-8 md:py-4 px-4 py-2 rounded-xl font-semibold text-xs md:text-lg shadow-lg transition-all hover:scale-105 active:scale-100 mb-8">
    Check Eligibility Now
  </button>


</section>

<section class="bg-primary-container py-8 md:py-12 lg:py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="font-display  text-base md:text-lg lg:text-xl text-on-primary leading-text max-w-5xl mx-auto">
      We are a direct Registered Training Organisation (RTO) offering genuine, nationally recognised qualifications&mdash;ensuring a safe and reliable alternative to non-compliant providers.
    </h2>
    <div class="mt-8 inline-flex items-center px-4 py-2 bg-secondary-fixed/10 border border-secondary-fixed/20 rounded-full">
      <span class="w-3 h-3 bg-secondary-fixed rounded-full mr-3 animate-pulse"></span>
      <span class="text-secondary-fixed text-xs md:text-sm font-semibold tracking-wide uppercase">RTO Code 46049 Verified</span>
    </div>
  </div>
</section>

<section class="py-8 md:py-12 lg:py-16 bg-surface-container-low">
  <div class="max-w-3xl mx-auto px-0 md:px-6">
    <div id="metaPageQuiz" class="bg-surface-container-lowest md:rounded-xl p-4 md:p-6 lg:p-8 ambient-shadow border border-outline-variant/15">
      @include('meta-service.component.rpllead-form')
    </div>
  </div>
</section>

<section class="py-8 md:py-12 lg:py-16 bg-surface">
  <div class="max-w-7xl mx-auto px-5">
    <div class="text-center md:mb-12 mb-6">
      <h2 class="font-display font-bold text-lg md:text-xl lg:text-2xl text-primary mb-4">Choose Your Career Path</h2>
      <p class="text-on-surface-variant max-w-xl mx-auto text-sm md:text-base lg:text-lg">Get nationally recognised qualifications through Recognition of Prior Learning.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach ($courses as $course)
      @include('meta-service.component.meta-page-course-card', ['course' => $course])
      @endforeach
    </div>
  </div>
</section>

<section class="py-8 md:py-12 lg:py-16 bg-surface">
  <div class="max-w-7xl mx-auto px-5">

   </div>
</section>

@endsection

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const video = document.getElementById('introVideo');
    const overlay = document.getElementById('playOverlay');
    const iframe = document.getElementById('youtubePlayer');

    if (!video || !overlay || !iframe) {
      return;
    }

    overlay.addEventListener('click', function() {
      const videoId = video.dataset.videoId;

      iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1&playsinline=1`;
      iframe.classList.remove('opacity-0');
      iframe.classList.add('opacity-100');
      overlay.classList.add('opacity-0', 'pointer-events-none');
      overlay.setAttribute('aria-hidden', 'true');
      overlay.setAttribute('tabindex', '-1');
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const quizContainer = document.getElementById('metaPageQuiz');

    if (!quizContainer) {
      return;
    }

    function showErrors(form, errors, fallbackMessage) {
      form.querySelectorAll('[data-error-for]').forEach(function(element) {
        element.textContent = '';
        element.classList.add('hidden');
      });

      const generalError = form.querySelector('[data-quiz-error]');
      if (generalError) {
        generalError.textContent = fallbackMessage || 'Please check the highlighted fields.';
        generalError.classList.remove('hidden');
      }

      Object.entries(errors || {}).forEach(function([field, messages]) {
        const errorElement = form.querySelector(`[data-error-for="${field}"]`);

        if (!errorElement) {
          return;
        }

        errorElement.textContent = messages[0] || 'This field is required.';
        errorElement.classList.remove('hidden');
      });
    }

    function replaceQuizStep(html) {
      quizContainer.innerHTML = html;
      quizContainer.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
      });
    }

    quizContainer.addEventListener('submit', async function(event) {
      const form = event.target.closest('#metaPageQuizForm');

      if (!form) {
        return;
      }

      event.preventDefault();

      const submitButton = form.querySelector('button[type="submit"]');
      submitButton.disabled = true;

      try {
        const response = await fetch(form.action, {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
          },
          body: new FormData(form),
        });
        const data = await response.json();

        if (!response.ok) {
          showErrors(form, data.errors, data.message);

          if (data.html) {
            replaceQuizStep(data.html);
          }

          return;
        }

        replaceQuizStep(data.html);
      } catch (error) {
        showErrors(form, {}, 'Something went wrong. Please try again.');
      } finally {
        submitButton.disabled = false;
      }
    });

    quizContainer.addEventListener('click', async function(event) {
      const backButton = event.target.closest('[data-quiz-back]');

      if (!backButton || backButton.disabled) {
        return;
      }

      const form = backButton.closest('form');
      const currentStep = Number(form.dataset.step || 1);
      const previousStep = Math.max(1, currentStep - 1);

      backButton.disabled = true;

      try {
        const response = await fetch(`/meta-page/quiz/${previousStep}`, {
          headers: {
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
          },
        });
        const data = await response.json();

        if (response.ok && data.html) {
          replaceQuizStep(data.html);
        }
      } finally {
        backButton.disabled = false;
      }
    });
  });
</script>

<!-- Animation -->
<style>
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: scale(.92);
    }

    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  .animate-fadeIn {
    animation: fadeIn .3s ease;
  }

  .quiz-input:checked+.quiz-card {
    border-color: var(--md-sys-color-primary, #002147);
    border-width: 1px;
    background-color: rgb(0 33 71 / 0.05);
  }

  .quiz-input:checked+.quiz-card .quiz-radio {
    border-color: var(--md-sys-color-primary, #002147);
    background-color: var(--md-sys-color-primary, #002147);
  }

  .quiz-input:checked+.quiz-card .quiz-dot {
    display: block;
  }

  .quiz-input:checked+.quiz-card .quiz-label {
    color: var(--md-sys-color-primary, #002147);
    font-weight: 700;
  }
</style>