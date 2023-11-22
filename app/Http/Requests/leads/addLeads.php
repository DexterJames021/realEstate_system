<?php

namespace App\Http\Requests\leads;

use Illuminate\Foundation\Http\FormRequest;

class addLeads extends FormRequest
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
            'name'=> 'required',
            'email'=> 'required|email|unique:leads',
            'phone'=> 'required|numeric|digits_between:10,12',
            'address'=> 'required'
        ];
    }
    public function messages(): array
    {
        return [
            "*"=> "Required!",
            'name'=> 'Name of lead is important!',
            'email'=> 'Email is required',
            'email.unique'=> 'This email is already exist',
            'phone'=> 'Number is required',
            'phone.digits_between'=> 'It must 11 digits',
            'address'=> 'Address is required'
        ];
    }
}
