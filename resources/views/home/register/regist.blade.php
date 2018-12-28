<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>个人注册</title>
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/index.css">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icon/yjtp.png')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
<!--dengl-->
<div class="yiny">
    <div class="beij_center">
        <div class="dengl_logo">
            <a href="/">
                <img
                    src="{{hd_config('site.site_logo')?hd_config('site.site_logo'):"/icon/Pdz6UZbG96rWjf1rvkjgPeA8KYGlbpblctWaiOM7.png"}}">
            </a>
            <h1>欢迎注册</h1>
        </div>
    </div>
</div>
<div class="beij_center">
    <div class="ger_zhuc_beij">
        <div class="ger_zhuc_biaot">
            <ul>
                <li class="ger_border_color"><a href="">个人注册</a></li>
                <p>已有账号<a class="ftx-05 ml10" href="{{route('home.login')}}">请登录</a></p>
            </ul>
        </div>
        <div class="zhuc_biaod">
            <form method="post" action="{{route('home.registerpost')}}">
                @csrf
                <div class="reg-items">
              	<span class="reg-label">
                	<label for="J_Name">用户名：</label>
              	</span>
                    <input class="i-text" type="text" value="{{old ('name')}}" name="name" placeholder="请输入用户名称">
                </div>

                <div class="reg-items">
              	<span class="reg-label">
                	<label for="J_Name">邮箱：</label>
              	</span>
                    <input class="i-text" id="username" type="text" value="{{old('account')}}" name="account"
                           placeholder="请输入邮箱或手机号">
                </div>

                <div class="reg-items">
              	<span class="reg-label">
                	<label for="J_Name">密码：</label>
              	</span>
                    <input class="i-text" type="password" value="" name="password" placeholder="请输入密码">
                </div>

                <div class="reg-items">
              	<span class="reg-label">
                	<label for="J_Name">确认密码：</label>
              	</span>
                    <input class="i-text" type="password" value="" name="password_confirmation" placeholder="请再次输入密码">
                </div>
                <div class="reg-items">
              	<span class="reg-label">
                	<label for="J_Name">填写验证码：</label>
              	</span>
                    <input class="i-text i-short" type="text" name="code" value="">
                    <span class="input-group-append" style="height: 38px !important;">
                      <button class="btn btn-default" onclick="send(this)" style="height: 38px"
                              type="button">发送验证码</button>
                    </span>
                </div>
                <div class="reg-items">
              	<span class="reg-label">
                	<label for="J_Name"> </label>
              	</span>
                    <button class="reg-btn">立即注册</button>
                    <ul style="float: left;margin-top: 10px">
                        <li style="float: left;margin-left: 10px">
                            <a href="{{route('home.qq')}}"><img src="{{asset('icon/qq.ico')}}" style="height: 20px;"
                                                                    alt=""></a>
                        </li>
                    </ul>
                </div>

            </form>
        </div>
        <div class="xiaogg">
            <img src="{{asset('org/receptionist')}}/images/cdsgfd.jpg">
        </div>
    </div>
</div>


<div class="jianj_dib">
    <div class="beia_hao">
        <p>{{hd_config('site.site_icp')?hd_config('site.site_icp'):'京ICP证070359号'}}</p>
    </div>
</div>
</body>
@include('layouts.message')
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="{{asset('org/layer/layer.js')}}"></script>
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function send(obj) {
        var tew = $('#username').val();
        //alert(tew);
        if (tew == '') {
            layer.msg('请输入邮箱或手机号')
        }
        if ($(obj).is('layui-disabled')) {
            return false;
        }
        let time = 5;
        $(obj).addClass('layui-disabled');
        let timer = setInterval(function () {
            time--;
            if (time == 0) {
                $(obj).html('发送验证码');
                clearInterval(timer);
                $(obj).removeClass('layui-disabled');
                return;
            }
            //重新构建发送验证码按钮
            $(obj).html(time + 's后再发');
            x
        }, 1000);

        var params = {
            "username": tew,
        }
        //发送异步请求发送验证码
        $.post("{{route ('util.code.send')}}", params, function (res) {
            if (res.code == 0) {
                layer.msg(res.message)
            } else {
                layer.msg(res.message)
            }

        })
    }
</script>
</html>
