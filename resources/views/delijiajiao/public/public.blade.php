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
     <li class="vtle"><a href="#" target="_blank">德栗首页</a></li>
     <li><a href="/faculty.html" target="_blank">教员库</a></li>
     <li><a href="#" target="_blank">学员库</a></li>
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
            <li class="nav-item">
                <a href="javascript:void(0);" class="nav-item-title">{{ $yj->yiji }}
                    <i class="icon-arrow-right right"></i>
                </a>
                @foreach($erji as $ej)
                 @if( $yj->id == $ej->yiji_id )
                      <span>{{ $yj->introduce }}<br><Br></span>
                 @endif
                @endforeach

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
<footer id="f">
   <div>
    <a href="#" target="_blank" rel="nofollow">xxxxx</a>
    <i class="sep">|</i>
    <a href="#" target="_blank" rel="nofollow">xxxxx</a>
    <i class="sep">|</i>
    <a href="#" target="_blank">xxxxx</a>
    <i class="sep">|</i>
    <a href="#" target="_blank" rel="nofollow">xxxxx</a>
    <i class="sep">|</i>
    <a href="#" target="_blank" data-toggle="tracker" data-source="footer">xxxxx</a>
    <i class="sep">|</i>
    <a href="#" target="_blank" rel="nofollow">xxxxx</a>
    <i class="sep">|</i>
    <a href="#" target="_blank" rel="nofollow">xxxxx</a>
    <i class="sep">|</i>
    <a href="#" target="_blank">xxxxx</a>
    <i class="sep">|</i>
    <a href="#" target="_blank">xxxxx</a>
    <i class="sep">|</i>
    <a href="#" rel="nofollow">xxxxx</a>
   </div>
   <div>
    <span class="copyright">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</span>
   </div>
   <div>
    <a target="_blank" rel="nofollow" href="#"><img height="30" alt="网购大家评" src="/delijiajiao/picture/8fa27c5945f2ec31155a36e4a03cc841.png"></a>
    <a target="_blank" rel="nofollow" href="#"><img height="30" alt="上海市互联网举报平台" src="/delijiajiao/picture/b795b51d45c5297739d0add5d4b87475.jpg"></a>
    <a target="_blank" rel="nofollow" href="#"><img width="30" alt="上海工商" src="/delijiajiao/picture/icon_footer02.png"></a>
    <a target="_blank" rel="nofollow" href="#"><img height="30" alt="网络社会征信网" src="/delijiajiao/picture/icon_footer01.png"><span class="beian">xxxxx</span></a>
    <span class="at-haojing">6&nbsp;G:118&nbsp;GM:898</span>
   </div>
  </footer>


  <div id="sidebar-buttons">
   <a id="feedback-button" href="#" title="我要反馈" class="feedback"><i class="icon-side-feedback"></i></a>
   <a id="back-to-top" href="#" title="返回顶部"><i class="icon-arrow-up"></i></a>
  </div>
  <div id="xiangyang-feedback-modal" role="dialog" tabindex="-1" class="modal feedback-modal">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="">&times;</span></button>
      <h4 class="modal-title">反馈建议</h4>
     </div>
     <div class="modal-body">
      <form novalidate=""
       <span id="desc"></span>
       <input type="hidden" name="labels" value="helpcenter" />
       <div class="p-line"></div>
       <div class="p-line">
        <label class="p-label">描述：</label>
        <span class="p-value"><textarea type="text" maxlength="500" name="post[content]" required="required" data-parent=".p-line" value="" placeholder="请尽可能详细地输入您的问题，我们将尽快帮您解决。" style="overflow: hidden; word-wrap: break-word; resize: none; width: 400px;" class="input input-5"></textarea><br /><span style="padding-left:0;" class="p-error-empty">请填写描述</span></span>
       </div>
       <div class="p-line">
        <label class="p-label">手机号：</label>
        <span class="p-value"><input name="post[mobile]" maxlength="11" required="required" data-parent=".p-line" type="mobile" value="" class="input" /><input id="feedback_ad" name="ad" type="hidden" value="" /><input id="feedback_type" name="type" type="hidden" value="" /><input id="feedback_bangui" name="bangui" type="hidden" value="" /><input id="feedback_source" name="source" type="hidden" value="" /><input id="feedback_survey" name="survey_fid" type="hidden" value="" /><span class="p-error">请填写手机号</span><span class="p-error-empty">请填写手机号</span></span>
       </div>
       <div class="p-line">
        <label class="p-label">上传图片：</label>
        <span id="feedback_picture" class="p-value"></span>
       </div>
       <div class="p-line">
        <label class="p-label"></label>
        <span class="p-value"><input type="submit" value="提交反馈" class="button" /><a href="/PublicReview/?src=feedback" target="_blank" class="public-review link">邀请您参加大众评审</a></span>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>

  <div id="promote-weixin-modal" class="fade hide in modal">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="">&times;</span></button>
      <div class="modal-title">
       xxxxxxxxxxxxxxxxxxxxxxxxxxxx
      </div>
     </div>
     <div class="modal-body">
      <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
      <img id="promoQrcode" src="/delijiajiao/weixin.jpg" style="float:right;" />
      <div class="promoteWeixinContent">
       <p>绑定后，您可以：</p>
       <p>1. xxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
       <p>2. xxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
       <p>3. xxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
       <p>4. xxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
       <p>5. xxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
      </div>
     </div>
    </div>
   </div>
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
        <script type="text/javascript" src="/delijiajiao/js/zhen.js"></script>
@section('js')


@show
 </body>
</html>
