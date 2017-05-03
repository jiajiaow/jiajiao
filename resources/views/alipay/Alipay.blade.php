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
<input type="hidden" name="price" value="<?=$price?>" />
</form>
</body>
</html>
