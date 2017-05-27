<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>快速请家教</title>
    <link rel="stylesheet" href="/phone/css/fast.css">
    <link rel="stylesheet" href="/phone/css/reset.css">
    <script src="/phone/js/flexible.js"></script>
</head>
<body>
    <div class="wrap">
        <div class="nav_header">
            <i class="header_left_icon header_icon" onclick="javascript :history.back(-1);"></i>
            <span>快速请家教</span> 
            <i class="header_right_icon header_icon"></i>
        </div>
        <section class="form_fastTutor">
            <div class="form_fastTutor_title">
                <i class="form_fastTutor_title_icon"></i>
                <span class="form_fastTutor_title_text">简单填写，快速预约老师</span>
            </div>
            <div class="form_fastTutor_content">
                <ul>
                    <li>
                        <span>联系人：</span><input type="text" name="" placeholder="请输入您的名字">
                    </li>
                    <li>
                        <span>科目：</span><input type="text" name="" placeholder="请输入需要辅导的科目">
                    </li>
                    <li>
                        <span>手机号：</span><input type="text" name="" placeholder="请输入您的手机号码">
                    </li>
                    <li>
                        <input type="text" name="" placeholder="请输入手机验证码">
                        <input class="yzm_btn" style="margin: 0" value="获取验证码" type="button" onclick="settime(this)"></input>
                    </li>
                </ul>
                <span class="tj_button">立即提交</span>
            </div>
        </section>
        <section class="tel_box">
            <div class="tel_box_1">
                <ul>
                    <li>
                        <i class="fz_icon fast_icon"></i>
                        <span><?php echo e(substr(session('cityname'),0,6)); ?>分站：<?php echo e(session('regionname')); ?></span>
                    </li>
                    <li>
                        <i class="bluephone_icon fast_icon"></i>
                        <span><?php echo e(session('phone')); ?></span>
                    </li>
                </ul>
            </div>
            <div class="tel_box_2">
                <ul>
                    <li style="margin: .3rem 0 0 0;">
                        <i class="redphone_icon fast_icon"></i>
                        <span>全国统一热线：400-8080-740</span>
                    </li>
                    <li>
                        <i class="wx_icon fast_icon"></i>
                        <span>微信号：<?php echo e(session('fz_wxhao')); ?></span>
                    </li>
                </ul>
            </div>
        </section>
        <?php echo $__env->make('phonedl.float.float', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

    <script>
        var countdown=60;
        function settime(obj) {
            if (countdown == 0) {
                obj.removeAttribute("disabled");
                obj.value="获取验证码";
                countdown = 60;
                return;
            } else {
                obj.setAttribute("disabled", true);
                obj.value="重新发送(" + countdown + ")";
                countdown--;
            }
            setTimeout(function() {
                    settime(obj) }
                ,1000)
        }
    </script>
</body>
</html>