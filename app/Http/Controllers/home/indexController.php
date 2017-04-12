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
    public function index(Request $request,$id = null)
    {
        $data = $request->session()->all();
        //查询地区金牌教员
        $jinpai = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','2')->limit(4)->get();
        //查询地区学生教员
        $xueshen = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','0')->limit(4)->get();
//        //查询地区专职教员
        $zhuanzhi = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','1')->limit(4)->get();
       // dd($zhuanzhi);
        return view('home.index',['jinpai'=>$jinpai,'xueshen'=>$xueshen,'zhuanzhi'=>$zhuanzhi]);
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
