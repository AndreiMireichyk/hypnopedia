<?php

namespace App\Http\Requests\Cpnale\USer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
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
        $id = Request::route('user.id');

        return [
            'name' => 'required|min:3',
            'password' => 'nullable|confirmed|min:8',
            'email' => 'required|min:3|email|unique:users,email,' . $id,
        ];

    }
}
