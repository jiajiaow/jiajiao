<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
</head>
<body>
@foreach($data as $re)
    <table border="1">
        <tr align="center">
            <th>编号/入口/日期</th>
            <th>个人基本信息</th>
            <th>学位信息</th>
            <th>联系方式</th>
            <th>家教简历</th>
            <th>备注<button>+</button></th>
            <th>财务情况</th>
            <th style="width: 170px;">查看详细</th>
        </tr>
        <tr valign="top" align="center">

            <td>
                <div>
                    <p>编号：{{ $re->id }}</p>
                    <p>注册入口：<input type="text" name=""></p>
                    <p>注册时间：{{ date('Y-m-d h:i:s',$re->tc_reg_date) }}</p>
                    <p>最近登录：{{ date('Y-m-d h:i:s',$re->tc_dltimes) }}</p>
                    <p>平时城市：<input type="checkbox" name=""></p>
                    <p>暑假城市：<input type="checkbox" name=""></p>
                    <p>寒假城市：<input type="checkbox" name=""></p>
                </div>
            </td>
            <td style="width: 100px;">
                <div>
                    <p>姓名：<input type="text" name=""></p>
                    <p>籍贯：<input type="text" name=""></p>
                    <p>性别：<input type="text" name=""></p>
                    <p>教员性质：<input type="text" name=""></p>
                    <p>教员等级：<input type="text" name=""></p>
                    <p>教员类型：<input type="text" name=""></p>
                    <p>
                        <select>
                            <option>签约教员</option>
                            <option>1</option>
                            <option>1</option>
                            <option>1</option>
                        </select>
                            <input type="submit" name="" value="修改">
                    </p>
                    <p>
                        教授科目<textarea  type="text" name=""  class="showBtn"></textarea>
                    </p>
                </div>
            </td>
            <td>
                <div>
                    <p>学校：<input type="text" name=""></p>
                    <p>年级：<input type="text" name=""></p>
                    <p>专业：<input type="text" name=""></p>
                    <p>类别：<input type="text" name=""></p>
                    <p>教龄：<input type="text" name=""></p>
                    <p>文理科：<input type="text" name=""></p>
                    <p>高科省份：<input type="text" name=""></p>
                </div>
            </td>
            <td>
                <div>
                    <p>电话：<input type="text" name=""></p>
                    <p>邮箱：<input type="text" name=""></p>
                    <p>微信：<input type="text" name=""></p>
                    <p>QQ：<input type="text" name=""></p>
                    <p>备用电话：<input type="text" name=""></p>
                    <p><a href="">个人基础评分：</a><input type="text" name=""></p>
                    <p><button>QQ交谈</button></p>
                </div>
            </td>
            <td>
                <div>
                    <p>所获证书:<input type="text" name=""></p>
                    <p>自我描述:</p>
                    <p><textarea></textarea></p>
                    <p>家教简历：</p>
                    <p><textarea></textarea></p>
                </div>
            </td>
            <td>
                <div>
                    <p style="position:relative;margin-top: 30px;"><span style="float: left">备注：</span><span style="float: right">编辑</span></p>
                    <p><textarea></textarea></p>
                    <p>以往接单情况：</p>
                    <p><textarea></textarea></p>
                </div>
            </td>
            <td>
                <div>
                    <p>欠款总额:<input type="text" name=""></p>
                    <p>账户总额：<input type="text" name=""></p>
                    <p>冻结诚意金：<input type="text" name=""></p>
                    <p><a href="">个人财务中心</a></p>
                    <p><a href="">个人授课订单</a></p>
                    <p><a href="">个人积分中心</a></p>
                    <p><a href="">以往报名情况</a><span style="color: red;">(2)</span></p>
                    <p>
                        <a href="">显示|</a>
                        <a href="">屏蔽|</a>
                        <a href="">删除</a>
                    </p>
                </div>
            </td>
            <td>
                <div>
                    <p><a href="">编辑资料</a></p>
                    <p><a href="">推荐到首页</a>|<a href="">有头像</a></p>
                    <p><a href="">查看简历</a> <input type="submit" name=""></p>
                    <p><a href="">查看身份证</a><input type="submit" name=""></p>
                    <p><a href="">查看学生证</a><input type="submit" name=""></p>
                    <p>邀请人：<input type="text"><input type="" name=""></p>
                    <p>管理人：<input type="text"><input type="" name=""></p>
                </div>
            </td>
        </tr>
    </table>
    <hr>
@endforeach
    <div class="fc" style="display: none;"></div>
    <div class="showFc" style="display: none;" >
        <div class="teach_subject">
            <div class="teach_detailed">
                <span>教授科目</span>
                <select class="seleClass">
                    <option class="seleClass_option" value="小学及学龄前">小学及学龄前</option>
                    <option class="seleClass_option" value="初中">初中</option>
                    <option class="seleClass_option" value="高中">高中</option>
                    <option class="seleClass_option" value="语言">语言</option>
                    <option class="seleClass_option" value="艺术">艺术</option>
                    <option class="seleClass_option" value="其他">其他</option>
                </select>
            </div>
            <div>
                <div class="ti_info_A"><p class="list-p">初二</p><p class="list-p">初一</p></div>
                <div class="ti_info_B">

                </div>
                <!-- <div class="ti_info_C"></div>-->
            </div>
        </div>
    </div>
    <style type="text/css">
        p{
            padding: 0;
            margin: 0;
        }
        *{
            margin: 0;
            padding: 0;
        }
        input{
            width: 80px;
            height: 18px;
            border: none;
        }
        div{
            margin: 10px 2px;
        }
        td{
            background: #efefef;
                border-color: #ccc;
        }
        th{
            border-color:#ccc;
            text-align: center;
            color: #565656;
        }
        table{
            border-color:#fff;
        }
        .fc{
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.86);
            top: 0;
            left: 0;
        }
        .showFc {
            position: absolute;
            width: 800px;
            height: 500px;
            background-color: #fff;
            left: 50%;
            top: 50%;
            margin-left: -400px;
            margin-top: -225px;
        }
        .teach_subject select {
            width: 150px;
            height: 40px;
        }
        .teach_detailed{
            margin-left: 60px;
            margin-top: 11px;
        }
        .ti_info_A {
            width: 150px;
            height: 200px;
            border: 1px solid #ababab;
            margin-left: 15.2%;
            margin-top: 11px;
            display: inline-block;
            vertical-align: top;

        }
        .ti_info_A p {
            padding: 10px 0px 0px 15px;
        }
        ::-webkit-scrollbar
        {
            width: 5px;
            height: 4px;
            background-color: #ffef88;
        }
        ::-webkit-scrollbar-track
        {
            border-radius: 10px;
            background-color: #ffffff;
        }
        ::-webkit-scrollbar-thumb
        {
            border-radius: 10px;
            background-color: #ffe53e;
        }
        .ti_info_B {
            width: 150px;
            height: 250px;
            border: 1px solid rgb(255, 209, 54);
            display: inline-block;
            margin-top: -39px;
            vertical-align: top;
            overflow-y: scroll;
            margin-left: 20px;
        }
        .ti_info_B p {
            padding: 10px 0px 0px 15px;
        }
        .ti_info_C{
            width: 150px;
            height: 200px;
            border: 1px solid rgb(255, 209, 54);
            display: inline-block;
            vertical-align: top;
            margin-top:11px;

        }
        .ti_info_B p i{
        font-style: normal

        }
        .deleBtn{
            position: relative;
            margin-top: -2px;
            right: -80px;
            cursor: pointer;
        }
    </style>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript">
        $('.showBtn').click(function(){
            $('.fc').show(500)
            $('.showFc').show(500)

        })
        $('.fc').click(function(){
            $('.fc').hide(500)
            $('.showFc').hide(500)
            var ti_info_inner = $('.ti_info_B').text().replace(/\n/g,"").replace(/\s/g,"");

            $('.showBtn').val(ti_info_inner)
        })


        var data=[
            {
                name : "高中",
                list : [
                    {
                        item:'高一',
                    },
                    {
                        item:'高二',
                    }
                ]
            },
            {
                name : "初中",
                list : [
                    {
                        item:'初二',
                    },
                    {
                        item:'初一',
                    }
                ]
            }

        ]
        console.log(data)

        function seleClass(name){
            var a = '';
            for (var i = 0; data.length > i; i++) {
                if(name == data[i].name){
                    for(var j = 0;j<data[i].list.length;j++){
                        a += '<p class="list-p">' + data[i].list[j].item + '</p>'
                    }
                }
            }

            $('.ti_info_A').html(a)
        }
         $(document).on("change",'.seleClass',function(){
            var b=$(this).val()
            seleClass(b)
         });

         $(document).on('click','.list-p',function(){

            var c= '<p>'+'<i>'+$(this).html()+'</i>'+'<span class="deleBtn"><img src="dele.png"></span>'+'</p>'
            var info = $('.ti_info_B').html()


                if (info == '') {
                    $('.ti_info_B').append(c)
                }
            var infoP = $('.ti_info_B p i')
            var c_html = $(this).html()

            for(var i=0;i<infoP.length;i++){

                if (infoP[i].innerHTML == c_html) {
                    return
                }else{

                }
            }
            $('.ti_info_B').append(c)

         })
         $(document).on('click','.deleBtn',function(){
           var fath = $(this).parent()
           fath.remove()

         })
    </script>
</body>
</html>
