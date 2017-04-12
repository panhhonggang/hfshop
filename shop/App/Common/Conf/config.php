<?php
return array(
	//'配置项'=>'配置值'
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'hf_',    // 数据库表前缀

    'URL_MODEL'             =>  2,
    'SHOW_PAGE_TRACE'       =>  true,

    /*配置邮件发送服务器*/
    'MAIL_HOST'     => 'smtp.163.com',          /*smtp服务器的名称、smtp.163.com*/
    'MAIL_SMTPAUTH' => TRUE,                    /*启用smtp认证*/
    'MAIL_DEBUG'    => TRUE,                    /*是否开启调试模式*/
    'MAIL_USERNAME' => 'kechengqin36a@163.com',      /*邮箱名称*/
    'MAIL_FROM'     => 'kechengqin36a@163.com',      /*发件人邮箱*/
    'MAIL_FROMNAME' => '蓝鸥科技有限公司(广州分公司-教学部-PHP部门)',                 /*发件人昵称*/
    'MAIL_PASSWORD' => 'peipei',      /*发件人邮箱的密码*/
    'MAIL_CHARSET'  => 'utf-8',                 /*字符集*/
    'MAIL_ISHTML'   => TRUE,                    /*是否HTML格式邮件*/
);