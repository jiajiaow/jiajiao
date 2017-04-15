<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
use App\Http\Requests;
use iscms\Alisms\SendsmsPusher as Sms;
use \Cookie;
class LoginController extends Controller
{
    public function __construct(Sms $sms)
    {
        $this->sms=$sms;
    }

    //教师登录
    public function dologin(Request $request){
        //判断是否是验证码登录  有code是手机验证码登录
        if(isset($_POST['code'])){
            $phone = $_POST['phone'];
            $yzm = $_POST['code'];
            $list = \DB::table('jjw_teachers')->where('tc_phone',$phone)->first();
            if($list != null AND $request->cookie('code') == $yzm){
                //设置session
                session(['tc_phone' => $list->tc_phone,'tc_name'=>$list->tc_name]);
                //重定向
                return redirect('/gerenzhongx.html');

            }else{
                //重定向
                return redirect('/login.html')->with('msg','账号不存在,请重新输入!');
            }
        }else{
            //账号密码登录
            $phone = $_POST['phone'];
            $pass = md5($_POST['pwd']);
            //查询账号密码是否存在
            $list = \DB::table('jjw_teachers')->where('tc_phone',$phone)->where('tc_pass',$pass)->first();

            if($list != null){
                //设置session
                session(['tc_phone' => $list->tc_phone,'tc_name'=>$list->tc_name]);
                //重定向
                return redirect('/teacherinfo.html');
            }else{
                //重定向
                return redirect('/login.html')->with('msg','账号不存在,请重新输入!');
            }
        }

    }
    //退出登录
    public function outlogin(){
        session()->forget("tc_phone");
        session()->forget("tc_name");
        return redirect('/login.html')->with('msg','已退出登录!');
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
            ////成功返回 ls 教师已经注册
            return "ls";
        }

    }

    //教师注册验证码
    public function docode(Request $request){
        $phone = $_POST['phone'];
        $zt = $_POST['zt'];
        $yzm = rand(1000,9999);
        Cookie::queue("code", $yzm, 5);
        $result=$this->sms->send("$phone","栗志家教","{zt:'{$zt}','code':'{$yzm}'}",'SMS_61850084');
        return "y";
    }

    public function gerenzhongx(){
        echo "个人中心:用户".Session('tc_phone');
    }

}
