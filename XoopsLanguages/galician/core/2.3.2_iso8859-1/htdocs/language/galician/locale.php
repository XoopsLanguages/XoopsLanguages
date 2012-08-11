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
 * @version         $Id: locale.php 1530 2008-05-01 09:22:47Z phppp $
 * @todo            To be handled by i18n/l10n
 */

setlocale(LC_ALL, 'gl_GL');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"	
// insert double '\' before 't','r','n'
define("_TODAY","\H\o\x\e G:i");
define("_YESTERDAY","\O\n\t\e G:i");
define("_MONTHDAY","j/n G:i");
define("_YEARMONTHDAY","j/n/Y G:i");

define("_ELAPSE","Fai %s");

define("_TIMEFORMAT_DESC","Formatos válidos: \"s\" - "._SHORTDATESTRING."; \"m\" - "._MEDIUMDATESTRING."; \"l\" - "._DATESTRING.";<br />".
							"\"c\" or \"persoalizado\" - formato determinado do intervalo a actualidade; \"e\" - Elapsed; \"mysql\" - Y-m-d H:i:s;<br />".
                            "cadea espeficicada - Referida a <a href=\"http://php.net/manual/en/function.date.php\" rel=\"externa\">PHP manual</a>."
							);

class XoopsLocal extends XoopsLocalAbstract
{	
	
	function number_format($number)
	{
    	return number_format($number, 2, '.',',');
	}
	
	function money_format($format, $number)
	{
    	setlocale(LC_MONETARY, 'gl_GL');
    	return money_format($format, $number);
	}
}
?>