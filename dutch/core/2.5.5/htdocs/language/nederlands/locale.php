<?php
/**
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE: nl
 * _CHARSET : UTF-8
 * Vertaald door	Renetjuh
 * (Ver)taalfouten of suggesties?
 * AUB hier melden: http://www.xoops.nl
**/
 
defined('XOOPS_ROOT_PATH') or die('Beperkte toegang');

setlocale(LC_ALL, 'nl_NL');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a", "A", "B", "c", "d", "D", "F", "g", "G", "h", "H", "i", "I", "j", "l", "L", "m", "M", "n", "O", "r", "s", "S", "t", "T", "U", "w", "W", "Y", "y", "z", "Z"    
// insert double '\' before 't', 'r', 'n'
define("_TODAY", "\V\a\\n\d\a\a\g G:i");
define("_YESTERDAY", "\G\i\s\\t\e\\r\e\\n G:i");
define("_MONTHDAY", "j /n G:i");
define("_YEARMONTHDAY", "j/n/Y G:i");
define("_ELAPSE", " %s  geleden");
define("_TIMEFORMAT_DESC", "Valid formats: \\\"s\\\" - \" . _SHORTDATESTRING . \"; \\\"m\\\" - \" . _MEDIUMDATESTRING . \"; \\\"l\\\" - \" . _DATESTRING . \";<br />\" . \"\\\"c\\\" or \\\"custom\\\" - format determined according to interval to present; \\\"e\\\" - Elapsed; \\\"mysql\\\" - Y-m-d H:i:s;<br />\" . \"specified string - Refer to <a href=\\\"http://php.net/manual/en/function.date.php\\\" rel=\\\"external\\\">PHP manual</a>.");

/**
 * A Xoops Local
 *
 * @package     kernel
 * @subpackage  Language
 *
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright   copyright (c) 2000-2009 XOOPS.org
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
        setlocale(LC_MONETARY, 'nl_NL');
        return money_format($format, $number);
    }
}
?>