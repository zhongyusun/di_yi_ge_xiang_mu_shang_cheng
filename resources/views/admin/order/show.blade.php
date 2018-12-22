@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">首页</a></li>
                    <li class="breadcrumb-item active">订单管理</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-b-0">
                        <h4 class="card-title">
                            订单详情
                            @if($order['status'] ==1)
                                <span class="label label-warning">待支付</span>
                            @elseif($order['status'] ==2)
                                <span class="label label-info"> 已支付 </span>
                            @elseif($order['status'] ==3)
                                <span class="label label-success">待发货</span>
                            @elseif($order['status'] ==4)
                                <span class="label label-success">待确认</span>
                            @elseif($order['status'] ==5)
                                <span class="label label-success">交易完成</span>
                            @endif
                        </h4>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>商品序号</th>
                                        <th>商品名称</th>
                                        <th>商品单价</th>
                                        <th>商品图片</th>
                                        <th>购买数量</th>
                                        <th>小计</th>
                                    </tr>
                                    </thead>
                                    @foreach($orders as $v)
                                        <tbody>
                                        <tr>
                                            <td>{{$v->id}}</td>
                                            <td>{{$v->title}}</td>
                                            <td>{{$v->price}}</td>
                                            <td><img src="{{$v->list_pic}}"
                                                     width="60"
                                                     alt=""></td>
                                            <td>{{$v->num}}</td>
                                            <td>{{$v->num*$v->price}}</td>

                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
