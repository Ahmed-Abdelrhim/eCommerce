<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingRequest extends FormRequest
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

    //Here Is My Validation Fro Shipping Methods
    public function rules()
    {
        return [
            'id' => 'required |exists:settings',
            'key' => 'required|string',
            'cost' => 'nullable|numeric'
        ];
    }

    //Messages For Validation Errors
    public function messages()
    {
        return [
            'key.text' => 'Shipping Name Should Be Text',
            'cost.numeric' => 'Insert A Number For Shipping Value',
        ];
    }
}
