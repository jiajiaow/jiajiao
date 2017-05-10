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
//               echo "<hr>";
//                dd($data);
                $li = \DB::table('jjw_reorder')->where('id',$_POST['rid'])->pluck('oid');
//                echo "<pre>";
//                var_dump($li);
//                echo "</pre>";
//                echo "<hr>";
                $list = \DB::table('jjw_reorder')->where('oid',$li[0])->pluck('id');
//                echo "<pre>";
//                var_dump($list);
//                echo "</pre>";
//                echo "<hr>";
                //循环list  存入num
                for($i=0;$i<count($list);$i++){
                    if($list[$i] != $data['rid']){
                        $num[] =  $list[$i];
                    }
                }
                //dd($num);
                //别的教员
                session(['bdjy' => $num]);
                //$nums = session('bdjy');
                //dd($nums);
               //echo count($nums);
                //for($i=0;$i<count($nums);$i++) {
                        //$arr[$i] = $nums[$i];
                    //if($nums[$i] == $list[$i]){
                        //echo $nums[$i];
                       //$brjyjl = \DB::table('jjw_reorder')->where('id',$nums[$i])->update(['qt_t_status'=>'2']);
                        //echo $nums[$i];
                        //if($brjyjl){
                          // session()->forget("bdjy");
                       // }
                  // }
               // }
               // die;
                return view('delijiajiao.xxf',['data'=>$data]);
            }else{
               // die;
                session()->forget("bdjy");
                return view('delijiajiao.xxf',['data'=>$data]);
            }

    }

    //诚意金
    public function cyj(Request $request){
        $data = $request->all();
        //dd($_POST);
        session()->forget("bdjy");
        return view('delijiajiao.cyj',['data'=>$data]);
    }

    public function top_ups(Request $request){
        $data = $request->all();
        return view('delijiajiao.tc_top_ups',['data'=>$data]);
    }
}
