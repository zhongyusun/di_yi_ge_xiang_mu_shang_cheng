@extends('home.personalcenter.layouts.master')
@section('content')
    <!---->
    <div class="wod_tongc_zhongx">
        <div class="beij_center">
            <div class="myGomeWeb">
                <!--侧边导航-->
                @include('home.personalcenter.layouts.left')
                <!--左边内容-->
                <div class="mod_main">
                    <div class="mt">
                        <h3>我的订单</h3>
                        <div class="extra-r"><a href="#">查看全部订单</a></div>
                    </div>
                    <div class="tb_order">
                        <table width="100%">
                            <tbody class="fore0">
                            <tr>
                                <td>
                                    <div class="img-list"><a href="#" target="_blank"><img src="images/lieb_tupi1.jpg"
                                                                                           title="女大学生这么穿才能吸引异性目光"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="u-name">潘中全</div>
                                </td>
                                <td>￥129.00<br>在线支付</td>
                                <td><span class="ftx-03">2017-09-22 <br> 17:16:00</span></td>
                                <td><span class="ftx-03">已完成</span></td>
                                <td class="order-doi"><a target="_blank" href="dingd_xiangq.html">查看</a></td>
                            </tr>
                            </tbody>
                            <tbody class="fore0">
                            <tr>
                                <td>
                                    <div class="img-list"><a href="#" target="_blank"><img src="images/lieb_tupi2.jpg"
                                                                                           title="女大学生这么穿才能吸引异性目光"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="u-name">潘中全</div>
                                </td>
                                <td>￥129.00<br>在线支付</td>
                                <td><span class="ftx-03">2017-09-22 <br> 17:16:00</span></td>
                                <td><span class="ftx-03">已完成</span></td>
                                <td class="order-doi"><a target="_blank" href="dingd_xiangq.html">查看</a></td>
                            </tr>
                            </tbody>
                            <tbody class="fore0">
                            <tr>
                                <td>
                                    <div class="img-list"><a href="#" target="_blank"><img src="images/lieb_tupi3.jpg"
                                                                                           title="女大学生这么穿才能吸引异性目光"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="u-name">潘中全</div>
                                </td>
                                <td>￥129.00<br>在线支付</td>
                                <td><span class="ftx-03">2017-09-22 <br> 17:16:00</span></td>
                                <td><span class="ftx-04">等待收货</span></td>
                                <td class="order-doi"><a target="_blank" href="dingd_xiangq.html">查看</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mod_main mod_main1">
                    <div class="mt">
                        <h3>我收藏的商品</h3>
                        <div class="extra-r"><a href="#">查看更多</a></div>
                    </div>
                    <div class="follow">
                        <ul>
                            <li><a class="follow_tup_kuang" href="#"><img src="images/lieb_tupi2.jpg"></a>
                                <p>暂无售价</p></li>
                            <li><a class="follow_tup_kuang" href="#"><img src="images/lieb_tupi1.jpg"></a>
                                <p>￥25.00</p></li>
                            <li><a class="follow_tup_kuang" href="#"><img src="images/lieb_tupi3.jpg"></a>
                                <p>暂无售价</p></li>
                            <li><a class="follow_tup_kuang" href="#"><img src="images/lieb_tupi2.jpg"></a>
                                <p>暂无售价</p></li>
                            <li><a class="follow_tup_kuang" href="#"><img src="images/lieb_tupi3.jpg"></a>
                                <p>暂无售价</p></li>
                            <li><a class="follow_tup_kuang" href="#"><img src="images/lieb_tupi1.jpg"></a>
                                <p>暂无售价</p></li>
                        </ul>
                    </div>
                </div>
                <div class="mod_main mod_main1 mod_main2">
                    <div class="mt">
                        <h3>我收藏的商品</h3>
                        <div class="extra-r"><a href="#">查看更多</a></div>
                    </div>
                    <div class="follow">
                        <ul>
                            <li>
                                <a class="follow_tup_kuang" href="#"><img src="images/xiangqtu_1.jpg"></a>
                                <p><a href="#">MI手机 小米Note3 全网通版 6GB+128GB 亮蓝 移动联通电信4G手机
                                        双卡双待<span>(已有100+人评价)</span></a>
                                <p class="p_color_1">￥52.00</p></p>
                            </li>
                            <li>
                                <a class="follow_tup_kuang" href="#"><img src="images/yic_003.jpg"></a>
                                <p><a href="#">MI手机 小米Note3 全网通版 6GB+128GB 亮蓝 移动联通电信4G手机
                                        双卡双待<span>(已有100+人评价)</span></a>
                                <p class="p_color_1">￥52.00</p></p>
                            </li>
                            <li>
                                <a class="follow_tup_kuang" href="#"><img src="images/shangq_1.jpg"></a>
                                <p><a href="#">MI手机 小米Note3 全网通版 6GB+128GB 亮蓝 移动联通电信4G手机
                                        双卡双待<span>(已有100+人评价)</span></a>
                                <p class="p_color_1">￥52.00</p></p>
                            </li>
                            <li>
                                <a class="follow_tup_kuang" href="#"><img src="images/shangq_3.jpg"></a>
                                <p><a href="#">MI手机 小米Note3 全网通版 6GB+128GB 亮蓝 移动联通电信4G手机
                                        双卡双待<span>(已有100+人评价)</span></a>
                                <p class="p_color_1">￥52.00</p></p>
                            </li>
                            <li>
                                <a class="follow_tup_kuang" href="#"><img src="images/rem_shangp.jpg"></a>
                                <p><a href="#">MI手机 小米Note3 全网通版 6GB+128GB 亮蓝 移动联通电信4G手机
                                        双卡双待<span>(已有100+人评价)</span></a>
                                <p class="p_color_1">￥52.00</p></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



