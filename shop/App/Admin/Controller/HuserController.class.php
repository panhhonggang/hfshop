<?php
namespace Admin\Controller;

class HuserController extends CommonController
{
    public function index()
    {
        if (!empty($_GET['home_name']))   $map['home_name'] = array('like',"%{$_GET['home_name']}%");

        $user = D('user');
        // dump($user);
        $total = $user->where($map)->count();
        $page = new \Think\Page($total,8);
        $pageButton = $page->show();
        $userlist = $user->where($map)->limit($page->firstRow.','.$page->listRows)->getAll();

        $this->assign('list',$userlist);
        $this->assign('button',$pageButton);
        $this->display();
    }

    public function add()
    {
        if (IS_POST) {
            // dump($_POST);die;

            //数据创建跟自动验证、自动完成配合
            $user = D('user');
            $info = $user->create();
            $_POST['addtime'] = time();
            if ($info) {
                // dump($info);die;
                $res = $user->add();
                // dump($user);die;
                if ($res) {
                    $this->success('添加成功！！',U('index'));
                } else {
                    $this->error('添加失败');
                }
            } else {
                //getError()是在数据创建验证是调用,提示的是验证失败的错误信息
                $this->error($user->getError());
            }
            
        } else {

            $this->display();
        }
    }

    
    public function del($id)
    {
        if ($id == 1 ) {
            $this->error('不能删除超级管理员');
        } else {
            $res = D('adminuser')->delete($id);
            if ($res) {
                $this->success('删除成功',U('index'));
            } else {
                $this->error('删除失败');
            }

        }

    }

    
}