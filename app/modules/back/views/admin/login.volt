<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ _language['lang_app'] }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    {{ stylesheet_link('/back/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    <!-- Font Awesome -->
    {{ stylesheet_link('/back/bower_components/font-awesome/css/font-awesome.min.css') }}
    <!-- Ionicons -->
    {{ stylesheet_link('/back/bower_components/Ionicons/css/ionicons.min.css') }}
    <!-- Theme style -->
    {{ stylesheet_link('/back/dist/css/AdminLTE.min.css') }}
    <!-- iCheck -->
    {{ stylesheet_link('/back/plugins/iCheck/square/blue.css') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{ javascript_include('//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}
    {{ javascript_include('//oss.maxcdn.com/respond/1.4.2/respond.min.js') }}
    <![endif]-->
    <!-- Google Font -->
    {{ stylesheet_link('/back/googleapis/css.css') }}
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/"><b>{{ _language['lang_app'] }}</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><?php echo $_language['lang_manager']?></p>
        <form action="/back/admin/check" method="post" id="theForm">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" id="username" placeholder="<?php echo $_language['lang_user']?>">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password"  id="password"  placeholder="<?php echo $_language['lang_password']?>">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="code"  id="code"   placeholder="<?php echo $_language['lang_verify']?>">
                <span class="glyphicon glyphicon-flag form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <img class="img-responsive pad" src="/back/admin/code" alt="<?php echo $_language['lang_refresh']?>" title="<?php echo $_language['lang_refresh']?>" id="verify">
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" id="mycheckbox" name="mycheckbox"><?php echo $_language['lang_saveinfo'] ?>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="button" class="btn btn-primary btn-block btn-flat" id="submit"><?php echo $_language['lang_submit']?></button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</body>
<!-- jQuery 3 -->
{{ javascript_include('/js/jquery.min.js') }}
{{ javascript_include('/js/jquery.cookie.js') }}
<!-- Bootstrap 3.3.7 -->
{{ javascript_include('/back/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
<!-- iCheck -->
{{ javascript_include('/back/plugins/iCheck/icheck.min.js') }}
{{ javascript_include('/assets/sweetalert/sweetalert.min.js') }}
<script>
    $(function () {

       $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%'
        });
        if(  document.cookie){
            let strCookie=document.cookie;
            let arrCookie=strCookie.split("; ");
            let admin;
            let password;
            for(let i=0;i<arrCookie.length;i++){
                let arr=arrCookie[i].split("=");
                if("admin"==arr[0]){
                    admin=arr[1];
                }
                if("password"==arr[0]){
                    password=arr[1];
                }
            }
            if(admin && password){
                $("#username").val(admin);
                $("#password").val(password);
                $("#mycheckbox").attr("checked",true);
            }
        }
        $("#submit").bind('click',function () {
            if($("#username").val()==""){
                warn('{{ _language['lang_needusername'] }}');
                refreshcode();
                return;
            }
            if($("#password").val()=="") {
                warn('{{ _language['lang_needpassword'] }}');
                refreshcode();
                return;
            }
            if($("#code").val()=="") {
                warn(' {{ _language['lang_needcode'] }}');
                refreshcode();
                return;
            }
            if($('#checkbox').is(':checked')){
                document.cookie="admin="+$("#username").val();
                document.cookie="password="+$("#password").val();
            }else{
                document.cookie="admin=";
                document.cookie="password=";
            }
            $.ajax({
                async:false,
                url:'/back/admin/check/t/' + Math.random(),
                data:{'username':$('#theForm input[name=username]').val(),'password':$('#theForm input[name=password]').val(),'code':$('#theForm input[name=code]').val()},
                type:'post',
                dataType:'json',
                success: function(res){
                    if(res.code!=1){
                        refreshcode();
                        warn(res.message);
                    }else{
                        warn(res.message);
                        location.href = res.data.url;
                    }
                },
                error : function() {
                    warn("  {{ _language[' lang_net_fail'] }}");

                }
            });

        });
    });
    function refreshcode() {
        $("#verify").attr('src',"/back/admin/code/num/"+Math.random());
    }
    function warn(str) {
        swal({   title: str,    timer: 2500,   showConfirmButton: false });
    }
</script>
</html>
