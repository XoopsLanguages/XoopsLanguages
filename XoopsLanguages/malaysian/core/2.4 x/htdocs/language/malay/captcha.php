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

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_CAPTCHA_CAPTION', 'Confirmation Code');
define('_CAPTCHA_INVALID_CODE', 'Invalid confirmation code!');
define('_CAPTCHA_TOOMANYATTEMPTS', 'Too many attempts!');
define('_CAPTCHA_MAXATTEMPTS', 'Maximum attempts you can try: %d');
// For image mode
define('_CAPTCHA_RULE_IMAGE', 'Input letters in the image');
define('_CAPTCHA_RULE_CASESENSITIVE', 'The code is case-sensitive');
define('_CAPTCHA_RULE_CASEINSENSITIVE', 'The code is case-insensitive');
define('_CAPTCHA_REFRESH', 'Click to refresh the image if it is not clear enough.');
// For text mode
define('_CAPTCHA_RULE_TEXT', 'Input the result from the expression');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', 'Error: Could not load file %u in file %s at line %s. ');

?>