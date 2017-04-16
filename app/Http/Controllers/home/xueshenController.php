<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
use App\Http\Requests;
use \Cookie;
class xueshenController extends Controller
{
    //德栗学员库
    public function xueyuan(Request $request){
        //区域
        $quyu = \DB::table('jjw_position_county')->where('city_id',Session('regionid'))->get();
        //学员
        $list = \DB::table('jjw_order')->paginate(10);
        return view('delijiajiao.xueyuanku',['quyu'=>$quyu,'list'=>$list]);
    }
}
