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
defined('XOOPS_ROOT_PATH') or die('Endast behöriga användare');

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_CAPTCHA_CAPTION','Bekräftelsekod');
define('_CAPTCHA_INVALID_CODE','Ogiltig bekräftelsekod!');
define('_CAPTCHA_TOOMANYATTEMPTS','För många försök!');
define('_CAPTCHA_MAXATTEMPTS','Max antal försök: %d');
// For image mode
define('_CAPTCHA_RULE_IMAGE','Fyll i bokstäverna på bilden');
define('_CAPTCHA_RULE_CASESENSITIVE','Koden gör skillnad på stora och små bokstäver');
define('_CAPTCHA_RULE_CASEINSENSITIVE','Koden gör inte skillnad på stora och små bokstäver');
define('_CAPTCHA_REFRESH','Klicka för att uppdatera bilden om den inte är tydlig nog.');
// For text mode
define('_CAPTCHA_RULE_TEXT','Fyll i resultatet av uttrycket');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR','Fel: Kunde inte ladda filen %u i filen %s på rad %s. ');

?>