<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>koahub软件市场 软件交易 源码交易-商城管理后台 (wemall7)</title>
    <meta name="description"
          content="koahub是国内首家软件交易平台，提供自助服务、担保交易、售后保障等服务，保障商家及购买方合作顺利。">
    <meta name="keywords" content="koahub软件市场,软件市场,软件,源码,软件交易,软件交易平台,源码交易,源码交易平台,源码交易网">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/public/favicon.ico"/>

    <!-- common css -->
    <link rel="stylesheet" href="/__PUBLIC__/Home/css/bundle.css">

    <!--<link href="__PUBLIC__/Home/css/bootstrap.min.css" rel="stylesheet">-->
    <!--<link href="__PUBLIC__/Home/css/nprogress.min.css" rel="stylesheet">-->
    <!--<link href="__PUBLIC__/Home/css/swiper.min.css" rel="stylesheet">-->

    <link rel="stylesheet" href="/__PUBLIC__/Home/css/base.min.css">
    <link rel="stylesheet" href="/__PUBLIC__/Home/css/iconfont.css">

    <style type="text/css">
        body {
            width: 100%;
            width: expression(document.body.clientWidth <= 1240? "1240px": "auto");
            min-width: 1240px;
        }
    </style>

    <!-- Daterange picker -->
    <link rel="stylesheet" href="/__PUBLIC__/Home/css/daterangepicker-bs3.css">

    <!--<script src="__PUBLIC__/Home/js/jquery-2.1.4.min.js"></script>-->

    <script src="/__PUBLIC__/Home/js/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="__PUBLIC__/Home/js/html5shiv.min.js"></script>
    <script src="__PUBLIC__/Home/js/respond.min.js"></script>
    <![endif]-->
</head>
<body style="width:expression(document.body.clientWidth <= 1240? '1240px': 'auto');">

<div id="supportBrowser"
     style="display:none;height: 33px;line-height: 33px;color: #999;background: #f6f6f6;text-align: center;border-bottom: 1px solid #dcdcdc;">
    <i class="iconfont" style="margin-right: 6px">&#xe619;</i>暂时不支持此浏览器
</div>

@include('home/header')

<script type="text/javascript">
    $(function () {
        $('.scroll_top').click(function () {
            $("html,body").animate({scrollTop: 0}, 200);
        });
    });
</script>
<div id="pjax-container">
    <style type="text/css">
        .home-rmd-main {
            width: 1240px;
            height: 500px;
            margin: 40px 0 20px 0;
            padding: 30px 40px;
            background-color: #fff;
            position: relative;
        }

        .left {
            width: 580px;
            height: 500px;
            position: absolute;
        }

        .right {
            width: 580px;
            height: 500px;
            position: absolute;
            right: 40px;
        }

        .name {
            font-size: 24px;
            color: #333;
        }

        .Label {
            width: 50px;
            height: 20px;
            font-size: 12px;
            border-radius: 3px;
            margin-left: 20px;
            padding: 3px 14px;
            color: #fff;
            background-color: #e05d4c;
            vertical-align: middle;
        }

        .description {
            font-size: 18px;
            color: #8b8b8b;
            margin-top: 24px;
            margin-bottom: 24px;
            height: auto;
            max-height：100px； overflow: hidden;
            text-overflow: ellipsis;
            -webkit-font-smoothing: antialiased
        }

        .price-panel {
            height: 80px;
            background-color: #fdf8f7;
        }

        .price {
            color: #dd4b39;
            font-size: 36px;
            padding-left: 30px;
            line-height: 80px;
        }

        .subscript {
            font-size: 20px;
        }

        .qrcode {
            height: 80px;
            line-height: 70px;
            float: right;
            margin-right: 30px;
        }

        .qrcode-demo-show {
            width: 180px;
            height: 200px;
            display: none;
            border: 1px solid #f5f5f5;
            background-color: #fff;
            position: absolute;
            right: 62px;
            top: 172px;
            padding: 12px;
        }

        .qrcode-demo-show img {
            width: 150px;
            height: 150px;
            padding: 15px 15px 0px 15px;
        }

        .qrcode-title {
            margin-top: 0px;
            text-align: center;
            color: #333;
            font-size: 14px;
        }

        .purchase {
            width: 100%;
            height: 70px;
            margin-top: 30px;
        }

        .purchase .buy:after {
            clear: both;
        }

        .purchase a {
            color: #fff;
            text-decoration: none;
        }

        .btn-buy {
            width: 136px;
            height: 40px;
            float: left;
            text-align: center;
            border-radius: 3px;
            border: 1px solid #e15640;
            background-color: #e15640;
        }

        .btn-buy a {
            line-height: 40px;
        }

        .btn-shop {
            width: 136px;
            height: 40px;
            float: left;
            text-align: center;
            margin-left: 10px;
            border-radius: 3px;
            border: 1px solid #eb9384;
            background-color: #fbf0ef;
        }

        .btn-shop a {
            line-height: 40px;
            color: #e56b5b;
        }

        .buy {
            width: 100%;
            padding-top: 30px;
            border-top: 1px solid #f6f6f6;
        }

        .buy a {
            text-decoration: none;
        }

        .buy .icon-kf {
            width: 40px;
            height: 40px;
            padding: 12px;
            border-radius: 50%;
            color: #fff;
            background-color: #e05d4c;
        }

        .buy .icon-demo {
            width: 40px;
            height: 40px;
            padding: 12px;
            border-radius: 50%;
            color: #fff;
            margin-left: 30px;
            background-color: #4c92e0;
        }

        .buy i {
            margin-left: 10px !important;
        }

        .buy-text {
            margin-left: 16px;
            color: #333;
        }

        #view .swiper-slide,
        #view .swiper-wrapper {
            width: 420px !important;
            height: 420px !important;
        }

        #preview .swiper-slide,
        #preview.swiper-wrapper {
            width: 60px !important;
            height: 60px !important;
        }

        .nav-tabs > li.active > a,
        .nav-tabs > li.active > a:focus,
        .nav-tabs > li.active > a:hover {
            cursor: default;
            background-color: #fff !important;
            border: 0;
            outline: none !important;
            border-bottom: 3px solid #dd4b39;
            margin-bottom: -1px;
        }

        .nav.nav-tabs > li > a {
            color: #000;
        }

        .tab-pane.active {
            display: block;
        }

        .tab-pane {
            display: none;
            padding: 20px;
        }

        .nav > li > a:focus, .nav > li > a:hover {
            background-color: #fff !important;
            border: 0;
            line-height: normal;
            margin-right: 0 !important;
        }

        .nav-tabs > li > a {
            margin-right: 0 !important;
            border: 0px solid transparent;
        }

        :focus {
            outline: -webkit-focus-ring-color auto 0px;
        }

        .nav-tabs > li {
            margin-bottom: 0px;
            margin-right: 30px;
        }

        #function table td {
            border: 1px solid #999;
            padding: 3px 5px;
            min-width: 50px;
            height: 20px;
        }
    </style>
    <div class="home-full-box">
        <div class="mzcontainer">
            <div class="home-panel home-rmd home-floor">
                <div class="home-rmd-main">
                    <div class="left">
                        <div id="preview" style="height: 430px;float: left;">
                            <div class="swiper-container" style="border:1px solid #eee;">
                                <div class="swiper-wrapper" style="padding:5px;">
                                    <div class="swiper-slide active-nav">
                                        <div>
                                            <img src="/upload/{{explode(',',$goods->goods_img)[0]}}"
                                                 style="width: 60px;height: 60px" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="view" style="float: left;margin-left:20px;">
                            <div class="swiper-container" style="border: 1px solid #eee;">
                                <div class="swiper-wrapper" style="padding: 10px;">
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0);" target="_blank">
                                            <img src="/upload/{{explode(',',$goods->goods_img)[0]}}" alt=""
                                                 style="width: 420px;height: 420px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="name">{{$goods->goods_name}}
                            <span class="Label">源码</span>
                        </div>
                        <div class="description">{{$goods->goods_brief}}</div>
                        <div class="price-panel">
                            <div class="price">
                                <span class="subscript">¥ </span>{{$goods->plus_price}}
                                <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                    ¥<span style="font-size: 18px;">{{$goods->market_price}}</span>
                                </del>

                                <span class="qrcode">
                            <i class="iconfont icon-demo" style="font-size: 28px;color: #343232">&#xe6c7;</i>
                            </span>
                            </div>

                        </div>
                        <div class="qrcode-demo-show">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31 31">
                                <path d="M1 1h7v7h-7zM10 1h1v2h2v1h1v-1h-1v-1h-1v-1h3v1h2v1h-2v1h2v1h-1v4h-1v-2h-1v-2h-1v1h-1v-2h-1v2h-1zM17 1h1v1h-1zM19 1h2v1h-2zM23 1h7v7h-7zM2 2v5h5v-5zM24 2v5h5v-5zM3 3h3v3h-3zM17 3h2v1h-2zM20 3h2v1h-2zM25 3h3v3h-3zM19 4h1v2h1v-1h1v3h-1v-1h-1v2h-2v-1h1v-1h-1v-1h-1v-1h2zM9 6h1v2h-1zM11 7h1v2h-1zM13 7h1v2h-1zM17 7h1v1h-1zM1 9h1v1h-1zM4 9h1v2h1v2h-1v2h-1v-2h-1v-1h1zM6 9h2v1h-1v1h-1zM9 9h2v1h-2zM12 9h1v2h-1zM16 9h1v2h-2v-1h1zM21 9h2v1h1v1h-1v1h-1v-1h-1zM24 9h1v1h-1zM2 10h1v1h-1zM26 10h1v1h2v2h1v1h-2v-1h-1v1h-1zM29 10h1v1h-1zM1 11h1v2h1v1h-2zM7 11h2v1h-2zM10 11h1v1h-1zM13 11h1v2h-1v1h-2v-2h2zM17 11h1v1h-1zM20 11h1v1h-1zM24 11h1v3h-2v2h-1v-1h-2v-1h-3v-1h2v-1h1v1h4zM9 12h1v3h-1zM15 12h2v1h-2zM7 13h1v1h-1zM13 14h1v1h-1zM16 14h1v1h1v1h3v1h-2v2h-1v-2h-1v-1h-1zM27 14h1v1h2v1h-1v2h-1v-2h-1zM1 15h1v1h-1zM3 15h1v1h-1zM5 15h1v1h-1zM7 15h1v1h-1zM11 15h2v1h-1v1h-2v-1h1zM24 15h1v1h-1zM2 16h1v1h1v-1h1v2h-1v1h5v-1h1v1h1v2h1v-2h-1v-1h2v2h1v-1h1v2h-2v2h-1v-1h-2v1h-1v-2h1v-1h-3v1h-1v1h-1v-2h-1v1h-1v-3h-1zM6 16h1v1h-1zM8 16h1v2h-2v-1h1zM13 16h3v1h1v2h-1v-1h-3zM25 16h2v2h-1v-1h-1zM21 17h2v1h1v1h1v1h-1v1h2v4h1v2h1v1h-2v2h-2v-1h1v-3h-1v1h-1v-1h-2v-5h2v-2h-1v-1h-1zM29 18h1v3h-2v-2h1zM1 19h1v1h-1zM26 19h1v1h-1zM16 20h1v1h-1zM18 20h3v1h-3zM1 21h1v1h-1zM7 21h1v1h-1zM15 21h1v1h-1zM17 21h1v2h-1zM27 21h1v1h2v1h-1v2h-2v-1h1v-1h-1zM14 22h1v1h1v1h-1v1h-1v-1h-1v-1h1zM22 22v3h3v-3zM1 23h7v7h-7zM10 23h2v1h-1v1h-2v-1h1zM18 23h1v1h-1zM23 23h1v1h-1zM2 24v5h5v-5zM12 24h1v1h-1zM16 24h2v1h1v2h-1v-1h-2v2h1v2h-2v-1h-1v-2h-3v-2h1v1h3v-1h1zM19 24h1v1h-1zM3 25h3v3h-3zM29 25h1v1h-1zM9 26h1v1h-1zM28 26h1v1h-1zM10 27h1v2h-1zM19 27h3v3h-1v-1h-1v-1h-1zM29 27h1v1h-1zM12 28h1v1h-1zM18 28h1v2h-1zM23 28h1v1h-1zM28 28h1v2h-1zM9 29h1v1h-1zM11 29h1v1h-1z"/>
                            </svg>
                            <p class="qrcode-title">手机扫一扫查看演示</p>
                        </div>
                        <div class="purchase">

                            <div class="btn-buy">
                                <a href="{{url('addcart',$goods->goods_id)}}">加入购物车</a>
                            </div>
                            <div class="btn-shop">
                                <a href="/">进入店铺</a>
                            </div>
                        </div>
                        <div class="buy">
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=88888888&site=qq&menu=yes" target="_blank">
                                <i class="iconfont icon-kf">&#xe61c;</i>
                                <span class="buy-text">在线客服1</span>
                            </a>
                            <a href="http://demo.wemall7.wemallshop.com" target="_blank">
                                <i class="iconfont icon-demo">&#xe618;</i>
                                <span class="buy-text">查看演示</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div style="background-color: #fff">
                    <div style="padding: 20px 0 10px 0px;width: 1200px;margin: 0 auto;">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#detail" data-toggle="tab">产品描述</a>
                            </li>
                            <li style="">
                                <a href="#function" data-toggle="tab">功能列表</a>
                            </li>
                            <li>
                                <a href="#params" data-toggle="tab">技术参数</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade in active" id="detail" style="text-align: center">
                        <!--                     <p><br></p><p><img src="/__PUBLIC__/Home/images/f133ffe0-1dc1-11e7-b91b-953390e2cc9a.png" alt="lALOvErQe80cLs0EsA_1200_7214" style="max-width:100%;"><br></p>
                        <p><br></p> -->
                        {{$goods->goods_desc}}
                    </div>
                    <div class="tab-pane fade in" id="function"><p><br></p></div>
                    <div class="tab-pane fade in" id="params">laravel商城构建</div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.qrcode > .iconfont.icon-demo').hover(function () {
                if ($('.qrcode-demo-show').is(':hidden')) {
                    $('.qrcode-demo-show').show();
                }
            }, function () {
                if ($('.qrcode-demo-show').is(':visible')) {
                    $('.qrcode-demo-show').hide();
                }
            });

            var viewSwiper = new Swiper('#view .swiper-container', {
                paginationClickable: true,
                direction: 'vertical',
                onSlideChangeStart: function () {
                    updateNavPosition()
                }
            });

            var previewSwiper = new Swiper('#preview .swiper-container', {
                slidesPerView: 3,
                direction: 'vertical',
                onSlideClick: function () {
                    viewSwiper.swipeTo(previewSwiper.clickedSlideIndex)
                }
            });

            function updateNavPosition() {
                $('.preview .active-nav').removeClass('active-nav')
                var activeNav = $('.preview .swiper-slide').eq(viewSwiper.activeIndex).addClass('active-nav')
                if (!activeNav.hasClass('swiper-slide-visible')) {
                    if (activeNav.index() > previewSwiper.activeIndex) {
                        var thumbsPerNav = Math.floor(previewSwiper.width / activeNav.width()) - 1
                        previewSwiper.swipeTo(activeNav.index() - thumbsPerNav)
                    } else {
                        previewSwiper.swipeTo(activeNav.index())
                    }
                }
            }
        })
    </script>

</div>

<!-- 底部开始 -->
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
                <a class="nav-custom-btn" style="color:#fff!important" target="_blank"
                   href="http://wpa.qq.com/msgrd?v=3&uin=3260312512&site=qq&menu=yes">
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
<!-- 底部结束 -->

<div style="display:none">
    <script src="/__PUBLIC__/Home/js/stat.js" language="JavaScript"></script>
</div>
{{--<script type="text/javascript" src="/__PUBLIC__/Home/js/bundle.js"></script>--}}

<!--<script src="__PUBLIC__/Home/js/jquery.pjax.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/jquery.lazyload.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/jquery.form.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/bootstrap.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/layer.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/nprogress.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/swiper.jquery.min.js"></script>-->

<script type="text/javascript" src="/__PUBLIC__/Home/js/base.min.js"></script>
<script src="/__PUBLIC__/Home/js/gt.js"></script>

<!-- daterangepicker -->
<script src="/__PUBLIC__/Home/js/moment.min.js"></script>
<script src="/__PUBLIC__/Home/js/daterangepicker.js"></script>
<!--inotify-->
<!--<script src="__PUBLIC__/Home/js/inotify.min.js"></script>-->

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