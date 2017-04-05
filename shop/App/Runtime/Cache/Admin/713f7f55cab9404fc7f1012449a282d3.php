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
            <form class="form-horizontal " action="/project/Admin/User/edit" method="post">
                <h3>编辑老师信息</h3>
                <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
                <div class="control-group">
                    <label class="control-label">姓名</label>
                    <div class="controls">
                        <input type="text" name="name" disabled value="<?php echo ($info["name"]); ?>" placeholder="name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">电话</label>
                    <div class="controls">
                        <input type="text" name="tel" value="<?php echo ($info["tel"]); ?>" placeholder="tel">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">邮箱</label>
                    <div class="controls">
                        <input type="text" name="email" value="<?php echo ($info["email"]); ?>" placeholder="email">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            &nbsp;
                        </label>
                        <button class="btn btn-large btn-primary form-submit" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;修改&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
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