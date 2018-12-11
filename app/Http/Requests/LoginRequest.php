<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required|min:2',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'username.required'=>'用户名不能为空',
            'password.required'=>'密码不能为空',
            'password.min'=>'密码不能少于6个字符',
            'username.min'=>'用户名不能少于2个字符'

        ];
    }
}
