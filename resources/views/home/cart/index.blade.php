@extends('home.layouts.master')
@section('content')
    <div id="cart">

        @if(count($carts)==0)
            <div class="beij_center">
                <div class="cart-main-header clearfix">
                    <div class="cart-col-1">
                        <input type="checkbox" v-model="allCheckStatus" @click="allChecked" class="jdcheckbox">
                    </div>
                    <div class="cart-col-2">全选</div><!-- $page.site 主站 团购 抢购   style -->
                    <div class="cart-col-3">商品信息</div>
                    <div class="cart-col-4">
                        <div class="cart-good-real-price">单价</div>
                    </div>
                    <div class="cart-col-5">数量</div>
                    <div class="cart-col-6">
                        <div class="cart-good-amount">小计</div>
                    </div>
                    <div class="cart-col-7">操作</div>
                </div>
            </div>
            <div class="container">
                <p style="color: #adadad ;font-size: 60px;text-align: center;height: 100px;margin-top: 30px">
                    购物车中空空如也</p>
            </div>
        @else
            <div class="beij_center">
                <div class="cart-main-header clearfix">
                    <div class="cart-col-1">
                        <input type="checkbox" v-model="allCheckStatus" @click="allChecked" class="jdcheckbox">
                    </div>
                    <div class="cart-col-2">全选</div><!-- $page.site 主站 团购 抢购   style -->
                    <div class="cart-col-3">商品信息</div>
                    <div class="cart-col-4">
                        <div class="cart-good-real-price">单价</div>
                    </div>
                    <div class="cart-col-5">数量</div>
                    <div class="cart-col-6">
                        <div class="cart-good-amount">小计</div>
                    </div>
                    <div class="cart-col-7">操作</div>
                </div>
            </div>
            <div v-for="(v,k) in carts">
                <div class="container">
                    {{--<div class="cart-shop-header">--}}
                    {{--<div class="cart-col-1">--}}
                    {{--<input type="checkbox" class="jdcheckbox">--}}
                    {{--</div>--}}
                    {{--<div class="cart-col-2"><span class="gouw_c_dianp">罗莱LOVO自营官方旗舰店 </span></div>--}}
                    {{--</div>--}}
                    <div class="cart-shop-goods">
                        <div class="cart-shop-good">
                            <div class="cart-col-1">
                                <input type="checkbox" @click="select(v)" v-model="v.checked" v-bind:value="true"
                                       class="jdcheckbox">
                            </div>
                            {{--@{{hasChecked}}--}}
                            {{--图片--}}
                            <div class="cart-col-2" style="height: 82px;">
                                <a href="" target="_blank" class="g-img">
                                    <img :src="v.list_pic" alt="">
                                </a>
                            </div>
                            <div class="fl houj_c">
                                {{--标题--}}
                                <div class="cart-dfsg">
                                    <div class="cart-good-name">
                                        <a href="#" target="_blank">
                                            @{{ v.title }}
                                        </a>
                                    </div>
                                    @{{ v.spec }}
                                    @{{ v.sort }}
                                </div>
                                <div class="cart-good-pro"></div>
                                <div class="cart-col-4">
                                    {{--单价--}}
                                    <div class="cart-good-real-price "><!--主品-->¥&nbsp;@{{ v.price }}</div>
                                    <div class="red"></div>
                                </div>
                                <div class="cart-col-5">
                                    <div class="gui-count cart-count">
                                        <a href="javascript:;" gui-count-sub="" @click="reduce(v)"
                                           class="gui-count-btn gui-count-sub gui-count-disabled">-</a>
                                        <a href="javascript:;" gui-count-add="" @click="add(v)"
                                           class="gui-count-btn gui-count-add">+</a>
                                        <div class="gui-count-input">
                                            {{--数量--}}
                                            <input dytest="" class="" type="text" v-model="v.num" value="1"></div>
                                    </div>
                                </div>
                                <div class="cart-col-6 ">
                                    {{--小计--}}
                                    <div class="cart-good-amount">¥&nbsp;@{{ v.num*v.price }}</div>
                                </div>
                            </div>
                            <div class="cart-col-7">
                                <div class="cart-good-fun delfixed">
                                    <a href="javascript:;" @click="del(k,v)">删除</a>
                                </div>
                                <div class="cart-good-fun">
                                    <a href="#">移入收藏</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="jies_beij" style="width: 1200px;margin: 0 auto;">
                <div class="beij_center over_dis">
                    <div class="qianm_shanc_yvf" style="margin-left: 10px"><a href="{{route('home.home')}}">继续购物</a>
                    </div>
                    <div class="jies_ann_bei">

                        <p>共计 <em>@{{ carts.length }}</em> 件商品 总计（不含运费）：<span>￥ @{{ totalPrice }} </span></p>
                        <a href="javascript:;" @click="goSettlement" class="order_btn">去结算</a>
                    </div>
                </div>
            </div>
        @endif
    </div>

    {{--轮播图--}}
    <div class="beij_center">
        <div class="investment_f">
            <div class="investment_title">
                <div class="ds_dg on_d">为您推荐</div>
                <div class="ds_dg">最近预览</div>
            </div>
            <div class="investment_con">
                <!---->
                <div class="picScroll_left_s" style="display: block;">
                    <div class="hd">
                        <a class="next next_you"></a>
                        <ul></ul>
                        <a class="prev prev_zuo"></a>
                    </div>
                    <div class="bd">
                        <ul class="picList">
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/lieb_tupi3.jpg"/></a>
                                </div>
                                <div class="title">
                                    <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                    <div class="jiage_gouw"><span>¥2499.00</span></div>
                                    <a href="#" class="cart_scroll_btn">加入购物车</a>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/shangq_3.jpg"/></a></div>
                                <div class="title">
                                    <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                    <div class="jiage_gouw"><span>¥2499.00</span></div>
                                    <a href="#" class="cart_scroll_btn">加入购物车</a>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/big_3.jpg"/></a></div>
                                <div class="title">
                                    <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                    <div class="jiage_gouw"><span>¥2499.00</span></div>
                                    <a href="#" class="cart_scroll_btn">加入购物车</a>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/xiangqtu_1.jpg"/></a>
                                </div>
                                <div class="title">
                                    <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                    <div class="jiage_gouw"><span>¥2499.00</span></div>
                                    <a href="#" class="cart_scroll_btn">加入购物车</a>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/lieb_tupi3.jpg"/></a>
                                </div>
                                <div class="title">
                                    <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                    <div class="jiage_gouw"><span>¥2499.00</span></div>
                                    <a href="#" class="cart_scroll_btn">加入购物车</a>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/big_3.jpg"/></a></div>
                                <div class="title">
                                    <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                    <div class="jiage_gouw"><span>¥2499.00</span></div>
                                    <a href="#" class="cart_scroll_btn">加入购物车</a>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/lieb_tupi1.jpg"/></a>
                                </div>
                                <div class="title">
                                    <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                    <div class="jiage_gouw"><span>¥2499.00</span></div>
                                    <a href="#" class="cart_scroll_btn">加入购物车</a>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/lieb_tupi2.jpg"/></a>
                                </div>
                                <div class="title">
                                    <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                    <div class="jiage_gouw"><span>¥2499.00</span></div>
                                    <a href="#" class="cart_scroll_btn">加入购物车</a>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="images/lieb_tupi3.jpg"/></a>
                                </div>
                                <div class="title">
                                    <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                    <div class="jiage_gouw"><span>¥2499.00</span></div>
                                    <a href="#" class="cart_scroll_btn">加入购物车</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!---->
                <div class="picScroll_left_s" style="display: none;">
                    <div class="picScroll_left_s_dsl">
                        <div class="dfgc">
                            <ul class="picList">
                                <li>
                                    <div class="pic"><a href="#" target="_blank"><img src="images/lieb_tupi3.jpg"/></a>
                                    </div>
                                    <div class="title">
                                        <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                        <div class="jiage_gouw"><span>¥2499.00</span></div>
                                        <a href="#" class="cart_scroll_btn">加入购物车</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="pic"><a href="#" target="_blank"><img src="images/big_3.jpg"/></a></div>
                                    <div class="title">
                                        <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                        <div class="jiage_gouw"><span>¥2499.00</span></div>
                                        <a href="#" class="cart_scroll_btn">加入购物车</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="pic"><a href="#" target="_blank"><img src="images/lieb_tupi1.jpg"/></a>
                                    </div>
                                    <div class="title">
                                        <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                        <div class="jiage_gouw"><span>¥2499.00</span></div>
                                        <a href="#" class="cart_scroll_btn">加入购物车</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="pic"><a href="#" target="_blank"><img src="images/big_3.jpg"/></a></div>
                                    <div class="title">
                                        <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                        <div class="jiage_gouw"><span>¥2499.00</span></div>
                                        <a href="#" class="cart_scroll_btn">加入购物车</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="pic"><a href="#" target="_blank"><img src="images/shangq_3.jpg"></a>
                                    </div>
                                    <div class="title">
                                        <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                        <div class="jiage_gouw"><span>¥2499.00</span></div>
                                        <a href="#" class="cart_scroll_btn">加入购物车</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="pic"><a href="#" target="_blank"><img src="images/shangq_3.jpg"></a>
                                    </div>
                                    <div class="title">
                                        <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                        <div class="jiage_gouw"><span>¥2499.00</span></div>
                                        <a href="#" class="cart_scroll_btn">加入购物车</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {

            /*tab标签切换*/
            function tabs(tabTit, on, tabCon) {
                $(tabCon).each(function () {
                    $(this).children().eq(0).show();

                });
                $(tabTit).each(function () {
                    $(this).children().eq(0).addClass(on);
                });
                $(tabTit).children().click(function () {
                    $(this).addClass(on).siblings().removeClass(on);
                    var index = $(tabTit).children().index(this);
                    $(tabCon).children().eq(index).show().siblings().hide();
                });
            }

            tabs(".investment_title", "on_d", ".investment_con");

        })
    </script>
    <script type="text/javascript">
        jQuery(".picScroll_left_s").slide({
            titCell: ".hd ul",
            mainCell: ".bd ul",
            autoPage: true,
            effect: "left",
            autoPlay: true,
            vis: 5,
            trigger: "click"
        });
    </script>
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('org/receptionist')}}/css/ziy.css">
@endpush
@push('js')
    <script type="text/javascript" src="{{asset('org/receptionist')}}/js/select.js"></script>
    <script src="{{asset('org/layer/layer.js')}}"></script>
    <script src="https://cdn.bootcss.com/vue/2.5.21/vue.min.js"></script>
    <script src="https://cdn.bootcss.com/axios/0.19.0-beta.1/axios.min.js"></script>
    <script>
        new Vue({
            el: '#cart',
            data: {
                carts:{!! $datas !!},
                allCheckStatus: false,
                hasChecked: []//记录谁现在是选中状态
            },
            methods: {
                //去结算
                goSettlement() {
                    //alert(1);
                    //判断用户是否勾选商品
                    if (this.totalPrice == 0) {
                        layer.msg('请选择要结算的商品')
                        return
                    } else {
                        //跳转到结算页
                        location.href = "{{route('home.order.index')}}?iqs=" + this.hasChecked;
                    }
                },
                //全选单机事件
                allChecked() {
                    //首先让自己状态 true/false 进行切换
                    this.allCheckStatus = !this.allCheckStatus
                    //根据全选状态变化让单选跟着变化
                    this.hasChecked = [];
                    this.carts.forEach((v, k) => {
                        if (this.allCheckStatus) {
                            v.checked = true;
                            this.hasChecked.push(v.id)
                        } else {
                            v.checked = false;
                            this.hasChecked = [];
                        }
                    });
                },
                //单选事件
                select(v) {
                    //将自己状态 true/false 转换
                    v.checked = !v.checked;
                    //如果现在自己状态是 true,说明自己选中
                    if (v.checked) {
                        //将当前购物车 id 放到了一个新的数组中
                        this.hasChecked.push(v.id);
                    } else {
                        //检测制定元素在数组中位置indexOf,如果元素在数组检测元素,返回该元素位置,如果找不见制定元素,返回-1
                        var pos = this.hasChecked.indexOf(v.id);
                        //console.log(pos);
                        //如果取消选中,将当前取消购物车 id 冲数组踢出去
                        this.hasChecked.splice(pos, 1);
                    }
                    if (this.hasChecked.length == this.carts.length) {
                        ///alert(1);
                        this.allCheckStatus = true;
                    } else {
                        ///alert(1);
                        this.allCheckStatus = false;
                    }
                },
                //删除当前的商品
                del(k, v) {
                    axios.delete("/home/cart/" + v.id, {}).then((res) => {
                        if (res.status == 200) {
                            this.carts.splice(k, 1);
                            layer.msg('删除成功')
                        }
                    })
                },
                //点击增加数量
                add(v) {
                    v.num++;
                    this.updata(v)
                },
                //点击减数量
                reduce(v) {
                    if (v.num <= 1) return;
                    v.num--;
                    this.updata(v)
                },
                //更新数量
                updata(v) {
                    axios.put("/home/cart/" + v.id, {
                        num: v.num,
                    }).then(function (res) {
                        //console.log(res);
                        if (res.data.code == 1) {
                            // layer.msg('操作成功')
                        } else {
                            layer.msg(res.data.msg)
                        }
                    })
                },
            },
            //计算属性
            computed: {
                totalPrice() {
                    let total = 0;
                    this.carts.forEach((v, k) => {
                        if (v.checked) {
                            total += v.price * v.num;
                        }
                    });
                    return total;
                }
            },
        })
    </script>
@endpush
