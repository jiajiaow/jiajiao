@extends('delijiajiao.public.public')
@section('title',mb_substr(session('regionname'),0,2))
@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div id="fcontent">
        <div class="container">
            <div class="educate-form">
                <form id="do" method="post" action="/yuyuejiaoyuan.html">
                    {{ csrf_field() }}
                    <h4>简单填写，快速预约老师</h4>

                    <div class="fg" style="border: 1px solid #E0E0E0;">
                        <input type="text" name="lxr" id="lxr" placeholder="联系人" maxlength="10">
                        <input type="hidden" name="teacher_id" id="cheng_teacher_id" value="{{ $tc_id }}">
                    </div>
                    <div class="fg" style="border: 1px solid #E0E0E0;">
                        <input type="text" id="km" name="km" placeholder="科目" maxlength="11">
                    </div>
                    <div class="fg" style="border: 1px solid #E0E0E0;">
                        <input type="text" id="phone" name="phone" maxlength="11" placeholder="手机号码">
                    </div>
                    <div class="fg sfg" style="border: 1px solid #E0E0E0;">
                                        <input type='text' name="yzm" id="yzm" placeholder="验证码" ></input>
                        <input id="zhen" type='button' onclick="test();" value="获取验证码" style="cursor: pointer;background-color: #F7B529;color:#fff;width: 100px;float: right;padding: 0px;"></input>
                    </div>
                    <button id='tj' type="button" onclick="dopost();">提交</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="/delijiajiao/js/layer.js"></script>
<script>
    $(function(){
        $("#dropdown").hide();
    })
    $('.navbar li:nth-child(4)').mouseover(function(){
        $(this).addClass('active')
                .siblings().removeClass('active')
    })
    @if (session('error'))
    {{ session('error') }}
    @endif
    function test()
    {
        var phone = $("#phone").val();
        var lxr = $("#lxr").val();
        var km = $("#km").val();
        var get_code = $("#zhen");

        if(lxr == '')
        {
            layer.msg('请输入联系人', {icon: 3});
            return false;
        }
        if(km == '')
        {
            layer.msg('请输入科目', {icon: 3});
            return false;
        }
        if(phone == '')
        {
            layer.msg('请输入手机号码', {icon: 3});
            return false;
        }
        time(get_code);
        $.ajax({
            type:'POST',
            url:"/register",
            contentType:"application/x-www-form-urlencoded; charset=utf8",
            data:{"phone":phone},
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:(function(result){
                if(result == 'y'){
                    layer.alert('请注意查收短信!',{icon: 3,time:1500});
                }
                //console.log(result);
            }),
            error:(function(result,status){
                //console.log(result);
                //larye.alert('短信sb!');
            })

        });


    }
    var wait  = 60;
    function time(o,p){
        if (wait==0){
            o.removeAttr('disabled');
            o.val("获取验证码");
            wait = 60;

        }else{
            o.attr('disabled','true');
            o.val('重新发送'+wait+'s');
            wait--;
            setTimeout(function(){
                time(o,p);
            },1000);
        }

    }
    function dopost(){
        var phone = $("#phone").val();
        var lxr = $("#lxr").val();
        var km = $("#km").val();
        var yzm = $("#yzm").val();
        if(lxr == '')
        {
            layer.msg('请输入联系人', {icon: 3});
            return false;
        }
        if(km == '')
        {
            layer.msg('请输入科目', {icon: 3});
            return false;
        }
        if(phone == '')
        {
            layer.msg('请输入手机号码', {icon: 3});
            return false;
        }
        if(yzm == '')
        {
            layer.msg('请输入验证码', {icon: 3});
            return false;
        }
        $.ajax({
            type:'POST',
            url:"/registerdo",
            contentType:"application/x-www-form-urlencoded; charset=utf8",
            data:{"code":yzm,"name":lxr,"km":km,"phone":phone},
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:(function(result){
                if(result == 'y'){
                    //$("#tj[type='button']").attr('type','submit');
                    $("#do").submit();
                }else{
                    layer.msg('验证码错误', {icon: 3});
                }
                //console.log(result);
            }),
            error:(function(result,status){
                //console.log(result);
                larye.alert('系统错误请联系管理员!');
            })

        });
    }
    $('#footer').remove();
</script>
@endsection
