@extends('admin.Base._base')

@section('head_css')
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/fullcalendar.css" />
    <link rel="stylesheet" href="css/unicorn.main.css" />
    <link rel="stylesheet" href="css/unicorn.grey.css" class="skin-color" />
    <link href="style/adminStyle.css" rel="stylesheet" type="text/css"/>

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
        <div class="wrap">
            <div class="page-title">
                <span class="modular fl"><i class="add_user"></i><em>添加新会员</em></span>
            </div>
            <form action="user_list.html">
                <table class="list-style">
                    <tr>
                        <td style="width:15%;text-align:right;">会员昵称：</td>
                        <td><input type="text" class="textBox length-middle"/></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;">会员邮箱：</td>
                        <td><input type="text" class="textBox length-middle"/></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;">设置密码：</td>
                        <td><input type="password" class="textBox length-middle"/></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;">手机号码：</td>
                        <td><input type="text" class="textBox length-middle"/></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;"></td>
                        <td><input type="submit" class="tdBtn tdmargin" value="添加新用户"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@stop
@section('js')
    <script src="jsmodel/jquery.js"></script>
    <script src="jsmodel/public.js"></script>
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
