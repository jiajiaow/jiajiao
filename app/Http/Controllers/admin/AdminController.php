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
    //添加分钟
    public function dotjfz(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
    public function cs(Request $request)
    {
        $list = think\Db::name('jjw_position_provice')->get();
        return $list;
    }
    public function co(Request $request)
    {

    }
}
