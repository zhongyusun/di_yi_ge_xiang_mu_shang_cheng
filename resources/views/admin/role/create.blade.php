@extends('admin.layouts.master')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">首页</a></li>
                <li class="breadcrumb-item active">角色管理</li>
            </ol>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body p-b-0">
                <h4 class="card-title">角色管理</h4>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link " href="{{route('admin.role.index')}}">
                        <span class="hidden-sm-up"><i class="ti-home"></i></span>
                        <span class="hidden-xs-down">角色列表</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('admin.role.create')}}">
                        <span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                            class="hidden-xs-down">添加角色</span>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-header"></div>
                <div class="card-body">
                    <form action="{{route('admin.role.store')}}" method="post" class="form-horizontal ">
                        @csrf
                        <!--/row-->
                        <div class="form-group row">
                            <label class="control-label text-right" style="margin-left: 20px">角色中文名称</label>
                            <div class="col-md-9">
                                <input type="text" placeholder="" name="title" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label text-right" style="margin-left: 50px">角色标识</label>
                            <div class="col-md-9">
                                <input type="text" placeholder="" name="name" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label text-right"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-success">保存数据</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
