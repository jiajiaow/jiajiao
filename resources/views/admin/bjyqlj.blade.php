<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>添加分站</title>
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
                        <h5>添加友情链接</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="{{ asset('/admin/bjyqljdo') }}" class="form-horizontal" enctype="multipart/form-data">
                        <input type="hidden" name="id" value='{{ $data->id }}' />
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">链接名称</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ $data->link_name }}" name="link_name" placeholder="例：百度" class="form-control">
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">URL</label>
                                <div class="col-sm-10">
                                    <input type="text" name="link_a"value="{{ $data->link_name }}" placeholder="请输入网站名：例：http://www.baidu.com" class="form-control" >
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label class="checkbox-inline i-checks">
                                        <input type="submit" >
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 全局js -->
    <script src="/adminjs/jquery.min.js?v=2.1.4"></script>
    <script src="/adminjs/bootstrap.min.js?v=3.3.6"></script>
    <script src="/admin//adminjs/plugins/layer/layer.min.js"></script>
    <!-- 自定义js -->
    <script src="/adminjs/content.js?v=1.0.0"></script>

    <!-- iCheck -->
    <script src="/adminjs/plugins/iCheck/icheck.min.js"></script>
    <script src="/layer/layer.js"></script>
    @if(session('zt'))
    <script>
	layer.alert('{{ session('zt') }}', {icon: 6});
    </script>
    @endif
</body>

</html>
