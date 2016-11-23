@extends('layouts.public')

@section('title')
    最新资讯-
    @parent
@endsection

@section('content')
    <div class="m-header-banner m-list-header" style="background: url({{asset("img/client/news-bg.jpg")}}) 50% 0 no-repeat fixed;">
        <section class="am-container">
            <hgroup data-am-scrollspy="{animation:'slide-bottom', delay: 314}">
                <h2>最新动态</h2>
                <p>这里有最新的公司动态，这里有最新的网站设计、移动端设计、网页相关内容与你分享！</p>
            </hgroup>
        </section>
    </div>
    <nav class="m-cat-nav">
        <ul class="am-container">
            <li class="am-active" ><a href="/zixun.html"><i class="icon-chevron-right"></i>最新资讯</a></li>
            <li ><a href="/dongtai.html"><i class="icon-chevron-right"></i>网站动态</a></li>
            <li ><a href="/help.html"><i class="icon-chevron-right"></i>帮助中心</a></li>
        </ul>
    </nav>
    <section class="am-container m-news">
        <div class="m-container am-g">
            <article class="am-cf">
                <div class="am-u-lg-2 am-u-md-12 m-news-date am-hide-md-down"><span class="m-date-num">06</span>2015-09</div>
                <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                    <h3><a href="/post/141">俊贰网络官网v1.1网站小改版</a></h3>
                    <div class="m-news-data">
                        <span><i class="am-icon-clock-o"></i> 2015-09-06</span>
                        <span><i class="am-icon-check-square-o"></i> 点击74次</span>
                        <span href="/dongtai.html"><i class="am-icon-bars"></i> 网站动态</span>
                    </div>
                    <p class="m-news-desc">俊贰网络官网进行了小修改与新配色，并升级向应式布局，一个网站兼容多个终端，多终端一体化创新设计解决方案。修改更新项目1、大屏的海报，对海报大文字加入了动态的效果。2、更换了新大logo。3、对导航进行了...</p>
                    <a href="/post/141" class="am-btn am-btn-danger am-radius am-btn-xs" rel="nofollow">READ MORE</a>
                </div>
            </article>
            <article class="am-cf">
                <div class="am-u-lg-2 am-u-md-12 m-news-date am-hide-md-down"><span class="m-date-num">21</span>2015-06</div>
                <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                    <h3><a href="/post/29">网站使用说明-添加内容</a></h3>
                    <div class="m-news-data">
                        <span><i class="am-icon-clock-o"></i> 2015-06-21</span>
                        <span><i class="am-icon-check-square-o"></i> 点击267次</span>
                        <span href="/help/"><i class="am-icon-bars"></i> 帮助中心</span>
                    </div>
                    <img src="views/IMJ2V2/images/loading.gif" alt="网站使用说明-添加内容" data-echo="uploadfiles/image/201506/26.jpg" class="am-img-responsive">                <p class="m-news-desc">添加内容前面讲过了网站的栏目管理，下面来介绍一下网站的内容是如何添加的。一般企业网站的内容会有几种，有资讯内容、产品内容、招聘内容、还有知识内容等等。先登陆网站的后台，点击顶部导航栏的内容选项，...</p>
                    <a href="/post/29" class="am-btn am-btn-danger am-radius am-btn-xs" rel="nofollow">READ MORE</a>
                </div>
            </article>
            <article class="am-cf">
                <div class="am-u-lg-2 am-u-md-12 m-news-date am-hide-md-down"><span class="m-date-num">21</span>2015-06</div>
                <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                    <h3><a href="/post/22">网站使用说明-栏目管理</a></h3>
                    <div class="m-news-data">
                        <span><i class="am-icon-clock-o"></i> 2015-06-21</span>
                        <span><i class="am-icon-check-square-o"></i> 点击29次</span>
                        <span href="/help/"><i class="am-icon-bars"></i> 帮助中心</span>
                    </div>
                    <p class="m-news-desc">栏目类型分为：用于发布信息（如：最新资讯，最新作品等这样的栏目），单网页（单独的一个页面，如：联系我们，关于我们等这样的页面）。栏目管理相当方便，点修改即可进行修改（图片提示1），点发布即可发布信息（...</p>
                    <a href="/post/22" class="am-btn am-btn-danger am-radius am-btn-xs" rel="nofollow">READ MORE</a>
                </div>
            </article>
            <article class="am-cf">
                <div class="am-u-lg-2 am-u-md-12 m-news-date am-hide-md-down"><span class="m-date-num">21</span>2015-06</div>
                <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                    <h3><a href="/post/30">网站使用说明-区块管理</a></h3>
                    <div class="m-news-data">
                        <span><i class="am-icon-clock-o"></i> 2015-06-21</span>
                        <span><i class="am-icon-check-square-o"></i> 点击13次</span>
                        <span href="/help/"><i class="am-icon-bars"></i> 帮助中心</span>
                    </div>
                    <p class="m-news-desc">每个网站上面都会有很多小文字段，小图片，如：网站的顶部会有欢迎语，电话，网站的底部会有关于我们，版权等等的信息，那么这些信息一般的网站会使用直接写入源代码，这样不太便于客户管理。那么我们开发了这个区块...</p>
                    <a href="/post/30" class="am-btn am-btn-danger am-radius am-btn-xs" rel="nofollow">READ MORE</a>
                </div>
            </article>
            <article class="am-cf">
                <div class="am-u-lg-2 am-u-md-12 m-news-date am-hide-md-down"><span class="m-date-num">21</span>2015-06</div>
                <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                    <h3><a href="/post/31">网站使用说明-推荐位管理</a></h3>
                    <div class="m-news-data">
                        <span><i class="am-icon-clock-o"></i> 2015-06-21</span>
                        <span><i class="am-icon-check-square-o"></i> 点击237次</span>
                        <span href="/help/"><i class="am-icon-bars"></i> 帮助中心</span>
                    </div>
                    <p class="m-news-desc">推荐位管理默认已经设置好了一些位置的推荐位，如，大海报，多个banner。推荐位的管理比较简单，推荐位的形式有两种。第一种：自定义添加，顶级顶部的添加，即可添加自定义的推荐位内容。自定义添加的说明...</p>
                    <a href="/post/31" class="am-btn am-btn-danger am-radius am-btn-xs" rel="nofollow">READ MORE</a>
                </div>
            </article>
            <article class="am-cf">
                <div class="am-u-lg-2 am-u-md-12 m-news-date am-hide-md-down"><span class="m-date-num">02</span>2015-06</div>
                <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                    <h3><a href="/post/4">关于网站备案</a></h3>
                    <div class="m-news-data">
                        <span><i class="am-icon-clock-o"></i> 2015-06-02</span>
                        <span><i class="am-icon-check-square-o"></i> 点击109次</span>
                        <span href="/help/"><i class="am-icon-bars"></i> 帮助中心</span>
                    </div>
                    <p class="m-news-desc">为什么要备案？按照工信部要求，您的域名如果访问国内IP，就需要使用IP接入商的备案系统提交备案信息，完成备案工作。在域名未获得备案号之前是无法正常访问网站的，所以若您若使用国内的服务器都需要备案，感谢您的...</p>
                    <a href="/post/4" class="am-btn am-btn-danger am-radius am-btn-xs" rel="nofollow">READ MORE</a>
                </div>
            </article>
            <article class="am-cf">
                <div class="am-u-lg-2 am-u-md-12 m-news-date am-hide-md-down"><span class="m-date-num">02</span>2015-06</div>
                <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                    <h3><a href="/post/7">网站售后服务</a></h3>
                    <div class="m-news-data">
                        <span><i class="am-icon-clock-o"></i> 2015-06-02</span>
                        <span><i class="am-icon-check-square-o"></i> 点击99次</span>
                        <span href="/help/"><i class="am-icon-bars"></i> 帮助中心</span>
                    </div>
                    <p class="m-news-desc">首先我们感谢您选择了俊贰的产品服务，希望您的事业蒸蒸日上！自网站上线之日起客户将享受6个月免费的售后服务。免费服务&lt;/h2&gt;一、网站日常维护&lt;/h3&gt;网站故障排查：及时发现网页及图片的缺损、断链并修改完成，保证...</p>
                    <a href="/post/7" class="am-btn am-btn-danger am-radius am-btn-xs" rel="nofollow">READ MORE</a>
                </div>
            </article>
            <article class="am-cf">
                <div class="am-u-lg-2 am-u-md-12 m-news-date am-hide-md-down"><span class="m-date-num">02</span>2015-06</div>
                <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                    <h3><a href="/post/1">如何选择合适的域名</a></h3>
                    <div class="m-news-data">
                        <span><i class="am-icon-clock-o"></i> 2015-06-02</span>
                        <span><i class="am-icon-check-square-o"></i> 点击114次</span>
                        <span href="/help/"><i class="am-icon-bars"></i> 帮助中心</span>
                    </div>
                    <p class="m-news-desc">为中小企业提供合理的价格，我们不评价更低价的网站建设服务的不足，但也相信商业服务品质与价格的那个平衡点。为中小企业提供合理的价格，我们不评价更低价的网站建设服务的不足，但也相信商业服务品质与价格的那个...</p>
                    <a href="/post/1" class="am-btn am-btn-danger am-radius am-btn-xs" rel="nofollow">READ MORE</a>
                </div>
            </article>
        </div>
    </section>
@endsection