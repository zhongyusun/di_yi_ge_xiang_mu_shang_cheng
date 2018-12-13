@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">首页</a></li>
                    <li class="breadcrumb-item active">分类管理</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-b-0">
                        <h4 class="card-title">分类管理</h4>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('admin.category.index','')}}">
                                <span class="hidden-sm-up"><i class="ti-home"></i></span>
                                <span class="hidden-xs-down">分类列表</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('admin.category.create')}}">
                                <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">添加分类</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form action="{{route('admin.category.store')}}" method="post" class="form-horizontal ">
                            @csrf
                            <!--/row-->
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">分类名称</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="请输入分类名称" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">父级分类</label>
                                    <div class="col-md-9">
                                        <select class="form-control custom-select" name="parent_id" data-placeholder="Choose a Category"
                                                tabindex="1">
                                            <option value="0">顶级分类</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category['id']}}">{{$category['_title']}}</option>
                                            @endforeach
                                        </select>
                                        <small class="form-control-feedback"> 请选择父级分类</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-success">保存数据</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
