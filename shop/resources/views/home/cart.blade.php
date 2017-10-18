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

@include('home/header')
<script type="text/javascript">
    $(function(){
        $('.scroll_top').click(function(){
            $("html,body").animate({scrollTop: 0}, 200);
        });
    });
</script>
<div id="pjax-container">
    <div class="page-nav">
    <div class="mzcontainer page-title">购物车</div>
</div>
<div class="home-full-box">
    <div class="mzcontainer">
        <div class="home-panel home-rmd home-floor">
            <div class="home-rmd-main">
                <div class="home-rmd-cotent left" style="min-height: 468px;">
                    <style type="text/css">
                        .box-sign {
                            height: 40px;
                            width: 40px;
                            border-radius: 50%;
                            color: #fff;
                            font-size: 12px;
                            line-height: 36px;
                            text-align: center;
                        }
                    
                        .cart_container {
                            text-align: center;
                            padding: 150px 0;
                        }
                    
                        .cart_icon {
                            font-size: 80px;
                            color: #dd4b39;
                            position: absolute;
                    
                        }
                    
                        .cart_container .tips {
                            color: #999999;
                            font-size: 24px;
                            display: inline-block;
                            padding-left: 120px;
                            line-height: 120px;
                            -webkit-font-smoothing: antialiased;
                        }
                    </style>

                    @foreach($items as $item)
                    <div class="rmd-box rmd-box-product" style="margin-bottom: 60px;">
                        <a href="/home/product/72">
                            <div class="rmd-product-detail">
                                <img src="/upload/{{explode(',',$item->good->goods_img)[0]}}"
                                     width="180" height="200" style="display: inline;">
                                <div class="rmd-product-desc">
                                    <h4 class="rmd-product-title">{{$item->good->goods_name}}</h4>
                                    <h6 class="rmd-product-subtitle"></h6>
                                    <!-- TODO 替换为内容-->
                                    <p class="rmd-product-price">
                                        ¥
                                        <span>{{$item->good->plus_price}}</span>
                    
                                    </p>
                                </div>
                                <div style="text-align: left;color: #999;font: 12px/12px SimSun;margin: 10px 4px 0 0;float: left">
                                    koahub商城
                                </div>
                                <div style="text-align: right;color: #999;font: 12px/12px SimSun;margin: 10px 4px 0 0;float: right">
                                    
                                </div>
                            </div>
                    
                        </a>
                    
                        <div style="margin-top: 40px;text-align: center;margin-bottom: 6px">
                            <a href="{{url('removeitem',$item->id)}}" pjax-push-false>
                                <div class="box-sign" style="background-color: #dd4b39;margin-left: 100px"><i class="iconfont">&#xe601;</i>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach





                    
                    <script type="text/javascript">
                        $(function () {
                            $('#cartCount').html('2');
                        })
                    </script>                </div>

                <div class="rmd-box rmd-box-nav" style="float: right;width: 376px">
                    <style type="text/css">
                        .shortcut {
                            padding: 30px;
                            background-color: #fff;
                            border: 0px;
                        }
                    
                        .mod-total {
                            margin-top: 48px;
                            height: 36px;
                            font-size: 14px;
                            color: #333;
                            text-align: center;
                        }
                    
                        .shortcut .mod-total .vm-price {
                            font-size: 24px;
                            color: #e02b41;
                            font-weight: 700;
                        }
                    
                        .btn-distance {
                            height: 55px;
                            border-radius: 3px;
                            line-height: 35px;
                        }
                    
                        .confirm {
                            margin-top: 30px;
                        }
                    
                        .problem {
                            margin-top: 30px;
                        }
                    </style>
                    <div class="shortcut">
                        <div class="mod-total">
                            共<em class="vm-price">{{$number}}</em>件商品
                            总计:<em class="vm-price">￥{{$total}}</em>
                        </div>
                    
                        <div class="confirm">
                            <a href="{{url('/order')}}" class="btn btn-primary btn-lg btn-block btn-distance" pjax-push-false>提交订单</a>
                            <a href="/home/index/index" class="btn btn-default btn-lg btn-block btn-distance btn-col">继续购买</a>
                        </div>
                    
                        <hr/>
                    
                        <div class="problem">
                            <h3 class="text-center">有问题?</h3>
                            <h5 class="text-center" style="margin-top: 12px;color: #757575;line-height: 20px;">如您在购买中遇到问题,请咨询客服：<span class="service">3260312512</span>
                            </h5>
                        </div>
                    </div>                </div>
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
{{--<script type="text/javascript" src="__PUBLIC__/Home/js/bundle.js"></script>--}}

<!--<script src="__PUBLIC__/Home/js/jquery.pjax.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/jquery.lazyload.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/jquery.form.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/bootstrap.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/layer.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/nprogress.min.js"></script>-->
<!--<script src="__PUBLIC__/Home/js/swiper.jquery.min.js"></script>-->

{{--<script type="text/javascript" src="__PUBLIC__/Home/js/base.min.js"></script>--}}
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