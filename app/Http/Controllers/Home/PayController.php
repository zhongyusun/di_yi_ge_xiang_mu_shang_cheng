<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PayController extends Controller
{
    //结算页
    public function index(Request $request)
    {
//根据订单号获取订单数据
        //$order = Order::where('number', $request->query('number'))->first();
        return view('home.pay.index');
    }
}
