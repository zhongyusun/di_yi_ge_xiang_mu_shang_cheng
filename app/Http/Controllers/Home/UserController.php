<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //注册
    public function register()
    {
        return view('home.register.regist');
    }


    public function registerpost(RegisterRequest $request)
    {
        // dd($request->all());
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        $data['icon'] = asset('icon/1.jpg.jpg');
//        dd($data);
        $data['membership'] = 0;
        User::create($data);
        return redirect()->route('home.login')->with('success', '注册成功');
    }


    //加载登录页面
    public function login(Request $request)
    {
        //dd($request->all());
        return view('home.login.login');
    }


    //登录提交
    public function loginPost(Request $request)
    {
        //dd($request->all());
        //验证
        $this->validate($request, [
            'email' => 'email',
            'password' => 'required|min:3'
        ], [
            'email.email' => '请输入邮箱',
            'password.required' => '请输入登录密码',
            'password.min' => '密码不得少于3位置'
        ]);
        //执行登录
//        dd(1);
        $credentials = $request->only('email', 'password');
        if (\Auth::attempt($credentials, $request->remember)) {
            //登录成功，跳转到首页
//            if ($request->from) {
//                return redirect()->route('home.home')->with('success', '登录成功');
//            }
            return redirect()->route('home.home')->with('success', '登录成功');
        }

        return redirect()->back()->with('danger', '用户名密码不正确');
    }

    //注销登录
    public function logout()
    {
        \Auth::logout();

        return redirect()->route('home.home');
    }
}
