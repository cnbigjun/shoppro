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
            
                        @foreach($categorys as $c)
                        <li class="home-category-nav-item">
                            <a class="category-nav-link" href="{{url('catlist',$c->cat_id)}}">
                                <span>{{$c->cat_name}}</span> <i class="iconfont" style="color:#dd4b39">&#xe622;</i>
                            </a>
                        </li>
                        @endforeach
<!--                         <li class="home-category-nav-item">
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
                        </li> -->
            
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
                            <div class="area-name-left" style="height: 60px">畅销专区
                                <span style="color: #666;font-size: 16px;">- 更多人的选择你值得拥有!</span>
                            </div>
                            <div class="area-name-right"><a href="/home/product/shop/46">更多<i class="iconfont">&#xe624;</i></a></div>
                        </div>
                        
                        @foreach($goods as $g)
                        @if($g->is_hot == 1)
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods',$g->goods_id)}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="/upload/{{explode(',',$g->goods_img)[0]}}"
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
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            koahub商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        @endif
                        @endforeach

                    </div>
                    
                    
                    <div class="home-rmd-cotent">
                        <div class="area-name">
                            <div class="area-name-left" style="height: 60px">精选专区
                                <span style="color: #666;font-size: 16px;">- 高性能商城，简洁大气的企业模板，更精转化的增值服务</span>
                            </div>
                            <div class="area-name-right"><a href="{{url('goods')}}">更多<i class="iconfont">&#xe624;</i></a></div>
                        </div>
                    
                        @foreach($goods as $g)
                        <div class="rmd-box rmd-box-product">
                            <a href="{{url('goods',$g->goods_id)}}">
                        
                                <div class="rmd-product-detail" style="padding: 0">
                                    <img class="lazy" src="__PUBLIC__/Home/images/blank.gif" data-original="/upload/{{explode(',',$g->goods_img)[0]}}"
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
                                        <a href="{{url('goods')}}" style="color: #999;">
                                            wemall商城
                                        </a>
                                    </div>
                        
                                </div>
                        
                            </a>
                        </div>
                        @endforeach




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

 @include('home/footer')

</body>
</html>