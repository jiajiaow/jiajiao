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
        //查询地区教员
        $jinpai = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->get();
        return view('home.index',['jinpai'=>$jinpai]);
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
