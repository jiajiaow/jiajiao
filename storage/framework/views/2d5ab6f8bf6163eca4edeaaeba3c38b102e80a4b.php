<?php $__env->startSection('title',$data->ar_title); ?>
<?php $__env->startSection('ms',$data->ar_title); ?>
<?php $__env->startSection('style'); ?>
  <link rel="stylesheet" type="text/css" href="/delijiajiao/css/cheng_css.css">
  <link rel="stylesheet" href="/delijiajiao/css/bootstrap.css">
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <!-- 左侧栏 -->
  <section style="width:1200px;margin: auto;margin-top: 15px;">
  <div style="width: 1200px;" class="wz-container">
      <div class="wz-wz">
        <!-- <span>您的位置：</span>
        <a href="">首页</a>
        <i>></i>
        <a href="">资源中心</a>
        <i>></i>
        <a href="">物理资源</a> -->
        <a onclick="window.history.back();" style="float: right;color: #333;">返回文章列表</a>
      </div>
      <div class="wz-two">
        <h1><?php echo e($data->ar_title); ?></h1>
        <span><?php echo e($data->ar_time); ?></span>
        <div style="padding: 0;font-size: 16px;margin-bottom: 10px;margin-top: 5px;"><?php echo e($fz->fz_hade); ?></div>
          <?php echo $data->ar_content; ?>

        <div style="padding:0;font-size: 16px;margin-top: 10px;"><?php echo e($fz->fz_footer); ?></div>
      </div>
  </div>
  <div id="fudong"></div>
  </section>
 <script type="text/javascript" src='js/jquery-2.2.3.min.js'></script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $('#cheng').remove();
        $('#f').remove();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>