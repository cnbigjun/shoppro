<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>一个站长 - 软件市场 软件交易 源码交易</title>
    <meta name="description"
          content="koahub是国内首家软件交易平台，提供自助服务、担保交易、售后保障等服务，保障商家及购买方合作顺利。">
    <meta name="keywords" content="koahub软件市场,软件市场,软件,源码,软件交易,软件交易平台,源码交易,源码交易平台,源码交易网">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="/public/favicon.ico" />
    
    <!-- common css -->
    <link rel="stylesheet" href="/__PUBLIC__/Home/css/bundle.css">
    
    <!--<link href="/__PUBLIC__/Home/css/bootstrap.min.css" rel="stylesheet">-->
    <!--<link href="/__PUBLIC__/Home/css/nprogress.min.css" rel="stylesheet">-->
    <!--<link href="/__PUBLIC__/Home/css/swiper.min.css" rel="stylesheet">-->
    
    <link rel="stylesheet" href="/__PUBLIC__/Home/css/base.min.css">
    <link rel="stylesheet" href="/__PUBLIC__/Home/css/iconfont.css">
    
    <style type="text/css">
        body {
            width:100%;
            width:expression(document.body.clientWidth <= 1240? "1240px": "auto");
            min-width:1240px;
        }
    </style>

    <!-- Daterange picker -->
    <link rel="stylesheet" href="/__PUBLIC__/Home/css/daterangepicker-bs3.css">
    
    <!--<script src="/__PUBLIC__/Home/js/jquery-2.1.4.min.js"></script>-->
    
    <script src="/__PUBLIC__/Home/js/jquery.min.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/__PUBLIC__/Home/js/html5shiv.min.js"></script>
    <script src="/__PUBLIC__/Home/js/respond.min.js"></script>
    <![endif]-->
</head>
<body style="width:expression(document.body.clientWidth <= 1240? '1240px': 'auto');">

<div id="supportBrowser"
     style="display:none;height: 33px;line-height: 33px;color: #999;background: #f6f6f6;text-align: center;border-bottom: 1px solid #dcdcdc;">
    <i class="iconfont" style="margin-right: 6px">&#xe619;</i>暂时不支持此浏览器
</div>

 @include('home/header')

<script type="text/javascript">
    $(function(){
        $('.scroll_top').click(function(){
            $("html,body").animate({scrollTop: 0}, 200);
        });
    });
</script>
<div id="pjax-container">
    <style>
    .home-panel {
        margin-top: 30px;
        display: table;
    }

    .home-rmd-cotent {
        padding-left: 1px;
        float: left;
        width: 1020px;
        padding-right: 23px;
    }
</style>

<div class="home-full-box">
    <div class="mzcontainer">

        <div class="home-panel home-rmd home-floor">

            <div class="home-rmd-main">
                <style>
                    .advertisement {
                        background-color: #000b10;
                        text-align: center;
                        height: 100px;
                    }
                
                    .classification {
                        background-color: #fff;
                        height: 60px;
                        padding: 0 30px;
                    }
                
                    .nav-tip {
                        height: 60px;
                        display: block;
                    }
                
                    .nav-tip li {
                        float: left;
                        margin-right: 3rem;
                        line-height: 60px;
                    }
                
                    .nav-tip li {
                        color: #333;
                        -webkit-font-smoothing: antialiased
                    }
                
                    .nav-tip li a {
                        color: #333;
                        -webkit-font-smoothing: antialiased
                    }
                
                    .nav-tip li a:hover {
                        color: #dd4b39;
                    }
                
                    .nav-tip .choice a {
                        color: #dd4b39;
                    }
                
                    .nav-tip .choice {
                        color: #dd4b39;
                    }
                
                    .filter {
                        margin-bottom: 30px;
                    }
                
                    .filter .f-line.top {
                        height: 25px;
                        background: #f5f5f5;
                        border-bottom: 5px solid #e9e9e9;
                        padding-top: 24px;
                        padding-bottom: 54px;
                    }
                
                    .filter .f-line {
                        border-bottom: 1px solid #E7E3E7;
                        background: #F9F9F9;
                        zoom: 1;
                    }
                
                    .f-sort {
                        float: left;
                        width: 230px;
                    }
                
                    .f-pager {
                        float: right;
                        height: 30px;
                        line-height: 30px;
                        display: none;
                    }
                
                    .filter .f-sort a.curr {
                        background: #dd4b39;
                        color: #FFF;
                        border-color: #ededed;
                    }
                
                    .filter .f-sort a {
                        padding: 6px 12px;
                        height: 30px;
                        border: 1px solid #ededed;
                        line-height: 30px;
                        margin-right: -5px;
                        background: #FFF;
                        color: #333;
                        font-size: 12px;
                    }
                
                    .filter .f-pager .fp-next, .filter .f-pager .fp-prev {
                        color: #ddd;
                    }
                
                    .fp-text {
                        color: #333;
                    }
                
                    .fp-text .num {
                        color: #dd4b39;
                    }
                </style>
                <!--classification-->
                <div class="classification">
                    <ul class="nav-tip">
                        <li>分类:</li>
                        <li menuId="0"><a href="/">全部</a></li>
                        @foreach($categorys as $c)
                        <li menuId="6"><a href="{{url('catlist',$c->cat_id)}}">{{$c->cat_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!--sort-->
                <div class="filter">
                    <div class="f-line top">
                        <div class="f-sort">
                            <a rankBy="all" href="/home/search/index?rankBy=all">综合排序</a>
                            <a rankBy="sale" href="/home/search/index?rankBy=sale">销量</a>
                            <a rankBy="price" href="/home/search/index?rankBy=price">价格</a>
                            <a rankBy="new" href="/home/search/index?rankBy=new">新品</a>
                        </div>
                        <div class="f-pager">
                            <a class="fp-prev disabled" href="#">&lt;</a>
                            <span class="fp-text"><b class="num">1</b><em>/</em><b>100</b></span>
                            <a class="fp-prev paginator-next" onclick="" href="#">&gt;</a>
                        </div>
                    </div>
                </div>
                
                <script type="text/javascript">
                    $(document).ready(function () {
                        if ($get('menu') != undefined) {
                            $('.classification .nav-tip li[menuId="' + $get('menu') + '"]').addClass('choice');
                        } else {
                            $('.classification .nav-tip li[menuId="0"]').addClass('choice');
                        }
                
                        if ($get('rankBy') != undefined) {
                            $('.f-sort a[rankBy="' + $get('rankBy') + '"]').addClass('curr');
                        } else {
                            $('.f-sort a[rankBy="all"]').addClass('curr');
                        }
                    });
                </script>
                <style>
                    .home-category-list {
                        position: relative;
                        float: right;
                        top: 0;
                        left: 0;
                        background-color: #fff;
                        width: 220px;
                        margin-right: 0px;
                        padding: 20px 30px;
                    }
                
                    .rmd-tip {
                        padding-top: 20px;
                        padding-left: 0px;
                        padding-right: 0px;
                    }
                
                    .rmd-tip a {
                        display: table;
                    }
                
                    .rmd-box-commodity {
                        width: 160px;
                        height: 180px;
                    }
                
                    .home-category-list .title {
                        font-size: 16px;
                    }
                </style>
                <!--Guess-like-->
                <div class="home-category-list">
                    <div class="title">猜你喜欢</div>
                
                    <div class="rmd-product-detail rmd-tip">
                        <a href="/home/product/1">
                            <div class="rmd-box-commodity">
                                <img class="lazy" src="/__PUBLIC__/Home/images/blank.gif" data-original="/__PUBLIC__/Home/uploads/de91cb40-1369-11e7-ab1b-f7c3fd5f14b2.jpg"
                                     style="display: inline; width:160px;height: 180px;">
                            </div>
                            <div class="rmd-product-desc" style="margin-top: 16px;">
                                <h4 class="rmd-product-title">分销版微商城</h4>
                                <h6 class="rmd-product-subtitle"></h6>
                                <!-- TODO 替换为内容-->
                
                                <p class="rmd-product-price">
                                    ¥
                                    <span>4500</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="rmd-product-detail rmd-tip">
                        <a href="/home/product/2">
                            <div class="rmd-box-commodity">
                                <img class="lazy" src="/__PUBLIC__/Home/images/blank.gif" data-original="/__PUBLIC__/Home/uploads/fbd3d8d0-136c-11e7-ab1b-f7c3fd5f14b2.jpg"
                                     style="display: inline; width:160px;height: 180px;">
                            </div>
                            <div class="rmd-product-desc" style="margin-top: 16px;">
                                <h4 class="rmd-product-title">普通版微商城（wem…</h4>
                                <h6 class="rmd-product-subtitle"></h6>
                                <!-- TODO 替换为内容-->
                
                                <p class="rmd-product-price">
                                    ¥
                                    <span>4000</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="rmd-product-detail rmd-tip">
                        <a href="/home/product/6">
                            <div class="rmd-box-commodity">
                                <img class="lazy" src="/__PUBLIC__/Home/images/blank.gif" data-original="/__PUBLIC__/Home/uploads/b7026570-1392-11e7-ab1b-f7c3fd5f14b2.jpg"
                                     style="display: inline; width:160px;height: 180px;">
                            </div>
                            <div class="rmd-product-desc" style="margin-top: 16px;">
                                <h4 class="rmd-product-title">多店铺商城</h4>
                                <h6 class="rmd-product-subtitle"></h6>
                                <!-- TODO 替换为内容-->
                
                                <p class="rmd-product-price">
                                    ¥
                                    <span>5000</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="rmd-product-detail rmd-tip">
                        <a href="/home/product/7">
                            <div class="rmd-box-commodity">
                                <img class="lazy" src="/__PUBLIC__/Home/images/blank.gif" data-original="/__PUBLIC__/Home/uploads/de8f3330-1369-11e7-ab1b-f7c3fd5f14b2.jpg"
                                     style="display: inline; width:160px;height: 180px;">
                            </div>
                            <div class="rmd-product-desc" style="margin-top: 16px;">
                                <h4 class="rmd-product-title">多用户三级分销</h4>
                                <h6 class="rmd-product-subtitle"></h6>
                                <!-- TODO 替换为内容-->
                
                                <p class="rmd-product-price">
                                    ¥
                                    <span>6000</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="rmd-product-detail rmd-tip">
                        <a href="/home/product/5">
                            <div class="rmd-box-commodity">
                                <img class="lazy" src="/__PUBLIC__/Home/images/blank.gif" data-original="/__PUBLIC__/Home/uploads/fbd31580-136c-11e7-ab1b-f7c3fd5f14b2.jpg"
                                     style="display: inline; width:160px;height: 180px;">
                            </div>
                            <div class="rmd-product-desc" style="margin-top: 16px;">
                                <h4 class="rmd-product-title">超市版微商城（wem…</h4>
                                <h6 class="rmd-product-subtitle"></h6>
                                <!-- TODO 替换为内容-->
                
                                <p class="rmd-product-price">
                                    ¥
                                    <span>5000</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>                <!--product-->
                <div class="home-rmd-cotent">

                    @foreach($goods as $g)
                    <div class="rmd-box rmd-box-product">
                        <a href="{{url('goods',$g->goods_id)}}">
                    
                            <div class="rmd-product-detail" style="padding: 0">
                                <img class="lazy" src="/__PUBLIC__/Home/images/blank.gif" data-original="/upload/{{explode(',',$g->goods_img)[0]}}"
                                    style="display: inline;width: 243px;height: 243px">
                                <div class="rmd-product-desc" style="margin-top: 20px;">
                                    <h4 class="rmd-product-title">{{$g->goods_name}}</h4>
                                    <h6 class="rmd-product-subtitle"></h6>
                                    <!-- TODO 替换为内容-->
                    
                                    <p class="rmd-product-price">
                                        ¥
                                        <span>{{$g->plus_price}}</span>
                                    </p>
                    
                                </div>
                                <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                    <a href="/home/product/shop/1" style="color: #999;">
                                        wemall商城
                                    </a>
                                </div>
                    
                            </div>
                    
                        </a>
                    </div>
                    @endforeach

                    <div style="width: 100%;float: right;margin-right: 6px;"><div><ul class="pagination no-margin" style="float: right"><li class="active"><a href="/home/search/index?menu=1&page=1">1</a></li><li><a href="/home/search/index?menu=1&page=2">2</a></li><li><a href="/home/search/index?menu=1&page=2" class="paginator-next">下一页</a></li></ul></div></div>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $("img.lazy").lazyload({
            placeholder: "/home/img/blank.gif",
            effect: "fadeIn",
            threshold: 200,
            skip_invisible: false,
            failure_limit: 1000
        });
    });
</script>
</div>

<style type="text/css">
    .site-footer .service-item > i {
        font-size: 48px;
    }
    .site-footer .site-footer-end img {
        height: 36px;
    }
</style>
<div class="site-footer">
    <div class="mzcontainer">
        <div class="site-footer-service">
            <ul class="clearfix">
                <li class="service-item">
                    <i class="iconfont">&#xe606;</i>
                    <p class="service-desc">
                        <span class="service-desc-bold">质量</span>
                        <span class="service-desc-normal">保证</span>
                    </p>
                </li>
                <li class="service-split-line">
                    <span></span>
                </li>
                <li class="service-item">
                    <i class="iconfont">&#xe607;</i>
                    <p class="service-desc">
                        <span class="service-desc-bold">售后</span>
                        <span class="service-desc-normal">保障</span>
                    </p>
                </li>
                <li class="service-split-line">
                    <span></span>
                </li>
                <li class="service-item">
                    <i class="iconfont">&#xe608;</i>
                    <p class="service-desc">
                        <span class="service-desc-bold">自助</span>
                        <span class="service-desc-normal">服务</span>
                    </p>
                </li>
                <li class="service-split-line">
                    <span></span>
                </li>
                <li class="service-item">
                    <i class="iconfont">&#xe60a;</i>
                    <p class="service-desc">
                        <span class="service-desc-bold">技术</span>
                        <span class="service-desc-normal">支持</span>
                    </p>
                </li>
                <li class="service-split-line">
                    <span></span>
                </li>
                <li class="service-item">
                    <i class="iconfont">&#xe609;</i>
                    <p class="service-desc">
                        <span class="service-desc-bold">担保</span>
                        <span class="service-desc-normal">交易</span>
                    </p>
                </li>
                <li class="service-split-line">
                    <span></span>
                </li>
                <li class="service-item">
                    <i class="iconfont">&#xe60b;</i>
                    <p class="service-desc">
                        <span class="service-desc-bold">特色</span>
                        <span class="service-desc-normal">服务</span>
                    </p>
                </li>
            </ul>
        </div>
        <div class="site-footer-navs clearfix">
            <div class="footer-nav-item">
                <h4 class="footer-nav-title">帮助中心</h4>
                <ul>
                    <li><a href="/home/artical/1" target="_blank">使用说明</a></li>
                    <li><a href="/home/artical/6" target="_blank">付款帮助</a></li>
                </ul>
            </div>
            <div class="footer-nav-item">
                <h4 class="footer-nav-title">售后保障</h4>
                <ul>
                    <li><a target="_blank" href="/home/artical/4">售后保障</a></li>
                    <li><a target="_blank" href="/home/artical/5">自助服务</a></li>
                    <li><a target="_blank" href="/home/artical/7">服务协议</a></li>
                </ul>
            </div>
            <div class="footer-nav-item">
                <h4 class="footer-nav-title">关于我们</h4>
                <ul>
                    <li><a target="_blank" href="/home/artical/2">了解我们</a></li>
                    <li><a target="_blank" href="/home/artical/3">联系我们</a></li>
                </ul>
            </div>
            <div class="footer-nav-item">
                <h4 class="footer-nav-title">关注我们</h4>
                <ul>
                    <li><a target="_blank" href="http://weibo.com/u/2335966217">新浪微博</a></li>
                    <li>
                        <a class="meizu-footer-wechat">
                            官方微信
                            <img src="/__PUBLIC__/Home/images/qrcode_for_gh_6f79b0a839f6_344.jpg" alt="微信二维码">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-nav-custom">
                <h4 class="nav-custom-title">24小时全国服务热线</h4>
                <a href="tel:0371-63337761"><h3 class="nav-custom-number">0371-63337761</h3></a>
                <a class="nav-custom-btn" style="color:#fff!important" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3260312512&site=qq&menu=yes">
                    9:00-6:30在线客服
                </a>
            </div>
        </div>
        <div class="site-footer-end">
            <p>
                Copyright © 2015 koahub.com All Rights Reserved 豫ICP备16009619号
            </p>
        </div>
    </div>
</div>

<div style="display:none">
    <script src="/__PUBLIC__/Home/js/stat.js" language="JavaScript"></script>
</div>
<script type="text/javascript" src="/__PUBLIC__/Home/js/bundle.js"></script>

<!--<script src="/__PUBLIC__/Home/js/jquery.pjax.min.js"></script>-->
<!--<script src="/__PUBLIC__/Home/js/jquery.lazyload.min.js"></script>-->
<!--<script src="/__PUBLIC__/Home/js/jquery.form.min.js"></script>-->
<!--<script src="/__PUBLIC__/Home/js/bootstrap.min.js"></script>-->
<!--<script src="/__PUBLIC__/Home/js/layer.min.js"></script>-->
<!--<script src="/__PUBLIC__/Home/js/nprogress.min.js"></script>-->
<!--<script src="/__PUBLIC__/Home/js/swiper.jquery.min.js"></script>-->

<script type="text/javascript" src="/__PUBLIC__/Home/js/base.min.js"></script>
<script src="/__PUBLIC__/Home/js/gt.js"></script>

<!-- daterangepicker -->
<script src="/__PUBLIC__/Home/js/moment.min.js"></script>
<script src="/__PUBLIC__/Home/js/daterangepicker.js"></script>
<!--inotify-->
<!--<script src="/__PUBLIC__/Home/js/inotify.min.js"></script>-->

<link rel="stylesheet" type="text/css" href="/__PUBLIC__/Home/css/wangeditor.min.css">
<script type="text/javascript" src="/__PUBLIC__/Home/js/wangeditor.min.js"></script>

<script type="text/javascript">
// var iNotify = new iNotify({
//     effect: 'flash',
//     interval: 500,
//     message:"有消息拉！2",
//     audio:{
//         file: ['/home/sound/alert.mp3']
//     },
//     notification:{
//         title:"通知！",
//         body:'您来了一条新消息'
//     }
// });

// $(function(){
//     $.ajax({
//         type: "get",
//         url: '/home/public/feedback/notify',
//         success: function(data){
//             console.log(data);
//         }
//     });
// });
</script>

</body>
</html>