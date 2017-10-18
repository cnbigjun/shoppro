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
    
    {{--<script src="/__PUBLIC__/Home/js/jquery-2.1.4.min.js"></script>--}}
    
    {{--<script src="/__PUBLIC__/Home/js/jquery.min.js"></script>--}}
    
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
    <div class="home-full-box">
    <div class="mzcontainer">
        <div class="home-panel home-rmd home-floor">
            <div class="home-rmd-main">
                <div class="rmd-box rmd-box-nav">
                    <div class="home-category-list">
                        <ul class="home-category-nav">
                            <div class="category-nav-link" style="padding-left: 36px;height: 57px;
                        line-height: 57px;color: #8d8d8d;">
                                <i class="iconfont" style="margin-right: 10px;">&#xe612;</i><span>用户中心</span>
                            </div>
                    
                            <ul class="home-category-nav">
                    
                                <li class="home-category-nav-item">
                                    <a class="category-nav-link" href="/home/user/index">
                                        <span>我的账户</span>
                                    </a>
                                </li>
                    
                                <li class="home-category-nav-item">
                                    <a class="category-nav-link" href="/home/order/index">
                                        <span>我的订单</span>
                                    </a>
                                </li>
                    
                                <li class="home-category-nav-item">
                                    <a class="category-nav-link" href="/home/coupon/index">
                                        <span>我的卡券</span>
                                    </a>
                                </li>
                    
                                <li class="home-category-nav-item">
                                    <a class="category-nav-link" href="/home/user/product">
                                        <span>我的产品</span>
                                    </a>
                                </li>
                                
                                <li class="home-category-nav-item">
                                    <a class="category-nav-link" href="/home/domain/index">
                                        <span>我的授权</span>
                                    </a>
                                </li>
                    
                                <li class="home-category-nav-item">
                                    <a class="category-nav-link" href="/home/feedback/index">
                                        <span>我的售后</span>
                                    </a>
                                </li>
                                
                                <li class="home-category-nav-item">
                                    <a class="category-nav-link" href="/home/appeal/index">
                                        <span>我的申诉</span>
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
                    </script>                </div>
                <div class="home-rmd-cotent">
                    <div class="col-xs-9 main">
                        <div class="main-right">
                            <div class="right-content">
                                <h3 class="account">我的订单</h3>
                                <hr class="h-act">

                                <style type="text/css">
                                    .layout {
                                        border: 1px solid #ededed;
                                        margin-bottom: 30px;
                                        margin-top: -1px;
                                    }
                                
                                    .right-tab {
                                        height: 55px;
                                        font-size: 16px;
                                        border-bottom: 1px solid #e7e7e7;
                                    }
                                
                                    .right-tab ul {
                                        line-height: 40px;
                                    }
                                
                                    .right-tab a {
                                        color: #333333;
                                    }
                                
                                    .right-tab ul li {
                                        line-height: 20px;
                                        padding-right: 20px;
                                        border-right: 1px solid #ededed;
                                        margin-right: 10px;
                                    }
                                
                                    .right-tab ul li:last-child{
                                        border-right: 0;
                                    }
                                
                                    .amount {
                                        float: right;
                                        margin-right: 30px;
                                        color: #757575;
                                    }
                                
                                    .orderbox {
                                        min-height:230px;
                                        padding: 0 30px;
                                    }
                                
                                    .orderbox div {
                                        min-height:230px;
                                        float: left;
                                    }
                                
                                    .orderbox ul {
                                        margin-top: 24px;
                                    }
                                
                                    .orderbox li {
                                        margin-bottom: 8px;
                                        margin-top: 80px
                                    }
                                
                                    .list-inline {
                                        margin-top: 10px;
                                        padding-left: 0;
                                        font-size: 16px;
                                        list-style: none;
                                    }
                                
                                    .state {
                                        font-size: 18px;
                                        color: #b2b2b2;
                                        padding-left: 30px;
                                        padding-top: 20px;
                                    }
                                
                                    .font-s {
                                        font-size: 16px;
                                        color: #333333;
                                    }
                                
                                    .payment {
                                        background-color: #dd4b39;
                                        color: #ffffff !important;
                                        width: 120px;
                                        height: 30px;
                                        line-height: 16px;
                                        margin-right: 30px;
                                        border-radius: 3px;
                                        font-size: 14px;
                                        float: right;
                                        margin-top: 90px;
                                    }
                                
                                    .status-info {
                                        border-bottom: 1px solid #fafafa;
                                        margin-bottom: 30px;
                                    }
                                
                                    .stat {
                                        font-size: 14px;
                                        color: #757575;
                                        padding-left: 30px;
                                        margin-bottom: 30px;
                                    }
                                
                                    .amt {
                                        font-size: 24px;
                                    }
                                </style>
                                
                                <div class="right-tab">
                                    <ul class="list-inline">
                                        <li style="color:#dd4b39;">产品订单</li>
                                    </ul>
                                </div>
                                
                                <div class="layout">
                                    <ul>
                                        <div class="status-info">
                                            <h5 class="state">
                                                <span style="color:#e02b41">未支付</span>
                                            </h5>
                                            <form action="{{url('pay',$cart_id)}}"  method="post">
                                                <input type="hidden" name="money" value="{{$total}}">
                                            <h3 class="amount">订单金额：<span class="amt">{{$total}}</span>元&nbsp&nbsp&nbsp<span class="amt"><input type="submit"  value="提交订单" class="btn btn-danger" ></span></h3>
                                            </form>
                                            <ul class="list-inline stat">
                                                <li>2017-09-01 10:46:11</li>
                                                <li>订单号 : 1709011046105</li>
                                                <li>店铺 : koahub商城</li>
                                                <li>卡券 : 未使用</li>
                                            </ul>
                                        </div>




                                        @foreach($items as $item)
                                        <li class="orderbox">
                                            <div style="width:165px;"><img src="/upload/{{explode(',',$item->good->goods_img)[0]}}" width="105px"></div>
                                            <div>
                                                <ul>
                                                    <li style="height: 60px;">
                                                        <span class="font-s">{{$item->good->goods_name}}</span><br/>
                                                        <span class="font-s">{{$item->good->plus_price}}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                                
                                <div class="pull-right"><div><ul class="pagination no-margin" style="float: right"><li><a>共 1 条记录  1/1 页</a></li></ul></div></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
{{--<script src="/__PUBLIC__/Home/js/swiper.jquery.min.js"></script>--}}

<script type="text/javascript" src="/__PUBLIC__/Home/js/base.min.js"></script>
<script src="/__PUBLIC__/Home/js/gt.js"></script>

<!-- daterangepicker -->
<script src="/__PUBLIC__/Home/js/moment.min.js"></script>
<script src="/__PUBLIC__/Home/js/daterangepicker.js"></script>
<!--inotify-->
<!--<script src="/__PUBLIC__/Home/js/inotify.min.js"></script>-->

<link rel="stylesheet" type="text/css" href="/__PUBLIC__/Home/css/wangeditor.min.css">
{{--<script type="text/javascript" src="/__PUBLIC__/Home/js/wangeditor.min.js"></script>--}}

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