@php
  $course = $course ?? $qualification;
@endphp

<div class="bg-surface-container-lowest rounded-xl overflow-hidden ambient-shadow flex flex-col group border border-outline-variant/15">
  <div class="h-56 overflow-hidden">
    <img
      class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
      src="{{ $course['image'] }}"
      alt="{{ $course['alt'] ?? $course['title'] }}"
    >
  </div>
  <div class="p-8 flex-grow">
    <h4 class="font-headline font-bold text-xl text-primary mb-2">{{ $course['title'] }}</h4>
    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed">{{ $course['description'] }}</p>
    @if (!empty($course['url']))
      <a class="block w-full py-3 bg-primary text-on-primary rounded-lg font-semibold text-center transition-all hover:bg-primary-container" href="{{ $course['url'] }}">
        Apply Now
      </a>
    @else
      <button class="w-full py-3 bg-primary text-on-primary rounded-lg font-semibold transition-all hover:bg-primary-container" type="button">
        Apply Now
      </button>
    @endif
  </div>
</div>
