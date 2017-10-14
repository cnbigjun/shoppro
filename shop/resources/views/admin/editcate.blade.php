@extends('admin.Base._base')

@section('head_css')
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../css/fullcalendar.css" />
    <link rel="stylesheet" href="../css/unicorn.main.css" />
    <link rel="stylesheet" href="../css/unicorn.grey.css" class="skin-color" />
    <link href="../style/adminStyle.css" rel="stylesheet" type="text/css"/>

@stop

@section('header')

    <div id="header">
        <h1><a href="../dashboard.html">UniAdmin</a></h1>
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
                <span class="modular fl"><i></i><em>编辑分类</em></span>
            </div>
        <form action="" method="post">
            <table class="list-style">
                <tr>
                    <td style="text-align:right;width:15%;">分类名称：</td>
                    <td>
                        <input type="text"  name="cat_name" class="textBox" value="{{$cate->cat_name}}">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;width:10%;">上级分类：</td>
                    <td>
                        <select class="textBox" name="parent_id" value="{{$cate->parent_id}}">
                            <option value="0">顶层分类</option>
                            <option value="1">娱乐陪护</option>
                            <option value="2">智能出行</option>
                            <option value="3">智能清洁</option>
                            <option value="4">智能视界</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;">数量单位：</td>
                    <td>
                        <input type="text" class="textBox length-short"/>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;">排序：</td>
                    <td>
                        <input type="text" class="textBox length-short"/>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;">是否显示：</td>
                    <td>
                        <input  type="radio" name="show" id="yes"/>
                        <label style="display:inline;" for="yes">是</label>
                        <input style="display:inline;" type="radio" name="show" id="no"/>
                        <label style="display:inline;" for="no">否</label>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;">分类页面标题：</td>
                    <td>
                        <input type="text" class="textBox length-long"/>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;">分类页面关键词：</td>
                    <td>
                        <input type="text" class="textBox length-long"/>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;">分类页面描述：</td>
                    <td>
                        <textarea class="textarea tdmargin" name="intro">{{$cate->intro}}</textarea>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;"></td>
                    <td><input type="submit" value="保存" class="tdBtn tdmargin"/></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
    @if(Session::has('message'))
        <div class="alert alert-info"> {{Session::get('message')}}
        </div>
    @endif
@stop
@section('js')
    <script src="../jsmodel/jquery.js"></script>
    <script src="../jsmodel/public.js"></script>
    <script src="../js/excanvas.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.ui.custom.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.flot.min.js"></script>
    <script src="../js/jquery.flot.resize.min.js"></script>
    <script src="../js/jquery.peity.min.js"></script>
    <script src="../js/fullcalendar.min.js"></script>
    <script src="../js/unicorn.js"></script>
    <script src="../js/unicorn.dashboard.js"></script>
@stop
