<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>文章中心</title>
    <link rel="stylesheet" href="/phone/css/wzzx.css">
    <script src="/phone/js/flexible.js"></script>
<body style="background-color: #F1F1F1">
<header>
    <img src="/phone/images/zuo.png" alt="" class="zuo">
    <span>文章中心</span>
    <a href="/login.html"><img src="/phone/images/xr.png" alt="" class="rt you" style="height: 1.4rem;margin-right: .15rem"></a>
    <div class="cler"></div>
</header>
<section>
    <div class="nav">
        <span class="commonP " onclick="commonP();">常见问题
            <i class="icon iconDown iconUp"></i>
        </span>
        <span class="resources" onclick="resources();">资源中心
            <i class="icon iconDown iconUp"></i>
        </span>
        <div class="cler"></div>
    </div>
    <div class="huadong" style="">
        <div class="drop1">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ls->dh_status == '1'): ?>
              <a href="/mobile/Articlecenter<?php echo e($ls->dh_id); ?>.html" class="jycjwt"><?php echo e($ls->dh_Navigationbar); ?></a>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="huadong1" style="">
        <div class="drop2">
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($erj->dh_status == '0'): ?>
              <a href="/mobile/Articlecenter<?php echo e($erj->dh_id); ?>.html"><?php echo e($erj->dh_Navigationbar); ?></a>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php if($list !== null): ?>
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/mobile/Articlecontent<?php echo e($li->ar_id); ?>.html" style='color: #333;'>
            <div class="problem">
              <i></i>
              <h1 style='overflow: hidden;width: 60%;'><?php echo e(subtext($li->ar_title,10)); ?></h1>
              <?php if($li->ar_status == '1'): ?>
                　　<span class="z">置顶帖</span>
              <?php endif; ?>
              <span class='time'><?php echo e(substr($li->ar_time,0,10)); ?></span>
              <div class="cler"></div>
              <p><?php echo e($li->ar_jj); ?>····</p>
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
        <!-- 分页 -->
    <div class="fy">
        <a href="<?php echo e($list->Url($list->last)); ?>" class="top">上一页</a>
        <a href="<?php echo e($list->Url($list->next)); ?>" class="down">下一页</a>
        <div class="cler"></div>
    </div>
</section>

<script src='/phone/js/jquery-1.11.3.js'></script>
<script src="/phone/js/zepto.js"></script>
<script>
    $('.zuo').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
    $('.you').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
    $('.resources').on('tap',function(){
        $('.resources').addClass('active')
                       .siblings('.commonP').removeClass('active')
    })
    $('.commonP').on('tap',function(){
        $('.commonP').addClass('active')
            .siblings('.resources').removeClass('active');
    });

</script>
<script>
    function commonP(){
        if($('.drop1').is(":visible")){
            $('.drop1').fadeOut(1000)

        }else{
            $('.drop1').fadeIn(1000)
            $('.drop2').css('display','none')
        }
    }
    function resources(){
        if($('.drop2').is(':visible')){
            $('.drop2').fadeOut(1000)
        }else{
            $('.drop2').fadeIn(1000)
            $('.drop1').css('display','none')
        }
    }
</script>
</body>
</html>
