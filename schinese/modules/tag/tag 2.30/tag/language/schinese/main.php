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

define("TAG_MD_TAGS","Tag");
define("TAG_MD_TAG_ON","Tag 关联");
define("TAG_MD_TAGVIEW", '%2$s中 <strong>%s</strong> 的关联条目');
define("TAG_MD_TAGLIST","<strong>%s</strong>的Tag列表");
define("TAG_MD_JUMPTO","快速查看");
define("TAG_MD_TAG_DELIMITER","不同Tag之间可以采用如下允许的间隔符");
define("TAG_MD_INVALID","查询的内容不存在");

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
	"baidu"	=> array(
						"title"		=> "百度",
						"link"		=> "http://www.baidu.com/s?wd=%s",
						),	
	"techno"	=> array(
						"title"		=> "Technorati",
						"link"		=> "http://technorati.com/tag/%s/",
						"function"	=> "xoops_utf8_encode",
						),	
	"flickr"	=> array(
						"title"		=> "Flickr",
						"link"		=> "http://www.flickr.com/photos/tags/%s/",
						"function"	=> "xoops_utf8_encode",
						),	
	);
?>