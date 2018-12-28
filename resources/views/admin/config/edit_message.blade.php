@extends('admin.layouts.master')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">首页</a></li>
                <li class="breadcrumb-item active">配置管理</li>
                <li class="breadcrumb-item active">qq登录配置</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-b-0">
                    <h4 class="card-title">qq登录配置</h4>
                </div>
                <div class="tab-content">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form action="{{route('admin.config.update',['name'=>$name])}}" method="post"
                              class="form-horizontal ">
                            @csrf    @method('PUT')
                            <div class="form-group row">
                                <label class="control-label text-right" style="margin-left: 100px">SMS_APP_ID</label>
                                <div class="col-md-9">
                                    <input type="text" name="SMS_APP_ID" placeholder=""
                                           value="{{$config['data']['SMS_APP_ID']}}"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right" style="margin-left: 70px">SMS_APP_KEY</label>
                                <div class="col-md-9">
                                    <input type="text" name="SMS_APP_KEY"
                                           value="{{$config['data']['SMS_APP_KEY']}}"
                                           placeholder="" class="form-control">
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
@endsection
