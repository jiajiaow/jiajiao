<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>教员个人中心</title>
    <link rel="stylesheet" href="/phone/css/fast.css">
    <link rel="stylesheet" href="/phone/css/reset.css">
    <link rel="stylesheet" href="/phone/css/ele.css">
    <link rel="stylesheet" href="/phone/css/my.css">
    <script src="/phone/js/flexible.js"></script>
</head>
<body>
<div class="wrap" id="app">
    <div class="nav_header">
        <i class="header_left_icon header_icon" onclick="javascript :history.back(-1);"></i>
        <span>个人中心</span>{{--教员个人中心--}}
        <a href="/mobile/outlogin.html"><span class="ex_icon"></span></a>
    </div>

    <div class="com_content_box">
        <div class="my_details_box">
            <div class="my_details_top">
                <div class="mdt_ava">
                    <img src="{{ $list->tc_photo }}" alt="" style="width:2.3rem;">
                </div>
                <div class="mdt_msg">
                    <p class="mdtm_name">{{ $list->tc_name }}教员<span class="mdym_num">T{{ $list->id }}</span></p>
                    <p class="mdtm_phone">手机号：{{ $list->tc_phone }}</p>
                    <p class="mdtm_see">
                        <span>
                            <i class="my_id icon"></i>
                            <span>{{ $list->tc_audit=='0'?"身份未验证":"身份已验证" }}</span>
                            <i class="my_doubt "></i>
                        </span>
                        <span style="margin-left: .5rem;">
                            <i class="my_grade icon"></i>
                            <span>签约教员</span>
                            <i class="my_doubt "></i>
                        </span>
                    </p>
                </div>
            </div>
            <div class="my_details_bottom">
                <ul class="my_details_bottom_ul">
                    <li>
                        <p>1200</p>
                        <p>积分</p>
                    </li>
                    <li>
                        <p>银卡</p>
                        <p>积分等级</p>
                    </li>
                    <li>
                        <p>@if($list->tc_jinpai =='2')金牌教员@elseif($list->tc_jinpai=='1')专职教员@else学生教员@endif</p>
                        <p>教员等级</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="my_information">
            <ul>
                <li>
                    <i class="icons my_icon"></i>
                    <div>
                        <p>个人资料维护</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
                <li>
                    <i class="icons my_dd"></i>
                    <div>
                        <p>订单管理</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
                <li>
                    <i class="icons my_setdd"></i>
                    <div>
                        <p>授课订单管理</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
                <li>
                    <i class="icons my_xy"></i>
                    <div>
                        <p>学员管理</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
            </ul>
        </div>
        <div class="my_money my_information">
            <ul>
                <li>
                    <i class="icons my_cw"></i>
                    <div>
                        <p>财务中心</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
                <li>
                    <i class="icons my_shop"></i>
                    <div>
                        <p>积分商城</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
                <li>
                    <i class="icons my_info"></i>
                    <div>
                        <p>沟通中心</p>
                        <i class="right_icon"></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <footer>
        <ul>
            <li>
                <a href="/mobile">
                    <i class="footer_home footer_icon"></i>
                    <p>首页</p></a>
                </a>
            </li>
            <li>
                <a href="/mobile/teacherinfo.html">
                    <i class="footer_my footer_icon" style="width:.38rem;"></i>
                    <p>我的</p>
                </a>
            </li>
            <li>
                <i class="footer_zx footer_icon"></i>
                <a href="https://hztk5.kuaishang.cn/bs/im.htm?cSource=1&cas=69564___125636&fi=79140&ism=1&dp=http%3A%2F%2Fwww.delijiajiao.com%2Fmobile&_d=1495518714221324&">
                    <p>在线咨询</p>
                </a>

            </li>
            <li>
                <i class="footer_phone footer_icon"></i>
                <a href="tel:13113329950"><p>电话咨询</p></a>
            </li>
        </ul>
    </footer>
</div>
<style>
    select {
        border: none;
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        background-image: url(/phone/img/hsj.png);
        background-repeat: no-repeat;
        background-position: 1.4rem .3rem;
        width: 24%;
        padding: .18rem .5rem.18rem .5rem;
        font-size: .32rem;
        background-size: .25rem;
        color: #000;
        background-color: #f7b529;
        border-radius: 10px;
    }
</style>
<script src="/phone/js/vue.js"></script>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/phone/js/ele.js"></script>
<script>


    var app = new Vue({
        el: '#app',
        data: {

        },
        methods:{

        },
        mounted:function () {

        }
    })
</script>
</body>
</html>