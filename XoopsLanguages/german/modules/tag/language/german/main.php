<?php
/**
 * Tag management for XOOPS
 *
 * @copyright	The XOOPS project http://www.xoops.org/
 * @license		http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		Taiwen Jiang (phppp or D.J.) <php_pp@hotmail.com>
 * @since		1.00
 * @version		$Id$
 * @package		module::tag
 */

if (!defined('XOOPS_ROOT_PATH')){ exit(); }



define("TAG_MD_TAGS","Tags");
define("TAG_MD_TAG_ON","Tag an");
define("TAG_MD_TAGVIEW",'Objekte im Tag [<b>%1$s</b>] in %2$s');
define("TAG_MD_TAGLIST","Tag Liste von <strong>%s</strong>");
define("TAG_MD_JUMPTO","Gehe zu");
define("TAG_MD_TAG_DELIMITER","Folgende Trennzeichen sind für Tags gültig");
define("TAG_MD_INVALID","Ungültige Anfrage");

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

	"techno"	=> array(
						"title"		=> "Technorati",
						"link"		=> "http://technorati.com/tag/%s/",
						),	

	"flickr"	=> array(
						"title"		=> "Flickr",
						"link"		=> "http://www.flickr.com/photos/tags/%s/",
						"function"	=> "utf8_encode",
						),	
	);
?>