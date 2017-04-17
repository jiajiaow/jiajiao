<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class TeacheryyController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('tc_phone')){
            $re = DB::table('jjw_Reorder')->insert(['oid' => $request->input('oid'),'tc_id' => session('tc_phone')]);
            if($re){
                //返回session
                $request->session()->flash('ts', 'layer.msg("预约成功", {icon: 3});');
            }else{
                //返回session
                $request->session()->flash('ts', 'layer.msg("错误请联系管理员", {icon: 3});');
            }
            return back();
        }else{
            $request->session()->flash('ts', 'layer.msg("请先登录", {icon: 3});');
            return back();
        }
    }
}
