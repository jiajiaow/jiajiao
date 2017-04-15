$(document).ready(function(){
	//登陆时的切换
	$('#y').click(function(e){
		e.preventDefault();
		$("div.line").css('left','70%');
		$('#ptForm').show()
					.siblings('#validForm').hide();
	});
	$('#z').click(function(e){		
		e.preventDefault();
		$('div.line').css('left','40%');
		$('#validForm').show()
					   .siblings('#ptForm').hide();
	});
	$('#getsms').click(function(){
		
		getCode();
		var get_code=$('#getsms');
		time(get_code);
		
	});
	

});
//注册时的验证
	$('#mobile').focus(function(){
		checkSubmitMobil();
	})
function checkSubmitMobil() {
		if ($("#uname").val() == "") {
			alert("手机号码不能为空！");

			$("#uname").focus();
			return false;
		}

		if (!$("#uname").val().match(/^1[345678][0-9]{9}$/)) {
			alert("手机号码格式不正确！");
			$("#uname").focus();
			return false;
		}
		return true;
	}

//获取验证码
function getCode(){
    var mobile=$('#mobile').val();
    $.ajax({
        type:"POST",
        url:'',
        data:{"mobile":mobile},
        dataType:'Json',
        contentType: "application/x-www-form-urlencoded; charset=utf8",
        complete: function () { },
        success:function(result){
            alert(result);
        },
        error:function(result,status){
            console.log(result);
        }
    });

}
//验证码倒计时
var wait=60;
function time(o,p){
	
    if(wait==0){
        o.removeAttr("disabled");
		$('#deng').removeAttr('disabled');	
        o.val("获取验证码");
    //    p.html("如果您在一分钟内没有收到验证码，请检查您填写的手机号码是否正确或重新发送");
        wait = 60;
    }else{
        o.attr('disabled','true');
		$('#deng').attr('disabled','true')
        o.val("倒数"+wait+"s");
        wait--;
		if($('#mobile').val()==""){
			$('#deng').attr('disabled','true');
		}else{
			$('#deng').removeAttr('disabled');
		}
        setTimeout(function(){
            time(o,p);//循坏调用
        },1000);
    }
}
//此处是教员中心的全选
$('#all').click(function(){
	checkAll(this.checked);
})
function checkAll(caozhen){
	var arr =$('.X');
	if(caozhen){
		for(var i=0;i<arr.length;i++){
			arr[i].checked = true;
		}
		
	}else{
		for(var i=0;i<arr.length;i++){
			arr[i].checked = false;
		}
	}
}
function cheng(q){
	var all=$('.x');
	if(q){
		for(var i=0;i<all.length;i++){
			all[i].checked = true;
		}
	}else{
		for(var i=0;i<all.length;i++){
			all[i].checked = false;
		}
	}
}
//码农的悲哀
$('#li').click(function(){
	quanxuan(this.checked);
})
function quanxuan(v){
	var suoyou = $('.li');
	if(v){
		for(var i= 0;i<suoyou.length;i++){
			suoyou[i].checked = true;
		}
	}else{
		for(var i= 0;i<suoyou.length;i++){
			suoyou[i].checked = false;
		}
	}
}
//实现select框可以选择和手动输入
var Select = {
		del : function(obj,e){
			if((e.keyCode||e.which||e.charCode) == 32){
				var opt = obj.options[0];
				opt.text = opt.value = opt.value.substring(0, opt.value.length>0?opt.value.length-1:0);
			}
		},
		write : function(obj,e){
			if((e.keyCode||e.which||e.charCode) == 32)return ;
			var opt = obj.options[1];
			opt.selected = "selected";
			opt.text = opt.value += String.fromCharCode(e.charCode||e.which||e.keyCode);
		}
};


