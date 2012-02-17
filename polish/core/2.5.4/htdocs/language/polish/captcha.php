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
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoops Captcha Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: captcha.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: tstempko
define('_CAPTCHA_CAPTION', 'Kod potwierdzenia');
define('_CAPTCHA_INVALID_CODE', 'Niepoprawny kod potwierdzenia!');
define('_CAPTCHA_TOOMANYATTEMPTS', 'Zbyt wiele prób!');
define('_CAPTCHA_MAXATTEMPTS', 'Możesz spróbować tylko: %d razy');
// For image mode
define('_CAPTCHA_RULE_IMAGE', 'Wprowadź litery z obrazka');
define('_CAPTCHA_RULE_CASESENSITIVE', 'Wielkość liter jest istotna');
define('_CAPTCHA_RULE_CASEINSENSITIVE', 'Wielkość liter nie jest istotna');
define('_CAPTCHA_REFRESH', 'Jeśli litery są niewyraźne kliknij tutaj by odświeżyć obrazek.');
// For text mode
define('_CAPTCHA_RULE_TEXT', 'Wpisz wynik wyrażenia');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', 'Error: Could not load file %u in file %s at line %s. ');

?>