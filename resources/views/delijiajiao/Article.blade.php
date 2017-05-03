@extends('delijiajiao.public.public')
@section('title','文章中心')
@section('style')
  <link rel="stylesheet" type="text/css" href="/delijiajiao/css/cheng_css.css">
  <link rel="stylesheet" href="/delijiajiao/css/bootstrap.css">
  <style type="text/css">
    body,p,h1,h2,h3,h4,h5,h6,ul,li{
    margin:0;
    padding:0;
    list-style:none;
    color:#333;
  }
  /*html,body,form{
    width:100%;
    height:100%;
    margin:0;
    padding:0;
  }*/
  body{
    font-family:"Microsoft yahei";
    font-size:12px;
    background-color: #fdfdfd;
  /*  margin:0;
    padding:0;*/
  }
  div{
    display:block;
  }
    #header{
      width:100%;
      height:100px;
      background-color: #FACC40;
    }
    .cheng_header{
      margin:auto;
      width: 1200px;
      height: 100px;
      background-color: #FACC40;
    }
    .lf{
      float: left ;
    }
    .rt{
      float: right ;
    }
    a{
      text-decoration:none;
    }
    a:hover{
      text-decoration:none;
    }

  </style>
@endsection
@section('content')
  <!-- 左侧栏 -->
  <section style="width:1200px;margin: auto;margin-top: 15px;">
    <article>
      <ul class="art-cb">
      @foreach($data as $ls)
        @if($ls->dh_status == '1')
          <li><a href="/Articlecenter{{ $ls->dh_id }}.html">{{ $ls->dh_Navigationbar }}</a></li>
        @endif
      @endforeach
        <i></i><li><a href="">资源中心</a></li>
      @foreach($data as $erj)
        @if($erj->dh_status == '0')
        <li class='art-zuo' style="margin-left:92px">
          <a style="color: #9a9a9a" href="/Articlecenter{{ $erj->dh_id }}.html">{{ $erj->dh_Navigationbar }}</a>
        </li>
        @endif
      @endforeach
      </ul>
  </article>
  <div class="wz-container">
      <div class="wz-wz">
        <span></span>
        <a href="/Articlecenter.html" onclick="window.history.go(-1);"><&nbsp;&nbsp;返回上一级</a>
      </div>
      @if($list !== null)
        @foreach($list as $li)
        <div class='wz-nr'>
          <i></i>
          <p><a href="/Articlecontent{{ $li->ar_id }}.html">{{ $li->ar_title }}</a></p>
          @if($li->ar_status == '1')
            　　<img src="/delijiajiao/images/zd.png" alt="">
          @endif
          <p>111</p>
          <span>{{ $li->ar_time }}</span>
        </div>
        @endforeach
      @endif
  </div>
  <div class="c_yejiao">
    <a href="">末页</a>
    <a href="">下一页</a>
    <a href="">上一页</a>
    <a href="">首页</a>
    <label>页数:1/2</label>
  </div>
  </section>
 <script type="text/javascript" src='js/jquery-2.2.3.min.js'></script>
 <script>
   let item = $('.wz-nr');
   for (var i=0;i<item.length;i++){
      if(i%2!==0){
        item[i].style.backgroundColor = '#FCFCFD';
      }
   }
 </script>
@endsection
@section('js')
    <script type="text/javascript">
        $('#cheng').remove();
        $('#f').remove();
    </script>
@endsection
