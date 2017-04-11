<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
use Cookie;
class yuyueController extends Controller
{
    public function index()
    {
        return view('home.yuyuelaoshi');
    }
    public function register(Request $request)
    {
        $phone = $request->input('phone');
        $code = rand(1000, 9999);
        Cookie::queue('code','1111',3000);
        Cookie::queue('name', 'value', 300);
        $config = [
            'app_key'    => '23746117',
            'app_secret' => 'f0e278be87e2663cb6f47bb876c29deb',
        ];
        //dd($code);
        $client = new Client(new App($config));
        $req    = new AlibabaAliqinFcSmsNumSend;

        $req->setRecNum($phone)
            ->setSmsParam(['code' => $code])
            ->setSmsFreeSignName('德栗家教')
            ->setSmsTemplateCode('SMS_60940366');
            $resp = $client->execute($req);
            return 'y';
    }
    public function registerdo(Request $request)
    {
        $ucode = $request->input('code');
        $scode = Cookie::get('code');
        dd($scode);
        if($ucode == $scode){
            Cookie::queue('code', null , -1);
            return 'y';
        }else{
            return 'n';
        }
    }
}
