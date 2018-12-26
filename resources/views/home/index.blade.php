@extends('home.layouts.master')
@section('content')
    @include('home.layouts.slideshow')
    <!--内容一开始了-->
    <div class="bend_beij">
        <!--本地生活-->
        <div class="bend_dhengh">
            <div class="neir_biaot">
                <p>精品推荐</p>
                <p class="yingw">Local life</p>
            </div>
            <div class="jiank_meis">
                <div class="kuang_1">
                    <a href="#">
                        @foreach($firgood as $vv)
                            <img src="{{$vv->list_pic}}" height="90%" width="100%">
                        @endforeach
                        <div class="jiank_meis_wenz">
                            <p>健康美食</p>
                            <span>让生活&nbsp;&nbsp;更健康&nbsp;&nbsp;更美味&nbsp;&nbsp;更舒心</span>
                        </div>
                    </a>
                </div>
                <div class="dianq_qvy">
                    <div class="ktv_jiub">
                        <ul>
                            @foreach($randomcategory as $v)
                                <li><a href="{{route('home.list',$v)}}">{{$v->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="lunb_t">
                    <div class="picScroll_left_1">
                        <div class="bd">
                            <ul class="picList">
                                @foreach($rangoods as $rangood)
                                    <li>
                                        <div class="pic"><a href="#" target="_blank">
                                                <img style="" src={{$rangood->list_pic}}/></a>
                                        </div>
                                        <div class="title">
                                            <a href="#" target="_blank">{{$rangood->title}}</a>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="hd">
                            <ul></ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(".picScroll_left_1").slide({
                            titCell: ".hd ul",
                            mainCell: ".bd ul",
                            autoPage: true,
                            effect: "left",
                            autoPlay: true,
                            vis: 1,
                            trigger: "click"
                        });
                    </script>

                </div>
            </div>
            <div class="toum_">
                <ul>
                    <li><a href="{{route('home.list',6)}}"><img src="{{asset('icon/1..jpg')}}" height="166px"
                                                                width="291px">
                            <div class="jiank_meis_wenz_1">
                                <p>健康美食</p>
                            </div>
                        </a>
                    </li>
                    <li class="sdfs"><a href="{{route('home.list',5)}}"><img src="{{asset('icon/2.jpg')}}"
                                                                             height="166px" width="291px">
                            <div class="jiank_meis_wenz_1">
                                <p>休闲娱乐</p>
                            </div>
                        </a>
                    </li>
                    <li><a href="{{route('home.list',3)}}"><img src="{{asset('icon/3.jpg')}}" height="166px"
                                                                width="291px">
                            <div class="jiank_meis_wenz_1">
                                <p>丽人</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--周边-->
        <div class="zhoub">
            <div class="neir_biaot">
                <p>周边</p>
                <p class="yingw">periphery</p>
            </div>
            <div class="zhoub_neir">
                <ul>
                    @foreach($latestGood as $v)
                        <li><a href="{{route('home.content',$v->id)}}"><img src="{{$v->list_pic}}" height="100%"
                                                                            width="165px"></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    @include('home.layouts.level')


    <!--广告图-->
    <div class="guangg_tu">
        <a href="#"><img src="{{asset('icon/xmad_15454719135412_tSMjH.jpg')}}" width="100%"></a>
    </div>


    <!--特色商品/ 热门商品-->

    <div class="tes_shnagp_beij">
        <div class="tes_shangp">
            <div class="neir_biaot">
                <p>特色商品</p>
                <p class="yingw">featured</p>
            </div>
            <div class="tes_shangp_neir_k">
                <div class="tes_dat">
                    @foreach($tesegoods as $tesegood)
                        <a href="{{route('home.content',$tesegood->id)}}">
                            <h1><img class="tes_dat_dongh" src="{{$tesegood->list_pic}}"></h1>
                            <h2>{{$tesegood->title}}</h2>
                            <span>¥ {{$tesegood->price}}</span>
                        </a>
                    @endforeach
                </div>
                <div class="tes_xiaot_beij">
                    <div class="tes_xiaot_shang">
                        @foreach($tegoods as $tegood)
                            <div class="tes_xiaot_neir">
                                <a href="{{route('home.content',$tegood->id)}}">
                                    <h1><img class="tes_xiaot_dongh" src="{{$tegood->list_pic}}"></h1>
                                    <h2>{{$tegood->title}}</h2>
                                    <span>¥ {{$tegood->price}}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="tes_xiaot_shang tes_xiaot_xia">
                        @foreach($segoods as $segood)
                            <div class="tes_xiaot_neir">
                                <a href="{{route('home.content',$segood->id)}}">
                                    <h1><img class="tes_xiaot_dongh" src="{{$segood->list_pic}}"></h1>
                                    <h2>{{$segood->title}}</h2>
                                    <span>¥ {{$segood->price}}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="rem_shangp">
            <div class="neir_biaot">
                <p>热门商品</p>
                <p class="yingw">Hot commodity</p>
            </div>
            <div class="rem_shangp_beij_k">
                <!---->
                <div class="picScroll_left">
                    <div class="hd">
                        <ul></ul>
                    </div>
                    <div class="bd">
                        <ul class="picList">
                            @foreach($goods as $good)
                                <li>
                                    <div class="pic"><a href="{{route('home.content',$good->id)}}" target="_blank"><img src="{{$good->list_pic}}"/></a>
                                    </div>
                                    <div class="title" style="width: 210px">
                                        <a href="{{route('home.content',$good->id)}}" target="_blank">{{$good->title}}</a><span>¥ {{$good->price}}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!---->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".picScroll_left").slide({
            titCell: ".hd ul",
            mainCell: ".bd ul",
            autoPage: true,
            effect: "left",
            autoPlay: true,
            vis: 2,
            trigger: "click"
        });
    </script>
@endsection


