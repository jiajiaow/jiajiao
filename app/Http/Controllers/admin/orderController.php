<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class orderController extends Controller
{
    public function xsdd(Request $request)
    {
        $data = DB::table('jjw_order')->get();
        return view('admin.xsdd',['data' => $data]);
    }
    public function doorder(Request $request)
    {
        $all = $request->all();
        dd($all);
    }
}
