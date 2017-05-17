<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
use App\Http\Requests;
use \Cookie;

class hotController extends Controller
{
    //热门学校
    public function school(Request $request,$m){
        if($m == '1'){
            $list= DB::table('school_t')->where('city_id',session('regionid'))->get();
        }else{
            $list= DB::table('school_t')->where('city_id',$m)->get();
        }
        //dd($list);
        return view('admin.hot_school',['list'=>$list]);
    }
    //热门区域
    public function area(Request $request,$m){
        //var_dump($m);
        //$list= DB::table('school_t')->where('city_id',session('regionid'))->paginate(10);
        if($m == '1'){
            $list = DB::table('jjw_position_county')->where('city_id',session('regionid'))->get();
        }else{
            $list = DB::table('jjw_position_county')->where('city_id',$m)->get();
        }
        //dd($list);
        return view('admin.hot_area',['list'=>$list]);
    }
    //处理热门区域
    public function do_hot_area(Request $request,$hot,$zt){
        //1为设置热门 ，0为取消热门
        if($zt == '1'){
            $list = \DB::table('jjw_position_county')->where('id',$hot)->where('tc_sort','1')->update(['hot'=>'1']);
            if($list){
                return back();
            }
        }else{
            $list = \DB::table('jjw_position_county')->where('id',$hot)->where('tc_sort','1')->update(['hot'=>'0']);
            if($list){
                return back();
            }
        }
    }
    //处理热门大学
    public function do_hot_school(Request $request,$hot,$zt){
        //1为设置热门 ，0为取消热门
        if($zt == '1'){
            $list = \DB::table('school_t')->where('id',$hot)->update(['hot'=>'1']);
            if($list){
                return back();
            }
        }else{
            $list = \DB::table('school_t')->where('id',$hot)->update(['hot'=>'0']);
            if($list){
                return back();
            }
        }
    }
}
