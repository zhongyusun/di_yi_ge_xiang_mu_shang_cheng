<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>桀骜——修改密码</title>
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
        <h1>修改密码</h1>
    </div>
</div>
<div class="dengl_beij">

    <div class="banner_xin">
        <img src="{{asset('org/receptionist')}}/images/ss.jpg">
    </div>
    <div class="beij_center dengl_jvz">
        <div class="login_form">
            <div class="login_tab">
                <h2>修改密码</h2>
            </div>
            <form method="post" action="{{route('home.passwordstore')}}">
                @csrf
                <div class="kengl_kuang">
                    <div class="txt_kuang">
                        <input type="email" name="email" class="itxt" placeholder="请输入邮箱">
                    </div>
                    <input type="submit" tabindex="5" value="修改密码" class="btnnuw">
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
