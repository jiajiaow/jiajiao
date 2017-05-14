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
			
			<li class="cheng_active">
				<i class='cheng_two'></i>
				<span><a href="/tc_order1.html"></a>订单管理</span>
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
							<a style="margin-left: 160px;margin-right: 160px;" ><font color="#FF0000">
									
										<input type="hidden" name="oid" value="<?php echo e($sskzs->id); ?>">
										<input type="hidden" name="rid" value="<?php echo e($sskzs->rid); ?>">
										<input type="hidden" name="tc_id" value="<?php echo e($sskzs->tc_id); ?>">
										<input type="hidden" name="zt" value="1">
										<span onclick="jskc(<?php echo e($sskzs->id); ?>,<?php echo e($sskzs->rid); ?>)" style="height: 40px;line-height:30px;margin-top: 10px;">结束课程</span>
									
								</font></a>
						</div>
					</div>

                        <div class="fc" id="fc<?php echo e($sskzs->id); ?>" style="display: none;"></div>
                        <div class="fc_contentS" id="fc_contentS<?php echo e($sskzs->id); ?>" style="display: none;">
                            <form method="post" action="tc_jskc.html">
                                <input type="hidden" name="oid" value="<?php echo e($sskzs->id); ?>">
                                <input type="hidden" name="rid" value="<?php echo e($sskzs->rid); ?>">
                                <div style="padding: 14px 30px;">
                                    <ul >
                                        <li><h4>合同结束</h4></li>
                                        <li>结束时间 <input type="text" name="ht_jstimes" placeholder="格式: 2017-8-8">
                                        </li>
                                        <li>结束类型
                                            <select id="renyuan" name="nocglx">
                                                <option value="家长原因">家长原因</option>
                                                <option value="教员原因">教员原因</option>
                                            </select>
                                        </li>
                                        <li>
                                            <p>原因
                                                <select id="ok_xueyuan" style="width:360px;" name="yuanyin">
                                                    <option value="家长另外找了更好的老师">家长另外找了更好的老师</option>
                                                    <option value="家长找了专职老师">家长找了专职老师</option>
                                                    <option value="家长觉得成绩没有明显提升">家长觉得成绩没有明显提升</option>
                                                    <option value="家长/学生因为时间的变动无法继续上课">家长/学生因为时间的变动无法继续上课</option>
                                                    <option value="学员暂时不太适应家教">学员暂时不太适应家教</option>
                                                    <option value="家长还是选择了去上辅导班">家长还是选择了去上辅导班</option>
                                                    <option value="合同期满">合同期满</option>
                                                </select>
                                                <select id="ok_jiaoyuan" style="display:none;width:360px;">
                                                    <option value="教员未能勤勉尽责，无法按时保质完成我方家教要求">教员未能勤勉尽责，无法按时保质完成我方家教要求</option>
                                                    <option value="教员个人原因以后没法上课">教员个人原因以后没法上课</option>
                                                    <option value="教员迟到、上课时玩手机、一直在提钱、态度不好">教员迟到、上课时玩手机、一直在提钱、态度不好</option>
                                                    <option value="教员不认真备课和准备，对孩子不负责">教员不认真备课和准备，对孩子不负责</option>
                                                    <option value="教员能力有限，带不了孩子">教员能力有限，带不了孩子</option>
                                                    <option value="教员性格和孩子不是很合得来，孩子不喜欢">教员性格和孩子不是很合得来，孩子不喜欢</option>
                                                </select>
                                            </p>


                                        </li>
                                        <li>
                                            <p>申请信息费退款<input type="text" name="xxftk" style="width:55px;margin-left:10px;"> 已收课酬 <input  style="width:55px; margin-left:10px;" type="text" name="yskc" ></p>
                                        </li>
                                        <li>
                                            <span style="vertical-align: top">备注</span>
                                            <input style="margin: 0px; width: 334px; height: 68px;"/>
                                        </li>
                                        <li>
                                            <p><button style="margin-left: 15%;padding: 4px 28px;margin-right: 23%;" class="sure_btn">确定</button> <button style="padding: 4px 28px;" class="sure_btn" type="reset">取消</button></p>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<!--  -->
			</div>
			<div id="fudong"></div>
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
<footer style='background-color:#333'>
	<div class="footer" style="width:1200px;margin:auto;">
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
    .fc_contentS {
        width: 480px;
        height: 390px;
        position: fixed;
        background: #fff;
        left: 50%;
        top: 50%;
        margin-left: -240px;
        margin-top: -175px;
    }
    .fc_contentS li{
        padding: 10px 0;
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
		var c = [];
		var a = $('.sure_gou').find('input')
		for(var i=0;i< a.length;i++){
			if(a[i].checked == true){
				var b = a.eq(i).val()
				c.push(b)
			}
		}
		c.toString()
	})
	//结束订单
	function jskc(oid,id){
//		alert(oid);
//		alert(id);
        $('#fc'+oid).show(500)
        $('#fc_contentS'+oid).show(500)
	}
</script>
</body>
</html>
