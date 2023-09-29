<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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
            'customer_id' => 'required',
            'description' => 'required',
            'unit_price' => 'required',
            'notes' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'customer_id.required' => '* INPUT IS REQUIRED *',
            'description.required' => '* INPUT IS REQUIRED *',
            'unit_price.required' => '* INPUT IS REQUIRED *',
            'notes.required' => '* INPUT IS REQUIRED *',
        ];
    }
}
