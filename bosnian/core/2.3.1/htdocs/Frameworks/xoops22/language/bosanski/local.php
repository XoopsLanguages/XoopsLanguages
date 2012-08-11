<?php
/**
 * Xoops multi-language string and encoding handling class
 *
 * @copyright	 The XOOPS project http://www.xoops.org/
 * @license      http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package      language
 * @version      $Id: local.php 108 2006-03-23 17:41:10Z phppp $
 * @author       D.J. (phppp)
 * @since        2.2
 */

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"	
// insert double '\' before 't','r','n'
if(!defined("_YEARMONTHDAY")) {
	define("_TODAY","\D\a\\n\a\s G:i");
	define("_YESTERDAY","\J\u\&#269;\e\\r G:i");
	define("_MONTHDAY","j/n G:i");
	define("_YEARMONTHDAY","j/n/Y G:i");
}

define("_ELAPSE","%s pro&scaron;lo");

define("_TIMEFORMAT_DESC","Ispravni Format: \"s\" - "._SHORTDATESTRING."; \"m\" - "._MEDIUMDATESTRING."; \"l\" - "._DATESTRING.";<br />".
							"\"c\" or \"custom\" - format determined according to interval to present; \"e\" - Elapsed; \"mysql\" - d-m-Y H:i:s;<br />".
							"specified string - Refer to <a href=\"http://php.net/manual/en/function.date.php\" target=\"_blank\">PHP manual</a>."
							);
							
require_once dirname(dirname(__FILE__))."/bosanski/local.class.php";

/**
 * The class should be an abstract one using PHP embedded functions
 * based on which, 
 * each local language defines its own equalient methods
 *
 * A comprehensive handler is expected in Xoops 2.3 or 2.4
 */

class XoopsLocal extends XoopsLocalEnglish
{	
}
?>