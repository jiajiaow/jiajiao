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
        <span style="width: 80%"><input type="text" class="sea_input" placeholder="请输入学员编号/名字"></span>
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
            <li>
                <div class="teacher_avatar">
                    <img src="/phone/img/tc@2x.png" alt=""  style="width: 1.3rem;">
                </div>
                <div class="teacher_info">
                    <p class="teacher_name"><?php echo e(substr($li->tc_name,0,3)); ?>教员/<?php echo e($li->tc_sex=='1'?'男':'女'); ?><span class="teacher_num">T<?php echo e($li->id); ?></span></p>
                    <p class="teacher_desc"><?php echo e($li->tc_comments); ?></p>
                    <div class="teacher_msg">
                        <span><i class="teacher_school_icon"></i><?php echo e($li->tc_school); ?></span>
                        <span style="margin-left: .2rem"><i class="teacher_edu_icon"></i><?php echo e($li->tc_zhuanye); ?></span>
                    </div>
                </div>
                <div class="jt_right_box">
                    <i class="jt_right"></i>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </section>



    <footer>
        <ul>
            <li>
                <a href="index.html">
                    <i class="footer_home footer_icon"></i>

                    <p>首页</p></a>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="footer_my footer_icon" style="width:.38rem;"></i>
                    <p>我的</p>
                </a>
            </li>
            <li>
                <i class="footer_zx footer_icon"></i>
                <a href="http://wpa.qq.com/msgrd?v=3&uin=1774932105&site=qq&menu=yes">
                    <p>在线咨询</p>
                </a>

            </li>
            <li>
                <i class="footer_phone footer_icon"></i>
                <a href="tel:13113329950"><p>电话咨询</p></a>
            </li>
        </ul>
    </footer>
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
        width: 45%;
        padding: .18rem 14px .18rem 0;
        font-size: .32rem;
        background-size: .25rem;
        color: #000;
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