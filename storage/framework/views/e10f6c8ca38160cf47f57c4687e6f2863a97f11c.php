<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <title>订单管理已接的预约</title>
    <link rel="stylesheet" href="/phone/lichengphonedl/css/ddgyjdyy.css">
    <link rel="stylesheet" href="/phone/lichengphonedl/css/swiper.css">
    <link rel="stylesheet" href="/phone/lichengphonedl/css/indexx.css">
    <link rel="stylesheet" href="/phone/lichengphonedl/css/artModal.css">
    <script src="/phone/lichengphonedl/js/jquery-1.11.3.js"></script>

    <script src="/phone/lichengphonedl/js/flexible.js"></script>
    <style>
        #time{
            font-size: .35rem;
            margin-top: .2rem;
            float: left;
            height: .58rem;

        }
        .tj{
            display: inline-block;
            float: right;
        }
        .tj>select{
            margin-top: .2rem;
            float: left;
            margin-right: .65rem;
            height: .68rem;
            font-size: .35rem;
        }
        #bc{
            font-size: .35rem;
            margin-top: .2rem;
            float: left;
            height: .65rem;
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
<body style="background-color: #F1F1F1">
<header>
    <img src="/phone/lichengphonedl/images/zuo.png" alt="" class="zuo">
    <span>订单管理</span>
    <img src="/phone/lichengphonedl/images/tc.png" alt="" class="rt tc">
    <div class="cler"></div>
</header>
<section>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <span class="skz" onclick="window.location.href='/mobile/tc_page.html'">新订单</span>
            </div>
            <div class="swiper-slide">
                <span class="skj" onclick="window.location.href='/mobile/tc_order1.html'">预约的单</span>
            </div>
            <div class="swiper-slide">
                <span class="apz  active" onclick="window.location.href='/mobile/tc_order4.html'">已接的单</span>
            </div>
            <div class="swiper-slide">
                <span class="skzz" onclick="window.location.href='/mobile/tc_order6.html'">正式授课</span>
            </div>
        </div>
        <div class="cler"></div>
    </div>
    <div class="sk">
        <a href="/mobile/tc_order4.html">试课中</a>
        <a href="/mobile/tc_order5.html">试课失败</a>
    </div>
    <?php $__currentLoopData = $skz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skzs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="lb" style="margin-top: 0">
        <div class="xy">
            <label for="">订单编号:</label>
            <span><?php echo e($skzs->id); ?></span>
            <a href="/mobile/xsinfo<?php echo e($skzs->id); ?>.html" class="rt">查看详情 <img src="/phone/lichengphonedl/images/gd@2x.png" alt="" class="rt"></a>
        </div>
        <div class="zy ly">
            <label for="">订单时间:</label>
            <span><?php echo e($skzs->sk_times); ?></span>
        </div>
        <div class="zy ly"  id="app">
            <label for="" style="display: inline-block">试课时间:<?php echo e($skzs->sk_times); ?></label>
            <!--<a href="javascript:void(0);">-->
              <!--点击修改-->
            <!--</a>-->
            <!--使用AJAX一部上传，我没写from表单，change事件-->
            <form action="/sktimes.html" method="POST" class="tj">
                <input type="date" name="sj" id="time" style="margin-right: .1rem;S">
                <input type="hidden" name="oid" id="o" value="<?php echo e($skzs->id); ?>">
                <input type="hidden" name="rid" id="r" value="<?php echo e($skzs->rid); ?>">
                <input type="hidden" name="tc_id" value="<?php echo e($skzs->tc_id); ?>">
                <select name="sjs" id='' style="margin-right: .1rem;">
                    <option value="上午">上午</option>
                    <option value="下午">下午</option>
                    <option value="晚上">晚上</option>
                    </select>
                <input type="submit" value="保存" name="" id="bc">
            </form>
            <!--<span>2017-08-09 上午</span>-->
            <div class="cler"></div>
        </div>
        <div class="zy ly">
            <label class="didian" for="">试课地点:<?php echo e($skzs->radd); ?></label>
            <a href="javascript:void(0);" class="ljtx" onclick="ljtx(<?php echo e($skzs->id); ?>);" >立即填写</a>
            <!--获取模态中的input值传到这个input的value里面-->
            <input type="text" value="" style="display: none;">
            <div class="cler"></div>
        </div>

        <!--modal-->
        <div class="modal">
            <form action="/tc_skadd.html" method="POST">
            <div class="modal-header" style="opacity: 1" id="modal<?php echo e($skzs->id); ?>">
               <div>
                   <h4>请输入您的地址：</h4>
               </div>
                <div>
                    <input type="text" name="add" placeholder="新地点" id="address" class="address">
                    <input type="hidden" name="rid" value="<?php echo e($skzs->rid); ?>">
                    <input type="hidden" name="tc_id" value="<?php echo e($skzs->tc_id); ?>">
                    <input type="hidden" name="oid" value="<?php echo e($skzs->id); ?>">
                </div>
                <div class="queren">
                    <input type="button" value="取消" class="qx">
                    <input type="submit" value="确认" style="background-color: #337AB7">
                </div>
            </div>
            </form>
        </div>
        <div class="ly wq" style="">
            <label for="">费用:</label><?php $q = $skzs->o_ts*$skzs->o_xs*$skzs->money ?>
            <div style="float: right">
                <p>课酬:<?php echo e($skzs->money*$skzs->o_xs); ?>元/次</p>
                <p>周课酬:<?php echo e($q); ?>元/周</p>
                <p>信息费:360元</p>
                <p>家长服务费:50元</p>
                <p>预付信息费:<?php if($skzs->o_ts == '1'): ?><?php echo e($q*$skzs->bfb1>300?'300':$q*$skzs->bfb1); ?><?php elseif($skzs->o_ts == '2'): ?><?php echo e($q*$skzs->bfb2>300?'300':$q*$skzs->bfb2); ?><?php elseif($skzs->o_ts == '3'): ?><?php echo e($q*$skzs->bfb3>300?'300':$q*$skzs->bfb3); ?><?php elseif($skzs->o_ts == '4'): ?><?php echo e($q*$skzs->bfb4>300?'300':$q*$skzs->bfb4); ?><?php elseif($skzs->o_ts == '5'): ?><?php echo e($q*$skzs->bfb5>300?'300':$q*$skzs->bfb5); ?><?php elseif($skzs->o_ts == '6'): ?><?php echo e($q*$skzs->bfb6>300?'300':$q*$skzs->bfb6); ?><?php elseif($skzs->o_ts == '7'): ?><?php echo e($q*$skzs->bfb7>300?'300':$q*$skzs->bfb7); ?><?php endif; ?>元</p>
                <p>成功后需要付信息费:<?php if($skzs->o_ts == '1'): ?>
                        <?php echo e($q*$skzs->bfb1 - ($q*$skzs->bfb1>300?'300':$q*$skzs->bfb1)); ?>

                    <?php elseif($skzs->o_ts == '2'): ?>
                        <?php echo e($q*$skzs->bfb2 - ($q*$skzs->bfb2>300?'300':$q*$skzs->bfb2)); ?>

                        
                    <?php elseif($skzs->o_ts == '3'): ?>
                        <?php echo e($q*$skzs->bfb3 - ($q*$skzs->bfb3>300?'300':$q*$skzs->bfb3)); ?>

                        
                    <?php elseif($skzs->o_ts == '4'): ?>
                        <?php echo e($q*$skzs->bfb4 - ($q*$skzs->bfb4>300?'300':$q*$skzs->bfb4)); ?>

                        
                    <?php elseif($skzs->o_ts == '5'): ?>
                        <?php echo e($q*$skzs->bfb5 - ($q*$skzs->bfb5>300?'300':$q*$skzs->bfb5)); ?>

                        
                    <?php elseif($skzs->o_ts == '6'): ?>
                        <?php echo e($q*$skzs->bfb6 - ($q*$skzs->bfb6>300?'300':$q*$skzs->bfb6)); ?>

                        
                    <?php elseif($skzs->o_ts == '7'): ?>
                        <?php echo e($q*$skzs->bfb7 - ($q*$skzs->bfb7>300?'300':$q*$skzs->bfb7)); ?>

                        
                    <?php endif; ?>元</p>
            </div>
            <div class="cler"></div>
        </div>
        
        <div class="zy ly">
            <label for="">介绍信/合同:</label>
            <a href="/hetong/<?php echo e($skzs->id); ?>.html">点击查看</a>
        </div>
        <div class="zy ly">
            <label for="">试课结果填写:</label>
            <a href="javascript:;" onclick="timeShow(<?php echo e($skzs->id); ?>,<?php echo e($skzs->rid); ?>,<?php echo e($skzs->tc_id); ?>)">试课不成功</a>
            <a href="">试课成功</a>
        </div>
        <div class="footer">
            
            <a class="btn2" href="">支付信息费</a>
            <a class="btn1 btnActive" href="">诚意金解锁</a>
            <a class="btn1" href="">申请退款</a>
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
</section>
<?php echo $__env->make('phonedl.float.float', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script src="/phone/lichengphonedl/js/zepto.js"></script>
<script src="/phone/lichengphonedl/js/swiper-3.4.2.min.js"></script>
<script src="/phone/lichengphonedl/js/jquery-1.11.3.js"></script>
<script src="/phone/lichengphonedl/js/artModal.js"></script>
<script type="text/javascript" src='/layer/layer.js'></script>

<script>
    $('.zuo').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
    $('.tc').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
    $('.shouye').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
    $('.center').on('tap',function () {
        window.location.href='http://www.baidu.com'
    })
  //  $('.ljtx').on('click',function(){
//        $('.modal').show(1000)
  //      $('div.modal-header').show(1500);

 //   });
    function ljtx(id){
//        alert(id);
        $('#modal'+id).show(1500);
    };

    $('.qx').on('tap',function () {
        $('div.modal-header').hide(1000)
    })
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
    function  qx(id){
        $('#fc'+id).hide()
        $('#fc_content'+id).hide()
    }

    function skcgFn(id){

        if($('#SKCG_input')[0].checked == true){
            $('#skcg_btn').show()
            $('#skbcg_btn').hide()
        }else{
            $('#skcg_btn').hide()
            $('#skbcg_btn').show()
        }

    }
</script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView:4,
        paginationClickable: true,
        spaceBetween: 30,
        freeMode: true
    });
</script>
</body>
</html>