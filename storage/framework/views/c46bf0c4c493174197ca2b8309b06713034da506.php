<?php $__env->startSection('title',mb_substr(session('regionname'),0,2)); ?>
<?php $__env->startSection('style'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
	<!-- 主体部分 -->
	<div id="zhen_container">
	<!-- 侧导航 公共样式，勿修改，修改自行加class-->
		<div class="cheng_nav">
			<ul class="bian_nav">
				<li>
					<i class='cheng_one'></i>
                    <span><a href="/stinfo.html">个人信息</a></span>
				</li>
				<li class="cheng_active">
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
				<li>
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
				<!-- 主体的头部 -->
				<div class="c_toubu">
					<div>
						<label class='c_label'style="font-weight:100">辅导科目</label>
						<input class="tbsr" type="text" name='kumu' placeholder='请输入科目'/>
						<label class="c_label" style="font-weight:100">学员</label>
						<select>
							<option value="请选择">请选择</option>
							<option value=""></option>
							<option value=""></option>
						</select>
						<a href="">快速请家教</a>
					</div>
				</div>
				<!-- 主体的导航栏 公共样式，修改自行加class -->
				<div class="c_bannar">
					<!-- <span class='cheng_item'>待试课</span>
					<span>授课中</span>
					<span>已结束授课</span>
					<span>安排中的订单</span>
					<span>试课未成功</span> -->
				<ul id="myTab" class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab">
						待试课</a></li>
						<li><a href="#ios_a" data-toggle="tab">授课中</a></li>
						<li><a href="#ios_b" data-toggle="tab">授课结束</a></li>
						<li><a href="#ios_c" data-toggle="tab">安排中的订单</a></li>
						<li><a href="#ios_d" data-toggle="tab">试课未成功</a></li>
				</ul>
				</div>
				<!-- 中间部分 -->
				<div>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="home">
						<?php $__currentLoopData = $dsk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dsks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="c_container">
								<div class="cz shen">
									<label>订单生成时间：</label>
									
									<p><?php echo e(date("Y-m-d h:i:s",$dsks->time)); ?></p>
								</div>
								<div class="cz">
									<label>订单编号：</label>
									<p><a href="/xsinfo<?php echo e($dsks->id); ?>.html"><?php echo e($dsks->id); ?></a></p>
								</div>
								<div class="cz shen">
									<label>学员姓名：</label>
									<p><?php echo e($dsks->user_name); ?></p>
								</div>
								<div class="cz">
									<label>学校：</label>
									<p><?php echo e($dsks->tc_school); ?></p>
								</div>
								<div class="cz shen">
									<label>教员基本信息：</label>
									<p><?php echo e($dsks->tc_name); ?><a style="color:red" href="/teacher/detail/<?php echo e($dsks->tc_id); ?>.html"> (点击查看详细信息) </a></p>
								</div>
								<div class="cz">
									<label>评价教员：</label>
									<p style="color:red;text-align: center;">
										<!-- <form action="" method="POST"> -->
											<input id="jz"type="text" name='pj' placeholder='                                             立即评价（教员不可见）'>
										<!-- </form> -->
									</p>
								</div>
								<div class="cz shen">
									<label>电子介绍信/合同：</label>
									<p><a style='color:red'href="/xy_hetong/<?php echo e($dsks->id); ?>.html">点击查看</a></p>
								</div>
								<div class="cz">
									<label>试课时间：</label>
									<p><?php echo e($dsks->rsk_times); ?></p>
								</div>
								
								<div class="cz">
									<label>状态：</label>
									<p>试课中</p>
								</div>
								<div class="zuihou">
									<span style='font-size:18px;height:50px;width:450px;display:inline-block;text-align:center;line-height:50px;border-right:1px solid #E1E1E1;color:#B5B5B5;margin-top:10px;'><a style='' href="/xsinfo<?php echo e($dsks->id); ?>.html">查看订单详情</a></span>
									<span style='font-size:18px;color:#B5B5B5;text-align:center;display:inline-block;width:400px;'><a href="/Articlecenter18.html" >常见问题</a></span>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($dsk->links()); ?>

						</div>
						<div class="tab-pane fade" id="ios_a">
						<?php $__currentLoopData = $skz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skzs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="c_container">
								<div class="cz shen">
									<label>订单生成时间：</label>
									<p><?php echo e(date("Y-m-d h:i:s",$skzs->time)); ?></p>
								</div>
								<div class="cz">
									<label>订单编号：</label>
									<p><a href="/xsinfo<?php echo e($skzs->id); ?>.html"><?php echo e($skzs->id); ?></a></p>
								</div>
								<div class="cz shen">
									<label>学员姓名：</label>
									<p><?php echo e($skzs->user_name); ?></p>
								</div>
								<div class="cz">
									<label>学校：</label>
									<p><?php echo e($skzs->tc_school); ?></p>
								</div>
								<div class="cz shen">
									<label>教员基本信息：</label>
									<p><?php echo e($skzs->tc_name); ?><a style="color:red" href="/teacher/detail/<?php echo e($skzs->tc_id); ?>.html"> (点击查看详细信息) </a></p>
								</div>
								<div class="cz">
									<label>评价教员：</label>
									<p style="color:red;">
										<!-- <form action="" method="POST"> -->
										<input id="jz"type="text" name='pj' placeholder='                                             立即评价（教员不可见）'>
										<!-- </form> -->
									</p>
								</div>
								<div class="cz shen">
									<label>电子介绍信/合同：</label>
									<p><a style='color:red'href="/xy_hetong/<?php echo e($skzs->id); ?>.html">点击查看</a></p>
								</div>
								<div class="cz">
									<label>授课时间：</label>
									<p><?php echo e($skzs->sk_times); ?></p>
								</div>
								
									
									
								
								<div class="cz">
									<label>状态：</label>
									<p>授课中</p>
								</div>
								<div class="zuihou">
									<span style='font-size:18px;height:50px;width:450px;display:inline-block;text-align:center;line-height:50px;border-right:1px solid #E1E1E1;color:#B5B5B5;margin-top:10px;'><a style='' href="/xsinfo<?php echo e($skzs->id); ?>.html">查看订单详情</a></span>
									<span style='font-size:18px;color:#B5B5B5;text-align:center;display:inline-block;width:400px;'><a href="/Articlecenter18.html" >常见问题</a></span>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($skz->links()); ?>

						</div>

						<div class="tab-pane fade" id="ios_b">
						<?php $__currentLoopData = $skjs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skjss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="c_container">
								<div class="cz shen">
									<label>订单生成时间：</label>
									<p><?php echo e(date("Y-m-d h:i:s",$skjss->time)); ?></p>
								</div>
								<div class="cz">
									<label>订单编号：</label>
									<p><a href="/xsinfo<?php echo e($skjss->id); ?>.html"><?php echo e($skjss->id); ?></a></p>
								</div>
								<div class="cz shen">
									<label>学员姓名：</label>
									<p><?php echo e($skjss->user_name); ?></p>
								</div>
								<div class="cz">
									<label>学校：</label>
									<p><?php echo e($skjss->tc_school); ?></p>
								</div>
								<div class="cz shen">
									<label>教员基本信息：</label>
									<p><?php echo e($skjss->tc_name); ?><a style="color:red" href="/teacher/detail/<?php echo e($skjss->tc_id); ?>.html"> (点击查看详细信息) </a></p>
								</div>
								<div class="cz">
									<label>评价教员：</label>
									<p style="color:red;">
										<!-- <form action="" method="POST"> -->
										<input id="jz"type="text" name='pj' placeholder='                                             立即评价（教员不可见）'>
										<!-- </form> -->
									</p>
								</div>
								<div class="cz shen">
									<label>电子介绍信/合同：</label>
									<p><a style='color:red'href="/xy_hetong/<?php echo e($skjss->id); ?>.html">点击查看</a></p>
								</div>
								
								
								<div class="cz">
									<label>状态：</label>
									<p>授课结束</p>
								</div>
								<div class="zuihou">
									<span style='font-size:18px;height:50px;width:450px;display:inline-block;text-align:center;line-height:50px;border-right:1px solid #E1E1E1;color:#B5B5B5;margin-top:10px;'><a style='' href="/xsinfo<?php echo e($skjss->id); ?>.html">查看订单详情</a></span>
									<span style='font-size:18px;color:#B5B5B5;text-align:center;display:inline-block;width:400px;'><a href="/Articlecenter18.html" >常见问题</a></span>

								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($skjs->links()); ?>

						</div>

						<div class="tab-pane fade" id="ios_c">
						<?php $__currentLoopData = $apdd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apdds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="c_container">
								<div class="cz shen">
									<label>订单生成时间：</label>
									<p><?php echo e(date("Y-m-d h:i:s",$apdds->time)); ?></p>
								</div>
								<div class="cz">
									<label>订单编号：</label>
									<p><a href="/xsinfo<?php echo e($apdds->id); ?>.html"><?php echo e($apdds->id); ?></a></p>
								</div>
								<div class="cz shen">
									<label>学员年级：</label>
									<p><?php echo e($apdds->grade); ?></p>
								</div>
								<div class="cz">
									<label>辅导科目：</label>
									<p><?php echo e($apdds->subject_id); ?></p>
								</div>
								<div class="cz shen">
									<label>辅导次数：</label>
									<p><?php echo e($apdds->per_week); ?></p>
								</div>
								<div class="cz">
									<label>辅导地点：</label>
									<p><?php echo e($apdds->xx_dz); ?></p>
								</div>
								<div class="cz shen">
									<label>辅导课酬：</label>
									<p><?php if($apdds->money != ''): ?><?php echo e($apdds->money); ?>元/1小时<?php else: ?> <?php endif; ?> </p>
								</div>
								<div class="cz">
									<label>状态：</label>
									<p>安排中</p>
								</div>
								<div class="zuihou">
									<span style='font-size:18px;height:50px;display:inline-block;text-align:center;line-height:50px;border-right:1px solid #E1E1E1;color:#B5B5B5;margin-top:10px;'><a style='' href="/xsinfo<?php echo e($apdds->id); ?>.html">查看订单详情</a></span>
									<span style='font-size:18px;height:50px;display:inline-block;text-align:center;line-height:50px;border-right:1px solid #E1E1E1;color:#B5B5B5;margin-top:10px;'><a style='' href="http://www.delijiajiao.com/faculty.html">挑老师</a></span>
									<span style='font-size:18px;color:#B5B5B5;text-align:center;display:inline-block;'><a href="/Articlecenter18.html" >常见问题</a></span>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($apdd->links()); ?>

						</div>
						<div class="tab-pane fade" id="ios_d">
						<?php $__currentLoopData = $skwcg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skwcgs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="c_container">
								<div class="cz shen">
									<label>订单生成时间：</label>
									<p><?php echo e(date("Y-m-d h:i:s",$skwcgs->time)); ?></p>
								</div>
								<div class="cz">
									<label>订单编号：</label>
									<p><a href="/xsinfo<?php echo e($skwcgs->id); ?>.html"><?php echo e($skwcgs->id); ?></a></p>
								</div>
								<div class="cz shen">
									<label>学员姓名：</label>
									<p><?php echo e($skwcgs->user_name); ?></p>
								</div>
								<div class="cz">
									<label>学校：</label>
									<p><?php echo e($skwcgs->tc_school); ?></p>
								</div>
								<div class="cz shen">
									<label>教员基本信息：</label>
									<p><?php echo e($skwcgs->tc_name); ?><a style="color:red" href="/teacher/detail/<?php echo e($skwcgs->tc_id); ?>.html"> (点击查看详细信息) </a></p>
								</div>
								<div class="cz">
									<label>评价教员：</label>
									<p style="color:red;">
										<!-- <form action="" method="POST"> -->
										<input id="jz"type="text" name='pj' placeholder='                                             立即评价（教员不可见）'>
										<!-- </form> -->
									</p>
								</div>
								<div class="cz shen">
									<label>电子介绍信/合同：</label>
									<p><a style='color:red'href="/xy_hetong/<?php echo e($skwcgs->id); ?>.html">点击查看</a></p>
								</div>
								<div class="cz">
									<label>试课时间：</label>
									<p><?php echo e($skwcgs->rsk_times); ?></p>
								</div>
								
								<div class="cz">
									<label>状态：</label>
									<p>试课未成功</p>
								</div>
								<div class="zuihou">
									<span style='font-size:18px;height:50px;width:450px;display:inline-block;text-align:center;line-height:50px;border-right:1px solid #E1E1E1;color:#B5B5B5;margin-top:10px;'><a style='' href="/xsinfo<?php echo e($skwcgs->id); ?>.html">查看订单详情</a></span>
									<span style='font-size:18px;color:#B5B5B5;text-align:center;display:inline-block;width:400px;'><a href="/Articlecenter18.html" >常见问题</a></span>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($skwcg->links()); ?>

						</div>
					</div>
				</div>
			</div>
		<!-- nav 结束 -->

	</div>
	<style>
		.zuihou{
			text-align: center;
		}
		.zuihou span{
			width:32%;
		}
	</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('delijiajiao.public.xy', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>