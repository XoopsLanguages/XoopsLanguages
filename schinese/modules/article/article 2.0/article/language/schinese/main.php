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

if(defined($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_MAIN")) return; 
define($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_MAIN",1);


define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INVALID","无效操作");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOACCESS","抱歉，您尚无权限。请登录或注册。");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEXTEMPTY","空文本");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INSERTERROR","数据保存发生错误");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEWARTICLE","添加文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TITLE","标题");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_AUTHOR","作者");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUMMARY","摘要");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BODY","正文");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SORTBY","排序");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVED","数据已保存");;
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMITED","已提交");;

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ALREADYRATED","你已经投过票");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOTSAVED","数据未能保存");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPARTICLE","文章管理");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACTIONDONE","操作成功。");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPCATEGORY","分类管理");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPTOPIC","专题管理");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPTRACKBACK","反馈管理");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EMAIL","邮件");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EMAILADDRESS","邮件地址");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CONTENT","内容");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ARTICLE","文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORY","类别");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INDEX","首页");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DISCLAIMER","免责声明");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBTITLE","分页标题");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORDS","关键词");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDNOTE","编辑附注");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DATE","日期");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ERROROCCURED","发生错误");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_USERNAME","用户名称");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECTFEED","选择Feed类型");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_ARTICLE","文章XML");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SOURCE","来源");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_CATEGORY","分类 %s XML");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_AUTHOR","作者 %s XML");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_INDEX","首页XML");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PROFILE","作者简介");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECT_EDITOR","选择编辑器");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEXT","文本内容");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE_NO","页码 %d");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEWPAGE","新建页面");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE","多页面编辑");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE_TEXT","页面文本");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUMMARY_DESC","摘要描述");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUMMARY_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORDS_DESC","关键词描述");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORDS_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDNOTE_DESC","编辑附注描述");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDNOTE_DESC_TEXT","");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FORUM","论坛");
/*
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BLOG","博客");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PDF","PDF");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PRINT","打印");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BOOKMARK","收藏");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DC","DC");
*/
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACKS","跟踪网址");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEMPLATE_SELECT","选择模板");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORY_BASE","基本分类");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ELINKS","相关链接");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ELINKS_DESC","链接描述");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ELINKS_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACKS_DESC","反向跟踪描述");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACKS_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOTIFY_ON_APPROVAL","核准通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PUBLISH_ARTICLE","发表");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE","保存");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE_DRAFT","保存草稿");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE_EDIT","保存并继续编辑");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_PAGE","删除该页");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_ARTICLE","删除文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_ARTICLE_CONFIRM","确认删除该文章?");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MODERATOR_REMOVE","移除管理员");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MODERATOR_ADD","添加管理员");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DESCRIPTION","描述");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ORDER","排序");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSOR","赞助者网址及名称");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSOR_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSOR_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_UPLOAD","上传图片");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_SELECT","选择图片");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TOPIC","专题");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FROMLASTDAYS","从最近 %d 天");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FROMLASTHOURS","从最近 %d 小时");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_THELASTYEAR","去年");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BEGINNING","从开始");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RSS","RSS");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RDF","RDF");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ATOM","ATOM");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_OPML","OPML");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPANEL","管理");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ARTICLES","文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ADDARTICLE","添加文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MODERATOR","管理员");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MYARTICLES","我的文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_STATS","状态");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FEATURED","精华");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TOPICS","专题");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMITTED","已提交");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PUBLISHED","已发布");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CREATED","已创建");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGISTERED","已注册");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGULAR","普通");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORIES","分类");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBTITLES","副标题");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PAGES","页面");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_URL","文章地址");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACK","跟踪地址");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMITTER","提交者");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_VIEWS","阅读");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RATE","评分");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RATEIT","投票！");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RESETRATE","重设评分");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME","时间");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PDF_PAGE","第 %s 页");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PREVIOUS","<<");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEXT",">>");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEXTOPTIONS",'文本选项');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOHTML",'启用HTML标记');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOSMILEY",'启用表情图');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOXCODE",'启用XOOPS内置码');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOBR",'自动换行(启用HTML时关闭此功能)');

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSORS","赞助");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_CREATE","已创建");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_EXPIRE","过期");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TYPES","类型");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NAME","名称");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BIO","传记");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FORMMODE","编辑方式");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BASIC","基本");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ADVANCE","高级");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CUSTOM","定制");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INVALID_SUBMIT","抱歉，提交超时。请做备份并再次提交。");

//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORD_ON","关键词");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBCATEGORIES","子分类");

//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TAG_LIST","Tag 列表");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACTIVE","正常");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EXPIRED","过期");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_APPROVED","已核准");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETED","删除");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PENDING","待审");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EXPIRATION","到期日期");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CREATION","创建日期");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ADD","添加");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECT","选择");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_APPROVE","核准");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FEATUREIT","标记精华");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_UNFEATUREIT","取消精华");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TERMINATE","移除");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGISTERTOPIC","添加到专题");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACTIONS","操作");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMISSION","提交");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PUBLISH","发布");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGISTER","注册");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FEATURE","精华");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HEADINGS","标题");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOTES","附注");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FROM","来自"); // Trackback

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_VIEWALL","阅读完整文本");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_COMMENTS","评论");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CLICKTOCOPY","点击拷贝");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACHIVE","查阅归档文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTHLY","按月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_Y","%s"); // Year
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_YM","%2\$s - %1\$s"); // Year - Month
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_YMD","%1\$s - %2\$s - %3\$s"); // Year - Month - Day

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_1","一月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_2","二月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_3","三月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_4","四月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_5","五月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_6","六月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_7","七月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_8","八月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_9","九月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_10","十月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_11","十一月");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_12","十二月");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_1","星期一");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_2","星期二");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_3","星期三");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_4","星期四");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_5","星期五");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_6","星期六");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_7","星期日");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_CAPTION","图片标题");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_CURRENT","当前图片");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPOTLIGHT","焦点");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_LIST","文章列表");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DRAFTS","草稿");

/*
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRANSFER","工具箱");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRANSFER_DESC","将该文章转到其他应用中");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRANSFER_DONE","操作已成功执行: %s");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECTEDITOR","选择编辑器");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REQUIRED","必填项");
*/
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REMOVE","清除");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE_BEFORE_SWITCH","页面转换前注意保存数据");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEWPAGE_AVAILABLE","保存第一页之后可以继续添加更多页面");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MOVE_CATEGORYANDARTICLE","所有子分类和文章将被转移到上层分类下.");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_CATEGORYANDARTICLE","所有子分类和文章将被从数据库中删除.");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CONFIG_CATEGORYANDARTICLE","该选项可以通过修改 article/include/plugin.php 中的 \$GLOBALS[\"xoopsModuleConfig\"][\"category_delete_forced\"] 进行设置");

//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORY1_CAN_NOT_DELETE","序列号cat_id=1的类别不允许被删除");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PARENT_CATEGORY","上层类别");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ENTRY_SELECT","选择首页文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ARTICLE_SELECT","选择文章");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DEFAULT","缺省");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DESC","倒序");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ASC","顺序");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SORTORDER", '按%1$s%2$s'); // sort, order

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_UPDATE_TIME","更新日期");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_ARTICLE","文章题头图片");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_UPLOADED","已上传的图片");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP","帮助");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_PUBLISH_ARTICLE","保存当前内容并提交发表（根据权限设定，某些情况下需要经过管理员审核后才能公开发布）");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_SAVE","保存当前页面内容");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_SAVE_EDIT","保存当前页面内容并返回继续编辑（如果当前文章状态为未发表状态，则需要提交发表以后文章才能被公开发布）");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_SAVE_DRAFT","保存当前文章为私人草稿（只有作者自己可阅览，超过期限如果不提交发表会自动删除）");
?>