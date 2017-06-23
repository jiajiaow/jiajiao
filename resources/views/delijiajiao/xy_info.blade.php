@extends('delijiajiao.public.xy')
@section('title',mb_substr(session('regionname'),0,2))
@section('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<link href="/home/css/ljj.css" rel="stylesheet" type="text/css" />--}}
    @endsection
    @section('content')
	<!-- 主体部分 -->
	<div id="zhen_container">
	<!-- 侧导航 -->
		<div class="cheng_nav">
			<ul class="bian_nav">
				<li class="cheng_active">
					<i class='cheng_one'></i>
					<span><a href="/stinfo.html">个人信息</a></span>
				</li>
				<li>
					<i class='cheng_two'></i>
					<span><a href="/xy_order.html">订单管理</a></span>
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
					<span><a href="/xy_financial.html">财务中心</a></span>
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
			<div class="cheng_1body" style="width:954px;">
                            <div class="zqm_xy">
                                <div class="a1">请完善您的个人资料，方便为你匹配合适的教员</div>
                                <div class="a2"><p>{{ $user->name }}</p><span>您好，欢迎您来到个人中心</span></div>
                                <div class="zqm_a1">
                                    <form action="" method="post">
                                    <div class="yh"> <label>帐　　号</label>
                                    <input type="text" name="fname" placeholder="您的帐号" value="{{ $user->phone }}" /></div>
                                    <div class="div5"></div>
                                    <div class="yh"> <label>密　　码</label>
                                    <input type="text" name="lname" placeholder="您的密码" value="" /><div class="an"><a href="" target="_blank">修改密码</a></div></div>
                                    <div class="div5"></div>
                                    <div class="yh"><label>联系电话</label>
                                    <input type="text" name="fname" placeholder="请输入联系人电话" value="{{ $user->phone }}"/></div>
                                    <div class="div5"></div>
                                    <div class="yh"><label>备用电话１</label>
                                    <input type="text" name="lname" placeholder="备用电话" value="{{ $user->phone2 }}" /><div class="txt">点击编辑备用电话，也将收到教学信息</div></div>
                                    <div class="div5"></div>
                                    <div class="yh"><label>备用电话２</label>
                                    <input type="text" name="lname" placeholder="备用电话" value="{{ $user->phone3 }}" /><div class="txt">点击编辑备用电话，也将收到教学信息</div></div>
                                    <div class="div5"></div>
                                    <div class="yh"><label>等　　级</label>
                                    <input type="text" name="fname" /><div class="txt"><img src="/new/images/logo.png" width="25" height="25" /><a href="" target="_blank">点击查看等级情况</a></div></div>
                                    <div class="div5"></div>
                                    <div class="yh"><label>积　　分</label>
                                    <input type="text" name="lname" /><div class="txt"><img src="/new/images/logo.png" width="25" height="25" /><a href="" target="_blank">点击进入积分商城兑换物品</a></div></div>
                                        <input type="submit" value="提交">
                                    </form>
                                    <hr>
                                    <form action="" method="post">
                                    <div class="yh"><label>学生姓名</label>
                                    <input type="text" name="fname" placeholder="请输入学生姓名" value="" /></div> 
                                    <div class="div5"></div>
                                    <div class="yh"><label>学生电话</label>
                                    <input type="text" name="lname" placeholder="请输入学生电话" value="" /><div class="txt">是否接收授课情况信息　　　是：<input type="radio" checked="checked" name="sk" value="male" />　　　否：<input type="radio" name="sk" value="female" /></div></div>
                                    <div class="div5"></div>
                                    <div class="yh"><label>性　　别</label>
                                    男性： <input type="radio" checked="checked" name="Sex" value="male" />
                                    女性：<input type="radio" name="Sex" value="female" /></div>
                                    <div class="div5"></div>
                                    <label>学生年级</label>
                                    <SELECT name="grade" size=1 id="nj">
                                    <OPTION value="" selected>请选择</OPTION>
                                    <OPTION value="幼儿">幼儿</OPTION>
                                    <OPTION value="一年级">一年级</OPTION>
                                    <OPTION value="二年级">二年级</OPTION>
                                    <OPTION value="三年级">三年级</OPTION>
                                    <OPTION value="四年级">四年级</OPTION>
                                    <OPTION value="五年级">五年级</OPTION>
                                    <OPTION value="六年级">六年级</OPTION>
                                    <OPTION value="初一">初一</OPTION>
                                    <OPTION value="初二">初二</OPTION>
                                    <OPTION value="初三">初三</OPTION>
                                    <OPTION value="高一">高一</OPTION>
                                    <OPTION value="高二">高二</OPTION>
                                    <OPTION value="高三">高三</OPTION>
                                    <OPTION value="艺考生">艺考生</OPTION>
                                    <OPTION value="其它年级">其它年级</OPTION>
                                    <OPTION value="成人">成人</OPTION>
                                    </SELECT>
                                        <input type="submit" value="提交">
                                    <hr>
                                    </form>
                                    <form action=""method="post">
                                     <div class="yh"><label>学生姓名1</label>
                                    <input type="text" name="fname" placeholder="请输入学生姓名" value="" /></div> 
                                    <div class="div5"></div>
                                    <div class="yh"><label>学生电话</label>
                                    <input type="text" name="lname" placeholder="请输入学生电话" value="" /><div class="txt">是否接收授课情况信息　　　是：<input type="radio" checked="checked" name="sk" value="male" />　　　否：<input type="radio" name="sk" value="female" /></div></div>
                                    <div class="div5"></div>
                                    <div class="yh"><label>性　　别</label>
                                    男性： <input type="radio" checked="checked" name="Sex" value="male" />
                                    女性：<input type="radio" name="Sex" value="female" /></div>
                                    <div class="div5"></div>
                                    <label>学生年级</label>
                                    <SELECT name="grade" size=1 id="nj">
                                    <OPTION value="" selected>请选择</OPTION>
                                    <OPTION value="幼儿">幼儿</OPTION>
                                    <OPTION value="一年级">一年级</OPTION>
                                    <OPTION value="二年级">二年级</OPTION>
                                    <OPTION value="三年级">三年级</OPTION>
                                    <OPTION value="四年级">四年级</OPTION>
                                    <OPTION value="五年级">五年级</OPTION>
                                    <OPTION value="六年级">六年级</OPTION>
                                    <OPTION value="初一">初一</OPTION>
                                    <OPTION value="初二">初二</OPTION>
                                    <OPTION value="初三">初三</OPTION>
                                    <OPTION value="高一">高一</OPTION>
                                    <OPTION value="高二">高二</OPTION>
                                    <OPTION value="高三">高三</OPTION>
                                    <OPTION value="艺考生">艺考生</OPTION>
                                    <OPTION value="其它年级">其它年级</OPTION>
                                    <OPTION value="成人">成人</OPTION>
                                    </SELECT>
                                        <input type="submit" value="提交">
                                     <hr>

                                    </form>
                                    <form action="" method="post">
                                     <div class="yh"><label>学生姓名2</label>
                                    <input type="text" name="fname" placeholder="请输入学生姓名" value="" /></div> 
                                    <div class="div5"></div>
                                    <div class="yh"><label>学生电话</label>
                                    <input type="text" name="lname" placeholder="请输入学生电话" value="" /><div class="txt">是否接收授课情况信息　　　是：<input type="radio" checked="checked" name="sk" value="male" />　　　否：<input type="radio" name="sk" value="female" /></div></div>
                                    <div class="div5"></div>
                                    <div class="yh"><label>性　　别</label>
                                    男性： <input type="radio" checked="checked" name="Sex" value="male" />
                                    女性：<input type="radio" name="Sex" value="female" /></div>
                                    <div class="div5"></div>
                                    <label>学生年级</label>
                                    <SELECT name="grade" size=1 id="nj">
                                    <OPTION value="" selected>请选择</OPTION>
                                    <OPTION value="幼儿">幼儿</OPTION>
                                    <OPTION value="一年级">一年级</OPTION>
                                    <OPTION value="二年级">二年级</OPTION>
                                    <OPTION value="三年级">三年级</OPTION>
                                    <OPTION value="四年级">四年级</OPTION>
                                    <OPTION value="五年级">五年级</OPTION>
                                    <OPTION value="六年级">六年级</OPTION>
                                    <OPTION value="初一">初一</OPTION>
                                    <OPTION value="初二">初二</OPTION>
                                    <OPTION value="初三">初三</OPTION>
                                    <OPTION value="高一">高一</OPTION>
                                    <OPTION value="高二">高二</OPTION>
                                    <OPTION value="高三">高三</OPTION>
                                    <OPTION value="艺考生">艺考生</OPTION>
                                    <OPTION value="其它年级">其它年级</OPTION>
                                    <OPTION value="成人">成人</OPTION>
                                    </SELECT>
                                        <input type="submit" value="提交">
                                    <div class="div40"></div>
                                    {{--<button type="button">保存资料</button>　　　　　编辑学员信息/增加学员/备用电话等...--}}
                                        {{--<input type="submit" value="">--}}
                                    </form>
                                </div> 
                            </div>
			</div>
		<!-- nav 结束 -->
</div>
@endsection
@section('js')

@endsection
