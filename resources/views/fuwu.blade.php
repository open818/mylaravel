@extends('layouts.public')

@section('title')
    服务内容-
    @parent
@endsection

@section('content')
    <div class="m-header-banner m-list-header" style="background: url({{asset("img/client/service-bg.jpg")}}) 50% 0 no-repeat fixed;">
        <section class="am-container">
            <hgroup data-am-scrollspy="{animation:'slide-bottom', delay: 317}">
                <h2>服务内容</h2>
                <p>我们期待与您的携手，以设计驱动企业价值增长，我们与伙伴共同成长。</p>
            </hgroup>
        </section>
    </div>
    <nav class="m-cat-nav">
        <ul class="am-container">
            <li ><a href="/about.html"><i class="icon-chevron-right"></i>关于俊贰</a></li>
            <li class="am-active" ><a href="/fuwu.html"><i class="icon-chevron-right"></i>服务内容</a></li>
            <li ><a href="/hezuo.html"><i class="icon-chevron-right"></i>合作流程</a></li>
            <li ><a href="/contact.html"><i class="icon-chevron-right"></i>联系我们</a></li>
            <li ><a href="/fukuan.html"><i class="icon-chevron-right"></i>付款方式</a></li>
            <li ><a href="/sitemap.html"><i class="icon-chevron-right"></i>网站地图</a></li>
        </ul>
    </nav>

    <section class="am-container m-service-page">
        <div class="m-service-container">
            <h2>服务体系</h2>
            <ul class="am-avg-sm-1 am-avg-md-1 am-avg-lg-1 am-thumbnails m-service-list">
                <li>
                    <div class="am-u-lg-2 am-u-md-12 m-service-list-icon am-hide-md-down">
                        <i class="am-icon-code"></i>
                    </div>
                    <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                        <h3>网站建设</h3>
                        <p>网页设计 、 网站开发 、 网站改版 、微信开发 、 移动开发 、 app开发 、 网站建设与维护
                        </p>
                    </div>
                </li>
                <li>
                    <div class="am-u-lg-2 am-u-md-12 m-service-list-icon am-hide-md-down">
                        <i class="am-icon-desktop"></i>
                    </div>
                    <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                        <h3>平面设计</h3>
                        <p>
                            VI/CI设计 、 标志设计 、 图形/图案设计 、 字体/字形设计 、 宣传单/平面广告设计 、 海报设计 、 包装设计 、 书装/画册设计 、 PPT/演示设计 、 其他平面设计
                        </p>
                    </div>

                </li>
                <li>
                    <div class="am-u-lg-2 am-u-md-12 m-service-list-icon am-hide-md-down">
                        <i class="am-icon-bar-chart"></i>
                    </div>
                    <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">

                        <h3>营销策划</h3>
                        <p>
                            搜索引擎营销 、 社会化营销 、 微信营销 、 互联网公关 、 移动互联网营销
                        </p>
                    </div>

                </li>
                <li>
                    <div class="am-u-lg-2 am-u-md-12 m-service-list-icon am-hide-md-down">
                        <i class="am-icon-video-camera"></i>
                    </div>
                    <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                        <h3>广告拍摄</h3>
                        <p>
                            植入式视频广告 、 商业摄影 、 企业宣传片 、 产品宣传片 、 微电影制作 、 移动延时摄影 、 微视频 、 活动摄像
                        </p>
                    </div>

                </li>
                <li>
                    <div class="am-u-lg-2 am-u-md-12 m-service-list-icon am-hide-md-down">
                        <i class="am-icon-credit-card"></i>
                    </div>
                    <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                        <h3>电商服务</h3>
                        <p>淘宝、天猫、京东店铺设计装修 、 普通详情设计 、 营销型详情页设计 、 直通车、钻展小图设计 、 banner设计 、 海报设计

                        </p>
                    </div>

                </li>
                <li>
                    <div class="am-u-lg-2 am-u-md-12 m-service-list-icon am-hide-md-down">
                        <i class="am-icon-sitemap"></i>
                    </div>
                    <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">

                        <h3>品牌策划/设计</h3>
                        <p>
                            <strong>品牌设计</strong> 、 品牌VI设计 、 品牌logo设计 、 企业形象画册 、 产品手册 、 宣传海报 、 户外广告 、 产品包装设计 、 导示系统及应用设计
                            、
                            <strong>品牌策划</strong> 、 品牌形象建立 、 品牌命名（中英文） 、 品牌市场定位 、 品牌广告语 、 品牌传播推广
                        </p>
                    </div>

                </li>
            </ul>
        </div>
    </section>
@endsection