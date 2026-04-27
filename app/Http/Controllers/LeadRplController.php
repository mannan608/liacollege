<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreQuizAnswerRequest;
use App\Models\QuizAnswer;
use Illuminate\Http\Request;

class LeadRplController extends Controller
{
    public function meta_page(Request $request)
    {
       $quiz = config('quiz.meta_page');
       $currentStep = (int) $request->session()->get('meta_page_quiz.current_step', 1);

       return view('meta-service.pages.meta-page', [
           'quizView' => $this->metaPageQuizViewData($request, $currentStep),
       ]);
    }

    public function storeMetaPageQuizAnswer(StoreQuizAnswerRequest $request)
    {
        $quiz = config('quiz.meta_page');
        $currentStep = (int) $request->validated('step');
        $quizStep = $quiz['steps'][$currentStep];
        $sessionData = $request->session()->get('meta_page_quiz', [
            'answers' => [],
            'personal_info' => [],
            'current_step' => 1,
            'completed' => false,
        ]);

        if (($quizStep['type'] ?? 'choice') === 'personal_info') {
            $missingStep = $this->firstMissingMetaPageQuizStep($sessionData['answers'] ?? []);

            if ($missingStep) {
                $sessionData['current_step'] = $missingStep;
                $request->session()->put('meta_page_quiz', $sessionData);

                return response()->json([
                    'success' => false,
                    'message' => 'Please complete this step before submitting.',
                    'step' => $missingStep,
                    'html' => view('meta-service.component.meta-page-quiz-step', [
                        'quizView' => $this->metaPageQuizViewData($request, $missingStep),
                    ])->render(),
                ], 422);
            }

            $personalInfo = $request->safe()->only([
                'full_name',
                'phone',
                'email',
                'country',
                'message',
            ]);

            $sessionData['personal_info'] = $personalInfo;
            $sessionData['current_step'] = $currentStep;
            $sessionData['completed'] = true;

            QuizAnswer::updateOrCreate(
                [
                    'session_id' => $request->session()->getId(),
                    'question_key' => 'meta_page_quiz',
                ],
                [
                    'question_text' => 'Meta page eligibility quiz',
                    'answer_value' => 'completed',
                    'answer_label' => 'Completed',
                    'answers' => $sessionData['answers'],
                    'full_name' => $personalInfo['full_name'],
                    'phone' => $personalInfo['phone'],
                    'email' => $personalInfo['email'],
                    'country' => $personalInfo['country'] ?? null,
                    'message' => $personalInfo['message'] ?? null,
                    'step' => $currentStep,
                    'total_steps' => $quiz['total_steps'],
                    'completed_at' => now(),
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                ]
            );

            $request->session()->put('meta_page_quiz', $sessionData);

            return response()->json([
                'success' => true,
                'completed' => true,
                'message' => 'Your eligibility details have been submitted.',
                'html' => view('meta-service.component.meta-page-quiz-step', [
                    'quizView' => $this->metaPageQuizViewData($request, $currentStep, true),
                ])->render(),
            ]);
        }

        $answer = collect($quizStep['options'])->firstWhere('value', $request->validated('answer'));
        $sessionData['answers'][$quizStep['key']] = [
            'step' => $currentStep,
            'question' => $quizStep['question'],
            'value' => $answer['value'],
            'label' => $answer['label'],
        ];
        $sessionData['current_step'] = min($currentStep + 1, (int) $quiz['total_steps']);
        $sessionData['completed'] = false;

        $request->session()->put('meta_page_quiz', $sessionData);

        return response()->json([
            'success' => true,
            'completed' => false,
            'step' => $sessionData['current_step'],
            'html' => view('meta-service.component.meta-page-quiz-step', [
                'quizView' => $this->metaPageQuizViewData($request, $sessionData['current_step']),
            ])->render(),
        ]);
    }

    public function showMetaPageQuizStep(Request $request, int $step)
    {
        $totalSteps = (int) config('quiz.meta_page.total_steps');
        $step = max(1, min($step, $totalSteps));

        $sessionData = $request->session()->get('meta_page_quiz', []);
        $sessionData['current_step'] = $step;
        $sessionData['completed'] = false;
        $request->session()->put('meta_page_quiz', $sessionData);

        return response()->json([
            'success' => true,
            'step' => $step,
            'html' => view('meta-service.component.meta-page-quiz-step', [
                'quizView' => $this->metaPageQuizViewData($request, $step),
            ])->render(),
        ]);
    }

    private function metaPageQuizViewData(Request $request, int $step, bool $completed = false): array
    {
        $quiz = config('quiz.meta_page');
        $totalSteps = (int) $quiz['total_steps'];
        $step = max(1, min($step, $totalSteps));
        $sessionData = $request->session()->get('meta_page_quiz', []);
        $quizStep = $quiz['steps'][$step];

        return [
            'step' => $step,
            'total_steps' => $totalSteps,
            'progress' => (int) round(($step / $totalSteps) * 100),
            'step_data' => $quizStep,
            'answers' => $sessionData['answers'] ?? [],
            'personal_info' => $sessionData['personal_info'] ?? [],
            'completed' => $completed || (bool) ($sessionData['completed'] ?? false),
        ];
    }

    private function firstMissingMetaPageQuizStep(array $answers): ?int
    {
        foreach (config('quiz.meta_page.steps') as $step => $quizStep) {
            if (($quizStep['type'] ?? 'choice') !== 'choice') {
                continue;
            }

            if (! isset($answers[$quizStep['key']])) {
                return (int) $step;
            }
        }

        return null;
    }
}
