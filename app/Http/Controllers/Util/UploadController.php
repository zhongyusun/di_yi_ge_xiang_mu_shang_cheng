<?php

namespace App\Http\Controllers\Util;

use App\Exceptions\UploadExceptions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //上传类
    public function upload(Request $request)
    {
        //在上传控制器中必须打印所有 request 请求的数据,需要知道上传文件 name
        //dd($request->all());
        $file = $request->file('file');
        //dd($file);
        $this->dataSize($file);
        $this->dataType($file);
        if ($file) {
//            验证图片的大小和后缀
//            return [
//                'code'=>1,
//                'msg'=>'上传失败',
//            ];
            //重新组合路径，成功之后按照差件所需要的格式将其返回
            //$path = $file->store('上传文件存储目录','磁盘:filesystems 文件里面看disks');
            $path=$file->store('upload','upload');
            //dd($path);
            return [
                "code"=> 0,
                "msg"=>'',
                "data"=>[
                    //指向根目录
                    "src"=>'/'.$path
                ],
            ];
        }
    }
    //验证大小
    protected function dataSize($file){
        //$file->getSize()获取上传文件大小
        if($file->getSize() > 900000){
            //return  ['message' =>'上传文件过大', 'code' => 403];
            //使用异常类处理上传异常
            //创建异常类:exception
            throw new UploadExceptions('上传文件过大');
        }
    }

    //验证类型
    protected function dataType($file){
        if(!in_array(strtolower($file->getClientOriginalExtension()),['jpg','png','jpeg'])){
            //return  ['message' =>'类型不允许', 'code' => 403];
            throw new UploadExceptions('类型不允许');
        }
    }
}
