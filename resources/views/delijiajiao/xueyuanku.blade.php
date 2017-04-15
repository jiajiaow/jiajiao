@extends('delijiajiao.public.public')
@section('title',session('regionname') )
@section('content')
<div class="container">
  <div class="main-box">
	    <div id="selectList" class="screenBox screenBackground">
            <dl class="listIndex" attr="terminal_brand_s">
                <dt>订单状态：</dt>
                <dd>
                    <a href="javascript:void(0)" values2="" values1="" attrval="xin">新发布</a>
                    <a href="javascript:void(0)" values2="" values1="" attrval="yi">预约中</a>
                    <a href="javascript:void(0)" values2="" values1="" attrval="yiyy">已预约</a>
                    <a href="javascript:void(0)" values2="" values1="" attrval="cg">已成功</a>
                </dd>
            </dl>

            <dl class="listIndex" attr="价格范围">
                <dt>老师类型：</dt>
                <dd>
                    <a href="javascript:void(0)" values2="499" values1="1" attrval="1-499">大学生</a>
                    <a href="javascript:void(0)" values2="499" values1="1" attrval="1-499">专职老师</a>
                    <a href="javascript:void(0)" values2="499" values1="1" attrval="1-499">其他老师</a>

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
	    </div>
    <div>
        <span style="display:block;" id="gen">
            <img src="/delijiajiao/images/top1.png" alt="">
            更多筛选条件</span>
    <div>
    <div>
        <span id="shou">
             <img src="/delijiajiao/images/top.png" alt="">
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
      <div class="index3">
          <div class="lebt">
                <div class="l">
                    <img src="/delijiajiao/images/icon_title4.png">学员库
                </div>
              <div class="r">
                  学员编号:<input type="text" style="color:#eee;" />
                  <input id="sousuo" type="submit">
                </div>
            </div>
          
          <div class="acrty">

              <li>
                  <p class="ta" > 查看详情 </p>
                   <p class="tb" > 发布时间</p>
                    <p class="tc" >学员状态</p>
                     <p class="td" >教员性别/要求/预约人数</p>
                      <p class="te" >课酬</p>
                       <p class="tf" >年级性别/求教课程</p>
                        <p class="tg" > 学员姓名/编号</p>
              </li>
          </div>
              <div class="acrt3">
                  @foreach($list as $li)
                 <li>
                      <p id="ta"> <a href="">查看详情</a></p>
                       <p id="tb"> {{ date("Y-m-d",$li->time) }}</p>

                            @if($li->status == 0)
                         <p id="tc" style="background-color: #ff9900;">  新发布</p>
                            @elseif($li->status == 1)
                         <p id="tc" style="background-color: #99cc33;">  预约中 </p>
                            @elseif($li->status == 2)
                         <p id="tc" style="background-color: #3366cc;"> 已预约 </p>
                            @elseif($li->status == 3)
                         <p id="tc" style="background-color: #cc6699;"> 已成功 </p>
                            @endif
                        <p id="td"> [{{ $li->teacher_sex }}]{{  subtext($li->teacher_info,45) }}[{{ $li->about_number }}]</p>
                        <p id="te">{{ $li->money==''?'执行德栗家教收费标准':$li->money }}</p>
                        <p id="tf"> {{ $li->grade }}({{ $li->user_sex }})<br>{{ $li->subject_id }} </p>
                        <p id="tg"> {{ substr($li->user_name,0,3) }}学员<br>{{ $li->id }}</p>
                  </li>
                 @endforeach
              </div>
          </div>
        </div>
     </div> 
    <div class="selectNumberScreen">
  </div></div>

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

    <script type="text/javascript">
        $('#cheng').remove();
        $('#f').remove();
    </script>
@endsection
