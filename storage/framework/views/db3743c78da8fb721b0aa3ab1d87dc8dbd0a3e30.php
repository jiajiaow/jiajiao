<?php $__env->startSection('title',session('regionname') ); ?>
<?php $__env->startSection('content'); ?>
    <div class="nav-vertical" id="dropdown">
        <ul id="cheng">
            <li style="width: 200px;text-align: center;height: 40px;line-height: 40px;border: 1px solid #F7B529;">全部课程分类</li>
            <?php $num = 0;?>
            <?php $__currentLoopData = $yiji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $num++;?>
                <li class="nav-item" style="display:block;overflow: hidden;">
                    <?php if($num < 7): ?>
                    <i class="menu-item-icon">
                        <img src="/delijiajiao/picture/item_icon_<?php echo e($num); ?>.png" alt="" width="100%">
                    </i>
                    <?php endif; ?>
                    <a href="javascript:void(0);" class="nav-item-title"><?php echo e($yj->yiji); ?>

                        <i class="icon-arrow-right right"></i>
                    </a>
                    <span><?php echo e($yj->introduce); ?><br><Br></span>
                    <dl>
                        <?php $__currentLoopData = $erji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ej): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if( $yj->id == $ej->yiji_id ): ?>
                                <dt><?php echo e($ej->erji); ?></dt>
                                <?php $__currentLoopData = $sanji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($ej->id == $sj->erji_id): ?>
                                        <dd><a href="/navigation.html/学科/<?php echo e($sj->sanji); ?>"><?php echo e($sj->sanji); ?></a></dd>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </dl>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

    <div class="center">
     <div class="banner">
      <div class="big-banner">
          <!--广告轮播-->
          <div class="banner-container">
            <div class="banner-main over">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="/delijiajiao/picture/banner_1.png"></div>
                        <div class="swiper-slide"><img src="/delijiajiao/picture/banner_2.png"></div>
                        <div class="swiper-slide"><img src="/delijiajiao/picture/banner_4.png"></div>

                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

      </div>
      <div class="small-banner">
       <a target="_blank" href="/yuyuelaoshi.html" class="a_d_s_hidden_link adsense-image-link"><img class="a_d_s_img" src="/delijiajiao/picture/yysm.png" /></a>
       <a target="_blank" href="/faculty.html" class="a_d_s_hidden_link adsense-image-link"><img class="a_d_s_img" src="/delijiajiao/picture/wmjy.png" /></a>
       <a target="_blank" href="/reg.html" class="a_d_s_hidden_link adsense-image-link"><img class="a_d_s_img" src="/delijiajiao/picture/jyzc.png" /></a>
      </div>
     </div>
    <div class="meta-box">
        <div class="meta-welfares meta-block">
            <h3><i class="icon-area"></i>热门大学</h3>
            <ul>
                <?php $__currentLoopData = $xx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="width:100px; overflow:hidden; text-overflow:ellipsis;"><a href="/hot.html/学院/<?php echo e($xx->school_name); ?>" target="_blank"><?php echo e($xx->school_name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

        </div>
        <div class="meta-area meta-block">
            <h3><i class="icon-welfares"></i>热门学科</h3>
            <ul style="    margin-top: 9px;">
                
                
                
                <li><a href="/hot.html/学科/数学">数学</a></li>
                <li><a href="/hot.html/学科/英语">英语</a></li>
                <li><a href="/hot.html/学科/语文">语文</a></li>
                <li><a href="/hot.html/学科/理综">理综</a></li>
                <li><a href="/hot.html/学科/物理">物理</a></li>
                <li><a href="/hot.html/学科/化学">化学</a></li>
                <li><a href="/hot.html/学科/地理">地理</a></li>
                <li><a href="/hot.html/学科/全科">全科</a></li>

            </ul>
        </div>
        <div class="meta-salary-filter meta-block">
            <h3><i class="icon-salary"></i>热门区域</h3>
            <ul style="margin-top: 7px;">
            <?php $__currentLoopData = $dq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="/hot.html/区域/<?php echo e($dq->county_name); ?>" target="_blank"><?php echo e($dq->county_name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
        <div class="img_" >
            <a style="display:block;" href="/yuyuelaoshi.html"><img style="width:980px;float:right;" src="/delijiajiao/picture/2.png" alt="" /></a>
        </div>
    </div>

   </div>

   <div class="index1">
          <div class="lebt">
          <div class="l">
            <img src="/delijiajiao/picture/s_1.png">金牌教员</div> <div class="r"><a href="/facultys.html/gd/2" >更多</a></div></div>
                <div class="acrt">
                <?php $__currentLoopData = $jy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($jp->tc_jinpai == 2): ?>
                    <li class="kuan">
                        <div class="top"  onmouseover="this.style.cursor='pointer'" onclick="location.href='/teacher/detail/<?php echo e($jp->id); ?>.html'">
                            <img src="/delijiajiao/images/logo.png" width="110" height="110" >
                            <i><?php echo e(mb_substr($jp->tc_name,0,1)); ?>教员</i>
                            <span>
                                <img src="/delijiajiao/picture/icon_imperial.png">
                            </span>
                            <div class="hover">
                                <p ><?php echo e(subtext($jp->tc_comments,40)); ?></p>
                                <a href="javascript:void(0)"  class="look">查看 ></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <a href="/hot.html/学院/<?php echo e($jp->tc_school); ?>"><?php echo e($jp->tc_school); ?></a>

                            <br/><?php if($jp->tc_zhuanye): ?>
                                <span><?php echo e($jp->tc_zhuanye); ?></span>
                            <?php else: ?>
                                <span>其他</span>
                            <?php endif; ?>
                            <div class="clear"></div>
                            <a href="/yuyuelaoshi.html" class="btn">预约免费试课</a>
                        </div>
                    </li>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
      </div>
      <div class="index1">
        <div class="lebt">
            <div class="l">
                <img src="/delijiajiao/images/s_2.png">学生教员</div>
            <div class="r"><a href="/facultys.html/gd/0">更多</a></div>
        </div>
            <div class="acrt">
            <?php $__currentLoopData = $jy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($xs->tc_jinpai == 0): ?>
                <li class="kuan">
                    <div class="top" onmouseover="this.style.cursor='pointer'" onclick="location.href='/teacher/detail/<?php echo e($xs->id); ?>.html'">
                        <img src="/delijiajiao/images/logo.png" alt="魏玲" width="110" height="110">
                        <i><?php echo e(mb_substr($xs->tc_name,0,1)); ?>教员</i>
                        <div class="hover">
                            <p><?php echo e(subtext( $xs->tc_comments,40)); ?></p>
                            <a href="javascript:void(0)" class="look" onclick="location.href='/teacher/detail/<?php echo e($xs->id); ?>.html'" >查看 ></a>
                        </div>
                    </div>
                    <div class="bottom">
                        <a href="/hot.html/学院/<?php echo e($xs->tc_school); ?>"><?php echo e($xs->tc_school); ?></a>

                        <br/>
                        <?php if($xs->tc_zhuanye): ?>
                            <span><?php echo e($xs->tc_zhuanye); ?></span>
                        <?php else: ?>
                            <span>其他</span>
                        <?php endif; ?>
                        <div class="clear"></div>
                        <a href="/yuyuelaoshi.html" class="btn">预约免费试课</a>
                    </div>
                </li>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
      </div>
      <div class="index1">
          <div class="lebt">
            <div class="l"><img src="/delijiajiao/images/s_3.png">专职教员</div>
            <div class="r"><a href="/facultys.html/gd/1">更多</a></div>
          </div>
          <div class="acrt">
            <?php $__currentLoopData = $jy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zhuanzhi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($zhuanzhi->tc_jinpai == 1): ?>
                <li class="kuan">
                    <div class="top" onmouseover="this.style.cursor='pointer'" onclick="location.href='/teacher/detail/207692.html'">
                        <img src="/delijiajiao/images/logo.png" alt="魏玲" width="110" height="110">
                        <i><?php echo e(mb_substr($zhuanzhi->tc_name,0,1)); ?>教员</i>
                        <div class="hover">
                            <p><?php echo e(subtext($zhuanzhi->tc_comments,40)); ?></p>
                            <a href="javascript:void(0)" class="look" onclick="location.href='/teacher/detail/<?php echo e($zhuanzhi->id); ?>.html'">查看 ></a>
                        </div>
                    </div>
                    <div class="bottom">
                        <a href="/hot.html/学院/<?php echo e($zhuanzhi->tc_school); ?>"><?php echo e($zhuanzhi->tc_school); ?></a>

                        <br/>
                        <?php if($zhuanzhi->tc_zhuanye): ?>
                            <span><?php echo e($zhuanzhi->tc_zhuanye); ?></span>
                        <?php else: ?>
                            <span>其他</span>
                        <?php endif; ?>
                        <div class="clear"></div>
                        <a href="/yuyuelaoshi.html" class="btn">预约免费试课</a>
                    </div>
                </li>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
      <div>
           <a style="display:block;" href="/yuyuelaoshi.html">
                <img style="width:980px;float:right;" src="/delijiajiao/picture/2.png" alt="" />
           </a>
      </div>
      <div class="index1">
          <div class="lebt">
          <div class="l"><img src="/delijiajiao/images/s_4.png">学员信息</div> <div class="r"><a href="/xueyuan.html">更多</a></div></div>
          <div class="acrt1">
              <li>
                  <p id="t1" style="width: 5%"></p>
                  <p id="t2" style="float: right;width: 15%">时间</p>
                  <p id="t3" style="float: right;width: 7%;color: #000;">状态</p>
                  <p id="t4" style="float: right; width:25%">说明</p>
                  <p id="t5" style="float: right;width:25%;">地区</p>
                  <p id="t6" style="width:13%;float:right;">类别</p>
                  <p id="t7" style="width:10%;float: right">学员名</p>
              </li>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                  <p id="t1"><a href="/xsinfo<?php echo e($data->id); ?>.html">详情</a></p>
                   <p id="t2"><?php echo e(date('Y-m-d',$data->time)); ?></p>
                    
                          <?php if($data->status == 0): ?>
                              <p id="t3" style="background-color: #ff9900;">  新发布</p>
                              
                              
                          <?php elseif($data->status == 1): ?>
                              <p id="t3" style="background-color: #3366cc;"> 已安排 </p>
                          <?php elseif($data->status == 2): ?>
                              <p id="t3" style="background-color: #cc6699;"> 已完成 </p>
                          <?php endif; ?>
                     <p id="t4"><?php echo e($data->teacher_info); ?></p>
                      <p id="t5"><?php echo e($data->dq); ?></p>
                       <p id="t6"> <?php echo e($data->grade); ?><?php echo e($data->subject_id); ?> </p>
                        <p id="t7"> <?php echo e($data->user_name); ?></p>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
 
    <div>
        <a style="display:block;" >
            <img style="width:980px;float:right;margin-top: 10px;" src="/delijiajiao/images/33.png" alt="" />
        </a>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript" src="/delijiajiao/js/zhen.js"></script>
<script type="text/javascript" src="/delijiajiao/js/swiper.min.js"></script>
<!-- 广告轮播 -->
<script type="text/javascript">
    <?php if(session("msg")): ?>
        if(<?php echo e(session('Template')); ?> == '1'){
            layer.alert('<?php echo e(session("msg")); ?>!',{icon: 4,time:2000});
        }else{
            layer.alert('<?php echo e(session("msg")); ?>!',{icon: 3,time:2000});
        }

    <?php endif; ?>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
</script>
<style type="text/css">
    .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
        bottom: 10px;
        left: 38%;
        width: 30%;
    }
    .swiper-pagination-bullet{
        background: #fff;
    }
    .swiper-pagination-bullet-active{
        background: #fff;
        opacity: 0.4;
    }

    .index1 .lebt .l img{
        margin-right: 15px;
    }
    .center .meta-box .meta-area ul>li {
        width: 21%;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }
.menu-item-icon img{
    width: 100%;
    height: 100%;
}


</style>

  
<script>
  $.ajax({
      type:'POST',
      url:"/yqlj",
      dataType:"json",
      contentType:"application/x-www-form-urlencoded; charset=utf8",
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:(function(result){
          
          console.log(result)
          // let html='';
          // $.each(result,function(){
          //   html += `<li><a href="link_a"></a></li>`

          // })
          // $('#cheng-href').html(html)

         var yqli = '';
          for(var i =0;i<result.length;i++){
            
            
            yqli += '<li>'
              +'<a href="'+result[i].link_a+'">'+result[i].link_name+'</a>'
              +'</li>';
              $('#cheng-href').html(yqli) 
        }
      }),
      error:(function(result,status){
          //console.log(result);
          //
          larye.alert('系统错误请联系管理员!');
      })

  });
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>