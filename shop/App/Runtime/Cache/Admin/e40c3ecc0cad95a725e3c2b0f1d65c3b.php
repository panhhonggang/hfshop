<?php if (!defined('THINK_PATH')) exit();?><html >
	<head>
		<style >
			#inputEmail{
				height: 30px;
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
			
			<form class="form-horizontal" action= <?php echo U('Goods/update');?> method="post" enctype="multipart/form-data">
				<h3>商品更新</h3>
				<input type="hidden" value=<?php echo ($info["id"]); ?> name="id"/>
				<div class="control-group">
					<label class="control-label" for="inputEmail">分类id</label>
				   <div class="controls">
         	        <select name = 'cateName' type="text">
			         <?php if(is_array($ids)): foreach($ids as $key=>$v): if($v['id'] == $info['cateid']): ?><option selected><?php echo ($v["name"]); ?></option>
				        <?php else: ?>
	 			         <option><?php echo ($v["name"]); ?></option><?php endif; endforeach; endif; ?>
			        </select>
				   </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">商品名称</label>
					<div class="controls">
						<input type="text" id="inputEmail" name = "name"  value=<?php echo ($info["name"]); ?>>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail" >价格</label>
					<div class="controls">
						<input type="text" id="inputEmail" name = "price"
						 value=<?php echo ($info["price"]); ?>>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail" >是否下架</label>
					<div class="controls">
						<input type="text" id="inputEmail" name = "display"
						value=<?php echo ($info["display"]); ?>>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputEmail">商品状态</label>
					<div class="controls">
						<input type="text" id="inputEmail"  name = "status"  value=<?php echo ($info["status"]); ?>>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail" >商品简介</label>
					<div class="controls">
						<textarea id="inputEmail"  name = "descripe"><?php echo ($info["descripe"]); ?></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail" >商品图片</label>
					<div class="controls">
						<input type="file" id="inputEmail" name = "picture">
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">
						<label class="checkbox">
							&nbsp;
						</label>
						<button class="btn btn-large btn-primary form-submit" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;提交&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
					</div>
				</div>
			</form>			

		</div>
		</div>

	</body>
</html>