<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
 <meta name="renderer" content="webkit">
  <title>教员个人中心订单</title>
	 <link rel="stylesheet" type="text/css" href="/new/css/cheng_css.css">
	 <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/new/css/date.css">
     <link rel="stylesheet" href="/new/css/jedate.css">
     <script type="text/javascript" src='/new/js/jquery-2.2.3.min.js'></script>

     <script type="text/javascript" src='/new/js/jedate.js'></script>


     <style type="text/css">
	body,p,h1,h2,h3,h4,h5,h6,ul,li{
		margin:0;
		padding:0;
		list-style:none;
		color:#333;
	}
	body{
		font-family:"Microsoft yahei";
		font-size:12px;
		background-color: #fdfdfd;
	/*	margin:0;
		padding:0;*/
	}
	div{
		display:block;
	}
	#header{
		width:100%;
		height:100px;
		background-color: #FACC40;
	}
	.cheng_header{
		margin:auto;
		width: 1200px;
		height: 100px;
		/*background-color: #e4393c;*/
	}
	.lf{
		float: left ;
	}
	.rt{
		float: right ;
	}
	a{
		text-decoration:none;
	}
	a:hover{
		text-decoration:none;
	}
    li{
        list-style: none;
        padding: 10px 0;
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
        width: 400px;
        height: 500px;
        position: fixed;
        background: #fff;
        left: 50%;
        top: 50%;
        margin-left: -200px;
        margin-top: -250px;
    }
    .seeMar{
        float: right;
        margin-right:100px;
    }

  </style>
 </head>
<body>
	<header>
		<div id="header">
			<div class="cheng_header">
				<div style="width:246px;height:100px;" class="lf">
					<div class="lf img-div">
						<img class="img-size" src="/new/images/logo.png">
					</div>
					<div class="a-div rt">
						<a href="" class="lf wenzi">德栗家教</a>
						<div class="cheng_line"></div>
						<a href="" class="lf wenzi">个人中心</a>
					</div>
				</div>
				<div class="rt" style="width:270px;float:right;height:100px;">
					<div class="xingxi">
						<a href="/xueyuan.html" class="lf wenzi">最新学员信息</a>
						<div class="cheng_line"></div>
						<a href="/" class="lf wenzi">返回首页</a>
						<div class="cheng_line"></div>
						<a href="outlogin.html"><div class="glyphicon glyphicon-off tubiao"></div></a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- 主体部分 -->
	<div id="zhen_container">
	<!-- 侧导航 -->
<div class="cheng_nav">
	<ul class="bian_nav">
		<li>
			<i class='cheng_one'></i>
			<span>个人信息</span>
		</li>
		<li class="cheng_active">
			<i class='cheng_two'></i>
			<span>订单管理</span>
		</li>
		<li>
			<i class='cheng_three'></i>
			<span>授课订单管理</span>
		</li>
		<li>
			<i class='cheng_four'></i>
			<span>成绩管理</span>
		</li>
		<li>
			<i class='cheng_five'></i>
			<span>财务中心</span>
		</li>
		<li>
			<i class='cheng_six'></i>
			<span>积分商城</span>
		</li>
		<li>
			<i class='cheng_seven'></i>
			<span>沟通中心</span>
		</li>
	</ul>
</div>
		<!-- 侧导航结束 -->
		<!--nav 开始 -->
<div class="cheng_body" style="width:954px;">
<div>
<!-- 中间部分的上 -->
<div class='j_toubu'>
	<img src="/new/images/dindan.png">
	<span>教员新订单</span>
</div>
<!-- 中间部分的中 -->
<div class="j_zj">
<div class="j_zj">
<iframe id="mainFrame" name="mainFrame" scrolling="no" src="{{ URL('tc_page.html') }}" frameborder="0" style="padding: 0px; width: 100%; height: 370px;"></iframe>
</div>
</div>

		<!-- 中间部分的下 -->
		<div class="c_bannar" style="margin-top:58px;">
	<a href="/tc_order1.html"><span><font color="#000">我预约的单</font></span></a>
	<a href="/tc_order4.html"><span class='cheng_item'><font color="#000">我已接的单</font></span></a>
	<a href="/tc_order6.html"><span><font color="#000">成功的单</font></span></a>
		</div>
		<!--  -->
		<div class="zqm_yuyuejy">
			<div class="left">
				<a href="/tc_order4.html"><div class="cb"  style="font-size:14px;">试<br/>课<br/>中</div></a>
				<a href="/tc_order5.html"><div class="cbv" style="font-size:14px;">试<br/>课<br/>失<br/>败</div></a>
			</div>
			@foreach($skz as $skzs)
				<div class="right">
					<div class="bk zqm">
						<div class="left">订单编号</div>
						<div class="right">{{ $skzs->id }}<a href="/xsinfo{{ $skzs->id }}.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
					</div>
					<div class="bk">
						<div class="left">接单时间</div><?php date_default_timezone_set('Asia/Shanghai'); ?>
						<div class="right">{{ date("Y-m-d h:i:s",$skzs->jd_times) }}</div>
					</div>
					<div class="bk zqm">
						<div class="left">试课时间</div>

						<div class="right datep">
                        <span style="font-size: 12px;">{{ $skzs->sk_times }}</span>
                            <form action="/sktimes.html" method="post" style="display: inline-block">
                                <input class="datainp" id="dateinfo" name="sj" placeholder="请选择" readonly="" type="text">
                                <input type="hidden" name="oid" value="{{ $skzs->id }}">
                                <input type="hidden" name="rid" value="{{ $skzs->rid }}">
                                <input type="hidden" name="tc_id" value="{{ $skzs->tc_id }}">
                                <select name="sjs" id="">
                                    <option value="上午">上午</option>
                                    <option value="下午">下午</option>
                                    <option value="晚上">晚上</option>
                                </select>
                                <div id="jedatebox" class="jedatebox" style="z-index: 999; display: none; left: 50px; top: 1px;"></div>
                                <button type="submit" style="
																      height: 40px;
																      width: 88px;
																      display: inline-block;
																      margin-top: 5px;
																      position: relative;
																      line-height: 5px;
																      float: right;
																      font-size: 18px;
																   "class="tj_Btn">修改</button>
                            </form>
                        </div>
                        <script type="text/javascript">
                            jeDate({
                                dateCell:"#dateinfo",
                                format:"YYYY年MM月DD日 hh:mm:ss",
                                isinitVal:true,
                                isTime:true, //isClear:false,
                                minDate:"2014-09-19 00:00:00",
                            })
                        </script>
					</div>
					<div class="bk">
						<div class="left">试课地点</div>
						<div class="right">
							<form action="/tc_skadd.html" method="post">
								<input type="hidden" name="oid" value="{{ $skzs->id }}">
								<input type="hidden" name="rid" value="{{ $skzs->rid }}">
								<input type="hidden" name="tc_id" value="{{ $skzs->tc_id }}">
								<input name="add" id="jy_adres" type="text" style="width: 82%;height: 29px;border: none;"  value="{{ $skzs->radd }}"/>
																<button type="submit" style="
																      height: 40px;
																      width: 88px;
																      display: inline-block;
																      margin-top: 5px;
																      position: relative;
																      line-height: 5px;
																      float: right;
																      font-size: 18px;
																   "
																	  class="tj_Btn"}
																>修改</button>
							</form>
						</div>
					</div>
					<div class="bk">
						<div class="left">试课结果填写</div>
						<div class="right">
							<div style="height: 40px;">
                                            <a onclick="skcg()">试课成功</a>
										<a class="timeShow">试课不成功</a>
								</div></div>
					</div><?php $q = $skzs->o_ts*$skzs->o_xs*$skzs->money ?>
					<!-- <div class="bk">
						<div class="left">介绍信/合同</div>
						<div class="right"><a href=""><font color="#FF0000">查看电子介绍信/合同</font></a></div>
					</div>
					<div class="bk5" style="height: 200px;line-height: 200px;">
						<div class="left1">课酬/信息费</div>
						<div class="right1">
							<div class="pm zqm">
								<div class="left">
									课酬：{{ $skzs->money*$skzs->o_xs }}元/次
								</div>
								<div class="right">
									需补/需退信息费：
									{{--@if($skzs->o_ts == '1')
										{{$skzs->money*$skzs->o_xs-($q*$skzs->bfb1>300?'300':$q*$skzs->bfb1) }}
									@elseif($skzs->o_ts == '2')
										{{ $skzs->money*$skzs->o_xs-($q*$skzs->bfb2>300?'300':$q*$skzs->bfb2) }}
									@elseif($skzs->o_ts == '3')
										{{ $skzs->money*$skzs->o_xs-($q*$skzs->bfb3>300?'300':$q*$skzs->bfb3) }}
									@elseif($skzs->o_ts == '4')
										{{ $skzs->money*$skzs->o_xs-($q*$skzs->bfb4>300?'300':$q*$skzs->bfb4) }}
									@elseif($skzs->o_ts == '5')
										{{ $skzs->money*$skzs->o_xs-($q*$skzs->bfb5>300?'300':$q*$skzs->bfb5) }}
									@elseif($skzs->o_ts == '6')
										{{ $skzs->money*$skzs->o_xs-($q*$skzs->bfb6>300?'300':$q*$skzs->bfb6) }}
									@elseif($skzs->o_ts == '7')
										{{ $skzs->money*$skzs->o_xs-($q*$skzs->bfb7>300?'300':$q*$skzs->bfb7) }}
									@endif元--}}
									{{ $skzs->money*$skzs->o_xs-$skzs->xxf }}
								</div>
							</div>
							<div class="pm">
								<div class="left">
									周课酬：{{ $q }}元/周
								</div>
								<div class="right">
									已退信息费：0元
								</div>
							</div>
							<div class="pm zqm">
								<div class="left">
									信息费：@if($skzs->o_ts == '1'){{ $q*$skzs->bfb1 }}@elseif($skzs->o_ts == '2'){{ $q*$skzs->bfb2 }}@elseif($skzs->o_ts == '3'){{ $q*$skzs->bfb3 }}@elseif($skzs->o_ts == '4'){{ $q*$skzs->bfb4 }}@elseif($skzs->o_ts == '5'){{ $q*$skzs->bfb5 }}@elseif($skzs->o_ts == '6'){{ $q*$skzs->bfb6 }}@elseif($skzs->o_ts == '7'){{ $q*$skzs->bfb7 }}@endif元
								</div>
								<div class="left">
									家长服务费：{{$skzs->fz_jzxxf}}元
								</div>
								{{--<div class="right">
									已锁定诚意金：60元
								</div>--}}
							</div>
							{{--<div class="pm zqm">
					
								<div class="right">
									待退回诚意金：60元
								</div>
							</div>--}}
							<div class="pm">
								<div class="left">
									已预付信息费：
									@if($skzs->o_ts == '1')
										{{ $q*$skzs->bfb1>300?'300':$q*$skzs->bfb1 }}
									@elseif($skzs->o_ts == '2')
										{{ $q*$skzs->bfb2>300?'300':$q*$skzs->bfb2 }}
									@elseif($skzs->o_ts == '3')
										{{ $q*$skzs->bfb3>300?'300':$q*$skzs->bfb3 }}
									@elseif($skzs->o_ts == '4')
										{{ $q*$skzs->bfb4>300?'300':$q*$skzs->bfb4 }}
									@elseif($skzs->o_ts == '5')
										{{ $q*$skzs->bfb5>300?'300':$q*$skzs->bfb5 }}
									@elseif($skzs->o_ts == '6')
										{{ $q*$skzs->bfb6>300?'300':$q*$skzs->bfb6 }}
									@elseif($skzs->o_ts == '7')
										{{ $q*$skzs->bfb7>300?'300':$q*$skzs->bfb7 }}
									@endif元
					                                    {{ $skzs->xxf }}
								</div>
								<div class="right">
									本单实际信息费：{{ $skzs->money*$skzs->o_xs }}元
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="bk2">
						<span style="margin-left: 60px;margin-right: 60px;"  class="timeShow" target="_blank"><font color="#000">申请退款</font></span>|
						<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">支付信息费</font></a>|
						<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#FF0000">收付款记录</font></a>
					</div> -->
				</div>
				@endforeach
		<!--  -->
	</div>
    <div class="fc" style="display: none;"></div>
    <div class="fc_content" style="display: none;">
      <form method="post" action="/sqtk.html">
          
        <div>
            <ul >
                <li><p><input name="Fruit" type="radio" value="1" />试课成功<span class="seeMar">应退信息费</span></p></li>
                <li><p>周薪酬减少<span class="seeMar"><input type="text" name="kc"></span></p></li>
                <li><input name="Fruit" type="radio" value="2" />试课不成功</li>
                <li><p>申请信息费退款<span class="seeMar"><input type="" name=""></span></p></li>
                <li>是否试课
                    <select id="ok_no" name="xxftk">
                        <option value="已试课">已试课</option>
                        <option value="尚未试课">尚未试课</option>
                    </select>
                </li>
                <li>不成功类型
                    <select id="renyuan" name="nocglx">
                        <option value="家长原因">家长原因</option>
                        <option value="教员原因">教员原因</option>
                    </select>
                </li>
                <li>
                    <p>原因
                        <select id="no_xueyuan" style="display:none; width:360px;" name="yuanyin" >
                            <option value="家长已经找到老师了">家长已经找到老师了</option>
                            <option value="家长还是选择了去上辅导班（未试课）">家长还是选择了去上辅导班（未试课）</option>
                            <option value="家长临时不要而未能试课">家长临时不要而未能试课</option>
                            <option value="家长的要求与订单不符，经协调不合适未去试课">家长的要求与订单不符，经协调不合适未去试课</option>
                            <option value="家长/学生因为课程的变动不试课">家长/学生因为课程的变动不试课</option>
                            <option value="学员暂时不接受家教未能试课">学员暂时不接受家教未能试课</option>
                            <option value="家长一个星期后未联系">家长一个星期后未联系上</option>
                            <option value="家长一个星期后还无法确认试课时间">家长一个星期后还无法确认试课时间</option>
                            <option value="家长想换个性别（男/女）的老师（未试课）">家长想换个性别（男/女）的老师（未试课）</option>
                            <option value="家长想换个更好学校或者更合适专业的老师（未试课）">家长想换个更好学校或者更合适专业的老师（未试课）</option>
                            <option value="家长想换个专职老师/或者原来是专职老师，想试试大学生（未试课）">家长想换个专职老师/或者原来是专职老师，想试试大学生（未试课）</option>
                        </select>
                        <select id="ok_xueyuan" style="display:none;width:360px;" name="yuanyin">
                            <option value="学员暂时不太适应家教试课不成功">学员暂时不太适应家教试课不成功</option>
                            <option value="家长还是选择了去上辅导班（已试课）">家长还是选择了去上辅导班（已试课）</option>
                            <option value="家长试课后想换个更好学校或者更合适专业的老师（已试课）">家长试课后想换个更好学校或者更合适专业的老师（已试课）</option>
                            <option value="家长想换个专职老师/或者原来是专职老师，想试试大学生（已试课）">家长想换个专职老师/或者原来是专职老师，想试试大学生（已试课）</option>
                            <option value="家长试课后家长想换个性别（男/女）的老师（已试课）">家长试课后家长想换个性别（男/女）的老师（已试课）</option>
                        </select>
                        <select id="no_jiaoyuan" style="display:none;width:360px;" name="yuanyin">
                            <option value="教员个人原因去不了试课">教员个人原因去不了试课</option>
                            <option value="学员的要求较高，教员无法胜任">学员的要求较高，教员无法胜任</option>
                        </select>

                        <select id="ok_jiaoyuan" style="display:none;width:360px;" name="yuanyin">
                            <option value="教员个人原因以后没法上课">教员个人原因以后没法上课</option>
                            <option value="教员迟到、上课时玩手机、一直在提钱、态度不好">教员迟到、上课时玩手机、一直在提钱、态度不好</option>
                            <option value="教员不认真备课和准备，对孩子不负责">教员不认真备课和准备，对孩子不负责</option>
                            <option value="教员能力有限，带不了孩子">教员能力有限，带不了孩子</option>
                            <option value="教员试课后家长不满意（除以上项目以外的）">教员试课后家长不满意（除以上项目以外的）</option>
                        </select>
                    </p>


                </li>
                <li>
                    <span style="vertical-align: top" name="bz">备注</span>
                    <input style="margin: 0px; width: 334px; height: 68px;" name="bz"/>
                </li>
                <li>
                    <p><input name="Fruit" type="radio" value="" />已锁定诚意金<span class="seeMar"></span></p>
                </li>
                <li>
                    <p><button style="margin-left: 110px;" type="submit" >申请退款</button><span class="seeMar"><button>申请诚意金解锁</button></span></p>
                </li>
            </ul>
        </div>
      </form>
    </div>
	<div class="c_yejiao">
	@if($skz->num > 0)
	<a href="{{ $skz->Url($skz->LastPage()) }}">末页</a>
	<a href="{{ $skz->Url($skz->next) }}">下一页</a>
	<a href="{{ $skz->Url($skz->last) }}">上一页</a>
	<a href="{{ $skz->Url(1) }}">首页</a>
	{{--<label>页数:1/2</label>--}}
	@endif
</div>
</div>
</div></div>
	<!-- 清楚浮动影响高度为0 这个很重要-->
    <div id="jedatebox" class="jedatebox" style="z-index: 999;"></div>
	<div id="fudong"></div>

	<div id="datePlugin"></div>

    <style>
        .fc {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.41);
            top: 0;
            left: 0;
        }
        .fc_content {
            width: 400px;
            height: 500px;
            position: fixed;
            background: #fff;
            left: 50%;
            top: 50%;
            margin-left: -200px;
            margin-top: -250px;
        }
        .seeMar{
            float: right;
            margin-right:100px;
        }
    </style>
	<footer>
		<div class="footer">
	    Copyright　2005-2017　广州学求易教育咨询有限公司　版权所有　<a style="color: #ccc;" href="http://www.miitbeian.gov.cn/" target="_blank">粤ＩＰＣ备：16062097号</a>
	</div>
	</footer>
	<script type="text/javascript" src='/new/js/script_cheng.js'></script>
	<script type="text/javascript" src='/new/js/date.js'></script>
    <script type="text/javascript" src='/layer/layer.js'></script>

    <script>
		$(function(){
			$('#beginTime').date();
			$('#endTime').date({theme:"datetime"});

		});
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
            var a = $('.sure_gou').find('input')
            for(var i=0;i< a.length;i++){
                if(a[i].checked==true){
                    var b =a[i].
                    $('.block_time').html()
                }
            }

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
            var a = $('.sure_gou').find('input')
            for(var i=0;i< a.length;i++){
                if(a[i].checked==true){
                    var b =a[i].
                    $('.block_time').html()
                }
            }

        })
        @if(session("msg"))
            layer.alert('{{session("msg")}}',{icon: 6});
        @endif

        function skcg(){
            layer.confirm('请联系我们。', {
                btn: ['确定','取消'] //按钮
            }, function(){
                window.location.href='/contact.html';
            }, function(){

            });
        }
	</script>
</body>
</html>
