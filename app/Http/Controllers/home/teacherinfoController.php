<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
use App\Http\Requests;
use \Cookie;
use App\Http\Controllers\home\indexController;
class teacherinfoController extends Controller
{
    //教员个人中心
    public function index(){
        if(session('Template') == '2') {
            $phone = session('tc_phone');
            //教员信息
            $list = \DB::table('jjw_teachers')->where('tc_phone', $phone)->first();
            //锁定当前所在省
            //dd($list);
            if ($list == null) {
                return redirect('/login.html')->with('msg', '请您先登录!');
            }
            //锁定城市
            /*$sd = \DB::table('jjw_teachers as t')
                ->join('jjw_position_city as c', 't.tc_city_id', '=', 'c.city_id')
                ->join('jjw_position_provice as p', 'c.province_id', '=', 'p.provice_id')
                ->select('p.provice_name', 'c.city_name')
                ->where('t.tc_city_id', '=', "$list->tc_city_id")
                ->first();*/
            //dd($sd);

            //地区
            $qu = \DB::table('jjw_position_county')->where('city_id', $list->tc_city_id)->get();

            //所在地
           // $szd = \DB::table('jjw_position_city')->get();
           // $szd2 = \DB::table('jjw_position_county')->get();
            //        return view('home.teacherinfo',['list'=>$list,'szd'=>$szd,'sd'=>$sd,'qu'=>$qu]);
            //科目
            $km = \DB::table('jjw_sanji')->get();
            //学校
            $xuexiao = \DB::table('school_t')->where('city_id', session('regionid'))->get();
            //专业类别
            $zhuanye = \DB::table('jjw_major')->get();
            //教员订单
            /*$dd = \DB::table('jjw_teachers as t')
                ->join('jjw_reorder as r', 't.tc_phone', '=', 'r.tc_id')
                ->join('jjw_order as o', 'o.id', '=', 'r.oid')
                ->select('o.id', 'o.time', 'o.user_name', 'o.grade', 'o.user_phone', 'r.t_status', 'o.user_situation as beizhu')
                ->where('t.tc_city_id', '=', session('regionid'))
                ->where('t.tc_phone', '=', $phone)
                ->get();*/
           // dd($list);
            return view('home.teacherinfo', ['list' => $list, 'qu' => $qu, 'km' => $km, 'xuexiao' => $xuexiao, 'zhuanye' => $zhuanye]);
           // return view('home.teacherinfo', ['list' => $list, 'qu' => $qu, 'km' => $km, 'xuexiao' => $xuexiao, 'zhuanye' => $zhuanye, 'dd' => $dd]);
        }else if(session('Template') == '4'){
            $phone = session('tc_phone');
            //教员信息
            $list = \DB::table('jjw_teachers')->where('tc_phone', $phone)->first();
            //锁定当前所在省
            //dd($list);
            if ($list == null) {
                return redirect('/mobile/login.html')->with('msg', '请您先登录!');
            }
           // dd($list);
            return view('phonedl.teacherinfo',['list'=>$list]);
        }
    }

    //修改教员个人中心
    public function doteacherinfo(Request $request){
        //dd($_POST);
        $file = $request->file('upfile');
        if($_POST['teaches'] == ''){
            $_POST['teaches']='';
        }
        if($_POST['tc_jl'] == '0'){
            $_POST['tc_jl'] == "一年以内";
        }else if($_POST['tc_jl'] == '5'){
            $_POST['tc_jl'] == "四年以上";
        }
        if(empty($_POST['shu'])){
            $_POST['shu']='';
        }
        if(empty($_POST['han'])){
            $_POST['han']='';
        }
        if(empty($_POST['gaokao'])){
            $_POST['gaokao']='';
        }
        if(empty($_POST['jiguan'])){
            $_POST['jiguan']='';
        }
        if(empty($_POST['szd'])){
            $_POST['szd']='';
        }
        if(session('Template') == '2'){
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
                    'tc_yqm'=>$_POST['tc_yqm'],
                ];
                // dd($data);
                //写入数据库
                $list = \DB::table('jjw_teachers')->where('tc_phone',session('tc_phone'))->where('tc_city_id',session('regionid'))->update($data);
                if($list){
                    return redirect('/teacherinfo.html')->with('msg','保存成功，请继续填写下列教学信息。');
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
                    'tc_yqm'=>$_POST['tc_yqm'],
                ];
                //dd($data);
                //写入数据库
                $list = \DB::table('jjw_teachers')->where('tc_phone',session('tc_phone'))->where('tc_city_id',session('regionid'))->update($data);
                if($list){
                    return redirect('/teacherinfo.html')->with('msg','保存成功，请继续填写下列教学信息。');
                }else{
                    return redirect('/teacherinfo.html')->with('msg','保存成功，请继续填写下列教学信息。');
                }
            }
        }else{

        }


    }

    //上传身份证
    public function up_sfz_xsz(Request $request){
        $file = $request->file('upfile');
        //zt  状态 == 1 是身份证 否则是 学生证
        if(session('Template') == '2') {
            if ($_POST['zt'] == '1') {
                if (!empty($file)) {
                    $ext = $file->getClientOriginalExtension();//获取后缀
                    if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                        return back()->with('msg', '上传格式错误,请重新选择!');
                    } else {
                        //限制上传图片大小 200000  | 200k
                        if (filesize($file) < '215000') {
                            $filename = session('tc_phone') . '-' . time() . rand(1000, 9999) . "." . $ext;//新文件名 联系人手机号码+时间戳+随机4位数
                            $file->move("delijiajiao/sfz_image/", $filename);//移动目录
                            $sfz = "/delijiajiao/sfz_image/" . $filename;//组成路径
                            $list = \DB::table('jjw_teachers')->where('tc_phone', session('tc_phone'))->where('tc_city_id', session('regionid'))->update(['tc_id_photo' => $sfz]);
                            if ($list) {
                                return back()->with('msg', '身份证上传成功!');
                            }
                        } else {
                            return back()->with('msg', '照片大小超过200k!');
                        }
                    }
                } else {
                    return back()->with('msg', '请选择要上传的身份证照片!');
                }
            } else {
                if (!empty($file)) {
                    $ext = $file->getClientOriginalExtension();//获取后缀
                    if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                        return back()->with('msg', '上传格式错误,请重新选择!');
                    } else {
                        //限制上传图片大小 200000  | 200k
                        if (filesize($file) < '215000') {
                            $filename = session('tc_phone') . '-' . time() . rand(1000, 9999) . "." . $ext;//新文件名 联系人手机号码+时间戳+随机4位数
                            $file->move("delijiajiao/xsz_image/", $filename);//移动目录
                            $xsz = "/delijiajiao/xsz_image/" . $filename;//组成路径
                            $list = \DB::table('jjw_teachers')->where('tc_phone', session('tc_phone'))->where('tc_city_id', session('regionid'))->update(['tc_xszimage' => $xsz]);
                            if ($list) {
                                return back()->with('msg', '学生证上传成功!');
                            }
                        } else {
                            return back()->with('msg', '照片大小超过200k!');
                        }
                    }
                } else {
                    return back()->with('msg', '请选择要上传的学生证照片!');
                }
            }
        }else{
            //栗志
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
       // dd($_POST['teach_mode']);
        if(session('Template') == '2') {
            if ($_POST['teach_mode'] != null) {
                $tc_tutoring = implode(" ", $_POST['teach_mode']);
                /*$noe = false;
                for ($i = 0; $i < strlen($tc_tutorings); $i++) { //遍历整个字符串
                    if ($noe && $tc_tutorings[$i] == ' ') {
                        $tc_tutorings[$i] = ','; //如果当前这个空格之前出现了不是空格的字符
                    } elseif ($tc_tutorings[$i] != ' ') {
                        $noe = true; //当前这个字符不是空格，定义下 $noe 变量
                        $tc_tutoring = $tc_tutorings;
                    }
                }*/
            } else {
                $_POST['teach_mode'] = '';
            }

            //判断是否等于空
            if ($_POST['time'] != null) {
                $tc_sktime = implode(" ", $_POST['time']);
                /*$noe = false;
                for ($i = 0; $i < strlen($tc_sktimes); $i++) { //遍历整个字符串
                    if ($noe && $tc_sktimes[$i] == ' ') {
                        $tc_sktimes[$i] = ','; //如果当前这个空格之前出现了不是空格的字符
                    } elseif ($tc_sktimes[$i] != ' ') {
                        $noe = true; //当前这个字符不是空格，定义下 $noe 变量
                        $tc_sktime = $tc_sktimes;
                    }
                }*/
            } else {
                $_POST['time'] = '';
            }
            //die;
            // dd($tc_sktime);
            $data = [
                'tc_area' => $_POST['tc_area'],
                'tc_salary' => $_POST['pay'],
                'tc_subjects' => $_POST['tc_subjects'],
                'tc_tutoring' => $tc_tutoring,
                'tc_sktime' => $tc_sktime,
            ];
            //dd($data);
            $list = \DB::table('jjw_teachers')->where('id', $_POST['tc_id'])->update($data);
            if ($list) {
                return "y";
            }
        }else{
            //栗志
        }
    }
    //修改案例
    public function docase(Request $request){
        if(session('Template') == '2') {
            $file = $request->file('file');
            if (!empty($file)) {
                $ext = $file->getClientOriginalExtension();//获取后缀
                //echo $ext;
                $filename = time() . rand(1000, 9999) . "." . $ext;//新文件名
                $file->move("home/zs/", $filename);//移动目录
                $img = "/home/zs/" . $filename;//组成路径
                $data = [
                    'tc_sjkm' => $_POST['sjkm'],
                    'tc_sjkm2' => $_POST['sjkm2'],
                    'tc_sjkm3' => $_POST['sjkm3'],
                    'tc_case' => $_POST['tc_case'],
                    'tc_case2' => $_POST['tc_case2'],
                    'tc_case3' => $_POST['tc_case3'],
                    'tc_casetime' => $_POST['tc_casetime'],
                    'tc_casetime2' => $_POST['tc_casetime2'],
                    'tc_casetime3' => $_POST['tc_casetime3'],
                    'tc_comments' => $_POST['tc_comments'],
                    'tc_certificate' => $_POST['zs'],
                    'tc_zsimage' => $img,
                ];
                $list = \DB::table('jjw_teachers')->where('id', $_POST['id'])->update($data);
                if ($list) {
                    return "y";
                }
            } else {
                $data = [
                    'tc_sjkm' => $_POST['sjkm'],
                    'tc_sjkm2' => $_POST['sjkm2'],
                    'tc_sjkm3' => $_POST['sjkm3'],
                    'tc_case' => $_POST['tc_case'],
                    'tc_case2' => $_POST['tc_case2'],
                    'tc_case3' => $_POST['tc_case3'],
                    'tc_casetime' => $_POST['tc_casetime'],
                    'tc_casetime2' => $_POST['tc_casetime2'],
                    'tc_casetime3' => $_POST['tc_casetime3'],
                    'tc_comments' => $_POST['tc_comments'],
                    'tc_certificate' => $_POST['zs'],
                ];
                $list = \DB::table('jjw_teachers')->where('id', $_POST['id'])->update($data);
                if ($list) {
                    return "y";
                }
            }
        }else{
            //栗志
        }
    }
    //栗志-德栗教师详细
    public function teacher(Request $request,$m){
        $new = new  indexController;
        $new->__construct();
            $list = \DB::table('jjw_teachers')->where('id', $m)->first();
            //判断是栗志还是德栗
            if (session('Template') == '1') {
                return view('home.teacher', ['list' => $list]);
            } else if (session('Template') == '2') {
                return view('delijiajiao.faculty_content', ['list' => $list]);
            }else if(session('Template') == '4'){//手机德栗
                return view('phonedl.faculty_content', ['list' => $list]);
            }
    }

    //德栗教员库
    public function faculty(Request $request){
        //if(session('Template') == '2') {
            $list = \DB::table('jjw_position_city')->where('city_id', Session('regionid'))->first();
            //区域
            $quyu = \DB::table('jjw_position_county')->where('city_id', Session('regionid'))->get();
            //学校
            $xx = DB::table('school_t')->where('city_id', session('regionid'))->limit(10)->get();
            //教员  名字 自我描述 不能为空
            $list = \DB::table('jjw_teachers')->where('tc_city_id', session('regionid'))->orderBy('tc_reboot', 'desc')->orderBy('id', 'desc')->where('tc_name', '!=', '')->where('tc_comments', '!=', '')->paginate(10);
            // dd($list);
            //自定义分页
            $num = $list->lastPage();
            $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
            $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
            $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
            $list->next = $nextpage;$list->last = $lastpage;$list->shi = $shipage;$list->num=$list->total();
            if (session('Template') == '2') {
                return view('delijiajiao.jiaoyuan', ['quyu' => $quyu, 'list' => $list, 'xx' => $xx]);
            } else if (session('Template') == '4') {
                return view('phonedl.jiaoyuan',['quyu' => $quyu, 'list' => $list, 'xx' => $xx]);
            }
      //  }
    }
    //德栗教员库更多 金牌 专职 学员教师
    public function facultys(Request $request,$id){
        if(session('Template') == '2') {
            $quyu = \DB::table('jjw_position_county')->where('city_id', Session('regionid'))->get();
            //教员
            $list = \DB::table('jjw_teachers')->where('tc_city_id', session('regionid'))->where('tc_jinpai', $id)->orderBy('id', 'desc')->paginate(10);;
            //学校
            $xx = DB::table('school_t')->where('city_id', session('regionid'))->limit(10)->get();
            // dd($xy);
            //自定义分页
            $num = $list->lastPage();
            $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
            $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
            $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
            $list->next = $nextpage;$list->last = $lastpage;$list->shi = $shipage;$list->num=$list->total();
            return view('delijiajiao.jiaoyuan', ['quyu' => $quyu, 'list' => $list, 'xx' => $xx]);
        }else{
            //栗志
        }
    }
    //热门
    public function hot(Request $reuqest,$type,$key){
        //区域
        $quyu = \DB::table('jjw_position_county')->where('city_id', Session('regionid'))->get();
        //学校
        $xx = DB::table('school_t')->where('city_id', session('regionid'))->limit(10)->get();
        if(session('Template') == '2') {
            //教员
            if ($type == "学科") {
                $list = \DB::table('jjw_teachers')->where('tc_city_id', session('regionid'))->where('tc_subjects', 'like', '%' . $key . '%')->orderBy('id', 'desc')->paginate(10);
            } else if ($type == "区域") {
                $list = \DB::table('jjw_teachers')->where('tc_city_id', session('regionid'))->where('tc_area', 'like', '%' . $key . '%')->orderBy('id', 'desc')->orderBy('tc_reg_date', 'desc')->paginate(10);
            } else if ($type == "学院") {
                $list = \DB::table('jjw_teachers')->where('tc_city_id', session('regionid'))->where('tc_school', 'like', '%' . $key . '%')->orderBy('id', 'desc')->paginate(10);

            }
            //自定义分页
            $num = $list->lastPage();
            $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
            $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
            $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
            $list->next = $nextpage;$list->last = $lastpage;$list->shi = $shipage;$list->num=$list->total();
            //dd($list);
            // dd($xy);
            return view('delijiajiao.jiaoyuan', ['quyu' => $quyu, 'list' => $list, 'xx' => $xx]);
        }else if(session('Template') == '4'){//手机德栗
            if ($type == "学科") {
                $list = \DB::table('jjw_teachers')->where('tc_city_id', session('regionid'))->where('tc_subjects', 'like', '%' . $key . '%')->orderBy('id', 'desc')->paginate(10);
            } else if ($type == "区域") {
                $list = \DB::table('jjw_teachers')->where('tc_city_id', session('regionid'))->where('tc_area', 'like', '%' . $key . '%')->orderBy('id', 'desc')->orderBy('tc_reg_date', 'desc')->paginate(10);
            } else if ($type == "学院") {
                $list = \DB::table('jjw_teachers')->where('tc_city_id', session('regionid'))->where('tc_school', 'like', '%' . $key . '%')->orderBy('id', 'desc')->paginate(10);
            }
            //自定义分页
            $num = $list->lastPage();
            $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
            $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
            $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
            $list->next = $nextpage;$list->last = $lastpage;$list->shi = $shipage;$list->num=$list->total();
            return view('phonedl.jiaoyuan', ['quyu' => $quyu, 'list' => $list, 'xx' => $xx]);
        }
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
            $num = $list->lastPage();
            $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
            $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
            $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
            $list->next = $nextpage;$list->last = $lastpage;$list->shi = $shipage;$list->num=$list->total();
            if(session('Template') == '2') {
                return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
            }else if(session('Template') == '4'){
                return view('phonedl.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
            }
            //科目
        }else if($type == 'k'){
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_subjects','like','%'.$num.'%')->orderBy('id','desc')->paginate(10);
            //自定义分页
            $num = $list->lastPage();
            $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
            $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
            $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
            $list->next = $nextpage;$list->last = $lastpage;$list->shi = $shipage;$list->num=$list->total();
            if(session('Template') == '2') {
                return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
            }else if(session('Template') == '4'){
                return view('phonedl.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
            }
            //男女
        }else if($type == 'g'){
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_sex',$num)->orderBy('id','desc')->paginate(10);
            //自定义分页
            $num = $list->lastPage();
            $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
            $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
            $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
            $list->next = $nextpage;$list->last = $lastpage;$list->shi = $shipage;$list->num=$list->total();
            if(session('Template') == '2') {
                return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
            }else if(session('Template') == '4'){
                return view('phonedl.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
            }
            //区域
        }else if($type == 'q'){
            $qu = \DB::table('jjw_position_county')->where('id',$num)->first();
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_area','like','%'.$qu->county_name.'%')->orderBy('id','desc')->paginate(10);
            //自定义分页
            $num = $list->lastPage();
            $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
            $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
            $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
            $list->next = $nextpage;$list->last = $lastpage;$list->shi = $shipage;$list->num=$list->total();

            return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
        }else if($type == 'b'){
            $list = \DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_type',$num)->orderBy('id','desc')->paginate(10);
            //自定义分页
            $num = $list->lastPage();
            $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
            $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
            $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
            $list->next = $nextpage;$list->last = $lastpage;$list->shi = $shipage;$list->num=$list->total();
            if(session('Template') == '2') {
                return view('delijiajiao.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
            }else if(session('Template') == '4'){
                return view('phonedl.jiaoyuan',['quyu'=>$quyu,'list'=>$list,'xx'=>$xx]);
            }
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

    //搜索学员 教员 id
    public function dosousuoid(){
        if($_POST['id'] ==''){
            if(session('Template') =='4'){
               if($_POST['sb'] == '1'){ //输入值为空 重定向 教员 学员页面
                   return redirect('/mobile/faculty.html');
               }else{
                   return redirect('/mobile/xueyuan.html');
               }
            }
        }
        if($_POST['sb'] == '1'){
            if(session('Template') =='2'){
                $r = \DB::table('jjw_teachers')->where('id',substr($_POST['id'],1,20))->get();
                return $r;
            }else if(session('Template') == '4'){
                $list = \DB::table('jjw_position_city')->where('city_id', Session('regionid'))->first();
                //区域
                $quyu = \DB::table('jjw_position_county')->where('city_id', Session('regionid'))->get();
                //学校
                $xx = DB::table('school_t')->where('city_id', session('regionid'))->limit(10)->get();
                //教员
                $list = \DB::table('jjw_teachers')->where('id',substr($_POST['id'],1,20))->paginate(10);
                //dd($list);
                //自定义分页
                $num = $list->lastPage();
                $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
                $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
                $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
                $list->next = $nextpage;$list->last = $lastpage;$list->shi = $shipage;$list->dqy = $list->currentPage();$list->num=$list->total();
                    return view('phonedl.jiaoyuan',['list'=>$list,'quyu'=>$quyu,'xx'=>$xx]);
            }
        }else{
            //dd($_POST);
            $quyu = \DB::table('jjw_position_county')->where('city_id',Session('regionid'))->get();
            //学院
            $xx= DB::table('school_t')->where('city_id',session('regionid'))->limit(10)->get();

            $list = \DB::table('jjw_order')->where('id',$_POST['id'])->paginate(10);
            //自定义分页
            $num = $list->lastPage();
            $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
            $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
            $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
            $list->next = $nextpage;$list->last = $lastpage;$list->shi = $shipage;$list->dqy = $list->currentPage();$list->num=$list->total();
            if(session('Template') == '2'){
                return view('delijiajiao.xueyuanku',['list'=>$list,'quyu'=>$quyu,'xx'=>$xx]);
            }else if(session('Template') == '4'){ //德栗手机端
                return view('phonedl.xueyuanku',['list'=>$list,'quyu'=>$quyu,'xx'=>$xx]);
            }
        }

    }
}
