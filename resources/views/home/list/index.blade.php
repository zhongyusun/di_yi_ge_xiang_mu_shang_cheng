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
                </ul>
            </div>
            @if($list>7)
                <div class="bend_shengh_haoh">
                    <?php $i = 0; ?>
                    @foreach($ppp as $v)
                        <?php $i++;?>
                        @if($i<8)
                            <div class="bengd_daoh">
                                <div class="bengd_daoh_ann">
                                    <h3>
                                        <a href="{{route('home.content.list',['list'=>$categories[$v]['id']])}}">{{$categories[$v]['title']}}</a>
                                    </h3>
                                    <i>></i>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @else
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
                                            <a href="{{route('home.content.list',['list'=>$vv['id']])}}">{{$vv['title']}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif

        </div>
    </div>
    <div class="beij_center bengd_hov">
        <div class="bengd_shengh_tout">
            <div class="tout_shangp_lieb">
                <ul>
                    @if(count($rangoods)==0)
                        <h2 style="color: #adadad;font-size: 40px;font-weight: 600;text-align: center;margin-bottom: 200px;margin-top: 20px">暂无商品</h2>
                    @else
                        @foreach($rangoods as $rangood)
                            <li>
                                <a href="{{route('home.content',$rangood->id)}}" class="tout_tup_kuang"><img src="{{$rangood->list_pic}}"></a>
                                <div class="neir">
                                    <a href="{{route('home.content',$rangood->id)}}">{{$rangood->title}}</a>
                                </div>
                                <span>￥:{{$rangood->price}}</span>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!--美食-->
    <div class="beij_center">
        <div class="meis_kuang">
            <div class="meis_biaot">
                {{--<h2>{{$categoryData['title']}}</h2>--}}
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
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
@endpush



