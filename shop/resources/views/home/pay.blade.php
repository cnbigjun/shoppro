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
<div class="site-topbar clearfix">
    
    
    <div class="mzcontainer">
        <div class="topbar-nav">
            <a href="/home/index/index">KoaHub软件市场 - 国内首家软件交易平台</a>
        </div>
        <div class="topbar-right">
            <ul class="topbar-info">
                <li class="topbar-info-member">
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
                <img src="/__PUBLIC__/Home/images/logo.svg" rel="nofollow" alt="koahub logo" title="koahub logo">
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
    <div class="page-nav">
    <div class="mzcontainer page-title">确认订单</div>
</div>
<div class="home-full-box">
    <div class="mzcontainer">
        <div class="home-panel home-rmd home-floor">
            <div class="home-rmd-main">
                <div class="home-rmd-cotent left" style="min-height: inherit;">
                    <style type="text/css">
                        .buy-success {
                            padding: 80px 45px;
                        }

                        .buy-success i {
                            font-size: 80px;
                            color: #dd4b39;
                        }

                        .success .tips {
                            margin-top: 20px;
                            line-height: 26px;
                        }

                        .success .tips .tips-title {
                            float: left;
                        }

                        .success .tips .tips-contents {
                            float: left;
                            margin-left: 12px;
                        }

                        .success .payment {
                            font-size: 16px;
                            margin-top: 12px;
                        }

                        .success .payment-list li {
                            border: 1px solid #e0e0e0;
                            float: left;
                            margin: 12px 12px 12px 0;
                        }

                        .coupon .select {
                            height: 107px;
                            border: 2px solid #e43a3d !important;
                            background-image: url(/__PUBLIC__/Home/images/coupon-selected.png);
                            background-repeat: no-repeat;
                            background-position: bottom right;
                        }

                        .coupon .title {
                            text-align: center;
                            color: #fff;
                            font-size: 16px;
                            padding-top: 10px;
                        }

                        .coupon .time {
                            text-align: center;
                            color: #fff;
                            font-size: 12px;
                            padding-top: 6px;
                        }
                    </style>
                    <div class="success">
                        <div class="row buy-success">
                            <div class="col-xs-3 text-center">
                                <i class="iconfont">&#xe605;</i>
                            </div>

                            <div class="col-xs-9" style="margin-top: 12px;">
                                <h2>订单提交成功，应付金额 <span style="color: #e02b41" id="total">{{$v_amount}}</span> 元</h2>
                                <div class="tips">
                                    <div style="color: #e02b41">
                                        <div class="tips-title">温馨提示:</div>
                                        <div class="tips-contents">请在47小时59分内完成支付, 超时后将取消订单</div>
                                    </div>
                                    <br>
                                    <div class="tips-title">购买商品:</div>
                                    <div class="tips-contents">
                                        多用户商城<br/>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xs-12 payment">
                                选择支付方式
                            </div>

                            <ul class="col-xs-12 payment-list">
                                <li><a href="/home/pay/alipay/562" target="_self"><img src="/__PUBLIC__/Home/images/alipay.jpg"
                                                                                                style="margin-left: 0;"></a>
                                </li>

                                <form method=post action="http://127.0.0.1/paytest/index.php">
                                    <input type=hidden name=v_mid value="{{$v_mid}}">
                                    <input type=hidden name=v_oid value="{{$v_oid}}">
                                    <input type=hidden name=v_amount value="{{$v_amount}}">
                                    <input type=hidden name=v_moneytype value="{{$v_moneytype}}">
                                    <input type=hidden name=v_url value="{{$v_url}}">
                                    <input type=hidden name=v_md5info value="{{$v_md5info}}">
                                    <input class="btn btn-danger" type="submit" value="立即支付" style="margin-top: 30px;margin-left: 400px;">
                                </form>


                            </ul>
                        </div>
                    </div>


                    <script type="text/javascript">
                        var total = '';
                        var orderId = '562';
                        function selectCoupon(id, obj) {
                            if ($(obj).parent().hasClass('select')) {
                                $.ajax({
                                    type: "get",
                                    url: '/home/order/update/' + orderId + '/coupon/del',
                                    data: {
                                        id: id
                                    },
                                    headers: {'X-PJAX': 'true'},
                                    success: function (res) {
                                        if (res.msg == 'success') {
                                            $(obj).parent().removeClass('select');
                                            $('#total').text(res.data.total);
                                        }
                                    }
                                });
                            } else {
                                $(obj).parent().parent().find('li').removeClass('select');

                                $.ajax({
                                    type: "get",
                                    url: '/home/order/update/' + orderId + '/coupon/' + id + '/add',
                                    data: {
                                        id: id
                                    },
                                    headers: {'X-PJAX': 'true'},
                                    success: function (res) {
                                        if (res.msg == 'success') {
                                            $(obj).parent().addClass('select');
                                            $('#total').text(res.data.total);
                                        }
                                    }
                                });
                            }
                        }

                        $(function () {
                            $('#cartCount').html('2');
                        })
                    </script>                </div>

                <div class="rmd-box rmd-box-nav" style="float: right;width: 376px">
                    <style type="text/css">
                        .recommend {
                            padding: 30px;
                            background-color: #fff;
                            border: 0px;
                        }
                    
                        .recommend .title {
                            font-size: 18px;
                            color: #333;
                        }
                    </style>
                    <div class="recommend">
                        <div class="title">为您推荐</div>
                        <hr/>
                        <div style="margin-bottom: 12px"><a href="http://www.koahub.com/home/product/1" target="_blank"><img src="/__PUBLIC__/Home/images/1f04ea60-91db-11e6-bc94-57bb4c292ef7.jpg" style="width: 100%"></a></div>
                        <div style="margin-bottom: 12px"><a href="http://www.koahub.com/home/product/42" target="_blank"><img src="/__PUBLIC__/Home/images/cc5b8e60-1e87-11e7-b91b-953390e2cc9a.jpg" style="width: 100%"></a></div>
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
{{--<script type="text/javascript" src="/__PUBLIC__/Home/js/bundle.js"></script>--}}

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