<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/gz16/object02/Public/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" href="/gz16/object02/Public/css/style.css" />
    <!--响应式特性 css-->
    <link href="/gz16/object02/Public/css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- jquery -->
    <script type="text/javascript" src="/gz16/object02/Public/js/jquery-1.8.3.min.js"></script>
    <!-- bootstrap.js -->
    <script type="text/javascript" src="/gz16/object02/Public/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row-fluid" id="header">
        <div class="span8 offset2">
            <h1 class="font">兄弟连考试管理系统</h1>
            <p class="lead">亲们，请认真填写您的相关信息，该信息将作为推荐就业的重要参考！</p>
        </div>
    </div>


    <div class="row-fluid" id="nav">
        <div class="span8 offset2">
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="#">首页</a>
                </li>
                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" href="#">权限管理<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-toggle">用户管理</li>
                        <li><a href="<?php echo U('User/add');?>">添加用户</a></li>
                        <li><a href="<?php echo U('User/index');?>">用户列表</a></li>

                        <li class="dropdown-toggle">角色管理</li>
                        <li><a href="<?php echo U('Role/add');?>">添加角色</a></li>
                        <li><a href="<?php echo U('Role/index');?>">角色列表</a></li>

                        <li class="dropdown-toggle">节点管理</li>
                        <li><a href="<?php echo U('Node/add');?>">添加节点</a></li>
                        <li><a href="<?php echo U('Node/index');?>">节点列表</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" href="#">商品管理<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">添加商品</a></li>
                        <li><a href="#">商品列表</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" href="#">分类管理<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">添加分类</a></li>
                        <li><a href="#">分类列表</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo ($_SESSION['adminuser']['name']); ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">个人中心</a></li>
                        <li><a href="<?php echo U('Login/logout');?>">注销</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="row-fluid" id="main">
        <div class="span8 offset2">
            <form class="form-horizontal " action="/gz16/object02/Admin/User/saveRole" method="post">
                <h3>分配角色</h3>
                <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
                <div class="control-group">
                    当前为<font color="red"size="5px"> <?php echo ($info["name"]); ?></font>分配角色
                </div>

                <div class="control-group">
                    <div class="controls">
                        <?php if(is_array($roleList)): foreach($roleList as $key=>$vo): echo ($vo["name"]); ?> <input type="checkbox" name="rid[]" <?php if(in_array($vo['id'],$rids)): ?>checked<?php endif; ?> value="<?php echo ($vo["id"]); ?>">&nbsp;&nbsp;<?php endforeach; endif; ?>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            &nbsp;
                        </label>
                        <button class="btn btn-large btn-primary form-submit" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;分配角色&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row-fluid" id="footer">
        <div class="span8 offset2">
            <p>©2006 - 2013 LAMP兄弟连</p>
        </div>
    </div>

</body>
</html>