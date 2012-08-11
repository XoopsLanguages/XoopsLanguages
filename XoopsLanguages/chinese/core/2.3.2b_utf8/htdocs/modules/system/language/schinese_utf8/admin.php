<?php
// $Id: admin.php 1502 2008-04-26 11:52:21Z phppp $
//%%%%%%	File Name  admin.php 	%%%%%
define('_MD_AM_DBUPDATED','数据更新成功');
define('_MD_AM_DBERROR','一些错误导致更新数据失败！请检查错误！');

define('_MD_AM_CONFIG','系统设置');


// Admin Module Names
define('_MD_AM_ADGS','群组管理');
define('_MD_AM_BANS','广告管理');
define('_MD_AM_BKAD','区块管理');
define('_MD_AM_MDAD','模块管理');
define('_MD_AM_SMLS','表情管理');
define('_MD_AM_RANK','用户等级');
define('_MD_AM_USER','编辑用户');
define('_MD_AM_FINDUSER','查找用户');
define('_MD_AM_PREF','一般设置');
define('_MD_AM_VRSN','版本');
define('_MD_AM_MLUS','邮件群发');
define('_MD_AM_IMAGES','图片管理');
define('_MD_AM_AVATARS','头像管理');
define('_MD_AM_TPLSETS','模版管理');
define('_MD_AM_COMMENTS','评论管理');

// Group permission phrases
define('_MD_AM_PERMADDNG','无法加入群组权限 (权限:%s  群组:%s)');
define('_MD_AM_PERMADDOK','群组权限添加成功 (权限:%s  群组:%s)');
define('_MD_AM_PERMRESETNG','无法重置[%s]模块的群组权限');
define('_MD_AM_PERMADDNGP','必须选中所有上一级条目。');
?>