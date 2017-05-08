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
					<a href="/" class="lf wenzi">德栗家教</a>
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
					<iframe id="mainFrame" name="mainFrame" scrolling="no" src="<?php echo e(URL('/tc_page.html')); ?>" frameborder="0" style="padding: 0px; width: 100%; height: 370px;"></iframe>
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
					<a href="/tc_order6.html"><div class="cb" style="font-size: 14px;">授<br/>课<br/>中</div></a>
					<a href="/tc_order7.html"><div class="cbv" style="font-size: 14px;">授<br/>课<br/>结<br/>束</div></a>
				</div>
				<?php $__currentLoopData = $sskz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sskzs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="right">
						<div class="bk zqm">
							<div class="left">订单编号</div>
							<div class="right"><?php echo e($sskzs->id); ?><a href="/xsinfo<?php echo e($sskzs->id); ?>.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
						</div>
						<div class="bk4" style="height: 100px;line-height: 100px;">
							<div class="left1">学员基础信息</div>
							<div class="right1">
								<div class="pm">
									<div class="left">
										学员姓名：<?php echo e($sskzs->user_name); ?>

									</div>
									<div class="right">
										辅导科目：<?php echo e($sskzs->subject_id); ?>

									</div>
								</div>
								<div class="pm zqm">
									<div class="left">
										学员年级：<?php echo e($sskzs->grade); ?>

									</div>
								</div>
							</div>
						</div>
						<div class="bk">
							<div class="left">上课时间</div>
							<div class="right"><button style="height: 40px; margin-top: 5px;line-height: 35px;float: right;" class="timeShow">选择时间</button></div>
						</div>
						

						<div class="bk">
							<div class="left">介绍信/合同</div>
							<div class="right">（查看电子介绍/合同）</div>
						</div>
						<div class="bk2">
							<a style="margin-left: 160px;margin-right: 160px;" href="" target="_blank"><font color="#000">每月反馈</font></a>|
							<a style="margin-left: 160px;margin-right: 160px;" href="" target="_blank"><font color="#FF0000">
									<form action="/tc_jskc.html" method="post" style="display: inline-block;">
										<input type="hidden" name="oid" value="<?php echo e($sskzs->id); ?>">
										<input type="hidden" name="rid" value="<?php echo e($sskzs->rid); ?>">
										<input type="hidden" name="tc_id" value="<?php echo e($sskzs->tc_id); ?>">
										<input type="hidden" name="zt" value="1">
										<button type="submit" style="height: 40px;line-height:30px;margin-top: 10px;">结束课程</button>
									</form>
								</font></a>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<!--  -->
			</div>
			<div class="c_yejiao">
				<?php if($sskz->num > 0): ?>
					<a href="<?php echo e($sskz->Url($sskz->LastPage())); ?>">末页</a>
					<a href="<?php echo e($sskz->Url($sskz->next)); ?>">下一页</a>
					<a href="<?php echo e($sskz->Url($sskz->last)); ?>">上一页</a>
					<a href="<?php echo e($sskz->Url(1)); ?>">首页</a>
					
				<?php endif; ?>
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
<div class="fc" style="display: none;"></div>
<div class="fc_content" style="display: none;">

	<table style="margin: 0 auto;margin-top: 36px;">
		<tbody class="sure_gou">
		<tr>
			<td>
				<p>周一</p>
				<input value="周一上午" name="sk_times1" type="checkbox">上午
				<input value="周一下午" name="sk_times2" type="checkbox">下午
				<input value="周一晚上" name="sk_times3" type="checkbox">晚上
			</td>
			<td>
				<p>周二</p>
				<input value="周二上午" name="sk_times4" type="checkbox">上午
				<input value="周二下午" name="sk_times5" type="checkbox">下午
				<input value="周二晚上" name="sk_times6" type="checkbox">晚上
			</td>
			<td>
				<p>周三</p>
				<input value="周三上午" name="sk_times7" type="checkbox">上午
				<input value="周三下午" name="sk_times8" type="checkbox">下午
				<input value="周三晚上" name="sk_times9" type="checkbox">晚上
			</td>
			<td>
				<p>周四</p>
				<input value="周四上午" name="sk_times10" type="checkbox">上午
				<input value="周四下午" name="sk_times11" type="checkbox">下午
				<input value="周四晚上" name="sk_times12" type="checkbox">晚上
			</td>
		</tr>
		<tr>
			<td>
				<p>周五</p>
				<input value="周五上午" name="sk_times13" type="checkbox">上午
				<input value="周五下午" name="sk_times14" type="checkbox">下午
				<input value="周五晚上" name="sk_times15" type="checkbox">晚上
			</td>
			<td>
				<p>周六</p>
				<input value="周六上午" name="sk_times16" type="checkbox">上午
				<input value="周六下午" name="sk_times17" type="checkbox">下午
				<input value="周六晚上" name="sk_times18" type="checkbox">晚上
			</td>
			<td>
				<p>周日</p>
				<input value="周日上午" name="sk_times19" type="checkbox">上午
				<input value="周日下午" name="sk_times20" type="checkbox">下午
				<input value="周日晚上" name="sk_times21" type="checkbox">晚上
			</td>
			<td>
				<button class="sure_btn">确定</button>
			</td>
		</tr>
		</tbody></table>
</div>
<style>
	.fc {
		position: fixed;
		width: 100%;
		height: 100%;
		background: rgba(0, 0, 0, 0.41);
		top: 0;
		left: 0;
	}
	.fc_content {
		width: 650px;
		height: 190px;
		position: fixed;
		background: #fff;
		left: 50%;
		top: 50%;
		margin-left: -325px;
		margin-top: -95px;
	}
	.licbox input {
		width: 26px;
		height: 21px;
		vertical-align: bottom;
	}
	.licbox p{
		text-align: center;
	}
	td{
		border: 1px solid #c1c1c1;
		padding: 10px;
		text-align: center;
	}
</style>
<script type="text/javascript" src='new/js/jquery-2.2.3.min.js'></script>
<script type="text/javascript" src='js/script_cheng.js'></script>
<script>
	$(function(){
		$('#beginTime').date();
		$('#endTime').date({theme:"datetime"});
	});
	$('.timeShow').click(function(){
		$('.fc').show(500)
		$('.fc_content').show(500)
	})
	$('.fc').click(function(){
		$('.fc').hide(500)
		$('.fc_content').hide(500)
	})
	$('.sure_btn').click(function(){
		$('.fc').hide(500)
		$('.fc_content').hide(500)
		var a = $('.sure_gou').find('input')
		for(var i=0;i< a.length;i++){
			if(a[i].checked==true){
				var b =a[i].
				$('.block_time').html()
			}
		}

	})
</script>
</body>
</html>
