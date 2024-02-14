<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateResumeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $resumeId = $this->route('resume');
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:resumes,email,' . $resumeId->id,
            'address' => 'required|string',
            'mobile_number' => 'required|regex:/^[0-9]{10}$/',
            'photo' => 'nullable|mimes:jpg,jpeg,png|max:400',
            'resume' => 'nullable|mimes:pdf,doc,docx|max:2048',
        ];
    }
}
