<!doctype html>
<html class="no-js" lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@section('title'){{$my_config->website_name}}@show</title>
    <meta name="description" content="{{$my_config->webset_desc}}" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="{{ asset("/bower_components/amazeui/dist/css/amazeui.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/css/style.css")}}">
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
@include("partials.client.header")

@yield('content')

@include("partials.client.footer")
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{ asset("/bower_components/amazeui/dist/js/amazeui.ie8polyfill.min.js")}}"></script>
<![endif]-->
<script src="{{ asset("js/echo.min.js") }}"></script>
<script>
    echo.init({
        offset: 100,
        throttle: 250,
        unload: false,
        callback: function (element, op) {
            console.log(element, 'has been', op + 'ed')
        }
    });
    // 图片赖加载
</script>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{ asset("/bower_components/jquery/dist/jquery.min.js")}}"></script>
<script src="{{ asset("/bower_components/amazeui/dist/js/amazeui.min.js")}}"></script>
<!--<![endif]-->
<script src='{{ asset("/bower_components/jquery-qrcode/jquery.qrcode.min.js")}}'></script>
<script type="text/javascript">
    $(function(){
        var str = "http://www.imj2.com";
        $("#code").qrcode({
            render: "table",
            width: 100,
            height:100,
            text: str
        });
    })
    // 二维码生成
    //返回顶部
    function imj2(){
        this.init();
    }
    imj2.prototype = {
        constructor: imj2,
        init: function(){
            this._initBackTop();
        },
        _initBackTop: function(){
            var $backTop = this.$backTop = $('<div class="m-top-cbbfixed">'+
                    '<a class="m-top-weixin m-top-cbbtn"">'+
                    '<span class="m-top-weixin-icon"></span><div></div>'+
                    '</a>'+
                    '<a class="m-top-go m-top-cbbtn">'+
                    '<span class="m-top-goicon"></span>'+
                    '</a>'+
                    '</div>');
            $('body').append($backTop);

            $backTop.click(function(){
                $("html, body").animate({
                    scrollTop: 0
                }, 120);
            });

            var timmer = null;
            $(window).bind("scroll",function() {
                var d = $(document).scrollTop(),
                        e = $(window).height();
                0 < d ? $backTop.css("bottom", "10px") : $backTop.css("bottom", "-90px");
                clearTimeout(timmer);
                timmer = setTimeout(function() {
                    clearTimeout(timmer)
                },100);
            });
        }

    }
    var imj2 = new imj2();
    //end返回顶部
</script>


</body>
</html>