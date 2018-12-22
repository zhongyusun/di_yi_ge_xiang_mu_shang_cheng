@extends('home.personalcenter.layouts.master')
@section('content')
    <div class="beij_center">
        <div class="checkout-tit" style="height: 80px;margin-top: 20px">
            <p style="color: red;font-weight: 700;text-align: center;font-size: 60px;margin-top: 10px">恭喜您的订单提交成功 </p>
        </div>
        <div class="checkout_steps">
            <div class="shopping_list">
                <p style="height: 30px;color: aquamarine;font-size: 25px;font-weight: 500;text-align: center;margin-top: 5px">
                    订单信息</p>
                <div class="goods_list" style="float: none;width: 100%">
                    <div class="goods_list_neik">
                        <p>订单号:{{$order['number']}}</p>
                        <hr>
                        <div class="goods_item">
                            @foreach($order->orderDetail as $v)
                                <div class="p_img"><a href="{{route('home.content',$v['id'])}}">
                                        <img src="{{$v['list_pic']}}" height="100%" width="100%"></a>
                                </div>
                                <div class="goods_msg">
                                    <div class="p_name">
                                        <a href="#">{{$v['title']}}</a>
                                        <p>{{$v['spec']}}</p>
                                        <p>{{$v['sort']}}</p>
                                    </div>
                                    <div class="p_price">
                                        <span class="jq_price">￥ {{$v['price']}}</span>
                                        <span>x{{$v['num']}}</span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="trade_foot_detail_com">
            <div class="qianq_mx">
                <div class="jiaq_meih">
                    <span class="xiangq_leib">共计：<em
                            class="goumai_ges">{{$order['quantity']}}</em> 件商品，总商品金额：￥ {{$order['price']}}</span>
                </div>
            </div>
            <div class="zuiz_diz">
                <span id="city">寄送至： {{$sites->city}}{{$sites->site}}</span>
                <span id="name"> 收货人:{{$sites->name}}{{$sites->phone}}</span>
            </div>
        </div>
    </div>


    <div class="body center" style="margin-top: 30px">
        <div class="center-content">
            <!--选项结束-->
            <div style="width: 1920px;height: 600px;margin-top: 30px">
                <div class="goodsList">
                    <div class="title" style="text-align: center;color: red ;margin-top: 30px;font-size: 20px">
                        请您使用微信扫码进行支付
                    </div>
                </div>
                <br>
                <div class="goods-cont" style="text-align: center;border-bottom: none">
                    <img src="{{asset('org/php_sdk_v3.0.9/example/qrcode.php')}}?data=<?php echo urlencode($url2);?>"
                         width="200" alt="">
                </div>

            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script>
        $(function () {
            var number = "{{$order['number']}}";
            var id = "{{$order['id']}}";
            setInterval(function () {
                $.post("{{route('home.checkOrderStatus')}}", {number: number,_token:'{{csrf_token()}}'}, function (res) {
                    //console.log(res)
                    if (res.code == 1) {
                        location.href = "/home/order/" + id;
                        //console.log(2);
                    }
                }, 'json')
            }, 1000)
        })
    </script>
@endpush
