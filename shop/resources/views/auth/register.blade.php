<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>koahub软件市场</title>
    <!--<link rel="stylesheet " href="../__PUBLIC__/Home/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="../__PUBLIC__/Home/css/nprogress.min.css">-->

    <link rel="stylesheet" href="../__PUBLIC__/Home/css/bundle.css">

    <!--<link href="../__PUBLIC__/Home/css/bootstrap.min_1.css" rel="stylesheet">-->
    <!--<link href="../__PUBLIC__/Home/css/nprogress.min_1.css" rel="stylesheet">-->
    <!--<link href="../__PUBLIC__/Home/css/swiper.min.css" rel="stylesheet">-->

    <link rel="stylesheet" href="../__PUBLIC__/Home/css/iconfont.css">

    <style type="text/css">
        html {
            height: 1%;
        }

        body {
            background: none;
            background-color: white;
            font-family: "Microsoft Yahei", Arial, Helvetica, sans-serif;
            font-size: 14px;
            color: #515151;
            margin: 0;
            padding: 0;
        }

        body input, body textarea {
            font-family: "Microsoft Yahei", Arial, Helvetica, sans-serif;
            background-color: white;
            outline: none;
        }

        div, h1, h2, h3, h4, p, form, label, input, textarea, img, span, dl, ul, li {
            margin: 0;
            padding: 0;
            border: 0;
            list-style: none;
        }

        a {
            color: #515151;
            text-decoration: none;
        }

        a:hover {
            color: #000;
            text-decoration: none;
        }

        a:focus {
            outline: none;
            -moz-outline: none;
        }

        a.linkAGray:link, a.linkAGray:visited {
            color: #7f7f7f;
        }

        a.linkAGray:hover {
            color: #2b2b2b;
        }

        a {
            color: #757575;
            text-decoration: none !important;
        }

        /*footer*/
        .footerWrap {
            position: absolute;
            margin-top: 60px;
            bottom: 0;
            width: 100%;
            height: 100px;
            border-top: solid 1px #E5E6E7;
            color: black;
        }

        .footerInner {
            width: 1000px;
            margin: 24px auto 30px;
        }

        .copyrightInner {
            margin: 0 auto;
            font-size: 12px;
            text-align: center;
            color: #757575;
        }

        .clear {
            content: "";
            clear: both;
            display: block;
            height: 0;
            overflow: hidden
        }

        .ucSimpleHeader {
            height: 30px;
            margin: 0 auto;
            position: relative;
            padding-top: 45px;
            width: 1000px;
        }

        .logo {
            float: left;
            height: 40px;
            width: 120px;
            overflow: hidden;
            display: block;
        }

        .logo i {
            width: 100%;
            height: 100%;
            display: block;
            background: url(../__PUBLIC__/Home/images/logo.png) no-repeat;
            _background-image: none;
            _margin-left: -2px;
            _margin-top: -4px;
        }

        #trigger {
            float: right;
            height: 20px;
            line-height: 20px;
            width: 100px;
            text-align: center;
        }

        .i_icon {
            display: inline-block;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .fullBtnBlue {
            width: 276px;
            display: block;
            height: 46px;
            font-size: 16px;
            text-align: center;
            margin-bottom: 15px;
            outline: none;
            cursor: pointer;
            background-color: #dd4b39;
            color: #fff;
            border-radius: 0px;
        }

        .fullBtnBlue:focus, .fullBtnBlue:hover {
            background-color: #dd4b39 !important;
            color: #fff !important;
            outline: none !important;
        }

        .normalInput {
            width: 276px;
            position: relative;
            padding: 0px 10px;
            height: 46px;
            line-height: 22px;
            font-size: 16px;
            margin-bottom: 26px;
            border: 1px solid #dadada;
            outline: none;
            color: #474747;
            zoom: 1;
            overflow: hidden;
        }

        .normalInput input {
            font-size: 16px;
            width: 100%;
            height: 50px;
            line-height: 50px;
        }

        select.normalInput {
            padding: 0;
        }

        input[type="checkbox"] {
            margin: 3px 0px 30px 5px;
            float: left;
            cursor: pointer;
            width: 18px;
            height: 18px;
            border: solid 1px #dadada;
        }

        .number {
            font-size: 20px;
            margin-bottom: 28px;
            width: 276px;
            text-align: center;
        }

        #mainForm {
            width: 298px;
            margin: 100px auto 0px;
        }

        .getKey {
            width: 84px;
            text-align: center;
            border: none;
            outline: none;
            height: 46px;
            line-height: 46px;
            font-size: 14px;
            position: absolute;
            right: 10px;
            top: 0px;
            text-decoration: none !important;
        }

        .form-line {
            color: #d9d9d9;
            height: 22px;
            display: inline-block;
            border-left: 1px solid #dadada;
            position: absolute;
            right: 100px;
            top: 12px;
        }

        .kapkey {
            width: 200px;
            border: none;
            outline: none;
            height: 50px;
            font-size: 16px;
            line-height: 22px;
        }

        .pwdBtn {
            outline: none;
            position: relative;
            display: inline-block;
            font-size: 18px;
            cursor: pointer;
            overflow: hidden;
            float: right;
            margin-top: -38px;
            margin-right: 5px;
        }
    </style>

    <!--<script type="text/javascript" src="../__PUBLIC__/Home/js/jquery-2.1.4.min.js"></script>-->
    <script type="text/javascript" src="./jquery-3.2.1.js"></script>
    <script src="../__PUBLIC__/Home/js/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../__PUBLIC__/Home/js/html5shiv.min.js"></script>
    <script src="../__PUBLIC__/Home/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="supportBrowser"
     style="display:none;height: 33px;line-height: 33px;color: #999;background: #f6f6f6;text-align: center;border-bottom: 1px solid #dcdcdc;">
    <i class="iconfont" style="margin-right: 6px">&#xe619;</i>暂时不支持此浏览器
</div>
<div class="ucSimpleHeader" id="header">
    <a href="/home/index/index" target="_self" class="logo"><i class="i_icon"></i></a>
    <div id="trigger">
        <a href="/home/public/login" class="linkAGray">登录</a>
        <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
        <a href="/home/public/register" class="linkAGray">注册</a>
    </div>
</div>

<div id="pjax-container">

<form id="mainForm" action="" method="post">

{!! csrf_field() !!}
    <div class="number">
        用户注册
    </div>

    <input type="hidden" name="promotion" value="0">
    <div class="normalInput">
        <input id="em"  type="text" name="email" placeholder="邮箱" autocomplete="off">
        <div class="clear"></div>
    </div>
    <div class="normalInput" style="margin-bottom: 20px;">
        <input id="pCode" type="text" name="phoneCode" class="kapkey" autocomplete="off" placeholder="邮箱验证码" >
        <span class="form-line"></span>
     <!-- <a href="javascript:void(0);" id="sendVerifyCode" class="linkABlue invalidBtn getKey" onclick="dd()">发送验证码</a>-->
       <a href="javascript:void(0);" id="sendVerifyCode" class="linkABlue invalidBtn getKey" onclick="dd()">发送验证码</a>
    </div>
    <div class="normalInput">
        <input type="password" name="password" value=""  placeholder="密码">
        <div class="noselect pwdBtn" onclick="pwdSee(this)">
            <i class="iconfont" style="font-size: 24px;">&#xe603;</i>
        </div>
        <div class="clear"></div>
    </div>

     <div class="normalInput">
        <input type="password" name="password_confirmation" value=""  placeholder="确认密码">
        <div class="noselect pwdBtn" onclick="pwdSee(this)">
            <i class="iconfont" style="font-size: 24px;">&#xe603;</i>
        </div>
        <div class="clear"></div>
    </div>

    <div class="normalInput">
        <input id="uname" type="text" name="name" value="" autocomplete="off" placeholder="用户名">
        <div class="clear"></div>
    </div>

    <div id="popup-captcha"></div>

    <div id="rememberField" class="rememberField">
        <input type="checkbox" checked="checked" onclick="return false;">
        <label class="pointer" tabindex="0">我已阅读并接受</label>
        <a href="/home/artical/7" target="_blank" class="linkABlue">《服务协议条款》</a>
    </div>
    <button id="but" type="submit" class="btn fullBtnBlue" disabled>注册</button>
</form>



<script type="text/javascript">
    $(function () {
        $('button[type="submit"]').prop("disabled", false);

        JPlaceHolder.init();

        captcha('phone');
    });
</script>
</div>

<div class="footerWrap" style="top: 793px;">
    <div class="footerInner">
        <div class="clear"></div>
        <div class="copyrightWrap">
            <div class="copyrightInner">
                <strong>Copyright © 2014-2015 <a href="http://www.koahub.com" target="_self">koahub.com</a>.</strong> All rights
                reserved.
            </div>
        </div>
    </div>
</div>

<div style="display:none">
    <script src="../__PUBLIC__/Home/js/stat.js" language="JavaScript"></script>
</div>

<!--<script type="text/javascript" src="../__PUBLIC__/Home/js/jquery.pjax.min.js"></script>-->
<!--<script type="text/javascript" src="../__PUBLIC__/Home/js/nprogress.min.js"></script>-->
<!--<script type="text/javascript" src="../__PUBLIC__/Home/js/layer.min.js"></script>-->

<script type="text/javascript" src="../__PUBLIC__/Home/js/bundle.js"></script>

<!--<script src="../__PUBLIC__/Home/js/jquery.pjax.min.js"></script>-->
<!--<script src="../__PUBLIC__/Home/js/layer.min.js"></script>-->
<!--<script src="../__PUBLIC__/Home/js/nprogress.min.js"></script>-->
<script src="../__PUBLIC__/Home/js/gt.js"></script>
<script type="text/javascript" src="../__PUBLIC__/Home/js/base.min.js"></script>

</body>
<script type="text/javascript">

  //var pyzm=document.getElementById('pCode').value;

   var adb=Math.floor(Math.random()*10000);
    function dd(){

      var yx=document.getElementsByName('email')[0].value;
       //var pyzm=document.getElementsByName('phoneCode')[0].value;
      //console.log(yx);
      //console.log(pyzm);
      var yzm=adb;
      console.log(yzm);
      //var ppyzm=pyzm;
      //console.log(ppyzm);
      //console.log(adb);
      var xhr=new XMLHttpRequest();

        //var url='youjian?email='+yx;
        var url='sendpcode?email='+yx+'&pcode='+yzm;
        xhr.onreadystatechange=function(){

            if(this.readyState==4){

                var j=this.responseText;

               // console.log(typeof(zhuan));
                 //console.log(typeof(j));
                 //var zhuan = JSON.parse(j);
                 //console.log(typeof(zhuan));
                 //fn=zhuan+1;
                 console.log(j);
                 //console.log(fn);
                 //setcookie('rnd',j);
                 alert('验证码已发送，注意接收！');
                 //alert(rnd);
                //return j;
            }

        }


        xhr.open('get',url,true);
        xhr.send(null);

     }



    $('#mainForm').submit(function() {

        //var yzm=$('#pCode').val();
        //var yzm=8888;
        //alert(j);

        //var ppp=$_COOKIE['rnd'];
        //alert(rnd);
        //session_start();
        //alert('area');
        // session_start();
         //var abc=$_SESSION['area'];
        //console.log(abc);

    var patt;
        patt =  /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
        if(!patt.test( $('#em').val() )) {

        alert(' 邮箱格式不正确！');
        return false;
        }



    var patt;
    patt=/^[a-zA-Z]{4,16}$/;
     if(!patt.test( $('#uname').val() )) {

        alert('用户名不正确！要求全是英文数字，4到16位');
        return false;
        }


    var pyzm=document.getElementsByName('phoneCode')[0].value;
    //alert(pyzm);

       var ddd=adb;
       //console.log(ddd);

       var ccc=pyzm;
       //console.log(ccc);

       if(ddd!=ccc){

          alert('验证码错误！');
          return false;
        }




    });



</script>
</html>



