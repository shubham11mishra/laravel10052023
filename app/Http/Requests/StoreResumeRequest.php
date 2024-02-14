<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResumeRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:resumes',
            'address' => 'required|string',
            'mobile_number' => 'required|regex:/^[0-9]{10}$/',
            'photo' => 'required|mimes:jpg,jpeg,png|max:400',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048',
        ];
    }

/**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'address.required' => 'Address is required',
            'mobile_number.required' => 'Mobile number is required',
            'photo.mimes' => 'Photo must be a file of type: jpg, jpeg, png.',
            'resume.mimes' => 'Resume must be a file of type: pdf, doc, docx.',
        ];
    }
}
