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

            $s = DB::table('jjw_position_city')->where('city_id',session('regionid'))->first();
            $x = DB::table('city_info')->where('ci_city','like',mb_substr($s->city_name,0,2).'%')->first();
            $xx = DB::table('shool_info')->where('sh_city',$x->ci_id)->limit(8)->get();
            //查询地区金牌教员
            //dd($xx);
            //var_dump($xx['0']->sh_shool);
            $jinpai = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','2')->limit(5)->get();
            //查询地区学生教员
            $xueshen = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','0')->limit(5)->get();
            //查询地区专职教员
            //dd($xueshen);
            $zhuanzhi = DB::table('jjw_teachers')->where('tc_city_id',session('regionid'))->where('tc_jinpai','1')->limit(5)->get();
            //最新学生订单
            $data = DB::table('jjw_order')->where('city_id',session('regionid'))->limit(5)->get();
            return view('delijiajiao.index',['jinpai'=>$jinpai,'xueshen'=>$xueshen,'zhuanzhi'=>$zhuanzhi,'data'=>$data,'xx' => $xx]);
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

    //------------------------------------

    /*-----------------------------------------------------------------------------*/

    private $arrXing,$numbXing;
    private $arrMing,$numbMing;
    public function rndChinaName()
    {
        $this->getXingList();
        $this->getMingList();

    }

    /* 获取姓列表 */
    private function getXingList()
    {

        $this->arrXing=array(
            "张","江","邱","陈","王","黄","李","张","吴","章","梁","陈","李","徐","赵","江","杨","何","孙","周","郭","马","刘","江","林","吕","罗","张","章","朱","石" ,"唐","汪","胡","伍","李","章","郑","江","陈","王","黄","李","蒋",
            "张","江","邱","陈","王","黄","李","张","吴","章","梁","陈","李","徐","赵","江","杨","何","孙","周","郭","马","刘","江","林","吕","罗","张","章","朱","石" ,"唐","汪","胡","伍","李","章","郑","江","陈","王","黄","李","蒋",
            "张","江","邱","陈","王","黄","李","张","吴","章","梁","陈","李","徐","赵","江","杨","何","孙","周","郭","马","刘","江","林","吕","罗","张","章","朱","石" ,"唐","汪","胡","伍","李","章","郑","江","陈","王","黄","李","蒋",
            "张","江","邱","陈","王","黄","李","张","吴","章","梁","陈","李","徐","赵","江","杨","何","孙","周","郭","马","刘","江","林","吕","罗","张","章","朱","石" ,"唐","汪","胡","伍","李","章","郑","江","陈","王","黄","李","蒋",
            "张","江","邱","陈","王","黄","李","张","吴","章","梁","陈","李","徐","赵","江","杨","何","孙","周","郭","马","刘","江","林","吕","罗","张","章","朱","石" ,"唐","汪","胡","伍","李","章","郑","江","陈","王","黄","李","蒋",
            "张","江","邱","陈","王","黄","李","张","吴","章","梁","陈","李","徐","赵","江","杨","何","孙","周","郭","马","刘","江","林","吕","罗","张","章","朱","石" ,"唐","汪","胡","伍","李","章","郑","江","陈","王","黄","李","蒋",
            "方","洪","蔡","毛","白","许","秦","覃","钱","黎","叶","董","范","冯","鲍","曹","高","关","顾","韩","贺","肖","廖","凌","麦","彭","莫","宁","任","施","苏","冼","谢","夏","袁","余","曾","庄",
            "方","洪","蔡","毛","白","许","秦","覃","钱","黎","叶","董","范","冯","鲍","曹","高","关","顾","韩","贺","肖","廖","凌","麦","彭","莫","宁","任","施","苏","冼","谢","夏","袁","余","曾","庄",
            "方","洪","蔡","毛","白","许","秦","覃","钱","黎","叶","董","范","冯","鲍","曹","高","关","顾","韩","贺","肖","廖","凌","麦","彭","莫","宁","任","施","苏","冼","谢","夏","袁","余","曾","庄",
            "方","洪","蔡","毛","白","许","秦","覃","钱","黎","叶","董","范","冯","鲍","曹","高","关","顾","韩","贺","肖","廖","凌","麦","彭","莫","宁","任","施","苏","冼","谢","夏","袁","余","曾","庄",

        );

        $this->numbXing = count($this->arrXing); //姓总数

    }


    /* 获取名列表 */
    private function getMingList()
    {
        $this->arrMing=array(
            '伟','刚','勇','毅','俊','峰','强','军','平','保','东','文','辉','力','明','永','健','世','广','志','义',
            '兴','良','海','山','仁','波','宁','贵','福','生','龙','元','全','国','胜','学','祥','才','发','武','新',
            '利','清','飞','彬','富','顺','信','子','杰','涛','昌','成','康','星','光','天','达','安','岩','中','茂',
            '进','林','有','坚','和','彪','博','诚','先','敬','震','振','壮','会','思','群','豪','心','邦','承','乐',
            '绍','功','松','善','厚','庆','磊','民','友','裕','河','哲','江','超','浩','亮','政','谦','亨','奇','固',
            '之','轮','翰','朗','伯','宏','言','若','鸣','朋','斌','梁','栋','维','启','克','伦','翔','旭','鹏','泽',
            '晨','辰','士','以','建','家','致','树','炎','德','行','时','泰','盛','雄','琛','钧','冠','策','腾','楠',
            '榕','风','航','弘','秀','娟','英','华','慧','巧','美','娜','静','淑','惠','珠','翠','雅','芝','玉','萍',
            '红','娥','玲','芬','芳','燕','彩','春','菊','兰','凤','洁','梅','琳','素','云','莲','真','环','雪','荣',
            '爱','妹','霞','香','月','莺','媛','艳','瑞','凡','佳','嘉','琼','勤','珍','贞','莉','桂','娣','叶','璧',
            '璐','娅','琦','晶','妍','茜','秋','珊','莎','锦','黛','青','倩','婷','姣','婉','娴','瑾','颖','露','瑶',
            '怡','婵','雁','蓓','纨','仪','荷','丹','蓉','眉','君','琴','蕊','薇','菁','梦','岚','苑','婕','馨','瑗',
            '琰','韵','融','园','艺','咏','卿','聪','澜','纯','毓','悦','昭','冰','爽','琬','茗','羽','希','欣','飘',
            '育','滢','馥','筠','柔','竹','霭','凝','晓','欢','霄','枫','芸','菲','寒','伊','亚','宜','可','姬','舒',
            '影','荔','枝','丽','阳','妮','宝','贝','初','程','梵','罡','恒','鸿','桦','骅','剑','娇','纪','宽','苛',
            '灵','玛','媚','琪','晴','容','睿','烁','堂','唯','威','韦','雯','苇','萱','阅','彦','宇','雨','洋','忠',
            '宗','曼','紫','逸','贤','蝶','菡','绿','蓝','儿','翠','烟','小','轩'
        );

        //名总数
        $this->numbMing = count($this->arrMing);
    }


    // 获取姓
    private function getXing()
    {
        // mt_rand() 比rand()方法快四倍，而且生成的随机数比rand()生成的伪随机数无规律。
        return $this->arrXing[mt_rand(0,$this->numbXing-1)];

    }

// 获取名字
    private function getMing()
    {
        return $this->arrMing[mt_rand(0,$this->numbMing-1)];
    }


    // 获取名字
    public function getName($type=0)
    {
        $name = '' ;
        switch($type)
        {
            case 1:    //2字
                $name = $this->getXing().$this->getMing();
                break;
            case 2:    //随机2、3个字
                $name = $this->getXing().$this->getMing();
                if(mt_rand(0,100)>50)$name .= $this->getMing();
                break;
            case 3: //只取姓
                $name = $this->getXing();
                break;
            case 4: //只取名
                $name = $this->getMing();
                break;
            case 0:
            default: //默认情况 1姓+2名
                $name = $this->getXing().$this->getMing().$this->getMing();


        }

        return $name;
    }

    public function jia(){
        date_default_timezone_set('Asia/Shanghai');
        $name_obj = $this->rndChinaName();
        $name = $this->getName(2);
        echo $name;
//        echo date("Y-m-d h:i:s",time());
        //--- 月 日 分 秒
        $yue =rand(1,12);
        $yue = $yue<10?$yue='0'.$yue:$yue=$yue;
        $ri =rand(01,30);
        $shi = rand(0,24);
        $shi = $shi<10?$shi='0'.$shi:$shi=$shi;
        $fen = rand(0,59);
        $fen = $fen<10?$fen='0'.$fen:$fen=$fen;
        $miao = rand(0,59);
        $miao = $miao<10?$miao='0'.$miao:$miao=$miao;
        //--
        //--- 随机性别
        $sex = rand("0",'1');
//        echo $sex;
        if($sex == '0'){
            $sex = '0';
        }else{
            $sex = '1';
        }
        //---
        //---组合
        $b = rand(0,2);
        $input = array ("2008", "2009", "2010", "2011", "2012","2013","2014","2015","2016");
        $rand_keys = array_rand ($input, 3);
        $sj =  $input[$rand_keys[$b]]."-".$yue."-".$ri.' '.$shi.":".$fen.":".$miao;
        $phone = '';
        $pwd = '';
        //随机地区
        $dq=rand(1,345);
//        echo"<hr>";
        //1 北京   75上海  90杭州  3天津 172武汉  200广州  202深圳   241成都
        $list= DB::table('jjw_position_city')->where('id',1)->get();
           //dd($list);die;
//        echo "<hr>";
        $jgs= DB::table('jjw_position_provice')->where('provice_id',$list[0]->province_id)->pluck('provice_name');
        //dd($jgs);die;
        //---

        //随机学校
        $sjxxdz= DB::table('city_info')->where('ci_city','like','%'.substr($list[0]->city_name,0,6).'%')->first();
        $sjxx= DB::table('shool_info')->where('sh_city',$sjxxdz->ci_id)->get();
        $sjj=rand(1,84);
        //dd($sjxx[$sjj]);
        //随机类型
//        echo"<hr>";
        $lx = array (
            "大学生", "大学生", "大学生", "大学生", "大学生", "大学生", "大学生", "大学生", "大学生", "大学生", "大学生", "大学生", "大学生",
            "专职老师",
        );
        $lxs = array_rand ($lx,3);
        $type =  $lx[$lxs[$b]];
        //证书
//        echo"<hr>";
       /* $zs = array (
            "英语四级","英语六级","英语四级,英语六级,会计从业资格证，计算机二级","党史校史知识竞赛三等奖","高中化学竞赛一等奖","英语四级，英语六级，会计从业资格证，党史校史知识竞赛三等奖，高中化学竞赛一等奖"
            ""
        );*/
        $zs = DB::table('jjw_zs')->get();
        $pdd=rand(1,997);
        //dd($zs[$ppd]);
//        if($zs[$pdd]->zs == ''){
//            die;
//        }
      //  $zss = array_rand ($zs,3);
        //dd($zss);
       // $zsd= $zs[$zss[$b]];

//        echo"<hr>";
        $dx = array (
            "南京大学","北京大学","中国科学技术大学","中国政法大学","清华大学","北京大学","北京化工大学","天津理工学院","重庆师范学院","郑州工业大学","河南大学"
        ,"湖南大学","长沙工学院","湘潭大学","长沙交通学院","湖南大学","湖南财经学院","湘潭师范学院","广东工业大学","广州大学","西江大学","韶关大学","佛山科技学院"
        ,"山东师范大学","南昌大学","厦门大学","宁夏大学","云南大学","四川师范大学","浙江大学","杭州大学","成都理工学院","西南交通大学","贵州大学"
        ,"深圳大学","东北师范大学","吉林大学","吉林工业大学","湖北大学","河南师范大学","河南大学","上海师范大学","天津音乐学院","国音乐学院","中央音乐学院"
        ,"天津美术学院","哈尔滨理工大学","哈尔滨工程大学","内蒙古大学","鞍山师范学院"
        );
        $dxs = array_rand ($dx, 3);
        $lsx= $dx[$dxs[$b]];

        //

//        echo"<hr>";
        $pl = array (
            "熟悉初高中数学、文综等科目，高考成绩优异","本科学习数学与应用数学专业，曾获国家级奖学金，优秀学生干部，三好学生。性格活泼开朗，爱好看书，写作。有耐心，有良好的沟通能力和责任感。综合能力强。"
        ,"本人数理化逻辑清晰，善于和学生沟通，有着丰富的家教经验，所带的学生成绩进步显著","教育是一项良心工程，切不可任何的怠慢。张老师善于激发学生的学习动机，并且不放弃任何一个学生"
        ,"个人爱好广泛，积极向上，解题思路新颖","根据学生成绩和性格量身定制最适合每个学生的学习方法","培养学生的学习兴趣","善于运用形象，生动的语言对各种难点的知识进行讲解"
        ,"善于和学生进行沟通交流，富有耐心。","理科和理科数学功底扎实，家教经验丰富。","曾辅导过小学、初中和高中的学生，其中对于初中的学科知识和学生性格比较了解"
        );
       // $pls = array_rand ($pl, 3);
       // $pls = $pl[$pls[$b]];

        //案例
//        echo"<hr>";
        $al = array (
            "之前有过三次一对一家教经验，分别教过小学奥数、剑桥英语和高中英语。孩子进步非常快，家长反响特别的好。","2014年教过王同学小学奥数，秋季奥赛取得二等奖。"
        ,"2014年教过王同学小学奥数，秋季奥赛取得二等奖。","2016年教过张同学高中英语，之后的学期英语成绩突飞猛进。","2017年3月教殷同学小学奥数和剑桥英语至今。"
        ,"大学期间一直从事家教工作，所带的三十多个学生绝大部分都取得了不同程度的提高","2015年寒假，初一数学，帮助学员预习初一下学期数学知识","2015年暑假，初一数学，帮助学员预习初二上学期数学知识 开学之后的考试学员基本都能保证考试成绩在85分以上 "
        ,"2015年6月，初二数学，期终学员成绩从不及格到及格","015年暑假，初二数学，帮助学员梳理初二下学期知识，重点讲解平行四边形。","016年寒假，初二数学，物理下学期新知讲解，学员月考成绩都在85分以上"
        ,"2015年至今，小学二年级英语，学员在去年期末总评中成绩优秀","2016年辅导过一名初中学生的物理，经过详细讲解物理原理，让其对物理有了一个新的认识，物理成绩从原先的五十多分提高为后来的九十多分。"
        );
       // $als = array_rand ($al, 3);
       // $anl =  $al[$als[$b]];

        //可授科目
        echo"<hr>";
        $k = [
            "小学语文, 小学数学, 小学英语, 小学奥数",
            "初一初二语文, 初一初二英语, 初一初二数学, 初一初二物理",
            "初三语文, 初三英语, 初三数学, 初中历史, 初中奥数",
            "高一高二语文, 高一高二英语, 高一高二数学, 高三数学",
            "英语口语, 英语四级, 西班牙语",
        ];
        $km = array_rand ($k, 3);
        $kms =  $k[$km[$b]];
//        echo $km;

        //可授地区
        $ksdq= DB::table('jjw_position_county')->where('city_id',$list[0]->city_id)->pluck('county_name');

        echo "<hr>";
        $jinp = rand("0","2");

        if($jinp == '0'){
            $jinp = "0";
        }else if($jinp == '1'){
            $jinp = "1";
        }else if($jinp == '2') {
            $jinp = "2";
        }


        //大学生
        $zdt = '';
        if($type == "大学生"){
            $xjd =$lsx."内";
            $jl = rand(1,4);
            //专业
            $zy = array ("数学","英语","国际学院内设专业(英文授课)","物理类","化学类","生物学类","师范专业（包括教育学）"
            ,"心理学","管理学","经济类","外语系（英语专业以外）","建筑类","法学","新闻"
            ,"中文","政治","历史","地质地理","医学/药学","社会学类","农林专业","体育","艺术","计算机"
            ,"电子信息科学","自然类科学","其他"
            );
            $zys = array_rand ($zy,3);
            $zyss =  $zy[$zys[$b]];
            echo $zyss;
            if($zyss == "医学/药学" or $zyss=="建筑类") {
                $zt = ["大一", "大二", "大三", "大四", "大五", "本科毕业", "研一", "研三", "研二"];
                $zts = array_rand($zt, 3);
                echo $ztd = $zt[$zts[$b]];
            }else{
                $zt = ["大一","大二","大三","大四","本科毕业"];
                $zts = array_rand($zt, 3);
                echo $ztd = $zt[$zts[$b]];
            }
            //出生年月
            echo "<hr>";
            $cs = rand(1991,1995);
            $nls = $cs."-".$yue;
            $asdf = date("Y-m-d",time());
//            if($cs < 2006){
//                if($zdt || "大一" || $zdt =="大二" || $zdt =="大三" || $zdt =="大四"){
//                    $ztd =  "本科";
//                }
//            }

        }else if($type == "专职老师"){
            $zyss = '';
            $ztd = '';
            $jl = rand(5,20);
            $xjd =  $jgs[0].$list[0]->city_name.$ksdq[0];

            $cs = rand(1976,1985);
            $nls = $cs."-".$yue;
            $asdf = date("Y-m-d",time());
            if($cs < 1985){
                if($zdt || "大一" || $zdt =="大二" || $zdt =="大三" || $zdt =="大四"){
                    $ztd =  "本科";
                }
            }
        }else if($type == "其他"){
            $cs = rand(1985,1991);
            $nls = $cs."-".$yue;
            $zyss = '';
            $ztd = '';
            $jl = '';
            $xjd =  $jgs[0].$list[0]->city_name;
        }
//        echo $asdf - $cs;

        $kss = count($ksdq);
//        $bac = rand(0,$kss);
        for($i=0;$i<count($ksdq);$i++){
           $ddd = $ksdq[$i];
////            var_dump($ksdq[$i]);
           if(isset($ksdq[4])){
               $dsd = "$ksdq[0] $ksdq[1] $ksdq[2] $ksdq[3] $ksdq[4]";
            }else{
               $dsd = "$ksdq[0] $ksdq[1] $ksdq[2]";
            }

       }
//        $kss = count($ksdq);
//        $bac = rand(0,$kss);
//        $bacs = rand(0,$kss);
//        echo $ksdq[$bac].','.$ksdq[$bacs];
//        dd($ksdq[$bac]);
//        echo "<hr>";
       // $data['tc_area'] = $dsd;
        //目前居住地 88 2006 ， 91 - 93以前 本科
        //授课时间
        $zz = [
            "周一", "周一周二","周二周三周五周日",
            "周二", "周二周五",
            "周三", "周一周六",
            "周四", "周二周日",
            "周五","周四周五",
            "周六","周一周二周四",
            "周日","周二周三周五",
            "面议","周六周日",
        ];
        $zzs = array_rand($zz, 3);
        if($zzs != "面议"){
            $sjs = ["早上", "下午", "晚上","早上", "下午", "晚上"];
            $zjss = array_rand($zz,6);
            echo $sktime = $zz[$zzs[$b]].$sjs[$zjss[$b]];
        }

        $data = [
            'tc_name'=>$name,
            'tc_sex'=>$sex,
            'tc_phone'=>$phone,
            'tc_pass'=>$pwd,
            'tc_city_id'=>$list[0]->city_id,
            'tc_reg_date'=>$sj,
            'tc_type'=>$type,
            'tc_certificate'=>$zs[$pdd]->zs,
            'tc_school'=>$sjxx[$sjj]->sh_shool,
            'tc_comments'=>$zs[$pdd]->zw,
            'tc_case' => $zs[$pdd]->al,
            'tc_jinpai'=>$jinp,
            'tc_subjects'=>$kms,
            'tc_area'=>$dsd,
            'tc_jiguan'=>$list[0]->city_name,
            'tc_zhuanye'=>$zyss,
            'tc_jl'=> $jl,
            'tc_now_lives'=>$sjxx[$sjj]->sh_shool."校内",
            'tc_years'=>$nls,
            'tc_han'=>$list[0]->city_name,
            'tc_shu'=>$list[0]->city_name,
            'tc_nj'=>$ztd,
            'tc_sktime'=>$sktime,
        ];

        //   echo $dsd;
        $abc = 10;
        //for($i = 0;$i<$abc;$i++){
        $inse = \DB::table('jjw_teachers')->insert($data);
        //}
        //dd($data);
    }
}
