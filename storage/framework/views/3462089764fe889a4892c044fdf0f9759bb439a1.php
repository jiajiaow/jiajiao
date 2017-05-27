<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>教员库</title>
    <link rel="stylesheet" href="/phone/css/fast.css">
    <link rel="stylesheet" href="/phone/css/reset.css">
    <link rel="stylesheet" href="/phone/css/teacher.css">
    <script src="/phone/js/flexible.js"></script>
</head>
<body>
<div class="wrap" >
    <div class="nav_header">
        <i class="header_left_icon header_icon"></i>
        <span style="width: 80%">
            <form action="" method="post">
                <input type="text" class="sea_input" placeholder="请输入学员编号/名字">
            </form>
        </span>
        <i class="header_right_icon header_icon"></i>
    </div>

    <section class="nav_sele">
        <ul style="text-align: center">
            <li>
                <select name="" id="">
                    <option value="">学校</option>
                </select>
            </li>
            <li class="spacer"></li>
            <li>
                <select name="" id="">
                    <option value="">科目</option>
                </select>
            </li>
            <li class="spacer"></li>
            <li>
                <select name="" id="">
                    <option value="">性别</option>
                </select>
            </li>
            <li class="spacer"></li>
            <li>
                <select name="" id="">
                    <option value="">类型</option>
                </select>
            </li>
        </ul>
    </section>


    <section class="teacher_box">
        <ul>
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="/mobile/teacher/detail/<?php echo e($li->id); ?>.html" style="color:#000;"><li>
                <div class="teacher_avatar">
                    <img src="/phone/img/tc@2x.png" alt=""  style="width: 1.3rem;">
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
</style>

</body>
</html>