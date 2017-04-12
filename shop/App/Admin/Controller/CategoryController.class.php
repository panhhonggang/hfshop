<?php
namespace Admin\Controller;

// use Think\Controller;

class CategoryController extends CommonController
{
    public function showlist(){
	    
	    $obj = D('Category');
	    $info = $obj-> select();
		$this ->assign('info',$info);
	    $this->display();
    }   


     public function add(){
	
	    $obj = D('Category');
	    if(!empty($_POST)){
// 		    添加时间戳
		    $_POST['addtime'] = time();
  		    $_POST['path'] = '0';
		    if($_POST['pidName']==="0"){
			    $_POST['pid'] = 0;
		    }else{
    		    $pids = $obj->field('id')->where("name='{$_POST['pidName']}'")->find();
			    $_POST['pid'] = $pids['id'];
		    }
  		    $info = $obj-> add($_POST);
// 		    拼接路径
		    $arr = $obj->field('id')->order('id desc')->limit(0,1)->find();
		    $_POST['path'] = $_POST['pid'].'-'.$arr['id'];
		    $_POST['id'] = $arr['id'];
		    $info = $obj-> save($_POST);
//   		判断数据添加是否成功
 		    if($info){
			    $this->redirect("showlist",array(),2,'数据添加成功');
 		    }else{
			    $this->redirect("add",array(),2,'数据添加失败');
 		    }
		}else{
// 			将父类pid传递给添加界面
			$info = $obj->group('id')->select();
			$this->assign('info',$info);
		    $this->display();
		}
    }   
    

    public function delete(){
	    
	    $obj = D('Category');
	    $id  = $_GET['id'];
	    $info = $obj->where("id = $id")->delete();
	    if($info){
		    $this->redirect('showlist',array(),2,'删除成功');
	    }else{
		    $this->redirect('showlist',array("id" => $id),2,'删除失败');		    
	    }        
    }   

    

    public function update($id){
	    
	    $obj = D('Category');
	    if(!empty($_POST)){
		    $_POST['addtime'] = time();
		    if($_POST['pidName'] === "0"){
    		    $_POST['pid'] = 0;
		    }else{
			    $pids = $obj->field('id')->where("name='{$_POST['pidName']}'")->find();
			    $_POST['pid'] = $pids['id'];
		    }
			$_POST['path'] = $_POST['pid'].'-'.$_POST['id'];
 		    $info = $obj-> save($_POST);
 		    
 		    if($info){
			    $this->redirect("showlist",array(),2,'数据更新成功');
 		    }else{
			    $this->redirect("update",array('id'=>$id),2,'数据更新失败');
 		    }
		}else{
			$info = $obj->where("id = $id")->find();
			$pidName = $obj->where("id = {$info['pid']}")->field('name')->find();
			if(empty($pidName)){
				$pidName = array("name"=>0);
			}
			$arr = $obj->field('name')->group('name')->select();
			$this->assign('arr',$arr);
			$this->assign('info',$info);
			$this->assign('pidName',$pidName);
/*
			dump($pidName);
			dump($info);
			dump($arr);
			die();
*/
		    $this->display();
		}
    }   


	public function find(){
		  $obj = D('Category');
		  $name = $_POST['name'];
 		  $info = $obj->where("name = '$name'")->select();
		  $this->assign('info',$info);
		  $this->display();
		
		
		
	}

}


