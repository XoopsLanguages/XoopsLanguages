<?php
/**
 * Tag management for XOOPS
 *
 * @copyright	The XOOPS project http://www.xoops.org/
 * @license		http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		Taiwen Jiang (phppp or D.J.) <php_pp@hotmail.com>
 * @since		1.00
 * @version		$Id: main.php 2292 2008-10-12 04:53:18Z phppp $
 * @package		tag
 */

if (!defined('XOOPS_ROOT_PATH')) { exit(); }

define("TAG_MD_TAGS","Теги");
define("TAG_MD_TAG_ON","Поиск тегов в");
define("TAG_MD_TAGVIEW","Просмотр тега <strong>%1\$s</strong> на %2\$s");
define("TAG_MD_TAGLIST","Список тегов сайта <strong>%s</strong>");
define("TAG_MD_JUMPTO","Перейдите к тегу");
define("TAG_MD_TAG_DELIMITER","Разделители тэгов");
define("TAG_MD_INVALID","Данный тег отсутствует в базе");

/**
 * Customize addons:
 * <ul>
 *	<li>key: like "google", nothing but only for "target" in anchor;</li>
 *	<li>title: link title;</li>
 *	<li>link: link prototype, %s for the urlencode'd term;</li>
 *	<li>function: optional, some sites might require different charset encoding, you can create your functions or use PHP functions like utf8_encode.
 *					This is required by non-latin languages for technorati or flickr.
 *	</li>
 * </ul>
 */
$GLOBALS["TAG_MD_ADDONS"] = array(
	"google"	=> array(
						"title"		=> "Google",
						"link"		=> "http://www.google.com/search?q=%s",
						),	
	);
?>