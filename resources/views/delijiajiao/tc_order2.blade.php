@extends('delijiajiao.public.tc')
@section('title',mb_substr(session('regionname'),0,2))
@section('style')
	<meta name="csrf-token" content="{{ csrf_token() }}">
	{{--<link href="/home/css/ljj.css" rel="stylesheet" type="text/css" />--}}
	@endsection
	@section('content')
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
			<a href="/tc_order1.html"><span class='cheng_item'><font color="#000">我预约的单</font></span></a>
			<a href="/tc_order4.html"><span><font color="#000">我已接的单</font></span></a>
			<a href="/tc_order6.html"><span><font color="#000">成功的单</font></span></a>
		</div>
		<!--  -->
		<div class="zqm_yuyuejy">
			<div class="left">
				<a href="/tc_order1.html"><div class="cbv" style="font-size: 14px;">安<br/>排<br/>中</div></a>
				<a href="/tc_order2.html"><div class="cb" style="font-size: 14px;">未<br/>选<br/>中</div></a>
				<a href="/tc_order3.html"><div class="cbv" style="font-size:14px;">取<br/>消<br/>预<br/>约</div></a>
			</div>
			@foreach($wxz as $wxzs)
				<div class="right">
					<div class="bk zqm">
						<div class="left">订单编号</div>
						<div class="right">{{ $wxzs->id }}<a href="/xsinfo{{ $wxzs->id }}.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
					</div>
					<div class="bk">
						<div class="left">订单类型</div>
						<div class="right">{{ $wxzs->tc_Signing =='是'?'签约订单':'普通订单' }}</div>
					</div>
					<div class="bk zqm">
						<div class="left">年级科目</div>
						<div class="right">{{ $wxzs->subject_id }}</div>
					</div>
					<div class="bk">
						<div class="left">地址</div>
						<div class="right">{{ $wxzs->xx_dz }}</div>
					</div><?php $q = $wxzs->o_ts*$wxzs->o_xs*$wxzs->money ?>
					<!-- <div class="bk1">
						<div class="left1">课酬/信息费</div>
						<div class="right1">
							<div class="pm zqm">
								<div class="left">
									课酬：{{ $wxzs->money*$wxzs->o_xs }}元/次
								</div>
								<div class="right">
									家长服务费：{{$wxzs->fz_jzxxf}}元
								</div>
							</div>
							<div class="pm">
								<div class="left">
									周课酬：{{ $q }}元/周
								</div>
								<div class="right">
									预付信息费：
									@if($wxzs->o_ts == '1')
										{{ $q*$wxzs->bfb1>300?'300':$q*$wxzs->bfb1 }}
									@elseif($wxzs->o_ts == '2')
										{{ $q*$wxzs->bfb2>300?'300':$q*$wxzs->bfb2 }}
									@elseif($wxzs->o_ts == '3')
										{{ $q*$wxzs->bfb3>300?'300':$q*$wxzs->bfb3 }}
									@elseif($wxzs->o_ts == '4')
										{{ $q*$wxzs->bfb4>300?'300':$q*$wxzs->bfb4 }}
									@elseif($wxzs->o_ts == '5')
										{{ $q*$wxzs->bfb5>300?'300':$q*$wxzs->bfb5 }}
									@elseif($wxzs->o_ts == '6')
										{{ $q*$wxzs->bfb6>300?'300':$q*$wxzs->bfb6 }}
									@elseif($wxzs->o_ts == '7')
										{{ $q*$wxzs->bfb7>300?'300':$q*$wxzs->bfb7 }}
									@endif元
								</div>
							</div>
							<div class="pm zqm">
								<div class="left">
									信息费：@if($wxzs->o_ts == '1'){{ $q*$wxzs->bfb1 }}@elseif($wxzs->o_ts == '2'){{ $q*$wxzs->bfb2 }}@elseif($wxzs->o_ts == '3'){{ $q*$wxzs->bfb3 }}@elseif($wxzs->o_ts == '4'){{ $q*$wxzs->bfb4 }}@elseif($wxzs->o_ts == '5'){{ $q*$wxzs->bfb5 }}@elseif($wxzs->o_ts == '6'){{ $q*$wxzs->bfb6 }}@elseif($wxzs->o_ts == '7'){{ $q*$wxzs->bfb7 }}@endif元
								</div>
								<div class="right">
									成功后需付信息费：@if($wxzs->o_ts == '1')
										{{ $q*$wxzs->bfb1 - ($q*$wxzs->bfb1>300?'300':$q*$wxzs->bfb1) }}
									@elseif($wxzs->o_ts == '2')
										{{ $q*$wxzs->bfb2 - ($q*$wxzs->bfb2>300?'300':$q*$wxzs->bfb2) }}
										{{-- {{ $q*$wxzs->bfb2>300?'300':$q*$wxzs->bfb2 }}--}}
									@elseif($wxzs->o_ts == '3')
										{{ $q*$wxzs->bfb3 - ($q*$wxzs->bfb3>300?'300':$q*$wxzs->bfb3) }}
										{{-- {{ $q*$wxzs->bfb3>300?'300':$q*$wxzs->bfb3 }}--}}
									@elseif($wxzs->o_ts == '4')
										{{ $q*$wxzs->bfb4 - ($q*$wxzs->bfb4>300?'300':$q*$wxzs->bfb4) }}
										{{--{{ $q*$wxzs->bfb4>300?'300':$q*$wxzs->bfb4 }}--}}
									@elseif($wxzs->o_ts == '5')
										{{ $q*$wxzs->bfb5 - ($q*$wxzs->bfb5>300?'300':$q*$wxzs->bfb5) }}
										{{--{{ $q*$wxzs->bfb5>300?'300':$q*$wxzs->bfb5 }}--}}
									@elseif($wxzs->o_ts == '6')
										{{ $q*$wxzs->bfb6 - ($q*$wxzs->bfb6>300?'300':$q*$wxzs->bfb6) }}
										{{--{{ $q*$wxzs->bfb6>300?'300':$q*$wxzs->bfb6 }}--}}
									@elseif($wxzs->o_ts == '7')
										{{ $q*$wxzs->bfb7 - ($q*$wxzs->bfb7>300?'300':$q*$wxzs->bfb7) }}
										{{--{{ $q*$wxzs->bfb7>300?'300':$q*$wxzs->bfb7 }}--}}
									@endif
									元
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="bk">
						<div class="left">备注</div>
						<div class="right">
							<a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">沟通咨询/疑问</font></a>
							@if($wxzs->yy_zt =='')
								<a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">系统推荐订单？</font></a>
							@else
								<a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">{{ $wxzs->yy_zt }}</font></a>
							@endif
							<a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">常见问题</font></a>
						</div>
					</div> -->
					<!-- <div class="bk2">
						<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">
								<form action="/tc_qxorder.html" method="post" style="display: inline-block  ">
									<input type="hidden" name="oid" value="{{ $wxzs->id }}">
									<input type="hidden" name="tc_id" value="{{ $wxzs->tc_id }}">
									<button type="submit" style="border: none;height: 30px;line-height: 30px;border-radius: 2px;background: #fff0;">取消预约</button>
								</form></a></font>
						</font></a>|
						<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">支付诚意金优先获取订单</font></a>|
						<a style="margin-left: 60px;margin-right: 60px;"  target="_blank"><font color="#dadada">确认获取订单</font></a>
					</div> -->
				</div>
			@endforeach
	</div>
	<div class="c_yejiao">
		@if($wxz->num > 0)
		<a href="{{ $wxz->Url($wxz->LastPage()) }}">末页</a>
		<a href="{{ $wxz->Url($wxz->next) }}">下一页</a>
		<a href="{{ $wxz->Url($wxz->last) }}">上一页</a>
		<a href="{{ $wxz->Url(1) }}">首页</a>
		{{--<label>页数:1/2</label>--}}
		@endif
	</div>
</div>
<!-- nav 结束 -->
	</div>
	<!-- 清楚浮动影响高度为0 这个很重要-->
@endsection

@section('js')
@endsection