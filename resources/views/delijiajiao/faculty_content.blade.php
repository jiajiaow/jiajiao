@extends('delijiajiao.public.public')
@section('title',session('regionname') )
@section('content')
<div class="container">
    <div id="sxc" class="jynr">
  <div class="l">
      <img src=@if($list->tc_photo !='')
      {{ $list->tc_photo }}
      @else
      {{ asset('/delijiajiao/images/logo.png') }}
      @endif" />
      <div class="jybtnl"><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more">分享老师名片</a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
      <div class="jybtnr"><a href="123.htm" >加入备选老师</a></div>
      <li><span>教师性质：</span>{{ $list->tc_type }}</li>
              <li><span>平时所在城市：</span>{{ $list->tc_now_lives }}</li>
              <li><span>暑假所在城市：</span>{{ $list->tc_shu }}</li>
             <li><span>寒假所在城市：</span>{{ $list->tc_han }}</li>
      <div class="jybtnh">
          @if($list->tc_jinpai == '2')
              金牌教员
          @elseif($list->tc_jinpai == '1')
              专职教员
          @elseif($list->tc_jinpai == '0')
              学生教员
          @endif
      </div>
  </div>
    <div class="r">
      <li><span>学　　校：</span>{{ $list->tc_school }}</li>
       <li><span>专业类别：</span>{{ $list->tc_zhuanye }}</li>
        <li><span>具体专业：</span>{{ $list->tc_spl }}</li>
         <li><span>性　　别：</span>{{ $list->tc_sex='1'?'男':'女' }}</li>
          <li><span>籍　　贯：</span>{{ $list->tc_jiguan }}</li>
           <li><span>年　　级：</span>{{ $list->tc_nj}}</li>
            <li><span>教　　龄：</span>{{ $list->tc_jl }}</li>

              {{--<li><span>联系电话：</span>人大概豆腐干豆腐干反对声赶到事发</li>--}}
  </div>
<!-- 选项卡开始 -->
        <div class="cheng_teach-form">
            <h4 style="background:white">预约{{ substr($list->tc_name,0,3) }}教员<i>(编号：T{{ $list->id }})</i></h4>
		<form action="" method="post" onsubmit="return caozhen(1)">
                    <div class="cheng_fg">
			<label for="">联系人</label>
                            <input type="hidden" name="teacher_id" id="cheng_teacher_id" value="260550">
                            <input type="text" maxlength=10 name='' id="cheng_contact">
                    </div>
                    <div class="cheng_fg">
			<label for ="">联系方式</label>
			<input type="text" maxlength=11 id="cheng_mobile" name="">
                    </div>
                    <div class="cheng_fg">
			<label for="">科目</label>
			<input type="text" maxlength=10 id="zhangqiming" name=''/>
                    </div>
                    <button type='submit' >立即预约免费上门授课</button>
		</form>
	</div>
<center>
  <div class="nTab">
    <!-- 标题开始 -->
<div class="TabTitle">
      <ul id="myTab0">
  <li class="active" onclick="nTabs(this,0);">可授课情况</li>
  <li class="normal" onclick="nTabs(this,1);">个人资料</li>
  <li class="normal" onclick="nTabs(this,2);">家教经验</li>
      </ul>
    </div>
        </div>

    <div style="height: 200px;border:1px solid #F7B529; width: 888px;float: left;">
    <!-- 内容开始 -->
  <div class="TabContent">
       <div id="myTab0_Content0">
           <table class="table">
               <tr class="gradeU sc1">
                   <td>可授课科目:</td>
                   <td>{{ substr($list->tc_subjects,1,800) }}</td>
               </tr>
               <tr class="gradeU sc1">
                   <td>可授课区域:</td>
                   <td>{{ substr($list->tc_area,1,800) }}</td>
               </tr>
               <tr class="gradeU sc1">
                   <td>可授课时间:</td>
                   <td>{{ $list->tc_sktime }}</td>
               </tr>
               <tr class="gradeU sc1">
                   <td>课酬要求:</td>
                   <td>@if($list->tc_salary == null)执行德栗家教收费标准@else{{ $list->tc_salary }}@endif</td>
               </tr>
           </table>
       </div>
       <div id="myTab0_Content1" class="none">
           <span style="float: left;margin: 15px 5px 15px 5px;"><p style="float: left;padding: 0px 10px;color: #ff0000;">自我评价:</p>{{ $list->tc_comments }}</span><br>
           <span style="float: left;margin: 15px 5px 15px 5px;"><p style="float: left;padding: 0px 10px;color: #ff0000;">所获证书:</p>{{ $list->tc_certificate }}</span><br>
       </div>
       <div id="myTab0_Content2" class="none">
        <span style="float: left;margin: 15px 5px 15px 5px;"><p style="float: left;padding: 0px 10px;color: #ff0000;">家教经验:</p>{{ $list->tc_case }}</span><br>
       </div>
    </div>
  </div>
  <!-- 选项卡结束 -->
  </center>
</div>
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
@endsection
@section('js')

    <script type="text/javascript">
        $('#cheng').remove();
        $('#dropdown').remove();
        $('#f').remove();
    </script>
@endsection