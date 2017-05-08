<?php $__env->startSection('my-css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">h</h1>

            </div>
            <h3>欢迎使用 hAdmin</h3>

            <form class="m-t" role="form" method="post" action="<?php echo e(URL('/admin/Logins')); ?>">
                
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="密码" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>

                
                

            </form>
        </div>
    </div>

    <?php if(isset($errmsg)): ?>
        <div class="alert alert-success">
            <?php echo e($errmsg); ?>

        </div>
    <?php endif; ?>
    <?php if((Session('errmsg'))): ?>
        <div class="alert alert-success">
            <?php echo e(Session('errmsg')); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('my-js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>