<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleRequest;
use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function index()
    {
        admin_has_permission('Admin-role');
        //获取所有的角色
        $roles = Role::paginate(10);
        //dd($roles);
        return view('admin.role.index', compact('roles'));
    }


    public function create()
    {
        admin_has_permission('Admin-role');
        //dd(1);
        return view('admin.role.create');
    }


    public function store(RoleRequest $request, \Spatie\Permission\Models\Role $role)
    {
        admin_has_permission('Admin-role');
        $role->title = $request->title;
        $role->name = $request->name;
        $role->guard_name = 'admin';
        $role->save();
        return redirect()->route('admin.role.create')->with('success', '角色添加成功');
    }


    public function show(Role $role)
    {
        admin_has_permission('Admin-role');
        //dd($role);
        //获取所有权限的数据
        $permission = Module::all();
//        dd($permission);
        return view('admin.role.set_role_permission', compact('role', 'permission'));
    }


    public function edit(Role $role)
    {
        admin_has_permission('Admin-role');
        return view('admin.role.edit', compact('role'));
    }


    public function update(Request $request, Role $role)
    {
        admin_has_permission('Admin-role');
        //dd($request->toArray());
        $role->title = $request->title;
        $role->name = $request->name;
        $role->update();
        return redirect()->route('admin.role.index')->with('success', '角色编辑成功');
    }


    public function destroy(Role $role)
    {
        admin_has_permission('Admin-role');
        //dd($role);
        $role->delete();
        return redirect()->back()->with('success', '删除成功');
    }

    public function setRolePermission(Role $role, Request $request)
    {
        admin_has_permission('Admin-role');
        //dd(1);
        //dd($role);
//        dd($request->toArray());
        //$this->authorize('update', $role);
        $role->syncPermissions($request->permissions);
        return back()->with('success', '操作成功');
    }
}
