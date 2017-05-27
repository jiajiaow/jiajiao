<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>新订单</title>
    <link rel="stylesheet" href="/phone/lichengphonedl/css/xdd.css">
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
                <span class="skz active" onclick="window.location.href='/mobile/tc_page.html'">新订单</span>
            </div>
            <div class="swiper-slide">
                <span class="skj" onclick="window.location.href='/mobile/tc_order1.html'">预约的单</span>
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
    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="fd">
            <div class="fd-one">
                <div>
                    <h2>辅导科目:<?php echo e($l->subject_id); ?></h2>
                    <label for="">有责任心，熟悉授课内容，有家教经验优先</label>
                </div>
                <div>
                    <span>订单编号:T<?php echo e($l->id); ?></span>
                </div>
                <div class="cler"></div>
            </div>
            <div class="fd-two">
                <div>
                    <img src="/phone/lichengphonedl/images/yusuan.png" alt="">
                    <span><?php if($l->money =='面议'): ?> 面议 <?php else: ?> <?php echo e($l->money*$l->o_xs); ?>/次<?php endif; ?></span>
                    <img src="/phone/lichengphonedl/images/dw.png" alt="" class="dw">
                    <span><?php echo e(substr(session('cityname'),0,6)); ?>-<?php echo e($l->dq); ?></span>
                    <a href="/mobile/xsinfo<?php echo e($l->id); ?>.html" class="ljyy">立即预约</a>
                    <a href="/mobile/xsinfo<?php echo e($l->id); ?>.html" class="ck">查看</a>
                </div>
                <div class="cler"></div>
            </div>
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
       window.location.href='/mobile/outlogin.html'
   })
   $('.shouye').on('tap',function () {

   })
   $('.center').on('tap',function () {

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