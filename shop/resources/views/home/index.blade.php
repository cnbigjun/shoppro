<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>koahub软件市场 软件交易 源码交易</title>
    <meta name="description"
          content="koahub是国内首家软件交易平台，提供自助服务、担保交易、售后保障等服务，保障商家及购买方合作顺利。">
    <meta name="keywords" content="koahub软件市场,软件市场,软件,源码,软件交易,软件交易平台,源码交易,源码交易平台,源码交易网">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="/public/favicon.ico" />
    
    <!-- common css -->
    <link rel="stylesheet" href="__PUBLIC__/Home/css/bundle.css">
    
    <!--<link href="__PUBLIC__/Home/css/bootstrap.min.css" rel="stylesheet">-->
    <!--<link href="__PUBLIC__/Home/css/nprogress.min.css" rel="stylesheet">-->
    <!--<link href="__PUBLIC__/Home/css/swiper.min.css" rel="stylesheet">-->
    
    <link rel="stylesheet" href="__PUBLIC__/Home/css/base.min.css">
    <link rel="stylesheet" href="__PUBLIC__/Home/css/iconfont.css">
    
    <style type="text/css">
        body {
            width:100%;
            width:expression(document.body.clientWidth <= 1240? "1240px": "auto");
            min-width:1240px;
        }
    </style>

    <!-- Daterange picker -->
    <link rel="stylesheet" href="__PUBLIC__/Home/css/daterangepicker-bs3.css">
    
    <!--<script src="__PUBLIC__/Home/js/jquery-2.1.4.min.js"></script>-->
    
    <script src="__PUBLIC__/Home/js/jquery.min.js"></script>
    
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
<div class="site-topbar clearfix">
    
    
    <div class="mzcontainer">
        <div class="topbar-nav">
            <a href="/home/index/index">KoaHub软件市场 - 国内首家软件交易平台</a>
        </div>
        <div class="topbar-right">
            <ul class="topbar-info">
                <!--<li class="topbar-info-member">
                    <a class="topbar-link" href="javascript:void(0)">
                        <span id="MzUserName" class="site-member-name">juzhiwei</span>
                    </a>
                    <div class="site-member-items" style="text-align: center">
                        <a class="site-member-link" href="/home/user/index">我的账户</a>
                        <a class="site-member-link" href="/home/order/index">我的订单</a>
                        <a class="site-member-link" href="/home/coupon/index">我的卡券</a>
                        <a class="site-member-link" href="/home/user/product">我的产品</a>
                        <a class="site-member-link" href="/home/domain/index">我的授权</a>
                        <a class="site-member-link" href="/home/feedback/index">我的售后</a>


                        <a class="site-member-link site-logout" target="_self" href="/home/public/logout">退出</a>
                    </div>
                </li>-->
				<li class="mz_login">
                    <a class="topbar-link site-login" target="_self" href="{{url('login')}}">登录</a>
                </li>
                <li class="mz_login">
                    <a class="topbar-link" target="_self" href="{{url('register')}}">注册</a>
                </li>
				
                <li class="topbar-order-msg">
                    <a class="topbar-link" href="/home/cart/index">购物车 (&nbsp;<span id="cartCount">2</span>&nbsp;)</a>
                </li>
            </ul>
            <div class="topbar-info-pop"></div>
        </div>
    </div>
</div>
<style type="text/css">
    .header-nav ul > li.active > a {
        line-height: 20px;
        margin-top: 23px;
        padding: 6px 20px;
        color: #ee0000;
        font-size: 14px;
        border: 1px solid;
        border-radius: 3px;
        background-image: none;
        background-color: transparent;
        border-color: #ee0000;
    }
</style>

<div class="site-header">
    <div class="mzcontainer">
        <div class="header-logo">
            <a href="/home/index/index">
                <img src="__PUBLIC__/Home/images/logo.svg" rel="nofollow" alt="koahub logo" title="koahub logo">
            </a>
        </div>
        <div class="header-nav">
            <ul class="nav-list">

                <li class="nav-item">
                    <a class="nav-item-link" href="/home/promotion/index" target="_blank"><span style="color:#dd4b39">邀请有奖 <i class="iconfont" style="font-size:18px">&#xe60c;</i></span></a>
                </li>

                <li class="nav-item pull-right active">
                    <a class="nav-item-link" href="/home/shop/add" pjax-push-false>申请入驻</a>
                </li>

                <style type="text/css">
                    .home-floor .rmd-box-product {
                        float: left;
                    }
                
                    .site-search {
                        position: relative;
                        width: 216px;
                        margin: 0 auto;
                    }
                
                    .site-search :focus {
                        outline: -webkit-focus-ring-color auto 0px;
                    }
                
                    .site-search input[type="search"] {
                        height: 24px;
                        margin: 0;
                    }
                
                    .site-search input[type=search] {
                        color: #dd4b39;
                        border: 1px solid #dd4b39 !important;
                        border-radius: 3px!important;
                        margin: 0 auto;
                        padding: 4px;
                        padding-left: 15px;
                        font-size: 1em;
                        display: block;
                        width: 100%;
                        outline: 0;
                    }
                
                    .site-search [type=submit] {
                        height: 48px;
                        width: 48px;
                        padding: 14px;
                        border-left: 1px solid #dd4b39;
                    }
                
                    .site-search [type=submit] {
                        position: absolute;
                        top: -5px;
                        right: -12px;
                        width: 34px;
                        padding: 8px;
                        margin-bottom: 0px;
                        border: 0;
                        cursor: pointer;
                        display: block;
                        color: inherit;
                        -moz-appearance: none;
                        -webkit-appearance: none;
                        appearance: none;
                        background-color: transparent;
                    }
                
                    .site-search .a11y-only {
                        position: absolute !important;
                        height: 1px;
                        width: 1px;
                        overflow: hidden;
                        clip: rect(1px 1px 1px 1px);
                        clip: rect(1px, 1px, 1px, 1px);
                    }
                
                    .site-search svg:not(:root) {
                        overflow: hidden;
                        color: #dd4b39;
                    }
                
                    .site-search :-moz-placeholder {
                        /* Mozilla Firefox 4 to 18 */
                        color: #dd4b39;
                    }
                
                    .site-search ::-moz-placeholder {
                        /* Mozilla Firefox 19+ */
                        color: #dd4b39;
                    }
                
                    .site-search input:-ms-input-placeholder,
                    .site-search textarea:-ms-input-placeholder {
                        color: #dd4b39;
                    }
                
                    .site-search input::-webkit-input-placeholder,
                    .site-search textarea::-webkit-input-placeholder {
                        color: #dd4b39;
                    }
                
                    .site-search .search .hello {
                        text-align: center;
                        color: #dd4b39;
                        margin-top: 12px;
                    }
                </style>
                
                <li class="nav-item pull-right">
                    <div class="search" style="margin-top: 23px;margin-right: 51px">
                        <form class="site-search" action="/home/search/index" method="get" pjax-push-true>
                            <div id="site-search-container">
                                <input name="search" type="search" placeholder="普通版,分销版" value="" style="-webkit-appearance:none;">
                            </div>
                            <button tabindex="2" type="submit">
                                <span class="a11y-only">Search</span>
                                <svg viewBox="0 0 34 34" fill="none" stroke="currentColor">
                                    <ellipse stroke-width="3" cx="16" cy="15" rx="12" ry="12"></ellipse>
                                    <path d="M26 26 l 8 8" stroke-width="3" stroke-linecap="square"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </li>
            </ul>

        </div>

    </div>
</div>
<style type="text/css">
.bar-ui-sidebar {
    position: fixed;
    right: 0;
    bottom: 130px;
    z-index: 10;
}

.bar-ui-sidebar .same-icon {
    text-align: center;
    z-index: 1000;
    margin-bottom: 5px
}

.bar-ui-sidebar .same-icon a {
    color: #fff;
    display: block;
    background-color: rgba(0, 0, 0, .5);
    width: 40px;
    height: 40px;
    border-radius: 3px;
    text-decoration: none;
    cursor: pointer
}

.bar-ui-sidebar .same-icon a span {
    font-size: 12px;
    display: block
}
.bar-ui-sidebar .same-icon a i {
    font-size: 14px;
}
.bar-ui-sidebar .same-icon a span:first-child {
    padding: 6px 0 3px
}

.bar-ui-sidebar .same-icon a:hover {
    background-color: #dd4b39
}

.bar-ui-sidebar .qrcode-download {
    background-color: #fff;
    border: 1px solid #e6e6e6;
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: 1000
}

.bar-ui-sidebar .qrcode-download .closedown {
    font-size: 12px;
    color: #dd4b39;
    text-align: right;
    cursor: pointer;
    padding: 10px 12px 0 0
}

.bar-ui-sidebar .app-download {
    position: relative;
    height: 40px
}

.bar-ui-sidebar .scroll {
    bottom: 195px;
    right: 0;
    display: none
}

.bar-ui-sidebar .scroll .eqf-chevron-thin-up {
    font-size: 14px!important
}

.bar-ui-sidebar .bgScroll {
    background: linear-gradient(124deg, #08ae1f, #08ae1f, #1ddde8, #1de840, #e3e81d, #e8b71d);
    background-size: 1800% 1800%;
    animation: sidebar-rainbow 15s ease infinite
}

.bar-ui-sidebar .attention li {
    padding-bottom: 10px
}

.bar-ui-sidebar .attention li:first-child {
    border-bottom: 1px solid #e6ebed;
    margin: 0
}

@keyframes sidebar-rainbow {
    0% {
        background-position: 0 82%
    }
    50% {
        background-position: 100% 19%
    }
    to {
        background-position: 0 82%
    }
}
</style>

<div class="bar-ui-sidebar">
    <div class="same-icon" bar-go-top="" style="display: block;">
        <a class="scroll_top"> <i class="iconfont">&#xe621;</i> <span>顶部</span> </a>
    </div>
    <div class="same-icon">
        <a target="_blank" href="/home/artical/1"> <i class="iconfont">&#xe61f;</i> <span>教程</span> </a>
    </div>
    <div class="same-icon">
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3260312512&site=qq&menu=yes"> <i class="iconfont">&#xe61e;</i> <span>帮助</span> </a>
    </div>
    
    <div class="same-icon">
        <a href="mailto:koahub@163.com" target="_blank"> <i class="iconfont">&#xe620;</i> <span class="feedback-word">反馈</span> </a>
    </div>
</div>

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
        margin-top: 0px;
        display: table;
    }

    .commodity-panel {
        width: 1240px;
        margin: 0 auto;
        float: left;
    }
</style>

<style type="text/css">
    .nav-left {
        margin-right: 0px;
        float: left;
        z-index: 1000;
        width: 200px;
        height: 100%;
        background-color: #fff;
        position: relative;
    }

    .new-express {
        position: relative;
        float: right;
        top: 20px;
        z-index: 1;
        background-color: #fff;
        width: 220px;
        height: 410px;
    }

    .news {
        width: 220px;
        height: 72px;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-left: 16px;
    }

    .news li {
        width: 180px;
        height: 24px;
        line-height: 24px;
        overflow: hidden;
    }

    .news li a {
        color: #8d8d8d;
        line-height: 24px;
        font-size: 14px;
        -webkit-font-smoothing: antialiased
    }

    .news li a:hover {
        color: #e46f61;
    }

    .new-express-name {
        line-height: 44px;
        margin-left: 16px;
    }

    .new-express-img {
        width: 100px;
        height: 110px;
        margin-left: 5px;
        float: left;
    }

    .new-express-img img {
        width: 100px;
        height: 110px;
    }

    .price {
        float: left;
        margin-left: 4px;
    }

    .price a {
        color: #333;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
        background: #dd4b39 !important;
    }
</style>

<div id="swiper-bg" style="background-color: #f5f5f5">
    <div style="width:1240px;height:450px;margin:auto;">
        <!--轮播图-->
        <div class="swiper-container" style="width:1240px;height:450px; margin:0px;position: absolute;">
            <div class="swiper-wrapper">

                <div class="swiper-slide" color="#a61ded"><a href="http://wxa.qingful.com/home/ump/20" target="_blank"><img src="__PUBLIC__/Home/images/c3bbb8e0-87cb-11e7-b4cf-3d5882ac4961.jpg"></a></div>
                <div class="swiper-slide" color="#eb2e39"><a href="http://www.qingful.com/" target="_blank"><img src="__PUBLIC__/Home/images/2014c890-83e2-11e7-b4cf-3d5882ac4961.jpg"></a></div>
                <div class="swiper-slide" color="#00a0e9"><a href="http://wxa.qingful.com/home/ump/16" target="_blank"><img src="__PUBLIC__/Home/images/91561750-8655-11e7-b4cf-3d5882ac4961.jpg"></a></div>
                <div class="swiper-slide" color="#9338d8"><a href="http://www.qingful.com/" target="_blank"><img src="__PUBLIC__/Home/images/85b424b0-76a0-11e7-b4cf-3d5882ac4961.jpg"></a></div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <!--轮播图左边-->
        <div class="nav-left">
            <div class="home-category-nav">
                <ul class="home-category-nav">
            
                    <div class="category-nav-link" style="padding-left: 36px;height: 57px;
                line-height: 57px;color: #8d8d8d;">
                        <i class="iconfont" style="margin-right: 10px;">&#xe60c;</i><span>活动中心</span>
                    </div>
            
                    <ul class="home-category-nav">
            
            
                    </ul>
                    
                    <hr style="margin: 0"/>
                    
                    <div class="category-nav-link" style="padding-left: 36px;height: 57px;
                line-height: 57px;color: #8d8d8d;">
                        <i class="iconfont" style="margin-right: 10px">&#xe614;</i><span>产品中心</span>
                    </div>
            
                    <ul class="home-category-nav">
            
                        <li class="home-category-nav-item">
                            <a class="category-nav-link" href="/home/search/index?menu=6">
                                <span>免费专区</span> 
                            </a>
                        </li>
                        <li class="home-category-nav-item">
                            <a class="category-nav-link" href="/home/search/index?menu=1">
                                <span>商城系统</span> <i class="iconfont" style="color:#dd4b39">&#xe622;</i>
                            </a>
                        </li>
                        <li class="home-category-nav-item">
                            <a class="category-nav-link" href="/home/search/index?menu=3">
                                <span>微信营销</span> 
                            </a>
                        </li>
                        <li class="home-category-nav-item">
                            <a class="category-nav-link" href="/home/search/index?menu=2">
                                <span>博客论坛</span> 
                            </a>
                        </li>
                        <li class="home-category-nav-item">
                            <a class="category-nav-link" href="/home/search/index?menu=4">
                                <span>企业官网</span> 
                            </a>
                        </li>
                        <li class="home-category-nav-item">
                            <a class="category-nav-link" href="/home/search/index?menu=8">
                                <span>增值服务</span> 
                            </a>
                        </li>
            
                    </ul>
            
                </ul>
            
            </div>
            
            <script type="text/javascript">
                $(document).ready(function () {
                    var pathname = window.location.pathname + window.location.search;
                    $('.home-category-nav').find('a[href="' + pathname + '"]').parent().addClass('active');
                });
            </script>        </div>
        <!--右-->
        <div class="new-express">
            <div class="new-express-name"> 新品快报</div>
            <hr style="margin: 0">
            <ul class="news">
                <li><a href="/home/artical/24" target="_blank"><span>青否818发烧节，为你喜欢！为你发狂！</span></a></li>
                <li><a href="/home/artical/23" target="_blank"><span>【预告】青否狂欢节，年中钜惠！</span></a></li>
                <li><a href="/home/artical/22" target="_blank"><span>WeMall微商城，一次购买，多次授权！</span></a></li>
            </ul>
            <hr style="margin:0">

            <div class="new-express-name">热门推荐</div>

            <div class="new-express-img">
                <a href="/home/product/2"><img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/fbd3d8d0-136c-11e7-ab1b-f7c3fd5f14b2.jpg"></a>
            </div>
            <div class="rmd-product-desc price">
                <h4 class="rmd-product-title" style="font-size: 13px"><a href="/home/product/2">普通版微商城…</a></h4>
                <h6 class="rmd-product-subtitle"></h6>
                <p class="rmd-product-price">
                    ¥
                    <span style="font-size: 14px">4000</span>
                </p>
            </div>
            <div style="clear: both"></div>
            <div class="new-express-img">
                <a href="/home/product/1"><img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/de91cb40-1369-11e7-ab1b-f7c3fd5f14b2.jpg"></a>
            </div>
            <div class="rmd-product-desc price">
                <h4 class="rmd-product-title" style="font-size: 13px"><a href="/home/product/1">分销版微商城</a></h4>
                <h6 class="rmd-product-subtitle"></h6>
                <p class="rmd-product-price">
                    ¥
                    <span style="font-size: 14px">4500</span>
                </p>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            effect : 'fade',
            paginationClickable: true,
            autoplay: 3500,
            autoplayDisableOnInteraction: false,
            onInit: function(swiper){
                var color = $('.swiper-container .swiper-slide').eq(swiper.activeIndex).attr('color');
                if(color){
                    $('#swiper-bg').css('background-color', color);
                }
            },
            onSlideChangeStart: function(swiper){
              var color = $('.swiper-container .swiper-slide').eq(swiper.activeIndex).attr('color');
              if(color){
                  $('#swiper-bg').css('background-color', color);
              }
            }
        });
    })
</script>
<div class="home-full-box">
    <div class="mzcontainer">

        <div class="home-panel home-rmd home-floor">

            <style>
                .brand {
                    width: 1240px;
                    padding: 0;
                }
            
                .brand-tip {
                    width: 1240px;
                }
            
                .brand-log {
                    width: 137.7px;
                    height: 75px;
                    float: left;
                    border: 1px solid #f5f5f5;
                }
            
                .brand-log a {
                    display: inline-block;
                }
            
                .brand-log a img {
                    width: 137.7px;
                    height: 75px;
                }
            
                .brand-name {
                    width: 100%;
                    height: 60px;
                    font-size: 20px;
                    line-height: 60px;
                    color: #333333;
                    -webkit-font-smoothing: antialiased
                }
            </style>
            <!--brand-->
            <div class="brand">
                <div class="brand-name">品牌专区</div>
                <ul class="brand-tip">
                    <li class="brand-log">
                        <a href="/home/product/shop/46"><img src="__PUBLIC__/Home/images/89557ea0-19eb-11e7-b1f7-49224369332f.jpg" alt=""></a>
                    </li>
                    <li class="brand-log">
                        <a href="{{url('goods')}}"><img src="__PUBLIC__/Home/images/c00b6480-9059-11e6-beb5-59e40724fc32.jpg" alt=""></a>
                    </li>
                    <li class="brand-log">
                        <a href="/home/product/shop/50"><img src="__PUBLIC__/Home/images/aae44eb0-1e9c-11e7-b91b-953390e2cc9a.jpg" alt=""></a>
                    </li>
                </ul>
            </div>
            <div class="commodity-panel">
                <div style="width: 996px;float: left">
                    <style>
                        .home-rmd-cotent {
                            padding-left: 1px;
                            width: 1020px;
                            padding-right: 23px;
                        }
                    
                        .area-name {
                            width: 996px;
                            height: 60px;
                            font-size: 20px;
                            line-height: 60px;
                            color: #333333;
                            -webkit-font-smoothing: antialiased
                        }
                    
                        .area-name-left {
                            float: left;
                        }
                    
                        .area-name-right {
                            float: right;
                            font-size: 16px;
                            margin-right: 6px;
                        }
                    
                        .area-name-right a {
                            color: #333;
                        }
                    </style>
                    
                    
                    <div class="home-rmd-cotent">
                        <div class="area-name">
                            <div class="area-name-left" style="height: 60px">koahub商城
                                <span style="color: #666;font-size: 16px;">- Node.js 下一代商城系统</span>
                            </div>
                            <div class="area-name-right"><a href="/home/product/shop/46">更多<i class="iconfont">&#xe624;</i></a></div>
                        </div>
                    
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/de943c40-1369-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">单用户商城</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>16000</span>
                                        </p>
                        
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            koahub商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/de9303c0-1369-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">多用户商城</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>16000</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">32000</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            koahub商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/de93a000-1369-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">单用户商城（App）</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>16000</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">65000</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            koahub商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/de926780-1369-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">全栈移动商城（微信端＋App）</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>16000</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">68000</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="/home/product/shop/46" style="color: #999;">
                                            koahub商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                    </div>
                    
                    
                    <div class="home-rmd-cotent">
                        <div class="area-name">
                            <div class="area-name-left" style="height: 60px">wemall商城
                                <span style="color: #666;font-size: 16px;">- 高性能移动商城系统，微信商城系统，三级分销系统</span>
                            </div>
                            <div class="area-name-right"><a href="{{url('goods')}}">更多<i class="iconfont">&#xe624;</i></a></div>
                        </div>
                    
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/fbd27940-136c-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">【 普通版小程序 】</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>2000</span>
                                        </p>
                        
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/fbd3d8d0-136c-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">普通版微商城（wemall7）</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>4000</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">4000</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/fbd5fbb0-136c-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">【 水果版小程序 】</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>4000</span>
                                        </p>
                        
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/26aea730-1393-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">水果版微商城（wemall7）</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>6000</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">6000</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/eb478b30-1db5-11e7-b91b-953390e2cc9a.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">o2o版微商城 (wemall7…</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>5000</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">5000</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/fbd47510-136c-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">商城管理后台 (wemall7)</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>3000</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">3000</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/fbd31580-136c-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">超市版微商城（wemall7）</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>5000</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">5000</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/e76ae340-145f-11e7-a44c-8b67d4d6c549.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">外卖版微商城（wemall7）</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>5000</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">5000</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/de91cb40-1369-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">分销版微商城</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>4500</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">4500</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/fbcbc280-136c-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">多用户商城尊享版</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>12800</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">12800</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/b7026570-1392-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">多店铺商城</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>5000</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">5000</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods')}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/26b006c0-1393-11e7-ab1b-f7c3fd5f14b2.jpg"
                                        style="display: inline;width: 243px;height: 243px">
                                    <div class="rmd-product-desc" style="margin-top: 20px;">
                                        <h4 class="rmd-product-title">夺宝商城</h4>
                                        <h6 class="rmd-product-subtitle"></h6>
                                        <!-- TODO 替换为内容-->
                        
                                        <p class="rmd-product-price">
                                            ¥
                                            <span>5000</span>
                                        </p>
                        
                                        <del class="rmd-product-price" style="color: #ccc;margin-left: 6px;">
                                            ¥
                                            <span style="font-size: 13px;">5000</span>
                                        </del>
                                    </div>
                                    <div style="text-align: left;font: 12px/12px SimSun;margin: 10px 4px 0 10px;float: left">
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                    </div>
                    
                </div>

                <div style="width: 220px;float: right">
                    <style>
                        .home-category-list {
                            position: relative;
                            float: right;
                            top: 0;
                            left: 0;
                            background-color: #fff;
                            width: 220px;
                            margin-top: 60px;
                            margin-right: 0px;
                            padding: 20px 30px;
                        }
                    
                        .rmd-tip {
                            padding-top: 0px;
                            padding-left: 0px;
                            padding-right: 0px;
                        }
                    
                        .line {
                            margin: 10px 0px;
                        }
                    
                        .selling {
                            width: 160px;
                            height: 140px;
                        }
                    
                        .selling img {
                            width: 140px;
                            height: 140px;
                            display: inline;
                        }
                    
                        .selling-cont-name {
                            width: 160px;
                            height: 17px;
                            font-size: 12px;
                            color: #333;
                            text-align: left;
                            overflow: hidden;
                        }
                    
                        .selling-cont-name a {
                            color: #333;
                        }
                    
                        .selling-cont-name a:hover {
                            color: #e46f61;
                        }
                    
                        .selling-classification {
                            width: 160px;
                            height: 20px;
                            line-height: 20px;
                            font-size: 12px;
                            color: #8d8d8d;
                            margin-left: 19px;
                            text-align: left;
                        }
                    
                        .selling-classification a {
                            color: #8d8d8d;
                        }
                        .spacing {
                            margin-right: 8px;
                        }
                    </style>
                    <div class="home-category-list">
                        <div class="title">畅销</div>
                        <hr class="line">
                        <div class="rmd-product-detail rmd-tip">
                            <div class="selling-cont">
                    
                                <div class="selling" style="margin-bottom: 14px">
                                    <a href="/home/product/1">
                                        <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/de91cb40-1369-11e7-ab1b-f7c3fd5f14b2.jpg">
                                    </a>
                                </div>
                    
                                <div class="selling-cont-name"><a href="/home/product/1"><span class="spacing" >1.</span>分销版微商城</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/2"><span class="spacing" >2.</span>普通版微商城（wemall7）</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/6"><span class="spacing" >3.</span>多店铺商城</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/7"><span class="spacing" >4.</span>多用户三级分销</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/5"><span class="spacing" >5.</span>超市版微商城（wemall7）</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/3"><span class="spacing" >6.</span>水果版微商城（wemall7）</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/4"><span class="spacing" >7.</span>外卖版微商城（wemall7）</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/9"><span class="spacing" >8.</span>pc分销商城（微信端＋pc端）</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/21"><span class="spacing" >9.</span>微信分销系统</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                        </div>
                    </div>                    <style>
                        .home-category-list {
                            position: relative;
                            float: right;
                            top: 0;
                            left: 0;
                            background-color: #fff;
                            width: 220px;
                            margin-top: 60px;
                            margin-right: 0px;
                            padding: 20px 30px;
                        }
                    
                        .rmd-tip {
                            padding-top: 0px;
                            padding-left: 0px;
                            padding-right: 0px;
                        }
                    
                        .line {
                            margin: 10px 0px;
                        }
                    
                        .selling {
                            width: 160px;
                            height: 140px;
                        }
                    
                        .selling img {
                            width: 140px;
                            height: 140px;
                            float: left;
                        }
                    
                        .selling-cont {
                            margin-top: 14px;
                            width: 160px;
                        }
                    
                        .selling-cont-name {
                            width: 160px;
                            height: 17px;
                            font-size: 12px;
                            color: #333;
                            text-align: left;
                            overflow: hidden;
                        }
                    
                        .selling-cont-name a {
                            color: #333;
                        }
                    
                        .selling-cont-name a:hover {
                            color: #e46f61;
                        }
                    
                        .selling-classification {
                            width: 160px;
                            height: 20px;
                            line-height: 20px;
                            font-size: 12px;
                            color: #8d8d8d;
                            margin-left: 19px;
                            text-align: left;
                        }
                    
                        .selling-classification a {
                            color: #8d8d8d;
                        }
                        .spacing {
                            margin-right: 8px;
                        }
                    </style>
                    <div class="home-category-list">
                        <div class="title">新品</div>
                        <hr class="line">
                        <div class="rmd-product-detail rmd-tip">
                            <div class="selling-cont">
                    
                                <div class="selling" style="margin-bottom: 14px">
                                    <a href="/home/product/84"><img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="__PUBLIC__/Home/uploads/cdd766c0-33c1-11e7-9fc5-5b84581b9b74.png"></a>
                                </div>
                    
                                <div class="selling-cont-name"><a href="/home/product/84"><span class="spacing" >1.</span>wemall商城7.0开源版</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">免费专区</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/83"><span class="spacing" >2.</span>智联云K4打印机</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">增值服务</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/82"><span class="spacing" >3.</span>商城管理后台 (wemall7)</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/81"><span class="spacing" >4.</span>o2o版微商城 (wemall7)</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/80"><span class="spacing" >5.</span>【 水果版小程序 】</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/79"><span class="spacing" >6.</span>【 普通版小程序 】</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">商城系统</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/78"><span class="spacing" >7.</span>延长售后</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">服务类别</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/77"><span class="spacing" >8.</span>系统二次安装（服务器没有配置）</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">服务类别</a></div>
                            </div>
                            <div class="selling-cont">
                    
                    
                                <div class="selling-cont-name"><a href="/home/product/76"><span class="spacing" >9.</span>系统二次安装（服务器已配置好）</a></div>
                                <div class="selling-classification"><a href="javascript:void(0)">服务类别</a></div>
                            </div>
                        </div>
                    </div>                </div>
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
                            <img src="__PUBLIC__/Home/images/qrcode_for_gh_6f79b0a839f6_344.jpg" alt="微信二维码">
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
    <script src="__PUBLIC__/Home/js/stat.js" language="JavaScript"></script>
</div>
<script type="text/javascript" src="__PUBLIC__/Home/js/bundle.js"></script>

<!--<script src="__PUBLIC__/Home/js/jquery.pjax.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/jquery.lazyload.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/jquery.form.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/bootstrap.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/layer.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/nprogress.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/swiper.jquery.min.js"></script>-->

<script type="text/javascript" src="__PUBLIC__/Home/js/base.min.js"></script>
<script src="__PUBLIC__/Home/js/gt.js"></script>

<!-- daterangepicker -->
<script src="__PUBLIC__/Home/js/moment.min.js"></script>
<script src="__PUBLIC__/Home/js/daterangepicker.js"></script>
<!--inotify-->
<!--<script src="__PUBLIC__/Home/js/inotify.min.js"></script>-->

<link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/css/wangeditor.min.css">
<script type="text/javascript" src="__PUBLIC__/Home/js/wangeditor.min.js"></script>

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