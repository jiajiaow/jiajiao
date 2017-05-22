<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" charset='utf-8'/>
  <meta name="applicable-device" content="pc" />
  <title><?php echo $__env->yieldContent('title'); ?>【德栗家教】<?php echo e(session('regionname')); ?>家教专业大学生家教全国连锁领导品牌!</title>
  <meta name="description" content="<?php echo $__env->yieldContent('ms'); ?>，专业大学生一对一上门家教，专业大学生家教全国连锁领导品牌。免费上门试课热线：<?php echo e(session('phone')); ?>。业务覆盖全国200多个城市，汇集数十万名大学生、专职老师在内的各类优秀教员，竭诚为广大学员提供最专业、最值得信赖的一对一上门家教辅导。免费上门试课热线：<?php echo e(session('phone')); ?>" />
  <meta name="keywords" content="德栗家教,<?php echo e(session('regionname')); ?>家教,<?php echo e(session('regionname')); ?>家教网,<?php echo e(session('regionname')); ?>大学生家教,<?php echo e(session('regionname')); ?>家教,<?php echo e(session('regionname')); ?>家教网,辅导,补习,一对一" />
  <script src="/delijiajiao/js/jquery-1.7.2.min.js"></script>
  <link rel="stylesheet" href="/delijiajiao/css/index.css" onerror="tracker.resErr(this)" />
  <link rel="stylesheet" href="/delijiajiao/css/style.css" onerror="tracker.resErr(this)" />
  <link rel="stylesheet" href="/delijiajiao/css/style1.css" onerror="tracker.resErr(this)" />
  <link rel="stylesheet" href="/delijiajiao/css/common.css" onerror="tracker.resErr(this)" />
  <link rel="icon" href="/delijiajiao/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="/delijiajiao/favicon.ico" type="image/x-icon">
     <link rel="stylesheet" type="text/css" href="/delijiajiao/css/swiper.min.css">
     <script type="text/javascript">
         if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
            // window.location.href='/mobile';
         }</script>
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
            margin-right: 10px;
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
         #icon-top{
             position:relative;
         }
         #icon{
             cursor:pointer;
             display:inline-block;
             width:20px;
             height:10px;
             background:url(/delijiajiao/picture/icon_dorn.png) 0px 0px no-repeat;
         }
         #icon1{
             cursor:pointer;
             display:inline-block;
             width:20px;
             height:10px;
             background:url(/delijiajiao/picture/icon_dorn2.png) 0px 0px no-repeat;
         }
         .more-city{
             position:absolute;
             width:260px;
             height:85px;
             left:500px;
             top:66px;
             border:1px solid #EEEEEE;
             background-color:#fff;
             z-index: 999;
         }
         .more-city>ul>li{
             float:left;
             height:30px;
             width:48px;
             line-height:35px;
             text-align:center;
         }
         .more-city>ul>li a{
             text-decoration:none;
             display:inline-block;
             width:48px;
             line-height:30px;
             height:30px;
             margin-left:10px;

         }
         .more-city>ul>li a:hover{
             background-color:#f7b529;
             color:#eee;
         }
         .footer_flot_box {
             background: rgba(53, 55, 63, 0.70);
             height: 115px;
             width: 100%;
             position: fixed;
             bottom: 0;
             z-index: 999;
         }
         .footer_mar {
             margin: 0 auto;
             width: 1026px;
             position: relative;
         }
         .fm_img {
             display: inline-block;
             position: absolute;
             top: -80px;
         }
         .fm_content {
             display: inline-block;
             vertical-align: middle;
             margin-top: 13px;
             margin-left: 327px;
             color: #fff;
             text-align: center;
             border-right: 1px solid #ababab;
             padding: 0 10px;
             margin-right: 11px;
         }
         .fm_free {
             color: #ffa51b;
             margin-left: 15px;
             font-size: 25px;
             font-weight: 600;
         }
         .tel_box {
             display: inline-block;
             vertical-align: middle;
             margin-top: 13px;
             color: #fff;
             text-align: center;
         }
         .tel_box p{
             color: #fff;;
             font-size: 14px;
         }
         .zxzx {
             cursor: pointer;
             padding: 4px 10px;
             background: #ffbf03;
             font-size: 14px;
             border-radius: 4px;
             margin-top: 6px;
             display: inline-block;
             color: #fff;
         }
         .footer_mar h3 {
             color: #fff;
             font-weight: 600;
             height: 37px;
             line-height: 37px;
         }
         .fm_content p{
             color:#fff;
             font-size: 14px;
             margin: 0;
         }
     </style>

  
<?php $__env->startSection('style'); ?>

<?php echo $__env->yieldSection(); ?>
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
        400-8250-710
     </div>
     <ul id="user-tools" class="navbar-nav" style="height: 36px">
         <?php if(session('dlzt') == 2 ): ?>
             
             <?php if(session('st_name') != null or session('st_phone') != null): ?>
                 <li><arel="nofollow" data-toggle="userAuth" data-type="reg">尊敬的<?php echo e(substr(session('st_name'),0,3)); ?>学员</a>  </li>
                 <li><a href="/stinfo.html" rel="nofollow" data-toggle="userAuth" data-type="reg">学员中心</a></li>
                 <li><a href="/outlogin.html" rel="nofollow" data-toggle="userAuth" data-type="reg">退出</a></li>
             <?php else: ?>
                 <li><a href="/reg.html" rel="nofollow" data-toggle="userAuth" data-type="reg">教员注册</a></li>
                 <li><a href="/login.html" rel="nofollow" data-toggle="userAuth" data-type="login">立即登陆</a></li>
                 <li><a href="/yuyuelaoshi.html" rel="nofollow" data-toggle="userAuth" data-type="login">快速请家教</a></li>
                 
             <?php endif; ?>
         <?php else: ?>
             
             <?php if(session('tc_name') != null or session('tc_phone') != null): ?>
                 <li><arel="nofollow" data-toggle="userAuth" data-type="reg">尊敬的<?php echo e(substr(session('tc_name'),0,3)); ?>教员</a>  </li>
                 <li><a href="/teacherinfo.html" rel="nofollow" data-toggle="userAuth" data-type="reg">教员中心</a></li>
                 <li><a href="/outlogin.html" rel="nofollow" data-toggle="userAuth" data-type="reg">退出</a></li>
             <?php else: ?>
                 <li><a href="/reg.html" rel="nofollow" data-toggle="userAuth" data-type="reg">教员注册</a></li>
                 <li><a href="/login.html" rel="nofollow" data-toggle="userAuth" data-type="login">立即登录</a></li>
                 
                 <li><a href="/yuyuelaoshi.html" rel="nofollow" data-toggle="userAuth" data-type="login">快速请家教</a></li>
                 
             <?php endif; ?>
         <?php endif; ?>

     </ul>
    </div>
   </div>
   <div class="header">
    <div class="location">
     <div class="breadcrumb" style="margin-bottom: 0px;background-color: #fff;padding: 0px" id="icon-top">
      <h1><a a href='/' class='primary-logo' ><img alt="广州" src="/delijiajiao/picture/guangzhou.png" class="city-logo" /></a></h1>
      <span class="listing-slogan" style="height:40px;"><?php echo e(substr(session('cityname'),0,6)); ?>家教中心</span>
         <span class="listing-slogan1" style="height: 26px;">【德栗家教】【高校联盟】</span><a href="/change_city.html">更多城市</a>
     </div>
     <div class="pull-right">
      <a href="/yuyuelaoshi.html" class="resume-btn" style="font-size: 16px">请老师</a>
      <a href="/reg.html" class="post" style="font-size: 16px">当老师</a>
     </div>
    </div>
   </div>
  </header>
  <div class="nav-horizontal">
   <div class="nav-horizontal-content" style="height: 46px;">
    <ul id="weituo">
     <li id="as1" class="vtle"><a href="/"  id="ad1">德栗首页</a></li>
     <li id="as2"><a href="/yuyuelaoshi.html" id="ad2">快速请家教</a></li>
     <li id="as3"><a href="/faculty.html" id="ad3">挑老师</a></li>
     <li id="as4"><a href="/zfsm.html" id="ad4">资费说明</a></li>
     <li id="as5"><a href="/xueyuan.html" id="ad5">学员库</a></li>
     <li id="as6"><a href="/login.html" id="ad6">会员中心</a></li>
     <li id="as7"><a href="/Articlecenter18.html" id="ad7">文章中心</a></li>
    </ul>
   </div>
  </div>
  <div class="container">
   <div class="main-box">

<?php $__env->startSection('content'); ?>


<?php echo $__env->yieldSection(); ?>
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
                  <li><a a href='/' class='primary-logo' ><img alt="广州" src="/delijiajiao/picture/erwei.png" class="city-logo" width="60px"/></a><br><p>电话：400-8250-710
                      </p></li>
                  <!--<li><a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备16062097号</a></li>-->
              </div>

          </div>
      </div>
  </footer>
 <div style="min-height: 50px;">
      <ul id="cheng-href" style="margin: auto;width: 1200px;">
      </ul>
      <div id="fudong"></div>
  </div>

  <div class="banquanxinxi">
          © 2005－2017德栗家教   |   <a href="http://www.miibeian.gov.cn/state/outPortal/loginPortal.action">粤ICP备16062097号-4</a> 关键词：家教,一对一家教,广州家教网</div>
  </div>
  <div class="footer_flot_box">
      <div class="footer_mar">
          <div class="fm_img"><img src="/new/images/xsznt.png"></div>
          <div class="fm_content">
              <p>还没找到心仪的老师？我们的金牌顾问帮您挑吧</p>
              <h3 style="font-size: 26px;margin: 0;">专业大学生上门家教<span class="fm_free">免费上门试课！</span></h3>
              <div style="margin-top: 6px">
                  
                  <select style="width: 123px;height: 26px;vertical-align: middle;color:#000;font-size:12px; padding: 0" name="km" id="km">
                      <option value="">请选择授课科目</option>
                      <option value="初中">初中</option>
                      <option value="高中">高中</option>
                      <option value="小学及学龄前">小学及学龄前</option>
                      <option value="语言">语言</option>
                      <option value="艺术">艺术</option>
                      <option value="其他">其他</option>
                  </select>
                  <input type=""  placeholder="请输入手机号" style="width: 123px;height: 26px;vertical-align: middle;padding: 0;font-size:12px;color:#000;" name="phone" id="float_phone">
                  <input type="submit" id="float_tj_btn" style="background: #ff3939;border: none;color: #fff;font-size:12px;padding: 5px  10px;border-radius: 4px;" onclick="isPhoneNo()" value="马上提交"  >
                  
              </div>
          </div>
          <div class="tel_box">
              <p><?php echo e(substr(session('cityname'),0,6)); ?>热线：<?php echo e(session('phone')); ?></p>
              <p>全国热线：400-8250-710</p>
              <a href="https://hztk5.kuaishang.cn/bs/im.htm?cSource=1&cas=69564___125636&fi=79140&ri=18245998447&vi=84d357f55f854a87b7683824f3938530&dp=http%3A%2F%2Fwww.delijiajiao.com%2F&_d=1494806260357&_tk=575c5551" target="_blank"><span class="zxzx">在线咨询</span></a>
          </div>
      </div>
  </div>
  
  
      
          
              
          
          
              
              
              
              
                  
                      
                      
                  
                  
                      
                  
              
          

      
      
          
          
              
                  
                  
                  
                  
                  
                  
              
          
          
              
              
          
          
      
      
  
  <div class="wx_box" style="display:none;">
      <img src="<?php echo session('fz_wx'); ?>" alt=""  width="100%">
  </div>
  <script>
      $('#icon').mouseover(function(){
          $('.more-city').css('display','block')
      })
      $('.more-city').mouseover(function(){
          $(this).css('display','block')
      })
      $('.more-city').mouseout(function(){
          $(this).css('display','none')
      })

      $('#float_phone').blur(function(){
          var myreg = /^1[345678]\d{9}$/;
          if($(this).val() == ''){
              alert('手机号不能为空')
          }
          else if(!myreg.test($("#float_phone").val()))
          {
              layer.alert('请输入有效的手机号码！');
              return false;
          }
      })
      function isPhoneNo() {
          var km = $('#km').val()
          //alert(km);
          var phone = $('#float_phone').val();
          if(km != ''){
              if(phone != ''){
                  var myreg = /^1[34578]\d{9}$/;
                  if(!myreg.test($("#float_phone").val()))
                  {
                      layer.alert('请输入有效的手机号码！');
                      return false;
                  }else{
                      $.post('/dofloatyyform',{km:km,phone:phone},function(r){
                          layer.alert('尊敬的家长/学员,我们已经收到您的需求,我们的金牌顾问将尽快联系您,非常感谢您的认可。');
                      })
                  }
              }else{
                  alert('手机号码不能为空');
                  return false;
              }

          }else{
                alert('科目不能为空');
              return false;
          }
      }

  </script>
  <style>
      .fcb_b_box_active{
          border: 1px solid #000;
      }
      .fc{
          position: fixed;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.41);
          z-index: 998;
          left: 0;
          bottom: 0;
      }
      .fc_body{
          position: fixed;
          background: transparent;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          width: 498px;
          border-radius: 10px;
          z-index: 999;
      }
      .fc_body_clock {
          position: absolute;
          background: #f7b528;
          width: 26px;
          height: 26px;
          border-radius: 50%;
          top: -12px;
          right: -12px;
          text-align: center;
          line-height: 29px;
          cursor: pointer;
      }
      .fc_body_clock i {
          background: url(/new/images/X.png)center center no-repeat;
          background-size: 100%;
          width: 13px;
          height: 13px;
          display: inline-block;
      }
      .fcb_top{
          width: 100%;
          height: 175px;
          background: #fff;
          border-radius: 10px 10px 0 0;
      }
      .fcb_bottom{
          width: 100%;
          height: 145px;
          background: #f7b528;
          border-radius: 0 0 10px 10px;
          text-align: center;
      }
      .fcb_text{
          font-size: 12px;
          background: #f7b528;
          color: #fff;
          padding: 4px 12px;
      }
      .fcb_h2{
          color: #6e6e6e;
          margin: 0;
      }
      .fcb_h2_span{
          color: #f7b528;
      }
      .dsv{
          display: inline-block;
          vertical-align: middle;
      }
      .dsv a{
          padding: 2px 17px;
          background: #2097fb;
          color: #fff;
          border-radius: 10px;
          margin-left: 39px;
      }
      .dsv p{
          padding: 3px 0;
          margin: 0;
      }
      .fcb_b_box{
          margin-left: -14px;
      }

      .fcb_b_box li{
          display: inline-block;
          padding: 2px 15px;
          background: #fff;
          border-radius: 17px;
          font-size: 12px;
          color: #f7b528;
          margin: 5px 0;
          cursor: pointer;
      }
      .fcb_bottom .ljtj{
          background: #fd1616;
          font-size: 12px;
          color: #fff;
          padding: 3px 33px;
          border-radius: 16px;
          height: auto;
          cursor: pointer;
      }
      .fcb_bottom input {
          border: none;
          height: 26px;
          padding-left: 11px;
          width: 138px;
          color: #000;
      }
      .fcb_bottom_titp{
          padding: 14px 0 3px 28px;
          text-align: left;
          color: #fff;
          font-size: 14px;
      }
      .wx_box {
          position: fixed;
          right: 94px;
          bottom:31%;
          width: 100px;
          height: 100px;
      }
  </style>
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
    <?php if(session('error')): ?>
    <?php echo e(session('error')); ?>

    <?php endif; ?>
</script>
<!-- <script type="text/javascript" src="https://hztk5.kuaishang.cn/bs/ks.j?cI=125636&fI=79140" charset="utf-8"></script> -->
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
          setTimeout(function(){
              $('.fc').fadeIn()
              $('.fc_body').fadeIn()
          }, 7000)

          $('.fc_body_clock').click(function(event) {
              $('.fc_body').hide()
              $('.fc').hide()
          });
          $(document).on('click','.fcb_b_box li',function(){
              $('.fcb_b_box li').removeClass('fcb_b_box_active')
              $(this).addClass('fcb_b_box_active')
          })
          setTimeout(function(){
              var aa = $('#div4')
              aa.hover(function(){
                  $('.wx_box').show()
              },function(){
                  $('.wx_box').hide()
              })
          },4000)
          setTimeout(function(){
              var aa = $('#div4_off')
              aa.hover(function(){
                  $('.wx_box').show()
              },function(){
                  $('.wx_box').hide()
              })
          },4000)

  </script>
  <script type="text/javascript" src="https://hztk5.kuaishang.cn/bs/ks.j?cI=125636&fI=79140" charset="utf-8"></script>
  <script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?369d7ab93408dc8f73e2587f48b8915c";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
  })();
</script>
<?php $__env->startSection('js'); ?>


<?php echo $__env->yieldSection(); ?>
 </body>
</html>
