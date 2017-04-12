<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/shop/Public/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" href="/shop/Public/css/style.css" />
    <!--响应式特性 css-->
    <link href="/shop/Public/css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- jquery -->
    <script type="text/javascript" src="/shop/Public/js/jquery-1.8.3.min.js"></script>
    <!-- bootstrap.js -->
    <script type="text/javascript" src="/shop/Public/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row-fluid" id="header">
        <div class="span8 offset2">
            <h1 class="font">蓝鸥(广州)商城平台后台</h1>
            <p class="lead">欢迎各位老师来后蓝鸥商城平台后台！</p>
        </div>
    </div>

    <div class="row-fluid" id="login">
        <div class="span8 offset2">
            <form class="form-horizontal" action="" method="post">
                <h3>登陆</h3>
                <div class="control-group">
                    <label class="control-label" for="inputName">用户名</label>
                    <div class="controls">
                        <input type="text" name="name" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">密码</label>
                    <div class="controls">
                        <input type="password" name="password" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">验证码</label>
                    <div class="controls">
                        <input type="text" name="code" id="inputPassword" placeholder="Password" style="width:60px"><img src="/shop/Admin/Login/yzm" onclick="this.src='/shop/Admin/Login/yzm?id=' + Math.random()">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            &nbsp;
                        </label>
                        <button type="submit" class="btn btn-large btn-primary form-submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;登陆&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row-fluid" id="footer">
        <div class="span8 offset2">
            <p>©2012 - 2017 Lanou 蓝鸥(广州)</p>
        </div>
    </div>

</body>
</html>