@extends('delijiajiao.public.public')
@section('title',session('regionname') )
@section('content')
    <div class="container">
        <div class="zfsm">
            <div class="bt"> </div>
            <div class="nr">
                <form action="">
                    <p>姓名：<input id="gy_1_mz"  type="" value=""/>
                        手机：<input id='gy_1_sj' type='' value="" disabled='true'maxlength='11'>
                        验证码：<input id='gy_1_yzm'type='' value="">
                        <input style='width:94px;padding:.5em 0;' id='gy_1_hq' type="button" value='获取验证码'/>
                        <input style='background-color:#f8b529;' type="submit" value="快速请家教" />
                </form>

                </p>
                <p><h2>
                    <span style="color:#E56600;">|<span style="color:#000000;">收费标准</span></span>
                </h2>
                <h2>预约订单流程</h2>
                接单前注册<br><br>
                确保已经在家教信息发布群中并已在网站上注册好（注册后可一键预约），以便第一时间获取家教信息并成功接单。
                <br><br>
                详细填写个人资料，尤其是个人强项、闪光点、家教经验，我方会根据教员的优秀程度、合适程度，严格进行挑选后推荐给家长和学员。
                <br><br>
                为了保证家长和学员的利益，维护德栗家教品牌的良好口碑，需上传相应身份证、学生证，我方只选择经过身份审核的教员。
                <br><br>
                预约订单
                <br><br>
                看到合适的订单，需确认好家教订单的时间地点课酬均可，并且具备教授对应年级及科目的胜任能力。
                <br><br>
                一定要本着对学员负责的态度，真正有能力有信心能为学员提高成绩。
                <br><br>
                确保个人资料详细，尤其是个人强项、闪光点、家教经验，我方会根据教员的优秀程度、合适程度，严格进行挑选后推荐给家长和学员。
                <br></br>
                上门授课
                <br><br>
                我方根据严格要求挑选中优秀、合适的教员后，将安排校园管理负责人进行培训。
                <br><br>
                上门试课：培训后将进行第一次上门试课，如果家长与学员满意，家长第一次课酬也会一起给到教员，如果家长不满意，则无法获取课酬。同时如果因教员原因而试课不成功，我方将于教员考核系统中进行记录，调低个人评分并加以备注，今后不优先挑选。
                <br><br>
                成功试课：成功试课后签订合同，正常进行授课，一定要本着对学员负责的态度，努力提高学员成绩，同时按周获取课酬。帮助学员成绩提高很多的教员，家长学员满意的教员，我方将于教员考核系统中进行升级，大幅调高个人评分并加以备注，今后优先挑选授课。
                <br><br>
                结束授课
                <br></br><br></br>
                因我方需要对家长和学员负责，会持续跟进学员的成绩和学习进度，将会安排专职老师同步持续跟进，所以如因各种原因需结束授课，必须通知我方，不得私下转让，否则以后概不录用，以免影响我方对学员成绩的继续跟进和提高，影响我方在家长和学员中的实在负责的口碑。
                <br></br>
                <form action="">
                    <p>姓名：<input id="gy_2_mz"  type="" value=""/>
                        手机：<input id='gy_2_sj' type='' value="" disabled='true'maxlength='11'>
                        验证码：<input id='gy_2_yzm'type='' value="">
                        <input style='width:94px;padding:.5em 0;' id='gy_2_hq' type="button" value='获取验证码'/>
                        <input style='background-color:#f8b529;' type="submit" value="快速请家教" />
                </form>

                </p>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $('#cheng').remove();
        $('#f').remove();
    </script>
@endsection