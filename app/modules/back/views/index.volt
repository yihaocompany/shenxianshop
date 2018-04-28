<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ _language['lang_app']  }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {% block head %}
        <!-- Bootstrap 3.3.7 -->
        {{ stylesheet_link('/back/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
        <!-- Font Awesome -->
        {{ stylesheet_link('/back/bower_components/font-awesome/css/font-awesome.min.css') }}
        <!-- Ionicons -->
        {{ stylesheet_link('/back/bower_components/Ionicons/css/ionicons.min.css') }}
        <!-- Theme style -->
        {{ stylesheet_link('/back/dist/css/AdminLTE.min.css') }}
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        {{ stylesheet_link('/back/dist/css/skins/_all-skins.min.css') }}
        <!-- Morris chart -->
        {{ stylesheet_link("/back/bower_components/morris.js/morris.css") }}
        <!-- jvectormap -->
        {{ stylesheet_link("/back/bower_components/jvectormap/jquery-jvectormap.css") }}
        <!-- Date Picker -->
        {{ stylesheet_link("/back/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css") }}
        <!-- Daterange picker -->
        {{ stylesheet_link("/back/bower_components/bootstrap-daterangepicker/daterangepicker.css") }}
        <!-- bootstrap wysihtml5 - text editor -->
        {{ stylesheet_link("/back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Google Font -->
        {{ stylesheet_link("/back/googleapis/css.css") }}
    {% endblock %}
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    {% include 'public/main_header.volt' %}
    {% include 'public/main_slidebar.volt' %}
    {{ content() }}
    {% include "public/main_footer.volt" %}
    {% include "public/main_control_sidebar.volt" %}
</div>
{% block ender %}
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    {{ javascript_include("/back/bower_components/jquery/dist/jquery.min.js") }}
    <!-- jQuery UI 1.11.4 -->
    {{ javascript_include("/back/bower_components/jquery-ui/jquery-ui.min.js") }}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    {{ javascript_include("/back/bower_components/bootstrap/dist/js/bootstrap.min.js") }}
    <!-- Morris.js charts -->
    {{ javascript_include("/back/bower_components/raphael/raphael.min.js") }}
    {{ javascript_include("/back/bower_components/morris.js/morris.min.js") }}
    <!-- Sparkline -->
    {{ javascript_include("/back/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js") }}
    <!-- jvectormap -->
    {{ javascript_include("/back/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}
    {{ javascript_include("/back/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}
    <!-- jQuery Knob Chart -->
    {{ javascript_include("/back/bower_components/jquery-knob/dist/jquery.knob.min.js") }}
    <!-- daterangepicker -->
    {{ javascript_include("/back/bower_components/moment/min/moment.min.js") }}
    {{ javascript_include("/back/bower_components/bootstrap-daterangepicker/daterangepicker.js") }}
    <!-- datepicker -->
    {{ javascript_include("/back/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js") }}
    <!-- Bootstrap WYSIHTML5 -->
    {{ javascript_include("/back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}
    <!-- Slimscroll -->
    {{ javascript_include("/back/bower_components/jquery-slimscroll/jquery.slimscroll.min.js") }}
    <!-- FastClick -->
    {{ javascript_include("/back/bower_components/fastclick/lib/fastclick.js") }}
    <!-- AdminLTE App -->
    {{ javascript_include("/back/dist/js/adminlte.min.js") }}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{ javascript_include("/back/dist/js/pages/dashboard.js") }}
    <!-- AdminLTE for demo purposes -->
    {{ javascript_include("/back/dist/js/demo.js") }}
{% endblock %}
</body>
</html>