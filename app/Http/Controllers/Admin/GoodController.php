<?php

namespace App\Http\Controllers\Admin;

use App\Models\Good;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodController extends Controller
{

    //加载商品列表
    public function index()
    {
        return view('admin.good.index');
    }

    //加载商品添加页面
    public function create()
    {

        return view('admin.good.creat');
    }

    //处理商品添加数据
    public function store(Request $request)
    {
        //
    }


    public function show(Good $good)
    {
        //
    }

    //加载商品编辑页面
    public function edit(Good $good)
    {
        //
    }

    //处理上商品编辑数据
    public function update(Request $request, Good $good)
    {
        //
    }

    //删除商品
    public function destroy(Good $good)
    {
        //
    }
}
