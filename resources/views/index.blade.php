@extends('layouts.public')

@section('content')
<div data-am-widget="slider" class="am-slider am-slider-i2" data-am-flexslider="{controlNav:false}">
    <ul class="am-slides">
        <li class="am-slider-images" style="background-image: url({{asset("img/client/banner1.jpg")}})">
            <div class="am-container am-slider-desc">
                <div class="am-slider-content">
                    <h2 class="am-slider-title am-animation-slide-left" data-am-scrollspy="{animation: 'slide-left', delay: 100}">创新企业定制服务</h2>
                    <p data-am-scrollspy="{animation:'slide-right', delay: 600}" class="am-animation-slide-right">来自俊贰网络永不畏惧的创新力量</p>
                    <a href="/fuwu.html" class="am-btn-xs am-btn am-btn-danger am-radius am-animation-slide-bottom am-animation-delay-1" rel="nofollow" data-am-scrollspy="{animation:'slide-bottom', delay: 100}">READ MORE</a>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="m-services m-home-box">
    <section class="am-container">
        <hgroup class="am-animation-slide-bottom am-animation-delay-1" data-am-scrollspy="{animation:'slide-bottom', delay: 100}">
            <h2>我们的服务</h2>
            <p>全力为江门恩平中小企业提供网页设计、网站建设、淘宝/天猫/京东等店铺详情装修设计、产品摄影、广告拍摄、营销策划、平面设计、品牌推广等高端订制服务。</p>
        </hgroup>
        <ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-6 am-thumbnails">
            <li class="am-animation-slide-top" data-am-scrollspy="{animation:'slide-top', delay: 0}">
                <h2>网页设计</h2>
                <p>为客户提供专业化、品牌化的PC手机网站设计、助您在网络领域超越同行者。</p>
            </li>
            <li class="am-animation-slide-top" data-am-scrollspy="{animation:'slide-top', delay: 0}">
                <h2>平面设计</h2>
                <p>专业的服务团队为您量身定制，优秀的设计方案及后期制作，为您解决一切后顾之忧。</p>
            </li>
            <li class="am-animation-slide-top am-animation-delay-1" data-am-scrollspy="{animation:'slide-top', delay: 100}">
                <h2>营销策划</h2>
                <p>运用专业营销理论思想与实战经验，帮助企业以更经济更快速的方式打开市场。</p>
            </li>
            <li class="am-animation-slide-top am-animation-delay-1" data-am-scrollspy="{animation:'slide-top', delay: 100}">
                <h2>广告拍摄</h2>
                <p>致力于本土电子行业产品拍摄、企业宣传拍摄、商业摄影等专业拍摄服务。</p>
            </li>
            <li class="am-animation-slide-top am-animation-delay-2" data-am-scrollspy="{animation:'slide-top', delay: 200}">
                <h2>电商设计</h2>
                <p>专注高端电商定制服务，打造顶级视觉传达设计服务，完美提升品牌形象。</p>
            </li>
            <li class="am-animation-slide-top am-animation-delay-2" data-am-scrollspy="{animation:'slide-top', delay: 200}">
                <h2>品牌策划</h2>
                <p>从定位到设计一系列的系统的视觉形象策划设计方案，为你排忧解难。</p>
            </li>
        </ul>
    </section>

</div>
<div class="am-container m-home-box">
    <hgroup data-am-scrollspy="{animation:'slide-bottom', delay: 100}">
        <h2>案例展示</h2>
        <p>多终端一体化创新设计解决方案响应式自适应设计。</p>
    </hgroup>
    <section class="m-case-list">
        <ul class="am-avg-sm-1 am-avg-md-3 am-avg-lg-3 am-thumbnails">
            <li data-am-scrollspy="{animation:'slide-bottom', delay: 196}">
                <figure class="effect-lily">
                    <img src="{{asset("img/client/loading.gif")}}" alt="俊贰网络品牌VI设计" data-echo="{{asset("img/client/cases/201509/46.jpg")}}" class="am-img-responsive">
                    <figcaption>
                        <h3>SOLOVE素乐</h3>
                        <p>我想我会遇见你，像恋人般重逢美丽</p>
                        <a href="/post/62.html">View more</a>
                    </figcaption>
                </figure>
            </li>

            <li data-am-scrollspy="{animation:'slide-bottom', delay: 174}">
                <figure class="effect-lily">
                    <img src="{{asset("img/client/loading.gif")}}" alt="研磨时光菜单设计" data-echo="{{asset("img/client/cases/201509/23.jpg")}}" class="am-img-responsive">
                    <figcaption>
                        <h3>广州唯一印象婚纱摄影</h3>
                        <p>专注高端定制婚纱摄影</p>
                        <a href="/post/62.html">View more</a>
                    </figcaption>
                </figure>
            </li>

            <li data-am-scrollspy="{animation:'slide-bottom', delay: 119}">
                <figure class="effect-lily">
                    <img src="{{asset("img/client/loading.gif")}}" alt="鲜果果水果宣传单张设计与印刷" data-echo="{{asset("img/client/cases/201509/32.jpg")}}" class="am-img-responsive">
                    <figcaption>
                        <h3>南京启凡英语课程专题</h3>
                        <p>南京唯一一家欧洲教育管理培训中心</p>
                        <a href="/post/62.html">View more</a>
                    </figcaption>
                </figure>
            </li>

            <li data-am-scrollspy="{animation:'slide-bottom', delay: 196}">
                <figure class="effect-lily">
                    <img src="{{asset("img/client/loading.gif")}}" alt="俊贰网络品牌VI设计" data-echo="{{asset("img/client/cases/201509/46.jpg")}}" class="am-img-responsive">
                    <figcaption>
                        <h3>SOLOVE素乐</h3>
                        <p>我想我会遇见你，像恋人般重逢美丽</p>
                        <a href="/post/62.html">View more</a>
                    </figcaption>
                </figure>
            </li>

            <li data-am-scrollspy="{animation:'slide-bottom', delay: 174}">
                <figure class="effect-lily">
                    <img src="{{asset("img/client/loading.gif")}}" alt="研磨时光菜单设计" data-echo="{{asset("img/client/cases/201509/23.jpg")}}" class="am-img-responsive">
                    <figcaption>
                        <h3>广州唯一印象婚纱摄影</h3>
                        <p>专注高端定制婚纱摄影</p>
                        <a href="/post/62.html">View more</a>
                    </figcaption>
                </figure>
            </li>
        </ul>
    </section>

</div>
<hr>
<section class="am-container m-home-box m-partner">
    <hgroup data-am-scrollspy="{animation:'slide-bottom', delay: 100}">
        <h2>协助伙伴</h2>
        <p>用最具影响力品牌协助，并全力协助新兴品牌，我们以设计助力众多品牌走向行业领先地位，鼎力相助每一个梦想。</p>
    </hgroup>
    <ul class="am-avg-lg-8 am-avg-md-8 am-avg-sm-2  am-thumbnails" data-am-scrollspy="{animation:'slide-bottom', delay: 100}">
        <li data-am-scrollspy="{animation:'slide-bottom', delay: 44}">
            <img src="{{asset("img/client/tencent.png")}}" alt="腾讯" class="am-img-responsive"></li>
        <li data-am-scrollspy="{animation:'slide-bottom', delay: 45}">
            <img src="{{asset("img/client/dianxin.png")}}" alt="中国电信" class="am-img-responsive"></li>
        <li data-am-scrollspy="{animation:'slide-bottom', delay: 399}">
            <img src="{{asset("img/client/aliyun.png")}}" alt="阿里云" class="am-img-responsive"></li>
        <li data-am-scrollspy="{animation:'slide-bottom', delay: 286}">
            <img src="{{asset("img/client/canon.png")}}" alt="佳能" class="am-img-responsive"></li>
        <li data-am-scrollspy="{animation:'slide-bottom', delay: 114}">
            <img src="{{asset("img/client/baidu.png")}}" alt="百度" class="am-img-responsive"></li>
        <li data-am-scrollspy="{animation:'slide-bottom', delay: 72}">
            <img src="{{asset("img/client/microsoft.png")}}" alt="微软" class="am-img-responsive"></li>
        <li data-am-scrollspy="{animation:'slide-bottom', delay: 190}">
            <img src="{{asset("img/client/apple.png")}}" alt="苹果" class="am-img-responsive"></li>
        <li data-am-scrollspy="{animation:'slide-bottom', delay: 99}">
            <img src="{{asset("img/client/adobe.png")}}" alt="adobe" class="am-img-responsive"></li>
    </ul>
</section>
<div class="m-home-box m-contact">
    <section class="am-container">
        <hgroup data-am-scrollspy="{animation:'slide-bottom', delay: 100}">
            <h2>联系我们</h2>
            <p>你可以通过以下方式和我们取得联系。</p>
        </hgroup>
        <ul class="am-avg-lg-4 am-avg-md-4 am-avg-sm-2 am-thumbnails">
            <li data-am-scrollspy="{animation:'slide-bottom', delay: 2}"> <i class="am-icon-qq"></i> {{ $my_config->contact_qq }}
            </li>
            <li data-am-scrollspy="{animation:'slide-bottom', delay: 41}"> <i class="am-icon-phone-square"></i> {{ $my_config->contact_tel }}
            </li>
            <li data-am-scrollspy="{animation:'slide-bottom', delay: 51}">
                <i class="am-icon-weixin"></i> {{ $my_config->contact_weixin }}
            </li>
            <li data-am-scrollspy="{animation:'slide-bottom', delay: 211}">
                <i class="am-icon-envelope"></i> {{ $my_config->contact_email }}
            </li>
        </ul>
    </section>
</div>
<div class="m-contact-us">
    <section class="am-container">
        <div class="am-g">
            <span class="m-u-sm-12 am-u-md-9 am-u-lg-10" data-am-scrollspy="{animation:'slide-left', delay: 100}">拥有不一样的高端品牌网站，你还在等什么？点击马上和我们联系！</span>
            <span class="m-u-sm-12 am-u-md-3 am-u-lg-2" data-am-scrollspy="{animation:'slide-right', delay: 100}">
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=11413865&site=qq&menu=yes" class="am-btn am-btn-danger am-radius" rel="external nofollow">马上联系</a>
            </span>
        </div>
    </section>
</div>
@endsection