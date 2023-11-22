<?php

namespace App\Http\Requests\appointment;

use Illuminate\Foundation\Http\FormRequest;

class appointmentForm extends FormRequest
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
            "date" => 'required|date',
            "timeSlot" => 'required',
            "property" => 'required',
            "firstName" => 'required|string|max:20|min:0',
            "lastName" => 'required|string|max:20|min:0',
            "email" => 'required|email',
            "mobileNo" => 'required|numeric|digits_between:10,12',
        ];
    }
    public function messages(): array{
        return [
            "*"=>"Required!",
            "date" => 'Set your Appointment Date',
            "timeSlot" => 'Time-slot is Required',
            "property" => 'Choose agent prepared time',
            "firstName" => 'Required',
            "lastName" => 'Required',
            "email" => 'Required',
            "mobileNo" => 'Contact number is required!',    
            "mobileNo.numeric" => 'Enter your number',    
            "mobileNo.digits_between" => 'It must be 11 digits',    
        ];
    }
}
