<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>试课不成功</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12" style="width:3500px;">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>试课不成功 <small>分类，查找</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="table_data_tables.html#">选项1</a>
                                </li>
                                <li><a href="table_data_tables.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>退款编号</th>
                                    <th>城市</th>
                                    <th>提交时间</th>
                                    <th>退款性质</th>
                                    <th>订单号</th>
                                    <th>授课订单号</th>
                                    <th>教员编号</th>
                                    <th>教员姓名</th>
                                    <th>退款原因</th>
                                    <th>学员编号</th>
                                    <th>学员姓名</th>
                                    <th>学员电话</th>
                                    <th>已收课酬</th>
                                    <th>应退金额</th>
                                    <th>申请金额</th>
                                    <th>回访反馈</th>
                                    <th>是否换人</th>
                                    <th>新单单号</th>
                                    <th>处理结果</th>
                                    <th>审核时间</th>
                                    <th>主管审核</th>
                                    <th>主管审核时间</th>
                                    <th>退款备注</th>
                                    <th>退款状态</th>
                                    <th>退款图片</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="gradeX">
                                    <td><?php echo e($l->rid); ?></td>
                                    <td><?php echo e($l->city_name); ?></td>
                                    <td><?php echo e(date('Y-m-d h:i:s',$l->tk_times)); ?></td>
                                    <td>试课不成功</td>
                                    <td><?php echo e($l->id); ?></td>
                                    <td></td>
                                    <td>T<?php echo e($l->t_id); ?>

                                    </td>
                                    <td><?php echo e($l->tc_name); ?></td>
                                    <td><?php echo e($l->sfsk); ?>|<?php echo e($l->nocglx); ?>|<?php echo e($l->yuanyin); ?></td>
                                    <td>T<?php echo e($l->id); ?></td>
                                    <td><?php echo e($l->user_name); ?></td>
                                    <td><?php echo e($l->user_phone); ?></td>
                                    <td><?php echo e($l->yskc); ?></td>
                                    <td>系统抓取</td>
                                    <td><?php echo e($l->xxftk); ?>元</td>
                                    <td>
                                        家长想换个专职老师/或者原来是专职老师，想试试大学生（未试课）
                                    </td>
                                    <td>无显示</td>
                                    <td>无显示</td>
                                    <td>
                                        <select name="" id="">
                                            <option value=""></option>
                                        </select>
                                    </td>
                                    <td>17-4-28|11:06</td>
                                    <td>
                                        <select name="" id="">
                                            <option value=""></option>
                                        </select>
                                    </td>
                                    <td>17-4-28|11:06</td>
                                    <td><a href="">查看备注</a></td>
                                    <td>自动获取</td>
                                    <td><a href="">查看图片</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>



    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- 自定义js -->
    <script src="js/content.js?v=1.0.0"></script>


    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function () {
            $('.dataTables-example').dataTable();

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function (sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function (value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"]);

        }
    </script>

    
    

</body>

</html>
