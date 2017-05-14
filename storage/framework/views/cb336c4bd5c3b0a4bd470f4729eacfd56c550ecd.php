<?php $__env->startSection('title',session('regionname')-'预约成功'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="zfsm" style="height:500px;">
      <div class="nr"><br><br>

          <h2 style="text-align: center;">[<span style="color: #ff0000;">德栗家教</span>]感谢您对德栗家教的支持</h2>
       <h2 style="text-align: center;padding:40px;">您已成功提交家教信息，我们的客服将尽快联系您，为您安排优秀合适的教员。有任何疑问，您也可以直接联系我们。</h2>
       <h3 style="text-align: center;padding:40px;">联系电话：<span style="color: #ff0000;">400-8250-710</span><span style="padding:40px;">|</span>微信：<span style="color: #ff0000;">delijiajiao</span></h3></div>
      <div id="zqm_1" style="text-align: center;">
       <a id="zqm_2" href="/contact.html" style="width: 220px;height: 50px;margin: 20px;border: 1px solid #F7B529;display: inline-block;line-height: 50px; text-align: center;font-size: 20px;">联系我们</a>
       <a id="zqm_2" href='/' style="width: 220px;height: 50px;margin: 20px;border: 1px solid #F7B529;display: inline-block;line-height: 50px; text-align: center;font-size: 20px;">等待客服联系</a>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $('#cheng').remove();
        $('#f').remove();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>