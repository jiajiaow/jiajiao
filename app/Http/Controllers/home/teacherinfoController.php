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
        $szd = \DB::table('jjw_position_city')->get();
        $szd2 = \DB::table('jjw_position_county')->get();
//        return view('home.teacherinfo',['list'=>$list,'szd'=>$szd,'sd'=>$sd,'qu'=>$qu]);
        //科目
        $km = \DB::table('jjw_sanji')->get();
        //学校
        $xuexiao = \DB::table('school_t')->where('city_id',session('regionid'))->get();
       //专业类别
        $zhuanye = \DB::table('jjw_major')->get();
        return view('home.teacherinfo',['list'=>$list,'qu'=>$qu,'km'=>$km,'xuexiao'=>$xuexiao,'zhuanye'=>$zhuanye]);
    }

    //修改教员个人中心
    public function doteacherinfo(Request $request){
        $file = $request->file('upfile');
        if($_POST['teaches'] == ''){
            $_POST['teaches']=NULL;
        }
        if($_POST['tc_jl'] == '0'){
            $_POST['tc_jl'] == "一年以内";
        }else if($_POST['tc_jl'] == '5'){
            $_POST['tc_jl'] == "四年以上";
        }
        if(empty($_POST['shu'])){
            $_POST['shu']=NULL;
        }
        if(empty($_POST['han'])){
            $_POST['han']=NULL;
        }
        if(empty($_POST['gaokao'])){
            $_POST['gaokao']=NULL;
        }
        if(empty($_POST['jiguan'])){
            $_POST['jiguan']=NULL;
        }
        if(empty($_POST['szd'])){
            $_POST['szd']=NULL;
        }
        if($_POST['tc_now_lives'] == '--请选择--'){
            $_POST['tc_now_lives'] = NULL;
        }
        //echo $_POST['shu'];
        dd($_POST);

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
            $data =[
                'tc_name'=>$_POST['tc_name'],
                'tc_qq'=>$_POST['tc_qq'],
                'tc_wechat'=>$_POST['tc_wechat'],
                'tc_email'=>$_POST['email'],
                'tc_phone_bak'=>$_POST['phone_bak'],
                'tc_now_lives'=>$_POST['qu'],
                'tc_shu'=>$_POST['shu'],
                'tc_han'=>$_POST['han'],
                'tc_school'=>$_POST['tc_school'],
                'tc_school_bak'=>$_POST['tc_school_bak'],
                'tc_sex'=>$_POST['sex'],
                'tc_nj'=>$_POST['nj'],
                'tc_class'=>$_POST['tc_class'],
                'tc_hsam'=>$_POST['tc_hsam'],
                'tc_hight'=>$_POST['gaokao'],
                'tc_jiguan'=>$_POST['jiguan'],
                'tc_zhuanye'=>$_POST['zhuanye'],
                'tc_spl'=>$_POST['tc_spl'],
                'tc_type'=>$_POST['tc_type'],
                'tc_jl'=>$_POST['tc_jl'],
                'tc_citys'=>$_POST['szd'],
                'tc_now_lives'=>$_POST['qu'],
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
            $data =[
                'tc_name'=>$_POST['tc_name'],
                'tc_qq'=>$_POST['tc_qq'],
                'tc_wechat'=>$_POST['tc_wechat'],
                'tc_email'=>$_POST['email'],
                'tc_phone_bak'=>$_POST['phone_bak'],
                'tc_now_lives'=>$_POST['qu'],
                'tc_shu'=>$_POST['shu'],
                'tc_han'=>$_POST['han'],
                'tc_school'=>$_POST['tc_school'],
                'tc_school_bak'=>$_POST['tc_school_bak'],
                'tc_sex'=>$_POST['sex'],
                'tc_nj'=>$_POST['nj'],
                'tc_class'=>$_POST['tc_class'],
                'tc_hsam'=>$_POST['tc_hsam'],
                'tc_hight'=>$_POST['gaokao'],
                'tc_jiguan'=>$_POST['jiguan'],
                'tc_zhuanye'=>$_POST['zhuanye'],
                'tc_spl'=>$_POST['tc_spl'],
                'tc_type'=>$_POST['tc_type'],
                'tc_jl'=>$_POST['tc_jl'],
                'tc_citys'=>$_POST['szd'],
                'tc_now_lives'=>$_POST['qu'].$_POST['tc_now_lives'],
                'tc_years'=>$_POST['tc_years'],
                'tc_teaches'=>$_POST['teaches'],
                'tc_photo'=>$_POST['tc_photo'],
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
    //修改案例
    public function docase(Request $request){
        $file = $request->file('file');
        if(!empty($file)){
            $ext = $file->getClientOriginalExtension();//获取后缀
            //echo $ext;
            $filename = time().rand(1000,9999).".".$ext;//新文件名
            $file->move("home/zs/",$filename);//移动目录
            $img = "/home/zs/".$filename;//组成路径
            $data = [
                'tc_sjkm'=>$_POST['sjkm'],
                'tc_sjkm2'=>$_POST['sjkm2'],
                'tc_sjkm3'=>$_POST['sjkm3'],
                'tc_case'=>$_POST['tc_case'],
                'tc_case2'=>$_POST['tc_case2'],
                'tc_case3'=>$_POST['tc_case3'],
                'tc_casetime'=>$_POST['tc_casetime'],
                'tc_casetime2'=>$_POST['tc_casetime2'],
                'tc_casetime3'=>$_POST['tc_casetime3'],
                'tc_comments'=>$_POST['tc_comments'],
                'tc_certificate'=>$_POST['zs'],
                'tc_zsimage'=>$img,
            ];
            $list = \DB::table('jjw_teachers')->where('id',$_POST['id'])->update($data);
            if($list){
                return "y";
            }
        }else{
            $data = [
                'tc_sjkm'=>$_POST['sjkm'],
                'tc_sjkm2'=>$_POST['sjkm2'],
                'tc_sjkm3'=>$_POST['sjkm3'],
                'tc_case'=>$_POST['tc_case'],
                'tc_case2'=>$_POST['tc_case2'],
                'tc_case3'=>$_POST['tc_case3'],
                'tc_casetime'=>$_POST['tc_casetime'],
                'tc_casetime2'=>$_POST['tc_casetime2'],
                'tc_casetime3'=>$_POST['tc_casetime3'],
                'tc_comments'=>$_POST['tc_comments'],
                'tc_certificate'=>$_POST['zs'],
            ];
            $list = \DB::table('jjw_teachers')->where('id',$_POST['id'])->update($data);
            if($list){
                return "y";
            }
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
         $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->orderBy('tc_reboot', 'desc')->orderBy('id','desc')->paginate(10);
          //dd($list);
        //学校
        $xx= DB::table('school_t')->where('city_id',session('regionid'))->limit(10)->get();
        if(isset($_GET['g'])){
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_sex',$_GET['g'])->orderBy('tc_reboot', 'desc')->orderBy('id','desc')->paginate(10);
        }
       //dd($xx);
        //自定义分页
        $num=$list->lastPage();
        $nextpage=$num-$list->currentPage() ==0 ? $num : $list->currentPage()+1 ;
        $lastpage=$list->currentPage()-1 <0 ? 1 : $list->currentPage()-1 ;
        $list->next=$nextpage;
        $list->last=$lastpage;

        return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
    }
    //德栗教员库更多 金牌 专职 学员教师
    public function facultys(Request $request,$id){
        $quyu = \DB::table('jjw_position_county')->where('city_id',Session('regionid'))->get();
        //教员
        $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai',$id)->orderBy('id','desc')->paginate(10);;
        //学校
        $xx= DB::table('school_t')->where('city_id',session('regionid'))->limit(10)->get();
        // dd($xy);
        //自定义分页
        $num=$list->lastPage();
        $nextpage=$num-$list->currentPage() ==0 ? $num : $list->currentPage()+1 ;
        $lastpage=$list->currentPage()-1 <0 ? 1 : $list->currentPage()-1 ;
        $list->next=$nextpage;
        $list->last=$lastpage;

        return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
    }
    //热门
    public function hot(Request $reuqest,$type,$key){
        $quyu = \DB::table('jjw_position_county')->where('city_id',Session('regionid'))->get();
        //教员
        if($type=="学科"){
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_subjects','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);
        }else if($type=="区域"){
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_area','like','%'.$key.'%')->orderBy('id','desc')->orderBy('tc_reg_date','desc')->paginate(10);
        }else if($type=="学院"){
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_school','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);

        }
        //自定义分页
        $num=$list->lastPage();
        $nextpage=$num-$list->currentPage() ==0 ? $num : $list->currentPage()+1 ;
        $lastpage=$list->currentPage()-1 <0 ? 1 : $list->currentPage()-1 ;
        $list->next=$nextpage;
        $list->last=$lastpage;

        //dd($list);
        //学校
        $xx= DB::table('school_t')->where('city_id',session('regionid'))->limit(10)->get();
        // dd($xy);
        return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);

    }

//    public function facultyp(Request $request,$y){
//        dd($y);
//        检测老师是否存在
//       var_dump($_POST['key'][0]);
//        switch (isset($_POST['key'][0]))
//        {
//            case isset($_POST['key'][0]['老师性别：']):
//                $sex = $_POST['key'][0]['老师性别：']=='男'?'1':'0';
//                $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_sex',$sex)->orderBy('id','desc')->paginate(10);
//                $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_sex',$sex)->orderBy('id','desc')->get();
//                echo "<pre>";
//                var_dump($list);
//                echo "</pre>";
//                return $list;
//                break;
//        }
//    }

    public function facultyp(Request $request,$y){
        //dd($request);
        $type = substr($y,0,1);
        $num = substr($y,1,20);
        //echo $num;
        //区域
        $quyu = \DB::table('jjw_position_county')->where('city_id',Session('regionid'))->get();
        //学院
        $xx= DB::table('school_t')->where('city_id',session('regionid'))->limit(10)->get();
        //搜索学院
        if($type == 'e'){
            $xy = \DB::table('school_t')->where('city_id',session('regionid'))->where('id',$num)->orderBy('id','desc')->first();
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_school',$xy->school_name)->orderBy('id','desc')->paginate(10);
            //自定义分页
            $num=$list->lastPage();
            $nextpage=$num-$list->currentPage() ==0 ? $num : $list->currentPage()+1 ;
            $lastpage=$list->currentPage()-1 <0 ? 1 : $list->currentPage()-1 ;
            $list->next=$nextpage;
            $list->last=$lastpage;

            return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
            //科目
        }else if($type == 'k'){
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_subjects','like','%'.$num.'%')->orderBy('id','desc')->paginate(10);
            //自定义分页
            $num=$list->lastPage();
            $nextpage=$num-$list->currentPage() ==0 ? $num : $list->currentPage()+1 ;
            $lastpage=$list->currentPage()-1 <0 ? 1 : $list->currentPage()-1 ;
            $list->next=$nextpage;
            $list->last=$lastpage;

            return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
            //男女
        }else if($type == 'g'){
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_sex',$num)->orderBy('id','desc')->paginate(10);
            //自定义分页
            $num=$list->lastPage();
            $nextpage=$num-$list->currentPage() ==0 ? $num : $list->currentPage()+1 ;
            $lastpage=$list->currentPage()-1 <0 ? 1 : $list->currentPage()-1 ;
            $list->next=$nextpage;
            $list->last=$lastpage;

            return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
            //区域
        }else if($type == 'q'){
            $qu = \DB::table('jjw_position_county')->where('id',$num)->first();
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_area','like','%'.$qu->county_name.'%')->orderBy('id','desc')->paginate(10);
            //自定义分页
            $num=$list->lastPage();
            $nextpage=$num-$list->currentPage() ==0 ? $num : $list->currentPage()+1 ;
            $lastpage=$list->currentPage()-1 <0 ? 1 : $list->currentPage()-1 ;
            $list->next=$nextpage;
            $list->last=$lastpage;

            return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
        }
    }


    //测试s筛选
    public function ss(Request $request,$t){
        dd($t);
        var_dump($_GET);
        $x = $_GET[x];
        $p = $_GET[p];
        $s = $_GET[s];
        $y = $_GET[y];
        $t = $_GET[t];
        //区域
        $quyu = \DB::table('jjw_position_county')->where('city_id',Session('regionid'))->get();
        //学院
        $xx= DB::table('school_t')->where('city_id',session('regionid'))->limit(10)->get();

        $list = \DB::table('jjw_teachers')
            ->where('tc_city_id',session('regionid'))
            ->where('tc_school',$_GET['x'])
            ->orderBy('id','desc')
            ->paginate(10);
       // dd($where);
        return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
    }
}
