<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_GET['title'];?>【<?php echo $_SERVER['SERVER_NAME'];?>】专业大学生上门辅导</title>
</head>
<style>
p{display: block; height: 5px;}
{display: line-block; height: 5px;width: 500px;}
</style>
<body>
    <div style="width: 60%;margin: 0 auto;">
        <h2>德栗家教【<a target="_blank" href="/xsinfo<?php echo $_GET['oid'];?>.html" ><?php echo $_SERVER['SERVER_NAME'];?></a>】专业大学生上门辅导</h2>
        <span>家教编号:T<?php echo $_GET['oid'];?></span><br>
        <span>学员年级：<span><?php echo $_GET['nj']; ?></span></span><br>
        <span>所在区域：<span><?php echo $_GET['dq']; ?></span></span><br>
        <span>课酬：<span><?php echo $_GET['q'];?>元/次</span></span><br>
        <p style="font-size: 18px;font-weight: 800;">登录德栗家教即可查看订单详情</span>
        <a href="/xsinfo<?php echo $_GET['oid'];?>.html"><?php echo $_SERVER['SERVER_NAME'];?>/xsinfo<?php echo $_GET['oid'];?>.html</a>
        <span>有意者请预约后立即联系德栗家教接单：QQ：1774932105</span>
        加入德栗家教信息发布QQ群、微信群，(微信号delijiajiao)，第一时间获取家教信息，已入群同学无须再加
        </div>
    </div>
</body>
</html>
