<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class orderController extends Controller
{
    public function xsdd(Request $request)
    {
        $data = DB::table('jjw_order as order')
            ->join('jjw_position_city', 'jjw_position_city.city_id', '=', 'order.city_id')
            ->join('jjw_user as u','u.u_id','=','order.user_id')
            ->select('order.*','u.*','jjw_position_city.city_name', 'jjw_position_city.city_id')
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
    //修改订单状态
    public function orderzt(Request $request)
    {
        //订单id
        $oid = $request->input('id');
        //后台状态码
        $ht_status = $request->input('ht_status');
        //教员id
        $tc_id = $request->input('teacher_id');
        // if($ht_status == '2'){
                //前台显示
        //     DB::table('jjw_order')->where('id',$oid)->update(['stastus' => '1']);
        //     DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['stastus' => '6']);
        // }else if(){

        // }else if(){

        // }
        DB::table('jjw_order')->where('id',$id)->update($all);
        return back();
    }
}
