<?php

namespace App\Http\Controllers\Admin;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function index()
    {
        admin_has_permission('Admin-permission');
        //获取所有的后台权限
        $modules = Module::all();
        //dd($modules);
        return view('admin.permission.index', compact('modules'));
    }

    //清理缓存
    public function forgetPermissionCache()
    {
        admin_has_permission('Admin-permission');
       // dd(1);
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        return back()->with('success', '缓存清除成功');
    }
}
