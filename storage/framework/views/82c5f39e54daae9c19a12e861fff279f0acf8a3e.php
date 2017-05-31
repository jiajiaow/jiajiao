<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>快速请家教</title>
    <link rel="stylesheet" href="/phone/css/ksqjj.css">
    <script src="/phone/js/flexible.js"></script>
<body>
    <header>
        <img src="/phone/images/zuo.png" alt="" class="zuo">
        <span class="lf">快速请家教</span>
        <img src="/phone/images/xr.png" alt="" class="rt you" style="height: 1.4rem;margin-right: .3rem">
        <div class="cler"></div>
    </header>
    <section>
        <div class="fg">
            <img src="/phone/images/33.png" alt="">
        </div>
        <div class="fg">
            <span>恭喜您，您填写请家教需求订单已发布！</span>
        </div>
        <div class="fg">
            <span>本中心会在24小时内为您安排老师！</span>
        </div>
        <div class="fg">
            <a href="/mobile/yuyuexxform">填写学生详细资料</a>
        </div>
        <div class="fg">
            <p>您同时注册了本网站的会员，<span>用户名是您的手机号码</span>初始密码是您手机尾号后4位：<span><?php echo e(substr($phone,7,4)); ?></span></p>
            <p>您也可以去首页 <a href="/mobile">查看您发布的家教信息</a></p>
        </div>
    </section>
    <?php echo $__env->make('phonedl.float.float', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script src="/phone/js/zepto.js"></script>
    <script>
        $('.zuo').on('tap',function(){
            window.history.go(-1);
        })
        $('.you').on('tap',function(){
            window.location.href='/mobile/login.html'
        })
        $('footer').css({"position":'fixed','bottom':'0'})
    </script>
</body>
</html>
