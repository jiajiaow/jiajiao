<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>【栗志家教】@yield('title')家教_专业大学生家教全国连锁领导品牌!</title>
        <meta name="description" content="专业大学生一对一上门家教，专业大学生家教全国连锁领导品牌。免费上门试课热线：400-XXXXXXXX。业务覆盖全国200多个城市，汇集数十万名大学生、专职老师在内的各类优秀教员，竭诚为广大学员提供最专业、最值得信赖的一对一上门家教辅导。免费上门试课热线：400-XXXXXXXX" />
        <meta name="keywords" content="栗志家教,{{ mb_substr(session('regionname'),0,2) }}家教,{{ mb_substr(session('regionname'),0,2) }}家教网,{{ mb_substr(session('regionname'),0,2) }}大学生家教,{{ mb_substr(session('regionname'),0,2) }}家教,{{ mb_substr(session('regionname'),0,2) }}家教网,辅导,补习,一对一" />
        <link href="/home/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="icon" href="" type="/home/image/x-icon" />
@section('style')

@show
    </head>
<body>
<div id="header">
    <div class="header-top">
        <div class="container">
            @if(session('tc_phone')== null)
            <div class="left pull-left">
                <a href="/login.html" class="login">教员 请[登录]</a>
                <a  href="/reg.html">[教员注册]</a>
                /
                <a href="/signin.php" class="login">学员 请[登录]</a>
                <a  href="/member/signup2.php">[学员注册]</a>
            </div>
            @else
                <div class="left pull-left">
                    {{ substr(Session('tc_name'),0,3) }}教员您好!<a href="/teacherinfo.html" class="login">个人中心</a>
                    <a href="/outlogin.html" class="login">退出登录</a>
                </div>
            @endif
            <div style="color: #eeeeee" class="right pull-right">
                <img src="/home/picture/icon_phone.png" alt="021-61300114">上海请家教热线：15985773757
            </div>
            <div class="clear"></div></div>
    </div><div class="logoer"><div class="container"><div class="logo pull-left">
    <a href="/"  class="pull-left">
    <div>
        <img class="zhen" style="height:80px;" src="/home/images/logo.png" title="栗智家教" alt="栗智家教"></a>
        <div>
            <h2 style="color: #FAB00F;font-size: 26px;float: left ;margin-top: 13px;margin-left: 5px "> 栗 智 家 教&nbsp;&nbsp;&nbsp;</h2>
            <p  style="float: left;margin-left: 5px" class="p">专注中小学家教八年</p>
        </div>

    </div>

    <div class="city pull-right"><span>{{ mb_substr(session('regionname'),0,2) }}</span>
        <div class="city-down">
            <ul id="zz">
                <li><a href="http://bj.jiajiao114.com/">北京</a></li>
                <li><a href="http://tj.jiajiao114.com/">天津</a></li>
                <li><a href="http://gz.jiajiao114.com/">广州</a></li>
                <li><a href="http://sz.jiajiao114.com/">深圳</a></li>
                <li><a href="http://nj.jiajiao114.com/">南京</a></li>
                <li><a href="http://hz.jiajiao114.com/">杭州</a></li>
                <li><a href="http://wh.jiajiao114.com/">武汉</a></li>
                <li><a href="http://xa.jiajiao114.com/">西安</a></li>
                <li><a href="http://cd.jiajiao114.com/">成都</a></li>
                <div class="clear"></div>
            </ul>
            <a href="/change_city.html" class="more">更多城市</a></div></div><div class="clear"></div>
        </div>
    <div class="have pull-right">
        <div id="youbian">
            <a href="" class="zuo">我要请老师</a>
            <a href="" class="you">我要老师</a>
        </div>

    </div>
    <div class="clear"></div></div></div>
<form id="yuyue_submit" action="/xuqiu_bx.php" method="get">
                <input type="hidden" name="tid" id="cookietid" value="0" />
             </form><div class="nav">
            <div class="container">
                <div class="find-teacher pull-left hide-down">
<div class="top">
                        <a href="">找老师<span><img src="/home/picture/icon_down.png" alt=""></span></a>
                    </div>
                    <div class="dropdown">
                        <ul class="drop-menu">
                            @foreach($yiji as $yj)
                                <li>
                                    <dl style="width:200px;overflow: hidden;height: 38px;">
                                        <dt>{{ $yj->yiji }}</dt>

                                        <a>{{ $yj->introduce }}</a>

                                    </dl>
                                </li>
                            @endforeach
                        </ul>
                        <div class="dropright">
                            @foreach($yiji as $yj)
                                        <ul class="menu">
                                            <li>
                                                @foreach($erji as $ej)
                                                    @if( $yj->id == $ej->yiji_id )
                                                <dl>
                                                    <dt>{{ $ej->erji }}</dt>
                                                    <dd>
                                                        @foreach($sanji as $sj)
                                                            @if($ej->id == $sj->erji_id)
                                                                <a href="/l-c1-a1-n332/">{{ $sj->sanji }}</a>
                                                            @endif
                                                        @endforeach
                                                    </dd>
                                                </dl>
                                                    @endif
                                                @endforeach
                                            </li>

                                         </ul>
                            @endforeach
                        </div>
                    </div>
                    </div>
                <ul class="navbar pull-left">
                    <li class="active"><a href="/">首页</a></li>
                    <li class=""><a href="/qianyue.php">签约老师<i><img src="/home/picture/hot.png" alt=""></i></a></li>
                    <li class=""><a href="/l-c1/">挑老师</a></li>
                    <li class=""><a href="/yuyuelaoshi.html">快速请家教</a></li>
                    <li class=""><a href="/help/jiajiao_fee.php">资费说明</a></li>
                    <li class=""><a href="/xueyuan/">最新学员</a></li>
                    <li class=""><a href="/al/">家长学堂</a></li>
                    <div class="clear"></div>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
@section('content')


@show
<div id="footer"><div class="foot-top"><div class="container">
    <div style="margin-top: 30px;" class="foot-logoer">
        <a href="/"><img src="/home/images/logo.png" alt=""> </a></div>
    <dl>
        <dt>我是学员</dt><dd><a href="">请家教流程</a></dd>
        <dd><a href="">学员收费标准</a></dd>
        <dd><a href="">挑选合适教员</a></dd></dl><dl><dt>我是老师</dt>
        <dd><a href="">如何预约订单</a></dd>
        <dd><a href="">教员收费标准</a></dd>
        <dd><a href="">汇款接单手续</a></dd></dl><dl class="last"><dt>关于我们</dt>
        <dd><a href="">福州手机家教版</a></dd>
        <dd><a href="">联系我们</a></dd>
        <dd><a href="">网站地图</a></dd>

    </dl>
        <div class="code">
        <i>15985773757</i><span>7*24小时在线客服</span><img src="/home/picture/code.png" alt=""></div><div class="clear"></div></div></div><div class="foot-bottom"><div class="container">
        <ul style="width:100%"><li>友情链接：</li><li><a href="" target="_blank">仓山区</a></li>
            <li><a href="" target="_blank">鼓楼区</a></li>
            <li><a href="" target="_blank">晋安区</a></li>
            <li><a href="" target="_blank">马尾区</a></li>
            <li><a href="" target="_blank">台江区</a></li>
            <li><a href="" target="_blank">闵候县</a></li>
            <li><a href="" target="_blank">长乐市</a></li>
            <li><a href="" target="_blank">福清市</a></li>
            <li><a href="" target="_blank">闽清县</a></li>
            <li><a href="" target="_blank">永泰县 </a></li>
            <li><a href="" target="_blank">罗源县</a></li>
            <li><a href="" target="_blank">连江县</a></li>
            <li><a href="" target="_blank">平谭县  </a></li>
            <li><a href="" target="_blank">莆田市</a></li>
            <li><a href="" target="_blank">永德市</a></li>
            <li><a href="" target="_blank">台江区瀛洲</a></li>
            <li><a href="" target="_blank">台江区后州</a></li>
            <li><a href="" target="_blank">台江区义洲</a></li>
            <li><a href="" target="_blank">台江区新港</a></li>
            <li><a href="" target="_blank">台江区上海</a></li>
            <li><a href="" target="_blank">台江区苍霞</a></li>
            <li><a href="" target="_blank">台江区洋中</a></li>
            <li><a href="" target="_blank">台江区茶亭</a></li>
            <li><a href="" target="_blank">台江区鳌峰</a></li>
            <li><a href="" target="_blank">台江区宁化</a></li>
            <li><a href="" target="_blank">台江区中州岛</a></li>

            <div class="clear"></div></ul><ul style="font-size:15px;color:#262626 "> Copyright2007－2017广州学求易教育咨询有限公司 版权所有 All rights reserved</ul></div></div></div>

</body>
<script type="text/javascript" src= "/home/js/jquery.min.js"></script>
<script type="text/javascript" src= "/home/js/superslide.js"></script>
<script type="text/javascript" src= "/home/js/script.js"></script>
<script type="text/javascript" src= "/home/js/jquery.cookie.js"></script>
@section('js')


@show
