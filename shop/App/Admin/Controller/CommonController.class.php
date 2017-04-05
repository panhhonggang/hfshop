<?php
namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
    public function _initialize()
    {
        if (empty($_SESSION['adminuser']))  $this->redirect('Login/login');

        //更细致的权限判断
        $mname = strtolower(CONTROLLER_NAME);
        $aname = strtolower(ACTION_NAME);
        // echo $mname;
        // echo $aname;
        // dump($_SESSION['nodelist']['index']);
        // if (empty($_SESSION['nodelist'][$mname]) || !in_array($aname,$_SESSION['nodelist'][$mname])) {
        //     $this->error('没有权限');
        // }
    }
}