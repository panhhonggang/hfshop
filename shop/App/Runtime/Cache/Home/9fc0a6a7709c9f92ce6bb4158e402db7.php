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
	<link href="./css/bootstrap-responsive.min.css" rel="stylesheet">
	<!-- jquery -->
	<script type="text/javascript" src="=/shop/Public/js/jquery-1.8.3.min.js"></script>
	<!-- bootstrap.js -->
	<script type="text/javascript" src="/shop/Public/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row-fluid" id="header">	
		<div class="span8 offset2">				
			<h1 class="font">蓝鸥实训平台-实训课程选择</h1>
			<p class="lead">亲们，请认真填写您的相关信息，该信息将作为实训课程的重要依据！</p>				
		</div>			
    </div>
	
	
	<div class="row-fluid" id="main">
		<div class="span8 offset2">	
			<form class="form-horizontal ">
				<h3>个人实训基本信息</h3>
				<div class="control-group">
					<label class="control-label" for="inputEmail">姓名</label>
					<div class="controls">
						<input type="text" id="inputEmail" placeholder="请填写姓名">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">实训科目</label>
					<div class="controls">
						<select>
							<option value="0">H5</option>
							<option value="1">PHP</option>
							<option value="2">AR/VR</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">实训天数</label>
					<div class="controls">
						<select>
							<option value="1">1天</option>
							<option value="3">3天</option>
							<option value="5">5天</option>
							<option value="10">2周</option>
							<option value="15">3周</option>
							<option value="20">4周</option>
						</select>
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
	
	
	<div class="row-fluid" id="footer">	
		<div class="span8 offset2">				
			<p>©2012 - 2016 蓝鸥-广州</p>				
		</div>			
    </div>
	
</body>
</html>