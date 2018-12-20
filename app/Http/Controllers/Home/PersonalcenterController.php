<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonalcenterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [],
        ]);
    }
    //个人中心
    public function index($personal)
    {
        //dd($personal);
        $datas = User::all()->where('id', $personal)->toArray();
        //dd($datas);
        //获取所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //dd($carts);
        return view('home.personalcenter.index', compact('datas','carts'));
    }
}