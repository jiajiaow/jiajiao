<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>预约的单</title>
    <link rel="stylesheet" href="/phone/lichengphonedl/css/yydd.css">
    <link rel="stylesheet" href="/phone/lichengphonedl/css/swiper.css">
    <script src="/phone/lichengphonedl/js/flexible.js"></script>
<body style="background-color: #F1F1F1">
<header>
    <img src="/phone/lichengphonedl/images/zuo.png" alt="" class="zuo">
    <span>订单管理</span>
    <img src="/phone/lichengphonedl/images/tc.png" alt="" class="rt tc">
    <div class="cler"></div>
</header>
<section>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <span class="skz" onclick="window.location.href='/mobile/tc_page.html'">新订单</span>
            </div>
            <div class="swiper-slide">
                <span class="skj active" onclick="window.location.href='/mobile/tc_order1.html'">预约的单</span>
            </div>
            <div class="swiper-slide">
                <span class="apz" onclick="window.location.href='/mobile/tc_order4.html'">已接的单</span>
            </div>
            <div class="swiper-slide">
                <span class="skzz" onclick="window.location.href='/mobile/tc_order6.html'">正式授课</span>
            </div>
        </div>
        <div class="cler"></div>
    </div>
    <div class="sk">
        <a href="/mobile/tc_order1.html" style='background-color: #FFF;color: #888;'>安排中</a>
        <a href="/mobile/tc_order2.html" style='background-color: #F7B529;color: #000000;'>未选择</a>
        <a href="/mobile/tc_order3.html">已取消</a>
    </div>
    <?php $__currentLoopData = $wxz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wxzs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="lb" style="margin-top: 0">
            <div class="xy">
                <label for="">订单编号:</label>
                <span><?php echo e($wxzs->id); ?></span>
                <a href="/mobile/xsinfo<?php echo e($wxzs->id); ?>.html" class="rt">查看详情 <img src="/phone/lichengphonedl/images/gd@2x.png" alt="" class="rt"></a>
            </div>
            <div class="zy ly">
                <label for="">订单类型:</label>
                <span><?php echo e($wxzs->tc_Signing =='是'?'签约订单':'普通订单'); ?></span>
            </div>
            <div class="zy ly">
                <label for="">年级科目:</label>
                <span><?php echo e($wxzs->subject_id); ?></span>
            </div>
            <div class="zy ly">
                <label for="">地址:</label>
                <span><?php echo e($wxzs->xx_dz); ?></span>
            </div>
            <div class="ly wq"><?php $q = $wxzs->o_ts*$wxzs->o_xs*$wxzs->money ?>
                <label for="">费用:</label>
                <div style="float: right">
                    <p>课酬:<?php echo e($wxzs->money*$wxzs->o_xs); ?>元/次</p>
                    <p>周课酬:<?php echo e($q); ?>元/周</p>
                    <p>信息费:360元</p>
                    <p>家长服务费:50元</p>
                    <p>预付信息费:<?php if($wxzs->o_ts == '1'): ?><?php echo e($q*$wxzs->bfb1>300?'300':$q*$wxzs->bfb1); ?><?php elseif($wxzs->o_ts == '2'): ?><?php echo e($q*$wxzs->bfb2>300?'300':$q*$wxzs->bfb2); ?><?php elseif($wxzs->o_ts == '3'): ?><?php echo e($q*$wxzs->bfb3>300?'300':$q*$wxzs->bfb3); ?><?php elseif($wxzs->o_ts == '4'): ?><?php echo e($q*$wxzs->bfb4>300?'300':$q*$wxzs->bfb4); ?><?php elseif($wxzs->o_ts == '5'): ?><?php echo e($q*$wxzs->bfb5>300?'300':$q*$wxzs->bfb5); ?><?php elseif($wxzs->o_ts == '6'): ?><?php echo e($q*$wxzs->bfb6>300?'300':$q*$wxzs->bfb6); ?><?php elseif($wxzs->o_ts == '7'): ?><?php echo e($q*$wxzs->bfb7>300?'300':$q*$wxzs->bfb7); ?><?php endif; ?>元</p>
                    <p>成功后需要付信息费:<?php if($wxzs->o_ts == '1'): ?>
                            <?php echo e($q*$wxzs->bfb1 - ($q*$wxzs->bfb1>300?'300':$q*$wxzs->bfb1)); ?>

                        <?php elseif($wxzs->o_ts == '2'): ?>
                            <?php echo e($q*$wxzs->bfb2 - ($q*$wxzs->bfb2>300?'300':$q*$wxzs->bfb2)); ?>

                            
                        <?php elseif($wxzs->o_ts == '3'): ?>
                            <?php echo e($q*$wxzs->bfb3 - ($q*$wxzs->bfb3>300?'300':$q*$wxzs->bfb3)); ?>

                            
                        <?php elseif($wxzs->o_ts == '4'): ?>
                            <?php echo e($q*$wxzs->bfb4 - ($q*$wxzs->bfb4>300?'300':$q*$wxzs->bfb4)); ?>

                            
                        <?php elseif($wxzs->o_ts == '5'): ?>
                            <?php echo e($q*$wxzs->bfb5 - ($q*$wxzs->bfb5>300?'300':$q*$wxzs->bfb5)); ?>

                            
                        <?php elseif($wxzs->o_ts == '6'): ?>
                            <?php echo e($q*$wxzs->bfb6 - ($q*$wxzs->bfb6>300?'300':$q*$wxzs->bfb6)); ?>

                            
                        <?php elseif($wxzs->o_ts == '7'): ?>
                            <?php echo e($q*$wxzs->bfb7 - ($q*$wxzs->bfb7>300?'300':$q*$wxzs->bfb7)); ?>

                            
                        <?php endif; ?>元</p>

                </div>
                <div class="cler"></div>
            </div>
            <div class="zy ly">
                <label for="">帮助:</label>
                <a href="/mobile/Articlecenter19.html">常见问题</a>
                <a href="https://hztk5.kuaishang.cn/bs/im.htm?cSource=1&cas=69564___125636&fi=79140&ri=18245998447&vi=84d357f55f854a87b7683824f3938530&dp=http%3A%2F%2Fwww.delijiajiao.com%2F&_d=1494806260357&_tk=575c5551">沟通咨询/疑问</a>
            </div>
            
            <div class="cler"></div>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php echo $__env->make('phonedl.float.float', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script src="/phone/lichengphonedl/js/zepto.js"></script>
<script src="/phone/lichengphonedl/js/swiper-3.4.2.min.js"></script>
<script>
   $('.zuo').on('tap',function () {
       window.history.go(-1);
   })
   $('.tc').on('tap',function () {
       window.location.href='/outlogin.html'
   })
   $('.shouye').on('tap',function () {
       window.location.href=''
   })
   $('.center').on('tap',function () {
       window.location.href=''
   })
</script>
<script>
   var swiper = new Swiper('.swiper-container', {
       pagination: '.swiper-pagination',
       slidesPerView:4,
       paginationClickable: true,
       spaceBetween: 30,
       freeMode: true
   });
</script>
</body>
</html>