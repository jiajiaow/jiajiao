<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学员个人中心</title>
    <link rel="stylesheet" href="/phone/css/fast.css">
    <link rel="stylesheet" href="/phone/css/reset.css">
    <link rel="stylesheet" href="/phone/css/ele.css">
    <link rel="stylesheet" href="/phone/css/my.css">
    <script src="/phone/js/flexible.js"></script>
</head>
<body>
<div class="wrap" id="app">
    <div class="nav_header">
        <i class="header_left_icon header_icon" onclick="javascript :history.back(-1);"></i>
        <span>个人中心</span> 
        <a href="/mobile/outlogin.html"><span class="ex_icon"></span></a>
    </div>
    <div class="com_content_box">
        <div class="my_details_box">
            <div class="my_details_top">
                <div class="mdt_ava">
                    <img src="/phone/img/tc@2x.png" alt="" style="width:2.3rem;">
                </div>
                <div class="mdt_msg">
                    <p class="mdtm_name"><?php echo e($user->name); ?><span class="mdym_num"></span></p>
                    <p class="mdtm_phone">欢迎来到学员个人中心</p>
                    <p class="mdtm_see">
                        <span>
                            手机号：<?php echo e($user->phone); ?>

                        </span>
                        <span style="margin-left: .5rem;">

                        </span>
                    </p>
                </div>
            </div>
            <div class="my_details_bottom">
                <ul class="my_details_bottom_ul">
                    <li>
                        <p>1200</p>
                        <p>积分</p>
                    </li>
                    <li>
                        <p>银卡</p>
                        <p>积分等级</p>
                    </li>
                    <li>
                        <p>金牌学员</p>
                        <p>教员等级</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="my_information">
            <ul>
                <li>
                    <i class="icons my_icon"></i>
                    <div>
                        <p>个人资料维护</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
                <li>
                    <i class="icons my_dd"></i>
                    <div>
                        <p>订单管理</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
                <li>
                    <i class="icons my_setdd"></i>
                    <div>
                        <p>授课订单管理</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
                <li>
                    <i class="icons my_xy"></i>
                    <div>
                        <p>我的学员</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
            </ul>
        </div>
        <div class="my_money my_information">
            <ul>
                <li>
                    <i class="icons my_cw"></i>
                    <div>
                        <p>财务中心</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
                <li>
                    <i class="icons my_shop"></i>
                    <div>
                        <p>积分商城</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
                <li>
                    <i class="icons my_info"></i>
                    <div>
                        <p>沟通中心</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <?php echo $__env->make('phonedl.float.float', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<style>
    select {
        border: none;
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        background-image: url(/phone/img/hsj.png);
        background-repeat: no-repeat;
        background-position: 1.4rem .3rem;
        width: 24%;
        padding: .18rem .5rem.18rem .5rem;
        font-size: .32rem;
        background-size: .25rem;
        color: #000;
        background-color: #f7b529;
        border-radius: 10px;
    }
</style>
<script src="/phone/js/vue.js"></script>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/phone/js/ele.js"></script>
<script>


    var app = new Vue({
        el: '#app',
        data: {

        },
        methods:{

        },
        mounted:function () {

        }
    })
</script>
</body>
</html>