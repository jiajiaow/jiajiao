<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 教员收支流水</title>
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
            <div class="col-sm-12" style="overflow: scroll;">
                <div class="ibox float-e-margins" style="width: 4000px;overflow: scroll;">
                    <div class="ibox-title">
                        <h5>教员收支流水 <small>分类，查找</small></h5>
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
                                  <th>流水编号</th>
                                  <th>用户城市</th>
                                  <th>教员编码</th>
                                  <th>教员姓名</th>
                                  <th>类型</th>
                                  <th>收支性质</th>
                                  <th>金额</th>
                                  <th>收支时间</th>
                                  <th>对应订单号</th>
                                  <th>授课订单</th>
                                  <th>授课订单完成时间</th>
                                  <th>学员编号</th>
                                  <th>学员姓名</th>
                                  <th>客户收支方式：支付宝/微信/银行卡/余额/现金</th>
                                  <th>客户收支账号（教员收支均体现）</th>
                                  <th>我方收支账号（如是系统方式，自动抓取）</th>
                                  <th>退款给客户的备注</th>
                                  <th>内部备注</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="gradeX">
                                  <td><?php echo e($l->mid); ?></td>
                                  <td><?php echo e($l->city_name); ?></td>
                                  <td><?php echo e($l->tid); ?></td>
                                  <td><?php echo e($l->tc_name); ?></td>
                                  <td><?php echo e($l->m_type=='3'?'支出':'收入'); ?></td>
                                  <td><?php echo e($l->m_mtype); ?></td>
                                  <td><?php if($l->m_type=='3'): ?>
                                          -<?php echo e($l->m_pay_money); ?>

                                        <?php else: ?>
                                          <?php echo e($l->m_pay_money); ?>

                                      <?php endif; ?>
                                  </td>
                                  <td><?php echo e(date('Y-m-d h:i:s',$l->m_time)); ?></td>
                                  <td><?php echo e($l->id); ?></td>
                                  <td></td>
                                  <td></td>
                                  <td><?php echo e($l->id); ?></td>
                                  <td><?php echo e($l->user_name); ?></td>
                                  <td>
                                      <?php if(substr($l->m_mtype,0,6)== '支付'): ?>
                                          支付宝
                                          <?php elseif(substr($l->m_mtype,0,6)== '微信'): ?>
                                          微信
                                      <?php endif; ?>
                                  </td>
                                  <td></td>
                                  <td><?php echo e($l->m_pay_id); ?></td>
                                  <td><input type="" name=""></td>
                                  <td><input type="" name=""></td>
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
