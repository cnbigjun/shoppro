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
                <span class="modular fl"><i class="order"></i><em>订单列表</em></span>
            </div>
            <div class="operate">
                <form>
                    <img src="images/icon_search.gif"/>
                    <input type="text" class="textBox length-long" placeholder="输入订单编号或收件人姓名..."/>
                    <select class="inline-select">
                        <option>未付款</option>
                        <option>已付款</option>
                    </select>
                    <input type="button" value="查询" class="tdBtn"/>
                </form>
            </div>
            <table class="list-style Interlaced">
                <tr>
                    <th>订单编号</th>
                    <th>下单时间</th>
                    <th>收件人</th>
                    <th>订单金额</th>
                    <th>订单状态</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox"/>
                        <a href="order_detail.html">2015041803225</a>
                    </td>
                    <td class="center">
                        <span class="block">DeatGhost</span>
                        <span class="block">2015-04-18 12:00</span>
                    </td>
                    <td width="450">
                        <span class="block">张三[18309275673]</span>
                        <address>陕西省西安市未央区255号</address>
                    </td>
                    <td class="center">
                        <span><i>￥</i><b>58.00</b></span>
                    </td>
                    <td class="center">
                        <span>未付款</span>
                    </td>
                    <td class="center">
                        <a href="order_detail.html" class="inline-block" title="查看订单"><img src="images/icon_view.gif"/></a>
                        <a class="inline-block" title="删除订单"><img src="images/icon_trash.gif"/></a>
                    </td>
                </tr>
            </table>
            <!-- BatchOperation -->
            <div style="overflow:hidden;">
                <!-- Operation -->
                <div class="BatchOperation fl">
                    <input type="checkbox" id="del"/>
                    <label for="del" class="btnStyle">全选</label>
                    <input type="button" value="打印订单" class="btnStyle"/>
                    <input type="button" value="配货" class="btnStyle"/>
                    <input type="button" value="删除订单" class="btnStyle"/>
                </div>
                <!-- turn page -->
                <div class="turnPage center fr">
                    <a>第一页</a>
                    <a>1</a>
                    <a>最后一页</a>
                </div>
            </div>
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
