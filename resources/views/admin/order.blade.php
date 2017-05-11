
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

    <!-- re Tables -->
    <link href="css/plugins/reTables/reTables.bootstrap.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
@foreach($data as $re)
<table border="1">
        <tr align="center">
            <th>订单类型</th>
            <th>用户信息</th>
            <th>联系方式</th>
            <th>需改需求信息</th>
            <th>财务部分</th>
            <th>管理员备注</th>
            <th>订单状态</th>
        </tr>
        <tr valign="top" align="center">
            <td>
            <form action="/admin/orderjc" method="post">
           {{ csrf_field() }}
           <input type="hidden" name="id" value="{{ $re->id }}"/>
                <div>
                    <p>城市:{{ $re->city_name }}{{ $re->city_id }}</p>
                    <p>签约:
                        <select name="tc_Signing">
                            <option value="是" @if($re->tc_Signing == '是') selected = "selected" @endif>是</option>
                            <option value="否" @if($re->tc_Signing == '否') selected = "selected" @endif>否</option>
                        </select>
                    </p>
                    <p>入口:
                        <select name="wzly">
                            <option value="栗志" >栗志</option>
                            <option value="德栗" >德栗</option>
                            <option value="思敏" >思敏</option>
                            <option value="教员介绍" >教员介绍</option>
                            <option value="老家长" >老家长</option>
                        </select>
                    </p>
                    <p>客户:
                        <select name="khly">
                            <option value="栗志" >栗志</option>
                            <option value="德栗" >德栗</option>
                            <option value="思敏" >思敏</option>
                            <option value="教员介绍" >教员介绍</option>
                            <option value="老家长" >老家长</option>
                        </select>
                    </p>
                    <p>状态:
                        <select name="ddzt" >
                            <option value="正常" >正常(默认)</option>
                            <option value="协助" >协助</option>
                            <option value="求助单" >求助单</option>
                            <option value="特别关注" >特别关注</option>
                        </select>
                    </p>
                    <p>学期:
                        <select name="jqzt" >
                            <option value="学期中" >学期中</option>
                            <option value="暑假单" >暑假单</option>
                            <option value="寒假单" >寒假单</option>
                        </select>
                    </p>
                    <p>安排:
                        <select name="ap" >
                            <option value="系统安排（默认）">系统安排（默认）</option>
                            <option value="人工安排">人工安排</option>
                            <option value="满足条件">满足条件</option>
                        </select>
                    </p>
                    <p><a href="">有限条件项目</a></p>
                    <p><input type="submit" name="" value="修改"></p>
                </div>
                </form>
            </td>
            <td>
            <form action="/admin/orderxgyh" method="post">
            <input type="hidden" name="id" value="{{ $re->id }}"/>
            {{ csrf_field() }}
                <div>
                    <p>编号:{{ $re->id }}</p>
                    <p>姓名:<input name="user_name" value="{{ $re->user_name }}"/></p>
                    <p>时间:{{ date('Y-m-d H:i:s',$re->time) }}</p>
                    <p>学员等级:</p>
                    <p style="position:relative; height: 20px;">
                        <span style="float: left">本单备注:</span>
                    </p>
                    <p>
                        <textarea class="bj_msg_A" style="display: block" name='yhbz'>{{ $re->yhbz }}</textarea>
                    </p>
                    <p><input type="submit" value="修改"></p>
                </div>
            </form>
            </td>
            <td>
            <form action="/admin/orderxgyh" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $re->id }}"/>
                <div>
                    <p>电话:{{ $re->user_phone }}</p>
                    <p>微信:<input type="text" name="wx" value="{{ $re->wx }}"></p>
                    <p>QQ:<input type="text" name="qq" value="{{ $re->qq }}"></p>
                    <p>年级:<input type="text" name="grade" value="{{ $re->grade }}"></p>
                    <p>文理科:<input type="text" name="wlk" value="{{ $re->wlk }}"></p>
                    <p>区域:<input type="text" name="dq" value="{{ $re->dq }}"></p>
                    <p>地址:<input type="text" name="xx_dz" value="{{ $re->xx_dz }}"></p>
                    <p>备用电话:<input type="text" name="user_byphone" value="{{ $re->user_byphone }}"></p>
                    <p>学员性别:<br>(1=男|2=女|3男女不限)<input type="text" name="user_sex" value="{{ $re->user_sex }}"/></p>
                    <p><input type="submit" name="" value="修改"></p>

                </div>
            </form>
            </td>
            <td>
            <form action="/admin/orderyy" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $re->id }}"/>
                <div>
                    <p style="width: 324px;">辅导科目:<input type="text" value="{{$re->subject_id}}" name="subject_id">
                    <br>是否需要专业辅导:
                        <select name="tc_Signing">
                            <option value="是" @if($re->tc_Signing == '是') selected = "selected" @endif>是</option>
                            <option value="否" @if($re->tc_Signing == '否') selected = "selected" @endif>否</option>
                        </select>
                    </p>
                    <p>辅导类型:<select name="fdlx" >
                        <option value="授课教学">授课教学</option>
                        <option value="作业辅导">作业辅导</option>
                        <option value="讲解疑难">讲解疑难</option>
                    </select>
                        接单教员：
                    </p>
                    <p>时间安排:<input type="text" name="per_week" value="{{ $re->per_week }}" style="width:220px;"></p>
                    <p>授课时间:<input type="text" name="sk_times" value="{{ $re->sk_times }}" style="width:220px;"></p>
                    <p>学员描述:<input type="text" name="user_situation" value="{{ $re->user_situation }}" style="width:220px;"></p>
                    <p>教员要求:<input type="text" name="teacher_info" value="{{ $re->teacher_info }}" style="width:220px;"></p>
                    <p>家长单价:<input type="text" name="money" value="{{ $re->money }}"></p>
                    <p>教员单价:<p>{{ $re->money }}</p>
                    <p>每周天数:<input type="text" name="o_ts" value="{{ $re->o_ts }}"></p>
                    <p>每周小时:<input type="text" name="o_xs" value="{{ $re->o_xs }}"></p>
                    <p>家长收费:@if($re->tc_Signing == '否'){{ $re->money*$re->o_xs }}@else 0 @endif</p>
                    <p>教员课酬:<input type="text" value="{{ $re->money }}" ></p>
                    <p>性别要求:
                    <select name="teacher_sex">
                        <option value="1" @if($re->teacher_sex == '1') selected="selected" @endif>男</option>
                        <option value="2" @if($re->teacher_sex == '2') selected="selected" @endif>女</option>
                        <option value="3" @if($re->teacher_sex == '3') selected="selected" @endif>男女不限</option>
                    </select>
                    性质要求:<select name="ls_type">
                                    <option value="大学生家教" @if($re->ls_type == '大学生家教') selected="selected" @endif>大学生家教</option>
                                    <option value="专职老师" @if($re->ls_type == '专职老师') selected="selected" @endif>专职老师</option>
                                    <option value="大学生专职老师均可" @if($re->ls_type == '大学生专职老师均可') selected="selected" @endif>大学生专职老师均可</option>
                                </select>
                    </p>
                    <p><input type="submit" name="" value="修改"></p>

                </div>
            </form>
            </td>
            <td>
                <div><?php $q = $re->o_ts*$re->o_xs*$re->money ?>
                    <p>周薪酬:<input type="text" value="{{ $q }}" name="order_zkc"></p>
                    <p>月薪酬:<input type="text" value="@if($re->o_ts == '1'){{ $q*4 }}@elseif($re->o_ts == '2'){{ $q*4 }}@elseif($re->o_ts == '3'){{ $q*4 }}@elseif($re->o_ts == '4'){{ $q*4 }}@elseif($re->o_ts == '5'){{ $q*4 }}@elseif($re->o_ts == '6'){{ $q*4 }}@elseif($re->o_ts == '7'){{ $q*4 }}@endif" name="order_ykc"></p>
                    <p>预计总费用:<input type="text" value="@if($re->o_ts == '1'){{ $q*$re->bfb1+$re->fz_jzxxf }}@elseif($re->o_ts == '2'){{ $q*$re->bfb2+$re->fz_jzxxf }}@elseif($re->o_ts == '3'){{ $q*$re->bfb3+$re->fz_jzxxf }}@elseif($re->o_ts == '4'){{ $q*$re->bfb4+$re->fz_jzxxf }}@elseif($re->o_ts == '5'){{ $q*$re->bfb5+$re->fz_jzxxf }}@elseif($re->o_ts == '6'){{ $q*$re->bfb6+$re->fz_jzxxf }}@elseif($re->o_ts == '7'){{ $q*$re->bfb7+$re->fz_jzxxf }}@endif"name="money" style="width: 60px;"></p>
                    <p>预计信息费:<input type="text" name="order_xxf" value="@if($re->o_ts == '1'){{ $q*$re->bfb1 }}@elseif($re->o_ts == '2'){{ $q*$re->bfb2 }}@elseif($re->o_ts == '3'){{ $q*$re->bfb3 }}@elseif($re->o_ts == '4'){{ $q*$re->bfb4 }}@elseif($re->o_ts == '5'){{ $q*$re->bfb5 }}@elseif($re->o_ts == '6'){{ $q*$re->bfb6 }}@elseif($re->o_ts == '7'){{ $q*$re->bfb7 }}@endif"style="width: 60px;"></p>
                    <p>家长服务费:<input type="text" value="{{$re->fz_jzxxf}}" name="order_jzfy" style="width: 60px;"></p>
                    <p>实际收款总额:<input type="text" name="sjsk" style="width:40px;"></p>
                    <p>收费差额:<input type="text" name="sfc" style="width:70px;"></p>
                    <p ><button class="showBtn" onclick='seeId({{ $re->user_id }})'>新增收支</button></p>
                    <p><input type="submit" name="" value="修改"></p>

                </div>
            </td>
            <td>
                <div>
                    <p>前台生成</p>
                    <p>ip地址:广州</p>
                    <p>关联新单:<input type="text" name=""></p>
                    <p>关联老单:<input type="text" name=""></p>
                    <p>关联原单:<input type="text" name=""></p>
                    <p style="position:relative; height: 20px;">
                        <span style="float: left">本单备注:</span>
                        <span style="float: right" class="bj_btn">编辑</span>
                    </p>
                    <p>
                        <textarea class="bj_msg" style="display: block"  name='ddbz'>
                        </textarea>
                    </p>
                    <p><input type="submit" name="" value="修改"></p>

                </div>
            </td>
            <td>
                <div>
                    <p><a href="/admin/orderyyrs/{{ $re->id }}" style="font-size:24px;color: red;">{{ $re->yynum }}</a>|<a target="_blank" href="/xxfb.php?oid={{ $re->id }}&title=@if(session('Template') == '2' || '4')德栗家教@else栗志家教@endif&q={{ $re->money*$re->o_xs }}&nj={{ $re->grade }}&dq={{ $re->dq }}">生成信息模板</a></p>
                    <p>状态:
                    <select name="ht_status">
                        <option value="0" @if($re->ht_status == '0') selected='selected' @endif>新家教</option>
                        <option value="1" @if($re->ht_status == '1') selected='selected' @endif>待处理</option>
                        <option value="2" @if($re->ht_status == '2') selected='selected' @endif>已安排</option>
                        <option value="3" @if($re->ht_status == '3') selected='selected' @endif>已成功(授课中)</option>
                        <option value="4" @if($re->ht_status == '4') selected='selected' @endif>已成功(授课结束)</option>
                        <option value="5" @if($re->ht_status == '5') selected='selected' @endif>待审核</option>
                        <option value="6" @if($re->ht_status == '6') selected='selected' @endif>待退款</option>
                        <option value="7" @if($re->ht_status == '7') selected='selected' @endif>关闭生成新单</option>
                        <option value="8" @if($re->ht_status == '8') selected='selected' @endif>关闭</option>
                    </select>
                        <button>查看</button>
                    </p>
                    {{-- <p>试课时间:<input type="" name="" value="{{ $re->rsk_times }}"></p> --}}
                    {{-- <p>试课地点:<input type="" name="" value="{{ $re->add }}"></p> --}}
                    <p><a href="/ht_hetong/{{ $re->id }}.html" target="_blank">电子合同</a>|<a href="">本单授课订单</a></p>
                    <p>试课时间:<input type="text" value="{{ $re->sks_time }}" ></p>
                    <p>试课地址:<input type="text" value="{{ $re->sks_add }}" ></p>
                    <p><a href="">前台查看次家教</a><button class="VIP" >设置为vip</button></p>
                    <p>
                        <a href="">显示</a>|
                        <a href="">屏蔽</a>|
                        <a href="">非置顶</a>|
                        <a href="">推送</a>|
                        <a href="">删除</a>
                    </p>
                    <p><button >本单收支流水</button></p>

                </div>
            </td>

        </tr>
</table>
    <div class="fc" style="display: none;"></div>
    <div class="showFc" style="display: none;" >
    <form action="/admin/jzorder">
        <div style="width:70%; margin:0 auto; margin-top: 25px;" >
    <input name="user_id" value=""/>
            <p>客户类型：
                <select name="" id="">
                    <option>家长</option>
                    <option>家教</option>
                    <option>机构</option>
                    <option>对方协助</option>
                    <option>我方协助</option>
                </select>
            </p>
            <p>名字:<input type="" name=""  style="border:1px solid #a2a2a2;"></p>
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
                <p>付款方式:
                    <select>
                        <option value="">支付宝</option>
                        <option value="">微信</option>
                        <option value="">淘宝</option>
                        <option value="">银行卡</option>
                        <option value="">小程序</option>
                    </select>
                </p>
                <p>对方名字:<input type="text" name=""></p>
                <p>对方账号：<input type="text" name=""></p>
            </div>

            <p><span style="    display: inherit;">备注：</span><textarea name="" id="" ></textarea></p>
            <P>订单号<input type="text" name=""></P>
            <p>时间<input type="text" name="time" style="border:1px solid #a2a2a2; width:200px; " placeholder="时间格式:2017-5-1  12:30"></p>
            <p style="padding: 10px;"><input type="submit" name="" value="确定" style="width: 121px;height:32px;"></p>
        </form>
    </div>
    </div>
<hr>
@endforeach
{{ $data->links() }}
<script>
    window.usid = {{ $re->user_id }}
</script>


    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>



    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- re Tables -->
    <script src="js/plugins/reTables/jquery.reTables.js"></script>
    <script src="js/plugins/reTables/reTables.bootstrap.js"></script>

    <!-- 自定义js -->
    <script src="js/content.js?v=1.0.0"></script>


    <!-- Page-Level Scripts -->
    <script>

        $(document).ready(function () {
            $('.reTables-example').reTable();
            /* Init reTables */
            var oTable = $('#editable').reTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function (sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitre": function (value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });
        function seeId(id){
            alert(id)
        }
        function fnClickAddRow() {
            $('#editable').reTable().fnAddre([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"]);

        }
                $('.showBtn').click(function(){
            $('.fc').show(500)
            $('.showFc').show(500)

        })
        $('.fc').click(function(){
            $('.fc').hide(500)
            $('.showFc').hide(500)
        })

    $('.bj_btn').click(function(){
        var bjmsg = $('.bj_msg').css('display')
        if(bjmsg =='none'){

            $('.bj_msg').show()
            $('.bj_msgS').hide()

            var a = $('.bj_msg_A').val()
            $('.bj_msgS_B').text(a)
        }else{
            $('.bj_msg').hide()
            $('.bj_msgS').show()

        }

    })
    $('.bj_btn_S').click(function(){
        var bjmsg = $('.bj_msg_A').css('display')
        if(bjmsg =='none'){
            $('.bj_msg_A').show()
            $('.bj_msgS_B').hide()
            var b = $('.bj_msg').val()
            $('.bj_msgS').text(b)

        }else{
            $('.bj_msg_A').hide()
            $('.bj_msgS_B').show()

        }

    })

    $('.VIP').click(function(){

        if($(this).html() == '设置为vip'){
            $(this).html('解除vip')
        }else{
            $(this).html('设置为vip')
        }
    })

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

        .fc{
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.86);
            top: 0;
            left: 0;
        }
        .showFc {
            position: fixed;
            width: 800px;
            height: 500px;
            background-color: #fff;
            left: 50%;
            top: 50%;
            margin-left: -400px;
            margin-top: -225px;
        }
    </style>
    <script type="text/javascript">

    </script>

</body>

</html>
