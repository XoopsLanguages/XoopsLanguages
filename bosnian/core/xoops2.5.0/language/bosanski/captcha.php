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

// _LANGCODE: ba
// _CHARSET : UTF-8
// Translator: XOOPSBA.ORG Team, http://www.xoopsba.org
define('_CAPTCHA_CAPTION', 'Potvrdni kod');
define('_CAPTCHA_INVALID_CODE', 'Neispravan potvrdni kod!');
define('_CAPTCHA_TOOMANYATTEMPTS', 'Previše pokušaja!');
define('_CAPTCHA_MAXATTEMPTS', 'Maksimalni dozvoljeni broj pokušaja: %d');
// For image mode
define('_CAPTCHA_RULE_IMAGE', 'Upiši tekst sa slike');
define('_CAPTCHA_RULE_CASESENSITIVE', 'Kod je osjetljiv na mala-velika slova');
define('_CAPTCHA_RULE_CASEINSENSITIVE', 'Kod nije osjetljiv na mala-velika slova');
define('_CAPTCHA_REFRESH', 'Ako slika nije jasna, klikninte istu da bi dobili novu.');
// For text mode
define('_CAPTCHA_RULE_TEXT', 'Unesite rezultat izraza');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', 'Greška: Neunešen fajl %u u fajlu %s pod linijom %s. ');

?>