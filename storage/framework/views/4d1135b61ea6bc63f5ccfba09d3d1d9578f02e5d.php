
<?php $__env->startSection('title',session('regionname') ); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="/delijiajiao/css/bootstrap.min.css">
    <div class="container">
        <div class="main-box">
            <div class="selectNumberScreen">

                <div id="selectList" class="screenBox screenBackground">

                    <dl class="listIndex" attr="terminal_brand_s">
                        <dt>学校：</dt>
                        <dd>
                            <?php $__currentLoopData = $xx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/facultyp/e<?php echo e($x->id); ?>.html" values2="" values1="" attrval="lenovo" data-type="学校" data-value="<?php echo e($x->school_name); ?>"><?php echo e($x->school_name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $quyu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/facultyp/q<?php echo e($qy->id); ?>.html" values2="" values1="" attrval="ios" data-type="区域" data-value="<?php echo e($qy->county_name); ?>"><?php echo e($qy->county_name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <img src="<?php echo e(asset('/delijiajiao/images/icon_title4.png')); ?>">教员库
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
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <p id='tta'> <a href="/yuyuelaoshis.html?tc=<?php echo e($li->id); ?>">预约|免费试课</a> </p>
                                    <p id='ttb'> <a href="/teacher/detail/<?php echo e($li->id); ?>.html">查看详情</a></p>
                                    <p id='ttd'> <?php echo e($li->tc_comments); ?></p>
                                    <div id='tte'><?php echo e($li->tc_school); ?>

                                        <?php echo e($li->tc_zhuanye); ?>

                                    </div>
                                    <p id='ttf'><?php echo e(substr($li->tc_name,0,3)); ?>教员/<?php echo e($li->tc_sex=='1'?'男':'女'); ?></p>
                                    <p id='ttg'> <br>T<?php echo e($li->id); ?></p>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="acrtp">
            <div class="acrtps">
                <?php if($list->LastPage() > 1): ?>
                    <a href="<?php echo e($list->Url(1)); ?>" id="fys" class="item<?php echo e(($list->CurrentPage() == 1) ? ' disabled' : ''); ?>">
                        <i class="icon left arrow"></i>
                        首页
                    </a>
                    <a href="<?php echo e($list->Url($list->last)); ?>" id="fys" class="item<?php echo e(($list->CurrentPage() == 1) ? ' disabled' : ''); ?>">
                        <i class="icon left arrow"></i>
                        上一页
                    </a>
                    <a href="<?php echo e($list->Url($list->next)); ?>" id="fys" class="item<?php echo e(($list->CurrentPage() == 1) ? ' disabled' : ''); ?>">
                        <i class="icon left arrow"></i>
                        下一页
                    </a>
                    
                        
                        
                    
                    <!--<?php for($i = 1; $i <= $list->LastPage(); $i++): ?>
                            <a href="<?php echo e($list->Url($i)); ?>" class="item<?php echo e(($list->CurrentPage() == $i) ? ' active' : ''); ?>">
                    <?php echo e($i); ?>

                            </a>
                        <?php endfor; ?> -->
                    <a href="<?php echo e($list->Url($list->LastPage())); ?>" id="fys" class="item<?php echo e(($list->CurrentPage() == $list->LastPage()) ? ' disabled' : ''); ?>">
                        末页
                        <i class="icon right arrow"></i>
                    </a>
                <?php endif; ?>
                
            </div>
        </div>

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

        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('js'); ?>
            <script type="text/javascript">
                $('#cheng').remove();
                $('#f').remove();
            </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>