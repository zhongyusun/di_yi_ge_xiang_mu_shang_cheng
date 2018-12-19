<?php

namespace App\Http\Controllers\Home;

use App\Models\Category;
use App\Models\Good;
use App\Models\Spec;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends CommonController
{
    public function index(Good $content, Category $category)
    {
        foreach ($content->specs as $spec) {
            $spec = $spec['sort'];
        }
        //dd($spec);
        //获取所有的分类
        $categories = Category::all()->toArray();
        //获取当前的商品所在的分类
        $list = $content->category_id;
        //面包屑(递归找父)
        $fatherData = $category->getFacher($categories, $list);
        //dd($fatherData);
        //数组反转
        $fatherData = array_reverse($fatherData);
        return view('home.content.index', compact('content', 'fatherData', 'spec'));
    }

    //获取库存
    public function specGetTotal(Request $request)
    {
        //dd(1);
        return Spec::find($request->id);
    }
}
