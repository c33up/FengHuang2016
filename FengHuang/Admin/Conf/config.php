<?php
return array(
	//'配置项'=>'配置值'
     //主题静态文件路径
    'TMPL_PARSE_STRING' => array(
        '__CSS_URL__' => __ROOT__.'/FengHuang/'.MODULE_NAME.'/View/' . '/Public/Styles',
        '__JS_URL__' => __ROOT__.'/FengHuang/'.MODULE_NAME.'/View/' . '/Public/Script',
        '__PUBLIC_URL__' => __ROOT__.'/FengHuang/'.MODULE_NAME.'/View/' . '/Public/font-awesome',),

     //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'fhdb', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'abc123456', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PARAMS' =>  array(), // 数据库连接参数
    
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
);