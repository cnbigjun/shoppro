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
                <span class="modular fl"><i></i><em>产品列表</em></span>
                <span class="modular fr"><a href="{{url('admin/addgood')}}" class="pt-link-btn">+添加商品</a></span>
            </div>
            <div class="operate">
                <form>
                    <select class="inline-select">
                        <option>A店铺</option>
                        <option>B店铺</option>
                    </select>
                    <input type="text" class="textBox length-long" placeholder="输入产品名称..."/>
                    <input type="button" value="查询" class="tdBtn"/>
                </form>
            </div>
            <table class="list-style Interlaced">
                <tr>
                    <th>ID编号</th>
                    <th>产品</th>
                    <th>名称</th>
                    <th>市场价</th>
                    <th>会员价</th>
                    <th>库存</th>
                    <th>精品</th>
                    <th>新品</th>
                    <th>热销</th>
                    <th>操作</th>
                </tr>
                @foreach($goods as $good)
                <tr>
                    <td>
     <span>
     <input type="checkbox" class="middle children-checkbox"/>
     <i>{{$good->goods_id}}</i>
     </span>
                    </td>
                    <td class="center pic-area"><img src="../upload/{{$good->thumb_img}}" class="thumbnail"/></td>
                    <td class="td-name">
                        <span class="ellipsis td-name block">{{$good->goods_name}}</span>
                    </td>
                    <td class="center">
     <span>
      <i>￥</i>
      <em>{{$good->market_price}}</em>
     </span>
                    </td>
                    <td class="center">
     <span>
      <i>￥</i>
      <em>{{$good->plus_price}}</em>
     </span>
                    </td>
                    <td class="center">
     <span>
      <em>{{$good->goods_number}}</em>
      <i>件</i>
     </span>
                    </td>
                    @if($good->is_best==1)
                    <td class="center"><img src="images/yes.gif"/></td>
                    @else
                    <td class="center"><img src="images/no.gif"/></td>
                    @endif
                    @if($good->is_new==1)
                    <td class="center"><img src="images/yes.gif"/></td>
                    @else
                    <td class="center"><img src="images/no.gif"/></td>
                    @endif
                    @if($good->is_hot==1)
                    <td class="center"><img src="images/yes.gif"/></td>
                    @else
                    <td class="center"><img src="images/no.gif"/></td>
                    @endif
                    <td class="center">
                        <a href="http://www.baidu.com/跳转至前台页面哦" title="查看" target="_blank"><img src="images/icon_view.gif"/></a>
                        <a href="{{url('admin/editgood',[$good->goods_id])}}" title="编辑"><img src="images/icon_edit.gif"/></a>
                        <a title="删除" href="{{url('admin/delgood',[$good->goods_id])}}"><img src="images/icon_drop.gif"/></a>
                    </td>
                </tr>
                @endforeach

            </table>
            <!-- BatchOperation -->
            <div style="overflow:hidden;">
                <!-- Operation -->
                <div class="BatchOperation fl">
                    <input type="checkbox" id="del"/>
                    <label for="del" class="btnStyle middle">全选</label>
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
    @if(Session::has('message'))
        <div class="alert alert-info"> {{Session::get('message')}}
        </div>
    @endif
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
