<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>热门区域</title>
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
                    <h5>基本 <small>分类，查找</small></h5>
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

                            <select id="cid"  name='provice'>
                                <option value="-1">--请选择--</option>
                            </select>

                        <thead>
                        <tr>
                            <th>ID</th>
                            {{--<th>市级ID</th>--}}
                            <th>区域名称</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $lis)
                            <tr class="gradeX">
                                <td class="center">{{ $lis->id }}</td>
{{--                                <td>{{ $lis->city_id }}</td>--}}
                                <td>{{ $lis->county_name }}</td>
                                <td class="center">
                                  {{ $lis->hot=='0'?'不是热门':'热门' }}
                                </td>
                                <td class="center">
                                    {{--<a class="glyphicon glyphicon-wrench" href="/admin/bjfz?id="></a>--}}
                                 @if($lis->hot == 1)
                                        <a href="/admin/do_hot_area/{{ $lis->id }}/0" class="glyphicon glyphicon-ok">取消</a>
                                    @else
                                        <a href="/admin/do_hot_area/{{ $lis->id }}/1" class="glyphicon glyphicon-remove">设置热门</a>
                                    @endif
                                    {{--<a class="glyphicon glyphicon-trash" href="javascript:;" onclick="del(this);">删除</a>--}}
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
<script src="/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/admin/js/plugins/layer/layer.min.js"></script>

<script src="/admin/js/plugins/jeditable/jquery.jeditable.js"></script>

<!-- Data Tables -->
<script src="/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- 自定义js -->
<script src="/admin/js/content.js?v=1.0.0"></script>


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
    //省
    $.ajax({
        url:'/sheng',				//请求地址
        type:'post',				//请求方式
        async:true,					//是否异步
        success:function(data){		//成功回调函数
            // console.log(data);
            for (var i = 0; i < data.length; i++) {
                $('#cid').append("<option value='"+data[i].provice_id+"'>"+data[i].provice_name+"</option>");
            };
        },
        error:function(){
            //alert('ajax请求失败');	//失败回调
        }
    });
    //市
    $("#cid").on('change',function(){
        $(this).nextAll("select").remove();
        var ob = $(this);
        //alert(ob.val());
        $.ajax({
            url:'/xian',				//请求地址
            type:'post',				//请求方式
            async:true,					//是否异步
            data:{pid:($(this).val())},	//发送的数据

            success:function(data){		//成功回调函数
                // console.log(data);
                if(data.length>0){
                    var select = $("<select id='city'><option>--请选择--</option></select>")
                         for (var i = 0; i < data.length; i++) {
                            $(select).append("<option value='" + data[i].city_id + "' onclick='aa("+data[i].city_id+")'>" + data[i].city_name + "</option>");
                         }
                         ;
                    $('#cid').after(select)
                    //ob.after(select);
                }
            },
            error:function(){
                //alert('ajax请求失败');	//失败回调
            }
        });
    });
    function aa(id){
        window.location.href ="/admin/hot_area/"+id;
    }
    //区

</script>




</body>

</html>
