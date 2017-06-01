<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<title>手机注册</title> {{--手机注册--}}
	<link rel="stylesheet" href="/phone/lichengphonedl/css/sjdl.css">
	<link rel="stylesheet" href="/phone/lichengphonedl/css/swiper-3.4.2.min.css">
	<script src="{{ asset('/delijiajiao/js/layer.js') }}"></script>
	<style>
		body{
			margin: 0;
			padding: 0;
			font-family: "宋体","Arial","Microsoft YaHei","黑体",sans-serif;
		}
		.rt{
			float: right;
		}
		.lf{
			float: left;
		}
		a{
			text-decoration: none;
			-webkit-tap-highlight-color: transparent;
  			-webkit-touch-callout: none;
  			-webkit-user-select: none;

		}
		img{
			-webkit-tap-highlight-color: transparent;
			-webkit-user-select: none;
			vertical-align: middle;
		}
		input{
			-webkit-tap-highlight-color: transparent;
			-webkit-user-select: none;
			vertical-align: middle;
			outline: none;
			border: none;
		}
		.zhen{
			width: 100%;
			text-align: center;
		}
		.cler{
			content: '';
			display: block;
			clear: both;
		}
	</style>
</head>
<body>
	<header>
		<div>
			<img src="/phone/lichengphonedl/images/bg.png" alt="" width="100%" class="lc-bg">
			<!-- 触摸跳转 -->
			<a href="/mobile"><img src="/phone/lichengphonedl/images/x.png" alt="" width="100%" class="lc-x" ></a>
			<img src="/phone/lichengphonedl/images/1.png" alt="" class="czy">
		</div>
	</header>
	<section>
		<div id="ye1-container">
			<form action="" method="POST" id="form">
				<div class="ye1" style="margin-top: 1.2rem" id='sj-yzm'>
					<!-- <i></i> -->
					<img src="/phone/lichengphonedl/images/photo.png" alt="" class="img1">
					<input type="text" name="mobile" placeholder="请输入手机号" class="zzzzz" maxlength="11" id="qwer">
				</div>
				<div class="ye1">
					<img src="/phone/lichengphonedl/images/suo.png" alt="" class="img2">
					<input type="password" name="pw1" placeholder="请输入密码" class="zzzzz" maxlength="16" id="m">
				</div>
				<div class="ye1">
					<input type="text" id="mobile_code" name="mobile_code"  placeholder="请输入验证码" class="xxxxx">
					<input type="button" name="" value="发送验证码" class="sj-yzm">
				</div>
				<div class="ye6" style="background-color: #F7B529;margin-bottom:0;">
					<input type="button" value="注册" name="" id="dl">
				</div>
				<!-- 测试 -->
				
				
			</form>
			<div>
				<div class="ye2">
					<a href="/mobile/login.html">立即登录</a><span>已有账号？</span>
				</div>
			</div>
		</div>
	</section>
	<footer id="lc-footer">
		<span>Copyright&copy 2005 - 2017 delijiajiao.com</span>
	</footer>
	<script src="/phone/lichengphonedl/js/jquery-2.2.3.min.js"></script>
	<script type='text/javascript' src="/phone/lichengphonedl/js/flexible.js"></script>
	<script src="/phone/lichengphonedl/js/zepto.js"></script>
	<script type='text/javascript'>
	
		$('.sj-yzm').on('click',function(){
			var z=$('#qwer').val();
			var m=$('#m').val();
//			var phone = /^1[345678][0-9]{9}$/;
			if(z==''){
				alert('请输入手机号！');
				return false;
			}
			if(!($('#qwer').val().match(/^1[345678][0-9]{9}$/))){
				alert('手机号码不正确');
				return false;
			}
			if(m==""){
				alert('请输入密码！')
				return false;
			}
		    createCode();
			var ysm = $('.sj-yzm');
			time(ysm);	
		})
         function createCode(){
			 var yanzhenma=$('#qwer').val();
			 $.ajax({
				 type:'POST',
				 url:"{{ URL('/docode.html') }}",
				 contentType:"application/x-www-form-urlencoded; charset=utf8",
				 data:{"phone":yanzhenma,"zt":'注册'},
				 /*dataType:'JSON',*/
				 success:(function(result){
					 if(result == 'y'){
							 alert('请注意查收短信!');
					 }
					 //console.log(result);
				 }),
				 error:(function(result,status){
					 //console.log(result);
					 //larye.alert('短信sb!');
				 })

			 });
         }
		var wait = 60;
		function time(o){
			if( wait==0){
				o.val("获取验证码");
				o.removeAttr('disabled','false');
				wait = 60;
			}else{
				o.val('倒数'+wait+'s');
				o.attr('disabled','true');
				wait--;
				setTimeout(function(){
					time(o);
				},1000)
			}
		}
		$('#dl').click(function(){
			$.ajax({
				type:'POST',
				url:'{{ URL('/doreg.html') }}',
				contentType:"application/x-www-form-urlencoded; charset=utf8",
				data:$('#form').serialize(),
//				async: false,
				success:function(data){
					if(data == 'y'){
						alert('注册成功!');
						window.location.href='/mobile/login.html';
					}else if(data == 'n'){
						alert('验证码无效!');
					}else if(data == 'ls'){
						alert('该用户已经注册!');
					}else if(data == 'f'){
						alert('非法请求!');
					}
				},
				error:function(request){
					console.log(request);
				}
			})
		})
	</script>
</body>
</html>