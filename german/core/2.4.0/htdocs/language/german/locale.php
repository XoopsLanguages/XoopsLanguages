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
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: locale.php 2224 2009-02-08 12:25 dhcst $
 * @todo            To be handled by i18n/l10n
 */

setlocale(LC_ALL, 'de_DE');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// insert double '\' before 't','r','n'
define("_TODAY","\H\e\u\\t\e H:i");
define("_YESTERDAY","\G\e\s\\t\e\\r\\n H:i");
define("_MONTHDAY","d.m H:i");
define("_YEARMONTHDAY","d.m.Y H:i");

define("_ELAPSE","%s zuvor");

define("_TIMEFORMAT_DESC","Gültige Formate: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ";<br />".
                            "\"c\" oder \"custom\" - Ein eigenes Format zu erstellen oder wähle; \"e\" - Elapsed; \"mysql\" - Y-m-d H:i:s;<br />".
                            "Spezielles Format - Siehe dazu das <a href=\"http://php.net/manual/de/function.date.php\" rel=\"external\">PHP Handbuch</a>."
                            );

class XoopsLocal extends XoopsLocalAbstract
{

    function number_format($number)
    {
        return number_format($number, 2, '.','.');
    }

    function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'de_DE');
        return money_format($format, $number);
    }
}
?>