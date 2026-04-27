<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQuizAnswerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $step = (int) $this->input('step', 1);
        $totalSteps = (int) config('quiz.meta_page.total_steps');
        $quizStep = config("quiz.meta_page.steps.{$step}");

        $rules = [
            'step' => ['required', 'integer', 'min:1', "max:{$totalSteps}"],
        ];

        if (! $quizStep) {
            return $rules;
        }

        if (($quizStep['type'] ?? 'choice') === 'personal_info') {
            return $rules + [
                'full_name' => ['required', 'string', 'max:120'],
                'phone' => ['required', 'string', 'max:40'],
                'email' => ['required', 'email', 'max:150'],
                'country' => ['nullable', 'string', 'max:100'],
                'message' => ['nullable', 'string', 'max:1000'],
            ];
        }

        $options = collect(config("quiz.meta_page.steps.{$step}.options", []))
            ->pluck('value')
            ->all();

        return $rules + [
            'answer' => ['required', 'string', Rule::in($options)],
        ];
    }

    public function messages(): array
    {
        return [
            'answer.required' => 'Please choose an option before continuing.',
            'answer.in' => 'Please choose one of the available quiz options.',
            'full_name.required' => 'Please enter your full name.',
            'phone.required' => 'Please enter your phone number.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
        ];
    }
}
