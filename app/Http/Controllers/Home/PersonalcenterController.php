<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Order;
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
        //获取当前用户的id
        $datas = User::all()->where('id', $personal)->toArray();
        //获取当前用户的所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //dd($carts);
        //订单数据
        $orders=Order::all()->where('user_id',auth()->id());

        return view('home.personalcenter.index', compact('datas','carts','orders'));
    }
}
