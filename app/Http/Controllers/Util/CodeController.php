<?php

namespace App\Http\Controllers\Util;

use App\User;
use App\Notifications\RegisterNotify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Qcloud\Sms\SmsSingleSender;

class CodeController extends Controller
{
    //发送验证码
    public function send(Request $request)
    {
        //获得所有请求的数据
        //dd($request->all());
        //dd($request->username);

        //获取前台发送来的手机号或者邮箱
        $account = \request()->username;//request函数,在使用的时候可以不加命名空间
        //dd($account);

        //随机四位验证码
        $code = $this->random();

        //判断是否为邮箱或者是手机号(filter_var — 使用特定的过滤器过滤一个变量)
        if (filter_var($account, FILTER_VALIDATE_EMAIL)) {
            //邮箱
            //dd(1);测试判断是否生效

            //获取User模型对象
            $user = User::firstOrNew(['email' => $request->username]);//user模型对象

            //给用户发送邮件通知
            //需要创建邮件通知类:php artisan make:notification RegisterNotification
            //这个时候需要配置 env 中有关邮件的配置,需要借助:composer require houdunwang/laravel组件来修改 env 文件
            $user->notify(new RegisterNotify($code));

        } else {
            //手机
            //dd(2);测试判断是否生效
            // 短信应用SDK AppID
            $appid = config('qcloudsms.appid'); // 1400开头

            // 短信应用SDK AppKey
            $appkey = config('qcloudsms.appkey');

            // 需要发送短信的手机号码
            $phoneNumbers = $account;

            // 短信模板ID，需要在短信应用中申请
            $templateId = 186758;  // NOTE: 这里的模板ID`7839`只是一个示例，真实的模板ID需要在短信控制台中申请

            $smsSign = "章风门生活日记"; // NOTE: 这里的签名只是示例，请使用真实的已申请的签名，签名参数使用的是`签名内容`，而不是`签名ID`

            try {
                $ssender = new SmsSingleSender($appid, $appkey);
                $result = $ssender->send(0, "86", $phoneNumbers,
                    $code."为您的登录验证码，请于10分钟内填写。如非本人操作，请忽略本短信。", "", "");
                $rsp = json_decode($result);
            } catch (\Exception $e) {
                echo var_dump($e);
                
            }
        }


        //dd(111);
        //将验证码存进session中
        session()->put('code', $code);

        //返回数据
        return ['code' => 0, 'message' => '验证码发送成功'];
    }

    //随机四位验证码
    public function random($len = 4)
    {
        $res = '';
        for ($i = 0; $i < $len; $i++) {
            $res .= mt_rand(0, 9);
        }
        return $res;
    }
}
