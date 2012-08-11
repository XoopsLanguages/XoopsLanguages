<?php
// -------------------------------------------------------------------------------- //
// Translated by Ianez - Xoops Italia Staff
// Published by Xoops Italian Official Support Site - www.xoopsitalia.org
// -------------------------------------------------------------------------------- //
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
 * @version         $Id: locale.php 1530 2008-05-01 09:22:47Z phppp $
 * @todo            To be handled by i18n/l10n
 */

setlocale(LC_ALL, 'it_IT');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"    
// insert double '\' before 't','r','n'
define("_TODAY","\O\g\g\i\ \a\l\l\e\ G:i");
define("_YESTERDAY","\I\e\\r\i\ \a\l\l\e\ G:i");
define("_MONTHDAY","j/n G:i");
define("_YEARMONTHDAY","j/n/Y G:i");

define("_ELAPSE","%s fa");

define("_TIMEFORMAT_DESC","Formati validi: \"s\" - ". _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ";<br />".
							             "\"c\" o \"custom\" - formato determinato dall\'intervallo di tempo trascorso; \"e\" - Trascorso; \"mysql\" - d-m-Y H:i:s;<br />".
							             "stringa specifica - Verifica sul <a href=\"http://php.net/manual/en/function.date.php\" rel=\"external\">manuale PHP</a>."
							              );

class XoopsLocal extends XoopsLocalAbstract
{    
    
    function number_format($number)
    {
        return number_format($number, 2, ',','.');
    }
    
    function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'it_IT');
        return money_format($format, $number);
    }
}
?>
