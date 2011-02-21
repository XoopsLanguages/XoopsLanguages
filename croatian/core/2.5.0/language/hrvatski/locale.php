<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Xoops locale
 *
 * @copyright       The XOOPS project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         kernel
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: locale.php 4941 2010-07-22 17:13:36Z beckmi $
 * @todo            To be handled by i18n/l10n
 */
// prijevod na hrvatski: XoopsHR.org / Ivan Kosak / 25.1.2011.
defined('XOOPS_ROOT_PATH') or die('Ograničeni pristup');

setlocale(LC_ALL, 'hr');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a", "A", "B", "c", "d", "D", "F", "g", "G", "h", "H", "i", "I", "j", "l", "L", "m", "M", "n", "O", "r", "s", "S", "t", "T", "U", "w", "W", "Y", "y", "z", "Z"    
// insert double '\' before 't', 'r', 'n'
define("_TODAY", "\D\a\\n\a\\s\ \u G:i");
define("_YESTERDAY", "\J\u\č\e\\r\ \u G:i");
define("_MONTHDAY", "j.n. G:i");
define("_YEARMONTHDAY", "j.n.Y. G:i");
define("_ELAPSE", "prije %s");
define("_TIMEFORMAT_DESC", "Valid formats: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ";<br />" . "\"c\" or \"custom\" - format determined according to interval to present; \"e\" - Elapsed; \"mysql\" - Y-m-d H:i:s;<br />" . "specified string - Refer to <a href=\"http://php.net/manual/en/function.date.php\" rel=\"external\">PHP manual</a>.");

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
        setlocale(LC_MONETARY, 'hr');
        return money_format($format, $number);
    }
}
?>