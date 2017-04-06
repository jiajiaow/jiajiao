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
        return view('admin.fzlb');
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

    public function cs(Request $request)
    {
        $list =  \DB::table('jjw_position_provice')->get();
        return $list;
    }
    public function co(Request $request)
    {
        $pid = $_POST['pid'];
        $list = \DB::table('jjw_position_city')->where('province_id',$pid)->get();
        return $list;
    }
}
