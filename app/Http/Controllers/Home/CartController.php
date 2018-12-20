<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Good;
use App\Models\Spec;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends CommonController
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [],
        ]);
        //因为如要执行父级构造方法,运行父级构造方法,不然当前构造方法会覆盖父级构造方法
        parent::__construct();
    }

    /**
     * 购物车管理控制器类
     * Class CartController
     *
     * @package App\Http\Controllers\Home
     */
    public function index()
    {
        //获取当前登录的用户的购物车中的全部商品
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //dd($carts);
        foreach ($carts as $k => $cart) {
            $carts[$k]['checked'] = false;
        }

        $datas= json_encode($carts);
        //dd($carts);
        return view('home.cart.index', compact('carts', 'datas'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request, Cart $cart)
    {
        //dd(1);
        // dd($request->all());
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
        //dd($spec->sort);
        if (!$newCart) {
            //dd($good->list_pic);
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
            //dd(1);
        } else {
            //dd(22);
            $newCart->num = (int)$newCart['num'] + (int)$request->num;
            $newCart->save();
            $cart=$newCart;
        }
        return ['code' => 1, 'msg' => '添加成功', 'data' => $cart];
    }


    public function show(Cart $cart)
    {
//        获取当前登录的用户的购物车中的全部商品
//        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //dd($carts);
//        return view('home.cart.cart', compact('cart','carts'));
    }


    public
    function edit(Cart $cart)
    {

    }


    public
    function update(Request $request, Cart $cart)
    {
        $specs = Good::all()->find($cart->good_id)->specs->where('id', $cart->spec_id)->toArray();
        $specs = current($specs);//去除最外层数组
        //dd($specs['total']);
//        foreach ($specs as $spec){
//            dd($spec);
//        }
        //dd($request->num);
        if ($request->num <= $specs['total']) {
            $cart->num = $request->num;
            $cart->save();
            return ['code' => 1, 'msg' => ''];
        } else {
            return ['code' => 0, 'msg' => '库存不足'];
        }

        //$cart->update(['num'=>$request->num]);
        //return ['code' => 1, 'msg' => '更新成功'];
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
        $cart->delete();
        return ['code' => 0, 'msg' => '删除成功'];
    }
}
