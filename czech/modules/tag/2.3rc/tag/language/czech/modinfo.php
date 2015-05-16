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

define("TAG_MI_NAME", "Štítky");
define("TAG_MI_DESC", "");

define("TAG_MI_BLOCK_CLOUD", "Mrak tagů");
define("TAG_MI_BLOCK_CLOUD_DESC", "");
define("TAG_MI_BLOCK_TOP", "Nejoblíbenější štítky");
define("TAG_MI_BLOCK_TOP_DESC", "");

define("TAG_MI_DOURLREWRITE", "Povolit URL rewrite?");
define("TAG_MI_DOURLREWRITE_DESC", "Před použitím je potřeba zapnout modul \"rewrite\" na serveru.");

define("TAG_MI_ITEMSPERPAGE", "Počet štítků na jednu stránku:");
define("TAG_MI_ITEMSPERPAGE_DESC", "");

define("TAG_MI_ADMENU_INDEX", "Administrace");
define("TAG_MI_ADMENU_EDIT", "Změna štítků");
define("TAG_MI_ADMENU_SYNCHRONIZATION", "Synchronizace");
?>