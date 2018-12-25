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
    <!--商品详情-->
    <div class="breadcrumbs_container">
        {{--所属分类--}}
        <div class="left_luj">
            <ul>
                @foreach($fatherData as $v)
                    <li>
                        <a href="{{route('home.list',['list'=>$v['id']])}}" title="{{$v['title']}}"
                           style="text-align: center;!important;">{{$v['title']}}</a>
                        <i class="icon-crumbs-right"></i>
                    </li>
                @endforeach
                <li class="active">
                    <a href="{{route('home.content',['content'=>$content['id']])}}"
                       title="{{$content['title']}}">{{$content['title']}}</a>
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
                <div class="con-FangDa" id="fangdajing">
                    <div class="con-fangDaIMg">
                        <!-- 正常显示的图片-->
                        <img src="{{$content->list_pic}}" style="width: 300px;height: 350px;">
                        <!-- 滑块-->
                        <div class="magnifyingBegin"></div>
                        <!-- 放大镜显示的图片 -->
                        <div class="magnifyingShow"><img src="{{$content->list_pic}}"></div>
                    </div>
                    <ul class="con-FangDa-ImgList">
                        <!-- 图片显示列表 -->
                        @foreach($content['pics'] as $v)
                            <li class="active"><img src="{{$v}}" data-bigimg="{{$v}}"></li>
                        @endforeach
                        {{--<li><img src="images/thumb/2.jpg" data-bigimg="images/big/2.jpg"></li>--}}
                        {{--<li><img src="images/thumb/3.jpg" data-bigimg="images/big/3.jpg"></li>--}}
                        {{--<li><img src="images/thumb/4.jpg" data-bigimg="images/big/4.jpg"></li>--}}
                        {{--<li><img src="images/thumb/5.jpg" data-bigimg="images/big/5.jpg"></li>--}}
                    </ul>
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
                        <span class="price"><em>¥</em>{{$content->promotion}}</span>
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
                                    <a href="javascript:;" class="" onclick="chooseSpec({{$v['id']}},this)"
                                       title="{{$v['spec']}}" data-alt="{{$v['spec']}}" spec="{{$v['id']}}">
                                        <img src="{{$content->list_pic}}" gome-src="{{$content->list_pic}}"
                                             alt="{{$v['spec']}}">
                                        <span>{{$v['spec']}}</span><i></i>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if($spec)
                        <div class="prd_properties_other" style="display:block">
                            <label class="prdLeft">选择系列</label>
                            <div class="prdRight_1">
                                @foreach($content->specs as $v)
                                    <div class="prdmod">
                                        <a href="javascript:;" onclick="clicks(this)" class=""
                                           title="{{$v['sort']}}"
                                           data-alt="{{$v['sort']}}">{{$v['sort']}}<i></i></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else

                    @endif
                </div>
            </div>
            <div class="prd_properties_1 hou_jia">
                <label class="prd_price_left">货&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;源</label>
                <span id="cr_total">库存仅剩{{$content['total']}} 件</span>
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
                <a href="javascript:;" class="btn-product btn-addcart">立即购买</a>
                <a href="javascript:;" onclick="addCart(this)" class="btn-product">加入购物车</a>
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
                            {!! $content->content !!}
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
                                        {!! $content->description !!}
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
    <link rel="stylesheet" type="text/css" href="{{asset('org/shangpingfangdajing')}}/css/zzsc.css">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/index.css">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/houl/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/houl/style.css">
@endpush
@push('js')
    <script type="text/javascript" class="library"
            src="{{asset('org/shangpingfangdajing')}}/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" class="library"
            src="{{asset('org/shangpingfangdajing')}}/js/jquery.colorbox-min.js"></script>
    <script type="text/javascript" class="library" src="{{asset('org/shangpingfangdajing')}}/js/zzsc.js"></script>
    <script src="{{asset('org/receptionist')}}/js/jquery-1.11.3.min.js"></script>
    <script src="{{asset ('org/layer/layer.js')}}"></script>

    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/jquery.SuperSlide.2.1.1.source.js"></script>
    <script type="text/javascript" src="{{asset('org/receptionist')}}/houl/jquery.fancybox-1.3.4.js"></script>

    <script>

        //加入购物车
        function addCart(obj) {
            if ($(obj).parents('.prd_buttons').siblings('.prd_properties').children('.prd-properties-2').children('.prd_properties_other').children('.prdRight').children('.prdcol').children('a').hasClass('select')) {
                $.ajax({
                    url: "{{route('home.cart.store')}}",
                    type: 'post',
                    data: {
                        id: "{{$content['id']}}",
                        spec: $('.prdcol').find('.select').attr('spec'),
                        num: $('.count-wrapper').find('input').val(),
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (response) {
                        // console.log(response)
                        if (response.code == 0) {
                            location.href = "{{route('home.login')}}?from={{url()->full()}}"
                        } else {
                            location.href = "{{route('home.cart.store')}}"
                        }
                    },
                    error: function (error) {
                        //console.log(error)
                    }
                })
            } else {
                // alert(2);
                layer.msg('请先选择规格');
                return;
            }
        }

        //异步库存
        function chooseSpec(id, obj) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var params = {
                id: id,
                "_token": '{{csrf_token()}}'
            }
            //选中效果
            $(obj).addClass('select').parents('.prdcol').siblings('.prdcol').find('a').removeClass('select');
            layer.load();
            //发送异步请求对应的库存
            // $.post(请求地址,请求携带参数,成功回调,请求返回的数据类型)
            $.post("{{route ('home.spec_to_get_total')}}", params, function (res) {
                layer.closeAll('loading');
                //console.log(res)
                $('#cr_total').html(res.total);
            }, 'json')
            //alert(1);
        }

        //选中
        function clicks(obj) {
            $(obj).addClass('select').parents('.prdmod').siblings('.prdmod').find('a').removeClass('select')
        }

        //数量加
        function jia() {
            //alert(1);
            var ppp = $('.quantity').val();
            if (ppp >= 0) {
                ppp++;
                $('.quantity').val(ppp);
            }
            if (ppp > {{$content['total']}}) {
                //alert('nidaye')
                layer.msg('该商品库存不足');
                $('.quantity').val({{$content['total']}});
            }
        }

        //数量减
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

        //放大镜
    </script>
@endpush



