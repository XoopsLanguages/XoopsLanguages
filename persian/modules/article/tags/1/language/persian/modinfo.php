<?php
// $Id: modinfo.php,v 1.1.1.1 2005/11/10 19:51:19 phppp Exp $
// _LANGCODE: en
// _CHARSET : ISO-8859-1
// Translator: D.J., http://xoopsforge.com, http://xoops.org.cn

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["ART_VAR_PREFIXU"]."_LANG_FA_MODINFO")) return; define($GLOBALS["ART_VAR_PREFIXU"]."_LANG_FA_MODINFO",1);

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_NAME","مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DESC","ماژولی برای مدیریت بسیار پیشرفته مقاله ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_INDEX","صفحه اصلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_ARTICLE","مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_CATEGORY","شاخه‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_TOPIC","سرفصل‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_AUTHOR","نویسندگان");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_KEYWORD","کلمات کلیدی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_BLOCKS","بلاک‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_ARCHIVE","آرشیو");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_LIST","فهرست مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_SEARCH","جستجو");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_MYPAGE","صفحه من");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_TAGS","فهرست کلمات کلیدی");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SUBMIT","ارسال");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPOTLIGHT","اسپات لایت");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPOTLIGHT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE","مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY","شاخه‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC","سرفصل‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_AUTHOR","نویسندگان");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_AUTHOR_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_BLOCK_RECENTNEWS","خبر‌های جدید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_BLOCK_TAG_CLOUD","ابر برچسب‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_BLOCK_TAG_TOP","بهترین برچسب‌ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TIMEFORMAT","قالب زمان برای نمایش");
load_functions("locale");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TIMEFORMAT_DESC", XoopsLocal::getTimeFormatDesc());

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TIMEFORMAT_CUSTOM","دلخواه به صورت دستی");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_MODULE","تنطیمات کلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_MODULE_DESC","ویژگی‌های کلی ماژول");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_ARTICLE","تنظیمات مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_ARTICLE_DESC","تنظیماتی که فقط به مقاله ها مربوط می‌شوند");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_THEMESET","قرار دادن تم");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_THEMESET_DESC","قرار دادن تم خاصی برای ماژول ، اگر '"._NONE."' را انتخاب کنید همان تمی که برای کل سایت استفاده شده است استفاده خواهد شد.");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISPLAY_SUMMARY","نمایش خلاصه در بخش فهرست مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISPLAY_SUMMARY_DESC","در صفحه اصلی، شاخه‌ها و سرفصل‌ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FORUM","انجمن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FORUM_DESC","انجمنی که برای بحث بیشتر مورد استفاده قرار می‌گیرد");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLFORUM","آدرس اینترنتی انجمن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLFORUM_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLBLOG","آدرس اینترنتی بلاگ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLBLOG_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFORMADVANCE","به طور پیش فرض از ویرایشگر پیشرفته استفاده شود");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFORMADVANCE_DESC","برای ویرایش مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSPOTLIGHT","فعال‌کردن اسپات لایت");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSPOTLIGHT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOREALNAME","استفاده از نام واقعی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOREALNAME_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACK","فعال‌کردن ترک‌بک");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACK_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACKUTF8","استفاده از  UTF-8 برای ترک‌بک");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACKUTF8_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOAPISTATS","فعال‌کردن بخش آمار برای مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOAPISTATS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOIMAGEUPLOAD","فعال‌کردن امکان بارگذاری فایل");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOIMAGEUPLOAD_DESC","برای هر مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORSSUTF8","استفاده از UTF-8 برای XML");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORSSUTF8_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DODEBUG","فعال‌کردن دیباگ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DODEBUG_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOURLREWRITE","فعال‌کردن URL rewrite");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOURLREWRITE_DESC"," روشن بودن AcceptPathInfo برای Apache2 لازم است");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOCOUNTER","فعال‌کردن شمارشگر بازدید برای مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOCOUNTER_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOPINGBACK","فعال‌کردن pingback");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOPINGBACK_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSIBLING","فعال‌کردن مقاله ها sibling");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSIBLING_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSUBTITLE","فعال‌کردن زیر عنوان برای مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSUBTITLE_DESC","در هر صفحه از مقاله می‌توان یک زیر عنوان داشت");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOHEADING","فعال‌کردن مفسر سر صفحه و نمایش سر صفحه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOHEADING_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFOOTNOTE","فعال‌کردن مفسر یادداشت ته صفحه و نمایش یادداشت ته صفحه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFOOTNOTE_DESC","footnote = یادداشت ته صفحه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORATE","فعال کردن امکان امتیازدهی به مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORATE_DESC","اگر این گزینه را فعال کرده‌اید باید دسترسی لازم را برای هر گروهی که خواستید در قسمت دسترسی‌های ماژول تنظیم کنید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOKEYWORDS","فعال‌کردن لایت شدن کلمات کلیدی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOKEYWORDS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SIBLINGLENGTH","طول عنوان Sibling");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SIBLINGLENGTH_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_KEYWORDS","کلمات کلیدی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_KEYWORDS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COUNTINGSUBCATEGORY","شمارشگر زیر شاخه‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COUNTINGSUBCATEGORY_DESC","برای شمارش مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLESPERPAGE","مقاله ها در یک صفحه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLESPERPAGE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLES_INDEX","مقاله ها در صفحه اصلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLESINDEX_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATURED_INDEX","مقاله ها برجسته در صفحه اصلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATUREDINDEX_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLES_CATEGORY","مقاله ها مربوط به یک شاخه در صفحه همان شاخه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLES_CATEGORY_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATURED_CATEGORY","مقاله ها برجسته در صفحه شاخه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATURED_CATEGORY_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_LENGTHEXCERPT","طول انتخابی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_LENGTHEXCERPT_DESC","اگر \"خلاصه مقاله\" نوشته نشده نباشد، این عدد طولی از ابتدای مقاله را که به جای خلاصه مورد استفاده قرار می‌گیرد را مشخص می‌کند");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_EXPIRE","منقضی شدن مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_EXPIRE_DESC","روزهایی که مقاله ها قبل از اینکه ارسال شوند منقضی می‌شوند");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_EXPIRE","تعداد روزها برای منقضی شدن سرفصل‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_EXPIRE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_MAX","حداکثر تعداد سرفصل‌های فعال");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_MAX_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TEMPLATE","قالب");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TEMPLATE_DESC","template");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISCLAIMER","شرایط");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISCLAIMER_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISCLAIMER_TEXT","استفاده از مطلب ارسالی شما بعد از ارسال همگانی بوده و کپی رایت آن  به ".$GLOBALS["xoopsConfig"]["sitename"]." تعلق دارد.");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPONSOR","حامیان");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPONSOR_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PING","Pings");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PING_DESC","URLs to ping");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHCACHE","مسیر برای فایل‌های کش شده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHCACHE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHFILE","مسیر برای بارگذاری فایل‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHFILE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHIMAGE","مسیر برای بارگذاری تصاویر ماژول");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHIMAGE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHHTML","مسیر برای بارگذاری فایل‌های HTML");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHHTML_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SINCE_OPTIONS","Since options");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SINCE_OPTIONS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_EDITORS","ویرایشگرها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_EDITORS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COPYRIGHT","حق کپی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COPYRIGHT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_HEADER","سر صفحه اصلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_HEADER_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TRACKBACK_OPTION","با ترک‌بک‌های رسیده چه برخوردی شود؟");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TRACKBACK_OPTION_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_MODERATION","نظارت");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_INDEX","صفحه اصلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_CATEGORY","شاخه‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_TOPIC","سرفصل‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_ARTICLE","مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_PERMISSION","دسترسی‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_BLOCK","بلاک‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_SPOTLIGHT","اسپات لایت");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_TEMPLATE","الگو ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_TRACKBACK","ترک‌بک");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_FILE","فایل");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_UTILITY","ابزارها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_ABOUT","درباره این ماژول");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NOTIFY","کلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NOTIFYDSC","آگهی‌رسانی کلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NOTIFY","شاخه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NOTIFYDSC","گزینه‌های آگهی‌رسانی مربوط به شاخه فعال");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_NOTIFY","مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_NOTIFYDSC","گزینه‌های آگهی‌رسانی مربوط به مقاله فعال");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFY","ارسال مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFYCAP","هر مقاله جدیدی ارسال شد مرا با خبر کن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFYDSC","Receive notification when a new article is submitted");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگهی‌رسانی خودکار: مقاله ارسال شده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFY","مقاله جدید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFYCAP","هر مقاله جدیدی در سایت قرار گرفت مرا با خبر کن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFYDSC","Receive notification when a new article is published");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگهی‌رسانی خودکار: مقاله جدید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFY","زیر نظر گرفتن مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYCAP","هر عملیاتی روی مقاله های من انجام شد مرا با خبر کن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYDSC","Receive notification when an action is taken over my articles");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگهی‌رسانی خودکار: یک عمل جدید روی مقاله شما انجام شده است");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFY","نظارت بر ترک‌بک‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFYCAP","مرا از تمام ترک‌بک‌های معلق با خبر کن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFYDSC","Receive notification when a new trackback is received for approval");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگهی‌رسانی خودکار: ترک‌بک جدید ارسال شده و معلق");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFY","ارسال مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFYCAP","هر مقاله جدیدی در این شاخه ارسال شد  مرا با خبر کن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFYDSC","Receive notification when a new article is submitted in the current category");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگهی‌رسانی خودکار: مقاله ارسال شده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFY","مقاله جدید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFYCAP","هر مقاله جدیدی در این شاخه قرار گرفت مرا با خبر کن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFYDSC","Receive notification when a new article is published in the category");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگهی‌رسانی خودکار: مقاله جدید قرار گرفته در سایت");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFY","تایید شدن مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFYCAP","هر وقت این مقاله تایید شد مرا با خبر کن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFYDSC","Receive notification when the article is approved");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگهی‌رسانی خودکار: تایید شدن مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFY","زیر نظر گرفتن این مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYCAP","هر عملیاتی روی این مقاله انجام شد مرا با خبر کن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYDSC","Receive notification when an action is taken on this article");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} آگهی‌رسانی خودکار: یک عمل جدید روی مقاله انجام شد");
?>
