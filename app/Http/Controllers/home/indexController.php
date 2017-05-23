<?php
namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
use \Cookie;
class indexController extends Controller{
    /**
    *首页 网站判断
    *
    */
    public function index(Request $request)
    {
        //德利pc
        if(session('Template') == '2'){
            //热门学校  1为热门,查6条
            $xx= DB::table('school_t')->where('city_id',session('regionid'))->where('hot',1)->limit(6)->get();
            //热门地区 1为热门,查6条
            $dq = DB::table('jjw_position_county')->where('city_id',session('regionid'))->where('hot',1)->limit(6)->get();
            //金牌 专职 学生
            $jy = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_sort','1')->orderBy('tc_dltimes','DESC')->limit(25)->get();
            //dd($jy);
            //最新学生订单
            $data = DB::table('jjw_order')->where('status','!=','3')->where('city_id',session('regionid'))->limit(6)->orderBy('id', 'DESC')->orderBy('time', 'DESC')->get();
            //热门学科
            $xueke = DB::table('jjw_sanji')->where('hot','1')->limit(8)->get();
            //return view('delijiajiao.index',['jinpai'=>$jinpai,'xueshen'=>$xueshen,'zhuanzhi'=>$zhuanzhi,'data'=>$data,'xx' => $xx,'xueke'=>$xueke,'dq'=>$dq]);
            return view('delijiajiao.index',['jy'=>$jy,'data'=>$data,'xx' => $xx,'xueke'=>$xueke,'dq'=>$dq]);
            //德利手机
        }else if(session('Template') == '4'){
            //热门学校  1为热门,查6条
            $xx= DB::table('school_t')->where('city_id',session('regionid'))->where('hot',1)->limit(6)->get();
            //热门地区 1为热门,查6条
            $dq = DB::table('jjw_position_county')->where('city_id',session('regionid'))->where('hot',1)->limit(6)->get();
            //金牌 专职 学生
            $jy = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_sort','1')->orderBy('tc_dltimes','DESC')->limit(25)->get();
            //dd($jy);
            //最新学生订单
            $data = DB::table('jjw_order')->where('status','!=','3')->where('city_id',session('regionid'))->limit(6)->orderBy('id', 'DESC')->orderBy('time', 'DESC')->get();
            //热门学科
            $xueke = DB::table('jjw_sanji')->where('hot','1')->limit(8)->get();
            //return view('delijiajiao.index',['jinpai'=>$jinpai,'xueshen'=>$xueshen,'zhuanzhi'=>$zhuanzhi,'data'=>$data,'xx' => $xx,'xueke'=>$xueke,'dq'=>$dq]);
            return view('delijiajiao.mobile.index',['jy'=>$jy,'data'=>$data,'xx' => $xx,'xueke'=>$xueke,'dq'=>$dq]);
        }
    }
    /**
    *网站地区切换
    **/
    public function change(Request $request)
    {
        $re = DB::table('jjw_position_city')->get();
        $dq = DB::table('jjw_position_provice')->get();
        return view('home.change',['re' => $re,'data' => $dq]);
    }
    public function login()
    {
        return '登录';
    }


}
