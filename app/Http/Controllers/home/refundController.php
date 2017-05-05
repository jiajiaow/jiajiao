<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class refundController extends Controller
{
    public function httpclient($url,$data){
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
    public function index(Request $request)
    {
        $oid = $request->input('oid');
        $ms = $request->input('ms');

        date_default_timezone_set('PRC');
        error_reporting(0);
        set_time_limit(0);

        $ary = array(
            'token'=>'4343c0b465d0478e89a3265c6941585c',//填写用户TOKEN
            'mod'=>'tuikuan',//退款模式
            'oid'=> $oid//退款的订单号
        );
        $content = $this::httpclient("http://api.btjson.com/$ms",$ary);
        $josn = json_decode($content);
        //200成功
        return $josn->code;

    }
}
