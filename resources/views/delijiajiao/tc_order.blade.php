<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<link rel="stylesheet" type="text/css" href="/new/css/cheng_css.css">
	<link rel="stylesheet" href="/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="/new/css/pignose.tab.min.css" />
	<link rel="stylesheet" href="/new/css/date.css">
	<style type="text/css">
		body,p,h1,h2,h3,h4,h5,h6,ul,li{
			margin:0;
			padding:0;
			list-style:none;
			color:#333;
		}
		/*html,body,form{
            width:100%;
            height:100%;
            margin:0;
            padding:0;
        }*/
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
	<!-- 侧导航 公共样式，勿修改，修改自行加class-->
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
	<!--nav 开始 中间主体-->
	<div class="cheng_body" style="width:954px;">
		<!-- 主体的头部 -->

		<!-- 主体的导航栏 公共样式，修改自行加class -->
		<!-- 				<div class="c_bannar">
                            <!-- <span class='cheng_item'>待试课</span>
                            <span>授课中</span>
                            <span>已结束授课</span>
                            <span>安排中的订单</span>
                            <span>试课未成功</span> -->
		<!-- 				<ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">
                                待试课</a></li>
                                <li><a href="#ios_a" data-toggle="tab">授课中</a></li>
                                <li><a href="#ios_b" data-toggle="tab">已结束</a></li>

                        </ul>
                        </div> -->
		<!-- 中间部分 -->
		<div>
			<form action="" method="POST">
				<table class="biaoge">
					<thead>
					<tr>
						<th class="bg">订单编号</th>
						<th class="bg">联系人</th>
						<th class="bg">辅导科目</th>
						<th class="bg">课酬</th>
						<th class="bg"></th>
					</tr>
					</thead>
					<tbody>
					@foreach($list as $l )
					<tr>
						<td>{{ $l->id }}</td>
						<td>{{ $l->user_name }}</td>
						<td>{{ $l->subject_id }}</td>
						<td style="color:red">@if($l->money =='面议') 面议 @else {{ $l->money }}/1小时@endif</td>
						<td><a href="/xsinfo{{ $l->id }}.html">订单详情</a></td>
					</tr>
					@endforeach
					</tbody>
					<tfoot></tfoot>
				</table>
				<!-- 公共样式勿修改，修改自行加class -->
				<div class="c_yejiao">
					<a href="{{ $list->Url($list->LastPage()) }}">末页</a>
					<a href="{{ $list->Url($list->next) }}">下一页</a>
					<a href="{{ $list->Url($list->last) }}">上一页</a>
					<a href="{{ $list->Url(1) }}">首页</a>
					{{--<label>页数:1/2</label>--}}
				</div>
			</form>
		</div>
		<div class="c_bannar">
			<!-- <span class='cheng_item'>待试课</span>
            <span>授课中</span>
            <span>已结束授课</span>
            <span>安排中的订单</span>
            <span>试课未成功</span> -->

			<div class="tab pignose-tab-wrapper pignose-tab-wrapper-root" style="height: 192px;">
				<ul class="pignose-tab-group">
					<li class="pignose-tab-list active">
						<a href="#" class="pignose-tab-btn active">我预约的单</a>
						<div class="pignose-tab-container pignose-sub-tab-wrapper pignose-tab-wrapper active">
							<div class="tab pignose-sub-tab pignose-tab-wrapper" style="height: 146px;">
								<ul class="pignose-tab-group">
									<li class="pignose-tab-list">
										<a href="#" class="pignose-tab-btn">安排中</a>
										<div class="pignose-tab-container" >

											<div class="clear">
												<div class="zqm_yuyuejy clear">
													@foreach($yap as $yaps)
													<div class="right">
														<div class="bk zqm">
															<div class="left">订单编号</div>
															<div class="right">{{ $yaps->id }}<a href="/xsinfo{{ $yaps->id }}.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
														</div>
														<div class="bk">
															<div class="left">订单类型</div>
															<div class="right">{{ $yaps->tc_Signing =='是'?'签约订单':'普通订单' }}</div>
														</div>
														<div class="bk zqm">
															<div class="left">年级科目</div>
															<div class="right">{{ $yaps->subject_id }}</div>
														</div>
														<div class="bk" style="display: flex;">
															<div class="left">地址</div>
															<div class="right">{{ $yaps->xx_dz }}</div>
														</div>
														<div class="bk1">
															<div class="left1">课酬/信息费</div>
															<div class="right1">
																<div class="pm zqm">
																	<div class="left">
																		课酬：{{ $yaps->money }}元/次
																	</div>
																	<div class="right">
																		家长服务费：50元
																	</div>
																</div>
																<div class="pm">
																	<div class="left">
																		周课酬：360元/周
																	</div>
																	<div class="right">
																		预付信息费：360元
																	</div>
																</div>
																<div class="pm zqm">
																	<div class="left">
																		信息费：360元
																	</div>
																	<div class="right">
																		成功后需付信息费：60元
																	</div>
																</div>
															</div>
														</div>
														<div class="bk">
															<div class="left">备注</div>
															<div class="right">
																<a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">沟通咨询/疑问</font></a>
                                                                @if($yaps->yy_zt =='')
                                                                    <a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">系统推荐订单？</font></a>
                                                                @else
                                                                    <a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">{{ $yaps->yy_zt }}</font></a>
                                                                @endif
																<a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">常见问题</font></a>
															</div>
														</div>
														<div class="bk2">
															<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">
																	<form action="/tc_qxorder.html" method="post" style="display: inline-block;">
                                                                     <input type="hidden" name="oid" value="{{ $yaps->id }}">
																		<input type="hidden" name="tc_id" value="{{ $yaps->tc_id }}">
																		<button type="submit" style="border: none;height: 30px;line-height: 30px;border-radius: 2px;background: #fff0;">取消预约</button>
																	</form>
                                                            </a>|</font>
															<a style="margin-left: 60px;margin-right: 60px;" href="javascript:;" onclick="cyj()"><font color="#000">支付诚意金优先获取订单</font></a>|
                                                                @if($yaps->ht_t_status =='3')
                                                                <a style="margin-left: 60px;margin-right: 60px;" href="javascript:;" onclick="qr()"><font color="#FF0000">确认获取订单</font></a>
                                                                @else
                                                                <a style="margin-left: 60px;margin-right: 60px;" ><font color="#dadada">确认获取订单</font></a>
                                                                @endif
														</div>
													</div>
													@endforeach

												</div>
											</div>

                                            <p class="c_yejiao" style="">
                                                {{--@if($yap->num > 0) --}}
                                                <a href="{{ $yap->Url($yap->LastPage()) }}">末页</a>
                                                <a href="{{ $yap->Url($yap->next) }}">下一页</a>
                                                <a href="{{ $yap->Url($yap->last) }}">上一页</a>
                                                <a href="{{ $yap->Url(1) }}">首页</a>
                                                {{--<label>页数:1/2</label>--}}
                                                {{--@endif--}}
                                            </p>

										</div>

									</li>


									<li class="pignose-tab-list active">
										<a href="#" class="pignose-tab-btn active">未选中</a>
										<div class="pignose-tab-container active">
											<div class="clear">
												<div class="zqm_yuyuejy clear">
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
														</div>
														<div class="bk1">
															<div class="left1">课酬/信息费</div>
															<div class="right1">
																<div class="pm zqm">
																	<div class="left">
																		课酬：{{ $wxzs->money }}元/次
																	</div>
																	<div class="right">
																		家长服务费：50元
																	</div>
																</div>
																<div class="pm">
																	<div class="left">
																		周课酬：360元/周
																	</div>
																	<div class="right">
																		预付信息费：360元
																	</div>
																</div>
																<div class="pm zqm">
																	<div class="left">
																		信息费：360元
																	</div>
																	<div class="right">
																		成功后需付信息费：60元
																	</div>
																</div>
															</div>
														</div>
														<div class="bk">
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
														</div>
														<div class="bk2">
															<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">
																	<form action="/tc_qxorder.html" method="post" style="display: inline-block  ">
																		<input type="hidden" name="oid" value="{{ $wxzs->id }}">
																		<input type="hidden" name="tc_id" value="{{ $wxzs->tc_id }}">
																		<button type="submit" style="border: none;height: 30px;line-height: 30px;border-radius: 2px;background: #fff0;">取消预约</button>
																	</form></a></font>
																</font></a>|
															<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">支付诚意金优先获取订单</font></a>|
															<a style="margin-left: 60px;margin-right: 60px;"  target="_blank"><font color="#dadada">确认获取订单</font></a>
														</div>
													</div>
													@endforeach
												</div>
											</div>
                                                <p class="c_yejiao">
                                                    {{--                                            @if($wxz->num > 0)--}}
                                                    <a href="{{ $wxz->Url($wxz->LastPage()) }}">末页</a>
                                                    <a href="{{ $wxz->Url($wxz->next) }}">下一页</a>
                                                    <a href="{{ $wxz->Url($wxz->last) }}">上一页</a>
                                                    <a href="{{ $wxz->Url(1) }}">首页</a>
                                                    {{--<label>页数:1/2</label>--}}
                                                    {{--@endif--}}
                                                </p>
										</div>

									</li>
									<li class="pignose-tab-list">
										<a href="#" class="pignose-tab-btn last-btn">取消预约</a>
										<div class="pignose-tab-container">
											<div class="clear">
												<div class="zqm_yuyuejy clear">
													@foreach($yqx as $yqxs)
													<div class="right">
														<div class="bk zqm">
															<div class="left">订单编号</div>
															<div class="right">{{ $yqxs->id }}<a href="/xsinfo{{ $yqxs->id }}.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
														</div>
														<div class="bk">
															<div class="left">订单类型</div>
															<div class="right">{{ $yqxs->tc_Signing =='是'?'签约订单':'普通订单' }}</div>
														</div>
														<div class="bk zqm">
															<div class="left">年级科目</div>
															<div class="right">{{ $yqxs->subject_id }}</div>
														</div>
														<div class="bk">
															<div class="left">地址</div>
															<div class="right">{{ $yqxs->xx_dz }}</div>
														</div>
														<div class="bk1">
															<div class="left1">课酬/信息费</div>
															<div class="right1">
																<div class="pm zqm">
																	<div class="left">
																		课酬：{{ $yqxs->money }}元/次
																	</div>
																	<div class="right">
																		家长服务费：50元
																	</div>
																</div>
																<div class="pm">
																	<div class="left">
																		周课酬：360元/周
																	</div>
																	<div class="right">
																		预付信息费：360元
																	</div>
																</div>
																<div class="pm zqm">
																	<div class="left">
																		信息费：360元
																	</div>
																	<div class="right">
																		成功后需付信息费：60元
																	</div>
																</div>
															</div>
														</div>
														<div class="bk">
															<div class="left">备注</div>
															<div class="right">
																	<a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">沟通咨询/疑问</font></a>
                                                                    @if($yqxs->yy_zt =='')
                                                                        <a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">系统推荐订单？</font></a>
                                                                    @else
                                                                    <a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">{{ $yqxs->yy_zt }}</font></a>
                                                                    @endif
																	<a style="margin-right: 20px;" href="" target="_blank"><font color="#FF0000">常见问题</font></a>
															</div>
														</div>
														<div class="bk2">
															<a style="margin-left: 60px;margin-right: 60px;" target="_blank"><font color="#000">取消预约</font></a>|
															<a style="margin-left: 60px;margin-right: 60px;" target="_blank"><font color="#000">支付诚意金优先获取订单</font></a>|
															<a style="margin-left: 60px;margin-right: 60px;" target="_blank"><font color="#dadada">确认获取订单</font></a>
														</div>
													</div>
													@endforeach
												</div>
											</div>
                                            <p class="c_yejiao">
                                                {{--                                            @if($yqx->num > 0)--}}
                                                <a href="{{ $yqx->Url($yqx->LastPage()) }}">末页</a>
                                                <a href="{{ $yqx->Url($yqx->next) }}">下一页</a>
                                                <a href="{{ $yqx->Url($yqx->last) }}">上一页</a>
                                                <a href="{{ $yqx->Url(1) }}">首页</a>
                                                {{--<label>页数:1/2</label>--}}
                                                {{--@endif--}}
                                            </p>
										</div>

									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="pignose-tab-list">
						<a href="#" class="pignose-tab-btn">我接的单</a>
						<div class="pignose-tab-container pignose-sub-tab-wrapper pignose-tab-wrapper">
							<div class="tab pignose-sub-tab pignose-tab-wrapper" style="height: 146px;">
								<ul class="pignose-tab-group">
									<li class="pignose-tab-list">
										<a href="#" class="pignose-tab-btn">试课中</a>
										<div class="pignose-tab-container">
											<div class="zqm_yuyuejy clear">
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
														<div class="right"><input id="endTime" class="kbtn" style="height: 31px;"></div>
													</div>
													<div class="bk">
														<div class="left">试课地点</div>
														<div class="right">
															<form action="">
																<input name="" id="jy_adres" type="text" style="height: 29px;" />
																<span style="padding: 10px;
																	  background: #FACC40;
																	  border-radius: 3px;
																	  cursor: pointer;
																	  width: 80px;
																	  height: 23px;
																	  display: inline-block;
																	  margin-top: 10px;
																	  position: relative;
																	  top: 0px;
																	  color: #fff;
																	  font-size: 12px;
																	  line-height: 5px;
																	  "
																	  class="tj_Btn"}
																>提交</span>
															</form>
														</div>
													</div>
													<div class="bk">
														<div class="left">试课结果填写</div>
														<div class="right"><a href=""><font color="#FF0000">试课成功</font></a>　　　　<a href=""><font color="#FF0000">试课不成功</font></a></div>
													</div>
													<div class="bk">
														<div class="left">介绍信/合同</div>
														<div class="right"><a href=""><font color="#FF0000">查看电子介绍信/合同</font></a></div>
													</div>
													<div class="bk3" style="height: 250px;line-height: 250px;">
														<div class="left1">课酬/信息费</div>
														<div class="right1">
															<div class="pm zqm">
																<div class="left">
																	课酬：{{ $skzs->money }}元/次
																</div>
																<div class="right">
																	需补/需退信息费：50元
																</div>
															</div>
															<div class="pm">
																<div class="left">
																	周课酬：360元/周
																</div>
																<div class="right">
																	已退信息费：360元
																</div>
															</div>
															<div class="pm zqm">
																<div class="left">
																	信息费：360元
																</div>
																<div class="right">
																	已锁定诚意金：60元
																</div>
															</div>
															<div class="pm zqm">
																<div class="left">
																	家长服务费：360元
																</div>
																<div class="right">
																	待退回诚意金：60元
																</div>
															</div>
															<div class="pm">
																<div class="left">
																	已预付信息费：360元
																</div>
																<div class="right">
																	本单实际信息费：60元
																</div>
															</div>
														</div>
													</div>
													<div class="bk2">
														<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">申请退款</font></a>|
														<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">申请诚意金解锁</font></a>|
														<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#FF0000">收付款记录</font></a>
													</div>
												</div>
												@endforeach
											</div>
                                            <div class="c_yejiao">
                                                {{--                                            @if($skz->num > 0)--}}
                                                <a href="{{ $skz->Url($skz->LastPage()) }}">末页</a>
                                                <a href="{{ $skz->Url($skz->next) }}">下一页</a>
                                                <a href="{{ $skz->Url($skz->last) }}">上一页</a>
                                                <a href="{{ $skz->Url(1) }}">首页</a>
                                                {{--<label>页数:1/2</label>--}}
                                                {{--@endif--}}
                                            </div>
										</div>

									</li>
									<li class="pignose-tab-list active">
										<a href="#" class="pignose-tab-btn active">试课失败</a>
										<div class="pignose-tab-container active">
											<div class="zqm_yuyuejy clear">
												@foreach($sskjs as $sskjss)
												<div class="right">
													<div class="bk zqm">
														<div class="left">订单编号</div>
														<div class="right">{{ $sskjss->id }}<a href="/xsinfo{{ $sskjss->id }}.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
													</div>
													<div class="bk">
														<div class="left">接单时间</div>
														<div class="right"></div>
													</div>
													<div class="bk zqm">
														<div class="left">试课时间</div>
														<div class="right"></div>
													</div>
													<div class="bk">
														<div class="left">试课地点</div>
														<div class="right">
															<form action="">
																<input name="" type="text" style="height: 29px;" />
																<input type="submit" style="font-size: 12px;height: 50px;"/>
															</form></div>
													</div>
													<div class="bk">
														<div class="left">试课结果填写</div>
														<div class="right"><a href=""><font color="#FF0000">试课成功</font></a>　　　　<a href=""><font color="#FF0000">试课不成功</font></a></div>
													</div>
													<div class="bk">
														<div class="left">介绍信/合同</div>
														<div class="right"><a href=""><font color="#FF0000">查看电子介绍信/合同</font></a></div>
													</div>
													<div class="bk3" style="height: 250px;line-height: 250px;">
														<div class="left1">课酬/信息费</div>
														<div class="right1">
															<div class="pm zqm">
																<div class="left">
																	课酬：{{ $sskjss->money }}元/次
																</div>
																<div class="right">
																	需补/需退信息费：50元
																</div>
															</div>
															<div class="pm">
																<div class="left">
																	周课酬：360元/周
																</div>
																<div class="right">
																	已退信息费：360元
																</div>
															</div>
															<div class="pm zqm">
																<div class="left">
																	信息费：360元
																</div>
																<div class="right">
																	已锁定诚意金：60元
																</div>
															</div>
															<div class="pm zqm">
																<div class="left">
																	家长服务费：360元
																</div>
																<div class="right">
																	待退回诚意金：60元
																</div>
															</div>
															<div class="pm">
																<div class="left">
																	已预付信息费：360元
																</div>
																<div class="right">
																	本单实际信息费：60元
																</div>
															</div>
														</div>
													</div>
													<div class="bk2">
														<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">申请退款</font></a>|
														<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#000">申请诚意金解锁</font></a>|
														<a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#FF0000">收付款记录</font></a>
													</div>
												</div>
												@endforeach
											</div>
                                            <div class="c_yejiao">
                                                {{--                                            @if($sskjs->num > 0)--}}
                                                <a href="{{ $sskjs->Url($sskjs->LastPage()) }}">末页</a>
                                                <a href="{{ $sskjs->Url($sskjs->next) }}">下一页</a>
                                                <a href="{{ $sskjs->Url($sskjs->last) }}">上一页</a>
                                                <a href="{{ $sskjs->Url(1) }}">首页</a>
                                                {{--<label>页数:1/2</label>--}}
                                                {{--@endif--}}
                                            </div>
										</div>

									</li>

								</ul>
							</div>
						</div>
					</li>
					<li class="pignose-tab-list">
						<a href="#" class="pignose-tab-btn last-btn">成功的单</a>
						<div class="pignose-tab-container pignose-sub-tab-wrapper pignose-tab-wrapper">
							<div class="tab pignose-sub-tab pignose-tab-wrapper" style="height: 146px;">
								<ul class="pignose-tab-group">
									<li class="pignose-tab-list">
										<a href="#" class="pignose-tab-btn">授课中</a>
										<div class="pignose-tab-container">
											<div class="zqm_yuyuejy clear">
												@foreach($sskz as $sskzs)
												<div class="right">
													<div class="bk zqm">
														<div class="left">订单编号</div>
														<div class="right">{{ $sskzs->id }}<a href="/xsinfo{{ $sskzs->id }}.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
													</div>
													<div class="bk4" style="height: 100px;line-height: 100px;">
														<div class="left1">课酬/信息费</div>
														<div class="right1">
															<div class="pm">
																<div class="left">
																	课酬：{{ $sskzs->money }}元/次
																</div>
																<div class="right">
																	需补/需退信息费：50元
																</div>
															</div>
															<div class="pm zqm">
																<div class="left">
																	周课酬：360元/周
																</div>
																<div class="right">
																	已退信息费：360元
																</div>
															</div>
														</div>
													</div>
													<div class="bk">
														<div class="left">接单时间</div>
														<div class="right">2017.4.23</div>
													</div>
													<div class="bk zqm">
														<div class="left">试课时间</div>
														<div class="right">2017-10-08</div>
													</div>
													<div class="bk5" style="height: 200px;line-height: 200px;">
														<div class="left1">课酬/信息费</div>
														<div class="right1">
															<div class="pm">
																<div class="left">
																	课酬：180元/次
																</div>
																<div class="right">
																	需补/需退信息费：50元
																</div>
															</div>
															<div class="pm zqm">
																<div class="left">
																	周课酬：360元/周
																</div>
																<div class="right">
																	已退信息费：360元
																</div>
															</div>
															<div class="pm">
																<div class="left">
																	信息费：360元
																</div>
																<div class="right">
																	已锁定诚意金：60元
																</div>
															</div>
															<div class="pm zqm">
																<div class="left">
																	信息费：360元
																</div>
																<div class="right">
																	已锁定诚意金：60元
																</div>
															</div>

														</div>
													</div>
													<div class="bk">
														<div class="left">接单时间</div>
														<div class="right">2017.4.23</div>
													</div>
													<div class="bk2">
														<a style="margin-left: 160px;margin-right: 160px;" href="" target="_blank"><font color="#000">每月反馈</font></a>|
														<a style="margin-left: 160px;margin-right: 160px;" href="" target="_blank"><font color="#FF0000">结束课程</font></a>
													</div>
												</div>
												@endforeach
											</div>
                                            <div class="c_yejiao">
                                                {{--                                            @if($sskz->num > 0)--}}
                                                <a href="{{ $sskz->Url($sskz->LastPage()) }}">末页</a>
                                                <a href="{{ $sskz->Url($sskz->next) }}">下一页</a>
                                                <a href="{{ $sskz->Url($sskz->last) }}">上一页</a>
                                                <a href="{{ $sskz->Url(1) }}">首页</a>
                                                {{--<label>页数:1/2</label>--}}
                                                {{--@endif--}}
                                            </div>
										</div>

									</li>
									<li class="pignose-tab-list">
										<a href="#" class="pignose-tab-btn">授课结束</a>
										<div class="pignose-tab-container">
											<div class="zqm_yuyuejy clear">
												@foreach($skjs as $skjss)
												<div class="right">
													<div class="bk zqm">
														<div class="left">订单编号</div>
														<div class="right">{{ $skjss->id }}<a href="/xsinfo{{ $skjss->id }}.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
													</div>
													<div class="bk4" style="height: 100px;line-height: 100px;">
														<div class="left1">课酬/信息费</div>
														<div class="right1">
															<div class="pm">
																<div class="left">
																	课酬：{{ $skjss->money }}元/次
																</div>
																<div class="right">
																	需补/需退信息费：50元
																</div>
															</div>
															<div class="pm zqm">
																<div class="left">
																	周课酬：360元/周
																</div>
																<div class="right">
																	已退信息费：360元
																</div>
															</div>
														</div>
													</div>
													<div class="bk">
														<div class="left">接单时间</div>
														<div class="right">2017.4.23</div>
													</div>
													<div class="bk zqm">
														<div class="left">试课时间</div>
														<div class="right">2017-10-08</div>
													</div>
													<div class="bk5" style="height: 200px;line-height: 200px;">
														<div class="left1">课酬/信息费</div>
														<div class="right1">
															<div class="pm">
																<div class="left">
																	课酬：180元/次
																</div>
																<div class="right">
																	需补/需退信息费：50元
																</div>
															</div>
															<div class="pm zqm">
																<div class="left">
																	周课酬：360元/周
																</div>
																<div class="right">
																	已退信息费：360元
																</div>
															</div>
															<div class="pm">
																<div class="left">
																	信息费：360元
																</div>
																<div class="right">
																	已锁定诚意金：60元
																</div>
															</div>
															<div class="pm zqm">
																<div class="left">
																	信息费：360元
																</div>
																<div class="right">
																	已锁定诚意金：60元
																</div>
															</div>

														</div>
													</div>
													<div class="bk">
														<div class="left">接单时间</div>
														<div class="right">2017.4.23</div>
													</div>
													<div class="bk2">
														<a style="margin-left: 160px;margin-right: 160px;" href="" target="_blank"><font color="#000">每月反馈</font></a>|
														<a style="margin-left: 160px;margin-right: 160px;" href="" target="_blank"><font color="#FF0000">结束课程</font></a>
													</div>
												</div>
												@endforeach
											</div>

										</div>
									</li>
								</ul>

							</div>
						</div>
					</li>
				</ul>
			</div>
            <div class="c_yejiao">
                @if($skjs->num > 0)
                    <a href="{{ $skjs->Url($skjs->LastPage()) }}">末页</a>
                    <a href="{{ $skjs->Url($skjs->next) }}">下一页</a>
                    <a href="{{ $skjs->Url($skjs->last) }}">上一页</a>
                    <a href="{{ $skjs->Url(1) }}">首页</a>
                  {{--<label>页数:1/2</label>--}}
                @endif
            </div>
		</div>

	</div>
	<!-- nav 结束 -->

</div>
<div id="datePlugin"><div id="dateshadow" style="height: 673px; display: none;"></div><div id="datePage" class="page" style="display: none; height: 380px; top: 60px;"><section><div id="datetitle"><h1>请选择日期</h1></div><div id="datemark"><a id="markyear"></a><a id="markmonth"></a><a id="markday"></a></div><div id="timemark"><a id="markhour"></a><a id="markminut"></a><a id="marksecond"></a></div><div id="datescroll"><div id="yearwrapper" style="overflow: hidden; position: absolute; bottom: 200px;"><ul style="transition-property: -moz-transform; transform-origin: 0px 0px 0px; transform: translate3d(0px, 0px, 0px) scale(1);"><li>&nbsp;</li><li>1900年</li><li>1901年</li><li>1902年</li><li>1903年</li><li>1904年</li><li>1905年</li><li>1906年</li><li>1907年</li><li>1908年</li><li>1909年</li><li>1910年</li><li>1911年</li><li>1912年</li><li>1913年</li><li>1914年</li><li>1915年</li><li>1916年</li><li>1917年</li><li>1918年</li><li>1919年</li><li>1920年</li><li>1921年</li><li>1922年</li><li>1923年</li><li>1924年</li><li>1925年</li><li>1926年</li><li>1927年</li><li>1928年</li><li>1929年</li><li>1930年</li><li>1931年</li><li>1932年</li><li>1933年</li><li>1934年</li><li>1935年</li><li>1936年</li><li>1937年</li><li>1938年</li><li>1939年</li><li>1940年</li><li>1941年</li><li>1942年</li><li>1943年</li><li>1944年</li><li>1945年</li><li>1946年</li><li>1947年</li><li>1948年</li><li>1949年</li><li>1950年</li><li>1951年</li><li>1952年</li><li>1953年</li><li>1954年</li><li>1955年</li><li>1956年</li><li>1957年</li><li>1958年</li><li>1959年</li><li>1960年</li><li>1961年</li><li>1962年</li><li>1963年</li><li>1964年</li><li>1965年</li><li>1966年</li><li>1967年</li><li>1968年</li><li>1969年</li><li>1970年</li><li>1971年</li><li>1972年</li><li>1973年</li><li>1974年</li><li>1975年</li><li>1976年</li><li>1977年</li><li>1978年</li><li>1979年</li><li>1980年</li><li>1981年</li><li>1982年</li><li>1983年</li><li>1984年</li><li>1985年</li><li>1986年</li><li>1987年</li><li>1988年</li><li>1989年</li><li>1990年</li><li>1991年</li><li>1992年</li><li>1993年</li><li>1994年</li><li>1995年</li><li>1996年</li><li>1997年</li><li>1998年</li><li>1999年</li><li>2000年</li><li>2001年</li><li>2002年</li><li>2003年</li><li>2004年</li><li>2005年</li><li>2006年</li><li>2007年</li><li>2008年</li><li>2009年</li><li>2010年</li><li>2011年</li><li>2012年</li><li>2013年</li><li>2014年</li><li>2015年</li><li>2016年</li><li>2017年</li><li>2018年</li><li>2019年</li><li>2020年</li><li>2021年</li><li>2022年</li><li>2023年</li><li>2024年</li><li>2025年</li><li>2026年</li><li>2027年</li><li>2028年</li><li>2029年</li><li>2030年</li><li>2031年</li><li>2032年</li><li>2033年</li><li>2034年</li><li>2035年</li><li>2036年</li><li>2037年</li><li>2038年</li><li>2039年</li><li>2040年</li><li>2041年</li><li>2042年</li><li>2043年</li><li>2044年</li><li>2045年</li><li>2046年</li><li>2047年</li><li>2048年</li><li>2049年</li><li>2050年</li><li>2051年</li><li>2052年</li><li>2053年</li><li>2054年</li><li>2055年</li><li>2056年</li><li>2057年</li><li>2058年</li><li>2059年</li><li>2060年</li><li>2061年</li><li>2062年</li><li>2063年</li><li>2064年</li><li>2065年</li><li>2066年</li><li>2067年</li><li>2068年</li><li>2069年</li><li>2070年</li><li>2071年</li><li>2072年</li><li>2073年</li><li>2074年</li><li>2075年</li><li>2076年</li><li>2077年</li><li>2078年</li><li>2079年</li><li>2080年</li><li>2081年</li><li>2082年</li><li>2083年</li><li>2084年</li><li>2085年</li><li>2086年</li><li>2087年</li><li>2088年</li><li>2089年</li><li>2090年</li><li>2091年</li><li>2092年</li><li>2093年</li><li>2094年</li><li>2095年</li><li>2096年</li><li>2097年</li><li>2098年</li><li>2099年</li><li>2100年</li><li>2101年</li><li>2102年</li><li>2103年</li><li>2104年</li><li>2105年</li><li>2106年</li><li>2107年</li><li>2108年</li><li>2109年</li><li>2110年</li><li>2111年</li><li>2112年</li><li>2113年</li><li>2114年</li><li>2115年</li><li>2116年</li><li>2117年</li><li>2118年</li><li>2119年</li><li>2120年</li><li>2121年</li><li>2122年</li><li>2123年</li><li>2124年</li><li>2125年</li><li>2126年</li><li>2127年</li><li>2128年</li><li>2129年</li><li>2130年</li><li>2131年</li><li>2132年</li><li>2133年</li><li>2134年</li><li>2135年</li><li>2136年</li><li>2137年</li><li>2138年</li><li>2139年</li><li>2140年</li><li>2141年</li><li>2142年</li><li>2143年</li><li>2144年</li><li>2145年</li><li>2146年</li><li>2147年</li><li>2148年</li><li>2149年</li><li>2150年</li><li>2151年</li><li>2152年</li><li>2153年</li><li>2154年</li><li>2155年</li><li>2156年</li><li>2157年</li><li>2158年</li><li>2159年</li><li>2160年</li><li>2161年</li><li>2162年</li><li>2163年</li><li>2164年</li><li>2165年</li><li>2166年</li><li>2167年</li><li>2168年</li><li>2169年</li><li>2170年</li><li>2171年</li><li>2172年</li><li>2173年</li><li>2174年</li><li>2175年</li><li>2176年</li><li>2177年</li><li>2178年</li><li>2179年</li><li>2180年</li><li>2181年</li><li>2182年</li><li>2183年</li><li>2184年</li><li>2185年</li><li>2186年</li><li>2187年</li><li>2188年</li><li>2189年</li><li>2190年</li><li>2191年</li><li>2192年</li><li>2193年</li><li>2194年</li><li>2195年</li><li>2196年</li><li>2197年</li><li>2198年</li><li>2199年</li><li>2200年</li><li>2201年</li><li>2202年</li><li>2203年</li><li>2204年</li><li>2205年</li><li>2206年</li><li>2207年</li><li>2208年</li><li>2209年</li><li>2210年</li><li>2211年</li><li>2212年</li><li>2213年</li><li>2214年</li><li>2215年</li><li>2216年</li><li>2217年</li><li>2218年</li><li>2219年</li><li>2220年</li><li>2221年</li><li>2222年</li><li>2223年</li><li>2224年</li><li>2225年</li><li>2226年</li><li>2227年</li><li>2228年</li><li>2229年</li><li>2230年</li><li>2231年</li><li>2232年</li><li>2233年</li><li>2234年</li><li>2235年</li><li>2236年</li><li>2237年</li><li>2238年</li><li>2239年</li><li>2240年</li><li>2241年</li><li>2242年</li><li>2243年</li><li>2244年</li><li>2245年</li><li>2246年</li><li>2247年</li><li>2248年</li><li>2249年</li><li>2250年</li><li>2251年</li><li>2252年</li><li>2253年</li><li>2254年</li><li>2255年</li><li>2256年</li><li>2257年</li><li>2258年</li><li>2259年</li><li>2260年</li><li>2261年</li><li>2262年</li><li>2263年</li><li>2264年</li><li>2265年</li><li>2266年</li><li>2267年</li><li>2268年</li><li>2269年</li><li>2270年</li><li>2271年</li><li>2272年</li><li>2273年</li><li>2274年</li><li>2275年</li><li>2276年</li><li>2277年</li><li>2278年</li><li>2279年</li><li>2280年</li><li>2281年</li><li>2282年</li><li>2283年</li><li>2284年</li><li>2285年</li><li>2286年</li><li>2287年</li><li>2288年</li><li>2289年</li><li>2290年</li><li>2291年</li><li>2292年</li><li>2293年</li><li>2294年</li><li>2295年</li><li>2296年</li><li>2297年</li><li>2298年</li><li>2299年</li><li>2300年</li><li>2301年</li><li>2302年</li><li>2303年</li><li>2304年</li><li>2305年</li><li>2306年</li><li>2307年</li><li>2308年</li><li>2309年</li><li>2310年</li><li>2311年</li><li>2312年</li><li>2313年</li><li>2314年</li><li>2315年</li><li>2316年</li><li>2317年</li><li>2318年</li><li>2319年</li><li>2320年</li><li>2321年</li><li>2322年</li><li>2323年</li><li>2324年</li><li>2325年</li><li>2326年</li><li>2327年</li><li>2328年</li><li>2329年</li><li>2330年</li><li>2331年</li><li>2332年</li><li>2333年</li><li>2334年</li><li>2335年</li><li>2336年</li><li>2337年</li><li>2338年</li><li>2339年</li><li>2340年</li><li>2341年</li><li>2342年</li><li>2343年</li><li>2344年</li><li>2345年</li><li>2346年</li><li>2347年</li><li>2348年</li><li>2349年</li><li>2350年</li><li>2351年</li><li>2352年</li><li>2353年</li><li>2354年</li><li>2355年</li><li>2356年</li><li>2357年</li><li>2358年</li><li>2359年</li><li>2360年</li><li>2361年</li><li>2362年</li><li>2363年</li><li>2364年</li><li>2365年</li><li>2366年</li><li>2367年</li><li>2368年</li><li>2369年</li><li>2370年</li><li>2371年</li><li>2372年</li><li>2373年</li><li>2374年</li><li>2375年</li><li>2376年</li><li>2377年</li><li>2378年</li><li>2379年</li><li>2380年</li><li>2381年</li><li>2382年</li><li>2383年</li><li>2384年</li><li>2385年</li><li>2386年</li><li>2387年</li><li>2388年</li><li>2389年</li><li>2390年</li><li>2391年</li><li>2392年</li><li>2393年</li><li>2394年</li><li>2395年</li><li>2396年</li><li>2397年</li><li>2398年</li><li>2399年</li><li>2400年</li><li>2401年</li><li>2402年</li><li>2403年</li><li>2404年</li><li>2405年</li><li>2406年</li><li>2407年</li><li>2408年</li><li>2409年</li><li>2410年</li><li>2411年</li><li>2412年</li><li>2413年</li><li>2414年</li><li>2415年</li><li>2416年</li><li>2417年</li><li>2418年</li><li>2419年</li><li>2420年</li><li>2421年</li><li>2422年</li><li>2423年</li><li>2424年</li><li>2425年</li><li>2426年</li><li>2427年</li><li>2428年</li><li>2429年</li><li>2430年</li><li>2431年</li><li>2432年</li><li>2433年</li><li>2434年</li><li>2435年</li><li>2436年</li><li>2437年</li><li>2438年</li><li>2439年</li><li>2440年</li><li>2441年</li><li>2442年</li><li>2443年</li><li>2444年</li><li>2445年</li><li>2446年</li><li>2447年</li><li>2448年</li><li>2449年</li><li>2450年</li><li>2451年</li><li>2452年</li><li>2453年</li><li>2454年</li><li>2455年</li><li>2456年</li><li>2457年</li><li>2458年</li><li>2459年</li><li>2460年</li><li>2461年</li><li>2462年</li><li>2463年</li><li>2464年</li><li>2465年</li><li>2466年</li><li>2467年</li><li>2468年</li><li>2469年</li><li>2470年</li><li>2471年</li><li>2472年</li><li>2473年</li><li>2474年</li><li>2475年</li><li>2476年</li><li>2477年</li><li>2478年</li><li>2479年</li><li>2480年</li><li>2481年</li><li>2482年</li><li>2483年</li><li>2484年</li><li>2485年</li><li>2486年</li><li>2487年</li><li>2488年</li><li>2489年</li><li>2490年</li><li>2491年</li><li>2492年</li><li>2493年</li><li>2494年</li><li>2495年</li><li>2496年</li><li>2497年</li><li>2498年</li><li>2499年</li><li>2500年</li><li>2501年</li><li>2502年</li><li>2503年</li><li>2504年</li><li>2505年</li><li>2506年</li><li>2507年</li><li>2508年</li><li>2509年</li><li>2510年</li><li>2511年</li><li>2512年</li><li>2513年</li><li>2514年</li><li>2515年</li><li>2516年</li><li>2517年</li><li>2518年</li><li>2519年</li><li>2520年</li><li>2521年</li><li>2522年</li><li>2523年</li><li>2524年</li><li>2525年</li><li>2526年</li><li>2527年</li><li>2528年</li><li>2529年</li><li>2530年</li><li>2531年</li><li>2532年</li><li>2533年</li><li>2534年</li><li>2535年</li><li>2536年</li><li>2537年</li><li>2538年</li><li>2539年</li><li>2540年</li><li>2541年</li><li>2542年</li><li>2543年</li><li>2544年</li><li>2545年</li><li>2546年</li><li>2547年</li><li>2548年</li><li>2549年</li><li>2550年</li><li>2551年</li><li>2552年</li><li>2553年</li><li>2554年</li><li>2555年</li><li>2556年</li><li>2557年</li><li>2558年</li><li>2559年</li><li>2560年</li><li>2561年</li><li>2562年</li><li>2563年</li><li>2564年</li><li>2565年</li><li>2566年</li><li>2567年</li><li>2568年</li><li>2569年</li><li>2570年</li><li>2571年</li><li>2572年</li><li>2573年</li><li>2574年</li><li>2575年</li><li>2576年</li><li>2577年</li><li>2578年</li><li>2579年</li><li>2580年</li><li>2581年</li><li>2582年</li><li>2583年</li><li>2584年</li><li>2585年</li><li>2586年</li><li>2587年</li><li>2588年</li><li>2589年</li><li>2590年</li><li>2591年</li><li>2592年</li><li>2593年</li><li>2594年</li><li>2595年</li><li>2596年</li><li>2597年</li><li>2598年</li><li>2599年</li><li>2600年</li><li>2601年</li><li>2602年</li><li>2603年</li><li>2604年</li><li>2605年</li><li>2606年</li><li>2607年</li><li>2608年</li><li>2609年</li><li>2610年</li><li>2611年</li><li>2612年</li><li>2613年</li><li>2614年</li><li>2615年</li><li>2616年</li><li>2617年</li><li>2618年</li><li>2619年</li><li>2620年</li><li>2621年</li><li>2622年</li><li>2623年</li><li>2624年</li><li>2625年</li><li>2626年</li><li>2627年</li><li>2628年</li><li>2629年</li><li>2630年</li><li>2631年</li><li>2632年</li><li>2633年</li><li>2634年</li><li>2635年</li><li>2636年</li><li>2637年</li><li>2638年</li><li>2639年</li><li>2640年</li><li>2641年</li><li>2642年</li><li>2643年</li><li>2644年</li><li>2645年</li><li>2646年</li><li>2647年</li><li>2648年</li><li>2649年</li><li>2650年</li><li>2651年</li><li>2652年</li><li>2653年</li><li>2654年</li><li>2655年</li><li>2656年</li><li>2657年</li><li>2658年</li><li>2659年</li><li>2660年</li><li>2661年</li><li>2662年</li><li>2663年</li><li>2664年</li><li>2665年</li><li>2666年</li><li>2667年</li><li>2668年</li><li>2669年</li><li>2670年</li><li>2671年</li><li>2672年</li><li>2673年</li><li>2674年</li><li>2675年</li><li>2676年</li><li>2677年</li><li>2678年</li><li>2679年</li><li>2680年</li><li>2681年</li><li>2682年</li><li>2683年</li><li>2684年</li><li>2685年</li><li>2686年</li><li>2687年</li><li>2688年</li><li>2689年</li><li>2690年</li><li>2691年</li><li>2692年</li><li>2693年</li><li>2694年</li><li>2695年</li><li>2696年</li><li>2697年</li><li>2698年</li><li>2699年</li><li>2700年</li><li>2701年</li><li>2702年</li><li>2703年</li><li>2704年</li><li>2705年</li><li>2706年</li><li>2707年</li><li>2708年</li><li>2709年</li><li>2710年</li><li>2711年</li><li>2712年</li><li>2713年</li><li>2714年</li><li>2715年</li><li>2716年</li><li>2717年</li><li>2718年</li><li>2719年</li><li>2720年</li><li>2721年</li><li>2722年</li><li>2723年</li><li>2724年</li><li>2725年</li><li>2726年</li><li>2727年</li><li>2728年</li><li>2729年</li><li>2730年</li><li>2731年</li><li>2732年</li><li>2733年</li><li>2734年</li><li>2735年</li><li>2736年</li><li>2737年</li><li>2738年</li><li>2739年</li><li>2740年</li><li>2741年</li><li>2742年</li><li>2743年</li><li>2744年</li><li>2745年</li><li>2746年</li><li>2747年</li><li>2748年</li><li>2749年</li><li>2750年</li><li>2751年</li><li>2752年</li><li>2753年</li><li>2754年</li><li>2755年</li><li>2756年</li><li>2757年</li><li>2758年</li><li>2759年</li><li>2760年</li><li>2761年</li><li>2762年</li><li>2763年</li><li>2764年</li><li>2765年</li><li>2766年</li><li>2767年</li><li>2768年</li><li>2769年</li><li>2770年</li><li>2771年</li><li>2772年</li><li>2773年</li><li>2774年</li><li>2775年</li><li>2776年</li><li>2777年</li><li>2778年</li><li>2779年</li><li>2780年</li><li>2781年</li><li>2782年</li><li>2783年</li><li>2784年</li><li>2785年</li><li>2786年</li><li>2787年</li><li>2788年</li><li>2789年</li><li>2790年</li><li>2791年</li><li>2792年</li><li>2793年</li><li>2794年</li><li>2795年</li><li>2796年</li><li>2797年</li><li>2798年</li><li>2799年</li><li>2800年</li><li>2801年</li><li>2802年</li><li>2803年</li><li>2804年</li><li>2805年</li><li>2806年</li><li>2807年</li><li>2808年</li><li>2809年</li><li>2810年</li><li>2811年</li><li>2812年</li><li>2813年</li><li>2814年</li><li>2815年</li><li>2816年</li><li>2817年</li><li>2818年</li><li>2819年</li><li>2820年</li><li>2821年</li><li>2822年</li><li>2823年</li><li>2824年</li><li>2825年</li><li>2826年</li><li>2827年</li><li>2828年</li><li>2829年</li><li>2830年</li><li>2831年</li><li>2832年</li><li>2833年</li><li>2834年</li><li>2835年</li><li>2836年</li><li>2837年</li><li>2838年</li><li>2839年</li><li>2840年</li><li>2841年</li><li>2842年</li><li>2843年</li><li>2844年</li><li>2845年</li><li>2846年</li><li>2847年</li><li>2848年</li><li>2849年</li><li>2850年</li><li>2851年</li><li>2852年</li><li>2853年</li><li>2854年</li><li>2855年</li><li>2856年</li><li>2857年</li><li>2858年</li><li>2859年</li><li>2860年</li><li>2861年</li><li>2862年</li><li>2863年</li><li>2864年</li><li>2865年</li><li>2866年</li><li>2867年</li><li>2868年</li><li>2869年</li><li>2870年</li><li>2871年</li><li>2872年</li><li>2873年</li><li>2874年</li><li>2875年</li><li>2876年</li><li>2877年</li><li>2878年</li><li>2879年</li><li>2880年</li><li>2881年</li><li>2882年</li><li>2883年</li><li>2884年</li><li>2885年</li><li>2886年</li><li>2887年</li><li>2888年</li><li>2889年</li><li>2890年</li><li>2891年</li><li>2892年</li><li>2893年</li><li>2894年</li><li>2895年</li><li>2896年</li><li>2897年</li><li>2898年</li><li>2899年</li><li>2900年</li><li>2901年</li><li>2902年</li><li>2903年</li><li>2904年</li><li>2905年</li><li>2906年</li><li>2907年</li><li>2908年</li><li>2909年</li><li>2910年</li><li>2911年</li><li>2912年</li><li>2913年</li><li>2914年</li><li>2915年</li><li>2916年</li><li>2917年</li><li>2918年</li><li>2919年</li><li>2920年</li><li>2921年</li><li>2922年</li><li>2923年</li><li>2924年</li><li>2925年</li><li>2926年</li><li>2927年</li><li>2928年</li><li>2929年</li><li>2930年</li><li>2931年</li><li>2932年</li><li>2933年</li><li>2934年</li><li>2935年</li><li>2936年</li><li>2937年</li><li>2938年</li><li>2939年</li><li>2940年</li><li>2941年</li><li>2942年</li><li>2943年</li><li>2944年</li><li>2945年</li><li>2946年</li><li>2947年</li><li>2948年</li><li>2949年</li><li>2950年</li><li>2951年</li><li>2952年</li><li>2953年</li><li>2954年</li><li>2955年</li><li>2956年</li><li>2957年</li><li>2958年</li><li>2959年</li><li>2960年</li><li>2961年</li><li>2962年</li><li>2963年</li><li>2964年</li><li>2965年</li><li>2966年</li><li>2967年</li><li>2968年</li><li>2969年</li><li>2970年</li><li>2971年</li><li>2972年</li><li>2973年</li><li>2974年</li><li>2975年</li><li>2976年</li><li>2977年</li><li>2978年</li><li>2979年</li><li>2980年</li><li>2981年</li><li>2982年</li><li>2983年</li><li>2984年</li><li>2985年</li><li>2986年</li><li>2987年</li><li>2988年</li><li>2989年</li><li>2990年</li><li>2991年</li><li>2992年</li><li>2993年</li><li>2994年</li><li>2995年</li><li>2996年</li><li>2997年</li><li>2998年</li><li>2999年</li><li>&nbsp;</li></ul></div><div id="monthwrapper" style="overflow: hidden; position: absolute; bottom: 200px;"><ul style="transition-property: -moz-transform; transform-origin: 0px 0px 0px; transform: translate3d(0px, 0px, 0px) scale(1);"><li>&nbsp;</li><li>01月</li><li>02月</li><li>03月</li><li>04月</li><li>05月</li><li>06月</li><li>07月</li><li>08月</li><li>09月</li><li>10月</li><li>11月</li><li>12月</li><li>&nbsp;</li></ul></div><div id="daywrapper" style="overflow: hidden; position: absolute; bottom: 200px;"><ul style="transition-property: -moz-transform; transform-origin: 0px 0px 0px; transform: translate3d(0px, -23.196px, 0px) scale(1);"><li>&nbsp;</li><li>1日</li><li>2日</li><li>3日</li><li>4日</li><li>5日</li><li>6日</li><li>7日</li><li>8日</li><li>9日</li><li>10日</li><li>11日</li><li>12日</li><li>13日</li><li>14日</li><li>15日</li><li>16日</li><li>17日</li><li>18日</li><li>19日</li><li>20日</li><li>21日</li><li>22日</li><li>23日</li><li>24日</li><li>25日</li><li>26日</li><li>27日</li><li>28日</li><li>29日</li><li>30日</li><li>&nbsp;</li></ul></div></div><div id="datescroll_datetime" style="display: block;"><div id="Hourwrapper" style="overflow: hidden;"><ul style="transition-property: -moz-transform; transform-origin: 0px 0px 0px; transform: translate3d(0px, -4.57975px, 0px) scale(1);"><li>&nbsp;</li><li>1时</li><li>2时</li><li>3时</li><li>4时</li><li>5时</li><li>6时</li><li>7时</li><li>8时</li><li>9时</li><li>10时</li><li>11时</li><li>&nbsp;</li></ul></div><div id="Minutewrapper" style="overflow: hidden;"><ul style="transition-property: -moz-transform; transform-origin: 0px 0px 0px; transform: translate3d(0px, 0px, 0px) scale(1);"><li>&nbsp;</li><li>00分</li><li>01分</li><li>02分</li><li>03分</li><li>04分</li><li>05分</li><li>06分</li><li>07分</li><li>08分</li><li>09分</li><li>10分</li><li>11分</li><li>12分</li><li>13分</li><li>14分</li><li>15分</li><li>16分</li><li>17分</li><li>18分</li><li>19分</li><li>20分</li><li>21分</li><li>22分</li><li>23分</li><li>24分</li><li>25分</li><li>26分</li><li>27分</li><li>28分</li><li>29分</li><li>30分</li><li>31分</li><li>32分</li><li>33分</li><li>34分</li><li>35分</li><li>36分</li><li>37分</li><li>38分</li><li>39分</li><li>40分</li><li>41分</li><li>42分</li><li>43分</li><li>44分</li><li>45分</li><li>46分</li><li>47分</li><li>48分</li><li>49分</li><li>50分</li><li>51分</li><li>52分</li><li>53分</li><li>54分</li><li>55分</li><li>56分</li><li>57分</li><li>58分</li><li>59分</li><li>&nbsp;</li></ul></div><div id="Secondwrapper" style="overflow: hidden;"><ul style="transition-property: -moz-transform; transform-origin: 0px 0px 0px; transform: translate3d(0px, 0px, 0px) scale(1);"><li>&nbsp;</li><li>上午</li><li>下午</li><li>&nbsp;</li></ul></div></div></section><footer id="dateFooter"><div id="setcancle"><ul><li id="dateconfirm">确定</li><li id="datecancle">取消</li></ul></div></footer></div></div>
<div id="SL_balloon_obj" style="display: none;"><div id="SL_button" style="background: transparent url(&quot;chrome://imtranslator/content/img/util/imtranslator-s.png&quot;) repeat scroll 0% 0%; display: block; width: 24px; height: 24px; position: absolute; cursor: pointer; opacity: 1;"></div><div id="SL_shadow_translation_result2" style="display: none;"></div><div id="SL_shadow_translator"><div id="SL_providers"><div class="SL_BL_LABLE_ON" title="Google" id="SL_P0">G</div><div class="SL_BL_LABLE_ON" title="Microsoft" id="SL_P1">M</div><div class="SL_BL_LABLE_ON" title="Translator" id="SL_P2">T</div></div><div id="SL_planshet" style="background: rgb(244, 245, 245) url(&quot;chrome://imtranslator/content/img/util/bg2.png&quot;) repeat scroll 0% 0%;"><div id="SL_arrow_up"></div><div id="SL_TB"><div id="bubblelogo" style="background: transparent url(&quot;chrome://imtranslator/content/img/util/imtranslator-s.png&quot;) repeat scroll 0% 0%; display: block; width: 24px; height: 24px; position: absolute;"></div><table id="SL_tables"><tr><td width="10%" align="right"><input id="SLloc" title="鎖定語言" type="checkbox"></td><td width="20%" align="left"><select id="SL_lng_from"><option value="auto">檢測語言</option><option value="sq">阿尔巴尼亚语</option><option value="ar">阿拉伯语</option><option value="az">阿塞拜疆语</option><option value="ga">爱尔兰语</option><option value="et">爱沙尼亚语</option><option value="eu">巴斯克语</option><option value="be">白俄罗斯语</option><option value="bg">保加利亚语</option><option value="is">冰岛语</option><option value="pl">波兰语</option><option value="bs">波斯尼亚语</option><option value="fa">波斯语</option><option value="af">布尔语(南非荷兰语)</option><option value="da">丹麦语</option><option value="de">德语</option><option value="ru">俄语</option><option value="fr">法语</option><option value="tl">菲律宾语</option><option value="fi">芬兰语</option><option value="km">高棉语</option><option value="ka">格鲁吉亚语</option><option value="gu">古吉拉特语</option><option value="kk">哈萨克语</option><option value="ht">海地克里奥尔语</option><option value="ko">韩语</option><option value="ha">豪萨语</option><option value="nl">荷兰语</option><option value="gl">加利西亚语</option><option value="ca">加泰罗尼亚语</option><option value="cs">捷克语</option><option value="kn">卡纳达语</option><option value="hr">克罗地亚语</option><option value="la">拉丁语</option><option value="lv">拉脱维亚语</option><option value="lo">老挝语</option><option value="lt">立陶宛语</option><option value="ro">罗马尼亚语</option><option value="mg">马尔加什语</option><option value="mt">马耳他语</option><option value="mr">马拉地语</option><option value="ml">马拉雅拉姆语</option><option value="ms">马来语</option><option value="mk">马其顿语</option><option value="mi">毛利语</option><option value="mn">蒙古语</option><option value="bn">孟加拉语</option><option value="my">缅甸语</option><option value="hmn">苗语</option><option value="zu">南非祖鲁语</option><option value="ne">尼泊尔语</option><option value="no">挪威语</option><option value="pa">旁遮普语</option><option value="pt">葡萄牙语</option><option value="ny">齐切瓦语</option><option value="ja">日语</option><option value="sv">瑞典语</option><option value="sr">塞尔维亚语</option><option value="st">塞索托语</option><option value="si">僧伽罗语</option><option value="eo">世界语</option><option value="sk">斯洛伐克语</option><option value="sl">斯洛文尼亚语</option><option value="sw">斯瓦希里语</option><option value="ceb">宿务语</option><option value="so">索马里语</option><option value="tg">塔吉克语</option><option value="te">泰卢固语</option><option value="ta">泰米尔语</option><option value="th">泰语</option><option value="tr">土耳其语</option><option value="cy">威尔士语</option><option value="ur">乌尔都语</option><option value="uk">乌克兰语</option><option value="uz">乌兹别克语</option><option value="iw">希伯来语</option><option value="el">希腊语</option><option value="es">西班牙语</option><option value="hu">匈牙利语</option><option value="hy">亚美尼亚语</option><option value="ig">伊博语</option><option value="it">意大利语</option><option value="yi">意第绪语</option><option value="hi">印地语</option><option value="su">印尼巽他语</option><option value="id">印尼语</option><option value="jw">印尼爪哇语</option><option value="en">英语</option><option value="yo">约鲁巴语</option><option value="vi">越南语</option><option value="zh-CN">中文简体</option><option value="zh-TW">中文繁体</option></select></td><td width="5%" align="center"><div id="SL_switch_b" title="切換語言" style="background: transparent url(&quot;chrome://imtranslator/content/img/util/switchb.png&quot;) repeat scroll 0% 0%; display: block; width: 10px; height: 10px; cursor: pointer;" align="center"></div></td><td width="20%" align="left"><select id="SL_lng_to"><option value="sq">阿尔巴尼亚语</option><option value="ar">阿拉伯语</option><option value="az">阿塞拜疆语</option><option value="ga">爱尔兰语</option><option value="et">爱沙尼亚语</option><option value="eu">巴斯克语</option><option value="be">白俄罗斯语</option><option value="bg">保加利亚语</option><option value="is">冰岛语</option><option value="pl">波兰语</option><option value="bs">波斯尼亚语</option><option value="fa">波斯语</option><option value="af">布尔语(南非荷兰语)</option><option value="da">丹麦语</option><option value="de">德语</option><option value="ru">俄语</option><option value="fr">法语</option><option value="tl">菲律宾语</option><option value="fi">芬兰语</option><option value="km">高棉语</option><option value="ka">格鲁吉亚语</option><option value="gu">古吉拉特语</option><option value="kk">哈萨克语</option><option value="ht">海地克里奥尔语</option><option value="ko">韩语</option><option value="ha">豪萨语</option><option value="nl">荷兰语</option><option value="gl">加利西亚语</option><option value="ca">加泰罗尼亚语</option><option value="cs">捷克语</option><option value="kn">卡纳达语</option><option value="hr">克罗地亚语</option><option value="la">拉丁语</option><option value="lv">拉脱维亚语</option><option value="lo">老挝语</option><option value="lt">立陶宛语</option><option value="ro">罗马尼亚语</option><option value="mg">马尔加什语</option><option value="mt">马耳他语</option><option value="mr">马拉地语</option><option value="ml">马拉雅拉姆语</option><option value="ms">马来语</option><option value="mk">马其顿语</option><option value="mi">毛利语</option><option value="mn">蒙古语</option><option value="bn">孟加拉语</option><option value="my">缅甸语</option><option value="hmn">苗语</option><option value="zu">南非祖鲁语</option><option value="ne">尼泊尔语</option><option value="no">挪威语</option><option value="pa">旁遮普语</option><option value="pt">葡萄牙语</option><option value="ny">齐切瓦语</option><option value="ja">日语</option><option value="sv">瑞典语</option><option value="sr">塞尔维亚语</option><option value="st">塞索托语</option><option value="si">僧伽罗语</option><option value="eo">世界语</option><option value="sk">斯洛伐克语</option><option value="sl">斯洛文尼亚语</option><option value="sw">斯瓦希里语</option><option value="ceb">宿务语</option><option value="so">索马里语</option><option value="tg">塔吉克语</option><option value="te">泰卢固语</option><option value="ta">泰米尔语</option><option value="th">泰语</option><option value="tr">土耳其语</option><option value="cy">威尔士语</option><option value="ur">乌尔都语</option><option value="uk">乌克兰语</option><option value="uz">乌兹别克语</option><option value="iw">希伯来语</option><option value="el">希腊语</option><option value="es">西班牙语</option><option value="hu">匈牙利语</option><option value="hy">亚美尼亚语</option><option value="ig">伊博语</option><option value="it">意大利语</option><option value="yi">意第绪语</option><option value="hi">印地语</option><option value="su">印尼巽他语</option><option value="id">印尼语</option><option value="jw">印尼爪哇语</option><option value="en">英语</option><option value="yo">约鲁巴语</option><option value="vi">越南语</option><option value="zh-CN">中文简体</option><option value="zh-TW">中文繁体</option></select></td><td width="5%" align="center"> </td><td width="6%" align="center"><div id="SL_TTS_voice" title="聆聽" style="background: transparent url(&quot;chrome://imtranslator/content/img/util/tts-voice.png&quot;) repeat scroll 0% 0%;"></div></td><td width="6%" align="center"><div id="SL_copy" title="複製譯文" style="background: transparent url(&quot;chrome://imtranslator/content/img/util/copy_hand.png&quot;) repeat scroll 0% 0%;"></div></td><td width="6%" align="center"><div id="SL_bbl_font_patch" title="此功能在字典中禁用"></div><div id="SL_bbl_font" title="字體大小" style="background: transparent url(&quot;chrome://imtranslator/content/img/util/font-off.png&quot;) repeat scroll 0% 0%;"></div></td><td width="6%" align="center"><div id="SL_TH" title="翻譯歷史" style="background: transparent url(&quot;chrome://imtranslator/content/img/util/history.png&quot;) repeat scroll 0% 0%;"></div></td><td width="10%"></td><td width="6%" align="right"><div id="SL_pin" title="固定彈出窗口" style="background: transparent url(&quot;chrome://imtranslator/content/img/util/pin-off.png&quot;) repeat scroll 0% 0%; display: block; width: 16px; height: 16px; cursor: pointer;"></div></td></tr></table></div><div id="SL_alert_bbl"><div id="SLHKclose"></div><div id="SL_alert_cont"></div></div></div><div id="SL_shadow_translation_result" style="background: rgb(255, 255, 255) url(&quot;chrome://imtranslator/content/img/util/bg.png&quot;) repeat scroll 0% 0%; visibility: visible;"></div><div id="SL_loading" style="background: transparent url(&quot;chrome://imtranslator/content/img/util/indicator.gif&quot;) repeat scroll 0% 0%; display: block; position: absolute; width: 35px; margin-left: 180px; margin-top: -40px; height: 35px;"></div><div id="SL_player2"></div><div id="SL_alert100" style="background: transparent url(&quot;chrome://imtranslator/content/img/util/bg2.png&quot;) repeat scroll 0% 0%;">語言功能限100個字符</div><div id="SL_Balloon_options" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;"><div id="SL_arrow_down"></div><table width="100%"><tr><td width="18%" align="left" height="16"><div id="SL_bbl_donate" title="進行一點捐款" style="background: transparent url(&quot;chrome://imtranslator/content/img/util/donate2.png&quot;) repeat scroll 0% 0%;"></div></td><td width="68%" align="center"><a href="#" id="OPlnk" title="顯示選項">選項</a> : <a href="#" id="HISTlnk" title="翻譯歷史">歷史</a> : <a href="http://about.imtranslator.net/tutorials/presentations/imtranslator-translator-for-firefox/popup-bubble-application/" target="_blank" id="HELPlnk" title="幫助">幫助</a> : <a href="#" id="FBlnk" title="反饋">反饋</a></td><td width="15%" align="right"><a id="SL_Balloon_Close" href="#" title="關閉">關閉</a></td></tr></table></div></div></div>
<!-- 清楚浮动影响高度为0 这个很重要-->
<div id="fudong">

</div>
<footer>
	<div class="footer">
		Copyright　2005-2017　广州学求易教育咨询有限公司　版权所有　<a style="color: #ccc;" href="http://www.miitbeian.gov.cn/" target="_blank">粤ＩＰＣ备：16062097号</a>
	</div>
</footer>
<script type="text/javascript" src='/new/js/jquery-2.2.3.min.js'></script>
<script type="text/javascript" src='/new/js/script_cheng.js'></script>
<script type="text/javascript" src="/new/js/pignose.tab.min.js"></script>
<script type="text/javascript" src="/new/js/date.js"></script>
<script src="{{ asset('/delijiajiao/js/layer.js') }}"></script>
<script type="text/javascript" >
	//确认获取订单
	function qr(){
		layer.confirm('　　恭喜！！你成为众多预约教员中通过审核的教员之一，首位支付信息费的教员将成功接单，获取家长的联系方式。如已有教员支付，则本订单状态将自动更改为已安排，无法再安排其他已审核教员。未能成功接单的教员请在下次通过审核时第一时间支付信息费。温馨提示：先预约的教员将获得优先审核权，请及时关注并预约家教订单哦！', {
			btn: ['确定','取消'] //按钮
		}, function(){
			layer.msg('的确很重要', {icon: 1});
		}, function(){
			layer.msg('也可以这样', {
				time: 20000, //20s后自动关闭
				btn: ['明白了', '知道了']
			});
		});
	}
	//诚意金
	function cyj(){
		layer.confirm('如你确认本单各方面均合适，支付诚意金（一般为50元，你也可根据意愿程度进行修改），我方将优先安排。如本单未选中你，锁定的诚意金将实时退回你的账户余额（2天为限，如我们仍未能在已预约教员中挑选出学员满意的教员，诚意金也将退回），诚意金随时可进行提现，提现金额将于24小时内收到。如挑选你接单，但你因个人原因无法接单，将对我方和家长及学员均造成不良影响，诚意金将无法退回。', {
			btn: ['重要','奇葩'] //按钮
		}, function(){
			layer.msg('的确很重要', {icon: 1});
		}, function(){
			layer.msg('也可以这样', {
				time: 20000, //20s后自动关闭
				btn: ['明白了', '知道了']
			});
		});
	}
</script>
<script>
	$(function() {

		var endTime = $('#endTime').val()
		var jy_adres = $('#jy_adres').val()

		$(document).on('click','.tj_Btn',function(){
			$.post("demo_ajax_gethint.asp",{suggest:endTime,jy_adres},function(result){

			});
		})
		$('.tab').pignoseTab({
			animation: true,
			children: '.tab'
		});
		$(function(){
			$('#beginTime').date();
			$('#endTime').date({theme:"datetime"});
		});
	});
</script>
<style type="text/css">
	.nav-tabs>li {
		float: left;
		margin-bottom: -1px;
		width: 20%;
		text-align: center;
	}
	.nav-stacked>li {
		text-align: center;
	}

	.tab-pane fade active in ul{
		position: absolute;
		width: 48px;
		text-align: center;
		left: 26%;
	}
	.nav-stacked>li {
		float: none;
		text-align: center;
		position: relative;
	}
	.zqm_yuyuejy{
		position: relative;
	}
	.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
		color: #353535;
		background-color: #fbfbfb;
		border: 1px solid #e1e1e1;
	}
	.nav-stacked li a{
		padding: 25px 15px;
	}
	div.c_bannar {
		/* border: 1px solid #98bf21; */
		/* height: 50px; */
		margin-left: 36px;
		margin-right: 36px;
		border-bottom: 1px solid #FACC40;
	}
    .zqm_yuyuejy .right .bk {
        width: 805px;
        height: 50px;
        border: 1px solid #e1e1e1;
        border-bottom: none;
        line-height: 50px;
        display: flex;;
    }
    .clear{
        zoom:1;
    }
    .clear:after{content:"";display:block;height:0;clear:both;visibility:hidden;}

</style>
</body>
</html>
