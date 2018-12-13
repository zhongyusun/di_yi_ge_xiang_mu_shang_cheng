@extends('admin.layouts.master')
@section('content')
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="http://shop.ishilf.com/admin">首页</a></li>
                    <li class="breadcrumb-item active">基本配置</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">系统信息</h4>
                        <h6 class="card-subtitle">欢迎使用桀骜商城管理系统</h6>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">系统环境</h4>
                        <div class="table-responsive m-t-20">
                            <table class="table stylish-table">
                                <thead>
                                <tr>
                                    <th>名称</th>
                                    <th>值</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>php 版本</td>
                                    <td><span class="label label-success">7.2.4</span></td>
                                </tr>
                                <tr>
                                    <td>Laravel 版本</td>
                                    <td><span class="label label-success">5.7.16</span></td>
                                </tr>
                                <tr>
                                    <td>操作系统</td>
                                    <td><span class="label label-success">Linux</span></td>
                                </tr>
                                <tr>
                                    <td>商城版本</td>
                                    <td><span class="label label-success">v1.0.0</span></td>
                                </tr>
                                <tr>
                                    <td>当前域名</td>
                                    <td><span class="label label-success">http://szy.edu</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">开发信息</h4>
                        <div class="table-responsive m-t-20">
                            <table class="table stylish-table">
                                <thead>
                                <tr>
                                    <th>名称</th>
                                    <th>版本</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>开发者</td>
                                    <td>桀骜</td>
                                </tr>
                                <tr>
                                    <td>联系开发者</td>
                                    <td>****</td>
                                </tr>
                                <tr>
                                    <td>github</td>
                                    <td><a target="_blank" href="">https://github.com/zhongyusun/di_yi_ge_xiang_mu_shang_cheng</a></td>
                                </tr>
                                <tr>
                                    <td>个人站</td>
                                    <td><a target="_blank" href="https://wubin.pro">***</a></td>
                                </tr>
                                <tr>
                                    <td>微信/qq</td>
                                    <td>
                                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=290646986&amp;site=qq&amp;menu=yes">
                                            2460245313
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection



