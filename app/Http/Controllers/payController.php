<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class payController extends Controller
{
    //自定义方法
    public function httpclient($url,$data)
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_HEADER,0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($data));
        $content = curl_exec($ch);
        curl_close($ch);
        return $content;
    }
    //回调函数
    public function callback(Request $request)
    {

        date_default_timezone_set('PRC');
        error_reporting(0);
        set_time_limit(0);

        $token = '4343c0b465d0478e89a3265c6941585c';//填写用户TOKEN
        $code = $_POST['code'];//支付结果状态码
        $oid = $_POST['oid'];//订单号
        $sign = $_POST['sign'];//安全验证
        $signs = md5($oid.$token);
        if($signs == $sign){
            DB::table('jjw_order')->where('pay_id',$oid)->update(['pay' => '1']);
        }
    }
    //支付宝
    public function alipay(Request $request)
    {
        //本地订单id
        $id = $request->input('order_id');
        //钱
        $price = $request->input('money');
        //
        date_default_timezone_set('PRC');
        error_reporting(0);
        set_time_limit(0);

        $ary = array(
            'token'=>'4343c0b465d0478e89a3265c6941585c',//填写用户TOKEN
            'mod'=>'pay',//模式,pay:支付模式,list:返回所有订单信息
            'index'=>1,//模式为list的时候使用,用来指定订单当前页,订单信息每页显示10条
            'oid'=>null,//模式为list的时候使用,用来指定查询某个订单的信息
            'title'=>'家教网费用',//商品名称
            //'price'=> $price.'00',//商品价格,请填写整数,以分为单位,例:1元,就填写100
            'price'=> $price.'00',//商品价格,请填写整数,以分为单位,例:1元,就填写100
            'curl'=>'http://www.delijiajiao.com/callback',//回调地址,用户支付成功后服务器会POST请求到这个地址,携带订单数据
            'furl'=>'http://www.delijiajiao.com/PaymentSuccess'//支付成功后跳转的地址
        );
         $content = $this->httpclient('http://api.btjson.com/alipay',$ary);
         if($ary['mod'] == 'pay'){
             $json = json_decode($content,true);
             //dd($json);
             $oid = $json['data']['out_trade_no'];//返回的订单号,可存在自己的数据库中
             DB::table('jjw_order')->where('id',$id)->update(['pay_id' => $oid]);
             if($json['data']['sign'] == ''){
                 echo $json['data'];
                 exit();
             }
         }
         if($ary['mod'] == 'list'){
             echo $content;
             exit();
         }
         return view('alipay.Alipay',['json' => $json,'price' => $price]);
     }
     //微信pay
    public function wechatpay(Request $request)
    {
        //$url = session('_previous');
        //dd($url);
        $id = $request->input('order_id');
        $price = $request->input('money');

        date_default_timezone_set('PRC');
        error_reporting(0);
        set_time_limit(0);

        $ary = array(
            'token'=>'4343c0b465d0478e89a3265c6941585c',//填写用户TOKEN
            'mod'=>'pay',//模式,pay:支付模式,list:返回所有订单信息
            'index'=>1,//模式为list的时候使用,用来指定订单当前页,订单信息每页显示10条
            'oid'=>null,//模式为list的时候使用,用来指定查询某个订单的信息
            'title'=>'家教网费用',//商品名称
            'price'=> $price.'00',//商品价格,请填写整数,以分为单位,例:1元,就填写100
            'curl'=>'http://www.delijiajiao.com/callback'//回调地址,用户支付成功后服务器会POST请求到这个地址,携带订单数据
        );
         $content = $this->httpclient('http://api.btjson.com/weixinpay',$ary);
         if($ary['mod'] == 'pay'){
             $json = json_decode($content,true);
             //dd($json);
             $oid = $json['data']['oid'];//返回的订单号,可存在自己的数据库中
             if($json['data']['url'] != ''){
                DB::table('jjw_order')->where('id',$id)->update(['pay_id' => $oid]);
                return view('wx.wx',['url' => $json['data']['url'],'price' => $price,'stime' => $json['stime'],'oid' => $json['data']['oid']]);
             }else{
                 echo $json['data'];
             }
         }
         if($ary['mod'] == 'list'){
             echo $content.'2';
         }
     }
     public function PaymentSuccess()
     {
        return view('PaymentSuccess.PaymentSuccess');
     }
     public function wechatpayquery(Request $request)
     {
        $oid = $request->input('oid');
        $re = DB::table('jjw_order')->where('pay_id',$oid)->first();
        //dd($re);
        if($re->pay == '1'){
            return 'ok';
        }else{
            return 'no';
        }
     }
}