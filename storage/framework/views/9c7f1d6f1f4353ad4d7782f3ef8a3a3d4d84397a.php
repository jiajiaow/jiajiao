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
        <div class="hezi" style="border: 1px solid #dddddd;">
            <div style="padding-left: 20px;height: 60px;line-height: 60px;">
                <img src="/delijiajiao/images/dingwei.png" alt="">
                <label for=""><b><?php echo e(substr(session('cityname'),0,6)); ?>分站：</b></label>
                <span style="margin-right: 6rem"><b><?php echo e(session('regionname')); ?></b></span>
                <img src="/delijiajiao/images/dianhua.png" alt="">
                <label for=""><b>联系电话：</b></label>
                <span style="color: red;margin-right: 7rem;"><b><?php echo e(session('phone')); ?></b></span>
                <img src="/delijiajiao/images/wechat1.png" alt="">
                <label for=""><b>微信号：</b></label>
                <span><b><?php echo e(session('fz_wxhao')); ?></b></span>
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
        <div class="meta-area meta-block" style="width: 355px;">
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

   <div class="index1" style="height:335px;overflow: hidden">
          <div class="lebt">
          <div class="l">
            <img src="/delijiajiao/picture/s_1.png">金牌教员</div> <div class="r"><a href="/faculty.html" >更多</a></div></div>
                <div class="acrt">
                <?php $__currentLoopData = $jy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($jp->tc_jinpai == 2): ?>
                    <li class="kuan">
                        <div class="top"  onmouseover="this.style.cursor='pointer'" onclick="location.href='/teacher/detail/<?php echo e($jp->id); ?>.html'">
                            <img src="<?php echo e($jp->tc_photo==''?'/delijiajiao/images/logo.png':$jp->tc_photo); ?>" width="110" height="110" >
                            <i><?php echo e(mb_substr($jp->tc_name,0,1)); ?>教员</i>
                            <span>
                                <img src="/delijiajiao/picture/icon_imperial.png">
                            </span>
                            <div class="hover">
                                <p ><?php echo e(subtext($jp->tc_comments,40)); ?></p>
                                <a href="/teacher/detail/<?php echo e($jp->id); ?>.html"  class="look">查看 ></a>
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
            <div class="r"><a href="/faculty.html">更多</a></div>
        </div>
            <div class="acrt">
            <?php $__currentLoopData = $jy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($xs->tc_jinpai == 0): ?>
                <li class="kuan">
                    <div class="top" onmouseover="this.style.cursor='pointer'" onclick="location.href='/teacher/detail/<?php echo e($xs->id); ?>.html'">
                        <img src="<?php echo e($xs->tc_photo==''?'/delijiajiao/images/logo.png':$xs->tc_photo); ?>" width="110" height="110">
                        <i><?php echo e(mb_substr($xs->tc_name,0,1)); ?>教员</i>
                        <div class="hover">
                            <p><?php echo e(subtext( $xs->tc_comments,40)); ?></p>
                            <a href="/teacher/detail/<?php echo e($xs->id); ?>.html" class="look"  >查看 ></a>
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
            <div class="r"><a href="/faculty.html">更多</a></div>
          </div>
          <div class="acrt">
            <?php $__currentLoopData = $jy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zhuanzhi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($zhuanzhi->tc_jinpai == 1): ?>
                <li class="kuan">
                    <div class="top" onmouseover="this.style.cursor='pointer'" onclick="location.href='/teacher/detail/<?php echo e($zhuanzhi->id); ?>.html'">
                        <img src="<?php echo e($zhuanzhi->tc_photo==''?'/delijiajiao/images/logo.png':$zhuanzhi->tc_photo); ?>" width="110" height="110">
                        <i><?php echo e(mb_substr($zhuanzhi->tc_name,0,1)); ?>教员</i>
                        <div class="hover">
                            <p><?php echo e(subtext($zhuanzhi->tc_comments,40)); ?></p>
                            <a href="/teacher/detail/<?php echo e($zhuanzhi->id); ?>.html" class="look" >查看 ></a>
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
                        <p id="t7"> <?php echo e(mb_substr($data->user_name,0,1)); ?>学员</p>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
    <div class="wx_box" style="display:none;">
        <img src="<?php echo session('fz_wx'); ?>" alt=""  width="100%">
    </div>
    <div class="fc" style="display: none;"></div>
    <div class="fc_body" style="display: none">
        <div class="fcb_top">
            <div style="display: inline-block;margin-left: 8px; vertical-align: middle">
                <img src="/new/images/xsznt.png" style="width: 155px; vertical-align: bottom;">
            </div>
            <div style="display: inline-block;margin-top: 26px;vertical-align: bottom ">
                <p class="fcb_text">还没找到心仪的老师？我们的金牌顾问帮您挑吧</p>
                <h2 class="fcb_h2">专业大学生<span class="fcb_h2_span">上门家教</span></h2>
                <h2 class="fcb_h2" style="border-bottom: 1px solid #ccc;padding-bottom: 5px;"><span class="fcb_h2_span">免费</span>上门试课！</h2>
                <div style="font-size: 12px;">
                    <div class="dsv">
                        <p><?php echo e(substr(session('cityname'),0,6)); ?>热线：<?php echo e(session('phone')); ?></p>
                        <p>全国热线：400-8250-710</p>
                    </div>
                    <div class="dsv">
                        <a href="https://hztk5.kuaishang.cn/bs/im.htm?cSource=1&cas=69564___125636&fi=79140&ri=18245998447&vi=84d357f55f854a87b7683824f3938530&dp=http%3A%2F%2Fwww.delijiajiao.com%2F&_d=1494806260357&_tk=575c5551" class="zx_btn" target="_blank">在线咨询</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="fcb_bottom">
            <p class="fcb_bottom_titp" style="padding: 14px 0 3px 50px;;text-align: left;margin:0;color: #fff;font-size: 14px;">您孩子希望辅导的类型：</p>
            <div class="dsv fcb_b_box">
                <ul style="width: 200px;">
                    <li class="fcb_b_box_active">高中</li>
                    <li>初中</li>
                    <li>小学</li>
                    <li>语言</li>
                    <li>艺术</li>
                    <li>其他</li>
                </ul>
            </div>
            <div class="dsv">
                <p style="color: #fff;font-size: 14px;">您的姓名：<input id="float_name" type="text" name="" placeholder="例：周先生/林小姐"></p>
                <p style="color: #fff;font-size: 14px;">您的电话：<input id="float_phones" type="text" name="" placeholder="请输入您的电话"></p>
            </div>
            <div style="text-align: center;margin-top: 6px;"><span class="ljtj" onclick="isPhoneNos()" >立即提交</span></div>
        </div>
        <span class="fc_body_clock"><i></i></span>
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
    .wx_box {
        position: fixed;
        right: 74px;
        bottom:29%;
        width: 100px;
        height: 100px;
    }
    .fcb_b_box_active{
        border: 1px solid #000;
    }
    .fc{
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.41);
        z-index: 998;
        left: 0;
        bottom: 0;
    }
    .fc_body{
        position: fixed;
        background: transparent;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 498px;
        border-radius: 10px;
        z-index: 999;
    }
    .fc_body_clock {
        position: absolute;
        background: #f7b528;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        top: -12px;
        right: -12px;
        text-align: center;
        line-height: 29px;
        cursor: pointer;
    }
    .fc_body_clock i {
        background: url(/new/images/X.png)center center no-repeat;
        background-size: 100%;
        width: 13px;
        height: 13px;
        display: inline-block;
    }
    .fcb_top{
        width: 100%;
        height: 175px;
        background: #fff;
        border-radius: 10px 10px 0 0;
    }
    .fcb_bottom{
        width: 100%;
        height: 145px;
        background: #f7b528;
        border-radius: 0 0 10px 10px;
        text-align: center;
    }
    .fcb_text{
        font-size: 12px;
        background: #f7b528;
        color: #fff;
        padding: 4px 12px;
    }
    .fcb_h2{
        color: #6e6e6e;
        margin: 0;
    }
    .fcb_h2_span{
        color: #f7b528;
    }
    .dsv{
        display: inline-block;
        vertical-align: middle;
    }
    .dsv a{
        padding: 2px 17px;
        background: #2097fb;
        color: #fff;
        border-radius: 10px;
        margin-left: 39px;
    }
    .dsv p{
        padding: 3px 0;
        margin: 0;
    }
    .fcb_b_box{
        margin-left: -14px;
    }

    .fcb_b_box li{
        display: inline-block;
        padding: 2px 15px;
        background: #fff;
        border-radius: 17px;
        font-size: 12px;
        color: #f7b528;
        margin: 5px 0;
        cursor: pointer;
    }
    .fcb_bottom .ljtj{
        background: #fd1616;
        font-size: 12px;
        color: #fff;
        padding: 3px 33px;
        border-radius: 16px;
        height: auto;
        cursor: pointer;
    }
    .fcb_bottom input {
        border: none;
        height: 26px;
        padding-left: 11px;
        width: 138px;
        color: #000;
    }
    .fcb_bottom_titp{
        padding: 14px 0 3px 28px;
        text-align: left;
        color: #fff;
        font-size: 14px;
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

  $(window).scroll(function(event){
      var scroll = $(window).scrollTop()
      var li_4 = $('.nav-item:nth(4)')
      var li_5 = $('.nav-item:nth(5)')
    if(scroll >= 2000){
        li_4.hide()
        li_5.hide()
    }else if(scroll <= 2000){
        li_4.show()
        li_5.show()
    }
  });

  function isPhoneNos() {
      var name = $('#float_name').val()
      var km = $('.fcb_b_box_active').html()
//      alert(km);
      //return false;
      var phone = $('#float_phones').val();
      if(km != ''){
          if(phone != ''){
              var myreg = /^1[34578]\d{9}$/;
              if(!myreg.test($("#float_phones").val()))
              {
                  layer.alert('请输入有效的手机号码！');
                  return false;
              }else{
                  $.post('/dotanchuangform',{km:km,phone:phone,name:name},function(r){
                      layer.alert('尊敬的家长/学员,我们已经收到您的需求,我们的金牌顾问将尽快联系您,非常感谢您的认可。');
                  })
                  $('.fc').fadeOut()
                  $('.fc_body').fadeOut()
              }
          }else{
              alert('手机号码不能为空');
              return false;
          }
      }else{
          alert('姓名不能为空');
          return false;
      }
  }







  setTimeout(function(){
      var aa = $('#div4_off')
      aa.hover(function(){
          $('.wx_box').show()
      },function(){
          $('.wx_box').hide()
      })
  },3000)


</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>