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
                    <h5>学生订单</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                @foreach($data as $data)
                <div class="ibox-content">
                <form method="post" action="/admin/doorder">
                    <div class="title">
                        <ul>
                            <li style="width: 160px"><p>城市订单安排方式</p></li>
                            <li style="width: 103px"><p>联系方式</p></li>
                            <li style="width: 130px"><p>客户信息</p></li>
                            <li style="width: 270px"><p>修改需求信息</p></li>
                            <li style="width: 200px"><p>财务部分</p></li>
                            <li style="width: 155px"><p>管理员备注</p></li>
                            <li style="width: 156px"><p>订单状态</p></li>
                        </ul>
                    </div>
                    <div class="con">
                    <form>
                    <div class="content-1" style="width: 300px">
                        <ul>

                            <li><p>广州</p></li>
                            <li><p>
                                <select>
                                    <option value="volvo">正常(默认)</option>
                                    <option value="saab">协助</option>
                                    <option value="opel">求助单</option>
                                    <option value="audi">特别关注</option>
                                </select>
                                </p>
                            </li>
                            <li><p>
                                    <select>
                                        <option value="volvo">学期中</option>
                                        <option value="saab">暑假单</option>
                                        <option value="opel">寒假单</option>
                                    </select>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <select>
                                        <option value="volvo">栗志</option>
                                        <option value="saab">德栗</option>
                                        <option value="opel">思敏</option>
                                        <option value="opel">教员介绍</option>
                                        <option value="opel">老家长</option>
                                        <option value="opel">其它</option>
                                    </select>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <select>
                                        <option value="volvo">58</option>
                                        <option value="saab">58/老客户</option>
                                        <option value="saab">360</option>
                                        <option value="opel">360/老客户</option>
                                        <option value="opel">百度</option>
                                        <option value="opel">百度/老客户</option>
                                        <option value="opel">今日头条</option>
                                        <option value="opel">今日头条/老客户</option>
                                        <option value="opel">搜狗</option>
                                        <option value="opel">搜狗/老客户</option>
                                        <potion value="xs">同学介绍</option>
                                        <potion value="xs">老家长</option>
                                    </select>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <select>
                                        <option value="1">系统安排（默认）</option>
                                        <option value="2">人工安排</option>
                                        <option value="3">满足条件</option>
                                    </select>
                                </p>
                            </li>
                            <li>
                                <p>是否签约教员：
                                    <select>
                                        <option value="1">是</option>
                                        <option value="0">否</option>
                                    </select>
                                </p>
                            </li>
                            <li style="height: 250px">
                                <textarea style="height:100%;" name="yxtj"></textarea>
                            </li>
                            <li><input type="submit" value="修改" /></li>
                        </ul>
                    </div>
                    <div class="content-1">
                        <ul>
                            <li><p>{{ $data->user_phone }}</p></li>
                            <li><p>{{ $data->user_name }}</p></li>
                            <li><p>{{ date("Y-m-d h:i:s",$data->time) }}</p></li>
                            <li><p>新家长/老家长（以往订单数量）</p></li>
                            <li><p>(家长等级)</p></li>
                            <li><p>备注框</p></li>
                            <li>
                                <p>
                                    <select name="deer">
                                        <option value="1">是</option>
                                        <option value="0">否</option>
                                    </select>
                                </p>
                            </li>
                            <li style="height: 250px"><textarea name="" id="" cols="30" rows="10" class="textArea"></textarea></li>
                            <li><input type="submit" value="修改" /></li>
                        </ul>
                    </div>
                    <div class="content-1">
                        <ul>
                            <li><p>电话：13500001111（可增加绑定电话）</p></li>
                            <li><p>微信：13500001111</p></li>
                            <li><p>QQ:1313132</p></li>
                            <li><p>高二</p></li>
                            <li><p>文科(学员文理科)</p></li>
                            <li><p>女生</p></li>
                            <li><p>越秀区</p></li>
                            <li><p>公园前地铁站附近</p></li>
                            <li>标注位置</li>
                            <li></li>
                            <li style="height: 100px"></li>
                            <li><p>提交修改</p></li>
                        </ul>
                    </div>
                    <div class="content-1" style="width: 200px">
                        <ul>
                            <li><p>辅导科目：</p></li>
                            <li><p>学员辅导类型：</p></li>
                            <li><p>是否需要我们提供专业辅导</p></li>
                            <li><p>时间安排：</p></li>
                            <li><p>可授课时间：/p></li>
                            <li><p>学员情况描述：</p></li>
                            <li><p>选择教员性别：</p></li>
                            <li><p>对教员具体的要求：</p></li>
                            <li><p>教员性质</p></li>
                            <li><p>支付给老师的报酬：</p></li>
                            <li><p>家长支付给我们的报酬：</p></li>
                            <li><p>接单教员编号姓名： </p></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="content-1">
                        <ul>
                            <li><input type="text"></li>
                            <li><p>授课教学、作业辅导、讲解疑难（可下拉修改）：</p></li>
                            <li><p>是/否</p></li>
                            <li><p>每周2次；每次3小时</p></li>
                            <li><p>周日均可，可协商</p></li>
                            <li><input type="text"></li>
                            <li><p>女教员、男教员、男女均可</p></li>
                            <li><input type="text"></li>
                            <li><p>大学生家教（默认）、专职老师、大学生专职老师均可</p></li>
                            <li><p>50元/小时(可下拉选择 元/月）</p></li>
                            <li><p>60元/小时(可下拉选择 元/月）</p></li>
                            <li><p>自动抓取所有应聘教员的信息或者手动填入</p></li>
                            <li>提交修改</li>
                        </ul>
                    </div>
                    <div class="content-1" style="width: 220px">
                        <ul>
                            <li><p>预计总收费（如是签约教员，这里等于默认值，系统设置好）</p></li>
                            <li><p>预计信息费（如是签约教员，这里等于默认值，系统设置好）</p></li>
                            <li><p>家长服务费（如是签约教员，这里等于默认值，系统设置好）</p></li>
                            <li><p>周薪酬</p></li>
                            <li><p>月薪酬：/p></li>
                            <li><p>实际收款总额：</p></li>
                            <li><p>收费差额：</p></li>
                            <li style="height: 300px;"><p>收支流水 增加按钮</p></li>
                        </ul>
                    </div>
                    <div class="content-1" style="width: 140px">
                        <ul>
                            <li><p>300</p></li>
                            <li><p>300</p></li>
                            <li><p>50</p></li>
                            <li><p>300</p></li>
                            <li><p>3121</p></li>
                            <li><p>211</p></li>
                            <li><p>-169</p></li>
                            <li style="height:250px;"><input type="text" style="width: 100%; "></li>
                            <li>提交修改</li>
                        </ul>

                    </div>
                    <div class="content-1" style="width: 300px">
                        <ul>
                            <li><p>前台生成/后台发布</p></li>
                            <li><p>IP地址：58.62.28.226</p></li>
                            <li><p>关联新单：如这张单转生成新单，列示新单号</p></li>
                            <li><p>关联老单：如这张单是老单转生成的新单，列示老单号</p></li>
                            <li style="height:400px;"><p>备注</p></li>
                            <li><span>新增备注</span></li>
                        </ul>

                    </div>
                    <div class="content-1" style="width: 300px">
                        <ul>
                            <li>订单状态(可下拉修改)</li>
                            <li><p>所有应聘教员（人数）</p></li>
                            <li><p>试课时间：</p></li>
                            <li><p>试课地点：</p></li>
                            <li><p>电子合同 | 合同上传（纸质）   </p></li>
                            <li><p>本单授课订单</p></li>
                            <li><p>状态变化情况与时间</p></li>
                            <li><p>当前显示/当前屏蔽  |  删除（扔入垃圾箱，可恢复）</p></li>
                            <li><p>设置VIP/解除VIP</p></li>
                            <li><p>当前置顶/当前非置顶     推送教员（显示：系统推送-安排后的单，从教员会员中心-我预约的单删除）</p></li>
                            <li></li>
                            <li><p>前台查看此家教</p></li>
                            <li>信息发布模板</li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            </form>

        </div>
        @endforeach
    </div>
</div>
<style>
ul{
    padding: 0;
}
.con{
    display: flex;
    border-top: 1px solid #000;
    border-right: 1px solid #000;
}
.textArea{
    width: 100px;
    height: 100%;
}
    .title ul{
        display: flex;
    }
    .title li{
        padding: 10px;
        border: 1px solid;
        list-style: none;
        text-align: center;
        height: 50px;
        line-height: 25px;
    }

    .content-1{

    }
    .content-1 li{
        border-left: 1px solid #000;
        border-bottom: 1px solid #000;

        list-style: none;
        text-align: center;
        height: 50px;
    }
</style>

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
