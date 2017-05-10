<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class caiwuController extends Controller
{
    public function jyszls(){
        $list = \DB::table('jjw_mpay as y')
            ->join('jjw_reorder as r', 'r.id', '=', 'y.m_rid')
            ->join('jjw_order as o', 'r.oid', '=', 'o.id')
            ->select('y.*','o.*')
            ->get();
        dd($list);
        return view('admin.jyszls');
    }
}
