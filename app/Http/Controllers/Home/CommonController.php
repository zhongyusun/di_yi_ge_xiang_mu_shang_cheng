<?php

namespace App\Http\Controllers\Home;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public function __construct () {
        //获取所有顶级栏目数据
        $_categories = Category::where('parent_id',0)->limit(5)->get();
        //dd($_categories);
        \View::share ('_categories',$_categories);
    }
}
