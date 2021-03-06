<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>添加分站</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加文章</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="{{ asset('/admin/dotjfz') }}" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章标题</label>
                                <div class="col-sm-10">
                                    <input type="text" name="wz_title" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章简介</label>

                                <div class="col-sm-10">
                                    <input type="text" name="wz_jj" placeholder="请输入文章简介" class="form-control" >
                                </div>
                            </div>
                            {{--<div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">URL</label>
                                <div class="col-sm-10">
                                    <input type="text" name="url" placeholder="请输入网站名：例：http://www.baidu.com" class="form-control" >
                                </div>
                            </div>--}}
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">前缀</label>
                                <div class="col-sm-10">
                                    <input type="text" name="prefix" placeholder="请输入前缀：例：广州 -> gz , 深圳 -> sz" class="form-control" >
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">是否起用</label>

                                <div class="col-sm-10">
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" name="state" value="1" checked="checked">是</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" name="state" value="2">否</label>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">家长费用</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fz_jzxxf" placeholder="请输入费用：如(30)" class="form-control" >
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">签约教员定金</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fz_qyjyfy" placeholder="请输入费用：如(30)" class="form-control" >
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比1</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb1" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比2</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb2" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比3</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb3" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比4</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb4" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比5</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb5" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比6</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb6" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比7</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb7" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">是否开起辅导内容</label>

                                <div class="col-sm-10">
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" name="fz_vip" value="1">是</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" name="fz_vip" value="2" checked="checked">否</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" name="fz_vip" value="2">审核开起</label>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">微信二维码</label>
                                <div class="col-sm-10">
                                    <input type="file" name="fz_wx" >
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">QQ二维码</label>
                                <div class="col-sm-10">
                                    <input type="file" name="fz_qq" >
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">分站地区</label>

                                <div class="col-sm-10">
                                    <select class="form-control m-b" id="cid"  name='provice'>
                                        <option>--请选择--</option>
                                    </select>
                                </div>
                            </div>

                           {{-- <div class="form-group">
                                <label class="col-sm-2 control-label">LOGO</label>

                                <div class="col-sm-10">
                                    <input type="file" name="file"  class="btn btn-default">
                                </div>
                            </div>--}}

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <input class="btn btn-primary" type="submit" />
                                    <button class="btn btn-white" type="submit">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/admin/js/plugins/layer/layer.min.js"></script>
    <!-- 自定义js -->
    <script src="js/content.js?v=1.0.0"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
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
        $.ajax({
            url:'/admin/sheng',              //请求地址
            type:'post',                //请求方式
            async:true,                 //是否异步
            success:function(data){     //成功回调函数
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                    $('#cid').append("<option value='"+data[i].provice_id+"'>"+data[i].provice_name+"</option>");
                };
            },
            error:function(){
                alert('ajax请求失败');  //失败回调
            }
        });

    //例：北京市 - 市辖区（市辖县）

        $("#cid").change(function(){
            $(this).nextAll("select").remove();
            var ob = $(this);
            //alert(ob.val());
            $.ajax({
                url:'/admin/xian',           //请求地址
                type:'post',                //请求方式
                async:true,                 //是否异步
                data:{pid:($(this).val())}, //发送的数据
                dataType:'json',            //响应的数据类型
                success:function(data){     //成功回调函数
                    console.log(data);
                    if(data.length>0){
                        var select = $("<select id='city' class='form-control m-b' name='city'><option>--请选择--</option></select>")
                        for (var i = 0; i < data.length; i++) {
                            $(select).append("<option value='"+data[i].city_id+"'>"+data[i].city_name+"</option>");
                        };
                        ob.after(select);
                    }
                },
                error:function(){
                    alert('ajax请求失败');  //失败回调
                }
            });
        });
        @if(session("msg"))
             layer.alert('{{session("msg")}}',{icon: 5,time:2000});
        @endif
    </script>



</body>

</html>
