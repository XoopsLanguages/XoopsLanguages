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
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: fa
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_CAPTCHA_CAPTION', 'کد تایید');
define('_CAPTCHA_INVALID_CODE', 'کد تایید نا معتبر است!');
define('_CAPTCHA_TOOMANYATTEMPTS', 'تلاش شما برای ارسال بیش از حد مجاز بوده است!');
define('_CAPTCHA_MAXATTEMPTS', 'حداکثر تعداد تلاش برای ارسال: %d مرتبه');
// For image mode
define('_CAPTCHA_RULE_IMAGE', 'حروف موجود در تصویر را وارد کنید');
define('_CAPTCHA_RULE_CASESENSITIVE', 'حساس به بزرگی و کوچکی حروف');
define('_CAPTCHA_RULE_CASEINSENSITIVE', 'حساس به بزرگی و کوچکی حروف');
define('_CAPTCHA_REFRESH', 'اگر نمی‌توانید کد را تشخیص دهید، لطفا روی تصویر کلیک نمایید تا تصویر دیگری ساخته شود');
// For text mode
define('_CAPTCHA_RULE_TEXT', 'نتیجه این عبارت را وارد کنید');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', 'خطا: ناتوان در بارگذاری فایل %u در فایل %s در خط %s. ');

?>