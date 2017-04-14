<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>登录</title>
	<link rel="stylesheet" href="{{ asset('/home/css/login.css') }}">
	<script type="text/javascript" src= "{{ asset('/home/js/jquery-2.2.3.min.js') }}"></script>
	<script src="/admin/js/plugins/layer/layer.min.js"></script>
	<script>
		@if(session('tc_phone') != null)
				window.location.href="{{ URL('/teacherinfo.html') }}";
		@endif
	</script>
</head>
<body>
	<div id="header">
		<div class="top-login">
			<div class="container">
				<div class="logo pull-left">
					<a href="/" class="pull-left"><img src="{{ asset('/home/picture/logo.png') }}" alt=""></a>
					<a href="javascript:void(0)" class="pull-right dl">欢迎登陆</a>
					<div class="clear"></div>
				</div>
				<div class="return pull-right">
					<a href="/">返回首页</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div id="login-banner">
		<img src="{{ asset('/home/images/dl.jpg') }}" style="height:450px;">
		<div class="inbanner">
			<div class="container">
				<div class="right-form pull-right">
					<div class="left-code pull-left">
						<div class="code">
							<img src="{{ asset('/home/picture/code.png') }}">
						</div>
						<p>扫描二维码</p>
						<p>关注微信公众号</p>
					</div>
					<div class="form pull-right">
					<script type="text/javascript"></script>
					
						<div style="height: 20px;">
							<span id="z">手机号登录</span>
							<span id="y">普通登录</span>
						</div>
						<div class="line"></div>
						
						<form id="validForm" method="post" action="{{ URL('/dologin.html') }}">
							<div class="fg">
								<label for="">
									<img src="{{ asset('/home/picture/icon_mail.png') }}">
								</label>
								<input  id="uname" type="text" name="phone" placeholder="手机号" maxlength="11" >
							</div>
							
							<div class="fg">
								<label for="">
									<img src="{{ asset('/home/picture/icon_pass.png') }}">
								</label>
								<input id="mobile" type="tel"  style='width:46%' name="code" placeholder="验证码">
								<input style="width: 128.2px;cursor: pointer;background-color: #F7B529" id="getsms" type="button" value="获取验证码"/>

							</div>
							<button id="deng"  type="submit">登录</button>
						</form>
						<form class="z" id="ptForm" method="post" action="{{ URL('/dologin.html') }}">
							<div class="fg">
								<label for=""><img src="{{ asset('/home/picture/icon_mail.png') }}"></label>
								<input id="zh" type="text" name="phone" placeholder="请输入账号">
							</div>
							<div class="fg">
								<label for=""><img src="{{ asset('/home/picture/icon_pass.png') }}"></label>
								<input id="mima" type="password" name="pwd" placeholder="请输入密码">
							</div>
							<button  type="submit">登录</button>
						</form>
						
						
			
						
						<a style="margin-top: 20px;"  href="{{ URL('/reg.html') }}" class="pull-left">我是老师，立即注册</a>
						<a style="margin-top: 20px;" href="" class="pull-right">忘记登录密码</a>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="footer">

		<div class="foot-bottom"><div class="container">
				<ul style="width:100%"><li>友情链接：</li><li><a href="" target="_blank">仓山区</a></li>
					<li><a href="" target="_blank">鼓楼区</a></li>
					<li><a href="" target="_blank">晋安区</a></li>
					<li><a href="" target="_blank">马尾区</a></li>
					<li><a href="" target="_blank">台江区</a></li>
					<li><a href="" target="_blank">闵候县</a></li>
					<li><a href="" target="_blank">长乐市</a></li>
					<li><a href="" target="_blank">福清市</a></li>
					<li><a href="" target="_blank">闽清县</a></li>
					<li><a href="" target="_blank">永泰县 </a></li>
					<li><a href="" target="_blank">罗源县</a></li>
					<li><a href="" target="_blank">连江县</a></li>
					<li><a href="" target="_blank">平谭县  </a></li>
					<li><a href="" target="_blank">莆田市</a></li>
					<li><a href="" target="_blank">永德市</a></li>
					<li><a href="" target="_blank">台江区瀛洲</a></li>
					<li><a href="" target="_blank">台江区后州</a></li>
					<li><a href="" target="_blank">台江区义洲</a></li>
					<li><a href="" target="_blank">台江区新港</a></li>
					<li><a href="" target="_blank">台江区上海</a></li>
					<li><a href="" target="_blank">台江区苍霞</a></li>
					<li><a href="" target="_blank">台江区洋中</a></li>
					<li><a href="" target="_blank">台江区茶亭</a></li>
					<li><a href="" target="_blank">台江区鳌峰</a></li>
					<li><a href="" target="_blank">台江区宁化</a></li>
					<li><a href="" target="_blank">台江区中州岛</a></li>

					<div class="clear"></div>
				</ul>
					<ul style="font-size:15px;color:#262626 "> Copyright2007－2017广州学求易教育咨询有限公司 版权所有 All rights reserved</ul>
				</div>
				</div>
				</div>
				<div class="suspend"><ul><li><img src="/home/picture/float_1.png" alt=""><div class="wechat hidebox"><div class="inbox"><img src="/home/picture/code.png" alt=""><i>【扫一扫】随时请家教</i></div></div></li><li><a href="http://p.qiao.baidu.com/im/index?siteid=9008098&ucid=20781114&cp=&cr=&cw=" target="_blank"><img src="/home/picture/float_2.png" alt=""></a></li><li class="scroll-top"><img src="/home/picture/float_4.png" alt=""></li></ul>
			</div>
		</body>



<script type="text/javascript" src= "{{ asset('/home/js/script.js') }}"></script>
<script type="text/javascript" src= "{{ asset('/home/js/jquery.cookie.js') }}"></script>
<script type="text/javascript" src= "{{ asset('/home/js/superslide.js') }}"></script>
<script type="text/javascript" src="{{ asset('/home/js/cheng.js') }}" charset="UTF-8" ></script>
<script type="text/javascript">
	@if(session("msg"))
           layer.alert('{{session("msg")}}',{icon: 5});
	@endif
</script>
</html>