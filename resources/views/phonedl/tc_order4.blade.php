<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <title>订单管理已接的预约</title>
    <link rel="stylesheet" href="/phone/lichengphonedl/css/ddgyjdyy.css">
    <link rel="stylesheet" href="/phone/lichengphonedl/css/swiper.css">
    <link rel="stylesheet" href="/phone/lichengphonedl/css/indexx.css">
    <link rel="stylesheet" href="/phone/lichengphonedl/css/artModal.css">
    <script src="/phone/lichengphonedl/js/flexible.js"></script>
    <style>
        #time{
            font-size: .35rem;
            margin-top: .2rem;
            float: left;
            height: .58rem;

        }
        .tj{
            display: inline-block;
            float: right;
        }
        .tj>select{
            margin-top: .2rem;
            float: left;
            margin-right: .65rem;
            height: .68rem;
            font-size: .35rem;
        }
        #bc{
            font-size: .35rem;
            margin-top: .2rem;
            float: left;
            height: .65rem;
        }

    </style>
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
                <span class="skj" onclick="window.location.href='/mobile/tc_order1.html'">预约的单</span>
            </div>
            <div class="swiper-slide">
                <span class="apz  active" onclick="window.location.href='/mobile/tc_order4.html'">已接的单</span>
            </div>
            <div class="swiper-slide">
                <span class="skzz" onclick="window.location.href='/mobile/tc_order6.html'">正式授课</span>
            </div>
        </div>
        <div class="cler"></div>
    </div>
    <div class="sk">
        <a href="/mobile/tc_order4.html">试课中</a>
        <a href="/mobile/tc_order5.html">试课失败</a>
    </div>
    @foreach($skz as $skzs)
    <div class="lb" style="margin-top: 0">
        <div class="xy">
            <label for="">订单编号:</label>
            <span>{{ $skzs->id }}</span>
            <a href="/mobile/xsinfo{{ $skzs->id }}.html" class="rt">查看详情 <img src="/phone/lichengphonedl/images/gd@2x.png" alt="" class="rt"></a>
        </div>
        <div class="zy ly">
            <label for="">订单时间:</label>
            <span>{{ $skzs->sk_times }}</span>
        </div>
        <div class="zy ly"  id="app">
            <label for="">试课时间:</label>
            <!--<a href="javascript:void(0);">-->
              <!--点击修改-->
            <!--</a>-->
            <!--使用AJAX一部上传，我没写from表单，change事件-->
            <form action="" method="POST" class="tj">
                <input type="date" name="" id="time">
                <select name="" id=''>
                    <option value="上午">上午</option>
                    <option value="下午">下午</option>
                    <option value="晚上">晚上</option>
                    </select>
                <input type="submit" value="保存" name="" id="bc">
            </form>
            <!--<span>2017-08-09 上午</span>-->
            <div class="cler"></div>
        </div>
        <div class="zy ly">
            <label for="">试课地点:</label>
            <a href="#" class="ljtx" >立即填写</a>
            <!--获取模态中的input值传到这个input的value里面-->
            <input type="text" value="" style="display: none;">
            <div class="cler"></div>
        </div>

        <!--modal-->
        <div class="modal">
            <form action="" method="POST">
            <div class="modal-header" style="opacity: 1">
               <div>
                   <h4>请输入您的地址：</h4>
               </div>
                <div>
                    <input type="text" name="address" placeholder="新地点" id="address">
                </div>
                <div class="queren">
                    <input type="button" value="取消" class="qx">
                    <input type="submit" value="确认" style="background-color: #337AB7">
                </div>
            </div>
            </form>
        </div>
        <div class="ly wq" style="">
            <label for="">费用:</label><?php $q = $skzs->o_ts*$skzs->o_xs*$skzs->money ?>
            <div style="float: right">
                <p>课酬:{{ $skzs->money*$skzs->o_xs }}元/次</p>
                <p>周课酬:{{ $q }}元/周</p>
                <p>信息费:360元</p>
                <p>家长服务费:50元</p>
                <p>预付信息费:@if($skzs->o_ts == '1'){{ $q*$skzs->bfb1>300?'300':$q*$skzs->bfb1 }}@elseif($skzs->o_ts == '2'){{ $q*$skzs->bfb2>300?'300':$q*$skzs->bfb2 }}@elseif($skzs->o_ts == '3'){{ $q*$skzs->bfb3>300?'300':$q*$skzs->bfb3 }}@elseif($skzs->o_ts == '4'){{ $q*$skzs->bfb4>300?'300':$q*$skzs->bfb4 }}@elseif($skzs->o_ts == '5'){{ $q*$skzs->bfb5>300?'300':$q*$skzs->bfb5 }}@elseif($skzs->o_ts == '6'){{ $q*$skzs->bfb6>300?'300':$q*$skzs->bfb6 }}@elseif($skzs->o_ts == '7'){{ $q*$skzs->bfb7>300?'300':$q*$skzs->bfb7 }}@endif元</p>
                <p>成功后需要付信息费:@if($skzs->o_ts == '1')
                        {{ $q*$skzs->bfb1 - ($q*$skzs->bfb1>300?'300':$q*$skzs->bfb1) }}
                    @elseif($skzs->o_ts == '2')
                        {{ $q*$skzs->bfb2 - ($q*$skzs->bfb2>300?'300':$q*$skzs->bfb2) }}
                        {{-- {{ $q*$skzs->bfb2>300?'300':$q*$skzs->bfb2 }}--}}
                    @elseif($skzs->o_ts == '3')
                        {{ $q*$skzs->bfb3 - ($q*$skzs->bfb3>300?'300':$q*$skzs->bfb3) }}
                        {{-- {{ $q*$skzs->bfb3>300?'300':$q*$skzs->bfb3 }}--}}
                    @elseif($skzs->o_ts == '4')
                        {{ $q*$skzs->bfb4 - ($q*$skzs->bfb4>300?'300':$q*$skzs->bfb4) }}
                        {{--{{ $q*$skzs->bfb4>300?'300':$q*$skzs->bfb4 }}--}}
                    @elseif($skzs->o_ts == '5')
                        {{ $q*$skzs->bfb5 - ($q*$skzs->bfb5>300?'300':$q*$skzs->bfb5) }}
                        {{--{{ $q*$skzs->bfb5>300?'300':$q*$skzs->bfb5 }}--}}
                    @elseif($skzs->o_ts == '6')
                        {{ $q*$skzs->bfb6 - ($q*$skzs->bfb6>300?'300':$q*$skzs->bfb6) }}
                        {{--{{ $q*$skzs->bfb6>300?'300':$q*$skzs->bfb6 }}--}}
                    @elseif($skzs->o_ts == '7')
                        {{ $q*$skzs->bfb7 - ($q*$skzs->bfb7>300?'300':$q*$skzs->bfb7) }}
                        {{--{{ $q*$skzs->bfb7>300?'300':$q*$skzs->bfb7 }}--}}
                    @endif元</p>
            </div>
            <div class="cler"></div>
        </div>
        {{--<div class="zy ly">
            <label for="">授课订单:</label>
            <a href="">VIP 专享</a>
        </div>--}}
        <div class="zy ly">
            <label for="">介绍信/合同:</label>
            <a href="/hetong/{{ $skzs->id }}.html">点击查看</a>
        </div>
        <div class="zy ly">
            <label for="">试课结果填写:</label>
            <a href="">试课不成功</a>
            <a href="">试课成功</a>
        </div>
        <div class="footer">
            <a class="btn2" href="">审查订单</a>
            <a class="btn2" href="">支付信息费</a>
            <a class="btn1 btnActive" href="">诚意金解锁</a>
            <a class="btn1" href="">申请退款</a>
        </div>

    </div>
    @endforeach
</section>
@include('phonedl.float.float')
<script src="/phone/lichengphonedl/js/zepto.js"></script>
<script src="/phone/lichengphonedl/js/swiper-3.4.2.min.js"></script>
<script src="/phone/lichengphonedl/js/jquery-1.11.3.js"></script>
<script src="/phone/lichengphonedl/js/artModal.js"></script>

<script>
    $('.zuo').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
    $('.tc').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
    $('.shouye').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
    $('.center').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
    $('.ljtx').on('tap',function(){
//        $('.modal').show(1000)
        $('div.modal-header').show(1500);
    })
    $('.qx').on('tap',function () {
        $('div.modal-header').hide(1000)
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