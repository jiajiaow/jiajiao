<?php
namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
use \Cookie;
class indexController extends Controller{
    /**
    *首页 网站判断
    *
    */
    public function index(Request $request)
    {
        if(session('Template') == '2'){

//            $s = DB::table('jjw_position_city')->where('city_id',session('regionid'))->first();
//            $x = DB::table('city_info')->where('ci_city','like',mb_substr($s->city_name,0,2).'%')->first();
//            $xx = DB::table('shool_info')->where('sh_city',$x->ci_id)->limit(8)->get();
            //热门学校  1为热门,查6条
            $xx= DB::table('school_t')->where('city_id',session('regionid'))->where('hot',1)->limit(6)->get();
            //热门地区 1为热门,查6条
            $dq = DB::table('jjw_position_county')->where('city_id',session('regionid'))->where('hot',1)->limit(6)->get();
            //查询地区金牌教员
            //dd($xx);
            //var_dump($xx['0']->sh_shool);
            //dd(session('regionid'));
            $jinpai = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','2')->orderBy('tc_dltimes','DESC')->limit(5)->get();
            //dd($jinpai);
            //查询学生教员
            $xueshen = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','0')->orderBy('tc_dltimes','DESC')->limit(5)->get();
            //查询专职教员
            //dd($xueshen);
            $zhuanzhi = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','1')->orderBy('tc_dltimes','DESC')->limit(5)->get();
            //最新学生订单
            $data = DB::table('jjw_order')->where('city_id',session('regionid'))->limit(6)->orderBy('time', 'DESC')->orderBy('id', 'DESC')->get();
            //热门学科
            $xueke = DB::table('jjw_sanji')->where('hot','1')->limit(8)->get();
            //dd($jinpai);

            return view('delijiajiao.index',['jinpai'=>$jinpai,'xueshen'=>$xueshen,'zhuanzhi'=>$zhuanzhi,'data'=>$data,'xx' => $xx,'xueke'=>$xueke,'dq'=>$dq]);
        }
        //查询地区金牌教员
        $jinpai = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','2')->limit(4)->get();

        //查询地区学生教员
        $xueshen = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','0')->limit(4)->get();
        //查询地区专职教员
        $zhuanzhi = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','1')->limit(4)->get();
        // dd($zhuanzhi);
        return view('home.index',['jinpai'=>$jinpai,'xueshen'=>$xueshen,'zhuanzhi'=>$zhuanzhi]);
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
