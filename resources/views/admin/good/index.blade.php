@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">首页</a></li>
                    <li class="breadcrumb-item active">商品管理</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-b-0">
                        <h4 class="card-title">商品管理</h4>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('admin.good.index')}}">
                                <span class="hidden-sm-up"><i class="ti-home"></i></span>
                                <span class="hidden-xs-down">商品列表</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.good.create')}}">
                                <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">添加商品</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>商品名称</th>
                                        <th>商品图片</th>
                                        <th>商品价格</th>
                                        <th>所属分类</th>
                                        <th>添加时间</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($goods as $good)
                                        <tr>
                                            <td>{{$good['id']}}</td>
                                            <td>{!! $good['title'] !!}</td>
                                            <td><img src="{{$good['list_pic']}}" alt="" style="height: 50px"></td>
                                            <td>{{$good['price']}}</td>
                                            <td>{{$good->getCatId()}}</td>
                                            <td>{{$good['created_at']}}</td>
                                            <td>
                                                <a href="{{route('admin.good.edit',$good['id'])}}"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <a href="javascript:;" onclick="del(this)" data-toggle="tooltip"
                                                   data-original-title="Close"> <i class="fa fa-close text-danger"></i>
                                                </a>
                                                <form action="{{route('admin.good.destroy',$good['id'])}}" method="post">
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


