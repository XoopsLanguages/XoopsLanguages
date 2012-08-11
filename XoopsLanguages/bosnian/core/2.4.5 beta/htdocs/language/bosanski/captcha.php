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
// _CHARSET : ISO-8859-2
// Translator: Saba
define("_CAPTCHA_CAPTION","Potvrdni code");
define("_CAPTCHA_INVALID_CODE","Neispravan potvrdni code!");
define("_CAPTCHA_TOOMANYATTEMPTS","Previ&scaron;e poku&scaron;aja!");
define("_CAPTCHA_MAXATTEMPTS","Max. je dozvoljeno: %d  poku&scaron;ati");

// For image mode
define("_CAPTCHA_RULE_IMAGE","Upi&scaron;i &scaron;ta vidi&scaron; na slici");
define("_CAPTCHA_RULE_CASESENSITIVE","Code je sa brojevima slovima");
define("_CAPTCHA_RULE_CASEINSENSITIVE","Code je sa brojevima slovima");
define("_CAPTCHA_REFRESH","Ako slika nije jasna, klikni na nju da ti se drugi Code prika&#382;e.");

// For text mode
define("_CAPTCHA_RULE_TEXT","Upi&scaron;i rezultat");
/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR','Error: Could not load file %u in file %s at line %s. ');

?>