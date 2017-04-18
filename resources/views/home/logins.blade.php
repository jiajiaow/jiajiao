<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>登录</title>
	<link rel="stylesheet" href="{{ asset('/home/css/login.css') }}">
	<script type="text/javascript" src= "{{ asset('/home/js/jquery-2.2.3.min.js') }}"></script>
	<script src="{{ asset('/delijiajiao/js/layer.js') }}"></script>
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
		<img src="{{ asset('/home/picture/banner_1.jpg') }}">
		<div class="inbanner">
			<div class="container">
				<div class="right-form pull-right">
					<div class="left-code pull-left">
						<div class="code">
							<img src="{{ asset('/home/picture/code.jpg') }}">
						</div>
						<p>QQ信息发布群</p>
						<p>367144804</p>
					</div>
					<div class="form pull-right">
					<script type="text/javascript"></script>
						<div class="FormTitle"><p style="text-align: center">教员登录</p></div>
						<div style="height: 20px;">
							<span id="z">手机号登录</span>
							<span id="y">普通登录</span>

						</div>
						<div class="line"></div>
						
						<form id="validForm" method="post" action="">
							<div class="fg">
								<label for="">
									<img src="{{ asset('/home/picture/icon_mail.png') }}">
								</label>
								<input  id="uname" type="text" name="username" placeholder="手机号" maxlength="11" >
							</div>
							
							<div class="fg">
								<label for="">
									<img src="{{ asset('/home/picture/icon_pass.png') }}">
								</label>
								<input id="mobile" type="tel"  style='width:46%' name="vcode" placeholder="验证码">
								<input style="width: 128.21px;cursor: pointer;background-color: #F7B529" id="getsms" type="button" value="获取验证码"/>

							</div>
							<button id="deng"  type="submit">登录</button>
						</form>

						<form class="z" id="ptForm" method="post" action="">
							<div class="fg">
								<label for=""><img src="{{ asset('/home/picture/icon_mail.png') }}"></label>
								<input id="zh" type="text" name="tel" placeholder="请输入账号">
							</div>
							<div class="fg">
								<label for=""><img src="{{ asset('/home/picture/icon_pass.png') }}"></label>
								<input id="mima" type="password" name="pwd" placeholder="请输入密码">
							</div>
							<button  type="submit">登录</button>
						</form>
						<a style="margin-top: 20px;"  href="" class="pull-left">我是老师，立即注册</a>
						<a style="margin-top: 20px;" href="" class="pull-right">忘记登录密码</a>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="left-form pull-right">
					<div class="left-code pull-lefts">
						<div class="code">
							<img src="{{ asset('/home/picture/codeLi.png') }}" width="100%">
						</div>
						<p>微信联系</p>
						<p>delijiajiao</p>
					</div>
					<div class="form pull-right">
					<script type="text/javascript"></script>
						<div class="FormTitle"><p style="text-align: center">学员登录</p></div>
						<div style="height: 20px;">
							<span id="zz">手机号登录</span>
							<span id="yy">普通登录</span>
						</div>
						<div class="lines"></div>
						
						<form id="validForms" method="post" action="">
							<div class="fg">
								<label for="">
									<img src="{{ asset('/home/picture/icon_mail.png') }}">
								</label>
								<input  id="uname" type="text" name="username" placeholder="手机号" maxlength="11" >
							</div>
							
							<div class="fg">
								<label for="">
									<img src="{{ asset('/home/picture/icon_pass.png') }}">
								</label>
								<input id="mobile1" type="tel"  style='width:46%' name="vcode" placeholder="验证码">
								<input style="width: 128.21px;cursor: pointer;background-color: #F7B529" id="getsmss" type="button" value="获取验证码"/>

							</div>
							<button id="deng"  type="submit">登录</button>
						</form>

						<form class="z" id="ptForms" method="post" action="">
							<div class="fg">
								<label for=""><img src="{{ asset('/home/picture/icon_mail.png') }}"></label>
								<input id="zh" type="text" name="tel" placeholder="请输入账号">
							</div>
							<div class="fg">
								<label for=""><img src="{{ asset('/home/picture/icon_pass.png') }}"></label>
								<input id="mima" type="password" name="pwd" placeholder="请输入密码">
							</div>
							<button  type="submit">登录</button>
						</form>
						
						<a style="margin-top: 20px;"  href="" class="pull-left">我是学员，快速请家教</a>
						<a style="margin-top: 20px;" href="" class="pull-right">忘记登录密码</a>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="foot-top"><div class="container">
			<div class="foot-logoer">
			<a href="/"><img src="{{ asset('/home/picture/foot_logo.png') }}" alt=""> </a>
			</div>
			<dl><dt>我是学员</dt><dd>
				<a href="/help/help_1.php">请家教流程</a></dd>
				<dd><a href="/help/jiajiao_fee.php">学员收费标准</a></dd><dd><a href="/l-c1/">挑选合适教员</a></dd></dl><dl><dt>我是老师</dt><dd><a href="/help/appointment.php">如何预约订单</a></dd><dd><a href="/help/standard.php">教员收费标准</a></dd><dd><a href="/help/fukuan.php">汇款接单手续</a></dd></dl><dl class="last"><dt>关于我们</dt><dd><a href="/help/about.php">公司简介</a></dd><dd><a href="/help/banquan.php">版权声明</a></dd><dd><a href="/help/mianzhe.php">免责申明</a></dd><dd><a href="/help/yingsi.php">隐私保护</a></dd><dd><a href="/help/xieyi.php">用户协议</a></dd><dd><a href="/help/contact.php">联系我们</a></dd></dl><div class="code"><i>15985773757</i><span>7*24小时在线客服</span><img src="{{ asset('/home/picture/code.png') }}" alt=""><span>【扫一扫】马上请家教</span></div><div class="clear"></div></div></div><div class="foot-bottom"><div class="container"><ul style="width:100%"><div class="clear"></div></ul><ul style="font-size:15px;color:#262626 ">&copy; 2005－2017家教114 &nbsp;&nbsp;|&nbsp;&nbsp; 沪ICP备09062748号-5  关键词：家教,一对一家教,上海家教网</ul></div></div></div><div class="suspend"><ul><li><img src="{{ asset('/home/picture/float_1.png') }}" alt=""><div class="wechat hidebox"><div class="inbox"><img src="{{ asset('/home/picture/code.png') }}" alt=""><i>【扫一扫】随时请家教</i></div></div></li><li><a href="http://p.qiao.baidu.com/im/index?siteid=9008098&ucid=20781114&cp=&cr=&cw=" target="_blank"><img src="{{ asset('/home/picture/float_2.png') }}" alt=""></a></li><li class="scroll-top"><img src="{{ asset('/home/picture/float_4.png') }}" alt=""></li></ul></div></body>

<script type="text/javascript" src= "{{ asset('/home/js/script.js') }}"></script>
<script type="text/javascript" src= "{{ asset('/home/js/jquery.cookie.js') }}"></script>
<script type="text/javascript" src= "{{ asset('/home/js/superslide.js') }}"></script>
<script type="text/javascript" src="{{ asset('/home/js/cheng.js') }}" charset="UTF-8" ></script>

</html>