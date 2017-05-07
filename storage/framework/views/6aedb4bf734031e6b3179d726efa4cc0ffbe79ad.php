<!doctype html>
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
	<div id="header">
		<div class="top-login">
			<div class="container">
				<div class="logo pull-left">
					<a href="/" class="pull-left"><img src="<?php echo e(asset('/home/picture/logo.png')); ?>" alt=""></a>
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
		<img src="<?php echo e(asset('/home/picture/banner_2.png')); ?>">
		<div class="inbanner">
			<div class="container">
				<div class="left-form pull-left">
					<div class="form pull-left">
						<h4>教员注册</h4>
						<form name="form1" method="post" id="form1">
							<div class="fg">
								<input type="text" id="uname" name="mobile" placeholder="手机号" maxlength=11>
								<span></span>
							</div>
							
							<div class="yfg" id="hidepassword">
								<input type="password" id="pw1" name="pw1" placeholder="密码（长度不小于六位）" class="pass" onkeyup="changepw1pw2()">
								<a href="javascript:void(0)" onclick="showpassword()">显示</a>
							</div>

							<div class="yfg"style="display:none"  id="showpassword">
								<input type="text" id="pw2" name="pw2" placeholder="密码（长度不小于六位）" class="pass" onkeyup="changepw2pw1()">
								<a href="javascript:void(0)" onclick="hidepassword()">隐藏</a>
							</div>


							<div class="fg">
								<input type="text" style="width:46%" id="mobile_code" name="mobile_code" placeholder="验证码" class="password">
								<input type="button" style="width:52.715%;background:#F7B529;color:black" onclick="sendMsg()" value="发送验证码" id="djs">
								<span></span>
							</div>
							
							<button type="button" onclick="CheckValue()">注册</button>
						</form>
						<a href="">已有账号 直接登录</a>
						<div class="clear"></div>
					</div>
					<div class="right-code pull-right">
						<div class="code">
							<img src="<?php echo e(asset('/home/picture/code.png')); ?>">
						</div>
						<p>扫描二维码</p>
						<p>关注微信公众号</p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="pfoot">
			<div class="container">
				<p>© 2005－2016 版权所有：上海四帆固教育科技有限公司-家教114  |   沪ICP备09062748号-5</p>
			</div>
		</div>
	</div>
	
	<script language=JavaScript> 
function CheckValue()
{
	if($("#uname").val()=="")
	{
		 alert("用户名不能为空！");

	}
	
 if($("#email").val()=="")
 {
	 alert("Email不能为空！");

 }
 else if($("#pw1").val()=="")
 {
	 alert("密码不能为空！");

 }
 else if($("#pw1").val().length>20)
 {
	 alert("密码不能多于20位！");

 }
 $("#pw2").val("");
 $.ajax({
	url:"",
	type:"post",
	data:$('#form1').serialize(),
	success:function(data){
		data = eval('('+data+')');
		if(data.status == 1){
			alert(data.msg);
		}
		if(data.status == 2){
			location.href=data.url;
		}
	}
})
}

function sendMsg()
{
	var mobile = $("#uname").val();
	var code = $("#vcode").val();

	if(mobile == null || mobile == ''){
		alert("请输入手机号");return false;
	}
	var re = /^1[34578]\d{9}$/;
    if (!re.test(mobile)) {
       alert("请输入正确手机号");return false;
    }
	//获取验证码
	getCode();
	var get_code=$('#djs');
	time(get_code);
}
function getCode(){
	var djs = $('#djs').val();
	$.ajax({
		type:'POST',
		url:'',
		contentType:"application/x-www-form-urlencoded; charset=utf8",
		data:{"djs":djs},
		dataType:'JSON',
		success:(function(result){
			console.log(result);
		}),
		error:(function(result,status){
			console.log(result);
		})

	});
}
var wait=60;
function time(z,c){
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
	var value = $("#pw1").val();
	$("#pw2").val(value);
}
function changepw2pw1()
{
	var value = $("#pw2").val();
	$("#pw1").val(value);
}
</script>
</body>
</html>
