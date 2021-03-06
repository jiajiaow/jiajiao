﻿
<?php $__env->startSection('title',session('regionname') ); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="main-box">
	    <div id="selectList" class="screenBox screenBackground">
            <dl class="listIndex" attr="terminal_brand_s">
                <dt>订单状态：</dt>
                <dd>
                    <a href="/xueyuans/x0.html" values2="" values1="" attrval="xin">新发布</a>
                    <a href="/xueyuans/x1.html" values2="" values1="" attrval="yiyy">已安排</a>
                    <a href="/xueyuans/x2.html" values2="" values1="" attrval="cg">已完成</a>
                </dd>
            </dl>

            <dl class="listIndex" attr="价格范围">
                <dt>老师类型：</dt>
                <dd>
                    <a href="/xueyuans/t大学生.html" values2="499" values1="1" attrval="1-499">大学生</a>
                    <a href="/xueyuans/t专职老师.html" values2="499" values1="1" attrval="1-499">专职老师</a>
                    <a href="/xueyuans/t其他.html" values2="499" values1="1" attrval="1-499">其他老师</a>

                </dd>
            </dl>
            <dl  class=" listIndex x" attr="terminal_os_s">
                <dt>所在区域：</dt>
                <dd>
                    <?php $__currentLoopData = $quyu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="/xueyuans/q<?php echo e($qy->id); ?>.html" values2="" values1="" attrval="ios"><?php echo e($qy->county_name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                  <form action="/dosousuoid" method="post">
                  学员编号:<input type="text" id="or_ids" value="" name="id" />
                  <input type="hidden" id="or_ids" value="2" name="sb" />
                  <input  type="submit" value="搜索">
                  </form>
                </div>
            </div>

          <div class="acrty">

              <li>
                  <p class="ta" > 查看详情 </p>
                   <p class="tb" > 发布时间</p>
                    <p class="tc" >学员状态</p>
                     <p class="td" >教员性别/要求/预约人数</p>
                      <p class="te" >课酬</p>
                       <p class="tf" >年级性别/科目</p>
                        <p class="tg" > 学员姓名/编号</p>
              </li>
          </div>
              <div class="acrt3">
                  <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li>
                      <p id="ta"> <a href="/xsinfo<?php echo e($li->id); ?>.html">查看详情</a></p>
                       <p id="tb"> <?php echo e(date("Y-m-d",$li->time)); ?></p>

                            <?php if($li->status == 0): ?>
                         <p id="tc" style="background-color: #ff9900;">  新发布</p>
                            
                         
                            <?php elseif($li->status == 1): ?>
                         <p id="tc" style="background-color: #3366cc;"> 已安排 </p>
                            <?php elseif($li->status == 2): ?>
                         <p id="tc" style="background-color: #cc6699;"> 已完成 </p>
                            <?php endif; ?>
                        <p id="td"> [
                            <?php if($li->teacher_sex == '1'): ?>
                                男
                            <?php elseif($li->teacher_sex == '2'): ?>
                                女
                            <?php elseif($li->teacher_sex=='3'): ?>
                                男女不限
                            <?php endif; ?>
                            ]<?php echo e(subtext($li->teacher_info,45)); ?>[<?php echo e($li->yynum); ?>]</p>
                        <p id="te">
                            <?php if($li->money == ''): ?>
                                执行德栗家教收费标准
                            <?php elseif($li->money == '面议'): ?>
                                面议
                            <?php elseif($li->money != '执行德栗家教收费标准' && $li->money !='面议'): ?>
                                <?php echo e($li->money*$li->o_xs); ?>元/次
                            <?php endif; ?>
                        </p>
                        <p id="tf"> <?php echo e($li->grade); ?>(
                            <?php if($li->user_sex == '1'): ?>
                                男
                            <?php elseif($li->user_sex == '2'): ?>
                                女
                            <?php elseif($li->user_sex=='3'): ?>
                                男女不限
                            <?php endif; ?>
                            )<br><?php echo e($li->subject_id); ?> </p>
                        <p id="tg"> <?php echo e(substr($li->user_name,0,3)); ?>学员<br><?php echo e($li->id); ?></p>
                  </li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
        </div>
     </div>
        <div class="acrtp">
            <div class="acrtps">
                <?php if($list->LastPage() > 1): ?>
                    <a href="<?php echo e($list->Url(1)); ?>" id="fys" class="item<?php echo e(($list->CurrentPage() == 1) ? ' disabled' : ''); ?>">
                        <i class="icon left arrow"></i>
                        首页
                    </a>  <a href="<?php echo e($list->Url($list->last)); ?>" id="fys" class="item<?php echo e(($list->CurrentPage() == 1) ? ' disabled' : ''); ?>">
                        <i class="icon left arrow"></i>
                        上一页
                    </a>  <a href="<?php echo e($list->Url($list->next)); ?>" id="fys" class="item<?php echo e(($list->CurrentPage() == 1) ? ' disabled' : ''); ?>">
                        <i class="icon left arrow"></i>
                        下一页
                    </a>
                    <!--<?php for($i = 1; $i <= $list->LastPage(); $i++): ?>
                            <a href="<?php echo e($list->Url($i)); ?>" class="item<?php echo e(($list->CurrentPage() == $i) ? ' active' : ''); ?>">
                        <?php echo e($i); ?>

                            </a>
                        <?php endfor; ?> -->
                    <a href="<?php echo e($list->Url($list->LastPage())); ?>" id="fys" class="item<?php echo e(($list->CurrentPage() == $list->LastPage()) ? ' disabled' : ''); ?>">
                        末页
                        <i class="icon right arrow"></i>
                    </a>
                <?php endif; ?>
                
            </div>
        </div>


    <div class="selectNumberScreen">
  </div></div>

<style>
    #tf{
        white-space:nowrap;
        text-overflow:ellipsis;
        -o-text-overflow:ellipsis;
        overflow: hidden;
    }
</style>
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
    //搜索
    function sousuo(id){
        $.post('/dosousuoid',{id:id,sb:'2'},function(res){
            console.log(res)
            $('.acrt3 li').remove();
            $('.acrtp').remove();
            for (var i = 0; i < res.length; i++) {
                if(res[i].user_sex == "1"){
                    res[i].user_sex = '男';
                }else if(res[i].user_sex == "2"){
                    res[i].user_sex = '女';
                }else if(res[i].user_sex == "3" || res[i].user_sex == ''){
                    res[i].user_sex = '男女不限';
                }

                if(res[i].status == '0'){
                    res[i].status = "<p id='tc' style='background-color: #ff9900;'> 新发布 </p>";
                }else if(res[i].status == '1'){
                    res[i].status = "<p id='tc' style='background-color: #3366cc;'> 已安排 </p>";
                }elseif(res[i].status == '2'){
                    res[i].status = "<p id='tc' style='background-color: #cc6699;'> 已完成 </p>";
                }
                $('.acrt3').append("<li><p id='ta'> <a href='/xsinfo"+res[i].id+".html'>查看详情</a></p><p id='tb'>"+res[i].time+"</p>"+res[i].status+"[][0]</p><p id='te'>执行德栗家教收费标准</p><p id='tf'> ()<br>化学 </p><p id='tg'> lic学员<br>10152377</p></li>");
            };
        })
    }

</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

    <script type="text/javascript">
        $('#cheng').remove();
        $('#f').remove();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>