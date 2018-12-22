<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <div class="user-profile"
             style="background: url({{asset('org')}}/assets/images/background/user-info.jpg) no-repeat;">
            <div class="profile-img">
                <img src="{{asset('org')}}/assets/images/users/profile.png" alt="user"/>
            </div>
            <div class="profile-text">
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="true"> {{auth('admin')->user()->username}}</a>
                <div class="dropdown-menu animated flipInY">
                    <a href="{{route('admin.logout')}}" class="dropdown-item">
                        <i class="fa fa-power-off"></i> 退出</a>
                </div>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap"></li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">商城系统</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.category.index')}}">栏目管理</a></li>
                        <li><a href="{{route('admin.good.index')}}">商品管理</a></li>
                        <li><a href="{{route('admin.order.index')}}">订单管理</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-settings"></i>
                        <span class="hide-menu">配置管理</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.config.edit',['name'=>'site'])}}">站点配置</a></li>
                        <li><a href="{{route('admin.config.edit',['name'=>'upload'])}}">上传配置</a></li>
                        <li><a href="{{route('admin.config.edit',['name'=>'email'])}}">邮箱配置</a></li>
                        <li><a href="{{route('admin.config.edit',['name'=>'seach'])}}">搜索配置</a></li>
                        <li><a href="{{route('admin.flash.index')}}">轮播图管理</a></li>
                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li class="nav-small-cap">**********</li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="{{route('admin.logout')}}" class="link" data-toggle="tooltip" title="Logout"><i
                class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
