<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>试课不成功</title>
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
            <div class="col-sm-12" style="overflow: scroll;">
                <div class="ibox float-e-margins" style="width: 4000px;overflow: scroll;">
                    <div class="ibox-title">
                        <h5>试课不成功 <small>分类，查找</small></h5>
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
                                <tr>
                                    <th>退款编号</th>
                                    <th>城市</th>
                                    <th>提交时间</th>
                                    <th>退款性质</th>
                                    <th>订单号</th>
                                    <th>授课订单号</th>
                                    <th>教员编号</th>
                                    <th>教员姓名</th>
                                    <th>退款原因</th>
                                    <th>学员编号</th>
                                    <th>学员姓名</th>
                                    <th>学员电话</th>
                                    <th>已收课酬</th>
                                    <th>应退最大金额</th>
                                    <th>申请金额</th>
                                    <th>回访反馈</th>
                                    <th>是否换人</th>
                                    <th>新单单号</th>
                                    <th>处理结果</th>
                                    <th>审核时间</th>
                                    <th>主管审核</th>
                                    <th>主管审核时间</th>
                                    <th>退款备注</th>
                                    <th>退款状态</th>
                                    <th>退款图片</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $l)
                                <?php $q = $l->o_ts*$l->o_xs*$l->money ?>
                                <tr class="gradeX">
                                    <td>{{ $l->jl_id }}</td>
                                    <td>{{ $l->city_name }}</td>
                                    <td>{{ date('Y-m-d h:i:s',$l->tk_times) }}</td>
                                    <td>试课不成功</td>
                                    <td>{{ $l->id }}</td>
                                    <td></td>
                                    <td>T{{ $l->t_id }}
                                    </td>
                                    <td>{{ $l->tc_name }}</td>
                                    <td>{{ $l->sfsk }}|{{ $l->nocglx }}|{{ $l->yuanyin }}</td>
                                    <td>T{{ $l->id }}</td>
                                    <td>{{ $l->user_name }}</td>
                                    <td>{{ $l->user_phone }}</td>
                                    <td>{{ $l->yskc }}</td>
                                    <td>@if($l->pay_zt2 == '1')
                                            {{ $l->xxf+$l->xxf2 }}元
                                        @else
                                            {{ $l->xxf }}元
                                        @endif
                                    </td>
                                    <td>
                                        {{$l->xxftk}}
                                        <input type="hidden" id="money{{ $l->jl_id }}" value="{{$l->xxftk}}" >
                                    </td>
                                    <td>
                                        家长想换个专职老师/或者原来是专职老师，想试试大学生（未试课）
                                        <button class="timeShow1" onclick="tjfk({{ $l->jl_id }})">查看</button>
                                    </td>
                                    <td>无显示</td>
                                    <td>无显示</td>
                                    <td>
                                        @if($l->ht_zgsh == '4'|| $l->ht_zgsh == null)
                                            <select name="" id="" onclick="shenhe( {{ $l->jl_id }} )">
                                                <option value="">请选择</option>
                                                <option value="1" {{ $l->ht_cljg == '1'?'selected':'' }} onclick="ajaxsh(this,{{ $l->jl_id }},{{ $l->t_id }},{{ $l->rid }},1,1,{{ $l->id }})">审核通过</option>
                                                <option value="2" {{ $l->ht_cljg == '2'?'selected':'' }} onclick="ajaxsh(this,{{ $l->jl_id }},{{ $l->t_id }},{{ $l->rid }},1,2,{{ $l->id }})">教员原因不退</option>
                                                <option value="3" {{ $l->ht_cljg == '3'?'selected':'' }} onclick="ajaxsh(this,{{ $l->jl_id }},{{ $l->t_id }},{{ $l->rid }},1,3,{{ $l->id }})">关闭退款</option>
                                            </select>
                                        @else
                                            @if($l->ht_zgsh == '1')
                                                审核通过
                                            @elseif($l->ht_zgsh == '2')
                                                拒绝退款
                                            @elseif($l->ht_zgsh == '3')
                                                关闭退款
                                            @endif
                                        @endif
                                    </td>
                                    <td>17-4-28|11:06</td>
                                    <td>
                                        @if($l->ht_zgsh == '4'|| $l->ht_zgsh == null)
                                            <select name="" id="jc{{ $l->jl_id }}" disabled="true">
                                                <option value="" {{ $l->ht_zgsh == ''?'selected':'' }} >请选择</option>
                                                <option value="1" {{ $l->ht_zgsh == '1'?'selected':'' }} onclick="ajaxsh(this,{{ $l->jl_id }},{{ $l->t_id }},{{ $l->rid }},2,1,{{ $l->id }})">审核通过</option>
                                                <option value="2" {{ $l->ht_zgsh == '2'?'selected':'' }} onclick="ajaxsh(this,{{ $l->jl_id }},{{ $l->t_id }},{{ $l->rid }},2,2,{{ $l->id }})">拒绝退款</option>
                                                <option value="3" {{ $l->ht_zgsh == '3'?'selected':'' }} onclick="ajaxsh(this,{{ $l->jl_id }},{{ $l->t_id }},{{ $l->rid }},2,3,{{ $l->id }})">关闭退款</option>
                                                <option value="4" {{ $l->ht_zgsh == '4'?'selected':'' }} onclick="ajaxsh(this,{{ $l->jl_id }},{{ $l->t_id }},{{ $l->rid }},2,4,{{ $l->id }})">待处理</option>
                                            </select>
                                        @else
                                            @if($l->ht_zgsh == '1')
                                                审核通过
                                            @elseif($l->ht_zgsh == '2')
                                                拒绝退款
                                            @elseif($l->ht_zgsh == '3')
                                                关闭退款
                                            @elseif($l->ht_zgsh == '4')
                                                待处理
                                            @endif
                                        @endif
                                    </td>
                                    <td>17-4-28|11:06</td>
                                    <td><a href="">查看备注</a></td>
                                    <td>@if($l->ht_zgsh == '1')
                                            通过
                                        @elseif($l->ht_zgsh == '2')
                                            拒绝退款
                                        @elseif($l->ht_zgsh == '3')
                                            关闭
                                        @elseif($l->ht_zgsh == '4')
                                            待处理
                                        @elseif($l->ht_zgsh == NULL)
                                            正常
                                        @endif</td>
                                    <td><a href="">查看图片</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="fc" style="display: none;"></div>
    <div class="fc_content" id="tjfk{{ $l->jl_id }}" style="display: none">
        <div style="padding: 10px 32px;">
            <ul>
                <li><font><font>是否试课
                        </font></font><select id="ok_no">
                        <option value="已试课"><font><font>已试课</font></font></option>
                        <option value="尚未试课"><font><font>尚未试课</font></font></option>
                    </select>
                </li>
                <li><font><font>不成功类型
                        </font></font><select id="renyuan">
                        <option value="家长原因"><font><font>家长原因</font></font></option>
                        <option value="教员原因"><font><font>教员原因</font></font></option>
                    </select>
                </li>
                <li>
                    <p class="seleYY"><font><font>原因
                            </font></font><select id="no_xueyuan" style="display:none; width:360px;">
                            <option value=""><font><font>家长已经找到老师了</font></font></option>
                            <option value=""><font><font>家长还是选择了去上辅导班（未试课）</font></font></option>
                            <option value=""><font><font>家长临时不要而未能试课</font></font></option>
                            <option value=""><font><font>家长的要求与订单不符，经协调不合适未去试课</font></font></option>
                            <option value=""><font><font>家长/学​​生因为课程的变动不试课</font></font></option>
                            <option value=""><font><font>学员暂时不接受家教未能试课</font></font></option>
                            <option value=""><font><font>家长一个星期后未联系上</font></font></option>
                            <option value=""><font><font>家长一个星期后还无法确认试课时间</font></font></option>
                            <option value=""><font><font>家长想换个性别（男/女）的老师（未试课）</font></font></option>
                            <option value=""><font><font>家长想换个更好学校或者更合适专业的老师（未试课）</font></font></option>
                            <option value=""><font><font>家长想换个专职老师/或者原来是专职老师，想试试大学生（未试课）</font></font></option>
                        </select>
                        <select id="ok_xueyuan" style="display:none;width:360px;">
                            <option value=""><font><font>学员暂时不太适应家教试课不成功</font></font></option>
                            <option value=""><font><font>家长还是选择了去上辅导班（已试课）</font></font></option>
                            <option value=""><font><font>家长试课后想换个更好学校或者更合适专业的老师（已试课）</font></font></option>
                            <option value=""><font><font>家长想换个专职老师/或者原来是专职老师，想试试大学生（已试课）</font></font></option>
                            <option value=""><font><font>家长试课后家长想换个性别（男/女）的老师（已试课）</font></font></option>
                        </select>
                        <select id="no_jiaoyuan" style="display:none;width:360px;">
                            <option value=""><font><font>教员个人原因去不了试课</font></font></option>
                            <option value=""><font><font>学员的要求较高，教员无法胜任</font></font></option>
                        </select>

                        <select id="ok_jiaoyuan" style="display:none;width:360px;">
                            <option value=""><font><font>教员个人原因以后没法上课</font></font></option>
                            <option value=""><font><font>教员迟到，上课时玩手机，一直在提钱，态度不好</font></font></option>
                            <option value=""><font><font>教员不认真备课和准备，对孩子不负责</font></font></option>
                            <option value=""><font><font>教员能力有限，带不了孩子</font></font></option>
                            <option value=""><font><font>教员试课后家长不满意（除以上项目以外的）</font></font></option>
                        </select>
                    </p>
                </li>
                <li style="text-align: center">
                    <button class="sure_qd_btn">确认</button>
                </li>
            </ul>
        </div>
    </div>

    <style>
        *{
            margin:0;
            padding: 0;
        }
        li{
            list-style: none;
            padding: 8px 0;
        }
        .fc {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.41);
            top: 0;
            left: 0;
            z-index: 998;
        }
        .fc_content {
            width: 470px;
            height: 173px;
            position: fixed;
            background: #fff;
            left: 50%;
            top: 50%;
            margin-left: -235px;
            margin-top: -107px;
            padding-bottom: 14px;
            z-index: 999;
        }
        .seeMar{
            margin: 0 27px;
        }
    </style>


    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>

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
        function shenhe(id){
            $(this).change(function(){
                $('#jc'+id).attr('disabled',false)
            })
        }
        //ajax 1为处理结果 2为主管审核
        function ajaxsh(obj,id,tid,rid,zt,edit,oid){
             // alert(oid);
            //alert(rid);
            var money = $('#money'+id).val();
            // alert(money);
            $.ajax({
                type:'POST',
                url:"{{ URL('/admin/tdye.html') }}",
                contentType:"application/x-www-form-urlencoded; charset=utf8",
                data:{"id":id,"tid":tid,'rid':rid,'zt':zt,'m':money,'edit':edit,'pd':'skbcg','oid':oid},
                /*dataType:'JSON',*/
                success:(function(result){
                    location.reload();
                }),
                error:(function(result,status){
                    // larye.alert('sb!');
                })

            });
        }
    </script>

    <script>
        $('.timeShow').click(function(){
            $('.fc').show(500)
            $('#tjfk{{ $l->jl_id }}').show(500)
        })
        $('.fc').click(function(){
            $('.fc').hide(500)
            $('#tjfk{{ $l->jl_id }}').hide(500)
        })
        $('.sure_btn').click(function(){
            $('.fc').hide(500)
            $('#tjfk{{ $l->jl_id }}').hide(500)
        })
        $('.sure_qd_btn').click(function(){
            $('.fc').hide(500)
            $('#tjfk{{ $l->jl_id }}').hide(500)
        })
        $('.qxBtn').click(function(){
            $('.fc').hide(500)
            $('#tjfk{{ $l->jl_id }}').hide(500)
        })



        $('#ok_no').change(function(){
            var ok_no = $('#ok_no option:selected').val()
            var renyuan =$('#renyuan option:selected').val()
            if(renyuan == '家长原因' & ok_no == '已试课'){
                $('#ok_xueyuan').show()
                $('#ok_jiaoyuan').hide()
                $('#no_jiaoyuan').hide()
                $('#no_xueyuan').hide()
            }
            if(renyuan == '家长原因' & ok_no == '尚未试课'){
                $('#ok_xueyuan').hide()
                $('#ok_jiaoyuan').hide()
                $('#no_jiaoyuan').hide()
                $('#no_xueyuan').show()
            }
            if(renyuan == '教员原因' & ok_no == '已试课'){
                $('#ok_xueyuan').hide()
                $('#ok_jiaoyuan').show()
                $('#no_jiaoyuan').hide()
                $('#no_xueyuan').hide()
            }
            if(renyuan == '教员原因' & ok_no == '尚未试课'){
                $('#ok_xueyuan').hide()
                $('#ok_jiaoyuan').hide()
                $('#no_jiaoyuan').show()
                $('#no_xueyuan').hide()
            }
        })
        $('#renyuan').change(function(){
            var ok_no = $('#ok_no option:selected').val()
            var renyuan =$('#renyuan option:selected').val()
            if(renyuan == '家长原因' & ok_no == '已试课'){
                $('#ok_xueyuan').show()
                $('#ok_jiaoyuan').hide()
                $('#no_jiaoyuan').hide()
                $('#no_xueyuan').hide()
            }
            if(renyuan == '家长原因' & ok_no == '尚未试课'){
                $('#ok_xueyuan').hide()
                $('#ok_jiaoyuan').hide()
                $('#no_jiaoyuan').hide()
                $('#no_xueyuan').show()
            }
            if(renyuan == '教员原因' & ok_no == '已试课'){
                $('#ok_xueyuan').hide()
                $('#ok_jiaoyuan').show()
                $('#no_jiaoyuan').hide()
                $('#no_xueyuan').hide()
            }
            if(renyuan == '教员原因' & ok_no == '尚未试课'){
                $('#ok_xueyuan').hide()
                $('#ok_jiaoyuan').hide()
                $('#no_jiaoyuan').show()
                $('#no_xueyuan').hide()
            }
        })

        function tjfk(id){
            $('.fc').show(500)
            $('#tjfk{{ $l->jl_id }}').show(500)
        }

    </script>


</body>

</html>
