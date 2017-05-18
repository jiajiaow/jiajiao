<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 基本表单</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>所有表单元素 <small>包括自定义样式的复选和单选按钮</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="form_basic.html#">选项1</a>
                                </li>
                                <li><a href="form_basic.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="/admin/fbdddo" class="form-horizontal content">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 ">*订单性质：</label>
                                <div class="col-sm-2">
                                    <select>
                                        <option value="正常">正常</option>
                                        <option value="协助">协助</option>
                                        <option value="求助">求助</option>
                                        <option value="特别关注">特别关注</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*订单时间：</label>
                                <div class="col-sm-2">
                                    <select>
                                        <option value="学期中">学期中</option>
                                        <option value="寒假单">寒假单</option>
                                        <option value="暑假单">暑假单</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*城市：</label>
                                <div class="col-sm-2">
                                    <select class="form-control m-b" id="cid"  name='provice'>
                                        <option>--请选择--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*联系人姓名：</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="user_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*联系人电话：</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"  name="user_phone" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">微信：</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="wx">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">QQ：</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="qq" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">学员文理科：</label>
                                <div class="col-sm-2">
                                    <select  name="wlk" id="">
                                        <option value="请选择">请选择</option>
                                        <option value="文科">文科</option>
                                        <option value="理科">理科</option>
                                        <option value="文理科">文理未分科</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                               <label class="col-sm-2 ">学员年级：</label>
                                <div class="col-sm-2">
                                    <select name="grade" size="1" id="nj" >
                                        <option value="请选择" selected="">请选择</option>
                                        <option value="幼儿">幼儿</option>
                                        <option value="一年级">一年级</option>
                                        <option value="二年级">二年级</option>
                                        <option value="三年级">三年级</option>
                                        <option value="四年级">四年级</option>
                                        <option value="五年级">五年级</option>
                                        <option value="六年级">六年级</option>
                                        <option value="初一">初一</option>
                                        <option value="初二">初二</option>
                                        <option value="初三">初三</option>
                                        <option value="高一">高一</option>
                                        <option value="高二">高二</option>
                                        <option value="高三">高三</option>
                                        <option value="艺考生">艺考生</option>
                                        <option value="其它年级">其它年级</option>
                                        <option value="成人">成人</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                               <label class="col-sm-2 ">学员概况：</label>
                                <div class="col-sm-2">
                                    <textarea name="user_situation"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">学员性别：</label>
                                <div class="col-sm-2">
                                    <input name="user_sex" type="radio" value="1" checked="">男　
                                    <input name="user_sex" type="radio" value="2">女
				    <input name="user_sex" type="radio" value="3">男女不限
                                </div>
                                </div>

                            <div class="form-group">
                                <label class="col-sm-2 ">辅导科目：</label>
                                <div class="col-sm-2">
                                    <input name="subject_id" maxlength="50" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">学员希望主要辅导类型：</label>
                                <div class="col-sm-2">
                                    <select  name="fdlx" >
                                        <option value="授课教学">授课教学</option>
                                        <option value="作业辅导">作业辅导</option>
                                        <option value="讲解疑难">讲解疑难</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">是否需要我们专业辅导：</label>
                                <div class="col-sm-2">
                                    <select  name="tc_Signing" >
                                        <option value="是">是</option>
                                        <option value="否">否</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*家教时间安排：</label>
                                <div class="col-sm-4">
                                    <div align="left">
                                        每周上
                                        <select name="o_ts" id="cimeizhou" >
                                            <option value="" selected="">请选择</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                        次课
                                        ；每次课上
                                        <select name="o_xs" id="shi" >
                                            <option value="" selected="">请选择</option>
                                            <option value="1">1</option>
                                            <option value="1.5">1.5</option>
                                            <option value="2">2 推荐</option>
                                            <option value="2.5">2.5</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                        小时；
                                    </div>
                                </div>
                            </div>
                            <div class="form-group content">
                                <label class="col-sm-2 ">*可授课时间：</label>
                                <div class="col-sm-8 content-div">
                                    <table>
                                        <tbody><tr>
                                            <td>
                                                <p>周一</p>
                                                <input type="checkbox" value="周一上午" name="sk_times1">上午
                                                <input type="checkbox" value="周一下午" name="sk_times2">下午
                                                <input type="checkbox" value="周一晚上" name="sk_times3">晚上
                                            </td>
                                            <td>
                                                <p>周二</p>
                                                <input type="checkbox" value="周二上午" name="sk_times4">上午
                                                <input type="checkbox" value="周二下午" name="sk_times5">下午
                                                <input type="checkbox" value="周二晚上" name="sk_times6">晚上
                                            </td>
                                            <td>
                                                <p>周三</p>
                                                <input type="checkbox" value="周三上午" name="sk_times7">上午
                                                <input type="checkbox" value="周三下午" name="sk_times8">下午
                                                <input type="checkbox" value="周三晚上" name="sk_times9">晚上
                                            </td>
                                            <td>
                                                <p>周四</p>
                                                <input type="checkbox" value="周四上午" name="sk_times10">上午
                                                <input type="checkbox" value="周四下午" name="sk_times11">下午
                                                <input type="checkbox" value="周四晚上" name="sk_times12">晚上
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>周五</p>
                                                <input type="checkbox" value="周五上午" name="sk_times13">上午
                                                <input type="checkbox" value="周五下午" name="sk_times14">下午
                                                <input type="checkbox" value="周五晚上" name="sk_times15">晚上
                                            </td>
                                            <td>
                                                <p>周六</p>
                                                <input type="checkbox" value="周六上午" name="sk_times16">上午
                                                <input type="checkbox" value="周六下午" name="sk_times17">下午
                                                <input type="checkbox" value="周六晚上" name="sk_times18">晚上
                                            </td>
                                            <td>
                                                <p>周日</p>
                                                <input type="checkbox" value="周日上午" name="sk_times19">上午
                                                <input type="checkbox" value="周日下午" name="sk_times20">下午
                                                <input type="checkbox" value="周日晚上" name="sk_times21">晚上
                                            </td>
                                            <td style="text-align:center;">

                                                <span ><p>时间面议</p><input style="width: 120px;" type="text" name="sk_times22"></span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*所在城区：</label>
                                <div class="col-sm-2">
                                    <input name="dq" type="text"/><span>如:天河区</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">家教上课地点：</label>
                                <div class="col-sm-2">
                                    <input class="reg_txt form-control" name="xx_dz" size="38">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*选择教员性别：</label>
                                <div class="col-sm-3">
                                    <div align="left">
                                        <input type="radio" name="teacher_sex" value="1">男教员
                                        <input type="radio" name="teacher_sex" value="2">女教员
                                        <input type="radio" name="teacher_sex" value="3">男女均可
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">对教员具体要求：</label>
                                <div class="col-sm-2">
                                    <textarea id="textarea2" name="teacher_info" rows="3" cols="80" title=""  class="reg_txt"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">是否预约签约老师：</label>
                                <div class="col-sm-3">
                                    <div align="left">
                                        <input type="radio" value="是" name="tc_Signing" checked="">是
                                        <input type="radio" value="否" name="tc_Signing">否
                                       <!-- <a href="/">点击查看签约老师说明</a>-->
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 ">*教员性质</label>
                                <div class="col-sm-2">
                                        <select name="ls_type">
                                            <option value="大学生">大学生家教</option>
                                            <option value="专职老师">专职老师</option>
                                            <option value="大学生专职老师均可">大学生专职老师均可</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*支付给老师的报酬：</label>
                                <div class="col-sm-2">
                                        <input type="text" name="money">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*入口网站：</label>
                                <div class="col-sm-2">
                                    <select name="wzly">
                                        <option>栗志</option>
                                        <option>德栗</option>
                                        <option>思敏</option>
                                        <option>教员介绍</option>
                                        <option>老家长</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*入口来源：</label>
                                <div class="col-sm-2">
                                        <select name="khly">
                                            <option>58</option>
                                            <option>58老客户</option>
                                            <option>360</option>
                                            <option>360老客户</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*订单安排方式：</label>
                                <div class="col-sm-2">
                                    <select name="ap">
                                        <option>系统安排</option>
                                        <option>人工安排</option>
                                        <option>满足条件下系统安排</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*家长备注：</label>
                                <div class="col-sm-5">
                                        <textarea name="bj_msg_A"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 ">*订单备注：</label>
                                <div class="col-sm-5">
                                        <textarea name="ddbz"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 ">
                                    <input type="submit" value="发布订单">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-form" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            <h3 class="m-t-none m-b">登录</h3>
                            <form role="form">
                                <div class="form-group">
                                    <label>用户名：</label>
                                    <input type="email" placeholder="请输入用户名" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>密码：</label>
                                    <input type="password" placeholder="请输入密码" class="form-control">
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>登录</strong>
                                    </button>
                                    <label>
                                        <input type="checkbox" class="i-checks">自动登录</label>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <h4>还不是会员？</h4>
                            <p>您可以注册一个账户</p>
                            <p class="text-center">
                                <a href="form_basic.html"><i class="fa fa-sign-in big-icon"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fc" style="display: none;"></div>
    <div class="fc_content" style="display: none;">
        <div class="pd">
            <p style="margin-top: 43px;">性别
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option>男</option>
                        <option>女</option>
                    </select>
                </span>
            </p>
            <p >学校
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option>华南理工大学</option>
                        <option>北京大学</option>
                    </select>
                </span>
                <span class="btn">增加</span>
            </p>

            <p>教员年级
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option value="大一" >大一</option>
                        <option value="大二" >大二</option>
                        <option value="大三" >大三</option>
                        <option value="大四" >大四</option>
                        <option value="大五" >大五</option>
                        <option value="研一" >研一</option>
                        <option value="研二" >研二</option>
                        <option value="研三" >研三</option>
                        <option value="本科毕业" >本科毕业</option>
                        <option value="研究生毕业" >研究生毕业</option>
                        <option value="博士在读" >博士在读</option>
                        <option value="博士毕业" >博士毕业</option>
                        <option value="专职老师" >专职老师 </option>
                    </select>
                </span>
                <span class="btn">增加</span>
            </p>
            <p>教龄
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option value="1年以内" >1年以内</option>
                        <option value="1年" >1年</option>
                        <option value="2年" >2年</option>
                        <option value="3年" >3年</option>
                        <option value="4年" >4年</option>
                        <option value="4年以上" >4年以上</option>
                    </select>
                </span>
                <span class="btn">增加</span>
            </p>
            <p>教员性质
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option>大学生</option>
                        <option>专职老师</option>
                    </select>
                </span>
            </p>
            <p>籍贯
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option>北京</option>
                        <option>北京市</option>
                    </select>
                </span>
            </p>
            <p>文理科
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option>文科</option>
                        <option>理科</option>
                    </select>
                </span>
            </p>
            <p>专业
                <span class="sel_span" >
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option value="数学" >数学</option>
                        <option value="英语" >英语</option>
                        <option value="国际学院内设专业（英文授课）" >国际学院内设专业（英文授课）</option>
                        <option value="物理类" >物理类</option>
                        <option value="化学类" >化学类</option>
                        <option value="生物学类" >生物学类</option>
                        <option value="师范专业（包括教育学）" >师范专业（包括教育学）</option>
                        <option value="心理学" >心理学</option>
                        <option value="管理学" >管理学</option>
                        <option value="经济类" >经济类</option>
                        <option value="外语系（英语专业以外）" >外语系（英语专业以外）</option>
                        <option value="建筑类" >建筑类</option>
                        <option value="法学" >法学</option>
                        <option value="新闻" >新闻</option>
                        <option value="中文" >中文</option>
                        <option value="政治" >政治</option>
                        <option value="历史" >历史</option>
                        <option value="地址物理" >地址物理</option>
                        <option value="医学/药学" >医学/药学</option>
                        <option value="社会学类" >社会学类</option>
                        <option value="农林专业" >农林专业</option>
                        <option value="体育" >体育</option>
                        <option value="艺术" >艺术</option>
                        <option value="计算机" >计算机</option>
                        <option value="电子信息科学" >电子信息科学</option>
                        <option value="自然类科学" >自然类科学</option>
                        <option value="其他" >其他</option>
                    </select>
                </span>
                <span class="btn">增加</span>
            </p>
        </div>
    </div>
    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>

    <!-- 自定义js -->
    <script src="js/content.js?v=1.0.0"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
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
                url:'/admin/xian',          //请求地址
                type:'post',                //请求方式
                async:true,                 //是否异步
                data:{pid:($(this).val())}, //发送的数据
                dataType:'json',            //响应的数据类型
                success:function(data){     //成功回调函数
                    console.log(data);
                    if(data.length>0){
                        var select = $("<select id='city' class='form-control m-b' name='city_id'><option>--请选择--</option></select>")
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
    <script>
        // $(document).ready(function () {
        //     $('.i-checks').iCheck({
        //         checkboxClass: 'icheckbox_square-green',
        //         radioClass: 'iradio_square-green',
        //     });
        //     var a = $('.form-group').find('.form-control')
        //     a.blur(function(event) {
        //        if($(this).val() ==''){
        //         alert('不能为空')
        //        }
        //    });
        // });
    </script>
    <script>

        $('.timeShow').click(function(){
            $('.fc').show(500)
            $('.fc_content').show(500)
        })
        $('.fc').click(function(){
            $('.fc').hide(500)
            $('.fc_content').hide(500)
        })
        $('.sure_btn').click(function(){
            $('.fc').hide(500)
            $('.fc_content').hide(500)

        })
        $('.btn').click(function () {

            var a  = $(this).parent().find(".sel_span select:first")[0].outerHTML
            $(this).parent().find('.sel_span').append(a)

        })
        $('#textarea2').val('有责任心，有家教经验优先。')

    </script>

    <style type="text/css">
    th,td{
        padding: 13px;
    }
        .content{
            position: relative;
        }

        .content-div input[type=checkbox], input[type=radio] {
            margin: 4px 0 0;
            margin-top: 1px\9;
            line-height: normal;
            vertical-align: sub;
        }
        .content-div p{
            text-align: center;
            padding: 0;
            margin: 0;
        }
        .fc {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.41);
            top: 0;
            left: 0;
        }
        .fc_content {
            width: 650px;
            height: 400px;
            position: fixed;
            background: #fff;
            left: 50%;
            top: 50%;
            margin-left: -325px;
            margin-top: -200px;
        }
        .pd{
            margin: 0 20px;
        }
        .pd p {
            padding: 4px 0px;
        }
        label {
            margin-bottom: 0;
            text-align: right;
        }
    </style>

</body>

</html>
