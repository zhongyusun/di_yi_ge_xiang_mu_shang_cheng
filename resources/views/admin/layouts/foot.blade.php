<div class="page-wrapper">
    <!-- 主页内容 -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
    <footer class="footer"> {{hd_config('site.site_icp')?hd_config('site.site_icp'):'京ICP证070359号'}}</footer>
</div>
