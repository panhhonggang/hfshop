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
            <h1 class="font">蓝鸥(广州)实训平台后台</h1>
            <p class="lead">欢迎各位老师来后蓝鸥实训平台后台！</p>
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
                        <li><a href="<?php echo U('User/add');?>">添加老师</a></li>
                        <li><a href="<?php echo U('User/index');?>">老师列表</a></li>

                        <li class="dropdown-toggle">角色管理</li>
                        <li><a href="<?php echo U('Role/add');?>">添加角色</a></li>
                        <li><a href="<?php echo U('Role/index');?>">角色列表</a></li>

                        <li class="dropdown-toggle">节点管理</li>
                        <li><a href="<?php echo U('Node/add');?>">添加节点</a></li>
                        <li><a href="<?php echo U('Node/index');?>">节点列表</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" href="#">商品学科管理<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('Subject/add');?>">添加学科</a></li>
                        <li><a href="<?php echo U('Subject/index');?>">学科列表</a></li>
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
            <form class="form-search fr" action="/shop/Admin/Role/index" method="get">
                <input type="text" name="name" class="input-medium" placeholder="Name">
                <select name="sex">
                    <option value="">--请选择--</option>
                    <option value="0">女</option>
                    <option value="1">男</option>
                    <option value="2">人妖</option>
                </select>
                <button type="submit" class="btn">搜索</button>
            </form>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>角色名</th>
                    <th>状态</th>
                    <th>描述</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                    <?php if(!empty($rolelist)): if(is_array($rolelist)): foreach($rolelist as $key=>$vo): ?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["name"]); ?></td>
                        <td><?php echo ($vo["status"]); ?></td>
                        <td><?php echo ($vo["ramark"]); ?></td>
                        <td>
                            <a href="/shop/Admin/Role/nodeList/id/<?php echo ($vo["id"]); ?>">分配节点</a>
                            <a href="/shop/Admin/Role/del/id/<?php echo ($vo["id"]); ?>">删除</a>
                            <a href="/shop/Admin/Role/edit/id/<?php echo ($vo["id"]); ?>">编辑</a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="5">查无数据</td>
                    </tr><?php endif; ?>
                </tbody>
            </table>
            <div class="pagination">
                <ul>
                    <?php echo ($button); ?>
                </ul>
            </div>

        </div>
    </div>

    <div class="row-fluid" id="footer">
        <div class="span8 offset2">
            <p>©2012 - 2016 Lanou 蓝鸥(广州)</p>
        </div>
    </div>

</body>
</html>