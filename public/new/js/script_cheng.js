// 学员中心订单侧栏的动态移动
//licheng 
	//侧栏的滑动
	$('.bian_nav').on('mouseover','li',function(){
		if(!$(this).hasClass('cheng_active')){
			$(this).addClass('cheng_active')
	 				.siblings('li').removeClass('cheng_active');
		}
	});
	// 主体部分的滑动banner
	$('.c_bannar').on('mouseover','span',function(){
		if(!$(this).hasClass('cheng_item')){
			$(this).addClass('cheng_item')
				   .siblings('span').removeClass('cheng_item');
		};
	});


