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
                @if(auth('admin')->user()->hasAnyPermission(['Admin-category','Admin-good','Admin-order']))
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                            <i class="mdi mdi-gauge"></i>
                            <span class="hide-menu">商城系统</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            {{--登录用户有 Admin-category 权限或者是 category 角色都可以访问--}}
                            @if(auth('admin')->user()->hasPermissionTo('Admin-category') || auth('admin')->user()->hasRole('caregory'))
                                <li><a href="{{route('admin.category.index')}}">栏目管理</a></li>
                            @endif
                            @if(auth('admin')->user()->hasPermissionTo('Admin-good') || auth('admin')->user()->hasRole('good'))
                                <li><a href="{{route('admin.good.index')}}">商品管理</a></li>
                            @endif
                            @if(auth('admin')->user()->hasPermissionTo('Admin-order') || auth('admin')->user()->hasRole('dingdan'))
                                <li><a href="{{route('admin.order.index')}}">订单管理</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if(auth('admin')->user()->hasAnyPermission(['Admin-config-website','Admin-config-upload','Admin-config-email','Admin-config-search','Admin-flash']))
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                            <i class="mdi mdi-settings"></i>
                            <span class="hide-menu">配置管理</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            @if(auth('admin')->user()->hasPermissionTo('Admin-config-website') || auth('admin')->user()->hasRole('config'))
                                <li><a href="{{route('admin.config.edit',['name'=>'site'])}}">站点配置</a></li>
                            @endif
                            @if(auth('admin')->user()->hasPermissionTo('Admin-config-upload') || auth('admin')->user()->hasRole('config'))
                                <li><a href="{{route('admin.config.edit',['name'=>'upload'])}}">上传配置</a></li>
                            @endif
                            @if(auth('admin')->user()->hasPermissionTo('Admin-config-email') || auth('admin')->user()->hasRole('config'))
                                <li><a href="{{route('admin.config.edit',['name'=>'email'])}}">邮箱配置</a></li>
                            @endif
                            @if(auth('admin')->user()->hasPermissionTo('Admin-config-search') || auth('admin')->user()->hasRole('config'))
                                <li><a href="{{route('admin.config.edit',['name'=>'seach'])}}">搜索配置</a></li>
                            @endif
                            @if(auth('admin')->user()->hasPermissionTo('Admin-config-message') || auth('admin')->user()->hasRole('config'))
                                <li><a href="{{route('admin.config.edit',['name'=>'message'])}}">短信配置</a></li>
                            @endif
                            @if(auth('admin')->user()->hasPermissionTo('Admin-flash') || auth('admin')->user()->hasRole('good'))
                                <li><a href="{{route('admin.flash.index')}}">轮播图管理</a></li>
                            @endif
                            @if(auth('admin')->user()->hasPermissionTo('Admin-config-qq') || auth('admin')->user()->hasRole('config'))
                                <li><a href="{{route('admin.config.edit',['name'=>'qq'])}}">qq登录配置</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if(auth('admin')->user()->hasAnyPermission(['Admin-admin','Admin-role','Admin-permission']))
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                            <i class="fa fa-user-o"></i>
                            <span class="hide-menu">权限管理</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            @if(auth('admin')->user()->hasPermissionTo('Admin-admin') || auth('admin')->user()->hasRole('admin'))
                                <li><a href="{{route('admin.admin.index')}}">用户管理</a></li>
                            @endif
                            @if(auth('admin')->user()->hasPermissionTo('Admin-role') || auth('admin')->user()->hasRole('role'))
                                <li><a href="{{route('admin.role.index')}}">角色管理</a></li>
                            @endif
                            @if(auth('admin')->user()->hasPermissionTo('Admin-permission') || auth('admin')->user()->hasRole('permission'))
                                <li><a href="{{route('admin.permission')}}">权限管理</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
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
