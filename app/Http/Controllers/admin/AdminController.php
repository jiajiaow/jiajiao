<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
class AdminController extends Controller
{
    //
    public function index(Request $request){
        return view('admin.index');
    }

    public function indexi(Request $request){
        return view('admin.indexi');
    }

    public function fzlb()
    {
        $re = DB::table('jjw_position_city')->where('prefix','!=','')->get();
        return view('admin.fzlb',['re' => $re]);
    }
    public function tjfz()
    {
        $re = DB::table('jjw_position_provice')->get();
        return view('admin.tjfz',['re' => $re]);
    }
    public function dotjfz(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
    //例子：北京市 湖南省
    public function sheng(Request $request)
    {
        $list =  \DB::table('jjw_position_provice')->get();
        return $list;
    }
    //市辖县
    public function xian(Request $request)
    {
        $pid = $_POST['pid'];
        $list = \DB::table('jjw_position_city')->where('province_id',$pid)->get();
        return $list;
    }
}
