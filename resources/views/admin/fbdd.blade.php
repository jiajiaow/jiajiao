<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>发布订单</title>
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
                        <h5>发布</small></h5>
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
                        <form method="get" class="form-horizontal content">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">*联系人姓名：</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="user_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">*联系人电话：</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"  name="user_phone" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">微信：</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="wx">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">学员文理科：</label>
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
                                <label class="col-sm-2 control-label">学员年级：</label>
                                <div class="col-sm-2">
                                    <select name="grade" size="1" id="nj" >
                                        <option value="" selected="">请选择</option>
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
                                <label class="col-sm-2 control-label">QQ：</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="qq" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">学员性别：</label>
                                <div class="col-sm-2">
                                    <input name="user_sex" type="radio" value="1" checked="">男　
                                    <input name="user_sex" type="radio" value="0">女
                                </div>
                                </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">辅导科目：</label>
                                <div class="col-sm-2">
                                    <input name="subject_id" maxlength="50" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">学员希望主要辅导类型：</label>
                                <div class="col-sm-2">
                                    <select  name="fdlx" >
                                        <option value="授课教学">授课教学</option>
                                        <option value="作业辅导">作业辅导</option>
                                        <option value="讲解疑难">讲解疑难</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">*家教时间安排：</label>
                                <div class="col-sm-4">
                                    <div align="left">
                                        每周上
                                        <select name="chi" id="cimeizhou" >
                                            <option value="" selected="">请选择</option>
                                            <option value="每周1次">1</option>
                                            <option value="每周2次">2</option>
                                            <option value="每周3次">3</option>
                                            <option value="每周4次">4</option>
                                            <option value="每周5次">5</option>
                                            <option value="每周6次">6</option>
                                            <option value="每周7次">7</option>
                                        </select>
                                        次课
                                        ；每次课上
                                        <select name="shi" id="shi" >
                                            <option value="" selected="">请选择</option>
                                            <option value="每次1.5小时">1.5</option>
                                            <option value="每次2小时">2 推荐</option>
                                            <option value="每次2.5小时">2.5</option>
                                            <option value="每次3小时">3</option>
                                            <option value="每次4小时">4</option>
                                            <option value="每次5小时">5</option>
                                            <option value="每次6小时">6</option>
                                            <option value="每次7小时">7</option>
                                            <option value="每次8小时">8</option>
                                        </select>
                                        小时；
                                    </div>
                                </div>
                            </div>
                            <div class="form-group content">
                                <label class="col-sm-2 control-label">*可授课时间：</label>
                                <div class="col-sm-8 content-div">
                                    <tbody>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <td ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <td colspan="2">
                                            <div style="margin-left: 50%;padding: 10px 0;">周一</div>
                                            </td>
                                            <tr>
                                                <td>上午</td>
                                                <td>下午</td>
                                                <td>晚上</td>
                                            </tr>
                                            <tr>
                                                <td> <input type="checkbox" name="sk_times1" value="周一上午"></td>
                                                <td><input type="checkbox" name="sk_times2" value="周一下午"></td>
                                                <td><input type="checkbox" name="sk_times3" value="周一晚上"> </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                            </td>
                                        <td ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <td colspan="2"> <div style="margin-left: 50%;padding: 10px 0;">周二</div></td>
                                            <tr>
                                                <td>上午</td>
                                                <td>下午</td>
                                                <td>晚上</td>
                                            </tr>
                                            <tr>
                                                <td> <input type="checkbox" name="sk_times1" value="周一上午"></td>
                                                <td><input type="checkbox" name="sk_times2" value="周一下午"></td>
                                                <td><input type="checkbox" name="sk_times3" value="周一晚上"> </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        </td>
                                        <td ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <td colspan="2"> <div style="margin-left: 50%;padding: 10px 0;">周三</div></td>
                                            <tr>
                                                <td>上午</td>
                                                <td>下午</td>
                                                <td>晚上</td>
                                            </tr>
                                            <tr>
                                                <td> <input type="checkbox" name="sk_times1" value="周一上午"></td>
                                                <td><input type="checkbox" name="sk_times2" value="周一下午"></td>
                                                <td><input type="checkbox" name="sk_times3" value="周一晚上"> </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        </td>
                                        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <td colspan="2"> <div style="margin-left: 50%;padding: 10px 0;">周四</div></td>
                                            <tr>
                                                <td>上午</td>
                                                <td>下午</td>
                                                <td>晚上</td>
                                            </tr>
                                            <tr>
                                                <td> <input type="checkbox" name="sk_times1" value="周一上午"></td>
                                                <td><input type="checkbox" name="sk_times2" value="周一下午"></td>
                                                <td><input type="checkbox" name="sk_times3" value="周一晚上"> </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        </td>
                                        <td ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <td colspan="2"><div style="margin-left: 50%;padding: 10px 0;">周五</div></td>
                                            <tr>
                                                <td>上午</td>
                                                <td>下午</td>
                                                <td>晚上</td>
                                            </tr>
                                            <tr>
                                                <td> <input type="checkbox" name="sk_times4" value="周二上午"></td>
                                                <td><input type="checkbox" name="sk_times5" value="周二下午"></td>
                                                <td><input type="checkbox" name="sk_times6" value="周二晚上"></td>
                                            </tr>
                                            </tbody></table></td>
                                        <td ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <td colspan="2"><div style="margin-left: 50%;padding: 10px 0;">周六</div></td>

                                            <tr>
                                                <td>上午</td>
                                                <td>下午</td>
                                                <td>晚上</td>
                                            </tr>
                                            <tr>
                                                <td> <input type="checkbox" name="sk_times7" value="周三上午"></td>
                                                <td><input type="checkbox" name="sk_times8" value="周三下午"></td>
                                                <td><input type="checkbox" name="sk_times9" value="周三晚上"></td>
                                            </tr>
                                            </tbody></table>
                                        </td>
                                        <td ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <td colspan="2"><div style="margin-left: 50%;padding: 10px 0;">周日</div></td>

                                            <tr>
                                                <td>上午</td>
                                                <td>下午</td>
                                                <td>晚上</td>
                                            </tr>
                                            <tr>
                                                <td> <input type="checkbox" name="sk_times7" value="周三上午"></td>
                                                <td><input type="checkbox" name="sk_times8" value="周三下午"></td>
                                                <td><input type="checkbox" name="sk_times9" value="周三晚上"></td>
                                            </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>

                                    </tbody>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">地区：</label>
                                <div class="form-group">
                                    <select id="cid"  name='provice'>
                                    <option value="-1">--请选择--</option>
                                    <select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">家教上课地点：</label>
                                <div class="col-sm-2">
                                    <input class="reg_txt form-control" name="xx_dz" size="38">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">*选择教员性别：</label>
                                <div class="col-sm-2">
                                    <div align="left">
                                        <input type="radio" name="teacher_sex" value="1">男教员
                                        <input type="radio" name="teacher_sex" value="0">女教员
                                        <input type="radio" name="teacher_sex" value="3">男女均可
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">对教员具体要求：</label>
                                <div class="col-sm-2">
                                    <textarea id="textarea2" name="teacher_info" rows="3" cols="80" title="" class="reg_txt"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">是否预约签约老师：</label>
                                <div class="col-sm-3">
                                    <div align="left">
                                        <input type="radio" value="是" name="tc_Signing" checked="">是
                                        <input type="radio" value="否" name="tc_Signing">否
                                        <a href="/">点击查看签约老师说明</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">*支付给老师的报酬：</label>
                                <div class="col-sm-2">
                                   <span class="asho_link_9">
                                   <select name="money" size="1" id="bc" >
                                      <option value="面议">面议</option>
                                      <option value="30">30</option>
                                      <option value="35">35</option>
                                      <option value="40">40</option>
                                      <option value="45">45</option>
                                      <option value="50">50</option>
                                      <option value="55">55</option>
                                      <option value="60">60</option>
                                      <option value="65">65</option>
                                      <option value="70">70</option>
                                      <option value="80">80</option>
                                      <option value="90">90</option>
                                      <option value="100">100</option>
                                            <option value="120">120</option>
                                      <option value="150">150</option>
                                            <option value="200">200</option>
                                      <option value="300">300</option>
                                    </select>
                                    元/小时</span>
                                </div>
                            </div>
                                                        <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-2">
                                   <span class="asho_link_9"><input type="submit" value="发布订单"/></span>
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

    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>

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

                    var a = $('.form-group').find('.form-control')
            a.blur(function(event) {
               if($(this).val() ==''){
                alert('不能为空')
               }
           });
        }
    </script>
    <script type="text/javascript">
            //省
    $.ajax({
        url:'/sheng',              //请求地址
        type:'post',                //请求方式
        async:true,                 //是否异步
        success:function(data){     //成功回调函数
            // console.log(data);
            for (var i = 0; i < data.length; i++) {
                $('#cid').append("<option value='"+data[i].provice_id+"'>"+data[i].provice_name+"</option>");
            };
        },
        error:function(){
            //alert('ajax请求失败');    //失败回调
        }
    });
    //市
    $("#cid").on('change',function(){
        $(this).nextAll("select").remove();
        var ob = $(this);
        //alert(ob.val());
        $.ajax({
            url:'/xian',                //请求地址
            type:'post',                //请求方式
            async:true,                 //是否异步
            data:{pid:($(this).val())}, //发送的数据

            success:function(data){     //成功回调函数
                // console.log(data);
                if(data.length>0){
                    var select = $("<select id='city' name='city_id' onclick='bbb()'><option>--请选择--</option><select>")
                    for (var i = 0; i < data.length; i++) {
                        $(select).append("<option value='"+data[i].city_id+"'>"+data[i].city_name+"</option>");
                    };
                    $('#cid').after(select)
                    //ob.after(select);
                }
            },
            error:function(){
                //alert('ajax请求失败');    //失败回调
            }
        });
    });
    //qu
    function bbb(){
        $("#city").on('change', function () {
             $(this).nextAll("select").remove();
             var ob = $(this);
             //alert(ob.val());
             $.ajax({
                 url: '/qu',                //请求地址
                 type: 'post',              //请求方式
                 async: true,                   //是否异步
                 data: {cid: ($(this).val())},  //发送的数据

                 success: function (data) {     //成功回调函数
                     // console.log(data);
                     if (data.length > 0) {
                         var select = $("<select id='county' name='dq' ><option>--请选择--</option><select>")
                         for (var i = 0; i < data.length; i++) {
                             $(select).append("<option value='" + data[i].county_id + "'>" + data[i].county_name + "</option>");
                         }
                         $('#city').after(select);

                         //ob.after(select);
                     }
                 },
                 error: function () {
                     //alert('ajax请求失败');   //失败回调
                 }
             });
         });
    }

    </script>


    <style type="text/css">
        .content{
            position: relative;
        }
        .content-div tr td{
            width: 70px;
        }
    </style>

</body>

</html>
