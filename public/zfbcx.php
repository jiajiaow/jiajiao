<?php

    /*傻逼小诃开发,傻逼就是我*/
    /*支付宝支付,费率0.3%*/
    date_default_timezone_set('PRC');
    error_reporting(0);
    set_time_limit(0);

    $ary = array(
        'token'=>'4343c0b465d0478e89a3265c6941585c',//填写用户TOKEN
        'mod'=>'list',//模式,pay:支付模式,list:返回所有订单信息
        'index'=>100000,//模式为list的时候使用,用来指定订单当前页,订单信息每页显示10条
        'oid'=>null,//模式为list的时候使用,用来指定查询某个订单的信息
        'title'=>'家教网费用',//商品名称
        'price'=> 100,//商品价格,请填写整数,以分为单位,例:1元,就填写100
        'curl'=>'http://www.delijiajiao.com/callback'//回调地址,用户支付成功后服务器会POST请求到这个地址,携带订单数据
    );

    $content = httpclient('http://api.btjson.com/alipay',$ary);
    if($ary['mod'] == 'pay'){
        $json = json_decode($content,true);
        $oid = $json['data']['out_trade_no'];//返回的订单号,可存在自己的数据库中
        if($json['data']['sign'] == ''){
            echo $json['data'];
            exit();
        }
    }
    if($ary['mod'] == 'list'){
        echo $content;
        exit();
    }

    function httpclient($url,$data){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_HEADER,0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($data));
        $content = curl_exec($ch);
        curl_close($ch);
        return $content;
    }

    header('Content-Type:text/html;charset=UTF-8');
?>
<!DOCTYPE HTML PUBLIC>
<head>
<title>ALIPAY</title>
<script type="text/javascript">
    window.onload = function(){
        document.getElementById('alipay').submit();
    }
</script>
</head>
<body>
<form id="alipay" style="display: none;" action="https://mapi.alipay.com/gateway.do?_input_charset=utf-8" method="post">
<input type="hidden" name="sign" value="<?=$json['data']['sign']?>" />
<input type="hidden" name="body" value="<?=$json['data']['body']?>" />
<input type="hidden" name="_input_charset" value="<?=$json['data']['_input_charset']?>" />
<input type="hidden" name="subject" value="<?=$json['data']['subject']?>" />
<input type="hidden" name="total_fee" value="<?=$json['data']['total_fee']?>" />
<input type="hidden" name="sign_type" value="<?=$json['data']['sign_type']?>" />
<input type="hidden" name="service" value="<?=$json['data']['service']?>" />
<input type="hidden" name="notify_url" value="<?=$json['data']['notify_url']?>" />
<input type="hidden" name="partner" value="<?=$json['data']['partner']?>" />
<input type="hidden" name="seller_id" value="<?=$json['data']['seller_id']?>" />
<input type="hidden" name="out_trade_no" value="<?=$json['data']['out_trade_no']?>" />
<input type="hidden" name="payment_type" value="<?=$json['data']['payment_type']?>" />
<input type="hidden" name="return_url" value="<?=$json['data']['return_url']?>" />
<input type="hidden" name="extra_common_param" value="<?=$json['data']['extra_common_param']?>" />
</form>
</body>
</html>
