$(document).ready(function(){
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
		var phone = $("#uname").val();
		$.ajax({
			type:'POST',
			url:"/docode.html",
			contentType:"application/x-www-form-urlencoded; charset=utf8",
			data:{"phone":phone},
			/*dataType:'JSON',*/
			success:(function(result){
				if(result == 'y'){
					layer.alert('请注意查收短信!',{icon: 6,time:1500});
				}
				//console.log(result);
			}),
			error:(function(result,status){
				//console.log(result);
				//larye.alert('短信sb!');
			})

		});
		
	});
	

});
//注册时的验证
	$('#mobile').focus(function(){
		checkSubmitMobil();
	})
function checkSubmitMobil() {
		if ($("#uname").val() == "") {
			layer.alert("手机号码不能为空！",{icon:5,time:1500});

			$("#uname").focus();
			return false;
		}

		if (!$("#uname").val().match(/^1[345678][0-9]{9}$/)) {
			layer.alert("手机号码格式不正确！",{icon: 5,time:1500});
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
$('')
