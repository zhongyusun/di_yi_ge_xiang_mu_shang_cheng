<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                {{--logo--}}
                <b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <img
                        src="{{hd_config('site.site_logo')?hd_config('site.site_logo'):"/icon/Pdz6UZbG96rWjf1rvkjgPeA8KYGlbpblctWaiOM7.png"}}"
                        alt="homepage" class="dark-logo"/>
                    <!-- Light Logo icon -->
                    <img
                        src="{{hd_config('site.site_logo')?hd_config('site.site_logo'):"/icon/Pdz6UZbG96rWjf1rvkjgPeA8KYGlbpblctWaiOM7.png"}}"
                        width="100" height="60" alt="homepage"
                        class="light-logo"/>
                    <span style="color: white;size: 30px">桀骜后台管理</span>
                </b>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"><a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                        href="javascript:void(0)"><i class="mdi mdi-menu"></i></a></li>
                <li class="nav-item"><a
                        class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                        href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item hidden-sm-down search-box"><a
                        class="nav-link hidden-sm-down text-muted waves-effect waves-dark"
                        href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i
                                class="ti-close"></i></a></form>
                </li>
            </ul>

        </div>
    </nav>
</header>
