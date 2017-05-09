$(function(){
	$(document).on('click','.teach_adress li',function(){
		$('.teach_adress li').removeClass('active')
		$(this).addClass('active')
	})
	$(document).on('click','.teach_education li',function(){
		$('.teach_education li').removeClass('active')
		$(this).addClass('active')
	})
})