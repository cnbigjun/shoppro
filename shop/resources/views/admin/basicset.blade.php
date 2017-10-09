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
                <span class="modular fl"><i class="settings"></i><em>站点设置</em></span>
            </div>
            <table class="noborder">
                <tr>
                    <td style="width:15%;text-align:right;"><b>站点名称：</b></td>
                    <td><input type="text" class="textBox length-long"/></td>
                </tr>
                <tr>
                    <td style="text-align:right;"><b>关键词设置：</b></td>
                    <td><input type="text" class="textBox length-long"/></td>
                </tr>
                <tr>
                    <td style="text-align:right;"><b>站点描述：</b></td>
                    <td><input type="text" class="textBox length-long"/></td>
                </tr>
                <tr>
                    <td style="text-align:right;"><b>ICP备案号：</b></td>
                    <td><input type="text" class="textBox length-middle"/></td>
                </tr>
                <tr>
                    <td style="text-align:right;"><b>公司名称：</b></td>
                    <td><input type="text" class="textBox length-long"/></td>
                </tr>
                <tr>
                    <td style="text-align:right;"><b>电子邮件：</b></td>
                    <td><input type="text" class="textBox length-middle"/></td>
                </tr>
                <tr>
                    <td style="text-align:right;"><b>联系电话：</b></td>
                    <td><input type="text" class="textBox length-middle"/></td>
                </tr>
                <tr>
                    <td style="text-align:right;"><b>关闭站点：</b></td>
                    <td>
                        <input type="radio" name="zhandian" id="yes"/>
                        <label for="yes">是</label>
                        <input type="radio" name="zhandian" id="no"/>
                        <label for="no">否</label>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;"><b>关闭站点提示：</b></td>
                    <td>
                        <textarea class="textarea">网站正在内测中...</textarea>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;"></td>
                    <td><input type="submit" value="保存" class="tdBtn"/></td>
                </tr>
            </table>
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
