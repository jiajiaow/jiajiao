<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" /> -->
	<title>手机登录</title>
	<link rel="stylesheet" href="/phone/lichengphonedl/css/sjdl.css">
	<link rel="stylesheet" href="/phone/lichengphonedl/css/swiper-3.4.2.min.css">
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
			<img src="/phone/lichengphonedl/images/x.png" alt="" width="100%" class="lc-x" >
			<img src="/phone/lichengphonedl/images/3.png" alt="" class="img3">
		</div>
	</header>
	<section style="min-height: 6.5rem">
		<div class="dl3-container">
			<div id="container-top">
				<span style="font-size: .6rem" id="xy">学员登录</span>
				<span style="font-size: .6rem" id="jy">教员登录</span>
			</div>
			<div id="container-mid" class="xyy">
				<div class="mid-one">
					<span style="margin-right: 1.5rem" id="zuo">账号登录</span>

					<span id="you">手机验证登录</span>
					<div class="line"></div>
				</div>
			<form action="" id="form1">
				<div class="ye1" style="margin-top: .6rem;height: 1.2rem"> 
					<img src="/phone/lichengphonedl/images/photo.png" alt="" class="img1" style="top: 4rem;left: 2.2rem">
					<input type="text" name="" placeholder="请输入账号/手机号" class="zzzzz" maxlength="11">
				</div>
				<div class="ye1" style="height: 1.2rem">
					<img src="/phone/lichengphonedl/images/suo.png" alt="" class="img2" style="top: 5.7rem;left: 2.2rem">
					<input type="password" name="" placeholder="请输入密码" class="zzzzz" maxlength="16">
				</div>
				<div class="sj-dl zhen">
					<a href="" class="lc-one yy" style="color: #fff;width: 80%;height: 1.2rem;line-height: 1.2rem;margin-bottom: 0;">登录</a>
				</div>
				<div class="ye2">
					<a href="">　　　　忘记密码？</a><a href="" style='color:red;'>您还没有账号？请先注册账号。</a>
				</div>
			</form>
			<!-- 手机验证登录 -->
			<form action="" method="POST" id="form" style="display: none;">
				<div class="ye1" style="margin-top:.6rem">
					<!-- <i></i> -->
					<img src="/phone/lichengphonedl/images/photo.png" alt="" class="img1" style="left: 2.2rem;top:4rem">
					<input type="text" name="" placeholder="请输入账号/手机号" class="zzzzz" maxlength="11">
				</div>
				
					
					
				
				<div class="ye1" style="background-color:transparent">
					<input type="text" name="" placeholder="请输入验证码" class="xxxxx">
					<input type="button" name="" value="发送验证码" class="sj-yzm">
				</div>
				<div class="ye1" style="background-color: #F7B529;margin-bottom:0;">
					<input type="submit" value="登录" name="" id="dl">
				</div>
			</form>
			</div>
			<div id="container-mid" style="display: none" class="jyy">
				<div class="mid-one">
					<span style="margin-right: 1.5rem" id="zuo" class="nm">账号登录</span>

					<span id="you" class="mn">手机验证登录</span>
					<div class="line"></div>
				</div>
				<form action="/dologin.html" id="form1" class="mnn" method="post">
					<div class="ye1" style="margin-top: .6rem;height: 1.2rem">
						<img src="/phone/lichengphonedl/images/photo.png" alt="" class="img1" style="top: 4rem;left: 2.2rem">
						<input type="text" name="" placeholder="请输入账号/手机号" class="zzzzz" maxlength="11">
					</div>
					<div class="ye1" style="height: 1.2rem">
						<img src="/phone/lichengphonedl/images/suo.png" alt="" class="img2" style="top: 5.7rem;left: 2.2rem">
						<input type="password" name="" placeholder="请输入密码" class="zzzzz" maxlength="16">
					</div>
					<div class="sj-dl zhen">
						<a href="" class="lc-one yy" style="color: #fff;width: 80%;height: 1.2rem;line-height: 1.2rem;margin-bottom: 0;">登录</a>
					</div>
					<div class="ye2">
						<a href="">忘记密码？</a>
					</div>
				</form>
				<!-- 手机验证登录 -->
				<form action="" method="POST" id="form" style="display: none;" class="nmm">
					<div class="ye1" style="margin-top:.6rem">
						<!-- <i></i> -->
						<img src="/phone/lichengphonedl/images/photo.png" alt="" class="img1" style="left: 2.2rem;top:4rem">
						<input type="text" name="" placeholder="请输入账号/手机号" class="zzzzz" maxlength="11">
					</div>
					
						
						
					
					<div class="ye1" style="background-color:transparent">
						<input type="text" name="" placeholder="请输入验证码" class="xxxxx">
						<input type="button" name="" value="发送验证码" class="sj-yzm">
					</div>
					<div class="ye1" style="background-color: #F7B529;margin-bottom:0;">
						<input type="submit" value="登录" name="" id="dl">
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
	<script>
		$('.lc-x').on('tap',function(){
			window.location.href="https://www.baidu.com";
		})
		$(document).ready(function(){
			$('.mid-one').on('tap','#you',function(){
				$('div.line').animate({'left':'54%','width':'25%'},1000);
				$('#form1').css('display','none')
						   .next().css('display','block')
			})
			$('.mid-one').on('tap','#zuo',function(){
				$('div.line').animate({'left':'20%','width':'19%'},1000);
				$('#form').css('display','none');
						  $('#form1').css('display','block');
			})
			$('.mid-one').on('tap','.mn',function(){
				$('.nmm').css('display','block')
				$('.mnn').css('display','none')
			})
			$('.mid-one').on('tap','.nm',function(){
				$('.mnn').css('display','block')
				$('.nmm').css('display','none')
			})
		})
	</script>
	<script>
		$(document).on('tap','.sj-yzm',function(){
			createCode();
			// let ysm = $('.sj-yzm');
			var  ysm = $('.sj-yzm');
			time(ysm);	
		})
		 function createCode(){
		 	var yanzhenma = $('.xxxxx').val();
		 	$.ajax({
		 		type:'POST',
		 		url:'',
		 		dateType:'json',
		 		data:{'yanzhenma':'yanzhenma'},
		 		success:function(result){
		 			// console.log(result)
		 		},
		 		error:function(result,status){
		 			console.log('什么鬼');
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
</body>
</html>