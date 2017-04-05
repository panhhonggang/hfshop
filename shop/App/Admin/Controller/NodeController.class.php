<?php
namespace Admin\Controller;

use Think\Controller;

class NodeController extends CommonController
{
    public function add()
    {
        $this->error('自己完成');
    }

    public function index()
    {
        $nodelist = M('node')->select();
        $this->assign('nodelist' ,$nodelist);
        $this->display();
    }
}