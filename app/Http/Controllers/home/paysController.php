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
        //dd($data);
            if(empty($data['b'])){
//                echo "<pre>";
//                var_dump($data);
//                echo "</pre>";
//                echo "<hr>";
//                dd($data);
                $li = \DB::table('jjw_reorder')->where('id',$_POST['rid'])->pluck('oid');
                $list = \DB::table('jjw_reorder')->where('oid',$li[0])->pluck('id');
                //循环list  存入num
                for($i=0;$i<count($list);$i++){
                    if($list[$i] != $data['rid']){
                        $num[] =  $list[$i];
                    }
                }
                //别的教员
                session(['bdjy' => $num]);
//                $nums = session('bdjy');
//                for($i=0;$i<count($nums);$i++) {
//                        $arr[$i] = $num[$i];
//                    if($arr[$i] == $num[$i]){
//                       $brjyjl = \DB::table('jjw_reorder')->where('id',$arr[$i])->update(['qt_t_status'=>'2']);
//                        if($brjyjl){
//                            session()->forget("bdjy");
//                        }
//                    }
//                }
                return view('delijiajiao.xxf',['data'=>$data]);
            }else{
                return view('delijiajiao.xxf',['data'=>$data]);
            }

    }

    //诚意金
    public function cyj(Request $request){
        $data = $request->all();
        //dd($_POST);
        return view('delijiajiao.cyj',['data'=>$data]);
    }

    public function top_ups(Request $request){
        $data = $request->all();
        return view('delijiajiao.tc_top_ups',['data'=>$data]);
    }
}
