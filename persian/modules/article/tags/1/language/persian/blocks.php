<?php
// $Id: blocks.php,v 1.1.1.1 2005/11/10 19:51:18 phppp Exp $
// _LANGCODE: en
// _CHARSET : ISO-8859-1
// Translator: D.J., http://xoopsforge.com, http://xoops.org.cn

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["ART_VAR_PREFIXU"]."_LANG_FA_BLOCKS")) return; 
define($GLOBALS["ART_VAR_PREFIXU"]."_LANG_FA_BLOCKS",1);

define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE","نوع");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE_TIME","زمان قرارگرفتن در سایت");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE_VIEWS","تعداد بازدید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE_RATES","تعداد رای");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE_RATING","امتیاز");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE_RANDOM","تصادفی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_ITEMS","تعداد مورد برای نمایش در بلاک");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TITLE_LENGTH","طول عنوان");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TIMEFORMAT","قالب زمان");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TIMEFORMAT_CUSTOM","کاستوم");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_SHOWSUMMARY","نمایش خلاصه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_SUMMARY_IMAGE","خلاصه و تصویر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_CATEGORYLIST","شاخه‌های مجاز");

define($GLOBALS["ART_VAR_PREFIXU"]."_MB_AUTHOR","نویسنده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TIME","زمان");

define($GLOBALS["ART_VAR_PREFIXU"]."_MB_SPECIFIED_ONLY","فقط مقاله های مشخص شده را نمایش بده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_SHOW_NOTE","اگر یادداشت مدیر وجود داشت آن را نمایش بده");

define($GLOBALS["ART_VAR_PREFIXU"]."_MB_CATEGORIES","شاخه‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_ARTICLES","مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_COMMENTS","نظرها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_VIEWS","بازدید ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_DISPLAY_MODE","نوع نمایش ( 0 - فهرست فشرده; اعداد دیگر -شماره ستون برای شاخه‌ها )");
?>
