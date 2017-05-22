<?php $__env->startSection('title',mb_substr(session('regionname'),0,2)); ?>
<?php $__env->startSection('style'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link href="/home/css/ljj.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="scontent">
      <div class="container">
        <div class="education-info">
          <div class="stitle">

            <i><img src="/home/picture/title_left.png" alt=""></i>
            <h3><?php echo e($data->dq); ?><?php echo e($data->user_name); ?>请<?php echo e($data->grade); ?><?php echo e($data->subject_id); ?>家教</h3>
            <span><?php echo e(date('Y-m-d',$data->time)); ?>发布</span>
          </div>
          <div class="info">
            <div class="info-left">
              <p>学员请家教预算：<i><?php echo e($data->money*$data->o_xs); ?>元/次</i></p>
              <span><i><?php echo e($data->browsenu); ?></i>人浏览  已有<i><?php echo e($data->yynum); ?></i>人申请</span>
            </div>
            <div class="info-center" style="float:left;">
              <img src="/home/picture/icon_fx.png" alt="">一键分享
                <div class="share">
                  <a title="转发至QQ空间" charset="400-03-8" id="s_qq"
                        href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php echo e($url); ?>" target="_blank">
                      <img  src="/home/picture/ico_qzone.png" />
                  </a>
                  <a title="分享到朋友圈" charset="400-03-19" id="s_pengyou"
                        href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?to=pengyou&url=<?php echo e($url); ?>&title="<?php echo e($data->dq); ?><?php echo e(mb_substr($data->user_name,0,1)); ?><?php if($data->user_sex == ''): ?><?php elseif($data->user_sex == '0'): ?>女士<?php elseif($data->user_sex == '1'): ?>先生
<?php else: ?>其它<?php endif; ?>请<?php echo e($data->grade); ?><?php echo e($data->subject_id); ?>家教" target="_blank">
                      <img src="/home/picture/pyq.png"  width="35px" height="35px" />
                  </a>
                  <a title="转发至新浪微博" charset="400-03-10" id="s_sina"
                      href="http://service.weibo.com/share/share.php?title="<?php echo e($data->dq); ?><?php echo e(mb_substr($data->user_name,0,1)); ?><?php if($data->user_sex == ''): ?><?php elseif($data->user_sex == '0'): ?>女士<?php elseif($data->user_sex == '1'): ?>先生
<?php else: ?>其它<?php endif; ?>请<?php echo e($data->grade); ?><?php echo e($data->subject_id); ?>家教&url=<?php echo e($url); ?>&source=bookmark&appkey=2992571369" target="_blank">
                      <img src="/home/picture/ico_sina.png" />
                  </a>
                  <div class="clear"></div>
                </div>
            </div>
            <div style='height:60px;' class="info-right">
              <div style='float:right;' class="top-code">
                <img src="/home/picture/code.jpg" width="114px" height="114px">
                <p style="font-size: 16px">QQ信息发布群</p>
                <p style="font-size:16px">367144804</p>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="step">
          <div class="container">
            <div class="step-in">
              <h3>教员接单流程<img src="/home/picture/icon_you.png" alt=""></h3>
              <ul>
                <li>
                  <img src="/home/picture/Lo_go.png" alt=""   width="45px" height="45px;">
                  申请订单
                  <img src="/home/picture/line.png" alt="">
                </li>
                <li>
                  <img src="/home/picture/Lo_go.png" alt=""   width="45px" height="45px;">
                  审核并挑选教员
                  <img src="/home/picture/line.png" alt="">
                </li>
                <li>
                  <img src="/home/picture/Lo_go.png" alt=""   width="45px" height="45px;">
                  获取订单
                </li>
              </ul>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="student-detial">
            <div class="left">
              <div class="sinfo">
                <div class="stitle">
                  <i><img src="/home/picture/title_left.png" alt="" ></i>
                  <h3>学员信息</h3>
                </div>
                <ul>
                  <li>订单编号：<span>T<?php echo e($data->id); ?></span></li>
                  <li>联系人：<span><?php echo e($data->user_name); ?></span></li>
                  <li>求教科目：<span><?php echo e($data->subject_id); ?></span></li>
                  <li>学员性别：<span><?php if($data->user_sex == ''): ?><?php elseif($data->user_sex == '2'): ?>女<?php elseif($data->user_sex == '1'): ?> 男 <?php elseif($data->user_sex == '3'): ?>男女不限<?php endif; ?></span></li>
                  <li>学员年级：<span><?php echo e($data->grade); ?></span></li>
                  <li>所在区域：<span><?php echo e($data->dq); ?></span></li>
                  <li>所在位置：<span><?php echo e($data->xx_dz); ?></span></li>
                  <li>学员概况：<span><?php echo e($data->user_situation); ?></span></li>
                  <li>授课次数：<span><?php if($data->per_week == ','): ?>每周<?php echo e($data->o_ts); ?>次,每次<?php echo e($data->o_xs); ?>小时<?php else: ?><?php echo e($data->per_week); ?> <?php endif; ?></span></li>
                  <li>可授课时间：<span><?php echo e($data->sk_times); ?></span></li>
                </ul>
              </div>
              <div class="sinfo">
                <div class="stitle">
                  <i><img src="/home/picture/title_left.png" alt=""></i>

                  <h3>需要这样的老师</h3>
                </div>
                <ul>
                  <li>性别：<span>
                          <?php if($data->teacher_sex == '1'): ?>
                              男
                          <?php elseif($data->teacher_sex == '2'): ?>
                              女
                          <?php elseif($data->teacher_sex=='3'): ?>
                              男女不限
                          <?php endif; ?>
                      </span></li>
                  <li>课酬： <i><?php echo e($data->money*$data->o_xs); ?>元/次</i></li>
                  <li>教学方式：<span>教员上门</span></li>
                  <li>老师类型：<span><?php echo e($data->ls_type); ?></span></li>
                  <li>其它要求：<span><?php echo e($data->teacher_info); ?></span></li>
                </ul>
              </div>
              <div class="bottom">
                <a href="/Teacheryy.html?oid=<?php echo e($data->id); ?>" class="btn">申请此订单</a>不是德栗家教老师？<a href="/reg.html">免费注册</a>
              </div>
            </div>
            <div class="student-detial-list">

              <div class="stitle">
                <i><img src="/home/picture/title_left.png" alt=""></i>
                <h3 style="margin-left: 10px;">相似家教订单</h3>
              </div>
              <ul>
                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="/xsinfo<?php echo e($l->id); ?>.html"><?php echo e($l->user_name); ?>需要<?php echo e($l->subject_id); ?>家教</a><em><?php echo e(date("m-d",$l->time)); ?></em></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
$(function(){
  $("#dropdown").hide();
})
<?php echo session('ts'); ?>


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>