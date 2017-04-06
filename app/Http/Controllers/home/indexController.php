<?php
namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
class indexController extends Controller{
    public function getCity($ip = '')
    {
        if($ip == ''){
            $url = "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json";
            $ip=json_decode(file_get_contents($url),true);
            $data = $ip;
        }else{
            $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
            $ip=json_decode(file_get_contents($url));
            if((string)$ip->code=='1'){
               return false;
            }
            $data = (array)$ip->data;
        }
        return $data['city'];
    }

    public function index(Request $request)
    {
        //调用getCity方法
        $dq = $this->getCity();
        //模糊查询jjw_position_city表
        $re = DB::table('jjw_position_city')->where('city_name','like','%' . $dq . '%')->get();
        dd($re);
    }
    public function change(Request $request)
    {
        $re = DB::table('jjw_position_city')->get();
        $dq = DB::table('jjw_position_provice')->get();
        //dd($re,$dq);
        return view('home.change',['re' => $re,'data' => $dq]);
    }

}

