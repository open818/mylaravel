@extends('layouts.auth')

@section('content')
    <div class="admin-biaogelist">

        <div class="listbiaoti am-cf">
            <ul class="am-icon-flag on"> 栏目名称</ul>

            <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">商品列表</a></dl>



        </div>

        <div class="fbneirong">
            <form class="am-form">
                <div class="am-form-group am-cf">
                    <div class="zuo">标题：</div>
                    <div class="you">
                        <input type="email" class="am-input-sm" id="doc-ipt-email-1" placeholder="请输入标题">
                    </div>
                </div>
                <div class="am-form-group am-cf">
                    <div class="zuo">关键词：</div>
                    <div class="you">
                        <input type="password" class="am-input-sm" id="doc-ipt-pwd-1" placeholder="请输入关键词">
                    </div>
                </div>
                <div class="am-form-group am-cf">
                    <div class="zuo">描述：</div>
                    <div class="you">
                        <textarea class="" rows="2" id="doc-ta-1"></textarea>
                    </div>
                </div>
                <div class="am-form-group am-cf">
                    <div class="zuo">缩略图：</div>
                    <div class="you"><input type="file" id="doc-ipt-file-1"> </div>
                </div>

                <div class="am-form-group am-cf">
                    <div class="zuo">产品图片：</div>
                    <div class="you" style="height: 45px;">
                        <input type="file" id="doc-ipt-file-1">
                        <p class="am-form-help">请选择要上传的文件...</p>
                    </div>
                </div>


                <div class="am-form-group am-cf">
                    <div class="zuo">内容：</div>
                    <div class="you">
                        <textarea class="" rows="2" id="doc-ta-1"></textarea>
                    </div>
                </div>

                <div class="am-form-group am-cf">
                    <div class="zuo">其他信息：</div>
                    <div class="you">
                        <textarea class="" rows="2" id="doc-ta-1"></textarea>
                    </div>
                </div>


                <div class="am-form-group am-cf">
                    <div class="zuo">推荐：</div>
                    <div class="you" style="margin-top: 5px;">
                        <label class="am-checkbox-inline">
                            <input type="checkbox" value="option1">
                            选我 </label>
                        <label class="am-checkbox-inline">
                            <input type="checkbox" value="option2">
                            同时可以选我 </label>
                        <label class="am-checkbox-inline">
                            <input type="checkbox" value="option3">
                            还可以选我 </label>
                    </div>
                </div>
                <div class="am-form-group am-cf">
                    <div class="you" style="margin-left: 11%;">
                        <button type="submit" class="am-btn am-btn-success am-radius">发布并关闭窗口</button>&nbsp;  &raquo; &nbsp; <button type="submit" class="am-btn am-btn-secondary am-radius">发布并继续发布</button>

                    </div>
                </div>
            </form>
        </div>



        <div class="foods">
            <ul>
                版权所有@2015
            </ul>
            <dl>
                <a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a>
            </dl>
        </div>

    </div>
@endsection


