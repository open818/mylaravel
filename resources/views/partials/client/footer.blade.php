<footer class="m-footer">
    <div class="am-container">
        <section class="m-footer-flink">
            <h2>友情链接</h2>
            @foreach($friends as $friend)
                <a href="{{$friend->url}}" target="_blank">{{$friend->name}}</a>
            @endforeach
        </section>
    </div>

    <div class="m-footer-bottom">
        <div class="am-container">
            <div class="am-g">
                <span class="m-u-sm-12 am-u-md-9 am-u-lg-10">{{ $my_config->copyright }} <a href="http://www.miitbeian.gov.cn/" rel="external nofollow">{{ $my_config->icp }}</a>
                </span>
                <span class="m-u-sm-12 am-u-md-3 am-u-lg-2 ico am-text-right am-hide-sm-only a">
                    <a href="" data-am-popover="{content: '{{ $my_config->contact_qq }}', trigger: 'hover focus'}" rel="nofollow"><i class="am-icon-qq"></i></a>
                    <a href="" data-am-popover="{content: '{{ $my_config->contact_tel }}', trigger: 'hover focus'}" rel="nofollow"><i class="am-icon-phone-square"></i></a>
                    <a href="" data-am-popover="{content: '{{ $my_config->contact_weixin }}', trigger: 'hover focus'}" rel="nofollow"><i class="am-icon-weixin"></i></a>
                    <a href="" data-am-popover="{content: '{{ $my_config->contact_email }}', trigger: 'hover focus'}" rel="nofollow"><i class="am-icon-envelope"></i></a>
                </span>
            </div>
        </div>
    </div>
</footer>