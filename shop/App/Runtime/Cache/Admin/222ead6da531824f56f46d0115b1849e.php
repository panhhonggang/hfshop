<?php if (!defined('THINK_PATH')) exit();?><html >
	<head>
		<style >
			
			#search{
				height: 30px;
			}
			td{
				width: 10%;
				height: 50px;

			}
	
		</style>		
		
	</head>
	<body>
		<!DOCTYPE HTML>
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
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" href="#">分类管理<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">添加分类</a></li>
                        <li><a href="#">分类列表</a></li>
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

		    <form class="form-search fr" action=<?php echo U('Category/find');?> method="post">
			    			请输入分类名：
		    	<input type="text" id = 'search' name="name" value=<?php echo ($info[0]["name"]); ?> class="input-medium" placeholder="Name">
		    	<button type="submit" class="btn">搜索</button>
		    </form>
		    

			<table class="table table-striped">
				<thead>
			      <tr>
				      <td>id</td>
				      <td>pid</td>
				      <td>分类名</td>
		  		      <td>分类路径</td>
				      <td>添加时间</td>
				      <td>操作</td>
			      </tr>
				</thead>
				<tbody>
         <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>
            <?php if(is_array($v)): foreach($v as $k=>$vv): ?><td>
                <?php if($k == addtime): echo (date("Y-m-d H:i:s",$vv)); ?>
	            <?php else: echo ($vv); endif; ?>
            </td><?php endforeach; endif; ?>
            <td>
	            <a href="<?php echo U('Category/delete',array('id'=>$v['id']));?>">删除</a>
<!-- 	            <a href="<?php echo U('Category/update','id =' .$v['id']);?>">更新</a> -->
	            <a href="<?php echo U('Category/update',array('id'=>$v['id']));?>">更新</a>

            </td>
          </tr><?php endforeach; endif; ?>
					
				</tbody>
			</table>
			<div class="pagination">
				<ul>
					<li>
						<span>25 条记录 1/2 页</span>
					</li>
					<li>
						<a href="/emp/index.php/admin/Employ/index/p/2.html">下一页</a>
					</li>
					<li class="active">
						<span>1</span>
					</li>
					<li>
						<a href="/emp/index.php/admin/Employ/index/p/2.html">2</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	</body>
</html>