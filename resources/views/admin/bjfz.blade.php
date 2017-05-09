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
                        <h5>修改分站</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="{{ asset('/admin/dobjfz') }}" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $list->city_id }}"/>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">网站名称</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="{{ $list->title }}" placeholder="请输入网站名：例：XXX家教网" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">联系电话</label>

                                <div class="col-sm-10">
                                    <input type="text" name="phone" value="{{ $list->phone }}" placeholder="请输入联系电话：例：4008-000-000" class="form-control" >
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
                                    <input type="text" name="prefix" value="{{ $list->prefix }}" placeholder="请输入前缀：例：广州 -> gz , 深圳 -> sz" class="form-control" >
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">家长费用</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fz_jzxxf" value="{{ $list->fz_jzxxf }}" placeholder="请输入费用：如(30)" class="form-control" >
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">签约教员定金</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fz_qyjyfy" value="{{ $list->fz_qyjyfy }}" placeholder="请输入费用：如(30)" class="form-control" >
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比1</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb1" value="{{ $list->bfb1 }}" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比2</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb2" value="{{ $list->bfb2 }}" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比3</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb3" value="{{ $list->bfb3 }}" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比4</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb4" value="{{ $list->bfb4 }}" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比5</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb5" value="{{ $list->bfb5 }}" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比6</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb6" value="{{ $list->bfb6 }}" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">信息费百分比7</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bfb7" value="{{ $list->bfb7 }}" placeholder="请输入百分比：1 0.9 0.8" class="form-control" >
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">是否开起辅导内容</label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" name="fz_vip" value="1" @if($list->fz_vip == '1') checked="checked" @endif>是</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" name="fz_vip" value="2" @if($list->fz_vip == '2') checked="checked" @endif>否</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" name="fz_vip" value="2" @if($list->fz_vip == '3') checked="checked" @endif>审核开起</label>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章头</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fz_hade" value="{{ $list->fz_hade }}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章尾</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fz_footer" value="{{ $list->fz_footer }}">
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
                                <label class="col-sm-2 control-label">qq号</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fz_qqhao" value="{{ $list->fz_qqhao }}">
                                </div>
                            </div>
                                                        <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">微信号</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fz_wxhao" value="{{ $list->fz_wxhao }}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">QQ二维码</label>
                                <div class="col-sm-10">
                                    <input type="file" name="fz_qq" >
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
</body>

</html>
