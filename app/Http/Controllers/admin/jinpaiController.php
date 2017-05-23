<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
class jinpaiController extends Controller
{
    //金牌
    public function jinpai($m){
        //dd($m);
        //'jjw_position_city'
        if($m == '1'){
            $list= DB::table('jjw_teachers as t')
                ->join('jjw_position_city as pc', 'pc.city_id', '=', 't.tc_city_id')
                ->where('tc_city_id','440100000000')
                ->where('tc_jinpai','2')
                ->where('t.tc_reboot','0')
                ->orderBy('id','DESC')
                ->select('t.*','pc.city_name')
                ->paginate(1000);
            //dd($list);
           // $list = DB::table('jjw_teachers');
            return view('admin.jinpai',['list'=>$list]);
        }else{
            $list= DB::table('jjw_teachers as t')
                ->join('jjw_position_city as pc', 'pc.city_id', '=', 't.tc_city_id')
                ->where('tc_city_id',$m)
                ->where('tc_jinpai','2')
                ->where('t.tc_reboot','0')
                ->orderBy('id','DESC')
                ->select('t.*','pc.city_name')
                ->paginate(1000);
            return view('admin.jinpai',['list'=>$list]);
        }
    }
    //执行金牌修改
    public function dojinpai(Request $request,$id,$zt){
        if($zt == '1'){
            $list = \DB::table('jjw_teachers')->where('id',$id)->update(['tc_sort'=>'1']);
            if($list){
                return back();
            }
        }else{
            $list = \DB::table('jjw_teachers')->where('id',$id)->update(['tc_sort'=>'0']);
            if($list){
                return back();
            }
        }
    }

    //专职
    public function zhuanzhi($m){
        if($m == '1'){
            $list= DB::table('jjw_teachers as t')
                ->join('jjw_position_city as pc', 'pc.city_id', '=', 't.tc_city_id')
                ->where('tc_city_id','440100000000')
                ->where('tc_jinpai','1')
                ->where('t.tc_reboot','0')
                ->orderBy('tc_dltimes','DESC')
                ->select('t.*','pc.city_name')
                ->paginate(1000);
            return view('admin.zhuanzhi',['list'=>$list]);
        }else{
            $list= DB::table('jjw_teachers as t')
                ->join('jjw_position_city as pc', 'pc.city_id', '=', 't.tc_city_id')
                ->where('tc_city_id',$m)
                ->where('tc_jinpai','1')
                ->where('t.tc_reboot','0')
                ->orderBy('tc_dltimes','DESC')
                ->select('t.*','pc.city_name')
                ->paginate(1000);
            return view('admin.zhuanzhi',['list'=>$list]);
        }
    }
    //执行专职修改
    public function dozhuanzhi(Request $request,$id,$zt){
        //echo $id.'-'.$zt;die;
        if($zt == '1'){
            $list = \DB::table('jjw_teachers')->where('id',$id)->update(['tc_sort'=>'1']);
            if($list){
                return back();
            }
        }else{
            $list = \DB::table('jjw_teachers')->where('id',$id)->update(['tc_sort'=>'0']);
            if($list){
                return back();
            }
        }
    }

    //学生教员
    public function xuesheng($m){
        if($m == '1'){
            $list= DB::table('jjw_teachers as t')
                ->join('jjw_position_city as pc', 'pc.city_id', '=', 't.tc_city_id')
                ->where('tc_city_id','440100000000')
                ->where('t.tc_jinpai','0')
                ->where('t.tc_reboot','0')
                ->orderBy('tc_dltimes','DESC')
                ->select('t.*','pc.city_name')
                ->paginate(1000);
                //->get();
            //dd($list);
            return view('admin.xuesheng',['list'=>$list]);
        }else{
            $list= DB::table('jjw_teachers as t')
                ->join('jjw_position_city as pc', 'pc.city_id', '=', 't.tc_city_id')
                ->where('tc_city_id',$m)
                ->where('tc_jinpai','0')
                ->where('t.tc_reboot','0')
                ->orderBy('tc_dltimes','DESC')
                ->select('t.*','pc.city_name')
                ->paginate(1000);
                //->get();
            return view('admin.xuesheng',['list'=>$list]);
        }
    }

    //执行学生修改
    public function doxuesheng(Request $request,$id,$zt){
       // echo $id.'-'.$zt;die;
        if($zt == '1'){
            $list = \DB::table('jjw_teachers')->where('id',$id)->update(['tc_sort'=>'1']);
            if($list){
                return back();
            }
        }else{
            $list = \DB::table('jjw_teachers')->where('id',$id)->update(['tc_sort'=>'0']);
            if($list){
                return back();
            }
        }
    }
}
