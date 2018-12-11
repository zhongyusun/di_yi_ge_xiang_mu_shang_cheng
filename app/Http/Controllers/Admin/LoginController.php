<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // 加载后台登录模板的方法
    public function login()
    {

        return view('admin.login.login');
    }

    // 处理后台登录表单提交数据的方法
    public function loginpost(LoginRequest $request)
    {
        // 默认前台守卫是 'guard' => 'web',而我们现在处理后台登录用户信息的，所以不用前台注册用户的信息
        // 所谓的守卫，最终指向的还是一个表模型，验证的数据通过交给守卫来处理，也就是提交过来的数据去守卫指向
        // 的表里面去找，如果找到了，就可以往下执行，如果找不到就不能执行。这是后台管理员进入后台的必经之路！
        // 这里就是，用户提交过来的表单数据，守卫admin指向的模型也就是admins表里面找匹配的数据

        //1.自定义守卫 config/auth.php  [guards , providers]
        //2.Admin 模型需要继承Authenticatable类,参考默认 User 模型
        //3.必须制定看守器
        //因为密码自动加密，所以在填充管理员的时候要加密密码
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
//            dump('111');
//            dd(11);
            return redirect()->route('admin.index')->with('success','登录成功');
        }
        return redirect()->back()->with('danger', '用户名或密码不正确');
    }

    //退出
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
