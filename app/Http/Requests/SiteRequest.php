<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'site' => 'required',
            'city' => 'required',
            'phone' => 'required|digits:11',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => '收货人姓名不能为空',
            'phone.required' => '手机号不能为空',
            'phone.digits'=>'手机号输入有误',
            'city.required'=>'地址不能为空',
            'site.required'=>'地址不能为空',
        ];
    }
}
