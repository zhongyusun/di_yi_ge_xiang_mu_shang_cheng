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
                    <li><a href="#">本地生活</a></li>
                    <li><a href="#">团购专区</a></li>
                    <li><a href="#">积分商城 </a></li>
                    <li><a href="#">分销系统</a></li>
                    <li><a href="#">办公耗材</a></li>
                    <li><a href="#">饰品礼品</a></li>
                    <li><a href="#">休闲娱乐</a></li>
                </ul>
            </div>

            <!--左边导航-->

            <div class="subpage">
                <h2></h2>
                <div class="prosul dd-inner dd_inner_ziy" id="proinfo">
                    <div class="font-item">
                        <div class="item fore1">
                            <h3>
                                <a class="da_zhu" href="#">办公家具</a>
                                <p>
                                    <a href="#">五金</a>
                                    <a href="#">家具</a>
                                    <a href="#">家装</a>
                                    <a href="#">厨具</a>
                                </p>
                            </h3>
                            <i>></i>
                        </div>
                        <div class="font-item1">
                            <div class="font-lefty">
                                <dl class="fore1">
                                    <dt><a href="#">大家电<i>></i></a></dt>
                                    <dd>
                                        <a href="#">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a
                                            href="">家庭影院</a><a
                                            href="">DVD</a><a href="">迷你音响</a>
                                        <a href="#">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a
                                            href="">冰柜/冰吧</a><a
                                            href="">酒柜</a><a href="">家电配件</a>
                                    </dd>
                                </dl>
                                <dl class="fore1">
                                    <dt><a href="#">生活电器<i>></i></a></dt>
                                    <dd>
                                        <a href="#">取暖电器</a><a href="">净化器</a><a href="">扫地机器人</a><a href="">吸尘器</a><a
                                            href="">加湿器</a><a href="">挂烫机/熨斗</a><a href="">电风扇</a>
                                        <a href="#">冷风扇</a><a href="">插座</a><a href="">电话机</a><a href="">净水器</a><a
                                            href="">饮水机</a>
                                        <a href="#">除湿机</a><a href="">干衣机清洁机</a><a href="">收录/音机</a><a
                                            href="">生活电器配件</a><a
                                            href="">其它生活电器</a>
                                    </dd>
                                </dl>
                                <dl class="fore1">
                                    <dt><a href="#">厨房电器<i>></i></a></dt>
                                    <dd>
                                        <a href="#">电压力锅</a><a href="">豆浆机</a><a href="">面包机</a><a href="">咖啡机</a><a
                                            href="">微波炉料理/榨汁机</a><a href="">电烤箱</a><a href="">电磁炉</a>
                                        <a href="#">电饼铛/烧烤盘</a><a href="">煮蛋器酸奶机</a><a href="">电水壶/热水瓶</a><a
                                            href="">电炖锅</a><a
                                            href="">多用途锅</a><a href="">果蔬解毒机</a><a href="#">养生壶/煎药壶</a><a
                                            href="">其它厨房电器</a>
                                    </dd>
                                </dl>
                                <dl class="fore1">
                                    <dt><a href="#">个护健康<i>></i></a></dt>
                                    <dd>
                                        <a href="#">剃须刀剃/脱毛器</a><a href="">口腔护理</a><a href="">电吹风</a><a
                                            href="">美容器</a><a
                                            href="">理发器卷/直发器</a><a href="">按摩椅</a><a href="">按摩器</a>
                                        <a href="#">足浴盆</a><a href="">血压计</a><a href="">健康秤/厨房秤</a><a href="">血糖仪</a><a
                                            href="">体温计</a><a href="">计步器/脂肪检测仪</a><a href="">脂肪检测仪其它健康电器</a>
                                    </dd>
                                </dl>
                                <dl class="fore1">
                                    <dt><a href="">五金家装<i>></i></a></dt>
                                    <dd>
                                        <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a
                                            href="">家庭影院</a><a
                                            href="">DVD</a><a href="">迷你音响</a><a href="">烟机/灶具</a>
                                        <a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a href="">酒柜</a><a
                                            href="">家电配件</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="font-right">
                                <div>
                                    <a href="#">
                                        <img src="./images/562f4971Na5379aba.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9eef9N5bb8d27f.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef02N99d26435.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef10Nd206a236.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef28N00328d44.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef34N7cc61f4c.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef3eN99aef1f0.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef4cN4fe57f9b.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="font-righty">
                                <a href="#">
                                    <img src="./images/5673a854N10856704.jpg">
                                </a>
                                <a href="#">
                                    <img src="./images/56a0376aN7de1bdcf.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="fore-2">
                        <div class="item fore1">
                            <h3>
                                <a class="da_zhu" href="#">电脑数码</a>
                                <p>
                                    <a href="#">手机</a>
                                    <a href="#">电脑</a>
                                    <a href="#">办公</a>
                                    <a href="#">钟表</a>
                                </p>
                            </h3>
                            <i>></i>
                        </div>
                        <div class="font-item1">
                            <div class="font-lefty">
                                <dl class="fore1">
                                    <dt><a href="">电脑数码<i>></i></a></dt>
                                    <dd>
                                        <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a
                                            href="">家庭影院</a><a
                                            href="">DVD</a><a href="">迷你音响</a>
                                        <a href="">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a
                                            href="">酒柜</a><a href="">家电配件</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="font-right">
                                <div>
                                    <a href="#">
                                        <img src="./images/562f4971Na5379aba.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9eef9N5bb8d27f.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef02N99d26435.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef10Nd206a236.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef28N00328d44.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef34N7cc61f4c.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef3eN99aef1f0.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef4cN4fe57f9b.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fore-3">
                        <div class="item fore1">
                            <h3>
                                <a class="da_zhu" href="#">服饰鞋帽</a>
                                <p>
                                    <a href="#">男装</a>
                                    <a href="#">女装</a>
                                    <a href="#">童装</a>
                                    <a href="#">内衣</a>
                                </p>
                            </h3>
                            <i>></i>
                        </div>
                        <div class="font-item1">
                            <div class="font-lefty">
                                <dl class="fore1">
                                    <dt><a href="">服饰鞋帽<i>></i></a></dt>
                                    <dd>
                                        <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a
                                            href="">家庭影院</a><a
                                            href="">DVD</a><a href="">迷你音响</a>
                                        <a href="">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a
                                            href="">酒柜</a><a href="">家电配件</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="font-right">
                                <div>
                                    <a href="#">
                                        <img src="./images/562f4971Na5379aba.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9eef9N5bb8d27f.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef02N99d26435.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef10Nd206a236.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef28N00328d44.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef34N7cc61f4c.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef3eN99aef1f0.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef4cN4fe57f9b.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fore-4">
                        <div class="item fore1">
                            <h3>
                                <a class="da_zhu" href="#">汽车用品</a>
                                <p>
                                    <a href="#">汽车配件</a>
                                    <a href="#">礼品</a>
                                    <a href="#">家政服务</a>
                                </p>
                            </h3>
                            <i>></i>
                        </div>
                        <div class="font-item1">
                            <div class="font-lefty">
                                <dl class="fore1">
                                    <dt><a href="">汽车用品<i>></i></a></dt>
                                    <dd>
                                        <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a
                                            href="">家庭影院</a><a
                                            href="">DVD</a><a href="">迷你音响</a>
                                        <a href="">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a
                                            href="">酒柜</a><a href="">家电配件</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="font-right">
                                <div>
                                    <a href="#">
                                        <img src="./images/562f4971Na5379aba.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9eef9N5bb8d27f.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef02N99d26435.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef10Nd206a236.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef28N00328d44.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef34N7cc61f4c.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef3eN99aef1f0.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef4cN4fe57f9b.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fore-5">
                        <div class="item fore1">
                            <h3>
                                <a class="da_zhu" href="#">食品保健</a>
                                <p>
                                    <a href="#">美食</a>
                                    <a href="#">酒类</a>
                                    <a href="#">生鲜</a>
                                    <a href="#">特产</a>
                                </p>
                            </h3>
                            <i>></i>
                        </div>
                        <div class="font-item1">
                            <div class="font-lefty">
                                <dl class="fore1">
                                    <dt><a href="">食品保健<i>></i></a></dt>
                                    <dd>
                                        <a href="">食品保健</a><a href="">食品保健</a><a href="">冰箱</a><a href="">洗衣机</a><a
                                            href="">家庭影院</a><a
                                            href="">DVD</a><a href="">迷你音响</a>
                                        <a href="">烟机/食品保健</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a
                                            href="">冰柜/冰吧</a><a
                                            href="">酒柜</a><a href="">家电配件</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="font-right">
                                <div>
                                    <a href="#">
                                        <img src="./images/562f4971Na5379aba.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9eef9N5bb8d27f.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef02N99d26435.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef10Nd206a236.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef28N00328d44.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef34N7cc61f4c.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef3eN99aef1f0.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef4cN4fe57f9b.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fore-6">
                        <div class="item fore1">
                            <h3>
                                <a class="da_zhu" href="#">美酒鲜花</a>
                                <p>
                                    <a href="#">手机</a>
                                    <a href="#">电脑</a>
                                    <a href="#">办公</a>
                                    <a href="#">钟表</a>
                                </p>
                            </h3>
                            <i>></i>
                        </div>
                        <div class="font-item1">
                            <div class="font-lefty">
                                <dl class="fore1">
                                    <dt><a href="">美酒鲜花<i>></i></a></dt>
                                    <dd>
                                        <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a
                                            href="">家庭影院</a><a
                                            href="">DVD</a><a href="">迷你音响</a>
                                        <a href="">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a
                                            href="">酒柜</a><a href="">家电配件</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="font-right">
                                <div>
                                    <a href="#">
                                        <img src="./images/562f4971Na5379aba.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9eef9N5bb8d27f.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef02N99d26435.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef10Nd206a236.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef28N00328d44.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef34N7cc61f4c.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef3eN99aef1f0.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef4cN4fe57f9b.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fore-7">
                        <div class="item fore1">
                            <h3>
                                <a class="da_zhu" href="#">图书</a>
                                <p>
                                    <a href="#">图书</a>
                                    <a href="#">图书</a>
                                    <a href="#">办公</a>
                                    <a href="#">电子书</a>
                                </p>
                            </h3>
                            <i>></i>
                        </div>
                        <div class="font-item1">
                            <div class="font-lefty">
                                <dl class="fore1">
                                    <dt><a href="">图书<i>></i></a></dt>
                                    <dd>
                                        <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a
                                            href="">家庭影院</a><a
                                            href="">DVD</a><a href="">迷你音响</a>
                                        <a href="">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a
                                            href="">酒柜</a><a href="">家电配件</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="font-right">
                                <div>
                                    <a href="#">
                                        <img src="./images/562f4971Na5379aba.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9eef9N5bb8d27f.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef02N99d26435.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef10Nd206a236.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef28N00328d44.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef34N7cc61f4c.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef3eN99aef1f0.jpg">
                                    </a>
                                    <a href="#">
                                        <img src="./images/54d9ef4cN4fe57f9b.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---->
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
    <!--商品详情-->
    <div class="breadcrumbs_container">
        {{--所属分类--}}
        <div class="left_luj">
            <ul>
                <li>
                    <a href="#" title="服饰鞋帽">服饰鞋帽</a>
                    <i class="icon-crumbs-right"></i>
                </li>
                <li>
                    <a title="女装">女装</a>
                    <i class="icon-crumbs-right"></i>
                </li>
                <li>
                    <a href="#" title="连衣裙">连衣裙</a>
                    <i class="icon-crumbs-right"></i>
                </li>
                <li>
                    <a href="#" title="Mistletoe">Mistletoe</a>
                    <i class="icon-crumbs-right"></i>
                </li>
                <li class="active">
                    <a href="#" title="Mistletoe碎花夏季新款女装韩版印花连衣裙F6641(白色 M)">Mistletoe碎花夏季新款女装韩版印花连衣裙F6641(白色 M)</a>
                </li>
            </ul>
        </div>
        {{--店铺--}}
        <div class="right_dianp">
            <div class="ly-stores shops-name">
                <a class="btn-collect ">
                    <i class="icon-collect"></i>
                    <span>收藏店铺</span>
                    <i class="icon-arrow"></i>
                </a>
                <a class="btn-service hide customerService_show"><i></i>在线客服</a>
                <span class="services-score"><b class="star-gray"><i class="star-red"
                                                                     style="width:88.9059333333%"></i></b><em
                        class="score">4.4</em>分</span>
                <a class="name" title="Mistletoe女装旗舰店" href="#" target="_blank">Mistletoe女装旗舰店</a>

            </div>
        </div>
    </div>
    <div class="gome_container">
        <!--左-->
        <div class="prd_firstscreen_left">
            <!---->
            <div id="magnifier">
                <div class="small-box">
                    <img src="{{$content->list_pic}}" style="height: 100%;width: 100%;" alt="#">
                    <span class="hover"></span>
                </div>
                <div class="thumbnail-box">
                    <a href="javascript:;" class="btn btn-prev"></a>
                    <a href="javascript:;" class="btn btn-next"></a>
                    <div class="list">
                        <ul class="wrapper">
                            @foreach($content['pics'] as $v)
                                <li class="item" data-src="{{$v}}"><img src="{{$v}}" alt="#">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="big-box">
                    <img src="{{$content->list_pic}}" height="200%" width="200%" alt="#">
                </div>
            </div>
            {{--<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>--}}
            <script src="{{asset('org/receptionist')}}/js/magnifier.js"></script>

            <script>
                $(function () {
                    $('#magnifier').magnifier();
                });
            </script>
            <!---->
            <div class="preview-info">
                <div class="left-btns">
                    <a class="share J-share" href="#">
                        <i class="sprite-share"></i><em>分享</em>
                    </a>
                    <a class="" href="#">
                        <i class="sprite-compare"></i><em>收藏商品（商品人气1500）</em>
                    </a>
                </div>
                <div class="right-btns">
                    <a class="report-btn" href="#">举报</a>
                </div>
            </div>
        </div>
        <!--中-->
        <div class="prd_firstscreen_center">
            <div class="hgroup">
                <h1>{{$content->title}}</h1>
            </div>
            <div class="prd_price_1">
                <div class="unitprice">
                    <p>
                        <label class="prd_price_left">原&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价</label>
                        <span class="price xiangq_yuanj"><em>¥</em>{{$content->price}}</span>
                    </p>
                    <p>
                        <label class="prd_price_left">促&nbsp;销&nbsp;价</label>
                        <span class="price"><em>¥</em>{{$content->price}}</span>
                    </p>
                </div>
                <div class="prd_price_flr">
                    <div class="prd_price_line">|</div>
                    <div class="prd_price_lineright">
                        <p>好评度<em id="haocnt">98%</em></p>
                        <p class="pincnt"><a href="#" class="reduce"><em>55</em>人评价</a></p>
                    </div>
                </div>
            </div>
            <!---->
            <div class="prd_properties">
                <div class="prd_properties_1">
                    <label class="prd_price_left">服&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;务</label>
                    <span>由<a href="#">Mistletoe女装旗舰店</a>发货并负责售后服务。</span>
                </div>
                <div class="prd-properties-2">
                    <div class="prd_properties_other">
                        <label class="prdLeft">选择规格</label>
                        <div class="prdRight">
                            @foreach($content->specs as $v)
                                <div class="prdcol">
                                    {{--class="select"选中效果--}}
                                    <a href="javascript:;" class="qwe" onclick="chooseSpec({{$v['id']}})"
                                       title="{{$v['spec']}}" data-alt="{{$v['spec']}}">
                                        <img src="{{$content->list_pic}}" gome-src="{{$content->list_pic}}"
                                             alt="{{$v['spec']}}">
                                        <span>{{$v['spec']}}</span><i></i>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="prd_properties_other" style="display:block">
                        <label class="prdLeft">选择系列</label>
                        <div class="prdRight_1">
                            @foreach($content->specs as $v)
                                <div class="prdmod">
                                    <a href="javascript:;" class="clicks" title="{{$v['sort']}}"
                                       data-alt="{{$v['sort']}}">{{$v['sort']}}<i></i></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="prd_properties_1 hou_jia">
                <label class="prd_price_left">货&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;源</label>
                <span>库存仅剩5件</span>
            </div>
            <style type="text/css">
                .hou_jia {
                    padding: 0 10px;
                }

                .kuc_jian {
                    width: 100%;
                    line-height: 25px;
                }
            </style>
            <!---->
            <div class="prd_buttons">
                <div class="count-wrapper" id="btnCount">
                    <input type="text" class="quantity" value="1">
                    <a href="javascript:;" onclick="jia()" class="plus j-gACbtnA">+</a>
                    <a href="javascript:;" onclick="jian()" class="minus j-gACbtn">-</a>
                </div>
                <a href="#" class="btn-product btn-addcart">立即购买</a>
                <a href="jiar_rouw_c.html" class="btn-product">加入购物车</a>

            </div>
            <!---->
            <div class="prd-tips wenxintishi_wrap clearfix">
                <p>温馨提示</p>
                <ol class="wenxinti">
                    <li>
                        正品保障；
                        支持7天无理由退货
                    </li>
                </ol>
            </div>
            <!---->
        </div>
        <!--右-->
        <div class="prd_firstscreen_right">
            <h2>看了又看</h2>
            <!---->
            <div class="multipleColumn" style="margin:0 auto">
                <div class="bd">
                    <div class="ulWrap">
                        <ul><!-- 把每次滚动的n个li放到1个ul里面 -->
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/xiangqtu_1.jpg"/></a>
                                </div>
                                <div class="title"><a href="#" target="_blank">￥68.00</a></div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/lieb_tupi3.jpg"/></a>
                                </div>
                                <div class="title"><a href="#" target="_blank">￥68.00</a></div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/big_3.jpg"/></a></div>
                                <div class="title"><a href="#" target="_blank">￥68.00</a></div>
                            </li>
                        </ul>
                        <ul><!-- 把每次滚动的n个li放到1个ul里面 -->
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/xiangqtu_1.jpg"/></a>
                                </div>
                                <div class="title"><a href="#" target="_blank">￥68.00</a></div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/lieb_tupi3.jpg"/></a>
                                </div>
                                <div class="title"><a href="#" target="_blank">￥68.00</a></div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/big_3.jpg"/></a></div>
                                <div class="title"><a href="#" target="_blank">￥68.00</a></div>
                            </li>
                        </ul>
                        <ul><!-- 把每次滚动的n个li放到1个ul里面 -->
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/xiangqtu_1.jpg"/></a>
                                </div>
                                <div class="title"><a href="#" target="_blank">￥68.00</a></div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/lieb_tupi3.jpg"/></a>
                                </div>
                                <div class="title"><a href="#" target="_blank">￥68.00</a></div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/big_3.jpg"/></a></div>
                                <div class="title"><a href="#" target="_blank">￥68.00</a></div>
                            </li>
                        </ul>
                    </div><!-- ulWrap End -->
                </div><!-- bd End -->
                <div class="hd">
                    <ul></ul>
                </div>
            </div><!-- multipleColumn End -->

            <script type="text/javascript">
                jQuery(".multipleColumn").slide({
                    titCell: ".hd ul",
                    mainCell: ".bd .ulWrap",
                    autoPage: true,
                    effect: "leftLoop",
                    autoPlay: true,
                    vis: 1
                });
            </script>
            <!---->
        </div>
    </div>

    <!--商品信息结束-->
    <!--详情-->
    <div class="shangp_xiangq_neir_beij">
        <!--left-->
        <div class="shangp_xiangq_left">
            <!---->
            <div class="shangp_xiangq_left_biank">
                <div class="stores-infos">
                    <div class="ly-stores">
                        <h2 class="fix-storesname shops-name" id="store_live800_wrap">
                            <a class="name" title="茂烨旗舰店" href="#" target="_blank">茂烨旗舰店</a>
                        </h2>
                        <div class="services-wrapper">
                            <div class="services-stars">
                                服务评分：
                                <span class="star"><i style="width:81.2819333333%">星星</i></span>
                                <span class="score">4.0</span>分
                            </div>
                            <div class="services-score-detail">
                                <p><span class="detail">评分明细</span><span class="contrast">与行业对比</span></p>
                                <div class="describe ">
                                    <p>商品描述：<span>4.15</span>
                                        <small title="计算规则：（商家得分-同行业平均分）" class="diyu_text">9.93%</small>
                                        <i class="diyu">箭头</i></p>
                                </div>
                                <div class="logistics">
                                    <p>发货速度：<span>3.96</span>
                                        <small title="计算规则：（商家得分-同行业平均分" class="diyu_text">15.34%</small>
                                        <i class="diyu">箭头</i></p>
                                </div>
                                <div class="services">
                                    <p>服务质量：<span>4.08</span>
                                        <small title="计算规则：（商家得分-同行业平均分））" class="diyu_text">13.08%</small>
                                        <i class="diyu">箭头</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <a href="#" class="btn-product btn-enter" target="_blank"><i></i>进入店铺</a>
                            <a href="#" class="btn-collect"><i class="sprite-enter"></i>收藏店铺</a>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="dianp_xiao_jiej">
                    <div class="shangj_diz">
                        <p>地址：<span>贵州省贵阳市云岩区大亨大厦16层</span></p>
                        <p>联系人：<span>潘中全</span></p>
                        <p>电话：<span>0852-8667011</span></p>
                        <p>营业时间：<span>09:00至18:00</span></p>
                    </div>
                    <div class="_xq_gogns_jianj">
                        <p>公司简介：</p>
                        <p class="_xq_gogns_jianj_neir">魅CO视觉，主张时尚个性的摄影理念，以独特和新锐的时尚触觉为客户提供性化的摄影服务。追逐时尚，同时更注重情感表达。用最丰<a
                                href="#">[查看更多]</a></p>
                    </div>
                </div>
            </div>
            <!---->
            <div class="shangp_xiangq_left_biank">
                <div class="stores-infos">
                    <div class="ly-stores">
                        <h2 class="fix-storesname shops-name" id="store_live800_wrap">
                            <a class="name" title="本店商品" href="#" target="_blank">本店商品</a>
                        </h2>
                        <ul class="bend_shangp_lieb">
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi3.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi3.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi2.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi1.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi2.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi2.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!---->
            <div class="shangp_xiangq_left_biank">
                <div class="stores-infos">
                    <div class="ly-stores">
                        <h2 class="fix-storesname shops-name" id="store_live800_wrap">
                            <a class="name" title="热门商品" href="#" target="_blank">热门商品</a>
                        </h2>
                        <ul class="bend_shangp_lieb">
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi3.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi3.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi2.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi1.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi2.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lieb_tupi2.jpg">
                                    <h3>￥58.00</h3>
                                    <p>茵珠麗YinZhuli 春秋季新款韩版居家服女针织棉长袖情</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!---->
        </div>
        <!--right-->
        <div class="shangp_xiangq_right">
            <!---->
            <div class="slideTxtBox_1">
                <div class="hd">
                    <ul>
                        <li>商品介绍</li>
                        <li>售后保障</li>
                        <li>商品评价(500+)</li>
                    </ul>
                </div>
                <div class="bd">
                    <ul>
                        {{--产品介绍--}}
                        <div class="p_parameter">
                            {{$content->description}}
                        </div>
                    </ul>
                    <!--售后保障-->
                    <ul>
                        <div class="shouh_baoz">
                            <div class="mt">
                                <h3>售后保障</h3>
                            </div>
                            <!---->
                            <div class="mc">
                                <div class="item-detail item-detail-copyright">
                                    <div class="serve-agree-bd">
                                        {!! $content->content !!}
                                    </div>
                                    <div id="state">
                                        <strong>权利声明：</strong><br>wangid通城上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是京东重要的经营资源，未经许可，禁止非法转载使用。
                                        <p><b>注：</b>本站商品信息均来自于合作方，其真实性、准确性和合法性由信息拥有者（合作方）负责。本站不提供任何保证，并不承担任何法律责任。</p>
                                    </div>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="shouh_baoz_2">
                            <div class="mt"><h3>商品评价</h3></div>
                            <div class="mc">
                                <div class="comment-info J-comment-info">
                                    <div class="comment-percent">
                                        <strong class="percent-tit">好评度</strong>
                                        <div class="percent-con">99<span>%</span></div>
                                    </div>
                                </div>
                                <!---->
                                <div class="ETab">
                                    <div class="tab-main small">
                                        <ol class="filter-list">
                                            <li class="current_xq" data-num="4900"><a href="#">全部评价<em>(4900+)</em></a>
                                            </li>
                                            <li><a href="#">晒图<em>(60)</em></a></li>
                                            <li class="J-addComment"><a href="#">追评<em>(8)</em></a></li>
                                            <li><a href="#">好评<em>(4900+)</em></a></li>
                                            <li>
                                                <a href="#">中评<em>(40+)</em></a></li>
                                            <li><a href="#">差评<em>(20+)</em></a></li>
                                            <li class="comm-curr-sku"><span><input
                                                        type="checkbox"></span><label>只看当前商品评价</label></li>
                                        </ol>
                                        <div class="_extra_a">
                                            <div class="sort-select">
                                                <div class="current_tc"><span
                                                        class="J-current-sortType">推荐排序</span><i></i>
                                                </div>
                                                <div class="others">
                                                    <div class="curr"><span
                                                            class="J-current-sortType">推荐排序</span><i></i>
                                                    </div>
                                                    <ol>
                                                        <li class="J-sortType-item">推荐排序</li>
                                                        <li class="J-sortType-item">时间排序</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="tab_con">
                                <ol class="replyListWrap">
                                    <li class="oh_de">
                                        <div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:100%" class="bgiprd"></b>
										</span>
                                            <p>收货后1天评论</p>
                                            <p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22
                                                    12:44</a></p>
                                            <p><span>白色 M码</span></p>
                                        </div>
                                        <div class="reply-center">
                                            <p>正品行货，很棒</p>
                                        </div>
                                        <div class="reply-right">
                                            <div class="reply_avatar">
                                                <img src="images/7_170312181624_2.jpg">
                                                <span class="reply_avatar_userName">祢夏了夏天</span>
                                            </div>
                                            <p class="profileGrade"><span class="viplevel">V2会员</span><span
                                                    class="area">石家庄市</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="oh_de">
                                        <div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:20%" class="bgiprd"></b>
										</span>
                                            <p>收货后1天评论</p>
                                            <p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22
                                                    12:44</a></p>
                                            <p><span>白色 M码</span></p>
                                        </div>
                                        <div class="reply-center">
                                            <p>正品行货，很棒</p>
                                        </div>
                                        <div class="reply-right">
                                            <div class="reply_avatar">
                                                <img src="images/7_170312181624_2.jpg">
                                                <span class="reply_avatar_userName">祢夏了夏天</span>
                                            </div>
                                            <p class="profileGrade"><span class="viplevel">V2会员</span><span
                                                    class="area">石家庄市</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="oh_de">
                                        <div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:80%" class="bgiprd"></b>
										</span>
                                            <p>收货后1天评论</p>
                                            <p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22
                                                    12:44</a></p>
                                            <p><span>白色 M码</span></p>
                                        </div>
                                        <div class="reply-center">
                                            <p>正品行货，很棒</p>
                                        </div>
                                        <div class="reply-right">
                                            <div class="reply_avatar">
                                                <img src="images/7_170312181624_2.jpg">
                                                <span class="reply_avatar_userName">祢夏了夏天</span>
                                            </div>
                                            <p class="profileGrade"><span class="viplevel">V2会员</span><span
                                                    class="area">石家庄市</span>
                                            </p>
                                        </div>
                                    </li>
                                </ol>
                                <div class="com-table-footer">
                                    <div class="ui-page-wrap">
                                        <div class="ui-page">
                                            <a rel="1" class="ui-page-curr" href="#">1</a>
                                            <a rel="2" href="#">2</a>
                                            <a rel="3" href="#">3</a>
                                            <a rel="4" href="#">4</a>
                                            <a rel="5" href="#">5</a>
                                            <a rel="6" href="#">6</a>
                                            <span>...</span>
                                            <a rel="2" class="ui-pager-next" href="#">下一页</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="jkdhfld">
                                <div class="mt"><h3>商品评价</h3></div>
                                <div class="consult-rt">
                                    <table class="consult-form">
                                        <caption>我要发表咨询</caption>
                                        <tbody>
                                        <tr id="tr-zxlx">
                                            <th>咨询类型:&nbsp;</th>
                                            <td>
                                                <label class="cst-type"><input type="radio" value="1">购买咨询</label>
                                                <label class="cst-type"><input type="radio" value="2">促销优惠</label>
                                                <label class="cst-type"><input type="radio" value="3">支付问题</label>
                                                <label class="cst-type"><input type="radio" value="4">售后咨询</label>
                                            </td>
                                        </tr>
                                        <tr class="consul_type_wrap">
                                            <th>回复方式:&nbsp;</th>
                                            <td>
                                                <div>
                                                    <label class="cst-type" for="consul_site">
                                                        <input type="radio" value="consul_site" name="hffs-type"
                                                               id="consul_site" checked="checked">网站
                                                    </label>
                                                    <label class="cst-type" for="consul_mail">
                                                        <input type="radio" value="consul_mail" name="hffs-type"
                                                               id="consul_mail">邮箱
                                                    </label>
                                                    <label class="cst-type" for="consul_weixin">
                                                        <input type="radio" value="consul_weixin" name="hffs-type"
                                                               id="consul_weixin">微信
                                                    </label>
                                                </div>
                                                <div class="weixin-sm" style="display: none;">
                                                    <div class="img-w">
                                                        <img
                                                            gome-src="//js.gomein.net.cn/f2eimage/ui/customer_service_weixin.jpg"
                                                            alt="手机下单更优惠" title="手机下单更优惠">
                                                    </div>
                                                    <div class="text">
                                                        <p>扫描二维码，关注客服中心公众号，我们将为您提供更加快速便捷的咨询服务</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="consul_type_wrap" id="email-address" style="display: none;">
                                            <th>邮箱地址:&nbsp;</th>
                                            <td>
                                                <input type="text" value="请填写您的邮箱，以便客服回复！" maxlength="50"
                                                       id="consul_type_text" name="consul_type_text">
                                                <span class="email-error"></span>
                                            </td>
                                        </tr>
                                        <tr id="gm-zxnr">
                                            <th>咨询内容:&nbsp;</th>
                                            <td>
                                                <div class="txt-area-wrap">
                                                    <textarea name="" id="quesTxt" class="txt-area"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="gm-submit">
                                            <th></th>
                                            <td><a class="consult-smt-btn redlink">提交</a><span class="tips">0/200</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="consult-lt">
                                        <dl class="consult-question clearfix">
                                            <dt>常见问题</dt>
                                            <dd>•<a href="#" target="_blank" title="忘记密码如何操作？">忘记密码如何操作？</a></dd>
                                            <dd>•<a href="#" target="_blank" title="如何增强账户安全系数？">如何增强账户安全系数？</a></dd>
                                            <dd>•<a href="#" target="_blank" title="怎么操作商品签收？">怎么操作商品签收？</a></dd>
                                            <dd>•<a href="#" target="_blank" title="如何电话订购？">如何电话订购？</a></dd>
                                            <dd>•<a href="#" target="_blank" title="如何查询商品参数及包装清单？">如何查询商品参数及包装清单？</a>
                                            </dd>
                                            <dd>•<a href="#" target="_blank" title="商品无货怎么办？">商品无货怎么办？</a></dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </ul>
                    <!--商品评价-->
                    <ul>
                        <div class="shouh_baoz_2">
                            <div class="mt"><h3>商品评价</h3></div>
                            <div class="mc">
                                <div class="comment-info J-comment-info">
                                    <div class="comment-percent">
                                        <strong class="percent-tit">好评度</strong>
                                        <div class="percent-con">99<span>%</span></div>
                                    </div>
                                </div>
                                <!---->
                                <div class="ETab">
                                    <div class="tab-main small">
                                        <ol class="filter-list">
                                            <li class="current_xq" data-num="4900"><a href="#">全部评价<em>(4900+)</em></a>
                                            </li>
                                            <li><a href="#">晒图<em>(60)</em></a></li>
                                            <li class="J-addComment"><a href="#">追评<em>(8)</em></a></li>
                                            <li><a href="#">好评<em>(4900+)</em></a></li>
                                            <li>
                                                <a href="#">中评<em>(40+)</em></a></li>
                                            <li><a href="#">差评<em>(20+)</em></a></li>
                                            <li class="comm-curr-sku"><span><input
                                                        type="checkbox"></span><label>只看当前商品评价</label></li>
                                        </ol>
                                        <div class="_extra_a">
                                            <div class="sort-select">
                                                <div class="current_tc"><span
                                                        class="J-current-sortType">推荐排序</span><i></i>
                                                </div>
                                                <div class="others">
                                                    <div class="curr"><span
                                                            class="J-current-sortType">推荐排序</span><i></i>
                                                    </div>
                                                    <ol>
                                                        <li class="J-sortType-item">推荐排序</li>
                                                        <li class="J-sortType-item">时间排序</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="tab_con">
                                <ol class="replyListWrap">
                                    <li class="oh_de">
                                        <div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:100%" class="bgiprd"></b>
										</span>
                                            <p>收货后1天评论</p>
                                            <p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22
                                                    12:44</a></p>
                                            <p><span>白色 M码</span></p>
                                        </div>
                                        <div class="reply-center">
                                            <p>正品行货，很棒</p>
                                        </div>
                                        <div class="reply-right">
                                            <div class="reply_avatar">
                                                <img src="images/7_170312181624_2.jpg">
                                                <span class="reply_avatar_userName">祢夏了夏天</span>
                                            </div>
                                            <p class="profileGrade"><span class="viplevel">V2会员</span><span
                                                    class="area">石家庄市</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="oh_de">
                                        <div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:20%" class="bgiprd"></b>
										</span>
                                            <p>收货后1天评论</p>
                                            <p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22
                                                    12:44</a></p>
                                            <p><span>白色 M码</span></p>
                                        </div>
                                        <div class="reply-center">
                                            <p>正品行货，很棒</p>


                                        </div>
                                        <div class="reply-right">
                                            <div class="reply_avatar">
                                                <img src="images/7_170312181624_2.jpg">
                                                <span class="reply_avatar_userName">祢夏了夏天</span>
                                            </div>
                                            <p class="profileGrade"><span class="viplevel">V2会员</span><span
                                                    class="area">石家庄市</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="oh_de">
                                        <div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:80%" class="bgiprd"></b>
										</span>
                                            <p>收货后1天评论</p>
                                            <p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22
                                                    12:44</a></p>
                                            <p><span>白色 M码</span></p>
                                        </div>
                                        <div class="reply-center">
                                            <p>正品行货，很棒</p>
                                        </div>
                                        <div class="reply-right">
                                            <div class="reply_avatar">
                                                <img src="images/7_170312181624_2.jpg">
                                                <span class="reply_avatar_userName">祢夏了夏天</span>
                                            </div>
                                            <p class="profileGrade"><span class="viplevel">V2会员</span><span
                                                    class="area">石家庄市</span>
                                            </p>
                                        </div>
                                    </li>
                                </ol>
                                <div class="com-table-footer">
                                    <div class="ui-page-wrap">
                                        <div class="ui-page">
                                            <a rel="1" class="ui-page-curr" href="#">1</a>
                                            <a rel="2" href="#">2</a>
                                            <a rel="3" href="#">3</a>
                                            <a rel="4" href="#">4</a>
                                            <a rel="5" href="#">5</a>
                                            <a rel="6" href="#">6</a>
                                            <span>...</span>
                                            <a rel="2" class="ui-pager-next" href="#">下一页</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="jkdhfld">
                                <div class="mt"><h3>商品评价</h3></div>
                                <div class="consult-rt">
                                    <table class="consult-form">
                                        <caption>我要发表咨询</caption>
                                        <tbody>
                                        <tr id="tr-zxlx">
                                            <th>咨询类型:&nbsp;</th>
                                            <td>
                                                <label class="cst-type"><input type="radio" value="1">购买咨询</label>
                                                <label class="cst-type"><input type="radio" value="2">促销优惠</label>
                                                <label class="cst-type"><input type="radio" value="3">支付问题</label>
                                                <label class="cst-type"><input type="radio" value="4">售后咨询</label>
                                            </td>
                                        </tr>
                                        <tr class="consul_type_wrap">
                                            <th>回复方式:&nbsp;</th>
                                            <td>
                                                <div>
                                                    <label class="cst-type" for="consul_site">
                                                        <input type="radio" value="consul_site" name="hffs-type"
                                                               id="consul_site" checked="checked">网站
                                                    </label>
                                                    <label class="cst-type" for="consul_mail">
                                                        <input type="radio" value="consul_mail" name="hffs-type"
                                                               id="consul_mail">邮箱
                                                    </label>
                                                    <label class="cst-type" for="consul_weixin">
                                                        <input type="radio" value="consul_weixin" name="hffs-type"
                                                               id="consul_weixin">微信
                                                    </label>
                                                </div>
                                                <div class="weixin-sm" style="display: none;">
                                                    <div class="img-w">
                                                        <img
                                                            gome-src="//js.gomein.net.cn/f2eimage/ui/customer_service_weixin.jpg"
                                                            alt="手机下单更优惠" title="手机下单更优惠">
                                                    </div>
                                                    <div class="text">
                                                        <p>扫描二维码，关注客服中心公众号，我们将为您提供更加快速便捷的咨询服务</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="consul_type_wrap" id="email-address" style="display: none;">
                                            <th>邮箱地址:&nbsp;</th>
                                            <td>
                                                <input type="text" value="请填写您的邮箱，以便客服回复！" maxlength="50"
                                                       id="consul_type_text" name="consul_type_text">
                                                <span class="email-error"></span>
                                            </td>
                                        </tr>
                                        <tr id="gm-zxnr">
                                            <th>咨询内容:&nbsp;</th>
                                            <td>
                                                <div class="txt-area-wrap">
                                                    <textarea name="" id="quesTxt" class="txt-area"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="gm-submit">
                                            <th></th>
                                            <td><a class="consult-smt-btn redlink">提交</a><span class="tips">0/200</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="consult-lt">
                                        <dl class="consult-question clearfix">
                                            <dt>常见问题</dt>
                                            <dd>•<a href="#" target="_blank" title="忘记密码如何操作？">忘记密码如何操作？</a></dd>
                                            <dd>•<a href="#" target="_blank" title="如何增强账户安全系数？">如何增强账户安全系数？</a></dd>
                                            <dd>•<a href="#" target="_blank" title="怎么操作商品签收？">怎么操作商品签收？</a></dd>
                                            <dd>•<a href="#" target="_blank" title="如何电话订购？">如何电话订购？</a></dd>
                                            <dd>•<a href="#" target="_blank" title="如何查询商品参数及包装清单？">如何查询商品参数及包装清单？</a>
                                            </dd>
                                            <dd>•<a href="#" target="_blank" title="商品无货怎么办？">商品无货怎么办？</a></dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">jQuery(".slideTxtBox_1").slide({trigger: "click"});</script>
            <!---->
        </div>
    </div>
    <!--商品详情结束-->
    <!--猜你喜欢-->
    <div class="cain_xih">
        <div class="mt">
            <h2 class="title">猜你喜欢</h2>
            <div class="extra">
                <a href="#" class="change"><i class="ico"></i><span class="txt">换一批</span></a>
            </div>
        </div>
        <ul class="cain_xihuan_neir">
            <li>
                <div class="item_pic"><a href="#"><img src="images/lieb_tupi1.jpg"></a></div>
                <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
                <div class="cain_xih_jiaq"><p>￥560.00</p></div>
            </li>
            <li>
                <div class="item_pic"><a href="#"><img src="images/lieb_tupi2.jpg"></a></div>
                <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
                <div class="cain_xih_jiaq"><p>￥560.00</p></div>
            </li>
            <li>
                <div class="item_pic"><a href="#"><img src="images/lieb_tupi3.jpg"></a></div>
                <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
                <div class="cain_xih_jiaq"><p>￥560.00</p></div>
            </li>
            <li>
                <div class="item_pic"><a href="#"><img src="images/lieb_tupi1.jpg"></a></div>
                <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
                <div class="cain_xih_jiaq"><p>￥560.00</p></div>
            </li>
            <li>
                <div class="item_pic"><a href="#"><img src="images/lieb_tupi3.jpg"></a></div>
                <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
                <div class="cain_xih_jiaq"><p>￥560.00</p></div>
            </li>
            <li>
                <div class="item_pic"><a href="#"><img src="images/lieb_tupi2.jpg"></a></div>
                <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
                <div class="cain_xih_jiaq"><p>￥560.00</p></div>
            </li>
        </ul>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            /*
            *   Examples - images
            */

            $("a#example1").fancybox();

            $("a#example2").fancybox({
                'overlayShow': false,
                'transitionIn': 'elastic',
                'transitionOut': 'elastic'
            });

            $("a#example3").fancybox({
                'transitionIn': 'none',
                'transitionOut': 'none'
            });

            $("a#example4").fancybox({
                'opacity': true,
                'overlayShow': false,
                'transitionIn': 'elastic',
                'transitionOut': 'none'
            });

            $("a#example5").fancybox();

            $("a#example6").fancybox({
                'titlePosition': 'outside',
                'overlayColor': '#000',
                'overlayOpacity': 0.9
            });

            $("a#example7").fancybox({
                'titlePosition': 'inside'
            });

            $("a#example8").fancybox({
                'titlePosition': 'over'
            });

            $("a[rel=example_group]").fancybox({
                'transitionIn': 'none',
                'transitionOut': 'none',
                'titlePosition': 'over',
                'titleFormat': function (title, currentArray, currentIndex, currentOpts) {
                    return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                }
            });

            /*
            *   Examples - various
            */

            $("#various1").fancybox({
                'titlePosition': 'inside',
                'transitionIn': 'none',
                'transitionOut': 'none'
            });

            $("#various2").fancybox();

            $("#various3").fancybox({
                'width': '75%',
                'height': '75%',
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'type': 'iframe'
            });

            $("#various4").fancybox({
                'padding': 0,
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none'
            });
        });
    </script>

@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/index.css">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/houl/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/houl/style.css">
@endpush
@push('js')
    <script src="{{asset('org/receptionist')}}/js/jquery-1.11.3.min.js"></script>
    {{--    <script src="{{asset('org/receptionist/js/jquery1.42.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery.SuperSlide.2.1.1.source.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/houl/jquery.fancybox-1.3.4.js"></script>
@endpush
<script src="{{asset('org/layui/layui.js')}}"></script>
<script src="{{asset('org/layui/lay/modules/layer.js')}}"></script>
<script>

    function chooseSpec(id) {
        layer.load();
        //发送异步请求对应的库存
        {{--$.post("{{route ('home.spec_to_get_total')}}", {id: id}, function (res) {--}}
            {{--layer.closeAll('loading');--}}
            {{--//console.log(res)--}}
            {{--$('#cr_total').html(res.total);--}}
            {{--$('.nobdr').find('h6').removeClass('disabled')--}}
        {{--}, 'json')--}}
        //alert(1);
    }

    function jia() {
        //alert(1);
        var ppp = $('.quantity').val();
        if (ppp >= 0) {
            ppp++;
            $('.quantity').val(ppp);
        }
        if (ppp > 9) {
            //alert('nidaye')
            $('.quantity').val(9);
        }

    }

    function jian() {
        //alert(1);
        var ppp = $('.quantity').val();
        if (ppp <= 1) {
            $('.quantity').val(1);
        }
        if (ppp > 1) {
            //alert('nidaye')
            ppp--;
            $('.quantity').val(ppp);
        }

    }
</script>

