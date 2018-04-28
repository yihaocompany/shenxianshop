<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ _language['lang_oper_title'] }}</title>
</head>
<style>
    *{margin: 0 auto;padding: 0;}
    .tranjump{background: url('/back/img/tac.jpg') no-repeat;width: 100%;height: 100%;}
    .rectangle_box{position: absolute;left: 50%;right: 50%;top: 50%;bottom: 50%;margin-left: -189.5px;margin-top: -77px;}
    .borderopely{width: 363px;height: 138px;border: 8px solid rgba(255,255,255,0.6);}
    .tipbox{width: 363px;height: 138px;background: white;text-align: center;}
    .welcople{color: #666666;font-size: 16px;padding-top: 18px;}
    .welcople .litps{background: url('/back/img/socp.png') no-repeat;width: 31px;height: 31px;display: inline-block;vertical-align: text-bottom;}
    .welcople .modifysu{background: url('/back/img/socp2.png') no-repeat;width: 34px;height: 37px;}
    .welcople .modifyfail{background: url('/back/img/socp3.png') no-repeat;width: 24px;height: 28px;}
    .ma-to-30{margin-top: 30px;}
    .ma-to-20{margin-top: 20px;}
    .ma-to-10{margin-top: 10px;}
    .cloblu{color: #3c8dbc;font-size: 16px;}
    .waittim{color: #666666;font-size: 16px;margin-left: 10px;}
    .ht-colblue{color: #3c8dbc;}
    a{text-decoration: none;}
    .waittim em{color: #3c8dbc;}
    em{font-style: normal;}
    .recigle{width: 379px;text-align: center;margin-top: 10px;}
    .recigle p{color: #333333;font-size: 16px;line-height: 20px;}
    .recigle .copyright{color: #3c8dbc;}
</style>
<body class="tranjump">
<div class="rectangle_box">
    <div class="borderopely">
        <!--修改失败-s-->
        <div class="tipbox" style="">
            <div class="welcople">
                <i class="litps modifyfail"></i>{{ _language['lang_login'] }}</div>
            <div class="ma-to-20">
                <span class="cloblu">{{ _language['lang_page_jump'] }}</span>
                <span class="waittim"><a id="href" href="{{ url }}" style="color: #666666">{{ _language['lang_wait_time'] }}<em id="wait">3</em></a></span>
            </div>
        </div>
        <!--修改失败-e-->
    </div>
    <div class="recigle">
        <p>Copyright©2014-2018<em class="copyright"><a class="copyright" href="{{ _configure['site_url_shop_info'] }}">{{ _language['lang_app'] }} v2.0.0</a></em></p>
        <p><em class="copyright"><a class="copyright" href="{{ _configure['site_url_shop_info'] }}">{{ _language['lang_copyright'] }}</a></em></p>
    </div>
</div>
<script type="text/javascript">
  (function(){
        var wait = document.getElementById('wait'),href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 3000);
    })();
</script>
</body>
</html>