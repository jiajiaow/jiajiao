<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class htjykController extends Controller
{
    public function index()
    {
        //教员 0是真实教员，1是虚拟教员
        $list = \DB::table('jjw_teachers')->where('tc_reboot','0')->where('tc_reg_date','!=','0000-00-00 00:00:00')->orderBy('tc_dltimes','DESC')->paginate(10);

       // $list = \DB::table('jjw_order as o')
           // ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
           // ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            //->select('r.*','t.*')
            //->paginate(10);
       // dd($list);
        return view('admin.htjyk',['data' => $list]);
    }
}
