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
    public function Nine($token)
    {
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
                }
            }
        }else{
            echo 'no';
        }
    }
}
