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
                        <div class="shand_piaot">收货地址</div>
                        <div class="shouh_diz_beij">
                            @foreach($datas as $data)
                                <div class="shouh_diz_kuang shouh_diz_kuang_mor">
                                    <div class="item">
                                        <span class="labal">收件人：</span>
                                        <p>{{$data['name']}}</p>
                                    </div>
                                    <div class="item">
                                        <span class="labal">所在地区：</span>
                                        <p>{{$data['city']}}</p>
                                    </div>
                                    <div class="item">
                                        <span class="labal">地址：</span>
                                        <p>{{$data['site']}}</p>
                                    </div>
                                    <div class="item">
                                        <span class="labal">手机：</span>
                                        <p>{{$data['phone']}}</p>
                                    </div>
                                    <div class="bianj_yv_shanc">
                                        <a href="#" class="mor_color">当前默认地址</a>
                                        <a href="#" data-reveal-id="myModal_1">编辑</a>
                                        <a href="javascript:;" onclick="del(this)">删除</a>
                                        <form action="{{route('home.site.destroy',$data['id'])}}" method="post">
                                            @csrf @method('DELETE')
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                            <div class="xinz_shouh_dz_ann"><a href="#" data-reveal-id="myModal">新增收货地址</a></div>
                        </div>
                    </div>
                </div>
                <!--左边内容结束-->
            </div>
        </div>
    </div>
    <!--新增地址表单-->
    <div id="myModal" class="reveal-modal">
        <div class="xint_biaot">
            <h3>新添收货地址</h3>
        </div>
        <div class="shouj_diz_b">
            <form class="form-inline" method="post" action="{{route('home.site.store')}}">
                @csrf
                <div class="biaod_1">
                    <p><em>*</em>联系人：</p>
                    <input type="text" name="name" class="text">
                </div>
                <div class="biaod_1">
                    <p><em>*</em>收货地址：</p>
                    <div class="xinz_diz_cs">
                        <div class="docs-methods">
                            <div id="distpicker">
                                <div class="form-group">
                                    <div style="position: relative;">
                                        <input id="city-picker3" class="form-control" readonly type="text" name="city"
                                               value="北京市/北京市/朝阳区" data-toggle="city-picker">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="biaod_1">
                    <p><em>*</em>详细地址：</p>
                    <input type="text" name="site" class="text text1">
                </div>
                <div class="biaod_1 biaod_2">
                    <div class="liangp_e">
                        <p><em>*</em>手机号码：</p>
                        <input type="text" name="phone" class="text" placeholder="手机号码或固定电话">
                    </div>
                </div>
                <div class="biaod_1">
                    <button class="diz_baoc">保存</button>
                </div>
            </form>
        </div>
        <a class="close-reveal-modal">&#215;</a>
    </div>

    <div id="myModal_1" class="reveal-modal">
        <div class="xint_biaot">
            <h3>新添收货地址</h3>
        </div>
        <div class="shouj_diz_b">
            <div class="biaod_1">
                <p><em>*</em>联系人：</p>
                <input type="text" class="text">
            </div>
            <div class="biaod_1">
                <p><em>*</em>收货地址：</p>
                <div class="xinz_diz_cs">
                    <div class="docs-methods">
                        <form class="form-inline">
                            <div id="distpicker">
                                <div class="form-group">
                                    <div style="position: relative;">
                                        <input id="city-picker3" class="form-control" readonly type="text"
                                               value="北京市/北京市/朝阳区" data-toggle="city-picker">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="biaod_1">
                <p><em>*</em>详细地址：</p>
                <input type="text" class="text text1" )">
            </div>
            <div class="biaod_1 biaod_2">
                <div class="liangp_e">
                    <p><em>*</em>手机号码：</p>
                    <input type="text" class="text" )">
                </div>
                <span class="huo_z">或</span>
                <div class="liangp_e">
                    <p>固定电话：</p>
                    <input type="text" class="text" )">
                </div>
            </div>
            <div class="biaod_1">
                <p>邮箱：</p>
                <input type="text" class="text text1" )">
            </div>
            <div class="biaod_1">
                <a href="#" class="diz_baoc">保存</a>
            </div>
        </div>
        <a class="close-reveal-modal">&#215;</a>
    </div>
    @push('js')
        <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery-1.4.4.min.js"></script>
        <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery.reveal.js"></script>
        <script type="text/javascript" src="{{asset('org/receptionist')}}/js/chengs/jquery.js"></script>
        <script type="text/javascript" src="{{asset('org/receptionist')}}/js/chengs/bootstrap.js"></script>
        <script type="text/javascript" src="{{asset('org/receptionist')}}/js/chengs/city-picker.data.js"></script>
        <script type="text/javascript" src="{{asset('org/receptionist')}}/js/chengs/city-picker.js"></script>
        <script type="text/javascript" src="{{asset('org/receptionist')}}/js/chengs/main.js"></script>
        <script>
            function del(obj) {

                $(obj).next('form').submit();

            }
        </script>
    @endpush
@endsection
