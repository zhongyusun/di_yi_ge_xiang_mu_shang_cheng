<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasicController extends Controller
{

    public function index()
    {
        //获取所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //获取当前登录人的个人信息
        $user = User::all()->where('id', auth()->id())->toArray();
        $user = current($user);
        //dd($user);
        return view('home.personalcenter.basic.index', compact('carts', 'user'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }


    public function show(User $user)
    {

    }


    public function edit(User $user)
    {

    }


    public function update(Request $request, User $basic)
    {
        $basic->update($request->all());
        return redirect()->back()->with('success', '设置成功');
    }


    public function destroy(User $user)
    {
        //
    }
}
