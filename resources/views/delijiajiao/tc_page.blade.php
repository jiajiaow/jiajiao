<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>学员个人中心订单</title>
  <link rel="stylesheet" type="text/css" href="/new/css/cheng_css.css">
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="/new/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="/new/js/tab.js"></script>
	<script type="text/javascript" src="/new/js/jquery.nicescroll.js"></script>
<!--三键传统下单切换效果-->
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
<!--nav 开始 中间主体-->
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
			<td><a href="/xsinfo{{ $l->id }}.html" target="_blank">订单详情</a></td>
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
			<label>页数:{{ $list->dqy }}/{{ $list->LastPage() }}</label>
		</div>
	</form>
</body>
</html>
