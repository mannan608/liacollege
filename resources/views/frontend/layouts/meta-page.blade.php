<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'The Academic Authority | Leadership Institute Australia')</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
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
    <div class="text-xl font-bold tracking-tighter text-[#002147] dark:text-slate-100 font-headline">
      The Academic Authority
    </div>
  </header>

  <main class="pt-24">
    @yield('content')
  </main>

  <footer class="bg-surface-container-low dark:bg-slate-900 w-full flex flex-col items-center text-center gap-6 p-12 space-y-8 border-none">
    <div class="font-['Manrope'] font-bold text-lg text-[#002147] dark:text-slate-200">
      The Academic Authority
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 w-full max-w-7xl text-left">
      <div class="space-y-4">
        <h5 class="text-primary font-bold uppercase text-xs tracking-[0.2em]">Contact Information</h5>
        <ul class="space-y-3 font-['Inter'] text-sm leading-relaxed text-on-surface-variant/70">
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
      <div class="space-y-4 md:text-right">
        <h5 class="text-primary font-bold uppercase text-xs tracking-[0.2em]">Accreditation</h5>
        <p class="font-['Inter'] text-sm leading-relaxed text-on-surface-variant/70">
          Registered Training Organisation (RTO)<br>
          <strong>Provider No. 46049</strong><br>
          ABN: 00 000 000 000
        </p>
      </div>
    </div>
    <div class="w-full max-w-7xl pt-8 border-t border-outline-variant/15 flex flex-col md:flex-row justify-between items-center gap-4">
      <p class="font-['Inter'] text-sm text-on-surface-variant/70">
        &copy; 2024 Leadership Institute Australia. All rights reserved.
      </p>
      <div class="flex gap-6 text-sm font-['Inter']">
        <a class="text-on-surface-variant/70 hover:text-secondary transition-all" href="#">Privacy Policy</a>
        <a class="text-on-surface-variant/70 hover:text-secondary transition-all" href="#">Terms of Service</a>
        <a class="text-on-surface-variant/70 hover:text-secondary transition-all" href="#">Governance</a>
      </div>
    </div>
  </footer>
</body>
</html>
