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
						<a href="/xueyuan.html" class="lf wenzi">最新学员信息</a>
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
	<a href="/tc_order4.html"><span><font color="#000">我已接的单</font></span></a>
	<a href="/tc_order6.html"><span class='cheng_item'><font color="#000">成功的单</font></span></a>
		</div>
		<!--  -->
		<div class="zqm_yuyuejy">
			<div class="left">
				<a href="/tc_order6.html"><div class="cbv" style="font-size: 14px;">授<br/>课<br/>中</div></a>
				<a href="/tc_order7.html"><div class="cb" style="font-size: 14px;">授<br/>课<br/>结<br/>束</div></a>
			</div>
			@foreach($skjs as $skjss)
				<div class="right">
					<div class="bk zqm">
						<div class="left">订单编号</div>
						<div class="right">{{ $skjss->id }}<a href="/xsinfo{{ $skjss->id }}.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
					</div>
					<div class="bk4" style="height: 100px;line-height: 100px;">
						<div class="left1">课酬/信息费</div>
						<div class="right1">
							<div class="pm">
								<div class="left">
									学员姓名：{{ $skjss->user_name }}
								</div>
								<div class="right">
									辅导科目：{{ $skjss->subject_id }}
								</div>
							</div>
							<div class="pm zqm">
								<div class="left">
									学员年级：{{ $skjss->grade }}
								</div>
							</div>
						</div>
					</div>
					<div class="bk">
						<div class="left">接单时间</div>
						<div class="right">{{ date("Y-m-d h:i:s",$skjss->jd_times) }}</div>
					</div>
					<div class="bk zqm">
						<div class="left">结束时间</div>
						<div class="right" >2017-10-08</div>
					</div>
					{{--<div class="bk5" style="height: 200px;line-height: 200px;">
						<div class="left1">课酬/信息费</div>
						<div class="right1">
							<div class="pm">
								<div class="left">
									课酬：180元/次
								</div>
								<div class="right">
									需补/需退信息费：50元
								</div>
							</div>
							<div class="pm zqm">
								<div class="left">
									周课酬：360元/周
								</div>
								<div class="right">
									已退信息费：360元
								</div>
							</div>
							<div class="pm">
								<div class="left">
									信息费：360元
								</div>
								<div class="right">
									已锁定诚意金：60元
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

						</div>
					</div>--}}
					<div class="bk2">
						<a style="margin-left: 160px;margin-right: 160px;"><font color="#dadada">每月反馈</font></a>|
						<a style="margin-left: 160px;margin-right: 160px;"><font color="#dadada">结束课程</font></a>
					</div>
				</div>
				@endforeach
			
		<!--  -->
	</div>
	<div id="fudong"></div>
	<div class="c_yejiao">
		@if($skjs->num > 0)
			<a href="{{ $skjs->Url($skjs->LastPage()) }}">末页</a>
			<a href="{{ $skjs->Url($skjs->next) }}">下一页</a>
			<a href="{{ $skjs->Url($skjs->last) }}">上一页</a>
			<a href="{{ $skjs->Url(1) }}">首页</a>
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
	<script type="text/javascript" src='js/jquery-2.2.3.min.js'></script>
	<script type="text/javascript" src='js/script_cheng.js'></script>
</body>
</html>
