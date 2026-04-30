<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'The Academic Authority | Leadership Institute Australia')</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            'secondary-container': '#a0f399',
            'inverse-surface': '#2e3132',
            'surface-bright': '#f8f9fa',
            'outline-variant': '#c4c6cf',
            'on-tertiary-fixed-variant': '#0c5216',
            'on-tertiary-container': '#559752',
            'on-primary-fixed': '#001b3d',
            secondary: '#1b6d24',
            'tertiary-container': '#002805',
            'primary-fixed': '#d6e3ff',
            'primary-container': '#002147',
            'tertiary-fixed': '#acf4a4',
            'inverse-on-surface': '#f0f1f2',
            'surface-container-lowest': '#ffffff',
            'on-primary-container': '#708ab5',
            'on-secondary-container': '#217128',
            'on-secondary-fixed-variant': '#005312',
            'tertiary-fixed-dim': '#91d78a',
            outline: '#74777f',
            'surface-tint': '#465f88',
            'surface-container-highest': '#e1e3e4',
            'surface-container': '#edeeef',
            'on-surface': '#191c1d',
            error: '#ba1a1a',
            'on-tertiary': '#ffffff',
            'on-secondary-fixed': '#002204',
            'secondary-fixed-dim': '#88d982',
            'on-primary-fixed-variant': '#2d476f',
            tertiary: '#000e01',
            'error-container': '#ffdad6',
            'on-error': '#ffffff',
            'surface-container-high': '#e7e8e9',
            'on-secondary': '#ffffff',
            'on-primary': '#ffffff',
            background: '#f8f9fa',
            'surface-container-low': '#f3f4f5',
            'secondary-fixed': '#a3f69c',
            'primary-fixed-dim': '#aec7f6',
            'surface-dim': '#d9dadb',
            primary: '#000a1e',
            'on-background': '#191c1d',
            surface: '#f8f9fa',
            'on-tertiary-fixed': '#002203',
            'on-surface-variant': '#44474e',
            'inverse-primary': '#aec7f6',
            'on-error-container': '#93000a',
            'surface-variant': '#e1e3e4',
          },
          borderRadius: {
            DEFAULT: '0.25rem',
            lg: '0.5rem',
            xl: '0.75rem',
            full: '9999px',
          },
          fontFamily: {
            headline: ['Manrope'],
            display: ['Manrope'],
            body: ['Inter'],
            label: ['Inter'],
          },
        },
      },
    };
  </script>
  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .glass-effect {
      backdrop-filter: blur(24px);
      -webkit-backdrop-filter: blur(24px);
    }

    .ambient-shadow {
      box-shadow: 0 20px 40px rgba(0, 33, 71, 0.06);
    }
  </style>
</head>

<body class="bg-surface font-body text-on-surface antialiased overflow-x-hidden">
  <header class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-slate-950/80 backdrop-blur-xl shadow-sm px-6 py-4 flex justify-center items-center">
    <a href="/">
      <img src="{{ asset('assets/img/lialogo.webp') }}" alt="The Academic Authority Logo" class="h-12 md:h-16 lg:h-20">
    </a>
  </header>

  <main class="pt-24">
    @yield('content')
  </main>

  <footer class="bg-surface-container-low dark:bg-slate-900 w-full flex flex-col items-center text-center gap-2 p-5 lg:p-12 space-y-4 lg:space-y-8 border-none">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 w-full max-w-7xl text-left">

      <!-- Logo (Small Screen Top, Large Screen Middle) -->
      <div class="order-1 md:order-2 flex justify-center items-center">
        <a href="/">
          <img src="{{ asset('assets/img/lialogo.webp') }}"
            alt="The Academic Authority Logo"
            class="h-12 md:h-16 lg:h-20">
        </a>
      </div>

      <!-- Contact Info -->
      <div class="order-2 md:order-1 space-y-4">
        <h5 class="text-primary font-bold uppercase text-xs tracking-[0.2em] md:text-left text-center">
          Contact Information
        </h5>

        <ul class="font-['Inter'] text-sm leading-relaxed text-on-surface-variant/70 flex flex-col justify-center md:justify-start items-center md:items-start">
          <li class="flex items-center gap-3">
            <span class="material-symbols-outlined text-primary text-lg">call</span>
            1300 000 000
          </li>

          <li class="flex items-center gap-3">
            <span class="material-symbols-outlined text-primary text-lg">mail</span>
            info@theacademicauthority.edu.au
          </li>

          <li class="flex items-center gap-3">
            <span class="material-symbols-outlined text-primary text-lg">location_on</span>
            Melbourne, Victoria, Australia
          </li>
        </ul>
      </div>

      <!-- Accreditation -->
      <div class="order-3 space-y-4 md:text-right">
        <h5 class="text-primary font-bold uppercase text-xs tracking-[0.2em] md:text-right text-center">
          Accreditation
        </h5>
        <ul class="text-sm text-on-surface-variant/70 space-y-1 flex flex-col justify-center md:justify-end items-center md:items-end">
          <li> Registered Training Organisation (RTO)</li>
          <li> <strong>Provider No. 46049</strong></li>
          <li> ABN: 00 000 000 000</li>
        </ul>
      </div>

    </div>
    <div class="w-full max-w-7xl pt-8 border-t border-outline-variant/15 flex justify-center items-center gap-4">
      <p class="font-['Inter'] text-xs md:text-sm text-on-surface-variant/70">
        &copy; 2024 Leadership Institute Australia. All rights reserved.
      </p>
    </div>
  </footer>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Init -->
  <script>
document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".mySwiper", {
    loop: true,
    speed: 1000, // smooth transition
    spaceBetween: 20,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    grabCursor: true,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    breakpoints: {
      320: { slidesPerView: 1 },
      640: { slidesPerView: 1.2 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 2.5 },
      1280: { slidesPerView: 3 },
    }
  });
});
</script>
</body>

</html>