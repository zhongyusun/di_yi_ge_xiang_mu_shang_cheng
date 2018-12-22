@extends('admin.layouts.master')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">首页</a></li>
                <li class="breadcrumb-item active">配置管理</li>
                <li class="breadcrumb-item active">邮箱配置</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-b-0">
                    <h4 class="card-title">邮件配置</h4>
                </div>
                <div class="tab-content">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form action="{{route('admin.config.update',['name'=>$name])}}" method="post" class="form-horizontal ">
                        @csrf    @method('PUT')
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">应用名称(APP_NAME)</label>
                                <div class="col-md-9">
                                    <input type="text" name="APP_NAME" placeholder="" value="{{$config['data']['APP_NAME']}}" class="form-control">
                                    <small class="form-control-feedback ">在邮件中显示的应用名称</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">应用地址(APP_URL)</label>
                                <div class="col-md-9">
                                    <input type="text" name="APP_URL" placeholder="" value="{{$config['data']['APP_URL']}}" class="form-control">
                                    <small class="form-control-feedback ">在邮件中显示的应用链接地址</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">邮件驱动(MAIL_DRIVER)</label>
                                <div class="col-md-9">
                                    <input type="text" name="MAIL_DRIVER" placeholder="" value="{{$config['data']['MAIL_DRIVER']}}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">主机(MAIL_HOST)</label>
                                <div class="col-md-9">
                                    <input type="text" name="MAIL_HOST" placeholder="" value="{{$config['data']['MAIL_HOST']}}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">端口(MAIL_PORT)</label>
                                <div class="col-md-9">
                                    <input type="text" name="MAIL_PORT" placeholder="" value="{{$config['data']['MAIL_PORT']}}" class="form-control">
                                    <small class="form-control-feedback ">邮件端口:默认25,可选范围:25,465,</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">邮件用户名(MAIL_USERNAME)</label>
                                <div class="col-md-9">
                                    <input type="text" name="MAIL_USERNAME" placeholder="" value="{{$config['data']['MAIL_USERNAME']}}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">邮件秘钥(MAIL_PASSWORD)</label>
                                <div class="col-md-9">
                                    <input type="password" name="MAIL_PASSWORD" placeholder="" value="{{$config['data']['MAIL_PASSWORD']}}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">加密方式(MAIL_ENCRYPTION)</label>
                                <div class="col-md-9">
                                    <input type="text" name="MAIL_ENCRYPTION" placeholder="" value="{{$config['data']['MAIL_ENCRYPTION']}}"
                                           class="form-control">
                                    <small class="form-control-feedback ">该配置一般不需要改动</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">邮件发信地址(MAIL_FROM_ADDRESS)</label>
                                <div class="col-md-9">
                                    <input type="text" name="MAIL_FROM_ADDRESS" placeholder="" value="{{$config['data']['MAIL_FROM_ADDRESS']}}"
                                           class="form-control">
                                    <small class="form-control-feedback ">该项需跟邮件用户名保持一致,否可能造成邮件发送异常</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">发信人(MAIL_FROM_NAME)</label>
                                <div class="col-md-9">
                                    <input type="text" name="MAIL_FROM_NAME" placeholder="" value="{{$config['data']['MAIL_FROM_NAME']}}"
                                           class="form-control">
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
