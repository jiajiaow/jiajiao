﻿<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新教员注册第二步: 选择用户名、密码、邮箱、身份 - 家教114</title>
	<link rel="stylesheet" href="<?php echo e(asset('/home/css/style.css')); ?>">
</head>
<body>
<script src="<?php echo e(asset('/home/js/jquery.min.js')); ?>"></script>
<script src= "<?php echo e(asset('/home/js/script.js')); ?>"></script>
<script Language="JavaScript" src="<?php echo e(asset('/home/js/register.js')); ?>"></script>
<script src="<?php echo e(asset('/home/js/cheng.js')); ?>"></script>
<script src="<?php echo e(asset('/delijiajiao/js/layer.js')); ?>"></script>
	<div id="header">
		<div class="top-login">
			<div class="container">
				<div class="logo pull-left">
					<a href="/" class="pull-left"></a>
					<a href="javascript:void(0)" class="pull-right dl">欢迎注册</a>
					<div class="clear"></div>
				</div>
				<div class="return pull-right">
					<a href="/">返回首页</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div id="register-banner">
		<img src="<?php echo e(asset('/home/images/zc.jpg')); ?>">
		<div class="inbanner">
			<div class="container">
				<div style="top:90px;" class="left-form pull-left">
					<div class="form pull-left">
						<h4>教员注册</h4>
						<form name="form1" method="post" id="form1" action="<?php echo e(URL('/doreg.html')); ?>">
							<div class="fg" style="padding-left: 0px">
								<input type="text" id="uname" name="mobile" placeholder="手机号" maxlength=11>
								<span></span>
							</div>

							<div class="yfg" id="hidepassword" style="padding-left: 0px;">
								<input type="password" id="pw1" name="pw1" placeholder="请设置密码" class="pass" onblur="changepw1pw2() " style="background-color: #EEEEEE;">
								
							</div>

							
								
								
							


							<div class="fg" style="padding-left: 0px;">
								<input type="text" style="width:150px" id="mobile_code" name="mobile_code" placeholder="验证码" class="password">
								<input type="button" style="width:163px;background:#F7B529;color:black;cursor: pointer;" onclick="sendMsg()" value="发送验证码" id="djs">
								<span></span>
							</div>

							<button type="button" onclick="CheckValue()" style="color:#000">注册</button>
						</form>
						<a href="<?php echo e(URL('/login.html')); ?>">已有账号 直接登录</a>
						<div class="clear"></div>
					</div>

					<div class="right-code pull-right">
						<div class="code">
							<img src="<?php echo e(asset('/home/picture/qqqCode.jpg')); ?>">
						</div>
						<p>信息发布群</p>
						<p>367144804</p>

					</div>
					<div class="right-code pull-right">
						<div class="code">
							<img src="<?php echo e(asset('/home/picture/qqCode.jpg')); ?>">
						</div>
						<p>微信联系</p>
						<p>delijiajiao</p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="pfoot">
			<div class="container">
				<p>© 2005－2017 版权所有：广州学求易教育咨询有限公司|   粤ICP备16062097号-4
				</p>

			</div>
		</div>
	</div>
<script type="text/javascript" src="https://hztk5.kuaishang.cn/bs/ks.j?cI=125636&fI=79140" charset="utf-8"></script>

	<script language=JavaScript>
function CheckValue()
{
	if($("#uname").val()=="")
	{
		layer.alert("用户名不能为空！", {icon: 5});

	}

 if($("#email").val()=="")
 {
	 layer.alert("Email不能为空！", {icon: 5});

 }
 else if($("#pw1").val().length<6)
 {
	 layer.alert("密码不能为空或者小于6位！", {icon: 5});

 }

 else if($("#pw1").val().length>20)
 {
	 layer.alert("密码不能多于20位！", {icon: 5});

 }
 $("#pw2").val("");
 $.ajax({
	url:"<?php echo e(URL('/doreg.html')); ?>",
	type:"post",
	data:$('#form1').serialize(),
	success:function(data){
		if(data == 'y'){
				layer.alert('注册成功!',{icon: 6});
			window.location.href='/login.html';
		}else if(data == 'n'){
			    layer.alert('验证码无效!',{icon: 5,time:2000});
		}else if(data == 'ls'){
			    layer.alert('该用户已经注册!',{icon: 5,time:2000});
 		}else if(data == 'f'){
			layer.alert('非法请求!',{icon: 5,time:2000});
		}
//		data = eval('('+data+')');
//		if(data.status == 1){
//			alert(data.msg);
//		}
//		if(data.status == 2){
//			location.href=data.url;
//		}
	}
})
}

function sendMsg()
{
	//alert(1)
	var mobile = $("#uname").val();
	var code = $("#vcode").val();

	if(mobile == null || mobile == ''){
		layer.alert("请输入手机号", {icon: 5});return false;
	}
	var re = /^1[34578]\d{9}$/;
    if (!re.test(mobile)) {
		layer.alert("请输入正确手机号",{icon: 5});return false;
    }
	//获取验证码
	getCode();
	var get_code=$('#djs');
	time(get_code);
}
function getCode(){
	var phone = $("#uname").val();
	$.ajax({
		type:'POST',
		url:"<?php echo e(URL('/docode.html')); ?>",
		contentType:"application/x-www-form-urlencoded; charset=utf8",
		data:{"phone":phone,"zt":'注册'},
		/*dataType:'JSON',*/
		success:(function(result){
			if(result == 'y'){
				if(<?php echo e(session('Template')); ?> == '1'){
					layer.alert('请注意查收短信!',{icon: 4,time:2000});
				}else{
					layer.alert('请注意查收短信!',{icon: 3,time:2000});
				}

			}
			//console.log(result);
		}),
		error:(function(result,status){
			//console.log(result);
			//larye.alert('短信sb!');
		})

	});
}
var wait=60;
function time(z){
	if(wait==0){
		z.removeAttr('disabled');
		z.val('发送验证码');
		wait = 60;
	}else{
		z.attr('disabled',"true");
		z.val("倒数"+wait+"s");
		wait--;
		setTimeout(function(){
			time(z,c);
		},1000)
	}
}


function showpassword(){
	$("#hidepassword").hide();
	$("#showpassword").show();
}

function hidepassword(){

	$("#hidepassword").show();
	$("#showpassword").hide();
}

function changepw1pw2()
{
	if($("#pw1").val().length<4){
		layer.alert("密码不能为空,或者小于4位！", {icon: 5});

	}else if($("#pw1").val().length>16)
	{
		layer.alert("密码不能多于16位！", {icon: 5});

	}
}
function changepw2pw1()
{
	var value = $("#pw2").val();
	$("#pw1").val(value);
}
/*$(document).ready(function () {
	setInterval("startRequest()",500);
});

function startRequest() {
	var abc = 10;
	for (i = 0; i < abc; i++) {
		$.ajax({
			type: 'get',
			url: "<?php echo e(URL('/jia.html')); ?>",
			contentType: "application/x-www-form-urlencoded; charset=utf8",

			dataType:'JSON',
			success: (function (result) {

				//console.log(result);
			}),
			error: (function (result, status) {
				//console.log(result);
				//larye.alert('短信sb!');
			})

		});
	}
}*/
	</script>
</body>
</html>
