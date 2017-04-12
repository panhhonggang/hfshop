<?php
namespace Admin\Model;

use Think\Model;

class UserModel extends Model
{

    //自动验证
    protected $_validate = array(
        array('home_name','require','用户名不能为空'),
        array('home_name','','帐号名称已经存在！',0,'unique',1),
        array('home_pass','require','密码不能为空'),
        array('repassword','home_pass','确认密码不正确',0,'confirm'),
        // array('email','require','邮箱不能为空')
        // array('tel','/13\d{9}/','电话号码格式不对',1,'regex')
    );

    //自动完成
   
    protected $_auto = array(
        array('home_pass','md5',3,'function'),
        array('addtime','time',3,'function'),
        
    );

    public function getAll()
    {
        $list = $this->select();

        //处理数据
        // $sex = array('女','男','人妖');
        // $position = array('PHP讲师','H5讲师','U3D讲师');
        // foreach ($list as $key=>$val) {

        //     $list[$key]['sex'] = $sex[$val['sex']];
        //     $list[$key]['position'] = $position[$val['position']];
        // }

        foreach ($list as $key => $val) {
            $list[$key]['addtime'] = date('Y-m-d H:i:s',$list[$key]['addtime']);
        }

        return $list;
    }


}