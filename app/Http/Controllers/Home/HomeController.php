<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Good;
use App\Models\Spec;
use Houdunwang\Arr\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        //获取所有的分类数据
        $categories = Category::all()->toArray();
        //dd($categories);
        //获取所有的父集分类和所有子集分类的数据
        $categoryData = (new Arr())->channelLevel($categories, $parent_id = 0, $html = "&nbsp;", $fieldPri = 'id', $fieldPid = 'parent_id');
        //dd($categoryData);
        //获取购物车中的数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //dd($carts);
        return view('home.index', compact('categoryData', 'carts'));
    }

    //扣扣回调地址
    public function qqback()
    {
        echo 1;
    }

    //搜索
    public function search(Request $request)
    {
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //dd(1);
        //接受搜所的关键词
        $wd = $request->query('wd');
        //所有搜索的商品
        $goods=Good::search($wd)->get();
        //通过栏目搜索的商品

        //$cartgories=Category::search($wd)->get();
        //dd($cartgories);
        foreach ($goods as $good){
            $id=$good->specs->toArray();
        }
        //dd($goods);
        //dd($id);
        $id=current($id);
        $id=$id['id'];
        //dd($id);
        return view('home.search.search',compact('goods','carts','id'));
    }
}
