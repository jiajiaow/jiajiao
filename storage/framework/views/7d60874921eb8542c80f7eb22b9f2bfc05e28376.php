
<?php $__env->startSection('title',session('regionname') ); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="zfsm">
   <div class="bt"> </div>
   <div class="nr">
	<form action="">
		<p>姓名：<input id="gy_1_mz"  type="" value=""/>
          手机：<input id='gy_1_sj' type='' value="" disabled='true'maxlength='11'>
          验证码：<input id='gy_1_yzm'type='' value="">
		  <input style='width:94px;padding:.5em 0;' id='gy_1_hq' type="button" value='获取验证码'/>
       <input style='background-color:#f8b529;' type="submit" value="快速请家教" />
	</form>
       
  </p>
       <p><h2>
	<span style="color:#E56600;">|<span style="color:#000000;">收费标准</span></span>
</h2>
一、认证费<br><br>
教员：免费注册、免费认证	<br><br>
二、预约	<br><br>
教员：免费预约<br><br>
签约教员订单：<br><br>
信息费标准：免费，无需支付任何信息费。签约教员教授签约订单，无需支付任何信息费。<br><br>
预付诚意金--全额退回：为保障家长与学员的利益，以及德栗家教良好的口碑，签约教员接受签约教员订单后需支付50元诚意金，将于成功上课满1个月时全额退回（非个人原因的试课不成功也将全额退回），以免出现签约教员因为各种原因临时不去或者出现不积极授课的情况。<br><br>
一般学员订单：<br><br>
签约教员：也可接一般学员订单，将优先安排，执行统一的信息费标准。<br><br>
信息费标准：德栗家教通过审核确认好优质合适的教员后，将收取教员一周的课酬作为信息费。（如特殊情况将单独说明）<br><br>
信息费全额退回：如非个人原因的试课不成功信息费将全额退回。<br><br>
	<form action="">
		<p>姓名：<input id="gy_2_mz"  type="" value=""/>
          手机：<input id='gy_2_sj' type='' value="" disabled='true'maxlength='11'>
          验证码：<input id='gy_2_yzm'type='' value="">
		  <input style='width:94px;padding:.5em 0;' id='gy_2_hq' type="button" value='获取验证码'/>
       <input style='background-color:#f8b529;' type="submit" value="快速请家教" />
	</form>
       
  </p>
</div>
  </div>
       </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $('#cheng').remove();
        $('#f').remove();
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>