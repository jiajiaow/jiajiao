<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>学员库</title>
    <link rel="stylesheet" href="/phone/lichengphonedl/css/xyk.css">
    <script src="/phone/lichengphonedl/js/flexible.js"></script>
    <style>
        .fy{

            margin-bottom: .3rem;
            text-align: center;
        }
        .fy>a{
            display: inline-block;
            border: 1px solid #dddddd;
            background-color: #fff;
            color: #333;
            border-radius: .3rem;
            width: 2rem;
            height: .5rem;
            line-height: .5rem;
            text-align: center;
        }
    </style>
<body style="background-color: #F1F1F1">
<header>
    <img src="/phone/lichengphonedl/images/zuo.png" alt="" id="zuo">
    <div class="lf">
        <form action="/dosousuoid" method="post">
        <input class="rt" type="text" name="id"placeholder="请输入学员编号">
            <input type="hidden" class="sea_input" name="sb" value="2">
        <img src="/phone/lichengphonedl/images/sousuo@2x.png" alt="" class="lf tq">
        </form>
    </div>
    <img src="/phone/lichengphonedl/images/xr.png" alt="" class="rt" style="height: 1.4rem;" id="you">
    <div class="cler"></div> 
</header>
<section>
    <div class="zhen">
        <span onclick="dingdan();">订单状态
            <i class="icon iconDown iconUp"></i>
        </span>
        <span onclick="lsnx();">老师类型
            <i class="icon1 iconDown iconUp"></i>
        </span>
        <span style="border-right: none" onclick="szqy();">所在区域
            <i class="icon2 iconDown iconUp"></i>
        </span>
    </div>
    <!--第一个-->
    <div style="position: relative;height: 0;line-height: 0">
        <div class="dropnav drop-one">
            <a href="/xueyuans/x0.html" >新发布</a>
            <a href="/xueyuans/x1.html" >已安排</a>
            <a href="/xueyuans/x2.html" >已完成</a>
        </div>
    </div>
    <!--第二个-->
    <div style="position: relative;height: 0;line-height: 0">
        <div class="dropnav drop-two">
            <a href="/xueyuans/t大学生.html">大学生</a>
            <a href="/xueyuans/t专职老师.html">专职老师</a>
            <a href="/xueyuans/t其他.html">其他老师</a>
        </div>
    </div>
    <!--第三个-->
    <div style="position: relative;height: 0;line-height: 0">
        <div class="dropnav drop-three">
            <?php $__currentLoopData = $quyu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/xueyuans/q<?php echo e($qy->id); ?>.html"><?php echo e($qy->county_name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/mobile/xsinfo<?php echo e($li->id); ?>.html" style="color:#000;">
    <div style="margin-bottom: .25rem">
        <div class="cz">
            <div>
                <span><?php echo e($li->grade); ?></span>
            </div>
            <div class="nj">
                <h3><?php echo e(substr($li->user_name,0,3)); ?>学员请<?php echo e($li->subject_id); ?>家教</h3>
                <?php if($li->status == 0): ?>
                    <span class="fb">新发布</span>
                    
                    
                <?php elseif($li->status == 1): ?>
                    <span class="fb">已安排</span>
                <?php elseif($li->status == 2): ?>
                    <span class="fb">已完成</span>
                <?php endif; ?>
                <p><?php echo e(subtext($li->teacher_info,45)); ?></p>
                <img src="/phone/lichengphonedl/images/yusuan.png" alt="" style="width: .6rem">
                <span style="margin-right: .4rem">
                    <?php if($li->money == ''): ?>
                        执行德栗家教收费标准
                    <?php elseif($li->money == '面议'): ?>
                        面议
                    <?php elseif($li->money != '执行德栗家教收费标准' && $li->money !='面议'): ?>
                        <?php echo e($li->money*$li->o_xs); ?>元/次
                    <?php endif; ?></span>
                <img src="/phone/lichengphonedl/images/dw.png" alt="" style="width: .35rem" class="yb">
                <span><?php echo e($li->dq); ?></span>
            </div>
            <div>
                <span><?php echo e(date("Y-m-d",$li->time)); ?></span>
                <img class="you" src="/phone/lichengphonedl/images/right.png" alt="">
            </div>
            <div class="cler"></div>
        </div>
    </div></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <?php if($list->num > '10'): ?>
        <div class="fy">
            <a href="<?php echo e($list->Url($list->last)); ?>" class="top">上一页</a>
            <a href="<?php echo e($list->Url($list->next)); ?>" class="down">下一页</a>
            <div class="cler"></div>
        </div>
    <?php endif; ?>
</section>
<?php echo $__env->make('phonedl.float.float', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script src="/phone/lichengphonedl/js/zepto.js"></script>
<script src="/phone/lichengphonedl/js/jquery-1.11.3.js"></script>
<!--页面跳转-->
<script>
    $('#zuo').on('tap',function(){
        window.history.back();
    })
    $('#you').on('tap',function(){
        <?php if(session('tc_phone') != null): ?>
                window.location.href='/mobile/teacherinfo.html';
        <?php elseif(session('st_phone') != null): ?>
                window.location.href='/mobile/stinfo.html';
        <?php else: ?>
                window.location.href='/mobile/login.html';
        <?php endif; ?>
    })
    $('.you').on('tap',function(){
        window.location.href='http://www.baidu.com';
    })
</script>
<script>
    function dingdan(){
        if($(".drop-one").is(":visible")){
            $('.drop-one').fadeOut(1000);
            $(".zhen .icon").removeClass('iconUp')
                .addClass('iconDown')
        }else {
            $('.drop-one').fadeIn(1000);
            $(".zhen .icon").addClass('iconUp')
                .removeClass('iconDown')
        }
    }
    function lsnx(){
        if($(".drop-two").is(":visible")){
            $('.drop-two').fadeOut(1000);
            $(".zhen .icon1").removeClass('iconUp')
                .addClass('iconDown')
        }else {
            $('.drop-two').fadeIn(1000);
            $(".zhen .icon1").addClass('iconUp')
                .removeClass('iconDown')
        }
    }
    function szqy(){
        if($(".drop-three").is(":visible")){
            $('.drop-three').fadeOut(1000);
            $(".zhen .icon2").removeClass('iconUp')
                .addClass('iconDown')
        }else {
            $('.drop-three').fadeIn(1000);
            $(".zhen .icon2").addClass('iconUp')
                .removeClass('iconDown')
        }
    }
</script>
</body>
</html>