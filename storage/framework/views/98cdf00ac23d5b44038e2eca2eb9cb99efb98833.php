<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="renderer" content="webkit">
  <title><?php if(session('Template') == '2' || '4'): ?>德栗家教<?php else: ?>栗志家教<?php endif; ?> 微信支付</title>
  <link rel="stylesheet" type="text/css" href="/wx/css/cheng_css.css">
  <link rel="stylesheet" href="/wx/css/bootstrap.css" >
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
   <script src="/delijiajiao/js/jquery-1.7.2.min.js"></script>
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
    /*  margin:0;
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
        background-color: #FACC40;
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
 </head>
 <body style="background-color:#eee;">
  <div class="wechat-container">
    <div class="wechat-header">
      <div style="width:130px;margin:auto;">
        <i></i>
        <h4>微信支付</h4>
      </div>
    </div>
    <!-- 中间部分 -->
    <div class="wechat-body">
      <!-- 自动生成的二维码 -->
      <div class="erweima" style="text-align: center;">
         <h1>￥<?php echo e($price); ?></h1>
        <span ><?php echo QrCode::size(400)->generate($url);; ?></span>
      </div>
      <!--  -->
      <div class="er-two">
        <div class="l-one" style="margin-top:30px;">
          <label>商家</label>
          <span><?php if(session('Template') == '2' || '4'): ?>德栗家教<?php else: ?>栗志家教<?php endif; ?></span>
        </div>
         <div class="l-one">
          <label>商品名称</label>
          <span>家教费用</span>
        </div>
         <div class="l-one">
          <label>交易单号</label>
          <span><?php echo e($oid); ?></span>
        </div>
         <div class="l-one">
          <label>创建时间</label>
          <span><?php echo e($stime); ?></span>
        </div>
      </div>
      <div class="er-three">
        <div>
          <img src="/wx/images/sao.png">
          <span>请使用微信扫一扫描二维码完成支付</span>
        </div>
         <div id="fudong"></div>
      </div>
      <!-- 清楚浮动高度为0 -->
    </div>
  </div>
 </body>
 <script>
  setInterval("myInterval()",1000);//1000为1秒钟
  function myInterval()
       {
            $.ajax({
            type:'POST',
            url:"/wechatpayquery2",
            contentType:"application/x-www-form-urlencoded; charset=utf8",
            data:{"pay_id":'<?php echo e($oid); ?>'},
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:(function(result){
                if(result == 'ok'){
                  window.location.href="/PaymentSuccess";
                  return;
                }
                //console.log(result);
            }),
            error:(function(result,status){
                //console.log(result);
                //larye.alert('短信sb!');
            })

          });
        }
 </script>
 </html>
