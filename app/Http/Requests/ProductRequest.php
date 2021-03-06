<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rule = [
            'name' => 'required|max:128',
            'price' => 'required|numeric|max:64',
            'description' => 'required|max:512',
        ];

        if ($this->segment(3) == '') {
            $rule = [];
        }

        return $rule;
    }

    /**
     * Change the autogenerated stub
     *
     * @return array
     */
    public function messages()
    {
        return parent::messages(); //Thôi khỏi đổi, để tiếng anh mặc định thôi
    }
}
