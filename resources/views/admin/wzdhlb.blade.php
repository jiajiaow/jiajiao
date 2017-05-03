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
    <style>
        .kuan {
            position: fixed;
            transform: translate(-50%,-50%);
            background: rgba(0, 0, 0, 0.63);
            width: 190px;
            height: 79px;
            top: 50%;
            left: 50%;
            text-align: center;
        }
        .kuans{
            position: fixed;
            transform: translate(-50%,-50%);
            background: rgba(0, 0, 0, 0.63);
            width: 255px;
            height: 140px;
            top: 50%;
            left: 50%;
            text-align: center;
            z-index: 99999
        }

       .kuans span{
            font-size: 14px;
            margin-top: 24px;
            display: inline-block;
            color: #fff;
        }
        .kuans input{
            color:#000;
        }
        .btn {
            background: #fff;
            position: relative;
            bottom: -24px;
            margin: 0 16px;
        }

    </style>

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>文章导航列表</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>导航名称</th>
                            <th>是否二级</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $lis)
                            <tr class="gradeX">
                                <td class="center">{{ $lis->dh_id }}</td>
                                <td>{{ $lis->dh_Navigationbar }}</td>
                                <td class="center" style="color:{{ $lis->dh_status==1?'red':'#646464' }};">{{ $lis->dh_status==1?'一级':'二级' }}</td>
                                <td class="center">
                                    <span onclick="doAlert('#xg{{ $lis->dh_id }}')">编辑</span>
                                    <a class="glyphicon glyphicon-trash" href="javascript:;" onclick="del({{ $lis->dh_id }});">删除</a>
                                </td>
                            </tr>
                            <div id="xg{{ $lis->dh_id }}" class="kuans" style="display: none;">
                                <form method="post" action="/admin/xgdhdo">
                                {{ csrf_field() }}
                                <input type="hidden" name="dh_id" value="{{ $lis->dh_id }}"/>
                                <span>导航名称：<input type="text" name="dh_Navigationbar"></span>
                                <input type="submit" value="修改">
                                <input onclick="doAlertqc('#xg{{ $lis->dh_id }}')" type="button" value='取消'>
                                </form>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=''></div>
<div class="kuan" style="display: none;"s>
    <span class="btn qd">确定</span>
    <span class="btn xq">取消</span>
</div>

<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script>
    function doAlert(id){
        $(id).show();
        alert(id);
    }
    function doAlertqc(id){
        $(id).hide();
        alert(id);
    }
    function del(){

    }
</script>
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
