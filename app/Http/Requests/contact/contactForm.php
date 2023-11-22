<?php

namespace App\Http\Requests\contact;

use Illuminate\Foundation\Http\FormRequest;

class contactForm extends FormRequest
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
            "firstName" => 'required|string',
            "lastName" => 'required',
            "email" => 'required',
            "mobileNo|numeric|digits_between:10,12" => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            "*"=> "Required!",
            "firstName" => 'Required',
            "lastName" => 'Required',
            "email" => 'Required',
            "mobileNo" => 'Required',
            "mobileNo.numeric" => 'Enter your number',
            "mobileNo.digits_between" => 'it must 11 digits',
        ];
    }
}
