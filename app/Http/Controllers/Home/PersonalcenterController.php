<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Collect;
use App\Models\Good;
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
    public function index($personal, Request $request)
    {
        //获取当前用户的id
        $datas = User::all()->where('id', $personal)->toArray();
        //获取当前用户的所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //订单数据(订单可以包含很多商品)
        $orders = Order::all()->where('user_id', auth()->id());
        //获取当前用户
        $user = auth()->user();
        //获取当前用户收藏的数据
        $collects = $user->collect()->where('collect_type', 'App\Models\Good')->get();
        return view('home.personalcenter.index', compact('collects', 'datas', 'carts', 'orders'));
    }

    //我的收藏
    public function mycollect(Request $request)
    {
        //dd($request->all());
        $type = $request->query('type');
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //获取当前用户
        $user = auth()->user();
        //获取收藏数据
        $collects = $user->collect()->where('collect_type', 'App\Models\\' . ucfirst($type))->get();
        return view('home.personalcenter.my_collect_' . $type, compact('carts','collects'));
    }
}
