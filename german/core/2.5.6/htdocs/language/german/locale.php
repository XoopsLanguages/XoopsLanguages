<?php
/**
*  Xoops Language
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
* @package         Core
* @subpackage      form Language
* @version         $Id: 2.5.0.a locale.php 21.12.2010
*
* @LANGCODE        de
* @CHARSET         UTF-8
* Translator       XOOPS German Translation Team http://www.myxoops.org
*
*
* You may not change or alter any portion of this comment or credits
*/

defined('XOOPS_ROOT_PATH') or die('Restricted access');

setlocale(LC_ALL, 'de_DE');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a", "A", "B", "c", "d", "D", "F", "g", "G", "h", "H", "i", "I", "j", "l", "L", "m", "M", "n", "O", "r", "s", "S", "t", "T", "U", "w", "W", "Y", "y", "z", "Z"
// insert double '\' before 't', 'r', 'n'
define("_TODAY",           "\H\e\u\\t\e H:i");
define("_YESTERDAY",       "\G\e\s\\t\e\\r\\n H:i");
define("_MONTHDAY",        "d.m.Y H:i");
define("_YEARMONTHDAY",    "d.m.Y");
define("_ELAPSE",          "%s zuvor");
define("_TIMEFORMAT_DESC", "Gültige Formate: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ";<br />".
                            "\"c\" oder \"custom\" - Ein eigenes Format zu erstellen oder wähle; \"e\" - Elapsed; \"mysql\" - Y-m-d H:i:s;<br />".
                            "specified string - Refer to <a href=\"http://php.net/manual/de/function.date.php\" rel=\"external\">PHP Handbuch</a>."
                            );


/**
 * A Xoops Local
 *
 * @package     kernel
 * @subpackage  Language
 *
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright   copyright (c) 2000-2010 XOOPS.org
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Number Formats
     *
     * @param unknown_type $number
     * @return unknown
     */
    function number_format($number)
    {
        return number_format($number, 2, '.', ',');
    }

    /**
     * Money Format
     *
     * @param string $format
     * @param string $number
     * @return money format
     */
    function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'de_DE');
        return money_format($format, $number);
    }
}
?>