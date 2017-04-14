<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use \DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
        //获取当前域名
        public function __construct()
        {
        //获取当前域名
        $url = $_SERVER['SERVER_NAME'];
        $x = explode(".",$url);
        $qz = $x[0];
        $zy = $x[1];
        $hz = $x[2];
        if($qz == 'www'){
            $zlpc = substr($_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"],0,20);
            $zlurl = substr($_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"],0,27);
            $dlpc = substr($_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"],0,19);
            $dlurl = substr($_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"],0,26);
        }else{
            $zlpc = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,16);
            $zlurl = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,23);
            $dlpc = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,15);
            $dlurl = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,22);
        }
        if($zlurl == 'www.lizhijiajiao.com/mobile'){
            //查询数据
            $re = DB::table('jjw_position_city')->where('city_id','110100000000')->first();
            //模板
            session(['Templatesj' => '3']);
            //地区名称
            session(['regionname' => $re->city_name]);
            //地区id
            session(['regionid' => $re->city_id]);
        }else if($dlurl == 'www.delijiajiao.com/mobile'){
            //地区id
            session(['regionid' => '110100000000']);
            //模板
            session(['Templatesj' => '4']);

            $re = DB::table('jjw_position_city')->where('city_id','110100000000')->first();
            //地区名称
            session(['phone' => $re->phone]);
            session(['regionname' => $re->title]);
        }else{
            if($zlurl == 'lizhijiajiao.com/mobile'){
                $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                //模板
                session(['Templatesj' => '3']);
                //地区id
                session(['regionid' => $re->city_id]);
                //地区名称
                session(['regionname' => $re->city_name]);
            }else if($dlurl == 'delijiajiao.com/mobile'){
                $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                //模板
                session(['Templatesj' => '4']);
                //地区id
                session(['regionid' => $re->city_id]);
                //地区名称
                session(['regionname' => $re->title]);
                session(['phone' => $re->phone]);
            }
        }
        if($zlpc == 'www.lizhijiajiao.com'){
            //地区id
            session(['regionid' => '110100000000']);
            //模板
            session(['Template' => '1']);
            //查询数据
            $re = DB::table('jjw_position_city')->where('city_id','110100000000')->first();
            //地区名称
            session(['regionname' => $re->city_name]);
            return 'zlpc';
        }elseif($dlpc == 'www.delijiajiao.com'){
            //地区id
            session(['regionid' => '110100000000']);
            //模板
            session(['Template' => '2']);

            $re = DB::table('jjw_position_city')->where('city_id','110100000000')->first();
            //dd($re);
            //地区名称
            session(['regionname' => $re->title]);
            session(['phone' => $re->phone]);
        }else{
            if($zy == 'lizhijiajiao'){
                $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                //模板
                session(['Template' => '1']);
                //地区id
                session(['regionid' => $re->city_id]);
                //地区名称
                session(['regionname' => $re->city_name]);
            }else{
                $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                //模板
                session(['Template' => '2']);
                //地区id
                session(['regionid' => $re->city_id]);
                //地区名称
                session(['regionname' => $re->title]);
                session(['phone' => $re->phone]);
            }
        }
    }
}
