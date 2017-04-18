@extends('delijiajiao.public.public')
@section('title',mb_substr(session('regionname'),0,2))
@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="/home/css/ljj.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div id="scontent">
      <div class="container">
        <div class="education-info">
          <div class="stitle">
            <i><img src="/home/picture/title_left.png" alt=""></i>
            <h3>{{ $data->dq }}{{ mb_substr($data->user_name,0,1) }}@if($data->user_sex == '')女士|先生@elseif($data->user_sex == '0')女士@elseif($data->user_sex == '1')先生
@else其它@endif请{{ $data->grade }}{{ $data->subject_id }}家教</h3>
            <span>{{ date('Y-m-d',$data->time) }}发布</span>
          </div>
          <div class="info">
            <div class="info-left">
              <p>学员请家教预算：<i>{{ $data->money }}</i></p>
              <span><i>{{ $data->browsenu }}</i>人浏览  已有<i>{{ $nu }}</i>人申请</span>
            </div>
            <div class="info-center" style="float:left;">
              <img src="/home/picture/icon_fx.png" alt="">一键分享
                <div class="share">
                  <a title="转发至QQ空间" charset="400-03-8" id="s_qq"
                        href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url={{ $url }}" target="_blank">
                      <img  src="/home/picture/ico_qzone.png" />
                  </a>
                  <a title="分享到微信" charset="400-03-19" id="s_pengyou"
                        href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?to=pengyou&url={{ $url }}&title="{{ $data->dq }}{{ mb_substr($data->user_name,0,1) }}@if($data->user_sex == '')@elseif($data->user_sex == '0')女士@elseif($data->user_sex == '1')先生
@else其它@endif请{{ $data->grade }}{{ $data->subject_id }}"家教 target="_blank">
                      <img src="/home/picture/float_1.png"  width="35px" height="35px" />
                  </a>
                  <a title="转发至新浪微博" charset="400-03-10" id="s_sina"
                      href="http://service.weibo.com/share/share.php?title="{{ $data->dq }}{{ mb_substr($data->user_name,0,1) }}@if($data->user_sex == '')@elseif($data->user_sex == '0')女士@elseif($data->user_sex == '1')先生
@else其它@endif请{{ $data->grade }}{{ $data->subject_id }}"家教&url={{ $url }}&source=bookmark&appkey=2992571369" target="_blank">
                      <img src="/home/picture/ico_sina.png" />
                  </a>
                  <div class="clear"></div>
                </div>
            </div>
            <div style='height:60px;' class="info-right">
              <div style='float:right;' class="top-code">
                <img src="/home/picture/code.jpg" width="114px" height="114px">
                <p style="font-size: 16px">QQ信息发布群</p>
                <p style="font-size:16px">367144804</p>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="step">
          <div class="container">
            <div class="step-in">
              <h3>教员接单流程<img src="/home/picture/icon_you.png" alt=""></h3>
              <ul>
                <li>
                  <img src="/home/picture/Lo_go.png" alt=""   width="45px" height="45px;">
                  申请订单
                  <img src="/home/picture/line.png" alt="">
                </li>
                <li>
                  <img src="/home/picture/Lo_go.png" alt=""   width="45px" height="45px;">
                  审核并挑选教员
                  <img src="/home/picture/line.png" alt="">
                </li>
                <li>
                  <img src="/home/picture/Lo_go.png" alt=""   width="45px" height="45px;">
                  获取订单
                </li>
              </ul>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="student-detial">
            <div class="left">
              <div class="sinfo">
                <div class="stitle">
                  <i><img src="/home/picture/title_left.png" alt="" ></i>
                  <h3>学员信息</h3>
                </div>
                <ul>
                  <li>订单编号：<span>T{{ $data->id }}</span></li>
                  <li>联系人：<span>{{ mb_substr($data->user_name,0,1) }}@if($data->user_sex == '')@elseif($data->user_sex == '0')女士@else先生@endif</span></li>
                  <li>求教科目：<span>{{ $data->subject_id }}</span></li>
                  <li>学员性别：<span>@if($data->user_sex == '')@elseif($data->user_sex == '0')女@elseif($data->user_sex == '1')男
@else其它@endif</span></li>
                  <li>学员年级：<span>{{ $data->grade }}</span></li>
                  <li>所在区域：<span>{{ $data->dq }}</span></li>
                  <li>所在位置：<span>{{ $data->xx_dz }}</span></li>
                  <li>学员概况：<span>{{ $data->user_situation }}</span></li>
                  <li>授课次数：<span>{{ $data->per_week }}</span></li>
                  <li>可授课时间：<span>{{ $data->sk_times }}</span></li>
                </ul>
              </div>
              <div class="sinfo">
                <div class="stitle">
                  <i><img src="/home/picture/title_left.png" alt=""></i>

                  <h3>需要这样的老师</h3>
                </div>
                <ul>
                  <li>性别：<span>@if($data->user_sex == '0')女@elseif($data->user_sex == '1')男
@else其它@endif</span></li>
                  <li>课酬： <i>{{ $data->money }}</i></li>
                  <li>教学方式：<span>教员上门</span></li>
                  <li>老师类型：<span>{{ $data->ls_type }}</span></li>
                  <li>其它要求：<span>{{ $data->teacher_info }}</span></li>
                </ul>
              </div>
              <div class="bottom">
                <a href="/Teacheryy.html?oid={{ $data->id }}" class="btn">申请此订单</a>不是家教德栗家教老师？<a href="/reg.html">免费注册</a>
              </div>
            </div>
            <div class="student-detial-list">

              <div class="stitle">
                <i><img src="/home/picture/title_left.png" alt=""></i>
                <h3 style="margin-left: 10px;">相似家教订单</h3>
              </div>
              <ul>
                <li><a href="/xueyuan/d-84184.html">阚利明需要高一高二英语数学家教</a><em>03-26</em></li>
                <li><a href="/xueyuan/d-83631.html">王小姐需要高一高二英语数学家教</a><em>03-08</em></li>
              </ul>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
@endsection
@section('js')
<script>
$(function(){
  $("#dropdown").hide();
})
{!! session('ts') !!}
</script>
@endsection
