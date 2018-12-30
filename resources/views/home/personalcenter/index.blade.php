@extends('home.personalcenter.layouts.master')
@section('content')
    <!---->
    <div class="wod_tongc_zhongx">
        <div class="beij_center">
            <div class="myGomeWeb">
                <!--侧边导航-->
            @include('home.personalcenter.layouts.left')
            <!--左边内容-->
                {{--我的订单--}}
                <div class="mod_main">
                    <div class="mt">
                        <h3>我的订单</h3>
                        <div class="extra-r">
                            <a href="{{route('home.order.create')}}">查看全部订单</a>
                        </div>
                    </div>
                    @if(count($orders)==0)
                        <p style="color: red;font-size: 30px;font-weight: 700;text-align: center">暂无订单</p>
                    @else
                        <div class="tb_order">
                            <table width="100%">
                                @foreach($orders as $order)
                                    <?php $i = 0?>
                                    @foreach($order->orderDetail as $v)
                                        <?php $i++?>
                                        @if($i<5)
                                            <tbody class="fore0">
                                            <tr>
                                                <td>
                                                    <div class="img-list">
                                                        <a href="#" target="_blank">
                                                            <img src="{{$v->list_pic}}" title="{{$v->title}}">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="u-name">{{$v->title}}</div>
                                                </td>
                                                <td>￥{{$v->price}}<br>在线支付</td>
                                                <td><span class="ftx-03">{{$v->created_at}}</span></td>
                                                @if($order->status==1)
                                                    <td><a class="ftx-03"
                                                           href="{{route('home.index',['number'=>$order->number])}}">未支付</a>
                                                    </td>
                                                @elseif($order->status==2)
                                                    <td><span class="ftx-03">已付款</span></td>
                                                @elseif($order->status==3)
                                                    <td><span class="ftx-03">待发货</span></td>
                                                @elseif($order->status==4)
                                                    <td><span class="ftx-03">已发货</span></td>
                                                @elseif($order->status==5)
                                                    <td><span class="ftx-03">完成订单</span></td>
                                                @endif

                                                <td class="order-doi"><a target="_blank"
                                                                         href="{{route('home.order.show',$v['id'])}}">查看</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endif
                                    @endforeach
                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>

                <div class="mod_main mod_main1 mod_main2">
                    <div class="mt">
                        <h3>我收藏的商品</h3>
                        <div class="extra-r">
                            <a href="{{route('home.mycollect',['type'=>'good'])}}">查看更多</a>
                        </div>
                    </div>
                    <div class="follow">
                        <ul>
                            @if(count($collects)==0)

                                <h2 style="color: lightgrey;font-size: 40px;font-weight: 400;text-align: center;margin-top: 30px;margin-bottom: 20px">暂无收藏</h2>
                            @else
                                @foreach($collects as $collect)
                                    <li>
                                        <a class="follow_tup_kuang"
                                           href="{{route('home.content',$collect->collect_id)}}"><img
                                                src="{{$collect->belongsModel->list_pic}}" height="100%"></a>
                                        <p>
                                            <a href="{{route('home.content',$collect->collect_id)}}">{{$collect->belongsModel->title}}</a>
                                        <p class="p_color_1">￥{{$collect->belongsModel->price}}</p></p>
                                    </li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



