<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')【德栗家教】{{ session('regionname') }}家教专业大学生家教全国连锁领导品牌!</title>
    <link rel="stylesheet" href="/phone/css/ele.css">
    <link rel="stylesheet" href="/phone/css/main.css">
    <link rel="stylesheet" href="/phone/css/swiper-3.4.2.min.css">
    <script src="/phone/js/flexible.js"></script>
    <script type="text/javascript" src="https://hztk5.kuaishang.cn/bs/ks.j?cI=125636&fI=79140&ism=1" charset="utf-8"></script>
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
                <span class="header_city"><span class="header_city_text" onclick="javascript:window.location.href='/change_citydlsj.html'">广州</span> <img src="/phone/img/xl.png" style="margin-top: .1rem;width:.4rem;" ></span>
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
                <div style="width: 61%">
                    <span class="fz_icon icon"></span>
                    <span>{{ substr(session('cityname'),0,6) }}分站：{{ session('regionname') }}</span>
                </div>
                <div style="flex: 1">
                    <span class="bluephone_icon icon"></span>
                    <span>{{ session('phone') }}</span>
                </div>
            </div>
           <div class="contact_box_bottom">
               <div style="width: 61%">
                   <span class="redphone_icon icon"></span>
                   <span>全国统一热线：400-8080-740</span>
               </div>
               <div style="flex: 1">
                   <span class="wx_icon icon"></span>
                   <span>微信号：{{ session('fz_wxhao') }}</span>
               </div>
           </div>
        </section>
        <section class="subject_box">
            <div>
                <ul>
                    <li>
                        <a href="/navigation.html/学科/数学">
                            <img src="/phone/img/sx.png" alt="">
                            <p>数学</p>
                        </a>
                    </li>
                    <li>
                        <a href="/navigation.html/学科/英语">
                            <img src="/phone/img/English@2x.png" alt="">
                            <p>英语</p>
                        </a>
                    </li>
                    <li>
                        <a href="/navigation.html/学科/语文">
                            <img src="/phone/img/yw.png" alt="">
                            <p>语文</p>
                        </a>
                    </li>
                    <li>
                        <a href="/navigation.html/学科/理综">
                            <img src="/phone/img/lz.png" alt="">
                            <p>理综</p>
                        </a>
                    </li>
                    <li>
                        <a href="/navigation.html/学科/物理">
                            <img src="/phone/img/wl.png" alt="">
                            <p>物理</p>
                        </a>
                    </li>
                    <li>
                        <a href="/navigation.html/学科/化学">
                            <img src="/phone/img/hx.png" alt="">
                            <p>化学</p>
                        </a>
                    </li>
                    <li>
                        <a href="/navigation.html/学科/地理">
                            <img src="/phone/img/dl.png" alt="">
                            <p>地理</p>
                        </a>
                    </li>
                    <li>
                        <a href="/faculty.html">
                            <img src="/phone/img/gd.png" alt="">
                            <p>更多</p>
                        </a>
                    </li>
                </ul>
                <div style="text-align: center;     margin-top: .2rem;">
                    <a href="/yuyuelaoshi.html">
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
                    @foreach($xx as $xx)
                        <li><a href="/hot.html/学院/{{ $xx->school_name }}">{{ $xx->school_name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </section>
        <section class="sele_box">
            <div style="width: 50%" onclick="location.href='/yuyuelaoshi.html.html'"><img src="/phone/img/qls.png" alt="" width="100%"></div>
            <div style="width: 50%" onclick="location.href='/reg.html'"><img src="/phone/img/dls.png" alt="" width="100%"></div>
        </section>
        <section class="msg_box">
            <div class="msg_box_title">
                <span class="msg_box_title_l"><img src="/phone/img/xy.png" style="margin: 0 .1rem">学员信息</span>
                <span class="msg_box_title_r"><a href="/xueyuan.html">更多   > </a></span>
            </div>
            <div class="msg_box_tab_content">
                <ul>
                    @foreach($data as $data)
                    <li class="el_tab_content" onclick="location.href='/mobile/xsinfo{{ $data->id }}.html'">
                                <span class="el_tab_content-l">
                                    {{ $data->dq }}{{ mb_substr($data->user_name,0,1) }}学员请{{ $data->grade }}{{ $data->subject_id }}家教
                                </span>
                        <span class="el_tab_content-r">{{ date('Y-m-d',$data->time) }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <section class="msg_box">
            <div class="msg_box_title">
                <span class="msg_box_title_l"><img src="/phone/img/sj.png" style="margin: 0 .1rem">教学资源</span>
                <span class="msg_box_title_r"><a href="/mobile/Articlecenter18.html">更多   > </a></span>
            </div>
            <div class="msg_box_tab_content">
                <el-tabs v-model="activeName2" type="card" >
                    <?php $nums = 0;?>
                    <?php $nums2 = 0;?>
                    @foreach($zhiyuan as $zy)
                        @if($zy->dh_status == '0')
                            <?php $nums2++;?>
                            @if($nums2 < 6)
                            <el-tab-pane label="{{ $zy->dh_Navigationbar }}" name="second{{ $zy->dh_id }}">
                                <ul>
                                    @foreach($timu as $tm)
                                        @if($tm->ar_pid  ==  $zy->dh_id)
                                            <li class="el_tab_content" onclick="location.href='/mobile/Articlecontent{{ $tm->ar_id }}.html'">
                                                <span class="el_tab_content-l">
                                                    {{ substr($tm->ar_title,51,90) }}
                                                </span>
                                                <span class="el_tab_content-r"></span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </el-tab-pane>
                            @endif
                        @endif
                    @endforeach
                    {{--<el-tab-pane label="英语资源" name="second">配置管理</el-tab-pane>--}}
                    {{--<el-tab-pane label="物理资源" name="third">角色管理</el-tab-pane>--}}
                    {{--<el-tab-pane label="化学资源" name="fourth">定时任务补偿</el-tab-pane>--}}
                    {{--<el-tab-pane label="数学资源" name="five">覅是</el-tab-pane>--}}
                </el-tabs>
            </div>
        </section>
        <section class="msg_box">
            <div class="msg_box_title">
                <span class="msg_box_title_l"><img src="/phone/img/sj.png" style="margin: 0 .1rem">热门文章</span>
                <span class="msg_box_title_r"><a href="/mobile/Articlecenter18.html">更多   > </a></span>
            </div>
            <div class="msg_box_tab_content">
                <el-tabs v-model="activeName3" type="card" >
                    @foreach($zhiyuan as $zy)
                    @if($zy->dh_status == '1')
                    <el-tab-pane label="{{ $zy->dh_Navigationbar }}" name="one{{ $zy->dh_id }}">
                        <ul>
                            @foreach($timu as $tm)
                                @if($zy->dh_id == $tm->ar_pid)
                                    <li class="el_tab_content" onclick="location.href='/mobile/Articlecontent{{ $tm->ar_id }}.html'">
                                        <span class="el_tab_content-l">
                                            {{ $tm->ar_title }}
                                        </span>
                                        <span class="el_tab_content-r">{{ substr($tm->ar_time,0,10) }}</span>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </el-tab-pane>
                    @endif
                    @endforeach
                    {{--<el-tab-pane label="教员常见问题" name="second">配置管理</el-tab-pane>
                    <el-tab-pane label="信息中心" name="third">角色管理</el-tab-pane>--}}
                </el-tabs>
            </div>
        </section>
        <section class="footer_yejiao">
            <div style="text-align: center;margin-top: 0.7rem;">
                <a href="/yuyuelaoshi.html">
                    <img src="/phone/img/ksdxs.png" width="100%" style="position: relative;top: -0.4rem;">
                </a>
            </div>
            <div class="footer_yejiao_text">
                <span style="color: rgb(49, 49, 49);"><a href="/">电脑版入口</a></span>
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
                    <a href="/login.html">
                        <i class="footer_my footer_icon" style="width:.38rem;"></i>
                        <p>我的</p>
                    </a>
                </li>
                <li>
                        <i class="footer_zx footer_icon"></i>
                    <a href="https://hztk5.kuaishang.cn/bs/im.htm?cSource=1&cas=69564___125636&fi=79140&ri=18250381975&vi=b91fa36776ee4ca0bac77f7af86e3d04&ism=1&dp=http%3A%2F%2Fwww.delijiajiao.com%2Fmobile&_d=1495518714221324&_tk=b9cc3dd4">
                        <p>在线咨询</p>
                    </a>

                </li>
                <li>
                        <i class="footer_phone footer_icon"></i>
                        <a href="tel:{{ session('phone') }}"><p>电话咨询</p></a>
                </li>
            </ul>
        </footer>
        <div class="return_top" @click="backTop" v-if="scroll>200">
            <img src="/phone/img/hddb.png" alt="" style="margin: .36rem 0 0 .2rem;width: .6rem;">
        </div>
        <div class="wx_icon_f" >
            <a href="https://hztk5.kuaishang.cn/bs/im.htm?cSource=1&cas=69564___125636&fi=79140&ri=18250381975&vi=b91fa36776ee4ca0bac77f7af86e3d04&ism=1&dp=http%3A%2F%2Fwww.delijiajiao.com%2Fmobile&_d=1495518714221324&_tk=b9cc3dd4"><img src="/phone/img/fd_wx.png" alt="" style="margin: .3rem 0 0 .2rem;width: .6rem;"></a>
        </div>
    </div>
    <style>
        .el-tab-pane {
            overflow: scroll;
            height: 3rem;
        }
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
