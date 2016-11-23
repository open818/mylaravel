@extends('layouts.public')

@section('title')
    案例展示-
    @parent
@endsection

@section('content')
    <div class="m-header-banner m-list-header" style="background: url({{asset("img/client/case-bg.jpg")}}) 50% 0 no-repeat fixed;">
        <section class="am-container">
            <hgroup data-am-scrollspy="{animation:'slide-bottom', delay: 339}">
                <h2>案例</h2>
                <p>力求视觉与交互的完美契合，以规范的流程和专注的态度，为您提供全方位的设计服务。</p>
            </hgroup>
        </section>
    </div>

    <nav class="m-cat-nav">
        <ul class="am-container">
            <li ><a href="/wangzhan.html"><i class="icon-chevron-right"></i>案例展示</a></li>
            <li class="am-active" ><a href="/wangzhan/"><i class="icon-chevron-right"></i>网站建设</a></li>
            <li ><a href=""><i class="icon-chevron-right"></i>电商设计</a></li>
            <li ><a href=""><i class="icon-chevron-right"></i>平面设计</a></li>
        </ul>
    </nav>
    <div class="am-container m-list">
        <article>
            <section class="m-case-list">
                <ul class="am-avg-sm-1 am-avg-md-2 am-avg-lg-3 am-thumbnails">
                    @foreach($cases as $case)
                        <li>
                            <figure class="effect-lily">
                                <img src="{{asset("img/client/loading.gif")}}" alt="{{$case->name}}" data-echo="{{asset("img/client/cases/".$case->img)}}" class="am-img-responsive">
                                <figcaption>
                                    <h3>{{$case->name}}</h3>
                                    <p>{{$case->desc}}</p>
                                    <a href="{{$case->url}}">View more</a>
                                </figcaption>
                            </figure>
                        </li>
                    @endforeach
                </ul>
            </section>
        </article>
    </div>
@endsection