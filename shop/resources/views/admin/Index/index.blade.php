@extends('admin.Base._base')

@section('head_css')
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/fullcalendar.css" />
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
			<a href="" class="current">控制台</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12 center" style="text-align: center;">
					<ul class="stat-boxes">
						<li>
							<div class="left peity_bar_good"><span>2,4,9,7,12,10,12</span>+20%</div>
							<div class="right">
								<strong>36094</strong>
								访问量
							</div>
						</li>
						<li>
							<div class="left peity_bar_neutral"><span>20,15,18,14,10,9,9,9</span>0%</div>
							<div class="right">
								<strong>1433</strong>
								用户
							</div>
						</li>
						<li>
							<div class="left peity_bar_bad"><span>3,5,9,7,12,20,10</span>-50%</div>
							<div class="right">
								<strong>8650</strong>
								付款
							</div>
						</li>
						<li>
							<div class="left peity_line_good"><span>12,6,9,23,14,10,17</span>+70%</div>
							<div class="right">
								<strong>8650</strong>
								订单
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="alert alert-info">
						欢迎来到<strong>UniAdmin后台管理系统</strong>. 别忘记退出哦!
						<a href="#" data-dismiss="alert" class="close">×</a>
					</div>
					<div class="widget-box">
						<div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>网站统计</h5><div class="buttons"><a href="#" class="btn btn-mini"><i class="icon-refresh"></i> 状态</a></div></div>
						<div class="widget-content">
							<div class="row-fluid">
							<div class="span4">
								<ul class="site-stats">
									<li><i class="icon-user"></i> <strong>1433</strong> <small>所有用户</small></li>
									<li><i class="icon-arrow-right"></i> <strong>16</strong> <small>新用户 (上周)</small></li>
									<li class="divider"></li>
									<li><i class="icon-shopping-cart"></i> <strong>259</strong> <small>整个销售额</small></li>
									<li><i class="icon-tag"></i> <strong>8650</strong> <small>总订单</small></li>
									<li><i class="icon-repeat"></i> <strong>29</strong> <small>新增订单</small></li>
								</ul>
							</div>
							<div class="span8">
								<div class="chart"></div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row-fluid">
				<div id="footer" class="span12">
					2012 &copy; UniAdmin. </div>
			</div>
		</div>
	</div>
@stop
@section('js')
    <script src="js/excanvas.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.ui.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flot.min.js"></script>
    <script src="js/jquery.flot.resize.min.js"></script>
    <script src="js/jquery.peity.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/unicorn.js"></script>
    <script src="js/unicorn.dashboard.js"></script>
@stop
