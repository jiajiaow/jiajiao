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
  <link rel="icon" href="/delijiajiao/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="/delijiajiao/favicon.ico" type="image/x-icon">
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
     <ul id="user-tools" class="navbar-nav">
         @if(session('tc_name') != null or session('tc_phone') != null)
             <li><arel="nofollow" data-toggle="userAuth" data-type="reg">尊敬的{{ substr(session('tc_name'),0,3) }}教员</a>  </li>
             <li><a href="/grzx.html" rel="nofollow" data-toggle="userAuth" data-type="reg">教员中心</a></li>
             <li><a href="/outlogin.html" rel="nofollow" data-toggle="userAuth" data-type="reg">退出</a></li>
             @else
             <li><a href="/reg.html" rel="nofollow" data-toggle="userAuth" data-type="reg">教员注册</a></li>
             <li><a href="/login.html" rel="nofollow" data-toggle="userAuth" data-type="login">教员登录</a></li>
             <li><a href="#" rel="nofollow" data-toggle="userAuth" data-type="login">学员登录</a></li>
             <li><a href="/yuyuelaoshi.html" rel="nofollow" data-toggle="userAuth" data-type="login">快速请家教</a></li>
             {{-- <li><a href="#" target="_blank">请家教帮助</a></li> --}}
         @endif
     </ul>
    </div>
   </div>
   <div class="header">
    <div class="location">
     <div class="breadcrumb">
      <h1><a a href='/' class='primary-logo' ><img alt="广州" src="/delijiajiao/picture/guangzhou.png" class="city-logo" /></a></h1>
      <span class="listing-slogan">{{ session('regionname') }}</span><span class="listing-slogan1">【德栗家教】【高校联盟】</span><a href="/change_city.html">更多城市</a>
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
    <ul>
     <li class="vtle"><a href="/" >德栗首页</a></li>
     <li><a href="/yuyuelaoshi.html">快速请家教</a></li>
     <li><a href="/faculty.html" >挑老师</a></li>
     <li><a href="/zfsm.html" >资费说明</a></li>
     <li><a href="/xueyuan.html" >学员库</a></li>
        <li><a href="">会员中心</a></li>
        <li><a href="">资源中心</a></li>
    {{-- <li><a href="#" target="_blank">家长课堂</a></li> --}}
    {{-- <li><a href="#" target="_blank">家长课堂</a></li> --}}
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

          © 2005－2017德栗家教   |   粤ICP备16062097号 关键词：家教,一对一家教,广州家教网</div>

  <div id="footer">
      <form id="do" method="post" action="/yuyuexiangxi.html">
          {{ csrf_field() }}
          姓名：<input type="text" name="lxr" id="lxr" placeholder="联系人" maxlength="10">
              手机：<input type="text" id="phone" name="phone" maxlength="11" placeholder="手机号码">
              验证码：<input type='text' name="yzm" id="yzm" placeholder="验证码" >
              <input id="zhen" type='button' onclick="test();" value="获取验证码" >
              <button id='tj' style="width: 110px;height: 35px;" type="button" onclick="dopost();">快速请家教</button>
      </form>


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
    function test()
    {
        var phone = $("#phone").val();
        var lxr = $("#lxr").val();
        var km = $("#km").val();
        var get_code = $("#zhen");

        if(lxr == '')
        {
            layer.msg('请输入联系人', {icon: 3});
            return false;
        }
        if(km == '')
        {
            layer.msg('请输入科目', {icon: 3});
            return false;
        }
        if(phone == '')
        {
            layer.msg('请输入手机号码', {icon: 3});
            return false;
        }
        time(get_code);
        $.ajax({
            type:'POST',
            url:"/register",
            contentType:"application/x-www-form-urlencoded; charset=utf8",
            data:{"phone":phone},
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:(function(result){
                if(result == 'y'){
                    layer.alert('请注意查收短信!',{icon: 3,time:1500});
                }
                //console.log(result);
            }),
            error:(function(result,status){
                //console.log(result);
                //larye.alert('短信sb!');
            })

        });


    }
    var wait  = 60;
    function time(o,p){
        if (wait==0){
            o.removeAttr('disabled');
            o.val("获取验证码");
            wait = 60;

        }else{
            o.attr('disabled','true');
            o.val('重新发送'+wait+'s');
            wait--;
            setTimeout(function(){
                time(o,p);
            },1000);
        }

    }
    function dopost(){
        var phone = $("#phone").val();
        var lxr = $("#lxr").val();
        var km = $("#km").val();
        var yzm = $("#yzm").val();
        if(lxr == '')
        {
            layer.msg('请输入联系人', {icon: 3});
            return false;
        }
        if(km == '')
        {
            layer.msg('请输入科目', {icon: 3});
            return false;
        }
        if(phone == '')
        {
            layer.msg('请输入手机号码', {icon: 3});
            return false;
        }
        if(yzm == '')
        {
            layer.msg('请输入验证码', {icon: 3});
            return false;
        }
        $.ajax({
            type:'POST',
            url:"/registerdo",
            contentType:"application/x-www-form-urlencoded; charset=utf8",
            data:{"code":yzm,"name":lxr,"km":km,"phone":phone},
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:(function(result){
                if(result == 'y'){
                    //$("#tj[type='button']").attr('type','submit');
                    $("#do").submit();
                }else{
                    layer.msg('验证码错误', {icon: 3});
                }
                //console.log(result);
            }),
            error:(function(result,status){
                //console.log(result);
                larye.alert('系统错误请联系管理员!');
            })

        });
    }

</script>
<script type="text/javascript" src="https://hztk5.kuaishang.cn/bs/ks.j?cI=125636&fI=79140" charset="utf-8"></script>
@section('js')


@show
 </body>
</html>
