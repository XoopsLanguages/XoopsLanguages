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

if(defined($GLOBALS["VAR_PREFIXU"]."_LANG_EN_MODINFO")) return; define($GLOBALS["VAR_PREFIXU"]."_LANG_EN_MODINFO",1);

define($GLOBALS["VAR_PREFIXU"]."_MI_NAME","天下博览");
define($GLOBALS["VAR_PREFIXU"]."_MI_DESC","XML feeds");

define($GLOBALS["VAR_PREFIXU"]."_MI_PAGE_INDEX","首页");
define($GLOBALS["VAR_PREFIXU"]."_MI_PAGE_ARTICLE","文章");
define($GLOBALS["VAR_PREFIXU"]."_MI_PAGE_ARCHIVE","存档");
define($GLOBALS["VAR_PREFIXU"]."_MI_PAGE_LIST","列表");

define($GLOBALS["VAR_PREFIXU"]."_MI_SUBMIT","提交");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE","文章");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_DESC","");
define($GLOBALS["VAR_PREFIXU"]."_MI_CATEGORY","类别");
define($GLOBALS["VAR_PREFIXU"]."_MI_CATEGORY_DESC","");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG","Blog (网站)");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_THEMESET","风格");
define($GLOBALS["VAR_PREFIXU"]."_MI_THEMESET_DESC","应用于整个模块, 如果不采用，选择 '"._NONE."'");

define($GLOBALS["VAR_PREFIXU"]."_MI_TIMEFORMAT","时间显示格式");
define($GLOBALS["VAR_PREFIXU"]."_MI_TIMEFORMAT_DESC","");
define($GLOBALS["VAR_PREFIXU"]."_MI_TIMEFORMAT_CUSTOM","定制");

define($GLOBALS["VAR_PREFIXU"]."_MI_DISPLAY_SUMMARY","在文章列表页面显示的摘要长度");
define($GLOBALS["VAR_PREFIXU"]."_MI_DISPLAY_SUMMARY_DESC","0 - 显示全文");

define($GLOBALS["VAR_PREFIXU"]."_MI_DODEBUG","启用调试模式");
define($GLOBALS["VAR_PREFIXU"]."_MI_DODEBUG_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_DOURLREWRITE","启用url重写机制");
define($GLOBALS["VAR_PREFIXU"]."_MI_DOURLREWRITE_DESC","需要启用 AcceptPathInfo (Apache2)");

define($GLOBALS["VAR_PREFIXU"]."_MI_DOSIBLING","显示上一篇/下一篇");
define($GLOBALS["VAR_PREFIXU"]."_MI_DOSIBLING_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLESPERPAGE","每页显示文章数");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLESPERPAGE_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_LISTPERPAGE","每页显示列表数");
define($GLOBALS["VAR_PREFIXU"]."_MI_LISTPERPAGE_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_BLOGSPERUPDATE","每次更新的Blog或网站");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOGSPERUPDATE_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_EXPIRE","文章过期时间");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_EXPIRE_DESC","单位：天");

define($GLOBALS["VAR_PREFIXU"]."_MI_COPYRIGHT","版权");
define($GLOBALS["VAR_PREFIXU"]."_MI_COPYRIGHT_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_PING","Pings");
define($GLOBALS["VAR_PREFIXU"]."_MI_PING_DESC","要PING的网址");

define($GLOBALS["VAR_PREFIXU"]."_MI_TRACKBACK_OPTION","收取Trackback的选项");
define($GLOBALS["VAR_PREFIXU"]."_MI_TRACKBACK_OPTION_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_MODERATION","需要管理员审核");
define($GLOBALS["VAR_PREFIXU"]."_MI_MEMBER","会员可自动通过");

define($GLOBALS["VAR_PREFIXU"]."_MI_NEWBLOG_SUBMIT","提交新Blog或网站的权限");
define($GLOBALS["VAR_PREFIXU"]."_MI_NEWBLOG_SUBMIT_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_ANONYMOUSRATE","允许游客评分");
define($GLOBALS["VAR_PREFIXU"]."_MI_ANONYMOUSRATE_DESC","");

define($GLOBALS["VAR_PREFIXU"]."_MI_PSEUDOCRON","虚拟cron");
define($GLOBALS["VAR_PREFIXU"]."_MI_PSEUDOCRON_DESC","用户访问模块时自动触发blog的更新");

define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_INDEX","首页");
define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_CATEGORY","类别管理");
define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_BLOG","Blog或网站");
define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_ARTICLE","文章");
define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_BLOCK","区块");
define($GLOBALS["VAR_PREFIXU"]."_MI_ADMENU_ABOUT","关于");

define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NOTIFY","全局");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NOTIFYDSC","全局通知选项");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_NOTIFY","Blog");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_NOTIFYDSC","Blog 通知选项");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_NOTIFY","文章");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_NOTIFYDSC","文章通知选项");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_BLOGSUBMIT_NOTIFY","文章提交");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_BLOGSUBMIT_NOTIFYCAP","有等待审核的Blog时通知我");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_BLOGSUBMIT_NOTIFYDSC","当有新blog提交时通知我");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_BLOGSUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知 : 新Blog提交");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NEWBLOG_NOTIFY","新Blog");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NEWBLOG_NOTIFYCAP","有Blog发布时通知我");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NEWBLOG_NOTIFYDSC","如果有新Blog发布，通知我");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_NEWBLOG_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知 : 新Blog发布");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFY","文章监视");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYCAP","通知我有关我任一文章的变化");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYDSC","如果我的任一篇有变化通知我");
define($GLOBALS["VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知 : 更新");

define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGAPPROVE_NOTIFY","Blog通过审核");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGAPPROVE_NOTIFYCAP","通过审核通知");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGAPPROVE_NOTIFYDSC","如果这个Blog通过审核，通知我");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGAPPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知 : blog 通过审核");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGUPDATE_NOTIFY","Blog 更新");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGUPDATE_NOTIFYCAP","更新通知");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGUPDATE_NOTIFYDSC","如果该Blog有更新，通知我");
define($GLOBALS["VAR_PREFIXU"]."_MI_BLOG_BLOGUPDATE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知 : blog 已更新");

define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFY","文章监视");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYCAP","文章变动通知");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYDSC","如果该文章有更新，通知我");
define($GLOBALS["VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知 : 文章已更新");
?>