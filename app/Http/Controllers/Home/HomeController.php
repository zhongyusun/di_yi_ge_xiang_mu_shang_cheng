<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Category;
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
        return view('home.index', compact('categoryData','carts'));
    }
}
