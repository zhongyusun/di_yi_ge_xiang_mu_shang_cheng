@extends('home.layouts.master')
@section('content')
    @include('home.layouts.slideshow')
    <!--内容一开始了-->
    <div class="bend_beij">
        <!--本地生活-->
        <div class="bend_dhengh">
            <div class="neir_biaot">
                <p>本地生活</p>
                <p class="yingw">Local life</p>
            </div>
            <div class="jiank_meis">
                <div class="kuang_1">
                    <a href="#">
                        <img src="images/jiank_meis.jpg">
                        <div class="jiank_meis_wenz">
                            <p>健康美食</p>
                            <span>让生活&nbsp;&nbsp;更健康&nbsp;&nbsp;更美味&nbsp;&nbsp;更舒心</span>
                        </div>
                    </a>
                </div>
                <div class="dianq_qvy">
                    <div class="shiq">
                        <h2>全部区域</h2>
                        <ul>
                            <li><a href="#">云岩区</a></li>
                            <li><a href="#">南明区</a></li>
                            <li><a href="#">白云区</a></li>
                            <li><a href="#">乌当区</a></li>
                            <li><a href="#">花溪区</a></li>
                            <li><a href="#">清镇市</a></li>
                            <li><a href="#">开阳县</a></li>
                            <li><a href="#" class="hide">开阳县</a></li>
                            <li><a href="#" class="hide">开阳县</a></li>
                            <li id="show">更多</li>
                        </ul>
                    </div>
                    <div class="ktv_jiub">
                        <ul>
                            <li><a href="#">KTV/酒吧</a></li>
                            <li><a href="#">周边游</a></li>
                            <li><a href="#">生活服务</a></li>
                            <li><a href="#">真人CS</a></li>
                            <li><a href="#">中医养生</a></li>
                            <li><a href="#">体检/齿科</a></li>
                            <li><a href="#">棋牌室</a></li>
                            <li><a href="#">洗浴/汗蒸</a></li>
                        </ul>
                    </div>
                </div>
                <div class="lunb_t">
                    <div class="picScroll_left_1">
                        <div class="bd">
                            <ul class="picList">
                                <li>
                                    <div class="pic"><a href="#" target="_blank"><img src="images/lengy.jpg"/></a></div>
                                    <div class="title"><a href="#" target="_blank">卡通美食冷饮</a><span>卡通美食冷饮全家福三人分</span>
                                        <p>￥6.00</p></div>
                                </li>
                                <li>
                                    <div class="pic"><a href="#" target="_blank"><img src="images/lengy.jpg"/></a></div>
                                    <div class="title"><a href="#" target="_blank">卡通美食冷饮</a><span>卡通美食冷饮全家福三人分</span>
                                        <p>￥6.00</p></div>
                                </li>
                                <li>
                                    <div class="pic"><a href="#" target="_blank"><img src="images/lengy.jpg"/></a></div>
                                    <div class="title"><a href="#" target="_blank">卡通美食冷饮</a><span>卡通美食冷饮全家福三人分</span>
                                        <p>￥6.00</p></div>
                                </li>
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
                    <li><a href="#"><img src="images/jiudi_kez.jpg">
                            <div class="jiank_meis_wenz_1">
                                <p>健康美食</p>
                            </div>
                        </a>
                    </li>
                    <li class="sdfs"><a href="#"><img src="images/xiux_yvl.jpg">
                            <div class="jiank_meis_wenz_1">
                                <p>休闲娱乐</p>
                            </div>
                        </a>
                    </li>
                    <li><a href="#"><img src="images/liren.jpg">
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
                    <li><a href="#"><img src="images/zoub.jpg"></a></li>
                    <li><a href="#"><img src="images/zoub2.jpg"></a></li>
                    <li><a href="#"><img src="images/zoub3.jpg"></a></li>
                </ul>
            </div>
        </div>

    </div>

    <!--快速通道栏-->
    <div class="kuanjlan">
        <ul class="clearfix">
            <li>
                <div class="list-li-box">
                    <a class="list-img" href="#" data-code="index01004-1" target="_blank">
                        <img src="images/meinv_1.jpg">
                        <span class="list-bg"></span>
                        <div class="list-cont">
                            <p class="cont-item"><span>羽饰</span></p>
                            <p class="cont-tile">秋季来点羽毛元素</p>
                            <p class="cont-info">让你更加美丽迷人</p>
                        </div>
                    </a>
                </div>

            </li>
            <li>
                <div class="list-li-box">
                    <a class="list-img" href="#" data-code="index01004-2" target="_blank">
                        <img src="images/meinv_2.jpg">
                        <span class="list-bg"></span>
                        <div class="list-cont">
                            <p class="cont-item"><span>原宿风</span></p>
                            <p class="cont-tile">个性夸张美衣</p>
                            <p class="cont-info">潮流原宿风</p>
                        </div>
                    </a>
                </div>

            </li>
            <li>
                <div class="list-li-box">
                    <a class="list-img" href="#" data-code="index01004-3" target="_blank">
                        <img src="images/meinv_3.jpg">
                        <span class="list-bg"></span>
                        <div class="list-cont">
                            <p class="cont-item"><span>皮裤</span></p>
                            <p class="cont-tile">高腰修身皮裤</p>
                            <p class="cont-info">轻松享受女神感觉</p>
                        </div>
                    </a>
                </div>

            </li>
            <li>
                <div class="list-li-box">
                    <a class="list-img" href="#" data-code="index01004-4" target="_blank">
                        <img src="images/meinv_4.jpg">
                        <span class="list-bg"></span>
                        <div class="list-cont">
                            <p class="cont-item"><span>服装</span></p>
                            <p class="cont-tile">变身女神范儿</p>
                            <p class="cont-info">几种搭配轻松打造</p>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>


    @include('home.layouts.level')


    <!--广告图-->
    <div class="guangg_tu">
        <a href="#"><img src="images/guang_tu.jpg"></a>
    </div>


    <!--特色商品/ 热门商品-->

    <div class="tes_shnagp_beij">
        <div class="tes_shangp">
            <div class="neir_biaot">
                <p>特色商品</p>
                <p class="yingw">featured</p>
                <a href="#">MORE+</a>
            </div>
            <div class="tes_shangp_neir_k">
                <div class="tes_dat">
                    <a href="#">
                        <h1><img class="tes_dat_dongh" src="images/te_se_shangp_da.jpg"></h1>
                        <h2>苹果手机iPhone6(32G)全网</h2>
                        <span>¥ 4999 .00</span>
                    </a>
                </div>
                <div class="tes_xiaot_beij">
                    <div class="tes_xiaot_shang">
                        <div class="tes_xiaot_neir">
                            <a href="#">
                                <h1><img class="tes_xiaot_dongh" src="images/tes_shangp_xiao.jpg"></h1>
                                <h2>海尔(Haier) BCD452WDPF 452</h2>
                                <span>¥ 506 .00</span>
                            </a>
                        </div>
                        <div class="tes_xiaot_neir tes_xiaot_wubian_kuang">
                            <a href="#">
                                <h1><img class="tes_xiaot_dongh" src="images/tes_shangp_xiao2.jpg"></h1>
                                <h2>海尔(Haier) BCD452WDPF 452</h2>
                                <span>¥ 506 .00</span>
                            </a>
                        </div>
                    </div>
                    <div class="tes_xiaot_shang tes_xiaot_xia">
                        <div class="tes_xiaot_neir">
                            <a href="#">
                                <h1><img class="tes_xiaot_dongh" src="images/tes_shangp_xiao3.jpg"></h1>
                                <h2>海尔(Haier) BCD452WDPF 452</h2>
                                <span>¥ 506 .00</span>
                            </a>
                        </div>
                        <div class="tes_xiaot_neir tes_xiaot_wubian_kuang">
                            <a href="#">
                                <h1><img class="tes_xiaot_dongh" src="images/tes_shangp_xiao4.jpg"></h1>
                                <h2>海尔(Haier) BCD452WDPF 452</h2>
                                <span>¥ 506 .00</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rem_shangp">
            <div class="neir_biaot">
                <p>热门商品</p>
                <p class="yingw">Hot commodity</p>
                <a href="#">MORE+</a>
            </div>
            <div class="rem_shangp_beij_k">
                <!---->
                <div class="picScroll_left">
                    <div class="hd">
                        <ul></ul>
                    </div>
                    <div class="bd">
                        <ul class="picList">
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/rem_shangp.jpg"/></a>
                                </div>
                                <div class="title"><a href="#"
                                                      target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 506 .00</span>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/rem_shangp1.jpg"/></a>
                                </div>
                                <div class="title"><a href="#"
                                                      target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 7940 .00</span>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/rem_shangp.jpg"/></a>
                                </div>
                                <div class="title"><a href="#"
                                                      target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 506 .00</span>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/rem_shangp1.jpg"/></a>
                                </div>
                                <div class="title"><a href="#"
                                                      target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 7940 .00</span>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/rem_shangp1.jpg"/></a>
                                </div>
                                <div class="title"><a href="#"
                                                      target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 506 .00</span>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/rem_shangp1.jpg"/></a>
                                </div>
                                <div class="title"><a href="#"
                                                      target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 7940 .00</span>
                                </div>
                            </li>
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


