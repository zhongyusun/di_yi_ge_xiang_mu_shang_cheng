<?php

namespace App\Http\Controllers\Admin;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function edit($name)
    {
        //从数据库中读取数据
        //测试 hd_config函数
        $config = Config::firstOrNew(
            ['title'=>$name]
        );
        return view('admin.config.edit_' . $name,compact('name','config'));
    }


    public function update($name,Request $request)
    {
        $res = Config::updateOrCreate(
            ['title'=>$name],//查询条件
            //注意:$request->all()是数组,直接写入数据表报错
            //需要借助模型属性 cates
            ['name'=>$name,'data'=>$request->all()]//更新或者添加的数据
        );
        hd_edit_env($request->all());
       return back()->with('配置项更新成功');
    }
}
