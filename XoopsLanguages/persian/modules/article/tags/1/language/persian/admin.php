<?php
// $Id: admin.php,v 1.1.1.1 2005/11/10 19:51:18 phppp Exp $
// _LANGCODE: en
// _CHARSET : ISO-8859-1
// Translator: D.J., http://xoopsforge.com, http://xoops.org.cn

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["ART_VAR_PREFIXU"]."_LANG_FA_ADMIN")) return; define($GLOBALS["ART_VAR_PREFIXU"]."_LANG_FA_ADMIN",1);

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ARTICLES","مدیریت مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_APPROVEARTICLE","تایید مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPARTICLE","صفحه کنترل مقاله ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT","مدیریت اسپات لایت");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_LATEST","از آخرین مقاله قرار گرفته در سایت استفاده شود؟");;
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_CURRENT","اسپات لایت فعلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_CATEGORIES","شاخه‌هایی که در آنها اسپات لایت نمایش داده می‌شود");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_UPLOAD","بارگذاری تصویر");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_SELECT","انتخاب تصویر");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_CHOOSE","انتخاب یک مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_OPTION","گزینه‌های اسپات لایت");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_LASTARTICLE","از آخرین مقاله قرار گرفته در سایت استفاده شود");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_LASTFEATURE","از آخرین مقاله برجسته قرار گرفته در سایت استفاده شود");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_SPECIFIED","از یک مقاله که در زیر مشخص شده استفاده شود");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_NOTE","یادداشتی که در اسپات لایت نمایش داده می‌شود");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TITLE","عنوان");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CATEGORY","شاخه");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTIT","انتخاب");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SUBMITTED","مقاله های ارسال شده");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CATEGORIES","شاخه‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPCATEGORY","صفحه کنترل شاخه‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ADDCATEGORY","اضافه کردن یک شاخه");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILES","مدیریت فایل‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILES_ALL","همه");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILES_ORPHAN","Orphan");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILENAME","Filename");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ARTICLE","Article");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_LOST","Lost");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ORPHAN","Orphan");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ACTION","Action");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION","مدیریت دسترسی‌ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_ACCESS","دستیابی");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_ACCESS_DESC","\"دستیابی داشتن\" به یک شاخه وابسته به دستیابی به شاخه والد آن شاخه است");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_VIEW","دیدن");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_VIEW_DESC","فرق بین دیدن و دستیابی در این است که اگر شما دستیابی داشته باشید فقط صفحه اول را می‌بینید ولی اگر دیدن داشته باشید تمام صفحه آن شاخه را می‌بینید ");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_SUBMIT","ارسال");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_SUBMIT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_PUBLISH","قرار گرفتن در سایت");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_PUBLISH_DEC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_RATE","امتیاز‌دهی");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_RATE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_MODERATE","نظارت کردن");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_MODERATE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_GLOBAL","کلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_GLOBAL_DESC","در سراسر ماژول");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_SEARCH","جستجو");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_HTML","استفاده از HTML");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_UPLOAD","بارگذاری");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_DESC", 
	"دسترسی‌های قابل واگذاری به شاخه‌ها: ".
	art_constant("AM_PERM_ACCESS").",".
	art_constant("AM_PERM_VIEW").",".
	art_constant("AM_PERM_SUBMIT").",".
	art_constant("AM_PERM_RATE").",".
	art_constant("AM_PERM_MODERATE")."<br />". 
	"دسترسی‌های کلی: ".
	art_constant("AM_PERM_SEARCH").",".
	art_constant("AM_PERM_HTML").",".
	art_constant("AM_PERM_UPLOAD")
);

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE","تنظیم یک الگوی دسترسی پیشفرض");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_DESC","با ویرایش‌کردن الگوی دسترسی‌ها می‌توانید بعدا از آن در اعمال دسترسی به یک شاخه یا چند شاخه استفاده کنید");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_CREATED","الگوی دسترسی ساخته شد");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_ERROR","در هنگام ایجاد الگوی دسترسی خطا رخ داد");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_APPLY","اعمال دسترسی‌های پیش فرض");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_APPLIED","دسترسی‌های پیشفرض به شاخه‌ها اعمال می‌شود");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_ACTION","امکانات مدیریت دسترسی‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_SETBYGROUP","قرار دادن دسترسی‌ها به طور مستقیم برای هر گروه");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PAGENAME","صفحه");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOPICS","مدیریت سر فصل‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPTOPIC","صفحه کنترل سر فصل‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ADDTOPIC","اضافه کردن سر فصل");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TRACKBACKS","مدیریت ترک‌بک‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPTRACKBACK","صفحه کنترل ترک‌بک‌ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PREFERENCES","ویژگی‌های ماژول");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ON","روشن");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_OFF","خاموش");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SAFEMODE","safemod");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_REGISTERGLOBALS","register_globals");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MAGICQUOTESGPC","magic_quotes_gpc");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ZLIBCOMPRESSION","output_compression");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MEMORYLIMIT","memory_limit");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MAXPOSTSIZE","حداکثر اندازه پست ارسال شده");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MAXINPUTTIME","حداکثر زمان مجاز ارسال یک پست بر حسب دقیقه");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_OUTPUTBUFFERING","output_buffering");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_XML_EXTENSION","xml");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MB_EXTENSION","mbstring");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CURL","curl_init");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FSOCKOPEN","fsockopen");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_URLFOPEN","allow_url_fopen");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PATH_IMAGE","مسیر تصاویر");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PATH_FILE","مسیر فایل‌ها");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PATH_HTML","HTMLs path");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILE_PERMDATA","Permission file");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_STATS","آمار ماژول");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_CATEGORIES","همه شاخه‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_TOPICS","همه سرفصل‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_ARTICLES","همه مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_AUTHORS","همه نویسندگان");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_VIEWS","همه بازدید‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_RATES","همه رای ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_AVAILABLE","قابل استفاده");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_NOTAVAILABLE","غیر قابل استفاده");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CREATETHEDIR","ساختن پوشه");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_NOTWRITABLE","قابل نوشتن نیست");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SETMPERM","قرار دادن دسترسی");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_DBUPDATED","پایگاه‌داده به روز شد");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_CAPTION","شرح تصویر");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_CURRENT","تصویر فعلی");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_RELEASEDATE","تاریخ انتشار ماژول");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR","سازنده ماژول");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_CREDITS","اعتبارات");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_LICENSE","لیسانس");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_WEBSITE","صفحه اول");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_MODULE_INFO","اطلاعات ماژول");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_MODULE_STATUS","وضعیت ماژول");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_MODULE_TEAM","اعضای تیم");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_INFO","اطلاعات سازنده ماژول");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_NAME","نام سازنده ماژول");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_WORD","سخن سازنده");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_DISCLAIMER","شرایط");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_DISCLAIMER_TEXT","GPL-licensed");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_CHANGELOG","تغییرات");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_HELP","متن برای کمک به استفاده‌کنندگان");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_TITLE","هم‌زمان‌کردن");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_SYNCING","هم‌زمان‌کردن در حال پیشرفت");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_CATEGORY","شاخه");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_ARTICLE","مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_MISC","اعداد پیشفرض را قرار بده");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_ITEMS","تعداد موارد برای هر بار تکرار: ");
?>
