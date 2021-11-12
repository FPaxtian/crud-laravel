<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductPost extends FormRequest
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
            'name_product' => 'required|min:3|max:255',
            'desct' => 'required|min:15|max:500',
            'price_provider' => 'required|numeric',
            'price_final' => 'required|numeric',
            'stock' => 'required|numeric',
            'id_category' => 'required|numeric',
        ];
    }
}
