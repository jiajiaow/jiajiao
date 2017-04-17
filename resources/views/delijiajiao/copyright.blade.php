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
	<span style="color:#E56600;">|<span style="color:#000000;">版权申明
</span></span>
</h2><br><br>																			
德栗家教网站由广州学求易教育咨询有限公司经营，为了保护权利人的合法权益，根据《中华人民共和国著作权法》、《中华人民共和国商标法》等法律规定，德栗家教网站发表如下版权声明：											
<br><br>德栗家教网站之网页内容，包括但不限于文字、商标、图表图片、设计、网页上的照片、产生网页的程式码及其他构成这些网页内容的载体、文件及设计由广州学求易教育咨询有限公司完成，以上作品的著作权利的属于该公司。未经权利人许可，任何个人或组织不得对德栗家教网站内容进行复制、转载、修改、抄袭、剽窃、贩卖、展示、公开、散播或是将其用于任何商业目的。											
<br><br>德栗家教网站用户发表、转载的所有文章及其它资料（如示例代码、图片等）的版权归原作者所有，德栗用户同时保证上传、转载、发表的内容不侵犯他人版权，本网站保有使用权。其他任何单位或个人转载德栗家教网站发表的文章的，需经原作者同意，并注明转载自德栗家教网站。本网站保留追究非法转载者法律责任的权利。											
		
<br><br>
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
        $('#dropdown').remove();
        $('#f').remove();
    </script>
@endsection