<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>个人中心 -栗智</title>
    <link rel="stylesheet" href="{{ asset('/home/css/style.css') }}">
    <script src="{{ asset('/home/js/jquery.min.js') }}"></script>
    <script type="text/javascript">
        function delete_info(id){
            if(confirm("你确定要此信息吗？")){
                document.deleteForm.id.value=id;
                document.deleteForm.action.value="delete";
                document.deleteForm.submit();
            }
        }
        @if(Session('tc_phone') == '')
                alert("请您先登录！");
        window.location.href="{{ URL('/login.html') }}";
        @endif
    </script>
</head>
<body>
<script src="{{ asset('/home/js/jquery.min.js') }}"></script>
<script src="{{ asset('/home/js/jquery.form.js') }}"></script>
<div id="header" class="fixed-header">
    <div class="top-info">
        <div class="container">
            <div class="logo pull-left">
                <a href="" class="pull-left"></a>
                @if(session('Template') == '1')
                    <img style="width:40px;height:40px;" src="{{ asset('/home/image/logo.png') }}" alt="">
                @else
                    <img style="width:40px;height:40px;" src="/delijiajiao/images/logo.png" alt="">
                @endif
                <a href="{{ URL('/teacherinfo.html') }}" class="pull-right user">个人中心</a>
                <div class="clear"></div>
            </div>
            <div class="right-info pull-right">
                <ul>
                    <li>
                        <a href="" target="_blank">最新家教信息</a>
                    </li>
                    <li>
                        <a href="" onclick="javascript:location.href=&#39;/teacher/365360.html&#39;" class="look">简历预览</a>
                    </li>
                    <li class="last">
                        <a href="{{ URL('/outlogin.html') }}"><img src="{{ asset('/home/image/exit.png') }}" alt="退出" title="退出"></a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div id="pcontent">
    <div class="container">
        <div class="tab-box">
            <div class="left-nav pull-left">
                <ul>
                    <li class=""><a href="">个人资料</a><span><img src="{{ asset('/home/image/arrow_right.png') }}"></span></li>
                    <li class=""><a href="">身份认证</a><span><img src="{{ asset('/home/image/arrow_right.png') }}"></span></li>
                    <li class=""><a href="http://www.jiajiao114.com/member/">待付款订单</a><i>0</i><span><img src="{{ asset('/home/image/arrow_right.png') }}"></span></li>
                    <li class=""><a href="">申请记录</a><span><img src="{{ asset('/home/image/arrow_right.png') }}"></span></li>
                    <li class=""><a href="">成功记录</a><span><img src="{{ asset('/home/image/arrow_right.png') }}"></span></li>
                    <li class=""><a href="">申请退款</a><span><img src="{{ asset('/home/image/arrow_right.png') }}"></span></li>
                    <li class=""><a href="">投诉中心</a><span><img src="{{ asset('/home/image/arrow_right.png') }}"></span></li>
                    <li class=""><a href="">重置密码</a><span><img src="{{ asset('/home/image/arrow_right.png') }}"></span></li>
                </ul>
            </div>
            <div class="right-cont pull-right" style="min-height: 661px;">
                <div class="tab-cont active">
                    <div class="welcome" style="">
                        <div class="top-info">
                            <div class="left-img pull-left">
                                <div class="in-img">
                                    <img src="{{ $list->tc_photo }}">
                                </div>
                            </div>
                            <div class="right-info">
                                <!-- <h4>欢迎您！尊敬的<i>认证</i>教员：<i></i></h4> -->
                                <h4>{{ $list->tc_name }}</h4>
                                <h4>教员编号：<i>T{{ $list->id }}</i></h4>
                                <h4>余&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;额：<i>￥0</i></h4>
                                {{--<small><span>简历浏览：0次</span>--}}
                                {{--<span>最近登录时间：2017-04-08</span>--}}
                                        <!-- <span>登录：550次</span></small> -->
                                <p>认证情况：<span>{{ $list->tc_audit=='0'?"本站尚未审核您的真实证件":"您已通过本站的真实证件审核" }}</span></p>
                                <!--<p>上次认证时间：<span>2009-01-08</span></p>-->
                                {{--<p>个人简历状态：<i><em>审核中</em>（注：注册资料不完整有可能导致不能通过审核）</i></p>--}}
                                {{--</small>--}}</div><small>
                                <div class="clear"></div>
                            </small></div><small>
                            <div class="bottom-sign">
                                <div class="big-tit">
                                    <img src="{{ asset('/home/image/wtitle.png') }}">
                                </div>
                                <div class="section" style="width:65%;float:left;">
                                    <div class="small-tit">
                                        <span><img src="{{ asset('/home/image/one.png') }}"></span>
                                        <h4>加微信，随时查</h4>
                                    </div>
                                    <p style="font-size:18px;">扫一扫，加关注，及时查看家教订单，接单快人一步！</p>
                                    <p style="font-size:18px;">还可随时申请订单。</p>
                                </div>
                                <div class="section" style="width:35%;float:right">
                                    <img src="{{ asset('/home/image/weixinerweima.jpg') }}" style="width:90px;height;90px">
                                </div>
                                <div class="clear"></div>
                                <div class="section">
                                    <div class="small-tit">
                                        <span><img src="{{ asset('/home/image/two.png') }}"></span>
                                        <h4>上传形象照，更出彩</h4>
                                    </div>
                                    <p style="font-size:18px;">阳光、健康、专业的形象照，增加您的第一印象分，让家长一眼就选定你，马上动手吧。</p>
                                    <a style="font-size:18px;" href="http://www.jiajiao114.com/member/index.php?d=1">上传形象照</a>
                                </div>
                                <div class="section">
                                    <div class="small-tit">
                                        <span><img src="{{ asset('/home/image/three.png') }}"></span>
                                        <h4>简历详尽，突出优势</h4>
                                    </div>
                                    <p style="font-size:18px;">尽量将您的资料填写详细，并突出您的特长和家教相关经验，以方便家长及德栗家教工作人员选择、推荐。好的简历，事半功倍，可以大大增加您的接单率！</p>
                                    <a style="font-size:18px;" href="http://www.jiajiao114.com/teacher/365360" class="look">简历预览</a><a style="font-size:18px;" class="change" href="http://www.jiajiao114.com/member/index.php?d=1">修改简历</a>
                                </div>
                                <div class="section">
                                    <div class="small-tit">
                                        <span><img src="{{ asset('/home/image/four.png') }}"></span>
                                        <h4>网上认证，机会更多</h4>
                                    </div>
                                    <p style="font-size:18px;">请您尽快将证件（如身份证、学生证、毕业证、家教资料证或相关的在职证明等）到网站上传进行身份验证，认证的教员我们将优先推荐家教。</p>
                                    <a style="font-size:18px;" href="http://www.jiajiao114.com/member/index.php?d=2">网上认证</a>
                                </div>
                            </div>
                        </small></div><small>
                        <div class="resume" style="">
                            <div class="top">
                                <small>
                                    {{--<span>在本站成功的家教记录：<i>0次 </i></span>--}}
                                    {{--<span>简历浏览次数：<i>2</i></span>--}}
                                    {{--<span>最近登陆时间：<i>2017-04-08</i></span>--}}
                                    <h3>{{ $list->tc_name }}（编号：T{{ $list->id }}）</h3>
                                </small>
                            </div>
                            <dl>
                                <dt> | {{  $list->tc_sex=='0'?"女":"男" }} | </dt>
                                <dd>
                                    毕业学校：
                                    <span>{{ $list->tc_school }}</span>
                                </dd>
                                <dd>
                                    专　　业：
                                    <span>{{ $list->tc_zhuanye }}</span>
                                </dd>
                                <dd>
                                    籍　　贯：
                                    <span>{{ $list->tc_jiguan }}</span>
                                </dd>
                                <dd>
                                    高中母校：
                                    <span>{{ $list->tc_hsam }}</span>
                                </dd>
                                <dd>
                                    学校位置：
                                    <span></span>
                                </dd>
                                <dd>
                                    家庭位置：
                                    <span>{{ $list->tc_jiguan }}</span>
                                </dd>
                            </dl>
                            <div class="clear"></div>
                            <div class="bottom">
                                <div class="list">
                                    <div class="section">
                                        <h4>自我评价</h4>
                                        <p>{{ $list->tc_comments }}</p>
                                    </div>
                                    <div class="section">
                                        <h4>可授科目</h4>
                                        <p>{{ $list->tc_subjects }}</p>
                                    </div>
                                    <div class="section">
                                        <h4>授课区域</h4>
                                        <p>{{ $list->tc_area }}</p>
                                    </div>
                                    <div class="section">
                                        <h4>所获证书</h4>
                                        <p>{{ $list->tc_certificate }}</p>
                                    </div>
                                    <div class="section">
                                        <h4>辅导方式</h4>
                                        <p>{{ $list->tc_tutoring }}</p>
                                    </div>
                                    <div class="section">
                                        <h4>家教经验</h4>
                                        <p>{{ $list->tc_jl }}年</p>
                                    </div>
                                    <div class="section">
                                        <h4>薪水要求</h4>
                                        <p>
                                            @if($list->tc_salary == '')
                                                执行栗志家教收费标准
                                            @else
                                                $list->tc_salary
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="tel">
                                    <h4>预约中心电话：021-61300114</h4>
                                    <small>（工作时间：<i>9:00-20:30</i>）（预约时，请提供此教员的编号：<i>T{{ $list->id }}</i>）</small>
                                </div>
                                <table>
                                    <caption>老师在栗智的成功家教记录</caption>
                                    <thead>
                                    <tr>
                                        <th>订单号</th>
                                        <th>年级科目</th>
                                        <th>接单日期</th>
                                        <th>状态</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>订单号</td>
                                        <td>订单号</td>
                                        <td>订单号</td>
                                        <td>订单号</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </small></div><small>
                    <div class="tab-cont " style="font-size:1.0rem">
                        <div class="personal-data">
                            <h3>请完善您的个人资料，方便为您匹配家教订单</h3>
                            <form action="{{ URL('/doteacherinfo.html') }}" method="post" id="form1" enctype="multipart/form-data">
                                <div class="top">
                                    <input type="file" id="upfile" name="upfile[]" style="display:none" onchange="TemporaryMedia()" accept="image">
                                    <div class="left-img">
                                        <img id="touxiang_src" src="{{ $list->tc_photo }}">
                                    </div>
                                    <a href="javascript:void(0)" id="bjtx">点击编辑头像</a>
                                    <div class="clear"></div>
                                </div>


                                <div class="fg">
                                    {{--<input type="hidden" name="from" value="center">--}}
                                    <label for="">姓　　名：</label>
                                    <input type="text" name="tc_name" value="{{ $list->tc_name }}" class="name" maxlength="4"/>
                                    <p></p>
                                </div>
                                <div class="fg">
                                    <label for="">密　　码：</label>
                                    <input type="password" name="tc_pwss" value="{{ substr($list->tc_pass,0,6) }}"/>
                                </div>
                                <div class="fg">
                                    <label for="">Q　　 Q：</label>
                                    <input type="text" name="tc_qq" value="{{ $list->tc_qq }}"/>
                                </div>
                                <div class='fg'>
                                    <label for="">微　　信：</label>
                                    <input type="text" name="tc_wechat" value="{{ $list->tc_wechat }}"/>
                                </div>
                                <div class="fg">
                                    <label for="">邮　　箱：</label>
                                    <input type="text" name="email" value="{{ $list->tc_email }}"/>
                                </div>
                                <div class="fg">
                                    <label for="">手　　机：</label>
                                    <input type="tel" name="tc_phone" value="{{ $list->tc_phone }}"/>
                                </div>
                                <div class='fg'>
                                    <label for="">备用手机：</label>
                                    <input type="tel" name="phone_bak" value="{{ $list->tc_phone_bak }}"/>
                                </div>
                                <div class="fg">
                                    <label for="" style="font-size:16px">所在城市：</label>
                                    <select name="suozaidi" id="suozaidi" maxlength="20" style="width:80px;">

                                        {{--@foreach($szd as $vo)--}}
                                                {{--<option value="{{ $vo->provice_name }}"  @if($vo->provice_name == {{ $sd[0]->provice_name }}) selected="selected"  @endif>{{ $vo->provice_name }}</option>--}}
                                        {{--@endforeach--}}
                                    </select>
                                    <label for="" class="left" style="font-size:16px"></label>
                                    <select name="sz" id="shujia" maxlength="20"style="width:79px;">
                                        <option value="-1">请选择</option><option value="0" selected="selected">北京市</option></select>
                                </div>
                                <div class="fg">
                                    <label for="" style="font-size:16px">暑假所在城市：</label>
                                    <select name="shujiaa" id="zxc" maxlength="20" style="width:80px;"><option value="-1">请选择</option>

                                    </select>
                                    <label for="" class="left" style="font-size:16px"></label>
                                    <select name="sj" id="zxcv" maxlength="20"style="width:79px;">
                                        <option value="-1">请选择</option><option value="0" selected="selected">北京市</option></select>
                                    <!---->
                                    <label for="" style="font-size:16px">寒假所在城市：</label>
                                    <select name="hanjia" id="nmb" maxlength="20" style="width:80px;"><option value="-1">请选择</option>

                                    </select>
                                    <label for="" class="left" style="font-size:16px"></label>
                                    <select name="hj" id="nmbb" maxlength="20"style="width:79px;">
                                        <option value="-1">请选择</option><option value="0" selected="selected">北京市</option></select>
                                </div>
                                <div class='fg'>
                                    <!-- 学校是下拉+手动输入-->
                                    <label for="">学　　校：</label>
                                    <select name="tc_school">
                                        @foreach($xuexiao as $xx)
                                        <option value="{{ $xx->school_name }}">{{ $xx->school_name }}</option>
                                        @endforeach
                                        <option >如无上述学校请手动输入</option>
                                        <input style="width:300px;" name="tc_school_bak" type="text" value="{{ $list->tc_school_bak }}" placeholder="请手动输入"/>
                                    </select>
                                </div>
                                <div class="fg sex">
                                    <label for="">性　　别：</label>
                                    @if($list->tc_sex=='1')
                                        <input type="radio" name="sex" value="1" checked><span>男</span>
                                        <input type="radio" name="sex" value="0"><span>女</span>
                                    @elseif($list->tc_sex=='0')
                                        <input type="radio" name="sex" value="1" ><span>男</span>
                                        <input type="radio" name="sex" value="0" checked><span>女</span>
                                    @elseif($list->tc_sex=='')
                                        <input type="radio" name="sex" value="1" checked><span>男</span>
                                        <input type="radio" name="sex" value="0"><span>女</span>
                                    @endif

                                </div>

                                <div class='fg'>
                                    <!-- 年级是下拉，后台抓取数据option-->
                                    <label for="">年　　级：</label>
                                    <select name="nj" id="">
                                        <option value="大一">大一</option>
                                        <option value="大二">大二</option>
                                        <option value="大三">大三</option>
                                        <option value="大四">大四</option>
                                        <option value="大五">大五</option>
                                        <option value="研一">研一</option>
                                        <option value="研二">研二</option>
                                        <option value="研三">研三</option>
                                    </select>
                                    <p></p>
                                </div>
                                <div class='fg'>
                                    <label for="">任教学校或机构：</label>
                                    <input style="width:460px;"  type="text" name="teaches" value="" class="" placeholder="仅专职老师填写任教学校或机构，此项对外不公布，请放心填写
">

                                </div>
                                <div class="fg">
                                    <label for="">高中文理：</label>
                                    <select name="tc_class" id="">
                                        <option value="理科" {{ $list->tc_class=="理科"?'checked':'' }}>理科</option>
                                        <option value="文科" {{ $list->tc_class=="文科"?'checked':'' }} >文科</option>
                                        <option value="未分科"{{ $list->tc_class=="未分科"?'checked':'' }} >未分科</option>
                                    </select>
                                </div>
                                <div class="fg sfg">
                                    <label for="">高中母校：</label>
                                    <input type="text"  name="tc_hsam" value="{{ $list->tc_hsam }}"/>
                                </div>
                                <!--城市-->
                                <div class="fg">
                                    <label for="" style="font-size:16px">高考所在地：</label>
                                    <select name="gaokao" id="shengfen" maxlength="20" style="width:80px;"><option value="-1">请选择</option>

                                    </select>
                                    <label for="" class="left" style="font-size:16px"></label>
                                    <select name="chengshi" id="chengshi" maxlength="20"style="width:79px;">
                                        <option value="-1">请选择</option><option value="0" selected="selected">北京市</option></select>
                                </div>
                                <!--	<div class="fg tel">
                                        <label for="">手　　机：</label>
                                        <input type="text" name="mobile" value="" class="phone" maxlength="11">
                                        <p></p>
                                    </div>-->
                                <div class="fg sfg">
                                    <label for="">出生年月：</label>
                                    <input type="text" name="tc_years" value="{{ $list->tc_years }}" placeholder="格式：1991-12-24"/>
                                </div>

                                <div class="fg">
                                    <label for="" style="font-size:16px">籍　　贯：</label>
                                    <select name="jiguans" id="jiguan" maxlength="20" style="width:80px;"><option value="-1">请选择</option>

                                    </select>
                                    <label for="" class="left" style="font-size:16px"></label>
                                    <select name="jiguan"  id="jiguana" maxlength="20"style="width:96px;">
                                        <option value="-1">请选择</option></select>
                                </div>
                                <div class="fg sfg">
                                    <label for="">专业类别：</label>
                                    <select name="zhuanye" id="">
                                        <option >--请选择--</option>
                                        <option value="数学">数学</option>
                                        <option value="英语">英语</option>
                                        <option value="国际学院内设专业（英文授课）">国际学院内设专业（英文授课）</option>
                                        <option value="物理类">物理类</option>
                                        <option value="化学类">化学类</option>
                                        <option value="生物学类">生物学类</option>
                                        <option value="师范专业（包括教育学）">师范专业（包括教育学）</option>
                                        <option value="心理学">心理学</option>
                                        <option value="管理学">管理学</option>
                                        <option value="经济类">经济类</option>
                                        <option value="外语系（英语专业以外）">外语系（英语专业以外）</option>
                                        <option value="建筑类">建筑类</option>
                                        <option value="法学">法学</option>
                                        <option value="新闻">新闻</option>
                                        <option value="中文">中文</option>
                                        <option value="政治">政治</option>
                                        <option value="历史">历史</option>
                                        <option value="地质地理">地质地理</option>
                                        <option value="医学/药学">医学/药学</option>
                                        <option value="社会学类">社会学类</option>
                                        <option value="农林专业">农林专业</option>
                                        <option value="体育">体育</option>
                                        <option value="艺术">艺术</option>
                                        <option value="计算机">计算机</option>
                                        <option value="电子信息科学">电子信息科学</option>
                                        <option value="自然类科学">自然类科学</option>
                                        <option value="其他">其他</option>


                                    </select>
                                    <label for="">具体专业：</label>
                                    <input type="text" name="tc_spl" value="{{ $list->tc_spl }}"/>
                                </div>
                                <div class='fg sfg'>
                                    <!-- 后台抓取城市option是区-->
                                    <label for="">目前住所：</label>
                                    <select class="form-control m-b"  name='qu' maxlength='20' style='width:80px;'>
                                        <option>--请选择--</option>
                                        @foreach($qu as $q)
                                        <option value="{{ $q->county_name }}">{{ $q->county_name }}</option>
                                        @endforeach
                                    </select>
                                    <input type="text" name="tc_now_lives" value="" placeholder="可以手动输入"/>
                                </div>

                                <div class="fg sfg">
                                    <label for="">教员身份：</label>
                                    <select id="indentity" name="tc_type" aria-invalid="false" class="help-block m-b-none">
                                        <option>--请选择--</option>
                                        <option value="大学生"{{ $list->tc_type=='大学生'?'checked':'' }}>大学生</option>
                                        <option value="专职老师" {{ $list->tc_type=='专职老师'?'checked':'' }}>专职老师</option>
                                        <option value="其他" {{ $list->tc_type=='其他'?'checked':'' }}>其他老师</option>
                                    </select>
                                </div>
                                <div class='fg sfg'>
                                    <label for="">教　　龄：</label>
                                    <select name="tc_jl" id="">
                                        <option value="1年以内">1年以内</option>
                                        <option value="1年">1年</option>
                                        <option value="2年">2年</option>
                                        <option value="3年">3年</option>
                                        <option value="4年">4年</option>
                                        <option value="4年以上">4年以上</option>
                                    </select>
                                </div>
                                <button type="submint">保存</button>
                            </form>
                            <div class="tech-info">
                                <div class="show-box">
                                    <div class="tit">
                                        <h4>教学信息</h4>
                                        <a href="" class="edit" id="bj"><img src="{{ asset('/home/image/pen.png') }}">编辑</a>
                                    </div>
                                    <ul class="out">
                                        <li>授课科目：<span></span></li>
                                        <li >授课区域：<span id="quyu"></span></li>
                                        <li>辅导方式：<span></span></li>
                                        <li>课酬要求：<span></span></li>
                                        {{--<li>授课时间：<span></span></li>--}}
                                    </ul>
                                    <script type="text/javascript">
                                        $('#bj').click(function(){
                                           // var qian = $('#quyu').html();
                                           // alert(qian);

                                            $('#quyu').html('');
                                           // $('#quyu').html(qian);
                                                                                    })
                                    </script>
                                    <div class="clear"></div>
                                </div>
                                <div class="hide-box">
                                    <form action=""  method="post" id="areaandnode">
                                        <div class="li-box">
                                            {{--<input type="hidden" name="from" id="center">--}}
                                            <div class="left pull-left top-left">
                                                <div class="fg">
                                                    <label for="">教授科目：</label>
                                                    <select id="FirstJob" name="" onchange="check_chose()">
                                                        @foreach($yiji as $yj)
                                                        <option value="{{ $yj->id }}" selected="">{{ $yj->yiji }}</option>
                                                        @endforeach
                                                     </select>
                                                </div>
                                                @foreach($yiji as $yj)
                                                <ul width="197" class="chose hidden_class_node" id="chose_{{ $yj->id }}" style="display:none">
                                                    @foreach($erji as $ej)
                                                        @if($ej->yiji_id == $yj->id)
                                                        @foreach($sanji as $sj)
                                                            @if($sj->erji_id == $ej->id)
                                                                <li onclick="addnode('{{ $sj->sanji }}')" data-val ue="{{ $sj->sanji }}">{{ $sj->sanji }}</li>
                                                            @endif
                                                        @endforeach
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                @endforeach
                                                <ul  width="197" class="chose hidden_class_node" id="chose_6" style="display:none">
                                                    <input style="width:100%;height:100%;"  type="text" name="tc_subjects2" value='上面没有的，课教授课程，请直接填写'/>
                                                </ul>
                                            </div>
                                            <div class="right pull-left tright">
                                                <ul>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                    <li><span></span><em></em></li>
                                                </ul>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <input type="hidden" name="tc_subjects" id="first_subject" value="">
                                        <script type="text/javascript">
                                            function deleteid(id)
                                            {
                                                var old_id = $("#first_subject").val();
                                                var old_arr = old_id.split(",");
                                                var len = old_arr.length;
                                                var new_arr = {};
                                                var j=0;
                                                for(var i=0;i<len;i++)
                                                {
                                                    if(old_arr[i] !="" && old_arr[i] != id)
                                                    {
                                                        new_arr[j] = old_arr[i];
                                                        j++;
                                                    }
                                                }
                                                var new_id = "";
                                                for(var i=0;i<j;i++)
                                                {
                                                    new_id = new_id + ","+new_arr[i];
                                                }
                                                $("#first_subject").val(new_id);
                                            }
                                            function check_chose(){
                                                var value = $("#FirstJob").val();
                                                $(".hidden_class_node").hide();
                                                $("#chose_"+value).show();
                                            }
                                            function addnode(id){
                                                var old_id = $("#first_subject").val();
                                                //alert(id);
                                                old_id = old_id + "," + id;

                                                $("#first_subject").val(old_id);
                                            }
                                            //授课区域
                                            function addnodes(id){
                                                var jiu = $("#tc_area").val();
                                                alert(id);
                                                jiu = jiu + "," + id;
                                                alert(jiu);
                                                //alert(jiu);
                                                $("#tc_area").val(jiu);
                                                $("#quyu").html(jiu);
                                            }
                                            //授课时间
                                            function sksj(id){
                                                var quyu = $("#quyu").html();
                                                //alert(id);
                                                quyu = quyu + "," + id;

                                                $("#quyu").html();
                                                //$("#quyu").html()+=quyu;
                                            }
                                        </script>
                                        <!-- 可授课区域-->
                                        <div class="tfg">
                                            <label for="">
                                                可授课区域
                                            </label>
                                            <div style="width:500px;" id="">
                                                @foreach($qu as $quyu)
                                                    {{--<input name="" onclick="addnodes('{{ $quyu->county_name }}')"  type="checkbox" value="{{ $quyu->county_name }}" style="margin:10px 0px 10px 0px;" />{{ $quyu->county_name }}--}}
                                                    <input type="checkbox" value="{{ $quyu->county_name }}" style="margin:10px 0px 10px 0px;" />{{ $quyu->county_name }}
                                                @endforeach
                                                    <input type="hidden" name="tc_area" id="tc_area" value="">
                                                    <input type="hidden" name="tc_id" id="" value="{{ $list->id }}">
                                            </div>

                                        </div>
                                        <div class='tfg'>
                                            <label for="">可授课时间</label>
                                            <table class="kuandu">
                                                {{--<tr>--}}
                                                    {{--<td><span style='display:none'></span></td>--}}
                                                    {{--<td>全选</td>--}}
                                                    {{--<td>周一</td>--}}
                                                    {{--<td>周二</td>--}}
                                                    {{--<td>周三</td>--}}
                                                    {{--<td>周四</td>--}}
                                                    {{--<td>周五</td>--}}
                                                    {{--<td>周六</td>--}}
                                                    {{--<td>周日</td>--}}

                                                {{--</tr>--}}
                                                <tr>
                                                    <td>上午</td>
                                                    <td><input type="checkbox" id="all" name="" />全选</td>
                                                    <td><input class="X" type="checkbox" name="time[]" value="上午周一"/>周一</td>
                                                    <td><input class="X" type="checkbox" name="time[]" value="上午周二"/>周二</td>
                                                    <td><input class="X" type="checkbox" name="time[]" value="上午周三"/>周三</td>
                                                    <td><input class="X" type="checkbox" name="time[]" value="上午周四"/>周四</td>
                                                    <td><input class="X" type="checkbox" name="time[]" value="上午周五"/>周五</td>
                                                    <td><input class="X" type="checkbox" name="time[]" value="上午周六"/>周六</td>
                                                    <td><input class="X" type="checkbox" name="time[]" value="上午周日"/>周日</td>
                                                </tr>
                                                <tr>
                                                    <td>下午</td>
                                                    <td><input type="checkbox" onclick="cheng(this.checked)"/>全选</td>
                                                    <td><input class="x" type="checkbox" name="time[]" value="下午周一"/>周一</td>
                                                    <td><input class="x" type="checkbox" name="time[]" value="下午周二"/>周二</td>
                                                    <td><input class="x" type="checkbox" name="time[]" value="下午周三"/>周三</td>
                                                    <td><input class="x" type="checkbox" name="time[]" value="下午周四"/>周四</td>
                                                    <td><input class="x" type="checkbox" name="time[]" value="下午周五"/>周五</td>
                                                    <td><input class="x" type="checkbox" name="time[]" value="下午周六"/>周六</td>
                                                    <td><input class="x" type="checkbox" name="time[]" value="下午周日"/>周日</td>
                                                </tr>
                                                <tr>
                                                    <td>晚上</td>
                                                    <td><input type="checkbox" id="li" />全选</td>
                                                    <td><input class='li' type="checkbox" name="time[]" value="晚上周一" />周一</td>
                                                    <td><input class='li' type="checkbox" name="time[]" value="晚上周二" />周二</td>
                                                    <td><input class='li' type="checkbox" name="time[]" value="晚上周三" />周三</td>
                                                    <td><input class='li' type="checkbox" name="time[]" value="晚上周四" />周四</td>
                                                    <td><input class='li' type="checkbox" name="time[]" value="晚上周五" />周五</td>
                                                    <td><input class='li' type="checkbox" name="time[]" value="晚上周六" />周六</td>
                                                    <td><input class='li' type="checkbox" name="time[]" value="晚上周日" />周日</td>

                                                </tr>
                                            </table>

                                        </div>
                                        <div class="fg sex fdfs">
                                            <label for="">辅导方式：</label>
                                            <input type="checkbox" name="teach_mode[]" value="本人上门"><span>本人上门</span>
                                            <input type="checkbox" name="teach_mode[]" value="学生上门"><span>学生上门</span>
                                            <input type="checkbox" name="teach_mode[]" value="网上辅导"><span>网上辅导</span>
                                        </div>
                                        <div class="fg">
                                            <label for="">课酬要求：</label>
                                            <input type="text" name="pay" placeholder="执行栗志家教收费标准" class="imoney" value="">
                                            <a style="color:#e4393c;" href="">查看更多收费标准</a>
                                        </div>
                                        <input type="hidden" name="type" value="1">
                                        <button type="reset" class="reset">取消</button>
                                        <button type="submit" class="tsubmit" onclick="savenodearea()">保存</button>
                                        <div class="clear"></div>
                                    </form>
                                    <script>
                                        function savenodearea()
                                        {
                                            $.ajax({
                                                url:'/dokemu.html',
                                                type:"post",
                                                data:$("#areaandnode").serialize(),
                                                success:function(data)
                                                {
                                                    if(data == 'y'){
                                                        alert('保存成功');
                                                    }
                                                }
                                            })
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="tech-exp">
                                <div class="show-box">
                                    <div class="tit">
                                        <h4>教学经验</h4>
                                        <a href="" class="edit"><img src="{{ asset('/home/image/pen.png') }}">编辑</a>
                                    </div>
                                    <ul class="out">
                                        <li>自我描述丶特长展示：<span></span></li>
                                        <li>所获证书：<span></span></li>
                                        <li>家教简历：<span></span></li>

                                    </ul>
                                    <div class="clear"></div>
                                </div>
                                <div class="hide-box">
                                    <form action="" id="othersave2" enctype= multipart/form-data >
                                        <div class="tfg">
                                            <label for="">自我描述：</label><br/>
                                            {{--<a  style="color: #333" href="">查看范例</a>--}}
                                            <textarea name="resume" placeholder="注：写的越详细，家长会觉得你越负责，也越了解你的情况，将增加家长对你的好感，大幅增加成功接单的概率。" class="al"></textarea>
                                        </div>
                                        <div class="fg">
                                            <label for="">所获证书：</label>
                                            <input type="" name="book" placeholder="示例：大学六级英语/雅思8.0分" class="shzs" value="">

                                        </div>
                                        <div>
                                            <label  for="">上传证书：</label>
                                            <div>
                                                <div>
                                                    <input type="file" id="up" style="display:none;" accept="image" onchange="return  upTp()" >
                                                </div>
                                                <img src="/home/image/weixinerweima.jpg" alt="" id="src_tp">
                                                <a href="javascript:void(0)" id='sctp'>点击上传</a>
                                            </div>
                                            <br/>
                                            {{--<a  style="color: #333" href="">查看范例</a>--}}
                                        </div>


                                        <div class="tfg" >
                                            <label for="">家教简历：</label>
                                            <br/>
                                            {{--<a style="color: #333;margin-bottom: 15px;display: inline-block" href="">查看范例</a>--}}
                                            <div>
                                                <div style="height: 180px;">
                                                    <div style="float:left;margin-right:10px">
                                                        <span>时间</span>
                                                        <br />
                                                        <input type="" value="" placeholder="请手动输入时间">
                                                    </div>

                                                    <div style="float:left; margin-right:5px;">
                                                        <span>教授科目</span>
                                                        <br />
                                                        <select name="" id="">
                                                            @foreach($km as $k)
                                                            <option value="{{ $k->sanji }}">{{ $k->sanji }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div style="float:left;">
                                                        <span>教授结果</span>
                                                        <br />
                                                        <textarea name="" id="" cols="30" rows="10" placeholder="例如：学生成绩从50分左右增加到90分左右。学生和家长都对我的教员非常满意，我也很高兴付出的努力得到了回报。"></textarea>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                        <div class="tfg" >
                                            <label for="">家教简历：</label>

                                            <div>
                                                <div style="height: 180px;">
                                                    <div style="float:left;margin-right:10px">
                                                        <span>时间</span>
                                                        <br />
                                                        <input type="" value=""/ placeholder="请手动输入时间">
                                                    </div>

                                                    <div style="float:left; margin-right:5px;">
                                                        <span>教授科目</span>
                                                        <br />
                                                        <select name="" id="">
                                                            @foreach($km as $k)
                                                                <option value="{{ $k->sanji }}">{{ $k->sanji }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div style="float:left;">
                                                        <span>教授结果</span>
                                                        <br />
                                                        <textarea name="" id="" cols="30" rows="10" placeholder="例如：学生成绩从50分左右增加到90分左右。学生和家长都对我的教员非常满意，我也很高兴付出的努力得到了回报。"></textarea>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                        <div class="tfg" >
                                            <label for="">家教简历：</label>

                                            <div>
                                                <div style="height: 180px;">
                                                    <div style="float:left;margin-right:10px">
                                                        <span>时间</span>
                                                        <br />
                                                        <input type="" value="" placeholder="请手动输入时间">
                                                    </div>

                                                    <div style="float:left; margin-right:5px;">
                                                        <span>教授科目</span>
                                                        <br />
                                                        <select name="" id="">
                                                            @foreach($km as $k)
                                                                <option value="{{ $k->sanji }}">{{ $k->sanji }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div style="float:left;">
                                                        <span>教授结果</span>
                                                        <br />
                                                        <textarea name="" id="" cols="30" rows="10" placeholder="例如：学生成绩从50分左右增加到90分左右。学生和家长都对我的教员非常满意，我也很高兴付出的努力得到了回报。"></textarea>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                        <button type="reset" class="reset">取消</button>
                                        <button type="submit" class="bsubmit" onclick="savenodearea2()">保存</button>
                                        <div class="clear"></div>
                                    </form>
                                    <script>
                                        function savenodearea2()
                                        {
                                            $.ajax({
                                                url:'',
                                                type:"post",
                                                data:$("#othersave2").serialize(),
                                                success:function(data)
                                                {

                                                }
                                            })
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-cont " style="font-size:1.0rem">
                        <div class="authentication">
                            <h3>请一次上传所有证件，否则将不能为您匹配家教订单</h3>
                            <div class="up-img top-up">
                                <h4>上传身份证照片</h4>
                                <div class="left pull-left">
                                    <div class="img">
                                        <img src="{{ asset('/home/image/yz.png') }}" width="248" height="155" alt="">
                                    </div>
                                    <p>请确保身份证信息和您填写的个人信息一致，图片 限jpg、gif、png格式,200k以内。</p>
                                    <form action="/upload_iframe.html" method="post" enctype="multipart/form-data" id="sfz">
                                        <input type="file" class="loca" name="upfile[]" onchange="javascript:$(&#39;#sfz&#39;).submit()" accept="image">
                                        <input type="hidden" name="phone" value="{{ $list->id }}">


                                        {{--<input type="hidden" name="user_id" value="336038">--}}
                                        {{--<input type="hidden" name="from" value="center">--}}
                                        <div class="fg">
                                            <button type="submit" class="uper">选择文件</button>

                                            <button type="submit" >提交</button>
                                            <input type="text" >提交
                                        </div>
                                    </form>
                                </div>
                                <div class="right pull-right">
                                    <div class="img">
                                        <img src="{{ asset('/home/image/sl_1.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-cont ">
                        <div class="no-payment">
                            <div class="section" id="tit">
                                <span class="NewInfo_1">新家教单</span>
                                <span class="NewInfo_2">我预约的单</span>
                                <span class="NewInfo_3">我已接的单</span>
                                <span class="NewInfo_4">成功的单</span>
                            </div>
                                <div>
                                    <table>
                                        <caption>新家教单</caption>
                                    </table>
                                </div>
                                <ul id="con">
                                    <li class="show">
                                        <div class="content">
                                            <table border="1">
                                                <tr>
                                                  <th style="width: 100px;" >订单状态/教员要求/编号</th>
                                                  <th  style="width: 80px;">年级科目/查看详情</th>
                                                  <th style="width: 170px;">地址</th>
                                                  <th colspan="2" style="width: 200px;">课酬/信息费</th>
                                                  <th style="width: 150px;">获取订单</th>
                                                  <th style="width: 100px;">备注</th>
                                                </tr>
                                                <tr>
                                                    <td>新家教</td>
                                                    <td>初一数学</td>
                                                    <td>地址</td>
                                                    <td rowspan="3" style="width: 120px;">
                                                        <p>课酬：</p>
                                                        <p>周课酬：</p>
                                                        <p>信息费：</p>
                                                        <p>家长服务费：</p>
                                                        <p>预付信息费:</p>
                                                        <p>成功后需付信息费：</p>
                                                    </td>
                                                    <td rowspan="3" style="width: 200px">
                                                        <p>180元/次</p>
                                                        <p>360元/周</p>
                                                        <p>360元</p>
                                                        <p>50元</p>
                                                        <p>300元</p>
                                                        <p>60元</p>
                                                    </td>
                                                    <td>一键预约</td>
                                                    <td>备注/疑问</td>
                                                </tr>
                                                <tr>
                                                    <td>签约教员单/非签约教员单</td>
                                                    <td rowspan="3">查看详情（点击后进入前台订单页面</td>
                                                    <td rowspan="3">
                                                        <form>
                                                        <textarea></textarea>
                                                        </form>
                                                    </td>
                                                    <td rowspan="3">支付诚意金优先安排</td>
                                                    <td rowspan="3"><a href="">常见问题</a></td>
                                                </tr>
                                                <tr>
                                                    <td>1003666</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <table border="1">
                                            <tr>
                                              <th style="width: 100px;" >订单状态/教员要求/编号</th>
                                              <th  style="width: 80px;">年级科目/查看详情</th>
                                              <th style="width: 100px;">地址</th>
                                              <th colspan="2" style="width: 26%;">课酬/信息费</th>
                                              <th style="width: 210px;">获取订单</th>
                                              <th style="width: 20%;">备注</th>
                                            </tr>
                                            <tr>
                                                <td>新家教</td>
                                                <td>初一数学</td>
                                                <td>地址</td>
                                                <td rowspan="3">
                                                    <p>课酬：</p>
                                                    <p>周课酬：</p>
                                                    <p>信息费：</p>
                                                    <p>家长服务费：</p>
                                                    <p>预付信息费</p>
                                                    <p>成功后需付信息费：</p>
                                                </td>
                                                <td rowspan="3">
                                                    <p>180元/次</p>
                                                    <p>360元/周</p>
                                                    <p>360元</p>
                                                    <p>50元</p>
                                                    <p>300元</p>
                                                    <p>60元</p>
                                                </td>
                                                <td>一键预约(闪动)点击后弹窗提示，预约后进入我预约的单</td>
                                                <td>备注/疑问（弹窗提示我们的联系方式）</td>
                                            </tr>
                                            <tr>
                                                <td>签约教员单/非签约教员单</td>
                                                <td rowspan="3">查看详情（点击后进入前台订单页面</td>
                                                <td rowspan="3">
                                                    <textarea></textarea>
                                                </td>
                                                <td rowspan="3">支付诚意金优先安排（2天后或单安排出去后自动退回--除非锁定中）：30元（默认）/50元/100元/200元/300元（闪动）-如没预约，直接点这里了，就是先确认预约并收款</td>
                                                <td rowspan="1" style="width: 317px;">系统推送订单？（本单为系统推荐单，可以进行预约马上获取，推荐单被接单后，将不再显示在你预约的单中）
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1003666</td>
                                                <td><a href="">常见问题</a></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li>
                                        <table border="1">
                                            <tr>
                                              <th style="width: 145px;">订单编号/接单时间/查看详情</th>
                                              <th  colspan="2" >试课时间/试课地点    </th>
                                              <th style="width: 10%;">电子介绍信</th>
                                              <th>授课订单（VIP专享）</th>
                                              <th style="width: 10%;">试课结果填写</th>
                                              <th colspan="2" style="width: 23%;">课酬/信息费</th>
                                              <th>申请退款</th>
                                            </tr>
                                            <tr>
                                              <td>1003666</td>
                                              <td style="width: 80px;">试课时间：必须填写</td>
                                              <td style="width: 80px;">2017-3-27 上午/下午/晚上</td>
                                              <td rowspan="3"><a href="">预览</a></td>
                                              <td style="width: 110px;"  rowspan="3">VIP专享</td>
                                              <td>试课成功（</td>
                                              <td rowspan="3" style="width: 102px;">
                                                <p>课酬:</p>
                                                <p>周课酬：</p>
                                                <p>信息费：</p>
                                                <p>家长服务费：</p>
                                                <p>已预付信息费</p>
                                                <p>需补/需退信息费：</p>
                                                <p>已补/已退信息费：</p>
                                                <p>已锁定诚意金：</p>
                                                <p>待退回诚意金：</p>
                                                <p>本单实际信息费：</p>
                                              </td>
                                              <td rowspan="3" style="width: 51px;line-height: 40px;">
                                                <p>180元/次</p>
                                                <p>360元/周</p>
                                                <p>360元</p>
                                                <p>50元</p>
                                                <p>300元</p>
                                                <p>60元</p>
                                                <p>60元</p>
                                                <p>200元</p>
                                                <p>200元</p>
                                                <p>360元</p>
                                              </td>
                                              <td rowspan="3" style="width: 120px;">
                                                <p><a href="">申请退款</a></p>
                                                <p><a href="">申请诚意金解锁</a></p>
                                                <p>申请退款记录 </p>
                                                <p >申请退款记录</p>
                                              </td>
                                            </tr>
                                            <tr>
                                                <td>接单时间：17-03-01</td>
                                                <td rowspan="2">试课地点：必须填写</td>
                                                <td rowspan="2">
                                                    <form>
                                                        <textarea></textarea>
                                                    </form>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>查看详情</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li>
                                        <table border="1">
                                            <tr>
                                                <th>订单编号/查看详情</th>
                                                <th>学员基础信息</th>
                                                <th style="width: 100px;">授课订单（VIP专享）</th>
                                                <th colspan="2">课酬（VIP专享）   </th>
                                                <th>状态</th>
                                                <th style="width: 120px;">每月反馈（根据成功日期后每月1号生成一次，填写日待时间到后开放填写，闪光）</th>
                                                <th style="width: 100px;">结束课程</th>
                                                <th style="width: 100px;">电子合同</th>
                                            </tr>
                                            <tr>
                                                <td>1003666</td>
                                                <td rowspan="2">
                                                    <p>学员姓名：周同学</p>
                                                    <p>辅导科目：语文数学</p>
                                                    <p>学员年级：初一</p>
                                                    <p>上课时间：</p>
                                                    <p>每周日下午3小时（不同时间段均可增加）</p>
                                                    <p style="height: 15px;"> </p>
                                                    <p><a href="">进行维护</a></p>
                                                </td>
                                                <td rowspan="2">VIP专享（如非打开按钮的，只显示这个，不能点击生成）|生成授课订单|查看授课订单</td>
                                                <td rowspan="2">
                                                    <p>反馈后可收款订单金额</p>
                                                    <p>完成反馈等待家长确认给款订单金额</p>
                                                    <p>累计课酬收入</p>
                                                    <p>累积已收到课酬</p>
                                                    <p>未完成的授课订单</p>
                                                    <p>已过期尚未完成反馈订单金额（请确认是否授课）</p>
                                                    <p>已锁定诚意金：</p>
                                                    <p>待退回诚意金：</p>
                                                </td>
                                                <td rowspan="2" style="width: 100px; line-height: 16px;">
                                                    <p>180元</p>
                                                    <p>360元</p>
                                                    <p>1080元</p>
                                                    <p>540元</p>
                                                    <p>300元</p>
                                                    <p style="width: 100px; line-height: 29px;">180元</p>
                                                    <p>0元</p>
                                                    <p>0元</p>
                                                </td>
                                                <td rowspan="2">
                                                    已成功(授课中)|已成功(授课结束)
                                                </td>
                                                <td rowspan="2">
                                                    2017-3-27 待填写（闪光）已填写 查看 反馈时间

                                                </td>
                                                <td rowspan="2">
                                                    <a href="">结束课程</a>
                                                </td>
                                                <td rowspan="2">
                                                    <a href="">查看合同</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">查看详情（点击后进入前台订单页面）</td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                        </div>
                    <style>
                        #con li{display: none; }
                        #tit span.select {background: red; color: #ccc;}
                        #con li.show {display: block;}
                        th{
                            text-align: center;
                        }
                    </style>
                    <script>
                        $('#tit span').click(function() {
                            var i = $(this).index();//下标第一种写法
                            $(this).addClass('select').siblings().removeClass('select');
                            $('#con li').eq(i).show().siblings().hide();
                        });
                    </script>
                    </div>
                    <div class="tab-cont  ">
                        <div class="application">
                            <div class="section">
                                <h3><i></i>的订单申请记录</h3>
                                <p>如下是您最近申请过的订单，某些申请记录可能因为特殊原因未被展示。</p>
                            </div>
                            <table>
                                <caption>家教申请记录</caption>
                                <thead>
                                <tr>
                                    <th>订单号</th>
                                    <th>申请时间</th>
                                    <th>年级科目</th>
                                    <th>状态</th>
                                    <th>备注</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-cont ">
                        <div class="succeed">
                            <div class="section">
                                <h3><i></i>的成功家教记录</h3>
                                <p>成功记录是您过往在德栗家教接受聘用并持续任教的历史记录，成功记录丰富，学员将会更愿意选择您任教。</p>
                            </div>
                            <table>
                                <caption>家教记录</caption>
                                <thead>
                                <tr>
                                    <th>订单号</th>
                                    <th>申请时间</th>
                                    <th>年级科目</th>
                                    <th>家长姓名</th>
                                    <th>家长电话</th>
                                    <th>状态</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-cont ">
                        <div id="ishave" class="succeed" style="display:none">
                            <table>
                                <caption>收款方信息</caption>
                                <tbody>
                                <tr>
                                    <td colspan="5">
                                        <button type="button" style="color: #fff;background: #f9b04e;outline: none;border: none;padding: 7px 36px;font-size: 16px;border-radius: 4px;cursor: pointer;margin-top: 10px;" onclick="AddCount();">
                                            新增
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <form method="post" enctype="multipart/form-data" name="tform" action="http://www.jiajiao114.com/member/tuikuan_post.php">
                                <input type="hidden" name="action" value="tuikuan">
                                <input type="hidden" name="acc_id" value="">
                                <table width="100%" border="0">
                                    <tbody><tr>
                                        <td width="20%" align="right" bgcolor="#fbfbf5">
                                            <p>您的账户余额为：</p>
                                        </td>

                                        <td width="6%" bgcolor="#fbfbf5">0元</td>
                                        <td width="19%" align="right" bgcolor="#fbfbf5">
                                            <p>申请退款金额</p>
                                        </td>
                                        <td width="10%" bgcolor="#fbfbf5">
                                            <input name="money" type="text" id="money" size="10" value="0"></td>
                                        <td width="3%" bgcolor="#fbfbf5">元</td>
                                        <td width="41%" bgcolor="#fbfbf5"><a onclick="CheckMoney();">
                                                <button type="button" style="color: #fff;background: #f9b04e;outline: none;border: none;padding: 7px 36px;font-size: 16px;border-radius: 4px;cursor: pointer;margin-top: 10px;">申请</button>
                                            </a></td>
                                    </tr>
                                    </tbody></table>
                            </form>
                            <div id="div_sq" class="succeed">
                                <table width="100%" border="0">
                                    <tbody><tr>
                                        <td colspan="8" align="left" bgcolor="#EDF9D4"><strong>申请记录</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="5%" align="center" bgcolor="#fbfbf5">编号</td>
                                        <td width="10%" align="center" bgcolor="#fbfbf5">申请时间</td>
                                        <td width="9%" align="center" bgcolor="#fbfbf5">金额</td>
                                        <td width="22%" align="center" bgcolor="#fbfbf5">银行</td>
                                        <td width="17%" align="center" bgcolor="#fbfbf5">账号</td>
                                        <td width="10%" align="center" bgcolor="#fbfbf5">操作时间</td>
                                        <td width="10%" align="center" bgcolor="#fbfbf5">备注</td>
                                        <td width="17%" align="center" bgcolor="#fbfbf5">状态</td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <script>
                                function AddCount() {
                                    document.getElementById("nohave").style.display = "";
                                    document.getElementById("ishave").style.display = "none";
                                }
                                function ChangeInfo(b_id) {
                                    document.tform.acc_id.value = b_id;
                                }
                                function CheckMoney() {
                                    if(0 == 0) {
                                        alert("您没有可退的余额或者您申请的退款还未得到财务确认，请稍候重试！");
                                        return false;
                                    }

                                    if(document.tform.acc_id.value == "" ) {
                                        alert("请选择您的收款方信息！");
                                        return false;
                                    }

                                    if(document.tform.money.value == "") {
                                        alert("请填写您要退款的金额");
                                        return false;
                                    }

                                    if (/[^\d]/.test(document.tform.money.value)){
                                        alert("退款金额只能为数字，请重新输入！");
                                        document.tform.money.focus();
                                        return false;
                                    }

                                    if(document.tform.money.value == 0) {
                                        alert("请输入退款金额！");
                                        document.tform.money.focus();
                                        return false;
                                    }
                                    if(document.tform.money.value > 0) {
                                        alert("您输入的金额超过了您的余额，请重新输入！");
                                        document.tform.money.focus();
                                        return false;
                                    }
                                    document.tform.submit();
                                }
                            </script>
                            <div style="display:none">
                                <form id="deleteForm" name="deleteForm" method="post" action="">
                                    <input type="hidden" name="id" value="">
                                    <input type="hidden" name="action" value="">
                                </form>
                            </div>
                        </div>
                        <div id="nohave" class="refund" style="display:">
                            <div class="section">
                                <p style="font-size:16px">1. 请认真填写如下信息，需要退款的银行的支行一定要写清楚！</p>
                                <p style="font-size:16px">2. 我们会在每周星期三和星期五统一做退款处理。 </p>
                                <p style="font-size:16px">3. 退款以后会有短信通知，请及时查收。</p>
                            </div>
                            <form action="" name="bank_info" method="post" enctype="multipart/form-data">
                                <div class="fg">
                                    <label for="" style="font-size:16px">收款方　　　　户名：</label>
                                    <input type="text" name="acc_name" id="acc_name" maxlength="20">
                                </div>
                                <div class="fg">
                                    <label for="" style="font-size:16px">收款方　　　　地址：</label>
                                    <select name="pro" id="pro" maxlength="20"><option value="-1">请选择</option>
                                        <option value="0">北京市</option>
                                        <option value="1">天津市</option>
                                        <option value="2">上海市</option>
                                        <option value="3">重庆市</option>
                                        <option value="4">河北省</option>
                                        <option value="5">山西省</option>
                                        <option value="6">台湾省</option>
                                        <option value="7">辽宁省</option>
                                        <option value="8">吉林省</option>
                                        <option value="9">黑龙江省</option>
                                        <option value="10">江苏省</option>
                                        <option value="11">浙江省</option>
                                        <option value="12">安徽省</option>
                                        <option value="13">福建省</option>
                                        <option value="14">江西省</option>
                                        <option value="15">山东省</option>
                                        <option value="16">河南省</option>
                                        <option value="17">湖北省</option>
                                        <option value="18">湖南省</option>
                                        <option value="19">广东省</option>
                                        <option value="20">甘肃省</option>
                                        <option value="21">四川省</option>
                                        <option value="22">贵州省</option>
                                        <option value="23">海南省</option>
                                        <option value="24">云南省</option>
                                        <option value="25">青海省</option>
                                        <option value="26">陕西省</option>
                                        <option value="27">广西壮族自治区</option>
                                        <option value="28">西藏自治区</option>
                                        <option value="29">宁夏回族自治区</option>
                                    </select>
                                    <label for="" class="left" style="font-size:16px">省/直辖市：</label>
                                    <select name="city" id="city" maxlength="20">
                                        <option value="-1">请选择</option><option value="0" selected="selected">北京市</option></select>
                                </div>
                                <div class="fg">
                                    <label for="" style="font-size:16px">收款方　　　开户行：</label>
                                    <input type="text" name="bank_name" maxlength="20">
                                    <label for="" style="font-size:16px" class="left">支　　 行：</label>
                                    <input type="text" name="bank_sname" maxlength="20">
                                </div>
                                <div class="fg">
                                    <label for="" style="font-size:16px">汇入收款方　　账号：</label>
                                    <input type="text" class="zh" name="bank_account" maxlength="20">
                                </div>
                                <div class="fg">
                                    <label for="" style="font-size:16px">重新输入收款方账号：</label>
                                    <input type="text" class="rzh" name="com_account" maxlength="20">
                                    <p></p>
                                </div>
                                <button type="submit">提交</button>
                            </form>
                            <script src="{{ asset('/home/js/city.js') }}"></script>
                            <script type="text/javascript">
                                $.initProv("#shengfen","#chengshi",'0','0');
                            </script>
                            <script type="text/javascript">
                                $.initProv("#zxc","#zxcv",'0','0');
                            </script>
                            <script type="text/javascript">
                                $.initProv('#jiguan','#jiguana','0','0');
                            </script>
                            <script type="text/javascript">
                                $.initProv("#nmb","#nmbb",'0','0');
                            </script>
                            <script type="text/javascript">
                                $.initProv('#suozaidi','#shujia','0','0');
                            </script>
                            <script type="text/javascript">
                                $.initProv("#pro", "#city", "0", "0");
                                //	$.initProv("#shengfen","#chengshi","0","0");
                                if(0 == 0) {
                                    document.getElementById("div_acc").style.display = "none";
                                    document.getElementById("div_bank").style.display = "";
                                    document.getElementById("div_tk").style.display = "none";
                                    document.getElementById("div_sq").style.display = "none";
                                }
                            </script>

                        </div>
                    </div>
                    <div class="tab-cont ">
                        <div class="complain">
                            <form action="" method="post">
                                <div class="fg">
                                    <label for="" style="font-size:16px">主题：</label>
                                    <input type="text" name="title" maxlength="30">
                                </div>
                                <div class="fg fl">
                                    <label for="" style="font-size:16px">分类：</label>
                                    <input type="radio" name="type" value="1"><span>投诉</span>
                                    <input type="radio" name="type" value="2"><span>建议</span>
                                </div>
                                <div class="tfg">
                                    <label for="" style="font-size:16px">描述：</label>
                                    <textarea name="message" id="message" maxlength="100"></textarea>
                                </div>
                                <div class="fg">
                                    <label for="" style="font-size:16px">
                                        如果是投诉退款相关问题，请提交相应订单号：
                                    </label>
                                    <input type="text" name="order_id">
                                </div>
                                <button type="submit">提交</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-cont ">
                        <div class="resetting">
                            <h3>修改密码</h3>
                            <form action="/doeditpass" method="post" onsubmit="return checkpassword()">
                                <div class="fg">
                                    <label for="" style="font-size:13px;">原　　密　　码：</label>
                                    <input type="password" name="pass">
                                </div>
                                <div class="fg">
                                    <label for="" style="font-size:13px;">新　　密　　码：</label>
                                    <input type="password" name="onepass" id="newpassword">
                                </div>
                                <div class="fg">
                                    <label for="" style="font-size:13px;">再次输入新密码：</label>
                                    <input type="password" name="towpass" id="confirmnewpassword">
                                </div>
                                <button type="submit">确认修改</button>
                            </form>
                            <script>
                                function checkpassword()
                                {
                                    var p1 = $("#newpassword").val();
                                    var p2 = $("#confirmnewpassword").val();

                                    if(p1 != p2)
                                    {
                                        alert("两次密码不一致");
                                        return false;
                                    }
                                    if(p1.length < 6)
                                    {
                                        alert("密码长度应大于6位");
                                        return false;
                                    }
                                    return true;

                                }
                            </script>
                        </div>
                    </div>
                </small></div><small>
                <div class="clear"></div>
            </small></div><small>
        </small></div><small>
    </small></div><small>
    <div id="footer" style="height:100px">
        <div class="pfoot" style="height:100px;padding:40px 0">
            <div class="container">
                <p>Copyright2007－2017广州学求易教育咨询有限公司 版权所有 All rights reserved</p>
            </div>
        </div>
    </div>
    <div class="suspend">
        <ul>
            <li>
                <img src="{{ asset('/home/image/float_1.png') }}" alt="">
                <div class="wechat hidebox">
                    <div class="inbox">
                        <img src="{{ asset('/home/image/code.png') }}" alt="">
                        <i>【扫一扫】随时请家教</i>
                    </div>
                </div>
            </li>
            <li><a href="http://wpa.b.qq.com/cgi/wpa.php?ln=2&amp;uin=4006179958" target="_blank"><img src="{{ asset('/home/image/float_2.png') }}" alt=""></a></li>
            <!-- <li>
                <img src="/images/float_3.png" alt="">
                <div class="chat hidebox">
                    <form action="" >
                    <input type="text" placeholder="请输入您的手机号">
                    <button type="submit">立即免费通话</button>
                </form>
                </div>
            </li> -->
            <li class="scroll-top">
                <img src={{ asset('/home/image/float_4.png') }}" alt=""></li>
        </ul>
    </div>

    <script src="{{ asset('/home/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home/js/cheng.js') }}"></script>
    <script src="{{ asset('/admin/js/plugins/layer/layer.min.js') }}"></script>
    <script type="text/javascript">
        function TemporaryMedia() {
            //var image0 = $("input[name='file_temporaryImage']").val();
            //判断上传控件中是否选择了图片
            var image = $("#upfile").val();
            if ($.trim(image) == "") {
                alert("请选择图片！");
                return;
            }
            //提交请求处理的url
            var actionUrl = "/member/edit_touxiang.php";
            //开始ajax操作
            $("#form1").ajaxSubmit({

                type: "POST",//提交类型
                url: actionUrl,//请求地址
                data: { "action": "TemporaryImage" },//请求数据
                success: function (data) {//请求成功后的函数
                    $("#touxiang_src").attr("src",data);
                },
                error: function (data) { },//请求失败的函数
                async: true
            });

        }
    </script>
    <script type="text/javascript">
        //例：北京市
        $.ajax({
            url:'/sheng',              //请求地址
            type:'post',                //请求方式
            async:true,                 //是否异步
            success:function(data){     //成功回调函数
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                    $('#cid').append("<option value='"+data[i].provice_id+"'>"+data[i].provice_name+"</option>");
                };
            },
            error:function(){
               // alert('ajax请求失败');  //失败回调
            }
        });

        //例：北京市 - 市辖区（市辖县）

        $("#cid").change(function(){
            $(this).nextAll("select").remove();
            var ob = $(this);
            //alert(ob.val());
            $.ajax({
                url:'/xian',              //请求地址
                type:'post',                //请求方式
                async:true,                 //是否异步
                data:{pid:($(this).val())}, //发送的数据
                dataType:'json',            //响应的数据类型
                success:function(data){     //成功回调函数
                    console.log(data);
                    if(data.length>0){
                        var select = $("<select id='citys' class='form-control m-b' name='city' maxlength='20' style='width:80px;'><option>--请选择--</option></select>")
                        for (var i = 0; i < data.length; i++) {
                            $(select).append("<option value='"+data[i].city_name+"'>"+data[i].city_name+"</option>");
                        };
                        ob.after(select);
                    }
                },
                error:function(){
                    //alert('ajax请求失败');  //失败回调
                }
            });
        });


        @if(session("msg"))
             layer.alert('{{session("msg")}}',{icon: 5,time:2000});
        @endif
    </script>
    <script type="text/javascript">
        $('#sctp').click(function(){
            $('#up').click();
        });
        function upTp(){
            var images = $("#up").val();
            if ($.trim(images) == "") {
                alert("请选择图片！");
                return;
            }
            var actionUrl = "";

            $("#othersave2").ajaxSubmit({

                type: "POST",//提交类型
                url: actionUrl,//请求地址
                data: { "action": "TemporaryImage" },//请求数据
                success: function (data) {//请求成功后的函数
                    $("#src_tp").attr("src",data);
                },
                error: function (data) { },//请求失败的函数
                async: true
            });
        }
    </script>

</small>
</body>
</html>
