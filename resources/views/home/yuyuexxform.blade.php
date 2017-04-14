@extends('home.public.public')
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
<TABLE width="900" border=0 align="center" cellPadding=1 cellSpacing=1 >

<TBODY>


 <TD width="25%" height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'>
    <span class="red_link_10"style='color:#eee;' >*</span>联系人姓名：
    </DIV></TD>
 <TD width="75%" height="35" bgcolor="#FFFFFF" >
  <DIV align=left>
    <p>
      <INPUT id=name3 maxLength=30
  name=name>
       <span class="o_link_9">如学生家长姓名或学生本人姓名，如"李先生"、"周同学"</span></p>
    </DIV></TD></TR>
<TR >
 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'><span class="red_link_10" style='color:#eee;'>*</span>联系人电话：</DIV></TD>
 <TD height="35" bgcolor="#FFFFFF">
  <DIV align=left><input class="reg_txt" name=Tel1 id="Tel1" maxLength=50>
  <span class="o_link_9">仅网站工作人员可见，请放心填写</span>  </DIV></TD></TR>
<TR >
 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'>微信：</DIV></TD>
 <TD height="35" bgcolor="#FFFFFF">
  <DIV align=left><INPUT name=qq id="qq" maxLength=50>
  <span class="o_link_9">找到老师我们将通过微信将老师的简历发送给您，非必填仅网站工作人员可见，请放心填写</span>  </DIV></TD></TR>


<TR >
<TR >
    <TD height=35 bgcolor="#F7B529">
        <DIV align=right style='color:#eee;'>QQ：</DIV></TD>
        <TD height="35" bgcolor="#FFFFFF">
            <DIV align=left><INPUT name=qq id="qq" maxLength=50>
                <span class="o_link_9">非必填，仅网站工作人员可见，请放心填写</span>
            </DIV>
        </TD></TR>

<TR >
    <TD height=35 bgcolor="#F7B529">
        <DIV align=right style='color:#eee;'>学员年级：</DIV>
    </TD>
    <TD height="35" bgcolor="#FFFFFF">
        <DIV align=left>
<SELECT name=nj size=1 id="nj" style="width:200px;">
    <OPTION value="" selected>请选择</OPTION>
    <OPTION value=幼儿>幼儿</OPTION>
    <OPTION value=一年级>一年级</OPTION>
    <OPTION value=二年级>二年级</OPTION>
    <OPTION value=三年级>三年级</OPTION>
    <OPTION value=四年级>四年级</OPTION>
    <OPTION value=五年级>五年级</OPTION>
    <OPTION value=六年级>六年级</OPTION>
    <OPTION value=初一>初一</OPTION>
    <OPTION value=初二>初二</OPTION>
    <OPTION value=初三>初三</OPTION>
    <OPTION value=高一>高一</OPTION>
    <OPTION value=高二>高二</OPTION>
    <OPTION value=高三>高三</OPTION>
    <OPTION value="">艺考生</OPTION>
    <OPTION value="">其它年级</OPTION>
    <OPTION value=成人>成人</OPTION>
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
            <select style="width:156px;" name="" id="">
                <option value="">请选择</option>
                <option value="">文科</option>
                <option value="">理科</option>
                <option value="">文理科</option>
            </select>
            <span class="o_link_9"></span>
        </DIV>
  </TD>
</TR>


 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'>学员性别：</DIV></TD>
 <TD height="35" bgcolor="#FFFFFF" >
  <DIV align=left>
  <INPUT name=sex type=radio value=男 checked>
  男　
  <INPUT type=radio value=女 name=sex>
  女
  <INPUT type=radio value=男女不限 name=sex>
  男女不限</DIV>
  </TD></TR>
  <TR >
    <TD height=35 bgcolor="#F7B529">
        <DIV align=right style='color:#eee;'>辅导科目：</DIV>
    </TD>
    <TD height="35" bgcolor="#FFFFFF">
        <DIV align=left>
            <INPUT name= id="" maxLength=50>
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
            <select style="width:156px;" name="" id="">
                <option value="">授课教学</option>
                <option value="">作业辅导</option>
                <option value="">讲解疑难</option>
            </select>
        </DIV>
  </TD>
</TR>

<TR >
 <TD height=30 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'><span class="red_link_10" style='color:#eee;'>*</span>家教时间安排：</DIV></TD>
 <TD height="30" bgcolor="#FFFFFF"><div align="left">每周上
<select name="chi" id="cimeizhou" style="width:80px;">                    <option value="" selected>请选择</option>                    <option value="1">1</option>                    <option value="2">2</option>                    <option value="3">3</option>                    <option value="4">4</option>                    <option value="5">5</option>                    <option value="6">6</option>                    <option value="7">7</option>
</select>
   次课

 ；每次课上
   <SELECT name="shi" id="shi" style="width:80px;">                    <option value="" selected>请选择</option>                   <!-- <option value="1">1</option>        -->            <option value="1.5">1.5</option>                    <option value="2">2 推荐</option>                    <option value="2.5">2.5</option>                    <option value="3">3</option>                    <option value="4">4</option>                  </SELECT>
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

<td> <input type="checkbox" name="times" value="周一上午"></td>

<td><input type="checkbox" name="times" value="周一下午"></td>

<td><input type="checkbox" name="times" value="周一晚上"> </td>

  </tr>

</table></td>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td> <input type="checkbox" name="times" value="周二上午"></td>

<td><input type="checkbox" name="times" value="周二下午"></td>

<td><input type="checkbox" name="times" value="周二晚上"></td>

  </tr>

</table></td>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td> <input type="checkbox" name="times" value="周三上午"></td>

<td><input type="checkbox" name="times" value="周三下午"></td>

<td><input type="checkbox" name="times" value="周三晚上"></td>

  </tr>

</table></td>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td> <input type="checkbox" name="times" value="周四上午"></td>

<td><input type="checkbox" name="times" value="周四下午"></td>

<td><input type="checkbox" name="times" value="周四晚上"></td>

  </tr>

</table></td>

</tr>

<tr>

<td bgcolor="#FFFFFF"><div align="center">周五</div></td>

<td bgcolor="#FFFFFF"><div align="center">周六</div></td>

<td bgcolor="#FFFFFF"><div align="center">周日</div></td>

<td rowspan="2" bgcolor="#FFFFFF"><div align="center">

 <input name="times" type="checkbox" id="times2" value="时间面议">

<span class="red_10" style="font-weight: bold">时间面议</span></div></td>

</tr>

<tr>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td><input type="checkbox" name="times" value="周五上午"></td>

<td><input type="checkbox" name="times" value="周五下午"></td>

<td><input type="checkbox" name="times" value="周五晚上"> </td>

  </tr>

</table></td>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td><input type="checkbox" name="times" value="周六上午"></td>

<td><input type="checkbox" name="times" value="周六下午"></td>

<td><input type="checkbox" name="times" value="周六晚上"></td>

  </tr>

</table></td>

<td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

<td>上午</td>

<td>下午</td>

<td>晚上</td>

  </tr>

  <tr>

<td><input type="checkbox" name="times" value="周日上午"></td>

<td><input type="checkbox" name="times" value="周日下午"></td>

<td><input type="checkbox" name="times" value="周日晚上"></td>

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

    <option value="萝岗区">萝岗区</option>

    <option value="越秀区">越秀区</option>

    <option value="海珠区">海珠区</option>

    <option value="天河区">天河区</option>

    <option value="白云区">白云区</option>

    <option value="荔湾区">荔湾区</option>

    <option value="黄埔区">黄埔区</option>

    <option value="番禺区">番禺区</option>

    <option value="花都区">花都区</option>

    <option value="南沙区">南沙区</option>

    <option value="从化市">从化市</option>

    <option value="增城市">增城市</option>

    <option value="其它地区">其它地区</option>

    <option value="番禺市桥">番禺市桥</option>

    <option value="番禺大石">番禺大石</option>

    <option value="番禺石基">番禺石基</option>

    <option value="番禺石楼">番禺石楼</option>

    <option value="番禺南村">番禺南村</option>

    <option value="番禺钟村">番禺钟村</option>

    <option value="番禺沙湾">番禺沙湾</option>

    <option value="番禺新造">番禺新造</option>

    <option value="番禺大岗">番禺大岗</option>

    <option value="番禺榄核">番禺榄核</option>

    <option value="番禺洛溪">番禺洛溪</option>

    <option value="荔湾区芳村">荔湾区芳村</option>

    <option value="天河区岑村">天河区岑村</option>

    <option value="萝岗区开发区">萝岗区开发区</option>

    <option value="天河公园">天河公园</option>

    <option value="番禺区南站">番禺区南站</option>

    <option value="天河区棠东">天河区棠东</option>

    <option value="番禺区祈福新村">番禺区祈福新村</option>

    <option value="海珠区鹭江">海珠区鹭江</option>

    <option value="海珠区南岸路">海珠区南岸路</option>

    <option value="白云区罗冲围">白云区罗冲围</option>

    <option value="天河区林和东路">天河区林和东路</option>

    <option value="海珠区晓港">海珠区晓港</option>

    <option value="海珠区盈丰路">海珠区盈丰路</option>

    <option value="天河区五山">天河区五山</option>

    <option value="海珠区滨江东路">海珠区滨江东路</option>

    <option value="天河区汇景新城">天河区汇景新城</option>

    <option value="天河区员村">天河区员村</option>

    <option value="越秀区动物园">越秀区动物园</option>

    <option value="海珠区广州大道南">海珠区广州大道南</option>

    <option value="越秀区五羊新城">越秀区五羊新城</option>

    <option value="越秀区东山口">越秀区东山口</option>

    <option value="天河区天河城 ">天河区天河城 </option>

    <option value="越秀区环市东路 ">越秀区环市东路 </option>

    <option value="越秀区黄花岗 ">越秀区黄花岗 </option>

    <option value="芳村花园">芳村花园</option>

    <option value="白云区机场东路">白云区机场东路</option>

    <option value="天河区燕塘">天河区燕塘</option>

    <option value="海珠区棠下">海珠区棠下</option>

    <option value="锦绣云湾">锦绣云湾</option>

    <option value="越秀区盘福路">越秀区盘福路</option>

    <option value="天河区华鼎新城 ">天河区华鼎新城 </option>

    <option value="海珠区工业大道">海珠区工业大道</option>

    <option value="番禺区锦绣香江">番禺区锦绣香江</option>

    <option value="海珠区同福路">海珠区同福路</option>

    <option value="荔湾区黄沙大道 ">荔湾区黄沙大道 </option>

    <option value="天河区龙都花园">天河区龙都花园</option>

    <option value="天河区珠江苑 ">天河区珠江苑 </option>

    <option value="荔湾区陈家祠 ">荔湾区陈家祠 </option>

    <option value="越秀区花地湾">越秀区花地湾</option>

    <option value="萝岗区博罗新村">萝岗区博罗新村</option>

    <option value="越秀区广州大道中">越秀区广州大道中</option>

    <option value="海珠区金星花园">海珠区金星花园</option>

    <option value="天河区冼村 ">天河区冼村 </option>

    <option value="海珠区客村">海珠区客村</option>

    <option value="白云区人和地铁站">白云区人和地铁站</option>

    <option value="海珠区金逸花园 ">海珠区金逸花园 </option>

    <option value="天河区骏景花园">天河区骏景花园</option>

    <option value="荔湾区龙津中路">荔湾区龙津中路</option>

    <option value="天河区富力公园">天河区富力公园</option>

    <option value="天河区沙河顶">天河区沙河顶</option>

    <option value="越秀区雅景园 ">越秀区雅景园 </option>

    <option value="黄浦大沙地">黄浦大沙地</option>

    <option value="天河石牌 ">天河石牌 </option>

    <option value="海珠新港西">海珠新港西</option>

    <option value="越秀小北">越秀小北</option>

    <option value="天河体育中心">天河体育中心</option>

    <option value="天河岗顶">天河岗顶</option>

    <option value="海珠赤岗">海珠赤岗</option>

    <option value="天河珠江新城">天河珠江新城</option>

    <option value="番禺大学城">番禺大学城</option>

    <option value="荔湾西村">荔湾西村</option>

    <option value="天河车陂">天河车陂</option>

    <option value="佛山三水">佛山三水</option>

    <option value="佛山禅城区">佛山禅城区</option>

    <option value="佛山狮山">佛山狮山</option>

    <option value="佛山大沥">佛山大沥</option>

   </select>
  </DIV></TD></TR>

<TR >
 <TD height=50 bgcolor="#F7B529"><DIV align=right  style="line-height:20px;color:#eee;"><span class="red_link_10" style='color:#eee;'>*</span>家教上课地点：
 </DIV></TD>
 <TD height="35" bgcolor="#FFFFFF"><div align="left">
   <input class="reg_txt" name=dq2 id="dq2" size=38  title="只需要填写一下公交站台名称或小区名称，最好填写一下直达公交线路">
   <input name="x" id="x" type="hidden">
   <input name="y" id="y" type="hidden">
   <input name="z" id="z" type="hidden">
 </div></TD>
</TR>
<TR >
 <TD height=35 bgcolor="#F7B529"><div align="right" class="Stu_Tea_Title" style='color:#eee;'>推荐地图标记您的位置：</div></TD>
 <TD height="35" bgcolor="#FFFFCC"><div align="left">
    <script language="JavaScript">
<!--
//setMap是ezmarker内部定义的接口，这里可以根据实际需要实现该接口
function setMap(point,zoom)
{
document.getElementById("x").value=point.getLongitude();
document.getElementById("y").value=point.getLatitude();
document.getElementById("z").value=zoom;
}
var ezmarker = new LTEZMarker("pos");
LTEvent.addListener(ezmarker,"mark",setMap);//"mark"是标注事件
ezmarker.setDefaultView("guangzhou",3);
//-->
 </script>
 </div></TD>
</TR>
<TR >
 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'><span class="red_link_10" style='color:#eee;'>*</span>选择教员性别：</DIV></TD>
    <TD height="35" bgcolor="#FFFFFF">
        <DIV align=left>
            <input type="radio" name='2'/>男教员
            <input type="radio" name='2'/>女教员
            <input type="radio" name='2' />男女均可
        </DIV>
    </TD>
</TR>



 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'>对教员具体要求：<BR>
  </DIV></TD>
 <TD height="35" bgcolor="#FFFFFF">
  <DIV align=left><TEXTAREA id=textarea2 name=qk rows=3 cols=80  title="" class="reg_txt"></TEXTAREA>
  </DIV></TD></TR>
<TR >
 <TD height=35 bgcolor="#F7B529">
    <DIV align=right style='color:#eee;'>教员性质：</DIV>
 </TD>
 <TD height="35" bgcolor="#FFFFFF">
    <DIV align=left>
        <INPUT type="radio" name='1' checked>大学生家教　
        <INPUT type="radio" name='1'>专职老师
        <INPUT type="radio" name='1'>大学生专职老师均可
    </DIV>
</TD>
</TR>

<TR >
 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'>学员情况描述：</DIV></TD>
 <TD height="35" bgcolor="#FFFFFF">
  <DIV align=left><TEXTAREA  name=yq cols=80 rows=4 id="yq"  ></TEXTAREA>
  </DIV></TD></TR>
  <TR >
 <TD height=35 bgcolor="#F7B529">
    <DIV align=right style='color:#eee;'>是否预约签约老师：</DIV>
 </TD>
 <TD height="35" bgcolor="#FFFFFF">
    <DIV align=left>
        <INPUT type="radio" name='1' checked>是
        <INPUT type="radio" name='1'>否
        <a href="">点击查看签约老师说明</a>
    </DIV>
</TD>
</TR>
<TR >
 <TD height=35 bgcolor="#F7B529">
  <DIV align=right style='color:#eee;'><span class="red_link_10" style='color:#eee;'>*</span>支付给老师的报酬：</DIV></TD>
 <TD height="35" bgcolor="#FFFFFF" >
  <DIV align=left>
  <SPAN class=asho_link_9>
   <select name="bc" size="1" id="bc" style="width:100px;">
      <option value="" selected="selected">请选择</option>
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
    元/小时</SPAN> &nbsp;&nbsp;<a href="" target="_blank"><span  class="red font14px">点击查看家教薪资参考标准</span></a></DIV></TD></TR>


 <TR bgColor=#ffffff>
                <TD colSpan=2 height=30> <DIV align=center>&nbsp;<INPUT type="checkbox" CHECKED value="checkbox" name="checkbox">
                <font color="#FF0000" style='font-size:9pt;font-family: 宋体'>&nbsp;请确保以上信息真实有效</font></DIV></TD></TR>

<TR >
 <TD height=80 colSpan=2 bgcolor="#FFFFFF">
  <DIV align=center><INPUT type=submit value=" 填写好了，立即提交找老师！ " name=submit style="font-size:20px; width:290px;">
  </DIV></TD></TR></TABLE>
</form></div>


@endsection
@section('js')

@endsection
