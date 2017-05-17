<?php $__env->startSection('title','文章中心'); ?>
<?php $__env->startSection('style'); ?>
 <link href="/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
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
    <article>
      <ul class="art-cb">
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($ls->dh_status == '1'): ?>
          <li><a href="/Articlecenter<?php echo e($ls->dh_id); ?>.html"><?php echo e($ls->dh_Navigationbar); ?></a></li>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <i></i><li><a href="">资源中心</a></li>
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($erj->dh_status == '0'): ?>
        <li class='art-zuo' style="margin-left:92px">
          <a style="color: #9a9a9a" href="/Articlecenter<?php echo e($erj->dh_id); ?>.html"><?php echo e($erj->dh_Navigationbar); ?></a>
        </li>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
  </article>
  <div class="wz-container">
      <div class="wz-wz">
        <span></span>

      </div>
      <?php if($list !== null): ?>
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class='wz-nr'>
          <i></i>
          <p><a href="/Articlecontent<?php echo e($li->ar_id); ?>.html"><?php echo e($li->ar_title); ?></a></p>
          <?php if($li->ar_status == '1'): ?>
            　　<img src="/delijiajiao/images/zd.png" alt="">
          <?php endif; ?>
          <span><?php echo e($li->ar_time); ?></span>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
  </div>
  <div id='fudong'></div>
  <div class="c_yejiao">
    <a href="<?php echo e($list->Url($list->LastPage())); ?>">末页</a>
    <a href="<?php echo e($list->Url($list->next)); ?>">下一页</a>
    <a href="<?php echo e($list->Url($list->last)); ?>">上一页</a>
    <a href="<?php echo e($list->Url(1)); ?>">首页</a>
    <label>页数:<?php echo e($list->dqy); ?>/<?php echo e($list->LastPage()); ?></label>
  </div>

  </section>
 <script type="text/javascript" src='/delijiajiao/js/jquery-2.2.3.min.js'></script>
 <script>
   let item = $('.wz-nr');
   for (var i=0;i<item.length;i++){
      if(i%2!==0){
        item[i].style.backgroundColor = '#FCFCFD';
      }
   }
 </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $('#cheng').remove();
        $('#f').remove();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>