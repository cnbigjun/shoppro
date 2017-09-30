@extends('admin.Base._base')

@section('head_css')
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/uniform.css" />
    <link rel="stylesheet" href="css/select2.css" />
    <link rel="stylesheet" href="css/unicorn.main.css" />
    <link rel="stylesheet" href="css/unicorn.grey.css" class="skin-color" />
@stop

@section('header')

    <div id="header">
        <h1><a href="./dashboard.html">UniAdmin</a></h1>
    </div>
@stop

@section('search')
    <div id="search">
        <input type="text" placeholder="请输入搜索内容..." /><button type="submit" class="tip-right" title="Search"><i class="icon-search icon-white"></i></button>
    </div>
@stop
@section('user-nav')
            <div id="user-nav" class="navbar navbar-inverse">
                <ul class="nav btn-group">
                    <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-user"></i> <span class="text">个人资料</span></a></li>
                    <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">消息</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="sAdd" title="" href="#">新消息</a></li>
                            <li><a class="sInbox" title="" href="#">收件箱</a></li>
                            <li><a class="sOutbox" title="" href="#">发件箱</a></li>
                            <li><a class="sTrash" title="" href="#">发送</a></li>
                        </ul>
                    </li>
                    <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">设置</span></a></li>
                    <li class="btn btn-inverse"><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
                </ul>
            </div>
@stop
@section('sidebar')
    @include('admin.Base.sidebar')
@stop
@section('content')
	<div id="content">
		<div id="content-header">
			<h1>控制台</h1>
			<div class="btn-group">
				<a class="btn btn-large tip-bottom" title="公告"><i class="icon-file"></i></a>
				<a class="btn btn-large tip-bottom" title="用户"><i class="icon-user"></i></a>
				<a class="btn btn-large tip-bottom" title="消息"><i class="icon-comment"></i><span class="label label-important">5</span></a>
			</div>
		</div>
		<div id="breadcrumb">
			<a href="" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> 首页</a>
            <a href="" class="current">栏目管理</a>
			<a href="" class="current">栏目列表</a>
		</div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>栏目名称</th>
                                        <th>栏目状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cate_list['cates'] as $list)
                                    <tr class="text-center">
                                        <td>{{$list->cate_name}}</td>
                                        <td>@if ($list->is_enabled == 1) 有效 @endif</td>
                                        <td class="text-center">
                                        <button class="btn btn-primary btn-mini">查看子栏目</button>
                                       </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row-fluid">
                    <div id="footer" class="span12">
                        2012 &copy; UniAdmin.</div>
                </div>
            </div>
	</div>
@stop
@section('js')
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.ui.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.uniform.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/unicorn.js"></script>
    <script src="js/unicorn.tables.js"></script>
@stop
