<?php
/**
 * Tag management
 *
 * @copyright	The XOOPS project http://www.xoops.org/
 * @license		http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		Taiwen Jiang (phppp or D.J.) <php_pp@hotmail.com>
 * @since		1.00
 * @version		$Id$
 * @package		module::tag
 */

if (!defined('XOOPS_ROOT_PATH')){ exit(); }
define("TAG_AM_TERM","Tag");

define("TAG_AM_STATS","统计信息");
define("TAG_AM_COUNT_TAG","Tag数量");
define("TAG_AM_COUNT_ITEM","关联条目数量");
define("TAG_AM_COUNT_MODULE","模块数量");

define("TAG_AM_EDIT","Tag管理");
define("TAG_AM_SYNCHRONIZATION","数据同步");

define("TAG_AM_ACTIVE","有效");
define("TAG_AM_INACTIVE","关闭");
define("TAG_AM_GLOBAL","整体");
define("TAG_AM_ALL","所有模块");
define("TAG_AM_NUM","每次整理的数目");
define("TAG_AM_IN_PROCESS","数据整理进行中，请稍候 ...");
define("TAG_AM_FINISHED","数据整理完毕");
?>