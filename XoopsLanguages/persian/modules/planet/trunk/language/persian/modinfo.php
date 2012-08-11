<?php
// $Id: modinfo.php,v 1.1.1.1 2005/11/14 00:33:51 phppp Exp $
// _LANGCODE: en
// _CHARSET : ISO-8859-1
// Translator: D.J., http://xoopsforge.com, http://xoops.org.cn

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["VAR_PREFIXU"]."_LANG_EN_MODINFO")) return; define($GLOBALS["VAR_PREFIXU"]."_LANG_EN_MODINFO",1);

define($GLOBALS["VAR_PREFIXU"]."_MI_NAME","سیاره");
define($GLOBALS["VAR_PREFIXU"]."_MI_DESC","خوراک سیاره برای زوپس !!");

define($GLOBALS["VAR_PREFIXU"]."_MI_PAGE_INDEX","صفحه اصلی");
define($GLOBALS["VAR_PREFIXU"]."_MI_PAGE_ARTICLE","مطالب");
define($GLOBALS["VAR_PREFIXU"]."_MI_PAGE_ARCHIVE","آرشیو");
define($GLOBALS["VAR_PREFIXU"]."_MI_PAGE_LIST","لیست");

define($GLOBALS["VAR_PREFIXU"]."_MI_SUBMIT","ارسال");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE","مطالب");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_DESC","");
define($GLOBALS["VAR_PREFIXU"]."_MI_CATEGORY","شاخه ها");
define($GLOBALS["VAR_PREFIXU"]."_MI_CATEGORY_DESC","");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG","بلاگ ها");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_THEMESET","انتخاب قالب");
define($GLOBALS["VAR_PREFIXU"]."_MI_THEMESET_DESC","Module-wide, select '"._NONE."' will use site-wide theme");

define($GLOBALS["VAR_PREFIXU"]."_MI_TIMEFORMAT","شکل نمایش تاریخ");
define($GLOBALS["VAR_PREFIXU"]."_MI_TIMEFORMAT_DESC","");
define($GLOBALS["VAR_PREFIXU"]."_MI_TIMEFORMAT_CUSTOM","عادی");

define($GLOBALS["VAR_PREFIXU"]."_MI_DISPLAY_SUMMARY","طول متن خلاصه که درلیست مطالب نمایش داده میشود");
define($GLOBALS["VAR_PREFIXU"]."_MI_DISPLAY_SUMMARY_DESC","0 برای متن کامل");

define($GLOBALS["VAR_PREFIXU"]."_MI_DODEBUG","فعال کردن خطا گیری");
define($GLOBALS["VAR_PREFIXU"]."_MI_DODEBUG_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_DOURLREWRITE","فعال سازی دوباره نویسی در URL");
define($GLOBALS["VAR_PREFIXU"]."_MI_DOURLREWRITE_DESC","برای فعال سازی این قابلیت نسخه 2 آپاچی لازم است");

define($GLOBALS["VAR_PREFIXU"]."_MI_DOSIBLING","فعال کردن مطالب هم نیاز");
define($GLOBALS["VAR_PREFIXU"]."_MI_DOSIBLING_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLESPERPAGE","مطالب نمایش داده شده در هر صفحه");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLESPERPAGE_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_LISTPERPAGE","تعداد لیست های هر صفحه");
define($GLOBALS["VAR_PREFIXU"]."_MI_LISTPERPAGE_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_BLOGSPERUPDATE","وبلاگ های هر به روز رسانی");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOGSPERUPDATE_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_EXPIRE","زمان منقضی شدن هر مطلب");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_EXPIRE_DESC","بر اساس روز");

define($GLOBALS["VAR_PREFIXU"]."_MI_COPYRIGHT","کپی رایت");
define($GLOBALS["VAR_PREFIXU"]."_MI_COPYRIGHT_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_PING","پینگ");
define($GLOBALS["VAR_PREFIXU"]."_MI_PING_DESC","URL های که پینگ میشوند");

define($GLOBALS["VAR_PREFIXU"]."_MI_TRACKBACK_OPTION","گزینه های مربوط به تریبک های دریافت شده");
define($GLOBALS["VAR_PREFIXU"]."_MI_TRACKBACK_OPTION_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_MODERATION","با تایید مدیر");
define($GLOBALS["VAR_PREFIXU"]."_MI_MEMBER","کاربر- تایید خودکار");

define($GLOBALS["VAR_PREFIXU"]."_MI_NEWBLOG_SUBMIT","اجازه ارسال وبلاگ جدید");
define($GLOBALS["VAR_PREFIXU"]."_MI_NEWBLOG_SUBMIT_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_ANONYMOUSRATE","اجازه به همه برای رای دادن");
define($GLOBALS["VAR_PREFIXU"]."_MI_ANONYMOUSRATE_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_PSEUDOCRON","cron ساختگی");
define($GLOBALS["VAR_PREFIXU"]."_MI_PSEUDOCRON_DESC","استفاده از cron ساختگی برای به روز رسانی وبلاگ ها");

define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_INDEX","صفحه اصلی");
define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_CATEGORY","شاخه ها");
define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_BLOG","وبلاگ ها");
define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_ARTICLE","مطالب");
define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_BLOCK","بلاک ها");
define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_ABOUT","درباره");

define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NOTIFY","سراسری");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NOTIFYDSC","گزینه های اطلاع رسانی سراسری");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_NOTIFY","وبلاگ");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_NOTIFYDSC","گزینه های آگاهی رسانی وبلاگ");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_NOTIFY","مطالب");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_NOTIFYDSC","گزینه های آگاهی رسانی مطالب");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_BLOGSUBMIT_NOTIFY","ارسال مطلب");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_BLOGSUBMIT_NOTIFYCAP","برای هر وبلاگ منتظر تایید من را آگاه کن");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_BLOGSUBMIT_NOTIFYDSC","دریافت آگاهی وقتی یک وبلاگ جدید ارسال شد");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_BLOGSUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگاهی رسانی خودکار : ارسال وبلاگ جدید");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NEWBLOG_NOTIFY","وبلاگ جدید");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NEWBLOG_NOTIFYCAP","وقتی وبلاگ جدیدی منتشر شد من را آگاه کن");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NEWBLOG_NOTIFYDSC","دریافت آگاهی وقتی که یک وبلاگ جدید منتشر شد");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NEWBLOG_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگاهی رسانی خودکار : انتشار وبلاگ جدید");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFY","نمایش مطلب");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYCAP","من را برای تمام اعمال انجام شده بر روی مطالب آگاه کن");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYDSC","دریافت آگاهی زمانی که هر نوع عملی بر روی مطالب من انجام شد");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگاهی رسانی خودکار : عمل جدید");

define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGAPPROVE_NOTIFY","تایید وبلاگ");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGAPPROVE_NOTIFYCAP","وقتی این وبلاگ تایید شد من را آگاه کن");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGAPPROVE_NOTIFYDSC","دریافت آگاهی وقتی این وبلاگ تایید شد");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGAPPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگاهی رسانی خودکار : تایید وبلاگ");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGUPDATE_NOTIFY","به روز شدن وبلاگ");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGUPDATE_NOTIFYCAP","وقتی این وبلاگ به روز شد من را آگاه کن");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGUPDATE_NOTIFYDSC","دریافت آگاهی وقتی که این وبلاگ به روز شد");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGUPDATE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگاهی رسانی خودکار : به روز شدن وبلاگ جدید");

define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFY","نمایش مطلب");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYCAP","وقتی هر عملی بر روی این مطلب انجام شد من را آگاه کن");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYDSC","ارسال آگاهی وقتی که هر عملی بر روی این مطلب انجام شد");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگاهی رسانی خودکار : انتشار مطلب جدید");
?>