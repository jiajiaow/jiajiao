@extends('delijiajiao.public.public')
@section('title',session('regionname') )
@section('content')
    <link rel="stylesheet" href="/delijiajiao/css/bootstrap.min.css">
    <div class="container">
        <div class="main-box">
            <div class="selectNumberScreen">

                <div id="selectList" class="screenBox screenBackground">

                    <dl class="listIndex" attr="terminal_brand_s">
                        <dt>学校：</dt>
                        <dd>
                            @foreach($xx as $x)
                                <a href="/facultyp/e{{ $x->id }}.html" values2="" values1="" attrval="lenovo" data-type="学校" data-value="{{ $x->school_name }}">{{ $x->school_name }}</a>
                            @endforeach
                        </dd>
                    </dl>

                    <dl class="listIndex" attr="价格范围">
                        <dt>家教科目：</dt>
                        <dd>
                            <a href="/facultyp/k数学.html" values2="499" values1="1" attrval="1-499" data-type="科目" data-value="数学">数学</a>
                            <a href="/facultyp/k英语.html" values2="499" values1="2" attrval="1-499" data-type="科目">英语</a>
                            <a href="/facultyp/k语文.html" values2="499" values1="3" attrval="1-499" data-type="科目">语文</a>
                            <a href="/facultyp/k物理.html" values2="499" values1="4" attrval="1-499" data-type="科目">物理</a>
                            <a href="/facultyp/k化学.html" values2="499" values1="5" attrval="1-499" data-type="科目">化学</a>
                        </dd>
                    </dl>

                    <dl  class=" listIndex x" attr="terminal_os_s">
                        <dt>老师性别：</dt>
                        <dd>
                            <a href="/facultyp/g1.html" values2="" values1="" attrval="ios"data-type="性别">男</a>
                            <a href="/facultyp/g0.html" values2="" values1="" attrval="android" data-type="性别">女</a>
                        </dd>
                    </dl>
                    <dl  class=" listIndex x" attr="terminal_os_s">
                        <dt>所在区域：</dt>
                        <dd>
                            @foreach($quyu as $qy)
                                <a href="/facultyp/q{{ $qy->id }}.html" values2="" values1="" attrval="ios" data-type="区域" data-value="{{ $qy->county_name }}">{{ $qy->county_name }}</a>
                            @endforeach
                        </dd>
                    </dl>
                    <dl  class=" listIndex x" attr="terminal_os_s">
                        <dt>老师类型：</dt>
                        <dd>
                            <a href="javascript:void(0)" values2="" values1="" attrval="ios" data-type="老师类型">大学生</a>
                            <a href="javascript:void(0)" values2="" values1="" attrval="android" data-type="老师类型">专职老师</a>
                            <a href="javascript:void(0)" values2="" values1="" attrval="symbian" data-type="老师类型">其他</a>
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
             <img src="/delijiajio/images/top.png" alt="">
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
                    <div class="indext3">
                        <div class="lebt">
                            <div class="l">
                                <img src="{{ asset('/delijiajiao/images/icon_title4.png') }}">教员库
                            </div>
                            <div class="r">
                                老师编号:<input type="text" />
                                <input id="sousuo" type="submit">
                            </div>
                        </div>
                        <div class="acrtty">
                            <li>
                                <p class="ta" > 预约 </p>
                                <p class="tb" > 查看详情</p>
                                <p class="tc" >自我描述</p>
                                <p class="te" >学校/专业</p>
                                <p class="tf" >姓名/性别</p>
                                <p class="tg" > 教员编号</p>
                            </li>
                        </div>

                        <div class='acrtt3'>
                            @foreach($list as $li)
                                <li>
                                    <p id='tta'> <a href="/yuyuelaoshis.html?tc={{ $li->id }}">预约|免费试课</a> </p>
                                    <p id='ttb'> <a href="/teacher/detail/{{ $li->id }}.html">查看详情</a></p>
                                    <p id='ttd'> {{ $li->tc_comments }}</p>
                                    <div id='tte'>{{ $li->tc_school }}
                                        {{ $li->tc_zhuanye }}
                                    </div>
                                    <p id='ttf'>{{ substr($li->tc_name,0,3) }}教员/{{ $li->tc_sex=='1'?'男':'女' }}</p>
                                    <p id='ttg'> <br>T{{ $li->id }}</p>
                                </li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="acrtp">
            <div class="acrtps">
                @if ($list->LastPage() > 1)
                    <a href="{{ $list->Url(1) }}" id="fys" class="item{{ ($list->CurrentPage() == 1) ? ' disabled' : '' }}">
                        <i class="icon left arrow"></i>
                        首页
                    </a>
                    <a href="{{ $list->Url($list->last) }}" id="fys" class="item{{ ($list->CurrentPage() == 1) ? ' disabled' : '' }}">
                        <i class="icon left arrow"></i>
                        上一页
                    </a>
                    <a href="{{ $list->Url($list->next) }}" id="fys" class="item{{ ($list->CurrentPage() == 1) ? ' disabled' : '' }}">
                        <i class="icon left arrow"></i>
                        下一页
                    </a>
                    {{--<a href="{{ $list->Url($list->shi) }}" class="item{{ ($list->CurrentPage() == 1) ? ' disabled' : '' }}">--}}
                        {{--<i class="icon left arrow"></i>--}}
                        {{--下10页--}}
                    {{--</a>--}}
                    <!--@for ($i = 1; $i <= $list->LastPage(); $i++)
                            <a href="{{ $list->Url($i) }}" class="item{{ ($list->CurrentPage() == $i) ? ' active' : '' }}">
                    {{ $i }}
                            </a>
                        @endfor -->
                    <a href="{{ $list->Url($list->LastPage()) }}" id="fys" class="item{{ ($list->CurrentPage() == $list->LastPage()) ? ' disabled' : '' }}">
                        末页
                        <i class="icon right arrow"></i>
                    </a>
                @endif
                {{--  {{ $list->links()}}--}}
            </div>
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
                            <p>{{ substr(session('cityname'),0,6) }}热线：{{ session('phone') }}</p>
                            <p>全国热线：400-8250-710</p>
                        </div>
                        <div class="dsv">
                            <a href="https://hztk5.kuaishang.cn/bs/im.htm?cSource=1&cas=69564___125636&fi=79140&ri=18245998447&vi=84d357f55f854a87b7683824f3938530&dp=http%3A%2F%2Fwww.delijiajiao.com%2F&_d=1494806260357&_tk=575c5551" class="zx_btn">在线咨询</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="fcb_bottom">
                <p class="fcb_bottom_titp" style="padding: 14px 0 3px 50px;;text-align: left;margin:0;color: #fff;font-size: 14px;">您希望的授课类型：</p>
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
        <style>
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
        <script type="text/javascript">
            $(function(){

                var navH = $("#cheng").offset().top;

                $(window).scroll(function(){

                    var scroH = $(this).scrollTop();

                    if(scroH>=navH){
                        $("#cheng").css({"position":"fixed","top":0});
                    }else if(scroH<navH){
                        $("#cheng").css({"position":"relative","z-index":999});
                        //    $(".nav-vertical ul li.nav-item dl dd").css("top","200px");
                    }
                })
            })

            function isPhoneNos() {
                var name = $('#float_name').val()
                var km = $('.fcb_b_box_active').html()
                alert(km);
                return false;
                var phone = $('#float_phones').val();
                if(km != ''){
                    if(phone != ''){
                        var myreg = /^1[34578]\d{9}$/;
                        if(!myreg.test($("#float_phones").val()))
                        {
                            layer.alert('请输入有效的手机号码！');
                            return false;
                        }else{
                            $.post('/dofloatyyform',{km:km,phone:phone,name:name},function(r){
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
                var aa = $('#div4')
                aa.hover(function(){
                    $('.wx_box').show()
                },function(){
                    $('.wx_box').hide()
                })
            },3000)
        </script>
        <script type="text/javascript">
            //var dlNum  =$("#selectList").find("dl");
            //for (i = 0; i < dlNum.length; i++) {
            //	$(".hasBeenSelected .clearList").append("<div class=\"selectedInfor selectedShow\" style=\"display:none\"><span></span><label></label><em></em></div>");
            //}

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
//	$(this).parents(".selectedShow").hide();
                $(this).parents(".selectedShow").remove();
//    $(this).parents(".selectedShow label").text('');
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

            /*$(document).on( 'click' ,'.selectedInfor',function(){

             })
             $(document).on('click','#selectList',function(event){
             var selectedInfor = $('.hasBeenSelected').find('.selectedInfor')
             if(selectedInfor.length<=0){
             var dlNum  =$("#selectList").find("dl");
             for (i = 0; i < dlNum.length; i++) {
             $(".hasBeenSelected .clearList").append("<div class=\"selectedInfor selectedShow\" style=\"display:none\"><span></span><label></label><em></em></div>");
             }
             }else if(selectedInfor.length<5){
             var dlNum  =$("#selectList").find("dl");
             for (i = 0; i < dlNum.length; i++) {
             $(".hasBeenSelected .clearList").append("<div class=\"selectedInfor selectedShow\" style=\"display:none\"><span></span><label></label><em></em></div>");
             }
             }
             var aa = $('.selectedInfor')
             var objInfo={};
             var arr = [];
             for(var i=0;i<aa.length;i++){
             objInfo[$('.selectedInfor span').eq(i).html()] = $(".selectedInfor label").eq(i).html()
             }
             arr.push(objInfo)
             console.log(arr)
             $.ajax({
             url:'/dokey',
             type:'post',

             data:{'key':arr},
             success:function(res){
             $('.acrtt3').remove();
             $('.acrtp').remove();
             console.log(res);
             for (var i = 0; i < res.data.length; i++) {
             if(res.data[i].tc_sex == "1"){
             res.data[i].tc_sex = '男';
             }else{
             res.data[i].tc_sex = '女';
             }
             $('.indext3').append("<div class='acrtt3'> <li><p id='tta'> <a href='/yuyuelaoshi.html?"+ res.data[i].id+"'>预约|免费试课</a> </p><p id='ttb'> <a href='/teacher/detail/"+ res.data[i].id+".html'>查看详情</a></p><p id='ttd'>"+res.data[i].tc_comments+"</p><div id='tte'>"+res.data[i].tc_school+"</div><p id='ttf'>"+ res.data[i].tc_name+"教员<br />"+res.data[i].tc_sex+"</p><p id='ttg'> <br>T"+ res.data[i].id+"</p> </li> </div>");

             };
             var pages = "<ul class='pagination'>"
             +"<li class='disabled'><span>«</span></li>"
             +"<li class='active'><span>1</span></li>"
             +"<li><a href='http://gz.delijiajiao.com/faculty.html?page=2'>2</a></li>"
             +"<li><a href='http://gz.delijiajiao.com/faculty.html?page=3'>3</a></li>"
             +"<li class='disabled'><span>...</span></li>"
             +"<li><a href='http://gz.delijiajiao.com/faculty.html?page="+res.last_page+"'>"+res.last_page+"</a></li>"
             +"<li><a href='http://gz.delijiajiao.com/faculty.html?page=2' rel='next'>»</a></li>"
             +"</ul>";

             $('.acrtp').append("<div class='ascrtps'>"+pages+"</div>");
             },
             error:function(){
             //alert('ajax请求失败');	//失败回调
             }
             });
             event.stopPropagation();
             })*/
        </script>

        @endsection
        @section('js')
            <script type="text/javascript">
                $('#cheng').remove();
                $('#f').remove();
            </script>
@endsection