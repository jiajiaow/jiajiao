<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 教员库</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12" style="overflow: scroll;">
            <div class="ibox float-e-margins" style="overflow: scroll;">
                <div class="ibox-title">
                    <h5>学员订单 <small>当前屏蔽订单<span style="color:red;"><?php echo e($num); ?></span></small></h5>

                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                        <tr align="center">
                            <th>订单类型</th>
                            <th>用户信息</th>
                            <th>联系方式</th>
                            <th>需改需求信息</th>
                            <th>财务部分</th>
                            <th>订单状态</th>
                        </tr>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $re): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr valign="top" align="center" <?php if($re->status == '3'): ?> style="color:red;" <?php endif; ?>>
                            <td>
                                <form action="/admin/orderjc" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="id" value="<?php echo e($re->id); ?>">
                                    <div>
                                        <p>城市:<?php echo e($re->city_name); ?><?php echo e($re->city_id); ?><span class="no_ne"></span></p>
                                        <p>签约:
                                            <select name="tc_Signing">
                                                <option value="是" <?php if($re->tc_Signing == '是'): ?> selected = "selected" <?php endif; ?>>是</option>
                                                <option value="否"<?php if($re->tc_Signing == '否'): ?> selected = "selected" <?php endif; ?>>否</option>
                                            </select>
                                            <span class="no_ne"></span>
                                        </p>
                                        <p>入口:
                                            <select name="wzly">
                                                <option value="栗志">栗志 </option>
                                                <option value="德栗">德栗</option>
                                                <option value="思敏">思敏</option>
                                                <option value="教员介绍">教员介绍</option>
                                                <option value="老家长">老家长</option>
                                            </select>
                                            <span class="no_ne"></span>
                                        </p>
                                        <p>客户:
                                            <select name="khly">
                                                <option value="栗志">栗志</option>
                                                <option value="德栗">德栗</option>
                                                <option value="思敏">思敏</option>
                                                <option value="教员介绍">教员介绍</option>
                                                <option value="老家长">老家长</option>
                                            </select>
                                            <span class="no_ne"></span>
                                        </p>
                                        <p>状态:
                                            <select name="ddzt" autocomplete="off">
                                                <option value="正常" <?php echo e($re->ddzt=='正常(默认)'?'selected':''); ?>>正常(默认)</option>
                                                <option value="协助" <?php echo e($re->ddzt=='协助'?'selected':''); ?>>协助</option>
                                                <option value="求助单" <?php echo e($re->ddzt=='求助单'?'selected':''); ?>>求助单</option>
                                                <option value="特别关注" <?php echo e($re->ddzt=='特别关注'?'selected':''); ?>>特别关注</option>
                                            </select>
                                            <span class="no_ne"></span>
                                        </p>
                                        <p>学期:
                                            <select name="jqzt" autocomplete="off">
                                                <option value="学期中" <?php echo e($re->jqzt=='学期中'?'selected':''); ?>>学期中</option>
                                                <option value="暑假单" <?php echo e($re->jqzt=='暑假单'?'selected':''); ?>>暑假单</option>
                                                <option value="寒假单" <?php echo e($re->jqzt=='寒假单'?'selected':''); ?>>寒假单</option>
                                            </select>
                                            <span class="no_ne"></span>
                                        </p>
                                        <p>安排:
                                            <select name="ap">
                                                <option value="系统安排（默认）">系统安排（默认）</option>
                                                <option value="人工安排">人工安排</option>
                                                <option value="满足条件">满足条件</option>
                                            </select>
                                            <span class="no_ne"></span>
                                        </p>
                                        <p class="show_tj_btn"><span style="color: #c81623;">有限条件项目</span></p>
                                        <p><input type="submit" name="" value="修改"></p>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form action="/admin/orderxgyh" method="post">
                                    <input type="hidden" name="id" value="<?php echo e($re->id); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <div>
                                        <p>编号:<?php echo e($re->id); ?></p>
                                        <p>姓名:<input name="user_name" value="<?php echo e($re->user_name); ?>"></p>
                                        <p>学员姓名：<input type="text" name="" value="" style="width: 70px;"><span class="xyxm_btn">+</span></p>
                                        <p>时间:<?php echo e(date('Y-m-d H:i:s',$re->time)); ?></p>
                                        <p>学员等级:</p>
                                        <p style="position:relative; height: 20px;">
                                            <span style="float: left">学员备注:</span>
                                        </p>
                                        <p>
                                            <textarea class="bj_msg_A" style="display: block" name="yhbz"><?php echo e($re->yhbz); ?></textarea>
                                        </p>
                                        <p><input type="submit" value="修改"></p>
                                        <p>前台生成</p>
                                        <p>ip地址:广州</p>
                                        <p style="position:relative; height: 20px;">
                                            <span style="float: left">本单备注:</span>
                                            <span style="float: right" class="bj_btn">编辑</span>
                                        </p>
                                        <p>
                                            <textarea class="bj_msg" style="display: block" name="ddbz"><?php echo e($re->ddbz); ?></textarea>
                                        </p>
                                        <p><input type="submit" name="" value="修改"></p>
                                        <span class="no_ne"></span>
                                        <span class="no_ne"></span>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form action="/admin/orderxgyh" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="id" value="<?php echo e($re->id); ?>">
                                    <div>
                                        <p>电话:<?php echo e($re->user_phone); ?></p>
                                        <p>微信:<input type="text" name="wx" value="<?php echo e($re->wx); ?>"></p>
                                        <p>QQ:<input type="text" name="qq" value="<?php echo e($re->qq); ?>"></p>
                                        <p>年级:<input type="text" name="grade" value="<?php echo e($re->grade); ?>"></p>
                                        <p>文理科:<input type="text" name="wlk" value="<?php echo e($re->wlk); ?>"></p>
                                        <p>区域:<input type="text" name="dq" value="<?php echo e($re->dq); ?>"></p>
                                        <p>地址:<input type="text" name="xx_dz" value="<?php echo e($re->xx_dz); ?>"></p>
                                        <p>备用电话:<input type="text" name="user_byphone" value="<?php echo e($re->user_byphone); ?>"></p>
                                        <p>学员性别:<br>(1=男|2=女|3男女不限)<input type="text" name="user_sex" value="<?php echo e($re->user_sex); ?>"></p>
                                        <p><input type="submit" name="" value="修改"></p>
                                        <span class="no_ne"></span>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form action="/admin/orderyy" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="id" value="<?php echo e($re->id); ?>">
                                    <div>
                                        <p style="width: 324px;">辅导科目:<input type="text" value="<?php echo e($re->subject_id); ?>" name="subject_id">
                                            <br>是否需要专业辅导:
                                            <select name="tc_Signing">
                                                <option value="是"<?php if($re->tc_Signing == '是'): ?> selected = "selected" <?php endif; ?>>是</option>
                                                <option value="否" <?php if($re->tc_Signing == '否'): ?> selected = "selected" <?php endif; ?>>否</option>
                                            </select>
                                        </p>
                                        <p>辅导类型:<select name="fdlx" autocomplete="off">
                                                <option value="" >请选择</option>
                                                <option value="授课教学" <?php echo e($re->fdlx=='授课教学'?'selected':''); ?>>授课教学</option>
                                                <option value="作业辅导" <?php echo e($re->fdlx=='作业辅导'?'selected':''); ?>>作业辅导</option>
                                                <option value="讲解疑难" <?php echo e($re->fdlx=='讲解疑难'?'selected':''); ?>>讲解疑难</option>
                                            </select>
                                            接单教员：
                                        </p>
                                        
                                        <p>授课时间:<input type="text" name="sk_times" value="<?php echo e($re->sk_times); ?>" style="width:220px;"></p>
                                        <p>学员描述:<input type="text" name="user_situation" value="<?php echo e($re->user_situation); ?>" style="width:220px;"></p>
                                        <p>教员要求:<input type="text" name="teacher_info" value="<?php echo e($re->teacher_info); ?>" style="width:220px;"></p>

                                        <div>
                                            <div>
                                                <span>家长单价:<input type="text" name="money" value="<?php echo e($re->money); ?>"></span>
                                                <span>教员课酬:<input type="text" value="<?php echo e($re->money); ?>"> <span style="display: none">0.6</span></span>
                                            </div>
                                            <div>
                                                <span>每周天数:<input type="text" name="o_ts" value="<?php echo e($re->o_ts); ?>"></span>
                                                <span>每次小时:<input type="text" name="o_xs" value="<?php echo e($re->o_xs); ?>"> <span></span></span>
                                            </div>
                                            <?php if($re->tc_Signing == '否'): ?><?php echo e($re->money*$re->o_xs); ?><?php else: ?> 0 <?php endif; ?>
                                        </div>


                                        <p>性别要求:
                                            <select name="teacher_sex">
                                                <option value="1" <?php if($re->teacher_sex == '1'): ?> selected="selected" <?php endif; ?>>男</option>
                                                <option value="2" <?php if($re->teacher_sex == '2'): ?> selected="selected" <?php endif; ?>>女</option>
                                                <option value="3" <?php if($re->teacher_sex == '3'): ?> selected="selected" <?php endif; ?>>男女不限</option>
                                            </select>
                                            性质要求:<select name="ls_type">
                                                <option value="大学生家教" <?php if($re->ls_type == '大学生家教'): ?> selected="selected" <?php endif; ?>>大学生家教</option>
                                                <option value="专职老师" <?php if($re->ls_type == '专职老师'): ?> selected="selected" <?php endif; ?>>专职老师</option>
                                                <option value="大学生专职老师均可" <?php if($re->ls_type == '大学生专职老师均可'): ?> selected="selected" <?php endif; ?>>大学生专职老师均可</option>
                                            </select>
                                        </p>
                                        <p><input type="submit" name="" value="修改"></p>
                                        <span class="no_ne"></span>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <div><?php $q = $re->o_ts*$re->o_xs*$re->money ?>
                                    <p>周薪酬:<input type="text" value="<?php echo e($q); ?>" name="order_zkc"></p>
                                    <p>月薪酬:<input type="text" value="<?php if($re->o_ts == '1'): ?><?php echo e($q*4); ?><?php elseif($re->o_ts == '2'): ?><?php echo e($q*4); ?><?php elseif($re->o_ts == '3'): ?><?php echo e($q*4); ?><?php elseif($re->o_ts == '4'): ?><?php echo e($q*4); ?><?php elseif($re->o_ts == '5'): ?><?php echo e($q*4); ?><?php elseif($re->o_ts == '6'): ?><?php echo e($q*4); ?><?php elseif($re->o_ts == '7'): ?><?php echo e($q*4); ?><?php endif; ?>" name="order_ykc"></p>
                                    <p>折扣：<input type="text"></p>
                                    <p>预计总费用:<input type="text" value="<?php if($re->o_ts == '1'): ?><?php echo e($q*$re->bfb1+$re->fz_jzxxf); ?><?php elseif($re->o_ts == '2'): ?><?php echo e($q*$re->bfb2+$re->fz_jzxxf); ?><?php elseif($re->o_ts == '3'): ?><?php echo e($q*$re->bfb3+$re->fz_jzxxf); ?><?php elseif($re->o_ts == '4'): ?><?php echo e($q*$re->bfb4+$re->fz_jzxxf); ?><?php elseif($re->o_ts == '5'): ?><?php echo e($q*$re->bfb5+$re->fz_jzxxf); ?><?php elseif($re->o_ts == '6'): ?><?php echo e($q*$re->bfb6+$re->fz_jzxxf); ?><?php elseif($re->o_ts == '7'): ?><?php echo e($q*$re->bfb7+$re->fz_jzxxf); ?><?php endif; ?>"name="money" style="width: 60px;"></p>
                                    <p>预计信息费:<input type="text" name="order_xxf" value="<?php if($re->o_ts == '1'): ?><?php echo e($q*$re->bfb1); ?><?php elseif($re->o_ts == '2'): ?><?php echo e($q*$re->bfb2); ?><?php elseif($re->o_ts == '3'): ?><?php echo e($q*$re->bfb3); ?><?php elseif($re->o_ts == '4'): ?><?php echo e($q*$re->bfb4); ?><?php elseif($re->o_ts == '5'): ?><?php echo e($q*$re->bfb5); ?><?php elseif($re->o_ts == '6'): ?><?php echo e($q*$re->bfb6); ?><?php elseif($re->o_ts == '7'): ?><?php echo e($q*$re->bfb7); ?><?php endif; ?>"style="width: 60px;"></p>
                                    <p>家长服务费:<input type="text" value="<?php echo e($re->fz_jzxxf); ?>" name="order_jzfy" style="width: 60px;"></p>
                                    <p>实际收款总额:<input type="text" name="sjsk" style="width:40px;"></p>
                                    <p>收费差额:<input type="text" name="sfc" style="width:70px;"></p>
                                    <p ><button class="showBtn" onclick='seeId(<?php echo e($re->user_id); ?>)'>新增收支</button></p>
                                    <p><input type="submit" name="" value="修改"></p>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <p><a href="/admin/orderyyrs/<?php echo e($re->id); ?>" style="font-size:24px;color: red;"><?php echo e($re->yynum); ?></a>|<a target="_blank" href="/xxfb.php?oid=<?php echo e($re->id); ?>&title=<?php if(session('Template') == '2' || '4'): ?>德栗家教<?php else: ?>栗志家教<?php endif; ?>&q=<?php echo e($re->money*$re->o_xs); ?>&nj=<?php echo e($re->grade); ?>&dq=<?php echo e($re->dq); ?>&fdkm=<?php echo e($re->subject_id); ?>">生成信息模板</a></p>
                                    <p>状态:
                                        <select name="ht_status">
                                            <option value="0" <?php if($re->ht_status == '0'): ?> selected='selected' <?php endif; ?>>新家教</option>
                                            <option value="1" <?php if($re->ht_status == '1'): ?> selected='selected' <?php endif; ?>>待处理</option>
                                            <option value="2" <?php if($re->ht_status == '2'): ?> selected='selected' <?php endif; ?>>已安排</option>
                                            <option value="3" <?php if($re->ht_status == '3'): ?> selected='selected' <?php endif; ?>>已成功(授课中)</option>
                                            <option value="4" <?php if($re->ht_status == '4'): ?> selected='selected' <?php endif; ?>>已成功(授课结束)</option>
                                            <option value="5" <?php if($re->ht_status == '5'): ?> selected='selected' <?php endif; ?>>待审核</option>
                                            <option value="6" <?php if($re->ht_status == '6'): ?> selected='selected' <?php endif; ?>>待退款</option>
                                            <option value="7" <?php if($re->ht_status == '7'): ?> selected='selected' <?php endif; ?>>关闭生成新单</option>
                                            <option value="8" <?php if($re->ht_status == '8'): ?> selected='selected' <?php endif; ?>>关闭</option>
                                        </select>
                                        <button>查看</button>
                                    </p>
                                    
                                    
                                    <p><a href="/ht_hetong/<?php echo e($re->id); ?>.html" target="_blank">电子合同</a>|<a href="">本单授课订单</a></p>
                                    <p>试课时间:<input type="text" value="<?php echo e($re->sks_time); ?>" ></p>
                                    <p>试课地址:<input type="text" value="<?php echo e($re->sks_add); ?>" ></p>
                                    <p><a href="">前台查看次家教</a><button class="VIP" >设置为vip</button></p>
                                    <p>
                                        <?php if($re->status != '3'): ?>
                                        <a href="/admin/xgddzt/<?php echo e($re->id); ?>/3">屏蔽</a>
                                        <?php else: ?>
                                        <a href="/admin/xgddzt/<?php echo e($re->id); ?>/0">显示</a>
                                        <?php endif; ?>|
                                        <a href="">非置顶</a>|
                                        <a href="">推送</a>|
                                        <a href="">删除</a>
                                    </p>
                                    <p><button >本单收支流水</button></p>
                                    <span style='display: none;'><?php echo e($re->id); ?><br><?php echo e($re->user_id); ?><br><?php echo e($re->user_name); ?><br><?php echo e($re->user_phone); ?><br><?php echo e($re->user_byphone); ?><br><?php echo e($re->user_qq); ?><br><?php echo e($re->user_sex); ?><br><?php echo e($re->dq); ?><br><?php echo e($re->contact); ?><br><?php echo e($re->grade); ?><br><?php echo e($re->sk_times); ?><br>
<?php echo e($re->explain); ?><br><?php echo e($re->subject_id); ?><br><?php echo e($re->user_situation); ?><br><?php echo e($re->teacher_id); ?><br><?php echo e($re->teacher_sex); ?><br><?php echo e($re->teacher_info); ?><br><?php echo e($re->money); ?><br><?php echo e($re->time); ?><br><?php echo e($re->region); ?><br><?php echo e($re->status); ?><br><?php echo e($re->pay); ?><br><?php echo e($re->pay_id); ?><br><?php echo e($re->city_id); ?>

<?php echo e($re->user_reboot); ?><br><?php echo e($re->per_week); ?><br><?php echo e($re->xx_dz); ?><br><?php echo e($re->ls_type); ?><br><?php echo e($re->tc_Signing); ?><br><?php echo e($re->qq); ?><br><?php echo e($re->wx); ?><br><?php echo e($re->wlk); ?><br><?php echo e($re->browsenu); ?><br><?php echo e($re->yynum); ?><br><?php echo e($re->ddzt); ?><br><?php echo e($re->jqzt); ?><br><?php echo e($re->wzly); ?><br><?php echo e($re->khly); ?><br><?php echo e($re->ap); ?><br><?php echo e($re->yhbz); ?><br><?php echo e($re->ht_status); ?>

<?php echo e($re->ddbz); ?><br><?php echo e($re->o_ts); ?><br><?php echo e($re->o_xs); ?><br><?php echo e($re->fdlx); ?><br><?php echo e($re->o_yue); ?><br><?php echo e($re->jy_qz); ?><br><?php echo e($re->xy_qz); ?><br><?php echo e($re->money2); ?><br><?php echo e($re->o_ts2); ?><br><?php echo e($re->o_xs2); ?><br><?php echo e($re->bj_msg_A); ?><br><?php echo e($re->hetong_time); ?><br><?php echo e($re->sks_time); ?><br><?php echo e($re->sks_add); ?><br><?php echo e($re->fz_jzxxf); ?><br><?php echo e($re->city_name); ?>

<?php echo e($re->fz_vip); ?><br><?php echo e($re->fz_qyjyfy); ?><br><?php echo e($re->bfb1); ?><br><?php echo e($re->bfb2); ?><br><?php echo e($re->bfb3); ?><br><?php echo e($re->bfb4); ?><br><?php echo e($re->bfb5); ?><br><?php echo e($re->bfb6); ?><br><?php echo e($re->bfb7); ?>

                                    </span>
                                </div>
                            </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fc" style="display: none;"></div>
<div class="fc_content1" style="display: none;">
    <div class="pd">
        <p style="margin-top: 15px;">性别
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option>男</option>
                        <option>女</option>
                    </select>
                </span>
        </p>
        <p>学校
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option>华南理工大学</option>
                        <option>北京大学</option>
                    </select>
                </span>
            <span class="btn">增加</span>
        </p>

        <p>教员年级
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option value="大一">大一</option>
                        <option value="大二">大二</option>
                        <option value="大三">大三</option>
                        <option value="大四">大四</option>
                        <option value="大五">大五</option>
                        <option value="研一">研一</option>
                        <option value="研二">研二</option>
                        <option value="研三">研三</option>
                        <option value="本科毕业">本科毕业</option>
                        <option value="研究生毕业">研究生毕业</option>
                        <option value="博士在读">博士在读</option>
                        <option value="博士毕业">博士毕业</option>
                        <option value="专职老师">专职老师 </option>
                    </select>
                </span>
            <span class="btn">增加</span>
        </p>
        <p>教龄
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option value="1年以内">1年以内</option>
                        <option value="1年">1年</option>
                        <option value="2年">2年</option>
                        <option value="3年">3年</option>
                        <option value="4年">4年</option>
                        <option value="4年以上">4年以上</option>
                    </select>
                </span>
            <span class="btn">增加</span>
        </p>
        <p>教员性质
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option>大学生</option>
                        <option>专职老师</option>
                    </select>
                </span>
        </p>
        <p>籍贯
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option>北京</option>
                        <option>北京市</option>
                    </select>
                </span>
        </p>
        <p>文理科
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option>文科</option>
                        <option>理科</option>
                    </select>
                </span>
        </p>
        <p>专业
                <span class="sel_span">
                    <select class="sel" name="">
                        <option>请选择</option>
                        <option value="数学">数学</option>
                        <option value="英语">英语</option>
                        <option value="国际学院内设专业（英文授课）">国际学院内设专业（英文授课）</option>
                        <option value="物理类">物理类</option>
                        <option value="化学类">化学类</option>
                        <option value="生物学类">生物学类</option>
                        <option value="师范专业（包括教育学）">师范专业（包括教育学）</option>
                        <option value="心理学">心理学</option>
                        <option value="管理学">管理学</option>
                        <option value="经济类">经济类</option>
                        <option value="外语系（英语专业以外）">外语系（英语专业以外）</option>
                        <option value="建筑类">建筑类</option>
                        <option value="法学">法学</option>
                        <option value="新闻">新闻</option>
                        <option value="中文">中文</option>
                        <option value="政治">政治</option>
                        <option value="历史">历史</option>
                        <option value="地址物理">地址物理</option>
                        <option value="医学/药学">医学/药学</option>
                        <option value="社会学类">社会学类</option>
                        <option value="农林专业">农林专业</option>
                        <option value="体育">体育</option>
                        <option value="艺术">艺术</option>
                        <option value="计算机">计算机</option>
                        <option value="电子信息科学">电子信息科学</option>
                        <option value="自然类科学">自然类科学</option>
                        <option value="其他">其他</option>

                    </select>
                </span>
            <span class="btn">增加</span>
        </p>
        <p style="text-align: center;">
            <input type="submit" name="" value="确认" class="sure_qd">
        </p>
    </div>

</div>


<div class="showFc" style="display: none">
    <form action="/admin/jzorder">
        <div style="width:70%; margin:0 auto; margin-top: 25px;">
            <p>客户类型：
                <select name="" id="">
                    <option>家长</option>
                    <option>家教</option>
                    <option>机构</option>
                    <option>对方协助</option>
                    <option>我方协助</option>
                </select>
            </p>
            <p>名字:<input type="" name="" style="border:1px solid #a2a2a2;"></p>
            <p>收支方式
                <select>
                    <option value="">收款</option>
                    <option value="">付款</option>
                </select>
            </p>
            <p>收支款金额：<input type="text" name="" style="border:1px solid #a2a2a2;"></p>

            <p></p>
            <div class="DD_name">

                <p>付款方式:
                    <select>
                        <option value="">支付宝</option>
                        <option value="">微信</option>
                        <option value="">淘宝</option>
                        <option value="">银行卡</option>
                        <option value="">小程序</option>
                    </select>
                </p>
                <p>我方名字:<input type="text" name=""></p>
                <p>我方账号：<input type="text" name=""></p>
                <p>对方名字:<input type="text" name=""></p>
                <p>对方账号：<input type="text" name=""></p>
            </div>

            <p><span style="    display: inherit;">备注：</span><textarea name="" id=""></textarea></p>
            <p>订单号：<input type="text" name=""></p>
            <p>时间：<input type="text" name="time" style="border:1px solid #a2a2a2; width:200px; " placeholder="时间格式:2017-5-1  12:30"></p>
            <p style="padding: 10px;"><input type="submit" name="" value="确定" style="width: 121px;height:32px;"></p>

        </div></form>
</div>
<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>



<script src="js/plugins/jeditable/jquery.jeditable.js"></script>

<!-- Data Tables -->
<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- 自定义js -->
<script src="js/content.js?v=1.0.0"></script>


<!-- Page-Level Scripts -->
<script>
    $(document).ready(function () {
        $('.dataTables-example').dataTable();

        /* Init DataTables */
        var oTable = $('#editable').dataTable();

        /* Apply the jEditable handlers to the table */
        oTable.$('td').editable('../example_ajax.php', {
            "callback": function (sValue, y) {
                var aPos = oTable.fnGetPosition(this);
                oTable.fnUpdate(sValue, aPos[0], aPos[1]);
            },
            "submitdata": function (value, settings) {
                return {
                    "row_id": this.parentNode.getAttribute('id'),
                    "column": oTable.fnGetPosition(this)[2]
                };
            },
            select:{

        items:'cells'
            },
            "width": "90%",
            "height": "100%"
        });


    });

    function fnClickAddRow() {
        $('#editable').dataTable().fnAddData([
            "Custom row",
            "New row",
            "New row",
            "New row",
            "New row"]);

    }


    $('.show_tj_btn').click(function(){
        $('.fc').show(500)
        $('.fc_content1').show(500)
    })
    $('.fc').click(function(){
        $('.fc').hide(500)
        $('.fc_content1').hide(500)
        $('.showFc').hide(500)
    })
    $('.btn').click(function () {

        var a  = $(this).parent().find(".sel_span select:first")[0].outerHTML
        $(this).parent().find('.sel_span').append(a)

    })
    $('.sure_qd').click(function(event) {
        $('.fc').hide(500)
        $('.fc_content1').hide(500)
    });
    $('#textarea2').val('有责任心，有家教经验优先。')
    function seeId(){
        $('.showFc').show(500)
        $('.fc').show(500)
    }
    $('.xyxm_btn').click(function(){
        $(this).before('<p style="margin:0">学员姓名：<input/ style="width:70px;"></p>')
    })
</script>


<style type="text/css">
    .no_ne{
        display: none;
    }
    .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
        border-top: 1px solid #e7eaec;
        line-height: 1.42857;
        padding: 0;
        vertical-align: top;
    }
    input{
        width: 80px;
        height: 18px;
        border: none;
    }
    .fc {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.41);
        top: 0;
        left: 0;
    }
    .fc_content1 {
        width: 650px;
        height: 400px;
        position: fixed;
        background: #fff;
        left: 50%;
        top: 50%;
        margin-left: -325px;
        margin-top: -200px;
    }
    .showFc{
        width: 650px;
        position: fixed;
        background: #fff;
        left: 50%;
        top: 50%;
        margin-left: -325px;
        margin-top: -280px;
    }
    .showFc input{
        border: 1px solid #ccc;
    }
    .pd{
        margin: 0 20px;
    }
    .pd p {
        padding: 4px 0px;
    }
    .xyxm_btn {
        background: #00abff;
        border-radius: 100%;
        color: #fff;
        width: 16px;
        height: 16px;
        display: inline-block;
        line-height: 16px;
        vertical-align: middle;
        cursor: pointer;
    }
</style>

</body>

</html>
