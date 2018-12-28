@extends('admin.layouts.master')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">首页</a></li>
                <li class="breadcrumb-item active">配置管理</li>
                <li class="breadcrumb-item active">轮播图管理</li>
            </ol>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body p-b-0">
                <div class="col">
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                        <li class="nav-item">
                            <a href="{{route('admin.category.index')}}" class="nav-link active">
                                轮播图列表
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.flash.create')}}" class="nav-link ">
                                添加轮播图
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-header"></div>
                <div class="card-body">
                    <table class="table table-sm table-nowrap card-table">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>轮播图标题</th>
                            <th>图片</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($flashs as $flash)
                            <tr>
                                <td>{{$flash['id']}}</td>
                                <td>{{$flash['title']}}</td>
                                <td>
                                    <img width="60" src="{{$flash['path']}}" alt="">
                                </td>
                                <td>
                                    <a href="{{route('admin.flash.edit',$flash)}}">
                                        <i class="fa fa-pencil text-inverse m-r-10"></i>
                                    </a>
                                    <a href="javascript:;" onclick="del(this)" data-toggle="tooltip" data-original-title="Close">
                                        <i class="fa fa-close text-danger"></i>
                                    </a>
                                    <form action="{{route('admin.flash.destroy',$flash)}}" method="post">
                                        @csrf @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('js')
    <script>
        function del(obj) {
            swal("确定删除？", {
                buttons: {
                    cancel: "取消",
                    catch: {
                        text: "确定",
                        value: "catch",
                    },
                },
            })
                .then((value) => {
                    switch (value) {
                        case "catch":
                            $(obj).next('form').submit();
                            break;
                        default:
                    }
                });
        }
    </script>
@endpush
