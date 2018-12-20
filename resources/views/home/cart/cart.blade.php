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
                    <li><a href="#">商城首页</a></li>
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
                                </p>
                            </h3>
                            <i>></i>
                        </div>
                        <div class="font-item1">
                            <div class="font-lefty">
                                <dl class="fore1">
                                    <dt><a href="#">大家电<i>></i></a></dt>
                                    <dd>
                                        <a href="#">平板电视</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
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
    <!--加入购物车-->
    <div class="beij_center">
        <div class="jiar_gouw_c_beij">
            <div class="msg"><i class="c_i_img"></i>商品已成功加入购物车！</div>
            <div class="shangp_jr">
                <div class="jr_zuo">
                    <a href="#" class="jr_tu"><img src="images/lieb_tupi1.jpg"></a>
                    <div class="jr_biaot">
                        <p><a href="#">赛妮美秋冬保暖内衣女薄款高领百搭时尚打底基础无高领百搭时尚打底</a></p>
                        <p class="spandf"><span>颜色：珍珠黑</span><span> 尺寸：均码X-XXL </span><span>数量：1</span></p>
                    </div>
                </div>
                <div class="jr_you">
                    <a href="shangp_xiangq.html" class="jr_fanh">返回</a>
                    <a href="gouw_che.html" class="jr_qv_gouw_che">去购物车结算<em class="jr_jiant"></em></a>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="beij_center box_header">
            <h3>购买了该商品的用户还购买了</h3>
        </div>
        <div class="beij_center dgsg">
            <div class="box_body">
                <div class="item fl">
                    <div class="box_img"><a href="#"><img src="images/shangq_2.jpg"></a></div>
                    <div class="title">
                        <a href="#">赛妮美秋冬保暖内衣女薄款高领百搭时尚打底基础无缝美体塑身秋衣8603(精品红)</a>
                    </div>
                    <div class="price">¥79.00</div>
                    <div class="bottom">
                        <a href="#" class="btn"><i></i><span>加入购物车</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
@endpush
@push('js')
@endpush
