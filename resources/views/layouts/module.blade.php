<!doctype html>
<html class="no-js" lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Open818</title>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="{{ asset("/bower_components/amazeui/dist/css/amazeui.min.css")}}">
    <link rel="stylesheet" href="{{ asset($module_path."style.css")}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>

    <![endif]-->
</head>
<!--[if lt IE 9]>
<div class="am-modal am-modal-no-btn am-modal-active" tabindex="-1" id="doc-modal-1" style="display: block; width: 400px; margin-left: -200px; margin-top: -112px;">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">365 安全卫士提醒</div>
        <div class="am-modal-bd">你的浏览器太古董了，还不换一个你就奥特曼了
            <a href="http://browsehappy.com/" target="_blank" class="am-btn am-btn-danger am-btn-sm am-radius" rel="nofollow">速速点击换一个</a>
        </div>
    </div>
</div>
<![endif]-->
<body>

@yield('content')

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{ asset("/bower_components/amazeui/dist/js/amazeui.ie8polyfill.min.js")}}"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{ asset("/bower_components/jquery/dist/jquery.min.js")}}"></script>
<script src="{{ asset("/bower_components/amazeui/dist/js/amazeui.min.js")}}"></script>
<!--<![endif]-->
<script src="{{ asset("/js/echo.min.js")}}"></script>
<script>
    echo.init({
        offset: 100,
        throttle: 250,
        unload: false,
    });
    // 图片赖加载
</script>
<script src="{{ asset($module_path."app.js")}}"></script>

</body>
</html>