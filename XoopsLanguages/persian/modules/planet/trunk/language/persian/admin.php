<?php
// $Id: admin.php,v 1.1.1.1 2005/11/14 00:33:50 phppp Exp $
// _LANGCODE: en
// _CHARSET : ISO-8859-1
// Translator: D.J., http://xoopsforge.com, http://xoops.org.cn

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["VAR_PREFIXU"]."_LANG_EN_ADMIN")) return; define($GLOBALS["VAR_PREFIXU"]."_LANG_EN_ADMIN",1);

define($GLOBALS["VAR_PREFIXU"]."_AM_ARTICLES","مدیریت مطالب");

define($GLOBALS["VAR_PREFIXU"]."_AM_TITLE","عنوان");
define($GLOBALS["VAR_PREFIXU"]."_AM_CATEGORY","شاخه");

//define($GLOBALS["VAR_PREFIXU"]."_AM_CATEGORIES","شاخه ها");
//define($GLOBALS["VAR_PREFIXU"]."_AM_ADDCATEGORY","اضافه کردن شاخه");

define($GLOBALS["VAR_PREFIXU"]."_AM_ARTICLE","مطلب");
define($GLOBALS["VAR_PREFIXU"]."_AM_ACTION","عملکرد");

define($GLOBALS["VAR_PREFIXU"]."_AM_PREFERENCES","ویژگی های ماژول");
define($GLOBALS["VAR_PREFIXU"]."_AM_ON","روشن");
define($GLOBALS["VAR_PREFIXU"]."_AM_OFF","خاموش");
define($GLOBALS["VAR_PREFIXU"]."_AM_SAFEMODE","حالت امن");
define($GLOBALS["VAR_PREFIXU"]."_AM_REGISTERGLOBALS","register_globals");
define($GLOBALS["VAR_PREFIXU"]."_AM_MAGICQUOTESGPC","magic_quotes_gpc");
define($GLOBALS["VAR_PREFIXU"]."_AM_MAXPOSTSIZE","post_max_size");
define($GLOBALS["VAR_PREFIXU"]."_AM_MAXINPUTTIME","max_input_time");
define($GLOBALS["VAR_PREFIXU"]."_AM_OUTPUTBUFFERING","output_buffering");

define($GLOBALS["VAR_PREFIXU"]."_AM_XML_EXTENSION","xml");
define($GLOBALS["VAR_PREFIXU"]."_AM_MB_EXTENSION","mbstring");
define($GLOBALS["VAR_PREFIXU"]."_AM_CURL","curl_init");
define($GLOBALS["VAR_PREFIXU"]."_AM_FSOCKOPEN","fsockopen");
define($GLOBALS["VAR_PREFIXU"]."_AM_URLFOPEN","allow_url_fopen");

define($GLOBALS["VAR_PREFIXU"]."_AM_STATS","آمار ماژول");
define($GLOBALS["VAR_PREFIXU"]."_AM_TOTAL_CATEGORIES","مجموع شاخه ها");
define($GLOBALS["VAR_PREFIXU"]."_AM_TOTAL_BLOGS","مجموع وبلاگ ها");
define($GLOBALS["VAR_PREFIXU"]."_AM_TOTAL_ARTICLES","مجموع مطالب");

define($GLOBALS["VAR_PREFIXU"]."_AM_DBUPDATED","پایگاه داده ها به روز شد");
define($GLOBALS["VAR_PREFIXU"]."_AM_ERROR","خطا");

define($GLOBALS["VAR_PREFIXU"]."_AM_COUNT","تعداد");
define($GLOBALS["VAR_PREFIXU"]."_AM_ORDER","وزن چینش");
define($GLOBALS["VAR_PREFIXU"]."_AM_LIST","لیست");
define($GLOBALS["VAR_PREFIXU"]."_AM_BLOGCOUNT","وبلاگ ها");
define($GLOBALS["VAR_PREFIXU"]."_AM_ARTICLECOUNT","مطالب");

define($GLOBALS["VAR_PREFIXU"]."_AM_EXPIRED","منقضی شده");
define($GLOBALS["VAR_PREFIXU"]."_AM_PENDING","منتظر برای تایید");
define($GLOBALS["VAR_PREFIXU"]."_AM_STATUS","وضعیت");
define($GLOBALS["VAR_PREFIXU"]."_AM_FEED","خوراک");

define($GLOBALS["VAR_PREFIXU"]."_AM_REGISTER","ثبت");
define($GLOBALS["VAR_PREFIXU"]."_AM_APPROVE","تایید کردن");
define($GLOBALS["VAR_PREFIXU"]."_AM_FEATURE","خصوصیات");
define($GLOBALS["VAR_PREFIXU"]."_AM_UPDATE","به روز کردن");
define($GLOBALS["VAR_PREFIXU"]."_AM_REMOVE","حذف");

define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_RELEASEDATE","زمان انتشار");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_AUTHOR","سازنده");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_CREDITS","اعتبار");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_LICENSE","مجوز انتشار");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_WEBSITE","صفحه اول");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_MODULE_INFO","اطلاعات ماژول");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_MODULE_STATUS","وضعیت");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_MODULE_TEAM","اعضای گروه");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_INFO","اطلاعات سازنده");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_NAME","نام سازنده");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_WORD","سخن سازندگان");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_DISCLAIMER","رفع مسئولیت");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_DISCLAIMER_TEXT","لایسنس GPL");
define($GLOBALS["VAR_PREFIXU"]."_AM_ABOUT_CHANGELOG","گزارش تغییرات");

define($GLOBALS["VAR_PREFIXU"]."_AM_BLOGEXISTS","وبلاگ این خوراک موجود است.");
?>