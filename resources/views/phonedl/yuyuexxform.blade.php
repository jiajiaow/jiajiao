<!DOCTYPE html>
<html lang="en">
<head>
    <script src="/phone/js/flexible.js"></script>
    <meta charset="UTF-8">
    <title>填写资料</title>
    <link rel="stylesheet" href="/phone/css/fast.css">
    <link rel="stylesheet" href="/phone/css/reset.css">
    <link rel="stylesheet" href="/phone/css/yuyue.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="wrap">
    <div class="nav_header">
        <i class="header_left_icon header_icon" onclick="window.history.go(-1);"></i>
        <span>快速请家教</span>
        <a href="/mobile/login.html"><i class="header_right_icon header_icon"></i></a>
    </div>
    <section class="form_fastTutor">
     <form method="post" action="/StudentAdd"  onSubmit="return ChkFields();" name="myform" id="myform">
        <div class="form_fastTutor_title">
            <i class="form_fastTutor_title_icon"></i>
            <span class="form_fastTutor_title_text">请完善您的资料，方便为您匹配家教订单</span>
        </div>
        <div class="form_fastTutor_content" style="padding-bottom: 1rem;">
            <ul>
                <li>
                    <span>微信：</span><input type="text" name="wx" placeholder="选填">
                </li>
                <li>
                    <span>QQ：</span><input type="text" name="qq" placeholder="选填">
                </li>
                <li>
                    <span>性别：</span>
                    <select name="user_sex" id="">
                        <option  value="1" checked="">男</option>
                        <option value="2">女</option>
                        <option value="3">男女不限</option>
                    </select>
                </li>
                <li>
                    <span>年级：</span>
                    <select name="grade" >
                        <option value="幼儿">幼儿</option>
                        <option value="一年级">一年级</option>
                        <option value="二年级">二年级</option>
                        <option value="三年级">三年级</option>
                        <option value="四年级">四年级</option>
                        <option value="五年级">五年级</option>
                        <option value="六年级">六年级</option>
                        <option value="初一">初一</option>
                        <option value="初二">初二</option>
                        <option value="初三">初三</option>
                        <option value="高一">高一</option>
                        <option value="高二">高二</option>
                        <option value="高三">高三</option>
                        <option value="艺考生">艺考生</option>
                        <option value="其它年级">其它年级</option>
                        <option value="成人">成人</option>
                    </select>
                </li>
                <li>
                    <span>辅导类型：</span>
                    <select name="fdlx" >
                        <option value="授课教学">授课教学</option>
                        <option value="作业辅导">作业辅导</option>
                        <option value="讲解疑难">讲解疑难</option>
                    </select>
                </li>
                <li>
                    <div style="margin-left: 0">
                        <span>每周上：</span>
                        <select name="o_ts" >
                            <option value="1">1天</option>
                            <option value="2">2天</option>
                            <option value="3">3天</option>
                            <option value="4">4天</option>
                            <option value="5">5天</option>
                            <option value="6">6天</option>
                            <option value="7">7天</option>
                        </select>
                    </div>
                    <div style="margin: 0;">
                        <span>每次上：</span>
                        <select name="o_ts" >
                            <option value="1">1小时</option>
                            <option value="2">2小时</option>
                            <option value="3">3小时</option>
                            <option value="4">4小时</option>
                            <option value="5">5小时</option>
                            <option value="6">6小时</option>
                            <option value="7">7小时</option>
                        </select>
                    </div>
                </li>
                <li>
                    <span>时间面议：</span><input type="text" name="sk_times22" placeholder="可填写具体上课时间等">
                </li>
                <li>
                    <table>
                        <tr class="complete_week">
                            <td></td>
                            <td>周一</td>
                            <td>周二</td>
                            <td>周三</td>
                            <td>周四</td>
                            <td>周五</td>
                            <td>周六</td>
                            <td>周日</td>
                        </tr>
                        <tr>
                            <td>上午</td>
                            <td><input type="checkbox" name="sk_times1" value="周一上午"></td>
                            <td><input type="checkbox" name="sk_times4" value="周二上午"></td>
                            <td><input type="checkbox" name="sk_times7" value="周三上午"></td>
                            <td><input type="checkbox" name="sk_times10" value="周四上午"></td>
                            <td><input type="checkbox" name="sk_times13" value="周五上午"></td>
                            <td><input type="checkbox" name="sk_times16" value="周六上午"></td>
                            <td><input type="checkbox" name="sk_times19" value="周日上午"></td>
                        </tr>
                        <tr>
                            <td>下午</td>
                            <td><input type="checkbox" name="sk_times2" value="周一下午"></td>
                            <td><input type="checkbox" name="sk_times5" value="周二下午"></td>
                            <td><input type="checkbox" name="sk_times8" value="周三下午"></td>
                            <td><input type="checkbox" name="sk_times11" value="周四下午"></td>
                            <td><input type="checkbox" name="sk_times14" value="周五下午"></td>
                            <td><input type="checkbox" name="sk_times17" value="周六下午"></td>
                            <td><input type="checkbox" name="sk_times20" value="周日下午"></td>
                        </tr>
                        <tr>
                            <td>晚上</td>
                            <td><input type="checkbox" name="sk_times3" value="周一晚上"></td>
                            <td><input type="checkbox" name="sk_times6" value="周二晚上"></td>
                            <td><input type="checkbox" name="sk_times9" value="周三晚上"></td>
                            <td><input type="checkbox" name="sk_times12" value="周四晚上"></td>
                            <td><input type="checkbox" name="sk_times15" value="周五晚上"></td>
                            <td><input type="checkbox" name="sk_times18" value="周六晚上"></td>
                            <td><input type="checkbox" name="sk_times21" value="周日晚上"></td>
                        </tr>
                    </table>
                </li>
                <li>
                    <span>所在城区：</span>
                        <select name="dq" id="dq" >
                     @foreach($data as $data)
                            <option value="{{ $data->county_name}}">{{ $data->county_name }}</option>
                    @endforeach
                        </select>
                </li>
                <li>
                    <span>上课地点：</span><input type="text" name="xx_dz" id="xx_dz">
                </li>
                <li>
                    <span>学生描述：</span><input type="text"  name="user_situation">
                </li>
                <li>
                    <span>教员性别：</span>
                    <select name="teacher_sex" >
                        <option value="1">男</option>
                        <option value="2">女</option>
                        <option value="3">男女均可</option>
                    </select>
                </li>
                <li>
                    <span>教员要求：</span><input type="text" name='teacher_info' >
                </li>
                <li>
                    <span>课酬：</span>
                    <select name="money" size="1" id="bc" >
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                        <option value="60">60</option>
                        <option value="65">65</option>
                        <option value="70">70</option>
                        <option value="80">80</option>
                        <option value="90">90</option>
                        <option value="100">100</option>
                        <option value="120">120</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                    </select>
                </li>
            </ul>
            <div class="seejj">
                <a target="_blank" href="/zfsm.html" style="color: #001bef;">点击查看家教薪资参考标准</a>
            </div>
            <input name="oid" value="{{ $orderid }}" type="hidden"/>
            <input type="submit" class="tj_button" value="填好了，立即提交找老师"/>
        </div>
        </form>
    </section>
@include('phonedl.float.float')
</div>
<style>



</style>
</body>
</html>
