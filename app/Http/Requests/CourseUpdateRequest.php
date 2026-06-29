<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules.
     */
    public function rules(): array
    {
        return [

            /*
            |--------------------------------------------------------------------------
            | Course
            |--------------------------------------------------------------------------
            */

            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'banner' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:10240'],

            /*
            |--------------------------------------------------------------------------
            | Policies
            |--------------------------------------------------------------------------
            */

            'policy_id' => ['nullable', 'array'],
            'policy_id.*' => [
                'nullable',
                Rule::exists('course_policies', 'id'),
            ],

            'policy_title' => ['nullable', 'array'],
            'policy_title.*' => ['nullable', 'string', 'max:255'],

            'policy_url' => ['nullable', 'array'],
            'policy_url.*' => ['nullable', 'url'],

            /*
            |--------------------------------------------------------------------------
            | Assignments
            |--------------------------------------------------------------------------
            */

            'assignment_id' => ['nullable', 'array'],
            'assignment_id.*' => [
                'nullable',
                Rule::exists('course_assignments', 'id'),
            ],

            'assignment_name' => ['nullable', 'array'],
            'assignment_name.*' => ['nullable', 'string', 'max:255'],

            'assignment_file' => ['nullable', 'array'],
            'assignment_file.*' => [
                'nullable',
                'file',
                'mimes:pdf,doc,docx',
                'max:10240',
            ],

            'show_submit' => ['nullable', 'array'],
            'show_submit.*' => ['nullable', 'boolean'],

            'submission_limit' => ['nullable', 'array'],
            'submission_limit.*' => ['nullable', 'integer', 'min:1'],

            /*
            |--------------------------------------------------------------------------
            | Materials
            |--------------------------------------------------------------------------
            */

            'material_id' => ['nullable', 'array'],
            'material_id.*' => [
                'nullable',
                Rule::exists('course_materials', 'id'),
            ],

            'material_name' => ['nullable', 'array'],
            'material_name.*' => ['nullable', 'string', 'max:255'],

            'material_file' => ['nullable', 'array'],
            'material_file.*' => [
                'nullable',
                'file',
                'mimes:pdf,doc,docx',
                'max:10240',
            ],
        ];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [

            'title.required' => 'Course title is required.',
            'title.max' => 'Course title cannot exceed 255 characters.',

            'banner.image' => 'Banner must be an image.',
            'banner.mimes' => 'Banner must be JPG, JPEG, PNG or WEBP.',
            'banner.max' => 'Banner size cannot exceed 10 MB.',

            /*
            |--------------------------------------------------------------------------
            | Policy
            |--------------------------------------------------------------------------
            */

            'policy_title.*.max' => 'Policy title cannot exceed 255 characters.',
            'policy_url.*.url' => 'Policy URL must be a valid URL.',

            /*
            |--------------------------------------------------------------------------
            | Assignment
            |--------------------------------------------------------------------------
            */

            'assignment_name.*.max' => 'Assignment title cannot exceed 255 characters.',

            'assignment_file.*.mimes' =>
                'Assignment file must be PDF, DOC or DOCX.',

            'assignment_file.*.max' =>
                'Assignment file size cannot exceed 10 MB.',

            /*
            |--------------------------------------------------------------------------
            | Material
            |--------------------------------------------------------------------------
            */

            'material_name.*.max' => 'Material title cannot exceed 255 characters.',

            'material_file.*.mimes' =>
                'Material file must be PDF, DOC or DOCX.',

            'material_file.*.max' =>
                'Material file size cannot exceed 10 MB.',
        ];
    }
}