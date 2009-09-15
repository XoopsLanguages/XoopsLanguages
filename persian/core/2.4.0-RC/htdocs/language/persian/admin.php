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
 * @subpackage      Xoops Admin Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: admin.php 0000 15/04/2009 16:03:56 
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

define('_AD_NORIGHT','شما به اين قسمت دسترسی مستقيم نداريد');
define('_AD_ACTION','انجام عمل');
define('_AD_EDIT','ويرايش');
define('_AD_DELETE','حذف');
define('_AD_LASTTENUSERS','آخرين ۱۰ کاربر ثبت‌نام شده');
define('_AD_NICKNAME','نام خودمانی');
define('_AD_EMAIL','پست‌الکترونیکی');
define('_AD_AVATAR','تصویر اصلی');
define('_AD_REGISTERED','ثبت شد'); //Registered Date
// define( '_AD_PRESSGEN', 'اين اولين ورود شما به قسمت مديريت است. برای ادامه دکمه‌ی زير را فشار دهيد');
define('_AD_LOGINADMIN', 'در حال ورود ...');
define('_AD_WARNINGINSTALL','هشدار امنیتی: شاخه %s بر روی کارگزار وجود دارد. <br />لطفا به دلیل مسائل امنیتی این شاخه را حذف کنید.');
define('_AD_WARNINGWRITEABLE','هشدار امنیتی: پرونده %s بر روی کارگزار قابل دسترسی برای نوشتن است .<br />لطفا به دلیل مسایل امنیتی سطح دسترسی (permission) این پرونده را تغییر دهید.<br /> دسترسی را در سیستم عامل یونیکس (unix) بر روی (444), در سیستم عامل (Win32) بر روی (read-only) قرار دهید.');
define('_AD_WARNINGNOTWRITEABLE','هشدار امنیتی: شاخه %s توسط کارگزار قابل نوشتن نیست. <br />لطفا دسترسی این شاخه را تغییر دهید.<br /> در Unix بر روی (777), در Win32 بر روی(readable) قرار دهید.');
define('_AD_WARNINGXOOPSLIBINSIDE','هشدار امنیتی: شاخه %s در داخل شاخه ریشه سایت قرار دارد <br />برای امنیت بیشتر به شدت پیشنهاد میشود این شاخه را به خارج از ریشه سایت منتقل کنید.');

?>