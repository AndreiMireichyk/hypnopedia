<?php

namespace App\Http\Requests\Cpnale\Blog;

use Illuminate\Foundation\Http\FormRequest;

class ArticleCategoryRequest extends FormRequest
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
            'title'=>'required',
            'meta_title'=>'max:180',
            'meta_keys'=>'max:180',
            'meta_desc'=>'max:180',
        ];
    }
}
