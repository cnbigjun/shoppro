<div class="site-topbar clearfix">
    
    
    <div class="mzcontainer">
        <div class="topbar-nav">
            <a href="/home/index/index">一个站长软件市场 - 国内首家软件交易平台</a>
        </div>
        <div class="topbar-right">
            <ul class="topbar-info">
<!--                 <li class="topbar-info-member">
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
                </li> -->
                
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
            <a href="/">
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