<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class paysController extends Controller
{
    //充值
    public function top_up(){

        return view('delijiajiao.chonzhi');
    }

    //信息费
    public function xxf(Request $request){
        $data = $request->all();
        return view('delijiajiao.xxf',['data'=>$data]);
    }

    //诚意金
    public function cyj(Request $request){
        $data = $request->all();
        return view('delijiajiao.cyj',['data'=>$data]);
    }

    public function top_ups(Request $request){
        $data = $request->all();
        return view('delijiajiao.tc_top_ups',['data'=>$data]);
    }
}
