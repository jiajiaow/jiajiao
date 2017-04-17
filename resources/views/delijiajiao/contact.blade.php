@extends('delijiajiao.public.public')
@section('title',session('regionname') )
@section('content')
<div class="container">
  <div class="zfsm">
   <div class="bt">　</div>
   <div class="nr">
	<form action="">
		<p>姓名：<input id="gy_1_mz"  type="" value=""/>
          手机：<input id='gy_1_sj' type='' value="" disabled='true'maxlength='11'>
          验证码：<input id='gy_1_yzm'type='' value="">
		  <input style='width:94px;padding:.5em 0;' id='gy_1_hq' type="button" value='获取验证码'/>
       <input style='background-color:#f8b529;' type="submit" value="快速请家教" />
	</form>
       
  </p><br><br>
       <p><h2>
	<span style="color:#E56600;">|<span style="color:#000000;">联系我们</span></span>
</h2>	<br><br>						
微信：delijiajiao	<br><br>				
QQ：1774932105		<br><br>			
热线电话：400-8080740	<br><br>				
邮箱：delijiajiao@163.com<br><br>					
广州学求易教育咨询有限公司<br><br>					
公司注册地址：广州市荔湾区环市西路35号之十二、十七、二十四281铺<br><br>	<br><br>				
	<form action="">
		<p>姓名：<input id="gy_2_mz"  type="" value=""/>
          手机：<input id='gy_2_sj' type='' value="" disabled='true'maxlength='11'>
          验证码：<input id='gy_2_yzm'type='' value="">
		  <input style='width:94px;padding:.5em 0;' id='gy_2_hq' type="button" value='获取验证码'/>
       <input style='background-color:#f8b529;' type="submit" value="快速请家教" />
	</form>
       
  </p>
</div>
  </div>
       </div>
@endsection
@section('js')

    <script type="text/javascript">
        $('#cheng').remove();
        $('#dropdown').remove();
        $('#f').remove();
    </script>
@endsection