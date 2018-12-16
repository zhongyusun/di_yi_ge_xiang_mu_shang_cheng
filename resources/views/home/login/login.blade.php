<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>桀骜——欢迎登录</title>
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/index.css">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icon/yjtp.png')}}">
</head>
<body>
<!--dengl-->
<div class="beij_center">
    <div class="dengl_logo">
        <a href="/">
            <img
                src="{{hd_config('site.site_logo')?hd_config('site.site_logo'):"/icon/Pdz6UZbG96rWjf1rvkjgPeA8KYGlbpblctWaiOM7.png"}}">
        </a>
        <h1>欢迎登录</h1>
    </div>
</div>
<div class="dengl_beij">

    <div class="banner_xin">
        <img src="{{asset('org/receptionist')}}/images/ss.jpg">
    </div>
    <div class="beij_center dengl_jvz">
        <div class="login_form">
            <div class="login_tab">
                <h2>欢迎登录</h2>
                {{--手机登录--}}
                {{--<div class="dengl_erwm">--}}
                {{--<a href="#"><img src="{{asset('org/receptionist')}}/images/er_wm.png"></a>--}}
                {{--<div class="tanc_erwm_kuang">--}}
                {{--<img src="{{asset('org/receptionist')}}/images/mb_wangid.png">--}}
                {{--<div class="qrcode_panel">--}}
                {{--<ul>--}}
                {{--<li class="fore1">--}}
                {{--<span>打开</span>--}}
                {{--<a href="#" target="_blank"> <span class="red">手机通城</span></a>--}}
                {{--</li>--}}
                {{--<li>扫描二维码</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
            <form method="post" action="{{route('home.loginpost')}}">
                @csrf
                <div class="kengl_kuang">
                    <div class="txt_kuang">
                        <input type="email" name="email" class="itxt" placeholder="邮箱">
                        <input type="password" name="password" class="itxt" placeholder="密码">
                    </div>
                    <div class="remember">
                        <div class="fl">
                            <input type="checkbox" name="remember">
                            <label for="autoLoginFlag">自动登录</label>
                        </div>
                        <div class="fr">
                            <a href="#" class="fl" target="_blank" title="忘记密码">忘记密码?</a>
                        </div>
                    </div>
                    <input type="submit" tabindex="5" value="登 录" class="btnnuw">
                    {{--<button class="btnnuw">登 录</button>--}}
                </div>
            </form>
            <div class="corp_login">
                <div class="regist_link"><a href="{{route('home.register')}}" target="_blank"><b></b>立即注册</a></div>
            </div>

        </div>
    </div>
</div>


<div class="jianj_dib">
    <div class="beia_hao">
        <p>{{hd_config('site.site_icp')?hd_config('site.site_icp'):'京ICP证070359号'}}</p>
    </div>
</div>
@include('layouts.message')
</body>
</html>
