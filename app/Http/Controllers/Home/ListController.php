<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Good;
use Houdunwang\Arr\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends CommonController
{
    public function index($list, Category $category)
    {
        //获取所有的分类数据
        $categories = Category::all()->toArray();
        //dd($categories);
        //获取当前分类的所有的子级分类
        $sonIds = $category->getSon($categories, $list);
        //dd($sonIds);
        //将自己也追加进去
        $sonIds[] = $list;
        //dd($sonIds);
        //获取在 sonIds 里面所有商品
        $goods = Good::orderBy('created_at', 'desc')->whereIn('category_id', $sonIds)->paginate(10);
        if (\request()->query('price') == 'asc') {
            $goods = $goods->orderBy('price', 'asc');
        }
        if (\request()->query('price') == 'desc') {
            $goods = $goods->orderBy('price', 'desc');
        }
        //dd($sonIds);
        if ($list > 7) {
            $ppp = [];
            foreach ($sonIds as $v) {
                //dd($categories[$v]);
                $ppp[] = $categories[$v];
            }
            $ppp = $category->getSon($ppp, $list);
//            foreach ($ppp as $v){
//                //dd($v);
//                $ppp=$categories[$v];
//
//               // dd($ppp);
//            }
            //$sonIds=$categories[$sonIds['8']];
            //dd($sonIds);
        } else {
            //获取所有的父集分类和所有子集分类的数据
            $categoryData = (new Arr())->channelLevel($categories, $parent_id = 0, $html = "&nbsp;", $fieldPri = 'id', $fieldPid = 'parent_id');
            //获取所有的当前分类下的所有数据
            $categoryData = $categoryData[$list];
            //dd($categoryData);
        }
        //获取所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //dd($carts);
        return view('home.list.index', compact('goods', 'list', 'ppp', 'categoryData', 'categories', 'carts'));
    }

    public function contentlist($list)
    {

        //获取所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        return view('home.list.content',compact('carts'));

    }
}
