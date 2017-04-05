<?php
namespace Admin\Model;

use Think\Model;

class AuserModel extends Model
{

    //自动验证
    protected $_validate = array(
        array('name','require','用户名不能为空'),
        array('name','','帐号名称已经存在！',0,'unique',1),
        array('repassword','password','确认密码不正确',0,'confirm'),
        array('tel','/13\d{9}/','电话号码格式不对',1,'regex')
    );

    //自动完成
    protected $_auto = array(
        array('password','md5',3,'function') ,
        array('logtime','time',3,'function'),
        array('retime','time',1,'function'),
    );

    public function getAll()
    {
        $list = $this->select();

        //处理数据
        $sex = array('女','男','人妖');
        $position = array('PHP讲师','H5讲师','U3D讲师');
        foreach ($list as $key=>$val) {

            $list[$key]['sex'] = $sex[$val['sex']];
            $list[$key]['position'] = $position[$val['position']];
        }

        return $list;
    }


}