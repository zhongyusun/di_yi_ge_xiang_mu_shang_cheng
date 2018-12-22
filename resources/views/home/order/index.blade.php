@extends('home.layouts.master')
@section('content')
    <div class="beij_center">
        <div class="checkout-tit">
            <span class="tit-txt">填写并核对订单信息</span>
        </div>
        <div class="checkout_steps">
            <div class="step-tit">
                <h3>收货人信息</h3>
                <div class="extra_r">
                    <a href="{{route('home.site.index')}}" class="ftx-05 J_consignee_global">新增收货地址</a>
                </div>
            </div>
            <div class="jies_y_shouh_diz shiq_1">
                <ul>
                    @if(count($sites)==0)
                        <li>您还没有添加地址,请先 <a href="{{route('home.site.index')}}" style="">添加地址</a></li>
                    @else
                        @foreach($sites as $site)
                            <li class="add @if($site['moren']==1) cur @endif" site_id="{{$site['id']}}">
                                <div class="dangq_xuanz_diz" onclick="shouhuo(this)">收货地址</div>
                                <span id="name">{{$site['name']}}</span>
                                <span id="city">{{$site['city']}} {{$site['site']}}</span>
                                <span id="site">{{$site['phone']}}</span>
                                <div class="bianji_yv_shanc">
                                    @if($site['moren']==0)
                                        <a href="javascript:;" onclick="moren({{$site['id']}})">设为默认</a>
                                    @endif
                                    <a href="{{route('home.site.edit',$site['id'])}}">编辑</a>
                                </div>
                            </li>
                        @endforeach
                    @endif

                </ul>
                @if(count($sites)>1)
                    <div class="addr-switch cur_e">
                        <p><span>更多地址</span><b></b></p>
                        <p class="jiant_xiangs"><span>收起更多</span><b></b></p>
                    </div>
                @endif
            </div>
            <div class="jies_y_shouh_diz shiq_2">
                <ul>
                    <li class="zhif_fangs cur">
                        <div class="dangq_xuanz_diz">在线支付</div>
                    </li>
                    <li class="zhif_fangs">
                        <div class="dangq_xuanz_diz">货到付款</div>
                    </li>
                    <div class="addr-switch addr_switch_1 cur_e_1">
                        <p><span>更多 >></span></p>
                        <p><span>收起 <<</span></p>
                    </div>
                </ul>
            </div>
            <div class="step-tit">
                <h3>送货清单</h3>
                <div class="extra_r">
                    <a href="#" class="ftx-05 J_consignee_global">价格说明</a>
                    <a href="{{route('home.cart.index')}}" class="ftx-05 J_consignee_global">返回修改购物车</a>
                </div>
            </div>
            <div class="shopping_list">
                <div class="dis_modes">
                    <div class="mode_item_tit">
                        <h4>配送方式</h4>
                    </div>
                    <div>
                        <div class="jies_y_shouh_diz jies_y_shouh_diz_kuaid">
                            <ul>
                                <li class="zhif_fangs cur">
                                    <div class="dangq_xuanz_diz">申通快递</div>
                                </li>
                                <li class="zhif_fangs">
                                    <div class="dangq_xuanz_diz">圆通快递</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="peis_shij">
                        <p>配送时间： </p><span>工作日、双休日与节假日均可送货</span>
                    </div>
                    <div class="maij_liuy">
                        <p>给商家留言</p>
                        <input type="text" value="" placeholder="最多不能超过30字">
                    </div>
                </div>
                <div class="goods_list">
                    <div class="goods_list_neik">
                        <h4 class="vendor_name_h">商家：塔里服装旗舰店</h4>
                        @foreach($datas as $data)
                            <div class="goods_item">
                                <div class="p_img"><a href=""><img src="{{$data->list_pic}}" height="100%" width="100%"></a>
                                </div>
                                <div class="goods_msg">
                                    <div class="p_name">
                                        <a href="#">{{$data->title}}     {{$data->spec}}{{$data->sort}}</a>
                                    </div>
                                    <div class="p_price">
                                        <span class="jq_price">￥ {{$data->price}}</span>
                                        <span>x{{$data->num}}</span>
                                        <span>有货</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="fap_beij">
                <div class="step-tit">
                    <h3>发票信息</h3>
                </div>
                <div class="kaif_p">
                    <span>普通发票（电子)</span>
                    <span>个人</span>
                    <span> 明细 </span>
                    <span> <a href="#">修改</a> </span>
                </div>
            </div>
        </div>
        <!--收费明细-->
        <div class="order_summary">
            <div class="qianq_mx">
                <div class="jiaq_meih">
                    <span class="xiangq_leib"><em class="goumai_ges">{{count($datas)}}</em> 件商品，总商品金额：</span>
                    <em class="goum_zongj">￥ {{$totalprice}}</em>
                </div>
                <div class="jiaq_meih">
                    <span class="xiangq_leib">返现：</span>
                    <em class="goum_zongj">￥00.00</em>
                </div>
                <div class="jiaq_meih">
                    <span class="xiangq_leib">运费：</span>
                    <em class="goum_zongj">￥00.00</em>
                </div>
                <div class="jiaq_meih">
                    <span class="xiangq_leib">服务费：</span>
                    <em class="goum_zongj">￥00.00</em>
                </div>
            </div>
        </div>
        <div class="trade_foot_detail_com">
            <div class="dsgs">
                <div class="qianq_mx">
                    <div class="jiaq_meih">
                        <span class="xiangq_leib"> 应付总额：</span>
                        <em class="goum_zongj zhongf_jine">￥{{$totalprice}}</em>
                    </div>
                </div>
            </div>
            <div class="zuiz_diz">

                @if($defaultAddress)
                    <span id="city">寄送至： {{$defaultAddress['city']}} {{$defaultAddress['site']}}</span>
                    <span id="name"> 收货人：{{$defaultAddress['name']}} {{$defaultAddress['phone']}}</span>
                @else
                    <span id="city">寄送至： </span>
                    <span id="name"> 收货人：</span>
                @endif
            </div>
        </div>
        <div class="tij_dingd_ann">
            <a href="javascript:;" onclick="send()">提交订单</a>
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $(".shiq_1 ul li").hide().first().show()
            $(".cur_e p").hide().first().show()
            $(".cur_e p:first").click(
                function () {
                    $(".shiq_1 ul li").show()
                    $(".cur_e p").hide().last().show()
                }
            )
            $(".cur_e p:last").click(
                function () {
                    $(".shiq_1 ul li").hide().first().show()
                    $(".cur_e p").hide().first().show()
                }
            )
        })
        $(function () {
            $(".shiq_2 ul li").hide().first().show()
            $(".cur_e_1 p").hide().first().show()
            $(".cur_e_1 p:first").click(
                function () {
                    $(".shiq_2 ul li").show()
                    $(".cur_e_1 p").hide().last().show()
                }
            )
            $(".cur_e_1 p:last").click(
                function () {
                    $(".shiq_2 ul li").hide().first().show()
                    $(".cur_e_1 p").hide().first().show()
                }
            )
        })
        //cur
    </script>
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
@endpush

@push('js')
    <script src="{{asset('org/layer/layer.js')}}"></script>
    <script src="https://cdn.bootcss.com/axios/0.19.0-beta.1/axios.min.js"></script>
    <script>
        function send() {
            //检测是否选中
            //alert(1);
            var len = $('.checkout_steps').children('.jies_y_shouh_diz').children('ul').find('li.add.cur').length;
            console.log(len)
            if (len == 0) {
                layer.msg('请先勾选收货地址');
                return;
            } else {
                //提交订单
                $.post("{{route('home.order.store')}}", {
                    _token: '{{csrf_token()}}',
                    site_id: $('.checkout_steps').children('.jies_y_shouh_diz').find('li.cur').attr('site_id'),
                    iqs: "{{request()->query('iqs')}}"
                }, function (res) {
                    console.log(res);
                    if (res.code == 1) {
                        location.href = '{{route('home.index')}}?number=' + res.number;
                    }
                }, 'json');
            }
        }

        //切换默认地址
        function moren(id) {
            //console.log(id)
            axios.put("/home/site/" + id, {'id': id}).then((res) => {
                console.log(res)
                if (res.data.code == 99) {
                    //alert(1);
                    window.location.reload();
                    //console.log(1);
                }
            })
        }

        //点击选中并且切换下面地址
        function shouhuo(obj) {
            //alert(1);
            $(obj).parents('li.add').addClass('cur').siblings('li').removeClass('cur');
            var text = $(obj).siblings('#name').text();
            var di = $(obj).siblings('#city').text();
            var zhi = $(obj).siblings('#site').text();
            //console.log(text);
            $('.zuiz_diz').children('#name').text('收货人：' + text).siblings('#city').text('送货地址：' + di + zhi);
        }
    </script>
@endpush
