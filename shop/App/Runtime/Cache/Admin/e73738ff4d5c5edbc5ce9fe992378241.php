<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/2lanou/project/Public/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" href="/2lanou/project/Public/css/style.css" />
    <!--响应式特性 css-->
    <link href="/2lanou/project/Public/css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- jquery -->
    <script type="text/javascript" src="/2lanou/project/Public/js/jquery-1.8.3.min.js"></script>
    <!-- bootstrap.js -->
    <script type="text/javascript" src="/2lanou/project/Public/js/bootstrap.min.js"></script>
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
            <form class="form-horizontal " action="/2lanou/project/Admin/User/add" method="post">
                <h3>添加实训老师</h3>

                <div class="control-group">
                    <label class="control-label">姓名</label>
                    <div class="controls">
                        <input type="text" name="name" placeholder="name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">密码</label>
                    <div class="controls">
                        <input type="password" name="password" placeholder="pwd">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">确认密码</label>
                    <div class="controls">
                        <input type="password" name="repassword" placeholder="pwd">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">电话</label>
                    <div class="controls">
                        <input type="text" name="tel" placeholder="tel">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">邮箱</label>
                    <div class="controls">
                        <input type="text" name="email" placeholder="email">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">性别</label>
                    <div class="controls">
                        女:<input type="radio" name="sex" value="0" >
                        男:<input type="radio" name="sex" value="1" >
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">学科老师</label>
                    <div class="controls">
                        <select name="position">
                            <option value="0">PHP讲师</option>
                            <option value="1">H5讲师</option>
                            <option value="2">U3D讲师</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            &nbsp;
                        </label>
                        <button class="btn btn-large btn-primary form-submit" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;确认&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
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