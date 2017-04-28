<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class htjykController extends Controller
{
    public function index()
    {
        //$list = \DB::table('jjw_teachers')->orderBy('id','desc')->paginate(10);

        $list = \DB::table('jjw_order as o')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->select('r.*','t.*')
            ->paginate(10);
        //dd($list);
        return view('admin.htjyk',['data' => $list]);
    }
}
