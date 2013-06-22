<?php
// $Id$
// _LANGCODE: zh-CN
// _CHARSET : utf-8
// Translator: A.D.Horse, http://www.tv-io.com

if (!defined("XOOPS_ROOT_PATH")){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_ADMIN")) return; 
define($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_ADMIN",1);

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ARTICLES","文章设置");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_APPROVEARTICLE","审核文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPARTICLE","文章管理");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT","焦点管理");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_LATEST","Use latest article");;
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_CURRENT","当前焦点");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_CATEGORIES","可选分类：");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_UPLOAD","上传图片：");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_SELECT","选择图片：");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_CHOOSE","Choose an article");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_OPTION","焦点选项：");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_LASTARTICLE","最新文章");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_LASTFEATURE","Last featured article");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_SPECIFIED","指定文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_NOTE","焦点附注(编者按)：");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TITLE","标题");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CATEGORY","分类");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTIT","选定");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SUBMITTED","提交的文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CATEGORIES","分类设置");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPCATEGORY","分类管理");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ADDCATEGORY","添加分类");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILES","文件管理");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILES_ALL","全部");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILES_ORPHAN","孤立文件");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILENAME","文件名称");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ARTICLE","文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_LOST","丢失");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ORPHAN","孤立");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ACTION","操作");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION","权限管理");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_ACCESS","访问");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_ACCESS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_VIEW","浏览全文");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_VIEW_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_SUBMIT","提交");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_SUBMIT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_PUBLISH","自动发布");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_PUBLISH_DEC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_RATE","评分");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_RATE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_MODERATE","管理");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_MODERATE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_GLOBAL","全局权限");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_GLOBAL_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_SEARCH","搜索");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_HTML","使用HTML");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_UPLOAD","上传");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_DESC", 
	"可以设定的分类权限: ".
	art_constant("AM_PERM_ACCESS").",".
	art_constant("AM_PERM_VIEW").",".
	art_constant("AM_PERM_SUBMIT").",".
	art_constant("AM_PERM_RATE").",".
	art_constant("AM_PERM_MODERATE")."<br />". 
	"可以设定的全局权限: ".
	art_constant("AM_PERM_SEARCH").",".
	art_constant("AM_PERM_HTML").",".
	art_constant("AM_PERM_UPLOAD")
);

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE","设置缺省权限模板");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_DESC","编辑下列权限模板从而可以方便的应用到某个/些论坛");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_CREATED","权限模板已生成");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_ERROR","建立权限模板时发生错误");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_APPLY","应用缺省权限模板");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_APPLIED","所选择的类别已经采用缺省权限");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_ACTION","权限管理工具");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_SETBYGROUP","直接按群组设置权限");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PAGENAME","页面");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOPICS","专题设置");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPTOPIC","专题管理");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ADDTOPIC","添加专题");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TRACKBACKS","跟踪设置");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPTRACKBACK","跟踪管理");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PREFERENCES","模块参数");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ON","启用");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_OFF","关闭");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SAFEMODE","safemod");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_REGISTERGLOBALS","register_globals");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MAGICQUOTESGPC","magic_quotes_gpc");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ZLIBCOMPRESSION","output_compression");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MEMORYLIMIT","memory_limit");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MAXPOSTSIZE","post_max_size");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MAXINPUTTIME","max_input_time");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_OUTPUTBUFFERING","output_buffering");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_XML_EXTENSION","xml");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MB_EXTENSION","mbstring");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CURL","curl_init");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FSOCKOPEN","fsockopen");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_URLFOPEN","allow_url_fopen");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PATH_IMAGE","图片存放路径");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PATH_FILE","文件存放路径");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PATH_HTML","HTMLs path");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILE_PERMDATA","Permission file");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_STATS","统计信息");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_CATEGORIES","分类总计");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_TOPICS","专题总计");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_ARTICLES","文章总计");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_AUTHORS","作者总计");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_VIEWS","浏览总计");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_RATES","评分总计");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_AVAILABLE","有效");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_NOTAVAILABLE","无效");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CREATETHEDIR","创建文件夹");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_NOTWRITABLE","不可写");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SETMPERM","设置权限");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_DIRCREATED","目录已经建立");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_DIRNOTCREATED","目录无法建立");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMSET","权限已设置");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMNOTSET","权限无法设置");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_DBUPDATED","数据库已更新");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_CAPTION","图片标题：");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_CURRENT","当前图片");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_RELEASEDATE","发布日期");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR","作者");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_CREDITS","致谢");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_LICENSE","许可协议");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_WEBSITE","主页");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_MODULE_INFO","模块信息");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_MODULE_STATUS","状态");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_MODULE_TEAM","项目成员");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_INFO","作者信息");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_NAME","作者名称");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_WORD","说明");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_DISCLAIMER","版权信息");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_DISCLAIMER_TEXT","GPL 许可协议");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_CHANGELOG","更改记录");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_HELP","帮助文档");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_TITLE","数据同步");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_SYNCING","正在进行数据同步处理");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_CATEGORY","类别");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_ARTICLE","文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_MISC","其它");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_ITEMS","每次处理的数目：");

?>