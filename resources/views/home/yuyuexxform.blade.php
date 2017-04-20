@extends('delijiajiao.public.public')
@section('title',mb_substr(session('regionname'),0,2))
@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
@section('content')
<br><br><br><br>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td bgcolor="#FFFFFF">
</td></tr></table>



<div class="div_br_10"></div>

<div style=" border:1px solid #CCCCCC; width:900px; margin:0px auto;">

<form method="post" action="StudentAdd"  onSubmit="return ChkFields();" name="myform" id="myform">
<TABLE width="920" border=0 align="center" cellPadding=1 cellSpacing=1  style='position:relative;'>

<TBODY>


 <TD width="25%" height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'>
    <span class="red_link_10"style='color:#eee;' >*</span>联系人姓名：
    </DIV></TD>
 <TD width="75%" height="35" bgcolor="#FFFFFF" >
  <DIV align=left>
    <p>
      <input name="user_name" type="text" placeholder='如"李先生"、"周同学"'/>
       <span class="o_link_9">如学生家长姓名或学生本人姓名，如"李先生"、"周同学"</span></p>
    </DIV></TD></TR>
<TR >
 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'><span class="red_link_10" style='color:#eee;'>*</span>联系人电话：</DIV></TD>
 <TD height="35" bgcolor="#FFFFFF">
  <DIV align=left><input class="reg_txt" name="user_phone"  maxLength=50>
  <span class="o_link_9">仅网站工作人员可见，请放心填写</span>  </DIV></TD></TR>
<TR >
 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'>微信：</DIV></TD>
 <TD height="35" bgcolor="#FFFFFF">
  <DIV align=left><INPUT name="wx" id="wx" maxLength=50 placeholder='找到老师我们将给您发送简历,仅网站工作人员可见'>
  <span class="o_link_9">找到老师我们将通过微信将老师的简历发送给您，非必填仅网站工作人员可见，请放心填写</span>  </DIV></TD></TR>


<TR >
<TR >
    <TD height=35 bgcolor="#F7B529">
        <DIV align=right style='color:#eee;'>QQ：</DIV></TD>
        <TD height="35" bgcolor="#FFFFFF">
            <DIV align=left><INPUT name="qq" id="qq" maxLength=50 placeholder='仅工作人员可见'>
                <span class="o_link_9">非必填，仅网站工作人员可见，请放心填写</span>
            </DIV>
        </TD></TR>

<TR >
    <TD height=35 bgcolor="#F7B529">
        <DIV align=right style='color:#eee;'>学员年级：</DIV>
    </TD>
    <TD height="35" bgcolor="#FFFFFF">
        <DIV align=left>
<SELECT name="grade" size=1 id="nj" style="width:200px;">
    <OPTION value="" selected>请选择</OPTION>
    <OPTION value="幼儿">幼儿</OPTION>
    <OPTION value="一年级">一年级</OPTION>
    <OPTION value="二年级">二年级</OPTION>
    <OPTION value="三年级">三年级</OPTION>
    <OPTION value="四年级">四年级</OPTION>
    <OPTION value="五年级">五年级</OPTION>
    <OPTION value="六年级">六年级</OPTION>
    <OPTION value="初一">初一</OPTION>
    <OPTION value="初二">初二</OPTION>
    <OPTION value="初三">初三</OPTION>
    <OPTION value="高一">高一</OPTION>
    <OPTION value="高二">高二</OPTION>
    <OPTION value="高三">高三</OPTION>
    <OPTION value="艺考生">艺考生</OPTION>
    <OPTION value="其它年级">其它年级</OPTION>
    <OPTION value="成人">成人</OPTION>
</SELECT>
            <span class="o_link_9"></span>
        </DIV>
  </TD>
</TR>
<TR >
    <TD height=35 bgcolor="#F7B529">
        <DIV align=right style='color:#eee;'>学员文理科：</DIV>
    </TD>
    <TD height="35" bgcolor="#FFFFFF">
        <DIV align=left>
            <select style="width:156px;" name="wlk" id="">
                <option value="请选择">请选择</option>
                <option value="文科">文科</option>
                <option value="理科">理科</option>
                <option value="文理科">文理未分科</option>
            </select>
            <span class="o_link_9"></span>
        </DIV>
  </TD>
</TR>


 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'>学员性别：</DIV></TD>
 <TD height="35" bgcolor="#FFFFFF" >
  <DIV align=left>
  <INPUT name="user_sex" type=radio value="1" checked>男　
  <INPUT name="user_sex" type=radio value="0" >女</DIV>
  </TD></TR>
  <TR >
    <TD height=35 bgcolor="#F7B529">
        <DIV align=right style='color:#eee;'>辅导科目：</DIV>
    </TD>
    <TD height="35" bgcolor="#FFFFFF">
        <DIV align=left>
            <INPUT name="subject_id" id="" maxLength="50">
            <span class="o_link_9"></span>
        </DIV>
  </TD>
</TR>
<TR >
    <TD height=35 bgcolor="#F7B529">
        <DIV align=right style='color:#eee;'>学员希望主要辅导类型：</DIV>
    </TD>
    <TD height="35" bgcolor="#FFFFFF">
        <DIV align=left>
            <select style="width:156px;" name="fdlx" id="">
                <option value="授课教学">授课教学</option>
                <option value="作业辅导">作业辅导</option>
                <option value="讲解疑难">讲解疑难</option>
            </select>
        </DIV>
  </TD>
</TR>

<TR >
 <TD height=30 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'>
    <span class="red_link_10" style='color:#eee;'>*</span>家教时间安排：
    </DIV>
  </TD>
 <TD height="30" bgcolor="#FFFFFF"><div align="left">每周上
<select name="chi" id="cimeizhou" style="width:80px;">
    <option value="" selected>请选择</option>
    <option value="每周1次">1</option>
    <option value="每周2次">2</option>
    <option value="每周3次">3</option>
    <option value="每周4次">4</option>
    <option value="每周5次">5</option>
    <option value="每周6次">6</option>
    <option value="每周7次">7</option>
</select>
   次课
 ；每次课上
   <SELECT name="shi" id="shi" style="width:80px;">
      <option value="" selected>请选择</option>
      <option value="每次1.5小时">1.5</option>
      <option value="每次2小时">2 推荐</option>
      <option value="每次2.5小时">2.5</option>
      <option value="每次3小时">3</option>
      <option value="每次4小时">4</option>
      <option value="每次5小时">5</option>
      <option value="每次6小时">6</option>
      <option value="每次7小时">7</option>
      <option value="每次8小时">8</option>
  </SELECT>
 小时；
 </div></TD>
</TR>

<TR >

 <TD height=35 bgcolor="#F7B529">

  <DIV align=right style='color:#eee;'><span class="red_link_10" style='color:#eee;'>*</span>可授课时间：</DIV></TD>

 <TD height="35" bgcolor="#FFFFFF"  align="left"><table width="500" border=0

 cellPadding=2 cellSpacing=1 borderColorLight="#FF9933" borderColorDark="#ffffff" bgcolor="#FF6600">

<tr>

<td bgcolor="#FFFFFF"> <div align="center">周一</div></td>

<td bgcolor="#FFFFFF"><div align="center">周二</div></td>

<td bgcolor="#FFFFFF"><div align="center">周三</div></td>

<td bgcolor="#FFFFFF"><div align="center">周四</div></td>

</tr>

<tr>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td> <input type="checkbox" name="sk_times1" value="周一上午"></td>

<td><input type="checkbox" name="sk_times2" value="周一下午"></td>

<td><input type="checkbox" name="sk_times3" value="周一晚上"> </td>

  </tr>

</table></td>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td> <input type="checkbox" name="sk_times4" value="周二上午"></td>

<td><input type="checkbox" name="sk_times5" value="周二下午"></td>

<td><input type="checkbox" name="sk_times6" value="周二晚上"></td>

  </tr>

</table></td>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td> <input type="checkbox" name="sk_times7" value="周三上午"></td>

<td><input type="checkbox" name="sk_times8" value="周三下午"></td>

<td><input type="checkbox" name="sk_times9" value="周三晚上"></td>

  </tr>

</table></td>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td> <input type="checkbox" name="sk_times10" value="周四上午"></td>

<td><input type="checkbox" name="sk_times11" value="周四下午"></td>

<td><input type="checkbox" name="sk_times12" value="周四晚上"></td>

  </tr>

</table></td>

</tr>

<tr>

<td bgcolor="#FFFFFF"><div align="center">周五</div></td>

<td bgcolor="#FFFFFF"><div align="center">周六</div></td>

<td bgcolor="#FFFFFF"><div align="center">周日</div></td>

<td rowspan="2" bgcolor="#FFFFFF"><div align="center">

 <input style='position:relative;'name="sk_times" type="checkbox" id="sk" value="时间面议">


<span class="red_10" style="font-weight: bold">时间面议</span></div></td>

</tr>
<div id="cheng_a" style="width:200px;height:100px;border:1px solid #e4393c;border-radius:5px;display:none;position: absolute;top;0px;right: 0px;">
  <p style='font-size:12px;padding:10px;'>建议您选择具体的可授课时间，我们能为您更精确的匹配老师哦！</p>
  <a id='qxx' href="javascript:void(0)"style='display:inline-block;padding-left:80px;text-decoration: underline;'>取消</a>
</div>
<tr>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td><input type="checkbox" name="sk_times13" value="周五上午"></td>

<td><input type="checkbox" name="sk_times14" value="周五下午"></td>

<td><input type="checkbox" name="sk_times15" value="周五晚上"> </td>

  </tr>

</table></td>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td><input type="checkbox" name="sk_times16" value="周六上午"></td>

<td><input type="checkbox" name="sk_times17" value="周六下午"></td>

<td><input type="checkbox" name="sk_times18" value="周六晚上"></td>

  </tr>

</table></td>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td><input type="checkbox" name="sk_times19" value="周日上午"></td>

<td><input type="checkbox" name="sk_times20" value="周日下午"></td>

<td><input type="checkbox" name="sk_times21" value="周日晚上"></td>

  </tr>

</table></td>

</tr>

 </table></TD>

</TR>



<TR >
 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'><span class="red_link_10" style='color:#eee;'>*</span>所在城区：</DIV></TD>
 <TD height="35" bgcolor="#FFFFFF">
  <DIV align=left>
    <select name="dq" id="dq" style="width:200px;">
      <option value="" selected>请选择</option>
      @foreach($data as $data)
        <option value="{{ $data->county_name}}">{{ $data->county_name }}</option>
      @endforeach
    </select>
  </DIV></TD></TR>

<TR >
 <TD height=50 bgcolor="#F7B529"><DIV align=right  style="line-height:20px;color:#eee;"><span class="red_link_10" style='color:#eee;'>*</span>家教上课地点：
 </DIV></TD>
 <TD height="35" bgcolor="#FFFFFF"><div align="left">
   <input class="reg_txt" name="xx_dz" size='38'  >
 </div></TD>
</TR>
<TR >
 <TD bgcolor="#F7B529"><div align="right" class="Stu_Tea_Title" style='color:#eee;'>推荐地图标记您的位置：</div></TD>
 <TD height="400" bgcolor="#FFFFCC">
<iframe id="mapPage" width="100%" height="100%" frameborder=0
    src="http://apis.map.qq.com/tools/locpicker?search=1&type=1&key=OB4BZ-D4W3U-B7VVO-4PJWW-6TKDJ-WPB77&referer=myapp">
</iframe><div align="left">

 </div></TD>
</TR>
<TR >
 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'><span class="red_link_10" style='color:#eee;'>*</span>选择教员性别：</DIV></TD>
    <TD height="35" bgcolor="#FFFFFF">
        <DIV align=left>
            <input type="radio" name='teacher_sex' value="1"/>男教员
            <input type="radio" name='teacher_sex' value="2"/>女教员
            <input type="radio" name='teacher_sex' value="3" />男女均可
        </DIV>
    </TD>
</TR>



 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'>对教员具体要求：<BR>
  </DIV></TD>
 <TD height="35" bgcolor="#FFFFFF">
  <DIV align=left><TEXTAREA id=textarea2 name='teacher_info' rows=3 cols=80  title="" class="reg_txt"></TEXTAREA>
  </DIV></TD></TR>
<TR >
 <TD height=35 bgcolor="#F7B529">
    <DIV align=right style='color:#eee;'>教员性质：</DIV>
 </TD>
 <TD height="35" bgcolor="#FFFFFF">
    <DIV align=left>
        <INPUT type="radio" value="大学生家教" name='ls_type' checked>大学生家教　
        <INPUT type="radio" name='ls_type' value="专职老师">专职老师
        <INPUT type="radio" name='ls_type' value="大学生专职老师均可" >大学生专职老师均可
    </DIV>
</TD>
</TR>

<TR >
 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'>学员情况描述：</DIV></TD>
 <TD height="35" bgcolor="#FFFFFF">
  <DIV align=left><TEXTAREA  name="user_situation" cols=80 rows=4 id="yq"  ></TEXTAREA>
  </DIV></TD></TR>
  <TR >
 <TD height=35 bgcolor="#F7B529">
    <DIV align=right style='color:#eee;'>是否预约签约老师：</DIV>
 </TD>
 <TD height="35" bgcolor="#FFFFFF">
    <DIV align=left>
        <INPUT type="radio" value="是" name='tc_Signing' checked>是
        <INPUT type="radio" value="否" name='tc_Signing'>否
        <a href="/">点击查看签约老师说明</a>
    </DIV>
</TD>
</TR>
<TR >
 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'><span class="red_link_10" style='color:#eee;'>*</span>支付给老师的报酬：</DIV></TD>
 <TD height="35" bgcolor="#FFFFFF" >
  <DIV align=left>
  <SPAN class=asho_link_9>
   <select name="money" size="1" id="bc" style="width:100px;">
      <option value="面议">面议</option>
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
    元/小时</SPAN> &nbsp;&nbsp;<a href="/zfsm.html" target="_blank"><span  class="red font14px">点击查看家教薪资参考标准</span></a></DIV></TD></TR>


 <TR bgColor=#ffffff>
                <TD colSpan=2 height=30> <DIV align=center>&nbsp;
                <font color="#FF0000" style='font-size:9pt;font-family: 宋体'>&nbsp;请确保以上信息真实有效</font></DIV></TD></TR>
<input name="oid" value="{{ $orderid }}" type="hidden"/>
<TR >
 <TD height=80 colSpan=2 bgcolor="#FFFFFF">
  <DIV align=center><INPUT id='tj' type="submit" value="填写好了，立即提交找老师!" style="font-size:20px; width:290px;">
  </DIV></TD></TR></TABLE>
</form></div>
<div id="cheng_show" style="width:200px;height:100px;border:1px solid #e4393c;border-radius:5px;position:absolute;top: 100%;left: 50%;display: none;">
  <p style='font-size:12px;padding:10px;'>你已提交,客服会与你联系,你也可以联系我们!</p>
  <a href="/contact.html" style='display:inline-block;padding-left:20px;'>联系我们</a>
  <a id='qx' href="javascript:void(0)"style='display:inline-block;padding-left:80px;text-decoration: underline;'>取消</a>
</div>


@endsection
@section('js')
<script>
    $(function(){
        $("#dropdown").hide();
    })
    {!! session('js') !!}
</script>
<script type="text/javascript">
  $('#qx').click(function(){
    $('#cheng_show').css('display','none');
  });

</script>
<script>
  $('input#sk').click(function(){
    // alert(1);
    $('#cheng_a').css('display','block');
  });
  $('#qxx').click(function(){
    $('#cheng_a').css('display','none');
  })
</script>
@endsection
