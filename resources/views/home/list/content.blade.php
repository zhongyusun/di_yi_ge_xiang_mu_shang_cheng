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
    <!--列表一开了-->
    <div class="nSearchWarp">
        <div class="hot-tj">
            <span class="icon_tj">热卖<br>推荐</span>
            <ul class="hot-list clearfix">
                <li class="item asynPriceBox">
                    <p class="pic">
                        <a target="_blank" href="#"><img src="images/lieb_tupi1.jpg" alt=""></a>
                    </p>
                    <p class="name"><a href="#" title=" 联想(lenovo) 小新潮5000 15.6英寸轻薄笔记本电脑"> 联想(lenovo) 小新潮5000
                            15.6英寸轻薄笔记本电脑 </a></p>
                    <p class="price asynPrice">¥3999.00</p>
                    <p class="btn"><a class="buy" href="#">立即抢购</a></p>
                </li>
            </ul>
        </div>
    </div>
    <div class="lujing_ziy">
        <a href="#">服饰</a> > <a href="#">女装</a>
    </div>
    <div class="shangp_lieb_jvz">
        <!--列表-->
        <div class="shangp_lieb_yi">
            <div class="filter_yi">
                <div class="f_line">
                    <div class="f_sort">
                        <a href="#" class="curr_1">综合排序<i></i></a>
                        <a href="#" class="curr_2">销量<i></i></a>
                        <a href="#" class="curr_2">价格<i></i></a>
                        <a href="#" class="curr_2">评论数<i></i></a>
                        <a href="#" class="curr_2">上架时间<i></i></a>
                    </div>
                    <div class="f_pager" id="J_topPage">
           			<span class="fp_text">
               			<b>1</b><em>/</em><i>166</i>
          			</span>
                        <a class="fp_prev disabled" href="#"> &lt; </a>
                        <a class="fp_next" href="#"> &gt; </a>
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
                    <div class="f_feature">
                        <ul>
                            <li id="delivery"><a class="selected" href="#"><i></i>仅显示有货</a></li>
                            <li id="delivery_211"><a class="" href="#"><i></i>货到付款</a></li>
                            <li id="delivery_daofu"><a class="" href="#"><i></i>真划算</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shnagp_list_v1 shnagp_list_v1_lieb_er">
                <ul>
                    <li>
                        <div class="lieb_neir_kuang lieb_neir_kuang_1">
                            <div class="lieb_img lieb_img_1">
                                <a href="#"><img src="images/lieb_tupi3.jpg"></a>
                            </div>
                            <div class="lieb_er_kuang">
                                <div class="shangp_biaot_ shangp_biaot_1">
                                    <a href="#">荣耀8青春版 全网通 标配版 3GB+32GB 流光金</a>
                                    <p><a class="lianpu_minc" href="#">古竣服装专营店</a><a class="mis" href="#">点我交谈</a></p>
                                </div>
                                <div class="lieb_text lieb_text_1">
                                    <div class="p_price">
                                        <strong class="J_price"><em>¥</em><i>1099.00</i>
                                            <p><em class="shangp_yuanj zuo_ji">¥</em><i class="shangp_yuanj">1099.00</i>
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
                                <div class="btn-product"><a class="J_focus" href="#"><i></i>加入购物车</a></div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="page clearfix">
                    <div class="p-wrap" id="J_bottomPage">
		            <span class="p-num">
						<a class="pn-prev disabled" href="undefined&amp;ms=5"><i>&lt;</i><em>上一页</em></a>
						<a href="#" class="curr_3">1</a>
		                <b class="pn-break hide"> …</b>
		                <a href="/#" class="hide ">-2</a>
		                <a href="/#" class="hide ">-1</a>
		                <a href="#" class="hide ">0</a>
		                <a href="#" class="hide curr_3">1</a>
		                <a href="#" class=" ">2</a>
		                <a href="#" class=" ">3</a>
		                <b class="pn-break "> …</b>
		                <a href="#" class="">166</a>
						<a class="pn-next" href="#">下一页<i>&gt;</i></a>
					</span>
                        <span class="p-skip">
		                <em>共<b>166</b>页&nbsp;&nbsp;到第</em>
		                <input class="input-txt" value="1">
		                <em>页</em>
		                <a class="btn btn-default" href="javascript:page_jump();">确定</a>
		            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--列表一结束-->
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
