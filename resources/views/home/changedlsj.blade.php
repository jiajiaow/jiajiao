<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更多城市</title>
    <link rel="stylesheet" href="home/dq/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>
<div id="city-top">
    <div style="width: 100%" class="city-contain">

        <img style="width: 100%" src="home/dq/images/city_top.png">
    </div>
</div>
<div id="city-content">
    <div class="city-contain">
        <div class="top-link">
            @if(session('Template') == '1')
            <a href="http://www.lizhijiajiao.com/mobile" class="btn">进入栗志家教</a>
            @else
            <a href="http://www.delijiajiao.com/mobile" class="btn">德栗家教</a>
            @endif
        </div>
        <div class="city-list">
            <dl style="margin-top: 10px;" class="first">
                <dt>热门城市</dt>
                <dd><a href="http://www.delijiajiao.com/mobile">广州</a></dd>
                <dd><a href="http://bj.delijiajiao.com/mobile">北京</a></dd>
                <dd><a href="http://tj.delijiajiao.com/mobile">天津</a></dd>
                <dd><a href="http://sz.delijiajiao.com/mobile">深圳</a></dd>
                <dd><a href="http://hz.delijiajiao.com/mobile">杭州</a></dd>
                <dd><a href="http://nj.delijiajiao.com/mobile">南京</a></dd>
                <dd><a href="http://wh.delijiajiao.com/mobile">武汉</a></dd>
                <dd><a href="http://xa.delijiajiao.com/mobile">西安</a></dd>
                <dd><a href="http://cd.delijiajiao.com/mobile">成都</a></dd>
            </dl>
            @foreach($data as $data)
            <dl>
                <dt>{{ $data->provice_name }}</dt> <!-- 省 -->
                @foreach($re as $re1)
                    @if($data->provice_id == $re1->province_id && $re1->prefix !== null)
                    @if(session('Template') == '1')
                <dd><a href="http://{{ $re1->prefix }}.lizhijiajiao.com/mobile"  rel="nofollow">{{ substr($re1->city_name,0,9) }}</a></dd>
                    @else
                <dd><a href="http://{{ $re1->prefix }}.delijiajiao.com/mobile"   rel="nofollow">{{ substr($re1->city_name,0,9) }}</a></dd>
                    @endif
                    @endif
                @endforeach
            </dl>
            @endforeach
        </div>
    </div>
</div>
<div id="city-footer">
    <div class="city-contain">
        <p>© 2005－2017版权所有：广州学求易教育咨询有限公司
            | 粤ICP备16062097号-4
        </p>
    </div>
</div>
</body>
</html>
