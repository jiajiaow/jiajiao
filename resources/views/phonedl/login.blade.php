<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" /> -->
	<title>手机登录</title> {{--手机登录--}}
	<link rel="stylesheet" href="/phone/lichengphonedl/css/sjdl.css">
	<link rel="stylesheet" href="/phone/lichengphonedl/css/swiper-3.4.2.min.css">
	<link rel="stylesheet" href="/phone/lichengphonedl/css/yanzhen/validate.css">
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
			/*-webkit-user-select: none;*/
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
			<img src="/phone/lichengphonedl/images/3.png" alt="" class="img3">
		</div>
	</header>
	<section style="min-height: 6.5rem">
		<div class="dl3-container">
			<div id="container-top">
				<span style="font-size: .6rem;color: #e4393c;display: inline-block" id="xy">学员登录</span>
				<span style="font-size: .6rem;display: inline-block" id="jy">教员登录</span>
			</div>
			<div id="container-mid" class="xyy">
				<div class="mid-one">
					<span style="margin-right: 1.5rem;display: inline-block" id="zuo">账号登录</span>

					<span style="display: inline-block" id="you">手机验证登录</span>
					<div class="line" style="margin-top: .2rem;"></div>
				</div>
			<form action="/dostlogin.html" id="form1" method="post">
				<div class="ye1" style="margin-top: .6rem;height: 1.2rem"> 
					<img src="/phone/lichengphonedl/images/photo.png" alt="" class="img1" style="top: 4rem;left: 2.2rem">
					<input type="text" name="phone" placeholder="请输入账号/手机号" class="zzzzz" maxlength="11" id="uname">
					<input type="hidden" name="dlzt" value="4">
				</div>
				<div class="ye1" style="height: 1.2rem">
					<img src="/phone/lichengphonedl/images/suo.png" alt="" class="img2" style="top: 5.7rem;left: 2.2rem">
					<input type="password" name="pwd" placeholder="请输入密码" class="zzzzz" maxlength="16" id="pwd">
				</div>
				<div class="sj-dl zhen">
					<input onclick="yanzhen();" type="button" value="登录" class="lc-one yy" style="color: #fff;width: 80%;height: 1.2rem;line-height: 1.2rem;margin-bottom: 0;font-size: .5rem;border-radius: 1rem"></input>
				</div>
				<div class="ye2">
					<a href="javascript:void(0);" style="font-size: .35rem" class="wjmm">忘记密码？</a>
					<a href="/mobile/reg.html" style='color:red;font-size: .35rem'>您还没有账号？请先注册账号。</a>
				</div>
			</form>
			<!-- 学员手机验证登录 -->
				{{--第一个页面得手机验证登录--}}
			<form action="/dostlogin.html" method="POST" id="form" style="display: none;">
				<div class="ye1" style="margin-top:.6rem">
					<!-- <i></i> -->
					<img src="/phone/lichengphonedl/images/photo.png" alt="" class="img1" style="left: 2.2rem;top:4rem">
					<input type="text" name="phone" placeholder="请输入手机号" class="zzzzz" maxlength="11" id="xy-sjh">
				</div>

				<div class="ye1" style="background-color:transparent">
					<input type="text" name="code" placeholder="请输入验证码" class="xxxxx">
					<input type="button" name="" value="发送验证码" class="sj-yzm" id="btn1">
				</div>
				<div class="ye1" style="background-color: #F7B529;margin-bottom:.5rem;">
					<input type="button" value="登录" name="" id="dl" onclick="yanzhen1()">
				</div>
			</form>
			</div>
			{{--第二个教员登录的表单--}}
			<div id="container-mid" style="display: none" class="jyy">
				<div class="mid-one">
					<span style="margin-right: 1.5rem" id="zuo" class="nm">账号登录</span>

					<span id="you" class="mn">手机验证登录</span>
					<div class="line" style="margin-top: .2rem"></div>
				</div>
				<form action="/mobile/dologin.html" id="form3" class="mnn" method="post">
					<div class="ye1" style="margin-top: .6rem;height: 1.2rem">
						<img src="/phone/lichengphonedl/images/photo.png" alt="" class="img1" style="top: 4rem;left: 2.2rem">
						<input type="text" name="phone" placeholder="请输入账号" class="zzzzz" maxlength="11" id="jy-z">
					</div>
					<div class="ye1" style="height: 1.2rem">
						<img src="/phone/lichengphonedl/images/suo.png" alt="" class="img2" style="top: 5.7rem;left: 2.2rem">
						<input type="password" name="pwd" placeholder="请输入密码" class="zzzzz" maxlength="16" id="jy-m">
					</div>
					<div class="sj-dl zhen">
						<input type="button" onclick="yanzhen2()" value="登录" class="lc-one yy" style="color: #fff;width: 80%;height: 1.2rem;line-height: 1.2rem;margin-bottom: 0;font-size: .5rem;border-radius: 1rem"></input>
					</div>
					<div class="ye2">
						<a href="javascript:void (0)" style="font-size: .35rem" class="wjmm1">忘记密码</a>
						<a href="" style="color: red;font-size:.35rem;" >您还没有账号?请先注册账号</a>
					</div>
				</form>
				{{--教员得手机号登录--}}
				<form action="/mobile/dologin.html" method="POST" id="form4" style="display: none;" class="nmm">
					<div class="ye1" style="margin-top:.6rem">
						<!-- <i></i> -->
						<img src="/phone/lichengphonedl/images/photo.png" alt="" class="img1" style="left: 2.2rem;top:4rem">
						<input type="text" name="phone" placeholder="请输入手机号" class="zzzzz" maxlength="11" id="tel2">
					</div>
					{{--<div class="ye1">--}}
						{{--<img src="/phone/lichengphonedl/images/suo.png" alt="" class="img2" style="top:5.7rem;left: 2.2rem">--}}
						{{--<input type="password" name="" placeholder="请输入密码" class="zzzzz" maxlength="16">--}}
					{{--</div>--}}
					<div class="ye1" style="background-color:transparent">
						<input type="text" name="code" placeholder="请输入验证码" class="xxxxx">
						<input type="button" name="" value="发送验证码" class=" jy-yzm">
					</div>
					<div class="ye1" style="background-color: #F7B529;margin-bottom:0;">
						<input type="button" value="登录" name="" id="dl" onclick="yanzhen4();">
					</div>
				</form>
			</div>
		</div>
	</section>
	<div class="cler"></div>
	<footer id="lc-footer">
		<span>Copyright&copy 2005 - 2017 delijiajiao.com</span>
	</footer>
	<script src="/phone/lichengphonedl/js/jquery-2.2.3.min.js"></script>
	<script src="/phone/lichengphonedl/js/flexible.js"></script>
	<script src="/phone/lichengphonedl/js/zepto.js"></script>
	<script src="/phone/lichengphonedl/js/jquery-mvalidate.js"></script>
	<script>
		$('.wjmm').click(function(){
			$('#you').click();
		})
		$('.wjmm1').click(function(){
			$('.mn').click();
		})
	</script>
	<script>
		$(document).ready(function(){
			$('#you').click(function(){
				$('div.line').animate({'left':'54%','width':'25%'},1000);
				$('#form1').css('display','none')
						   .next().css('display','block')
			})
			$('.mid-one').on('tap','#zuo',function(){
				$('div.line').animate({'left':'20%','width':'19%'},1000);
				$('#form').css('display','none');
						  $('#form1').css('display','block');
			})
			$('.mn').click(function(){
				$('.nmm').css('display','block');
				$('div.line').animate({'left':'54%','width':'25%'},1000);
				$('.mnn').css('display','none')
			})
			$('.mid-one').on('tap','.nm',function(){
				$('.mnn').css('display','block');
				$('div.line').animate({'left':'20%','width':'19%'},1000);
				$('.nmm').css('display','none')
			})
		})
	</script>
	<script>
		function yanzhen(){
			if($('#uname').val()==''){
				alert("请输入账号！");
				return false;
			}

			if($('#pwd').val()==""){
				alert("请输入密码！")
				return false;
			}
			$('#form1').submit();
		}
		function yanzhen2(){
			if($('#jy-z').val()==''){
				alert("请输入账号！");
				return false;
			}

			if($('#jy-m').val()==""){
				alert("请输入密码！")
				return false;
			}
			$('#form3').submit();
		}
		function yanzhen1(){
			var phone = $.trim($('#xy-sjh').val());
			if(!phone){
				alert('请输入手机号！');
				return;
			}else if(!/^0?1[3|4|5|6|7|8]\d{9}$/.test(phone)){
				alert("请输入正确的手机号码！");
				return;
			};

			$('#form').submit();
		}
		function yanzhen4(){
			var tel2 = $.trim($('#tel2').val());
			if(!tel2){
				alert('请输入手机号！');
				return;
			}else if(!/^0?1[3|4|5|6|7|8]\d{9}$/.test(tel2)){
				alert("请输入正确的手机号码！");
				return;
			};

			$('#form4').submit();
		}
	</script>
	<script>
		{{--学员手机登录--}}
		$(document).on('click','.sj-yzm',function(){
			var phone = $.trim($('#xy-sjh').val());
			if(phone==""){
				die();
			}else if(/^0?1[3|4|5|6|7|8]\d{9}$/.test(phone)){

			}
			createCode();
			var  ysm = $('.sj-yzm');
			time(ysm);

		})
		 function createCode(){
			 var xy = $('#xy-sjh').val();

		 	$.ajax({
		 		type:'POST',
				url:"/docode.html",
		 		dateType:'json',
				data:{"phone":xy,"zt":'登录'},
				contentType: "application/x-www-form-urlencoded; charset=utf8",
		 		success:function(result){
					alert('验证码发送成功');
		 		},
		 		error:function(result,status){
		 			console.log(result);
		 			console.log(status);
		 		}
		 	})
		 }
		var  wait = 60;
		function time(o,p){
			if(wait==0){
				o.val("获取验证码");
				wait = 60;
				o.removeAttr('disabled');
			}else{
				o.val('倒数'+wait+'s');
				o.attr('disabled','true');
				wait--;
				setTimeout(function(){
					time(o,p);
				},1000)
			}
		}
		$('#jy').on('tap',function () {
		    $('#jy').css('color','#e4393c')
				.prev().css('color','#fff')
			$('.xyy').css('display','none');
			$('.jyy').fadeIn(1500);
			$('.jyy').css('display','block')

        })
        $('#xy').on('tap',function () {
			$('#xy').css('color','#e4393c')
				.next().css('color','#fff')
            $('.jyy').css('display','none');
			$('.xyy').show(1000)
            $('.xyy').css('display','block')

        })
	</script>
	{{--教员手机登录--}}
	<script>
		@if(session("msg"))
           alert('{{session("msg")}}');
		@endif
            $(document).on('click','.jy-yzm',function(){
			var tel2 = $.trim($('#tel2').val());
			if(tel2==""){
				die();
			}else if(/^0?1[3|4|5|6|7|8]\d{9}$/.test(tel2)){

			}
			createCode2();
			var  ysm2 = $('.jy-yzm');
			time2(ysm2);
		})
		function createCode2(){
			var tel2 = $('#tel2').val();
			$.ajax({
				type:'POST',
				url:"/docode.html",
				data:{"phone":tel2,"zt":'登录'},
				dateType:'json',
				contentType: "application/x-www-form-urlencoded; charset=utf8",
				success:function(data){
					alert('验证码发送成功');
				},
				error:function(result,status){
					console.log(result);
					console.log(status);
				}
			})
		}
		var  wait = 60;
		function time2(o,p){
			if(wait==0){
				o.val("获取验证码");
				wait = 60;
				o.removeAttr('disabled');
			}else{
				o.val('倒数'+wait+'s');
				o.attr('disabled','true');
				wait--;
				setTimeout(function(){
					time2(o,p);
				},1000)
			}
		}
	</script>

</body>
</html>