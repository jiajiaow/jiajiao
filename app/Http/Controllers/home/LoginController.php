<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
use App\Http\Requests;
use iscms\Alisms\SendsmsPusher as Sms;


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
            //验证码登录
            $list = DB::select("select tc.*,code.* from jjw_code as code,jjw_teachers as tc where code.code_phone = '{$phone}'  AND code.code_yzm = '{$yzm}' AND code.code_phone =tc.tc_phone  AND code.id =(select MAX(id) from jjw_code where code_phone = '{$phone}')");
           // dd($list);
            if($list != null){
                //设置session
                session(['tc_phone' => $list[0]->tc_phone]);
                //删除验证码
                $sc = \DB::table('jjw_code')->where('id',$list[0]->id)->delete();
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
                session(['tc_phone' => $list->tc_phone]);
                //重定向
                return redirect('/gerenzhongx.html');
            }else{
                //重定向
                return redirect('/login.html')->with('msg','账号不存在,请重新输入!');
            }
        }

    }
    //退出登录
    public function outlogin(){
        session()->forget("tc_phone");
        return redirect('/login.html')->with('msg','已退出登录!');
    }

    //教师注册
    public function doreg(Request $request){
        //var_dump($_POST);
        $phone = $_POST['mobile'];
        $pass = $_POST['pw1'];
        $yzm = $_POST['mobile_code'];
        $data = [
            'tc_phone'=>$phone,
            'tc_pass'=>md5($pass),
        ];
        //查询教师表信息是否存在
        $laos = \DB::table('jjw_teachers')->where('tc_phone',$phone)->get();
        if(count($laos) == '0'){
           // var_dump($data);
            //查询验证码MAX最大ID
            $list = DB::select("select * from jjw_code where code_phone = '{$phone}'  AND code_yzm = '{$yzm}' AND id =(select MAX(id) from jjw_code where code_phone = '{$phone}')");
            //var_dump($results);
            foreach($list as $v){
                $lis=$v;
            }
            //判断lis || list中验证码是否存在
            if(isset($lis)){
                if($lis != null){
                    //插入教师表
                    $inse = \DB::table('jjw_teachers')->insert($data);
                    //删除验证码
                    $sc = \DB::table('jjw_code')->where('id',$lis->id)->delete();
                    //成功返回
                    return "y";
                }
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
        $yzm = rand(1000,9999);
        $result=$this->sms->send("$phone","家教网","{'code':'{$yzm}'}",'SMS_35975005');
        $data = [
            'code_phone'=>$phone,
            'code_yzm'=>$yzm,
        ];
        $list = \DB::table('jjw_code')->insert($data);
        return "y";
    }

    public function gerenzhongx(){
        echo "个人中心:用户".Session('tc_phone');
    }

}
