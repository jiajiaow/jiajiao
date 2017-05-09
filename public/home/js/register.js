function check_email(email){
	$.get("/ajax/check_email.php",{str:email},function(data){
		if(data){
			$("#email_prompt").html(data);
		}
	});
}

function checkPtidChacter(pvRegNameEx) {
    var reg = /^[a-z][a-z0-9]+$/i;
    var result = reg.test(pvRegNameEx);
    return result;
}

function checkPtidEx() {
	var pvRegNameEx = $("#uname").val();

	$('#username_prompt').removeClass('box_true');
    $('#username_prompt').addClass('box_false');

    if (pvRegNameEx == "") {
        alert("请输入账号！");
        $("#uname").focus();
        return false;
    }
    else {
        var lvFirstChar = pvRegNameEx.substring(0, 1);
        if (lvFirstChar == "0" || lvFirstChar == "1" || lvFirstChar == "2" || lvFirstChar == "3" || lvFirstChar == "4" || lvFirstChar == "5" || lvFirstChar == "6" || lvFirstChar == "7" || lvFirstChar == "8" || lvFirstChar == "9") {
        	alert("首字符必须用字母！");
        	$("#uname").focus();
            return false;
        }
        if (checkPtidChacter(pvRegNameEx)) {
            var lvLen = 0;
            var reg = /^[\u4e00-\u9fa5]+$/i;
            for (var i = 0; i < pvRegNameEx.length; i++) {
                lvLen++;
                var lvCheckChar = pvRegNameEx.substring(i, i + 1);
                if (reg.test(lvCheckChar)) {
                    lvLen++;
                }
            }
            if (lvLen < 4 || lvLen > 16) {
            	alert("长度应为4-16位字母、数字");
            	$("#uname").focus();
                return false;
            }
        }
        else {
        	alert("只能使用4-16位字母、数字");
        	$("#uname").focus();
            return false;
        }
    }
    $.get("/ajax/check_username.php",{str:pvRegNameEx},function(data){
		if(data == 1){
			$("#hidden_name").val(1);
		}else if(data == 2)
		{
			alert("用户名已存在!");
			$("#hidden_name").val(2);
		}else if(data == 3)
		{
			alert("用户名长度必须在3-20位之间");
			$("#hidden_name").val(3);
		}
	});
}
