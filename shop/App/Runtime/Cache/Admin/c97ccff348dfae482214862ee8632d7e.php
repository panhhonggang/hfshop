<?php if (!defined('THINK_PATH')) exit();?><html >
	<head>
		<style >
			
			td{
				width: 10%;
				height: 50px;

			}
			
			#search{
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

		    <form class="form-search fr" action=<?php echo U('Goods/find');?> method="post">
			    			请输入商品名：
		    	<input type="text" id = 'search' name="name" value="name" class="input-medium" placeholder="Name">
		    	<button type="submit" class="btn">搜索</button>
		    </form>
		    

			<table class="table table-striped">
				<thead>
				<tr>
					<th>编号</th>
					<th>分类id</th>
					<th>商品名</th>
					<th>商品图片</th>
					<th>商品价格</th>
					<th>商品简介</th>
					<th>上架与否</th>
	  		        <th>销售状态</th>
			        <th>添加时间</th>
			        <th>操作</th>

				</tr>
				</thead>
				<tbody>
 <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>
            <?php if(is_array($v)): foreach($v as $k=>$vv): ?><td>
                <?php if($k == addtime): echo (date("Y-m-d H:i:s",$vv)); ?>
	            <?php elseif($k == picture): ?>
	            <img src="<?php echo (SITE_URL); echo ($vv); ?>">
	            <?php else: ?>
	            <?php echo ($vv); endif; ?>
            </td><?php endforeach; endif; ?>
            <td>
	            <a href="<?php echo U('Goods/remove',array('id'=>$v['id']));?>">删除</a>
	            <a href="<?php echo U('Goods/update',array('id'=>$v['id']));?>">更新</a>

            </td>
          </tr><?php endforeach; endif; ?>
					
				</tbody>
			</table>
			
		</div>
	</div>
	
		    <div class="row-fluid" id="footer">
        <div class="span8 offset2">
            <p>©2012 - 2017 Lanou 蓝鸥(广州)</p>
        </div>
    </div>

</body>
</html>
	</body>
</html>