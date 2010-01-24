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
 * @subpackage      Xoops Notification Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: fa
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
// RMV-NOTIFY
// Text for various templates...
define ('_NOT_NOTIFICATIONOPTIONS', 'تنظیمات آگهی‌رسانی');
define ('_NOT_UPDATENOW', 'به روز کن');
define ('_NOT_UPDATEOPTIONS', 'تنظیمات به روز کردن آگهی‌رسانی');
define ('_NOT_CLEAR', 'پاک‌سازی');
define ('_NOT_CHECKALL', 'گزینش همه');
define ('_NOT_MODULE', 'ماژول');
define ('_NOT_CATEGORY', 'دسته');
define ('_NOT_ITEMID', 'نشانه');
define ('_NOT_ITEMNAME', 'نام');
define ('_NOT_EVENT', 'رویداد');
define ('_NOT_EVENTS', 'رویدادها');
define ('_NOT_ACTIVENOTIFICATIONS', 'آگهی‌های فعال');
define ('_NOT_NAMENOTAVAILABLE', 'این نام در دسترس نیست');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', 'نام این گزینه در دسترس نیست');
define ('_NOT_ITEMTYPENOTAVAILABLE', 'نوع این گزینه در دسترس نیست');
define ('_NOT_ITEMURLNOTAVAILABLE', 'آدرس گزینه در دسترس نیست');
define ('_NOT_DELETINGNOTIFICATIONS', 'پاک سازی آگهی ها');
define ('_NOT_DELETESUCCESS', 'آگهی‌ها با موفقیت پاک شد');
define ('_NOT_UPDATEOK', 'تنظیمات آگهی‌ها به روز شد');
define ('_NOT_NOTIFICATIONMETHODIS', 'روش آگهی');
define ('_NOT_EMAIL', 'پست‌الکترونیکی');
define ('_NOT_PM', 'پیام شخصی');
define ('_NOT_DISABLE', 'بسته‌شده');
define ('_NOT_CHANGE', 'تغییر');
define ('_NOT_NOACCESS', 'دسترسی شما به این صفحه بسته شده است');
// Text for module config options
define ('_NOT_ENABLE', 'باز کردن');
define ('_NOT_NOTIFICATION', 'آگهی‌رسانی');
define ('_NOT_CONFIG_ENABLED', 'فعال‌سازی آگهی‌رسانی');
define ('_NOT_CONFIG_ENABLEDDSC', 'این ماژول به کاربران امکان می‌دهد از رویدادهای سایت با خبر شوند، گزینه "بله" را برای فعال‌سازی این امکان انتخاب کنید');
define ('_NOT_CONFIG_EVENTS', 'فعال‌سازی رویداد‌های خاص');
define ('_NOT_CONFIG_EVENTSDSC', 'انتخاب کنید آگاهی از چه رویدادی برای کدام کاربران شما فعال باشد');
define ('_NOT_CONFIG_ENABLE', 'فعال‌سازی آگهی‌رسانی');
define ('_NOT_CONFIG_ENABLEDSC', 'این ماژول به کاربران امکان می‌دهد از رویدادهای سایت با خبر شوند، گزینه "بله" را برای فعال‌سازی این امکان انتخاب کنید');
define ('_NOT_CONFIG_DISABLE', 'غیر فعال‌کردن آگهی‌رسانی');
define ('_NOT_CONFIG_ENABLEBLOCK', 'فقط نوع بلوکی فعال شود');
define ('_NOT_CONFIG_ENABLEINLINE', 'فقط نوع خطی فعال شود');
define ('_NOT_CONFIG_ENABLEBOTH', 'هر دو نوع بلوکی و خطی فعال شود');
// For notification about comment events
define ('_NOT_COMMENT_NOTIFY', 'اضافه‌شدن نظر');
define ('_NOT_COMMENT_NOTIFYCAP', 'وقتی نظر جدیدی برای این موضوع داده شد مرا باخبر کن');
define ('_NOT_COMMENT_NOTIFYDSC', 'وقتی نظر جدیدی برای این موضوع داده شد به من ارسال کن');
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}  آگهی‌رسانی خودکار: نظر اضافه شده به{X_ITEM_TYPE}');
define ('_NOT_COMMENTSUBMIT_NOTIFY', 'نظر ثبت شد');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'وقتی نظر جدیدی برای این موضوع ثبت شد مرا باخبر کن');
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'وقتی نظر جدیدی برای این موضوع ثبت شد به من ارسال کن');
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} آگهی‌رسانی خودکار:نظرثبت شده برای {X_ITEM_TYPE}');
// For notification bookmark feature
// (Not really notification, but easy to do with this module)
define ('_NOT_BOOKMARK_NOTIFY', 'نشانه');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'این گزینه را نشان کن ولی آگاهی نده');
define ('_NOT_BOOKMARK_NOTIFYDSC', 'پیگیری این گزینه بدون دریافت آگهی رویداد');
// For user profile
// FIXME: These should be reworded a little...
define ('_NOT_NOTIFYMETHOD', 'روش اگهی‌: هنگامی که انجمنی را پیگیری می‌کنید به چه روشی می‌خواهید از رویدادهای آن با خبر شوید؟');
define ('_NOT_METHOD_EMAIL', 'پست الکترونیکی از آدرس وارد شده');
define ('_NOT_METHOD_PM', 'پیام‌شخصی');
define ('_NOT_METHOD_DISABLE', 'غیر‌فعال');
define ('_NOT_NOTIFYMODE', 'نوع آگهی از رویداد');
define ('_NOT_MODE_SENDALWAYS', 'آگهی از تمام رویدادهای انتخاب شده');
define ('_NOT_MODE_SENDONCE', 'یک بار آگهی بده');
define ('_NOT_MODE_SENDONCEPERLOGIN', 'یک بار آگهی بده و غیر فعال کن تا ورود بعدی من');
define ('_NOT_NOTHINGTODELETE', 'هیچ چیز برای حذف کردن وجود ندارد.');

?>