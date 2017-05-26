<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章中心</title>
    <link rel="stylesheet" href="/phone/css/fast.css">
    <link rel="stylesheet" href="/phone/css/reset.css">
    <link rel="stylesheet" href="/phone/css/ele.css">
    <link rel="stylesheet" href="/phone/css/send_message.css">
    <script src="/phone/js/flexible.js"></script>
</head>
<body>
<div class="wrap" id="app">
    <div class="nav_header">
        <i class="header_left_icon header_icon" onclick="javascript :history.back(-1);"></i>
        <span>文章中心</span> 
        <span></span>
    </div>

    <div class="com_content_box" >
        <div style="padding: 0 .2rem; padding-bottom:2rem; " >
            <h2 class="text_title"><?php echo e($data->ar_title); ?></h2>
            <p class="time_box"><?php echo e($data->ar_time); ?></p>
            <p class="text_content_box"><?php echo e($fz->fz_hade); ?><?php echo $data->ar_content; ?><?php echo e($fz->fz_footer); ?></p>

            <div class="img_box">
                <img src="">
            </div>
        </div>
    </div>

    <?php echo $__env->make('phonedl.float.float', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<style>
    .wrap{
        background: none;
        height: auto;
    }
h2.text_title {
    padding-top: .5rem;
}
.time_box {
    /* padding: .5rem 0; */
    margin-top: .2rem;
}
.text_content_box {
    font-size: .38rem;
    padding: .5rem 0;

}
    input{
        -webkit-appearance: none;
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
        mounted:function () {

        },
        methods:{

        }
    })
</script>
</body>
</html>
