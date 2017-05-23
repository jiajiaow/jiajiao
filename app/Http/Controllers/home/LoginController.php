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
class LoginController extends Controller
{
    /*public function __construct(Sms $sms)
    {
        $this->sms=$sms;
    }*/
    //教师登录
    public function dologin(Request $request){
        //判断是否是验证码登录  有code是手机验证码登录
        if(isset($_POST['code'])){
            $phone = $_POST['phone'];
            $yzm = $_POST['code'];
            $list = \DB::table('jjw_teachers')->where('tc_phone',$phone)->first();
            //dd($list);
            if($list != null AND $request->cookie('code') == $yzm){
                //设置session
                $inse = \DB::table('jjw_teachers')->where('tc_phone',$phone)->update(['tc_dltimes'=>time()]);
                session(['tc_phone' => $list->tc_phone,'tc_name'=>$list->tc_name,'tc_id' => $list->id]);
                //重定向  //判断是德栗还是栗志  1是栗志 2是德栗
                if(session('Template') =='1'){
                    return redirect('/teacherinfo.html');
                }else if(session('Template') =='2'){
                    return redirect('/teacherinfo.html');
                }
            }else{
                //重定向
                return redirect('/login.html')->with('msg','账号不存在,请重新输入!');
            }
        }else{
            //账号密码登录
            $phone = $_POST['phone'];
            $pass = md5($_POST['pwd']);
            //查询账号密码是否存在
            $list = \DB::table('jjw_teachers')->where('tc_phone',$phone)->first();
            if($list != null){
                if($list->tc_pass != $pass){
                    return redirect('/login.html')->with('msg','密码错误,请重新输入!');
                }else{
                    //设置session
                    $inse = \DB::table('jjw_teachers')->where('tc_phone',$phone)->update(['tc_dltimes'=>time()]);
                    session(['tc_phone' => $list->tc_phone,'tc_name'=>$list->tc_name,'tc_id' => $list->id]);
                    //重定向  //判断是德栗还是栗志  1是栗志 2是德栗
                    if(session('Template') =='1'){
                        return redirect('/teacherinfo.html');
                    }else if(session('Template') =='2'){
                        return redirect('/teacherinfo.html');
                    }
                }
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
        session()->forget("st_phone");
        session()->forget("st_name");
        if(session('dlzt') == '2'){
            session()->forget("dlzt");
            //return redirect('/stlogin.html')->with('msg','尊敬的学员您已退出登录!');
            return redirect('/')->with('msg','尊敬的学员您已退出登录!');
        }else{
            session()->forget("dlzt");
            // return redirect('/login.html')->with('msg','尊敬的教师您已退出登录!');
            return redirect('/')->with('msg','尊敬的教员您已退出登录!');
        }
    }

    /*//教师注册
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

    //教师注册验证码
    public function docode(Request $request){
        $phone = $_POST['phone'];
        $zt = $_POST['zt'];
        $yzm = rand(1000,9999);
        Cookie::queue("code", $yzm,5);
        Cookie::queue("phone", $phone,5);
        if(session('Template') == '1'){
            $result=$this->sms->send("$phone","栗志家教","{zt:'{$zt}','code':'{$yzm}'}",'SMS_61850084');
        }else if(session('Template') == '2'){
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
    }*/

    //学生登陆
    public function dostlogin(Request $request){

        //判断是否是验证码登录  有code是手机验证码登录
        if(isset($_POST['code'])){
            $phone = $_POST['phone'];
            $yzm = $_POST['code'];
            $list = \DB::table('jjw_user')->where('phone',$phone)->first();
            //dd($list);
            if($list != null AND $request->cookie('code') == $yzm){
                //设置session
                session(['st_phone' => $list->phone,'st_name'=>$list->name]);
                //重定向  //判断是德栗还是栗志  1是栗志 2是德栗
                if(session('Template') =='2'){
                    return redirect('/stinfo.html');
                }else if(session('Template') =='2'){
                    return redirect('/stinfo2.html');
                }
            }else{
                //重定向
                return redirect('/login.html')->with('msg','账号不存在,请重新输入!');
            }
        }else{
            //账号密码登录
            //dd($_POST);
            $phone = $_POST['phone'];
            $pass = $_POST['pwd'];
            session(['dlzt' => $_POST['dlzt']]);
            //查询账号密码是否存在
            $list = \DB::table('jjw_user')->where('phone',$phone)->first();
            //dd($list);
            if($list != null){
                if($list->password != $pass) {
                    return redirect('/login.html')->with('msg','密码错误,请重新输入!');
                }else{
                    //设置session
                    session(['st_phone' => $list->phone, 'st_name' => $list->name]);
                    //重定向  //判断是德栗还是栗志  1是栗志 2是德栗
                  //  if (session('Template') == '2') {
                        return redirect('/stinfo.html');
                   // } else if (session('Template') == '2') {
                   //     return redirect('/stinfo.html');
                   // }
                }
            }else{
                //重定向
                return redirect('/login.html')->with('msg','账号不存,请重新输入!');
            }
        }
    }

    //修改密码
    public function doeditpass(Request $request){
        //判断验证码
       // dd($_POST);
       if($_POST['mobile_code']) {
           //判断输入过来的手机是否是发送验证码的手机
           if ($request->cookie('phone') == $_POST['phone']) {
               //判断验证码
               if ($request->cookie('code') == $_POST['mobile_code']) {
                   $pass = MD5($_POST['onepass']);
                 /*  $list = \DB::table('jjw_teachers')->where('tc_phone', session('tc_phone'))->first();
                   if ($list->tc_pass != $pass) {
                       // echo "原密码错误";die;
                       return back()->with('msg', '原密码错误,请重新输入!');
                   } else {*/
                       // echo "原密码正确";
                     //  if ($_POST['onepass'] == $_POST['towpass']) {
                           //echo "修改密码";
                           $list = \DB::table('jjw_teachers')->where('tc_phone', session('tc_phone'))->update(['tc_pass' => $pass]);
                           return back()->with('msg', '密码修改成功!');
                      // } else {
                           // echo "二次密码不一致";die;
                         //  return back()->with('msg', '二次新密码不一致,请重新输入!');
                      // }
                  // }
               } else {
                   return back()->with('msg', '验证码错误,请重新输入!');
               }
           } else {
               return back()->with('msg', '非法请求!');
           }
       }else{
           return back()->with('msg', '请输入验证码!');
       }
    }

}
