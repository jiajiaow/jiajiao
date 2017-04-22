<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 数据表格</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="/admin/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="/admin/css/animate.css" rel="stylesheet">
    <link href="/admin/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5 onclick="self.location=document.referrer;">返回</h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>个人基本信息</th>
                                    <th>学校/年级/专业/教龄/文理科/高考省份</th>
                                    <th>联系方式</th>
                                    <th>家教简历</th>
                                    <th>备注</th>
                                    <th>接单状态</th>
                                    <th>查看详细</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $data)
                               <tr>
                                    <td>{{ $data->tc_id }}</td>
                                    <td>
                                        {{ $data->tc_name }}<br>
                                        {{ $data->tc_type }}<br>
                                        {{ $data->tc_type }}<br>
                                    </td>
                                    <td>
                                        {{ $data->tc_school }}<br>
                                        {{ $data->tc_nj }}<br>
                                        {{ $data->tc_zhuanye }}<br>
                                        {{ $data->tc_jl }}<br>
                                        {{ $data->tc_class }}<br>
                                        {{ $data->tc_hight }}<br>
                                    </td>
                                    <td>{{ $data->tc_phone }}</td>
                                    <td>自我描述：{{ $data->tc_comments }}</td>
                                    <td>个人备注:   </td>
                                    <td>
                                        <form action="/admin/orderxgjyzt" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="oid" value="{{ $data->id }}"/>
                                            <input type="hidden" name="tc_id" value="{{ $data->tc_id }}"/>
                                                <select name="ht_t_status">
                                                    <option value="1" @if($data->ht_t_status == '1') selected='selected' @endif >已预约</option>
                                                    <!-- <option value="2">待处理</option> -->
                                                    <option value="3" @if($data->ht_t_status == '3') selected='selected' @endif>已审核</option>
                                                    <option value="4" @if($data->ht_t_status == '4') selected='selected' @endif>取消预约</option>
                                                    <option value="5" @if($data->ht_t_status == '5') selected='selected' @endif>已确认</option>
                                                    <option value="6" @if($data->ht_t_status == '6') selected='selected' @endif>部分合适</option>
                                                    <option value="7" @if($data->ht_t_status == '7') selected='selected' @endif>试课中</option>
                                                    <option value="8" @if($data->ht_t_status == '8') selected='selected' @endif>已成功(授课中)</option>
                                                    <option value="9" @if($data->ht_t_status == '9') selected='selected' @endif>已成功(结束授课)</option>
                                                    <option value="10" @if($data->ht_t_status == '10') selected='selected' @endif>试课失败</option>
                                                </select>
                                            <input type="submit" value="修改"/>
                                        </form>
                                    </td>
                                    <td><a target="_blank" href="/teacher/detail/{{ $data->tc_id }}.html">查看简历</a></td>
                                </tr>
                            @endforeach
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
    <script src="/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/admin/js/bootstrap.min.js?v=3.3.6"></script>



    <script src="/admin/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>

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
