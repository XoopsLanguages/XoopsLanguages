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

define("TAG_MI_NAME","XOOPS TAG");
define("TAG_MI_DESC","");

define("TAG_MI_BLOCK_CLOUD","Tag Cloud");
define("TAG_MI_BLOCK_CLOUD_DESC","");
define("TAG_MI_BLOCK_TOP","热门Tag");
define("TAG_MI_BLOCK_TOP_DESC","");

define("TAG_MI_DOURLREWRITE","启用URL重写");
define("TAG_MI_DOURLREWRITE_DESC","需要启用AcceptPathInfo (Apache2)");

define("TAG_MI_ITEMSPERPAGE","每页显示的条目数量");
define("TAG_MI_ITEMSPERPAGE_DESC","");

define("TAG_MI_ADMENU_INDEX","管理区首页");
define("TAG_MI_ADMENU_EDIT","Tag管理");
define("TAG_MI_ADMENU_SYNCHRONIZATION","数据同步");
?>