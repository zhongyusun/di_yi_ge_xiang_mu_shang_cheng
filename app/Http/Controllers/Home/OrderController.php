<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [],
        ]);
    }

    /**
     * 订单支付
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //将提交过来的商品id从字符串转为数组
        $datas = explode(',', $request->query('iqs'));
        //从购物车中获取用户结算的商品
        $datas = Cart::all()->whereIn('id', $datas)->all();
        //dd($datas);
        //购物车的数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //获取地址数据
        $sites = Site::all()->where('user_id', auth()->id())->toArray();
        //dd($sites);
        //计算总价
        $totalprice = 0;
        foreach ($datas as $data) {
            $totalprice += $data['num'] * $data['price'];
        }
        //获取当前用户默认地址
        $defaultAddress = Site::where('user_id', auth()->id())->where('moren', 1)->first();
        //dd($defaultAddress);
        return view('home.order.index', compact('carts', 'datas', 'sites', 'totalprice', 'defaultAddress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order)
    {
       // dd($request->all());
        $iqs = $request->iqs;
        //根据购物车 ids 获取所有数据
        $cartData = Cart::whereIn('id', explode(',', $iqs))->get();
        //dd($cartData);
        //总价            //
        $total_price = 0;
        foreach ($cartData as $v) {
            $total_price += $v['num'] * $v['price'];
        }
        //开启事务
        DB::beginTransaction();
        //添加订单表
        $order->number = time().str_random(6);
        $order->price = $total_price;
        $order->quantity = count($cartData);
        $order->user_id = auth()->id();
        $order->site_id = $request->site_id;
        $order->status = 1;
        $order->save();
        //添加订单详情表
        foreach($cartData as $v){
            //dd($v);
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->title = $v['title'];
            $orderDetail->price = $v['price'];
            $orderDetail->list_pic = $v['list_pic'];
            $orderDetail->num = $v['num'];
            $orderDetail->spec = $v['spec'];
            $orderDetail->sort=$v['sort'];
            $orderDetail->good_id = $v['good_id'];
            $orderDetail->spec_id = $v['spec_id'];
            $orderDetail->save();
        }
        //清除购物车对应数据
        Cart::whereIn('id',explode(',',$iqs))->where('user_id',auth()->id())->delete();

        DB::commit();
        return ['code'=>1,'msg'=>'提交成功','number'=>$order->number];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
