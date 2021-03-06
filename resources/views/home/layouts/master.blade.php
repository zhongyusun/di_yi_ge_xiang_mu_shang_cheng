<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{hd_config('site.site_name')?hd_config('site.site_name'):'桀骜(JIEAO.CN)-正品低价，品质保证，轻松购物！'}}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/index.css">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icon/yjtp.png')}}">
    @stack('css')
    <script src="{{asset('org/receptionist')}}/js/jquery-1.11.3.min.js"></script>
    <script src="{{asset('org/receptionist')}}/js/index.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery.SuperSlide.2.1.1.source.js"></script>

</head>
<body>
<!--侧边-->
<div class="jdm-toolbar-wrap J-wrap">
    <div class="jdm-toolbar J-toolbar">
        <div class="jdm-toolbar-panels J-panel"></div>
        <div class="jdm-toolbar-tabs J-tab">
            <div data-type="bar" class="J-trigger jdm-toolbar-tab jdm-tbar-tab-ger">
                @if(auth()->check())
                    <a href="{{route('home.personal',auth()->id())}}"><i class="tab-ico"></i></a>
                @else
                    <a href="{{route('home.login')}}"><i class="tab-ico"></i></a>
                @endif
                <em class="tab-text">@if(auth()->check())
                        {{auth()->user()->name}}
                    @else
                        个人中心
                    @endif
                </em>
            </div>
            <div data-type="bar" class="J-trigger jdm-toolbar-tab jdm-tbar-tab-cart">
                <i class="tab-ico"></i>
                <em class="tab-text">购物车</em>
            </div>
            <div data-type="bar" clstag="h|keycount|cebianlan_h_follow|btn"
                 class="J-trigger jdm-toolbar-tab jdm-tbar-tab-follow" data-name="follow" data-login="true">
                <i class="tab-ico"></i>
                <em class="tab-text">我的关注</em>
            </div>
        </div>
        <div class="J-trigger jdm-toolbar-tab jdm-tbar-tab-message" data-name="message"><a target="_blank" href="#">
                <i class="tab-ico"></i>
                <em class="tab-text">我的消息
                </em></a>
        </div>
    </div>
    <div class="jdm-toolbar-footer">
        <div data-type="link" id="#top" class="J-trigger jdm-toolbar-tab jdm-tbar-tab-top">
            <a href="#" clstag="h|keycount|cebianlan_h|top">
                <i class="tab-ico"></i>
                <em class="tab-text">顶部</em>
            </a>
        </div>
    </div>
    <div class="jdm-toolbar-mini"></div>
    <div id="J-toolbar-load-hook" clstag="h|keycount|cebianlan_h|load"></div>
</div>


<!--头部-->
<div id="header">
    <div class="header-box">
        <h3 class="huany">桀骜本地购物商城欢迎您的到来！</h3>
        <ul class="header-right">
            @auth()
                <li>
                    <a href="{{route('home.personal',['id'=>auth()->id()])}}"
                       class="avatar avatar-sm avatar-online dropdown-toggle" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        {{auth()->user()->name}}
                    </a>
                </li>
                <li><img src="{{auth()->user()->icon}}" height="35px" width="35px" border="0" alt=""></li>
                <li><a href="{{route('home.loginout')}}">退出</a></li>
            @else
                <li class="denglu">Hi~<a class="red" href="{{route('home.login',['from'=>url()->full()])}}">请登录!</a> <a
                        href="{{route('home.register')}}">[免费注册]</a></li>
                <li class="shu"></li>
            @endauth
        </ul>
    </div>
</div>
<!--搜索栏-->
<div class="toub_beij">
    <div class="logo"><a href="{{route('home.home')}}"><img
                src="{{hd_config('site.site_logo')?hd_config('site.site_logo'):"/icon/Pdz6UZbG96rWjf1rvkjgPeA8KYGlbpblctWaiOM7.png"}}"></a>
    </div>
    <div class="search">
        <form action="{{route('home.search')}}" method="get">
            <input type="text" name="wd" value="" class="text" id="textt">
            <button class="button">搜索</button>
        </form>
    </div>
    <div class="right">
        <i class="gw-left"></i>
        <i class="gw-right"></i>
        <div class="sc">
            <i class="gw-count">{{count($carts)}}</i>
            <i class="sd"></i>
        </div>
        <a href="{{route('home.cart.index')}}">我的购物车</a>
        <div class="dorpdown-layer">
            @if(auth()->check())
                @if(\App\Models\Cart::all()->toArray()==null)
                    <ul>
                        <li class="meiyou">
                            <img src="{{asset('org/receptionist')}}/images/settleup-nogoods.png">
                            <span>购物车中还没有商品，赶紧选购吧！</span>
                        </li>
                    </ul>
                @else
                    <ul>
                        @foreach($carts as $k=>$cart)
                            <li class="meiyou">
                                <div class="gouwc_tup">
                                    <a href="{{route('home.cart.index')}}"><img src="{{$cart['list_pic']}}"></a>
                                </div>
                                <div class="gouwc_biaot">
                                    <a href="{{route('home.cart.index')}}">{{$cart['title']}} <br> {{$cart['num']}} </a>
                                </div>
                                <div class="gouwc_shanc">
                                    <span>￥ {{$cart['price']}}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @else
                <ul class="meiyou">
                    <li>
                        请登录后查看
                    </li>
                </ul>
            @endif
        </div>
    </div>
    <div class="hotwords">
        <a class="biaoti">热门搜索：</a>
        <a href="{{route('home.search',['wd'=>'电视'])}}">电视</a>
        <a href="{{route('home.search',['wd'=>'手机'])}}">手机</a>
        <a href="{{route('home.search',['wd'=>'男鞋'])}}">潮流男鞋</a>
        <a href="{{route('home.search',['wd'=>'女鞋'])}}">特步女鞋</a>
        <a href="{{route('home.search',['wd'=>'威士忌'])}}">威士忌</a>
    </div>
</div>
@yield('content')
@include('layouts.message')
<!--底部-->
<div class="dib_beij">
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
            <div class="renz_">
                <span></span>
                <span class="span1"></span>
                <span class="span2"></span>
                <span class="span3"></span>
            </div>
        </div>
    </div>
</div>
@stack('js')
</body>
</html>
