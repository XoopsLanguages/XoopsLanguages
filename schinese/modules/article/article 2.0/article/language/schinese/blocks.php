<?php
// $Id$
// _LANGCODE: zh-CN
// _CHARSET : utf-8
// Translator: A.D.Horse, http://www.tv-io.com

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_BLOCKS")) return; 
define($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_BLOCKS",1);

define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE", "类型");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE_TIME", "发布时间");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE_VIEWS", "阅读次数");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE_RATES", "评分次数");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE_RATING", "平均得分");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TYPE_RANDOM", "随机");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_ITEMS", "条目总数");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TITLE_LENGTH", "标题长度");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TIMEFORMAT", "时间格式");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TIMEFORMAT_CUSTOM", "定制");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_SHOWSUMMARY", "显示摘要");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_SUMMARY_IMAGE", "摘要与图片");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_CATEGORYLIST", "允许的分类");

define($GLOBALS["ART_VAR_PREFIXU"]."_MB_AUTHOR", "作者");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_TIME", "时间");

define($GLOBALS["ART_VAR_PREFIXU"]."_MB_SPECIFIED_ONLY", "只显示标注的文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_SHOW_NOTE", "显示编者按");

define($GLOBALS["ART_VAR_PREFIXU"]."_MB_CATEGORIES", "分类");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_ARTICLES", "文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_COMMENTS", "评论");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_VIEWS", "阅读");
define($GLOBALS["ART_VAR_PREFIXU"]."_MB_DISPLAY_MODE", "显示模式 ( 0 - 简单列表; 其他 - 按分类显示, 数字为栏数 )");
?>