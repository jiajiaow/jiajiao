
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
@foreach($data as $data)
    <div class="wrapper wrapper-content animated fadeInRight" style="overflow: scroll;">

       <table border="1">
       <thead>
        <h1>订单号:{{ $data->id }}</h1>
       </thead>
       <form action="/admin/orderjc" method="post">
       {{ csrf_field() }}
       <input type="hidden" name="id" value="{{ $data->id }}"/>
            <tr style="background: #fff">
                <th>城市订单安排方式</th>
                <td>{{ $data->city_name }}</td>
                <td>
                    <select name="ddzt" style="border:0;width: 100%; ">
                        <option value="正常" >正常(默认)</option>
                        <option value="协助" >协助</option>
                        <option value="求助单" >求助单</option>
                        <option value="特别关注" >特别关注</option>
                    </select>
                </td>
                <td>
                    <select name="jqzt" style="border:0;width: 100%; ">
                        <option value="学期中" >学期中</option>
                        <option value="暑假单" >暑假单</option>
                        <option value="寒假单" >寒假单</option>
                    </select>
                </td>
                <td>
                    <select name="wzly" style="border:0;width: 100%; ">
                        <option value="栗志" >栗志</option>
                        <option value="德栗" >德栗</option>
                        <option value="思敏" >思敏</option>
                        <option value="教员介绍" >教员介绍</option>
                        <option value="老家长" >老家长</option>
                    </select>
                </td>
                <td>
                   <select name="khly" style="border:0;width: 100%; ">
                        <option value="58">58</option>
                        <option value="58老客户">58老客户</option>
                        <option value="360">360</option>
                        <option value="360老客户">360老客户</option>
                    </select>
                </td>
                <td>
                    <select name="ap" style="border:0;width: 100%; ">
                        <option value="系统安排（默认）">系统安排（默认）</option>
                        <option value="人工安排">人工安排</option>
                        <option value="满足条件">满足条件</option>
                    </select>
                </td>
                <td>
                    是否签约教员：
                    <select name="tc_Signing" style="border:0;width: 100%; ">
                        <option value="是">是</option>
                        <option value="否">否</option>
                    </select>
                </td>
                <td >
                    <p>空</p>
                </td>
                <td><input type="submit" value="修改" name=""></td>
            </tr>
            </form>
            <form action="/admin/orderxgyh" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $data->id }}"/>
            <tr style="background: #e7eaec">
                <th>联系方式</th>
                <td>{{ $data->user_name }}</td>
                <td>{{ $data->user_phone }}</td>
                <td>{{ date('Y-m-d h:i:s',$data->time) }}</td>
                <td>新家长/老家长</td>
                <td>家长等级</td>
                <td>
                    备注<textarea name="yhbz">{{ $data->yhbz }}</textarea>
                </td>
                <td><input type="submit" value="提交修改"/></td>
            </tr>
            </form>
            <form action="/admin/orderxgyh" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="u_id" value="{{ $data->u_id }}"/>
            <input type="hidden" name="o_id" value="{{ $data->id }}"/>
            <tr style="background: #fff">
                <th>客户信息</th>
                <td>
                    电话1:<input type="text" name="user_phone1" value="{{ $data->phone }}"/>
                    电话2:<input type="text" name="user_phone2" value="{{ $data->phone2 }}"/>
                    电话3:<input type="text" name="user_phone3" value="{{ $data->phone3 }}"/>
                </td>
                <td>微信:<input type="text" name="wx" value="{{ $data->wx }}"/></td>
                <td>QQ:<input type="text" name="qq" value="{{ $data->qq }}"/></td>
                <td><input type="text" name="grade" value="{{ $data->grade }}"/></td>
                <td><input type="text" name="wlk" value="{{ $data->wlk }}"/></td>
                <td><input type="text" name="user_sex" value="{{ $data->user_sex }}"/>(0=女|1=男)</td>
                <td><input type="text" name="dq" value="{{ $data->dq }}"/></td>
                <td><input type="text" name="xx_dz" value="{{ $data->xx_dz }}"/></td>
                <td><input type="submit" value="提交修改"/></td>
            </tr>
            </form>
            <form action="/admin/orderyy" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $data->id }}"/>
            <tr>
                <th>修改需求信息</th>
                <td>辅导科目<input type="text" name="subject_id" value="{{ $data->subject_id }}"></td>
                <td>是否需要我们专业辅导 <select name="tc_Signing" ><option value="是" @if($data->tc_Signing == '是') selected="selected" @endif>是</option><option @if($data->tc_Signing == '否') selected="selected" @endif value="否" >否</option></select>
                </td>
                <td>时间安排:<input type="text" name="per_week" value="{{ $data->per_week }}"/></td>
                <td>可授课时间：<textarea name="sk_times">{{ $data->sk_times}}</textarea></td>
                <td>学员情况描述：<textarea  name="user_situation" >{{ $data->user_situation }}</textarea></td>
                <td>对教员要求：<textarea name="teacher_info">{{ $data->teacher_info }}</textarea></td>
                <td>选择教员性别:
                <select name="teacher_sex">
                    <option value="男" @if($data->teacher_sex == '男') selected="selected" @endif>男</option>
                    <option value="女" @if($data->teacher_sex == '女') selected="selected" @endif>女</option>
                    <option value="男女不限" @if($data->teacher_sex == '男女不限') selected="selected" @endif>男女不限</option>
                </select></td>
                <td>对教员性质：<select name="ls_type">
                                    <option value="大学生家教" @if($data->ls_type == '大学生家教') selected="selected" @endif>大学生家教</option>
                                    <option value="专职老师" @if($data->ls_type == '专职老师') selected="selected" @endif>专职老师</option>
                                    <option value="大学生专职老师均可" @if($data->ls_type == '大学生专职老师均可') selected="selected" @endif>大学生专职老师均可</option>
                                </select></td>
                <td>支付给老师的报酬:<input type="text" name="money" value="{{ $data->money }}" /></td>
                <!--<td>家长支付给我们的报酬<select><option value="23"></option><option value="21"></option></select></td>-->
                <td>接单教员编号<input type="teacher_id" name="teacher_id" value="{{ $data->teacher_id }}"/></td>
                <td><input type="submit" value="提交修改"/></td>
            </tr>
            </form>
            <tr style="background: #fff">
                <th>财务部分</th>
                <td>预约总收费：<input type="text" name="money"></td>
                <td>预计信息费:<input type="text" name="money1"></td>
                <td>家长服务费:<input type="text" name="money1"></td>
                <td>周薪酬:<input type="text" name="money1"></td>
                <td>实际总收款   :<input type="text" name="money1"></td>
                <td>收费差额:<input type="" name="money1"></td>
                <td>收支流水<button>增加按钮</button><input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text"></td>
                <td><button>修改</button></td>
            </tr>
            <tr>
                <th>管理员备注</th>
                <td>前台生成</td>
                <td>ip地址：25,232,432,643</td>
                <td> <a href="">关联新单:123123</a> </td>
                <td><a href="">关联老单:123123</a> </td>
                <td><textarea name="beizuh"></textarea></td>
                <td><button>新增备注</button></td>
            </tr>
            <form action="/admin/orderzt" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $data->id }}"/>
            <tr style="background: #fff">
                <th>订单状态</th>
                <td><p>接单教员编号<input type="text" name="teacher_id" value="{{ $data->teacher_id }}" /></p>修改状态
                    <select name="ht_status">
                        <option value="0" @if($data->ht_status == '0') selected='selected' @endif>新家教</option>
                        <option value="1" @if($data->ht_status == '1') selected='selected' @endif>待处理</option>
                        <option value="2" @if($data->ht_status == '2') selected='selected' @endif>已安排</option>
                        <option value="3" @if($data->ht_status == '3') selected='selected' @endif>已成功(授课中)</option>
                        <option value="4" @if($data->ht_status == '4') selected='selected' @endif>已成功(授课结束)</option>
                        <option value="5" @if($data->ht_status == '5') selected='selected' @endif>待审核</option>
                        <option value="6" @if($data->ht_status == '6') selected='selected' @endif>待退款</option>
                        <option value="7" @if($data->ht_status == '7') selected='selected' @endif>关闭生成新单</option>
                        <option value="8" @if($data->ht_status == '8') selected='selected' @endif>关闭</option>
                    </select>
                </td>
                <td>所有应聘人数（<a href="/admin/orderyyrs/{{ $data->id }}" style="font-size:24px;color: red;">{{ $data->yynum }}</a>）</td>
                <td>试课时间：<input type="text" ></td>
                <td>电子合同/合同上传(纸质)</td>
                <td>本单授课订单</td>
                <td>状态变化情况与时间</td>
                <td><a href="">当前显示</a>/<a href="">当前屏蔽</a> |<a href="">删除（扔入垃圾箱，可恢复</a> )</td>
                <td>试课地点：<input type="text" ></td>
                <td><a href="">前台查看此家教</a></td>
                <td><a href="">设置vip</a>/<a href="">解除vip</a></td>
                <td><button>信息发布模板</button></td>
            </tr>
            </form>
        </table>
                </div>
            </div>
        </div>


    </div>
@endforeach
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
    </script>

    <style type="text/css">
        th,td{
            text-align: center;
        }
/*        tr:nth-child(2n+2){
            background: #e7eaec;
        }*/
        tr:nth-child(odd)
            {
            background:#fff;
            }
        tr:nth-child(even)
            {
            background:#e7eaec;
            }


    </style>


</body>

</html>
