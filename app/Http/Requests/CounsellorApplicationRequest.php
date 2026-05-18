<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CounsellorApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:counsellors,email',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:100',
            'profession' => 'required|string|max:255',
            'why_join' => 'required|string|min:20|max:1000',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'This email has already applied',
            'phone.required' => 'Phone number is required',
            'city.required' => 'City is required',
            'profession.required' => 'Profession is required',
            'why_join.required' => 'Please tell us why you want to join',
            'why_join.min' => 'Please provide at least 20 characters',
        ];
    }
}