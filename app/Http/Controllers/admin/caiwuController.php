<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class caiwuController extends Controller
{
    public function jyszls(){
        $list = \DB::table('jjw_mpay as y')
            ->join('jjw_reorder as r', 'r.id', '=', 'y.m_rid')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->join('jjw_order as o', 'r.oid', '=', 'o.id')
            ->join('jjw_position_city as pc', 'pc.city_id', '=', 'o.city_id')
            ->select('y.*','o.*','pc.city_name','t.id as tid','t.tc_name')
            ->where('y.m_type','!=','0')
            ->get();
       // dd($list);
        return view('admin.jyszls',['list'=>$list]);
    }
}
