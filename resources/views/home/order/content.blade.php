@extends('home.personalcenter.layouts.master')
@section('content')
    <div class="wod_tongc_zhongx">
        <div class="beij_center D_sj">
            <div class="order_state">
                <div class="state_cont">
                    <div class="state_lcol">
                        <div class="state_top">订单号：{{$order->number}}</div>
                        <h3 class="state_txt ftx_02">等待收货</h3>
                        <br>
                        <span class="remain_time" style="display: none"><b></b></span>
                        <div class="state_btns">
                            <a href="#" class="btn_1">确认收货</a>
                        </div>
                        <div class="state_bottom">
                            <a class="btn_del" href="#" style="display: inline;">
                                <b></b>
                                取消订单
                            </a>
                        </div>
                    </div>
                    <!---->
                    <div class="state_rcol">
                        <div class="state_rtop">
                            <!--提示信息 -->
                            <div class="ftx_03">
                                尊敬的客户，您的订单商品已经从库房发出，请您做好收货准备。<br>如果您已收到货物，请点击“确认收货”按钮完成订单。
                            </div>
                        </div>
                        <!---->
                        {{--物流状态--}}
                        <div id="process-04" class="order-process">
                            {{--判断是否付款--}}
                            @if($order->status==1)
                                <div class="node ready">
                                    <i class="node-icon icon-start"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">提交订单</li>
                                        <li id="track_time_0" class="txt3">{{$order->created_at}}</li>
                                    </ul>
                                </div>
                                <div class="proce ding">
                                    <ul>
                                        <li class="txt1">未付款</li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-pay"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">付款成功</li>
                                        <li id="track_time_4" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce ding">
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-store"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">商品出库</li>
                                        <li id="track_time_1" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce ding">
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-express"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">等待收货</li>
                                        <li id="track_time_5" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce doing" id="procestate">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node wait">
                                    <i class="node-icon icon-finish"></i>
                                    <ul>
                                        <li class="txt1" id="promise_time_2"></li>
                                        <li class="txt2">完成</li>
                                        <li class="txt3">&nbsp;</li>
                                    </ul>
                                </div>
                            @elseif($order->status==2)
                                {{--已经付款--}}
                                <div class="node ready">
                                    <i class="node-icon icon-start"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">提交订单</li>
                                        <li id="track_time_0" class="txt3">{{$order->created_at}}</li>
                                    </ul>
                                </div>
                                <div class="proce done">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-pay"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">付款成功</li>
                                        <li id="track_time_4" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce ding">
                                    <ul>
                                        <li class="txt1">待发货</li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-store"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">商品出库</li>
                                        <li id="track_time_1" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce ding">
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-express"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">等待收货</li>
                                        <li id="track_time_5" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce doing" id="procestate">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node wait">
                                    <i class="node-icon icon-finish"></i>
                                    <ul>
                                        <li class="txt1" id="promise_time_2"></li>
                                        <li class="txt2">完成</li>
                                        <li class="txt3">&nbsp;</li>
                                    </ul>
                                </div>
                            @elseif($order->status==3)
                                {{--待发货--}}
                                <div class="node ready">
                                    <i class="node-icon icon-start"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">提交订单</li>
                                        <li id="track_time_0" class="txt3">{{$order->created_at}}</li>
                                    </ul>
                                </div>
                                <div class="proce done">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-pay"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">付款成功</li>
                                        <li id="track_time_4" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce done">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-store"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">商品出库</li>
                                        <li id="track_time_1" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce ding">
                                    <ul>
                                        <li class="txt1">已发货</li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-express"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">等待收货</li>
                                        <li id="track_time_5" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce doing" id="procestate">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node wait">
                                    <i class="node-icon icon-finish"></i>
                                    <ul>
                                        <li class="txt1" id="promise_time_2"></li>
                                        <li class="txt2">完成</li>
                                        <li class="txt3">&nbsp;</li>
                                    </ul>
                                </div>
                            @elseif($order->status==4)
                                <div class="node ready">
                                    <i class="node-icon icon-start"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">提交订单</li>
                                        <li id="track_time_0" class="txt3">{{$order->created_at}}</li>
                                    </ul>
                                </div>
                                <div class="proce done">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-pay"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">付款成功</li>
                                        <li id="track_time_4" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce done">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-store"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">商品出库</li>
                                        <li id="track_time_1" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce done">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-express"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">等待收货</li>
                                        <li id="track_time_5" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce ding" id="procestate">
                                    <ul>
                                        <li class="txt1">配送中</li>
                                    </ul>
                                </div>
                                <div class="node wait">
                                    <i class="node-icon icon-finish"></i>
                                    <ul>
                                        <li class="txt1" id="promise_time_2"></li>
                                        <li class="txt2">完成</li>
                                        <li class="txt3">&nbsp;</li>
                                    </ul>
                                </div>
                            @elseif($order->status==5)
                                <div class="node ready">
                                    <i class="node-icon icon-start"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">提交订单</li>
                                        <li id="track_time_0" class="txt3">{{$order->created_at}}</li>
                                    </ul>
                                </div>
                                <div class="proce done">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-pay"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">付款成功</li>
                                        <li id="track_time_4" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce done">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-store"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">商品出库</li>
                                        <li id="track_time_1" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce done">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node ready">
                                    <i class="node-icon icon-express"></i>
                                    <ul>
                                        <li class="txt1">&nbsp;</li>
                                        <li class="txt2">等待收货</li>
                                        <li id="track_time_5" class="txt3"></li>
                                    </ul>
                                </div>
                                <div class="proce done" id="procestate">
                                    <ul>
                                        <li class="txt1"></li>
                                    </ul>
                                </div>
                                <div class="node wait">
                                    <i class="node-icon icon-finish"></i>
                                    <ul>
                                        <li class="txt1" id="promise_time_2"></li>
                                        <li class="txt2">完成</li>
                                        <li class="txt3">&nbsp;</li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <!---->
                    </div>
                </div>
            </div>
            <div class="order_state">
                <div class="state_cont">
                    <div class="track_lcol">
                        <div class="p-item">
                            <div class="p-img">
                                <a href="#"><img src="images/xiangqtu_1.jpg" alt=""></a></div>
                            <div class="p-info">
                                <ul>
                                    <li>送货方式：普通快递</li>
                                    <li>承运人：中通快递</li>
                                    <li>运费：￥6.00</li>
                                    <li>承运人电话：95311</li>
                                    <li>货运单号：{{$order->number}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ac">
                            <a href="#none" class="btn-9 hide">查看物流</a>
                        </div>
                    </div>
                    <!---->
                    <div class="peis_xingxi">
                        <!-- 收货人信息 -->
                        <div class="dl">
                            <div class="dt">
                                <h4>收货人信息</h4>
                            </div>
                            <div class="dd">
                                <div class="item">
                                    <span class="label">收货人：</span>
                                    <div class="info-rcol"> {{$user['name']}}</div>
                                </div>
                                <div class="item">
                                    <span class="label">地址：</span>
                                    <div class="info-rcol">{{$sites['city']}}{{$sites['site']}}</div>
                                </div>
                                <div class="item">
                                    <span class="label">手机号码：</span>
                                    <div class="info-rcol">{{$sites['phone']}}</div>
                                </div>
                            </div>
                        </div>
                        <!-- 付款信息 -->
                        <div class="dl">
                            <div class="dt">
                                <h4>付款信息</h4>
                            </div>
                            <div class="dd">
                                <div class="item">
                                    <span class="label">付款方式：</span>
                                    <div class="info-rcol"> 在线支付</div>
                                </div>
                                <div class="item">
                                    <span class="label">商品总额：</span>
                                    <div class="info-rcol"> ¥{{$datas['price']}}</div>
                                </div>
                                <div class="item">
                                    <span class="label">应支付金额：</span>
                                    <div class="info-rcol"> ¥{{$datas['price']}}</div>
                                </div>
                            </div>
                        </div>


                        <!-- 发票信息 -->
                        <div class="dl">
                            <div class="dt">
                                <h4>发票信息</h4>
                            </div>
                            <div class="dd">
                                <div class="item">
                                    <span class="label">发票类型：</span>
                                    <div class="info-rcol"> 普通发票</div>
                                </div>
                                <div class="item">
                                    <span class="label">发票抬头：</span>
                                    <div class="info-rcol">个人</div>
                                </div>
                                <div class="item">
                                    <span class="label">发票内容：</span>
                                    <div class="info-rcol"><a href="#">明细</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                </div>
            </div>
            <div class="order_state">
                <div class="state_cont">
                    <div class="goods-list ">
                        <table class="tb-void tb-order">
                            <colgroup>
                                <col class="grap">
                                <col class="col-goods">
                                <col class="col-number">
                                <col class="col-price">
                                <col class="col-amount">
                                <col class="col-bean">
                                <col class="col-ops">
                                <col class="grap">
                            </colgroup>
                            <thead>
                            <tr>
                                <th class="grap"></th>
                                <th>商品</th>
                                <th>商品编号</th>
                                <th>价格</th>
                                <th>商品数量</th>
                                <th>操作</th>
                                <th class="grap"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr class="first-tr product-10420557748">
                                <td class="grap"></td>
                                <td>
                                    <div class="p-item">
                                        <div class="p-img">
                                            <a href="#" target="_blank">
                                                <img src="{{$datas['list_pic']}}">
                                            </a>
                                        </div>
                                        <div class="p-info">
                                            <div class="p-name">
                                                <a href="#" class="a-link" target="_blank"
                                                   title="{{$datas['title']}}">{{$datas['title']}}</a>
                                            </div>
                                            <div class="p-extra">
                                                <span class="txt">{{$datas['spec']}}{{$datas['sort']}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$order['number']}}</td>
                                <td><span class="f-price"> ¥{{$datas['price']}}</span></td>
                                <td>{{$datas['num']}}</td>
                                <td>
                                    <div class="p-btns">
                                        <a href="#" target="_blank" class="link-btn mt10">申请售后</a><br>
                                        <a class="#">评价</a>|
                                        <a class="link-btn mt10" href="#" target="_blank">晒单</a><br>
                                        <a href="javascript:;" onclick="send(this)" class="mt10 btn-again"
                                           target="_blank"><b></b>再次购买</a>
                                    </div>
                                </td>
                                <td class="grap"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="goods-total">
                        <ul>
                            <li>
                                <span class="label">商品总额：</span>
                                <span class="txt">¥48.00</span>
                            </li>
                            <li>
                                <span class="label">返　　现：</span>
                                <span class="txt">-¥0.00</span>
                            </li>
                            <li>
                                <span class="label">运　　费：</span>
                                <span class="txt">¥6.00</span>
                            </li>
                            <li class="ftx_01">
                                <span class="label">应付总额：</span>
                                <span class="txt count">¥54.00</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
@endpush
@push('js')
    <script src="{{asset('org/receptionist/js/jquery1.42.min.js')}}"></script>
    <script>
        function send(obj) {
            $.ajax({
                url: "{{route('home.cart.store')}}",
                type: 'post',
                data: {
                    id: "{{$datas['good_id']}}",
                    spec: "{{$datas['spec_id']}}",
                    num: "{{$datas['num']}}",
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (response) {
                    // console.log(response)
                    if (response.code == 0) {
                        location.href = "{{route('home.login')}}?from={{url()->full()}}"
                    } else {
                        location.href = "{{route('home.cart.store')}}"
                    }
                },
                error: function (error) {
                    //console.log(error)
                }
            })
        }
    </script>

@endpush



