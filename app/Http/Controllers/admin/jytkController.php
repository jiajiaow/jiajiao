<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
class jytkController extends Controller
{
    //skbcg试课不成功
    public function skbcg(){
        $list = \DB::table('jjw_order as o')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->join('jjw_position_city as pc', 'o.city_id', '=', 'pc.city_id')
            ->join('jjw_tkjl as jl', 'jl.r_id', '=', 'r.id')
            ->where('jl.tk_types','1')
            ->select('r.id as rid','r.tk_times','r.pay_zt2','jl.id as jl_id','jl.ht_cljg','ht_zgsh','r.xxf','r.xxf2','r.ytxxf','pc.bfb2','jl.sfsk','jl.nocglx','jl.yuanyin','jl.yskc','jl.xxftk','pc.city_name','o.*','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','t.tc_phone','t.tc_name','r.jd_times','t.id as t_id','tc_school','tc_type')
            ->get();
        //dd($list);
        return view('admin.skbcg',['list'=>$list]);
    }

    //提前结束课程
    public function tqjskc(){
        $list = \DB::table('jjw_order as o')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->join('jjw_position_city as pc', 'o.city_id', '=', 'pc.city_id')
            ->join('jjw_tkjl as jl', 'jl.r_id', '=', 'r.id')
            ->where('jl.tk_types','2')
            ->where('r.xxftk','!=',null)
            ->where('r.xxftk','!=','0')
            ->select('r.id as rid','r.tk_times','r.pay_zt2','jl.id as jl_id','jl.ht_cljg','ht_zgsh','r.xxf','r.xxf2','r.ytxxf','pc.bfb2','jl.sfsk','jl.nocglx','jl.yuanyin','jl.yskc','jl.xxftk','pc.city_name','o.*','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','t.tc_phone','t.tc_name','r.jd_times','t.id as t_id','tc_school','tc_type')
            ->get();
        //dd($list);
        return view('admin.tqjskc',['list'=>$list]);
    }

    //成功减少课酬
    public function cgjskc(){
        $list = \DB::table('jjw_order as o')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->join('jjw_position_city as pc', 'o.city_id', '=', 'pc.city_id')
            ->join('jjw_tkjl as jl', 'jl.r_id', '=', 'r.id')
            ->where('jl.tk_types','3')
            ->select('r.id as rid','r.tk_times','r.pay_zt2','jl.id as jl_id','jl.ht_cljg','ht_zgsh','r.xxf','r.xxf2','r.ytxxf','pc.bfb2','jl.sfsk','jl.nocglx','jl.yuanyin','jl.yskc','jl.xxftk','pc.city_name','o.*','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','t.tc_phone','t.tc_name','r.jd_times','t.id as t_id','tc_school','tc_type','pc.bfb1','pc.bfb2','pc.bfb3','pc.bfb4','pc.bfb5','pc.bfb6','pc.bfb7')
            ->get();
        //dd($list);
        return view('admin.cgjskc',['list'=>$list]);
    }

    //诚意金解锁
    public function cyjjs(){
        return view('admin.cyjjs');
    }

    public function tdye(){
       //die;
        //成功减少次数
        if($_POST['pd'] == 'cgjskc'){
            if($_POST['zt'] =='1'){
                $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_cljg'=>$_POST['edit']]);
                return "y";
            }else{
                if($_POST['edit'] == '1'){
                    //修改状态
                    $lists = DB::table('jjw_reorder')->where('id',$_POST['rid'])->update(['tk_type'=>null,'qt_t_status'=>'6','ht_t_status'=>'8']);
                    $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_zgsh'=>$_POST['edit']]);
                    //修改余额
                    $lis = DB::table('jjw_teachers')->where('id',$_POST['tid'])->pluck('tc_money');
                    $li = DB::table('jjw_teachers')->where('id',$_POST['tid'])->update(['tc_money'=>($lis[0]+$_POST['m'])]);
                    return "y";
                }else{
                    //修改状态  edit为3  关闭订单的时候才修改状态 为空
                    if($_POST['edit'] == '3'){
                        $lists = DB::table('jjw_reorder')->where('id',$_POST['rid'])->update(['tk_type'=>null]);
                        $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_zgsh'=>$_POST['edit']]);
                        return "y";
                    }else{
                        $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_zgsh'=>$_POST['edit']]);
                        return "y";
                    }
                }
            }
            //试课不成功
        }else if($_POST['pd'] == 'skbcg'){
            if($_POST['zt'] =='1'){
                $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_cljg'=>$_POST['edit']]);
                return "y";
            }else{
                if($_POST['edit'] == '1'){
                    //修改状态
                    $lists = DB::table('jjw_reorder')->where('id',$_POST['rid'])->update(['tk_type'=>null,'qt_t_status'=>'8','ht_t_status'=>'10']);
                    $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_zgsh'=>$_POST['edit']]);
                    //修改余额
                    $lis = DB::table('jjw_teachers')->where('id',$_POST['tid'])->pluck('tc_money');
                    $li = DB::table('jjw_teachers')->where('id',$_POST['tid'])->update(['tc_money'=>($lis[0]+$_POST['m'])]);
                    return "y";
                }else{
                    //修改状态  edit为3  关闭订单的时候才修改状态 为空
                    if($_POST['edit'] == '3'){
                        $lists = DB::table('jjw_reorder')->where('id',$_POST['rid'])->update(['tk_type'=>null]);
                        $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_zgsh'=>$_POST['edit']]);
                        return "y";
                    }else{
                       // $lists = DB::table('jjw_reorder')->where('id',$_POST['rid'])->update(['tk_type'=>null]);
                        $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_zgsh'=>$_POST['edit']]);
                        return "y";
                    }
                }
            }

        }else if($_POST['pd'] == 'tqjskc'){
            if($_POST['zt'] =='1'){
                $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_cljg'=>$_POST['edit']]);
                return "y";
            }else{
                if($_POST['edit'] == '1'){
                    //修改状态
                    $lists = DB::table('jjw_reorder')->where('id',$_POST['rid'])->update(['tk_type'=>null,'qt_t_status'=>'7','ht_t_status'=>'9']);
                    $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_zgsh'=>$_POST['edit']]);
                    //修改余额
                    $lis = DB::table('jjw_teachers')->where('id',$_POST['tid'])->pluck('tc_money');
                    $li = DB::table('jjw_teachers')->where('id',$_POST['tid'])->update(['tc_money'=>($lis[0]+$_POST['m'])]);
                    return "y";
                }else{
                    //修改状态  edit为3  关闭订单的时候才修改状态 为空
                    if($_POST['edit'] == '3'){
                        $lists = DB::table('jjw_reorder')->where('id',$_POST['rid'])->update(['tk_type'=>null]);
                        $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_zgsh'=>$_POST['edit']]);
                        return "y";
                    }else{
                        //$lists = DB::table('jjw_reorder')->where('id',$_POST['rid'])->update(['tk_type'=>null]);
                        $list = DB::table('jjw_tkjl')->where('id',$_POST['id'])->update(['ht_zgsh'=>$_POST['edit']]);
                        return "y";
                    }
                }
            }
        }

    }
}
