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
            <form class="form-horizontal " action="/2lanou/project/Admin/Subject/add" method="post">
                <h3>添加学科</h3>

                <div class="control-group">
                    <label class="control-label">实训学科</label>
                    <div class="controls">
                        <input type="text" name="subject" placeholder="请填写实训学科">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">实训天数</label>
                    <div class="controls">
                        <select name="number">
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
                    <label class="control-label">实训老师</label>
                    <div class="controls">
                        
                        <select name="teacher">
                            <?php if(is_array($teacher)): foreach($teacher as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
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