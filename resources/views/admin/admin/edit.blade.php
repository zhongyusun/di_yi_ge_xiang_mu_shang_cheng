@extends('admin.layouts.master')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">首页</a></li>
                <li class="breadcrumb-item active">管理员管理</li>
            </ol>
        </div>
    </div>
    <div class="card">
        <div class="card-body p-b-0">
            <h4 class="card-title">后台管理员管理</h4>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs customtab" role="tablist">
            <li class="nav-item">
                <a class="nav-link " href="{{route('admin.admin.index')}}">
                    <span class="hidden-sm-up"><i class="ti-home"></i></span>
                    <span class="hidden-xs-down">管理员列表</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.admin.create')}}">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">添加管理员</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('admin.admin.edit',$admin)}}">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">编辑管理员</span>
                </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="card-header"></div>
            <div class="card-body">
                <form action="{{route('admin.admin.update',$admin)}}" method="post" class="form-horizontal ">
                @csrf @method('PUT')
                <!--/row-->
                    <div class="form-group row">
                        <label class="control-label text-right" style="margin-left: 80px">登录账号</label>
                        <div class="col-md-9">
                            <input type="text" placeholder="" name="username" value="{{$admin->username}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right" style="margin-left: 80px">设置密码</label>
                        <div class="col-md-9">
                            <input type="password" placeholder="" name="password" value="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right" style="margin-left: 80px">确认密码</label>
                        <div class="col-md-9">
                            <input type="password" placeholder="" name="password_confirmation" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label text-right" style="margin-left: 80px"></label>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-success">保存数据</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
