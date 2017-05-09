<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class TeacheryyController extends Controller
{
    public function index(Request $request)
    {
        //判断教员是否登陆
        if($request->session()->has('tc_id')){
            //查询是否预约
            $data = DB::table('jjw_Reorder')->where('oid',$request->input('oid'))->where('tc_id',session('tc_id'))->first();
            //dd($data);
            if($data){
                $request->session()->flash('ts', 'layer.msg("你已预约,请不要重复操作", {icon: 3});');
                return back();
            }else{
                $re = DB::table('jjw_Reorder')->insert(['oid' => $request->input('oid'),'tc_id' => session('tc_id')]);
                if($re){
                    //返回session
                    $num = DB::table('jjw_order')->where('id',$request->input('oid'))->first();
                    DB::table('jjw_order')->where('id',$request->input('oid'))->update(['yynum' => $num->yynum+1]);
                    $request->session()->flash('ts', 'layer.msg("预约成功", {icon: 3});');
                }else{
                    //返回session
                    $request->session()->flash('ts', 'layer.msg("错误请联系管理员", {icon: 3});');
                }
                return back();
            }
        }else{
            $request->session()->flash('ts', 'layer.msg("请先登录", {icon: 3});');
            return back();
        }
    }
}
