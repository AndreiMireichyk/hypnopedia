<?php

namespace App\Http\Requests\Cpnale\Blog;

use Illuminate\Foundation\Http\FormRequest;

class ArticlePopularRequest extends FormRequest
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
            'article_id'=>'required'
        ];
    }
}
