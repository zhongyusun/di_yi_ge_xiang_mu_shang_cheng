<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     *  unique:表名,列，除了，id
     * @return array
     */
    public function rules()
    {
        //判断是添加还是编辑，当（指定title唯一的时候）
        $id = $this->route('category') ? $this->route('category')->id : null;
        //dd($id);
        return [
            'title' => 'required|unique:categories,title,' . $id,
            'parent_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'分类不能为空',
            'title.unique'=>'分类不能重复',
            'parent_id.required'=>'父集分类不能为空'
        ];
    }
}
