<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RplLeadStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
       return [
        'name' => ['required','string','max:255'],
        'phone' => ['required','unique:rpl_leads,phone'],
        'email' => ['nullable','email'],
        'course' => ['required'],

        'care_role' => ['nullable','in:yes,no'],
        'communication' => ['nullable','in:yes,no'],
        'evidence_ready' => ['nullable','in:yes,no'],
        'fast_track' => ['nullable','in:yes,no'],
    ];
    }
    public function messages()
    {
        return [
            'phone.unique' => 'This phone number already submitted.',
        ];
    }
}
