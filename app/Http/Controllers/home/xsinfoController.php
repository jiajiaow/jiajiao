<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class xsinfoController extends Controller
{
    public function index(Request $request,$id)
    {
        //页面数据
        $url = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
        $data = DB::table('jjw_order')->where('id',$id)->first();
        //浏览加1
        $un = $data->browsenu+1;
        DB::table('jjw_order')->where('id',$id)->update(['browsenu' => $un]);
        //预约人数
        $rs = DB::table('jjw_reorder')->where('oid',$id)->count();
        //相似订单
        $list = \DB::table('jjw_order')->where('city_id', session('regionid'))->where('status', '0')->orderBy('id', 'desc')->skip(0)->take(10)->get();
            //dd($list);
        return view('delijiajiao.xsinfo',['data' => $data,'nu' => $rs,'url' => $url,'list'=>$list]);
    }
}
