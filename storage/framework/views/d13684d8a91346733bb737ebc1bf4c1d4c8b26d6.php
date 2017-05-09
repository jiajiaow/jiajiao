<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 树形视图</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/admin/css/animate.css" rel="stylesheet">
    <link href="/admin/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="/admin/css/plugins/treeview/bootstrap-treeview.css" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="row wrapper wrapper-content animated fadeInRight">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>导航列表</h5>&nbsp;&nbsp;<a href="/admin/yiji">添加一级分类</a>&nbsp;&nbsp;<a href="/admin/erji">添加二级分类</a>&nbsp;&nbsp;<a href="/admin/sanji">添加三级分类</a>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="buttons.html#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="buttons.html#">选项1</a>
                        </li>
                        <li><a href="buttons.html#">选项2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div id="treeview5" class="test treeview">
                    <ul class="list-group">

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- 全局js -->
    <script src="/admin/js/jquery.min.js"></script>
    <script src="/admin/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/admin/js/plugins/layer/layer.min.js"></script>
    <!-- 自定义js -->
    <script src="/admin/js/content.js?v=1.0.0"></script>


    <!-- Bootstrap-Treeview plugin javascript -->
    <script src="/admin/js/plugins/treeview/bootstrap-treeview.js"></script>
        
    <script src="/admin/js/treeview-demo.js"></script>
    <script type="text/javascript">
        $(function () {

            var defaultData = [
                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                {
                    text: "一级分类：<?php echo e($lis->yiji); ?> <a style='float:right;margin-right:10px; color:#90EE90;'  href='javascript:;' onclick='del(this,-10,<?php echo e($lis->id); ?>);'> 删除 </a><a style='float:right;margin-right:10px; color:#90EE90;' href='javascript:;' onclick='dhedit(this,-10,<?php echo e($lis->id); ?>);'>修改</a>",
                    href: '#parent1',
                    tags: ['4'],
                    nodes: [
                        <?php $__currentLoopData = $erji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ej): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if( $lis->id == $ej->yiji_id ): ?>
                        {
                            text: "二级分类：<?php echo e($ej->erji); ?> <a style='float:right;margin-right:10px; color:#90EE90;'  href='javascript:;' onclick='del(this,-20,<?php echo e($ej->id); ?>);'> 删除 </a><a style='float:right;margin-right:10px; color:#90EE90;' href='javascript:;' onclick='dhedit(this,-20,<?php echo e($ej->id); ?>);'>修改</a>",
                            href: '#child1',
                            tags: ['2'],
                            nodes: [
                                    <?php $__currentLoopData = $sanji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <?php if( $ej->id == $sj->erji_id ): ?>
                                {
                                    text: "三级分类：<?php echo e($sj->sanji); ?> <a style='float:right;margin-right:10px; color:#90EE90;'  href='javascript:;' onclick='del(this,-30,<?php echo e($sj->id); ?>);'> 删除 </a><a style='float:right;margin-right:10px; color:#90EE90;' href='javascript:;' onclick='dhedit(this,-30,<?php echo e($sj->id); ?>);'>修改</a>",
                                    href: '#grandchild1',
                                    tags: ['0']
                                },
                                 <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            ]
                        },
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]
                },
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ];

            $('#treeview5').treeview({
                color: "#428bca",
                expandIcon: 'glyphicon glyphicon-chevron-right',
                collapseIcon: 'glyphicon glyphicon-chevron-down',
                nodeIcon: 'glyphicon glyphicon-bookmark',
                data: defaultData
            });
        });
        <?php if(session("msg")): ?>
           layer.alert('<?php echo e(session("msg")); ?>',{icon: 5});
        <?php endif; ?>

//        function del(obj,id){
//            layer.confirm('确认要删除吗？',function(index){
//                $(obj).parents('li').remove();
//                   alert(obj.tagName);
//                //$(obj).find("li").remove();
//                //})
//                layer.msg('已删除!',{icon:1,time:1000});
//            });
//        }
        //修改
        function dhedit(obj,fl,id){
            if(fl == -10){
               var title =  '一级页面';
            }else if(fl == -20){
                var title = '二级级页面';
            }else if(fl == -30){
                var title =  '三级级页面';
            }
                layer.open({
                    type: 2,
                    title: "修改" + title,
                    area: ['700px', '500px'],
                    time: 8000, //10s后自动关闭
                    content: "/admin/dhedit?id=" + id + '&fl=' + fl,
                });
        }
        //删除
        function del(obj,fl,id){
            layer.msg('你确定要删除吗？', {
                time: 0 //不自动关闭
                ,btn: ['删除', '取消']
                ,yes: function(index){
                    layer.close(index);
                    $.ajax({
                        url:'/admin/dhdel',              //请求地址
                        type:'post',                //请求方式
                        async:true,                 //是否异步
                        data:{'id':id,'fl':fl}, //发送的数据
                        success:function(data){     //成功回调函数
                            if(data == 'y'){
                                //$(obj).parents("li").remove();
                                layer.alert('删除成功!', {icon: 6});
                                window.location.href=window.location.href;
                            }else if(data == 'no'){
                                layer.alert('当前分类下面还有子分类!')
                                return false;
                            }
                        },
                        error:function(){
                            //alert('ajax请求失败');  //失败回调
                        }
                    });
                }
            });
        }
    </script>

    

</body>

</html>
