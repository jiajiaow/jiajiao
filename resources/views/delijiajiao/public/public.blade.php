<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" charset='utf-8'/>
  <meta name="applicable-device" content="pc" />
  <title>【德栗家教】{{ session('regionname') }}家教专业大学生家教全国连锁领导品牌!</title>
  <meta name="description" content="专业大学生一对一上门家教，专业大学生家教全国连锁领导品牌。免费上门试课热线：{{ session('phone') }}。业务覆盖全国200多个城市，汇集数十万名大学生、专职老师在内的各类优秀教员，竭诚为广大学员提供最专业、最值得信赖的一对一上门家教辅导。免费上门试课热线：{{ session('phone') }}" />
  <meta name="keywords" content="德栗家教,{{ session('regionname') }}家教,{{ session('regionname') }}家教网,{{ session('regionname') }}大学生家教,{{ session('regionname') }}家教,{{ session('regionname') }}家教网,辅导,补习,一对一" />
  <script src="/delijiajiao/js/jquery-1.7.2.min.js"></script>
  <link rel="stylesheet" href="/delijiajiao/css/index.css" onerror="tracker.resErr(this)" />
  <link rel="stylesheet" href="/delijiajiao/css/style.css" onerror="tracker.resErr(this)" />
  <link rel="stylesheet" href="/delijiajiao/css/style1.css" onerror="tracker.resErr(this)" />
  <link rel="stylesheet" href="/delijiajiao/css/common.css" onerror="tracker.resErr(this)" />
  <link rel="icon" href="/delijiajiao/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="/delijiajiao/favicon.ico" type="image/x-icon">
     <link rel="stylesheet" type="text/css" href="/delijiajiao/css/swiper.min.css">
     <style>
         #cheng-href{
             color:#a7a7a7;

         }
         #cheng-href li {
             float: left;
         }
         #cheng-href a{
             color:#a7a7a7;
             display: inline-block;
             width:100px;
           line-height: 50px;
             text-align: center;
         }
         .swiper-container {
             width: 800px;
             height: 300px;

         }
         .swiper-slide {
             text-align: center;
             font-size: 18px;
             background: #fff;

             /* Center slide text vertically */
             display: -webkit-box;
             display: -ms-flexbox;
             display: -webkit-flex;
             display: flex;
             -webkit-box-pack: center;
             -ms-flex-pack: center;
             -webkit-justify-content: center;
             justify-content: center;
             -webkit-box-align: center;
             -ms-flex-align: center;
             -webkit-align-items: center;
             align-items: center;
         }
         .templinkactive
         {
             padding:5px;
             text-decoration:none;
             background-color:  #2788DA;
             color:#ffffff;
         }
         .templink
         {
             cursor:pointer;
             padding:5px;
             text-decoration:none;
         }
         table tr{ height:35px;}
         #fys{
             background-color: #fff;
             border: 1px solid #f7b529;
             border-radius: 15px;
             display: inline-block;
             padding: 2px 14px;
             margin-top:45px;
         }
     </style>

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
家教上门联系电话：☎
        {{ session('phone') }}
     </div>
     <ul id="user-tools" class="navbar-nav" style="height: 36px">
         @if(session('dlzt') == 2 )
             {{--学员--}}
             @if(session('st_name') != null or session('st_phone') != null)
                 <li><arel="nofollow" data-toggle="userAuth" data-type="reg">尊敬的{{ substr(session('st_name'),0,3) }}学员</a>  </li>
                 <li><a href="/stinfo.html" rel="nofollow" data-toggle="userAuth" data-type="reg">学员中心</a></li>
                 <li><a href="/outlogin.html" rel="nofollow" data-toggle="userAuth" data-type="reg">退出</a></li>
             @else
                 <li><a href="/reg.html" rel="nofollow" data-toggle="userAuth" data-type="reg">教员注册</a></li>
                 <li><a href="/login.html" rel="nofollow" data-toggle="userAuth" data-type="login">立即登陆</a></li>
                 <li><a href="/yuyuelaoshi.html" rel="nofollow" data-toggle="userAuth" data-type="login">快速请家教</a></li>
                 {{-- <li><a href="#" target="_blank">请家教帮助</a></li> --}}
             @endif
         @else
             {{--教员--}}
             @if(session('tc_name') != null or session('tc_phone') != null)
                 <li><arel="nofollow" data-toggle="userAuth" data-type="reg">尊敬的{{ substr(session('tc_name'),0,3) }}教员</a>  </li>
                 <li><a href="/teacherinfo.html" rel="nofollow" data-toggle="userAuth" data-type="reg">教员中心</a></li>
                 <li><a href="/outlogin.html" rel="nofollow" data-toggle="userAuth" data-type="reg">退出</a></li>
             @else
                 <li><a href="/reg.html" rel="nofollow" data-toggle="userAuth" data-type="reg">教员注册</a></li>
                 <li><a href="/login.html" rel="nofollow" data-toggle="userAuth" data-type="login">立即登录</a></li>
                 {{--<li><a href="/stlogin.html" rel="nofollow" data-toggle="userAuth" data-type="login">学员登录</a></li>--}}
                 <li><a href="/yuyuelaoshi.html" rel="nofollow" data-toggle="userAuth" data-type="login">快速请家教</a></li>
                 {{-- <li><a href="#" target="_blank">请家教帮助</a></li> --}}
             @endif
         @endif

     </ul>
    </div>
   </div>
   <div class="header">
    <div class="location">
     <div class="breadcrumb" style="margin-bottom: 0px;background-color: #fff;padding: 0px">
      <h1><a a href='/' class='primary-logo' ><img alt="广州" src="/delijiajiao/picture/guangzhou.png" class="city-logo" /></a></h1>
      <span class="listing-slogan" style="height:40px;">{{ session('regionname') }}</span><span class="listing-slogan1" style="height: 26px;">【德栗家教】【高校联盟】</span>{{--<a href="/change_city.html">更多城市</a>--}}
     </div>
     <div class="pull-right">
      <a href="/yuyuelaoshi.html" class="resume-btn" style="font-size: 16px">请老师</a>
      <a href="/reg.html" class="post" style="font-size: 16px">当老师</a>
     </div>
    </div>
   </div>
  </header>
  <div class="nav-horizontal">
   <div class="nav-horizontal-content">
    <ul id="weituo">
     <li id="as1" class="vtle"><a href="/"  id="ad1">德栗首页</a></li>
     <li id="as2"><a href="/yuyuelaoshi.html" id="ad2">快速请家教</a></li>
     <li id="as3"><a href="/faculty.html" id="ad3">挑老师</a></li>
     <li id="as4"><a href="/zfsm.html" id="ad4">资费说明</a></li>
     <li id="as5"><a href="/xueyuan.html" id="ad5">学员库</a></li>
        <li id="as6"><a href="" id="ad6">会员中心</a></li>
    </ul>
   </div>
  </div>
  <div class="container">
   <div class="main-box">

@section('content')


@show
  </div>
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
                  <li>我是学员</li>
                  <li> <a href="/yuyuelaoshi.html" target="_blank" rel="nofollow">快速请家教</a></li>
                  <li><a href="/zfsm.html" target="_blank">学员资费标准</a></li>
                  <li><a href="/faculty.html" target="_blank" rel="nofollow">挑选合适教员</a></li>
              </div>
              <div class="line"></div>
              <div class="b3">
                  <li>我是老师</li>
                  <li><a href="/yydd.html" target="_blank" rel="nofollow">预约订单流程</a></li>
                  <li><a href="/faculty_sfbz.html" target="_blank" rel="nofollow">教员收费标准</a></li>
                  <li><a href="/payment_way.html" target="_blank">支付方式</a></li>
              </div>
              <div class="line"></div>
              <div class="b4">
                  <li>关于我们</li>

                  <li><a href="/contact.html" target="_blank" rel="nofollow">联系我们</a></li>
                  <li><a href="/company.html" target="_blank" rel="nofollow">公司简介</a></li>
                  <li><a href="/copyright.html" target="_blank" data-toggle="tracker" data-source="footer">版权声明</a></li>
              </div>
              <div class="line"></div>
              <div class="b5">
                  <li><a a href='/' class='primary-logo' ><img alt="广州" src="/delijiajiao/picture/erwei.png" class="city-logo" width="60px"/></a><br><p>电话：400-8080-740

                      </p></li>
                  <!--<li><a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备16062097号</a></li>-->
              </div>

          </div>
      </div>
  </footer>
{{--  <div>
      <ul id="cheng-href">
          <li>
              <a href="">友情链接</a>
          </li>
          <li>
              <a href="">新浪新闻</a>
          </li>
          <li>
              <a href="">网易云音乐</a>
          </li>
          <li>
              <a href="">腾讯新闻</a>
          </li>
          <li>
              <a href="">百度</a>
          </li>
             <li>
                 <a href="">360</a>
             </li>
      </ul>
  </div>--}}
  <div class="banquanxinxi">
          © 2005－2017德栗家教   |   <a href="http://www.miibeian.gov.cn/state/outPortal/loginPortal.action">粤ICP备16062097号-4</a> 关键词：家教,一对一家教,广州家教网</div>
  </div>
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
        <script>
    $('.navbar li:nth-child(4)').mouseover(function(){
        $(this).addClass('active')
                .siblings().removeClass('active')
    })
    @if (session('error'))
    {{ session('error') }}
    @endif
</script>
<script type="text/javascript" src="https://hztk5.kuaishang.cn/bs/ks.j?cI=125636&fI=79140" charset="utf-8"></script>
  <script type="text/javascript">
      var ur = window.location.pathname;
      //alert(ur);
            if(ur == '/faculty.html'){
                $('#as1').removeClass();
                $('#as3').addClass('vtle');
            }else if(ur == '/yuyuelaoshi.html'){
                $('#as1').removeClass();
                $('#as2').addClass('vtle');
            }else if(ur == '/zfsm.html'){
                $('#as1').removeClass();
                $('#as4').addClass('vtle');
            }else if(ur == '/xueyuan.html') {
                $('#as1').removeClass();
                $('#as5').addClass('vtle');
            }
  </script>
@section('js')


@show
 </body>
</html>
