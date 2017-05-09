<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class xnController extends Controller
{
    public function xnxy()
    {
        $order = DB::table('jjw_order')
            ->join('jjw_position_city', 'jjw_position_city.city_id', '=', 'jjw_order.city_id')
            ->select('jjw_order.*', 'jjw_position_city.city_name', 'jjw_position_city.city_id')
            ->orderBy('time', 'desc')
            ->paginate(100);
        return view('admin.xnxy',['order' => $order]);
    }
    public function xnjy()
    {
        $data = DB::table('jjw_teachers')
            ->join('jjw_position_city', 'jjw_position_city.city_id', '=', 'jjw_teachers.tc_city_id')
            ->select('jjw_teachers.*', 'jjw_position_city.city_name', 'jjw_position_city.city_id')
            ->orderBy('tc_dltimes', 'desc')
            ->paginate(100);
        return view('admin.xnjy',['data' => $data]);
    }
}
