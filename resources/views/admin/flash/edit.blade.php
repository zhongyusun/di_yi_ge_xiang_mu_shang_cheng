@extends('admin.layouts.master')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">首页</a></li>
                <li class="breadcrumb-item active">配置管理</li>
                <li class="breadcrumb-item active">轮播图配置</li>
            </ol>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body p-b-0">
                <div class="col">
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                        <li class="nav-item">
                            <a href="{{route('admin.category.index')}}" class="nav-link ">
                                轮播图列表
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.flash.create')}}" class="nav-link">
                                添加轮播图
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.flash.edit',$flash)}}" class="nav-link active">
                                编辑轮播图
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-header"></div>
                <div class="card-body">
                    <form action="{{route('admin.flash.update',$flash)}}" method="post"
                          class="form-horizontal ">
                    @csrf  @method('PUT')
                    <!--/row-->
                        <div class="form-group row" style="margin-left: 250px">
                            <label class="control-label text-right ">轮播图标题</label>
                            <div class="col-md-9">
                                <input type="text" name="title" placeholder="请输入轮播图标题" value="{{$flashs->title}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left: 210px">
                            <label class="control-label text-right">请上传轮播图图片</label>
                            <div class="col-md-9">
                                <div class="layui-upload-drag" id="test10">
                                    @if($flashs->path==null)
                                        <i class="layui-icon"></i>
                                        <p>点击上传，或将文件拖拽到此处</p>
                                    @else
                                        <img src="{{$flashs->path}}" alt="" width="80"><input
                                            type="hidden"
                                            name="path"
                                            value="{{$flashs->path}}">
                                    @endif
                                </div>
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

@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('org/layui/css/layui.css')}}">
@endpush
@push('js')
    <script src="{{asset('org/layui/layui.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        layui.use(['upload', 'layedit'], function () {
            var $ = layui.jquery
                , upload = layui.upload;
            //拖拽上传
            upload.render({
                elem: '#test10'
                , url: "{{route('util.upload')}}"
                , data: {'_token': "{{csrf_token ()}}"}
                , headers: {}//接口的请求头。如：headers: {token: 'sasasas'}。注：该参数为 layui 2.2.6 开始新增
                , accept: 'images' //指定允许上传时校验的文件类型，可选值有：images（图片）、file（所有文件）、video（视频）、audio（音频）
                // , acceptMime: 'image/jpg,image/png'
                , size: {{hd_config('upload.upload_size') ?hd_config('upload.upload_size'): 500000000}} //最大允许上传的文件大小，单位 KB。不支持ie8/9
                , exts: '{{hd_config('upload.upload_type')}}' ? '{{hd_config('upload.upload_type')}}' : 'jpg|png|jpeg'
                //,drag:true //是否接受拖拽的文件上传，设置 false 可禁用。不支持ie8/9
                //上传成功之后的回调
                , done: function (res) {
                    if (res.code == 0) {
                        $('#test10').html('<img src="' + res.data.src + '" alt="" width="80"><input type="hidden" name="path" value="' + res.data.src + '">')
                    } else {
                        layer.msg(res.msg)
                    }
                }
            });

        });
    </script>
@endpush
