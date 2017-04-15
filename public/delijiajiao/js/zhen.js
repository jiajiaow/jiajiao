/*广告轮播*/
var imgs=[
	{"i":0,"img":"/delijiajiao/picture/banner.png"},
	{"i":1,"img":"/delijiajiao/picture/br1.png"},
	{"i":2,"img":"/delijiajiao/picture/br2.png"},
];
var adv={
	liwidth:0,
	$ullist:null,
	INTERVAL:1500,
	WAIT:2000,
	timer:null,
	init:function(){

		this.liwidth=parseFloat($(".banner-main").css("width"));
		this.$ullist=$(".banner-list");
		this.updateView();
		$(".banner-index").on("mouseover","li",(e)=>{
			var target=$(".banner-index>li").index(e.target);
			var old=imgs[0].i;
			this.move(target-old);

		});
		this.autoMove();
	},
	autoMove:function(){
		this.timer=setTimeout(this.move.bind(this,1),this.WAIT);
	},
	move:function(n){
		clearTimeout(this.timer);
		if(n<0){
			n*=-1;
			imgs=imgs.splice(-n,n).concat(imgs);
			this.updateView();
			this.$ullist.css("left",parseFloat(this.$ullist.css("left"))-n*this.liwidth);
			this.$ullist.stop(true);
			this.$ullist.animate({left:0},this.INTERVAL,()=>this.autoMove());

		}else{
			this.$ullist.stop(true);
			this.$ullist.animate(
				{left:-n*this.liwidth},
				this.INTERVAL,this.moveCallback.bind(this,n)
			);
		}
	},
	moveCallback:function(n){
		imgs=imgs.concat(imgs.splice(0,n));
		this.updateView();
		this.$ullist.css("left",0);
		this.autoMove();
	},
	updateView:function(){

		for(var i=0,lis="",idex="";i<imgs.length;i++){
			lis+=`<li><img src="${imgs[i].img}"></li>`;
			idex+="<li></li>";
		}
		this.$ullist.html(lis)
					.css("width",imgs.length*this.liwidth);
		$(".banner-index").html(idex)
						  .children(`li:eq(${imgs[0].i})`).addClass("hover");

	}

};
adv.init();//调用函数
$('#shou').click(function(){
   $(this).css('display','none');
    $('#gen').css('display','block');
    $('.x').css('display','none');
});
$('#gen').click(function(){
    $(this).css('display','none');
     $('#shou').css('display','block')
    $('.x').css('display','block');
})
//预约的界面
function caozhen(type){
	var m = document.getElementById("cheng_mobile");
	if(m.value==""){
            	alert("请输入你的手机号码！");
		return false;
	}
	//var reg = /^(?:13\d|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|4|5|6|7|8|9]|147)-?\d{5}(\d{3}|\*{3})$/;
        var reg = /^((13[0-9])|(17[0-1,6-8])|(15[^4,\\D])|(18[0-9]))\d{8}$/;
	if(reg.test(m.value)==false){
		alert("请输入正确的手机号码！");
		return false;
	}

	var contact = document.getElementById("cheng_contact").value;
	if(contact == '')
	{
		alert("请填写联系人");
		return false;
	}
	if(type == 1)
	{
		var stu_xueke = document.getElementById("zhangqiming").value;
		if(stu_xueke == '')
		{
                    alert("请填写科目");
                    return false;
		}
	}
}
//滚动部分的代码
$(window).on('scroll',function(){
    zhenwoaini();
})
function zhenwoaini(){
    if($('.cheng_teach-form').length){

        var shing = $(window).scrollTop();
        Htop = ($(window).height()-$('.cheng_teach-form').height())/2,
        offtop = $('#sxc').offset().top +50;
        H = $('.cheng_teach-form').height();
        if(shing >=offtop){
            var scrolltoTop = shing - offtop +Htop,
                    totlaH = $('#sxc').height()-H;
            if (scrolltoTop >=totlaH) {
		$(".cheng_teach-form").stop(true).delay(0).animate({top: totlaH  + "px" },  { duration: 0, easing: "linear" });
		}else {
                    $(".cheng_teach-form").stop(true).delay(0).animate({top: scrolltoTop  + "px" },  { duration: 0, easing: "linear" });
		}
        }else{
            $(".cheng_teach-form").stop(true).delay(0).animate({top: 15 + "px" },  { duration: 0, easing: "linear" });
        }

    }
}
//学员登陆的验证码和手机号码的验证
//获取学员的验证码
$('#huoqu').click(function(){
	createCode();
	var huoqu = $('#huoqu');
	time(huoqu);
});
function createCode(){
	var yanzhenma = $('#yanzhenma').val();
	$.ajax({
		url:'',
		type:'POST',
		dateType:'JSON',
		data:{'yanzhenma':'yanzhenma'},
		contentType: "application/x-www-form-urlencoded; charset=utf8",
		success:function(result){
			console.log(result);
		},
		error:function(result,status){
			console.log(result);
			console.log(status);
		}

	});
}
var wait = 60;
function time(c,z){
	if(wait==0){
		c.removeAttr('disabled');
		c.val('获取验证码');
		wait = 60;
	}else{
		c.attr('disabled','true');
		c.val('倒数' + wait +'s');
		wait --;
		setTimeout(function(){
			time(c,z);
		},1000)
	}
}
//学员快速请家教的验证
	$('#mingzi').blur(function(){
		var q = $(this);
		if(q.val()==''){
			layer.alert('姓名不能为空', {icon: 5});
		}else{
			$(this).siblings('#shouji').removeAttr('disabled')
		}
	})
	$('#shouji').blur(function(){

		if($(this).val()==''){
			layer.alert('手机号码不能为空',{icon:5});
			return;
		}
		var reg =/(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/;
		if(reg.test($(this).val())==false){
			layer.alert('请输入正确的手机号码',{icon:5});
			return false;
		}
	//	else{
	//		$('#shouji').siblings('#yanzhenma').removeAttr('disabled')
	//	}
	})
        //公用手机验证1
	$('#gy_1_hq').click(function(){
	createCode();
	var huoqu = $('#gy_1_hq');
	time(huoqu);
});
function createCode(){
	var gy_1_yzm = $('#gy_1_yzm').val();
	$.ajax({
		url:'',
		type:'POST',
		dateType:'JSON',
		data:{'gy_1_yzm':'gy_1_yzm'},
		contentType: "application/x-www-form-urlencoded; charset=utf8",
		success:function(result){
			console.log(result);
		},
		error:function(result,status){
			console.log(result);
			console.log(status);
		}

	});
}
var wait = 60;
function time(c,z){
	if(wait==0){
		c.removeAttr('disabled');
		c.val('获取验证码');
		wait = 60;
	}else{
		c.attr('disabled','true');
		c.val('倒数' + wait +'s');
		wait --;
		setTimeout(function(){
			time(c,z);
		},1000)
	}
}
//学员快速请家教的验证
	$('#gy_1_mz').blur(function(){
		var q = $(this);
		if(q.val()==''){
			layer.alert('姓名不能为空', {icon: 5});
		}else{
			$(this).siblings('#gy_1_sj').removeAttr('disabled')
		}
	})
	$('#gy_1_sj').blur(function(){

		if($(this).val()==''){
			layer.alert('手机号码不能为空',{icon:5});
			return;
		}
		var reg =/(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/;
		if(reg.test($(this).val())==false){
			layer.alert('请输入正确的手机号码',{icon:5});
			return false;
		}
	//	else{
	//		$('#shouji').siblings('#yanzhenma').removeAttr('disabled')
	//	}
	})
          //公用手机验证2
	$('#gy_2_hq').click(function(){
	createCode();
	var huoqu = $('#gy_2_hq');
	time(huoqu);
});
function createCode(){
	var gy_2_yzm = $('#gy_2_yzm').val();
	$.ajax({
		url:'',
		type:'POST',
		dateType:'JSON',
		data:{'gy_2_yzm':'gy_2_yzm'},
		contentType: "application/x-www-form-urlencoded; charset=utf8",
		success:function(result){
			console.log(result);
		},
		error:function(result,status){
			console.log(result);
			console.log(status);
		}

	});
}
var wait = 60;
function time(c,z){
	if(wait==0){
		c.removeAttr('disabled');
		c.val('获取验证码');
		wait = 60;
	}else{
		c.attr('disabled','true');
		c.val('倒数' + wait +'s');
		wait --;
		setTimeout(function(){
			time(c,z);
		},1000)
	}
}
//学员快速请家教的验证
	$('#gy_2_mz').blur(function(){
		var q = $(this);
		if(q.val()==''){
			layer.alert('姓名不能为空', {icon: 5});
		}else{
			$(this).siblings('#gy_2_sj').removeAttr('disabled')
		}
	})
	$('#gy_2_sj').blur(function(){

		if($(this).val()==''){
			layer.alert('手机号码不能为空',{icon:5});
			return;
		}
		var reg =/(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/;
		if(reg.test($(this).val())==false){
			layer.alert('请输入正确的手机号码',{icon:5});
			return false;
		}
	//	else{
	//		$('#shouji').siblings('#yanzhenma').removeAttr('disabled')
	//	}
	})
