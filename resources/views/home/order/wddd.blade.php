@extends('home.personalcenter.layouts.master')
@section('content')
    <div class="wod_tongc_zhongx">
        <div class="beij_center">
            <div class="myGomeWeb">
                <!--侧边导航-->
            @include('home.personalcenter.layouts.left')
            <!--左边内容-->
                <div class="mod_main">
                    <div class="jib_xinx_kuang">
                        <div class="shand_piaot">我的订单</div>
                        <div class="tab_trigger tab_trigger_wod_dd">
                            <p class="attrK">实物订单：</p>
                            <ul>
                                <li><a class="text_shaid" href="{{route('home.order.create')}}">全部</a></li>
                                <li><a class="text_shaid" href="#">待付款</a>
                                    <p class="sup">1</p></li>
                                <li><a class="text_shaid" href="#">待收货</a>
                                    <p class="sup">1</p></li>
                                <li><a class="text_shaid" href="pingj_shaid.html">待评价</a>
                                    <p class="sup">3</p></li>
                            </ul>
                        </div>
                        <div class="wod_dingd_shuaix">
                            <div class="combox">
                                <div><span class="c-lable" val="1">全部订单</span><i></i></div>
                                <ul class="c-list-value">
                                    <li class=""><a href="#" val="1">近三个月的订单</a></li>
                                    <li class=""><a href="#" val="2017">今年内订单</a></li>
                                    <li class=""><a href="#" val="2016">2016年订单</a></li>
                                    <li class=""><a href="#" val="2015">2015年订单</a></li>
                                    <li class=""><a href="#" val="3">2015年以前订单</a></li>
                                </ul>
                            </div>
                            <div class="search_box">
                                <input type="text" value="" placeholder="订单编号" class="seach_inpt">
                                <input type="button" value="" class="search-btn">
                            </div>
                        </div>
                        <!--************************************-->
                        <table class="order-tb order-tb_1">
                            <colgroup>
                                <col class="number-col">
                                <col class="consignee-col">
                                <col class="amount-col">
                                <col class="operate-col">
                                <col class="dis_col">
                            </colgroup>
                            <thead>
                            <tr>
                                <th>订单详情</th>
                                <th>金额</th>
                                <th>
                                    <div class="combox combox_2">
                                        <div><span class="c-lable" val="1">订单状态</span><i></i></div>
                                        <ul class="c-list-value">
                                            <li class=""><a href="#" val="2017">等待付款</a></li>
                                            <li class=""><a href="#" val="2016">等待收货</a></li>
                                            <li class=""><a href="#" val="2015">已完成</a></li>
                                            <li class=""><a href="#" val="3">已取消</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th>收货人</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            @foreach($orders as $order)
                                <tbody>
                                <tr class="sep-row">
                                    <td colspan="4"></td>
                                </tr>
                                <tr class="tr-th">
                                    <td colspan="5">
                                        <span class="gap"></span>
                                        <span class="dealtime span_30"
                                              title="2015-1-19 10:30:42">{{$order['created_at']}}</span>
                                        <span class="number span_30">订单号：
                                            <a href="javascript:;" target="_blank">{{$order['number']}}</a></span>
                                        <span class="span_30"><a href="#">博力高手机配件旗舰店机配件</a></span>
                                        {{--删除--}}
                                        <span class="wod_sc_delete_beij span_30">
                                            <a href="javascrpt:;" onclick="del({{$order['id']}})"
                                               class="wod_dingd_delete"></a>
                                        </span>
                                    </td>
                                </tr>
                                <?php $i = 0?>
                                @foreach($order->orderDetail as $v)
                                    <?php $i++?>
                                    @if($i<5)
                                        <tr class="tr-bd">
                                            <td rowspan="1">
                                                <div class="goods-item">
                                                    <div class="p-img">
                                                        <a target="_blank" href="#">
                                                            <img src="{{$v->list_pic}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="p-msg">
                                                        <div class="p-name">
                                                            <a target="_blank" href="#">{{$v->title}}</a>
                                                            <p class="yiwanc_hui">
                                                                {{--<a href="#">申请售后</a>--}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="goods-number">x{{$v->num}}</div>
                                            </td>
                                            <td rowspan="1">
                                                <div class="zhif_jine">
                                                    <p>总额￥{{$v->price}}</p>
                                                    <span>在线支付</span>
                                                </div>
                                            </td>
                                            <td rowspan="1">
                                                <div class="operate">
                                                    @if($order->status==1)
                                                        <p><p class="ftx-03">未支付</p>
                                                        </p>
                                                    @elseif($order->status==2)
                                                        <p class="ftx-03">已付款</p>
                                                    @elseif($order->status==3)
                                                        <p class="ftx-03">待发货</p>
                                                    @elseif($order->status==4)
                                                        <p class="ftx-03">已发货</p>
                                                    @elseif($order->status==5)
                                                        <p class="ftx-03">完成订单</p>
                                                    @endif
                                                    <a href="{{route('home.order.show',$v['id'])}}" target="_blank" class="a-link">订单详情</a><br>
                                                </div>
                                            </td>
                                            <td rowspan="1">
                                                <div class="txt_ren">
                                                    <span>{{$user['name']}}</span>
                                                    <p class="ren_tub"></p>
                                                </div>
                                            </td>
                                            <td rowspan="1">
                                                <div class="operate">
                                                    <a href="#" target="_blank" class="a-link">评价</a>丨
                                                    <a href="#" target="_blank" class="a-link">晒单</a><br>
                                                    @if($order->status==1)
                                                        <a href="{{route('home.index',['number'=>$order->number])}}"
                                                           target="_blank" class="btn-def">立即购买</a>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            @endforeach
                        </table>
                        <div class="gerzx_fany">
                            <a href="#" class="shangxy">上一页</a>
                            <a href="#">1</a>
                            <a href="#" class="shangxy">上一页</a>
                        </div>
                    </div>
                </div>
                <!--左边内容结束-->
            </div>
        </div>
    </div>
@endsection
@push('css')

@endpush
@push('js')
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery.SuperSlide.2.1.1.source.js"></script>
    <script src="{{asset('org/layer/layer.js')}}"></script>
    <script src="https://cdn.bootcss.com/axios/0.19.0-beta.1/axios.min.js"></script>
    <script>
        function del(id) {
            axios.delete("/home/order/" + id).then((res) => {
                console.log(res)
                if (res.data.code == 1) {
                    window.location.reload();
                    layer.msg('删除成功');
                }
            })
        }
    </script>
@endpush
