﻿
<?php $__env->startSection('title',session('regionname') ); ?>
<?php $__env->startSection('content'); ?>
    <div style="margin-top: 10px;">预约免费试课教员：T<?php echo e($list->id); ?> <?php echo e(substr($list->tc_name,0,3)); ?>教员</div>
<div class="container">
    <div id="sxc" class="jynr">
  <div class="l">
      <img src=<?php if($list->tc_photo !='' AND $list->tc_photo != 'tea_uppic/UploadFiles/None.png'): ?>
      <?php echo e($list->tc_photo); ?>

      <?php elseif($list->tc_photo == 'tea_uppic/UploadFiles/None.png' || $list->tc_photo ==''): ?>
        <?php echo e(asset('/delijiajiao/images/logo.png')); ?>

      <?php endif; ?>
               />
      <div class="jybtnl"><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more" >分享老师名片</a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
      <div class="jybtnr"><a href="123.htm" >加入备选老师</a></div>
      <li><span>教师性质：</span><?php if($list->tc_type == '--请选择--'): ?><?php else: ?><?php echo e($list->tc_type); ?> <?php endif; ?> </li>
              <li style="float: left;"><span>平时所在城市：</span><?php echo e($list->tc_citys=='--请选择--'?'':$list->tc_citys); ?></li>
              <li style="float: left;"><span>暑假所在城市：</span><?php echo e($list->tc_shu=='--请选择--'?'':$list->tc_shu); ?></li>
             <li style="float: left;"><span>寒假所在城市：</span><?php echo e($list->tc_han=='--请选择--'?'':$list->tc_han); ?></li>
      <div class="jybtnh">
          <?php if($list->tc_jinpai == '2'): ?>
              金牌教员
          <?php elseif($list->tc_jinpai == '1'): ?>
              专职教员
          <?php elseif($list->tc_jinpai == '0'): ?>
              学生教员
          <?php endif; ?>
      </div>
  </div>
    <div class="r">
      <li><span>学　　校：</span><?php echo e($list->tc_school); ?></li>
       <li><span>专业类别：</span><?php if($list->tc_zhuanye == '--请选择--'): ?><?php else: ?><?php echo e($list->tc_zhuanye); ?> <?php endif; ?></li>
        <li><span>具体专业：</span><?php echo e($list->tc_spl); ?></li>
         <li><span>性　　别：</span><?php echo e($list->tc_sex=='1'?'男':'女'); ?></li>
          <li><span>籍　　贯：</span><?php echo e($list->tc_jiguan); ?></li>
           <li><span>年　　级：</span><?php echo e($list->tc_nj); ?></li>
            <li><span>教　　龄：</span><?php echo e($list->tc_jl); ?></li>
            <li><span>微　　信：</span>156-9200-3711</li>
            <li><span>联系电话：</span><?php echo e(session('phone')); ?></li>


              
  </div>
<!-- 选项卡开始 -->
        <div class="cheng_teach-form">
            <h4 style="background:white">预约<?php echo e(substr($list->tc_name,0,3)); ?>教员<i>(编号：T<?php echo e($list->id); ?>)</i></h4>
		<form action="/yuyuejiaoyuan.html" method="post" onsubmit="return caozhen(1)">
             <div class="cheng_fg">
			 <label for="">联系人</label>
             <input type="hidden" name="teacher_id" id="cheng_teacher_id" value="<?php echo e($list->id); ?>">
             <input type="text" maxlength=10 name='lxr' id="cheng_contact">
             </div>
             <div class="cheng_fg">
			 <label for ="">联系方式</label>
			 <input type="text" maxlength=11 id="cheng_mobile" name="phone">
              </div>
              <div class="cheng_fg">
			 <label for="">科目</label>
			 <input type="text" maxlength=15 id="zhangqiming" name='km'/>
             </div>
            <div class="cheng_fg"style="height: 35px;margin-top: 20px;">
                <input type="text" style="width:123px;float: left" id="mobile_code" name="mobile_code" placeholder="验证码" class="password">
                <input type="button" style="width:120px;background:#F7B529;line-height:0;color:black;cursor: pointer;float: right" onclick="sendMsg()" value="发送验证码" id="djs">
            </div>
             <button type='submit' >立即预约免费上门授课</button>
		</form>
	</div>
<center>
  <div class="nTab">
    <!-- 标题开始 -->
<div class="TabTitle">
      <ul id="myTab0" style="height:43px ">
  <li class="active" onclick="nTabs(this,0);">可授课情况</li>
  <li class="normal" onclick="nTabs(this,1);">个人资料</li>
  <li class="normal" onclick="nTabs(this,2);">家教经验</li>
      </ul>
    </div>
        </div>

    <div style="height: 200px;border:1px solid #F7B529; width: 888px;margin-left: -262px; display: inline-block">
    <!-- 内容开始 -->
  <div class="TabContent">
      <div id="myTab0_Content0" >
          <div style=";margin:5px 0px 0px 5px;text-align: left"><b style="color: #ff0000;">可授科目：</b><?php echo e($list->tc_subjects); ?></div>
          <div style=";margin:5px 0px 0px 5px;text-align: left"><b style="color: #ff0000;">可授区域：</b><?php echo e($list->tc_area); ?></div>
          <div class="DivJoin" style="margin:5px 0px 0px 5px;text-align: left"><b style="color: #ff0000;">可授课时间：</b><?php echo e($list->tc_sktime); ?></div>
          <div style="margin:5px 0px 15px 5px;text-align: left"><b style="color: #ff0000;">课酬要求：</b><?php if($list->tc_salary == null): ?>执行德栗家教收费标准<?php else: ?><?php echo e($list->tc_salary); ?><?php endif; ?></div>
      </div>
       <div id="myTab0_Content1" class="none">
           <div style="float: left;margin:5px 0px 0px 5px; text-align: left"><b style="color: #ff0000;">自我评价：</b><?php echo e($list->tc_comments); ?></div><br><br>
           <div style="float: left;margin:5px 0px 15px 5px;"><b style="color: #ff0000;">所获证书：</b><?php echo e($list->tc_certificate); ?></div><br><br>
       </div>
       <div id="myTab0_Content2" class="none">
        <span style="float: left;margin: 5px 0px 0px 5px;"><p style="float: left;padding: 0px 0px;color: #ff0000;font-weight: 700;font-size: 15px">家教经验:</p><?php echo e($list->tc_case); ?></span><br>
        
        
       </div>
    </div>
  </div>
  <!-- 选项卡结束 -->
  </center>
</div>

   <script type="text/javascript">

      var JoDiv =  $('.DivJoin').text()
     var str= JoDiv.split(' ')
      $('.DivJoin').text(str)
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
//-------------------
         function CheckValue()
         {
             if($("#lxr").val()=="")
             {
                 layer.alert("联系人不能为空！", {icon: 5});

             }
             if($("#phone").val()=="")
             {
                 layer.alert("联系方式不能为空！", {icon: 5});

             }

             if($("#email").val()=="")
             {
                 layer.alert("Email不能为空！", {icon: 5});

             }
             else if($("#pw1").val().length<6)
             {
                 layer.alert("密码不能为空或者小于6位！", {icon: 5});

             }

             else if($("#pw1").val().length>20)
             {
                 layer.alert("密码不能多于20位！", {icon: 5});

             }
             $("#pw2").val("");
             $.ajax({
                 url:"<?php echo e(URL('/doreg.html')); ?>",
                 type:"post",
                 data:$('#form1').serialize(),
                 success:function(data){
                     if(data == 'y'){
                         layer.alert('注册成功!',{icon: 6});
                         window.location.href='/login.html';
                     }else if(data == 'n'){
                         layer.alert('验证码无效!',{icon: 5,time:2000});
                     }else if(data == 'ls'){
                         layer.alert('该用户已经注册!',{icon: 5,time:2000});
                     }else if(data == 'f'){
                         layer.alert('非法请求!',{icon: 5,time:2000});
                     }
//		data = eval('('+data+')');
//		if(data.status == 1){
//			alert(data.msg);
//		}
//		if(data.status == 2){
//			location.href=data.url;
//		}
                 }
             })
         }

         function sendMsg()
         {
             var mobile = $("#cheng_mobile").val();
             var code = $("#vcode").val();

             if(mobile == null || mobile == ''){
                 layer.alert("请输入手机号", {icon: 5});return false;
             }
             var re = /^1[34578]\d{9}$/;
             if (!re.test(mobile)) {
                 layer.alert("请输入正确手机号",{icon: 5});return false;
             }
             //获取验证码
             getCode();
             var get_code=$('#djs');
             time(get_code);
         }
         function getCode(){
             var phone = $("#cheng_mobile").val();
             $.ajax({
                 type:'POST',
                 url:"<?php echo e(URL('/docode.html')); ?>",
                 contentType:"application/x-www-form-urlencoded; charset=utf8",
                 data:{"phone":phone,"zt":'预约'},
                 /*dataType:'JSON',*/
                 success:(function(result){
                     if(result == 'y'){
                         if(<?php echo e(session('Template')); ?> == '1'){
                             layer.alert('请注意查收短信!',{icon: 4,time:2000});
                         }else{
                             layer.alert('请注意查收短信!',{icon: 3,time:2000});
                         }

                     }
                     //console.log(result);
                 }),
                 error:(function(result,status){
                     //console.log(result);
                     //larye.alert('短信sb!');
                 })

             });
         }
         var wait=60;
         function time(z,c){
             if(wait==0){
                 z.removeAttr('disabled');
                 z.val('发送验证码');
                 wait = 60;
             }else{
                 z.attr('disabled',"true");
                 z.val("倒数"+wait+"s");
                 wait--;
                 setTimeout(function(){
                     time(z,c);
                 },1000)
             }
         }
        </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

    <script type="text/javascript">
        $('#cheng').remove();
        $('#dropdown').remove();
        $('#f').remove();
        <?php if(session("error")): ?>
             <?php echo e(session("error")); ?>

        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>