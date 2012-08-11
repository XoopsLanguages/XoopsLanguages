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
defined('XOOPS_ROOT_PATH') or die('制限されたアクセス');

// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_CAPTCHA_CAPTION','確証コード');
define('_CAPTCHA_INVALID_CODE','無効な確証コード！');
define('_CAPTCHA_TOOMANYATTEMPTS','未遂しすぎ！');
define('_CAPTCHA_MAXATTEMPTS','最大の試み: %d');
// For image mode
define('_CAPTCHA_RULE_IMAGE','画像内の文字をエンターして下さい');
define('_CAPTCHA_RULE_CASESENSITIVE','大文字／小文字気を付けって下さい');
define('_CAPTCHA_RULE_CASEINSENSITIVE','大文字／小文字関係が有りません');
define('_CAPTCHA_REFRESH','イメージを新たにするクリック');
// For text mode
define('_CAPTCHA_RULE_TEXT','Input the result from the expression');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR','Error: Could not load file %u in file %s at line %s. ');

?>