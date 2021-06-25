<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProduct extends FormRequest
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
        $id = $this->segment(3);
        return [
            'description' => "required|min:3|max:255|unique:products,description,{$id},id",
            'apresentation' => 'nullable|min:3|max:255',
            'group' => 'numeric|integer',
            'classification' => 'numeric|integer',
            'category' => 'numeric|integer',
            'manufacturer' => 'numeric|integer',

        ];
    }
}
