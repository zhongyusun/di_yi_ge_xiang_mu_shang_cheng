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
                        <div class="xint_biaot">
                            <h3>编辑收货地址</h3>
                        </div>
                        <div class="shouj_diz_b">
                            <form class="form-inline" method="post" action="{{route('home.site.update',$site)}}">
                                @csrf @method('PUT')
                                <div class="biaod_1">
                                    <p><em>*</em>联系人：</p>
                                    <input type="text" name="name" value="{{$site->name}}" class="text">
                                </div>
                                <div class="biaod_1">
                                    <p><em>*</em>收货地址：</p>
                                    <div class="xinz_diz_cs">
                                        <div class="docs-methods">
                                            <div id="distpicker">
                                                <div class="form-group">
                                                    <div style="position: relative;">
                                                        <input id="city-picker3" class="form-control" readonly
                                                               type="text"
                                                               name="city"
                                                               value="{{$site->city}}" data-toggle="city-picker">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="biaod_1">
                                    <p><em>*</em>详细地址：</p>
                                    <input type="text" value="{{$site->site}}" name="site" class="text text1">
                                </div>
                                <div class="biaod_1 biaod_2">
                                    <div class="liangp_e">
                                        <p><em>*</em>手机号码：</p>
                                        <input type="number" value="{{$site->phone}}" name="phone" class="text">
                                    </div>
                                </div>
                                <div class="biaod_1">
                                    <button class="diz_baoc">保存</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--左边内容结束-->
            </div>
        </div>
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
