<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>学员库</title>
    <link rel="stylesheet" href="/phone/lichengphonedl/css/xyk.css">
    <script src="/phone/lichengphonedl/js/flexible.js"></script>
<body style="background-color: #F1F1F1">
<header>
    <img src="/phone/lichengphonedl/images/zuo.png" alt="" id="zuo">
    <div class="lf">
        <input class="rt" type="text" name=""placeholder="请输入学员编号/名字">
        <img src="/phone/lichengphonedl/images/sousuo@2x.png" alt="" class="lf tq">
    </div>
    <img src="/phone/lichengphonedl/images/xr.png" alt="" class="rt" style="height: 1.4rem;" id="you">
    <div class="cler"></div> {{--学员库--}}
</header>
<section>
    <div class="zhen">
        <span onclick="dingdan();">订单状态
            <i class="icon iconDown iconUp"></i>
        </span>
        <span onclick="lsnx();">老师类型
            <i class="icon1 iconDown iconUp"></i>
        </span>
        <span style="border-right: none" onclick="szqy();">所在区域
            <i class="icon2 iconDown iconUp"></i>
        </span>
    </div>
    <!--第一个-->
    <div style="position: relative;height: 0;line-height: 0">
        <div class="dropnav drop-one">
            <a href="">新发布</a>
            <a href="">已安排</a>
            <a href="">已完成</a>
        </div>
    </div>
    <!--第二个-->
    <div style="position: relative;height: 0;line-height: 0">
        <div class="dropnav drop-two">
            <a href="">大学生老师</a>
            <a href="">专职老师</a>
            <!--<a href=""></a>-->
            <!--<a href=""></a>-->
            <!--<a href=""></a>-->
            <!--<a href=""></a>-->
        </div>
    </div>
    <!--第三个-->
    <div style="position: relative;height: 0;line-height: 0">
        <div class="dropnav drop-three">
            <a href=""></a>
            <a href=""></a>

        </div>
    </div>
    @foreach($list as $li)
        <a href="/mobile/xsinfo{{ $li->id }}.html" style="color:#000;">
    <div style="margin-bottom: .25rem">
        <div class="cz">
            <div>
                <span>{{ $li->grade }}</span>
            </div>
            <div class="nj">
                <h3>{{ substr($li->user_name,0,3) }}学员请{{ $li->subject_id }}家教</h3>
                @if($li->status == 0)
                    <span class="fb">新发布</span>
                    {{--@elseif($li->status == 1)--}}
                    {{--<p id="tc" style="background-color: #99cc33;">  预约中 </p>--}}
                @elseif($li->status == 1)
                    <span class="fb">已安排</span>
                @elseif($li->status == 2)
                    <span class="fb">已完成</span>
                @endif
                <p>{{  subtext($li->teacher_info,45) }}</p>
                <img src="/phone/lichengphonedl/images/yusuan.png" alt="" style="width: .6rem">
                <span style="margin-right: .4rem">
                    @if($li->money == '')
                        执行德栗家教收费标准
                    @elseif($li->money == '面议')
                        面议
                    @elseif($li->money != '执行德栗家教收费标准' && $li->money !='面议')
                        {{ $li->money*$li->o_xs }}元/次
                    @endif</span>
                <img src="/phone/lichengphonedl/images/dw.png" alt="" style="width: .35rem" class="yb">
                <span>{{ $li->dq }}</span>
            </div>
            <div>
                <span>{{ date("Y-m-d",$li->time) }}</span>
                <img class="you" src="/phone/lichengphonedl/images/right.png" alt="">
            </div>
            <div class="cler"></div>
        </div>
    </div></a>
    @endforeach
   
   
</section>
@include('phonedl.float.float')
<script src="/phone/lichengphonedl/js/zepto.js"></script>
<script src="/phone/lichengphonedl/js/jquery-1.11.3.js"></script>
<!--页面跳转-->
<script>
    $('#zuo').on('tap',function(){
        window.history.back();
    })
    $('#you').on('tap',function(){
        @if(session('tc_phone') != null)
                window.location.href='/mobile/teacherinfo.html';
        @elseif(session('st_phone') != null)
                window.location.href='/mobile/stinfo.html';
        @else
                window.location.href='/mobile/login.html';
        @endif
    })
    $('.you').on('tap',function(){
        window.location.href='http://www.baidu.com';
    })
</script>
<script>
    function dingdan(){
        if($(".drop-one").is(":visible")){
            $('.drop-one').fadeOut(1000);
            $(".zhen .icon").removeClass('iconUp')
                .addClass('iconDown')
        }else {
            $('.drop-one').fadeIn(1000);
            $(".zhen .icon").addClass('iconUp')
                .removeClass('iconDown')
        }
    }
    function lsnx(){
        if($(".drop-two").is(":visible")){
            $('.drop-two').fadeOut(1000);
            $(".zhen .icon1").removeClass('iconUp')
                .addClass('iconDown')
        }else {
            $('.drop-two').fadeIn(1000);
            $(".zhen .icon1").addClass('iconUp')
                .removeClass('iconDown')
        }
    }
    function szqy(){
        if($(".drop-three").is(":visible")){
            $('.drop-three').fadeOut(1000);
            $(".zhen .icon2").removeClass('iconUp')
                .addClass('iconDown')
        }else {
            $('.drop-three').fadeIn(1000);
            $(".zhen .icon2").addClass('iconUp')
                .removeClass('iconDown')
        }
    }
</script>
</body>
</html>