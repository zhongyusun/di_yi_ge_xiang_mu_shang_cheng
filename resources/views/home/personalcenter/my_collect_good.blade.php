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
                        <div class="shand_piaot">我的收藏</div>
                        <ul>
                            <div class="uc_overdueTable">
                                <div class="diyig_s">
                                    <ol>
                                        @if(count($collects)==0)
                                        <h2 style="color: lightgrey;font-size: 40px;font-weight: 400;text-align: center">暂无收藏</h2>
                                        @else
                                            @foreach($collects as $collect)
                                                <li>
                                                    <div class="overflow">
                                                        <div class="shouc_img">
                                                            <a href="{{route('home.content',$collect->collect_id)}}"><img
                                                                    src="{{$collect->belongsModel->list_pic}}"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col280">
                                                        <h2><a href="{{route('home.content',$collect->collect_id)}}"
                                                               title="{{$collect->belongsModel->title}}"
                                                               target="_blank">{{$collect->belongsModel->title}}</a>
                                                        </h2>
                                                        <div class="price_box">
                                                            <span>￥{{$collect->belongsModel->price}}</span></div>
                                                        <div class="price_box"><span
                                                                class="font_aide">收藏时间：{{$collect->created_at}}</span></div>
                                                        <div class="price_box">
                                                            <a href="#" class="button_grey">加入购物车</a>
                                                            <a href="{{route('home.collect_make',['type'=>'good','id'=>$collect->belongsModel->id])}}"
                                                               class="button_grey">取消收藏</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ol>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">jQuery(".slideTxtBox_shouc").slide();</script>
@endsection
@push('js')
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery.SuperSlide.2.1.1.source.js"></script>
@endpush
