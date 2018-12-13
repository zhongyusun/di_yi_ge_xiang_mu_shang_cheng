<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'price' => 'required|max:8',
            'category_id' => 'required',
            'list_pic' => 'required',
            'content' => 'required',
            'specs' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '商品标题不能为空',
            'price.required' => '商品价格不能为空',
            'category_id.required' => '商品分类不能为空',
            'list_pic.required' => '商品列表图不能为空',
            'content.required' => '商品描述不能为空',
            'specs.required' => '商品规格名称和库存不能为空',
            'description.required' => '商品描述不能为空',
            'price.max' => '商品价格不能超过8位数',
        ];
    }
}
