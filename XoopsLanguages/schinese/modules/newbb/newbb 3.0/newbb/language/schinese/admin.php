<?php
// $Id$
//%%%%%%	File Name  index.php   	%%%%%
define("_AM_NEWBB_FORUMCONF","讨论区设置");
define("_AM_NEWBB_ADDAFORUM","新建讨论区");
define("_AM_NEWBB_SYNCFORUM","讨论区数据同步");
define("_AM_NEWBB_REORDERFORUM","讨论区重新排序");
define("_AM_NEWBB_FORUM_MANAGER","讨论区管理");
define("_AM_NEWBB_PRUNE_TITLE","清理选项");
define("_AM_NEWBB_CATADMIN","类别管理");
define("_AM_NEWBB_GENERALSET","模块设置");
define("_AM_NEWBB_MODULEADMIN","模块管理：");
define("_AM_NEWBB_HELP","帮助");
define("_AM_NEWBB_ABOUT","关于");
define("_AM_NEWBB_BOARDSUMMARY","讨论区信息统计");
define("_AM_NEWBB_PENDING_POSTS_FOR_AUTH","等待审核的帖子");
define("_AM_NEWBB_POSTID","ID");
define("_AM_NEWBB_POSTDATE","发贴日期");
define("_AM_NEWBB_POSTER","发贴者");
define("_AM_NEWBB_TOPICS","主题");
define("_AM_NEWBB_SHORTSUMMARY","论坛统计");
define("_AM_NEWBB_TOTALPOSTS","帖子总数");
define("_AM_NEWBB_TOTALTOPICS","主题总数");
define("_AM_NEWBB_TOTALVIEWS","人气总数");
define("_AM_NEWBB_BLOCKS","论坛显示区块");
define("_AM_NEWBB_SUBJECT","标题");
define("_AM_NEWBB_APPROVE","审核");
define("_AM_NEWBB_APPROVETEXT","审核内容");
define("_AM_NEWBB_POSTAPPROVED","发贴审核通过");
define("_AM_NEWBB_POSTNOTAPPROVED","发贴审核未通过");
define("_AM_NEWBB_POSTSAVED","帖子已经保存");
define("_AM_NEWBB_POSTNOTSAVED","帖子无法保存");

define("_AM_NEWBB_TOPICAPPROVED","主题审核通过");
define("_AM_NEWBB_TOPICNOTAPPROVED","主题审核未通过");
define("_AM_NEWBB_TOPICID","主题编号");
define("_AM_NEWBB_ORPHAN_TOPICS_FOR_AUTH","被审核遗漏的主题");


define('_AM_NEWBB_DEL_ONE','只删除此贴');
define('_AM_NEWBB_POSTSDELETED','所被选择的贴已经被删除。');
define('_AM_NEWBB_NOAPPROVEPOST','暂时没有贴子等待审核。');
define('_AM_NEWBB_SUBJECTC','标题：');
define('_AM_NEWBB_MESSAGEICON','图标：');
define('_AM_NEWBB_MESSAGEC','内容：');
define('_AM_NEWBB_CANCELPOST','取消发表');
define('_AM_NEWBB_GOTOMOD','模块首页');

define('_AM_NEWBB_PREFERENCES','模块设置核查');
define('_AM_NEWBB_POLLMODULE','投票模块');
define('_AM_NEWBB_POLL_OK','可以使用');
define('_AM_NEWBB_GDLIB1','GD1 图形库');
define('_AM_NEWBB_GDLIB2','GD2 图形库:');
define('_AM_NEWBB_AUTODETECTED','自动检测: ');
define('_AM_NEWBB_AVAILABLE','有效');
define('_AM_NEWBB_NOTAVAILABLE','<font color="red">不能使用</font>');
define('_AM_NEWBB_NOTWRITABLE','<font color="red">不可写</font>');
define('_AM_NEWBB_IMAGEMAGICK','ImageMagicK');
define('_AM_NEWBB_IMAGEMAGICK_NOTSET','未设置');
define('_AM_NEWBB_ATTACHPATH','附件路径');
define('_AM_NEWBB_THUMBPATH','附件缩略图路径');
define('_AM_NEWBB_RSSPATH','RSS文件路径');
define('_AM_NEWBB_REPORT','举报');
define('_AM_NEWBB_REPORT_PENDING','等待处理的举报');
define('_AM_NEWBB_REPORT_PROCESSED','已处理的举报');

define('_AM_NEWBB_CREATETHEDIR','建立');
define('_AM_NEWBB_SETMPERM','设置权限');
define('_AM_NEWBB_DIRCREATED','目录已经建立');
define('_AM_NEWBB_DIRNOTCREATED','目录无法建立');
define('_AM_NEWBB_PERMSET','权限已设置');
define('_AM_NEWBB_PERMNOTSET','权限无法设置');

define('_AM_NEWBB_DIGEST','精华文摘通知');
define('_AM_NEWBB_DIGEST_PAST','<font color="red">应当在 %d 分钟前发送</font>');
define('_AM_NEWBB_DIGEST_NEXT','需要在 %d 分钟后发送');
define('_AM_NEWBB_DIGEST_ARCHIVE','文摘存档');
define('_AM_NEWBB_DIGEST_SENT','文摘已发送');
define('_AM_NEWBB_DIGEST_FAILED','文摘未发送');

// admin_forum_manager.php
define("_AM_NEWBB_NAME","名称");
define("_AM_NEWBB_CREATEFORUM","添加讨论区");
define("_AM_NEWBB_EDIT","编辑");
define("_AM_NEWBB_CLEAR","清除");
define("_AM_NEWBB_DELETE","删除");
define("_AM_NEWBB_ADD","添加");
define("_AM_NEWBB_MOVE","移动");
define("_AM_NEWBB_ORDER","排序");
define("_AM_NEWBB_TWDAFAP","注意：这将会删除该讨论区和及其全部的内容。<br /><br />警告：确认要删除此讨论区？");
define("_AM_NEWBB_FORUMREMOVED","讨论区删除完毕。");
define("_AM_NEWBB_CREATENEWFORUM","添加新讨论区：");
define("_AM_NEWBB_EDITTHISFORUM","讨论区设置：");
define("_AM_NEWBB_SET_FORUMORDER","讨论区顺序：");
define("_AM_NEWBB_ALLOWPOLLS","允许投票：");
define("_AM_NEWBB_ATTACHMENT_SIZE" ,"最大附件（千字节Kb）：");
define("_AM_NEWBB_ALLOWED_EXTENSIONS","允许使用的扩展名：<span style='font-size: xx-small; font-weight: normal; display: block;'>'*'代表没有限制。多个扩展名用'|'分隔</span>");
//define("_AM_NEWBB_ALLOW_ATTACHMENTS","允许附件上传：");
define("_AM_NEWBB_ALLOWHTML","允许使用HTML：");
define("_AM_NEWBB_YES","是");
define("_AM_NEWBB_NO","否");
define("_AM_NEWBB_ALLOWSIGNATURES","允许使用签名档：");
define("_AM_NEWBB_HOTTOPICTHRESHOLD","热门贴子下限：");
define("_AM_NEWBB_POSTPERPAGE","每页显示帖子数：<span style='font-size: xx-small; font-weight: normal; display: block;'>（每页显示的帖子数目）</span>");
define("_AM_NEWBB_TOPICPERFORUM","每页显示主题数：<span style='font-size: xx-small; font-weight: normal; display: block;'>（每页显示的主题数目）</span>");
define("_AM_NEWBB_SHOWNAME","显示真实姓名：");
define("_AM_NEWBB_SHOWICONSPANEL","显示图标：");
define("_AM_NEWBB_SHOWSMILIESPANEL","显示表情符：");
define("_AM_NEWBB_MODERATOR_REMOVE","删除现有板主");
define("_AM_NEWBB_MODERATOR_ADD","添加板主");

// admin_cat_manager.php

define("_AM_NEWBB_SETCATEGORYORDER","类别顺序：");
define("_AM_NEWBB_ACTIVE","有效");
define("_AM_NEWBB_INACTIVE","未激活");
define("_AM_NEWBB_STATE","状态");
define("_AM_NEWBB_CATEGORYDESC","类别说明：");
define("_AM_NEWBB_SHOWDESC","显示说明：");
define("_AM_NEWBB_IMAGE","图标：");
//define("_AM_NEWBB_SPONSORIMAGE","赞助者logo：");
define("_AM_NEWBB_SPONSORLINK","赞助者网址：");
define("_AM_NEWBB_DELCAT","删除类别");
define("_AM_NEWBB_WAYSYWTDTTAL","注意：将会删除此类别的全部讨论区。必须在编辑讨论区内操作。<br /><br />警告：确认删除此类别？");



//%%%%%%        File Name  admin_forums.php           %%%%%
define("_AM_NEWBB_FORUMNAME","讨论区名称：");
define("_AM_NEWBB_FORUMDESCRIPTION","讨论区描述：");
define("_AM_NEWBB_MODERATOR","板主设置：");
define("_AM_NEWBB_REMOVE","删除");
define("_AM_NEWBB_CATEGORY","类别名称：");
define("_AM_NEWBB_DATABASEERROR","数据库出错");
define("_AM_NEWBB_CATEGORYUPDATED","论坛类别更新完毕。");
define("_AM_NEWBB_EDITCATEGORY","编辑论坛类别：");
define("_AM_NEWBB_CATEGORYTITLE","类别标题：");
define("_AM_NEWBB_CATEGORYCREATED","论坛类别创建完毕。");
define("_AM_NEWBB_CREATENEWCATEGORY","添加新论坛类别");
define("_AM_NEWBB_FORUMCREATED","讨论区创建成功。");
define("_AM_NEWBB_ACCESSLEVEL","访问权限：");
define("_AM_NEWBB_CATEGORY1","类别名称");
define("_AM_NEWBB_FORUMUPDATE","论坛设置被更新");
define("_AM_NEWBB_FORUM_ERROR","错误：论坛设置错误。");
define("_AM_NEWBB_CLICKBELOWSYNC","如果排序有问题请点击按钮，将更新数据库。");
define("_AM_NEWBB_SYNCHING","正在进行数据同步处理");
define("_AM_NEWBB_CATEGORYDELETED","类别删除完毕");
define("_AM_NEWBB_MOVE2CAT","目标类别：");
define("_AM_NEWBB_MAKE_SUBFORUM_OF","创建子讨论区：");
define("_AM_NEWBB_MSG_FORUM_MOVED","论坛已经移动成功！");
define("_AM_NEWBB_MSG_ERR_FORUM_MOVED","移动论坛失败。");
define("_AM_NEWBB_SELECT","< 选择类别 >");
define("_AM_NEWBB_MOVETHISFORUM","转移讨论区");
define("_AM_NEWBB_MERGE","合并");
define("_AM_NEWBB_MERGETHISFORUM","合并该讨论区");
define("_AM_NEWBB_MERGETO_FORUM","合并到：");
define("_AM_NEWBB_MSG_FORUM_MERGED","合并成功！");
define("_AM_NEWBB_MSG_ERR_FORUM_MERGED","合并失败。");

//%%%%%% File Name admin_forum_reorder.php %%%%%
define("_AM_NEWBB_REORDERID","编号");
define("_AM_NEWBB_REORDERTITLE","主题");
define("_AM_NEWBB_REORDERWEIGHT","排列位置");
define("_AM_NEWBB_SETFORUMORDER","设置论坛顺序");
define("_AM_NEWBB_BOARDREORDER","论坛顺序已经更新。");

// forum_access.php
define("_AM_NEWBB_PERMISSIONS_TO_THIS_FORUM","论坛权限");
define("_AM_NEWBB_CAT_ACCESS","类别权限");
define("_AM_NEWBB_CAN_ACCESS","可以访问版面");
define("_AM_NEWBB_CAN_VIEW","可以浏览帖子内容");
define("_AM_NEWBB_CAN_POST","可以发贴");
define("_AM_NEWBB_CAN_REPLY","可以回复");
define("_AM_NEWBB_CAN_EDIT","可以编辑自己的帖子");
define("_AM_NEWBB_CAN_DELETE","可以删除自己的帖子");
define("_AM_NEWBB_CAN_ADDPOLL","可以发起投票");
define("_AM_NEWBB_CAN_VOTE","可以投票");
define("_AM_NEWBB_CAN_ATTACH","可以上传附件");
define("_AM_NEWBB_CAN_NOAPPROVE","可以不经审核直接发贴");
define("_AM_NEWBB_CAN_TYPE","可以使用主题类别");
define("_AM_NEWBB_CAN_HTML","可以使用HTML语法");
define("_AM_NEWBB_CAN_SIGNATURE","可以使用签名档");

define("_AM_NEWBB_ACTION","操作");

define("_AM_NEWBB_PERM_TEMPLATE","设置缺省权限模板");
define("_AM_NEWBB_PERM_TEMPLATE_DESC","编辑下列权限模板从而可以方便的应用到某个/些论坛");
define("_AM_NEWBB_PERM_FORUMS","选择论坛");
define("_AM_NEWBB_PERM_TEMPLATE_CREATED","权限模板已生成");
define("_AM_NEWBB_PERM_TEMPLATE_ERROR","建立权限模板时发生错误");
define("_AM_NEWBB_PERM_TEMPLATEAPP","应用缺省权限模板");
define("_AM_NEWBB_PERM_TEMPLATE_APPLIED","所选择的论坛已经采用缺省权限");
define("_AM_NEWBB_PERM_ACTION","权限管理工具");
define("_AM_NEWBB_PERM_SETBYGROUP","直接按群组设置权限");

// admin_forum_prune.php

define("_AM_NEWBB_PRUNE_RESULTS_TITLE","清理结果");
define("_AM_NEWBB_PRUNE_RESULTS_TOPICS","清理主题");
define("_AM_NEWBB_PRUNE_RESULTS_POSTS","清理帖子");
define("_AM_NEWBB_PRUNE_RESULTS_FORUMS","清理论坛");
define("_AM_NEWBB_PRUNE_STORE","将清理的贴子保存到");
define("_AM_NEWBB_PRUNE_ARCHIVE","清理的帖子存档");
define("_AM_NEWBB_PRUNE_FORUMSELERROR","未选择要清理的论坛");

define("_AM_NEWBB_PRUNE_DAYS","删除此时间段内没有回复的主题");
define("_AM_NEWBB_PRUNE_FORUMS","被清理的论坛");
define("_AM_NEWBB_PRUNE_STICKY","保留置顶贴");
define("_AM_NEWBB_PRUNE_DIGEST","保留精华贴");
define("_AM_NEWBB_PRUNE_LOCK","保留被锁贴");
define("_AM_NEWBB_PRUNE_HOT","保留回复超过此数的贴子");
define("_AM_NEWBB_PRUNE_SUBMIT","确定");
define("_AM_NEWBB_PRUNE_RESET","清除");
define("_AM_NEWBB_PRUNE_YES","是");
define("_AM_NEWBB_PRUNE_NO","否");
define("_AM_NEWBB_PRUNE_WEEK","一周");
define("_AM_NEWBB_PRUNE_2WEEKS","两周");
define("_AM_NEWBB_PRUNE_MONTH","一个月");
define("_AM_NEWBB_PRUNE_2MONTH","二个月");
define("_AM_NEWBB_PRUNE_4MONTH","四个月");
define("_AM_NEWBB_PRUNE_YEAR","一年");
define("_AM_NEWBB_PRUNE_2YEARS","二年");

// About.php constants
define('_AM_NEWBB_AUTHOR_INFO',"作者资料");
define('_AM_NEWBB_AUTHOR_NAME',"姓名");
define('_AM_NEWBB_AUTHOR_WEBSITE',"主页");
define('_AM_NEWBB_AUTHOR_EMAIL',"EMAIL");
define('_AM_NEWBB_AUTHOR_CREDITS',"致谢");
define('_AM_NEWBB_MODULE_INFO',"模块信息");
define('_AM_NEWBB_MODULE_STATUS',"开发状态");
define('_AM_NEWBB_MODULE_DEMO',"演示站点");
define('_AM_NEWBB_MODULE_SUPPORT',"官方支持网站");
define('_AM_NEWBB_MODULE_BUG',"问题报告");
define('_AM_NEWBB_MODULE_FEATURE',"新功能建议");
define('_AM_NEWBB_MODULE_DISCLAIMER',"版权声明");
define('_AM_NEWBB_AUTHOR_WORD',"作者的话");
define('_AM_NEWBB_BY','开发者：');
define('_AM_NEWBB_AUTHOR_WORD_EXTRA',"
<br /><br />
简体中文版由<a href='http://xoops.org.cn' target='_blank'>Xoops China Support Team</a>提供支持:<br />
图标制作:<br />
----imhsy (http://hsyong.com)<br />
翻译:<br />
----lab<br />
----adi (http://sibu.org)<br />
----karuna (http://ppfans.com)<br />
----insraq (http://insraq.xoops.cn)<br />
使用、升级说明:<br />
----insraq (http://insraq.xoops.cn)<br />
----laelia<br /><br />
繁体中文版由<a href='http://cyai.net' target='_blank'>CHIA</a>制作:<br />
----chia (http://cyai.net) [繁体]<br /><br />
如果您有什么建议, 功能要求或是bug报告，请访问<br />
----Xoops China Supp:: <a href='http://xoops.org.cn' target='_blank'>http://xoops.org.cn</a><br />
");

// admin_report.php
define("_AM_NEWBB_REPORTADMIN","举报管理");
define("_AM_NEWBB_PROCESSEDREPORT","查看已经处理的举报");
define("_AM_NEWBB_PROCESSREPORT","处理举报");
define("_AM_NEWBB_REPORTTITLE","举报主题");
define("_AM_NEWBB_REPORTEXTRA","附加信息");
define("_AM_NEWBB_REPORTPOST","被举报的帖子");
define("_AM_NEWBB_REPORTTEXT","举报内容");
define("_AM_NEWBB_REPORTMEMO","处理备忘录");

// admin_report.php
define("_AM_NEWBB_DIGESTADMIN","精华文摘管理");
define("_AM_NEWBB_DIGESTCONTENT","文摘内容");

// admin_votedata.php
define("_AM_NEWBB_VOTE_RATINGINFOMATION","评分信息");
define("_AM_NEWBB_VOTE_TOTALVOTES","总次数：");
define("_AM_NEWBB_VOTE_REGUSERVOTES","注册用户评分次数：%s");
define("_AM_NEWBB_VOTE_ANONUSERVOTES","游客评分次数：%s");
define("_AM_NEWBB_VOTE_USER","用户");
define("_AM_NEWBB_VOTE_IP","IP 地址");
define("_AM_NEWBB_VOTE_USERAVG","用户平均评分");
define("_AM_NEWBB_VOTE_TOTALRATE","总评分次数");
define("_AM_NEWBB_VOTE_DATE","已提交");
define("_AM_NEWBB_VOTE_RATING","评分");
define("_AM_NEWBB_VOTE_NOREGVOTES","没有注册用户评分");
define("_AM_NEWBB_VOTE_NOUNREGVOTES","没有游客评分");
define("_AM_NEWBB_VOTEDELETED","评分数据已保存。");
define("_AM_NEWBB_VOTE_ID","ID");
define("_AM_NEWBB_VOTE_FILETITLE","帖子主题");
define("_AM_NEWBB_VOTE_DISPLAYVOTES","评分信息");
define("_AM_NEWBB_VOTE_NOVOTES","无用户评分可显示");
define("_AM_NEWBB_VOTE_DELETE","删除评分");
define("_AM_NEWBB_VOTE_DELETEDSC","<strong>删除</strong>选中的评分信息。");

// admin_type_manager.php
define("_AM_NEWBB_TYPE_ADD","添加分类");
define("_AM_NEWBB_TYPE_TEMPLATE","类别模板");
define("_AM_NEWBB_TYPE_TEMPLATE_APPLY","应用类别模板");
define("_AM_NEWBB_TYPE_FORUM","按论坛设置类别");
define("_AM_NEWBB_TYPE_NAME","类别名称");
define("_AM_NEWBB_TYPE_COLOR","颜色");
define("_AM_NEWBB_TYPE_DESCRIPTION","描述");
define("_AM_NEWBB_TYPE_ORDER","顺序");
define("_AM_NEWBB_TYPE_LIST","类别列表");
define("_AM_NEWBB_TODEL_TYPE","确认要删除如下类别：[%s]？");
define("_AM_NEWBB_TYPE_EDITFORUM_DESC","数据尚未保存。请提交保存数据。");
define("_AM_NEWBB_TYPE_ORDER_DESC","如果要启用某个类别，类别顺序必须大于0。");

// admin_synchronization.php
define("_AM_NEWBB_SYNC_TYPE_FORUM","论坛数据");
define("_AM_NEWBB_SYNC_TYPE_TOPIC","主题数据");
define("_AM_NEWBB_SYNC_TYPE_POST","帖子数据");
define("_AM_NEWBB_SYNC_TYPE_USER","用户数据");
define("_AM_NEWBB_SYNC_TYPE_STATS","统计信息");
define("_AM_NEWBB_SYNC_TYPE_MISC","其它数据");

define("_AM_NEWBB_SYNC_ITEMS","每次处理的数目：");
?>