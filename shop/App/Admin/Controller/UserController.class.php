<?php
namespace Admin\Controller;

class UserController extends CommonController
{
    public function index()
    {
        if (!empty($_GET['admin_name']))   $map['admin_name'] = array('like',"%{$_GET['admin_name']}%");

        $user = D('adminuser');
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
            if ($_SESSION['adminuser']['admin_name'] == 'admin') {
                $user = D('adminuser');
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
                $this->error('开玩笑？这事只有超级管理员才能干哦！！！赶紧交钱升级你的管理员等级',U('index'));
            }
        } else {

            $this->display();
        }
    }

    //用户编辑
    public function edit()
    {
        if (IS_POST) {
            // dump($_POST);
            $id = $_POST['id'];
            $data['truename'] = $_POST['truename'];
            $data['email'] = $_POST['email'];
            $user = M('adminuser');
            $info = $user->where('id='.$id)->save($data);
            if ($info) {
                $this->success('修改成功！！',U('index'));
            } else {
                $this->error('修改失败！！');
            }
        } else {
            $id = $_GET['id'];
            $info = D('adminuser')->find($id);

            $this->assign('info',$info);
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

    
    public function sendmail($id=0)
    {
        if (IS_POST) {

            $to = $_POST['name'];
            $title = $_POST['title'];
            $content = $_POST['content'];

            $res = sendMail($to,$title,$content);

            if ($res) {
                $this->success('邮件发送成功','index');
            } else {
                $this->error('发送失败');
            }
        } else {
            $userinfo = M('adminuser')->find($id);
            $this->assign('userinfo' ,$userinfo);
            $this->display();
        }
    }


    public function editpwd($id)
    {
        if (IS_POST) {
            
            $data['repwd'] = md5($_POST['repwd']);
            $data['admin_pass'] = $_POST['admin_pass'];
            $data['readmin_pass'] = $_POST['readmin_pass'];
            $user = M('adminuser')->find($id);

            //是否为当前用户
            if ($_SESSION['adminuser']['id'] == $user['id']) {
                // 新密码与确认密码是否相等
                if ($data['admin_pass'] == $data['readmin_pass']) {
                    //原密码是否正确
                    if ($data['repwd'] == $user['admin_pass']) {
                        $users = M('adminuser');

                        $pwd['id'] = $user['id'];
                        $pwd['admin_pass'] = md5($data['admin_pass']);
                        
                        $info = $users->where('id='.$pwd['id'])->setField('admin_pass',$pwd['admin_pass']);
                        
                        if ($info) {
                            $this->success('修改成功！！',U('index'));
                        } else {
                            $this->error('修改失败！！');
                        }
                    } else {
                        $this->error('原密码错误！！');
                    }
                } else {
                    $this->error('两次密码不相等！！');
                }
            } else {
                $this->error('不能改别人的密码！！');
            }
        } else {
            $user = M('adminuser')->find($id);
            $this->assign('user',$user);
            $this->display();
        }
    }
}