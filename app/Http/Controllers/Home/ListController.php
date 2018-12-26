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

        //获取当前分类的所有的子级分类
        $sonIds = $category->getSon($categories, $list);

        //将自己也追加进去
        $sonIds[] = $list;

        //获取在 sonIds 里面所有商品并进行默认排序
        $goods = Good::orderBy('created_at', 'desc')->whereIn('category_id', $sonIds)->paginate(10);

        //随机循环3个当前商品
        $rangoods = Good::whereIn('category_id', $sonIds)->inRandomOrder()->limit(3)->get();

        //判断是否为子集分类
        if ($list > 7) {
            $ppp = [];
            foreach ($sonIds as $v) {
                $ppp[] = $categories[$v];
            }
            $ppp = $category->getSon($ppp, $list);
        } else {
            //获取所有的父集分类和所有子集分类的数据
            $categoryData = (new Arr())->channelLevel($categories, $parent_id = 0, $html = "&nbsp;", $fieldPri = 'id', $fieldPid = 'parent_id');
            //获取所有的当前分类下的所有数据
            $categoryData = $categoryData[$list];
            //dd($categoryData);
        }
        //获取所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();

        return view('home.list.index', compact('rangoods', 'goods', 'list', 'ppp', 'categoryData', 'categories', 'carts'));
    }

    public function contentlist($list, Category $category)
    {
        //获取所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();

        //获取当前分类的商品
        $listgoods = Good::orderBy('created_at', 'asc')->where('category_id', $list)->get();

        //按照价格排序
        if (\request()->query('price') == 'asc') {
            //dd(1);
            $listgoods = Good::orderBy('price', 'asc')->where('category_id', $list)->get();

        }
        if (\request()->query('price') == 'desc') {
            //dd(2);
            $listgoods = Good::orderBy('price', 'asc')->where('category_id', $list)->get();
        }

        //获取所有的分类数据
        $categories = Category::all()->toArray();

        //获取所有的父集分类和所有子集分类的数据
        $categoryData = (new Arr())->channelLevel($categories, $parent_id = 0, $html = "&nbsp;", $fieldPri = 'id', $fieldPid = 'parent_id');

        //面包屑(递归找父)
        $fatherData = $category->getFacher($categories, $list);

        //数组反转
        $fatherData = array_reverse($fatherData);

        foreach ($fatherData as $fatherDatum) {
            $cates[] = $fatherDatum['id'];
        }

        //获得和当前商品相同父集的产品
        $categoods = Good::whereIn('category_id', $cates)->inRandomOrder()->limit(6)->get();
        //dd($categoods);

        //随机获得当前分类的商品
        $rangoods = Good::where('category_id', $list)->inRandomOrder()->limit(4)->get();
        return view('home.list.content', compact('rangoods', 'carts', 'listgoods', 'categoryData', 'categoods', 'fatherData', 'list'));

    }
}
