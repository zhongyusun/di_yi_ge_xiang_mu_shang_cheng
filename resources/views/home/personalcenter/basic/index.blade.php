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
                                <li class="dangq_hongx"><a href="ger_xinx.html">个人信息</a></li>
                                <li><a href="shez_toux.html">设置头像</a></li>
                                <li><a href="gengd_ger_xinx.html">更多个人信息</a></li>
                            </ul>
                        </div>
                        <div class="wd">
                            <div class="user_set">
                                <div class="item_meic">
                                    <span class="label_meic"><em>*</em> 用户名：</span>
                                    <div class="fl_e">
                                        <div><strong>山的那边是海</strong></div>
                                    </div>
                                </div>
                                <div class="item_meic">
                                    <span class="label_meic"><em>*</em> 登录名：</span>
                                    <div class="fl_e">
                                        <strong>山的那边是海</strong>
                                        <a href="#" class="ftx05 ml10">修改</a>
                                        <span class="ftx03">可用于登录，请牢记哦~</span>
                                    </div>
                                </div>
                                <div class="item_meic">
                                    <span class="label_meic"><em>*</em> 昵称：</span>
                                    <div class="fl_e">
                                        <input type="text" class="itxt_succ itxt_succ_url" maxlength="20" id="nickName"
                                               name="userVo.nickName" value="谱写生命的奇迹">
                                    </div>
                                </div>
                                <div class="item_meic">
                                    <span class="label_meic">性别：</span>
                                    <div class="fl_e">
                                        <input type="radio" name="sex" class="jdradio" value="0">
                                        <label class="mr10">男</label>
                                        <input type="radio" name="sex" class="jdradio" value="0">
                                        <label class="mr10">女</label>
                                        <input type="radio" name="sex" class="jdradio" value="0">
                                        <label class="mr10">保密</label>
                                    </div>
                                </div>
                                <div class="item_meic">
                                    <span class="label_meic">年龄：</span>
                                    <div class="fl_e">
                                        <div id="date">
                                            <select name="year" class="area" id="year">
                                                <option value="">选择年份</option>
                                            </select>
                                            <label class="ml5 mr5">年</label>
                                            <select name="month" class="area" id="month">
                                                <option value="">选择月份</option>
                                            </select>
                                            <label class="ml5 mr5">月</label>
                                            <select id="days" class="area" class="day">
                                                <option value="">选择日期</option>
                                            </select>
                                            <label class="ml5 mr5">日</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_meic">
                                    <span class="label_meic">邮箱：</span>
                                    <div class="fl_e">
                                        <strong>22*****88@qq.com</strong>
                                        <a href="#" class="ftx05 ml10">修改</a>
                                        <span class="ftx03">已验证</span>
                                    </div>
                                </div>
                                <div class="item_meic">
                                    <span class="label_meic"><em>*</em> 姓名：</span>
                                    <div class="fl_e">
                                        <input type="text" value="" class="user_address">
                                        <p class="youh_tis ftx03">输入真实姓名，不得超过20个英文或10个汉字</p>
                                    </div>
                                </div>
                                <div class="item_meic">
                                    <span class="label_meic"> </span>
                                    <div class="fl_e">
                                        <input type="button" value="保存" class="savebtn">
                                    </div>
                                </div>
                            </div>
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
@endpush

