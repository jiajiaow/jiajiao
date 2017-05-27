<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>快速请家教</title>
    <link rel="stylesheet" href="/phone/css/xxx.css">
    <script src="/phone/js/flexible.js"></script>
<body>
    <header>
        <img src="/phone/images/zuo.png" alt="" class="zuo">
        <span class="lf">成功提交</span>
        <a href="/mobile/login.html"><img src="/phone/images/xr.png" alt="" class="rt you" style="height: 1.4rem;margin-right: .3rem"></a>
        <div class="cler"></div>
    </header>
    <section>
        <div class="fg" style='display:none'>
            <img src="/phone/images/33.png" alt="">
        </div>
        <div class="fg">
            <span> [<i style='font-style: normal;color:#e4393c;'>德栗家教</i>]感谢您对德栗家教的支持</span>
        </div>
        <div class="fg sfg">
            <span>您已经成功提交家教信息，我们的客服将尽快联系您！为您安排合适优秀的教员，如有疑问，您也可以直接联系我们。</span>
        </div>
        <div class="fg">
           <span  style="font-size: .3rem">联系电话： <i style="font-style: normal;color: red">400-8080-740</i></span>
           <span style="font-size: .3rem">微信：<i style="font-style: normal;color: red">delijiajiao</i></span>
        </div>
        <div class="fg gf">
           <a href="https://hztk5.kuaishang.cn/bs/im.htm?cSource=1&cas=69564___125636&fi=79140&ri=18250381975&vi=b91fa36776ee4ca0bac77f7af86e3d04&ism=1&dp=http%3A%2F%2Fwww.delijiajiao.com%2Fmobile&_d=1495518714221324&_tk=b9cc3dd4">联系我们</a>
           <a href="/mobile">等待客服联系</a>
        </div>
    </section>
@include('phonedl.float.float')
    <script src="/phone/js/zepto.js"></script>
    <script>
        $('.zuo').on('tap',function(){
            window.history.go(-1);
        })
        $('footer').css({'position':'fixed','bottom':'0'})
    </script>
</body>
</html>
