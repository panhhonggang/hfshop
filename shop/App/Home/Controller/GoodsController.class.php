<?php
namespace Home\Controller;

use Think\Controller;

class GoodsController extends Controller
{
    public function index()
    {
        $goods = M('goods');
        $goodslist = $goods->select();
        echo json_encode($goodslist,JSON_UNESCAPED_UNICODE);
       	// $this->display();
    }
}