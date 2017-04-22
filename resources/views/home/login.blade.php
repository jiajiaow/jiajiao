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
		@elseif(session('st_phone') != null)
				@if(session('dlzt') == 2)
					window.location.href="{{ URL('/stinfo2.html') }}";
				@else
					window.location.href="{{ URL('/stinfo.html') }}";
				@endif
		@endif
	</script>
</head>
<body>
	<div id="header">
		<div class="top-login">
			<div class="container">
				<div class="logo pull-left">
					<a href="/" class="pull-left">{{--<img src="{{ asset('/home/picture/logo.png') }}" alt="">--}}</a>
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
		<img src="{{ asset('/home/images/dl.png') }}" style="height:450px;">
		<div class="inbanner">
			<div class="container">
				<div class="left-code pull-left">
					<div class="code">
						<img src="{{ asset('/home/picture/qqqcode.jpg') }}" style="width: 100%">
						<p style="color:#bbb; margin: 2px 0;">QQ信息发布群</p>
						<p style="font-weight: 600">367144804</p>
					</div>
					<div class="code" style="margin-left: 15px;">
						<img src="{{ asset('/home/picture/qqcode.jpg') }}" style="width: 100%">
						<p style="color:#bbb; margin: 2px 0;">微信联系</p>
						<p style="font-weight: 600">delijiajiao</p>
					</div>
				</div>
				<div class="right-form-title">
					<h2 style="margin-right: 55px; color: #ffb529;" class="StudentRegBtn">学员登录</h2>
					<h2 class="teacherRegBtn">教员登录</h2>
				</div>
				<div class="right-form pull-right StudentReg" style="top: 80px;">
					<div class="form pull-right">
						<div style=" height: 24px;position: relative; text-align: center">
							<span id="y">账号登录</span>
							<span id="z">手机号登录</span>
						</div>
						<div class="line"></div>

						<form id="validForm" method="post" action="{{ URL('/dostlogin.html') }}" class="z" >
							<div class="fg">
								<label for="">
									<img src="{{ asset('/home/picture/icon_mail.png') }}">
								</label>
								<input  id="uname" type="text" name="phone" placeholder="手机号" maxlength="11" >
								<input type="hidden" name="dlzt" value="2">
							</div>

							<div class="fg">
								<label for="">
									<img src="{{ asset('/home/picture/icon_pass.png') }}">
								</label>
								<input id="mobile" type="tel"  style='width:46%' name="code" placeholder="验证码">
								<input style="width: 108px;cursor: pointer;background-color: #F7B529" id="getsms" type="button" value="获取验证码"/>

							</div>
							<button id="deng"  type="submit">登录</button>
						</form>
						<form  id="ptForm" method="post" action="{{ URL('/dostlogin.html') }}">
							<div class="fg">
								<label for=""><img src="{{ asset('/home/picture/icon_mail.png') }}"></label>
								<input id="zh" type="text" name="phone" placeholder="请输入账号">
								<input type="hidden" name="dlzt" value="2">
							</div>
							<div class="fg">
								<label for=""><img src="{{ asset('/home/picture/icon_pass.png') }}"></label>
								<input id="mima" type="password" name="pwd" placeholder="请输入密码">
							</div>
							<button  type="submit">登录</button>
						</form>
						<div style="text-align: right;margin-top: 25px;font-size: 12px;">
							<a style="margin-top: 20px;font-size: 12px;margin-right: 15px;color: #000;"  href="{{ URL('/reg.html') }}">学员注册</a>
							<a style="margin-top: 20px;font-size: 12px;color: #000;" href="" >忘记密码</a>
						</div>

						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div style="top: 80px;">
				<div class="right-form pull-right teacherReg" style="top: 80px; display: none" >
					<div class="form pull-right">
						<div style=" height: 24px;position: relative; text-align: center">
							<span id="yy">账号登录</span>
							<span id="zz">手机号登录</span>
						</div>
						<div class="line"></div>

						<form class="z" id="validForms" method="post" action="{{ URL('/dologin.html') }}">
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
								<input style="width: 108px;cursor: pointer;background-color: #F7B529" id="getsms" type="button" value="获取验证码"/>

							</div>
							<button id="deng"  type="submit">登录</button>
						</form>
						<form  id="ptForms" method="post" action="{{ URL('/dologin.html') }}">
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
						<div style="text-align: right;margin-top: 25px;font-size: 12px;">
							<a style="margin-top: 20px;font-size: 12px;margin-right: 15px;color: #000;"  href="{{ URL('/reg.html') }}">教员注册</a>
							<a style="margin-top: 20px;font-size: 12px;color: #000;" href="" >忘记密码</a>
						</div>

						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="footer" style="margin-top: -3px;">

		<div class="foot-bottom"><div class="container">
		<!--		<ul style="width:100%"><li>友情链接：</li><li><a href="" target="_blank">仓山区</a></li>
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
-->
					<div class="clear"></div>
				</ul>
					<ul style="font-size:15px;color:#262626 "> Copyright2005－2017广州学求易教育咨询有限公司
						版权所有 &nbsp;粤ICP备16062097号-4
					</ul>
				</div>
				</div>
				</div>
		</body>
<style>
	.container{
		position: relative;
	}
	.left-code{
		position: absolute;
		bottom: 97px;
		left: 180px;
		padding: 14px;
		background: #e2e2e2;
		opacity: 0.9;
		z-index: 1;
	}
	.code {
		width: 100px;
		display: inline-block;
		text-align: center;
	}

	#footer .foot-bottom {
		color: #a7a7a7;
		font-size: 12px;
		text-align: center;
		padding: 15px 0;
		background: #717171;
	}
	#login-banner .right-form {
		position: absolute;
		right: 135px;
		top: 89.16px;
	}
	#login-banner .form, #register-banner .form {
		padding: 25px;
		background: #fff;
		width: 303px;
	}
	#z {
		width: 100px;
		display: inline-block;
		cursor: pointer;
		font-size: 14px;
		border-bottom: 1px solid #e7e7e7;
		position: relative;
		margin: 0 17px;
		text-align: center;
		padding-bottom: 6%;
	}
	#y {
		width: 100px;
		display: inline-block;
		font-size: 14px;
		border-bottom: 1px solid #e7e7e7;
		padding-bottom: 6%;
		text-align: center;
		margin-left: 10px;
	}
	#zz {
		width: 100px;
		display: inline-block;
		cursor: pointer;
		font-size: 14px;
		border-bottom: 1px solid #e7e7e7;
		position: relative;
		margin: 0 17px;
		text-align: center;
		padding-bottom: 6%;
	}
	#yy {
		width: 100px;
		display: inline-block;
		font-size: 14px;
		border-bottom: 1px solid #e7e7e7;
		padding-bottom: 6%;
		text-align: center;
		margin-left: 10px;
	}
	.right-form-title {
		position: absolute;
		right: 135px;
		width: 305px;
		text-align: center;
		top: 20px;
		cursor:pointer;
	}
	.right-form-title h2{
		display: inline-block;
		color: rgb(210, 210, 210);
	}
</style>

<script type="text/javascript" src="https://hztk5.kuaishang.cn/bs/ks.j?cI=125636&fI=79140" charset="utf-8"></script>
<script type="text/javascript" src= "{{ asset('/home/js/script.js') }}"></script>
<script type="text/javascript" src= "{{ asset('/home/js/jquery.cookie.js') }}"></script>
<script type="text/javascript" src= "{{ asset('/home/js/superslide.js') }}"></script>
<script type="text/javascript" src="{{ asset('/home/js/cheng.js') }}" charset="UTF-8" ></script>
<script>
	$(document).on('click','.StudentRegBtn', function () {
		$(this).css('color','#ffb529')
		$('.teacherRegBtn').css('color','rgb(210, 210, 210)')
		$('.StudentReg').show(1000)
		$('.teacherReg').hide(1000)
	})
	$(document).on('click','.teacherRegBtn', function () {
		$(this).css('color','#ffb529')
		$('.StudentRegBtn').css('color','rgb(210, 210, 210)')
		$('.teacherReg').show(1000)
		$('.StudentReg').hide(1000)
	})


</script>
<script type="text/javascript">
	@if(session("msg"))
           layer.alert('{{session("msg")}}',{icon: 5});
	@endif
	//获取验证码
	function getCode(){
		var phone=$('#uname').val();
		$.ajax({
			type:"POST",
			url:"/docode.html",
			data:{"phone":phone,"zt":'登录'},
			contentType: "application/x-www-form-urlencoded; charset=utf8",
			success:function(result){
				if({{ session('Template') }} == '1'){
					layer.alert('请注意查收短信!',{icon: 4,time:2000});
				}else{
					layer.alert('请注意查收短信!',{icon: 3,time:2000});
				}
			},
			error:function(result,status){
				console.log(result);
			}
		});

	}
</script>
</html>
