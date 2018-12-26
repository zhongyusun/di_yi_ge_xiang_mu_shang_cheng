<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'account' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $user = User::where('email', $value)->first();
                    } else {
                        $user = User::where('mobile', $value)->first();
                    }
                    if ($user) {
                        return $fail('该账号已存在');
                    }
                },
            ],
            'name' => 'required',
            'password' => 'required|min:3|confirmed',
            'code' => [
                'required',
                //使用表单验证--自定义验证规则--使用闭包
                //$value 表单提交过来的code对应的值
                function ($attribute, $value, $fail) {
                    //自定义正则验证规则
                    //$preg = '/\d/';
                    //if(!preg_match($preg,$value)){
                    //	$fail( '验证码不正确' );
                    //}
                    if ($value != session('code')) {
                        $fail('验证码不正确');
                    }
                },
            ],

        ];
    }

    public function messages()
    {
        return [
            'account.required'     => '请输入注册邮箱' ,
            'name.required' => '请输入昵称',
            'password.required' => '请输入密码',
            'password.min' => '密码不得少于3位',
            'password.confirmed' => '两次输入密码不一致',
            'code.required' => '请输入验证码'
        ];
    }
}
