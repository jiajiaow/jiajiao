<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" charset='utf-8'/>
  <meta name="applicable-device" content="pc" />
  <title>{{ session('regionname') }}</title>
  <meta name="keywords" content="【德栗家教忘】 - 您身边的家教" />
  <meta name="description" content="【德栗家教忘】 - 您身边的家教"/>
  <script src="/delijiajiao/js/jquery-1.7.2.min.js"></script>
  <link rel="stylesheet" href="/delijiajiao/css/index.css" onerror="tracker.resErr(this)" />
  <link rel="stylesheet" href="/delijiajiao/css/style.css" onerror="tracker.resErr(this)" />
  <link rel="stylesheet" href="/delijiajiao/css/style1.css" onerror="tracker.resErr(this)" />
  <link rel="stylesheet" href="/delijiajiao/css/common.css" onerror="tracker.resErr(this)" />
  {{-- <link href="/home/css/style.css" rel="stylesheet" type="text/css" /> --}}
@section('style')

@show
<script type="text/javascript">
function nTabs(thisObj,Num){
if(thisObj.className == "active")return;
var tabObj = thisObj.parentNode.id;
var tabList = document.getElementById(tabObj).getElementsByTagName("li");
for(i=0; i <tabList.length; i++)
{
  if (i == Num)
  {
   thisObj.className = "active";
      document.getElementById(tabObj+"_Content"+i).style.display = "block";
  }else{
   tabList[i].className = "normal";
   document.getElementById(tabObj+"_Content"+i).style.display = "none";
  }
}
}
</script>

 </head>
 <!--[if lt IE 7 ]> <body class="ie6 lt-ie8"> <![endif]-->
 <!--[if IE 7 ]>    <body class="ie7 lt-ie8"> <![endif]-->
 <!--[if IE 8 ]>    <body class="ie8 subCategory-gongzuo-page"> <![endif]-->
 <!--[if (gte IE 9)|!(IE)]><!-->
 <body class="subCategory-gongzuo-page">
  <!--<![endif]-->
  <header>
   <div>
    <div class="toolbar">
     <div class="toolbar-link">
家教上门联系电话：{{ session('phone') }}
     </div>
     <ul id="user-tools" class="navbar-nav">
         @if(session('tc_name') != null or session('tc_phone') != null)
             <li><arel="nofollow" data-toggle="userAuth" data-type="reg">尊敬的{{ substr(session('tc_name'),0,3) }}教员</a>  </li>
             <li><a href="/grzx.html" rel="nofollow" data-toggle="userAuth" data-type="reg">教员中心</a></li>
             <li><a href="/outlogin.html" rel="nofollow" data-toggle="userAuth" data-type="reg">退出</a></li>
             @else
             <li><a href="/reg.html" rel="nofollow" data-toggle="userAuth" data-type="reg">教员注册</a></li>
             <li><a href="/login.html" rel="nofollow" data-toggle="userAuth" data-type="login">教员登录</a></li>
             <li><a href="#" rel="nofollow" data-toggle="userAuth" data-type="login">学员登录</a></li>
             <li><a href="#" rel="nofollow" data-toggle="userAuth" data-type="login">快速请家教</a></li>
             <li><a href="#" target="_blank">请家教帮助</a></li>
         @endif
     </ul>
    </div>
   </div>
   <div class="header">
    <div class="location">
     <div class="breadcrumb">
      <h1><a a href='/' class='primary-logo' ><img alt="广州" src="/delijiajiao/picture/guangzhou.png" class="city-logo" /></a></h1>
      <span class="listing-slogan">{{ session('regionname') }}</span><span class="listing-slogan1">【高校联盟】【德栗家教】</span>
     </div>
     <div class="pull-right">
      <a href="/yuyuelaoshi.html" class="resume-btn">我要找老师</a>
      <a href="/fabu/gongzuo" class="post">我要当老师</a>
     </div>
    </div>
   </div>
  </header>
  <div class="nav-horizontal">
   <div class="nav-horizontal-content">
    <ul>
     <li class="vtle"><a href="/" >德栗首页</a></li>
     <li><a href="/faculty.html" >教员库</a></li>
     <li><a href="/xueyuan.html" >学员库</a></li>
     <li><a href="123.html" target="_blank">资费说明</a></li>
     <li><a href="#" target="_blank">快速请家教</a></li>
     <li><a href="#" target="_blank">最新学员</a></li>
     <li><a href="#" target="_blank">家长课堂</a></li>
    </ul>
   </div>
  </div>
  <div class="container">
   <div class="main-box">
    <div class="nav-vertical" id="dropdown">
      <ul id="cheng">
      @foreach($yiji as $yj)
            <li class="nav-item" style="display:block;overflow: hidden；">
                <a href="javascript:void(0);" class="nav-item-title">{{ $yj->yiji }}
                    <i class="icon-arrow-right right"></i>
                </a>
                      <span>{{ $yj->introduce }}<br><Br></span>
                <dl>
                    @foreach($erji as $ej)
                        @if( $yj->id == $ej->yiji_id )
                            <dt>{{ $ej->erji }}</dt>
                            @foreach($sanji as $sj)
                                @if($ej->id == $sj->erji_id)
                                    <dd><a href="">{{ $sj->sanji }}</a></dd>
                                @endif
                            @endforeach

                        @endif
                    @endforeach
               </dl>
            </li>
      @endforeach
       </ul>
    </div>
@section('content')


@show
  </div>
</div>
  <div id="footer">
      <form action="">
          <p>姓名：<input id="mingzi"  type="" value=""/>
              手机：<input id='shouji' type='' value="" disabled='true'maxlength='11'>
              验证码：<input id='yanzhenma'type='' value="">
              <input style='width:94px;padding:.5em 0;' id='huoqu' type="button" value='获取验证码'/>
              <input style='background-color:#f8b529;' type="submit" value="快速请家教" />
      </form>

      </p>
  </div>
  </div></div>
  <footer>
      <div class="footw">
          <div class="r1">
              <div class="b1">
                  <li><a a href='/' class='primary-logo' ><img alt="广州" src="/delijiajiao/picture/guangzhou.png" class="city-logo" /></a><br><p>德栗家教</p></li>
              </div>
              <div class="line"></div>
              <div class="b2">
                  <li><a href="#" target="_blank" rel="nofollow">我是学员</a></li>
                  <li> <a href="#" target="_blank" rel="nofollow">快速请家教</a></li>
                  <li><a href="#" target="_blank">学员资费标准</a></li>
                  <li><a href="#" target="_blank" rel="nofollow">挑选合适教员</a></li>
              </div>
              <div class="line"></div>
              <div class="b3">
                  <li><a href="#" target="_blank" data-toggle="tracker" data-source="footer">我是老师</a></li>
                  <li><a href="#" target="_blank" rel="nofollow">预约订单流程</a></li>
                  <li><a href="#" target="_blank" rel="nofollow">教员收费标准</a></li>
                  <li><a href="#" target="_blank">支付方式</a></li>
              </div>
              <div class="line"></div>
              <div class="b4">
                  <li><a href="#" target="_blank">关于我们</a></li>
                  <li><a href="#" target="_blank" rel="nofollow">联系我们</a></li>
                  <li><a href="#" target="_blank" data-toggle="tracker" data-source="footer">我是老师</a></li>
                  <li><a href="#" target="_blank" rel="nofollow">公司简介</a></li>
              </div>
              <div class="line"></div>
              <div class="b5">
                  <li><a a href='/' class='primary-logo' ><img alt="广州" src="/delijiajiao/picture/guangzhou.png" class="city-logo" /></a><br><p>电话：400-8080-740

                      </p></li>
                  <!--<li><a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备16062097号</a></li>-->
              </div>
          </div>
      </div>
  </footer>
  <div class="banquanxinxi">© 2005－2017德栗家教   |   粤ICP备16062097号 关键词：家教,一对一家教,广州家教网</div>
  <script type="text/javascript">
      $(function(){

          var navH = $("#cheng").offset().top;

          $(window).scroll(function(){

              var scroH = $(this).scrollTop();

              if(scroH>=navH){
                  $("#cheng").css({"position":"fixed","top":0});
              }else if(scroH<navH){
                  $("#cheng").css({"position":"relative","z-index":999});
                  //    $(".nav-vertical ul li.nav-item dl dd").css("top","200px");
              }
          })
      })

  </script>
  <script type="text/javascript" src="/delijiajiao/js/layer.js"></script>
   <script type="text/javascript">
         $(function(){

            var navH = $("#cheng").offset().top;

            $(window).scroll(function(){

             var scroH = $(this).scrollTop();

            if(scroH>=navH){
                $("#cheng").css({"position":"fixed","top":0});
            }else if(scroH<navH){
                $("#cheng").css({"position":"relative","z-index":999});
            //    $(".nav-vertical ul li.nav-item dl dd").css("top","200px");
            }
         })
     })

        </script>
        <script type="text/javascript" src="/delijiajiao/js/zhen.js"></script>
@section('js')


@show
 </body>
</html>
