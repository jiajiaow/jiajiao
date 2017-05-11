<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>学员登录</title>
	<link rel="stylesheet" href="<?php echo e(asset('/home/css/login.css')); ?>">
	<script type="text/javascript" src= "<?php echo e(asset('/home/js/jquery-2.2.3.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/delijiajiao/js/layer.js')); ?>"></script>
	<script>
		<?php if(session('tc_phone') != null): ?>
				window.location.href="<?php echo e(URL('/teacherinfo.html')); ?>";
		<?php elseif(session('st_phone') != null): ?>
				<?php if(session('dlzt') == 2): ?>
					window.location.href="<?php echo e(URL('/stinfo2.html')); ?>";
				<?php else: ?>
					window.location.href="<?php echo e(URL('/stinfo.html')); ?>";
				<?php endif; ?>
		<?php endif; ?>
	</script>
</head>
<body>
	<div id="header">
		<div class="top-login">
			<div class="container">
				<div class="logo pull-left">
					<a href="/" class="pull-left"></a>
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
		<img src="<?php echo e(asset('/home/images/dl.jpg')); ?>" style="height:450px;">
		<div class="inbanner">
			<div class="container">
				<div class="right-form pull-right">
					<div class="left-code pull-left">
						<div class="code">
							<img src="<?php echo e(asset('/home/picture/qqqcode.jpg')); ?>">
						</div>
						<p>QQ信息发布群</p>
						<p>367144804</p>
						<div class="code" style="margin-top: 40px;">
							<img src="<?php echo e(asset('/home/picture/qqcode.jpg')); ?>">
						</div>
						<p>微信联系</p>
						<p>delijiajiao</p>
					</div>

					<div class="form pull-right">
					<script type="text/javascript"></script>

						<div style="height: 20px;">
							<span id="z">手机号登录</span>
							<span id="y">普通登录</span>
						</div>
						<div class="line"></div>

						<form id="validForm" method="post" action="<?php echo e(URL('/dostlogin.html')); ?>">
							<div class="fg">
								<label for="">
									<img src="<?php echo e(asset('/home/picture/icon_mail.png')); ?>">
								</label>
								<input  id="uname" type="text" name="phone" placeholder="手机号" maxlength="11" >
								<input type="hidden" name="dlzt" value="2">
							</div>

							<div class="fg">
								<label for="">
									<img src="<?php echo e(asset('/home/picture/icon_pass.png')); ?>">
								</label>
								<input id="mobile" type="tel"  style='width:46%' name="code" placeholder="验证码">
								<input style="width: 128px;cursor: pointer;background-color: #F7B529" id="getsms" type="button" value="获取验证码"/>

							</div>
							<button id="deng"  type="submit">登录</button>
						</form>
						<form class="z" id="ptForm" method="post" action="<?php echo e(URL('/dostlogin.html')); ?>">
							<div class="fg">
								<label for=""><img src="<?php echo e(asset('/home/picture/icon_mail.png')); ?>"></label>
								<input id="zh" type="text" name="phone" placeholder="请输入账号">
								<input type="hidden" name="dlzt" value="2">
							</div>
							<div class="fg">
								<label for=""><img src="<?php echo e(asset('/home/picture/icon_pass.png')); ?>"></label>
								<input id="mima" type="password" name="pwd" placeholder="请输入密码">
							</div>
							<button  type="submit">登录</button>
						</form>




						<a style="margin-top: 20px;"  href="<?php echo e(URL('/yuyuelaoshi.html')); ?>" class="pull-left">我是学生，立即注册</a>
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
					<div class="clear"></div>
				</ul>
					<ul style="font-size:15px;color:#262626 "> Copyright2005－2017广州学求易教育咨询有限公司
						版权所有 &nbsp;粤ICP备16062097号-4
					</ul>
				</div>
				</div>
				</div>
		</body>


<script type="text/javascript" src="https://hztk5.kuaishang.cn/bs/ks.j?cI=125636&fI=79140" charset="utf-8"></script>
<script type="text/javascript" src= "<?php echo e(asset('/home/js/script.js')); ?>"></script>
<script type="text/javascript" src= "<?php echo e(asset('/home/js/jquery.cookie.js')); ?>"></script>
<script type="text/javascript" src= "<?php echo e(asset('/home/js/superslide.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/home/js/cheng.js')); ?>" charset="UTF-8" ></script>
<script type="text/javascript">
	<?php if(session("msg")): ?>
           layer.alert('<?php echo e(session("msg")); ?>',{icon: 5});
	<?php endif; ?>
	//获取验证码
	function getCode(){
		var phone=$('#uname').val();
		$.ajax({
			type:"POST",
			url:"/docode.html",
			data:{"phone":phone,"zt":'登录'},
			contentType: "application/x-www-form-urlencoded; charset=utf8",
			success:function(result){
				if(<?php echo e(session('Template')); ?> == '1'){
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
