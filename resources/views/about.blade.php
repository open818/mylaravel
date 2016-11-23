@extends('layouts.public')

@section('title')
    关于俊贰-
    @parent
@endsection

@section('content')
    <div class="m-header-banner m-list-header" style="background: url({{asset("img/client/about-bg.jpg")}}) 50% 0 no-repeat fixed;">
        <section class="am-container">
            <hgroup data-am-scrollspy="{animation:'slide-bottom', delay: 107}">
                <h2>关于我们</h2>
                <p>永不畏惧创新，高端网站定制，标新立异来自俊贰助您在网络领域超越同行者。</p>
            </hgroup>
        </section>
    </div>
    <nav class="m-cat-nav">
        <ul class="am-container">
            <li class="am-active" ><a href="/about/"><i class="icon-chevron-right"></i>关于俊贰</a></li>
            <li ><a href="/fuwu.html"><i class="icon-chevron-right"></i>服务内容</a></li>
            <li ><a href="/hezuo.html"><i class="icon-chevron-right"></i>合作流程</a></li>
            <li ><a href="/contact.html"><i class="icon-chevron-right"></i>联系我们</a></li>
            <li ><a href="/fukuan.html"><i class="icon-chevron-right"></i>付款方式</a></li>
            <li ><a href="/sitemap.html"><i class="icon-chevron-right"></i>网站地图</a></li>
        </ul>
    </nav>
    <div class="am-container">
        <section class="m-mn-box">
            <p><br/></p>        <p>
                深度挖掘潜力，洞察受众群体取向，制定一体化的策划从发现到创新。
            </p>
            <ul class="am-avg-sm-1 am-avg-md-3 am-avg-lg-3 am-thumbnails list-paddingleft-2">
                <li>
                    <img src="views/IMJ2/images/we-1.jpg" class="am-img-responsive" alt="网站设计经验" />
                    <h3>
                        经验
                    </h3>
                    <p>
                        拥有超过8年行业经验的资深团队及设计开发经验，服务上百家品牌企业。
                    </p>
                </li>
                <li>
                    <img src="views/IMJ2/images/we-2.jpg" class="am-img-responsive" alt="专业网站代码" />
                    <h3>
                        专业
                    </h3>
                    <p>
                        我们整合商业思考，不断追求完美和卓越，渴望成为潮流的引领者。
                    </p>
                </li>
                <li>
                    <img src="views/IMJ2/images/we-3.jpg" class="am-img-responsive" alt="创新网站设计" />
                    <h3>
                        创新
                    </h3>
                    <p>
                        我们摒弃墨守成规、腐朽不堪的设计理念和页面风格设计，希望能创造更多独特精彩的作品。
                    </p>
                </li>
            </ul>
            <p>
                俊贰网络成立于2010年，专注高端网站建设、视觉设计、平面设计、广告拍摄、产品摄影、营销策划和品牌网络推广为一体的创新高端公司，拥有超过8年行业经验的资深团队及设计、开发、摄影、营销、开发经验，强悍创新的视觉执行力，实现品牌高度的价值。
            </p>
            <p>
                俊贰为您提供权威的品牌网站建设、网页设计制作、平面设计、logo设计、VI设计、广告拍摄、产品摄影、营销策划以及淘宝/天猫/京东设计装修等服务，专业级的制作帮助您打造高端的品牌效果。
            </p>
        </section>
    </div>
@endsection