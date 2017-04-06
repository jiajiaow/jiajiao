<?php
namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
class indexController extends Controller{
    /**
    *获取客户端地区
    *
    */
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
    /**
    *首页 网站判断
    *
    */
    public function index(Request $request)
    {
        //获取url
        $url = 'http://'.$_SERVER['SERVER_NAME'];
        if($url == 'http://www.jjw.com'){
            //当前客户的站
            $dq = $this->getCity();
            $re = DB::table('jjw_position_city')->where('city_name','like','%' . $dq . '%')->first();
            session(['regionid' => $re->city_id]);
            return $re->city_name.'全国站--当前客户---地区id'.$re->city_id;
        }else{
            if(preg_match("#http://(.*?)\.#i",$url,$match)){
                if($match[1] == 'www'){
                    $re = DB::table('jjw_position_city')->where('url',$url)->first();
                    if($re){
                        //独立分站
                        session(['dlwz' => $re->city_id]);
                        session(['regionid' => $re->city_id]);
                        dd($request->session()->all());
                        return '独立网站---域名为'.$url.'独立网站id--'.$re->city_id;
                    }else{
                        //分站为开通
                        return '分站为开通';
                    }
                }else{
                    //全国分站
                    $re = DB::table('jjw_position_city')->where('prefix',$match[1])->first();
                    session(['regionid' => $re->city_id]);
                    return $re->city_name.'全国二级分站----当前分站id'.$re->city_id;
                }
            }
        }
    }
    /**
    *网站地区切换
    *
    */
    public function change(Request $request)
    {
        $re = DB::table('jjw_position_city')->get();
        $dq = DB::table('jjw_position_provice')->get();
        return view('home.change',['re' => $re,'data' => $dq]);
    }
}
