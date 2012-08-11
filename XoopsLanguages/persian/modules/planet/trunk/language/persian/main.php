<?php
// $Id: main.php,v 1.1.1.1 2005/11/14 00:33:51 phppp Exp $
// _LANGCODE: en
// _CHARSET : ISO-8859-1
// Translator: D.J., http://xoopsforge.com, http://xoops.org.cn

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["VAR_PREFIXU"]."_LANG_EN_MAIN")) return; define($GLOBALS["VAR_PREFIXU"]."_LANG_EN_MAIN",1);


define($GLOBALS["VAR_PREFIXU"]."_MD_INVALID","اقدام بی اعتبار");
define($GLOBALS["VAR_PREFIXU"]."_MD_NOACCESS","در دسترس نیست");

define($GLOBALS["VAR_PREFIXU"]."_MD_TITLE","عنوان");
define($GLOBALS["VAR_PREFIXU"]."_MD_AUTHOR","سازنده");
define($GLOBALS["VAR_PREFIXU"]."_MD_SUMMARY","خلاصه");
define($GLOBALS["VAR_PREFIXU"]."_MD_BODY","محل متن");
define($GLOBALS["VAR_PREFIXU"]."_MD_SORTBY","نوع");

define($GLOBALS["VAR_PREFIXU"]."_MD_SAVED","ذخیره داده ها");;
//define($GLOBALS["VAR_PREFIXU"]."_MD_SUBMITTED","Submitted");;

define($GLOBALS["VAR_PREFIXU"]."_MD_ALREADYBOOKMARKED","شما در حال حاضر این وبلاگ را بوکمارک کرده اید");
define($GLOBALS["VAR_PREFIXU"]."_MD_ALREADYRATED","ارزیابی کردید");
define($GLOBALS["VAR_PREFIXU"]."_MD_NOTSAVED","ذخیره نشده");

define($GLOBALS["VAR_PREFIXU"]."_MD_ACTIONDONE","عمل موفقیت آمیز بود");

define($GLOBALS["VAR_PREFIXU"]."_MD_CONTENT","محتوی");
define($GLOBALS["VAR_PREFIXU"]."_MD_ARTICLE","مطلب");
define($GLOBALS["VAR_PREFIXU"]."_MD_CATEGORY","شاخه");
define($GLOBALS["VAR_PREFIXU"]."_MD_INDEX","صفحه اصلی");
define($GLOBALS["VAR_PREFIXU"]."_MD_DISCLAIMER","رفع مسئولیت");

define($GLOBALS["VAR_PREFIXU"]."_MD_DATE","تاریخ");

define($GLOBALS["VAR_PREFIXU"]."_MD_SOURCE","منبع");
define($GLOBALS["VAR_PREFIXU"]."_MD_XMLDESC_ARTICLE","مطلب XML");
define($GLOBALS["VAR_PREFIXU"]."_MD_XMLDESC_CATEGORY","XML از شاخه %s");
define($GLOBALS["VAR_PREFIXU"]."_MD_XMLDESC_BOOKMARK","XML از بوکمارک %s");
define($GLOBALS["VAR_PREFIXU"]."_MD_XMLDESC_BLOG","XML از وبلاگ %s");
define($GLOBALS["VAR_PREFIXU"]."_MD_XMLDESC_INDEX","XML از صفحه اصلی");

define($GLOBALS["VAR_PREFIXU"]."_MD_TEXT","متن");

define($GLOBALS["VAR_PREFIXU"]."_MD_BLOG","وبلاگ");
define($GLOBALS["VAR_PREFIXU"]."_MD_BOOKMARK","بوکمارک");
//define($GLOBALS["VAR_PREFIXU"]."_MD_TRACKBACKS","Trackback");
//define($GLOBALS["VAR_PREFIXU"]."_MD_NOTIFY_ON_APPROVAL","Notify of approval");

define($GLOBALS["VAR_PREFIXU"]."_MD_DESC","توضیحات");
define($GLOBALS["VAR_PREFIXU"]."_MD_ORDER","سفارشی");

define($GLOBALS["VAR_PREFIXU"]."_MD_RSS","RSS");
define($GLOBALS["VAR_PREFIXU"]."_MD_RDF","RDF");
define($GLOBALS["VAR_PREFIXU"]."_MD_ATOM","ATOM");
define($GLOBALS["VAR_PREFIXU"]."_MD_OPML","OPML");

define($GLOBALS["VAR_PREFIXU"]."_MD_ARTICLES","مطالب");
define($GLOBALS["VAR_PREFIXU"]."_MD_FEATURED","خصوصیات");
define($GLOBALS["VAR_PREFIXU"]."_MD_CATEGORIES","شاخه ها");

define($GLOBALS["VAR_PREFIXU"]."_MD_LANGUAGE","زبان");
define($GLOBALS["VAR_PREFIXU"]."_MD_CHARSET","تنظیم کد گذاری");
define($GLOBALS["VAR_PREFIXU"]."_MD_IMAGE","تصویر");
define($GLOBALS["VAR_PREFIXU"]."_MD_TRACKBACKPATTERN","الگو تربک");
define($GLOBALS["VAR_PREFIXU"]."_MD_STATUS","وضعیت");
define($GLOBALS["VAR_PREFIXU"]."_MD_URL","آدرس");
define($GLOBALS["VAR_PREFIXU"]."_MD_LINK","لینک");
define($GLOBALS["VAR_PREFIXU"]."_MD_FEED","خوراک");
define($GLOBALS["VAR_PREFIXU"]."_MD_FETCH","Fetch");
define($GLOBALS["VAR_PREFIXU"]."_MD_UPDATE","به روز شده");
define($GLOBALS["VAR_PREFIXU"]."_MD_LASTUPDATE","به روز شده");
define($GLOBALS["VAR_PREFIXU"]."_MD_TRACKBACK","تربک");
define($GLOBALS["VAR_PREFIXU"]."_MD_SUBMITTER","ارسال کننده");
define($GLOBALS["VAR_PREFIXU"]."_MD_VIEWS","بازدید");
define($GLOBALS["VAR_PREFIXU"]."_MD_RATE","رای");
define($GLOBALS["VAR_PREFIXU"]."_MD_RATEIT","رای دهید!");
define($GLOBALS["VAR_PREFIXU"]."_MD_TIME","زمان");

define($GLOBALS["VAR_PREFIXU"]."_MD_UPDATED","وبلاگ با %s مطلب وارد شده به روز شد");
define($GLOBALS["VAR_PREFIXU"]."_MD_DBUPDATED","پایگاه داده ها به روز شد");

define($GLOBALS["VAR_PREFIXU"]."_MD_PREVIOUS","<<");
define($GLOBALS["VAR_PREFIXU"]."_MD_NEXT",">>");


define($GLOBALS["VAR_PREFIXU"]."_MD_PENDING","منتظر برای تایید");
define($GLOBALS["VAR_PREFIXU"]."_MD_ACTIVE","فعال");
define($GLOBALS["VAR_PREFIXU"]."_MD_EXPIRED","منقضی شده");

/*
define($GLOBALS["VAR_PREFIXU"]."_MD_TYPES","Types");
define($GLOBALS["VAR_PREFIXU"]."_MD_APPROVED","Approved");
define($GLOBALS["VAR_PREFIXU"]."_MD_DELETED","Deleted");
define($GLOBALS["VAR_PREFIXU"]."_MD_EXPIRATION","Expiration date");
define($GLOBALS["VAR_PREFIXU"]."_MD_APPROVE","Approve");
define($GLOBALS["VAR_PREFIXU"]."_MD_ACTIONS","Actions");

define($GLOBALS["VAR_PREFIXU"]."_MD_SUBMISSION","Submission date");
define($GLOBALS["VAR_PREFIXU"]."_MD_PUBLISH","Publish date");
define($GLOBALS["VAR_PREFIXU"]."_MD_REGISTER","Register date");
define($GLOBALS["VAR_PREFIXU"]."_MD_FEATURE","Featured date");
define($GLOBALS["VAR_PREFIXU"]."_MD_VIEWALL","View full text");
*/

define($GLOBALS["VAR_PREFIXU"]."_MD_COMMENTS","نظر ها");
define($GLOBALS["VAR_PREFIXU"]."_MD_CLICKTOCOPY","کلیک برای کپی برداری");

define($GLOBALS["VAR_PREFIXU"]."_MD_SORT","نوع");

define($GLOBALS["VAR_PREFIXU"]."_MD_FULLVIEW","متن کامل");
define($GLOBALS["VAR_PREFIXU"]."_MD_LISTVIEW","لیست");
define($GLOBALS["VAR_PREFIXU"]."_MD_RATING","رتبه");
define($GLOBALS["VAR_PREFIXU"]."_MD_DEFAULT","پیش فرض");
define($GLOBALS["VAR_PREFIXU"]."_MD_BLOGS","وبلاگ ها");
define($GLOBALS["VAR_PREFIXU"]."_MD_BOOKMARKS","بوکمارک ها");
define($GLOBALS["VAR_PREFIXU"]."_MD_HOME","خانه");

define($GLOBALS["VAR_PREFIXU"]."_MD_BLOGEXISTS","وبلاگ این خوراک در حال حاضر موجود است.");
define($GLOBALS["VAR_PREFIXU"]."_MD_EMPTY_BLOG","خالی کن");

define($GLOBALS["VAR_PREFIXU"]."_MD_TRANSFER","انتقال");
define($GLOBALS["VAR_PREFIXU"]."_MD_TRANSFER_DESC","این مطلب را به یک بخش دیگر منتقل کن");
define($GLOBALS["VAR_PREFIXU"]."_MD_TRANSFER_DONE","این عمل با موفقیت انجام شد: %s");
?>