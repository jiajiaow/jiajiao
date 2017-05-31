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
        session(['zf_tc_oid' => $data['order_id']]);
        /*$config = [
            'app_key'    => '23779228',
            'app_secret' => '9d9788c22c9a4dbc8522fae7b97b15ae',
        ];
        $client = new Client(new App($config));
        $req    = new AlibabaAliqinFcSmsNumSend;
        $req->setRecNum(session('tc_phone'))
            ->setSmsParam(['oid' => "T".session('zf_tc_oid'),'name'=>session('tc_name'),'phone'=> session('tc_phone')])
            ->setSmsFreeSignName('德栗教育')
            ->setSmsTemplateCode('SMS_67220521');
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
