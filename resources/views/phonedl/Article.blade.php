<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>文章中心</title>
    <link rel="stylesheet" href="/phone/css/wzzx.css">
    <script src="/phone/js/flexible.js"></script>
<body style="background-color: #F1F1F1">
<header>
    <img src="/phone/images/zuo.png" alt="" class="zuo">
    <span>文章中心</span>
    <a href="/login.html"><img src="/phone/images/xr.png" alt="" class="rt you" style="height: 1.4rem;margin-right: .15rem"></a>
    <div class="cler"></div>
</header>
<section>
    <div class="nav">
        <span class="commonP " onclick="commonP();">常见问题
            <i class="icon iconDown iconUp"></i>
        </span>
        <span class="resources" onclick="resources();">资源中心{{--资源中心--}}
            <i class="icon iconDown iconUp"></i>
        </span>
        <div class="cler"></div>
    </div>
    <div class="huadong" style="">
        <div class="drop1">
        @foreach($data as $ls)
            @if($ls->dh_status == '1')
              <a href="/mobile/Articlecenter{{ $ls->dh_id }}.html" class="jycjwt">{{ $ls->dh_Navigationbar }}</a>
            @endif
        @endforeach
        </div>
    </div>
    <div class="huadong1" style="">
        <div class="drop2">
          @foreach($data as $erj)
            @if($erj->dh_status == '0')
              <a href="/mobile/Articlecenter{{ $erj->dh_id }}.html">{{ $erj->dh_Navigationbar }}</a>
            @endif
          @endforeach
        </div>
    </div>
    @if($list !== null)
        @foreach($list as $li)
        <a href="/mobile/Articlecontent{{ $li->ar_id }}.html" style='color: #333;'>
            <div class="problem">
              <i></i>
              <h1 style='overflow: hidden;width: 60%;'>{{ substr($li->ar_title,51,90) }}{{ $li->ar_jj }}</h1>
              @if($li->ar_status == '1')
                　　<span class="z">置顶帖</span>
              @endif
              <span class='time'>{{ substr($li->ar_time,0,10) }}</span>
              <div class="cler"></div>
              <p>{{ $li->ar_jj }}····</p>
            </div>
        </a>
        @endforeach
    @endif
        <!-- 分页 -->
    <div class="fy">
        <a href="{{ $list->Url($list->last) }}" class="top">上一页</a>
        <a href="{{ $list->Url($list->next) }}" class="down">下一页</a>
        <div class="cler"></div>
    </div>
</section>
@include('phonedl.float.float')
<script src='/phone/js/jquery-1.11.3.js'></script>
<script src="/phone/js/zepto.js"></script>
<script>
    $('.zuo').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
    $('.you').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
    $('.resources').on('tap',function(){
        $('.resources').addClass('active')
                       .siblings('.commonP').removeClass('active')
    })
    $('.commonP').on('tap',function(){
        $('.commonP').addClass('active')
            .siblings('.resources').removeClass('active');
    });

</script>
<script>
    function commonP(){
        if($('.drop1').is(":visible")){
            $('.drop1').fadeOut(1000)

        }else{
            $('.drop1').fadeIn(1000)
            $('.drop2').css('display','none')
        }
    }
    function resources(){
        if($('.drop2').is(':visible')){
            $('.drop2').fadeOut(1000)
        }else{
            $('.drop2').fadeIn(1000)
            $('.drop1').css('display','none')
        }
    }
</script>
</body>
</html>
