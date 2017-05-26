<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>快速请家教</title>
    <link rel="stylesheet" href="/phone/lichengphonedl/css/ddxq.css">
    <link rel="stylesheet" href="/phone/lichengphonedl/css/nativeShare.css">
    <script src="/phone/lichengphonedl/js/flexible.js"></script>
<body style="background-color: #F1F1F1">
<header>
    <img src="/phone/lichengphonedl/images/zuo.png" alt="" class="zuo">
    <span>订单详情</span> {{--快速请家教--}}
    <img src="/phone/lichengphonedl/images/xr.png" alt="" class="rt you" style="height: 1.4rem;margin-right: .3rem">
    <div class="cler"></div>
</header>
<section>
    <div class="nav-one">
        <div>
            <h2>{{ $data->dq }}{{ $data->user_name }}请{{ $data->grade }}{{ $data->subject_id }}家教</h2>
            <span>2017-02-02</span>
        </div>
        <div class="cler"></div>
        <div>
            <img src="/phone/lichengphonedl/images/yusuan.png" alt="">
            <span class="time">{{ $data->money*$data->o_xs }}元/次</span>
            <span class="area">{{ $data->dq }}</span>
        </div>
        <div>
            <p><span>{{ $data->browsenu }}</span>人浏览&nbsp;已有 <span>{{ $data->yynum }}</span>人申请</p>
        </div>
        <div class="cler"></div>
    </div>
    <div class="nav-two">
        <img src="/phone/lichengphonedl/images/dw.png" alt="">
        <p>授课地点 <span>{{ $data->xx_dz }}</span></p>
        <div class="cler"></div>
    </div>
    <div class="nav-three">
        <div class="parent">
            <div>1丶申请订单</div>
            <div>2丶待审核挑选</div>
            <div>3丶获取订单</div>
        </div>
    </div>
    <div class="nav-four">
        <div>
            <h1>学员信息</h1>
        </div>
        <div class="cz">
            <label for="">订单编号：</label><span>T{{ $data->id }}</span>
        </div>
        <div class="cz">
            <label for="">联系人：</label><span>{{ $data->user_name }}</span>
        </div>
        <div class="cz">
            <label for="">求教科目：</label><span>{{ $data->subject_id }}</span>
        </div>
        <div class="cz">
            <label for="">学员性别：</label><span>@if($data->user_sex == '')@elseif($data->user_sex == '2')女@elseif($data->user_sex == '1') 男 @elseif($data->user_sex == '3')男女不限@endif</span>
        </div>
        <div class="cz">
            <label for="">学员年级：</label><span>{{ $data->grade }}</span>
        </div>
        <div class="cz">
            <label for="">学员概况：</label><span>{{ $data->user_situation }}</span>
        </div>
        <div class="cz">
            <label for="">授课次数</label><span>@if($data->per_week == ',')每周{{ $data->o_ts }}次,每次{{ $data->o_xs }}小时@else{{ $data->per_week }} @endif</span>
        </div>
        <div class="cz">
            <label for="">可授课时间：</label><span>{{ $data->sk_times}}</span>
        </div>
    </div>
    <div class="nav-four"style="margin-top: .3rem">
        <div>
            <h1>教员要求</h1>
        </div>
        <div class="cz">
            <label for="">性别：</label><span>  @if($data->teacher_sex == '1')男@elseif($data->teacher_sex == '2')女@elseif($data->teacher_sex=='3')男女不限@endif</span>
        </div>
        <div class="cz">
            <label for="">教学方式：</label><span>教员上门</span>
        </div>
        <div class="cz">
            <label for="">老师类型:</label><span>{{ $data->ls_type }}</span>
        </div>
        <div class="cz">
            <label for="">其他要求：</label><span>{{ $data->teacher_info }}</span>
        </div>
    </div>
    <div class="nav-five">
        <span>不是德栗家教老师?</span>
        <a href="/mobile/reg.html">免费注册</a>
    </div>
</section>
<footer style="min-height: 1.5rem">
    <div class="share">
        <img src="/phone/lichengphonedl/images/share.png" alt="">分享
    </div>
    <div>
        <img src="/phone/lichengphonedl/images/upload.png" alt="">
        <a href="#">申请此订单</a>
    </div>
</footer>
<div id="hh">
    <div id="nativeShare" style="display: none">

    </div>
</div>
<script src="/phone/lichengphonedl/js/nativeShare.js"></script>
<!--页面分享-->
<script>
    var config = {
    };
    var share_obj = new nativeShare('nativeShare',config);
</script>
<script src="/phone/lichengphonedl/js/zepto.js"></script>
<script src="/phone/lichengphonedl/js/jquery-2.2.3.min.js"></script>
<script>
    $('.zuo').on('tap',function(){
        window.history.back();
    })
    $('.you').on('tap',function(){
        window.location.href='http://ww.baidu.com'
    })
    $('.share').on('tap',function () {
        if($('#nativeShare').is(':visible')){
            $('#nativeShare').slideUp()
        }else{
            $('#nativeShare').slideDown();
            var t= $(window).scrollTop();
            $('body,html').animate({'scrollTop':t+'1rem'});
        }
    })
</script>
</body>
</html>