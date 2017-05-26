<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="/doxy_hetong">
		<div class="wrap">
			<div class="content-top">
				<img src="/new/images/TT.png" style="position: absolute;width: 136px;left: 45%;top: 72%;">
				<h5 >德栗家教电子介绍信</h5>
				<p>德栗家教（<a href="">www.delijiajiao.com</a>）--专业大学生上门辅导</p>
				<p style="text-indent: 35px;"> 效果好、个性化、提分快、效率高。深耕全国大学生上门家教市场多年，在全国几十个城市拥有数十万大学生教员，教员主要以重本、一本高校在校大学生为主。德栗家教竭诚为学员提供专业优质的大学生一对一上门家教服务，实实在在提高学员成绩。</p>
				<p style="text-indent: 35px;">兹安排德栗家教教员，姓名：<?php echo e($list->tc_name); ?> 编号：T<?php echo e($list->t_id); ?> 学校: <?php echo e($list->tc_school); ?>（<?php echo e($list->tc_type); ?>） 电话：<?php echo e($list->tc_phone); ?>上门为您试课，试课当天教员也将带身份证、学生证上门，请进行确认，如您对老师满意，确认其以后继续为孩子授课，试课课酬便按照上课标准给到老师，如果您对老师并不是特别满意，您将无需支付任何费用，免费上课，并且我们将免费为您安排其他老师上门试课。</p>
				<p style="text-align: center">德栗家教</p>
				<p style="text-align: center"><?php echo e(date('Y-m-d h:i:s',$list->jd_times)); ?></p>
			</div>
			<div class="content-mid">
				<img src="/new/images/TT.png" style="position: absolute;bottom: 0;width: 136px;left: 20%;">
				<h5>电子授课合同</h5>
				<p><span>甲方（学员）</span>：<span id="adds"><input type="text" value="<?php echo e($list->user_name); ?>" class="inwidths"></span>  联系电话：<?php echo e($list->user_phone); ?><span class="add">+</span></p>
				<p><span>乙方（德栗）</span>：<span style="width: 72px; display: inline-block;">德栗家教</span>    联系电话：400-8250-710  微信号：delijiajiao</p>
				<p><span>丙方（教员）</span>：<span style="width: 72px; display: inline-block;"><?php echo e($list->tc_name); ?></span>  联系电话：<?php echo e($list->tc_phone); ?></p>
				<p>德栗家教（官方网站：www.delijiajiao.com）安排我方教员自动抓取上门为甲方进行家教辅导。甲乙丙各方在合法公正、平等自愿的基础上,经过充分的友好协商达成如下协议:</p>
				<p>一、乙方教员自动抓取为甲方提供每周<input type="text"  value="<?php echo e($list->o_ts); ?>" class="inwidth">次，每次<input type="text"  value="<?php echo e($list->o_xs); ?>"  class="inwidth">小时的家教辅导；约定授课周期为<input type="text"  value="<?php echo e($list->o_yue); ?>" class="inwidth">月。</p>
				<p>二、甲方按课时付给乙方<input type="text" value="<?php echo e($list->money); ?>" class="inwidth">元／时，按每周结算。课程反馈是上课内容中非常重要的一环，有利于家长学员更清晰的了解上课内容，以及根据学员情况针对性的确定下次课程的内容，所以如丙方未完成课程反馈，甲方暂时无须支付。</p>
				<p>三、双方义务权利</p>
				<p>甲方：</p>
				<p>1．有权获取每次上课内容的课程反馈，如丙方未完成课程反馈，甲方暂时无须支付课酬。</p>
				<p>2．如家长选择的是签约教员，将由乙方根据学员的情况，安排乙方特聘专职老师一对一提供上课内容和定期提供学习报告。</p>
				<p>3．当对丙方家教辅导不满意时，或者2个月后成绩未有提高，请及时与德栗家教联系，如需更换老师，本次合同可中止。</p>
				<p>4．监督乙方、丙方的家教服务，并可提出建议和意见。</p>
				<p>5．按时按合同条款付给乙方家教酬金。</p>
				<p>乙方丙方： </p>
				<p>1．将共同做好备课准备，如家长选择的是签约教员，将由乙方根据学员的情况，安排乙方特聘专职老师一对一提供上课内容和定期提供学习报告。</p>
				<p>2．教学过程中，对甲方负责，解答疑虑、指导课程学习。</p>
				<p>3．丙方需认真授课、努力提高教学水平，守时诚信、文明礼貌，不得出现任何危害甲方利益、乙方利益及品牌形象的行为。</p>
				<p>家教服务期间，若出现任何疑问或者另需请家教老师，请及时与德栗家教联系，400-8250-710，www.delijiajiao.com。</p>
				<p>本协议自签订之日起生效，自丙方结束授课之日起且甲方结清价款后自动失效。</p>
				<input type="hidden" name="xy_qz" value="1">
				<input type="hidden" name="id" value="<?php echo e($list->id); ?>">
				<p>　<span class="text_1"><?php if($list->xy_qz == '1'): ?> 甲方已签认 <?php else: ?>甲方（签字）<?php endif; ?></span>：<button class="btn btn_1">签认按钮</button> <span class="text_2">乙方签字</span>：<span class=" btn_2">已签认</span>  <span class="text_3"><?php if($list->jy_qz == '1'): ?> 丙方已签认 <?php else: ?>丙方（签字）<?php endif; ?></span>：<span class="btn btn_3">签认按钮</span></p>
				<p style="text-align: right">(自动生成日期)</p>
			</div>
		</div>
	</form>
	<style type="text/css">
		.wrap{
			width: 80%;
			margin: 0 auto;
		}
		.content-top{
			position: relative
		}
		p{
			font-size: 14px;
		}
		.btn {
		    padding: 5px 10px;
		    background: #ccc;
		    border-radius: 8px;
		    color: #2d2d2d;
		    cursor: pointer;
		}
		.inwidth{
			width: 40px;
		}
		.inwidths{
			width: 70px;
		}
		.content-mid{
			position: relative;
		}
		.add {
		    width: 20px;
		    height: 20px;
		    background-color: #3e5bde;
		    color: #fff;
		    border-radius: 50%;
		    display: inline-block;
		    text-align: center;
		    line-height: 20px;
		    font-size: 16px;
		    margin-left: 20px;
		    cursor: pointer;
		}
	</style>
	<script type="text/javascript" src='http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js'></script>
	<script type="text/javascript">
		$('.add').click(function(){
			var a = '<input type="text" class="inwidths">'
			$('#adds').append(a)
		})
		$('.btn_1').click(function(){
			$('.text_1').text('甲方已签认')
		})
		$('.btn_2').click(function(){
			$('.text_2').text('乙方已签认')
		})
		$('.btn_3').click(function(){
			$('.text_3').text('丙方已签认')
		})
	</script>
</body>
</html>