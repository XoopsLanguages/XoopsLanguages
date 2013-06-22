<?php
// $Id$
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

define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE","类型");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_TIME","发布时间");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_VIEWS","点击");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_RATES","评分次数");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_RATING","得分平均");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_RANDOM","随机");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_BOOKMARKS","被收藏次数");
define($GLOBALS["VAR_PREFIXU"]."_MB_TYPE_FEATURED","精华");
define($GLOBALS["VAR_PREFIXU"]."_MB_ITEMS","数目");
define($GLOBALS["VAR_PREFIXU"]."_MB_TITLE_LENGTH","标题长度");
define($GLOBALS["VAR_PREFIXU"]."_MB_TIMEFORMAT","时间格式");
define($GLOBALS["VAR_PREFIXU"]."_MB_TIMEFORMAT_CUSTOM","定制");
define($GLOBALS["VAR_PREFIXU"]."_MB_SUMMARY_LENGTH","摘要长度");
define($GLOBALS["VAR_PREFIXU"]."_MB_SHOWDESC","显示说明");
define($GLOBALS["VAR_PREFIXU"]."_MB_CATEGORYLIST","允许的分类");

define($GLOBALS["VAR_PREFIXU"]."_MB_AUTHOR","作者");
define($GLOBALS["VAR_PREFIXU"]."_MB_TIME","时间");
?>