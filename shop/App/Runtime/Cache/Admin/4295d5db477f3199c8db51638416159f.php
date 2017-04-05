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
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" href="#">实训学科管理<b class="caret"></b></a>
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
            <form class="form-search fr" action="/2lanou/project/Admin/User/index" method="get">
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
                    <th>姓名</th>
                    <th>性别</th>
                    <th>电话</th>
                    <th>讲师类型</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                    <?php if(!empty($list)): if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["name"]); ?></td>
                        <td><?php echo ($vo["sex"]); ?></td>
                        <td><?php echo ($vo["tel"]); ?></td>
                        <td><?php echo ($vo["position"]); ?></td>
                        <td>
                            <a href="/2lanou/project/Admin/User/roleList/id/<?php echo ($vo["id"]); ?>">分配角色</a>
                            <a href="/2lanou/project/Admin/User/sendMail/id/<?php echo ($vo["id"]); ?>">发送邮件</a>
                            <a href="/2lanou/project/Admin/User/edit/id/<?php echo ($vo["id"]); ?>">编辑</a>
                            <a href="/2lanou/project/Admin/User/del/id/<?php echo ($vo["id"]); ?>">删除</a>
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
            <p>©2012 - 2016 Lanou 蓝鸥(广州)</p>
        </div>
    </div>

</body>
</html>