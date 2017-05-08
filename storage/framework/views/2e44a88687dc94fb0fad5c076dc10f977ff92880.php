<!doctype html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title></title>
	<link href="<?php echo e(asset('/home/css/style.css')); ?>" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="ibanner">
	<div class="container">
		<div class="teach-left">
			<div class="teach-img">
				<div class="top">
					<div class="img">
						<img style="height: 120px" src="
						<?php if($list->tc_photo !=''): ?>
						<?php echo e($list->tc_photo); ?>

						<?php else: ?>
						<?php echo e(asset('/home/picture/2276d79d46584f964acf3cf3441c3ef9f4575918.jpg')); ?>

						<?php endif; ?>
								" alt="">
					</div>
				</div>
				<span><i><?php echo e(substr($list->tc_name,0,3)); ?>教员</i>编号：T<?php echo e($list->id); ?></span>
					<span href="" class="btn fx"><img src="<?php echo e(asset('/home/picture/icon_share.png')); ?>" alt="">分享老师名片
						<div class="share">
							<a title="转发至QQ空间" charset="400-03-8" id="s_qq"
							   href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=" target="_blank">
								        <img  src="<?php echo e(asset('/home/picture/ico_qzone.png')); ?>" />
								    </a>
								    <a title="分享到腾讯朋友" charset="400-03-19" id="s_pengyou"
								        href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?to=pengyou&url=" target="_blank">
								        <img src="picture/ico_pengyou.png" />
								    </a>
								   <a title="转发至新浪微博" charset="400-03-10" id="s_sina"
								        href="http://service.weibo.com/share/share.php?title=【家教114-广州家教网】华南师大-教育学-在职高中教师-关教员&url=http://www.jiajiao114.com/teacher/cbfd849d61292ba70645caed8205ba9b.html&source=bookmark&appkey=2992571369" target="_blank">
								        <img src="picture/ico_sina.png" />
								    </a>
								    <div class="clear"></div>
						</div>
					</span>
					<a href="javascript:writeCookie(<?php echo e($list->id); ?>);" class="btn jr"><img src="<?php echo e(asset('/home/picture/icon_plus.png')); ?>" alt="">加入备选老师</a>
					<div class="clear"></div>
					<!--金牌教员-->
					<div style="margin-top:60px;">
						<span>
							<?php if($list->tc_jinpai == '2'): ?>
								金牌教员
							<?php elseif($list->tc_jinpai == '1'): ?>
								专职教员
							<?php elseif($list->tc_jinpai == '0'): ?>
								学生教员
							<?php endif; ?>
						</span><img src="" alt="" />
					</div>
				</div>
				<div class="teach-info">
					<ul>
						<div class="clear"></div>
					</ul>
					<dl style='width:100%'>
						<dt>学　　校：</dt>
						<dd class='qw'><?php echo e($list->tc_school); ?><input type="" /></dd>
					</dl>
					<dl style='width:100%'>
						<dt>专业类别：</dt>
						<dd class='qw'><?php echo e($list->tc_zhuanye); ?><input type="" /></dd>
					</dl>
					<dl style='width:100%'>
						<dt>具体专业：</dt>
						<dd class='qw'><?php echo e($list->tc_spl); ?><input type="" /></dd>
					</dl>
					<dl style='width:100%'>
						<dt>性　　别：</dt>
						<dd class='qw'><?php echo e($list->tc_sex='1'?'男':'女'); ?><input type="" /></dd>
					</dl>
					<dl style='width:100%'>
						<dt>籍　　贯：</dt>
						<dd class='qw'><?php echo e($list->tc_jiguan); ?><input type="" /></dd>
					</dl>
					<dl style='width:100%'>
						<dt>年　　级：</dt>
						<dd class='qw'><?php echo e($list->tc_nj); ?><input type="" /></dd>
					</dl>
					<dl style='width:100%'>
						<dt>教　　龄：</dt>
						<dd class='qw'><?php echo e($list->tc_jl); ?><input type="" /></dd>
					</dl>
					<dl style='width:100%'>
						<dt>教师性质：</dt>
						<dd>
							<?php echo e($list->tc_type); ?>

						</dd>
					</dl>
					<dl style='width:100%'>
						<dt>平时所在城市：</dt>
						<dd class='qw'>
							<?php echo e($list->tc_now_lives); ?>

							<input type="text"  />

						</dd>
					</dl>
					<dl style='width:100%'>
						<dt>暑假所在城市：</dt>
						<dd class='qw'>
							<?php echo e($list->tc_shu); ?>

							<input type="text"  />

						</dd>
					</dl>
					<dl style='width:100%'>
						<dt>寒假所在城市：</dt>
						<dd class='qw'>
							<?php echo e($list->tc_han); ?>

							<input type="text"  />

						</dd>
					</dl>
					<dl style='width:100%'>
						<dt>联系电话：</dt>
						<dd>
							<span style='margin:0;'>188-8888-8888</span>
						</dd>
					</dl>
				</div>
			</div>
						<div class="teach-form">
				<h4 style="background:white">预约<?php echo e(substr($list->tc_name,0,3)); ?>教员<i>(编号：T<?php echo e($list->id); ?>)</i></h4>
				<form action="<?php echo e(asset('/home//xueyuan/xuqiu_ok.php')); ?>" method="post" onsubmit="return checkSubmit(1);">
					<div class="fg">
						<label for="">联系人</label>
						<input type="hidden" name="teacher_id" id="teacher_id" value="260550">
						<input type="text" maxlength=10 name='contact' id="contact">
					</div>
					<div class="fg">
						<label for="">联系方式</label>
						<input type="text" maxlength=11 id="mobile" name="mobile">
					</div>
					<div class="fg">
						<label for="">科目</label>
						<input type="text" maxlength=10 id="stu_xueke" name='stu_xueke'>
					</div>
					<button type='submit' >立即预约免费上门授课</button>
				</form>
			</div>
						<div class="clear"></div>
		</div>
	</div>
	<div id="content">
		<div class="container">
			<div class="detial-tab">
				<a href="" id="one-page" name="one"></a>
				<div class="tab-link">
					<ul>
						<li class="active"><a href="#one">可授课情况</a></li>
						<li><a href="#two">个人资料</a></li>
						<li><a href="#three">家教经验</a></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="link-cont">
					<div class="page">
						<h3><img src="<?php echo e(asset('/home/picture/icon_teach.png')); ?>" alt="">可授课情况</h3>
						<div class="inner-cont">
							<dl style='width:100%'>
								<dt>可授科目：</dt>
								<dd>
									<!-- <span>高三数学</span><span>高一高二数学</span><span>高一高二英语</span><span>高三英语</span><span>理综</span><span>初三英语</span><span>初一初二数学</span><span>初一初二英语</span><span>小学数学</span><span>小学陪读</span> -->
									<textarea cols="80" rows="5"><?php echo e(substr($list->tc_subjects,1,800)); ?></textarea>
								</dd>
							</dl>
							<dl style='width:100%'>
								<dt>授课区域：</dt>
								<dd>
									<textarea cols="80" rows="5"><?php echo e(substr($list->tc_area,1,800)); ?></textarea>
								</dd>
							</dl>
							<dl style='width:100%'>
								<dt>可授课时间：</dt>
								<dd>
									<textarea cols="80" rows="5"><?php echo e($list->tc_sktime); ?></textarea>
								</dd>
							</dl>
							<dl style='width:100%'>
								<dt>课酬要求：</dt>
								<dd>
									<i><?php if($list->tc_salary == null): ?>
										执行德栗家教收费标准
										<?php else: ?>
										<?php echo e($list->tc_salary); ?>

										<?php endif; ?>
									</i>
									<a href=""><img src="<?php echo e(asset('/home/picture/icon_doubt.png')); ?>" alt="">查看家教标准</a>
								</dd>
							</dl>

							<div class="clear"></div>
						</div>
					</div>
					<div class="page">
						<a href="" id="two-page" name="two" style="height:50px;"></a>
						<h3><img src="<?php echo e(asset('/home/picture/icon_anli.png')); ?>" alt="">个人资料</h3>
						<div class="inner-cont">
							<dl class="last">
								<dt>自我评价：</dt>
								<dd><?php echo e($list->tc_comments); ?></dd>
							</dl>
							<dl style='width:100%'>
								<dt>所获证书：</dt>
								<dd><?php echo e($list->tc_certificate); ?></dd>
							</dl>

						</div>
					</div>
					<div class="page">
						<a href="" id="three-page" name="three"></a>
						<h3>
							<img src="<?php echo e(asset('/home/picture/icon_jilu.png')); ?>" alt="">家教经验
						</h3>
						<dl style='height:80px;' class="last">
								<dt style='color:#9a9a9a;'>家教经验：</dt>
								<dd>　　<?php echo e($list->tc_case); ?></dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
function writeCookie(id)
{
	var hid=id;
//	hid=hid+"a";
	var cookid=$.cookie("listid");
	var all=0;
	if(cookid!=null)
	{
		var arr=cookid.split("||");
		all = arr.length;
		if(arr.length>=10){
			alert("备选老师不能超过10个！");
			return false;
		}
		var exist=0;
		var newid=arr[0];
		for(var i=0;i<arr.length;i++)
		{
			if(hid==arr[i])
			{
			    exist++;
			}
			if(i>0 && i<10 && arr[i]!='')
			{
				newid=newid+"||"+arr[i];
			}
		}
		if(exist<=0)//没有重复id
		{
		       //cookid=cookid+"||"+hid;
		       cookid=hid+"||"+newid;
		}else{
			cookid=newid;
		}
		//alert(newid);
	}
	else
	{
		cookid=hid;
	}

	$.cookie("listid",cookid,{
	    //domain: 'jiajiao114.com',
		//domain: '127.0.0.1',
		domain: 'jiajiao114.com',
	    path: '/',
	    expiresAt: new Date( 2012, 1, 1 )
	  });

	var all_count= all+1;
	if(exist<=0)
	{
		$("#beixuan_count").html(all_count);
	}
	alert("您的备选中成功添加了编号为T"+id+"的老师！");

}

function yuyueCookie(){
	var cookid=$.cookie("listid");
	$("#cookietid").val(cookid);

	$("#yuyue_submit").submit();
}


</script>
</body>
<script type="text/javascript" src= "<?php echo e(asset('/home/js/jquery.min.js')); ?>"></script>

<script type="text/javascript" src= "<?php echo e(asset('/home/js/superslide.js')); ?>"></script>

<script type="text/javascript" src= "<?php echo e(asset('/home/js/script.js')); ?>"></script>

<script type="text/javascript" src= "<?php echo e(asset('/home/js/jquery.cookie.js')); ?>"></script>

<script>
    		$(function(){
    			var list = $.cookie("listid");
    			if(list!=null&&list!=""){
    				$("#beixuan_count").html(list.split("||").length);
    			}else{
    				$("#beixuan_count").html("0");
    			}
    		});

    		function yuyueCookie(){
    			var cookid = $.cookie("listid");
    			$("#cookietid").val(cookid);
    			$("#yuyue_submit").submit();

		};var _hmt = _hmt || [];(function() {var hm = document.createElement("script");hm.src = "https://hm.baidu.com/hm.js?37e4f3e1af4b0922381d2be8a23a5a1d";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s);})();
	</script>
</html>