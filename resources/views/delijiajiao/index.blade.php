@extends('delijiajiao.public.public')
@section('title',session('regionname') )
@section('content')
    <div class="center">
     <div class="banner">
      <div class="big-banner">
          <!--广告轮播-->
          <div class="banner-container">
            <div class="banner-main over">
                <ul class="banner-list">
                </ul>
                <ul class="banner-index">
                </ul>
            </div>
        </div>

      </div>
      <div class="small-banner">
       <a target="_blank" href="/yuyuelaoshi.html" class="a_d_s_hidden_link adsense-image-link"><img class="a_d_s_img" src="/delijiajiao/picture/b1.png" /></a>
       <a target="_blank" href="/faculty.html" class="a_d_s_hidden_link adsense-image-link"><img class="a_d_s_img" src="/delijiajiao/picture/b2.png" /></a>
       <a target="_blank" href="/reg.html" class="a_d_s_hidden_link adsense-image-link"><img class="a_d_s_img" src="/delijiajiao/picture/b3.png" /></a>
      </div>
     </div>
    <div class="meta-box">
        <div class="meta-welfares meta-block">
            <h3><i class="icon-area"></i>热门大学</h3>
            <ul>
                @foreach($xx as $xx)
                <li style="width: 24.5%; overflow:hidden; text-overflow:ellipsis;"><a href="" target="_blank">{{ $xx->sh_shool }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="meta-area meta-block">
            <h3><i class="icon-welfares"></i>热门学科</h3>
            <ul>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
            </ul>
        </div>
        <div class="meta-salary-filter meta-block">
            <h3><i class="icon-salary"></i>热门区域</h3>
            <ul>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
                <li><a href="" target="_blank">xxxxxx</a></li>
            </ul>
        </div>
    </div>
        <div class="img_">
            <a style="display:block;" href="/yuyuelaoshi.html"><img style="width:970px;float:right;" src="/delijiajiao/images/2.png" alt="" /></a>
        </div>
    </div>

   </div>

   <div class="index1">
          <div class="lebt">
          <div class="l">
            <img src="/delijiajiao/images/icon_title1.png">金牌教员</div> <div class="r">更多</div></div>
                <div class="acrt">
                @foreach($jinpai as $jp)
                    <li class="kuan">
                        <div class="top">
                            <img src="/delijiajiao/images/logo.png" width="110" height="110">
                            <i>{{ mb_substr($jp->tc_name,0,1) }}教员</i>
                            <span>
                                <img src="/delijiajiao/picture/icon_imperial.png">
                            </span>
                            <div class="hover">
                                <p>{{ subtext($jp->tc_comments,40) }}</p>
                                <a href="javascript:void(0)" onclick="location.href='/teacher/365196.html'" class="look">查看 ></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <a href="">{{ $jp->tc_type }}</a>
                            <br/>
                            <a href="">{{ $jp->tc_school }}</a>
                            <div class="clear"></div>
                            <a href="/yuyuelaoshi.html" class="btn">预约免费试课</a>
                        </div>
                    </li>
                @endforeach
                </div>
      </div>
      <div class="index1">
        <div class="lebt">
            <div class="l">
                <img src="/delijiajiao/images/icon_title2.png">学生教员</div>
            <div class="r">更多</div>
        </div>
            <div class="acrt">
            @foreach($xueshen as $xs)
            <li class="kuan">
                <div class="top">
                    <img src="/delijiajiao/images/logo.png" alt="魏玲" width="110" height="110">
                    <i>{{ mb_substr($xs->tc_name,0,1) }}教员</i>
                    <div class="hover">
                        <p>{{ $xs->tc_comments }}</p>
                        <a href="javascript:void(0)" class="look">查看 ></a>
                    </div>
                </div>
                <div class="bottom">
                    <a href="">{{ $xs->tc_type }}</a>
                    <br/>
                    <a href="">{{ $xs->tc_school }}</a>
                    <div class="clear"></div>
                    <a href="/yuyuelaoshi.html" class="btn">预约免费试课</a>
                </div>
            </li>
            @endforeach
            </div>
      </div>
      <div class="index1">
          <div class="lebt">
            <div class="l"><img src="/delijiajiao/images/icon_title3.png">专职教员</div>
            <div class="r">更多</div>
          </div>
          <div class="acrt">
            @foreach($zhuanzhi as $zhuanzhi)
            <li class="kuan">
                <div class="top">
                    <img src="/delijiajiao/images/logo.png" alt="魏玲" width="110" height="110">
                    <i>{{ mb_substr($zhuanzhi->tc_name,0,1) }}教员</i>
                    <div class="hover">
                        <p>{{ $zhuanzhi->tc_comments }}</p>
                        <a href="javascript:void(0)" class="look">查看 ></a>
                    </div>
                </div>
                <div class="bottom">
                    <a href="">{{ $zhuanzhi->tc_type }}</a>
                    <br/>
                    <a href="">{{ $zhuanzhi->tc_school }}</a>
                    <div class="clear"></div>
                    <a href="/yuyuelaoshi.html" class="btn">预约免费试课</a>
                </div>
            </li>
            @endforeach
          </div>
      </div>
      <div>
           <a style="display:block;" href="/yuyuelaoshi.html">
                <img style="width:970px;float:right;" src="/delijiajiao/images/2.png" alt="" />
           </a>
      </div>
      <div class="index1">
          <div class="lebt">
          <div class="l"><img src="/delijiajiao/images/icon_title4.png">学员信息</div> <div class="r">更多</div></div>
          <div class="acrt1">
            @foreach($data as $data)
              <li>
                  <p id="t1">详情</p>
                   <p id="t2">{{ date("Y-m-d",$data->time) }}</p>
                    <p id="t3" style="background-color: #F7B529;"> 新发布 </p>
                     <p id="t4">暂为填写</p>
                      <p id="t5">暂为填写</p>
                       <p id="t6"> 暂为填写 </p>
                        <p id="t7"> {{ $data->user_name }}</p>
              </li>
            @endforeach
          </div>
      </div>
 <div class="index5">
        <div class="lebt">
    <div class="l"><img src="/delijiajiao/images/icon_title5.png">教学资源</div>
        <div class="r">
          <div style="text-align:center;">
<!-- 选项卡开始 --><center>
  <div class="nTab">
    <!-- 标题开始 -->
    <div class="TabTitle">
      <ul id="myTab0">
  <li class="active" onclick="nTabs(this,0);">全部资源</li>
  <li class="normal" onclick="nTabs(this,1);">语文资源</li>
  <li class="normal" onclick="nTabs(this,2);">数学资源</li>
  <li class="normal" onclick="nTabs(this,3);">相册全部</li>
  <li class="normal" onclick="nTabs(this,4);">商城全部</li>
  <li class="normal" onclick="nTabs(this,5);">社区全部</li>
      </ul>
    </div>
        </div>
    </div>
        </div>
        </div>
    <div class="acrt5">
    <!-- 内容开始 -->
   <div class="TabContent">
       <div id="myTab0_Content0">
           <div class="index6">
            <li style="background-color: #F7B529;"><span>类别</span>资源标题<p>更新时间</p></li>
            <li><span>数学</span>s+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li style="border-bottom: none;"><span>语文</span>fcss+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
       </div></div>
       <div id="myTab0_Content1" class="none">
        <div class="index6">
            <li style="background-color: #F7B529;"><span>类别</span>资源标题<p>更新时间</p></li>
            <li><span>语文</span>s+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li style="border-bottom: none;"><span>语文</span>fcss+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
       </div>
       </div>
       <div id="myTab0_Content2" class="none">
         <div class="index6">
             <li style="background-color: #F7B529;"><span>类别</span>资源标题<p>更新时间</p></li>
            <li><span>数学</span>s+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
            <li style="border-bottom: none;"><span>数学</span>fcss+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
       </div>
       </div>
   <div id="myTab0_Content3" class="none"><a href="<#ZC_BLOG_HOST#>?cat=3">站长特效网3号</a></div>
   <div id="myTab0_Content4" class="none"><a href="<#ZC_BLOG_HOST#>?cat=4">站长特效网4号</a></div>
   <div id="myTab0_Content5" class="none"><a href="<#ZC_BLOG_HOST#>?cat=5">站长特效网5号</a></div>
    </div>
  </div>
  <!-- 选项卡结束 -->
  </div>
  </center>
    <div class="index5">
        <div class="lebt">
    <div class="l"><img src="/delijiajiao/images/icon_title5.png">热门文章</div>
        <div class="r">
          <div style="text-align:center;">
<!-- 选项卡开始 --><center>
  <div class="nTab">
    <!-- 标题开始 -->
    <div class="TabTitle">
      <ul id="myTab1">
  <li class="active" onclick="nTabs(this,0);">全部资源</li>
  <li class="normal" onclick="nTabs(this,1);">语文资源</li>
  <li class="normal" onclick="nTabs(this,2);">数学资源</li>
  <li class="normal" onclick="nTabs(this,3);">相册全部</li>
  <li class="normal" onclick="nTabs(this,4);">商城全部</li>
  <li class="normal" onclick="nTabs(this,5);">社区全部</li>
      </ul>
    </div>
        </div>
    </div>
        </div>
        </div>
    <div class="acrt5">
    <!-- 内容开始 -->
   <div class="TabContent">
       <div id="myTab1_Content0">
           <div class="index6">
            <li style="background-color: #F7B529;"><span>类别</span>资源标题<p>更新时间</p></li>
            <li><span>数学</span>s+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li style="border-bottom: none;"><span>语文</span>fcss+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
       </div></div>
       <div id="myTab1_Content1" class="none">
        <div class="index6">
            <li style="background-color: #F7B529;"><span>类别</span>资源标题<p>更新时间</p></li>
            <li><span>语文</span>s+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span>语文</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
            <li><span style="border-bottom: none;">语文</span>fcss+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>2017-04-12</p></li>
       </div>
       </div>
       <div id="myTab1_Content2" class="none">
         <div class="index6">
             <li style="background-color: #F7B529;"><span>类别</span>资源标题<p>更新时间</p></li>
            <li><span>数学</span>s+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
            <li><span>数学</span>css+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
            <li style="border-bottom: none;"><span>数学</span>fcss+div解决文字溢出控制显示字数 - chenguiya - 博客园<p>更新时间：2017-04-12</p></li>
       </div>
       </div>
   <div id="myTab1_Content3" class="none"><a href="<#ZC_BLOG_HOST#>?cat=3">站长特效网3号</a></div>
   <div id="myTab1_Content4" class="none"><a href="<#ZC_BLOG_HOST#>?cat=4">站长特效网4号</a></div>
   <div id="myTab1_Content5" class="none"><a href="<#ZC_BLOG_HOST#>?cat=5">站长特效网5号</a></div>
    </div>
  </div>
  <!-- 选项卡结束 -->
  </div>
  </center>
 <div>
           <a style="display:block;" href="">
                <img style="width:980px;float:right;" src="/delijiajiao/images/33.png" alt="" />
           </a>
@endsection
@section('js')
<script type="text/javascript" src="/delijiajiao/js/zhen.js"></script>
@endsection
