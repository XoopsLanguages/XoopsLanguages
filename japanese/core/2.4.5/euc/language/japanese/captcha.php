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
define("_CAPTCHA_CAPTION", "ǧ�ڥ�����");
define("_CAPTCHA_INVALID_CODE", "̵����ǧ�ڥ����ɤǤ���");
define("_CAPTCHA_TOOMANYATTEMPTS", "ǧ�ڤ�ͭ�������Ķ���ޤ���");
define("_CAPTCHA_MAXATTEMPTS", "ǧ�ڲ�ǽ����� %d ��Ǥ�");
// For image mode
define('_CAPTCHA_RULE_IMAGE', "�����˵��ܤ��Ƥ���ʸ�������Ϥ��Ʋ�����");
define("_CAPTCHA_RULE_CASESENSITIVE", "ǧ�ڥ�����");
define("_CAPTCHA_RULE_CASEINSENSITIVE", "ǧ�ڥ�����");
define("_CAPTCHA_REFRESH", "�ɤ�ʤ����ϲ����򥯥�å������̤�ʸ����ɽ���Ǥ��ޤ�");
// For text mode
define("_CAPTCHA_RULE_TEXT", "�������������Ϥ��Ƥ�������");

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', '���顼: �ե����� %u ���ɤ߹���ޤ��� in file %s at line %s. ');

?>
