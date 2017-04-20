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
    public function index(Request $request)
    {
        if(session('Template') == '2'){
            //dd($request->all());
            return view('delijiajiao.yuyuelaoshi');
        }else{
            return view('home.yuyuelaoshi');
        }

    }
    public function register(Request $request)
    {
        if(session('Template') == '2'){

            $phone = $request->input('phone');
            $code = rand(1000,9999);
            //$code = '1111';
            Cookie::queue('code',$code,3);
            Cookie::queue('phone',$phone,3);
            $config = [
                'app_key'    => '23746117',
                'app_secret' => 'f0e278be87e2663cb6f47bb876c29deb',
            ];
            //dd($code);
            $client = new Client(new App($config));
            $req    = new AlibabaAliqinFcSmsNumSend;

            $req->setRecNum($phone)
                ->setSmsParam(['code' => $code])
                ->setSmsFreeSignName('德栗家教')
                ->setSmsTemplateCode('SMS_60940366');
                $resp = $client->execute($req);
                return 'y';
        }else{
            $phone = $request->input('phone');
            $code = rand(1000,9999);
            //$code = '1111';
            Cookie::queue('code',$code,3);
            Cookie::queue('phone',$phone,3);
            $config = [
                'app_key'    => '23746117',
                'app_secret' => 'f0e278be87e2663cb6f47bb876c29deb',
            ];
            //dd($code);
            $client = new Client(new App($config));
            $req    = new AlibabaAliqinFcSmsNumSend;

            $req->setRecNum($phone)
                ->setSmsParam(['code' => $code])
                ->setSmsFreeSignName('德栗家教')
                ->setSmsTemplateCode('SMS_60940366');
                $resp = $client->execute($req);
                return 'y';
        }

    }
    public function registerdo(Request $request)
    {
        $ucode = $request->input('code');
        $scode = Cookie::get('code');
        if($ucode == $scode){
            Cookie::forget('code');
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
        if(session('Template') == '2'){
            if($phone == Cookie::get('phone')){
                $re = DB::table('jjw_user')->where('phone',$phone)->first();
                if($re){
                    $userid = DB::table('jjw_user')->where('phone',$phone)->first();
                    $orderid = DB::table('jjw_order')->insertGetId(['user_id' => $userid->u_id,'user_name' => $user,'user_phone' => $phone,'subject_id' => $km,'time' => time(),'city_id' => $regionid]);

                    return view('delijiajiao.yuyuexx',['phone' => $phone,'orderid' => $orderid]);
                }else{
                    $userid = DB::table('jjw_user')->insertGetId(['name' => $user,'phone' => $phone,'password' => $password,'city_id' => $regionid]);
                    $orderid = DB::table('jjw_order')->insert(['user_id' => $userid,'user_name' => $user,'user_phone' => $phone,'subject_id' => $km,'time' => time(),'city_id' => $regionid]);
                    return view('home.yuyuexx',['phone' => $phone,'orderid' => $orderid]);
                }
            }else{
                $request->session()->flash('error', "layer.msg('非法请求', {icon: 5});");
                return back();
            }
        }else{
            if($phone == Cookie::get('phone')){
                $re = DB::table('jjw_user')->where('phone',$phone)->first();
                if($re){
                    $userid = DB::table('jjw_user')->where('phone',$phone)->first();
                    $orderid = DB::table('jjw_order')->insertGetId(['user_id' => $userid->u_id,'user_name' => $user,'user_phone' => $phone,'subject_id' => $km,'time' => time(),'city_id' => $regionid]);

                    return view('delijiajiao.yuyuexx',['phone' => $phone,'orderid' => $orderid]);
                }else{
                    $userid = DB::table('jjw_user')->insertGetId(['name' => $user,'phone' => $phone,'password' => $password,'city_id' => $regionid]);
                    $orderid = DB::table('jjw_order')->insert(['user_id' => $userid,'user_name' => $user,'user_phone' => $phone,'subject_id' => $km,'time' => time(),'city_id' => $regionid]);
                    return view('home.yuyuexx',['phone' => $phone,'orderid' => $orderid]);
                }
            }else{
                $request->session()->flash('error', "layer.msg('非法请求', {icon: 5});");
                return back();
            }
        }
    }
    public function yuyuexxform(Request $request)
    {
        $orderid = $request->input('orderid');
        $data = DB::table('jjw_position_county')->where('city_id',session('regionid'))->get();
        if(session('Template') == '2'){
            return view('home.yuyuexxform',['orderid' => $orderid,'data' => $data]);
        }else{
            return view('home.yuyuexxform',['orderid' => $orderid,'data' => $data]);
        }
    }
    public function StudentAdd(Request $request)
    {
        //订单id
        $oid = $request->input('oid');
        //上课的时间
        $per = $request->input('chi').','.$request->input('shi');
        //家教要求
        $teacher_info = $request->input('teacher_info');
        //判断是否是空 如果空给默认数
        if($teacher_info == ''){
            $teacher_info = '有责任心，熟悉授课内容，有家教经验优先';
        }
        //拼接每周上课的具体时间段
        $sk_times = $request->input('sk_times1').$request->input('sk_times2').$request->input('sk_times3').$request->input('sk_times4').$request->input('sk_times5').$request->input('sk_times6').$request->input('sk_times7').$request->input('sk_times8').$request->input('sk_times9').$request->input('sk_times10').$request->input('sk_times11').$request->input('sk_times12').$request->input('sk_times13').$request->input('sk_times14').$request->input('sk_times15').$request->input('sk_times16').$request->input('sk_times17').$request->input('sk_times18').$request->input('sk_times19').$request->input('sk_times20').$request->input('sk_times21').$request->input('sk_times22');

        $input = $request->except(['oid','fdlx','chi','shi','teacher_info','sk_times1','sk_times2','sk_times3','sk_times4','sk_times5','sk_times6','sk_times7','sk_times8','sk_times9','sk_times10','sk_times11','sk_times12','sk_times13','sk_times14','sk_times15','sk_times16','sk_times17','sk_times18','sk_times19','sk_times20','sk_times21','sk_times22']);
        $re = DB::table('jjw_order')->where('id',$oid)->update($input);

        DB::table('jjw_order')->where('id',$oid)->update(['per_week' => $per,'teacher_info' => $teacher_info,'sk_times' => $sk_times]);
        $request->session()->flash('js', "$('#cheng_show').css('display','block');");
        return view('delijiajiao.yycg');
    }
}
