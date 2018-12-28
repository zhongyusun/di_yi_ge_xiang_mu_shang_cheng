<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\RegisterRequest;
use App\Notifications\ResetPasswordNotify;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['register', 'login', 'registerpost', 'loginPost','qqLogin'],
        ]);
    }

    //注册
    public function register()
    {
        return view('home.register.regist');
    }

    //注册数据
    public function registerpost(RegisterRequest $request)
    {
        //接受所有请求数据
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        $data['token'] = str_random(50);//给每个注册用户随机一个字符串

        $data['icon'] = asset('icon/1.jpg.jpg');//默认头像

        $data['membership'] = 0;

        if (filter_var($data['account'], FILTER_VALIDATE_EMAIL)) {
            //dd(1);
            //修改数据表中 email_verified_at 字段
            $data['email_verified_at'] = now();//now()函数获取当前时间
            $data['email'] = $data['account'];
        } else {
            //dd(2);
            //dd(now());
            $data['mobile_verified_at'] = now();//now()函数获取当前时间
            $data['mobile'] = $data['account'];
            $data['email'] = '';
        }
        //dd(1);
        User::create($data);
        return redirect()->route('home.login')->with('success', '注册成功');
    }


    //加载登录页面
    public function login(Request $request)
    {
        //dd($request->from);
        return view('home.login.login');
    }


    //登录提交
    public function loginPost(Request $request)
    {
        //dd($request->all());
        //验证
        $this->validate($request, [
            'account' => 'required',
            'password' => 'required|min:3'
        ], [
            'account.required' => '请输入邮箱或者手机号',
            'password.required' => '请输入登录密码',
            'password.min' => '密码不得少于3位置'
        ]);
        if(filter_var($request['account'],FILTER_VALIDATE_EMAIL)){
            $data['email'] = $request['account'];
        }else{
            $data['mobile'] = $request['account'];
        }
        $data['password'] = $request['password'];
        if (\Auth::attempt($data, $request->remember)) {
            //登录成功，跳转到首页
            if ($request->from) {

                return redirect($request->query('from'))->with('success', '登录成功');
            }
            return redirect()->route('home.home')->with('success', '登录成功');
        }

        return redirect()->back()->with('danger', '用户名密码不正确');
    }

    //扣扣登录
    public function qqLogin(){

        return Socialite::with('qq')->redirect();
    }

    //注销登录
    public function logout()
    {
        \Auth::logout();

        return redirect()->route('home.home');
    }


    //修改密码视图
    public function changepassword()
    {
        //dd(1);
        return view('home.changepassword.password');
    }

    //重置密码，发送邮件
    public function passwordstore(Request $request)
    {
        //dd($request->all());
        //进行表单验证
        $this->validate($request, ['email' => 'required|email'], [
            'email.required' => '请输入邮箱',
            'email.email' => '邮箱格式不正确'
        ]);
        //根据用户提交来的邮箱去数据表查找数据
        $user = User::where('email', $request->email)->first();
        //dd($user);
        //dd($user);
        if ($user) {
            //发邮件
            $user->notify(new ResetPasswordNotify($user->token));
            return back()->with('success', '邮件发送成功');
        }
        return back()->with('danger', '该邮箱未注册');
    }

    //收到邮件后点击链接进行密码重置
    public function restpasswordview($token)
    {
        //dd(3);
        $user = User::where('token', $token)->first();
        if (!$user) {
            return redirect('/');
        }
        return view('home.changepassword.reset_password', compact('token'));
    }

    //
    public function restpassword($token, Request $request)
    {
        $this->validate($request, ['password' => 'required|confirmed'], ['password.required' => '请输入新密码', 'password.confirmed' => '两次输入密码不一致']);
        $user = User::where('token', $token)->first();
        if (!$user) {
            return redirect('/');
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('home.login')->with('success', '密码修改成功');
    }
}
