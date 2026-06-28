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
            'assignment_file.*' => 'nullable|mimes:pdf,doc|max:10240',

            'material_name.*' => 'nullable|string|max:255',
            'material_file.*' => 'nullable|mimes:pdf,doc|max:10240',
        ];
    }

    /**
     * Get custom error messages for validation errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Course title is required.',
            'title.string' => 'Course title must be a string.',
            'title.max' => 'Course title cannot exceed 255 characters.',

            'policy_title.*.string' => 'Policy title must be a string.',
            'policy_title.*.max' => 'Policy title cannot exceed 255 characters.',
            'policy_url.*.url' => 'Policy URL must be a valid URL.',

            'assignment_name.*.string' => 'Assignment name must be a string.',
            'assignment_name.*.max' => 'Assignment name cannot exceed 255 characters.',
            'assignment_file.*.mimes' => 'Assignment file must be a PDF or DOC file.',
            'assignment_file.*.max' => 'Assignment file cannot exceed 10MB.',

            'material_name.*.string' => 'Material name must be a string.',
            'material_name.*.max' => 'Material name cannot exceed 255 characters.',
            'material_file.*.mimes' => 'Material file must be a PDF or DOC file.',
            'material_file.*.max' => 'Material file cannot exceed 10MB.',
        ];
    }
}
