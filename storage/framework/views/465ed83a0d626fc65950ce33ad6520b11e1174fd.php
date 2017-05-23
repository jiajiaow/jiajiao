<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <title>教员个人中心订单</title>
    <link rel="stylesheet" type="text/css" href="/new/css/cheng_css.css">
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/new/css/date.css">
    <link rel="stylesheet" href="/new/css/jedate.css">
    <script type="text/javascript" src='/new/js/jquery-2.2.3.min.js'></script>

    <script type="text/javascript" src='/new/js/jedate.js'></script>


    <style type="text/css">
        body,p,h1,h2,h3,h4,h5,h6,ul,li{
            margin:0;
            padding:0;
            list-style:none;
            color:#333;
        }
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
            background-color: #FACC40;
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
        li{
            list-style: none;
            padding: 10px 0;
        }
        .fc {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.41);
            top: 0;
            left: 0;
        }
        .fc_content {
            width: 400px;
            height: 500px;
            position: fixed;
            background: #fff;
            left: 50%;
            top: 50%;
            margin-left: -200px;
            margin-top: -250px;
        }


    </style>
</head>
<body>
<header>
    <div id="header">
        <div class="cheng_header">
            <div style="width:246px;height:100px;" class="lf">
                <div class="lf img-div">
                    <img class="img-size" src="/new/images/logo.png">
                </div>
                <div class="a-div rt">
                    <a href="" class="lf wenzi">德栗家教</a>
                    <div class="cheng_line"></div>
                    <a href="" class="lf wenzi">个人中心</a>
                </div>
            </div>
            <div class="rt" style="width:270px;float:right;height:100px;">
                <div class="xingxi">
                    <a href="/xueyuan.html" class="lf wenzi">最新学员信息</a>
                    <div class="cheng_line"></div>
                    <a href="/" class="lf wenzi">返回首页</a>
                    <div class="cheng_line"></div>
                    <a href="outlogin.html"><div class="glyphicon glyphicon-off tubiao"></div></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- 主体部分 -->
<div id="zhen_container">
    <!-- 侧导航 -->
    <div class="cheng_nav">
        <ul class="bian_nav">
            
            <li class="cheng_active">
                <i class='cheng_two'></i>
                <span><a href="/tc_order1.html"></a>订单管理</span>
            </li>
            
        </ul>
    </div>
    <!-- 侧导航结束 -->
    <!--nav 开始 -->
    <div class="cheng_body" style="width:954px;">
        <div>
            <!-- 中间部分的上 -->
            <div class='j_toubu'>
                <img src="/new/images/dindan.png">
                <span>教员新订单</span>
            </div>
            <!-- 中间部分的中 -->
            <div class="j_zj">
                <div class="j_zj">
                    <iframe id="mainFrame" name="mainFrame" scrolling="no" src="<?php echo e(URL('tc_page.html')); ?>" frameborder="0" style="padding: 0px; width: 100%; height: 370px;"></iframe>
                </div>
            </div>

            <!-- 中间部分的下 -->
            <div class="c_bannar" style="margin-top:58px;">
                <a href="/tc_order1.html"><span><font color="#000">我预约的单</font></span></a>
                <a href="/tc_order4.html"><span class='cheng_item'><font color="#000">我已接的单</font></span></a>
                <a href="/tc_order6.html"><span><font color="#000">成功的单</font></span></a>
            </div>
            <!--  -->
            <div class="zqm_yuyuejy clear">
                <div class="left">
                    <a href="/tc_order4.html"><div class="cb"  style="font-size:14px;">试<br/>课<br/>中</div></a>
                    <a href="/tc_order5.html"><div class="cbv" style="font-size:14px;">试<br/>课<br/>失<br/>败</div></a>
                </div>
                <?php $__currentLoopData = $skz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skzs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="right dd_length clear">
                        <div class="bk zqm">
                            <div class="left">订单编号</div>
                            <div class="right"><?php echo e($skzs->id); ?><a href="/xsinfo<?php echo e($skzs->id); ?>.html" target="_blank"><font color="#FF0000">(查看订单详情)</font></a></div>
                        </div>
                        <div class="bk">
                            <div class="left">接单时间</div><?php date_default_timezone_set('Asia/Shanghai'); ?>
                            <div class="right"><?php echo e(date("Y-m-d h:i:s",$skzs->jd_times)); ?></div>
                        </div>
                        <div class="bk zqm">
                            <div class="left">试课时间</div>

                            <div class="right datep">
                                <span style="font-size: 12px;"><?php echo e($skzs->sk_times); ?></span>
                                <form action="/sktimes.html" method="post" style="display: inline-block">
                                    <input class="datainp" id="dateinfo<?php echo e($skzs->id); ?>" name="sj" placeholder="请选择" readonly="" type="text">
                                    <input type="hidden" name="oid" id="o" value="<?php echo e($skzs->id); ?>">
                                    <input type="hidden" name="rid" id="r" value="<?php echo e($skzs->rid); ?>">
                                    <input type="hidden" name="tc_id" value="<?php echo e($skzs->tc_id); ?>">
                                    <select name="sjs" id="">
                                        <option value="上午">上午</option>
                                        <option value="下午">下午</option>
                                        <option value="晚上">晚上</option>
                                    </select>
                                    <div id="jedatebox" class="jedatebox" style="z-index: 999; display: none; left: 50px; top: 1px;"></div>
                                    <button type="submit" style="
																      height: 40px;
																      width: 88px;
																      display: inline-block;
																      margin-top: 5px;
																      position: relative;
																      line-height: 5px;
																      float: right;
																      font-size: 18px;
																   "class="tj_Btn">修改</button>
                                </form>
                            </div>
                            <script type="text/javascript">
                                jeDate({
                                    dateCell:"#dateinfo<?php echo e($skzs->id); ?>",
                                    format:"YYYY年MM月DD日 hh:mm:ss",
                                    isinitVal:true,
                                    isTime:true, //isClear:false,
                                    minDate:"2014-09-19 00:00:00",
                                })
                            </script>
                        </div>
                        <div class="bk">
                            <div class="left">试课地点</div>
                            <div class="right">
                                <form action="/tc_skadd.html" method="post">
                                    <input type="hidden" name="rid" value="<?php echo e($skzs->rid); ?>">
                                    <input type="hidden" name="tc_id" value="<?php echo e($skzs->tc_id); ?>">
                                    <input type="hidden" name="oid" value="<?php echo e($skzs->id); ?>">
                                    <input name="add" id="jy_adres" type="text" style="width: 82%;height: 29px;border: none;"  value="<?php echo e($skzs->radd); ?>"/>
                                    <button type="submit" style="
																      height: 40px;
																      width: 88px;
																      display: inline-block;
																      margin-top: 5px;
																      position: relative;
																      line-height: 5px;
																      float: right;
																      font-size: 18px;
																   "
                                            class="tj_Btn"}
                                    >修改</button>
                                </form>
                            </div>
                        </div>
                        <div class="bk">
                            <div class="left">试课结果填写</div>
                            <div class="right">
                                <div style="height: 40px;" class="yesno">
                                    <?php if($skzs->jy_qz == '1' && $skzs-> xy_qz =='1' || $skzs->jy_qz == '1' && $skzs-> xy_qz =='2'): ?>
                                        <a class="cg" id="cg<?php echo e($skzs->id); ?>">试课成功</a>
                                    <?php else: ?>
                                        <a onclick="skcgs()"  href="/hetong/<?php echo e($skzs->id); ?>.html">试课成功</a>
                                        <a onclick="timeShow(<?php echo e($skzs->id); ?>,<?php echo e($skzs->rid); ?>,<?php echo e($skzs->tc_id); ?>)">试课不成功</a>
                                    <?php endif; ?>
                                </div></div>
                        </div>
                        <div class="bk">
                            <div class="left">介绍信/合同</div>
                            <div class="right"><a href="/hetong/<?php echo e($skzs->id); ?>.html"><font color="#FF0000">查看电子介绍信/合同</font></a></div>
                        </div>
                        <div class="bk5" style="height: 200px;line-height: 200px;"><?php $q = $skzs->o_ts*$skzs->o_xs*$skzs->money ?>
                            <div class="left1">课酬/信息费</div>
                            <div class="right1">
                                <div class="pm zqm">
                                    <div class="left">
                                        课酬：<?php echo e($skzs->money*$skzs->o_xs); ?>元/次
                                    </div>
                                    <div class="right">
                                        需补/需退信息费：
                                        <span class="xbxxf" id="<?php echo e($skzs->id); ?>">
                                            <?php if($skzs->pay_zt2 == '1'): ?>
                                                <?php if($skzs->o_ts == '1'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb1-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '2'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb2-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '3'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb3-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '4'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb4-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '5'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb5-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '6'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb6-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '7'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb7-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)); ?>

                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if($skzs->o_ts == '1'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb1-($skzs->xxf))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '2'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb2-($skzs->xxf))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '3'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb3-($skzs->xxf))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '4'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb4-($skzs->xxf))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '5'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb5-($skzs->xxf))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '6'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb6-($skzs->xxf))+$skzs->ytxxf)); ?>

                                                <?php elseif($skzs->o_ts == '7'): ?>
                                                    <?php echo e(round(($q*$skzs->bfb7-($skzs->xxf))+$skzs->ytxxf)); ?>

                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </span>元
                                    </div>
                                </div>
                                <div class="pm">
                                    <div class="left">
                                        周课酬：<?php echo e($q); ?>元/周
                                    </div>
                                    <div class="right">
                                        已退信息费：<?php echo e($skzs->ytxxf); ?>元
                                    </div>
                                </div>
                                <div class="pm zqm">
                                    <div class="left">
                                        
                                        信息费：<?php if($skzs->o_ts == '1'): ?><?php echo e(($q*$skzs->bfb1)*$skzs->zk); ?><?php elseif($skzs->o_ts == '2'): ?><?php echo e(($q*$skzs->bfb2)*$skzs->zk); ?><?php elseif($skzs->o_ts == '3'): ?><?php echo e(($q*$skzs->bfb3)*$skzs->zk); ?><?php elseif($skzs->o_ts == '4'): ?><?php echo e(($q*$skzs->bfb4)*$skzs->zk); ?><?php elseif($skzs->o_ts == '5'): ?><?php echo e(($q*$skzs->bfb5)*$skzs->zk); ?><?php elseif($skzs->o_ts == '6'): ?><?php echo e(($q*$skzs->bfb6)*$skzs->zk); ?><?php elseif($skzs->o_ts == '7'): ?><?php echo e(($q*$skzs->bfb7)*$skzs->zk); ?><?php endif; ?>元
                                    </div>
                                    <div class="left">
                                        家长服务费：<?php echo e($skzs->fz_jzxxf); ?>元
                                    </div>
                                    
                                </div>
                                
                                <div class="pm">
                                    <div class="left">
                                        已预付信息费：
                                        
                                        <?php if($skzs->pay_zt2 == '1'): ?>
                                        <?php echo e($skzs->xxf+$skzs->xxf2); ?>元
                                        <?php else: ?>
                                            <?php echo e($skzs->xxf); ?>元
                                        <?php endif; ?>
                                    </div>
                                    <div class="right">
                                        本单实际信息费：<?php if($skzs->o_ts == '1'): ?><?php echo e($q*$skzs->bfb1); ?><?php elseif($skzs->o_ts == '2'): ?><?php echo e($q*$skzs->bfb2); ?><?php elseif($skzs->o_ts == '3'): ?><?php echo e($q*$skzs->bfb3); ?><?php elseif($skzs->o_ts == '4'): ?><?php echo e($q*$skzs->bfb4); ?><?php elseif($skzs->o_ts == '5'): ?><?php echo e($q*$skzs->bfb5); ?><?php elseif($skzs->o_ts == '6'): ?><?php echo e($q*$skzs->bfb6); ?><?php elseif($skzs->o_ts == '7'): ?><?php echo e($q*$skzs->bfb7); ?><?php endif; ?>元
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bk2">
                            <span style="margin-left: 60px;margin-right: 60px;"  onclick="timeShow(<?php echo e($skzs->id); ?>,<?php echo e($skzs->rid); ?>,<?php echo e($skzs->tc_id); ?>)" target="_blank"><font color="#000" id="haha">申请退款</font></span>|
                            <a style="margin-left: 60px;margin-right: 60px;" onclick="zf(this,<?php echo e($skzs->id); ?>,<?php echo e($skzs->rid); ?>,<?php echo e($skzs->tc_id); ?>)" class="xxf_btn"><font color="#000">支付信息费</font></a>|
                            <a style="margin-left: 60px;margin-right: 60px;" href="" target="_blank"><font color="#FF0000">收付款记录</font></a>|
                            <a style="margin-left:30px;margin-right: 30px;" href="javascript:;" onclick="sc(<?php echo e($skzs->id); ?>,<?php echo e($skzs->money*$skzs->o_xs-($skzs->xxf+$skzs->xxf2)); ?>,<?php echo e($skzs->jy_qz); ?>,<?php echo e($skzs->xy_qz); ?>,<?php echo e($skzs->tc_id); ?>)"><font color="#FF0000">审查订单</font></a>
                        </div>
                    </div>
                    <div class="fc" id="fc<?php echo e($skzs->id); ?>" style="display: none;"></div>
                    <div class="fc_content" id="fc_content<?php echo e($skzs->id); ?>" style="display: none;">
                        <form method="post" action="/sqtk.html">
                            <input type="hidden" name="oid" id="oid<?php echo e($skzs->id); ?>" value="">
                            <input type="hidden" name="rid" id="rid<?php echo e($skzs->id); ?>" value="">
                            <input type="hidden" name="tc_id" id="tc_id<?php echo e($skzs->id); ?>" value="">
                            <div style="padding: 10px 32px;">
                                <ul >
                                    <li><p><input name="Fruit" id="SKCG_input" type="radio" value="1" onclick="skcgFn(<?php echo e($skzs->id); ?>)" />试课成功</p></li>
                                    <li><p>周薪酬减少　
                                            <?php echo e($skzs->money2*$skzs->o_xs2*$skzs->o_ts2-$skzs->money*$skzs->o_xs*$skzs->o_ts); ?>

                                            <span class="seeMar"><!--<input type="text" name="kc">--></span>申请信息费退款　
                                            <?php if($skzs->pay_zt2 == '1'): ?>
                                                <?php if($skzs->o_ts == '1'): ?>
                                                    <?php if(round(($q*$skzs->bfb1-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb1-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '2'): ?>
                                                    <?php if(round(($q*$skzs->bfb2-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb2-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '3'): ?>
                                                    <?php if(round(($q*$skzs->bfb3-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb3-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '4'): ?>
                                                    <?php if(round(($q*$skzs->bfb4-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb4-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '5'): ?>
                                                    <?php if(round(($q*$skzs->bfb5-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb5-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '6'): ?>
                                                    <?php if(round(($q*$skzs->bfb6-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb6-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '7'): ?>
                                                    <?php if(round(($q*$skzs->bfb7-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb7-($skzs->xxf+$skzs->xxf2))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if($skzs->o_ts == '1'): ?>
                                                    <?php if(round(($q*$skzs->bfb1-($skzs->xxf))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb1-($skzs->xxf))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '2'): ?>
                                                    <?php if(round(($q*$skzs->bfb2-($skzs->xxf))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb2-($skzs->xxf))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '3'): ?>
                                                    <?php if(round(($q*$skzs->bfb3-($skzs->xxf))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb3-($skzs->xxf))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '4'): ?>
                                                    <?php if(round(($q*$skzs->bfb4-($skzs->xxf))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb4-($skzs->xxf))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '5'): ?>
                                                    <?php if(round(($q*$skzs->bfb5-($skzs->xxf))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb5-($skzs->xxf))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '6'): ?>
                                                    <?php if(round(($q*$skzs->bfb6-($skzs->xxf))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb6-($skzs->xxf))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php elseif($skzs->o_ts == '7'): ?>
                                                    <?php if(round(($q*$skzs->bfb7-($skzs->xxf))+$skzs->ytxxf) <= 0): ?>
                                                        <?php echo e(round(($q*$skzs->bfb7-($skzs->xxf))+$skzs->ytxxf)*-1); ?>

                                                    <?php else: ?>
                                                        0元
                                                    <?php endif; ?>
                                                <?php endif; ?>

                                            <?php endif; ?>
                                        </p>
                                    </li>
                                    <li><input name="Fruit" type="radio" value="2" onclick="skcgFn(<?php echo e($skzs->id); ?>)" />试课不成功</li>
                                    <li>
                                        <p>申请信息费退款<span class="seeMar">
                                                <input type="" name="xxftk" style="width:55px">
                                                </span>
                                           已收课酬 <input  style="width:55px; margin-left:10px;" type="text" name="yskc" >
                                        </p>
                                    </li>
                                    <li>是否试课
                                        <select id="ok_no<?php echo e($skzs->id); ?>" name="sfsk">
                                            <option value="已试课">已试课</option>
                                            <option value="尚未试课">尚未试课</option>
                                        </select>
                                    </li>
                                    <li>不成功类型
                                        <select id="renyuan<?php echo e($skzs->id); ?>" name="nocglx">
                                            <option value="家长原因">家长原因</option>
                                            <option value="教员原因">教员原因</option>
                                        </select>
                                    </li>
                                    <li>
                                        <p>原因
                                            <select id="no_xueyuan<?php echo e($skzs->id); ?>" style="display:none; width:360px;" name="yuanyin" >
                                                <option value="家长已经找到老师了">家长已经找到老师了</option>
                                                <option value="家长还是选择了去上辅导班（未试课）">家长还是选择了去上辅导班（未试课）</option>
                                                <option value="家长临时不要而未能试课">家长临时不要而未能试课</option>
                                                <option value="家长的要求与订单不符，经协调不合适未去试课">家长的要求与订单不符，经协调不合适未去试课</option>
                                                <option value="家长/学生因为课程的变动不试课">家长/学生因为课程的变动不试课</option>
                                                <option value="学员暂时不接受家教未能试课">学员暂时不接受家教未能试课</option>
                                                <option value="家长一个星期后未联系">家长一个星期后未联系上</option>
                                                <option value="家长一个星期后还无法确认试课时间">家长一个星期后还无法确认试课时间</option>
                                                <option value="家长想换个性别（男/女）的老师（未试课）">家长想换个性别（男/女）的老师（未试课）</option>
                                                <option value="家长想换个更好学校或者更合适专业的老师（未试课）">家长想换个更好学校或者更合适专业的老师（未试课）</option>
                                                <option value="家长想换个专职老师/或者原来是专职老师，想试试大学生（未试课）">家长想换个专职老师/或者原来是专职老师，想试试大学生（未试课）</option>
                                                <option value="其他（请在备注中说明情况）"></option>
                                            </select>
                                            <select id="ok_xueyuan<?php echo e($skzs->id); ?>" style="display:none;width:360px;" name="yuanyin">
                                                <option value="学员暂时不太适应家教试课不成功">学员暂时不太适应家教试课不成功</option>
                                                <option value="家长还是选择了去上辅导班（已试课）">家长还是选择了去上辅导班（已试课）</option>
                                                <option value="家长试课后想换个更好学校或者更合适专业的老师（已试课）">家长试课后想换个更好学校或者更合适专业的老师（已试课）</option>
                                                <option value="家长想换个专职老师/或者原来是专职老师，想试试大学生（已试课）">家长想换个专职老师/或者原来是专职老师，想试试大学生（已试课）</option>
                                                <option value="家长试课后家长想换个性别（男/女）的老师（已试课）">家长试课后家长想换个性别（男/女）的老师（已试课）</option>
                                            </select>
                                            <select id="no_jiaoyuan<?php echo e($skzs->id); ?>" style="display:none;width:360px;" name="yuanyin">
                                                <option value="教员个人原因去不了试课">教员个人原因去不了试课</option>
                                                <option value="学员的要求较高，教员无法胜任">学员的要求较高，教员无法胜任</option>
                                            </select>

                                            <select id="ok_jiaoyuan<?php echo e($skzs->id); ?>" style="display:none;width:360px;" name="yuanyin">
                                                <option value="教员个人原因以后没法上课">教员个人原因以后没法上课</option>
                                                <option value="教员迟到、上课时玩手机、一直在提钱、态度不好">教员迟到、上课时玩手机、一直在提钱、态度不好</option>
                                                <option value="教员不认真备课和准备，对孩子不负责">教员不认真备课和准备，对孩子不负责</option>
                                                <option value="教员能力有限，带不了孩子">教员能力有限，带不了孩子</option>
                                                <option value="教员试课后家长不满意（除以上项目以外的）">教员试课后家长不满意（除以上项目以外的）</option>
                                            </select>
                                        </p>


                                    </li>
                                    <li>
                                        <span style="vertical-align: top" name="bz">备注</span>
                                        <input style="margin: 0px; width: 334px; height: 68px;" name="bz"/>
                                    </li>
                                    
                                        
                                    
                                    <li>
                                        <p id="skcg_btn">
                                            <?php if($skzs->jy_qz =='1'): ?>
                                                <?php if($skzs->tk_type == '6' || $skzs->tk_type == ''): ?>
                                                    <button style="margin-left: 110px;" type="submit"  >申请退款</button>
                                                <?php else: ?>
                                                    <span style="margin-left: 110px;" onclick="layer.alert('您已经提交过申请了!')" >申请退款</span>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                    <span style="margin-left: 110px;" onclick="layer.alert('请您先确认合同!')" >申请退款</span>
                                            <?php endif; ?><span class="seeMar"></span><span><span style="padding: 0 13px;"  class="qxBtn" onclick="qx(<?php echo e($skzs->id); ?>)">取消</span></span>
                                        </p>
                                        <p id="skbcg_btn" style="display: none">
                                            <?php if($skzs->tk_type == '6' || $skzs->tk_type == ''): ?>
                                                <button style="margin-left: 110px;" type="submit"  >申请退款</button>
                                            <?php else: ?>
                                                <span style="margin-left: 110px;" onclick="layer.alert('您已经提交过申请了!')" >申请退款</span>
                                            <?php endif; ?><span style="margin-left: 75px;"><span style="padding: 0 13px;"  class="qxBtn" onclick="qx(<?php echo e($skzs->id); ?>)">取消</span></span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>


                    <script>
                        $('#ok_no<?php echo e($skzs->id); ?>' ).change(function(){
                            var ok_no = $('#ok_no<?php echo e($skzs->id); ?> option:selected').val()
                            var renyuan =$('#renyuan<?php echo e($skzs->id); ?> option:selected').val()
                            if(renyuan == '家长原因' & ok_no == '已试课'){
                                $('#ok_xueyuan<?php echo e($skzs->id); ?>').show()
                                $('#ok_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_xueyuan<?php echo e($skzs->id); ?>').hide()
                            }
                            if(renyuan == '家长原因' & ok_no == '尚未试课'){
                                $('#ok_xueyuan<?php echo e($skzs->id); ?>').hide()
                                $('#ok_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_xueyuan<?php echo e($skzs->id); ?>').show()
                            }
                            if(renyuan == '教员原因' & ok_no == '已试课'){
                                $('#ok_xueyuan<?php echo e($skzs->id); ?>').hide()
                                $('#ok_jiaoyuan<?php echo e($skzs->id); ?>').show()
                                $('#no_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_xueyuan<?php echo e($skzs->id); ?>').hide()
                            }
                            if(renyuan == '教员原因' & ok_no == '尚未试课'){
                                $('#ok_xueyuan<?php echo e($skzs->id); ?>').hide()
                                $('#ok_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_jiaoyuan<?php echo e($skzs->id); ?>').show()
                                $('#no_xueyuan<?php echo e($skzs->id); ?>').hide()
                            }
                        })
                        $('#renyuan<?php echo e($skzs->id); ?>').change(function(){
                            var ok_no = $('#ok_no<?php echo e($skzs->id); ?> option:selected').val()
                            var renyuan =$('#renyuan<?php echo e($skzs->id); ?> option:selected').val()
                            if(renyuan == '家长原因' & ok_no == '已试课'){
                                $('#ok_xueyuan<?php echo e($skzs->id); ?>').show()
                                $('#ok_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_xueyuan<?php echo e($skzs->id); ?>').hide()
                            }
                            if(renyuan == '家长原因' & ok_no == '尚未试课'){
                                $('#ok_xueyuan<?php echo e($skzs->id); ?>').hide()
                                $('#ok_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_xueyuan<?php echo e($skzs->id); ?>').show()
                            }
                            if(renyuan == '教员原因' & ok_no == '已试课'){
                                $('#ok_xueyuan<?php echo e($skzs->id); ?>').hide()
                                $('#ok_jiaoyuan<?php echo e($skzs->id); ?>').show()
                                $('#no_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_xueyuan<?php echo e($skzs->id); ?>').hide()
                            }
                            if(renyuan == '教员原因' & ok_no == '尚未试课'){
                                $('#ok_xueyuan<?php echo e($skzs->id); ?>').hide()
                                $('#ok_jiaoyuan<?php echo e($skzs->id); ?>').hide()
                                $('#no_jiaoyuan<?php echo e($skzs->id); ?>').show()
                                $('#no_xueyuan<?php echo e($skzs->id); ?>').hide()
                            }
                        })



                    </script>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!--  -->
            </div>
            <div id="fudong"></div>
            <div class="c_yejiao" style="width: 954px;">
                <?php if($skz->num > 0): ?>
                    <a href="<?php echo e($skz->Url($skz->LastPage())); ?>">末页</a>
                    <a href="<?php echo e($skz->Url($skz->next)); ?>">下一页</a>
                    <a href="<?php echo e($skz->Url($skz->last)); ?>">上一页</a>
                    <a href="<?php echo e($skz->Url(1)); ?>">首页</a>
                    
                <?php endif; ?>
            </div>
        </div>
        <form action="" method="post" id="zf">
            <input type="hidden" id="m" name ="xxf" value="">
            <input type="hidden" id="i" name ="order_id" value="">
            <input type="hidden" id="z" name ="rid" value="">
            <input type="hidden" id="tid" name ="tid" value="">
            <input type="hidden" id="b" name ="b" value="b">
        </form>
    </div></div>
<!-- 清楚浮动影响高度为0 这个很重要-->
<div id="jedatebox" class="jedatebox" style="z-index: 999;"></div>
<div id="fudong"></div>

<div id="datePlugin"></div>

<style>
    .fc {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.41);
        top: 0;
        left: 0;
    }
    .fc_content {
        width: 470px;
        height: 500px;
        position: fixed;
        background: #fff;
        left: 50%;
        top: 50%;
        margin-left: -235px;
        margin-top: -250px;
        padding-bottom: 14px;
    }
    .seeMar{
        margin: 0 27px;
    }
</style>
<footer style='background-color:#333'>
    <div class="footer" style="width:1200px;margin:auto;">
        Copyright　2005-2017　广州学求易教育咨询有限公司　版权所有　<a style="color: #ccc;" href="http://www.miitbeian.gov.cn/" target="_blank">粤ＩＰＣ备：16062097号</a>
    </div>

</footer>
<script type="text/javascript" src='/new/js/script_cheng.js'></script>
<script type="text/javascript" src='/new/js/date.js'></script>
<script type="text/javascript" src='/layer/layer.js'></script>

<script>

    function skcgFn(id){

        if($('#SKCG_input')[0].checked == true){
            $('#skcg_btn').show()
            $('#skbcg_btn').hide()
        }else{
            $('#skcg_btn').hide()
            $('#skbcg_btn').show()
        }

    }


    //审查订单
    function sc(oid,money,jy_qz,xy_qz,tc_id){
       // alert(oid);
        //alert(money);
        //alert(jy_qz);
       // alert(xy_qz);
        if(money > 0){
            layer.alert('尊敬的教员,您需补交剩余信息费!',{icon: 3});
            return false;
        }else if(jy_qz == '0'){
            layer.alert('尊敬的教员,您稍未确认合同!',{icon: 3});
            return false;
        }else if(xy_qz == '0'){
            layer.alert('尊敬的教员,学员稍未确认合同!',{icon: 3});
            return false;
        }else if(jy_qz == '1' && xy_qz == '1' && money == '0'){
            layer.alert('尊敬的教员,您已经成功签约订单!',{icon: 3});
            $.ajax({
                type:'POST',
                url:"<?php echo e(URL('/dosc.html')); ?>",
                contentType:"application/x-www-form-urlencoded; charset=utf8",
                data:{"oid":oid,"tc_id":tc_id},
                /*dataType:'JSON',*/
                success:(function(result){
                    if(result == 'y'){
                        location.reload();
                    }
                }),
                error:(function(result,status){
                    larye.alert('sb!');
                })

            });

        }
    }
    $(function(){
        $('#beginTime').date();
        $('#endTime').date({theme:"datetime"});

    });
    function timeShow(id,rid,tc_id){
//        alert(id);
//        alert(rid);
//        alert(tc_id);
        $('#fc'+id).show(500)
        $('#fc_content'+id).show(500)
        $('#oid'+id).val(id);
        $('#rid'+id).val(rid)
        $('#tc_id'+id).val(tc_id)
    }
    $('.fc').click(function(){
        $('.fc').hide(500)
        $('.fc_content').hide(500)
    })
    $('.sure_btn').click(function(){
        $('.fc').hide(500)
        $('.fc_content').hide(500)
        var a = $('.sure_gou').find('input')
        for(var i=0;i< a.length;i++){
            if(a[i].checked==true){
                var b =a[i].
                $('.block_time').html()
            }
        }

    })



    $('.timeShow').click(function(){
        $('.fc').show(500)
        $('.fc_content').show(500)
    })
    $('.fc').click(function(){
        $('.fc').hide(500)
        $('.fc_content').hide(500)
    })
    $('.sure_btn').click(function(){
        $('.fc').hide(500)
        $('.fc_content').hide(500)
        var a = $('.sure_gou').find('input')
        for(var i=0;i< a.length;i++){
            if(a[i].checked==true){
                var b =a[i].
                $('.block_time').html()
            }
        }

    })
    <?php if(session("msg")): ?>
        layer.alert('<?php echo e(session("msg")); ?>',{icon: 6});
    <?php endif; ?>

    function skcg(){
        layer.confirm('请联系我们。', {
            btn: ['确定','取消'] //按钮
        }, function(){
            window.location.href='/contact.html';
        }, function(){

        });
    }
    $('.xxf_btn').click(function(){
        if($('.xbxxf').text() <0){
            //alert('1')
            return false;
        }
        $.get('/','')
    })
    $('.xbxxf').click(function(){

    })

    function zf(obj,id,rid,tid){
        //alert(rid);
        var money = $('#'+id).html();
        //alert(Math.round(money));
        if(money < 0){
            //alert('需退款!');
            return false;
        }
//        if($('#cg'+id).html() !='试课成功'){
//            alert('学员未确定试课');
//            return false
//        }else{
//            alert('试课成功并且不需要补钱');
//        }
        $('#m').val(money);
        $('#i').val(id);
        $('#z').val(rid);
        $('#tid').val(tid);
        var path = "xxf.html";
        $('#zf').attr("action", path).submit();
    }
    var cg = $('.cg').html()



    function skbcg(id){
        $('#fc'+id).show(500)
        $('#fc_content'+id).show(500)
    }
    var bkzqm = $('.dd_length');
    for(var i = 0;i<bkzqm.length;i++){
//        $.trim console.log( bkzqm.eq(i).find(".yesno").text())
//        console.log( bkzqm.eq(i).find(".xbxxf").text())
      var a  =  $.trim(bkzqm.eq(i).find(".yesno").text())
      var xbxxf =   $.trim(bkzqm.eq(i).find(".xbxxf").text())

        bkzqm.eq(i).find("#o").val()
        bkzqm.eq(i).find("#r").val()
        if(a == '试课成功' && xbxxf == '0'){
            bkzqm.eq(i).find("#o").val()
            bkzqm.eq(i).find("#r").val()
            $.ajax({
                type:'POST',
                url:"<?php echo e(URL('/doscs.html')); ?>",
                contentType:"application/x-www-form-urlencoded; charset=utf8",
                data:{"oid":bkzqm.eq(i).find("#o").val(),"id":bkzqm.eq(i).find("#r").val()},
                /*dataType:'JSON',*/
                success:(function(result){
                    location.reload();
                    console.log()
                }),
                error:(function(result,status){
                    larye.alert('sb!');
                })

            });
        }
    }

    function  qx(id){
        $('#fc'+id).hide()
        $('#fc_content'+id).hide()
    }
//    function ifsq(id){
//        let sqtk = $('#sqtk');
//        var bkzqm = $('.zqm_yuyuejy').find('#fc_content'+id)
//        for(var i = 0;i<bkzqm.length;i++){
//          var seradio =   bkzqm.eq(i).find('input[type="radio"]')
//            if(seradio[i].checked == true){
//
//            }else{
//                $('#sqtk').click(function(){alert('1')})
//            }
//        }
//    }
</script>
<script>
//    let sqtk = $('#sqtk');
//    $('#haha').click(function(){
//        alert(1)
//        let xz = $('input[name="Fruit"]');
//        for(var i=0;i<xz.length;i++){
//            if(xz[i].checked ==true){
//                sqtk.removeAttr('disabled');
//            }
//        }
//    })

</script>
</body>
</html>
