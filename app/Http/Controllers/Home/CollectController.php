<?php

namespace App\Http\Controllers\Home;

use App\Models\Good;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [],
        ]);
    }

    //关注 或者取消关注
    public function make(Request $request){
        //dd($request->all());
        //接受type/id
        $type=$request->query('type');
        //dd($type);
        $id=$request->query('id');
        //dd($id);
        //根据 get 参数 type 组合模型类 class 名
        $class='App\Models\\'.ucfirst($type);
        //dd($class);
        //$model = Good::find($id);
        //dd($model);
        //$model 收藏
        $model=$class::find($id);
        //获得当前文章的所有收藏模型数据
        //dd($model->collect);
        //返回  collect 模型  或者 null
        //dd($model->collect->where('user_id',auth()->id())->first());
        if ($collect=$model->collect->where('user_id',auth()->id())->first()){
            //执行删除
            $collect->delete();
        }else{
            //执行添加
            $model->collect()->create(['user_id'=>auth()->id()]);
        }
        return back();
    }
}
