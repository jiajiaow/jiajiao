<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <title>教员个人中心订单</title>
    <link rel="stylesheet" type="text/css" href="/new/css/cheng_css.css">
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <style type="text/css">
        body,p,h1,h2,h3,h4,h5,h6,ul,li{
            margin:0;
            padding:0;
            list-style:none;
            color:#333;
        }
        body{
            font-family:"Microsoft yahei";
            font-size:12px;
            background-color: #fdfdfd;
            /*	margin:0;
                padding:0;*/
        }
        div{
            display:block;
        }
        #header{
            width:100%;
            height:100px;
            background-color: #FACC40;
        }
        .cheng_header{
            margin:auto;
            width: 1200px;
            height: 100px;
            background-color: #FACC40;
        }
        .lf{
            float: left ;
        }
        .rt{
            float: right ;
        }
        a{
            text-decoration:none;
        }
        a:hover{
            text-decoration:none;
        }

    </style>
<?php $__env->startSection('style'); ?>

<?php echo $__env->yieldSection(); ?>
</head>
<body>
<header>
    <div id="header">
        <div class="cheng_header">
            <div style="width:246px;height:100px;" class="lf">
                <div class="lf img-div">
                    <img class="img-size" src="/new/images/logo.png">
                </div>
                <div class="a-div rt">
                    <a href="/" class="lf wenzi">德栗家教</a>
                    <div class="cheng_line"></div>
                    <a href="" class="lf wenzi">个人中心</a>
                </div>
            </div>
            <div class="rt" style="width:270px;float:right;height:100px;">
                <div class="xingxi">
                    <a href="/xueyuan.html" class="lf wenzi">最新学员信息</a>
                    <div class="cheng_line"></div>
                    <a href="/" class="lf wenzi">返回首页</a>
                    <div class="cheng_line"></div>
                    <a href="outlogin.html"><div class="glyphicon glyphicon-off tubiao"></div></a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- 主体部分 -->
<div id="zhen_container">

<?php $__env->startSection('content'); ?>


<?php echo $__env->yieldSection(); ?>
    <div id="fudong">
    </div>
    <footer>
        <div class="footer">
            Copyright　2005-2017　广州学求易教育咨询有限公司　版权所有　<a style="color: #ccc;" href="http://www.miitbeian.gov.cn/" target="_blank">粤ＩＰＣ备：16062097号</a>
        </div>
    </footer>
    <script type="text/javascript" src='/new/js/jquery-2.2.3.min.js'></script>
    <script type="text/javascript" src='/new/js/script_cheng.js'></script>
</body>
</html>
