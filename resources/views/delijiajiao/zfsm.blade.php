@extends('delijiajiao.public.public')
@section('title',mb_substr(session('regionname'),0,2))
@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
   <!--<![endif]-->
  <div class="container">
  <div class="zfsm">
   <div class="bt">资费说明-请家教价格</div>
   <div class="nr">
{{--       <form id="do" method="post" action="/yuyuexiangxi.html">
                    {{ csrf_field() }}
          <p>姓名：<input type="text" name="lxr" id="lxr" placeholder="联系人" maxlength="10">
              手机：<input type="text" id="phone" name="phone" maxlength="11" placeholder="手机号码">
              验证码：<input type='text' name="yzm" id="yzm" placeholder="验证码" >
              <input id="zhen" type='button' onclick="test();" value="获取验证码" >
              <button id='tj' style="width: 110px;height: 35px;" type="button" onclick="dopost();">快速请家教</button>
      </form> --}}

       <p><h2>
  <span style="color:#E56600;">|<span style="color:#000000;">免费请家教</span></span>
</h2>
【德栗家教】【高校联盟】将免费为您服务，竭诚为您挑选并审核最优质合适的教员。
一般一到两天内挑选审核好合适教员。<br>
<h2>
  <span style="color:#FF9900;">|</span>免费试课
</h2>
我们将提供上门试课，如您对老师满意，确认其以后继续为孩子授课，试课课酬便按照上课标准给到老师，如果您对老师并不是特别满意，您将无需支付任何费用，免费上课，并且我们将免费为您推荐其他老师上门试课。（适用老师类型：大学生）
<table width="951" height="165" style="width:713.25pt;">
  <tbody>
    <tr>
      <td class="et2" colspan="10" height="33" width="1060" style="font-size:11pt;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        单位：元/小时
      </td>
    </tr>
    <tr>
      <td class="et3" height="33" width="181" style="font-size:11pt;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        类型/课程
      </td>
      <td class="et4" height="33" width="107" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        学龄前及小学
      </td>
      <td class="et4" height="33" width="95" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        小学奥数
      </td>
      <td class="et4" height="33" width="101" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        初一初二
      </td>
      <td class="et4" height="33" width="99" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        初三高一高二
      </td>
      <td class="et4" height="33" width="80" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        高三
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        外语
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        艺术
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        体育
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        其他
      </td>
    </tr>
    <tr>
      <td class="et3" height="33" width="181" style="font-size:11pt;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        大学生教员
      </td>
      <td class="et5" height="33" width="107" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        50
      </td>
      <td class="et5" height="33" width="95" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        60
      </td>
      <td class="et5" height="33" width="101" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        70
      </td>
      <td class="et5" height="33" width="99" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        80
      </td>
      <td class="et5" height="33" width="80" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        90
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
    </tr>
    <tr>
      <td class="et3" height="33" width="181" style="font-size:11pt;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        签约大学生教员
      </td>
      <td class="et5" height="33" width="107" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        60
      </td>
      <td class="et5" height="33" width="95" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        70
      </td>
      <td class="et5" height="33" width="101" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        80
      </td>
      <td class="et5" height="33" width="99" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        100
      </td>
      <td class="et5" height="33" width="80" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        120
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
    </tr>
    <tr>
      <td class="et3" height="33" width="181" style="font-size:11pt;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        专职老师/其他老师
      </td>
      <td class="et5" height="33" width="107" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        100-150
      </td>
      <td class="et5" height="33" width="95" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        100-200
      </td>
      <td class="et5" height="33" width="101" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        150-200
      </td>
      <td class="et5" height="33" width="99" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        150-250
      </td>
      <td class="et5" height="33" width="80" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        180-300
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
      <td class="et4" height="33" width="72" style="font-size:11pt;text-align:center;vertical-align:middle;border:0.5pt solid #F2F2F2;">
        面议
      </td>
    </tr>
  </tbody>
</table><br>
<p>
  如果您对资费标准有任何疑问，欢迎拨打热线：400-8080-740，或者在线咨询。
</p>
<p>
  在教员前去执教前，德栗家教会对教员进行实际严格认证，确保教员信息真实可靠。教员上门时也将提供相应身份证件，例如身份证、学生证、介绍信等。
</p>
<p>
  德栗家教对教员所做的每一份家教都有详细记录，并用心跟进，竭诚为您挑选并审核最优质合适的教员，致力于实实在在提高学员成绩。
</p>

</p><br>
{{--       <form id="do" method="post" action="/yuyuexiangxi.html">
                    {{ csrf_field() }}
          <p>姓名：<input type="text" name="lxr" id="lxr" placeholder="联系人" maxlength="10">
              手机：<input type="text" id="phone" name="phone" maxlength="11" placeholder="手机号码">
              验证码：<input type='text' name="yzm" id="yzm" placeholder="验证码" >
              <input id="zhen" type='button' onclick="test();" value="获取验证码" >
              <button id='tj' style="width: 110px;height: 35px;" type="button" onclick="dopost();">快速请家教</button>
      </form> --}}
   </div>
  </div>
       </div>
@endsection
@section('js')
<script>
    $(function(){
        $("#dropdown").hide();
    })
</script>
@endsection
