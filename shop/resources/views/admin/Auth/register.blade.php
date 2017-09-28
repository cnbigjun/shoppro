<!DOCTYPE html>
<html lang="en">
    <head>
        <title>注册页面</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/unicorn.login.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>
        <div id="logo">
            <img src="img/logo.png" alt="" />
        </div>
        <div id="loginbox">
            <form id="loginform" class="form-vertical" action="" method="POST" />
            {!! csrf_field() !!}
                <p>用户注册</p>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="用户名" name="name" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" placeholder="密码" name="password" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="邮箱" name="email" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-center"><input type="submit" class="btn btn-inverse" value="注册" /></span>
                    <span class="pull-center"><input type="submit" class="btn btn-inverse" value="返回" /></span>
                </div>
            </form>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/unicorn.login.js"></script>
    </body>
</html>
