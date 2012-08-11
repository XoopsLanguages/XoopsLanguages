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
defined('XOOPS_ROOT_PATH') or die('Ograničeni pristup');

// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Ivan Kosak / 27.10.2009.
define('_CAPTCHA_CAPTION','Potvrdni kod');
define('_CAPTCHA_INVALID_CODE','Krivi potvrdni kod!');
define('_CAPTCHA_TOOMANYATTEMPTS','Prekoračili ste broj pokušaja!');
define('_CAPTCHA_MAXATTEMPTS','Maksimalni broj pokušaja: %d');
// For image mode
define('_CAPTCHA_RULE_IMAGE','Upiši slova koja se nalaze na slici');
define('_CAPTCHA_RULE_CASESENSITIVE','Kod je osjetljiv na velika/mala slova');
define('_CAPTCHA_RULE_CASEINSENSITIVE','Kod nije osjetljiv na velika/mala slova');
define('_CAPTCHA_REFRESH','Kliknite da bi dobili novu sliku ako ova nije dosta jasna.');
// For text mode
define('_CAPTCHA_RULE_TEXT','Unesite rezultat iz izraza');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR','Greška: Ne mogu učitati datoteku %u u datoteci %s na liniji %s. ');

?>