<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>快速请家教</title>
    <link rel="stylesheet" href="/phone/lichengphonedl/css/ddxq.css">
    <link rel="stylesheet" href="/phone/lichengphonedl/css/nativeShare.css">
    <script src="/phone/lichengphonedl/js/flexible.js"></script>
<body style="background-color: #F1F1F1">
<header>
    <img src="/phone/lichengphonedl/images/zuo.png" alt="" class="zuo">
    <span>订单详情</span> 
    <img src="/phone/lichengphonedl/images/xr.png" alt="" class="rt you" style="height: 1.4rem;margin-right: .3rem">
    <div class="cler"></div>
</header>
<section>
    <div class="nav-one">
        <div>
            <h2><?php echo e($data->dq); ?><?php echo e($data->user_name); ?>请<?php echo e($data->grade); ?><?php echo e($data->subject_id); ?>家教</h2>
            <span>2017-02-02</span>
        </div>
        <div class="cler"></div>
        <div>
            <img src="/phone/lichengphonedl/images/yusuan.png" alt="">
            <span class="time"><?php echo e($data->money*$data->o_xs); ?>元/次</span>
            <span class="area"><?php echo e($data->dq); ?></span>
        </div>
        <div>
            <p><span><?php echo e($data->browsenu); ?></span>人浏览&nbsp;已有 <span><?php echo e($data->yynum); ?></span>人申请</p>
        </div>
        <div class="cler"></div>
    </div>
    <div class="nav-two">
        <img src="/phone/lichengphonedl/images/dw.png" alt="">
        <p>授课地点 <span><?php echo e($data->xx_dz); ?></span></p>
        <div class="cler"></div>
    </div>
    <div class="nav-three">
        <div class="parent">
            <div>1丶申请订单</div>
            <div>2丶待审核挑选</div>
            <div>3丶获取订单</div>
        </div>
    </div>
    <div class="nav-four">
        <div>
            <h1>学员信息</h1>
        </div>
        <div class="cz">
            <label for="">订单编号：</label><span>T<?php echo e($data->id); ?></span>
        </div>
        <div class="cz">
            <label for="">联系人：</label><span><?php echo e($data->user_name); ?></span>
        </div>
        <div class="cz">
            <label for="">求教科目：</label><span><?php echo e($data->subject_id); ?></span>
        </div>
        <div class="cz">
            <label for="">学员性别：</label><span><?php if($data->user_sex == ''): ?><?php elseif($data->user_sex == '2'): ?>女<?php elseif($data->user_sex == '1'): ?> 男 <?php elseif($data->user_sex == '3'): ?>男女不限<?php endif; ?></span>
        </div>
        <div class="cz">
            <label for="">学员年级：</label><span><?php echo e($data->grade); ?></span>
        </div>
        <div class="cz">
            <label for="">学员概况：</label><span><?php echo e($data->user_situation); ?></span>
        </div>
        <div class="cz">
            <label for="">授课次数</label><span><?php if($data->per_week == ','): ?>每周<?php echo e($data->o_ts); ?>次,每次<?php echo e($data->o_xs); ?>小时<?php else: ?><?php echo e($data->per_week); ?> <?php endif; ?></span>
        </div>
        <div class="cz">
            <label for="">可授课时间：</label><span><?php echo e($data->sk_times); ?></span>
        </div>
    </div>
    <div class="nav-four"style="margin-top: .3rem">
        <div>
            <h1>教员要求</h1>
        </div>
        <div class="cz">
            <label for="">性别：</label><span>  <?php if($data->teacher_sex == '1'): ?>男<?php elseif($data->teacher_sex == '2'): ?>女<?php elseif($data->teacher_sex=='3'): ?>男女不限<?php endif; ?></span>
        </div>
        <div class="cz">
            <label for="">教学方式：</label><span>教员上门</span>
        </div>
        <div class="cz">
            <label for="">老师类型:</label><span><?php echo e($data->ls_type); ?></span>
        </div>
        <div class="cz">
            <label for="">其他要求：</label><span><?php echo e($data->teacher_info); ?></span>
        </div>
    </div>
    <div class="nav-five">
        <span>不是德栗家教老师?</span>
        <a href="/mobile/reg.html">免费注册</a>
    </div>
</section>
<footer style="min-height: 1.5rem">
    <div class="share">
        <img src="/phone/lichengphonedl/images/share.png" alt="">分享
    </div>
    <div>
        <img src="/phone/lichengphonedl/images/upload.png" alt="">
        <a href="#">申请此订单</a>
    </div>
</footer>
<div id="hh">
    <div id="nativeShare" style="display: none">

    </div>
</div>
<script src="/phone/lichengphonedl/js/nativeShare.js"></script>
<!--页面分享-->
<script>
    var config = {
    };
    var share_obj = new nativeShare('nativeShare',config);
</script>
<script src="/phone/lichengphonedl/js/zepto.js"></script>
<script src="/phone/lichengphonedl/js/jquery-2.2.3.min.js"></script>
<script>
    $('.zuo').on('tap',function(){
        window.history.back();
    })
    $('.you').on('tap',function(){
        <?php if(session('tc_phone') != null): ?>
                window.location.href='/mobile/teacherinfo.html';
        <?php elseif(session('st_phone') != null): ?>
                window.location.href='/mobile/stinfo.html';
        <?php else: ?>
                window.location.href='/mobile/login.html';
        <?php endif; ?>
    })
    $('.share').on('tap',function () {
        if($('#nativeShare').is(':visible')){
            $('#nativeShare').slideUp()
        }else{
            $('#nativeShare').slideDown();
            var t= $(window).scrollTop();
            $('body,html').animate({'scrollTop':t+'1rem'});
        }
    })
</script>
</body>
</html>