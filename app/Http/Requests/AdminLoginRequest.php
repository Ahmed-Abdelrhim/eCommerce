<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'email' => 'required | email',
            'password' => 'required|min:8|string',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'This Email Is Required',
            'email.email' => 'Please Login A Valid Email',
            'password.required' => 'This Password Is Required',
            'password.min' => 'Password Length Can Not Be Less Than 8 Chars'
        ];
    }
}
