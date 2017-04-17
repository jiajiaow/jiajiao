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
       
  </p>
       <p><h2>
	<span style="color:#E56600;">|<span style="color:#000000;">公司简介</span></span>
</h2><br><br>																			
广州学求易教育咨询有限公司旗下德栗家教品牌，专注全国大学生专业上门一对一家教服务，目前已在全国数十个大中型城市开展家教服务，拥有数十万教员。										
<br><br>深耕全国家教市场多年，竭力为学员和教员提供专业的大学生一对一上门家教服务，个性化、效果好、提分快、效率高。										
<br><br>全国各省主要城市数十万教员，大学生教员主要是重本一本高校在校大学生，教学质量有保证，大部分授课学员成绩均获得大幅提升。										
			
<br><br>
<p>
	<br>如果您对资费标准有任何疑问，欢迎拨打热线：400-8080-740，或者在线咨询。
</p>
<p>
	<br>在教员前去执教前，德栗家教会对教员进行实际严格认证，确保教员信息真实可靠。教员上门时也将提供相应身份证件，例如身份证、学生证、介绍信等。
</p>
<p>
	<br>德栗家教对教员所做的每一份家教都有详细记录，并用心跟进，竭诚为您挑选并审核最优质合适的教员，致力于实实在在提高学员成绩。
</p>
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