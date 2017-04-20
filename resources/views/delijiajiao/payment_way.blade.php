@extends('delijiajiao.public.public')
@section('title',session('regionname') )
@section('content')
<div class="container">
  <div class="zfsm">
   <div class="bt"> </div>
   <div class="nr">
	<form action="">
		<p>姓名：<input id="gy_1_mz"  type="" value=""/>
          手机：<input id='gy_1_sj' type='' value="" disabled='true'maxlength='11'>
          验证码：<input id='gy_1_yzm'type='' value="">
		  <input style='width:94px;padding:.5em 0;' id='gy_1_hq' type="button" value='获取验证码'/>
       <input style='background-color:#f8b529;' type="submit" value="快速请家教" />
	</form>
       
  </p>
       <p><h2>
	<span style="color:#E56600;">|<span style="color:#000000;">支付方式1</span></span>
</h2>									
支付方式：支付宝<br><br>			
省市：全国	<br><br>		
户名：德栗家教	<br><br>		
账号：delijiajiao@163.com<br><br>
说明：请认准德栗家教唯一支付宝账号，慎防他人冒充！						
<br><br>
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
        $('#f').remove();
    </script>
@endsection