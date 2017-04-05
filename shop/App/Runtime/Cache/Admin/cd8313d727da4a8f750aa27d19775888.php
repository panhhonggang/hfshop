<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/project/Public/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" href="/project/Public/css/style.css" />
    <!--响应式特性 css-->
    <link href="/project/Public/css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- jquery -->
    <script type="text/javascript" src="/project/Public/js/jquery-1.8.3.min.js"></script>
    <!-- bootstrap.js -->
    <script type="text/javascript" src="/project/Public/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row-fluid" id="header">
        <div class="span8 offset2">
            <h1 class="font">蓝鸥(广州)实训平台后台</h1>
            <p class="lead">欢迎各位老师来后蓝鸥实训平台后台！</p>
        </div>
    </div>
    <div class="row-fluid" id="main">
        <div class="span8 offset2">
            <form class="form-horizontal " action="/project/Admin/User/sendmail" method="post">
                <h3>邮件发送</h3>

                <div class="control-group">
                    <label class="control-label">收件人</label>
                    <div class="controls">
                        <input type="email" name="name" value="<?php echo ($userinfo["email"]); ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">主题</label>
                    <div class="controls">
                        <input type="text" name="title">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">内容</label>
                    <div class="controls">
                        <textarea name="content" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            &nbsp;
                        </label>
                        <button class="btn btn-large btn-primary form-submit" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发送&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row-fluid" id="footer">
        <div class="span8 offset2">
            <p>©2012 - 2016 Lanou 蓝鸥(广州)</p>
        </div>
    </div>

</body>
</html>