<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CourseStoreRequest extends FormRequest
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
            'title' => 'required|string|max:255',

            'policy_title.*' => 'nullable|string|max:255',
            'policy_url.*' => 'nullable|url',

            'assignment_name.*' => 'nullable|string|max:255',
            'assignment_file.*' => 'nullable|mimes:pdf,doc,docx,ppt,pptx,zip|max:51200',

            'material_name.*' => 'nullable|string|max:255',
            'material_file.*' => 'nullable|mimes:pdf,doc,docx,ppt,pptx,zip|max:51200',
        ];
    }
}
