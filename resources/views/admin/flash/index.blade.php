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
                            <th>#</th>
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
            require(['hdjs', 'bootstrap'], function (hdjs) {
                hdjs.confirm('确定删除吗?', function () {
                    $(obj).next('form').submit();
                })
            })
        }
    </script>
@endpush
