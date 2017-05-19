<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?>【德栗家教】<?php echo e(session('regionname')); ?>家教专业大学生家教全国连锁领导品牌!</title>
    <link rel="stylesheet" href="/phone/css/ele.css">
    <link rel="stylesheet" href="/phone/css/main.css">
    <link rel="stylesheet" href="/phone/css/swiper-3.4.2.min.css">
    <script src="/phone/js/flexible.js"></script>
</head>
<body>
    <div class="wrap" id="app">
        <header class="jj_header">
            <div class="jj_header_left">
                <span class="jjh_logo"><img src="/phone/img/LOGO@2x.png" width="100%" style="width:1rem;"></span>
                <div class="jjh_text_box">
                    <span class="jjh_text_jj">德栗家教</span>
                    <span class="jjh_text_gx">【高校联盟】</span>
                </div>
            </div>
            <div class="jj_header_right">
                <span class="jj_header_right_yh"><img src="/phone/img/yh.png" width="100%" style="width:.4rem;"></span>
                <span class="header_city"><span class="header_city_text" onclick="javascript:window.location.href='#'">广州</span> <img src="/phone/img/xl.png" style="margin-top: .1rem;width:.4rem;" ></span>
            </div>
        </header>
        <section class="banner_box">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="/phone/img/banner_1@2x.png" width="100%" ></div>
                    <div class="swiper-slide"><img src="/phone/img/banner_1@2x.png" width="100%"  ></div>
                    <div class="swiper-slide"><img src="/phone/img/banner_1@2x.png"  width="100%" ></div>
                </div>
                <div class="swiper-button-prev swiper-button-white"></div>
                <div class="swiper-button-next swiper-button-white"></div>
            </div>
        </section>
        <section class="contact_box">
            <div class="contact_box_top">
                <div style="width: 63%">
                    <span class="fz_icon icon"></span>
                    <span><?php echo e(substr(session('cityname'),0,6)); ?>分站：<?php echo e(session('regionname')); ?></span>
                </div>
                <div style="flex: 1">
                    <span class="bluephone_icon icon"></span>
                    <span><?php echo e(session('phone')); ?></span>
                </div>
            </div>
           <div class="contact_box_bottom">
               <div style="width: 63%">
                   <span class="redphone_icon icon"></span>
                   <span>全国统一热线：400-8080-740</span>
               </div>
               <div style="flex: 1">
                   <span class="wx_icon icon"></span>
                   <span>微信号：<?php echo e(session('fz_wxhao')); ?></span>
               </div>
           </div>
        </section>
        <section class="subject_box">
            <div>
                <ul>
                    <li>
                        <a href="">
                            <img src="/phone/img/sx.png" alt="">
                            <p>数学</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/phone/img/English@2x.png" alt="">
                            <p>英语</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/phone/img/yw.png" alt="">
                            <p>语文</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/phone/img/lz.png" alt="">
                            <p>理综</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/phone/img/wl.png" alt="">
                            <p>物理</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/phone/img/hx.png" alt="">
                            <p>化学</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/phone/img/dl.png" alt="">
                            <p>地理</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/phone/img/gd.png" alt="">
                            <p>更多</p>
                        </a>
                    </li>
                </ul>
                <div style="text-align: center;     margin-top: .2rem;">
                    <a href="">
                        <img src="/phone/img/ksqjj.png" width="100%">
                    </a>
                </div>
            </div>
        </section>
        <section class="msg_box">
            <div class="msg_box_title">
                <span class="msg_box_title_l"><img src="/phone/img/dax.png" style="margin: 0 .1rem">热门大学</span>
                <span class="msg_box_title_r"><a href="#">更多   > </a></span>
            </div>
            <div class="school_box_content">
                <ul>
                    <?php $__currentLoopData = $xx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="#"><?php echo e($xx->school_name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </section>
        <section class="sele_box">
            <div style="width: 50%"><img src="/phone/img/qls.png" alt="" width="100%"></div>
            <div style="width: 50%"><img src="/phone/img/dls.png" alt="" width="100%"></div>
        </section>
        <section class="msg_box">
            <div class="msg_box_title">
                <span class="msg_box_title_l"><img src="/phone/img/xy.png" style="margin: 0 .1rem">学员信息</span>
                <span class="msg_box_title_r"><a href="#">更多   > </a></span>
            </div>
            <div class="msg_box_tab_content">
                <ul>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="el_tab_content">
                                <span class="el_tab_content-l">
                                    <?php echo e(mb_substr($data->user_name,0,1)); ?>学员
                                </span>
                        <span class="el_tab_content-r"><?php echo e(date('Y-m-d',$data->time)); ?></span>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </section>
        <section class="msg_box">
            <div class="msg_box_title">
                <span class="msg_box_title_l"><img src="/phone/img/sj.png" style="margin: 0 .1rem">教学资源</span>
                <span class="msg_box_title_r"><a href="#">更多   > </a></span>
            </div>
            <div class="msg_box_tab_content">
                <el-tabs v-model="activeName2" type="card" >
                    <el-tab-pane label="全部资源" name="first">
                        <ul><?php $num = 0;?>
                            <?php $__currentLoopData = $timu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $num++;?>
                            <?php if($num < 6): ?>
                            <li class="el_tab_content">
                                <span class="el_tab_content-l">
                                    <?php echo e($tm->ar_title); ?>

                                </span>
                                <span class="el_tab_content-r"><?php echo e(substr($tm->ar_time,0,10)); ?></span>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </el-tab-pane>
                    <?php $nums = 0;?>
                    <?php $nums2 = 0;?>
                    <?php $__currentLoopData = $zhiyuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($zy->dh_status == '0'): ?>
                            <?php $nums2++;?>
                            <?php if($nums2 < 6): ?>
                            <el-tab-pane label="<?php echo e($zy->dh_Navigationbar); ?>" name="second<?php echo e($zy->dh_id); ?>">
                                <ul>
                                    <?php $__currentLoopData = $timu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($tm->ar_pid  ==  $zy->dh_id): ?>
                                            <li class="el_tab_content">
                                                <span class="el_tab_content-l">
                                                    <?php echo e($tm->ar_title); ?>

                                                </span>
                                                <span class="el_tab_content-r"></span>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </el-tab-pane>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    
                    
                </el-tabs>
            </div>
        </section>
        <section class="msg_box">
            <div class="msg_box_title">
                <span class="msg_box_title_l"><img src="/phone/img/sj.png" style="margin: 0 .1rem">热门文章</span>
                <span class="msg_box_title_r"><a href="#">更多   > </a></span>
            </div>
            <div class="msg_box_tab_content">
                <el-tabs v-model="activeName3" type="card" >
                    <?php $__currentLoopData = $zhiyuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($zy->dh_status == '1'): ?>
                    <el-tab-pane label="<?php echo e($zy->dh_Navigationbar); ?>" name="one<?php echo e($zy->dh_id); ?>">
                        <ul>
                            <?php $__currentLoopData = $timu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($zy->dh_id == $tm->ar_pid): ?>
                            <li class="el_tab_content">
                                <span class="el_tab_content-l">
                                    <?php echo e($tm->ar_title); ?>

                                </span>
                                <span class="el_tab_content-r"><?php echo e(substr($tm->ar_time,0,10)); ?></span>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </el-tab-pane>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </el-tabs>
            </div>
        </section>
        <section class="footer_yejiao">
            <div style="text-align: center;margin-top: 0.7rem;">
                <a href="">
                    <img src="/phone/img/ksdxs.png" width="100%" style="position: relative;top: -0.4rem;">
                </a>
            </div>
            <div class="footer_yejiao_text">
                <span style="color: rgb(49, 49, 49);">电脑版入口</span>
                <span style="margin: 0 .2rem;height: .35rem;overflow: hidden;">|</span>
                Copyright @ 2005 - 2017 delijiajiao.com
            </div>
        </section>
        <footer>
            <ul>
                <li>
                    <a href="/mobile">
                        <i class="footer_home footer_icon"></i>
                        <p>首页</p></a>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="footer_my footer_icon" style="width:.38rem;"></i>
                        <p>我的</p>
                    </a>
                </li>
                <li>
                        <i class="footer_zx footer_icon"></i>
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=1774932105&site=qq&menu=yes">
                        <p>在线咨询</p>
                    </a>

                </li>
                <li>
                        <i class="footer_phone footer_icon"></i>
                        <a href="tel:13113329950"><p>电话咨询</p></a>
                </li>
            </ul>
        </footer>
        <div class="return_top" @click="backTop" v-if="scroll>200">
            <img src="/phone/img/hddb.png" alt="" style="margin: .36rem 0 0 .2rem;width: .6rem;">
        </div>
        <div class="wx_icon_f" >
            <img src="/phone/img/fd_wx.png" alt="" style="margin: .3rem 0 0 .2rem;width: .6rem;">
        </div>
    </div>
    <style>
        .return_top {
            position: fixed;
            bottom: 1rem;
            right: .5rem;
            width: 1rem;
            height: 1rem;
            background: rgba(0, 0, 0, 0.54);
            border-radius: 50%;
        }
        .wx_icon_f {
            position: fixed;
            bottom: 2rem;
            right: .5rem;
            width: 1rem;
            height: 1rem;
            background: rgb(255, 190, 64);
            border-radius: 50%;
            margin-bottom: .2rem;
        }
    </style>
</body>
<script src="/phone/js/swiper-3.4.2.min.js"></script>
<script src="/phone/js/vue.js"></script>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/phone/js/ele.js"></script>
<script src="/phone/js/home_page.js"></script>
<script>

    var app = new Vue({
        el: '#app',
        data: {
            activeName2: 'first',
            activeName3: 'one',
            scroll:''
        },
        methods:{
            backTop: function (){
                if(this.scroll >= 500){
                    $('body,html').animate({ scrollTop: 0 }, 500);
                }
           },
            menu:function () {
                this.scroll = document.body.scrollTop;
            }
        },
        mounted:function () {
            window.addEventListener('scroll', this.menu)
        },
    })
    var swiper = new Swiper('.swiper-container',{
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
</script>
</html>
