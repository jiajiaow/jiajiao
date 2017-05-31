<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>教员详细信息</title>
    <link rel="stylesheet" href="/phone/css/fast.css">
    <link rel="stylesheet" href="/phone/css/reset.css">
    <script src="/phone/js/flexible.js"></script>
    <link rel="stylesheet" href="/phone/css/ele.css">
    <link rel="stylesheet" href="/phone/css/teacher_info.css">
</head>
<body>
<div class="wrap" id="app">
    <div class="nav_header">
        <i class="header_left_icon header_icon"  onclick="javascript :history.back(-1);"></i>
        <span >教员信息</span> 
        <i class="header_right_icon header_icon"></i>
    </div>

    <div class="teacher_business">
        <div class="tc_ava"><img src="<?php echo e($list->tc_photo); ?>" alt=""></div>
        <p class="tc_name"><?php echo e(substr($list->tc_name,0,3)); ?>教员(<?php echo e($list->tc_sex=='1'?'男':'女'); ?>)<?php echo e($list->tc_nj); ?><span class="tc_num">215440</span></p>
        <p style="margin: .3rem 0">
        <div class="teacher_msg">
            <span><i class="teacher_school_icon"></i><?php echo e($list->tc_school); ?></span>
            <span style="margin-left: .2rem"><i class="teacher_edu_icon"></i><?php if($list->tc_zhuanye == '--请选择--'): ?><?php else: ?><?php echo e($list->tc_zhuanye); ?> <?php endif; ?></span>
        </div>
        </p>
        <div style="padding-bottom: 0.8rem;margin-top: .3rem;">
            <span class="tc_fx_btn" >分享老师名片</span>
            <span class="tc_jr_btn" @click="openFullScreen" v-loading.fullscreen.lock="fullscreenLoading">加入备选老师</span>
        </div>
    </div>
    <div class="tc_tab_box">
        <el-tabs v-model="activeName" >
            <el-tab-pane label="个人资料" name="first">
                <div class="grzl_box">
                    <ul>
                        <li>
                            <p>籍贯</p>
                            <p><?php echo e($list->tc_jiguan); ?></p>
                        </li>
                        <li>
                            <p>具体专业</p>
                            <p><?php echo e($list->tc_spl); ?></p>
                        </li>
                        <li>
                            <p>教龄</p>
                            <p><?php echo e($list->tc_jl); ?></p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>手机</p>
                            <p><?php echo e(session('phone')); ?></p>
                        </li>
                        <li>
                            <p>微信</p>
                            <p>156-9200-3711</p>
                        </li>
                        <li>
                            <p>QQ</p>
                            <p>494561583</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>平时所在城市</p>
                            <p><?php echo e($list->tc_citys=='--请选择--'?'':$list->tc_citys); ?></p>
                        </li>
                        <li>
                            <p>暑假所在城市</p>
                            <p><?php echo e($list->tc_shu=='--请选择--'?'':$list->tc_shu); ?></p>
                        </li>
                        <li>
                            <p>寒假所在城市</p>
                            <p><?php echo e($list->tc_han=='--请选择--'?'':$list->tc_han); ?></p>
                        </li>
                    </ul>
                </div>
            </el-tab-pane>
            <el-tab-pane label="可授课情况" name="second">
                <div class="grzl_box grzl_box_p">
                    <p>
                        可授科目：<?php echo e($list->tc_subjects); ?>

                    </p>
                    <p>
                        可授区域：<?php echo e($list->tc_area); ?>

                    </p>
                    <p>
                        可授课时间：<?php echo e($list->tc_sktime); ?>

                    </p>
                    <p>
                        课酬要求：<?php if($list->tc_salary == null): ?>执行德栗家教收费标准<?php else: ?><?php echo e($list->tc_salary); ?><?php endif; ?>
                    </p>
                </div>
            </el-tab-pane>
            <el-tab-pane label="家教经验" name="third">
                <div class="grzl_box grzl_box_p">
                    <p>
                        家教经验：<?php echo e($list->tc_case); ?>

                    </p>

                </div>
            </el-tab-pane>
        </el-tabs>
    </div>
    <div class="evaluation_box">
        <div class="eva_p_box">
            <div class="evaluation_box_title">
                <i class="eva_icon"></i>
                <span>自我评价</span>
            </div>
            <p class="evaluation_box_content">
                <?php echo e($list->tc_comments); ?>

            </p>
        </div>
    </div>
    <div class="evaluation_box">
        <div class="eva_p_boxs">
            <div class="evaluation_box_title">
                <i class="eva_icon"></i>
                <span>所获证书</span>
            </div>
            <p class="evaluation_box_content">
                <?php echo e($list->tc_certificate); ?>

            </p>
        </div>
    </div>
    <section class="form_fastTutor" style="margin-top: .2rem; padding-bottom: 2rem;">
        <div class="form_fastTutor_title">
            <span class="form_fastTutor_title_text">预约<?php echo e(substr($list->tc_name,0,3)); ?>教员（编号：T215440）</span>
        </div>
        <div class="form_fastTutor_content">
            <ul>
                <li>
                    <span>联系人：</span><input type="text" name="" placeholder="请输入您的名字">
                </li>
                <li>
                    <span>科目：</span><input type="text" name="" placeholder="请输入需要辅导的科目">
                </li>
                <li>
                    <span>手机号：</span><input type="text" name="" placeholder="请输入您的手机号码">
                </li>
                <li>
                    <input type="text" name="" placeholder="请输入手机验证码">
                    <input class="yzm_btn" style="margin: 0" value="获取验证码" type="button" @click="settime" ref="Verification" :disabled="disabled">
                </li>
            </ul>
            <span class="tj_button">立即提交</span>
        </div>
    </section>
    <?php echo $__env->make('phonedl.float.float', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <el-dialog
            title="提示"
            :visible.sync="dialogVisible"
            size="tiny">
        <span>加入备选老师成功</span>
        <span slot="footer" class="dialog-footer">
    <!--<el-button @click="dialogVisible = false">取 消</el-button>-->
    <!--<el-button type="primary" @click="dialogVisible = false">确 定</el-button>-->
  </span>
    </el-dialog>
</div>





<style>
    .wrap{
        background-color: #f1f7ff;
    }
    ::-webkit-input-placeholder{
        color: #cccccc;
        text-align: center;
    }
    select {
        border: none;
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        background: url(/phone/img/csj.png) no-repeat scroll right center transparent;
        width: 45%;
        padding: .18rem 14px .18rem 0;
        font-size: .32rem;
        background-size: .25rem;
        color: #000;
    }

    .sea_input {
        width: 100%;
        height: .6rem;
        border: none;
        font-size: .3rem;
    }
    .el-tabs__nav {
        position: relative;
        transition: transform .3s;
        width: 100%;
        display: flex;
        align-items: center;
        background: #fff;
        margin-top: .2rem;
    }
    .el-tabs__item {
        padding: 0 16px;
        height: 1rem;
        box-sizing: border-box;
        line-height: 1rem;
        display: inline-block;
        list-style: none;
        font-size: .35rem;
        color: #8391a5;
        position: relative;
        width: 33%;
        text-align: center;
    }
    .grzl_box_p p{
        font-size:13px;
        margin-bottom: .2rem;
    }
    .grzl_box_p p:first-child{
        padding-top: .5rem;
    }
    .grzl_box_p p:last-child{
        padding-bottom: .5rem;
    }
</style>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/phone/js/vue.js"></script>
<script src="/phone/js/ele.js"></script>
<script src="/phone/lichengphonedl/js/zepto.js"></script>
<script src="/phone/lichengphonedl/js/jquery-1.11.3.js"></script>
<script>

</script>
<script src="/phone/js/vue-resource.js"></script>
<script>

//    var countdown=60;
//    function settime(obj) {
//        if (countdown == 0) {
//            obj.removeAttribute("disabled");
//            obj.value="获取验证码";
//            countdown = 60;
//            return;
//        } else {
//            obj.setAttribute("disabled", true);
//            obj.value="重新发送(" + countdown + ")";
//            countdown--;
//        }
//        setTimeout(function() {
//                settime(obj) }
//            ,1000)
//    }

var app = new Vue({
    el: '#app',
    data: {
        activeName: 'first',
        countdown:60,
        VerificationCode:'',
        disabled:false,
        dialogVisible: false,
        fullscreenLoading: false,
        apiUrl: 'http://rapapi.org/mockjs/11879/api/creative'
    },

    methods: {


        settime:function(el){
            this.VerificationCode = this.$refs.Verification
            if(this.countdown == 0){
                this.disabled = false
                this.VerificationCode.value = "获取验证码"
                this.countdown = 60
                return
            }else{
                this.disabled = true
                this.countdown--
                this.VerificationCode.value = this.countdown + "秒后重新获取"
            }
            this.$nextTick(function () {
                setTimeout(this.settime, 1000);
            })
        },
        openFullScreen:function() {
            var _this = this
            _this.fullscreenLoading = true;
            this.$http.get(this.apiUrl,{'1':'1'}).then(function(response){
                    setTimeout(function(){
                    var _this = this;
                    _this.app.fullscreenLoading = false
                        _this.app.dialogVisible= true
                            },500);
                setTimeout(function(){
                    var _this = this;
                    _this.app.dialogVisible= false
                },1500);
                console.log(response)
            }, function(response){
                // 响应错误回调
            });

        }
    }
})


</script>

</body>
</html>