<?php

namespace App\Http\Requests\property;

use Illuminate\Foundation\Http\FormRequest;

class addProperty extends FormRequest
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
            'coverImage' => 'required|image|mimes:jpg,png,jpeg',
            // 'propertyName' => 'null',
            'unitType' => 'required|in:1-Bedroom unit,2-Bedroom unit,3-Bedroom unit,Studio-type unit,Pent-house unit',
            'category' => 'required|in:Sold,Reserved,Available', 
            'totalPrize' => 'required|numeric|digits_between:6,11'
        ];
}
    public function messages():array
    {
        return [
            'coverImage' => 'Choose the Cover image',
            'coverImage.mimes' => 'It must be a jpeg or png file',
            'residencialName' => 'The field is required.',
            'unitType' => 'Choose Unit type',
            'category' => 'Choose Category', 
            'totalPrize' => 'Required!',
            'totalPrize.digits_between' => '6 to 11 digits only accepted',

        ];
    }
}
