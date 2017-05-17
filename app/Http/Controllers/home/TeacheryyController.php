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
            $data = DB::table('jjw_reorder')->where('oid',$request->input('oid'))->where('tc_id',session('tc_id'))->first();
            $tc = DB::table('jjw_teachers')->where('id',session('tc_id'))->value('tc_sex');
            //dd($data);
            if($data){
                $request->session()->flash('ts', 'layer.msg("你已预约,请不要重复操作", {icon: 3});');
                return back();
            }else{
                $num = DB::table('jjw_order')->where('id',$request->input('oid'))->first();
                if($num->teacher_sex == '3'){
                        $re = DB::table('jjw_reorder')->insert(['oid' => $request->input('oid'),'tc_id' => session('tc_id')]);
                        if($re){
                            //返回session
                            DB::table('jjw_order')->where('id',$request->input('oid'))->update(['yynum' => $num->yynum+1]);
                            $request->session()->flash('ts', 'layer.msg("预约成功", {icon: 3});');
                        }else{
                            //返回session
                            $request->session()->flash('ts', 'layer.msg("错误请联系管理员", {icon: 3});');
                        }
                }else if($num->teacher_sex == '2'){
                    if($tc == '0'){
                        $re = DB::table('jjw_reorder')->insert(['oid' => $request->input('oid'),'tc_id' => session('tc_id')]);
                        if($re){
                            //返回session

                            DB::table('jjw_order')->where('id',$request->input('oid'))->update(['yynum' => $num->yynum+1]);
                            $request->session()->flash('ts', 'layer.msg("预约成功", {icon: 3});');
                        }else{
                            //返回session
                            $request->session()->flash('ts', 'layer.msg("错误请联系管理员", {icon: 3});');
                        }
                    }else{
                        $request->session()->flash('ts', 'layer.msg("您的性别与学员的要求不符，您可以预约其他学员订单哟^-^", {icon: 3});');
                        return back();
                    }
                }else if ($num->teacher_sex == '1'){
                    if($tc == '1'){
                        $re = DB::table('jjw_reorder')->insert(['oid' => $request->input('oid'),'tc_id' => session('tc_id')]);
                        if($re){
                            //返回session
                            DB::table('jjw_order')->where('id',$request->input('oid'))->update(['yynum' => $num->yynum+1]);
                            $request->session()->flash('ts', 'layer.msg("预约成功", {icon: 3});');
                        }else{
                            //返回session
                            $request->session()->flash('ts', 'layer.msg("错误请联系管理员", {icon: 3});');
                        }
                    }else{
                        $request->session()->flash('ts', 'layer.msg("您的性别与学员的要求不符，您可以预约其他学员订单哟^-^", {icon: 3});');
                        return back();
                    }
                }
                return back();
            }
        }else{
            $request->session()->flash('ts', 'layer.msg("请先登录", {icon: 3});');
            return back();
        }
    }
}
