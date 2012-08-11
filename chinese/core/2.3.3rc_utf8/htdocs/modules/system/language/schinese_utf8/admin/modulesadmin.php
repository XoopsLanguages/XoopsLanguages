<?php
// $Id: modulesadmin.php 1441 2008-04-15 04:13:21Z julionc $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","模块管理区");
define("_MD_AM_MODULE","模块名称");
define("_MD_AM_VERSION","版本");
define("_MD_AM_LASTUP","最后更新时间");
define("_MD_AM_DEACTIVATED","停用");
define("_MD_AM_ACTION","操作");
define("_MD_AM_DEACTIVATE","停用");
define("_MD_AM_ACTIVATE","激活");
define("_MD_AM_UPDATE","更新");
define("_MD_AM_DUPEN","数据库的模块表中有重复条目!");
define("_MD_AM_DEACTED","选定的模块已被停用。 现在，您可以安全卸载此模块。");
define("_MD_AM_ACTED","	选定的模块已启动！");
define("_MD_AM_UPDTED","选定的模块已更新！");
define("_MD_AM_SYSNO","系统模块不能停用。");
define("_MD_AM_STRTNO","此模块已经设置为默认的首页。请设置适合您的首页。");

// added in RC2
define("_MD_AM_PCMFM","请确认:");

// added in RC3
define("_MD_AM_ORDER","顺序");
define("_MD_AM_ORDER0","(0 = 隐藏)");
define("_MD_AM_ACTIVE","激活");
define("_MD_AM_INACTIVE","未激活");
define("_MD_AM_NOTINSTALLED","没有安装");
define("_MD_AM_NOCHANGE","无变化");
define("_MD_AM_INSTALL","安装");
define("_MD_AM_UNINSTALL","卸载");
define("_MD_AM_SUBMIT","提交");
define("_MD_AM_CANCEL","取消");
define("_MD_AM_DBUPDATE","数据更新成功！");
define("_MD_AM_BTOMADMIN","返回模块管理区");

// %s represents module name
define("_MD_AM_FAILINS","无法安装 %s.");
define("_MD_AM_FAILACT","无法启用 %s.");
define("_MD_AM_FAILDEACT","无法停用 %s.");
define("_MD_AM_FAILUPD","无法更新 %s.");
define("_MD_AM_FAILUNINS","无法卸载 %s.");
define("_MD_AM_FAILORDER","无法重新排列 %s.");
define("_MD_AM_FAILWRITE","无法写入主菜单。");
define("_MD_AM_ALEXISTS","模块 %s 已经存在");
define("_MD_AM_ERRORSC","错误(s):");
define("_MD_AM_OKINS","模块 %s 安装成功。");
define("_MD_AM_OKACT","模块 %s 激活成功。");
define("_MD_AM_OKDEACT","模块 %s 停用成功。");
define("_MD_AM_OKUPD","模块 %s 更新成功");
define("_MD_AM_OKUNINS","模块 %s 卸载成功");
define("_MD_AM_OKORDER","模块 %s 更改成功");

define('_MD_AM_RUSUREINS','点击以下按钮安装此模块');
define('_MD_AM_RUSUREUPD','点击以下按钮更新此模块');
define('_MD_AM_RUSUREUNINS','您是否确实想卸载此模块？');
define('_MD_AM_LISTUPBLKS','T以下区块将一起更新。<br />选择要更新的区块内容(格式)将一起更新。<br />');
define('_MD_AM_NEWBLKS','新区块');
define('_MD_AM_DEPREBLKS','不更新区块');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','正在安装 ');
define('_MD_AM_TABLE_RESERVED','%s 是一个预留表!');
define('_MD_AM_CREATE_TABLES','正在创建表...');
define('_MD_AM_TABLE_CREATED',' %s 创建成功');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; 数据已经插入到表中 %s');
define('_MD_AM_INSERT_DATA_FAILD',' %s 未能插入到数据库中');
define('_MD_AM_INSERT_DATA_DONE','模块数据插入成功');
define('_MD_AM_MODULEID',' 模块 ID: %s');
define('_MD_AM_SQL_FOUND','在 %s 中发现SQL文件');
define('_MD_AM_SQL_NOT_FOUND','在 %s 中没有发现SQL文件');
define('_MD_AM_SQL_NOT_CREATE','出错:未能创建 %s ');
define('_MD_AM_SQL_NOT_VALID','%s 不是可用的 SQL!');

define('_MD_AM_GROUP_ID',' 群组 ID: %s ');
define('_MD_AM_NAME',' 名称: ');
define('_MD_AM_VALUE',' Value: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','正在添加模板...');
define('_MD_AM_TEMPLATES_DELETE','正在删除模板...');
define('_MD_AM_TEMPLATES_UPDATE','正在更新...');

define('_MD_AM_TEMPLATE_ID','模板 ID: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','模板 %s 已经添加到数据库');
define('_MD_AM_TEMPLATE_ADD_ERROR','出错: 模板 %s 没有插入到数据库中');
define('_MD_AM_TEMPLATE_COMPILED','模板 %s 编译成功 ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','出错: 模板 %s 没有编译成功');
define('_MD_AM_TEMPLATE_DELETE_DATA','模板 %s 已经从数据库中删除 ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','出错: 模板 %s 没有从数据库中删除 ');
define('_MD_AM_TEMPLATE_INSERT_DATA','模板 %s 已经添加到数据库中 ');
define('_MD_AM_TEMPLATE_RECOMPILE','模板 %s 重新编译');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','出错: 模板 %s 重新编译失败');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','出错: 不能重新编译模板 %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','出错: 没有删除旧的模板 %s， 已经放弃更新此文件。 ');
define('_MD_AM_TEMPLATE_UPDATE','模板 %s 更新成功 ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','出错: 没有更新 %s 模板 ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','正在添加区块...');
define('_MD_AM_BLOCKS_DELETE','正在删除区块...');
define('_MD_AM_BLOCKS_REBUILD','正在重建区块...');

define('_MD_AM_BLOCK_ID',' 区块 ID: %s ');

define('_MD_AM_BLOCK_ACCESS','添加区块权限');
define('_MD_AM_BLOCK_ACCESS_ERROR','出错: 未能添加区块权限');
define('_MD_AM_BLOCK_ADD','区块 %s 已经添加 ');
define('_MD_AM_BLOCK_ADD_ERROR','出错: 未能添加区块 %s 到数据库中！ ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','数据库出错: %s ');
define('_MD_AM_BLOCK_CREATED','区块 %s 已经创建 ');
define('_MD_AM_BLOCK_DELETE','区块 %s 已经删除 ');
define('_MD_AM_BLOCK_DELETE_DATA','区块模板 %s 已经从数据库中删除。 ');
define('_MD_AM_BLOCK_DELETE_ERROR','出错: 未能删除区块  %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','出错: 未能从数据库中删除区块 %s 。');
define('_MD_AM_BLOCK_DEPRECATED','区块模板 %s deprecated ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','出错: Could not remove deprecated block template.  ');
define('_MD_AM_BLOCK_UPDATE','区块 %s 更新成功 ');

/* Configs */
define('_MD_AM_GONFIG_ID','Config ID: %s');
define('_MD_AM_MODULE_DATA_ADD','正在加入模块配置数据...');
define('_MD_AM_MODULE_DATA_DELETE','正在删除模块配置数据...');
define('_MD_AM_MODULE_DATA_UPDATE','模块数据更新成功');

define('_MD_AM_CONFIG_ADD',' Config option added');
define('_MD_AM_CONFIG_DATA_ADD',' Config %s added to the database');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' ERROR: Could not insert config %s to the database. ');
define('_MD_AM_GONFIG_DATA_DELETE','Config data deleted from the database. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','ERROR: Could not delete config data from the database');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','正在设置群组权限...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','ERROR: Could not delete group permissions ');
define('_MD_AM_GROUP_PERMS_DELETED','Group permissions deleted ');

define('_MD_AM_ACCESS_ADMIN_ADD','Added admin access right for Group ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','ERROR: Could not add admin access right for Group ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Added user access right for Group ID: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','ERROR: Could not add user access right for Group ID: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Failed to execute %s');
define('_MD_AM_FAILED_SUCESS','%s executed successfully.');

define('_MD_AM_DELETE_ERROR','ERROR: Could not delete %s');
define('_MD_AM_UPDATE_ERROR','ERROR: Could not update %s');
define('_MD_AM_DELETE_MOD_TABLES','Deleting module tables...');

define('_MD_AM_COMMENTS_DELETE','Deleting comments...');
define('_MD_AM_COMMENTS_DELETE_ERROR','ERROR: Could not delete comments');
define('_MD_AM_COMMENTS_DELETED','Comments deleted');

define('_MD_AM_NOTIFICATIONS_DELETE','Deleting notifications...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','ERROR: Could not delete notifications');
define('_MD_AM_NOTIFICATIONS_DELETED','Notifications deleted');

define('_MD_AM_TABLE_DROPPED','数据表 %s 删除成功!');
define('_MD_AM_TABLE_DROPPED_ERROR','ERROR: 不能删除数据表 %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','ERROR: Not allowed to drop table %s !');
?>