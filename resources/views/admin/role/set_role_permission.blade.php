@extends('admin.layouts.master')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">首页</a></li>
                <li class="breadcrumb-item active">权限管理</li>
            </ol>
        </div>
    </div>
    <form action="{{route('admin.setRolePermission',$role)}}" method="post" class="form">
        @csrf
        <div class="card">
            <div class="card-header">
                给 <span class="text-muted">{{$role['title']}}</span> 设置权限
            </div>
            <div class="card-body">
                @foreach($permission as $v)
                    <div class="card">
                        <div class="card-header">
                            {{$v['title']}}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($v->permissions as $k=>$vv)
                                    <div class="col-4">
                                        <input id="checkbox{{$k}}" name="permissions[]" value="{{$v['name']}}-{{$vv['name']}}" type="checkbox"
                                               @if($role['name'] == 'webmaster') disabled @endif
                                               @if($role->hasPermissionTo($v['name'] . '-' . $vv['name'])) checked @endif
                                               @if('Admin-index' == $v['name'] . '-' . $vv['name'])
                                               checked
                                            @endif>
                                        <label for="checkbox{{$k}}">{{$vv['title']}}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <button class="btn btn-primary">保存数据</button>

    </form>
@endsection
