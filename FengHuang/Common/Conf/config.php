<?php
return array(
	//'配置项'=>'配置值'
    'MODULE_ALLOW_LIST' =>    array('Home','Admin',),
	//我们用了入口版定 所以下面这行可以注释掉
	//'DEFAULT_MODULE'    =>    'Home',  // 默认模块	
	'SHOW_PAGE_TRACE'   =>  true, 
	'URL_CASE_INSENSITIVE'  =>  true,  //url不区分大小写
	'URL_MODEL'   =>2,
	'URL_HTML_SUFFIX'  =>'html',
	//'DEFAULT_FILTER'        => 'htmlspecialchars',
	'SUPER_ADMIN_ID'=>1,  //超级管理员id 删除用户的时候用这个禁止删除
	'SHOW_ERROR_MSG'        =>  true, 

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