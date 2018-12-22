<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <meta charset="utf-8">
    <title>{{hd_config('site.site_name')?hd_config('site.site_name'):'桀骜(JIEAO.CN)-正品低价，品质保证，轻松购物！'}}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icon/yjtp.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/index.css">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
    @stack('css')
</head>
<body>
{{--头部--}}
<div id="header">
    <div class="header-box">
        <h3 class="huany">桀骜本地购物商城欢迎您的到来！</h3>
        <ul class="header-left">
            <li class="bj">
                <a class="dib" href="#">贵阳市</a>
                <i class="ci-leftll">
                    <s class="jt">◇</s>
                </i>
                <div class="bj-1">
                    <h3>热门城市：</h3>
                    <a href="">北京</a><a href="">上海</a><a href="">天津</a><a href="">重庆</a><a href="">河北</a><a
                        href="">山西</a><a href="">河南</a><a href="">辽宁</a><a href="">吉林</a><a href="">黑龙江</a><a
                        href="">浙江</a><a href="">江苏</a><a href="">山东</a><a href="">安徽</a><a href="">内蒙古</a><a
                        href="">湖北</a><a href="">湖南</a><a href="">广东</a><a href="">广西</a><a href="">江西</a><a
                        href="">四川</a><a href="">海南</a><a href="">贵州</a><a href="">云南</a><a href="">西藏</a><a
                        href="">陕西</a><a href="">甘肃</a><a href="">青海</a><a href="">宁夏</a><a href="">新疆</a><a
                        href="">台湾</a><a href="">香港</a><a href="">澳门</a><a href="">海外</a><a
                        href="qieh_cs.html">全部+</a>
                </div>
            </li>
        </ul>
        <ul class="header-right">
            <li class="denglu dengl_hou">
                <div>
                    <a class="red" href="{{route('home.personal',['id'=>auth()->id()])}}">{{auth()->user()->name}}</a>
                    <i class="icon_plus_nickname"></i>
                    <i class="ci-leftll">
                        <s class="jt">◇</s>
                    </i>
                </div>
                <div class="dengl_hou_xial_k">
                    <div class="zuid_xiao_toux">
                        <a href="{{route('home.personal',auth()->id())}}"><img src="{{auth()->user()->icon}}"></a>
                    </div>
                    <div class="huiy_dengj">
                        <a class="tuic_" href="{{route('home.loginout')}}">退出</a>
                    </div>
                    <div class="toub_zil_daoh">
                        <a href="#">待处理订单</a>
                        <a href="#">我的收藏</a>
                        <a href="#">个人资料</a>
                    </div>
                </div>
            </li>
            <li class="shu"></li>
            <li class="denglu"><a class="ing_ps" href="#">我的收藏</a></li>
        </ul>
    </div>
</div>
{{--头部下面--}}
<div class="hongs_beij">
    <div class="beij_center">
        <div class="wode_tongc_logo">
            <div class="logo">
                <a href="{{route('home.home')}}">
                    <img
                        src="{{hd_config('site.site_logo')?hd_config('site.site_logo'):"/icon/Pdz6UZbG96rWjf1rvkjgPeA8KYGlbpblctWaiOM7.png"}}">
                </a>
            </div>
        </div>
        <div class="navitems">
            <ul>
                <li><a href="{{route('home.home')}}"><span>首页</span> </a></li>
                <li>
                    <div class="zhangh_dl">
                        <div class="zhangh_dt"><span>账号设置</span><i>◇</i></div>
                        <div class="zhangh_dd">
                            <a href="ger_xinx.html">个人信息</a>
                            <a href="zhangh_anq.html">账户安全</a>
                            <a href="{{route('home.site.index')}}">收货地址</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="nav_r">
            <div id="search_2014">
                <div class="form">
                    <input type="text" class="gerzx_text">
                    <button class="button1"></button>
                </div>
            </div>
            <div id="settleup_2014">
                <div class="cw_icon">
                    <a href="gouw_che.html"><span>购物车<em>{{count($carts)}}</em>件</span></a>
                    <i class="ci-right ">
                        <s class="jt">◇</s>
                    </i>
                </div>
                <div class="dorpdown-layer">
                    <div class="smt"><h4 class="fl">最新加入的商品</h4></div>
                    <ul>
                        <li class="meiyou">
                            @if(count($carts)==0)
                                购物车中空空如也
                            @else
                                <?php $i = 0?>
                                @foreach($carts as $cart)
                                    <?php $i++?>
                                    @if($i<4)
                                        <div class="gouwc_tup">
                                            <a href="{{route('home.cart.index')}}"><img src="{{$cart['list_pic']}}"></a>
                                        </div>
                                        <div class="gouwc_biaot">
                                            <a href="{{route('home.cart.index')}}">{{$cart['title']}}
                                                <br> {{$cart['num']}}</a>
                                        </div>
                                        <div class="gouwc_shanc">
                                            <span>￥50.00</span>
                                            <a href="{{route('home.cart.destroy',$cart['id'])}}">删除</a>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')
<!--底部-->
<div class="dib_beij dib_beij_ger_zhongx">
    <div class="dib_jvz_beij">
        <div class="shangp_baoz">
            <p>本地购物&nbsp;&nbsp;看得见的商品</p>
            <p class="beng1">正品行货&nbsp;&nbsp;购物无忧</p>
            <p class="beng2">低价实惠&nbsp;&nbsp;帮你省钱</p>
            <p class="beng3">本地直发&nbsp;&nbsp;专业配送</p>
        </div>
        <div class="zhongj_youx">


            <div class="lieb_daoh">
                <div class="kef_dianh kef_dianh_youx">
                    <p>意见收集邮箱</p>
                    <p>2460245313@qq.com</p>
                </div>
            </div>
        </div>
        <div class="beia_hao">
            <p>{{hd_config('site.site_icp')?hd_config('site.site_icp'):'京ICP证070359号'}}</p>
            <p class="gonga_bei">京公网安备：11010602030054号</p>
            <div class="renz_">
                <span></span>
                <span class="span1"></span>
                <span class="span2"></span>
                <span class="span3"></span>
            </div>
        </div>
    </div>
</div>
@include('layouts.message');
@stack('js')
</body>
</html>
