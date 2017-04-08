<!doctype html>
<html lang="en">
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
            <div class="left pull-left">
                <a href="/signin.php" class="login">教员 请[登录]</a>
                <a  href="/member/signup2.php">[免费注册]</a>
            </div>
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
                            <li>
                                <dl>
                                    <dt>高中</dt>
                                    <dd><a href="">数学</a></dd>
                                    <dd><a href="">英语</a></dd>
                                    <dd><a href="">语文</a></dd>
                                    <dd><a href="">文综</a></dd>
                                    <dd><a href="">理综</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>初中</dt>
                                    <dd><a href="">数学</a></dd>
                                    <dd><a href="">英语</a></dd>
                                    <dd><a href="">语文</a></dd>
                                    <dd><a href="">物理</a></dd>
                                    <dd><a href="">化学</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>小学及学龄前</dt>
                                    <dd><a href="">作业辅导</a></dd>
                                    <dd><a href="">全科</a></dd>
                                    <dd><a href="">奥数</a></dd>
                                    <dd><a href="">英语</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>语言</dt>
                                    <dd><a href="">雅思</a></dd>
                                    <dd><a href="">托福</a></dd>
                                    <dd><a href="">口语</a></dd>
                                    <dd><a href="">小语种</a></dd>
                                </dl>
                            </li>



                            <!--<li>-->
                                <!--<dl>-->
                                    <!--<dt>初中</dt>-->
                                    <!--<dd><a href="">语文</a></dd>-->
                                    <!--<dd><a href="">数学</a></dd>-->
                                    <!--<dd><a href="">英语</a></dd>-->
                                    <!--<dd><a href="">物理</a></dd>-->
                                    <!--<dd><a href="">化学</a></dd>-->
                                <!--</dl>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<dl>-->
                                    <!--<dt>小学</dt>-->
                                    <!--<dd><a href="">语文</a></dd>-->
                                    <!--<dd><a href="">数学</a></dd>-->
                                    <!--<dd><a href="">英语</a></dd>-->
                                    <!--<dd><a href="">奥数</a></dd>-->
                                <!--</dl>-->
                            <!--</li>-->

                            <li>
                                <dl>
                                    <dt>艺术</dt>
                                    <dd><a href="">乒乓球</a></dd>
                                    <dd><a href="">羽毛球</a></dd>
                                    <dd><a href="">跆拳道</a></dd>
                                    <dd><a href="">篮球</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt></dt>
                                    <dd><a href="">乒乓球</a></dd>
                                    <dd><a href="">羽毛球</a></dd>
                                    <dd><a href="">跆拳道</a></dd>
                                    <dd><a href="">篮球</a></dd>
                                </dl>
                            </li>

                        </ul>
                        <div class="dropright">
                            <ul class="menu">
                                <li>
                                    <dl>
                                        <dt>高中</dt>
                                        <dd>
                                            <a href="">高三语文</a>
                                            <a href="">高三数学</a>
                                            <a href="">高三英语</a>
                                            <a href="">高三物理</a>
                                            <a href="">高三化学</a>
                                            <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                            <a href="">高一高二语文</a>
                                            <a href="">高一高二数学</a>
                                            <a href="">高一高二英语</a>
                                            <a href="">高一高二物理</a>
                                            <a href="">高一高二化学</a>
                                            <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                            <a href="">高中历史</a>
                                            <a href="">高中地理</a>
                                            <a href="">高中政治</a>
                                            <a href="">高中生物</a>
                                            <a href="">信息科技</a>
                                            <a href="">SAT</a>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                            <ul class="menu">
                                <li>
                                    <dl>
                                        <dt>初中</dt>
                                        <dd>
                                            <a href="">初三语文</a>
                                            <a href="">初三数学</a>
                                            <a href="">初三英语</a>
                                            <a href="">初三物理</a>
                                            <a href="">初三化学</a>
                                            <a href="">初中奥数</a>
                                            <a href="">初中历史</a>
                                            <a href="">初中地理</a>
                                            <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                            <a href="">初一初二语文</a>
                                            <a href="">初一初二数学</a>
                                            <a href="">初一初二英语</a>
                                            <a href="">初一初二物理</a>
                                        </dd>
                                    </dl>
                                </li>

                            </ul>
                            <ul class="menu">
                                <li>
                                    <dl>
                                        <dt>小学</dt>
                                        <dd>
                                            <a href="">小学奥数</a>
                                            <a href="">小学数学</a>
                                            <a href="">小学英语</a>
                                            <a href="">小学语文</a>
                                            <a href="">小学陪读</a>
                                            <a href="">陪读陪玩</a>
                                            <a href="">学前教育</a>
                                            <a href="">幼教</a>
                                        </dd>
                                    </dl>
                                </li>

                            </ul>
                            <ul class="menu">
                                <li>
                                    <dl>
                                        <dt>等级考试</dt>
                                        <dd>
                                            <a href="">托福</a>
                                            <a href="">雅思</a>
                                            <a href="">SBS英语</a>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>实用英语</dt>
                                        <dd>
                                            <a href="">口语英语</a>
                                            <a href="">商务英语</a>
                                            <a href="">牛津英语</a>
                                            <a href="">新概念英语</a>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>小语种</dt>
                                        <dd>
                                            <a href="">上海话</a>
                                            <a href="">日语</a>
                                            <a href="">韩语</a>
                                            <a href="">德语</a>
                                            <a href="">法语</a>
                                            <a href="">意大利语</a>
                                            <a href="">西班牙语</a>
                                            <a href="">阿拉伯语</a>
                                            <a href="">对外汉语</a>
                                            <a href="">俄语</a>
                                            <a href="">葡萄牙语</a>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                            <ul class="menu">
                                <li>
                                    <dl>
                                        <dt>小学学龄前</dt>
                                        <dd>
                                            <a href="">小学奥数</a>
                                            <a href="">小学数学</a>
                                            <a href="">小学英语</a>
                                            <a href="">小学语文</a>
                                            <a href="">小学陪读</a>
                                            <a href="">陪读陪玩</a>
                                            <a href="">学前教育</a>
                                            <a href="">幼教</a>
                                        </dd>
                                    </dl>
                                </li>

                            </ul>

                            <ul class="menu">
                                <li>
                                    <dl>
                                        <dt>初中</dt>
                                        <dd>
                                            <a href="">初三语文</a>
                                            <a href="">初三数学</a>
                                            <a href="">初三英语</a>
                                            <a href="">初三物理</a>
                                            <a href="">初三化学</a>
                                            <a href="">初中奥数</a>
                                            <a href="">初中历史</a>
                                            <a href="">初中地理</a>
                                            <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                            <a href="">初一初二语文</a>
                                            <a href="">初一初二数学</a>
                                            <a href="">初一初二英语</a>
                                            <a href="">初一初二物理</a>
                                        </dd>
                                    </dl>
                                </li>

                            </ul>


                            <ul class="menu">
                                <li>
                                    <dl>
                                        <dt>音乐</dt>
                                        <dd>
                                            <a href="">钢琴</a>
                                            <a href="">声乐</a>
                                            <a href="">电子琴</a>
                                            <a href="">小提琴</a>
                                            <a href="">小号</a>
                                            <a href="">吉他</a>
                                            <a href="/l-c1-a1-n197/">单簧管</a>
                                            <a href="/l-c1-a1-n196/">萨克斯</a>
                                            <a href="/l-c1-a1-n196/">大号</a>
                                            <a href="/l-c1-a1-n280/">圆号</a>
                                            <a href="/l-c1-a1-n166/">古筝</a>
                                            <a href="/l-c1-a1-n159/">手风琴</a>
                                            <a href="/l-c1-a1-n157/">琵琶</a>
                                            <a href="/l-c1-a1-n153/">长笛</a>
                                            <a href="/l-c1-a1-n182/">视唱练耳</a>
                                            <a href="/l-c1-a1-n274/">打击乐</a>
                                            <a href="/l-c1-a1-n273/">大提琴</a>
                                            <a href="/l-c1-a1-n249/">二胡</a>
                                            <a href="/l-c1-a1-n240/">古琴</a>
                                            <a href="/l-c1-a1-n332/">中提琴</a>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>舞蹈</dt>
                                        <dd>
                                            <a href="/l-c1-a1-n219/">芭蕾舞</a>
                                            <a href="/l-c1-a1-n209/">民族舞</a>
                                            <a href="/l-c1-a1-n197/">单簧舞</a>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>美术</dt>
                                        <dd>
                                            <a href="/l-c1-a1-n231/">素描</a>
                                            <a href="/l-c1-a1-n261/">水彩画</a>
                                            <a href="/l-c1-a1-n233/">油画</a>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                            <ul class="menu">
                                <li>
                                    <dl>
                                        <dt>其他</dt>
                                        <dd>
                                            <a href="/l-c1-a1-n142/">网球</a>
                                            <a href="/l-c1-a1-n141/">乒乓球</a>
                                            <a href="/l-c1-a1-n138/">羽毛球</a>
                                            <a href="/l-c1-a1-n215/">围棋</a>
                                            <a href="/l-c1-a1-n167/">中国象棋</a>
                                            <a href="/l-c1-a1-n179/">国家象棋</a>
                                            <a href="/l-c1-a1-n139/">跆拳道</a>
                                            <a href="/l-c1-a1-n279/">空手道</a>
                                            <a href="/l-c1-a1-n545/">计算机</a>
                                            <a href="/l-c1-a1-n158/">书法</a>
                                            <a href="/l-c1-a1-n140/">游泳</a>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                <ul class="navbar pull-left">
                    <li class="active"><a href="/">首页</a></li>
                    <li class=""><a href="/qianyue.php">签约老师<i><img src="/home/picture/hot.png" alt=""></i></a></li>
                    <li class=""><a href="/l-c1/">挑老师</a></li>
                    <li class=""><a href="/xuqiu.php">快速请家教</a></li>
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

            <div class="clear"></div></ul><ul style="font-size:15px;color:#262626 "> Copyright2007－2017广州学求易教育咨询有限公司 版权所有 All rights reserved</ul></div></div></div><div class="suspend"><ul><li><img src="/home/picture/float_1.png" alt=""><div class="wechat hidebox"><div class="inbox"><img src="/home/picture/code.png" alt=""><i>【扫一扫】随时请家教</i></div></div></li><li><a href="http://p.qiao.baidu.com/im/index?siteid=9008098&ucid=20781114&cp=&cr=&cw=" target="_blank"><img src="/home/picture/float_2.png" alt=""></a></li><li class="scroll-top"><img src="/home/picture/float_4.png" alt=""></li></ul>
    </div>
</body>
<script type="text/javascript" src= "/home/js/jquery.min.js"></script>
<script type="text/javascript" src= "/home/js/superslide.js"></script>
<script type="text/javascript" src= "/home/js/script.js"></script>
<script type="text/javascript" src= "/home/js/jquery.cookie.js"></script>
@section('js')


@show
