@extends('home.layouts.master')
@section('content')
    <!--本地生活导航-->
    <div id="navv" class="navv_ziy">
        <div class="focus">
            <div class="focus-a">
                <div class="fouc-font fouc_font_bend_shengh">
                    <a href="#">分类名称</a>
                </div>
            </div>
            <div class="focus-b">
                <ul>
                    <li><a href="{{route('home.home')}}">首页</a></li>
                    <li><a href="#">美食</a></li>
                    <li><a href="#">今日新品</a></li>
                    <li><a href="#">周边游 </a></li>
                </ul>
            </div>
            <div class="bend_shengh_haoh">
                <?php $i = 0; ?>
                @foreach($categoryData['_data'] as $v)
                    <?php $i++;?>
                    @if($i<8)
                        <div class="bengd_daoh">
                            <div class="bengd_daoh_ann">
                                <h3><a href="{{route('home.list',['list'=>$v['id']])}}">{{$v['title']}}</a></h3>
                                <i>></i>
                            </div>
                            <div class="bengd_daoh_lieb">
                                <div class="detail_content">
                                    @foreach($v['_data'] as $vv)
                                        <a href="{{route('home.list',['list'=>$v['id']])}}">{{$vv['title']}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="beij_center bengd_hov">
        <div class="bengd_shengh_tout">
            <div class="bend_dangq_qvy">
                <h3>全部区域</h3>
                <div class="bengd_qvy_kuang"><a href="#">云岩区</a><a href="#">南明区</a><a href="#">白云区</a><a
                        href="#">乌当区</a><a
                        href="#">花溪区</a><a href="#">观山湖区</a><a href="#">清镇市</a><a href="#">开阳县</a><a href="#">修文县</a><a
                        href="#">息烽县</a></div>
            </div>
            <div class="bend_dangq_qvy bend_dangq_shangq">
                <h3>热门商圈</h3>
                <div class="bengd_qvy_kuang"><a href="#">飞山街</a><a href="#">花果园</a><a href="#">碰水池</a><a
                        href="#">小何-黄河路</a><a
                        href="#">鸿通城</a><a href="#">小十字</a><a href="#">亨特</a><a href="#">新添寨</a></div>
            </div>
            <div class="tout_shangp_lieb">
                <ul>
                    <li>
                        <a href="#" class="tout_tup_kuang"><img src="images/shangq_1.jpg"></a>
                        <div class="neir">
                            <a href="#">大龍自助火锅</a>
                            <p>提供免费WiFi</p>
                        </div>
                        <span>￥:25.00</span>
                    </li>
                    <li>
                        <a href="#" class="tout_tup_kuang"><img src="images/shangq_2.jpg"></a>
                        <div class="neir">
                            <a href="#">大龍自助火锅</a>
                            <p>提供免费WiFi</p>
                        </div>
                        <span>￥:25.00</span>
                    </li>
                    <li>
                        <a href="#" class="tout_tup_kuang"><img src="images/shangq_3.jpg"></a>
                        <div class="neir">
                            <a href="#">大龍自助火锅</a>
                            <p>提供免费WiFi</p>
                        </div>
                        <span>￥:25.00</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--美食-->
    <div class="beij_center">
        <div class="meis_kuang">
            <div class="meis_biaot">
                <h2>{{$categoryData['title']}}</h2>
            </div>
            <div class="meis_neir_lieb">
                <ul>
                    @foreach($goods as $good)
                        <li>
                            <a href="{{route('home.content',['content'=>$good['id']])}}" class="meis_tup_kuang"><img
                                    src="{{$good->list_pic}}"></a>
                            <div class="meis_neir">
                                <a href="{{route('home.content',['content'=>$good['id']])}}">{{$good['title']}}</a>
                                <h4 style="text-align: center"><span
                                        style="text-align: center">￥:{{$good['price']}}</span></h4>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="meis_chak_quanb"><a href="#">查看全部</a></div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
@endpush



