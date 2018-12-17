<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Good;
use App\Models\Spec;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [],
        ]);
    }

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request, Cart $cart)
    {
        //dd(1);
        //dd($request->all());
        //dd($request->id);
        //根据商品 id 获取商品数据
        $good = Good::find($request->id);
        //dd($good);
        //根据规格 id 获取规格数据
        $spec = Spec::find($request->spec);
        //dd($spec);
        //dd(auth()->id());
        //dd(Cart::all());
        $newCart = Cart::where('user_id', auth()->id())->where('good_id', $request->id)->where('spec_id', $request->spec)->first();
        //dd($newCart);
        if (!$newCart) {
            //执行购物车添加
            $cart->list_pic = $good->list_pic;
            $cart->good_id = $request->id;
            $cart->title = $good->title;
            $cart->spec = $spec->spec;
            $cart->sort = $spec->sort;
            $cart->price = $good->price;
            $cart->num = $request->num;
            $cart->user_id = auth()->id();
            $cart->spec_id = $request->spec;
            $cart->save();
        } else {
            //dd(22);
            $newCart->num = (int)$newCart['num'] + (int)$request->num;
            $newCart->save();
        }
        return ['code' => 1, 'msg' => '添加成功'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public
    function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public
    function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(Cart $cart)
    {
        //
    }
}
