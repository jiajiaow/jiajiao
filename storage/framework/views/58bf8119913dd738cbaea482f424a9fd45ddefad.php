<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>个人中心 -德栗</title>
	<link rel="stylesheet" href="<?php echo e(asset('/home/css/style.css')); ?>">
	<script src="<?php echo e(asset('/home/js/jquery.min.js')); ?>"></script>
	<script type="text/javascript">
		function delete_info(id){
			if(confirm("你确定要此信息吗？")){
				document.deleteForm.id.value=id;
				document.deleteForm.action.value="delete";
				document.deleteForm.submit();
			}
		}
		<?php if(Session('tc_phone') == ''): ?>
				alert("请您先登录！");
		window.location.href="<?php echo e(URL('/login.html')); ?>";
		<?php endif; ?>
	</script>
</head>
<body>
<script src="<?php echo e(asset('/home/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('/home/js/jquery.form.js')); ?>"></script>
<div id="header" class="fixed-header">
	<div class="top-info">
		<div class="container">
			<div class="logo pull-left">
				<a href="" class="pull-left"></a>
				<?php if(session('Template') == '1'): ?>
					<img style="width:40px;height:40px;" src="<?php echo e(asset('/home/image/logo.png')); ?>" alt="">
				<?php else: ?>
					<img style="width:40px;height:40px;" src="/delijiajiao/images/logo.png" alt="">
				<?php endif; ?>
				<a href="<?php echo e(URL('/teacherinfo.html')); ?>" class="pull-right user">个人中心</a>
				<div class="clear"></div>
			</div>
			<div class="right-info pull-right">
				<ul>
					<li>
						<a href="/">返回首页</a>
					</li>
					<li>
						<a href="xueyuan.html" target="_blank">最新家教信息</a>
					</li>
					<li>
						<a  href="/teacher/detail/<?php echo e($list->id); ?>.html" >简历预览</a>
					</li>
					<li class="last">
						<a href="<?php echo e(URL('/outlogin.html')); ?>"><img src="<?php echo e(asset('/home/image/exit.png')); ?>" alt="退出" title="退出"></a>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div id="pcontent">
	<div class="container">
		<div class="tab-box">
			<div class="left-nav pull-left">
				<ul>
					<li class=""><a href="">个人资料</a><span><img src="<?php echo e(asset('/home/image/arrow_right.png')); ?>"></span></li>
					<li class=""><a href="">身份认证</a><span><img src="<?php echo e(asset('/home/image/arrow_right.png')); ?>"></span></li>
					
					<li class=""><a href="">申请记录</a><span><img src="<?php echo e(asset('/home/image/arrow_right.png')); ?>"></span></li>
					<li class=""><a href="">成功记录</a><span><img src="<?php echo e(asset('/home/image/arrow_right.png')); ?>"></span></li>
					
					<li class=""><a href="">投诉中心</a><span><img src="<?php echo e(asset('/home/image/arrow_right.png')); ?>"></span></li>
					<li class=""><a href="">重置密码</a><span><img src="<?php echo e(asset('/home/image/arrow_right.png')); ?>"></span></li>
					<div class="aa"><a href="/tc_order1.html">我的订单</a></div>
				</ul>
			</div>
			<div class="right-cont pull-right" style="min-height: 661px;">
				<div class="tab-cont active">
					<div class="welcome" style="">
						<div class="top-info">
							<div class="left-img pull-left">
								<div class="in-img">
									<img src="<?php echo e($list->tc_photo); ?>">
								</div>
							</div>
							<div class="right-info">
								<!-- <h4>欢迎您！尊敬的<i>认证</i>教员：<i></i></h4> -->
								<h4><?php echo e($list->tc_name); ?></h4>
								<h4>教员编号：<i>T<?php echo e($list->id); ?></i></h4>
								<h4>余&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;额：<i>￥0</i></h4>
								
								
										<!-- <span>登录：550次</span></small> -->
								<p>认证情况：<span><?php echo e($list->tc_audit=='0'?"本站尚未审核您的真实证件":"您已通过本站的真实证件审核"); ?></span></p>
								<!--<p>上次认证时间：<span>2009-01-08</span></p>-->
								
								</div><small>
								<div class="clear"></div>
							</small></div><small>
							<div class="bottom-sign">
								<div class="big-tit">
									<img src="<?php echo e(asset('/home/image/wtitle.png')); ?>">
								</div>
								<div class="section" style="width:65%;float:left;">
									<div class="small-tit">
										<span><img src="<?php echo e(asset('/home/image/one.png')); ?>"></span>
										<h4>加微信，随时查</h4>
									</div>
									<p style="font-size:18px;">扫一扫，加关注，及时查看家教订单，接单快人一步！</p>
									<p style="font-size:18px;">还可随时申请订单。</p>
								</div>
								<div class="section" style="width:35%;float:right">
									<img src="<?php echo e(asset('/home/image/weixinerweima.jpg')); ?>" style="width:90px;height:90px">
								</div>
								<div class="clear"></div>
								<div class="section">
									<div class="small-tit">
										<span><img src="<?php echo e(asset('/home/image/two.png')); ?>"></span>
										<h4>上传形象照，更出彩</h4>
									</div>
									<p style="font-size:18px;">阳光、健康、专业的形象照，增加您的第一印象分，让家长一眼就选定你，马上动手吧。</p>
									<a style="font-size:18px;" href="javascript:void(0);">上传形象照</a>
								</div>
								<div class="section">
									<div class="small-tit">
										<span><img src="<?php echo e(asset('/home/image/three.png')); ?>"></span>
										<h4>简历详尽，突出优势</h4>
									</div>
									<p style="font-size:18px;">尽量将您的资料填写详细，并突出您的特长和家教相关经验，以方便家长及德栗家教工作人员选择、推荐。好的简历，事半功倍，可以大大增加您的接单率！</p>
									<a style="font-size:18px;" href="/teacher/detail/<?php echo e($list->id); ?>.html" >简历预览</a>
									
								</div>
								<div class="section">
									<div class="small-tit">
										<span><img src="<?php echo e(asset('/home/image/four.png')); ?>"></span>
										<h4>网上认证，机会更多</h4>
									</div>
									<p style="font-size:18px;">请您尽快将证件（如身份证、学生证、毕业证、家教资料证或相关的在职证明等）到网站上传进行身份验证，认证的教员我们将优先推荐家教。</p>
									
								</div>
							</div>
						</small></div><small>
						<div class="resume" style="">
							<div class="top">
								<small>
									
									
									
									<h3><?php echo e($list->tc_name); ?>（编号：T<?php echo e($list->id); ?>）</h3>
								</small>
							</div>
							<dl>
								<dt> | <?php echo e($list->tc_sex=='2'?"女":"男"); ?> | </dt>
								<dd>
									毕业学校：
									<span><?php echo e($list->tc_school); ?></span>
								</dd>
								<dd>
									专　　业：
									<span><?php echo e($list->tc_zhuanye); ?></span>
								</dd>
								<dd>
									籍　　贯：
									<span><?php echo e($list->tc_jiguan); ?></span>
								</dd>
								<dd>
									学　　校：
									<span><?php echo e($list->tc_hsam); ?></span>
								</dd>
								<dd>
									学校位置：
									<span></span>
								</dd>
								<dd>
									家庭位置：
									<span><?php echo e($list->tc_jiguan); ?></span>
								</dd>
							</dl>
							<div class="clear"></div>
							<div class="bottom">
								<div class="list">
									<div class="section">
										<h4>自我评价</h4>
										<p><?php echo e($list->tc_comments); ?></p>
									</div>
									<div class="section">
										<h4>可授科目</h4>
										<p><?php echo e($list->tc_subjects); ?></p>
									</div>
									<div class="section">
										<h4>授课区域</h4>
										<p><?php echo e($list->tc_area); ?></p>
									</div>
									<div class="section">
										<h4>所获证书</h4>
										<p><?php echo e($list->tc_certificate); ?></p>
									</div>
									<div class="section">
										<h4>辅导方式</h4>
										<p><?php echo e($list->tc_tutoring); ?></p>
									</div>
									<div class="section">
										<h4>家教经验</h4>
										<p><?php echo e($list->tc_jl); ?>年</p>
									</div>
									<div class="section">
										<h4>薪水要求</h4>
										<p>
											<?php if($list->tc_salary == ''): ?>
												执行德栗家教收费标准
											<?php else: ?>
												$list->tc_salary
											<?php endif; ?>
										</p>
									</div>
								</div>
								<div class="tel">
									<h4>预约中心电话：021-61300114</h4>
									<small>（工作时间：<i>9:00-20:30</i>）（预约时，请提供此教员的编号：<i>T<?php echo e($list->id); ?></i>）</small>
								</div>
								<table>
									<caption>老师在德栗的成功家教记录</caption>
									<thead>
									<tr>
										<th>订单号</th>
										<th>年级科目</th>
										<th>接单日期</th>
										<th>状态</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>订单号</td>
										<td>订单号</td>
										<td>订单号</td>
										<td>订单号</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</small></div><small>
					<div class="tab-cont " style="font-size:1.0rem">
						<div class="personal-data">
							<h3>请完善您的个人资料，方便为您匹配家教订单</h3>
							<form action="<?php echo e(URL('/doteacherinfo.html')); ?>" method="post" id="form1" enctype="multipart/form-data">
								<div class="top">
									<input type="file" id="upfile" name="upfile[]" style="display:none" onchange="TemporaryMedia()" accept="image">
									<div class="left-img">
										<img id="touxiang_src" src="<?php echo e($list->tc_photo); ?>">
									</div>
									<a href="javascript:void(0)" id="bjtx">点击编辑头像</a>
									<div class="clear"></div>
								</div>


								<div class="fg">
									
									<label for="">姓　　名：</label>
									<input type="text" name="tc_name" value="<?php echo e($list->tc_name); ?>" class="name" maxlength="4"/>
									<input type="hidden" name="tc_photo" value="<?php echo e($list->tc_photo); ?>"/>
									<p></p>
								</div>
								<div class="fg">
									<label for="">密　　码：</label>
									<input type="password" name="tc_pwss" value="<?php echo e(substr($list->tc_pass,0,6)); ?>"/>
								</div>
								<div class="fg">
									<label for="">Q　　 Q：</label>
									<input type="text" name="tc_qq" value="<?php echo e($list->tc_qq); ?>"/>
								</div>
								<div class='fg'>
									<label for="">微　　信：</label>
									<input type="text" name="tc_wechat" value="<?php echo e($list->tc_wechat); ?>"/>
								</div>
								<div class="fg">
									<label for="">邮　　箱：</label>
									<input type="text" name="email" value="<?php echo e($list->tc_email); ?>"/>
								</div>
								<div class="fg">
									<label for="">手　　机：</label>
									<input type="tel" name="tc_phone" value="<?php echo e($list->tc_phone); ?>"/>
								</div>
								<div class='fg'>
									<label for="">备用手机：</label>
									<input type="tel" name="phone_bak" value="<?php echo e($list->tc_phone_bak); ?>"/>
								</div>
								<div class='fg'>
									<label for="">邀请码：</label>
									<input type="tel" name="tc_yqm" value="<?php echo e($list->tc_yqm); ?>"/>
								</div>
								<div class="fg">
									<label for="" style="font-size:16px">所在城市：</label>
									<select name="suozaidi" id="cid1" maxlength="20" >
										<option >--请选择--</option>
										
												
										
									</select>

									<select id='city1' class='form-control m-b' name='szd' maxlength='20' >
										<option ><?php echo e($list->tc_citys==''?'--请选择--':$list->tc_citys); ?></option>
									</select>
									<label for="" class="left" style="font-size:16px"></label>
								   
								</div>
								<div class="fg">
									<label for="" style="font-size:16px">暑假所在城市：</label>
									<select name="shuj" id="cid2" maxlength="20" ><option>--请选择--</option></select>
									
									<!---->
									<select id='city2' class='form-control m-b' name='shu' maxlength='20'>
										<option><?php echo e($list->tc_shu==''?'--请选择--':$list->tc_shu); ?></option>
									</select>
								</div>
								<div class="fg">
									<label for="" style="font-size:16px">寒假所在城市：</label>
									<select name="hanj" id="cid3" maxlength="20"><option>--请选择--</option></select>
									
									<select id='city3' class='form-control m-b' name='han' maxlength='20'>
										<option><?php echo e($list->tc_han==''?'--请选择--':$list->tc_han); ?></option>
									</select>
								</div>
								<div class='fg'>
									<!-- 学校是下拉+手动输入-->
									<label for="">学　　校：</label>
									<select name="tc_school" autocomplete="off">
										<?php $__currentLoopData = $xuexiao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($xx->school_name); ?>" <?php echo e($list->tc_school==$xx->school_name?'selected':''); ?>><?php echo e($xx->school_name); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<option >如无上述学校请手动输入</option>
										<input style="width:300px;" name="tc_school_bak" type="text" value="<?php echo e($list->tc_school_bak); ?>" placeholder="请手动输入"/>
									</select>
								</div>
								<div class="fg sex">
									<label for="">性　　别：</label>
									<?php if($list->tc_sex=='1'): ?>
										<input type="radio" name="sex" value="1" checked><span>男</span>
										<input type="radio" name="sex" value="0"><span>女</span>
									<?php elseif($list->tc_sex=='0'): ?>
										<input type="radio" name="sex" value="1" ><span>男</span>
										<input type="radio" name="sex" value="0" checked><span>女</span>
									<?php elseif($list->tc_sex==''): ?>
										<input type="radio" name="sex" value="1" checked><span>男</span>
										<input type="radio" name="sex" value="0"><span>女</span>
									<?php endif; ?>

								</div>

								<div class='fg'>
									<!-- 年级是下拉，后台抓取数据option-->
									<label for="">年　　级：</label>
									<select name="nj" id="" autocomplete="off">
										<option value="大一" <?php echo e($list->tc_nj=='大一'?'selected':''); ?>>大一</option>
										<option value="大二" <?php echo e($list->tc_nj=='大二'?'selected':''); ?>>大二</option>
										<option value="大三" <?php echo e($list->tc_nj=='大三'?'selected':''); ?>>大三</option>
										<option value="大四" <?php echo e($list->tc_nj=='大四'?'selected':''); ?>>大四</option>
										<option value="大五" <?php echo e($list->tc_nj=='大五'?'selected':''); ?>>大五</option>
										<option value="研一" <?php echo e($list->tc_nj=='研一'?'selected':''); ?>>研一</option>
										<option value="研二" <?php echo e($list->tc_nj=='研二'?'selected':''); ?>>研二</option>
										<option value="研三" <?php echo e($list->tc_nj=='研三'?'selected':''); ?>>研三</option>
										<option value="本科毕业" <?php echo e($list->tc_nj=='本科毕业'?'selected':''); ?>>本科毕业</option>
										<option value="研究生毕业" <?php echo e($list->tc_nj=='研究生毕业'?'selected':''); ?>>研究生毕业</option>
										<option value="博士在读" <?php echo e($list->tc_nj=='博士在读'?'selected':''); ?>>博士在读</option>
										<option value="博士毕业" <?php echo e($list->tc_nj=='博士毕业'?'selected':''); ?>>博士毕业</option>
										<option value="专职老师" <?php echo e($list->tc_nj=='专职老师'?'selected':''); ?>专职老师</option>
									</select>
									<p></p>
								</div>
								<div class='fg'>
									<label for="">任教学校或机构：</label>
									<input style="width:460px;"  type="text" name="teaches" value="" class="" placeholder="仅专职老师填写任教学校或机构，此项对外不公布，请放心填写
">

								</div>
								<div class="fg">
									<label for="">高中文理：</label>
									<select name="tc_class" id="" autocomplete="off">
										<option value="理科" <?php echo e($list->tc_class=="理科"?'selected':''); ?>>理科</option>
										<option value="文科" <?php echo e($list->tc_class=="文科"?'selected':''); ?> >文科</option>
										<option value="未分科"<?php echo e($list->tc_class=="未分科"?'selected':''); ?> >未分科</option>
									</select>
								</div>
								<div class="fg sfg">
									<label for="">高中母校：</label>
									<input type="text"  name="tc_hsam" value="<?php echo e($list->tc_hsam); ?>"/>
								</div>
								<!--城市-->
								<div class="fg">
									<label for="" style="font-size:16px">高考所在地：</label>
									
									<select name="gk" id="cid4" maxlength="20" ><option>--请选择--</option></select>
									<select id='city4' class='form-control m-b' name='gaokao' maxlength='20'><option><?php echo e($list->tc_hight==''?'--请选择--':$list->tc_hight); ?></option></select>
								</div>
								<!--	<div class="fg tel">
										<label for="">手　　机：</label>
										<input type="text" name="mobile" value="" class="phone" maxlength="11">
										<p></p>
									</div>-->
								<div class="fg sfg">
									<label for="">出生年月：</label>
									<input type="text" name="tc_years" value="<?php echo e($list->tc_years); ?>" placeholder="格式：1991-12-24"/>
								</div>

								<div class="fg">
									<label for="" style="font-size:16px">籍　　贯：</label>
									<select name="jg" id="cid5" maxlength="20" ><option>--请选择--</option></select>
									
									<select id='city5' class='form-control m-b' name='jiguan' maxlength='20'><option><?php echo e($list->tc_jiguan==''?'--请选择--':$list->tc_jiguan); ?></option></select>
								</div>
								<div class="fg sfg">
									<label for="">专业类别：</label>
									<select name="zhuanye" id="" autocomplete="off">
									   <?php $__currentLoopData = $zhuanye; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($zy->type_name); ?>" <?php echo e($zy->type_name==$list->tc_zhuanye?'selected':''); ?>><?php echo e($zy->type_name); ?></option>
									   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
									<label for="">具体专业：</label>
									<input type="text" name="tc_spl" value="<?php echo e($list->tc_spl); ?>"/>
								</div>
								<div class='fg sfg'>
									<!-- 后台抓取城市option是区-->
									<label for="">目前住所：</label>
									<select class="form-control m-b"  name='qu' maxlength='20' autocomplete="off">

										<?php $__currentLoopData = $qu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($q->county_name); ?>" <?php echo e($list->tc_citys==$q->county_name?'selected':''); ?>><?php echo e($q->county_name); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
									<input type="text" name="tc_now_lives" value="" placeholder="可以手动输入"/>
								</div>

								<div class="fg sfg">
									<label for="">教员身份：</label>
									<select id="indentity" name="tc_type" aria-invalid="false" class="help-block m-b-none" autocomplete="off">
										<option>--请选择--</option>
										<option value="大学生"<?php echo e($list->tc_type=='大学生'?'selected':''); ?>>大学生</option>
										<option value="专职老师" <?php echo e($list->tc_type=='专职老师'?'selected':''); ?>>专职老师</option>
										<option value="其他" <?php echo e($list->tc_type=='其他'?'selected':''); ?>>其他老师</option>
									</select>
								</div>
								<div class='fg sfg'>
									<label for="">教　　龄：</label>
									<select name="tc_jl" id="" autocomplete="off">
										<option value="1年以内" <?php echo e($list->tc_jl=='1年以内'?'selected':''); ?>>1年以内</option>
										<option value="1年" <?php echo e($list->tc_jl=='1年'?'selected':''); ?>>1年</option>
										<option value="2年" <?php echo e($list->tc_jl=='2年'?'selected':''); ?>>2年</option>
										<option value="3年" <?php echo e($list->tc_jl=='3年'?'selected':''); ?>>3年</option>
										<option value="4年" <?php echo e($list->tc_jl=='4年'?'selected':''); ?>>4年</option>
										<option value="4年以上" <?php echo e($list->tc_jl=='4年以上'?'selected':''); ?>>4年以上</option>
									</select>
								</div>
								<button type="submint" onclick="AlertInfo()" class="btnSubmit">保存</button>
							</form>
							<div class="tech-info">
								<div class="show-box">
									<div class="tit">
										<h4>教学信息</h4>
										<a href="" class="edit" id="bj"><img src="<?php echo e(asset('/home/image/pen.png')); ?>">编辑</a>
									</div>
									<ul class="out">
										<li>授课科目：<span><?php echo e($list->tc_subjects); ?></span></li>
										<li >授课区域：<span id="quyu"><?php echo e($list->tc_area); ?></span></li>
										<li>辅导方式：<span><?php echo e($list->tc_tutoring); ?></span></li>
										<li>课酬要求：<span><?php echo e($list->tc_salary); ?></span></li>
										
									</ul>
									<script type="text/javascript">
										$('#bj').click(function(){
										   // var qian = $('#quyu').html();
										   // alert(qian);

											$('#quyu').html('');
										   // $('#quyu').html(qian);
																					})
									</script>
									<div class="clear"></div>
								</div>
								<div class="hide-box">
									<form action=""  method="post" id="areaandnode">
										<div class="li-box">
											
											<div class="left pull-left top-left">
												<div class="fg">
													<label for="">教授科目：</label>
													<select id="FirstJob" name="" onchange="check_chose()" autocomplete="off">
														<?php $__currentLoopData = $yiji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($yj->id); ?>" selected=""><?php echo e($yj->yiji); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													 </select>
												</div>
												<?php $__currentLoopData = $yiji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<ul width="197" class="chose hidden_class_node" id="chose_<?php echo e($yj->id); ?>" style="display:none">
													<?php $__currentLoopData = $erji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ej): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php if($ej->yiji_id == $yj->id): ?>
														<?php $__currentLoopData = $sanji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<?php if($sj->erji_id == $ej->id): ?>
																<li onclick="addnode('<?php echo e($sj->sanji); ?>')" data-val ue="<?php echo e($sj->sanji); ?>"><?php echo e($sj->sanji); ?></li>
															<?php endif; ?>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<?php endif; ?>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</ul>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<ul  width="197" class="chose hidden_class_node" id="chose_6" style="display:none">
													<input style="width:100%;height:100%;"  type="text" name="tc_subjects2" value='上面没有的，课教授课程，请直接填写'/>
												</ul>
											</div>
											<div class="right pull-left tright">
												<ul>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
													<li><span></span><em></em></li>
												</ul>
											</div>
											<div class="clear"></div>
										</div>
										<input type="hidden" name="tc_subjects" id="first_subject" value="">
										<script type="text/javascript">


											function deleteid(id)
											{
												var old_id = $("#first_subject").val();
												var old_arr = old_id.split(",");
												var len = old_arr.length;
												var new_arr = {};
												var j=0;
												for(var i=0;i<len;i++)
												{
													if(old_arr[i] !="" && old_arr[i] != id)
													{
														new_arr[j] = old_arr[i];
														j++;
													}
												}
												var new_id = "";
												for(var i=0;i<j;i++)
												{
													new_id = new_id + ","+new_arr[i];
												}
												$("#first_subject").val(new_id);
											}
											function check_chose(){
												var value = $("#FirstJob").val();
												$(".hidden_class_node").hide();
												$("#chose_"+value).show();
											}
											function addnode(id){
												var old_id = $("#first_subject").val();
												//alert(id);
												old_id = old_id + "," + id;

												$("#first_subject").val(old_id);
											}
											//授课区域
											function addnodes(id){
												var jiu = $("#tc_area").val();
												//alert(id);
												jiu = jiu + "," + id;
												//alert(jiu);
												//alert(jiu);
												$("#tc_area").val(jiu);
												$("#quyu").html(jiu);
											}
											//授课时间
											function sksj(id){
												var quyu = $("#quyu").html();
												//alert(id);
												quyu = quyu + "," + id;

												$("#quyu").html();
												//$("#quyu").html()+=quyu;
											}
										</script>
										<!-- 可授课区域-->
										<div class="tfg">
											<label for="">
												可授课区域
											</label>
											<div style="width:500px;" id="">
												<?php $__currentLoopData = $qu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quyu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<input name="" onclick="addnodes('<?php echo e($quyu->county_name); ?>')"  type="checkbox" value="<?php echo e($quyu->county_name); ?>" style="margin:10px 0px 10px 0px;" /><?php echo e($quyu->county_name); ?>

													
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<input type="hidden" name="tc_area" id="tc_area" value="">
													<input type="hidden" name="tc_id" id="" value="<?php echo e($list->id); ?>">
											</div>

										</div>
										<div class='tfg'>
											<label for="">可授课时间</label>
											<table class="kuandu">
												
													
													
													
													
													
													
													
													
													

												
												<tr>
													<td>上午</td>
													<td><input type="checkbox" id="all" name="" />全选</td>
													<td><input class="X" type="checkbox" name="time[]" value="周一上午"/>周一</td>
													<td><input class="X" type="checkbox" name="time[]" value="周二上午"/>周二</td>
													<td><input class="X" type="checkbox" name="time[]" value="周三上午"/>周三</td>
													<td><input class="X" type="checkbox" name="time[]" value="周四上午"/>周四</td>
													<td><input class="X" type="checkbox" name="time[]" value="周五上午"/>周五</td>
													<td><input class="X" type="checkbox" name="time[]" value="周六上午"/>周六</td>
													<td><input class="X" type="checkbox" name="time[]" value="周日上午"/>周日</td>
												</tr>
												<tr>
													<td>下午</td>
													<td><input type="checkbox" onclick="cheng(this.checked)"/>全选</td>
													<td><input class="x" type="checkbox" name="time[]" value="周一下午"/>周一</td>
													<td><input class="x" type="checkbox" name="time[]" value="周二下午"/>周二</td>
													<td><input class="x" type="checkbox" name="time[]" value="周三下午"/>周三</td>
													<td><input class="x" type="checkbox" name="time[]" value="周四下午"/>周四</td>
													<td><input class="x" type="checkbox" name="time[]" value="周五下午"/>周五</td>
													<td><input class="x" type="checkbox" name="time[]" value="周六下午"/>周六</td>
													<td><input class="x" type="checkbox" name="time[]" value="周日下午"/>周日</td>
												</tr>
												<tr>
													<td>晚上</td>
													<td><input type="checkbox" id="li" />全选</td>
													<td><input class='li' type="checkbox" name="time[]" value="周一晚上" />周一</td>
													<td><input class='li' type="checkbox" name="time[]" value="周二晚上" />周二</td>
													<td><input class='li' type="checkbox" name="time[]" value="周三晚上" />周三</td>
													<td><input class='li' type="checkbox" name="time[]" value="周四晚上" />周四</td>
													<td><input class='li' type="checkbox" name="time[]" value="周五晚上" />周五</td>
													<td><input class='li' type="checkbox" name="time[]" value="周六晚上" />周六</td>
													<td><input class='li' type="checkbox" name="time[]" value="周日晚上" />周日</td>

												</tr>
											</table>

										</div>
										<div class="fg sex fdfs">
											<label for="">辅导方式：</label>
											<input type="checkbox" name="teach_mode[]" value="本人上门"><span>本人上门</span>
											<input type="checkbox" name="teach_mode[]" value="学生上门"><span>学生上门</span>
											<input type="checkbox" name="teach_mode[]" value="网上辅导"><span>网上辅导</span>
										</div>
										<div class="fg">
											<label for="">课酬要求：</label>
											<input type="text" name="pay" placeholder="执行德栗家教收费标准" class="imoney" value="<?php echo e($list->tc_salary); ?>">
											<a style="color:#e4393c;" href="/zfsm.html" >查看更多收费标准</a>
										</div>
										<input type="hidden" name="type" value="1">
										<button type="reset" class="reset">取消</button>
										<button type="submit" class="tsubmit" onclick="savenodearea();">保存</button>
										<div class="clear"></div>
									</form>
									<script>
										function savenodearea()
										{
											$.ajax({
												url:'/dokemu.html',
												type:"post",
												data:$("#areaandnode").serialize(),
												success:function(data)
												{
													if(data == 'y'){
														layer.alert('保存成功，请继续填写下列教学经验。',{icon:6,time:2000});
													}
												}
											})
										}
//                                        alert('保存成功！');
									</script>
								</div>
							</div>
							<div class="tech-exp">
								<div class="show-box">
									<div class="tit">
										<h4>教学经验</h4>
										<a href="" class="edit"><img src="<?php echo e(asset('/home/image/pen.png')); ?>">编辑</a>
									</div>
									<ul class="out">
										<li>自我描述：<span><?php echo e(subtext($list->tc_comments,10)); ?></span></li>
										<li>所获证书：<span><?php echo e($list->tc_certificate); ?></span></li>
										<li>家教简历：<span><?php echo e(subtext($list->tc_case,20)); ?></span></li>

									</ul>
									<div class="clear"></div>
								</div>
								<div class="hide-box">
									<form action="" id="othersave2" enctype= multipart/form-data >
										<div class="tfg" style="margin-top: 0px;">
											<label for="">自我描述：</label><br/>
											
											<textarea name="tc_comments" class="tfg-area" placeholder="注：写的越详细，家长会觉得你越负责，也越了解你的情况，将增加家长对你的好感，大幅增加成功接单的概率。" class="al"><?php echo e($list->tc_comments); ?></textarea>
										</div>
										<div class="fg">
											<label for="">所获证书：</label>
											<input type="" name="zs" placeholder="示例：大学六级英语/雅思8.0分" class="shzs" value="<?php echo e($list->tc_certificate); ?>">
										</div>
										<div>
											<label  for="">上传证书：</label>
											<div>
												<div>
													<input type="file" id="up" name="file" accept="image"  >
													<input type="hidden" name="id" value="<?php echo e($list->id); ?>" accept="image"  >
												</div>
												
												
											</div>
											<br/>
											
										</div>

										<div class="tfg" >
											<label for="">家教简历：</label>
											<br/>
											
											<div>
												<div style="height: 180px;">
													<div style="float:left;margin-right:10px">
														<span>时间</span>
														<br />
														<input type="text" name="tc_casetime" value="<?php echo e($list->tc_casetime); ?>" placeholder="请手动输入时间">
													</div>

													<div style="float:left; margin-right:5px;">
														<span>教授科目</span>
														<br />
														<select name="sjkm" id="" autocomplete="off">
															<?php $__currentLoopData = $km; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($k->sanji); ?>" <?php echo e($k->sanji==$list->tc_sjkm?'selected':''); ?>><?php echo e($k->sanji); ?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</select>
													</div>
													<div style="float:left;">
														<span>教授结果</span>
														<br />
														<textarea class="tfg-area" name="tc_case" id="" cols="30" rows="10" placeholder="例如：学生成绩从50分左右增加到90分左右。学生和家长都对我的教员非常满意，我也很高兴付出的努力得到了回报。"><?php echo e($list->tc_case); ?></textarea>
													</div>

												</div>


											</div>
										</div>
										<div class="tfg" >
											<label for="">家教简历：</label>

											<div>
												<div style="height: 180px;">
													<div style="float:left;margin-right:10px">
														<span>时间</span>
														<br />
														<input type="text" name="tc_casetime2" value="<?php echo e($list->tc_casetime2); ?>" placeholder="请手动输入时间">
													</div>

													<div style="float:left; margin-right:5px;">
														<span>教授科目</span>
														<br />
														<select name="sjkm2" id="" autocomplete="off">
															<?php $__currentLoopData = $km; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<option value="<?php echo e($k->sanji); ?>" <?php echo e($k->sanji==$list->tc_sjkm2?'selected':''); ?>><?php echo e($k->sanji); ?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</select>
													</div>
													<div style="float:left;">
														<span>教授结果</span>
														<br />
														<textarea class="tfg-area" name="tc_case2" id="" cols="30" rows="10" placeholder="例如：学生成绩从50分左右增加到90分左右。学生和家长都对我的教员非常满意，我也很高兴付出的努力得到了回报。"><?php echo e($list->tc_case2); ?></textarea>
													</div>

												</div>


											</div>
										</div>
										<div class="tfg" >
											<label for="">家教简历：</label>

											<div>
												<div style="height: 180px;">
													<div style="float:left;margin-right:10px">
														<span>时间</span>
														<br />
														<input type="text" name="tc_casetime3" value="<?php echo e($list->tc_casetime3); ?>" placeholder="请手动输入时间">
													</div>

													<div style="float:left; margin-right:5px;">
														<span>教授科目</span>
														<br />
														<select name="sjkm3" id="" autocomplete="off">
															<?php $__currentLoopData = $km; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<option value="<?php echo e($k->sanji); ?>" <?php echo e($k->sanji==$list->tc_sjkm3?'selected':''); ?>><?php echo e($k->sanji); ?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</select>
													</div>
													<div style="float:left;">
														<span>教授结果</span>
														<br />
														<textarea class="tfg-area" name="tc_case3" id="" cols="30" rows="10" placeholder="例如：学生成绩从50分左右增加到90分左右。学生和家长都对我的教员非常满意，我也很高兴付出的努力得到了回报。"><?php echo e($list->tc_case3); ?></textarea>
													</div>
														<script>
															function areaBorder(){
																var a = $('.hide-box').find('.tfg-area')
																for(var i=0;i< a.length;i++){
																	if(a.eq(i).val()==''){
																		a.eq(i).css('border-color','#ccc')
																	}else{
																		a.eq(i).css('border-color','#676767')
																	}

																}


																a.blur(function(){
																	if($(this).val()==''){
																		$(this).css('border-color','#ccc')
																	}else{
																		$(this).css('border-color','#676767')
																	}
																})
															}
															areaBorder()
														</script>
												</div>


											</div>
										</div>
										<button type="reset" class="reset">取消</button>
										<button type="submit" class="bsubmit" onclick="upTp();alert('保存成功！')">保存</button>
										<div class="clear"></div>
									</form>
									<script>
										function savenodearea2()
										{
											$.ajax({
												url:'/docase',
												type:"post",
												data:$("#othersave2").serialize(),
												success:function(data)
												{

												}
											})
										}
									</script>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-cont " style="font-size:1.0rem">
						<div class="authentication">
							<h3>请一次上传所有证件，否则将不能为您匹配家教订单</h3>
							<div class="up-img top-up">
								<h4>上传身份证照片</h4>
								<div class="left pull-left">
									<div class="img">
										<img src="<?php echo e($list->tc_id_photo); ?>" width="248" height="155" alt="">
									</div>
									<p>请确保身份证信息和您填写的个人信息一致，图片 限jpg、gif、png格式,200k以内。</p>
									<form action="/upsfz" method="post" enctype="multipart/form-data" id="sfz">
										<input type="file" class="loca" name="upfile" onchange="javascript:$(&#39;#sfz&#39;).submit()" accept="image">
										<input type="hidden" name="phone" value="<?php echo e($list->id); ?>">
										
										<input type="hidden" name="zt" value="1">
										<div class="fg">
											<button type="submit" class="uper">上传身份证照片</button>
										</div>
									</form>
								</div>
								<div class="right pull-right">
									<div class="img">
										<img src="<?php echo e(asset('/home/image/sl_1.png')); ?>" alt="">
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						
						<div class="authentication">
							<div class="up-img top-up">
								<h4>上传学生证照片</h4>
								<div class="left pull-left">
									<div class="img">
										<img src="<?php echo e($list->tc_xszimage); ?>" width="248" height="155" alt="">
									</div>
									<p>请确保学生证信息和您填写的个人信息一致，图片 限jpg、gif、png格式,200k以内。</p>
									<form action="/upxsz" method="post" enctype="multipart/form-data" id="xsz">
										<input type="file" class="loca" name="upfile" onchange="javascript:$(&#39;#xsz&#39;).submit()" accept="image">
										<input type="hidden" name="zt" value="2">
										<div class="fg">
											<button type="submit" class="uper">上传学生证照片</button>
										</div>
									</form>
								</div>
								
								<div class="clear"></div>
							</div>
						</div>
					</div>
					
					<div class="tab-cont  ">
						<div class="application">
							<div class="section">
								<h3><i></i>您的订单申请记录</h3>
								<p>如下是您最近申请过的订单，某些申请记录可能因为特殊原因未被展示。</p>
							</div>
							<table>
								<caption>家教申请记录</caption>
								<thead>
								<tr>
									<th>订单号</th>
									<th>申请时间</th>
									<th>年级科目</th>
									<th>状态</th>
									<th>备注</th>
								</tr>
								</thead>
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-cont ">
						<div class="succeed">
							<div class="section">
								<h3><i></i>您的成功家教记录</h3>
								<p>成功记录是您过往在德栗家教接受聘用并持续任教的历史记录，成功记录丰富，学员将会更愿意选择您任教。</p>
							</div>
							<table>
								<caption>家教记录</caption>
								<thead>
								<tr>
									<th>订单号</th>
									<th>申请时间</th>
									<th>年级科目</th>
									<th>家长姓名</th>
									<th>家长电话</th>
									<th>状态</th>
								</tr>
								</thead>
								<tbody>
								   
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="tab-cont ">
						<div class="complain">
							<form action="" method="post">
								<div class="fg">
									<label for="" style="font-size:16px">主题：</label>
									<input type="text" name="title" maxlength="30">
								</div>
								<div class="fg fl">
									<label for="" style="font-size:16px">分类：</label>
									<input type="radio" name="type" value="1"><span>投诉</span>
									<input type="radio" name="type" value="2"><span>建议</span>
								</div>
								<div class="tfg">
									<label for="" style="font-size:16px">描述：</label>
									<textarea name="message" id="message" maxlength="100"></textarea>
								</div>
								<div class="fg">
									<label for="" style="font-size:16px">
										如果是投诉退款相关问题，请提交相应订单号：
									</label>
									<input type="text" name="order_id">
								</div>
								<button type="submit">提交</button>
							</form>
						</div>
					</div>
					<div class="tab-cont ">
						<div class="resetting">
							<h3>修改密码</h3>
							<form action="/doeditpass" method="post" >
								<div class="fg">
									<label for="" style="font-size:13px;">手　　机　　号：</label>
									<input type="text" id="uname" name="phone" placeholder="手机号" maxlength=11>
								</div>
								
								<div class="fg">
									<label for="" style="font-size:13px;">新　　密　　码：</label>
									<input type="password" name="onepass" id="newpassword" placeholder="新密码">
								</div>
							
								<div class="fg">
									<input type="button" style="width:100px;background:#F7B529;color:black;cursor: pointer;" onclick="sendMsg()" value="忘记密码" id="djs">
									<input type="text" style="width:210px" id="mobile_code" name="mobile_code" placeholder="验证码" class="password">
								</div>
								<button type="submit">确认修改</button>
							</form>
							<script>
								function checkpassword()
								{
									var p1 = $("#newpassword").val();
									var p2 = $("#confirmnewpassword").val();

									if(p1 != p2)
									{
										alert("两次密码不一致");
										return false;
									}
									if(p1.length < 6)
									{
										alert("密码长度应大于6位");
										return false;
									}
									return true;

								}
							</script>
						</div>
					</div>
				</small></div><small>
				<div class="clear"></div>
			</small></div><small>
		</small></div><small>
	</small></div><small>
	<div id="footer" style="height:100px">
		<div class="pfoot" style="height:100px;padding:40px 0">
			<div class="container">
				<p>Copyright2007－2017广州学求易教育咨询有限公司 版权所有 All rights reserved</p>
			</div>
		</div>
	</div>


	<script src="<?php echo e(asset('/home/js/script.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('/home/js/cheng.js')); ?>"></script>
	<script src="<?php echo e(asset('/delijiajiao/js/layer.js')); ?>"></script>
	<script type="text/javascript">
		function TemporaryMedia() {
			//var image0 = $("input[name='file_temporaryImage']").val();
			//判断上传控件中是否选择了图片
			var image = $("#upfile").val();
			if ($.trim(image) == "") {
				alert("请选择图片！");
				return;
			}
			//提交请求处理的url
			var actionUrl = "/member/edit_touxiang.php";
			//开始ajax操作
			$("#form1").ajaxSubmit({

				type: "POST",//提交类型
				url: actionUrl,//请求地址
				data: { "action": "TemporaryImage" },//请求数据
				success: function (data) {//请求成功后的函数
					$("#touxiang_src").attr("src",data);
				},
				error: function (data) { },//请求失败的函数
				async: true
			});

		}
	</script>
	<script type="text/javascript">
		//例：北京市
			$.ajax({
				url:'/sheng',              //请求地址
				type:'post',                //请求方式
				async:true,                 //是否异步
				success:function(data){     //成功回调函数
					console.log(data);
					for (var i = 0; i < data.length; i++) {
						$('#cid1').append("<option value='"+data[i].provice_id+"'>"+data[i].provice_name+"</option>");
						$('#cid2').append("<option value='"+data[i].provice_id+"'>"+data[i].provice_name+"</option>");
						$('#cid3').append("<option value='"+data[i].provice_id+"'>"+data[i].provice_name+"</option>");
						$('#cid4').append("<option value='"+data[i].provice_id+"'>"+data[i].provice_name+"</option>");
						$('#cid5').append("<option value='"+data[i].provice_id+"'>"+data[i].provice_name+"</option>");
					};
				},
				error:function(){
				   // alert('ajax请求失败');  //失败回调
				}
			});

	//-------------------------------------------------------------------
			 //例：北京市 - 市辖区（市辖县）所在城市
			$("#cid1").change(function(){
				$("#city1 option").remove();
				var ob = $(this);
				//alert(ob.val());
				$.ajax({
					url:'/xian',              //请求地址
					type:'post',                //请求方式
					async:true,                 //是否异步
					data:{pid:($(this).val())}, //发送的数据
					dataType:'json',            //响应的数据类型
					success:function(data){     //成功回调函数
					   // console.log(data);
						if(data.length>0){
							//var select = $("<select id='city1' class='form-control m-b' name='szd' maxlength='20' ><option>--请选择--</option></select>")
							for (var i = 0; i < data.length; i++) {
								 $("#city1").append("<option value='" + data[i].city_name + "' selected>" + data[i].city_name + "</option>");
							};
						}
					},
					error:function(){
						//alert('ajax请求失败');  //失败回调
					}
				});
			});
		//例：北京市 - 市辖区（市辖县） 暑假
		$("#cid2").change(function(){
			$("#city2 option").remove();
		   // $(this).nextAll("select").remove();
			var ob = $(this);
			//alert(ob.val());
			$.ajax({
				url:'/xian',              //请求地址
				type:'post',                //请求方式
				async:true,                 //是否异步
				data:{pid:($(this).val())}, //发送的数据
				dataType:'json',            //响应的数据类型
				success:function(data){     //成功回调函数
					console.log(data);
					if(data.length>0){
						//var select = $("<select id='city2' class='form-control m-b' name='shu' maxlength='20'><option>--请选择--</option></select>")
						for (var i = 0; i < data.length; i++) {
							$('#city2').append("<option value='"+data[i].city_name+"'>"+data[i].city_name+"</option>");
						};
					   // ob.after(select);
					}
				},
				error:function(){
					//alert('ajax请求失败');  //失败回调
				}
			});
		});
		//例：北京市 - 市辖区（市辖县） 寒假
		$("#cid3").change(function(){
			$("#city3 option").remove();
		   // $(this).nextAll("select").remove();
			var ob = $(this);
			//alert(ob.val());
			$.ajax({
				url:'/xian',              //请求地址
				type:'post',                //请求方式
				async:true,                 //是否异步
				data:{pid:($(this).val())}, //发送的数据
				dataType:'json',            //响应的数据类型
				success:function(data){     //成功回调函数
					console.log(data);
					if(data.length>0){
					   // var select = $("<select id='city3' class='form-control m-b' name='han' maxlength='20' ><option>--请选择--</option></select>")
						for (var i = 0; i < data.length; i++) {
							$('#city3').append("<option value='"+data[i].city_name+"'>"+data[i].city_name+"</option>");
						};
					   // ob.after(select);
					}
				},
				error:function(){
					//alert('ajax请求失败');  //失败回调
				}
			});
		});
		//例：北京市 - 市辖区（市辖县）
		$("#cid4").change(function(){
			$("#city4 option").remove();
			//$(this).nextAll("select").remove();
			var ob = $(this);
			//alert(ob.val());
			$.ajax({
				url:'/xian',              //请求地址
				type:'post',                //请求方式
				async:true,                 //是否异步
				data:{pid:($(this).val())}, //发送的数据
				dataType:'json',            //响应的数据类型
				success:function(data){     //成功回调函数
					console.log(data);
					if(data.length>0){
						//var select = $("<select id='city4' class='form-control m-b' name='gaokao' maxlength='20'><option>--请选择--</option></select>")
						for (var i = 0; i < data.length; i++) {
							$('#city4').append("<option value='"+data[i].city_name+"'>"+data[i].city_name+"</option>");
						};
					   // ob.after(select);
					}
				},
				error:function(){
					//alert('ajax请求失败');  //失败回调
				}
			});
		});
		//例：北京市 - 市辖区（市辖县）
		$("#cid5").change(function(){
			$("#city5 option").remove();
		   // $(this).nextAll("select").remove();
			var ob = $(this);
			//alert(ob.val());
			$.ajax({
				url:'/xian',              //请求地址
				type:'post',                //请求方式
				async:true,                 //是否异步
				data:{pid:($(this).val())}, //发送的数据
				dataType:'json',            //响应的数据类型
				success:function(data){     //成功回调函数
					console.log(data);
					if(data.length>0){
					   // var select = $("<select id='city5' class='form-control m-b' name='jiguan' maxlength='20' ><option>--请选择--</option></select>")
						for (var i = 0; i < data.length; i++) {
							$('#city5').append("<option value='"+data[i].city_name+"'>"+data[i].city_name+"</option>");
						};
					  //  ob.after(select);
					}
				},
				error:function(){
					//alert('ajax请求失败');  //失败回调
				}
			});
		});
		<?php if(session("msg")): ?>
			 layer.alert('<?php echo e(session("msg")); ?>',{icon:6,time:2000});
		<?php endif; ?>
	</script>
	<script type="text/javascript">
	 /*   $('#sctp').click(function(){
			$('#up').click();
		});*/
		function upTp(){
		   /* var images = $("#up").val();
			if ($.trim(images) == "") {
				alert("请选择图片！");
				return;
			}*/
			var actionUrl = "/docase";

			$("#othersave2").ajaxSubmit({

				type: "POST",//提交类型
				url: actionUrl,//请求地址
				data: { "action": "TemporaryImage" },//请求数据
				success: function (data) {//请求成功后的函数
					$("#src_tp").attr("src",data);
				},
				error: function (data) { },//请求失败的函数
				async: true
			});
		}
		function AlertInfo(){
			var aa = 0
				$("#form1").find("input").each(function () {
					if ($(this).val() == "") {
						aa++
					}
				})
				if(aa == 15){
					alert('请完善资料，详细填写，将大幅提高家长选择你的机会，同时信息均完善的同学才会在前台予以显示哟^-^')
				}

		}
		 function sendMsg(){
			 var mobile = $("#uname").val();
			 var code = $("#vcode").val();

			 if(mobile == null || mobile == ''){
				 layer.alert("请输入手机号", {icon: 5});return false;
			 }
			 var re = /^1[34578]\d{9}$/;
			 if (!re.test(mobile)) {
				 layer.alert("请输入正确手机号",{icon: 5});return false;
			 }
			 //获取验证码
			 getCode();
			 var get_code=$('#djs');
			 time(get_code);
		 }
		 function getCode(){
			 var phone = $("#uname").val();
			 $.ajax({
				 type:'POST',
				 url:"<?php echo e(URL('/docode.html')); ?>",
				 contentType:"application/x-www-form-urlencoded; charset=utf8",
				 data:{"phone":phone,"zt":'修改密码'},
				 /*dataType:'JSON',*/
				 success:(function(result){
					 if(result == 'y'){
						 if(<?php echo e(session('Template')); ?> == '1'){
							 layer.alert('已向您的注册手机'+phone+'发送了验证码，请注意查收。',{icon: 4,time:2000});
						 }else{
							 layer.alert('已向您的注册手机'+phone+'发送了验证码，请注意查收。',{icon: 3,time:2000});
						 }

					 }
					 //console.log(result);
				 }),
				 error:(function(result,status){
					 //console.log(result);
					 //larye.alert('短信sb!');
				 })

			 });
		 }
		 var wait=60;
		 function time(z,c){
			 if(wait==0){
				 z.removeAttr('disabled');
				 z.val('发送验证码');
				 wait = 60;
			 }else{
				 z.attr('disabled',"true");
				 z.val("倒数"+wait+"s");
				 wait--;
				 setTimeout(function(){
					 time(z,c);
				 },1000)
			 }
		 }
	</script>
</small>
<style>
	#pcontent .left-nav div {
		border-right: 1px solid #d9d6d6;
		border-bottom: 1px solid #d9d6d6;
		height: 60px;
		line-height: 59px;
		position: relative;
	}
</style>
</body>
</html>
