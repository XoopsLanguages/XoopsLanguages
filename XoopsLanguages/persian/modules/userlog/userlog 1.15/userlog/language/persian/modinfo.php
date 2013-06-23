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
 *  userlog module
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         userlog language
 * @since           1
 * @author          irmtfan (irmtfan@yahoo.com)
 * @author          The XOOPS Project <www.xoops.org> <www.xoops.ir>
 * @version         $Id: modinfo.php 1 2013-02-26 16:25:04Z irmtfan $
 */

// The name of this module
define("_MI_USERLOG_NAME","ثبت فعالیت های کاربران");
// A brief description of this module
define("_MI_USERLOG_DSC","برای ثبت فعالیت های کاربران ومواردی که بازدید میکنند.");

// configs
// config status
define("_MI_USERLOG_STATUS","وضعیت ثبت:");
define("_MI_USERLOG_STATUS_DSC","فعال: ماژول در حال انجام ثبت است. توقف:ماژول ثبتی انجحام نمیدهد");
define("_MI_USERLOG_ACTIVE","فعال");
define("_MI_USERLOG_IDLE","توقف");
define("_MI_USERLOG_POSTLOG","هر متد POST را ثبت کند؟");
define("_MI_USERLOG_POSTLOG_DSC","در بعضی از موقعیت های نادر (مانند: ارسال پی ام، فرم های دست ساز، هک ها، برخی ماژول های پورت شده مثل مدیا ویکی و ...)، وقتی کاربر روی دکمه ارسال میزند هیچ پیامی دریافت نمیکند. اگر میخواهید این مواقع ثبت شوند روی بله قرار دهید.");

// config categories
define("_MI_USERLOG_CONFCAT_LOGFILE","تنظیمات ذخیره در فایل");
define("_MI_USERLOG_CONFCAT_LOGFILE_DSC","ذخیره در فایل (اگر میخواهید ثبت شده ها را در فایل ذخیره کنید تنظیمات زیر را به دلخواه خود تغییر دهید وگرنه اهمیت ندهید)");
define("_MI_USERLOG_CONFCAT_FORMAT","فرمت");
define("_MI_USERLOG_CONFCAT_FORMAT_DSC","تنظیمات فرمت");
define("_MI_USERLOG_CONFCAT_PAGENAV","مرور صفحه");
define("_MI_USERLOG_CONFCAT_PAGENAV_DSC","تنظیمات مرور صفحه");
define("_MI_USERLOG_CONFCAT_LOGDB","تنظیمات ذخیره در پایگاه داده");
define("_MI_USERLOG_CONFCAT_LOGDB_DSC","ذخیره در پایگاه داده (اگر میخواهید ثبت شده ها را در پایگاه داده ذخیره کنید تنظیمات زیر را به دلخواه خود تغییر دهید وگرنه اهمیت ندهید)");
define("_MI_USERLOG_CONFCAT_PROB","تنظیمات برای احتمالات");
define("_MI_USERLOG_CONFCAT_PROB_DSC","احتمال برای دسترسی به پایگاه داده.(این اعداد برای سایت هایی با ترافیک بالا مناسب هستند. مثلا: بیشتر از سی هزار بازدید در روز)");

// config logfile
define("_MI_USERLOG_MAXLOGFILESIZE","بیشترین اندازه فایل در حال کار (به بایت)");
define("_MI_USERLOG_MAXLOGFILESIZE_DSC","توصیه: روی کمتر از یک مگابایت بگذارید تا بتوانید از هر جایی مثلا از سی پنل مستقیم فایل ها را بخوانید.");
define("_MI_USERLOG_LOGFILEPATH","شاخه فایل ها");
define("_MI_USERLOG_LOGFILEPATH_DSC","توصیه: شاخه خارج از روت مناسب است چون هر کسی نمیتواند از بروزر خود فایل را بخواند");
define("_MI_USERLOG_LOGFILENAME","نام فایل در حال کار");
define("_MI_USERLOG_LOGFILENAME_DSC","فایل های قدیمیتر با این پیشوند ذخیره میشوند: Log_file_name_date('Y-m-d_H-i-s').log");
// config format
define("_MI_USERLOG_DATEFORMAT","فرمت تاریخ/زمان");
define("_MI_USERLOG_DATEFORMAT_DSC","اگر خالی بگذارید این ماژول از فرمت هسته زوپس استفاده میکند");
define("_MI_USERLOG_DATEFORMAT_HISTORY","فرمت تاریخ زمان برای زمانه های تاریخچه ای: مثال: 1 ساعت پیش");

// config pagenav
define("_MI_USERLOG_SETS_PERPAGE","تعداد تنظیم در صفحه");
define("_MI_USERLOG_SETS_PERPAGE_DSC","عدد پیش فرض برای نمایش تعداد تنظیم در هر صفحه");
define("_MI_USERLOG_LOGS_PERPAGE","تعداد ثبت شده در هر صفحه");
define("_MI_USERLOG_LOGS_PERPAGE_DSC","عدد پیش فرض برای نمایش تعداد ثبت شده در هر صفحه");
define("_MI_USERLOG_ENGINE","محل خواندن از ذخیره پیش فرض را انتخاب کنید");
define("_MI_USERLOG_ENGINE_DSC","این محل پیش فرض در صفحه مرور ثبت شده ها برای خواندن ثبت شده مورد استفاده قرار میگیرد.");
define("_MI_USERLOG_FILE","فایل یا فایل های پیش فرض برای خواندن را انتخاب کنید");
define("_MI_USERLOG_FILE_DSC","فایل پیش فرض برای خواندن در صفحه مرور ثبت شده ها.");

// config logdb
define("_MI_USERLOG_MAXLOGS","حداکثر تعداد ثبت شده در پایگاه داده");
define("_MI_USERLOG_MAXLOGS_DSC","حداکثر تعدادی از رکورد که در پایگاه داده وجود خواهد داشت. بعد از این تعداد رکورد ها حذف میشوند.");
define("_MI_USERLOG_MAXLOGSPERIOD","حداکثر زمانی که رکورد ها در پایگاه داده وجود خواهند داشت. 0 = برای همیشه بمانند");
define("_MI_USERLOG_MAXLOGSPERIOD_DSC","ثبت شده های قدیمیتر از این زمان از پایگاه داده حذف خواهند شد. اعداد مثبت را برای روز ها و اعداد منفی را برای ساعت ها وارد کنید. توصیه: یک عدد بزرگ انتخاب کنید");
// config probability
define("_MI_USERLOG_PROBSET","احتمال برای دسترسی به پایگاه داده و چک کردن وجود یک تنظیم برای ثبت");
define("_MI_USERLOG_PROBSET_DSC","درصد احتمال برای چک کردن پایگاه داده و گشتن به دنبال یک تنظیم برای ثبت برای یک کاربر فقط وقتی که فایل کش شده تنظیم وجود نداشته باشد. 20 یعنی در هر 5 کلیک یکبار چک خواهد کرد.");
define("_MI_USERLOG_PROBSTATS","احتمال به روز کردن آمار در پایگاه داده وقتی کاربر فعلی ثبت میشود.");
define("_MI_USERLOG_PROBSTATS_DSC","درصد احتمال برای به روز کردن آمار ثبت شده در پایگاه داده. 10 یعنی از هر 10 کلیک کاربری که دارد ثبت میشود یکبار آمار به روز میشوند. 0 یعنی به روز نشود در نتیجه شما باید با رفتن به ماژول ثبت وقایع > مدیریت > صفحه اصلی به طور دستی آمار را به روز کنید.");
define("_MI_USERLOG_PROBSTATSALLHIT","احتمال به روز کردن آمار در پایگاه داده با هر کلیک.");
define("_MI_USERLOG_PROBSTATSALLHIT_DSC","درصد احتمال برای به روز کردن آمار ثبت شده در پایگاه داده. 1 یعنی از هر 100 کلیک یکبار آمار به روز میشوند. 0 یعنی به روز نشود در نتیجه شما باید با رفتن به ماژول ثبت وقایع > مدیریت > صفحه اصلی به طور دستی آمار را به روز کنید. توصیه: یک عدد کوچک را انتخاب کنید.");

// blocks
define("_MI_USERLOG_BLOCK_VIEWS","بازدید ها در کل سایت");
define("_MI_USERLOG_BLOCK_VIEWS_DSC","نمایش بازدید از موارد انتخابی در سایت");

// webmaster permission
define("_MI_USERLOG_WEBMASTER_NOPERM","شما یکی از وبمستر ها هستید ولی به این ماژول دسترسی ندارید. لطفا با یکی از وبمستر ها با شماره یوزر %1\$s یا وبمستر های مربوط به شماره گروه های %2\$s تماس بگیرید و از آنها اطلاعات بیشتر را جویا شوید.");