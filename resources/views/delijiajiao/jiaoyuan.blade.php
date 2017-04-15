
      <link rel="stylesheet"  href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"  onerror="tracker.resErr(this)" />
      @extends('delijiajiao.public.public')
      @section('title',session('regionname') )
      @section('content')
  <!--<![endif]-->
  <div class="container">
   <div class="main-box">
<div class="selectNumberScreen">

	<div id="selectList" class="screenBox screenBackground">
	
		<dl class="listIndex" attr="terminal_brand_s">
			<dt>学校：</dt>
			<dd>
				@foreach($xx as $x)
				<a href="javascript:void(0)" values2="" values1="" attrval="lenovo">{{ $x->sh_shool }}</a>
                @endforeach
			</dd>
		</dl>
		
		<dl class="listIndex" attr="价格范围">
			<dt>家教科目：</dt>
			<dd>
				<a href="javascript:void(0)" values2="499" values1="1" attrval="1-499">数学</a>
				<a href="javascript:void(0)" values2="499" values1="1" attrval="1-499">英语</a>
				<a href="javascript:void(0)" values2="499" values1="1" attrval="1-499">语文</a>
				<a href="javascript:void(0)" values2="499" values1="1" attrval="1-499">物理</a>
				<a href="javascript:void(0)" values2="499" values1="1" attrval="1-499">化学</a>
			</dd>
		</dl>
		
            <dl  class=" listIndex x" attr="terminal_os_s">
			<dt>老师性别：</dt>
			<dd>
				<a href="javascript:void(0)" values2="" values1="" attrval="ios">男</a>
				<a href="javascript:void(0)" values2="" values1="" attrval="android">女</a>
			</dd>
		</dl>
           <dl  class=" listIndex x" attr="terminal_os_s">
			<dt>所在区域：</dt>
			<dd>
                @foreach($quyu as $qy)
				<a href="javascript:void(0)" values2="" values1="" attrval="ios">{{ $qy->county_name }}</a>
				@endforeach
			</dd>
		</dl>
            <dl  class=" listIndex x" attr="terminal_os_s">
			<dt>老师类型：</dt>
			<dd>
				<a href="javascript:void(0)" values2="" values1="" attrval="ios">大学生</a>
				<a href="javascript:void(0)" values2="" values1="" attrval="android">专职老师</a>
				<a href="javascript:void(0)" values2="" values1="" attrval="symbian">其他</a>
			</dd>
		</dl>
	</div>
    <div>
        <span style="display:block;" id="gen">
            <img src="images/top1.png" alt="">
            更多筛选条件</span>
    <div>
    <div>
        <span id="shou">
             <img src="images/top.png" alt="">
            收起筛选条件</span>
    </div>
    
	<div class="hasBeenSelected">
		<dl>
			<dd style="display:none" class="clearDd">
				<div class="clearList"></div>
				<div style="display:none;" class="eliminateCriteria">清除筛选条件</div>
			</dd>
		</dl>

	</div>
	
</div>
        <div class="acrtp"> {{ $list->links()}} </div>
      <div class="indext3">
          <div class="lebt">
                <div class="l">
                    <img src="{{ asset('/delijiajiao/images/icon_title4.png') }}">教员库
                </div>
              <div class="r">
                  老师编号:<input type="text" style="color:#eee;" />
                  <input id="sousuo" type="submit">
                </div>
            </div>
          <div class="acrtty">
              <li>
                  <p class="ta" > 预约 </p>
                   <p class="tb" > 查看详情</p>
                    <p class="tc" >自我描述</p>
                      <p class="te" >就读丶毕业高校丶专业丶学历</p>
                       <p class="tf" >姓名/性别</p>
                        <p class="tg" > 教员编号</p>
              </li> </div>
              <div class="acrtt3">
                  @foreach($list as $li)
             <li>
                  <p id="tta"> <a href="/yuyuelaoshi.html?{{ $li->id }}">预约|免费试课</a> </p>
                   <p id="ttb"> <a href="">查看详情</a></p>
                     <p id="ttd"> {{ subtext($li->tc_comments,50) }}</p>
                     <div id="tte">{{ $li->tc_school }}
                                   {{-- {{ $li->tc_hsam }}
                                    {{ $li->tc_zhuanye }}
                                    {{ $li->tc_nj }}--}}
                     </div>
                       <p id="ttf">{{ substr($li->tc_name,0,3) }}教员<br />{{ $li->tc_sex=='1'?'男':'女' }}</p>
                        <p id="ttg"> <br>T{{ $li->id }}</p>
              </li>
                @endforeach
          </div> 
          </div>
        </div>
     </div>  
  </div>
   <div class="acrtp"> {{ $list->links()}}</div>

   <div id="footer">
    <p>姓名：<input onkeyup="value=value.replace(/[ -~]/g,'')" onkeydown="if(event.keyCode==13)event.keyCode=9">手机：<input onkeyup="value=value.replace(/[ -~]/g,'')" onkeydown="if(event.keyCode==13)event.keyCode=9">验证码：<input onkeyup="value=value.replace(/[ -~]/g,'')" onkeydown="if(event.keyCode==13)event.keyCode=9"><input type="button" value="快速请家教" />
  </p>
   </div>
   <script type="text/javascript">
         $(function(){ 
           
          var navH = $("#cheng").offset().top; 
          
            $(window).scroll(function(){ 
          
             var scroH = $(this).scrollTop(); 
           
            if(scroH>=navH){ 
                $("#cheng").css({"position":"fixed","top":0}); 
            }else if(scroH<navH){ 
                $("#cheng").css({"position":"relative","z-index":999}); 
            //    $(".nav-vertical ul li.nav-item dl dd").css("top","200px");
            } 
         }) 
     })  
           
        </script>
        <script type="text/javascript">
var dlNum  =$("#selectList").find("dl");
for (i = 0; i < dlNum.length; i++) {
	$(".hasBeenSelected .clearList").append("<div class=\"selectedInfor selectedShow\" style=\"display:none\"><span></span><label></label><em></em></div>");
}

var refresh = "true";

$(".listIndex a ").live("click",function(){
	var text =$(this).text();
	var selectedShow = $(".selectedShow");
	var textTypeIndex =$(this).parents("dl").index();
	var textType =$(this).parent("dd").siblings("dt").text();
	index = textTypeIndex -(2);
	$(".clearDd").show();
	$(".selectedShow").eq(index).show();
	$(this).addClass("selected").siblings().removeClass("selected");
	selectedShow.eq(index).find("span").text(textType);
	selectedShow.eq(index).find("label").text(text);
	var show = $(".selectedShow").length - $(".selectedShow:hidden").length;
	if (show > 1) {
		$(".eliminateCriteria").show();
	}
   
});
$(".selectedShow em").live("click",function(){
	$(this).parents(".selectedShow").hide();
	var textTypeIndex =$(this).parents(".selectedShow").index();
	index = textTypeIndex;
	$(".listIndex").eq(index).find("a").removeClass("selected");
	
	if($(".listIndex .selected").length < 2){
		$(".eliminateCriteria").hide();
	}
});

$(".eliminateCriteria").live("click",function(){
	$(".selectedShow").hide();
	$(this).hide();
	$(".listIndex a ").removeClass("selected");
});
</script>

@endsection
@section('js')
  <link rel="stylesheet"  href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"  onerror="tracker.resErr(this)" />
  <script type="text/javascript" src="{{ asset('/delijiajiao/js/zhen.js') }}"></script>
    <script type="text/javascript">
        $('#cheng').remove();
        $('#f').remove();
    </script>
@endsection