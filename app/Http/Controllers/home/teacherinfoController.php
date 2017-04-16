<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
use App\Http\Requests;
use \Cookie;
class teacherinfoController extends Controller
{
    //教员个人中心
    public function index(){
        $phone = session('tc_phone');
        //教员信息
        $list = \DB::table('jjw_teachers')->where('tc_phone',$phone)->first();
        //锁定当前所在省
        //dd($list);
        if($list == null){
            return redirect('/login.html')->with('msg','请您先登录!');
        }
        //锁定城市
            $sd = \DB::table('jjw_teachers as t')
                ->join('jjw_position_city as c', 't.tc_city_id', '=', 'c.city_id')
                ->join('jjw_position_provice as p', 'c.province_id', '=', 'p.provice_id')
                ->select('p.provice_name','c.city_name')
                ->where('t.tc_city_id','=',"$list->tc_city_id")
                ->get();
        //存入session
       // session(['szd' => $sd[0]->provice_name,'szds'=>$sd[0]->city_name]);
        //地区
        $qu = \DB::table('jjw_position_county')->where('city_id',$list->tc_city_id)->get();
        //所在地
       // $szd = \DB::table('jjw_position_provice')->get();
//        return view('home.teacherinfo',['list'=>$list,'szd'=>$szd,'sd'=>$sd,'qu'=>$qu]);
        return view('home.teacherinfo',['list'=>$list,'qu'=>$qu]);

    }

    //修改教员个人中心
    public function doteacherinfo(Request $request){
        $file = $request->file('upfile');

        if(!empty($file)){
            $ext = $file[0]->getClientOriginalExtension();//获取后缀
            //echo $ext;
            $filename = time().rand(1000,9999).".".$ext;//新文件名
            $file[0]->move("home/photo/",$filename);//移动目录
            $photo = "/home/photo/".$filename;//组成路径
            //echo $photo; echo $filename;
            // 获取数据
            //dd($request);
            //dd($file);
            if($_POST['teaches'] == ''){
                $_POST['teaches']=null;
            }
            if($_POST['tc_jl'] == '0'){
                $_POST['tc_jl'] == "一年以内";
            }else if($_POST['tc_jl'] == '5'){
                $_POST['tc_jl'] == "四年以上";
            }
            $data =[
                'tc_name'=>$_POST['tc_name'],
                'tc_qq'=>$_POST['tc_qq'],
                'tc_wechat'=>$_POST['tc_wechat'],
                'tc_email'=>$_POST['email'],
                'tc_phone_bak'=>$_POST['phone_bak'],
                'tc_now_lives'=>$_POST['sz'],
                'tc_shu'=>$_POST['sj'],
                'tc_han'=>$_POST['hj'],
                'tc_school'=>$_POST['tc_school'],
                'tc_school_bak'=>$_POST['tc_school_bak'],
                'tc_sex'=>$_POST['sex'],
                'tc_nj'=>$_POST['nj'],
                'tc_class'=>$_POST['tc_class'],
                'tc_hsam'=>$_POST['tc_hsam'],
                'tc_hight'=>$_POST['chengshi'],
                'tc_jiguan'=>$_POST['jiguan'],
                'tc_zhuanye'=>$_POST['zhuanye'],
                'tc_spl'=>$_POST['tc_spl'],
                'tc_type'=>$_POST['tc_type'],
                'tc_jl'=>$_POST['tc_jl'],
                'tc_citys'=>$_POST['qu'].$_POST['tc_now_lives'],
                'tc_years'=>$_POST['tc_years'],
                'tc_teaches'=>$_POST['teaches'],
                'tc_photo'=>$photo,
            ];
           // dd($data);
            //写入数据库
            $list = \DB::table('jjw_teachers')->where('tc_phone',$_POST['tc_phone'])->update($data);
          if($list){
               return redirect('/teacherinfo.html');
            }
        }else{
            //dd($request);
            if($_POST['teaches'] == ''){
                $_POST['teaches']=null;
            }
            if($_POST['tc_jl'] == '0'){
                $_POST['tc_jl'] == "一年以内";
            }else if($_POST['tc_jl'] == '5'){
                $_POST['tc_jl'] == "四年以上";
            }
            $data =[
                'tc_name'=>$_POST['tc_name'],
                'tc_qq'=>$_POST['tc_qq'],
                'tc_wechat'=>$_POST['tc_wechat'],
                'tc_email'=>$_POST['email'],
                'tc_phone_bak'=>$_POST['phone_bak'],
                'tc_now_lives'=>$_POST['sz'],
                'tc_shu'=>$_POST['sj'],
                'tc_han'=>$_POST['hj'],
                'tc_school'=>$_POST['tc_school'],
                'tc_school_bak'=>$_POST['tc_school_bak'],
                'tc_sex'=>$_POST['sex'],
                'tc_nj'=>$_POST['nj'],
                'tc_class'=>$_POST['tc_class'],
                'tc_hsam'=>$_POST['tc_hsam'],
                'tc_hight'=>$_POST['chengshi'],
                'tc_jiguan'=>$_POST['jiguan'],
                'tc_zhuanye'=>$_POST['zhuanye'],
                'tc_spl'=>$_POST['tc_spl'],
                'tc_type'=>$_POST['tc_type'],
                'tc_jl'=>$_POST['tc_jl'],
                'tc_citys'=>$_POST['qu'].$_POST['tc_now_lives'],
                'tc_years'=>$_POST['tc_years'],
                'tc_teaches'=>$_POST['teaches'],
                'tc_photo'=>'',
            ];
           //dd($data);
            //写入数据库
            $list = \DB::table('jjw_teachers')->where('tc_phone',$_POST['tc_phone'])->update($data);
            if($list){
                return redirect('/teacherinfo.html');
            }
        }


    }

    //例子：北京市 湖南省
    public function sheng(Request $request)
    {
        $list =  \DB::table('jjw_position_provice')->get();
        return $list;
    }
    //市辖县
    public function xian(Request $request)
    {
        $pid = $_POST['pid'];
        $list = \DB::table('jjw_position_city')->where('province_id',$pid)->get();
        return $list;
    }

    //当前区域
    public function qu(){
        $cid = $_POST['cid'];
        $list = \DB::table('jjw_position_county')->where("city_id",$cid)->get();
        return $list;
    }

    //修改授课科目
    public function dokemu(Request $request){
        if($_POST['teach_mode'] != null){
            $tc_tutoring = implode(" ",$_POST['teach_mode']);
        }else{
            $_POST['teach_mode'] = '';
        }
        //判断是否等于空
        if($_POST['time'] != null){
            $tc_sktime = implode(" ",$_POST['time']);
        }else{
            $_POST['time'] ='';
        }
        //die;
        $data = [
            'tc_area'=>$_POST['tc_area'],
            'tc_salary'=>$_POST['pay'],
            'tc_subjects'=>$_POST['tc_subjects'],
            'tc_tutoring'=>$tc_tutoring,
            'tc_sktime'=>$tc_sktime,
        ];
        //dd($data);
        $list = \DB::table('jjw_teachers')->where('id',$_POST['tc_id'])->update($data);
        if($list){
            return "y";
        }

    }
    //栗志-德栗教师详细
    public function teacher(Request $request,$m){
        $list = \DB::table('jjw_teachers')->where('id',$m)->first();
        //判断是栗志还是德栗
        if(session('Template') =='1') {
            return view('home.teacher', ['list' => $list]);
        }else if(session('Template') =='2'){
            return view('delijiajiao.faculty_content',['list'=>$list]);
        }
    }

    //德栗教员库
    public function faculty(Request $request){

        // $list = \DB::table('jjw_position_city')->where('city_id',Session('regionid'))->first();
        //区域
         $quyu = \DB::table('jjw_position_county')->where('city_id',Session('regionid'))->get();
        //教员
         $list = \DB::table('jjw_teachers')->paginate(10);
        //学校表市id
        $xxsid= DB::table('city_info')->where('ci_city','like','%'.substr(session('regionname'),0,6).'%')->first();
        //学校
        $xx= DB::table('shool_info')->where('sh_city',$xxsid->ci_id)->limit(10)->get();
      // dd($xy);
        return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
    }
}
