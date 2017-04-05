<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        echo '<h2>项目搭建</h2>';
        $url = U('Admin/Index/index');
        echo "<a href='{$url}'>后台首页</a><hr/>";

        $url2 = U('Home/Content/index');
        echo "<a href='{$url2}'>前台实训</a>";

    }
}