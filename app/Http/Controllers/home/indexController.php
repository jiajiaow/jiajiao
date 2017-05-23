<?php
namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
use \Cookie;
class indexController extends Controller{

    public function __construct()
    {
        //正则表达式
        $pattern = '/([^*]+)\.([^\.\/]+)\.(com|net|org|cn)/';
        //获取绝对url
        $url = $_SERVER['HTTP_HOST'];
        preg_match($pattern,$url,$matches);
        //获取当前域名
        $x = explode(".",$url);
        //dd($x);
        $qz = $x[0];
        $zy = $x[1];
        $hz = $x[2];
        if($qz == 'www'){
            $zlpc = substr($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],0,20);
            $zlurl = substr($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],0,27);
            $dlpc = substr($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],0,19);
            $dlurl = substr($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],0,26);
        }else{
            $zlpc = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,16);
            $zlurl = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,23);
            $dlpc = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,15);
            $dlurl = substr($zy.'.'.$hz. $_SERVER["REQUEST_URI"],0,22);
        }
        if($zlurl == 'www.lizhijiajiao.com/mobile'){
            //查询数据
            $re = DB::table('jjw_position_city')->where('city_id','440100000000')->first();
            //模板
            session(['Templatesj' => '3']);
            //地区名称
            session(['regionname' => $re->city_name]);
            //地区id
            session(['regionid' => $re->city_id]);

        }else if($dlurl == 'www.delijiajiao.com/mobile'){
            //地区id
            session(['regionid' => '440100000000']);
            //模板
            session(['Template' => '4']);

            $re = DB::table('jjw_position_city')->where('city_id','440100000000')->first();
            //地区名称
            session(['regionname' => $re->title]);
            session(['phone' => $re->phone]);
            session(['fz_wxhao' => $re->fz_wxhao]);
            session(['fz_qqhao' => $re->fz_qqhao]);
            session(['cityname' => $re->city_name]);
            session(['fz_wx' => $re->fz_wx]);
            session(['fz_qq' => $re->fz_qq]);
        }else{
            if($zlurl == 'lizhijiajiao.com/mobile'){
                $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                //模板
                session(['Templatesj' => '3']);
                //地区id
                session(['regionid' => $re->city_id]);
                //地区名称
                session(['regionname' => $re->city_name]);
            }else if($dlurl == 'delijiajiao.com/mobile'){
                echo 'delijiajiao.com/mobile';die;
                $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                //模板
                session(['Template' => '4']);
                //地区id
                session(['regionid' => $re->city_id]);
                //地区名称
                session(['regionname' => $re->title]);
                session(['phone' => $re->phone]);
            }else{

                if($zlpc == 'www.lizhijiajiao.com'){
                    //地区id
                    session(['regionid' => '440100000000']);
                    //模板
                    session(['Template' => '1']);
                    //查询数据
                    $re = DB::table('jjw_position_city')->where('city_id','440100000000')->first();
                    //地区名称
                    session(['regionname' => $re->city_name]);
                    return 'zlpc';
                }elseif($dlpc == 'www.delijiajiao.com'){

                    //地区id
                    session(['regionid' => '440100000000']);
                    //模板
                    session(['Template' => '2']);

                    $re = DB::table('jjw_position_city')->where('city_id','440100000000')->first();
                    //dd($re);
                    //地区名称
                    session(['regionname' => $re->title]);
                    session(['phone' => $re->phone]);
                    session(['fz_wxhao' => $re->fz_wxhao]);
                    session(['fz_qqhao' => $re->fz_qqhao]);
                    session(['cityname' => $re->city_name]);
                    session(['fz_wx' => $re->fz_wx]);
                    session(['fz_qq' => $re->fz_qq]);
                }else{
                    if($zy == 'lizhijiajiao'){
                        $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                        //模板

                        session(['Template' => '1']);
                        //地区id
                        session(['regionid' => $re->city_id]);
                        //地区名称
                        session(['regionname' => $re->city_name]);
                    }else{
                        $re = DB::table('jjw_position_city')->where('prefix',$qz)->first();
                        //模板
                        session(['Template' => '2']);
                        //地区id
                        session(['regionid' => $re->city_id]);
                        //地区名称
                        session(['regionname' => $re->title]);
                        session(['phone' => $re->phone]);
                        session(['fz_wxhao' => $re->fz_wxhao]);
                        session(['cityname' => $re->city_name]);
//                    /dd($re);
                    }
                }

            }
        }

    }

    /**
     *首页 网站判断
     *
     */
    public function index(Request $request)
    {
        //调用构造方法
        $this->__construct();
            if(session('Template') == '2'){ //PC德栗
    //            $s = DB::table('jjw_position_city')->where('city_id',session('regionid'))->first();
    //            $x = DB::table('city_info')->where('ci_city','like',mb_substr($s->city_name,0,2).'%')->first();
    //            $xx = DB::table('shool_info')->where('sh_city',$x->ci_id)->limit(8)->get();
                //热门学校  1为热门,查6条
                $xx= DB::table('school_t')->where('city_id',session('regionid'))->where('hot',1)->limit(6)->get();
                //热门地区 1为热门,查6条
                $dq = DB::table('jjw_position_county')->where('city_id',session('regionid'))->where('hot',1)->limit(6)->get();
                //金牌 专职 学生
                $jy = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_sort','1')->orderBy('tc_dltimes','DESC')->limit(25)->get();
                //$zhuanzhi = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_sort','1')->orderBy('tc_dltimes','DESC')->limit(25)->get();
                //dd($jy);
                //最新学生订单
                $data = DB::table('jjw_order')->where('status','!=','3')->where('city_id',session('regionid'))->limit(6)->orderBy('id', 'DESC')->orderBy('time', 'DESC')->get();
                //热门学科
                $xueke = DB::table('jjw_sanji')->where('hot','1')->limit(8)->get();
                //return view('delijiajiao.index',['jinpai'=>$jinpai,'xueshen'=>$xueshen,'zhuanzhi'=>$zhuanzhi,'data'=>$data,'xx' => $xx,'xueke'=>$xueke,'dq'=>$dq]);
                return view('delijiajiao.index',['jy'=>$jy,'data'=>$data,'xx' => $xx,'xueke'=>$xueke,'dq'=>$dq]);
            }elseif(session('Template') == '4'){ //手机端德栗
                //热门学校  1为热门,查6条
                $xx= DB::table('school_t')->where('city_id',session('regionid'))->where('hot',1)->limit(6)->get();
                //热门地区 1为热门,查6条
                $dq = DB::table('jjw_position_county')->where('city_id',session('regionid'))->where('hot',1)->limit(6)->get();
                //金牌 专职 学生
                $jy = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_sort','1')->orderBy('tc_dltimes','DESC')->limit(25)->get();
                //$zhuanzhi = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_sort','1')->orderBy('tc_dltimes','DESC')->limit(25)->get();
                //dd($jy);
                //最新学生订单
                $data = DB::table('jjw_order')->where('status','!=','3')->where('city_id',session('regionid'))->limit(6)->orderBy('id', 'DESC')->orderBy('time', 'DESC')->get();
                //热门学科
                $xueke = DB::table('jjw_sanji')->where('hot','1')->limit(8)->get();
                //return view('delijiajiao.index',['jinpai'=>$jinpai,'xueshen'=>$xueshen,'zhuanzhi'=>$zhuanzhi,'data'=>$data,'xx' => $xx,'xueke'=>$xueke,'dq'=>$dq]);
                //教学资源
                $zhiyuan = DB::table('jjw_navigation')->orderBy('dh_status','desc')->get();
                $timu = DB::table('jjw_articlelist')->orderBy('ar_status','desc')->paginate(5);
                return view('phonedl.index',['jy'=>$jy,'data'=>$data,'xx' => $xx,'xueke'=>$xueke,'dq'=>$dq,'zhiyuan'=>$zhiyuan,'timu'=>$timu]);
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
