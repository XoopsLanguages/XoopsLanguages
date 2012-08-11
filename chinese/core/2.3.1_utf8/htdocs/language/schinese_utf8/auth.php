<?php
// $Id: $
//%%%%%%		File Name auth.php 		%%%%%

define('_AUTH_MSG_AUTH_METHOD',"使用 %s 认证方法");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','PHP扩展 LDAP 没有载入 (请确认PHP配置文件php.ini)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"不能连接到服务器");
define('_AUTH_LDAP_USER_NOT_FOUND',"会员 %s 不在目录服务器(%s)，该目录服务器位于%s");
define('_AUTH_LDAP_CANT_READ_ENTRY',"不能读取条目%s");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"对不起，在XOOPS数据库没有发现用于连接的相应用户信息: %s <br />" .
		"请确认用户信息数据，或者启用自动创建用户规则");
define('_AUTH_LDAP_START_TLS_FAILED',"无法建立TLS连接");			
		
?>