@extends('home.public.public')
@section('title',mb_substr(session('regionname'),0,2))
@section('content')
    <div id="banner">
        <div class="container">
            <form action="/xuqiu_ok.php" method='post'>
                <h4>快速请家教</h4>
                <div class="fg"><input type="text" name='contact' placeholder="联系人姓名" maxlength=10></div>
                <div class="fg"><input type="text" name='stu_xueke' placeholder="家教科目，如初三数学 " maxlength=10></div>
                <div class="fg"><input type="text" name='mobile' placeholder="手机号码" maxlength=11></div>
                <button type="submit">提交</button>
            </form>
            <div class="clear"></div>
        </div>
        <!--<img src="/home/picture/banner.png" alt="">-->
    </div>
    <div id="nav-link">
        <div class="container">
            <div class="link-box">
                <dl>
                    <dt>热门</br>大学</dt>
                    <dd>
                        <a  href="/l-c1-a1-e7/">华东师大</a><a  href="/l-c1-a1-e4/">上海师大</a><a  href="/l-c1-a1-e16/">复旦大学</a><a  href="/l-c1-a1-e3/">上外大学</a><a  href="/l-c1-a1-e2/">交通大学</a><a  href="/l-c1-a1-e23/">海事大学</a><a  href="/l-c1-a1-e18/">中国美院</a><a  href="/l-c1-a1-e25/">外贸学院</a>                    </dd>
                </dl>
                <div class="clear"></div>
            </div>
            <div class="link-box">
                <dl>
                    <dt>热搜</br>学科</dt>
                    <dd>
                        <a href="/l-c1-a1-n124/" style="width:25%">高三数学</a>
                        <a href="/l-c1-a1-n128/" style="width:25%">高三物理</a>
                        <a href="/l-c1-a1-n125/" style="width:25%">高三化学</a>
                        <a href="/l-c1-a1-n115/" class="last" style="width:25%">高三英语</a>
                        <a href="/l-c1-a1-n119/" class="down" style="width:25%">初三数学</a>
                        <a href="/l-c1-a1-n126/" class="down" style="width:25%">初三物理</a>
                        <a href="/l-c1-a1-n120/" class="down" style="width:25%">初三化学</a>
                        <a href="/l-c1-a1-n112/" class="down last" style="width:25%">初三英语</a>
                    </dd>
                </dl>
                <div class="clear"></div>
            </div>
            <div class="link-box">
                <dl>
                    <dt>热门</br>区域</dt>
                    <dd>
                                            <a href="l-c1-a105/" class="down last">闵行</a>
                                            <a href="l-c1-a112/" >普陀</a>
                                            <a href="l-c1-a129/" >浦东</a>
                                            <a href="l-c1-a100/" >徐汇</a>
                                            <a href="l-c1-a123/" class="last">杨浦</a>
                                            <a href="l-c1-a110/" class="down">长宁</a>
                                            <a href="l-c1-a125/" class="down">虹口</a>
                                            <a href="l-c1-a117/" class="down">卢湾</a>
                                            <a href="l-c1-a115/" class="down">静安</a>
                                            <a href="l-c1-a216/" class="down">松江</a>


                    </dd>
                </dl>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="box-1 box">
                <div class="toptitle">
                    <img style="width: 1170px" src="/home/images/2.png" alt=""/>
                </div>
                <div class="topnav">
                    <h3><img src="/home/picture/icon_title1.png" alt="">金牌教员</h3>
                    <ul class="tabnav">
                        <!--<li class="active" onclick="getTeacher('数学',this,1,'qianyue','0,5',2)"><a href="JavaScript:void(0)">数学</a></li>
                        <li onclick="getTeacher('物理',this,1,'qianyue','0,5',4)"><a href="JavaScript:void(0)">物理</a></li>
                        <li onclick="getTeacher('化学',this,1,'qianyue','0,5',5)"><a href="JavaScript:void(0)">化学</a></li>
                        <li  onclick="getTeacher('语文',this,1,'qianyue','0,5',1)"><a href="JavaScript:void(0)">语文</a></li>
                        <li onclick="getTeacher('英语',this,1,'qianyue','0,5',3)"><a href="JavaScript:void(0)">英语</a></li>-->
                        <div class="clear"></div>
                    </ul>
                        <!--<a href="" class="more">查看更多 > ></a>-->
                        <a href="" class="know">查看更多>></a>
                    <div class="clear"></div>
                </div>



                <div class="tabcont" id="qianyue">
                    <ul class="active tabbox">

                                                <li class="kuan">
                            <div class="top">
                                <img src="/home/images/logo.png" alt="魏玲" width="110" height="110">
                                <i>赵教员</i>
                                <span>
                                    <img src="/home/picture/icon_imperial.png" alt="签约教员-魏玲">
                                </span>
                                <div class="hover">
                                    <p>性格开朗，为人真诚，具有较强的亲和力和沟通能力。曾在著名辅导机构精锐教育担任专职数学教师，有多年中考辅导经验，曾获得中考高特等奖。擅长根...</p>
                                    <a href="javascript:void(0)" onclick="location.href='/teacher/365196.html'" class="look">查看 ></a>

                                </div>
                            </div>
                            <div class="bottom">
                                <a href="">初中数学</a>
                                <br/>
                                <a href="">福建师范大学本科大二</a>

                                <div class="clear"></div>
                                <a href="javascript:void(0);" onclick="writeCookie(365196);yuyueCookie();" class="btn">预约免费试课</a>
                            </div>
                        </li>
                                                <li class="kuan">
                            <div class="top">
                                <img src="/home/images/logo.png" alt="张红" width="110" height="110">
                                <i>赵教员</i>
                                <span>
                                    <img src="/home/picture/icon_imperial.png" alt="签约教员-张红">
                                </span>
                                <div class="hover">
                                    <p>本人重点师范院校毕业，毕业后一直从事教师工作，主要负责初中数学的教学，拥有教师资格证，普通话等级证书，大学英语六级证书，对工作认真负责，...</p>
                                    <a href="javascript:void(0)" onclick="location.href='/teacher/365129.html'" class="look">查看 ></a>

                                </div>
                            </div>
                            <div class="bottom">
                                <a href="">初中数学</a>
                                <br/>
                                <a href="">福建师范大学本科大二</a>
                                <div class="clear"></div>
                                <a href="javascript:void(0);" onclick="writeCookie(365129);yuyueCookie();" class="btn">预约免费试课</a>
                            </div>
                        </li>
                                                <li class="kuan">
                            <div class="top">
                                <img src="/home/images/logo.png" alt="王立军" width="110" height="110">
                                <i>赵教员</i>
                                <span>
                                    <img src="/home/picture/icon_imperial.png" alt="签约教员-王立军">
                                </span>
                                <div class="hover">
                                    <p>在南京211大学学习四年，英语专业毕业，获得英语学士学位证书。大学专业成绩保持专业前三名，曾获得国家奖学金、国家励志奖学金、一等奖学金、...</p>
                                    <a href="javascript:void(0)" onclick="location.href='/teacher/365009.html'" class="look">查看 ></a>

                                </div>
                            </div>
                            <div class="bottom">
                                <a href="">初中数学</a>
                                <br/>
                                <a href="">福建师范大学本科大二</a>
                                <div class="clear"></div>
                                <a href="javascript:void(0);" onclick="writeCookie(365009);yuyueCookie();" class="btn">预约免费试课</a>
                            </div>
                        </li>
                                                <li class="kuan">
                            <div class="top">
                                <img src="/home/images/logo.png" alt="周涛" width="110" height="110">
                                <i>赵教员</i>
                                <span>
                                    <img src="/home/picture/icon_imperial.png" alt="签约教员-周涛">
                                </span>
                                <div class="hover">
                                    <p>主要是理科方面知识的教授，认为理科都是想通的，尤其是物理和化学数学这三门课，需要找到合适的学习方法，就可以轻松取得优异的成绩，不需要为考...</p>
                                    <a href="javascript:void(0)" onclick="location.href='/teacher/365003.html'" class="look">查看 ></a>

                                </div>
                            </div>
                            <div class="bottom">
                                <a href="">初中数学</a>
                                <br/>
                                <a href="">福建师范大学本科大二</a>

                                <div class="clear"></div>
                                <a href="javascript:void(0);" onclick="writeCookie(365003);yuyueCookie();" class="btn">预约免费试课</a>
                            </div>
                        </li>

                        <div class="clear"></div>
                    </ul>
                </div>
            </div>


            <div class="box-2 box">
                <div class="topnav">
                    <h3 style="color:#F7B529 "><img src="/home/picture/icon_title2.png" alt="">学生教员</h3>
                    <ul class="tabnav">
                        <li class="active" onclick="getTeacher('语文',this,0,'centermin','0,4','china')"><a href="javascript:void(0)">语文</a></li>

                        <li  onclick="getTeacher('数学',this,0,'centermin','0,4','math')"><a href="javascript:void(0)">数学</a></li>
                        <li onclick="getTeacher('英语',this,0,'centermin','0,4','english')"><a href="javascript:void(0)">英语</a></li>
                        <li onclick="getTeacher('物理',this,0,'centermin','0,4','physical')"><a href="javascript:void(0)">物理</a></li>
                        <li onclick="getTeacher('化学',this,0,'centermin','0,4','chemistry')"><a href="javascript:void(0)">化学</a></li>

                        <div class="clear"></div>
                    </ul>
                    <a href="" class="more">查看更多 > ></a>
                    <div class="clear"></div>
                </div>
                <div class="tabcont" id="centermin">
                    <div class="active tabbox">
                        <div class="menu">
                            <h2>教学资源</h2>
                            <a href="">坚强成就完美</a><br/>
                            <a href="">学会感恩</a><br/>
                            <a href="">从现在开始</a><br/>
                            <a href="">高峰的馈赠</a><br/>
                            <a href="">勇敢的心</a><br/>
                            <a href="">我的泡泡</a><br/>
                            <a href="">选择</a><br/>
                            <a href="">葵鱼</a><br/>
                            <a href="">可悲的鱼</a><br/>
                        </div>
                        <ul class="active tabbox">
                            <li >
                                <div class="top">
                                    <img src="/home/images/logo.png" alt="王立军" width="110" height="110">
                                    <i>赵教员</i>
                                </div>
                                <div class="bottom">
                                    <a href="">初中数学</a>
                                    <br/>
                                    <a href="">福建师范大学本科大二</a>
                                    <div class="clear"></div>
                                    <a href="javascript:void(0);" onclick="writeCookie(365009);yuyueCookie();" class="btn">预约免费试课</a>
                                </div>
                            </li>
                            <li style="margin-left: 13px">
                                <div class="top">
                                    <img src="/home/images/logo.png" alt="王立军" width="110" height="110">
                                    <i>赵教员</i>
                                </div>
                                <div class="bottom">
                                    <a href="">初中数学</a>
                                    <br/>
                                    <a href="">福建师范大学本科大二</a>
                                    <div class="clear"></div>
                                    <a href="javascript:void(0);" onclick="writeCookie(365009);yuyueCookie();" class="btn">预约免费试课</a>
                                </div>
                            </li>
                            <li style="margin-left: 13px">
                                <div class="top">
                                    <img src="/home/images/logo.png" alt="王立军" width="110" height="110">
                                    <i>赵教员</i>
                                </div>
                                <div class="bottom">
                                    <a href="">初中数学</a>
                                    <br/>
                                    <a href="">福建师范大学本科大二</a>
                                    <div class="clear"></div>
                                    <a href="javascript:void(0);" onclick="writeCookie(365009);yuyueCookie();" class="btn">预约免费试课</a>
                                </div>
                            </li>
                            <li style="margin-left: 13px">
                                <div class="top">
                                    <img src="/home/images/logo.png" alt="王立军" width="110" height="110">
                                    <i>赵教员</i>
                                </div>
                                <div class="bottom">
                                    <a href="">初中数学</a>
                                    <br/>
                                    <a href="">福建师范大学本科大二</a>
                                    <div class="clear"></div>
                                    <a href="javascript:void(0);" onclick="writeCookie(365009);yuyueCookie();" class="btn">预约免费试课</a>
                                </div>
                            </li>



                        </ul>
                        <div class="clear"></div>
                    </div>

                </div>

            <div class="box-3 box">
                <div class="topnav">
                    <h3 style="color:#F7B529"><img src="/home/picture/icon_title3.png" alt="">专职教师</h3>
                    <ul class="tabnav">
                        <li class="active" onclick="getTeacher('语文',this,0,'centermin','0,4','china')"><a href="javascript:void(0)">语文</a></li>

                        <li  onclick="getTeacher('数学',this,0,'centermin','0,4','math')"><a href="javascript:void(0)">数学</a></li>
                        <li onclick="getTeacher('英语',this,0,'centermin','0,4','english')"><a href="javascript:void(0)">英语</a></li>
                        <li onclick="getTeacher('物理',this,0,'centermin','0,4','physical')"><a href="javascript:void(0)">物理</a></li>
                        <li onclick="getTeacher('化学',this,0,'centermin','0,4','chemistry')"><a href="javascript:void(0)">化学</a></li>
                        <div class="clear"></div>
                    </ul>
                    <a href="" class="more">查看更多 > ></a>
                    <div class="clear"></div>
                </div>
                <div class="tabcont" id="centermin">
                    <div class="active tabbox">
                        <div class="menu" >
                            <h2>家教直通车</h2>
                            <a href="">坚强成就完美</a><br/>
                            <a href="">学会感恩</a><br/>
                            <a href="">从现在开始</a><br/>
                            <a href="">高峰的馈赠</a><br/>
                            <a href="">勇敢的心</a><br/>
                            <a href="">我的泡泡</a><br/>
                            <a href="">选择</a><br/>
                            <a href="">葵鱼</a><br/>
                            <a href="">可悲的鱼</a><br/>
                        </div>
                        <ul class="active tabbox">
                            <li >
                                <div class="top">
                                    <img src="/home/images/logo.png" alt="王立军" width="110" height="110">
                                    <i>赵教员</i>
                                </div>
                                <div class="bottom">
                                    <a href="">初中数学</a>
                                    <br/>
                                    <a href="">福建师范大学本科大二</a>
                                    <div class="clear"></div>
                                    <a href="javascript:void(0);" onclick="writeCookie(365009);yuyueCookie();" class="btn">预约免费试课</a>
                                </div>
                            </li>
                            <li style="margin-left: 13px">
                                <div class="top">
                                    <img src="/home/images/logo.png" alt="王立军" width="110" height="110">
                                    <i>赵教员</i>
                                </div>
                                <div class="bottom">
                                    <a href="">初中数学</a>
                                    <br/>
                                    <a href="">福建师范大学本科大二</a>
                                    <div class="clear"></div>
                                    <a href="javascript:void(0);" onclick="writeCookie(365009);yuyueCookie();" class="btn">预约免费试课</a>
                                </div>
                            </li>
                            <li style="margin-left: 13px">
                                <div class="top">
                                    <img src="/home/images/logo.png" alt="王立军" width="110" height="110">
                                    <i>赵教员</i>
                                </div>
                                <div class="bottom">
                                    <a href="">初中数学</a>
                                    <br/>
                                    <a href="">福建师范大学本科大二</a>
                                    <div class="clear"></div>
                                    <a href="javascript:void(0);" onclick="writeCookie(365009);yuyueCookie();" class="btn">预约免费试课</a>
                                </div>
                            </li>
                            <li style="margin-left: 13px">
                                <div class="top">
                                    <img src="/home/images/logo.png" alt="王立军" width="110" height="110">
                                    <i>赵教员</i>
                                </div>
                                <div class="bottom">
                                    <a href="">初中数学</a>
                                    <br/>
                                    <a href="">福建师范大学本科大二</a>
                                    <div class="clear"></div>
                                    <a href="javascript:void(0);" onclick="writeCookie(365009);yuyueCookie();" class="btn">预约免费试课</a>
                                </div>
                            </li>




                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div class="box-5 box">
                <div class="container enter">
                    <img src="/home/images/2.png" alt="">

                </div>
            </div>
                <div class="box-6 box">
                    <div class="topnav">
                        <h3 style="color: #9AD9EA;"><img src="/home/picture/icon_title3.png" alt="">学员信息</h3>

                        <a href="" class="more">查看更多 > ></a>
                        <div class="clear"></div>
                    </div>
                    <div class="tabcont" id="centermin">
                        <div class="active tabbox">
                            <div class="menu" >
                                <h2>家教直通车</h2>
                                <a href="">坚强成就完美</a><br/>
                                <a href="">学会感恩</a><br/>
                                <a href="">从现在开始</a><br/>
                                <a href="">高峰的馈赠</a><br/>
                                <a href="">勇敢的心</a><br/>
                                <a href="">我的泡泡</a><br/>
                                <a href="">选择</a><br/>
                                <a href="">葵鱼</a><br/>
                                <a href="">可悲的鱼</a><br/>
                            </div>
                            <div id="zhen">
                                <div id="cao">
                                    <ul>
                                        <li class="caoz" style="width: 100%;border: none;border-bottom:1px dashed #0a90a4">
                                            <a style="color: #0a90a4;" class="caoz-one" href="">六年级作业辅导</a>
                                            <span class="caoz-two" >晋安区 大名城</span>
                                            <span class="caoz-three">有家教经验，有责任心</span>
                                            <a style="color: #FFFFFF;" class="caoz-four"  href="">新发布</a>
                                            <a class="caoz-five" href="">2016-12-21</a>
                                            <a style="float: right;color:#0f1011" class="caoz-six" href="">详情</a>
                                        </li>
                                        <li class="caoz" style="width: 100%;border: none;border-bottom:1px dashed #0a90a4">
                                            <a style="color: #0a90a4;" class="caoz-one" href="">六年级作业辅导</a>
                                            <span class="caoz-two" >晋安区 大名城</span>
                                            <span class="caoz-three">有家教经验，有责任心</span>
                                            <a style="color: #FFFFFF;background-color: #00FF00;" class="caoz-four"  href="">已预约</a>
                                            <a class="caoz-five" href="">2016-12-21</a>
                                            <a style="float: right;color:#0f1011" class="caoz-six" href="">详情</a>
                                        </li>
                                        <li class="caoz" style="width: 100%;border: none;border-bottom:1px dashed #0a90a4">
                                            <a style="color: #0a90a4;" class="caoz-one" href="">六年级作业辅导</a>
                                            <span class="caoz-two" >晋安区 大名城</span>
                                            <span class="caoz-three">有家教经验，有责任心</span>
                                            <a style="color: #FFFFFF;background-color:#9AD9EA" class="caoz-four"  href="">预约中</a>
                                            <a class="caoz-five" href="">2016-12-21</a>
                                            <a style="float: right;color:#0f1011" class="caoz-six" href="">详情</a>
                                        </li>
                                        <li class="caoz" style="width: 100%;border: none;border-bottom:1px dashed #0a90a4">
                                        <a style="color: #0a90a4;" class="caoz-one" href="">六年级作业辅导</a>
                                        <span class="caoz-two" >晋安区 大名城</span>
                                        <span class="caoz-three">有家教经验，有责任心</span>
                                        <a style="color: #FFFFFF;background-color: #3c3c3c" class="caoz-four"  href="">已成功</a>
                                        <a class="caoz-five" href="">2016-12-21</a>
                                        <a style="float: right;color:#0f1011" class="caoz-six" href="">详情</a>
                                    </li>
                                        <li class="caoz" style="width: 100%;border: none;border-bottom:1px dashed #0a90a4">
                                            <a style="color: #0a90a4;" class="caoz-one" href="">六年级作业辅导</a>
                                            <span class="caoz-two" >晋安区 大名城</span>
                                            <span class="caoz-three">有家教经验，有责任心</span>
                                            <a style="color: #FFFFFF;" class="caoz-four"  href="">新发布</a>
                                            <a class="caoz-five" href="">2016-12-21</a>
                                            <a style="float: right;color:#0f1011" class="caoz-six" href="">详情</a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            <div class="box-7 box">
                <div class="container">
                    <div class="toptitle">
                        <h2>预约流程</h2>
                    </div>
                    <ul>
                        <li style="width:300px">
                            <img src="/home/picture/icon_step1.png" alt="">
                            <h4>告知需求</h4>
                            <p>通过在线客服、或者咨询电话等渠道告知我们您的上课需求</p>
                        </li>
                        <li style="width: 300px">
                            <img src="/home/picture/icon_step2.png" alt="">
                            <h4>匹配老师</h4>
                            <p>客服会第一时间与您联系，根据您的需求筛选匹配专业老师</p>
                        </li>
                        <li style="width: 300px">
                            <img src="/home/picture/icon_step3.png" alt="">
                            <h4>上门授课</h4>
                            <p>客服会第一时间与您联系，根据您的需求筛选匹配专业老师</p>
                        </li>
                        <li style="width: 270px" class="last">
                            <img src="/home/picture/icon_step3.png" alt="">
                            <h4>等待结果</h4>
                            <p>匹配老师后，根据您的需求评出分数</p>
                        </li>



                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
<script type="text/javascript">
    $(function(){
        $(".dropdown").show();
    })
</script>
@endsection
