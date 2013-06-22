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

if(defined($GLOBALS["VAR_PREFIXU"]."_LANG_EN_MAIN")) return; define($GLOBALS["VAR_PREFIXU"]."_LANG_EN_MAIN",1);


define($GLOBALS["VAR_PREFIXU"]."_MD_INVALID","无效操作");
define($GLOBALS["VAR_PREFIXU"]."_MD_NOACCESS","禁止访问");

define($GLOBALS["VAR_PREFIXU"]."_MD_TITLE","标题");
define($GLOBALS["VAR_PREFIXU"]."_MD_AUTHOR","作者");
define($GLOBALS["VAR_PREFIXU"]."_MD_SUMMARY","摘要");
define($GLOBALS["VAR_PREFIXU"]."_MD_BODY","征文");
define($GLOBALS["VAR_PREFIXU"]."_MD_SORTBY","排序");

define($GLOBALS["VAR_PREFIXU"]."_MD_SAVED","数据已保存");;
//define($GLOBALS["VAR_PREFIXU"]."_MD_SUBMITTED","提交");;

define($GLOBALS["VAR_PREFIXU"]."_MD_ALREADYBOOKMARKED","你已经收藏了该Blog");
define($GLOBALS["VAR_PREFIXU"]."_MD_ALREADYRATED","你已经投过票");
define($GLOBALS["VAR_PREFIXU"]."_MD_NOTSAVED","数据未能保存");

define($GLOBALS["VAR_PREFIXU"]."_MD_ACTIONDONE","操作成功");

define($GLOBALS["VAR_PREFIXU"]."_MD_CONTENT","内容");
define($GLOBALS["VAR_PREFIXU"]."_MD_ARTICLE","文章");
define($GLOBALS["VAR_PREFIXU"]."_MD_CATEGORY","类别");
define($GLOBALS["VAR_PREFIXU"]."_MD_INDEX","首页");
define($GLOBALS["VAR_PREFIXU"]."_MD_DISCLAIMER","免责声明");

define($GLOBALS["VAR_PREFIXU"]."_MD_DATE","日期");

define($GLOBALS["VAR_PREFIXU"]."_MD_SOURCE","出处");
define($GLOBALS["VAR_PREFIXU"]."_MD_XMLDESC_ARTICLE","文章 XML");
define($GLOBALS["VAR_PREFIXU"]."_MD_XMLDESC_CATEGORY","类别 %s 的XML");
define($GLOBALS["VAR_PREFIXU"]."_MD_XMLDESC_BOOKMARK","%s 收藏的XML");
define($GLOBALS["VAR_PREFIXU"]."_MD_XMLDESC_BLOG","Blog %s 的XML");
define($GLOBALS["VAR_PREFIXU"]."_MD_XMLDESC_INDEX","首页 XML");

define($GLOBALS["VAR_PREFIXU"]."_MD_TEXT","文本内容");

define($GLOBALS["VAR_PREFIXU"]."_MD_BLOG","Blog");
define($GLOBALS["VAR_PREFIXU"]."_MD_BOOKMARK","收藏");
//define($GLOBALS["VAR_PREFIXU"]."_MD_TRACKBACKS","Trackback");
//define($GLOBALS["VAR_PREFIXU"]."_MD_NOTIFY_ON_APPROVAL","Notify of approval");

define($GLOBALS["VAR_PREFIXU"]."_MD_DESC","表述");
define($GLOBALS["VAR_PREFIXU"]."_MD_ORDER","排序");

define($GLOBALS["VAR_PREFIXU"]."_MD_RSS","RSS");
define($GLOBALS["VAR_PREFIXU"]."_MD_RDF","RDF");
define($GLOBALS["VAR_PREFIXU"]."_MD_ATOM","ATOM");
define($GLOBALS["VAR_PREFIXU"]."_MD_OPML","OPML");

define($GLOBALS["VAR_PREFIXU"]."_MD_ARTICLES","文章");
define($GLOBALS["VAR_PREFIXU"]."_MD_FEATURED","精华");
define($GLOBALS["VAR_PREFIXU"]."_MD_CATEGORIES","类别");

define($GLOBALS["VAR_PREFIXU"]."_MD_LANGUAGE","语言");
define($GLOBALS["VAR_PREFIXU"]."_MD_CHARSET","编码");
define($GLOBALS["VAR_PREFIXU"]."_MD_IMAGE","图像");
define($GLOBALS["VAR_PREFIXU"]."_MD_TRACKBACKPATTERN","Trackback 模式");
define($GLOBALS["VAR_PREFIXU"]."_MD_STATUS","状态");
define($GLOBALS["VAR_PREFIXU"]."_MD_URL","URL");
define($GLOBALS["VAR_PREFIXU"]."_MD_LINK","链接");
define($GLOBALS["VAR_PREFIXU"]."_MD_FEED","Feed");
define($GLOBALS["VAR_PREFIXU"]."_MD_FETCH","抓取");
define($GLOBALS["VAR_PREFIXU"]."_MD_UPDATE","更新");
define($GLOBALS["VAR_PREFIXU"]."_MD_LASTUPDATE","最后更新");
define($GLOBALS["VAR_PREFIXU"]."_MD_TRACKBACK","Trackback");
define($GLOBALS["VAR_PREFIXU"]."_MD_SUBMITTER","提交者");
define($GLOBALS["VAR_PREFIXU"]."_MD_VIEWS","点击");
define($GLOBALS["VAR_PREFIXU"]."_MD_RATE","评分");
define($GLOBALS["VAR_PREFIXU"]."_MD_RATEIT","投票!");
define($GLOBALS["VAR_PREFIXU"]."_MD_TIME","时间");

define($GLOBALS["VAR_PREFIXU"]."_MD_UPDATED","该Blog已更新，有 %s 篇文章添加到数据库中");
define($GLOBALS["VAR_PREFIXU"]."_MD_DBUPDATED","数据库已更新");

define($GLOBALS["VAR_PREFIXU"]."_MD_PREVIOUS","<<");
define($GLOBALS["VAR_PREFIXU"]."_MD_NEXT",">>");


define($GLOBALS["VAR_PREFIXU"]."_MD_PENDING","待审核");
define($GLOBALS["VAR_PREFIXU"]."_MD_ACTIVE","正常");
define($GLOBALS["VAR_PREFIXU"]."_MD_EXPIRED","过期");

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

define($GLOBALS["VAR_PREFIXU"]."_MD_COMMENTS","评论");
define($GLOBALS["VAR_PREFIXU"]."_MD_CLICKTOCOPY","点击拷贝");

define($GLOBALS["VAR_PREFIXU"]."_MD_SORT","排序");

define($GLOBALS["VAR_PREFIXU"]."_MD_FULLVIEW","全文");
define($GLOBALS["VAR_PREFIXU"]."_MD_LISTVIEW","列表");
define($GLOBALS["VAR_PREFIXU"]."_MD_RATING","评分");
define($GLOBALS["VAR_PREFIXU"]."_MD_DEFAULT","缺省");
define($GLOBALS["VAR_PREFIXU"]."_MD_BLOGS","Blogs");
define($GLOBALS["VAR_PREFIXU"]."_MD_BOOKMARKS","收藏");
define($GLOBALS["VAR_PREFIXU"]."_MD_HOME","首页");

define($GLOBALS["VAR_PREFIXU"]."_MD_BLOGEXISTS","已经有该Blog存在");
define($GLOBALS["VAR_PREFIXU"]."_MD_EMPTY_BLOG","清空");

define($GLOBALS["VAR_PREFIXU"]."_MD_TRANSFER","工具箱");
define($GLOBALS["VAR_PREFIXU"]."_MD_TRANSFER_DESC","将该文章转到其他应用中");
define($GLOBALS["VAR_PREFIXU"]."_MD_TRANSFER_DONE","操作已成功执行: %s");
?>