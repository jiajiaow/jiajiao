<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学员个人中心</title>
    <link rel="stylesheet" type="text/css" href="/new/css/cheng_css.css">
    <link rel="stylesheet" href="/new/css/bootstrap.css">
    <script type="text/javascript" src='/new/js/jquery-2.2.3.min.js'></script>
    <script type="text/javascript" src='/delijiajiao/js/layer.js'></script>

    <script src="/admin/js/bootstrap.min.js"></script>

    <style type="text/css">
        body,p,h1,h2,h3,h4,h5,h6,ul,li{
            margin:0;
            padding:0;
            list-style:none;
            color:#333;
        }
        /*html,body,form{
            width:100%;
            height:100%;
            margin:0;
            padding:0;
        }*/
        body{
            font-family:"Microsoft yahei";
            font-size:12px;
            background-color: #fdfdfd;
            /*	margin:0;
                padding:0;*/
        }
        div{
            display:block;
        }
        #header{
            width:100%;
            height:100px;
            background-color: #FACC40;
        }
        .cheng_header{
            margin:auto;
            width: 1200px;
            height: 100px;
            /*background-color: #e4393c;*/
        }
        .lf{
            float: left ;
        }
        .rt{
            float: right ;
        }
        a{
            text-decoration:none;
        }
        a:hover{
            text-decoration:none;
        }

    </style>
@section('style')

@show
</head>
<body>
<header>
    <div id="header">
        <div class="cheng_header">
            <div style="width:246px;height:100px;" class="lf">
                <div class="lf img-div">
                    <img class="img-size" src="/new/images/logo.png">
                </div>
                <div class="a-div rt">
                    <a href="" class="lf wenzi">德栗家教</a>
                    <div class="cheng_line"></div>
                    <a href="" class="lf wenzi">个人中心</a>
                </div>
            </div>
            <div class="rt" style="width:270px;float:right;height:100px;">
                <div class="xingxi">
                    <a href="/faculty.html" class="lf wenzi">最新家教信息</a>
                    <div class="cheng_line"></div>
                    <a href="/" class="lf wenzi">返回首页</a>
                    <div class="cheng_line"></div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- 主体部分 -->
<div id="zhen_container">

@section('content')


@show
        <!-- 清楚浮动影响高度为0 这个很重要-->
    <div id="fudong">

    </div>
    <footer>
        <div class="footer">
            Copyright　2005-2017　广州学求易教育咨询有限公司　版权所有　<a style="color: #ccc;" href="http://www.miitbeian.gov.cn/" target="_blank">粤ＩＰＣ备：16062097号</a>
        </div>
    </footer>

    <script type="text/javascript" src='/new/js/script_cheng.js'></script>
    <script>
        $(document).ready(function() {
            if(location.hash) {
                $('a[href="' + location.hash + '"]').tab('show');

            }
            $(document.body).on("click", "a[data-toggle]", function(event) {
                location.hash = this.getAttribute("href");
            });
        });
        console.log($(window))

        $(window).on('popstate', function() {
            var anchor = location.hash || $("a[data-toggle=tab]").first().attr("href");
            console.log(anchor)
            $('a[href="' + anchor + '"]').tab('show');
        });
    </script>
    <style type="text/css">
        .nav-tabs>li {
            float: left;
            margin-bottom: -1px;
            width: 20%;
            text-align: center;
        }
    </style>


@section('js')


@show
</body>
</html>
