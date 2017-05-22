<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 教员库</title>
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
        <div class="col-sm-12" style="overflow: scroll;">
            <div class="ibox float-e-margins" style="overflow: scroll;width: 1446px;">
                <div class="ibox-title">
                    <a href="/admin/xsdd"><h5 onclick="self.location=document.referrer;">返回</h5></a>
                </div>
                <div class="ibox-title">
                    <h5>学员中的教员库 <small>分类，查找</small></h5>
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
                        <thead>
                        <tr align="center">
                            <th>编号/入口/日期</th>
                            <th>个人基本信息</th>
                            <th>学位信息</th>
                            <th>联系方式</th>
                            <th>家教简历</th>
                            <th>备注</th>
                            <th>接单状态</th>
                            <th style="
                                    width: 174px;
                                ">查看详细</th>
                        </tr>

                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $re): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr valign="top" align="center">

                            <td>
                                <div>
                                    <p>预约时间:<input type="text" name="" value="<?php echo e($re->jd_times); ?>"></p>
                                    <p>订单城市:<input type="text" name=""></p>
                                    <p>平时城市<input type="text" name="" value="<?php echo e($re->tc_citys); ?>"></p>
                                    <p>暑假城市:<input type="text" name="" value="<?php echo e($re->tc_shu); ?>"></p>
                                    <p>寒假城市:<input type="text" name="" value="<?php echo e($re->tc_han); ?>"></p>
                                    <p>注册入口:<input type="text" name=""></p>
                                    <p>最近登录:<input type="text" name="" value="<?php echo e($re->tc_dltimes); ?>"></p>
                                    <p>注册时间:<input type="text" name="" value="<?php echo e($re->tc_reg_date); ?>"></p>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p>教员编号:<input type="text" name="" value="<?php echo e($re->id); ?>"></p>
                                    <p>姓名:<input type="text" name="" value="<?php echo e($re->tc_name); ?>"></p>
                                    <p>籍贯:<input type="text" name="" value="<?php echo e($re->tc_jiguan); ?>"></p>
                                    <p>性别:<input type="text" name="" value="<?php echo e($re->tc_sex=='1'?'男':'女'); ?>"></p>
                                    <p>教员性质:<input type="text" name="" value=""></p>
                                    <p>教员等级:<input type="text" name="" value=""></p>
                                    <p>教员类型：<input type="text" name="" value="<?php echo e($re->tc_type); ?>"></p>
                                    <p>
                                        <select>
                                            <option>金牌教员</option>
                                            <option>专职教员</option>
                                            <option>学员教员</option>
                                        </select>
                                        <input type="submit" name="" value="修改">
                                    </p>
                                    <p>
                                        教授科目<textarea type="text" name="" class="showBtn"><?php echo e($re->tc_subjects); ?></textarea>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p>学校：<input type="text" name="" value="<?php echo e($re->tc_school); ?>"></p>
                                    <p>年级：<input type="text" name="" value="<?php echo e($re->tc_nj); ?>"></p>
                                    <p>专业：<input type="text" name="" value="<?php echo e($re->tc_zhuanye); ?>"></p>
                                    <p>类别：<input type="text" name="" value="<?php echo e($re->tc_type); ?>"></p>
                                    <p>教龄：<input type="text" name="" value="<?php echo e($re->tc_jl); ?>"></p>
                                    <p>文理未分科：<input type="text" name="" value="<?php echo e($re->tc_class); ?>"></p>
                                    <p>高考省份：<input type="text" name="" value="<?php echo e($re->tc_hight); ?>"></p>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p>电话：<input type="text" name="" value="<?php echo e($re->tc_phone); ?>"></p>
                                    <p>邮箱：<input type="text" name="" value="<?php echo e($re->tc_email); ?>"></p>
                                    <p>微信：<input type="text" name="" value="<?php echo e($re->tc_wechat); ?>"></p>
                                    <p>QQ：<input type="text" name="" value="<?php echo e($re->tc_qq); ?>"></p>
                                    <p>备用电话：<input type="text" name="" value="<?php echo e($re->tc_phone_bak); ?>"></p>
                                    <p><a href="">个人基础评分：</a><input type="text" name="" value=""></p>
                                    <p><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo e($re->tc_qq); ?>&site=<?php echo e($re->tc_qq); ?>&menu=yes">QQ交谈</a></p>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p>所获证书:<input type="text" name="" value="<?php echo e($re->tc_certificate); ?>"></p>
                                    <p>自我描述:</p>
                                    <p><textarea><?php echo e($re->tc_comments); ?></textarea></p>
                                    <p>家教简历：</p>
                                    <p><textarea><?php echo e($re->tc_case); ?></textarea></p>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p style="position:relative;margin-top: 30px; height: 20px;"><span style="float: left">备注:</span><span class="bj_btn" style="float: right">编辑</span></p>
                                    <p><textarea class="bj_msg" style="display: block"></textarea> </p><p class="bj_msgS" style="text-align: left">测试测试</p><p></p>
                                    <p style="position:relative; height: 20px;">
                                        <span style="float: left">本单备注:</span>
                                        <span style="float: right" class="bj_btn_S">编辑</span>
                                    </p>
                                    <p>
                                        <textarea class="bj_msg_A" style="display: block">                  </textarea>
                                    </p><p class="bj_msgS_B" style="display: none; text-align: left">测试测试</p>
                                    <p></p>
                                    <p>以往接单情况:</p>
                                    <p><textarea></textarea></p>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p>接单状态:
                                    <form action="/admin/orderxgjyzt" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="oid" value="<?php echo e($re->oid); ?>"/>
                                        <input type="hidden" name="tc_id" value="<?php echo e($re->tc_id); ?>"/>
                                        <input type="hidden" name="tc_phone" value="<?php echo e($re->tc_phone); ?>"/>
                                        <select name="ht_t_status">
                                            <option value="1" <?php if($re->ht_t_status == '1'): ?> selected='selected' <?php endif; ?> >已预约</option>
                                            <!-- <option value="2">待处理</option> -->
                                            <option value="3" <?php if($re->ht_t_status == '3'): ?> selected='selected' <?php endif; ?>>已审核</option>
                                            <option value="4" <?php if($re->ht_t_status == '4'): ?> selected='selected' <?php endif; ?>>取消预约</option>
                                            <option value="5" <?php if($re->ht_t_status == '5'): ?> selected='selected' <?php endif; ?>>已确认</option>
                                            <option value="6" <?php if($re->ht_t_status == '6'): ?> selected='selected' <?php endif; ?>>部分合适</option>
                                            <option value="7" <?php if($re->ht_t_status == '7'): ?> selected='selected' <?php endif; ?>>试课中</option>
                                            <option value="8" <?php if($re->ht_t_status == '8'): ?> selected='selected' <?php endif; ?>>已成功(授课中)</option>
                                            <option value="9" <?php if($re->ht_t_status == '9'): ?> selected='selected' <?php endif; ?>>已成功(结束授课)</option>
                                            <option value="10" <?php if($re->ht_t_status == '10'): ?> selected='selected' <?php endif; ?>>试课失败</option>
                                        </select>
                                        <input type="submit" style="color: red;" value="修改"/>
                                    </form>
                                    </p>
                                    <p>预约类型:<input type="text" name=""></p>
                                    <p>欠款总额:<input type="text" name=""></p>
                                    <p>账户总额:<input type="text" name=""></p>
                                    <p>诚意金:<input type="text" name="" value=""></p>
                                    <p><a href="">本单财务流水</a>|<a href="">本单授课订单</a></p>
                                    <p><a href="">以往报名情况</a><span style="color:red">(2)</span></p>
                                    <p>
                                        <a href="">显示|</a>
                                        <a href="">屏蔽|</a>
                                        <a href="">删除</a>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p><a href="">编辑资料</a></p>
                                    <p><a href="">推荐到首页</a>|<a href="">有头像</a></p>
                                    <p><a href="/teacher/detail/<?php echo e($re->id); ?>.html" target="_blank">查看简历</a> <input type="submit" name=""></p>
                                    <p><a href="<?php echo e($re->tc_id_photo==null?'/admin/zj/1':$re->tc_id_photo); ?>" target="_blank">查看身份证</a><input type="submit" name=""></p>
                                    <p><a href="<?php echo e($re->tc_xszimage==null?'/admin/zj/2':$re->tc_xszimage); ?>" target="_blank">查看学生证</a><input type="submit" name=""></p>
                                    <p>邀请人:<input type="text"><input type="" name=""></p>
                                    <p>管理人:<input type="text"><input type="" name=""></p>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="fc" style="display: none;"></div>
<div class="fc_content1" style="display: none;">
    <div class="pd">
        <p style="margin-top: 15px;">性别
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option>男</option>
                        <option>女</option>
                    </select>
                </span>
        </p>
        <p>学校
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
                        <option value="大一">大一</option>
                        <option value="大二">大二</option>
                        <option value="大三">大三</option>
                        <option value="大四">大四</option>
                        <option value="大五">大五</option>
                        <option value="研一">研一</option>
                        <option value="研二">研二</option>
                        <option value="研三">研三</option>
                        <option value="本科毕业">本科毕业</option>
                        <option value="研究生毕业">研究生毕业</option>
                        <option value="博士在读">博士在读</option>
                        <option value="博士毕业">博士毕业</option>
                        <option value="专职老师">专职老师 </option>
                    </select>
                </span>
            <span class="btn">增加</span>
        </p>
        <p>教龄
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option value="1年以内">1年以内</option>
                        <option value="1年">1年</option>
                        <option value="2年">2年</option>
                        <option value="3年">3年</option>
                        <option value="4年">4年</option>
                        <option value="4年以上">4年以上</option>
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
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option value="数学">数学</option>
                        <option value="英语">英语</option>
                        <option value="国际学院内设专业（英文授课）">国际学院内设专业（英文授课）</option>
                        <option value="物理类">物理类</option>
                        <option value="化学类">化学类</option>
                        <option value="生物学类">生物学类</option>
                        <option value="师范专业（包括教育学）">师范专业（包括教育学）</option>
                        <option value="心理学">心理学</option>
                        <option value="管理学">管理学</option>
                        <option value="经济类">经济类</option>
                        <option value="外语系（英语专业以外）">外语系（英语专业以外）</option>
                        <option value="建筑类">建筑类</option>
                        <option value="法学">法学</option>
                        <option value="新闻">新闻</option>
                        <option value="中文">中文</option>
                        <option value="政治">政治</option>
                        <option value="历史">历史</option>
                        <option value="地址物理">地址物理</option>
                        <option value="医学/药学">医学/药学</option>
                        <option value="社会学类">社会学类</option>
                        <option value="农林专业">农林专业</option>
                        <option value="体育">体育</option>
                        <option value="艺术">艺术</option>
                        <option value="计算机">计算机</option>
                        <option value="电子信息科学">电子信息科学</option>
                        <option value="自然类科学">自然类科学</option>
                        <option value="其他">其他</option>

                    </select>
                </span>
            <span class="btn">增加</span>
        </p>
        <p style="text-align: center;">
            <input type="submit" name="" value="确认" class="sure_qd">
        </p>
    </div>

</div>


<div class="showFc" style="display: none">
    <form action="/admin/jzorder">
        <div style="width:70%; margin:0 auto; margin-top: 25px;">
            <p>客户类型：
                <select name="" id="">
                    <option>家长</option>
                    <option>家教</option>
                    <option>机构</option>
                    <option>对方协助</option>
                    <option>我方协助</option>
                </select>
            </p>
            <p>名字:<input type="" name="" style="border:1px solid #a2a2a2;"></p>
            <p>收支方式
                <select>
                    <option value="">收款</option>
                    <option value="">付款</option>
                </select>
            </p>
            <p>收支款金额：<input type="text" name="" style="border:1px solid #a2a2a2;"></p>

            <p></p>
            <div class="DD_name">

                <p>付款方式:
                    <select>
                        <option value="">支付宝</option>
                        <option value="">微信</option>
                        <option value="">淘宝</option>
                        <option value="">银行卡</option>
                        <option value="">小程序</option>
                    </select>
                </p>
                <p>我方名字:<input type="text" name=""></p>
                <p>我方账号：<input type="text" name=""></p>
                <p>对方名字:<input type="text" name=""></p>
                <p>对方账号：<input type="text" name=""></p>
            </div>

            <p><span style="    display: inherit;">备注：</span><textarea name="" id=""></textarea></p>
            <p>订单号：<input type="text" name=""></p>
            <p>时间：<input type="text" name="time" style="border:1px solid #a2a2a2; width:200px; " placeholder="时间格式:2017-5-1  12:30"></p>
            <p style="padding: 10px;"><input type="submit" name="" value="确定" style="width: 121px;height:32px;"></p>

        </div></form>
</div>
<!-- 全局js -->
<script src="/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/admin/js/bootstrap.min.js?v=3.3.6"></script>



<script src="/admin/js/plugins/jeditable/jquery.jeditable.js"></script>

<!-- Data Tables -->
<script src="/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- 自定义js -->
<script src="/admin/js/content.js?v=1.0.0"></script>


<!-- Page-Level Scripts -->
<script>
    $(document).ready(function () {
        console.log('%c 作者：林俊江','background:#aaa;color:#bada55','this is not colored');
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


    $('.show_tj_btn').click(function(){
        $('.fc').show(500)
        $('.fc_content1').show(500)
    })
    $('.fc').click(function(){
        $('.fc').hide(500)
        $('.fc_content1').hide(500)
        $('.showFc').hide(500)
    })
    $('.btn').click(function () {

        var a  = $(this).parent().find(".sel_span select:first")[0].outerHTML
        $(this).parent().find('.sel_span').append(a)

    })
    $('.sure_qd').click(function(event) {
        $('.fc').hide(500)
        $('.fc_content1').hide(500)
    });
    $('#textarea2').val('有责任心，有家教经验优先。')
    function seeId(){
        $('.showFc').show(500)
        $('.fc').show(500)
    }
</script>


<style type="text/css">
    .no_ne{
        display: none;
    }
    .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
        border-top: 1px solid #e7eaec;
        line-height: 1.42857;
        padding: 0;
        vertical-align: top;
    }
    input{
        width: 80px;
        height: 18px;
        border: none;
    }
    .fc {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.41);
        top: 0;
        left: 0;
    }
    .fc_content1 {
        width: 650px;
        height: 400px;
        position: fixed;
        background: #fff;
        left: 50%;
        top: 50%;
        margin-left: -325px;
        margin-top: -200px;
    }
    .showFc{
        width: 650px;
        position: fixed;
        background: #fff;
        left: 50%;
        top: 50%;
        margin-left: -325px;
        margin-top: -280px;
    }
    .showFc input{
        border: 1px solid #ccc;
    }
    .pd{
        margin: 0 20px;
    }
    .pd p {
        padding: 4px 0px;
    }
</style>

</body>

</html>
