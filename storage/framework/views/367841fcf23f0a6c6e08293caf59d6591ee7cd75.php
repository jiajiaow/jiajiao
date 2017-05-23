<?php $__env->startSection('title',mb_substr(session('regionname'),0,2)); ?>
<?php $__env->startSection('style'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link href="/home/bootstrap.min.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <style type="text/css">
    *{
      margin:0;
      padding: 0;
    }
    p{
      padding: 0;
      margin: 0;
    }
    li{
      list-style: none;
    }
  </style>
  <div class="wrap">
    <div class="title_p">
      <h3>请完善您的个人资料，方便为您匹配家教订单</h3>
    </div>
    
    <form method="post" action="StudentAdd"  onSubmit="return ChkFields();" name="myform" id="myform">

        <div class="content">
      <ul>
        <li>
          <p>联系微信</p>
          <input type="" name="wx"> <span class="fb">非必填，找到老师后，我们将通过微信将老师的简历发给您</span>
        </li>
        <li>
          <p>联系QQ</p>
          <input type="" name="qq"><span class="fb">非必填，仅网站工作人员可见，请放心填写</span>
        </li>
        <li>
          <p>学员性别</p>
          <input name="user_sex" type="radio" value="1" checked="">男　
          <input name="user_sex" type="radio" value="2">女
          <input name="user_sex" type="radio" value="3">男女不限
        </li>
        <li>
          <p>学员年级</p>
          <select name="grade"  style="width:255px;height:34px;" id="yxnj">
              <OPTION value="" selected>请选择</OPTION>
              <OPTION value="幼儿">幼儿</OPTION>
              <OPTION value="一年级">一年级</OPTION>
              <OPTION value="二年级">二年级</OPTION>
              <OPTION value="三年级">三年级</OPTION>
              <OPTION value="四年级">四年级</OPTION>
              <OPTION value="五年级">五年级</OPTION>
              <OPTION value="六年级">六年级</OPTION>
              <OPTION value="初一">初一</OPTION>
              <OPTION value="初二">初二</OPTION>
              <OPTION value="初三">初三</OPTION>
              <OPTION value="高一">高一</OPTION>
              <OPTION value="高二">高二</OPTION>
              <OPTION value="高三">高三</OPTION>
              <OPTION value="艺考生">艺考生</OPTION>
              <OPTION value="其它年级">其它年级</OPTION>
              <OPTION value="成人">成人</OPTION>
          </select>
          <span class="bt">必填</span>
        </li>
        <li>
          <p>学员希望的主要辅导类型</p>
          <select name="fdlx" style="width:255px;height:34px;">
            <option value="授课教学">授课教学</option>
            <option value="作业辅导">作业辅导</option>
            <option value="讲解疑难">讲解疑难</option>
          </select><span class="fb">非必填</span>
        </li>
        <li>
          <p>家教时间安排</p><span>每周上</span>
          <select name="o_ts" style="height: 34px;margin-right: 10px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select><span>天课</span><span>,每次</span>
          <select name="o_xs" style="margin: 0 10px;height: 34px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select><span style="margin-right: 10px;">小时</span>
        </li>
        <li class="licbox">
          <h5 style="font-size:16px; color:#afafaf;">可授课时间</h5>
          <table>
            <tr>
              <td>
                <p>周一</p>
                <input type="checkbox" value="周一上午"  name="sk_times1">上午
                <input type="checkbox" value="周一下午" name="sk_times2">下午
                <input type="checkbox" value="周一晚上" name="sk_times3">晚上
              </td>
              <td>
                <p>周二</p>
                <input type="checkbox" value="周二上午" name="sk_times4">上午
                <input type="checkbox" value="周二下午" name="sk_times5">下午
                <input type="checkbox" value="周二晚上" name="sk_times6">晚上
              </td>
              <td>
                <p>周三</p>
                <input type="checkbox" value="周三上午" name="sk_times7">上午
                <input type="checkbox" value="周三下午" name="sk_times8">下午
                <input type="checkbox" value="周三晚上" name="sk_times9">晚上
              </td>
              <td>
                <p>周四</p>
                <input type="checkbox" value="周四上午" name="sk_times10">上午
                <input type="checkbox" value="周四下午" name="sk_times11">下午
                <input type="checkbox" value="周四晚上" name="sk_times12">晚上
              </td>
            </tr>
            <tr>
              <td>
                <p>周五</p>
                <input type="checkbox" value="周五上午" name="sk_times13">上午
                <input type="checkbox" value="周五下午" name="sk_times14">下午
                <input type="checkbox" value="周五晚上" name="sk_times15">晚上
              </td>
              <td>
                <p>周六</p>
                <input type="checkbox" value="周六上午" name="sk_times16">上午
                <input type="checkbox" value="周六下午" name="sk_times17">下午
                <input type="checkbox" value="周六晚上" name="sk_times18">晚上
              </td>
              <td>
                <p>周日</p>
                <input type="checkbox" value="周日上午" name="sk_times19">上午
                <input type="checkbox" value="周日下午" name="sk_times20">下午
                <input type="checkbox" value="周日晚上" name="sk_times21">晚上
              </td>
              <td>
                <input type="checkbox" value="时间面议" name="sk_times22">时间面议
              </td>
            </tr>
          </table>
        </li>
        <li>
          <p>所在城区</p>
                      <select name="dq" id="dq" style="width:255px;height:34px;">
      <option value="" selected>请选择</option>
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($data->county_name); ?>"><?php echo e($data->county_name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select><span class="bt">必填</span>
        </li>
        <li>
          <p>家教上课地点</p>
          <input type="" name="xx_dz" id="xx_dz"><span class="bt">必填</span>
        </li>
        <li>
          <p>选择教员性别</p>
                <input type="radio" name="teacher_sex" value="1">男教员
                <input type="radio" name="teacher_sex" value="2" checked>女教员
                <input type="radio" name="teacher_sex" value="3">男女均可
        </li>
        <li>
          <p>对教员具体的要求</p>
          <textarea name='teacher_info'>有责任心，有家教经验优先。</textarea>
        </li>
        <li>
          <p>教员性质</p>
          <select name='ls_type' style="width:255px;height:34px;" >
            <option value="大学生家教">大学生家教</option>
            <option value="专职老师">专职老师</option>
            <option value="大学生专职老师均可">大学生专职老师均可</option>
          </select><span class="bt">必填</span>
        </li>
        <li>
          <p>学生情况描述</p>
          <textarea name="user_situation"></textarea>
        </li>

        <li>
          <p>支付给老师的报酬</p>
          <select name="money" size="1" id="bc" style="width:255px;height:34px;">
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <option value="60" selected="true">60</option>
                <option value="65">65</option>
                <option value="70">70</option>
                <option value="80">80</option>
                <option value="90">90</option>
                <option value="100">100</option>
                <option value="120">120</option>
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="300">300</option>
            </select>
            <a target="_blank" href="/zfsm.html">点击查看家教薪资参考标准</a>
        </li>
      </ul>
      <input name="oid" value="<?php echo e($orderid); ?>" type="hidden"/>
      <input type="button" value="填好了，立即提交找老师" class="TJ_btn" id="#TJ_btn" onclick="tjbtnIf()">
    </div>
    </form>
  </div>
  <style type="text/css">
    body{
      background-color: #f9f9f9;
    }
    li{
        /*padding: 9px 0;*/
        font-size: 16px;
        color: #676767;
    }
    li input {
        height: 34px;
        width: 255px;
    }
    li p {
        color: #afafaf;
    }
    textarea{
        width: 600px;
        height: 120px;
        border: 1px solid #c7c7c7;
    }
    input[type='radio'] {
        width: 20px;
        height: 20px;
        vertical-align: bottom;
    }
    .wrap{
        width: 80%;
        border: 1px solid #d2d2d2;
        margin: 0 auto;
        background-color: #fff;
    }
    .title_p {
        margin-left: 12%;
        margin-top: 22px;
        color: #636363;
    }
    .content{
        margin-left: 12%;
        padding-bottom: 100px;

    }
    .xynj{
        width: 255px;
        height: 34px;
    }
    .licbox input {
        width: 26px;
        height: 21px;
        vertical-align: bottom;
    }
    .licbox p{
      text-align: center;
    }
    td{
      border: 1px solid #c1c1c1;
      padding: 10px;
      text-align: center;
    }
    .TJ_btn {
        padding: 10px 38px;
        border: 1px solid #8e0d0d;
        border-radius: 5px;
        font-size: 16px;
        background: #ffbf47;
          margin-top: 13px;
    }
    .bt{
      margin-left:10px;
        color: #ecb022;
    }
    .fb{
      margin-left:10px;
      color: #ababab;
    }
    a{
      margin-left: 10px;
      color: #ecb022;
    }
    a:hover{
      text-decoration: none;
    }
    .nav-horizontal{
      height: 65px;
    }
    .nav-horizontal .nav-horizontal-content {
    background: #F7B529;
    font-size: 16px;
    height: 65px;
}



  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    $(function(){
        $("#dropdown").hide();
    })
    <?php echo session('js'); ?>

</script>
<script type="text/javascript">
  $('#qx').click(function(){
    $('#cheng_show').css('display','none');
  });


 function tjbtnIf(){
     var licbox = $('.licbox').find('input')
    console.log(licbox)
     var num = 0;
     for(var i = 0;i<licbox.length;i++){
         if(licbox[i].checked == true){
             num = 1
             break
         }

     }


     var yxnj = $('#yxnj option:selected')[0].innerHTML

     var dq = $('#dq option:selected')[0].innerHTML

     var xx_dz = $('#xx_dz').val()

     if(yxnj == '请选择'){
         alert('必选项没填哦')
         return
     }else if(dq == '请选择'){
         alert('必选项没填哦')
         return
     }else if(xx_dz == ''){
         alert('必选项没填哦')
         return
     }else if(num == 0){
         alert('授课时间没选哦')
         return
     }
     document.getElementById("myform").submit()
 }






</script>
<script>
  $('input#sk').click(function(){
    $('#cheng_a').css('display','block');
  });
  $('#qxx').click(function(){
    $('#cheng_a').css('display','none');
  })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('delijiajiao.public.public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>