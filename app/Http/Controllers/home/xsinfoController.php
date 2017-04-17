<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class xsinfoController extends Controller
{
    public function index(Request $request,$id)
    {
        $data = DB::table('jjw_order')->where('id',$id)->first();
        return view('delijiajiao.xsinfo',['data' => $data]);
    }
}
