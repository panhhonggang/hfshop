<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function login()
    {
        if (IS_POST) {

            //验证验证码
            $Verify = new \Think\Verify();
            $res = $Verify->check($_POST['code']);
            if (!$res) $this->error('验证码错误');

            $password = md5($_POST['password']);

            $info = M('adminuser')->where("admin_name='{$_POST['name']}'")->find();

            if ($info) {
                if ($info['admin_pass'] == $password) {
                    $_SESSION['adminuser'] = $info;

                    // //获取登录成功用户的操作权限
                    // $m = M();
                    // $list = $m->query('select nd.mname,nd.aname from lamp_access ac,lamp_role_user ru,lamp_node nd where nd.id=ac.node_id and ac.role_id=ru.role_id and ru.user_id='.$info['id']);

                    // // dump($list);

                    // $nodelist = array();
                    // $nodelist['index'][] = 'index';
                    // foreach ($list as $v) {
                    //     $nodelist[$v['mname']][] = $v['aname'];
                    // }
                    // $_SESSION['nodelist'] = $nodelist;
                    // dump($nodelist);die;

                    $this->redirect('Index/index');
                } else {
                    $this->error('密码错误');
                }
            } else {
                $this->error('用户名不存在');
            }



        } else {
            $this->display();
        }
    }

    public function yzm()
    {
        $config =    array(
        'fontSize'    =>    20,    // 验证码字体大小
        'length'      =>    2,     // 验证码位数
        'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

    public function logout()
    {
        unset($_SESSION['adminuser']);
        $this->redirect('Login/login');
    }
}