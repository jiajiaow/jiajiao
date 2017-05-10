<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>提前结束课程</title>
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
                        <h5>提前结束课程 <small>分类，查找</small></h5>
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
                                    <td>提前结束课程</td>
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
                                    <td><?php if($l->pay_zt2 == '1'): ?>
                                            <?php echo e($l->xxf+$l->xxf2); ?>元
                                        <?php else: ?>
                                            <?php echo e($l->xxf); ?>元
                                    <?php endif; ?>
                                    </td>
                                    <td><?php echo e($l->xxftk); ?>元<input type="hidden" id="money<?php echo e($l->jl_id); ?>" value="<?php echo e($l->xxftk); ?>" ></td>
                                    <td>
                                        家长想换个专职老师/或者原来是专职老师，想试试大学生（未试课）
                                    </td>
                                    <td>无显示</td>
                                    <td>无显示</td>
                                    <td>
                                        <?php if($l->ht_zgsh == '4'|| $l->ht_zgsh == null): ?>
                                            <select name="" id="" onclick="shenhe( <?php echo e($l->jl_id); ?> )">
                                                <option value="">请选择</option>
                                                <option value="1" <?php echo e($l->ht_cljg == '1'?'selected':''); ?> onclick="ajaxsh(this,<?php echo e($l->jl_id); ?>,<?php echo e($l->t_id); ?>,<?php echo e($l->rid); ?>,1,1,<?php echo e($l->id); ?>)">审核通过</option>
                                                <option value="2" <?php echo e($l->ht_cljg == '2'?'selected':''); ?> onclick="ajaxsh(this,<?php echo e($l->jl_id); ?>,<?php echo e($l->t_id); ?>,<?php echo e($l->rid); ?>,1,2,<?php echo e($l->id); ?>)">教员原因不退</option>
                                                <option value="3" <?php echo e($l->ht_cljg == '3'?'selected':''); ?> onclick="ajaxsh(this,<?php echo e($l->jl_id); ?>,<?php echo e($l->t_id); ?>,<?php echo e($l->rid); ?>,1,3,<?php echo e($l->id); ?>)">关闭退款</option>
                                            </select>
                                        <?php else: ?>
                                            <?php if($l->ht_zgsh == '1'): ?>
                                                审核通过
                                            <?php elseif($l->ht_zgsh == '2'): ?>
                                                拒绝退款
                                            <?php elseif($l->ht_zgsh == '3'): ?>
                                                关闭退款
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td>17-4-28|11:06</td>
                                    <td>
                                        <?php if($l->ht_zgsh == '4'|| $l->ht_zgsh == null): ?>
                                            <select name="" id="jc<?php echo e($l->jl_id); ?>" disabled="true">
                                                <option value="" <?php echo e($l->ht_zgsh == ''?'selected':''); ?> >请选择</option>
                                                <option value="1" <?php echo e($l->ht_zgsh == '1'?'selected':''); ?> onclick="ajaxsh(this,<?php echo e($l->jl_id); ?>,<?php echo e($l->t_id); ?>,<?php echo e($l->rid); ?>,2,1,<?php echo e($l->id); ?>)">审核通过</option>
                                                <option value="2" <?php echo e($l->ht_zgsh == '2'?'selected':''); ?> onclick="ajaxsh(this,<?php echo e($l->jl_id); ?>,<?php echo e($l->t_id); ?>,<?php echo e($l->rid); ?>,2,2,<?php echo e($l->id); ?>)">拒绝退款</option>
                                                <option value="3" <?php echo e($l->ht_zgsh == '3'?'selected':''); ?> onclick="ajaxsh(this,<?php echo e($l->jl_id); ?>,<?php echo e($l->t_id); ?>,<?php echo e($l->rid); ?>,2,3,<?php echo e($l->id); ?>)">关闭退款</option>
                                                <option value="4" <?php echo e($l->ht_zgsh == '4'?'selected':''); ?> onclick="ajaxsh(this,<?php echo e($l->jl_id); ?>,<?php echo e($l->t_id); ?>,<?php echo e($l->rid); ?>,2,4,<?php echo e($l->id); ?>)">待处理</option>
                                            </select>
                                        <?php else: ?>
                                            <?php if($l->ht_zgsh == '1'): ?>
                                                审核通过
                                            <?php elseif($l->ht_zgsh == '2'): ?>
                                                拒绝退款
                                            <?php elseif($l->ht_zgsh == '3'): ?>
                                                关闭退款
                                            <?php elseif($l->ht_zgsh == '4'): ?>
                                                待处理
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td>17-4-28|11:06</td>
                                    <td><a href="">查看备注</a></td>
                                    <td><?php if($l->ht_zgsh == '1'): ?>
                                            通过
                                        <?php elseif($l->ht_zgsh == '2'): ?>
                                            拒绝退款
                                        <?php elseif($l->ht_zgsh == '3'): ?>
                                            关闭
                                        <?php elseif($l->ht_zgsh == '4'): ?>
                                            待处理
                                        <?php elseif($l->ht_zgsh == NULL): ?>
                                            正常
                                        <?php endif; ?></td>
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

        function shenhe(id){
            $(this).change(function(){
                $('#jc'+id).attr('disabled',false)
            })
        }

        //ajax 1为处理结果 2为主管审核
        function ajaxsh(obj,id,tid,rid,zt,edit,oid){
            //  alert(id);
            //alert(rid);
            var money = $('#money'+id).val();
            // alert(money);
            $.ajax({
                type:'POST',
                url:"<?php echo e(URL('/admin/tdye.html')); ?>",
                contentType:"application/x-www-form-urlencoded; charset=utf8",
                data:{"id":id,"tid":tid,'rid':rid,'zt':zt,'m':money,'edit':edit,'pd':'tqjskc','oid':oid},
                /*dataType:'JSON',*/
                success:(function(result){
                    location.reload();
                }),
                error:(function(result,status){
                    // larye.alert('sb!');
                })

            });
        }
    </script>

    
    

</body>

</html>
