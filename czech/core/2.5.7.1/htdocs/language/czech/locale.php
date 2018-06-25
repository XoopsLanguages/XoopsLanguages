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
 * @version         $Id: locale.php 12537 2014-05-19 14:19:33Z beckmi $
 * @todo            To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || die('Restricted access');

setlocale(LC_ALL, 'cs_CZ');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// insert double '\' before 't','r','n'
define("_TODAY","\D\\n\e\s G:i");
define("_YESTERDAY","\V\č\e\\r\a G:i");
define("_MONTHDAY","j. n. G:i"); // n/j G:i
define("_YEARMONTHDAY","j. n. Y G:i"); // Y/n/j G:i
define("_ELAPSE","%s zpět");
define("_TIMEFORMAT_DESC","Dovolené formáty: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ";<br />" . "\"c\" or \"custom\" - format determined according to interval to present; \"e\" - Elapsed; \"mysql\" - Y-m-d H:i:s;<br />" . "specified string - Refer to <a href=\"http://php.net/manual/en/function.date.php\" rel=\"external\">PHP manual</a>.");

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
     * @param  unknown_type $number
     * @return unknown
     */
    function number_format($number)
    {
        return number_format($number, 2, '.',',');
    }

    /**
     * Money Format
     *
     * @param  string $format
     * @param  string $number
     * @return money  format
     */
    function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'cs_CZ');

        return money_format($format, $number);
    }
}