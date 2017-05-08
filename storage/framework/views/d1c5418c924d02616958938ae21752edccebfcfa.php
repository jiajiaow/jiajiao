<?php $__env->startSection('title',mb_substr(session('regionname'),0,2)); ?>
<?php $__env->startSection('style'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br><br><br><br>
<div>
<tbody>
    <tr><td height="50"></td>
    </tr>
      <tr>
        <td valign="top" bgcolor="#FFFFFF">
        <table style='margin: auto;margin-top:10px;' width="642" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F7B529">
          <tbody><tr>
            <td bgcolor="#FFFFFF">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tbody style='text-align: center;'>
              <tr>
                <td width="619" height="80" style="font-size: 20px; color: #FF0000; font-weight:bold;" align="center" valign="bottom"><img src="http://www.dxc020.com/Images/stu-success.gif" align="absmiddle" alt="注册成功" width="35" height="38"> 恭喜您，您填写请家教需求订单已发布!</td>
              </tr>
              <tr>
                <td height="50"><div align="center">您同时注册了本网站的会员，用户名是：<b style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#FF0000;"><?php echo e($phone); ?></b> 密码是：<b style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#FF0000;"><?php echo e(substr($phone,7,4)); ?></b></div></td>
              </tr>
                  <tr>
                <td height="50"><div align="center" style="font-size: 18px; color: #FF0000; font-weight:bold; font-family:微软雅黑,Tahoma,Arial,宋体;">本中心会在24小时内为你安排老师！</div></td>
              </tr>

              <tr>
                <td height="50"><div align="center">您现在可以<a href="ChangePwd.asp" target="_blank"><b><font color="#FF0000">修改密码</font></b></a>，也可以去首页<a href="index.asp"><b><font color="#FF0000">查看</font></b></a>您发布的家教信息。</div></td>
              </tr>

              <tr>
                <td height="80"><div align="center">
                <form method="post" action="/yuyuexxform">
                    <input type="hidden" name="orderid" value="<?php echo e($orderid); ?>">
                    <input style='display: inline-block;color: #F7B529;padding: 10px 10px ;border: 1px solid #F7b529;border-radius: 4px;background-color: #fff;' type="submit" value="填写学生详细资料">
                    <input style='display: inline-block;color: #F7B529;padding: 10px 10px ;border: 1px solid #F7b529;border-radius: 4px;margin-left: 10px;background-color: #fff;' type="submit" value="暂不填写">
                </form>
                </div></td>
              </tr>
            </tbody></table></td>
          </tr
        </tbody></table></td>
      </tr>
      <tr>
      <td height="80"></td>
      </tr>
    </tbody>
    </div>
    <br><br>
    <br><br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>