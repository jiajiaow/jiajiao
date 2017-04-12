<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
use Cookie;
use DB;
class yuyueController extends Controller
{
    public function index()
    {
        return view('home.yuyuelaoshi');
    }
    public function register(Request $request)
    {
        $phone = $request->input('phone');
        $code = '1111';
        Cookie::queue('code',$code,3);
        Cookie::queue('phone',$phone,3);
        // $config = [
        //     'app_key'    => '23746117',
        //     'app_secret' => 'f0e278be87e2663cb6f47bb876c29deb',
        // ];
        // //dd($code);
        // $client = new Client(new App($config));
        // $req    = new AlibabaAliqinFcSmsNumSend;

        // $req->setRecNum($phone)
        //     ->setSmsParam(['code' => $code])
        //     ->setSmsFreeSignName('德栗家教')
        //     ->setSmsTemplateCode('SMS_60940366');
        //     $resp = $client->execute($req);
            return 'y';

    }
    public function registerdo(Request $request)
    {
        $ucode = $request->input('code');
        $scode = Cookie::get('code');
        if($ucode == $scode){
            //Cookie::forget('code');
            return 'y';
        }else{
            return 'n';
        }
    }
    public function doyyform(Request $request)
    {
        $user = $request->input('lxr');
        $km = $request->input('km');
        $phone = $request->input('phone');
        $password = substr($phone,7,4);
        $regionid = $request->session()->get('regionid');
        if($phone == Cookie::get('phone')){
            $re = DB::table('jjw_user')->where('phone',$phone)->first();
            if($re){
                return '账号存在';
            }else{
                $userid = DB::table('jjw_user')->insertGetId(['name' => $user,'phone' => $phone,'password' => $password,'city_id' => $regionid]);
                $order = DB::table('jjw_order')->insert(['user_id' => $userid,'user_name' => $user,'user_phone' => $phone,'subject_id' => $km,'time' => time()]);
                return 'ok';
            }
        }else{
            $request->session()->flash('error', "layer.msg('非法请求', {icon: 5});");
            return back();
        }
    }
}
