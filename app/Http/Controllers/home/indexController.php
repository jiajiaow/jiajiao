<?php
namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
use \Cookie;
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
    public function index(Request $request,$id = null)
    {
        //获取当前域名
        $url = $_SERVER['SERVER_NAME'];
        $x = explode(".",$url);
        $qz = $x[0]."";
        $zy = $x[1];
        $urlml = substr($_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"],0,39);
        if($urlml == 'www.lizhijiajiao.com/mobile'){
            //地区id
            setcookie("regionid","110100000000");
            //模板
            setcookie("Template","3");
            //查询数据
            $re = DB::table('jjw_position_city')->where('city_id','110100000000')->first();
            //地区名称
            session(['regionname' => $re->city_name]);
        }else if($urlml == 'www.delijiajiao.com/mobile'){
            //模板id
            setcookie("Template","4");
            //地区id
            setcookie("regionid","110100000000");

            $re = DB::table('jjw_position_city')->where('city_id','110100000000')->first();
            //地区名称
            session(['regionname' => $re->title]);
        }else{
            if($urlml == $qz.'.'.'lizhijiajiao.com/mobile'){
                $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                //模板id
                setcookie("Template","3");
                //地区id
                setcookie("regionid",$re->city_id);
                //地区名称
                session(['regionname' => $re->city_name]);
            }else if($urlml == $qz.'.'.'delijiajiao.com/mobile'){
                $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                //模板id
                setcookie("Template","4");
                //地区id
                setcookie("regionid",$re->city_id );
                //地区名称
                session(['regionname' => $re->title]);
            }
        }
        if($url == 'www.lizhijiajiao.com'){
            //地区id
            setcookie("regionid","110100000000");
            //模板
            setcookie("Template","1");
            //查询数据
            $re = DB::table('jjw_position_city')->where('city_id','110100000000')->first();
            //地区名称
            session(['regionname' => $re->city_name]);
            return view('home.index');
        }elseif($url == 'www.delijiajiao.com'){
            //模板id
            setcookie("Template","2");
            //地区id
            setcookie("regionid","110100000000");

            $re = DB::table('jjw_position_city')->where('city_id','110100000000')->first();
            //地区名称
            session(['regionname' => $re->title]);
            return view('home.index');
        }else{
            if($zy == 'lizhijiajiao'){
                $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                //模板id
                setcookie("Template","1");
                //地区id
                setcookie("regionid",$re->city_id);
                //地区名称
                session(['regionname' => $re->city_name]);
                return view('home.index');
            }else{
                $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                //模板id
                setcookie("Template","2");
                //地区id
                setcookie("regionid",$re->city_id );
                //地区名称
                session(['regionname' => $re->title]);
                return view('home.index');
            }
        }
    }
    /**
    *网站地区切换
    **/
    public function change(Request $request)
    {
        $re = DB::table('jjw_position_city')->get();
        $dq = DB::table('jjw_position_provice')->get();
        return view('home.change',['re' => $re,'data' => $dq]);
    }
    public function login()
    {
        return '登录';
    }
}
