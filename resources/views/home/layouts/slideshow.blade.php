<!--轮播图上方导航栏  一栏-->
<div id="navv">
    <div class="focus">
        <div class="focus-a">
            <div class="fouc-font"><a href="">全部商品分类</a></div>
        </div>
        <div class="focus-b">
            <ul>
                <li><a href="/">商城首页</a></li>
            </ul>
        </div>
        <!--左边导航-->
        <div class="dd-inner">
            <?php $i = 0; ?>
            @foreach($categoryData as $v)
                <?php $i++;?>
                @if($i<8)
                    <div class="font-item">
                        <div class="item fore1">
                            <h3>
                                <a class="da_zhu" href="{{route('home.list',['list'=>$v['id']])}}">{{$v['title']}}</a>
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
                                            <dt><a href="{{route('home.list',['list'=>$vv['id']])}}">{{$vv['title']}}<i>></i></a>
                                            </dt>
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
</div>

<!--轮播图-->
<div id="lunbo">
    <ul id="one">
        @if(count($flashs)==0)
            <li><a href=""><img src="{{asset('org/receptionist')}}/images/banner.jpg"></a></li>
            <li><a href=""><img src="{{asset('org/receptionist')}}/images/banner1.jpg"></a></li>
            <li><a href=""><img src="{{asset('org/receptionist')}}/images/banner.jpg"></a></li>
            <li><a href=""><img src="{{asset('org/receptionist')}}/images/banner1.jpg"></a></li>
        @else
            @foreach($flashs as $flash)
                <li><a href=""><img src="{{$flash->path}}" style="text-align: center;height: 450px;width: 2863px"></a></li>
            @endforeach
        @endif


    </ul>
    <ul id="two">
        <li class="on">1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ul>
    <!--轮播图左右箭头-->
    <div class="slider-page">
        <a href="javascript:void(0)" id="left"><</a>
        <a href="javascript:void(0)" id="right">></a>
    </div>
</div>
