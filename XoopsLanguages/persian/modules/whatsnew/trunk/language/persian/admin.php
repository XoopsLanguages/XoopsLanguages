<?php
// $Id: admin.php,v 1.5 2005/10/22 08:35:42 ohwada Exp $

// 2005-10-01
// _WHATSNEW_CONFIG_BLOCK and more

// 2005-06-20
// _WHATSNEW_NEW_IMAGE_WIDTH

// 2005-06-14
// _WHATSNEW_MENU_RDF

// 2005-06-06
// _WHATSNEW_SYSTEM_COMMENT

//=========================================================
// What's New Module
// Language pack for English
// 2005-06-06 K.OHWADA
//=========================================================

// use $xoopsModule
//define("_WHATSNEW_NAME","What's New");

// use blocks.php
//define("_WHATSNEW_ADMIN_DESC","This module collecte all latest reports from two or more modules, and show it in one block, and show it RSS and ATOM format.");
//define("_WHATSNEW_MENU_CONFIG","Preferences");
//define("_WHATSNEW_MENU_PING","Send of weblog update ping");

define("_WHATSNEW_MENU_RSS","رفرش کردن RSS");
define("_WHATSNEW_MENU_ATOM","رفرش کردن ATOM");
define("_WHATSNEW_MENU_RDF","رفرش کردن RDF");
define("_WHATSNEW_GOTO_WHATNEW","برو به ماژول");

// config
define("_WHATSNEW_MID","شماره شناسه (ID)");
define("_WHATSNEW_MNAME","نام ماژول");
define("_WHATSNEW_MDIR","نام شاخه");
define("_WHATSNEW_NEW","بلاک موارد جدید");
define("_WHATSNEW_RSS","RSS / ATOM");
define("_WHATSNEW_ITEM","مورد");
define("_WHATSNEW_LIMIT_SHOW","تعداد موارد");
define("_WHATSNEW_LIMIT_SUMMARY","تعداد موارد نشان داده شده در هر ماژول");
define("_WHATSNEW_MAX_SUMMARY","بیشترین تعداد کاراکتر برای خلاصه");
define("_WHATSNEW_NEW_IMAGE","تصویر را نشان بده");
define("_WHATSNEW_NEW_PING","پینگ ارسال کن");

define("_WHATSNEW_SITE_NAME","نام سایت");
define("_WHATSNEW_SITE_NAME_DESC","مورد نیاز برای RSS/ATOM");
define("_WHATSNEW_SITE_URL","آدرس سایت");
define("_WHATSNEW_SITE_URL_DESC","مورد نیاز برای RSS/ATOM");
define("_WHATSNEW_SITE_DESC","شرح سایت");
define("_WHATSNEW_SITE_DESC_DESC","مورد نیاز برای RSS");
define("_WHATSNEW_SITE_AUTHOR","وب مستر");
define("_WHATSNEW_SITE_AUTHOR_DESC","مورد نیاز برای  ATOM");
define("_WHATSNEW_SITE_EMAIL","پست الکترونیکی وب مستر");
define("_WHATSNEW_SITE_EMAIL_DESC","گزینه برای RSS/ATOM");
define("_WHATSNEW_SITE_LOGO","لوگوی سایت");
define("_WHATSNEW_SITE_LOGO_DESC","گزینه برای RSS");

define("_WHATSNEW_PING_SERVERS","فهرست Ping servers");
define("_WHATSNEW_PING_PASS","پسورد برای update_ping.php");
define("_WHATSNEW_PING_LOG"," اطلاعات برای ارسال Ping ");

define("_WHATSNEW_SAVE","ذخیره");
define("_WHATSNEW_DELETE","حذف");
define("_WHATSNEW_CONFIG_SAVED","ویزگی ها در جدول ذخیره شدند");
define("_WHATSNEW_WARNING_NOT_WRITABLE","شاخه  cache قابل نوشتن نیست ");

// not use config file
//define("_WHATSNEW_CONFIG_DELETED","Deleted config file");
//define("_WHATSNEW_WARNING_NOT_EXIST","Not exist of config file");
//define("_WHATSNEW_ERROR_CONFIG","Error in config file");
//define("_WHATSNEW_ERROR_SITE_NAME","no site name");
//define("_WHATSNEW_ERROR_SITE_URL","No site url");
//define("_WHATSNEW_ERROR_SITE_DESC","No site description");
//define("_WHATSNEW_ERROR_SITE_AUTHOR","No webmaster");
//define("_WHATSNEW_ERROR_NEW_MAX_SUMMARY","Not correct of chars of summary in What's New Block");
//define("_WHATSNEW_ERROR_RSS_MAX_SUMMARY","Not correct chars of summary in RSS/ATOM");

// ping
define("_WHATSNEW_PING_DETAIL","نشان دادن جزییات");
define("_WHATSNEW_PING","فرستادن پینگ");
define("_WHATSNEW_PING_SENDED","پینگ فرستاده شد");

// 2005-06-06
define("_WHATSNEW_SYSTEM_COMMENT","نظرها");

// 2005-06-20
define("_WHATSNEW_NEW_IMAGE_WIDTH","حداکثر عرض تصویر");
define("_WHATSNEW_NEW_IMAGE_HEIGHT","حداکثر ارتفاع تصویر");
define("_WHATSNEW_NEW_IMAGE_SIZE_NOT_SAVE","حداکثر سایز برای تصاویر در نظر نگیر");
define("_WHATSNEW_VIEW_RSS","دیدن RSS برای خطا یابی");
define("_WHATSNEW_VIEW_RDF","دیدن RDF برای خطا یابی");
define("_WHATSNEW_VIEW_ATOM","دیدن ATOM برای خطا یابی");
define("_WHATSNEW_MENU_PDA","بازبینی تمپلیت PDA ");

// 2005-10-01
define("_WHATSNEW_SYSTEM_GROUPS","گروه های سیستم");
define("_WHATSNEW_SYSTEM_BLOCKS","بلاک های سیستم");
define("_WHATSNEW_VIEW_DOCS","راهنما");
define("_WHATSNEW_CONFIG_BLOCK","تنظیمات بلاک و RSS/ATOM ");
define("_WHATSNEW_CONFIG_MAIN","تنظیمات صفحه اصلی");
define("_WHATSNEW_CONFIG_SITE","تنظیمات اطلاعات سایت");
define("_WHATSNEW_CONFIG_PING","تنظیمات پینگ");
define("_WHATSNEW_GOTO_MENU_PING","بازگشت به ارسال پینگ");

// index
define("_WHATSNEW_INIT_NOT","جدول تنظیمات شناخته نشد");
define("_WHATSNEW_INIT_EXEC","جدول تنظیمات شناسایی شد");
define("_WHATSNEW_VERSION_NOT","نسخه پایگاه داده %s نیست");
define("_WHATSNEW_UPGRADE_EXEC","جدول تنظیمات به روز شد");
define("_WHATSNEW_NOTICE","توجه");
define("_WHATSNEW_NOTICE_PERM","کاربران مهمان دسترسی برای دیدن بلاک را ندارند<br />هیچ کس نمیتواند RSS or ATOM را بخواند");
define("_WHATSNEW_NOTICE_BOTH","پلاگین ها هم در داخل خود ماژول ها و هم در ماژول تازه ها قرار دارند<br />پلاگین های خود ماژول با اولیت اول استفاده میشود<br />نام شاخه ماژول های دارای پلاگین با رنگ <font color='red'>قرمز</font><br />مشخص شده است لطفا قدیمی ها را دیلیت کنید<br />");
define("_WHATSNEW_NOTE_RSS_MARK","علامت <b>#</b> در RSS/ATOM به این معنی است که مهمان ها دسترسی برای دیدن هر ماژولی را دارند<br />هر کسی که دسترسی برای دیدن ماژول تازه ها را داشته باشد میتواند RSS یا ATOM را هم بخواند<br />");
define("_WHATSNEW_ICON_LIST","فهرست آیکن ها");

// config item
define("_WHATSNEW_WEIGHT","وزن");
define("_WHATSNEW_MIN_SHOW","حداقل تعداد مواردی که از هر ماژول نشان داده میشود");
define("_WHATSNEW_BLOCK_ICON","آیکن پیشفرض");
define("_WHATSNEW_BLOCK_MODULE","نحوه چیدن موارد در ماژول ها");
define("_WHATSNEW_BLOCK_MODULE_0","آخرین موارد");
define("_WHATSNEW_BLOCK_MODULE_1","محتوا");
define("_WHATSNEW_BLOCK_SUMMARY_HTML","اجازه دادن HTML در خلاصه");
define("_WHATSNEW_BLOCK_MAX_TITLE","حداکثر تعداد کاراکتر در عنوان");
define("_WHATSNEW_SITE_TAG","علامت سایت");
define("_WHATSNEW_SITE_IMAGE_URL","آدرس لوگوی سایت");
define("_WHATSNEW_SITE_IMAGE_WIDTH","عرض لوگوی سایت");
define("_WHATSNEW_SITE_IMAGE_HEIGHT","ارتفاع لوگوی سایت");
define("_WHATSNEW_MAIN_TPL","تمپلیت صفحه اصلی");
define("_WHATSNEW_MAIN_TPL_0","به شکل ماژول تازه ها");
define("_WHATSNEW_MAIN_TPL_1","به شکل ماژول نظرها");

?>