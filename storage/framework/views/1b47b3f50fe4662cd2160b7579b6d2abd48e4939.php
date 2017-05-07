<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>添加分站</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加文章导航</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="<?php echo e(asset('/admin/tjwzdhdo')); ?>" class="form-horizontal" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">导航名称</label>
                                <div class="col-sm-10">
                                    <input type="text" name="dh_Navigationbar" placeholder="" class="form-control">
                                </div>
                            </div>

                            
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">是否二级</label>

                                <div class="col-sm-10">
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" name="dh_status" value="0" checked="checked">是</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" name="dh_status" value="1">否</label>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label class="checkbox-inline i-checks">
                                        <input type="submit" >
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/admin/js/plugins/layer/layer.min.js"></script>
    <!-- 自定义js -->
    <script src="js/content.js?v=1.0.0"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
</body>

</html>
