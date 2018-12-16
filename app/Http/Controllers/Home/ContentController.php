<?php

namespace App\Http\Controllers\Home;

use App\Models\Good;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends CommonController
{
    public function index(Good $content){

//        dd($content);
        return view('home.content.index',compact('content'));
    }
}
