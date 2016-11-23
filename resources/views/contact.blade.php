@extends('layouts.public')

@section('title')
    联系我们-
    @parent
@endsection

@section('content')
    <div class="m-header-banner m-list-header" style="background: url({{asset("img/client/contact-bg-1.jpg")}}) 50% 0 no-repeat fixed;">
        <section class="am-container">
            <hgroup data-am-scrollspy="{animation:'slide-bottom', delay: 267}">
                <h2>联系我们</h2>
                <p>拥有不一样的高端品牌网站，你还在等什么？可以从以下方式联系我们。</p>
            </hgroup>
        </section>
    </div>
    <nav class="m-cat-nav">
        <ul class="am-container">
            <li ><a href="/about.html"><i class="icon-chevron-right"></i>关于俊贰</a></li>
            <li ><a href="/fuwu.html"><i class="icon-chevron-right"></i>服务内容</a></li>
            <li ><a href="/hezuo.html"><i class="icon-chevron-right"></i>合作流程</a></li>
            <li class="am-active" ><a href="/contact.html"><i class="icon-chevron-right"></i>联系我们</a></li>
            <li ><a href="/fukuan.html"><i class="icon-chevron-right"></i>付款方式</a></li>
            <li ><a href="/sitemap.html"><i class="icon-chevron-right"></i>网站地图</a></li>
        </ul>
    </nav>
    <div class="am-container m-contact-page">
        <article class="m-mn-box">
            <section>
                <p><br/></p>      <h3>
                    改变自己，从联系俊贰开始。
                </h3>
                <p>
                    创造有活力的品牌网站，提升用户体验和品牌价值感
                </p>
                <ul class="am-avg-sm-1 am-avg-md-4 am-avg-lg-4 am-thumbnails list-paddingleft-2">
                    <li>
                        <div class="m-contact-infobox">
                            <h3>
                                <em class="am-icon-phone-square"></em> 137-2615-1807
                            </h3>
                        </div>
                    </li>
                    <li>
                        <div class="m-contact-infobox">
                            <h3>
                                <em class="am-icon-qq"></em> 11413865
                            </h3>
                        </div>
                    </li>
                    <li>
                        <div class="m-contact-infobox">
                            <h3>
                                <em class="am-icon-weixin"></em> 137-2615-1807
                            </h3>
                        </div>
                    </li>
                    <li>
                        <div class="m-contact-infobox">
                            <h3>
                                <em class="am-icon-envelope"></em> imj2@qq.com
                            </h3>
                        </div>
                    </li>
                </ul>
            </section>
        </article>
    </div>
@endsection