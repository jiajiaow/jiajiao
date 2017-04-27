<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
 <meta name="renderer" content="webkit">
  <title>教员个人中心订单</title>
	 <link rel="stylesheet" type="text/css" href="/new/css/cheng_css.css">
	 <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
  <style type="text/css">
	body,p,h1,h2,h3,h4,h5,h6,ul,li{
		margin:0;
		padding:0;
		list-style:none;
		color:#333;
	}
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
		/*background-color: #e4393c;*/
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
	<!-- 侧导航 -->
<div class="cheng_nav">
	<ul class="bian_nav">
		<li>
			<i class='cheng_one'></i>
			<span>个人信息</span>
		</li>
		<li class="cheng_active">
			<i class='cheng_two'></i>
			<span>订单管理</span>
		</li>
		<li>
			<i class='cheng_three'></i>
			<span>授课订单管理</span>
		</li>
		<li>
			<i class='cheng_four'></i>
			<span>成绩管理</span>
		</li>
		<li>
			<i class='cheng_five'></i>
			<span>财务中心</span>
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
		<!--nav 开始 -->
<div class="cheng_body" style="width:954px;">
<div>
<!-- 中间部分的上 -->
<div class='j_toubu'>
	<img src="/new/images/dindan.png">
	<span>教员新订单</span>
</div>
<!-- 中间部分的中 -->
<div class="j_zj">
<div class="j_zj">
<iframe id="mainFrame" name="mainFrame" scrolling="no" src="{{ URL('/tc_page.html') }}" frameborder="0" style="padding: 0px; width: 100%; height: 370px;"></iframe>
</div>
</div>

		<!-- 中间部分的下 -->
		<div class="c_bannar" style="margin-top:58px;">
	<a href="/tc_order1.html"><span><font color="#000">我预约的单</font></span></a>
	<a href="/tc_order4.html"><span class='cheng_item'><font color="#000">我已接的单</font></span></a>
	<a href="/tc_order6.html"><span><font color="#000">成功的单</font></span></a>
		</div>
		<!--  -->
		<div class="zqm_yuyuejy">
			<div class="left">
				<a href="/tc_order4.html"><div class="cbv" style="font-size: 14px;">试<br/>课<br/>中</div></a>
				<a href="/tc_order5.html"><div class="cb" style="font-size: 14px;">试<br/>课<br/>失<br/>败</div></a>
			</div>
			@foreach($sskjs as $sskjss)
				<div class="right">
					<div class="bk zqm">
						<div class="left">订单编号</div>
						<div class="right">{{ $sskjss->id }}<a href="/xsinfo{{ $sskjss->id }}.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
					</div>
					<div class="bk">
						<div class="left">接单时间</div>
						<div class="right"></div>
					</div>
					<div class="bk zqm">
						<div class="left">试课时间</div>
						<div class="right"></div>
					</div>
					<div class="bk">
						<div class="left">试课地点</div>
						<div class="right">
							{{--<form action="">
								<input name="" type="text" style="height: 29px;" />
								<input type="submit" style="font-size: 12px;height: 50px;"/>
							</form>--}}
						{{ $sskjss->radd }}</div>
					</div>
					{{--<div class="bk">
						<div class="left">试课结果填写</div>
						<div class="right"><a href=""><font color="#FF0000">试课成功</font></a>　　　　<a href=""><font color="#FF0000">试课不成功</font></a></div>
					</div>--}}
					<div class="bk">
						<div class="left">介绍信/合同</div>
						<div class="right"><a href=""><font color="#FF0000">查看电子介绍信/合同</font></a></div>
					</div>
					<div class="bk3" style="height: 250px;line-height: 250px;">
						<div class="left1">课酬/信息费</div>
						<div class="right1">
							<div class="pm zqm">
								<div class="left">
									课酬：{{ $sskjss->money }}元/次
								</div>
								<div class="right">
									需补/需退信息费：50元
								</div>
							</div>
							<div class="pm">
								<div class="left">
									周课酬：360元/周
								</div>
								<div class="right">
									已退信息费：360元
								</div>
							</div>
							<div class="pm zqm">
								<div class="left">
									信息费：360元
								</div>
								<div class="right">
									已锁定诚意金：60元
								</div>
							</div>
							<div class="pm zqm">
								<div class="left">
									家长服务费：360元
								</div>
								<div class="right">
									待退回诚意金：60元
								</div>
							</div>
							<div class="pm">
								<div class="left">
									已预付信息费：360元
								</div>
								<div class="right">
									本单实际信息费：60元
								</div>
							</div>
						</div>
					</div>
					<div class="bk2">
						<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">申请退款</font></a>|
						<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">申请诚意金解锁</font></a>|
						<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#FF0000">收付款记录</font></a>
					</div>
				</div>
				@endforeach
		<!--  -->
	</div>
	<div class="c_yejiao">
		 @if($sskjs->num > 0)
		<a href="{{ $sskjs->Url($sskjs->LastPage()) }}">末页</a>
		<a href="{{ $sskjs->Url($sskjs->next) }}">下一页</a>
		<a href="{{ $sskjs->Url($sskjs->last) }}">上一页</a>
		<a href="{{ $sskjs->Url(1) }}">首页</a>
		{{--<label>页数:1/2</label>--}}
		@endif
	</div>
</div>
</div></div>
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
