<?php
namespace Home\Controller;

use Think\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $category = M('category');
        $categorylist = $category->select();
        echo json_encode($categorylist,JSON_UNESCAPED_UNICODE);
       	// $this->display();
    }
}