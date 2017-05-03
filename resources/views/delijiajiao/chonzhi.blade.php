<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="renderer" content="webkit">
  <title>支付界面</title>
	 <link rel="stylesheet" type="text/css" href="/new/css/cheng_css.css">
	 <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
  <style type="text/css">
  	body,p,h1,h2,h3,h4,h5,h6,ul,li{
		margin:0;
		padding:0;
		list-style:none;
		color:#333;
	}
	/*html,body,form{
		width:100%;
		height:100%;
		margin:0;
		padding:0;
	}*/
	body{
		font-family:"Microsoft yahei";
		font-size:12px;
		background-color: #fdfdfd;
	/*	margin:0;
		padding:0;*/
	}
	div{
		display:block;
	}
  	#header{
  		width:100%;
  		height:100px;
  		background-color: #FACC40;
  	}
  	.cheng_header{
  		margin:auto;
  		width: 1200px;
  		height: 100px;
  		background-color: #FACC40;
  	}
  	.lf{
  		float: left ;
  	}
  	.rt{
  		float: right ;
  	}
  	a{
  		text-decoration:none;
  	}
  	a:hover{
  		text-decoration:none;
  	}
  	
  </style>
 </head>
<body style="background-color:#F1F1F1">
	<header>
		<div id="header">
			<div class="cheng_header">
				<div style="width:246px;height:100px;" class="lf">
					<div class="lf img-div">
						<img class="img-size" src="/new/images/logo.png">
					</div>
					<div class="a-div rt">
						<a href="" class="lf wenzi">德栗家教</a>
						<div class="cheng_line"></div>
						<a href="" class="lf wenzi">支付界面</a>
					</div>
				</div>
				<div class="rt" style="width:270px;float:right;height:100px;">
					<div class="xingxi">
						<a href="" class="lf wenzi">最新家教信息</a>
						<div class="cheng_line"></div>
						<a href="" class="lf wenzi">返回首页</a>
						<div class="cheng_line"></div>
						<div class="glyphicon glyphicon-off tubiao"></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- 主体部分 -->
	<div id="zhen_container">
		<!--支付界面 -->
		<form action="" method="post" id="cz">
		<div class="zfjm">
			<div class="zfjm-c">
				<!-- 第一部分 -->
				<div class="ddh">
					<span>订单号：5201314</span>
				</div>
				<!-- 第二部分 -->
				<div class="ddh-one">
					<div class='d-h'>
						<label>类别：</label>
<!-- 						<span id='xx'>信息费</span>
						<span id='cy'>诚意金</span> -->
						<span id='cz' class='d-active'>充值</span>
					</div>
					<!--  -->
<!-- 					<div id="xxx" style="display:none">
						<div>
							<p style="font-size:16px;padding-left:65px;">如您已进入此界面，说明您已通过审核，最快付款的已通过审核教员即可成功接单，10分钟内收到联系方式。。</p>
						</div>
						<div class="d-h" id='caozz'>
							<select class="d-jine">
								<option></option>
								<option></option>
							</select>
						</div>
					</div> -->
					<!--  -->
<!-- 					<div id="cyy" style="display:none">
						<div>
							<p style="font-size:16px;padding-left:65px;">如订单已安排，未选中您，诚意金立即退回，最迟2天即可全额退回。</p>
						</div>
						<div class="d-h" id='caozz'>
							<select class="d-jine">
								<option></option>
								<option></option>
							</select>
						</div>
					</div> -->
					<!-- 充值的DIV -->
					<div id="czz">
						<div>
							<p style="font-size:16px;padding-left:65px;">充值金额冲入个人账户，随时可以提现。24小时内到账。</p>
						</div>
						<div class="d-h" id='caozz'>
							<label>金额：</label>
							<input id='i-jinge' class="d-jine" type="text" name="money" v-model='licheng' placeholder=' 请输入充值金额' maxlength="8">
							<input class="d-jine" type="hidden" name='cz' value=='1'>
							<span id='cnm'>费用：0元</span>
						</div>
					</div>
				</div>
				<!-- 第三部分 -->
				{{--<div class="ddh-two">
					<input type="checkbox" id='df'checked=checked name="xuanzhong" style="margin:0;width:16px;">
					<label>使用余额</label>
					<span style='color:#B0B3B4;'>(可用余额元)</span>
					<span id='cnmm' style='float:right;width:135px;color:red'>支付：000元</span>
				</div>--}}
				<!-- 第四部分 -->
				<div class="ddh-three">
					<div class="ddh-two1">
						<input type="checkbox" id="fd" name='duoxuan'style="margin:0;width:16px;" >
						<label>使用其他支付方式</label>
						<span id='cnmmm' style='float:right;width:135px;color:red;font-size:16px;'>支付：0元</span>
					</div>
					<div class="jiaoshenme">
						<div style="height:50px;margin-top:35px;">
							<div id="bao" class="zfb zfb1">
								<img src="/new/images/zhifubao.png">
								<!-- 支付宝是跳转 -->
								<span id='tiaozhuan'>支付宝支付</span>
							</div>
							<div id="wei" class="zfb" >
								<img src="/new/images/wechat1.png">
								<span>微信支付</span>
							</div>	
						</div>
					</div>
				</div>
				<!-- 第五部分 -->
				<div class="ddh-four">
					<label class="cz-1" style="margin-bottom:0px;">交易对象：</label>
					<span class='cz-2'>德栗家教</span>
					<label class="cz-3" style="margin-bottom:0px;">应付：</label>
					<span id='bn' class='cz-4'>￥0</span>
					<input class="cz-5" type="submit" value="立即支付" onclick="zf()">
				</div>
			</div>
		</div>
		</form>
	</div>
	<!-- 清楚浮动影响高度为0 这个很重要-->
	<div id="fudong">
		
	</div>
	<!-- 尾部 -->
	<footer style='background-color:#333'>
		<div class="footer" style="width:1200px;margin:auto;">
            Copyright　2005-2017　广州学求易教育咨询有限公司　版权所有　<a style="color: #ccc;" href="http://www.miitbeian.gov.cn/" target="_blank">粤ＩＰＣ备：16062097号</a>
        </div>	
        
	</footer>
	<script type="text/javascript" src='/new/js/jquery-2.2.3.min.js'></script>
	<script type="text/javascript" src='/new/js/script_cheng.js'></script>
	<script type="text/javascript" src='/new/js/bootstrap.js'></script>
	<script type="text/javascript" src='/new/js/vue.min.js'></script>
	<script type="text/javascript">
		new Vue({
			el:'#caozz',
			data:{
				licheng:''
			}
		});
	</script>
	<!-- 点击切换的 -->
	<script type="text/javascript">
		$('#fd').click(function(){
			$(this).attr('checked','ture');
			$('#df').removeAttr('checked',false)	
		})
		$('#df').click(function(){
			$(this).attr('checked','ture');
			$('#fd').removeAttr('checked',false)	
		})
//		$('#wei').click(function(){
//			$(this).css('border','1px solid #FACC40')
//				   .siblings('#bao').css('border','1px solid #BEBEBE')
//		})
//		$('#bao').click(function(){
//			$(this).css('border','1px solid #FACC40')
//				   .siblings('#wei').css('border','1px solid #BEBEBE')
//		})
		// 支付宝的跳转链接
		/*$('#tiaozhuan').click(function(){
			window.location.href=''
		})*/
		$('#xx').click(function(){
			$('#xxx').css('display','block')
					 .siblings('#cyy').css('display','none')
					 .siblings('#czz').css('display','none')
		})
		$('#cy').click(function(){
			$('#cyy').css('display','block')
					 .siblings('#xxx').css('display','none')
					 .siblings('#czz').css('display','none')
		})
		$('#cz').click(function(){
			$('#czz').css('display','block')
					 .siblings('#cyy').css('display','none')
					 .siblings('#xxx').css('display','none')
		})
		$('#i-jinge').blur(function(){
			let zhi = $(this).val();
			console.log(zhi);
			$('#cnm').text('费用'+zhi+'元');
			$('#cnmm').text('费用'+zhi+'元');
			$('#cnmmm').text('费用'+zhi+'元');
			$('#bn').text('￥'+zhi+'元');
		})
		$('#wei').click(function(){
			$('#wei').addClass('ac_tive')
			$('#bao').removeClass('ac_tive')
		})
		$('#bao').click(function(){
			$('#bao').addClass('ac_tive')
			$('#wei').removeClass('ac_tive')
		})
		function zf(){
			if($('.ac_tive span').text() == '支付宝支付'){
				var path = "/alipay";
				$('#cz').attr("action", path).submit();
			}else{
				var path = "/wechatpay";
				$('#cz').attr("action", path).submit();
			}
		}
	</script>
</body>
</html>
