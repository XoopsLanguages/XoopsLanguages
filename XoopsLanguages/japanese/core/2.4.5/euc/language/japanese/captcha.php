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
 * @version         $Id: captcha.php $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define("_CAPTCHA_CAPTION", "認証コード");
define("_CAPTCHA_INVALID_CODE", "無効な認証コードです！");
define("_CAPTCHA_TOOMANYATTEMPTS", "認証の有効回数を超えました");
define("_CAPTCHA_MAXATTEMPTS", "認証可能回数は %d 回です");
// For image mode
define('_CAPTCHA_RULE_IMAGE', "画像に記載している文字を入力して下さい");
define("_CAPTCHA_RULE_CASESENSITIVE", "認証コード");
define("_CAPTCHA_RULE_CASEINSENSITIVE", "認証コード");
define("_CAPTCHA_REFRESH", "読めない場合は画像をクリック事で別の文字を表示できます");
// For text mode
define("_CAPTCHA_RULE_TEXT", "式の答えを入力してください");

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', 'エラー: ファイル %u が読み込めません in file %s at line %s. ');

?>
