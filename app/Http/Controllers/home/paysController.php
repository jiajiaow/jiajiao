<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
class paysController extends Controller
{
    //充值
    public function top_up(){

        return view('delijiajiao.chonzhi');
    }

    //信息费
    public function xxf(Request $request){
        $data = $request->all();
        $zforder = \DB::table('jjw_order')->where('id',$_POST['order_id'])->first();
        /*$zforders = \DB::table('jjw_reorder as r')
            ->join('jjw_order as o', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->where('r.pay_id','2017053101011023251074')
            ->select('t.tc_phone','o.user_name','o.user_phone','o.id')
            ->first();
      //  dd($zforders);
        //session(['zf_tc_oid' => $data['order_id'],'zf_or_name'=>$zforder->user_name,'zf_or_phone'=>$zforder->user_phone]);
        $config = [
            'app_key'    => '23779228',
            'app_secret' => '9d9788c22c9a4dbc8522fae7b97b15ae',
        ];
        $client = new Client(new App($config));
        $req    = new AlibabaAliqinFcSmsNumSend;
        $req->setRecNum("$zforders->tc_phone")
            ->setSmsParam(['oid' => "T"."$zforders->id",'name'=>"$zforders->user_name",'phone'=>"$zforders->user_phone"])
            ->setSmsFreeSignName('德栗教育')
            ->setSmsTemplateCode('SMS_69735021');
        $resp = $client->execute($req);*/
            if(empty($data['b'])){
                $li = \DB::table('jjw_reorder')->where('id',$_POST['rid'])->pluck('oid');
                $list = \DB::table('jjw_reorder')->where('oid',$li[0])->pluck('id');
                //循环list  存入num
                for($i=0;$i<count($list);$i++){
                    if($list[$i] != $data['rid']){
                        $num[] =  $list[$i];
                    }
                }
                //dd($num);
                //别的教员
                if(!empty($num)){
                    session(['bdjy' => $num]);
                }else{
                    session(['bdjy' => '']);
                }
                //die;
               // $nums = session('bdjy');
                //dd($nums);
               //echo count($nums);
                //for($is=0;$is<count($list);$is++) {
                   // echo $list[$is];
                    //for($i=0;$i<count($nums);$i++) {
                            //$arr[$i] = $nums[$i];
                        //if($nums[$i] == $list[$is]){
                           // echo $nums[$i];
                           //$brjyjl = \DB::table('jjw_reorder')->where('id',$nums[$i])->update(['qt_t_status'=>'2']);
                            //echo $nums[$i];
                            //if($brjyjl){
                            //   session()->forget("bdjy");
                           // }
                       //}
                    //}
               // }
               // die;
                return view('delijiajiao.xxf',['data'=>$data]);
            }else{
               // die;
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
