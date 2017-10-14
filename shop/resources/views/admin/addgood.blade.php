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
                <span class="modular fl"><i class="add"></i><em>编辑/添加产品</em></span>
                <span class="modular fr"><a href="product_list.html" class="pt-link-btn">产品列表</a></span>
            </div>


            <form action="/admin/addgood" method="post" enctype="multipart/form-data">
                <table class="list-style">
                    <tr>
                        <td style="text-align:right;width:15%;">产品名称：</td>
                        <td><input type="text" class="textBox length-long" name="goods_name"></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;">产品分类：</td>
                        <td>
                            <select class="textBox" name="cat_id">
                                <option value="0">顶层分类</option>
                                <option value="1">娱乐陪护</option>
                                <option value="2">智能出行</option>
                                <option value="3">智能清洁</option>
                                <option value="4">智能视界</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right;">市场价：</td>
                        <td>
                            <input type="text" class="textBox length-short" name="market_price"/>
                            <span>元</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right;" >会员价：</td>
                        <td>
                            <input type="text" class="textBox length-short" name="plus_price"/>
                            <span>元</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right;">库存：</td>
                        <td>
                            <input type="text" class="textBox length-short" name="goods_number"/>
                            <span>台</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right;" >产品关键词：</td>
                        <td><input type="text" class="textBox length-long" name="goods_keywords"/></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;">产品描述：</td>
                        <td><input type="text" class="textBox length-long" name="goods_brief"/></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;">推荐至：</td>
                        <td>
                            <input type="checkbox" name="is_best" id="jingpin" class="inlinetd" value="1"/>
                            <label for="jingpin" class="inlinetd">精品</label>
                            <input type="checkbox" name="is_new" id="xinpin" class="inlinetd" value="1"/>
                            <label for="xinpin" class="inlinetd">新品</label>
                            <input type="checkbox" name="is_hot" id="rexiao" class="inlinetd" value="1"/>
                            <label for="rexiao" class="inlinetd">热销</label>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align:right;">产品缩图片：</td>
                        <td>
                            <input type="file" id="suoluetu" class="hide" name="thumbimg" multiple="multiple" />
                            <label for="suoluetu" class="labelBtnAdd">+</label>
                            <img src="" id="img0" width="80" height="80"/>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align:right;">产品主图：</td>
                        <td>

                            <input type="file"  multiple="multiple" id="chanpinzhutu" class="hide" name="goodsimg[]"/>
                            <label for="chanpinzhutu" class="labelBtnAdd inlinetd">+</label>
                            <label for="chanpinzhutu" class="labelBtn2 inlinetd" >本地上传(最多可一次选择5张)</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right;"></td>
                        <td>
                            <img src="" width="80" height="80" id="img1"/>
                            <img src="" width="80" height="80" id="img2"/>
                            <img src="" width="80" height="80" id="img3"/>
                            <img src="" width="80" height="80" id="img4"/>
                            <img src="" width="80" height="80" id="img5"/>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align:right;">产品详情：</td>
                        <td><textarea class="textarea tdmargin" name="goods_desc"></textarea></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;"></td>
                        <td><input type="submit" value="发布新商品" class="tdBtn tdmargin"/></td>
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
