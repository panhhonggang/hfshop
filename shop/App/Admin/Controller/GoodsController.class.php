<?php
namespace Admin\Controller;

use Think\Controller;

class GoodsController extends CommonController
{
	
// 	商品展示
    public function showlist()
    {
	    
	    $obj = D('Goods');
	    $info = $obj -> select();
	    $this->assign('info',$info);
	    $this->display();
	}
// 	商品添加
   public function add(){
	    $obj = new \Admin\Model\GoodsModel();

// 		$obj = D('Goods');
		$cate = D('Category');
	   //如果post不为空，对数据进行添加；否则，进入添加界面。
	   if(!empty($_POST)){
   		    if($_FILES['picture']['error'] == 0){
			    $cfg = array(
				  'rootPath' => './uploads/',  
			    );
			    $up = new \Think\Upload($cfg);
				$z  = $up->uploadOne($_FILES['picture']);
			    $name = $up->rootPath.$z['savepath'].$z['savename'];
			    $_POST['picture'] = $name;
			}
			
		    //将当前时间添加进post数组
		    $cateids = $cate->field('id')->where("name = '{$_POST['cateName']}'")->find();
		    $_POST['cateid'] = $cateids['id'];
		    $_POST['addtime'] = time();
			$info = $obj->add($_POST);
		    if($info){
			    $this->redirect('Goods/showlist',array(),2,'商品添加成功');
		    }else{
			    $this->redirect('Goods/add',array(),2,'商品添加失败');
		    }
		   
	   }else{
			$cate = D('Category');
			$info = $cate -> field('name')->group()->select();
			$this->assign('info',$info);  
			$this->display();   
	   }
   }

// 商品删除
	public function remove(){
		$obj = D('Goods');
		$arr = $obj->field('picture')->where("id = {$_GET['id']}")->find();
		//删除图片
		$info1 = unlink($arr['picture']);
		$info = $obj->where("id = {$_GET['id']}")->delete();
		if($info&&$info1){
			$this->redirect('Goods/showlist',array(),2,'商品删除成功');
		}else{
			$this->redirect('Goods/showlist',array('id'=>$_GET['id']),2,'商品删除失败');
		}
	}


//商品更新
   public function update($id){
	   $obj = D('Goods');
	   $obj1 = D('Category');
	   if(!empty($_POST)){
		   
		   $arr = $obj->field('picture')->where("id = {$id}")->find();
			//删除图片
			$info1 = unlink($arr['picture']);
		     if($_FILES['picture']['error'] == 0){
			    $cfg = array(
				  'rootPath' => './uploads/',  
			    );
			    $up = new \Think\Upload($cfg);
				$z  = $up->uploadOne($_FILES['picture']);
			    $name = $up->rootPath.$z['savepath'].$z['savename'];
			    $_POST['picture'] = $name;
			}
		    //将当前时间添加进post数组
		    $_POST['addtime'] = time();
			$info = $obj->save($_POST);
		    if($info){
			    $this->redirect('Goods/showlist',array(),2,'商品更新成功');
		    }else{
			    $this->redirect('Goods/update',array(),2,'商品更新失败');
		    }
		   
	   }else{
		$info = $obj->where("id = {$id}")->find();
		$ids = $obj1->select();
		$this->assign("info",$info);
		$this->assign("ids",$ids);
		$this->display();   
	   }
   }
   
//商品查找
  public function find(){
	  $obj = D('Goods');
	  $name = $_POST['name'];
	  $info = $obj->where("name = '$name'")->select();
	  $this->assign('info',$info);
	  $this->display();	  
 }   









}