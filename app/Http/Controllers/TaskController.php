<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
use DB;
class TaskController extends Controller
{
    public function Fiveminutes()
    {
        return 'ok';
    }
    //每天早上9点
    public function Nine($token)
    {
        $results = Search::search(null, 'fox')->get();
        dd($results);
        //当前日期
        if($token == 'Stone'){
            $NowTime = date('Y年m月d日 h:i:s',time());
            $str = mb_substr($NowTime,0,11);
            $re = DB::table('jjw_order')->where('status','!=','4')->where('sks_time','!=','')->get();
            $config = [
                'app_key'    => '23779228',
                'app_secret' => '9d9788c22c9a4dbc8522fae7b97b15ae',
            ];
            $client = new Client(new App($config));
            $req    = new AlibabaAliqinFcSmsNumSend;
            foreach($re as $k=>$v){
                if($str == mb_substr($v->sks_time,0,11)){
                $req->setRecNum($v->user_phone)
                    ->setSmsParam([])
                    ->setSmsFreeSignName('德栗教育')
                    ->setSmsTemplateCode('SMS_67185482');
                    $resp = $client->execute($req);
                    echo 'ok';
                }else{
                    echo '没有找到';
                }
            }
        }else{
            echo 'token错误';
        }
    }
    //每天晚上10点
    public function Ten($token)
    {
        //当前日期
        if($token == 'Stone'){
            $NowTime = date('Y年m月d日 h:i:s',strtotime("+1 day"));
            $str = mb_substr($NowTime,0,11);
            $re = DB::table('jjw_order')->where('status','!=','4')->where('sks_time','!=','')->get();
            $config = [
                'app_key'    => '23779228',
                'app_secret' => '9d9788c22c9a4dbc8522fae7b97b15ae',
            ];
            $client = new Client(new App($config));
            $req    = new AlibabaAliqinFcSmsNumSend;
            foreach($re as $k=>$v){
                var_dump($v->sks_time);
                if($str == mb_substr($v->sks_time,0,11)){
                   $data = DB::table('jjw_reorder')->where('oid',$v->id)->get();
                   foreach($data as $k => $v){
                        if($v->ht_t_status == '7'){
                            $tc = DB::table('jjw_teachers')->where('id',$v->tc_id)->first();
                            $req->setRecNum($tc->tc_phone)
                                ->setSmsParam(['name' => $tc->tc_name,'oid' => $v->oid])
                                ->setSmsFreeSignName('德栗教育')
                                ->setSmsTemplateCode('SMS_67250543');
                                $resp = $client->execute($req);
                                echo 'ok';
                        }
                    }
                }
            }
        }else{
            echo 'no';
        }
    }
}
