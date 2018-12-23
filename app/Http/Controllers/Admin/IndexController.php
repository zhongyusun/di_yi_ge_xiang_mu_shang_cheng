<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class IndexController extends Controller
{
    /**
     * 后台管理 管理员管理
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        admin_has_permission('Admin-admin');
        //防止通过地址兰进入
        //admin_has_permission('index-index');
        //获取所有的管理员
        $admins = Admin::paginate(20);
        //dd($admins);
        return view('admin.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        admin_has_permission('Admin-admin');
        return view('admin.admin.create');
    }


    public function store(Request $request, Admin $admin)
    {
        admin_has_permission('Admin-admin');
        //dd($request->toArray());
        //验证
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|confirmed'
        ], [
            'username.required' => '用户名不能为空',
            'password.required' => '请输入登录密码',
            'password.confirmed' => '两次输入的密码不一致',
        ]);
        //dd($request->toArray());
        $admin->username = $request->username;
        $admin->password = bcrypt($request->password);
        $admin->save();
        return redirect()->route('admin.admin.index')->with('success', '添加成功');
    }


    public function show(Admin $admin)
    {
        admin_has_permission('Admin-admin');
        //获取所有的角色
        $roles = Role::all();
        //dd($roles);
        return view('admin.admin.set_role', compact('roles', 'admin'));
    }


    public function edit(Admin $admin)
    {
        admin_has_permission('Admin-admin');
        //dd($admin);
        return view('admin.admin.edit', compact('admin'));
    }


    public function update(Request $request, Admin $admin)
    {
        admin_has_permission('Admin-admin');
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|confirmed'
        ], [
            'username.required' => '用户名不能为空',
            'password.required' => '请输入登录密码',
            'password.confirmed' => '两次输入的密码不一致',
        ]);
        //dd($request->toArray());
        $admin->username = $request->username;
        $admin->password = bcrypt($request->password);
        $admin->update();
        return redirect()->route('admin.admin.index')->with('success', '编辑成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        admin_has_permission('Admin-admin');
        $admin->delete();
        return redirect()->route( 'admin.admin.index' )->with( 'success' , '删除' );
    }

    public function adminSetRoleStore(Admin $admin, Request $request)
    {
        admin_has_permission('Admin-admin');
        $admin->syncRoles($request->roles);
        return back()->with('success', '设置成功');
    }
}
