<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更多城市</title>
    <link rel="stylesheet" href="home/dq/css/style.css">
</head>
<body>
<div id="city-top">
    <div style="width: 100%" class="city-contain">

        <img style="width: 100%" src="home/dq/images/city_top.png">
    </div>
</div>
<div id="city-content">
    <div class="city-contain">
        <div class="top-link">
            <?php if(session('Template') == '1'): ?>
            <a href="http://www.lizhijiajiao.com" class="btn">进入栗志家教</a>
            <?php else: ?>
            <a href="http://www.delijiajiao.com" class="btn">德栗家教</a>
            <?php endif; ?>
        </div>
        <div class="city-list">
            <dl style="margin-top: 10px;" class="first">
                <dt>热门城市</dt>
                <dd><a href="http://www.delijiajiao.com/">广州</a></dd>
                <dd><a href="http://bj.delijiajiao.com/">北京</a></dd>
                <dd><a href="http://tj.delijiajiao.com/">天津</a></dd>
                <dd><a href="http://sz.delijiajiao.com/">深圳</a></dd>
                <dd><a href="http://hz.delijiajiao.com/">杭州</a></dd>
                <dd><a href="http://nj.delijiajiao.com/">南京</a></dd>
                <dd><a href="http://wh.delijiajiao.com/">武汉</a></dd>
                <dd><a href="http://xa.delijiajiao.com/">西安</a></dd>
                <dd><a href="http://cd.delijiajiao.com/">成都</a></dd>
            </dl>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <dl>
                <dt><?php echo e($data->provice_name); ?></dt> <!-- 省 -->
                <?php $__currentLoopData = $re; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $re1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($data->provice_id == $re1->province_id && $re1->prefix !== null): ?>
                    <?php if(session('Template') == '1'): ?>
                <dd><a href="http://<?php echo e($re1->prefix); ?>.lizhijiajiao.com"  target="_blank" rel="nofollow"><?php echo e($re1->city_name); ?></a></dd>
                    <?php else: ?>
                <dd><a href="http://<?php echo e($re1->prefix); ?>.delijiajiao.com"  target="_blank" rel="nofollow"><?php echo e($re1->city_name); ?></a></dd>
                    <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </dl>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div id="city-footer">
    <div class="city-contain">
        <p>© 2005－2017版权所有：广州学求易教育咨询有限公司
            | 粤ICP备16062097号-4
        </p>
    </div>
</div>
</body>
</html>
