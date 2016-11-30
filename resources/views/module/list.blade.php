@extends('layouts.auth')

@section('content')
    <div class="admin-biaogelist">
        <div class="listbiaoti am-cf">
            <ul class="am-icon-flag on"> 模板列表</ul>

            <dl class="am-icon-home" style="float: right;">当前位置： 首页 > <a href="#">模板列表</a></dl>

            <dl>
                <button type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus" > 新增模板</button>
            </dl>
            <!--这里打开的是新页面-->
        </div>

        <form class="am-form am-g">
            <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
                <thead>
                <tr class="am-success">
                    <th class="table-check"><input type="checkbox" /></th>
                    <th class="table-id">ID</th>
                    <th class="table-title">模板名称</th>
                    <th class="table-type">所属分类</th>
                    <th class="table-author am-hide-sm-only">描述</th>
                    <th width="130px" class="table-set">操作</th>
                </tr>
                </thead>
                <tbody>
                @if(count($data_list)>0)
                @foreach($data_list as $obj)
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>{{$obj->id}}</td>
                        <td><a href="#">{{$obj->name}}</a></td>
                        <td>{{$obj->category->name}}</td>
                        <td class="am-hide-sm-only">{{$obj->desc}}</td>
                        <td>
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button class="am-btn am-btn-default am-btn-xs am-text-success am-round"><span class="am-icon-search" title="预览"></span> </button>
                                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary am-round" data-am-modal="{target: '#my-popups'}" title="修改模板"><span class="am-icon-pencil-square-o"></span></button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr><td colspan="6">暂无数据</td></tr>
                @endif
                </tbody>
            </table>

            <div class="am-btn-group am-btn-group-xs">
            </div>

            {{ $data_list->links('partials.myPagination') }}
            <hr />
            <p>注：.....</p>
        </form>

        @include("partials.footer")
    </div>
@endsection


