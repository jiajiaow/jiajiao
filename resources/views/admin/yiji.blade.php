<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>添加一级分类</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico"> <link href="/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/admin/css/animate.css" rel="stylesheet">
    <link href="/admin/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加一级分类</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="{{ asset('/admin/doyiji') }}" class="form-horizontal" >
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">添加一级分类</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" placeholder="请输入一级分类：例：高中,初中,小学,语言,其他,艺术" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <input class="btn btn-primary" type="submit" value="提交"/>
                                    <button class="btn btn-white" type="reset">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 全局js -->
    <script src="/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/admin/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/admin/js/plugins/layer/layer.min.js"></script>
    <!-- 自定义js -->
    <script src="/admin/js/content.js?v=1.0.0"></script>

    <!-- iCheck -->
    <script src="/admin/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
    <script type="text/javascript">
    //例：北京市
//        $.ajax({
//            url:'/admin/sheng',              //请求地址
//            type:'post',                //请求方式
//            async:true,                 //是否异步
//            success:function(data){     //成功回调函数
//                console.log(data);
//                for (var i = 0; i < data.length; i++) {
//                    $('#cid').append("<option value='"+data[i].provice_id+"'>"+data[i].provice_name+"</option>");
//                };
//            },
//            error:function(){
//                alert('ajax请求失败');  //失败回调
//            }
//        });
//
//    //例：北京市 - 市辖区（市辖县）
//
//        $("#cid").change(function(){
//            $(this).nextAll("select").remove();
//            var ob = $(this);
//            //alert(ob.val());
//            $.ajax({
//                url:'/admin/xian',              //请求地址
//                type:'post',                //请求方式
//                async:true,                 //是否异步
//                data:{pid:($(this).val())}, //发送的数据
//                dataType:'json',            //响应的数据类型
//                success:function(data){     //成功回调函数
//                    console.log(data);
//                    if(data.length>0){
//                        var select = $("<select id='city' class='form-control m-b' name='city'><option>--请选择--</option></select>")
//                        for (var i = 0; i < data.length; i++) {
//                            $(select).append("<option value='"+data[i].city_id+"'>"+data[i].city_name+"</option>");
//                        };
//                        ob.after(select);
//                    }
//                },
//                error:function(){
//                    alert('ajax请求失败');  //失败回调
//                }
//            });
//        });
         @if(session("msg"))
            layer.alert('{{session("msg")}}',{icon: 5});
         @endif
    </script>



</body>

</html>
