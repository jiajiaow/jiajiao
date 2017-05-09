<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>虚拟教员列表</title>
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
            <div class="col-sm-12" style='position: relative;'>
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>虚拟学员</h5>
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
                                    <th>城市</th>
                                    <th>编号</th>
                                    <th>时间</th>
                                    <th>联系人</th>
                                    <th>订单状态</th>
                                    <th>浏览数</th>
                                    <th>申请数</th>
                                    <th>查看详情</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($order as $data)
                                <tr class="gradeX">
                                    <td>{{ $data->city_name }}</td>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ date('Y-m-d h:i:s',$data->time) }}</td>
                                    <td>{{ $data->user_name }}</td>
                                    <td class="center">
                                        @if($data->status == '0')
                                        <span>新发布</span>
                                        @elseif($data->status == '1')
                                        <span>已安排</span>
                                        @elseif($data->status == '2')
                                        <span>已完成</span>
                                    @endif
                                    </td>
                                    <td class="center">{{ $data->browsenu }}</td>
                                    <td class="center">{{ $data->yynum }}|<a href="/admin/yyck">查看预约</a></td>
                                    <td class="center"><a target="_blank" href="{{ asset('/xsinfo') }}{{ $data->id }}.html">点击查询</a></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
            <div style="float: right;position:absolute;right: 0px;bottom: 0px;margin-bottom: 30px">{{ $order->links() }}</div>
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
