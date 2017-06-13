<!DOCTYPE html>
<script src="/phone/js/flexible.js"></script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>快速请家教</title>
    <link rel="stylesheet" href="/phone/css/fast.css">
    <link rel="stylesheet" href="/phone/css/reset.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="wrap">
        <div class="nav_header">
            <i class="header_left_icon header_icon" onclick="javascript :history.back(-1);"></i>
            <span>快速请家教</span>
            <a href="/mobile/login.html"><i class="header_right_icon header_icon"></i></a>
        </div>
        <section class="form_fastTutor">
            <div class="form_fastTutor_title">
                <i class="form_fastTutor_title_icon"></i>
                <span class="form_fastTutor_title_text">简单填写，快速预约老师</span>
            </div>
            <div class="form_fastTutor_content">
                <ul>
                <form method="post" id="do" action="/yuyuexiangxi.html" >
                {{ csrf_field() }}
                    <li>
                        <span>联系人：</span><input type="text" name="lxr" placeholder="请输入您的名字" id="lxr">
                    </li>
                    <li>
                        <span>科目：</span><input type="text" name="km" placeholder="请输入需要辅导的科目" id="km">
                    </li>
                    <li>
                        <span>手机号：</span><input type="text" name="phone" placeholder="请输入您的手机号码" id="phone">
                    </li>
                    <li>
                        <input type="text" maxlength="4" placeholder="请输入手机验证码" name="yzm" id="yzm" style="padding-left: .3rem">
                        <input class="yzm_btn" style="margin: 0" value="获取验证码" type="button" onclick="settime(this)"></input>
                    </li>
                </ul>
                </form>
                <span class="tj_button" onclick='checkPhone()'>立即提交</span>
            </div>
        </section>
        <section class="tel_box">
            <div class="tel_box_1">
                <ul>
                    <li>
                        <i class="fz_icon fast_icon"></i>
                        <span>{{ substr(session('cityname'),0,6) }}分站：{{ session('regionname') }}</span>
                    </li>
                    <li>
                        <i class="bluephone_icon fast_icon"></i>
                        <span>{{ session('phone') }}</span>
                    </li>
                </ul>
            </div>
            <div class="tel_box_2">
                <ul>
                    <li style="margin: .3rem 0 0 0;">
                        <i class="redphone_icon fast_icon"></i>
                        <span>全国统一热线：400-8080-740</span>
                    </li>
                    <li>
                        <i class="wx_icon fast_icon"></i>
                         <span>微信号：{{ session('fz_wxhao') }}</span>
                    </li>
                </ul>
            </div>
        </section>
 @include('phonedl.float.float')
    </div>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

    <script>
        var countdown=60;
        function settime(obj) {
            var phone = $("#phone").val();
            var name = document.getElementById('lxr').value;
            if(!(/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(name))){
                alert("名字输入信息有误，请重填");
                return
            }
            var km = document.getElementById('km').value;
            if(!(/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(km))){
                alert("科目输入信息有误，请重填");
                return
            }
            var phone = document.getElementById('phone').value;
            if(!(/^1[34578]\d{9}$/.test(phone))){
                alert("手机号码有误，请重填");
                return
            }


            $.ajax({
                type:'POST',
                url:"/register",
                contentType:"application/x-www-form-urlencoded; charset=utf8",
                data:{"phone":phone},
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(result){
                    if(result == 'y'){
                        alert("请注意查收短信!");
                        lisr(obj);
                    }
                    //console.log(result);
                },
            });

        }
        function lisr (obj) {
            if (countdown == 0) {
                obj.removeAttribute("disabled");
                obj.value="获取验证码";
                countdown = 60;
                return;
            } else {
                obj.setAttribute("disabled", true);
                obj.value="重新发送(" + countdown + ")";
                countdown--;
            }
            setTimeout(function() {
                    lisr(obj) }
                ,1000);
        }
        function checkPhone(){
            var phone = $("#phone").val();
            var lxr = $("#lxr").val();
            var km = $("#km").val();

            var name = document.getElementById('lxr').value;
            if(!(/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(name))){
                alert("名字输入信息有误，请重填");
                return
            }
            var km = document.getElementById('km').value;
            if(!(/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(km))){
                alert("科目输入信息有误，请重填");
                return
            }
            var phone = document.getElementById('phone').value;
            if(!(/^1[34578]\d{9}$/.test(phone))){
                alert("手机号码有误，请重填");
                return
            }
            var yzm = document.getElementById('yzm').value;
            if(!(/^[0-9]*$/.test(yzm)) || yzm =='' || yzm.length < '4'){
                alert("验证码输入有误，请重填");
                return
            }
                $.ajax({
                type:'POST',
                url:"/registerdo",
                contentType:"application/x-www-form-urlencoded; charset=utf8",
                data:{"code":yzm,"name":lxr,"km":km,"phone":phone},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(result){
                    if(result == 'y'){
                        //$("#tj[type='button']").attr('type','submit');
                        $("#do").submit();
                    }else{
                        alert("验证码输入有误，请重填");
                    }
                    //console.log(result);
                },
                error:(function(result,status){
                    //console.log(result);
                    larye.alert('系统错误请联系管理员!');
                })
            });
        }

    </script>
    <style>

        nput[type="button"], input[type="submit"], input[type="reset"] {
-webkit-appearance: none;
}
textarea { -webkit-appearance: none;}
    </style>
</body>
</html>
