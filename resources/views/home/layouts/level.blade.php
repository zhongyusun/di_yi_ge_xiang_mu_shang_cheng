<!--层次-->
{{--家用电器--}}
<div class="chengc_jvz">
    <div class="slideTxtBox">
        <div class="hd">
            <h1>
                <p>{{$oneFloor['name']}}</p>
            </h1>
            <ul>
                <a href="{{route('home.list',1)}}">
                    <li>点击更多</li>
                </a>
            </ul>
        </div>
        <div class="bd">
            <ul>
                <div class="louc_tup_qieh">
                    <div class="js-silder ws-slider">
                        <div class="silder-scroll">
                            <div class="silder-main">
                                @foreach($oneflash as $v)
                                    <div class="silder-main-img">
                                        <a href="{{route('home.content',$v['id'])}}"><img src="{{$v['list_pic']}}"
                                                                                          alt="" height="517px"
                                                                                          width="457px"></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="js-silder-ctrl">
                            <span class="silder-ctrl-prev"></span>
                            <span class="silder-ctrl-next"></span>
                        </div>
                    </div>
                    <div class="kuas_daoh">
                        @foreach($categoryData as $v)
                            @foreach($v['_data'] as $vv)
                                <a href="{{route('home.list',$vv['id'])}}">{{$vv['title']}}</a>
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <div class="you_lirb">
                    <div class="shang_buf">
                        @foreach($oneFloor['data'] as $v)
                            <div class="you_shangp_lieb " style="border-bottom: 1px solid #e9e9e9">
                                <a href="{{route('home.content',$v->id)}}"><img class="you_tup_k"
                                                                                src="{{$v->list_pic}}"></a>
                                <a href="{{route('home.content',$v->id)}}" class="_you_neir_biaot">{{$v->title}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>
{{--电子数码--}}
<div class="chengc_jvz">
    <div class="slideTxtBox2">
        <div class="hd">
            <h1>
                <p>{{$twoFloor['name']}}</p>
            </h1>
            <ul>
                <a href="{{route('home.list',2)}}">
                    <li>点击更多</li>
                </a>
            </ul>
        </div>
        <div class="bd">
            <ul>
                <div class="louc_tup_qieh">
                    <div class="js-silder ws-slider">
                        <div class="silder-scroll">
                            <div class="silder-main">
                                @foreach($twoflash as $v)
                                    <div class="silder-main-img">
                                        <a href="{{route('home.content',$v['id'])}}"><img src="{{$v['list_pic']}}"
                                                                                          alt="" height="517px"
                                                                                          width="457px"></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="js-silder-ctrl">
                            <span class="silder-ctrl-prev"></span>
                            <span class="silder-ctrl-next"></span>
                        </div>
                    </div>
                    <div class="kuas_daoh kuas_daoh_2">
                        @foreach($categoryData['2']['_data'] as $vv)
                            <a href="{{route('home.list',$vv['id'])}}">{{$vv['title']}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="you_lirb you_lirb_2">
                    <div class="shang_buf">
                        @foreach($twoFloor['data'] as $v)
                            <div class="you_shangp_lieb " style="border-bottom: 1px solid #e9e9e9">
                                <a href="{{route('home.content',$v->id)}}">
                                    <img class="you_tup_k" src="{{$v->list_pic}}"></a>
                                <a href="{{route('home.content',$v->id)}}
                                    " class="_you_neir_biaot">{{$v->title}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>
{{--服装服饰--}}
<div class="chengc_jvz">
    <div class="slideTxtBox3">
        <div class="hd">
            <h1>
                <p>{{$threeFloor['name']}}</p>
            </h1>
            <ul>
                <a href="{{route('home.list',3)}}">
                    <li>点击更多</li>
                </a>
            </ul>
        </div>
        <div class="bd">
            <ul>
                <div class="louc_tup_qieh">
                    <div class="js-silder ws-slider">
                        <div class="silder-scroll">
                            <div class="silder-main">
                                @foreach($threeflash as $v)
                                    <div class="silder-main-img">
                                        <a href="{{route('home.content',$v['id'])}}"><img src="{{$v['list_pic']}}"
                                                                                          alt="" height="517px"
                                                                                          width="457px"></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="js-silder-ctrl">
                            <span class="silder-ctrl-prev"></span>
                            <span class="silder-ctrl-next"></span>
                        </div>
                    </div>
                    <div class="kuas_daoh kuas_daoh_3">
                        @foreach($categoryData['3']['_data'] as $vv)
                            <a href="{{route('home.list',$vv['id'])}}">{{$vv['title']}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="you_lirb you_lirb_3">
                    <div class="shang_buf">
                        @foreach($threeFloor['data'] as $v)
                            <div class="you_shangp_lieb " style="border-bottom: 1px solid #e9e9e9">
                                <a href="{{route('home.content',$v->id)}}">
                                    <img class="you_tup_k" src="{{$v->list_pic}}"></a>
                                <a href="{{route('home.content',$v->id)}}
                                    " class="_you_neir_biaot">{{$v->title}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>
{{--汽车用品--}}
<div class="chengc_jvz">
    <div class="slideTxtBox4">
        <div class="hd">
            <h1>
                <p>{{$siFloor['name']}}</p>
            </h1>
            <ul>
                <a href="{{route('home.list',4)}}">
                    <li>点击更多</li>
                </a>
            </ul>
        </div>
        <div class="bd">
            <ul>
                <div class="louc_tup_qieh">
                    <div class="js-silder ws-slider">
                        <div class="silder-scroll">
                            <div class="silder-main">
                                @foreach($siflash as $v)
                                    <div class="silder-main-img">
                                        <a href="{{route('home.content',$v['id'])}}"><img src="{{$v['list_pic']}}"
                                                                                          alt="" height="517px"
                                                                                          width="457px"></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="js-silder-ctrl">
                            <span class="silder-ctrl-prev"></span>
                            <span class="silder-ctrl-next"></span>
                        </div>
                    </div>
                    <div class="kuas_daoh kuas_daoh_4">
                        @foreach($categoryData['4']['_data'] as $vv)
                            <a href="{{route('home.list',$vv['id'])}}">{{$vv['title']}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="you_lirb you_lirb_4">
                    <div class="shang_buf">
                        @foreach($threeFloor['data'] as $v)
                            <div class="you_shangp_lieb " style="border-bottom: 1px solid #e9e9e9">
                                <a href="{{route('home.content',$v->id)}}">
                                    <img class="you_tup_k" src="{{$v->list_pic}}"></a>
                                <a href="{{route('home.content',$v->id)}}
                                    " class="_you_neir_biaot">{{$v->title}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">jQuery(".slideTxtBox").slide();</script>
<script type="text/javascript">jQuery(".slideTxtBox2").slide();</script>
<script type="text/javascript">jQuery(".slideTxtBox3").slide();</script>
<script type="text/javascript">jQuery(".slideTxtBox4").slide();</script>
