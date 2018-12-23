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
                        <div class="wt">
                            <ul>
                                <li class="dangq_hongx"><a href="{{route('home.basic.index')}}">个人信息</a></li>
                            </ul>
                        </div>
                        <div class="wd">
                            <form action="{{route('home.basic.update',$user)}}" method="post">
                                @csrf @method('PUT')
                                <div class="user_set">
                                    <div class="item_meic">
                                        <span class="label_meic"><em>*</em> 昵称：</span>
                                        <div class="fl_e">
                                            <input type="text" class="itxt_succ" maxlength="20" id="nickName"
                                                   name="name" value="{{$user['name']}}">
                                        </div>
                                    </div>
                                    <div class="item_meic">
                                        <span class="label_meic">性别：</span>
                                        <div class="fl_e">
                                            <input type="radio" name="sex" class="jdradio" @if($user['sex']=='男') checked @endif value="男">
                                            <label class="mr10">男</label>
                                            <input type="radio" name="sex" class="jdradio" @if($user['sex']=='女') checked @endif value="女">
                                            <label class="mr10">女</label>
                                        </div>
                                    </div>
                                    <div class="item_meic">
                                        <span class="label_meic">身份证号：</span>
                                        <div class="fl_e">
                                            <div id="date">
                                                <input type="text" name="brithday" value="{{$user['brithday']}}" class="itxt_succ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_meic">
                                        <span class="label_meic">手机号：</span>
                                        <div class="fl_e">
                                            <div id="date">
                                                <input type="number" name="mobile" value="{{$user['mobile']}}" class="itxt_succ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_meic">
                                        <span class="label_meic">邮箱：</span>
                                        <div class="fl_e">
                                            <strong>{{$user['email']}}</strong>
                                        </div>
                                    </div>
                                    <div class="item_meic">
                                        <span class="label_meic">地址：</span>
                                        <div class="fl_e">
                                            <div id="date">
                                                <input type="text" name="site" class="itxt_succ" value="{{$user['site']}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_meic">
                                        <span class="label_meic"><em>*</em> 姓名：</span>
                                        <div class="fl_e">
                                            <input type="text" name="username" value="{{$user['username']}}" class="user_address">
                                            <p class="youh_tis ftx03">输入真实姓名，不得超过20个英文或10个汉字</p>
                                        </div>
                                    </div>
                                    <div class="item_meic">
                                        <span class="label_meic"> </span>
                                        <div class="fl_e">
                                           <button class="savebtn">保存</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $("#date").selectDate()

            $("#days").focusout(function () {
                var year = $("#year option:selected").html()
                var month = $("#month option:selected").html()
                var day = $("#days option:selected").html()
                console.log(year + month + day)
            })

        })

    </script>
@endsection
@push('js')
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/select.js"></script>
    <script src="{{asset('org/receptionist')}}/js/jquery-1.11.3.min.js"></script>
    <script src="{{asset('org/receptionist')}}/js/index.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery.SuperSlide.2.1.1.source.js"></script>
@endpush
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/index.css">
@endpush


