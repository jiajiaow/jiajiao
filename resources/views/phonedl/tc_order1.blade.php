<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>预约的单</title>
    <link rel="stylesheet" href="/phone/lichengphonedl/css/yydd.css">
    <link rel="stylesheet" href="/phone/lichengphonedl/css/swiper.css">
    <script src="/phone/lichengphonedl/js/flexible.js"></script>
<body style="background-color: #F1F1F1">
<header>
    <img src="/phone/lichengphonedl/images/zuo.png" alt="" class="zuo">
    <span>订单管理</span>
    <img src="/phone/lichengphonedl/images/tc.png" alt="" class="rt tc">
    <div class="cler"></div>
</header>
<section>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <span class="skz" onclick="window.location.href='/mobile/tc_page.html'">新订单</span>
            </div>
            <div class="swiper-slide">
                <span class="skj active" onclick="window.location.href='/mobile/tc_order1.html'">预约的单</span>
            </div>
            <div class="swiper-slide">
                <span class="apz" onclick="window.location.href='/mobile/tc_order4.html'">已接的单</span>
            </div>
            <div class="swiper-slide">
                <span class="skzz" onclick="window.location.href='/mobile/tc_order6.html'">正式授课</span>
            </div>
        </div>
        <div class="cler"></div>
    </div>
    <div class="sk">
        <a href="/mobile/tc_order1.html" style='background-color: #F7B529;color: #000000;'>安排中</a>
        <a href="/mobile/tc_order2.html">未选择</a>
        <a href="/mobile/tc_order3.html">已取消</a>
    </div>
    @foreach($yap as $yaps)
    <div class="lb" style="margin-top: 0">
        <div class="xy">
            <label for="">订单编号:</label>
            <span>{{ $yaps->id }}</span>
            <a href="" class="rt">查看详情 <img src="/phone/lichengphonedl/images/gd@2x.png" alt="" class="rt"></a>
        </div>
        <div class="zy ly">
            <label for="">订单类型:</label>
            <span>{{ $yaps->tc_Signing =='是'?'签约订单':'普通订单' }}</span>
        </div>
        <div class="zy ly">
            <label for="">年级科目:</label>
            <span>{{ $yaps->subject_id }}</span>
        </div>
        <div class="zy ly">
            <label for="">地址:</label>
            <span>{{ $yaps->xx_dz }}</span>
        </div>
        <div class="ly wq"><?php $q = $yaps->o_ts*$yaps->o_xs*$yaps->money ?>
            <label for="">费用:</label>
            <div style="float: right">
                <p>课酬:{{ $yaps->money*$yaps->o_xs }}元/次</p>
                <p>周课酬:{{ $q }}元/周</p>
                <p>信息费:360元</p>
                <p>家长服务费:50元</p>
                <p>预付信息费:@if($yaps->o_ts == '1'){{ $q*$yaps->bfb1>300?'300':$q*$yaps->bfb1 }}@elseif($yaps->o_ts == '2'){{ $q*$yaps->bfb2>300?'300':$q*$yaps->bfb2 }}@elseif($yaps->o_ts == '3'){{ $q*$yaps->bfb3>300?'300':$q*$yaps->bfb3 }}@elseif($yaps->o_ts == '4'){{ $q*$yaps->bfb4>300?'300':$q*$yaps->bfb4 }}@elseif($yaps->o_ts == '5'){{ $q*$yaps->bfb5>300?'300':$q*$yaps->bfb5 }}@elseif($yaps->o_ts == '6'){{ $q*$yaps->bfb6>300?'300':$q*$yaps->bfb6 }}@elseif($yaps->o_ts == '7'){{ $q*$yaps->bfb7>300?'300':$q*$yaps->bfb7 }}@endif元</p>
                <p>成功后需要付信息费:@if($yaps->o_ts == '1')
                        {{ $q*$yaps->bfb1 - ($q*$yaps->bfb1>300?'300':$q*$yaps->bfb1) }}
                    @elseif($yaps->o_ts == '2')
                        {{ $q*$yaps->bfb2 - ($q*$yaps->bfb2>300?'300':$q*$yaps->bfb2) }}
                        {{-- {{ $q*$yaps->bfb2>300?'300':$q*$yaps->bfb2 }}--}}
                    @elseif($yaps->o_ts == '3')
                        {{ $q*$yaps->bfb3 - ($q*$yaps->bfb3>300?'300':$q*$yaps->bfb3) }}
                        {{-- {{ $q*$yaps->bfb3>300?'300':$q*$yaps->bfb3 }}--}}
                    @elseif($yaps->o_ts == '4')
                        {{ $q*$yaps->bfb4 - ($q*$yaps->bfb4>300?'300':$q*$yaps->bfb4) }}
                        {{--{{ $q*$yaps->bfb4>300?'300':$q*$yaps->bfb4 }}--}}
                    @elseif($yaps->o_ts == '5')
                        {{ $q*$yaps->bfb5 - ($q*$yaps->bfb5>300?'300':$q*$yaps->bfb5) }}
                        {{--{{ $q*$yaps->bfb5>300?'300':$q*$yaps->bfb5 }}--}}
                    @elseif($yaps->o_ts == '6')
                        {{ $q*$yaps->bfb6 - ($q*$yaps->bfb6>300?'300':$q*$yaps->bfb6) }}
                        {{--{{ $q*$yaps->bfb6>300?'300':$q*$yaps->bfb6 }}--}}
                    @elseif($yaps->o_ts == '7')
                        {{ $q*$yaps->bfb7 - ($q*$yaps->bfb7>300?'300':$q*$yaps->bfb7) }}
                        {{--{{ $q*$yaps->bfb7>300?'300':$q*$yaps->bfb7 }}--}}
                    @endif元</p>

            </div>
            <div class="cler"></div>
        </div>
        <div class="zy ly">
            <label for="">帮助:</label>
            <a href="/mobile/Articlecenter19.html">常见问题</a>
            <a href="https://hztk5.kuaishang.cn/bs/im.htm?cSource=1&cas=69564___125636&fi=79140&ri=18245998447&vi=84d357f55f854a87b7683824f3938530&dp=http%3A%2F%2Fwww.delijiajiao.com%2F&_d=1494806260357&_tk=575c5551">沟通咨询/疑问</a>
        </div>
        <div class="footer">
            <a class="btn2" href="" style="width: 35%">诚意金获取订单</a>
            <a class="btn1 btnActive" href="">获取订单</a>
            <a class="btn1" href="">取消预约</a>
       </div>
       <div class="cler"></div>

   </div>
    @endforeach
</section>
@include('phonedl.float.float')
<script src="/phone/lichengphonedl/js/zepto.js"></script>
<script src="/phone/lichengphonedl/js/swiper-3.4.2.min.js"></script>
<script>
   $('.zuo').on('tap',function () {
       window.history.go(-1);
   })
   $('.tc').on('tap',function () {
       window.location.href='/outlogin.html'
   })
   $('.shouye').on('tap',function () {
       window.location.href=''
   })
   $('.center').on('tap',function () {
       window.location.href=''
   })
</script>
<script>
   var swiper = new Swiper('.swiper-container', {
       pagination: '.swiper-pagination',
       slidesPerView:4,
       paginationClickable: true,
       spaceBetween: 30,
       freeMode: true
   });
</script>
</body>
</html>