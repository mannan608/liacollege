@php
  $step = $quizView['step'];
  $totalSteps = $quizView['total_steps'];
  $progress = $quizView['progress'];
  $stepData = $quizView['step_data'];
  $answers = $quizView['answers'];
  $personalInfo = $quizView['personal_info'];
  $isCompleted = $quizView['completed'];
@endphp

@if ($isCompleted)
  <div class="space-y-6 text-center">
    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-secondary/15 text-secondary">
      <span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
    </div>
    <div>
      <h3 class="font-headline text-xl font-bold text-primary">Thanks, {{ $personalInfo['full_name'] ?? 'there' }}.</h3>
      <p class="mt-3 text-on-surface-variant">Your eligibility details have been submitted. Our team will contact you shortly.</p>
    </div>
  </div>
@else
  <div class="mb-10">
    <div class="mb-4 flex items-center justify-between">
      <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Step {{ $step }} of {{ $totalSteps }}</span>
      <span class="text-xs font-bold text-primary">{{ $progress }}% Complete</span>
    </div>
    <div class="h-2 w-full overflow-hidden rounded-full bg-surface-container-highest">
      <div class="h-full bg-secondary transition-all" style="width: {{ $progress }}%"></div>
    </div>
  </div>

  <form id="metaPageQuizForm" class="space-y-8" action="{{ route('meta-page.quiz.store') }}" method="POST" data-step="{{ $step }}">
    @csrf
    <input type="hidden" name="step" value="{{ $step }}">

    <div class="hidden rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm font-semibold text-red-700" data-quiz-error></div>

    <h3 class="font-headline text-sm lg:text-lg font-bold leading-snug text-primary">
      {{ $stepData['question'] }}
    </h3>

    @if (($stepData['type'] ?? 'choice') === 'personal_info')
      <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
        @foreach ($stepData['fields'] as $field)
          <div>
            <label for="quiz-{{ $field['name'] }}" class="mb-2 block font-medium text-on-surface">{{ $field['label'] }}</label>
            <input
              id="quiz-{{ $field['name'] }}"
              class="w-full rounded-lg border border-outline-variant/40 bg-white px-4 py-3 outline-none transition focus:border-primary focus:ring-0 focus:ring-primary/20"
              type="{{ $field['type'] }}"
              name="{{ $field['name'] }}"
              value="{{ $personalInfo[$field['name']] ?? '' }}"
              placeholder="{{ $field['placeholder'] }}"
            >
            <p class="mt-2 hidden text-sm font-semibold text-red-600" data-error-for="{{ $field['name'] }}"></p>
          </div>
        @endforeach
      </div>

      <div>
        <label for="quiz-message" class="mb-2 block font-medium text-on-surface">Message</label>
        <textarea
          id="quiz-message"
          class="w-full rounded-lg border border-outline-variant/40 bg-white px-4 py-3 outline-none transition focus:border-primary focus:ring-0 focus:ring-primary/20"
          name="message"
          rows="4"
          placeholder="Tell us anything useful about your experience or qualification goal"
        >{{ $personalInfo['message'] ?? '' }}</textarea>
        <p class="mt-2 hidden text-sm font-semibold text-red-600" data-error-for="message"></p>
      </div>
    @else
      <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        @foreach ($stepData['options'] as $option)
          @php
            $selectedAnswer = $answers[$stepData['key']]['value'] ?? null;
            $isSelected = $selectedAnswer === $option['value'];
          @endphp

          <div class="quiz-option">
            <input
              id="quiz-answer-{{ $step }}-{{ $option['value'] }}"
              class="quiz-input sr-only"
              type="radio"
              name="answer"
              value="{{ $option['value'] }}"
              @checked($isSelected)
            >

            <label
              for="quiz-answer-{{ $step }}-{{ $option['value'] }}"
              class="quiz-card text-sm md:text-base flex cursor-pointer items-center rounded-xl border p-3 md:p-5 text-left transition-all {{ $isSelected ? ' border border-primary bg-primary-container/5' : 'border-outline-variant/15 bg-surface-container hover:border-primary' }}"
            >
              <span class="quiz-radio mr-4 flex h-6 w-6 shrink-0 items-center justify-center rounded-full border {{ $isSelected ? ' border border-primary bg-primary' : 'border-outline' }}">
                <span class="quiz-dot {{ $isSelected ? 'block' : 'hidden' }} h-2 w-2 rounded-full bg-white"></span>
              </span>
              <span class="quiz-label font-body {{ $isSelected ? 'font-bold text-primary' : 'font-medium text-on-surface' }}">{{ $option['label'] }}</span>
            </label>
          </div>
        @endforeach
      </div>
      <p class="hidden text-sm font-semibold text-red-600" data-error-for="answer"></p>
    @endif

    <div class="flex items-center justify-between gap-4 pt-6">
      <button
        class="flex items-center gap-2 font-bold text-primary opacity-60 transition-opacity hover:opacity-100 disabled:cursor-not-allowed disabled:opacity-30"
        type="button"
        data-quiz-back
        @disabled($step === 1)
      >
        <span class="material-symbols-outlined">arrow_back</span> Back
      </button>
      <button class="rounded-lg bg-primary px-10 py-3 font-bold text-on-primary transition-all hover:scale-105 disabled:cursor-wait disabled:opacity-70 disabled:hover:scale-100" type="submit">
        {{ $step === $totalSteps ? 'Submit' : 'Next Step' }}
      </button>
    </div>
  </form>
@endif
