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
    @stack('js')
</head>
<body>
<!--侧边-->
<div class="jdm-toolbar-wrap J-wrap">
    <div class="jdm-toolbar J-toolbar">
        <div class="jdm-toolbar-panels J-panel"></div>
        <div class="jdm-toolbar-tabs J-tab">
            <div data-type="bar" class="J-trigger jdm-toolbar-tab jdm-tbar-tab-ger">
                <i class="tab-ico"></i>
                <em class="tab-text">购物车</em>
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
                        href="">台湾</a><a href="">香港</a><a href="">澳门</a><a href="">海外</a><a href="qieh_cs.html">全部+</a>
                </div>
            </li>
        </ul>

        <ul class="header-right">
            @auth()
                <li>
                    <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button"
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
            <li class="denglu"><a class="ing_ps" href="#">我的收藏</a></li>
        </ul>
    </div>
</div>
<!--搜索栏-->
<div class="toub_beij">
    <div class="logo"><a href="{{route('home.home')}}"><img
                src="{{hd_config('site.site_logo')?hd_config('site.site_logo'):"/icon/Pdz6UZbG96rWjf1rvkjgPeA8KYGlbpblctWaiOM7.png"}}"></a>
    </div>
    <div class="search">
        <input type="text" value="家电一折抢" class="text" id="textt">
        <button class="button">搜索</button>
    </div>
    <div class="right">
        <i class="gw-left"></i>
        <i class="gw-right"></i>
        <div class="sc">
            <i class="gw-count">0</i>
            <i class="sd"></i>
        </div>
        <a href="gouw_che.html">我的购物车</a>
        <div class="dorpdown-layer">
            <ul>
                <li class="meiyou">
                    <img src="{{asset('org/receptionist')}}/images/settleup-nogoods.png">
                    <span>购物车中还没有商品，赶紧选购吧！</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="hotwords">
        <a class="biaoti">热门搜索：</a>
        <a href="#">新款连衣裙</a>
        <a href="#">四件套</a>
        <a href="#">潮流T恤</a>
        <a href="#">时尚女鞋</a>
        <a href="#">乐1</a>
        <a href="#">特步女鞋</a>
        <a href="#">威士忌</a>
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
</body>
</html>
