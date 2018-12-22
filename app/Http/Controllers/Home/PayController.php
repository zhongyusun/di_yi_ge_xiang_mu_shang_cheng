<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Good;
use App\Models\Order;
use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//不能用asset生成，
//require_once public_path('') . "/org/php_sdk_v3.0.9/lib/WxPay.Api.php";
require_once public_path('') . "/org/php_sdk_v3.0.9/example/WxPay.NativePay.php";

class PayController extends CommonController
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['notify'],
        ]);
        //因为如要执行父级构造方法,运行父级构造方法,不然当前构造方法会覆盖父级构造方法
        parent::__construct();
    }

    //结算页
    public function index(Request $request)
    {
        //+dd(1);
        //根据订单号获取订单数据
        $order = Order::where('number', $request->query('number'))->first();
        //dd($order);
        $sites = Site::all()->where('id', $order->site_id)->first();
        //dd($sites);
        //获取当前用户的所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //============生成位置支付二维码==========//
        //在微信开放平台帮助中心
        //1.必须要服务器环境下测试
        //2.框架的时区要设置 PRC
        //$input = new WxPayUnifiedOrder();
        $input = new \WxPayUnifiedOrder();
        $input->SetBody(hd_config('site.site_name') ? hd_config('site.site_name') : '桀骜(JIEAO.CN)-正品低价，品质保证，轻松购物！');
        $input->SetAttach($request->query('number'));
        $input->SetOut_trade_no("sdkphp123456789" . date("YmdHis"));
        $input->SetTotal_fee("1");
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url(route('home.notify'));
        $input->SetTrade_type("NATIVE");
        $input->SetProduct_id("123456789");
        $notify = new \NativePay();
        $result = $notify->GetPayUrl($input);
        //dd($result);
        $url2 = $result["code_url"];
        return view('home.pay.index', compact('order', 'sites', 'carts', 'url2'));
    }
    //微信支付之后回调通知
    //******该方法不可以刷新浏览器测试,需要扫码支付测试
    //******该方法不能做登录拦截
    //******不可以有csrf 令牌验证
    public function notify()
    {
        //接受微信 post 通知我们的数据
        $result = simplexml_load_string(file_get_contents('php://input'), 'simpleXmlElement', LIBXML_NOCDATA);
        //file_put_contents('app.php', var_export($result, true));
        $datas=Order::where('number', $result->attach)->orderDetail;
        foreach ($datas as $data){
            //$data['good_id'];
            Good::where('id',$data['good_id'])->get();
        }
        if ($result->result_code == 'SUCCESS' && $result->return_code == 'SUCCESS') {
            //付款成功
            //更新自己的状态状态
            //$result->attach我们给微信附加的参数
            Order::where('number', $result->attach)->update(['status' => 2]);
            //告诉微信我们已经收到通知
            echo "<xml>
   <return_code><![CDATA[SUCCESS]]></return_code>
   <return_msg><![CDATA[OK]]></return_msg>
</xml>";
            return true;
        }
    }

    /**
     * 检测订单是否已经支付
     * @return array
     */
    public function checkOrderStatus()
    {
        $number = \request()->number;
        $order = Order::where('number', $number)->first();
        if ($order['status'] == 2) {
            //说明已经支付
            return ['code' => 1, 'msg' => '已支付'];
        } else {
            //说明未支付
            return ['code' => 0, 'msg' => '未支付'];
        }
    }

}
