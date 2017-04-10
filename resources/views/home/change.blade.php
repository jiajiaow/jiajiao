<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更多城市</title>
    <link rel="stylesheet" href="home/dq/css/style.css">
</head>
<body>
<div id="city-top">
    <div class="city-contain">
        <img src="home/dq/images/city_top.png">
    </div>
</div>
<div id="city-content">
    <div class="city-contain">
        <div class="top-link">
            <a href="http://www.lizhijiajiao.com" class="btn">进入上海家教114</a>
        </div>
        <div class="city-list">
            <dl class="first">
                <dt>热门城市</dt>
                <dd><a href="http://www.lizhijiajiao.com/">广州</a></dd>
                <dd><a href="http://bj.lizhijiajiao.com/">北京</a></dd>
                <dd><a href="http://tj.lizhijiajiao.com/">天津</a></dd>
                <dd><a href="http://gz.lizhijiajiao.com/">广州</a></dd>
                <dd><a href="http://sz.lizhijiajiao.com/">深圳</a></dd>
                <dd><a href="http://hz.lizhijiajiao.com/">杭州</a></dd>
                <dd><a href="http://nj.lizhijiajiao.com/">南京</a></dd>
                <dd><a href="http://wh.lizhijiajiao.com/">武汉</a></dd>
                <dd><a href="http://xa.lizhijiajiao.com/">西安</a></dd>
                <dd><a href="http://cd.lizhijiajiao.com/">成都</a></dd>
            </dl>
            @foreach($data as $data)
            <dl>
                <dt>{{ $data->provice_name }}</dt> <!-- 省 -->
                @foreach($re as $re1)
                    @if($data->provice_id == $re1->province_id && $re1->prefix !== null)
                <dd><a href="http://{{ $re1->prefix }}.lizhijiajiao.com"  target="_blank" rel="nofollow">{{ $re1->city_name }}</a></dd>
                    @endif
                @endforeach
            </dl>
            @endforeach
        </div>
    </div>
</div>
<div id="city-footer">
    <div class="city-contain">
        <p>© 2005－2016版权所有：上海四帆固教育科技有限公司-家教114 | 沪ICP备09062748号-5</p>
    </div>
</div>
</body>
</html>
