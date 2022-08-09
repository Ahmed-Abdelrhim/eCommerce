<?php

namespace App\Http\Requests;

use App\Rules\ProductQty;
use Illuminate\Foundation\Http\FormRequest;

class PrdouctGeneralRequest extends FormRequest
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
            'slug' => 'bail|required|string | unique:products,slug',
            'name' => 'required | max:100 | string',
            'description' => 'required|string',
            'short_description  ' => 'nullable| string| max:120',
            'categories' => 'required|array|min:1',
            'categories.*' => 'numeric|exists:categories,id',
            'brand_id' => 'required|numeric|max:1',
            'selling_price' => 'required | numeric ',
            'manage_stock' => 'required |in:0,1',
            'sku' => 'required | numeric',
            'qty' => [new ProductQty($this->manage_stock)],
        ];
    }

//    public function messages()
//    {
//        return[];
//    }
}
