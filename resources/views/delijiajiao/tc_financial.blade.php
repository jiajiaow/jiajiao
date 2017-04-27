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
						<a href="/faculty.html" class="lf wenzi">最新家教信息</a>
						<div class="cheng_line"></div>
						<a href="/" class="lf wenzi">返回首页</a>
						<div class="cheng_line"></div>
						<a href="outlogin.html"><div class="glyphicon glyphicon-off tubiao"></div></a>
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
					<span><a href="/stinfo.html">个人信息</a></span>
				</li>
				<li>
					<i class='cheng_two'></i>
					<span><a href="/xy_order.html">订单管理</a></span>
				</li>
				<li>
					<i class='cheng_three'></i>
					<span>授课订单管理</span>
				</li>
				<li>
					<i class='cheng_four'></i>
					<span>成绩管理</span>
				</li>
				<li  class="cheng_active">
					<i class='cheng_five'></i>
					<span><a href="/xy_financial.html">财务中心</a></span>
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
				<div class="cai_top">
					<div class="cai-one">
						<h5>账户余额</h5>
						<span class='span-one'>{{ $list->tc_money }}</span>
						<br/>
						<a class="a_one" href="/tc_top_up.html">充值</a>
						<a class="a_two" href="">提现</a>
					</div>
					<div class="cai-two">
						<div class="ct-one">
							<span>显示账号</span>
							<i></i>
							<span>自动支付？</span>
							<i></i>
						</div>
						<div class="ct-two">
							<div>
								<i class='bj-one'></i>
								
								<p class="bj-two">未支付课酬总额</p>
								<p class='bj-three'>0.00</p>
							</div>
							<div>
								<i class='bj-one1'></i>
								
								<p class="bj-two">已提现金额</p>
								<p class='bj-three'>0.00</p>
							</div>
							<div>
								<i class='bj-one2'></i>
								
								<p class="bj-two">正在提现金额</p>
								<p class='bj-three'>0.00</p>
							</div>
						</div>
						<!-- 清楚浮动 -->
						<div id='fudong'></div>
						<!-- 清楚浮动结束 -->
						<!-- 支付宝花账号 -->
					</div>
				</div>
				<!-- 支付账号 -->
				<div class="cai-mid">
							<div class="cai-mid-one">
								<div>
									<label>支付宝:</label>
									<span>{{ $list->tc_pay_zfb }}</span>
								</div>
								<div>
									<label>微信:</label>
									<span>{{ $list->tc_wechat }}</span>
								</div>
							</div>
							<div class="cai-mid-two">
								<div>
									<label>开户银行:</label>
									<span>{{ $list->tc_pay_yh }}</span>
								</div>
								<div>
									<label>开户账号:</label>
									<span>{{ $list->tc_yh_account }}</span>
								</div>
							</div>
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
									<th class="t2">类型</th>
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
									<td class="t2">课酬</td>
									<td class="t3">100</td>
									<td class="t4">2017/9/14</td>
									<td class="t5"><a class="a1" href="">1000000</a></td>
									<td class="t6"><a class="a2" href="">10000000</a></td>
									<td class="t7">张全蛋</td>
									<td class="t8">支付宝</td>
									<td class="t9"><a class="a3" href="">确认收货</a></td>
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
									<td class="t9"><a class="a3" href="">确认收货</a></td>
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
									<td class="t9"><a class="a3" href="">确认收货</a></td>
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
									<td class="t9"><a class="a3" href="">确认收货</a></td>
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
									<td class="t9"><a class="a3" href="">确认收货</a></td>
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
									<td class="t9"><a class="a3" href="">确认收货</a></td>
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
									<td class="t9"><a class="a3" href="">确认收货</a></td>
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
									<td class="t9"><a class="a3" href="">确认收货</a></td>
									<td class="t10"><a class="a4" href="">申诉</a></td>
								</tr>
								<tr id="t10" class="tr-two">
									<td class="t1">10086</td>
									<td class="t2">课酬</td>
									<td class="t3">100</td>
									<td class="t4">2017/9/14</td>
									<td class="t5"><a class="a1" href="">1000000</a></td>
									<td class="t6"><a class="a2" href="">10000000</a></td>
									<td class="t7">张全蛋</td>
									<td class="t8">支付宝</td>
									<td class="t9"><a class="a3" href="">确认收货</a></td>
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
	<footer>
		<div class="footer">
            Copyright　2005-2017　广州学求易教育咨询有限公司　版权所有　<a style="color: #ccc;" href="http://www.miitbeian.gov.cn/" target="_blank">粤ＩＰＣ备：16062097号</a>
        </div>	
	</footer>
	<script type="text/javascript" src='/new/js/jquery-2.2.3.min.js'></script>
	<script type="text/javascript" src='/new/js/script_cheng.js'></script>
</body>
</html>
