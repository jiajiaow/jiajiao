<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<title>教员财务中心</title>
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
<body>
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
					<a href="" class="lf wenzi">个人中心</a>
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
	<!-- 侧导航 公共样式，勿修改，修改自行加class-->
	<div class="cheng_nav">
		<ul class="bian_nav">
			<li>
				<i class='cheng_one'></i>
				<span>个人信息</span>
			</li>
			<li>
				<i class='cheng_two'></i>
				<span><a href="/tc_order1.html">订单管理</a></span>
			</li>
			<li>
				<i class='cheng_three'></i>
				<span>授课订单管理</span>
			</li>
			<li>
				<i class='cheng_four'></i>
				<span>成绩管理</span>
			</li>
			<li class="cheng_active">
				<i class='cheng_five'></i>
				<span><a href="/tc_financial.html">财务中心</a></span>
			</li>
			<li>
				<i class='cheng_six'></i>
				<span>积分商城</span>
			</li>
			<li>
				<i class='cheng_seven'></i>
				<span>沟通中心</span>
			</li>
		</ul>
	</div>
	<!-- 侧导航结束 -->
	<!--nav 开始 中间主体-->
	<div class="cheng_body" style="width:954px;">
		<!-- 学员财务中心的页面 -->
		<!-- 账户部分 -->
		<div class="j-zhanghu">
			<div>
				<div class="j-one">
					<h5>账户余额</h5>
					<span>{{ $list->tc_money }}</span>
					<br/>
					<a class="ja1"  href="">充值</a>
					<a class="ja2" data-toggle="modal" data-target="#myModal" href="#">提现</a>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content" style="width: 336px;float: right;">
								<form action="" method="POST">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
											&times;
										</button>
										<label for="">提现：</label>
										<input type="text" name="" placeholder="提现金额">
									</div>
									<div class="modal-body">
										<input type="radio" name="1" checked="checked" id="p1">支付宝
										<input type="radio" name="1" id="p2" style="margin-left: 10px">微信
										<p id="p3" style="margin-top: 10px">温馨提示：尊敬的用户，由于支付宝提现于2016年开始收取手续费，支付宝公司将对您的提现收取千分之五的手续费，您也可以选择将余额留存在我的钱包里下次使用。您是否确认提现？</p>
										<p style="display: none;margin-top:10px;" id="p4">微信提现   弹窗提示  ：
											因微信提现需要7天才能到账，且与支付宝公司一样，微信提现也需要收取手续费，建议您使用支付宝提现，当天即可到账，如您确认想通过微信提现（且您原先的支付方式需为微信），请联系我们。
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">关闭
										</button>
										<input type="submit" class="btn btn-primary" value="提交">
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
				<div class="j-two">
					<div class="j-two-top" style="height:36px;">
						<i id='i-one' style='display:none;'></i>
						<i id='i-two'></i>
						<label>显示提现账号</label>

					</div>
					<div id="fudong"></div>
					<div class="j-two-mid">
						<div class="jt">
							<i class='bj-one'></i>
							<h5>累计课酬收入</h5>
							<p>1980.00</p>
						</div>
						<div class="jt">
							<i class='bj-one1'></i>
							<h5>已提现金额</h5>
							<p>1980.00</p>
						</div>
						<div class="jt">
							<i class='bj-one2'></i>
							<h5>正在提现金额</h5>
							<p>1980.00</p>
						</div>
					</div>
				</div>
			</div>
			<div id="fudong"></div>
			<div class="j-three">
				<table style="width:780px;">
					<thead>
					<tr>
						<th style="width:17%;">信息费欠款</th>
						<th style="width:17%;">诚意金锁定</th>
						<th style="width:27%;">已授课完成尚未申请收款</th>
						<th style="width:34%;">已申请收款家长尚未支付</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>123000</td>
						<td>12300</td>
						<td>1200</td>
						<td>13050</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- 支付账号 -->
		<div id="cai-mid" class="cai-mid" style="display:none;">
			<form action="" method="POST">
				<div class="cai-mid-one">
					<div>
						<label>支付宝：</label>
						<input type="text" name="" class="tq">
					</div>
					<div>
						<label style="margin-right:2px;">微&nbsp;&nbsp;&nbsp;信：</label>
						<input type="text" name="" class="tq">
					</div>
					<input type="submit" value="保存" class="bc" style='margin-top: 10px;'>
				</div>
			</form>
		</div>
		<!-- 收支流水 -->
		<div class="cai-szls">
			<i></i>
			<span>收支流水</span>
		</div>
		<!-- 清除浮动 -->
		<div id="fudong"></div>
		<!-- 具体收支流水 -->
		<div class="cai-ls">
			<div>
				<table>
					<thead>
					<tr class="tr-one">
						<th class="t1">流水编号</th>
						<th class="t2">课酬</th>
						<th class="t3">金额</th>
						<th class="t4">收支时间</th>
						<th class="t5">对应订单号</th>
						<th class="t6">授课订单</th>
						<th class="t7">教员</th>
						<th class="t8">收支方式</th>
						<th class="t9" style="display:none">xxxx</th>
						<th class="t10" style="display:none">cccc</th>
					</tr>
					</thead>
					<tbody>
					<tr class="tr-two">
						<td class="t1">KC10086</td>
						<td class="t2">提现</td>
						<td class="t3">100</td>
						<td class="t4">2017/9/14</td>
						<td class="t5"><a class="a1" href="">1000000</a></td>
						<td class="t6"><a class="a2" href="">10000000</a></td>
						<td class="t7">张全蛋</td>
						<td class="t8">支付宝</td>
						<td class="t9"><a class="a3" href="">确认收款</a></td>
						<td class="t10"><a class="a4" href="">申诉</a></td>
					</tr>
					<tr class="tr-two">
						<td class="t1">10086</td>
						<td class="t2">提现</td>
						<td class="t3">100</td>
						<td class="t4">2017/9/14</td>
						<td class="t5"><a class="a1" href="">1000000</a></td>
						<td class="t6"><a class="a2" href="">10000000</a></td>
						<td class="t7">张全蛋</td>
						<td class="t8">支付宝</td>
						<td class="t9"><a class="a3" href="">确认收款</a></td>
						<td class="t10"><a class="a4" href="">申诉</a></td>
					</tr>
					<tr class="tr-two">
						<td class="t1">10086</td>
						<td class="t2">提现</td>
						<td class="t3">100</td>
						<td class="t4">2017/9/14</td>
						<td class="t5"><a class="a1" href="">1000000</a></td>
						<td class="t6"><a class="a2" href="">10000000</a></td>
						<td class="t7">张全蛋</td>
						<td class="t8">支付宝</td>
						<td class="t9"><a class="a3" href="">确认收款</a></td>
						<td class="t10"><a class="a4" href="">申诉</a></td>
					</tr>
					<tr class="tr-two">
						<td class="t1">10086</td>
						<td class="t2">提现</td>
						<td class="t3">100</td>
						<td class="t4">2017/9/14</td>
						<td class="t5"><a class="a1" href="">1000000</a></td>
						<td class="t6"><a class="a2" href="">10000000</a></td>
						<td class="t7">张全蛋</td>
						<td class="t8">支付宝</td>
						<td class="t9"><a class="a3" href="">确认收款</a></td>
						<td class="t10"><a class="a4" href="">申诉</a></td>
					</tr>
					<tr class="tr-two">
						<td class="t1">10086</td>
						<td class="t2">提现</td>
						<td class="t3">100</td>
						<td class="t4">2017/9/14</td>
						<td class="t5"><a class="a1" href="">1000000</a></td>
						<td class="t6"><a class="a2" href="">10000000</a></td>
						<td class="t7">张全蛋</td>
						<td class="t8">支付宝</td>
						<td class="t9"><a class="a3" href="">确认收款</a></td>
						<td class="t10"><a class="a4" href="">申诉</a></td>
					</tr>
					<tr class="tr-two">
						<td class="t1">10086</td>
						<td class="t2">提现</td>
						<td class="t3">100</td>
						<td class="t4">2017/9/14</td>
						<td class="t5"><a class="a1" href="">1000000</a></td>
						<td class="t6"><a class="a2" href="">10000000</a></td>
						<td class="t7">张全蛋</td>
						<td class="t8">支付宝</td>
						<td class="t9"><a class="a3" href="">确认收款</a></td>
						<td class="t10"><a class="a4" href="">申诉</a></td>
					</tr>
					<tr class="tr-two">
						<td class="t1">10086</td>
						<td class="t2">课酬</td>
						<td class="t3">100</td>
						<td class="t4">2017/9/14</td>
						<td class="t5"><a class="a1" href="">1000000</a></td>
						<td class="t6"><a class="a2" href="">10000000</a></td>
						<td class="t7">张全蛋</td>
						<td class="t8">支付宝</td>
						<td class="t9"><a class="a3" href="">确认收款</a></td>
						<td class="t10"><a class="a4" href="">申诉</a></td>
					</tr>
					<tr class="tr-two">
						<td class="t1">10086</td>
						<td class="t2">课酬</td>
						<td class="t3">100</td>
						<td class="t4">2017/9/14</td>
						<td class="t5"><a class="a1" href="">1000000</a></td>
						<td class="t6"><a class="a2" href="">10000000</a></td>
						<td class="t7">张全蛋</td>
						<td class="t8">支付宝</td>
						<td class="t9"><a class="a3" href="">确认收款</a></td>
						<td class="t10"><a class="a4" href="">申诉</a></td>
					</tr>
					<tr id="t10" class="tr-two">
						<td class="t1">10086</td>
						<td class="t2">提现</td>
						<td class="t3">100</td>
						<td class="t4">2017/9/14</td>
						<td class="t5"><a class="a1" href="">1000000</a></td>
						<td class="t6"><a class="a2" href="">10000000</a></td>
						<td class="t7">张全蛋</td>
						<td class="t8">支付宝</td>
						<td class="t9"><a class="a3" href="">确认收款</a></td>
						<td class="t10"><a class="a4" href="">申诉</a></td>
					</tr>
					</tbody>
					<tfoot></tfoot>
				</table>
			</div>
		</div>
		<!-- yejiao  -->
		<div class="c_yejiao" style="margin-right:25px;">
			<a href="">末页</a>
			<a href="">下一页</a>
			<a href="">上一页</a>
			<a href="">首页</a>
			<label>页数:1/2</label>
		</div>
		<!--  -->
	</div>
	<!-- nav 结束 -->
</div>
<!-- 清楚浮动影响高度为0 这个很重要-->
<div id="fudong">

</div>
<footer style='background-color:#333'>
	<div class="footer" style="width:1200px;margin:auto;">
		Copyright　2005-2017　广州学求易教育咨询有限公司　版权所有　<a style="color: #ccc;" href="http://www.miitbeian.gov.cn/" target="_blank">粤ＩＰＣ备：16062097号</a>
	</div>

</footer>
<script type="text/javascript" src='/new/js/jquery-2.2.3.min.js'></script>
<script type="text/javascript" src='/new/js/script_cheng.js'></script>
<!-- -->
<script type="text/javascript">
	$('#i-one').click(function(){
		$(this).css('display','none')
				.siblings('#i-two').css('display','block');
		$('#cai-mid').css('display','none')
	})
	$('#i-two').click(function(){
		$(this).css('display','none')
				.siblings('#i-one').css('display','block');
		$('#cai-mid').css('display','block')
	})
</script>
<script type="text/javascript">

	$(document).ready(function(){
		// var a =$('.tr-two>.t9').find('.a3');
		var a = $('.a3','.t9');
		for (var i=0;i<a.length;i++){
			var b = a.parent().siblings('.t2')[i].innerText;
			console.log(b)
			if (b=='课酬') {
				a.eq(i).css('display','none')
			};
		}



		$('#p2').click(function(){
			$('#p3').css('display','none')
			$("#p4").fadeToggle(1500);
		})
		$('#p1').click(function(){
			$('#p4').css('display','none')
			$("#p3").fadeToggle(1500);
		})

	})
</script>
</body>
</html>
