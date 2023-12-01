<?php

namespace App\Http\Requests\reservation;

use Illuminate\Foundation\Http\FormRequest;

class addReservation extends FormRequest
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
            'firstName' => 'required|string|max:20',
            'middleName' => 'required|string|max:20',
            'lastName' => 'required|string|max:20',
            'email' => 'required|unique:reservations',
            'phone' => 'required|numeric|digits_between:10,12',
            'validId_image' => 'required|max:10000|mimes:jpeg,jpg,png,doc,docx,pdf ',
            'tax_image' => 'required|max:10000|mimes:jpeg,jpg,png,doc,docx,pdf ',
            'poi_image' => 'required|max:10000|mimes:jpeg,jpg,png,doc,docx,pdf ',
            'paymentTerm' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            '*' => 'Required!',
            'firstName' => 'Required',
            'middleName' => 'Required',
            'lastName' => 'Required',
            // 'firstName.unique' => 'This first-name is Already exist',
            // 'middleName.unique' => 'This middle-name is Already exist',
            // 'lastName.unique' => 'This last-name is Already exist',
            'email' => 'Required',
            'email.unique' => 'This email is Already exist',
            'phone' => 'Required',
            'phone.numeric' => 'Enter your Number',
            'phone.digits_between' => 'It must be 12 digits',
            'validId_image' => 'Required',
            'validId_image.mimes' => 'Only doc,docx,pdf and images are accepted',
            'tax_image' => 'Required',
            'tax_image.mimes' => 'Only doc,docx,pdf and images are accepted',
            'poi_image' => 'Required',
            'poi_image.mimes' => 'Only doc,docx,pdf and images are accepted',
            'paymentTerm' => 'Required'
        ];
    }
}
