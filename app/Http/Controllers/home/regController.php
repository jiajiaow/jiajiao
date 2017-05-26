<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
use App\Http\Requests;
use iscms\Alisms\SendsmsPusher as Sms;
use \Cookie;
use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;

class regController extends Controller
{
	public function __construct(Sms $sms)
    {
        $this->sms=$sms;
    }

    //教师注册
    public function doreg(Request $request){
        //var_dump($_POST);
        //地区id
        $city_id = session('regionid');
//        dd(session('regionid'));
        //手机号码
        $phone = $_POST['mobile'];
        //密码
        $pass = md5($_POST['pw1']);
        //验证码
        $yzm = $_POST['mobile_code'];
        $data = [
            'tc_phone'=>$phone,
            'tc_pass'=>$pass,
            'tc_city_id'=>$city_id,
            'tc_reg_date'=>date("Y-m-d h:i:s",time()),
        ];
       // var_dump($request->cookie());
        //查询教师表信息是否存在
        $laos = \DB::table('jjw_teachers')->where('tc_phone',$phone)->get();
        if(count($laos) == '0'){
            if($request->cookie('phone') == $phone){
                if($request->cookie('code') == $yzm){
                    //插入教师表
                    $inse = \DB::table('jjw_teachers')->insert($data);
//                    //删除验证码
//                    $sc = \DB::table('jjw_code')->where('id',$lis->id)->delete();
                    //成功返回
                    return "y";
                }else{
                    ////成功返回 n 验证码失效
                    return "n";
                }
            }else{
                return "f";
            }
        }else{
            ////成功返回 ls 教师已经注册
            return "ls";
        }

    }

    //注册验证码
    public function docode(Request $request){
        $phone = $_POST['phone'];
        $zt = $_POST['zt'];
        $yzm = rand(1000,9999);
        Cookie::queue("code", $yzm,5);
        Cookie::queue("phone", $phone,5);
        if(session('Template') == '1'){
            $result=$this->sms->send("$phone","栗志家教","{zt:'{$zt}','code':'{$yzm}'}",'SMS_61850084');
        }else if(session('Template') == '2' || session('Template') == '4'){
            $config = [
                'app_key'    => '23746117',
                'app_secret' => 'f0e278be87e2663cb6f47bb876c29deb',
            ];
            //dd($code);
            $client = new Client(new App($config));
            $req    = new AlibabaAliqinFcSmsNumSend;
            $req->setRecNum($phone)
                ->setSmsParam(['code' => $yzm,'zt'=> $zt ])
                ->setSmsFreeSignName('德栗家教')
                ->setSmsTemplateCode('SMS_62215171');
            $resp = $client->execute($req);
            
           // $result=$this->sms->send("$phone","德栗家教","{zt:'{$zt}','code':'{$yzm}'}",'');
        }
        return "y";
    }

}
