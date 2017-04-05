<?php

    //定义项目目录
    define('APP_PATH','./App/');

    //开启调试模式
    define('APP_DEBUG',True);

    //设置目录安全结构
    define('BUILD_DIR_SECURE', false);

    //引入核心文件(在定义其他目录、配置的后引入)
    require './ThinkPHP/ThinkPHP.php';
