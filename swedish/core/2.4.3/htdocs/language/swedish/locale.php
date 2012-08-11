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
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @since           2.3.0
 * @subpackage      Xoops Locale Language 
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: locale.php 3152 2009-04-18 13:30:57Z catzwolf $
 * @todo            To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') or die('Endast behöriga användare');

setlocale(LC_ALL, 'sv_SE');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"    
// insert double '\' before 't','r','n'
define("_TODAY","\I\d\a\g H:i");
define("_YESTERDAY","\I\gå\r H:i");
define("_MONTHDAY","j/n H:i");
define("_YEARMONTHDAY","Y-m-d H:i");
define("_ELAPSE","%s sedan");
define("_TIMEFORMAT_DESC","Giltiga format: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ";<br />" . "\"c\" eller \"anpassat\" - formatet bestäms enligt intervallet till aktuell tid; \"e\" - Förflutet; \"mysql\" - Y-m-d H:i:s;<br />" . "specificerad sträng - Se <a href=\"http://php.net/manual/en/function.date.php\" rel=\"external\">PHP-manualen</a>.");

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
        return number_format($number, 2, '.',',');
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
        setlocale(LC_MONETARY, 'sv_SE');
        return money_format($format, $number);
    }
}
?>