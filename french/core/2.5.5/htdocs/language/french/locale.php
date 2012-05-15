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
 * @version         $Id$
 * @todo            To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

setlocale(LC_ALL, 'fr_FR');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a", "A", "B", "c", "d", "D", "F", "g", "G", "h", "H", "i", "I", "j", "l", "L", "m", "M", "n", "O", "r", "s", "S", "t", "T", "U", "w", "W", "Y", "y", "z", "Z"
// insert double '\' before 't', 'r', 'n'
define("_TODAY", "\A\u\j\o\u\\r\d\\'\h\u\i G:i");
define("_YESTERDAY", "\H\i\e\\r G:i");
define("_MONTHDAY", "d/m H:i");
define("_YEARMONTHDAY", "d/m/Y H:i");
define("_ELAPSE", "il y a %s");
define("_TIMEFORMAT_DESC", "Les formats :<br /> \"s\" - " . _SHORTDATESTRING . ";<br /> \"m\" - " . _MEDIUMDATESTRING . ";<br /> \"l\" - " . _DATESTRING . ";<br />" . "\"c\" or \"custom\" - format déterminé en fonction de l\'intervalle jusqu\'à maintenant;<br /> \"e\" - Ecoulé<br /> \"mysql\" - Y-m-d H:i:s;<br />" . "Chaine de caractère - Consulter le <a href=\"http://www.php.net/manual/fr/function.date.php\" rel=\"external\">manuel PHP</a>.");

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
        setlocale(LC_MONETARY, 'fr_FR');
        return money_format($format, $number);
    }
}

/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8 sans Bom
 *
 * @version         $Id $
**/
?>