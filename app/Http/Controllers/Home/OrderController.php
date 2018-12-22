<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Site;
use App\User;
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

    public function create()
    {
        //dd(1);
        //购物车的数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //订单数据
        $orders=Order::all()->where('user_id',auth()->id());
        //找到当前用户的订单的收货人
        $user=User::all()->where('id',auth()->id())->toArray();
        $user=current($user);
        return view('home.order.wddd',compact('carts','orders','user'));
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

    public function show(Order $order)
    {
        //获取当前用户的所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //获取该订单的用户信息
        $user=User::all()->where('id',$order->user_id)->toArray();
        $user=current($user);
        //获取订单详情信息
        $datas=$order->orderDetail->toArray();
        $datas=current($datas);
        //获取详细地址
        $sites=Site::all()->where('id',$order->site_id)->toArray();
        $sites=current($sites);
        //dd($order);
//        dd($datas['spec_id']);
        //dd($user);
        return view('home.order.content',compact('carts','order','user','datas','sites'));
    }


    public function edit(Order $order)
    {
    }


    public function update(Request $request, Order $order)
    {

    }


    public function destroy(Order $order)
    {
        //dd(1);
        $order->delete();
        return ['code'=>1];
    }
}
