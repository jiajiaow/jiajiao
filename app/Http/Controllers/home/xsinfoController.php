<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Controllers\home\indexController;
class xsinfoController extends Controller
{

    public function indexb(Request $request,$id)
    {
        if(session('Template') == '4'){//手机德栗
            //页面数据
            $url = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
            $data = DB::table('jjw_order')->where('id',$id)->first();
            //浏览加1
            $un = $data->browsenu+1;
            DB::table('jjw_order')->where('id',$id)->update(['browsenu' => $un]);
            //预约人数
            $rs = DB::table('jjw_reorder')->where('oid',$id)->count();
            //相似订单
            $list = \DB::table('jjw_order')->where('city_id', session('regionid'))->where('status', '0')->orderBy('time', 'desc')->skip(0)->take(10)->get();
            //dd($list);
            return view('phonedl.xsinfo',['data' => $data,'nu' => $rs,'url' => $url,'list'=>$list]);
        }else{ //否则默认德栗PC端
            $new = new  indexController;
            $new->__construct();
            //页面数据
            $url = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
            $data = DB::table('jjw_order')->where('id',$id)->first();
            //浏览加1
            $un = $data->browsenu+1;
            DB::table('jjw_order')->where('id',$id)->update(['browsenu' => $un]);
            //预约人数
            $rs = DB::table('jjw_reorder')->where('oid',$id)->count();
            //相似订单
            $list = \DB::table('jjw_order')->where('city_id', session('regionid'))->where('status', '0')->orderBy('time', 'desc')->skip(0)->take(10)->get();
            //dd($list);
            return view('delijiajiao.xsinfo',['data' => $data,'nu' => $rs,'url' => $url,'list'=>$list]);
        }
    }

}
