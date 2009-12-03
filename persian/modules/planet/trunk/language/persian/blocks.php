<?php
// $Id: blocks.php,v 1.1.1.1 2005/11/14 00:33:50 phppp Exp $
// _LANGCODE: en
// _CHARSET : ISO-8859-1
// Translator: D.J., http://xoopsforge.com, http://xoops.org.cn

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["VAR_PREFIXU"]."_LANG_EN_BLOCKS")) return; 
define($GLOBALS["VAR_PREFIXU"]."_LANG_EN_BLOCKS",1);

define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE","نوع");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_TIME","زمان انتشار");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_VIEWS","بازدید");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_RATES","درجه رای");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_RATING","درجه");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_RANDOM","تصادفی");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_BOOKMARKS","بوکمارک ها");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_FEATURED","خصوصیات");
define($GLOBALS["VAR_PREFIXU"]."_MB_ITEMS","تعداد موارد");
define($GLOBALS["VAR_PREFIXU"]."_MB_TITLE_LENGTH","طول عنوان");
define($GLOBALS["VAR_PREFIXU"]."_MB_TIMEFORMAT","شکل زمان");
define($GLOBALS["VAR_PREFIXU"]."_MB_TIMEFORMAT_CUSTOM","سفارشی");
define($GLOBALS["VAR_PREFIXU"]."_MB_SUMMARY_LENGTH","طول خلاصه نمایش داده شده");
define($GLOBALS["VAR_PREFIXU"]."_MB_SHOWDESC","نمایش توضیحات");
define($GLOBALS["VAR_PREFIXU"]."_MB_CATEGORYLIST","شاخه های مجاز");

define($GLOBALS["VAR_PREFIXU"]."_MB_AUTHOR","سازنده");
define($GLOBALS["VAR_PREFIXU"]."_MB_TIME","زمان");
?>