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


    <div class="row-fluid" id="nav">
        <div class="span8 offset2">
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="#">首页</a>
                </li>
                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" href="#">用户管理管理<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-toggle">后台管理</li>
                        <li><a href="<?php echo U('User/add');?>">添加管理员</a></li>
                        <li><a href="<?php echo U('User/index');?>">管理员列表</a></li>

                        <li class="dropdown-toggle">前台管理</li>
                        <li><a href="<?php echo U('Huser/add');?>">添加用户</a></li>
                        <li><a href="<?php echo U('Huser/index');?>">用户列表</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" href="#">分类管理<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('Category/add');?>">添加学科</a></li>
                        <li><a href="<?php echo U('Category/showlist');?>">学科列表</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" href="#">商品管理<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('Goods/add');?>">添加商品</a></li>
                        <li><a href="<?php echo U('Goods/showlist');?>">商品列表</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo ($_SESSION['adminuser']['admin_name']); ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('User/editpwd');?>?id=<?php echo ($_SESSION['adminuser']['id']); ?>">修改密码</a></li>
                        <li><a href="<?php echo U('Login/logout');?>">注销</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="row-fluid" id="main">
        <div class="span8 offset2">
            <form class="form-search fr" action="/shop/Admin/Huser/index" method="get">
                <input type="text" name="home_name" class="input-medium" placeholder="Name">
                <!-- <select name="sex">
                    <option value="">请选择</option>
                    <option value="0">女</option>
                    <option value="1">男</option>
                    <option value="2">人妖</option>
                </select> -->
                <button type="submit" class="btn">搜索</button>
            </form>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>账户名</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                    <?php if(!empty($list)): if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["home_name"]); ?></td>
                        <td><?php echo ($vo["addtime"]); ?></td>
                        <td>
                            <!-- <a href="/shop/Admin/Huser/editpwd/id/<?php echo ($vo["id"]); ?>">修改密码</a> -->
                            <a href="/shop/Admin/Huser/del/id/<?php echo ($vo["id"]); ?>">删除</a>
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
            <script>
                $('.pagination ul a').unwrap('div').wrap('<li></li>');
                $('.pagination ul span').wrap('<li class="active"></li>')
            </script>
        </div>
    </div>

    <div class="row-fluid" id="footer">
        <div class="span8 offset2">
            <p>©2012 - 2017 Lanou 蓝鸥(广州)</p>
        </div>
    </div>

</body>
</html>