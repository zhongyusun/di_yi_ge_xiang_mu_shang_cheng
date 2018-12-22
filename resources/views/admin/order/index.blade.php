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
                        <h4 class="card-title">订单管理</h4>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="http://shop.ishilf.com/admin/order">
                                <span class="hidden-sm-up"><i class="ti-home"></i></span>
                                <span class="hidden-xs-down">订单列表</span>
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
                                        <th>订单序号</th>
                                        <th>订单号</th>
                                        <th>订单时间</th>
                                        <th>订单总价</th>
                                        <th>订单总数</th>
                                        <th>订单状态</th>
                                        <th>用户昵称</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->number}}</td>
                                            <td>{{$order->created_at}}</td>
                                            <td>{{$order->price}}</td>
                                            <td>{{$order->quantity}}</td>
                                            @if($order->status==1)
                                                <td>
                                                    <span class="label label-info"> 未支付 </span>
                                                </td>
                                            @elseif($order->status==2)
                                                <td>
                                                    <span class="label label-info"> 已支付,等待发货 </span>
                                                </td>
                                            @elseif($order->status==3)
                                                <td>
                                                    <span class="label label-info"> 已发货 </span>
                                                </td>
                                            @elseif($order->status==4)
                                                <td>
                                                    <span class="label label-info"> 配送中 </span>
                                                </td>
                                            @elseif($order->status==5)
                                                <td>
                                                    <span class="label label-info"> 订单已完成 </span>
                                                </td>
                                            @endif

                                            <td>{{$order->user->id}}/{{$order->user->name}}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group"
                                                     aria-label="Basic example">
                                                    <a class="btn btn-outline-secondary "
                                                       href="{{route('admin.order.show',$order)}}">订单详情</a>
                                                    @if($order['status'] ==1)
                                                    @elseif($order['status'] ==2)
                                                        <a class="btn btn-outline-info "
                                                           href="{{route('admin.order.edit',$order)}}">确认发货</a>
                                                    @elseif($order['status'] ==3)
                                                    @elseif($order['status'] ==4)
                                                    @elseif($order['status'] ==5)
                                                    @endif

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                {{$orders->links()}}
            </div>
        </div>
    </div>
@endsection
