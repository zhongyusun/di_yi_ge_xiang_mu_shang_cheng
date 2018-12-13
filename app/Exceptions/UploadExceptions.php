<?php

namespace App\Exceptions;

use Exception;

class UploadExceptions extends Exception
{
    public function render(){
        //return response()->json(['message' =>'上传文件过大', 'code' => 403],200);
        //return response()->json(hdjs要求返回,http状态码);
        return response()->json(['msg' =>$this->getMessage(), 'code' => 403],200);
    }
}
