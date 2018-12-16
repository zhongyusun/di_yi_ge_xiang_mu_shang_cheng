<?php

namespace App\Http\Controllers\Home;

use App\Models\Category;
use App\Models\Good;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends CommonController
{
    public function index($list,Category $category){
        //获取所有的分类数据
        $categories=Category::all()->toArray();
        //获取所有的当前分类下的所有数据
        $sonIds = $category->getSon ( $categories , $list );
        //dd($sonIds);
        //将自己也追加进去
        $sonIds[]=$list;
        //dd($sonIds);
        //获取在 sonIds 里面所有商品
        $goods = Good::orderBy('created_at','desc')->whereIn('category_id',$sonIds)->paginate(10);
        if(\request ()->query('price') == 'asc'){
            $goods = $goods->orderBy('price','asc');
        }
        if(\request ()->query('price') == 'desc'){
            $goods = $goods->orderBy('price','desc');
        }
//        dd($goods);
        return view('home.list.index',compact('goods','list'));
    }
}
