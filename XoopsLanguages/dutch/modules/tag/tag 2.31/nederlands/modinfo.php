<?php
/**
 * Tag management for XOOPS
 *
 * @copyright	The XOOPS project http://www.xoops.org/
 * @license		http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		Taiwen Jiang (phppp or D.J.) <php_pp@hotmail.com>
 * @since		1.00
 * @version		$Id: modinfo.php 2292 2008-10-12 04:53:18Z phppp $
 * @package		tag
 */

if (!defined('XOOPS_ROOT_PATH')) { exit(); }

define('TAG_MI_NAME', 'XOOPS TAG');
define('TAG_MI_DESC', 'Voor sitebrede labelmanagement');

define('TAG_MI_BLOCK_CLOUD', 'Label Cloud');
define('TAG_MI_BLOCK_CLOUD_DESC', '');
define('TAG_MI_BLOCK_TOP', 'Top label');
define('TAG_MI_BLOCK_TOP_DESC', '');

define('TAG_MI_DOURLREWRITE', 'URL-rewriteactiveren ');
define('TAG_MI_DOURLREWRITE_DESC', 'AcceptPathInfo On voor Apache2 is vereist');

define('TAG_MI_ITEMSPERPAGE', 'Items per pagina');
define('TAG_MI_ITEMSPERPAGE_DESC', 'Hoeveel labels worden op een pagina weergegeven.');

define('TAG_MI_ADMENU_INDEX', 'Home');
define('TAG_MI_ADMENU_EDIT', 'Label Administratie');
define('TAG_MI_ADMENU_SYNCHRONIZATION', 'Synchroniseren');

//2.31
// index.php

define('_TAG_ADMIN_INDEX', 'Index');
define('_TAG_ADMIN_HOME','Home');
define('_TAG_ADMIN_HOME_DESC','Ga terug naar Administratie module');
define('_TAG_ADMIN_ABOUT' , 'Over');
define('_TAG_ADMIN_ABOUT_DESC' , 'Over deze module');
define('_TAG_ADMIN_HELP' , 'Hulp');
define('_TAG_ADMIN_HELP_DESC' , 'Module hulp');
define('_AM_TAG_ADMIN_HELP' , 'Hulp');

?>