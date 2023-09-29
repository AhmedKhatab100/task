<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal' => 'required',
            'country' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'company.required' => '* INPUT IS REQUIRED *',
            'contact.required' => '* INPUT IS REQUIRED *',
            'email.required' => '* INPUT IS REQUIRED *',
            'phone.required' => '* INPUT IS REQUIRED *',
            'address.required' => '* INPUT IS REQUIRED *',
            'city.required' => '* INPUT IS REQUIRED *',
            'state.required' => '* INPUT IS REQUIRED *',
            'postal.required' => '* INPUT IS REQUIRED *',
            'country.required' => '* INPUT IS REQUIRED *',

        ];
    }
}
