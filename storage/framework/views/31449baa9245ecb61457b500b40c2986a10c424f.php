<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>教员库</title>
    <link rel="stylesheet" href="/phone/css/fast.css">
    <link rel="stylesheet" href="/phone/css/reset.css">
    <link rel="stylesheet" href="/phone/css/teacher.css">
    <script src="/phone/js/flexible.js"></script>
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
</head>
<body>
<div class="wrap" >
    <div class="nav_header">
        <i class="header_left_icon header_icon syy" ></i>
        <span style="width: 80%">
            <form action="/dosousuoid" method="post">
                <input type="text" name="id" class="sea_input" placeholder="请输入教员编号">
                <input type="hidden" class="sea_input" name="sb" value="1">
            </form>
        </span>
        <?php if(session('tc_phone') != null): ?>
            <a href="/mobile/teacherinfo.html"><i class="header_right_icon header_icon"></i></a>
        <?php elseif(session('st_phone') != null): ?>
            <a href="/mobile/stinfo.html"><i class="header_right_icon header_icon"></i></a>
        <?php else: ?>
            <a href="/mobile/login.html"><i class="header_right_icon header_icon"></i></a>
        <?php endif; ?>
    </div>

    <section class="nav_sele">
        <ul style="text-align: center">
            <li>
                <span class="Span" id="xx" onclick="xx();">学校</span>
                
                    
                
            </li>
            <li class="spacer"></li>
            <li>
                <span  class="Span" onclick="km()">科目</span>
                
                    
                
            </li>
            <li class="spacer"></li>
            <li>
                <span class="Span" onclick="xb()">性别</span>

            </li>
            <li class="spacer"></li>
            <li>
                <span class="Span" onclick="lb();">类型</span>
                
                    
                
            </li>
        </ul>
        <div style="position:absolute;width: 100%">
            <div id="xxx">
                <?php $__currentLoopData = $xx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/facultyp/e<?php echo e($x->id); ?>.html"><?php echo e($x->school_name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div style="position:absolute;width: 100%">
            <div id="km">
                <a href="/facultyp/k数学.html" >数学</a>
                <a href="/facultyp/k英语.html" >英语</a>
                <a href="/facultyp/k语文.html" >语文</a>
                <a href="/facultyp/k物理.html" >物理</a>
                <a href="/facultyp/k化学.html" >化学</a>
            </div>
        </div>
        <div style="position:absolute;width: 100%">
            <div id="xb">

                <a href="/facultyp/g1.html" style="width: 48%" >男</a>
                <a href="/facultyp/g0.html" style="width: 48%" >女</a>

            </div>
        </div>
        <div style="position:absolute;width: 100%">
            <div id="lb">
                <a href="/facultyp/b大学生.html" >大学生</a>
                <a href="/facultyp/b专职老师.html" >专职老师</a>
                <a href="/facultyp/b其他.html" >其他</a>
            </div>
        </div>
    </section>


    <section class="teacher_box">
        <ul>
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="/mobile/teacher/detail/<?php echo e($li->id); ?>.html" style="color:#000;"><li>
                <div class="teacher_avatar">
                    <img src="
                    <?php if($li->tc_photo== ''): ?>
                            /phone/img/tc2x.png
                    <?php else: ?>
                            <?php echo e($li->tc_photo); ?>

                        <?php endif; ?>" alt=""  style="width: 1.3rem;">
                </div>
                <div class="teacher_info">
                    <p class="teacher_name"><?php echo e(substr($li->tc_name,0,3)); ?>教员/<?php echo e($li->tc_sex=='1'?'男':'女'); ?><span class="teacher_num">T<?php echo e($li->id); ?></span></p>
                    <p class="teacher_desc"><?php echo e(subtext($li->tc_comments,10)); ?></p>
                    <div class="teacher_msg">
                        <span><i class="teacher_school_icon"></i><?php echo e($li->tc_school=='如无上述学校请手动输入'?'':$li->tc_school); ?></span>
                        <span style="margin-left: .2rem"><i class="teacher_edu_icon"></i><?php echo e($li->tc_zhuanye); ?></span>
                    </div>
                </div>
                <div class="jt_right_box">
                    <i class="jt_right"></i>
                </div>
            </li></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        
        <?php if($list->num > '10'): ?>
        <div class="fy">
            <a href="<?php echo e($list->Url($list->last)); ?>" class="top">上一页</a>
            <a href="<?php echo e($list->Url($list->next)); ?>" class="down">下一页</a>
            <div class="cler"></div>
        </div>
        <?php endif; ?>
    </section>
    <?php echo $__env->make('phonedl.float.float', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<style>
    .wrap{
        background-color: #f1f7ff;
    }
    ::-webkit-input-placeholder{
        color: #cccccc;
        text-align: center;
    }
    select {
        border: none;
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        background: url(/phone/img/csj.png) no-repeat scroll right center transparent;
        width: 55%;
        font-size: .32rem;
        background-size: .25rem;
        color: #000;
        height: 1rem;
    }
    .Span{
        display: inline-block;
        line-height: 1rem;
        -moz-appearance: none;
        -webkit-appearance: none;
        background: url(/phone/img/csj.png) no-repeat scroll right center transparent;
        width: 55%;
        font-size: .32rem;
        background-size: .25rem;
        color: #000;
        height: 1rem;
        font-size: .3rem;
    }
    #xxx,#km,#xb,#lb{
        position:relative;
        background: rgba(211,211,211,1);
        z-index: 999;
        display:none;
        width: 100%;

    }
    #xxx>a,#km>a,#xb>a,#lb>a{
        display: inline-block;
        height: 1rem;
        line-height: 1rem;
        width: 32.3%;
        color: #333;
        text-align: center;
        font-size: .35rem;
    }
    li.spacer {
        overflow: hidden;
        width: 1px;
        height: 0.3rem;
        background-color: #ffce40;

    }
    .sea_input {
        width: 100%;
        height: .6rem;
        border: none;
        font-size: .3rem;
    }
    .teacher_box{
        padding-bottom: 1rem;
    }
</style>
<script src="/phone/lichengphonedl/js/zepto.js"></script>
<script src="/phone/lichengphonedl/js/jquery-1.11.3.js"></script>
<script>
    function xx(){
        $('#km').hide();
        $('#xb').hide();
        $('#lb').hide();
        if($("#xxx").is(":visible")){
            $('#xxx').fadeOut(1000);
        }else {
            $('#xxx').fadeIn(1000);
        }
    }
    function km(){
        $('#xxx').hide();
        $('#xb').hide();
        $('#lb').hide();
        if($("#km").is(":visible")){
            $('#km').fadeOut(1000);
        }else {
            $('#km').fadeIn(1000);
        }
    }
    function xb(){
        $('#xxx').hide();
        $('#km').hide();
        $('#lb').hide();
        if($("#xb").is(":visible")){

            $('#xb').fadeOut(1000);
        }else {
            $('#xb').fadeIn(1000);
        }
    }
    function lb(){
        $('#xxx').hide();
        $('#km').hide();
        $('#xb').hide();
        if($("#lb").is(":visible")){

            $('#lb').fadeOut(1000);
        }else {
            $('#lb').fadeIn(1000);
        }
    }
    $('.syy').on('tap',function(){
        window.history.go(-1);
    })
</script>
</body>
</html>