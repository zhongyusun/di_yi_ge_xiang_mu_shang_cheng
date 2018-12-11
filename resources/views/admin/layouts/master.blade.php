<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('org')}}/assets/images/favicon.png">
    <title>桀骜后台管理</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('org')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{asset('org')}}/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="{{asset('org')}}/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="{{asset('org')}}/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="{{asset('org')}}/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('org/assets')}}/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('org/assets')}}/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    {{--头部导航栏--}}
    @include('admin.layouts.header')
    {{--左侧边栏--}}
    @include('admin.layouts.left_sidebar')
    {{--底部导航栏--}}
    @include('admin.layouts.foot')
</div>
<script src="{{asset('org')}}/assets/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('org')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{asset('org')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('org/assets')}}/js/jquery.slimscroll.js"></script>
<script src="{{asset('org/assets')}}/js/waves.js"></script>
<script src="{{asset('org/assets')}}/js/sidebarmenu.js"></script>
<script src="{{asset('org')}}/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="{{asset('org')}}/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="{{asset('org/assets')}}/js/custom.min.js"></script>
<script src="{{asset('org')}}/assets/plugins/chartist-js/dist/chartist.min.js"></script>
<script src="{{asset('org')}}/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<script src="{{asset('org')}}/assets/plugins/d3/d3.min.js"></script>
<script src="{{asset('org')}}/assets/plugins/c3-master/c3.min.js"></script>
<script src="{{asset('org/assets')}}/js/dashboard1.js"></script>
<script src="{{asset('org')}}/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<!-- ============================================================== -->
@include('layouts.message')
</body>
</html>
