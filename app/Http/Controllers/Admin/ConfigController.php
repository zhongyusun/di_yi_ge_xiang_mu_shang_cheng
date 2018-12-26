<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function edit($name)
    {
        admin_has_permission(['Admin-config-website','Admin-config-email','Admin-config-upload','Admin-config-search']);
        //从数据库中读取数据
        //测试 hd_config函数
        $config = Config::firstOrNew(
            ['title' => $name]
        );
        return view('admin.config.edit_' . $name, compact('name', 'config'));
    }


    public function update($name, Request $request)
    {
        admin_has_permission(['Admin-config','Admin-config-website','Admin-config-email','Admin-config-upload','Admin-config-search']);
        $res = Config::updateOrCreate(
            ['title' => $name],//查询条件
            //注意:$request->all()是数组,直接写入数据表报错
            //需要借助模型属性 cates
            ['title' => $name, 'data' => $request->all()]//更新或者添加的数据
        );
        hd_edit_env($request->all());
        return back()->with('success', '配置项更新成功');
    }
}
