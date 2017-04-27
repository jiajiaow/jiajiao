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
						<div class="left">接单时间</div>
						<div class="right"></div>
					</div>
					<div class="bk zqm">
						<div class="left">试课时间</div>
						<div class="right datep"><input class="datainp" id="dateinfo" placeholder="请选择" readonly="" type="text">
                            <select name="" id="">
                                <option value="">上午</option>
                                <option value="">下午</option>
                                <option value="">晚上</option>
                            </select>
                            <div id="jedatebox" class="jedatebox" style="z-index: 999; display: none; left: 50px; top: 1px;"></div>
                        </div>
                        <script>
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
																>提交</button>
							</form>
						</div>
					</div>
					<div class="bk">
						<div class="left">试课结果填写</div>
						<div class="right">
							<div style="height: 40px;">
									<form action="/tc_skcg.html" method="post" style="display: inline-block;">
										<input type="hidden" name="oid" value="{{ $skzs->id }}">
										<input type="hidden" name="rid" value="{{ $skzs->rid }}">
										<input type="hidden" name="tc_id" value="{{ $skzs->tc_id }}">
										<input type="hidden" name="zt" value="1">
										<button type="submit" style="height: 40px; line-height:30px;margin-top: 5px;">试课成功</button>
									</form>

									<form action="/tc_skcg.html" method="post" style="display: inline-block;">
										<input type="hidden" name="oid" value="{{ $skzs->id }}">
										<input type="hidden" name="rid" value="{{ $skzs->rid }}">
										<input type="hidden" name="tc_id" value="{{ $skzs->tc_id }}">
										<input type="hidden" name="zt" value="2">
										<button type="submit" style="height: 40px; line-height:30px;margin-top: 5px;">试课不成功</button>
									</form>
								</div></div>
					</div>
					<div class="bk">
						<div class="left">介绍信/合同</div>
						<div class="right"><a href=""><font color="#FF0000">查看电子介绍信/合同</font></a></div>
					</div>
					<div class="bk5" style="height: 200px;line-height: 200px;"><?php $q = $skzs->o_ts*$skzs->o_xs*$skzs->money ?>
						<div class="left1">课酬/信息费</div>
						<div class="right1">
							<div class="pm zqm">
								<div class="left">
									课酬：{{ $skzs->money*$skzs->o_xs }}元/次
								</div>
								<div class="right">
									需补/需退信息费：
									@if($skzs->o_ts == '1')
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
									@endif元
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
								</div>
								<div class="right">
									本单实际信息费：{{ $skzs->money*$skzs->o_xs }}元
								</div>
							</div>
						</div>
					</div>
					<div class="bk2">
						<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">申请退款</font></a>|
						<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">支付信息费</font></a>|
						<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#FF0000">收付款记录</font></a>
					</div>
				</div>
				@endforeach
		<!--  -->
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
    <div class="fc" style="display: none;"></div>
    <div class="fc_content" style="display: none;">

        <table style="margin: 0 auto;margin-top: 36px;">
            <tbody class="sure_gou">
            <tr>
                <td>
                    <p>周一</p>
                    <input value="周一上午" name="sk_times1" type="checkbox">上午
                    <input value="周一下午" name="sk_times2" type="checkbox">下午
                    <input value="周一晚上" name="sk_times3" type="checkbox">晚上
                </td>
                <td>
                    <p>周二</p>
                    <input value="周二上午" name="sk_times4" type="checkbox">上午
                    <input value="周二下午" name="sk_times5" type="checkbox">下午
                    <input value="周二晚上" name="sk_times6" type="checkbox">晚上
                </td>
                <td>
                    <p>周三</p>
                    <input value="周三上午" name="sk_times7" type="checkbox">上午
                    <input value="周三下午" name="sk_times8" type="checkbox">下午
                    <input value="周三晚上" name="sk_times9" type="checkbox">晚上
                </td>
                <td>
                    <p>周四</p>
                    <input value="周四上午" name="sk_times10" type="checkbox">上午
                    <input value="周四下午" name="sk_times11" type="checkbox">下午
                    <input value="周四晚上" name="sk_times12" type="checkbox">晚上
                </td>
            </tr>
            <tr>
                <td>
                    <p>周五</p>
                    <input value="周五上午" name="sk_times13" type="checkbox">上午
                    <input value="周五下午" name="sk_times14" type="checkbox">下午
                    <input value="周五晚上" name="sk_times15" type="checkbox">晚上
                </td>
                <td>
                    <p>周六</p>
                    <input value="周六上午" name="sk_times16" type="checkbox">上午
                    <input value="周六下午" name="sk_times17" type="checkbox">下午
                    <input value="周六晚上" name="sk_times18" type="checkbox">晚上
                </td>
                <td>
                    <p>周日</p>
                    <input value="周日上午" name="sk_times19" type="checkbox">上午
                    <input value="周日下午" name="sk_times20" type="checkbox">下午
                    <input value="周日晚上" name="sk_times21" type="checkbox">晚上
                </td>
                <td>
                    <button class="sure_btn">确定</button>
                </td>
            </tr>
            </tbody></table>
    </div>
    <style>
        .fc {
            position: fixed;
            width: 100%;
            height: 100%;
            background: #00000080;
            top: 0;
            left: 0;
        }
        .fc_content {
            width: 650px;
            height: 190px;
            position: fixed;
            background: #fff;
            left: 50%;
            top: 50%;
            margin-left: -325px;
            margin-top: -95px;
        }
        .licbox input {
            width: 26px;
            height: 21px;
            vertical-align: bottom;
        }
        .licbox p{
            text-align: center;
        }
        td{
            border: 1px solid #c1c1c1;
            padding: 10px;
            text-align: center;
        }
    </style>
	<footer>
		<div class="footer">
	    Copyright　2005-2017　广州学求易教育咨询有限公司　版权所有　<a style="color: #ccc;" href="http://www.miitbeian.gov.cn/" target="_blank">粤ＩＰＣ备：16062097号</a>
	</div>
	</footer>
	<script type="text/javascript" src='/new/js/jquery-2.2.3.min.js'></script>
	<script type="text/javascript" src='/new/js/script_cheng.js'></script>
	<script type="text/javascript" src='/new/js/date.js'></script>

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


	</script>
</body>
</html>
