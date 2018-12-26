@extends('home.layouts.master')
@section('content')
    <!--轮播图上方导航栏  一栏-->
    <div id="navv" class="navv_ziy">
        <div class="focus">
            <div class="focus-a">
                <div class="fouc-font fouc_font_ziy">
                    <a href="#">全部商品分类</a>
                </div>
            </div>
            <div class="focus-b">
                <ul>
                    <li><a href="{{route('home.home')}}">商城首页</a></li>
                </ul>
            </div>
            <!--左边导航-->
            <div class="subpage">
                <h2></h2>
                <div class="prosul dd-inner dd_inner_ziy" id="proinfo">
                    <?php $i = 0; ?>
                    @foreach($categoryData as $v)
                        <?php $i++;?>
                        @if($i<8)
                            <div class="font-item">
                                <div class="item fore1">
                                    <h3>
                                        <a class="da_zhu"
                                           href="{{route('home.list',['list'=>$v['id']])}}">{{$v['title']}}</a>
                                        <p>
                                            <?php $p = 0; ?>
                                            @foreach($v['_data'] as $vv)
                                                <?php $p++;?>
                                                @if($p<4)
                                                    <a href="{{route('home.list',['list'=>$vv['id']])}}">{{$vv['title']}}</a>
                                                @endif
                                            @endforeach
                                        </p>
                                    </h3>
                                    <i>></i>
                                </div>
                                <div class="font-item1">
                                    <div class="font-lefty">
                                        <?php $q = 0; ?>
                                        @foreach($v['_data'] as $vv)
                                            <?php $q++;?>
                                            @if($q<8)
                                                <dl class="fore1">
                                                    <dt>
                                                        <a href="{{route('home.list',['list'=>$vv['id']])}}">{{$vv['title']}}
                                                            <i>></i></a></dt>
                                                    <dd>
                                                        <?php $w = 0; ?>
                                                        @foreach($vv['_data'] as $vvv)
                                                            <?php $w++;?>
                                                            @if($w<21)
                                                                <a href="{{route('home.list',['list'=>$vvv['id']])}}">{{$vvv['title']}}</a>
                                                            @endif
                                                        @endforeach
                                                    </dd>
                                                </dl>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <!--左边导航结束-->
        </div>
    </div>
    <script type="text/javascript">
        (function () {
            var $subblock = $(".subpage"), $head = $subblock.find('h2'), $ul = $("#proinfo"), $lis = $ul.find("li"),
                inter = false;
            $head.mouseover(function (e) {
                e.stopPropagation();
                if (!inter) {
                    $ul.show();
                } else {
                    $ul.hide();
                }
                inter = !inter;
            });

            $ul.mouseover(function (event) {
                event.stopPropagation();
            });

            $(document).mouseover(function () {
                $ul.hide();
                inter = !inter;
            });
        })();
    </script>
    <!--列表一开了-->
    <div class="nSearchWarp">
        <div class="hot-tj">
            <span class="icon_tj">热卖<br>推荐</span>
            <ul class="hot-list clearfix">
                @foreach($rangoods as $rangood)
                    <li class="item asynPriceBox">
                        <p class="pic">
                            <a target="_blank" href="{{route('home.content',$rangood->id)}}"><img src="{{$rangood->list_pic}}" alt=""></a>
                        </p>
                        <p class="name"><a href="{{route('home.content',$rangood->id)}}" title=" {{$rangood->title}}">
                               {{$rangood->title}}</a></p>
                        <p class="price asynPrice">¥{{$rangood->price}}</p>
                        <p class="btn"><a class="buy" href="{{route('home.content',$rangood->id)}}">立即抢购</a></p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="lujing_ziy">
        @foreach($fatherData as $v)
            <a href="{{route('home.list',$v['id'])}}">{{$v['title']}}</a>>
        @endforeach
    </div>
    <div class="shangp_lieb_jvz">
        <!--列表-->
        <div class="shangp_lieb_yi">
            <div class="filter_yi">
                <div class="f_line">
                    <div class="f_sort">
                        <a href="" class="curr_1">综合排序<i></i></a>
                        @if(request ()->query('price') == 'asc')
                            <a href="{{route('home.content.list',['list'=>$list,'price'=>'desc'])}}" class="curr_2">价格<i></i></a>
                        @else
                            <a href="{{route('home.content.list',['list'=>$list,'price'=>'asc'])}}" class="curr_2">价格<i></i></a>
                        @endif
                        <a href="#" class="curr_2">评论数<i></i></a>
                    </div>
                </div>
                <div class="f_line_xia">
                    <div class="sdgdfg">配&nbsp;送&nbsp;至：</div>
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
            <div class="shnagp_list_v1 shnagp_list_v1_lieb_er">
                <ul>
                    @if(count($listgoods)==0)
                        <li>
                            <h2 style="text-align: center;color: #adadad;font-size: 40px;margin-top: 10px">暂无商品</h2>
                        </li>
                    @else
                        @foreach($listgoods as $listgood)
                            <li>
                                <div class="lieb_neir_kuang lieb_neir_kuang_1">
                                    <div class="lieb_img lieb_img_1">
                                        <a href="{{route('home.content',$listgood->id)}}">
                                            <img src="{{$listgood->list_pic}}" height="100%"></a>
                                    </div>
                                    <div class="lieb_er_kuang">
                                        <div class="shangp_biaot_ shangp_biaot_1">
                                            <a href="#">{{$listgood->title}}</a>
                                        </div>
                                        <div class="lieb_text lieb_text_1">
                                            <div class="p_price">
                                                <strong class="J_price"><em>¥</em><i>{{$listgood->promotion}}</i>
                                                    <p><em class="shangp_yuanj zuo_ji">¥</em><i
                                                            class="shangp_yuanj">{{$listgood->price}}</i>
                                                    </p>
                                                </strong>
                                            </div>
                                        </div>
                                        <div class="you_pingj you_pingj_1">
                                            <p>已有评价</p>
                                            <span><a href="#"><em>100+</em></a> 人</span>
                                        </div>
                                        <div class="lieb_dianp_mingc lieb_dianp_mingc_1">
                                            <div class="zuo_mingc">
                                                <div class="p_icons">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-product">
                                            <a class="J_focus" href="{{route('home.content',$listgood->id)}}"><i></i>查看详情</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!--列表一结束-->
    <!--猜你喜欢-->
    <div class="cain_xih">
        <div class="mt">
            <h2 class="title">猜你喜欢</h2>
            <div class="extra">
                <a href="" class="change"><i class="ico"></i><span class="txt">换一批</span></a>
            </div>
        </div>
        <ul class="cain_xihuan_neir">
            @foreach($categoods as $categood)
                <li>
                    <div class="item_pic"><a href="{{route('home.content',$categood->id)}}">
                            <img src="{{$categood->list_pic}}"></a></div>
                    <div class="cain_xih_biaot">
                        <a href="{{route('home.content',$categood->id)}}">{{$categood->title}}</a>
                    </div>
                    <div class="cain_xih_jiaq"><p>￥{{$categood->price}}</p></div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
@endpush
@push('js')
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/chengs/jquery.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/chengs/bootstrap.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/chengs/city-picker.data.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/chengs/city-picker.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/chengs/main.js"></script>
@endpush
