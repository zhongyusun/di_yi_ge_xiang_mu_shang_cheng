<div class="tod_tongc_zuoc">
    <div class="zuoc_toux">
        <div class="toux_kuang">
            <div class="userImage">
                <div class="myGome_userPhoto">
                    <img src="{{auth()->user()->icon}}">
                    <a class="edit_photo_bitton" href="profile" target="_blank">编辑</a>
                </div>
            </div>
            <div class="user_name_Level">
                <p class="user_name" title="{{auth()->user()->name}}">{{auth()->user()->name}}</p>
                <p class="userLevel">会员：<span class="levelId icon_plus_nickname"></span></p>
            </div>
        </div>
        <div class="userInfo_bar">
            <span>资料完成度</span>
            <span class="userInfo_process_bar"><em class="active_bar"
                                                   style="width: 40px;"> 20%</em></span>
            <a href="#" target="_blank">完善</a>
        </div>
        <div class="myGome_accountSecurity">
                        <span class="fl_ee" style="margin-top:2px;">账户安全 <em
                                class="myGome_account_level"> 低</em> </span>
            <div class="verifiBox fl_ee">
                <div class="shab_1">
                                    <span class="myGome_mobile" val="mobile"> <em
                                            class=" myGome_onActive "></em> </span>
                    <p class="myGome_verifiPop"><span>您已绑定手机：</span> <span>182****0710</span> <a
                            href="#"
                            target="_blank">管理</a>
                    </p>
                </div>
                <div class="shab_1">
                    <span class="myGome_email" val="email"> <em class=""></em> </span>
                    <p class="myGome_verifiPop"><span>您还未绑定邮箱 </span><a href="#"
                                                                        target="_blank">立即绑定</a>
                    </p>
                </div>
            </div>
            <a class="fl_ee" href="#" target="_blank" style="margin-top:2px;">提升</a>
        </div>
        <div class="user_counts">
            <ul>
                <li>
                    <div class="count_item">
                        <a href="#">
                            <i class="count_icon count_icon01"></i> 待付款
                            <em id="waitPay">2</em>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="count_item">
                        <a href="#">
                            <i class="count_icon count_icon02"></i> 待收货
                            <em id="waitPay">4</em>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="count_item">
                        <a href="#">
                            <i class="count_icon count_icon03"></i> 待提货
                            <em id="waitPay">0</em>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="count_item">
                        <a href="#">
                            <i class="count_icon count_icon04"></i> 待评价
                            <em id="waitPay">8</em>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="wod_tongc_daoh_lieb">
        <div class="diy_top">
            <ul>
                <h3>订单中心</h3>
                <li><a href="wod_dingd.html">我的订单</a></li>
                <li><a href="#">退换货单</a></li>
                <li><a href="pingj_shaid.html">评价晒单</a></li>
            </ul>
            <ul>
                <h3>管理中心</h3>
                <li><a href="wod_shouc.html">我的收藏</a></li>
                <li><a href="#">我的预约</a></li>
                <li><a href="#">我的咨询</a></li>
                <li><a href="#">投诉管理</a></li>
            </ul>
        </div>
        <div class="diy_top">
            <ul>
                <h3>账户设置</h3>
                <li><a href="#">基本资料</a></li>
                <li><a href="#">账户安全</a></li>
                <li><a href="{{route('home.site.index')}}">收货地址</a></li>
            </ul>
        </div>
    </div>
</div>
