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
			<span><a>个人信息</a></span>
		</li>
		<li class="cheng_active">
			<i class='cheng_two'></i>
			<span><a href="/tc_order1.html"></a>订单管理</span>
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
<iframe id="mainFrame" name="mainFrame" scrolling="no" src="<?php echo e(URL('tc_page.html')); ?>" frameborder="0" style="padding: 0px; width: 100%; height: 370px;"></iframe>
</div>
</div>
		<!-- 中间部分的下 -->
		<div class="c_bannar" style="margin-top:58px;">
            <a href="/tc_order1.html"><span class='cheng_item'><font color="#000">我预约的单</font></span></a>
            <a href="/tc_order4.html"><span><font color="#000">我已接的单</font></span></a>
            <a href="/tc_order6.html"><span><font color="#000">成功的单</font></span></a>
		</div>
		<!--  -->
		<div class="zqm_yuyuejy">
			<div class="left">
                <a href="/tc_order1.html"><div class="cb">安<br/>排<br/>中</div></a>
                <a href="/tc_order2.html"><div class="cbv">未<br/>选<br/>中</div></a>
                <a href="/tc_order3.html"><div class="cbv" style="font-size:14px;">取<br/>消<br/>预<br/>约</div></a>
			</div>

            <?php $__currentLoopData = $yap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yaps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="right">
                    <div class="bk zqm">
                        <div class="left">订单编号</div>
                        <div class="right"><?php echo e($yaps->id); ?><a href="/xsinfo<?php echo e($yaps->id); ?>.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
                    </div>
                    <div class="bk">
                        <div class="left">订单类型</div>
                        <div class="right"><?php echo e($yaps->tc_Signing =='是'?'签约订单':'普通订单'); ?></div>
                    </div>
                    <div class="bk zqm">
                        <div class="left">年级科目</div>
                        <div class="right"><?php echo e($yaps->subject_id); ?></div>
                    </div>
                    <div class="bk" style="display: flex;">
                        <div class="left">地址</div>
                        <div class="right"><?php echo e($yaps->xx_dz); ?></div>
                    </div>
                    <div class="bk1"><?php $q = $yaps->o_ts*$yaps->o_xs*$yaps->money ?>
                        <div class="left1">课酬/信息费</div>
                        <div class="right1">
                            <div class="pm zqm">
                                <div class="left">
                                    课酬：<?php echo e($yaps->money*$yaps->o_xs); ?>元/次
                                </div>
                                <div class="right">
                                    家长服务费：<?php echo e($yaps->fz_jzxxf); ?>元
                                </div>
                            </div>
                            <div class="pm">
                                <div class="left">
                                    周课酬：<?php echo e($q); ?>元/周
                                </div>
                                <div class="right" >
                                    预付信息费：<span id="yff"><?php if($yaps->o_ts == '1'): ?><?php echo e($q*$yaps->bfb1>300?'300':$q*$yaps->bfb1); ?><?php elseif($yaps->o_ts == '2'): ?><?php echo e($q*$yaps->bfb2>300?'300':$q*$yaps->bfb2); ?><?php elseif($yaps->o_ts == '3'): ?><?php echo e($q*$yaps->bfb3>300?'300':$q*$yaps->bfb3); ?><?php elseif($yaps->o_ts == '4'): ?><?php echo e($q*$yaps->bfb4>300?'300':$q*$yaps->bfb4); ?><?php elseif($yaps->o_ts == '5'): ?><?php echo e($q*$yaps->bfb5>300?'300':$q*$yaps->bfb5); ?><?php elseif($yaps->o_ts == '6'): ?><?php echo e($q*$yaps->bfb6>300?'300':$q*$yaps->bfb6); ?><?php elseif($yaps->o_ts == '7'): ?><?php echo e($q*$yaps->bfb7>300?'300':$q*$yaps->bfb7); ?><?php endif; ?></span>元
                                </div>
                            </div>
                            <div class="pm zqm">
                                <div class="left">
                                    信息费：<?php if($yaps->o_ts == '1'): ?><?php echo e($q*$yaps->bfb1); ?><?php elseif($yaps->o_ts == '2'): ?><?php echo e($q*$yaps->bfb2); ?><?php elseif($yaps->o_ts == '3'): ?><?php echo e($q*$yaps->bfb3); ?><?php elseif($yaps->o_ts == '4'): ?><?php echo e($q*$yaps->bfb4); ?><?php elseif($yaps->o_ts == '5'): ?><?php echo e($q*$yaps->bfb5); ?><?php elseif($yaps->o_ts == '6'): ?><?php echo e($q*$yaps->bfb6); ?><?php elseif($yaps->o_ts == '7'): ?><?php echo e($q*$yaps->bfb7); ?><?php endif; ?>元
                                </div>
                                <div class="right">
                                    成功后需付信息费：
                                    <?php if($yaps->o_ts == '1'): ?>
                                        <?php echo e($q*$yaps->bfb1 - ($q*$yaps->bfb1>300?'300':$q*$yaps->bfb1)); ?>

                                    <?php elseif($yaps->o_ts == '2'): ?>
                                        <?php echo e($q*$yaps->bfb2 - ($q*$yaps->bfb2>300?'300':$q*$yaps->bfb2)); ?>

                                       
                                    <?php elseif($yaps->o_ts == '3'): ?>
                                        <?php echo e($q*$yaps->bfb3 - ($q*$yaps->bfb3>300?'300':$q*$yaps->bfb3)); ?>

                                       
                                    <?php elseif($yaps->o_ts == '4'): ?>
                                        <?php echo e($q*$yaps->bfb4 - ($q*$yaps->bfb4>300?'300':$q*$yaps->bfb4)); ?>

                                        
                                    <?php elseif($yaps->o_ts == '5'): ?>
                                        <?php echo e($q*$yaps->bfb5 - ($q*$yaps->bfb5>300?'300':$q*$yaps->bfb5)); ?>

                                        
                                    <?php elseif($yaps->o_ts == '6'): ?>
                                        <?php echo e($q*$yaps->bfb6 - ($q*$yaps->bfb6>300?'300':$q*$yaps->bfb6)); ?>

                                        
                                    <?php elseif($yaps->o_ts == '7'): ?>
                                        <?php echo e($q*$yaps->bfb7 - ($q*$yaps->bfb7>300?'300':$q*$yaps->bfb7)); ?>

                                        
                                    <?php endif; ?>元
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bk">
                        <div class="left">备注</div>
                        <div class="right">
                            <a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">沟通咨询/疑问</font></a>

                                <a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000"><?php echo e($yaps->ap); ?></font></a>

                            <a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">常见问题</font></a>
                        </div>
                    </div>
                    <div class="bk2">
                        <a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank">
                                <form action="/tc_qxorder.html" method="post" style="display: inline-block;">
                                    <input type="hidden" name="oid" value="<?php echo e($yaps->id); ?>">
                                    <input type="hidden" name="tc_id" value="<?php echo e($yaps->tc_id); ?>">
                                    <button type="submit" style="border: none;height: 30px;line-height: 30px;border-radius: 2px;background: #fff0;">取消预约</button>
                                </form>
                        </a>|
                        <a style=";" href="javascript:;" onclick="cyjs()">
                                <form action="/cyj.html" method="post" id="cyj" style="display: inline-block;">
                                    <a style="" href="javascript:;" onclick="cyj(<?php echo e($yaps->id); ?>)">
                                            <input type="hidden" name="order_id" value="<?php echo e($yaps->id); ?>">
                                            <input type="hidden" name="rid" value="<?php echo e($yaps->rid); ?>">
                                            <input type="hidden" name="xxf" value="<?php if($yaps->o_ts == '1'): ?><?php echo e($q*$yaps->bfb1>300?'300':$q*$yaps->bfb1); ?><?php elseif($yaps->o_ts == '2'): ?><?php echo e($q*$yaps->bfb2>300?'300':$q*$yaps->bfb2); ?><?php elseif($yaps->o_ts == '3'): ?><?php echo e($q*$yaps->bfb3>300?'300':$q*$yaps->bfb3); ?><?php elseif($yaps->o_ts == '4'): ?><?php echo e($q*$yaps->bfb4>300?'300':$q*$yaps->bfb4); ?><?php elseif($yaps->o_ts == '5'): ?><?php echo e($q*$yaps->bfb5>300?'300':$q*$yaps->bfb5); ?><?php elseif($yaps->o_ts == '6'): ?><?php echo e($q*$yaps->bfb6>300?'300':$q*$yaps->bfb6); ?><?php elseif($yaps->o_ts == '7'): ?><?php echo e($q*$yaps->bfb7>300?'300':$q*$yaps->bfb7); ?><?php endif; ?>">
                                                支付诚意金优先获取订单
                                    </a>|
                                </form>
                          </a>
                        <a>
                            <?php if($yaps->ht_t_status =='3'): ?>
                                <form action="/xxf.html" method="post" id="xxf" style="display: inline-block;">
                                         <a style="margin-left: 60px;margin-right: 60px;" href="javascript:;" onclick="qr(<?php echo e($yaps->id); ?>)">
                                            <input type="hidden" name="order_id" value="<?php echo e($yaps->id); ?>">
                                            <input type="hidden" name="rid" value="<?php echo e($yaps->rid); ?>">
                                            <input type="hidden" name="xxf" value="<?php if($yaps->o_ts == '1'): ?><?php echo e($q*$yaps->bfb1>300?'300':$q*$yaps->bfb1); ?><?php elseif($yaps->o_ts == '2'): ?><?php echo e($q*$yaps->bfb2>300?'300':$q*$yaps->bfb2); ?><?php elseif($yaps->o_ts == '3'): ?><?php echo e($q*$yaps->bfb3>300?'300':$q*$yaps->bfb3); ?><?php elseif($yaps->o_ts == '4'): ?><?php echo e($q*$yaps->bfb4>300?'300':$q*$yaps->bfb4); ?><?php elseif($yaps->o_ts == '5'): ?><?php echo e($q*$yaps->bfb5>300?'300':$q*$yaps->bfb5); ?><?php elseif($yaps->o_ts == '6'): ?><?php echo e($q*$yaps->bfb6>300?'300':$q*$yaps->bfb6); ?><?php elseif($yaps->o_ts == '7'): ?><?php echo e($q*$yaps->bfb7>300?'300':$q*$yaps->bfb7); ?><?php endif; ?>">
                                                 
                                                 确定获取订单
                                        </a>
                                </form>
                            <?php else: ?>
                                <a style="margin-left: 60px;margin-right: 60px;" >确认获取订单</a>
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
          <div class="zqm_div5"></div>
             <div id="fudong"></div>
            <div class="c_yejiao" style="width:950px;">
                <?php if($yap->num > 0): ?>
                <a href="<?php echo e($yap->Url($yap->LastPage())); ?>">末页</a>
                <a href="<?php echo e($yap->Url($yap->next)); ?>">下一页</a>
                <a href="<?php echo e($yap->Url($yap->last)); ?>">上一页</a>
                <a href="<?php echo e($yap->Url(1)); ?>">首页</a>
                
                <?php endif; ?>
            </div>
</div>

		<!-- 中间部分的尾部 -->
		<!--  -->
	</div>
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
    <script type="text/javascript" src="<?php echo e(asset('/layer/layer.js')); ?>"></script>
</body>
    <script>
        function cyj(){
            layer.confirm('如你确认本单各方面均合适，支付诚意金（一般为50元，你也可根据意愿程度进行修改），我方将优先安排。如本单未选中你，锁定的诚意金将实时退回你的账户余额（2天为限，如我们仍未能在已预约教员中挑选出学员满意的教员，诚意金也将退回），诚意金随时可进行提现，提现金额将于24小时内收到。如挑选你接单，但你因个人原因无法接单，将对我方和家长及学员均造成不良影响，诚意金将无法退回。', {
                btn: ['确定','取消'] //按钮
            }, function(){
                document.getElementById("cyj").submit();
            }, function(){

            });
        }
        //确认获取
        function qr(oid){
            layer.confirm('恭喜！！你成为众多预约教员中通过审核的教员之一，首位支付信息费的教员将成功接单，获取家长的联系方式。如已有教员支付，则本订单状态将自动更改为已安排，无法再安排其他已审核教员。未能成功接单的教员请在下次通过审核时第一时间支付信息费。温馨提示：先预约的教员将获得优先审核权，请及时关注并预约家教订单哦！', {
                btn: ['确定','取消'] //按钮
            }, function(){
               /* var money = $('#yff').html();
                $.post("/tc_top_ups.html",{'oid':oid,'money':money},function(result){
                    window.location.href='/tc_top_ups.html';
                });*/
                document.getElementById("xxf").submit();
            }, function(){

            });
        }
    </script>
</html>
