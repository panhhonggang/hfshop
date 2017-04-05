<?php
namespace Admin\Controller;

class RoleController extends CommonController
{
    public function index()
    {
        $rolelist = M('role')->select();

        $this->assign('rolelist' ,$rolelist);
        $this->display();
    }

    public function add()
    {
        $this->error('自己添加');
    }

    //分配节点
    public function nodeList($id=0)
    {
        //获取当前角色
        $roleInfo = M('role')->find($id);
        $this->assign('roleInfo' ,$roleInfo);

        //获取所有节点信息
        $nodelist = M('node')->select();
        $this->assign('nodelist' ,$nodelist);

        //获取当前角色所拥有的节点权限
        $nid = M('access')->where("role_id=".$id)->select();
        // dump($rid);
        $nids = array();
        foreach ($nid as $v) {
            $nids[] = $v['node_id'];
        }
        // dump($rids);
        $this->assign('nids' ,$nids);


        $this->display();
    }

    //执行分配节点
    public function saveNode()
    {
        $mod = M('access');
        //在添加角色之前先清空之前所有的角色
        $mod->where('role_id='.$_POST['id'])->delete();

        foreach ($_POST['nid'] as $rid) {
            $data['node_id'] = $rid;
            $data['role_id'] = $_POST['id'];
            // dump($data);
            $mod->add($data);
            // dump($rid);
        }

        $this->success('节点添加成功');
    }
}