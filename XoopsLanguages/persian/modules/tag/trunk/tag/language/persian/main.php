<?php
/**
 * Tag management for XOOPS
 *
 * @copyright	The XOOPS project http://www.xoops.org/
 * @license		http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		Taiwen Jiang (phppp or D.J.) <php_pp@hotmail.com>
 * @since		1.00
 * @version		$Id$
 * @package		tag
 */

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

define("TAG_MD_TAGS", "برچسب‌ها");
define("TAG_MD_TAG_ON", "جستجوی برچسب‌ها در");
define("TAG_MD_TAGVIEW", 'موارد پیدا شده  از برچسب <strong>%1$s</strong> در %2$s');
define("TAG_MD_TAGLIST", "فهرست برچسب‌ها در سایت <strong>%s</strong>");
define("TAG_MD_JUMPTO", "برو به");
define("TAG_MD_TAG_DELIMITER", "جداکننده‌های نوشته شده در روبرو برای جدا کردن کلمات‌کلیدی از هم مجاز هستند");
define("TAG_MD_INVALID", "جستجوی غیر مجاز");

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
						"title"		=> "گوگل",
						"link"		=> "http://www.google.com/search?q=%s",
						),
  "Yahoo"	=> array(
						"title"		=> "یاهو",
						"link"		=> "http://search.yahoo.com/bin/search?p=%s&ei=UTF-8",
            ),
  "MSN"	=> array(
						"title"		=> "ام اس ان",
						"link"		=> "http://search.msn.com/results.aspx?q=%s",
            ),	  
            	
  "AltaVista"	=> array(
						"title"		=> "آلتا ویستا",
						"link"		=> "http://www.altavista.com/cgi-bin/query?q=%s",
            ),
  "Ask"	=> array(
						"title"		=> "آسک",
						"link"		=> "http://search.ask.com/web?q=%s",
            ),
  "AOL"	=> array(
						"title"		=> "آ او ال",
						"link"		=> "http://search.aol.com/aolcom/search?query=%s",
						),	
   "A9"	=> array(
						"title"		=> "آ ناین",
						"link"		=> "http://a9.com/%s",
						),	
  "Clusty"	=> array(
						"title"		=> "کلاستی",
						"link"		=> "http://clusty.com/search?query=%s",
						),	
  "GigaBlast"	=> array(
						"title"		=> "گیگا بلست",
						"link"		=> "http://gigablast.com/search?q=%s",
            ),	                    
	);
?>