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
        <a href="/mobile/tc_order1.html" style='background-color: #F7B529;color: #000000;'>安排中</a>
        <a href="/mobile/tc_order2.html">未选择</a>
        <a href="/mobile/tc_order3.html">已取消</a>
    </div>
<<<<<<< HEAD
    <div class="lb" style="margin-top: 0">
        <div class="xy">
            <label for="">订单编号:</label>
            <span>103666</span>
=======
    <?php $__currentLoopData = $yap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yaps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="lb" style="margin-top: 0">
        <div class="xy">
            <label for="">订单编号:</label>
            <span><?php echo e($yaps->id); ?></span>
>>>>>>> b7c76e198d62629a83e232984e23afcf059d0fea
            <a href="" class="rt">查看详情 <img src="/phone/lichengphonedl/images/gd@2x.png" alt="" class="rt"></a>
        </div>
        <div class="zy ly">
            <label for="">订单类型:</label>
<<<<<<< HEAD
            <span>签约教员单</span>
        </div>
        <div class="zy ly">
            <label for="">年级科目:</label>
            <span>初一数学</span>
        </div>
        <div class="zy ly">
            <label for="">地址:</label>
            <span>广州白云</span>
        </div>
        <div class="ly wq">
            <label for="">费用:</label>
            <div style="float: right">
                <p>课酬:180元/次</p>
                <p>周课酬:360元/周</p>
                <p>信息费:360元</p>
                <p>家长服务费:50元</p>
                <p>预付信息费:360元</p>
                <p>成功后需要付信息费:60元</p>
=======
            <span><?php echo e($yaps->tc_Signing =='是'?'签约订单':'普通订单'); ?></span>
        </div>
        <div class="zy ly">
            <label for="">年级科目:</label>
            <span><?php echo e($yaps->subject_id); ?></span>
        </div>
        <div class="zy ly">
            <label for="">地址:</label>
            <span><?php echo e($yaps->xx_dz); ?></span>
        </div>
        <div class="ly wq"><?php $q = $yaps->o_ts*$yaps->o_xs*$yaps->money ?>
            <label for="">费用:</label>
            <div style="float: right">
                <p>课酬:<?php echo e($yaps->money*$yaps->o_xs); ?>元/次</p>
                <p>周课酬:<?php echo e($q); ?>元/周</p>
                <p>信息费:360元</p>
                <p>家长服务费:50元</p>
                <p>预付信息费:<?php if($yaps->o_ts == '1'): ?><?php echo e($q*$yaps->bfb1>300?'300':$q*$yaps->bfb1); ?><?php elseif($yaps->o_ts == '2'): ?><?php echo e($q*$yaps->bfb2>300?'300':$q*$yaps->bfb2); ?><?php elseif($yaps->o_ts == '3'): ?><?php echo e($q*$yaps->bfb3>300?'300':$q*$yaps->bfb3); ?><?php elseif($yaps->o_ts == '4'): ?><?php echo e($q*$yaps->bfb4>300?'300':$q*$yaps->bfb4); ?><?php elseif($yaps->o_ts == '5'): ?><?php echo e($q*$yaps->bfb5>300?'300':$q*$yaps->bfb5); ?><?php elseif($yaps->o_ts == '6'): ?><?php echo e($q*$yaps->bfb6>300?'300':$q*$yaps->bfb6); ?><?php elseif($yaps->o_ts == '7'): ?><?php echo e($q*$yaps->bfb7>300?'300':$q*$yaps->bfb7); ?><?php endif; ?>元</p>
                <p>成功后需要付信息费:<?php if($yaps->o_ts == '1'): ?>
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

                        
                    <?php endif; ?>元</p>
>>>>>>> b7c76e198d62629a83e232984e23afcf059d0fea

            </div>
            <div class="cler"></div>
        </div>
        <div class="zy ly">
            <label for="">帮助:</label>
<<<<<<< HEAD
            <a href="">常见问题</a>
            <a href="">系统推荐订单？</a>
=======
            <a href="/mobile/Articlecenter19.html">常见问题</a>
            <a href="https://hztk5.kuaishang.cn/bs/im.htm?cSource=1&cas=69564___125636&fi=79140&ri=18245998447&vi=84d357f55f854a87b7683824f3938530&dp=http%3A%2F%2Fwww.delijiajiao.com%2F&_d=1494806260357&_tk=575c5551">沟通咨询/疑问</a>
>>>>>>> b7c76e198d62629a83e232984e23afcf059d0fea
        </div>
        <div class="footer">
            <a class="btn2" href="" style="width: 35%">诚意金获取订单</a>
            <a class="btn1 btnActive" href="">获取订单</a>
            <a class="btn1" href="">取消预约</a>
       </div>
       <div class="cler"></div>

   </div>
<<<<<<< HEAD
=======
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
>>>>>>> b7c76e198d62629a83e232984e23afcf059d0fea
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