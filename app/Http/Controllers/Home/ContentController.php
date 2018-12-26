<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Good;
use App\Models\Spec;
use Houdunwang\Arr\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends CommonController
{
    public function index(Good $content, Category $category)
    {
        foreach ($content->specs as $spec) {
            $spec = $spec['sort'];
        }

        //获取所有的分类
        $categories = Category::all()->toArray();

        //获取所有的父集分类和所有子集分类的数据
        $categoryData = (new Arr())->channelLevel($categories, $parent_id = 0, $html = "&nbsp;", $fieldPri = 'id', $fieldPid = 'parent_id');

        //获取当前的商品所在的分类
        $list = $content->category_id;

        //获得同类的商品
        $ss=Good::all()->where('category_id',$list);

        //面包屑(递归找父)
        $fatherData = $category->getFacher($categories, $list);

        //数组反转
        $fatherData = array_reverse($fatherData);
        //获取所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();

        //随机获取6条数据
        $rangs=Good::inRandomOrder()->limit(6)->get();
        return view('home.content.index', compact('rangs','ss','content', 'fatherData', 'spec', 'carts','categoryData'));
    }

    //获取库存
    public function specGetTotal(Request $request)
    {
        //dd(1);
        return Spec::find($request->id);
    }
}
