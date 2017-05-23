<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use \DB;
use session;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
        //获取当前域名
        public function __construct(Request $request)
        {
            $one = '1';
            $two = '2';
            $three = '3';
            $four = '4';
            //正则表达式
            $pattern = '/([^*]+)\.([^\.\/]+)\.(com|net|org|cn)/';
            //获取绝对url
            $url = $_SERVER['HTTP_HOST'];
            preg_match($pattern,$url,$matches);
            //获取当前域名
            $x = explode(".",$url);
            //dd($x);
            $qz = $x[0];
            $zy = $x[1];
            $hz = $x[2];
            //dd($qz);
            if($qz == 'www'){
                $zlpc = substr($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],0,20);
                $zlurl = substr($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],0,27);
                $dlpc = substr($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],0,19);
                $dlurl = substr($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],0,26);
                //dd($zlpc,$zlurl,$dlpc,$dlurl);
            }else{
                $zlpc = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,16);
                $zlurl = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,23);
                $dlpc = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,15);
                $dlurl = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,22);
                //dd($dlurl);
            }
            if($zlurl == 'www.lizhijiajiao.com/mobile'){
                //查询数据
                $re = DB::table('jjw_position_city')->where('city_id','440100000000')->first();
                //模板
                session(['template' => '3']);
                //地区名称
                session(['regionname' => $re->city_name]);
                //地区id
                session(['regionid' => $re->city_id]);

            }else if($dlurl == 'www.delijiajiao.com/mobile'){
                //dd(session());
                //$request->session()->forget('template');
                //地区id
                session(['regionid' => '440100000000']);
                //模板
                session(['template' => $four]);

                $re = DB::table('jjw_position_city')->where('city_id','440100000000')->first();
                //地区名称
                session(['phone' => $re->phone]);
                session(['regionname' => $re->title]);
                //dd(session());
                //dd(session());
                return;
            }else{
                if($zlurl == 'lizhijiajiao.com/mobile'){
                    $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                    //模板
                    session(['template' => '3']);
                    //地区id
                    session(['regionid' => $re->city_id]);
                    //地区名称
                    session(['regionname' => $re->city_name]);
                }else if($dlurl == 'delijiajiao.com/mobile'){
                    //session()->forget('template');
                    $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                    //模板
                    session(['template' => $four]);
                    //地区id
                    session(['regionid' => $re->city_id]);
                    //地区名称
                    session(['regionname' => $re->title]);
                    session(['phone' => $re->phone]);
                    //dd(session('template'));
                }
            }
            if($zlpc == 'www.lizhijiajiao.com'){
                //地区id
                session(['regionid' => '440100000000']);
                //模板
                session(['template' => '1']);

                //查询数据
                $re = DB::table('jjw_position_city')->where('city_id','440100000000')->first();
                //地区名称
                session(['regionname' => $re->city_name]);
                return 'zlpc';
            }elseif($dlpc == 'www.delijiajiao.com'){

                //地区id
                session(['regionid' => '440100000000']);
                //模板
                session(['template' => $two]);
//dd(session('template'));
                $re = DB::table('jjw_position_city')->where('city_id','440100000000')->first();
                //dd($re);
                //地区名称
                session(['regionname' => $re->title]);
                session(['phone' => $re->phone]);
                session(['fz_wxhao' => $re->fz_wxhao]);
                session(['fz_qqhao' => $re->fz_qqhao]);
                session(['cityname' => $re->city_name]);
                session(['fz_wx' => $re->fz_wx]);
                session(['fz_qq' => $re->fz_qq]);
            }else{
                if($zy == 'lizhijiajiao'){
                    $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                    //模板

                    session(['template' => '1']);
                    //地区id
                    session(['regionid' => $re->city_id]);
                    //地区名称
                    session(['regionname' => $re->city_name]);
                }else{
                    $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                    //模板
                    session(['template' => $two]);
                    //地区id
                    session(['regionid' => $re->city_id]);
                    //地区名称
                    session(['regionname' => $re->title]);
                    session(['phone' => $re->phone]);
                    session(['fz_wxhao' => $re->fz_wxhao]);
                    session(['cityname' => $re->city_name]);
//                    /dd($re);
                }
            }
    }
}
