<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class orderController extends Controller
{
    public function xsdd(Request $request)
    {
        //DB::table('jjw_order')->where('user_id','2020')->update(['user_id' => '']);
        $data = DB::table('jjw_order as order')
            ->join('jjw_position_city', 'jjw_position_city.city_id', '=', 'order.city_id')
            ->join('jjw_user as u','u.u_id','=','order.user_id')
            ->select('order.*','u.*','jjw_position_city.city_name', 'jjw_position_city.city_id')
            ->where('user_reboot','1')
            ->orderBy('order.time', 'desc')
            ->paginate(10);
            //dd($data);
        return view('admin.order',['data' => $data]);

    }
    //订单基础修改
    public function orderjc(Request $request)
    {
        $id = $request->input('id');
        $all = $request->all();
        $all = $request->except('_token');
        DB::table('jjw_order')->where('id',$id)->update($all);
        return back();
    }
    //订单用户修改
    public function orderxgyh(Request $request)
    {
        $u_id = $request->input('u_id');
        $o_id = $request->input('o_id');
        $phone = $request->input('user_phone1');
        $phone2 = $request->input('user_phone2');
        $phone3 = $request->input('user_phone3');
        DB::table('jjw_user')->where('u_id',$u_id)->update(['phone' => $phone,'phone2' => $phone2,'phone3' => $phone3]);
        $all = $request->all();
        $all = $request->except('_token','o_id','u_id','user_phone1','user_phone2','user_phone3');
        DB::table('jjw_order')->where('id',$o_id)->update($all);
        return back();
    }
    //修改订单要求
    public function orderyy(Request $request)
    {
        $id = $request->input('id');
        $all = $request->all();
        $all = $request->except('_token');
        DB::table('jjw_order')->where('id',$id)->update($all);
        return back();
    }
    //预约人数
    public function orderyyrs(Request $request,$oid)
    {
        $data = DB::table('jjw_reorder')
                    ->join('jjw_teachers','jjw_reorder.tc_id','=','jjw_teachers.id')
                    ->select('jjw_reorder.*','jjw_teachers.*')
                    ->where('oid',$oid)
                    ->get();
                    //dd($data);
        return view('admin.orderyyrs',['data' => $data]);
    }
    //修改订单状态
    public function orderzt(Request $request)
    {
        //订单id
        $oid = $request->input('id');
        //后台状态码
        $ht_status = $request->input('ht_status');
        //教员id
        $tc_id = $request->input('teacher_id');
        if($ht_status == '2'){
            //前台显示 已安排
            DB::table('jjw_order')->where('id',$oid)->update(['stastus' => '1']);
            //修改教员个人中心订单 试课中
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['stastus' => '6']);
        }else if($th_status == '3'){
            //前台显示 已完成
            DB::table('jjw_order')->where('id',$oid)->update(['stastus' => '2']);
            //修改教员个人中心订单 已成功(授课中)
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['stastus' => '7']);
        }else if($th_status == '4'){
            //修改教员个人中心订单 已成功(授课结束)
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['stastus' => '8']);
        }else if($th_status == '5'){
            //待审核
            //修改教员个人中心订单 已成功(授课结束)
            DB::table('jjw_order')->where('id',$oid)->update(['th_status' => '5']);
        }else if($th_status == '5'){
            //待审核
            //修改教员个人中心订单 已成功(授课结束)
            DB::table('jjw_order')->where('id',$oid)->update(['th_status' => '5']);
        }else if($th_status == '6'){
            //待退款
            DB::table('jjw_order')->where('id',$oid)->update(['th_status' => '6']);
        }else if($th_status == '7'){
            //关闭生成新单
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$th_status)->update(['stastus' => '10']);
        }
        DB::table('jjw_order')->where('id',$id)->update($all);
        return back();
    }
}
