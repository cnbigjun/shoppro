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
                <span class="modular fl"><i class="user"></i><em>会员列表</em></span>
                <span class="modular fr"><a href="add_user.html" class="pt-link-btn">+添加新会员</a></span>
            </div>
            <div class="operate">
                <form>
                    <select class="inline-select">
                        <option>选择会员等级</option>
                        <option>白金会员</option>
                        <option>黄金会员</option>
                    </select>
                    <input type="text" class="textBox length-long" placeholder="输入会员昵称、姓名、手机号码..."/>
                    <input type="button" value="查询" class="tdBtn"/>
                </form>
            </div>
            <table class="list-style Interlaced">
                <tr>
                    <th>编号</th>
                    <th>会员昵称</th>
                    <th>邮件地址</th>
                    <th>手机号码</th>
                    <th>是否验证</th>
                    <th>可用资金</th>
                    <th>冻结资金</th>
                    <th>注册日期</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox"/>
                        <span class="middle">0</span>
                    </td>
                    <td class="center">DeathGhost</td>
                    <td class="center">DeathGhost@sina.cn</td>
                    <td class="center">18309275673</td>
                    <td class="center"><img src="images/yes.gif"/></td>
                    <td class="center">
     <span>
      <i>￥</i>
      <b>5000000.00</b>
     </span>
                    </td>
                    <td class="center">
     <span>
      <i>￥</i>
      <b>300.00</b>
     </span>
                    </td>
                    <td class="center">2015-04-17</td>
                    <td class="center">
                        <a href="edit_user.html" class="inline-block" title="编辑"><img src="images/icon_edit.gif"/></a>
                        <a href="account.html" class="inline-block" title="资金管理"><img src="images/icon_account.gif"/></a>
                        <a class="inline-block" title="删除"><img src="images/icon_drop.gif"/></a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox"/>
                        <span class="middle">0</span>
                    </td>
                    <td class="center">DeathGhost</td>
                    <td class="center">DeathGhost@sina.cn</td>
                    <td class="center">18309275673</td>
                    <td class="center"><img src="images/no.gif"/></td>
                    <td class="center">
     <span>
      <i>￥</i>
      <b>5000000.00</b>
     </span>
                    </td>
                    <td class="center">
     <span>
      <i>￥</i>
      <b>300.00</b>
     </span>
                    </td>
                    <td class="center">2015-04-17</td>
                    <td class="center">
                        <a href="edit_user.html" class="inline-block" title="编辑"><img src="images/icon_edit.gif"/></a>
                        <a href="account.html" class="inline-block" title="资金管理"><img src="images/icon_account.gif"/></a>
                        <a class="inline-block" title="删除"><img src="images/icon_drop.gif"/></a>
                    </td>
                </tr>
            </table>
            <!-- BatchOperation -->
            <div style="overflow:hidden;">
                <!-- Operation -->
                <div class="BatchOperation fl">
                    <input type="checkbox" id="del"/>
                    <label for="del" class="btnStyle">全选</label>
                    <input type="button" value="批量删除" class="btnStyle"/>
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
