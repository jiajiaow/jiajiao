<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
class jytkController extends Controller
{
    //skbcg试课不成功
    public function skbcg(){
        $list = \DB::table('jjw_order as o')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->join('jjw_position_city as pc', 'o.city_id', '=', 'pc.city_id')
            ->where('r.tk_type','1')
            ->select('r.id as rid','r.tk_times','r.sfsk','r.nocglx','r.yuanyin','r.yskc','r.xxftk','r.xxf','r.xxf2','pc.city_name','o.*','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','t.tc_phone','t.tc_name','r.jd_times','t.id as t_id','tc_school','tc_type')
            ->get();
       // dd($list);
        return view('admin.skbcg',['list'=>$list]);
    }

    //提前结束课程
    public function tqjskc(){
        $list = \DB::table('jjw_order as o')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->join('jjw_position_city as pc', 'o.city_id', '=', 'pc.city_id')
            ->where('r.tk_type','2')
            ->where('r.xxftk','!=',null)
            ->where('r.xxftk','!=','0')
            ->select('r.id as rid','r.tk_times','r.sfsk','r.nocglx','r.yuanyin','r.yskc','r.xxftk','r.xxf','r.xxf2','pc.city_name','o.*','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','t.tc_phone','t.tc_name','r.jd_times','t.id as t_id','tc_school','tc_type')
            ->get();
        //dd($list);
        return view('admin.tqjskc',['list'=>$list]);
    }

    //成功减少课酬
    public function cgjskc(){
        $list = \DB::table('jjw_order as o')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->join('jjw_position_city as pc', 'o.city_id', '=', 'pc.city_id')
            ->where('r.tk_type','3')
            ->select('r.id as rid','r.tk_times','r.sfsk','r.nocglx','r.yuanyin','r.yskc','r.xxftk','pc.city_name','o.*','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','t.tc_phone','t.tc_name','r.jd_times','t.id as t_id','tc_school','tc_type')
            ->get();
        dd($list);
        return view('admin.cgjskc',['list'=>$list]);
    }

    //诚意金解锁
    public function cyjjs(){
        return view('admin.cyjjs');
    }
}
