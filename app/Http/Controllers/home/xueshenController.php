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
        $list = \DB::table('jjw_order')->where('city_id',session('regionid'))->where('status','!=','3')->orderBy('id','desc')->paginate(10);
       // dd($list);
        //自定义分页
        $num=$list->lastPage();
        $nextpage=$num-$list->currentPage() ==0 ? $num : $list->currentPage()+1 ;
        $lastpage=$list->currentPage()-1 <0 ? 1 : $list->currentPage()-1 ;
        $list->next=$nextpage;
        $list->last=$lastpage;

        return view('delijiajiao.xueyuanku',['quyu'=>$quyu,'list'=>$list]);
    }
    //筛选
    public function xueyuans(Request $request,$y){
        $type = substr($y,0,1);
        $num = substr($y,1,20);
        //区域
        $quyu = \DB::table('jjw_position_county')->where('city_id',Session('regionid'))->get();
        //发布
        if($type == 'x'){
            $list = \DB::table('jjw_order')->where('city_id',session('regionid'))->where('status','!=','3')->where('status',$num)->orderBy('id','desc')->paginate(10);
            //自定义分页
            $num=$list->lastPage();
            $nextpage=$num-$list->currentPage() ==0 ? $num : $list->currentPage()+1 ;
            $lastpage=$list->currentPage()-1 <0 ? 1 : $list->currentPage()-1 ;
            $list->next=$nextpage;
            $list->last=$lastpage;

            return view('delijiajiao.xueyuanku',['quyu'=>$quyu,'list'=>$list]);
        //老师类型
        }else if($type == 't'){
            $list = \DB::table('jjw_order')->where('city_id',session('regionid'))->where('status','!=','3')->where('ls_type',$num)->orderBy('id','desc')->paginate(10);
            //自定义分页
            $num=$list->lastPage();
            $nextpage=$num-$list->currentPage() ==0 ? $num : $list->currentPage()+1 ;
            $lastpage=$list->currentPage()-1 <0 ? 1 : $list->currentPage()-1 ;
            $list->next=$nextpage;
            $list->last=$lastpage;

            return view('delijiajiao.xueyuanku',['quyu'=>$quyu,'list'=>$list]);
        //区域
        }else if($type == 'q'){
            $qu = \DB::table('jjw_position_county')->where('id',$num)->first();
            $list = \DB::table('jjw_order')->where('city_id',session('regionid'))->where('status','!=','3')->where('dq',$qu->county_name)->orderBy('id','desc')->paginate(10);
            //dd($list);
            //自定义分页
            $num=$list->lastPage();
            $nextpage=$num-$list->currentPage() ==0 ? $num : $list->currentPage()+1 ;
            $lastpage=$list->currentPage()-1 <0 ? 1 : $list->currentPage()-1 ;
            $list->next=$nextpage;
            $list->last=$lastpage;

            return view('delijiajiao.xueyuanku',['quyu'=>$quyu,'list'=>$list]);
        }
    }
}
