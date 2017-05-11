<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 数据表格</title>
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
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>商品列表</h5>
                    <div class="ibox-tools">

                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>图片</th>
                            <th>商品名称</th>
                            <th>所需积分</th>
                            <th>商品原价</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $data)
                            <tr class="gradeX">
                                <td class="center">{{ $data->gs_id }}</td>
                                <td><img src="{{ $data->gs_img }}" /></td>
                                <td>{{ $data->gs_name }}</td>
                                <td>{{ $data->gs_price }}</td>
                                <td>{{ $data->gs_yprice }}</td>
                                <td class="center">
                                @if($data->gs_status == '0')
                                    <a href="/admin/goodszt1/{{ $data->gs_id }}">下架商品</a>
                                @else
                                    <a href="/admin/goodszt2/{{ $data->gs_id }}">上架商品</a>
                                @endif
                                    <a href="/admin/goodsbj/{{ $data->gs_id }}">编辑</a>
                                </td>
                            </tr>
                        @endforeach
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
<script src="/admin/js/plugins/layer/layer.min.js"></script>
<script src="/admin/js/plugins/layer/layer.min.js"></script>

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

    //删除
    function del(obj,id){
        //$(obj).parents("tr").remove();
        layer.msg('你确定要删除吗？', {
            time: 0 //不自动关闭
            ,btn: ['删除', '取消']
            ,yes: function(index){
                layer.close(index);
                $.ajax({
                    url:'/admin/fzlb_del',              //请求地址
                    type:'post',                //请求方式
                    async:true,                 //是否异步
                    data:{'id':id}, //发送的数据
                    success:function(data){     //成功回调函数
                        if(data == 'y'){
                            $(obj).parents("tr").remove();
                            layer.alert('删除分站成功!', {icon: 6});
                        }
                    },
                    error:function(){
                        //alert('ajax请求失败');  //失败回调
                    }
                });
            }
        });

        //
    }
</script>




</body>

</html>
