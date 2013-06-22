<?php
// $Id$
// Thanks Tom (http://www.wf-projects.com), for correcting the Engligh language package

// Module Info

// The name of this module
define("_MI_NEWBB_NAME","CBB 论坛");

// A brief description of this module
define("_MI_NEWBB_DESC","XOOPS 中文论坛");

// Names of blocks for this module(Not all module has blocks)
define("_MI_NEWBB_BLOCK_TOPIC_POST","最新回复主题");
define("_MI_NEWBB_BLOCK_TOPIC","最新主题");
define("_MI_NEWBB_BLOCK_POST","最新帖子");
define("_MI_NEWBB_BLOCK_AUTHOR","作者");
define("_MI_NEWBB_BLOCK_TAG_CLOUD","Tag Cloud");
define("_MI_NEWBB_BLOCK_TAG_TOP","热门Tag");
/*
define("_MI_NEWBB_BNAME0","最新回复话题");
define("_MI_NEWBB_BNAME1","最新话题");
define("_MI_NEWBB_BNAME2","浏览最多的话题");
define("_MI_NEWBB_BNAME3","回复最多的话题");
define("_MI_NEWBB_BNAME4","最新精华主题");
define("_MI_NEWBB_BNAME5","最新置顶主题");
define("_MI_NEWBB_BNAME6","最新帖子");
define("_MI_NEWBB_BNAME7","最多发帖作者");
define("_MI_NEWBB_BNAME8","最多回帖作者");
define("_MI_NEWBB_BNAME9","最多精华作者");
define("_MI_NEWBB_BNAME10","最多置顶作者");
define("_MI_NEWBB_BNAME11","最新帖子内容");
*/

// Names of admin menu items
define("_MI_NEWBB_ADMENU_INDEX","管理首页");
define("_MI_NEWBB_ADMENU_CATEGORY","类别管理");
define("_MI_NEWBB_ADMENU_FORUM","讨论区管理");
define("_MI_NEWBB_ADMENU_PERMISSION","权限设置");
define("_MI_NEWBB_ADMENU_BLOCK","区块设置");
define("_MI_NEWBB_ADMENU_ORDER","排序设置");
define("_MI_NEWBB_ADMENU_SYNC","数据同步");
define("_MI_NEWBB_ADMENU_PRUNE","过期数据");
define("_MI_NEWBB_ADMENU_REPORT","举报处理");
define("_MI_NEWBB_ADMENU_DIGEST","精华文摘");
define("_MI_NEWBB_ADMENU_VOTE","评分管理");
define("_MI_NEWBB_ADMENU_TYPE","主题类别");



//config options

define("_MI_DO_DEBUG","调试模式");
define("_MI_DO_DEBUG_DESC","显示错误信息");

define("_MI_IMG_SET","按钮图标");
define("_MI_IMG_SET_DESC","选择图片风格");

define("_MI_THEMESET","界面风格");
define("_MI_THEMESET_DESC","选择 '"._NONE."' 则使用Xoops缺省风格");

define("_MI_DIR_ATTACHMENT","附件保存目录");
define("_MI_DIR_ATTACHMENT_DESC","最终的附件目录将为：'XOOPS根目录/你输入的目录', 最后不要加'/', 例如：'uploads/newbb'。<br /> 缩略图目录将为：'NewBB附件目录/thumbs'");
define("_MI_PATH_MAGICK","ImageMagick的路径");
define("_MI_PATH_MAGICK_DESC","通常是'/usr/bin/X11'.如果没有安装或是使用自动监测，请留空.");

define("_MI_SUBFORUM_DISPLAY","首页子论坛显示方式");
define("_MI_SUBFORUM_DISPLAY_DESC","");
define("_MI_SUBFORUM_EXPAND","展开");
define("_MI_SUBFORUM_COLLAPSE","简洁模式");
define("_MI_SUBFORUM_HIDDEN","不显示");

define("_MI_POST_EXCERPT","帖子摘要长度");
define("_MI_POST_EXCERPT_DESC","在论坛主题列表处当鼠标放到主题标题上时显示的帖子摘要的长度。0为不显示。");

define("_MI_PATH_NETPBM","Netpbm路径");
define("_MI_PATH_NETPBM_DESC","通常是'/usr/bin'.如果没有安装或是使用自动监测，请留空.");

define("_MI_IMAGELIB","选择图形库");
define("_MI_IMAGELIB_DESC","用于生成缩略图的图形库.");

define("_MI_MAX_IMG_WIDTH","显示图片的最大宽度");
define("_MI_MAX_IMG_WIDTH_DESC","允许的最大图片<b>宽度</b>，超过此值将会使用缩略图。<br >如果你不想创建缩略图，请输入0。");

define("_MI_MAX_IMAGE_WIDTH","允许生成缩略图的最大宽度");
define("_MI_MAX_IMAGE_WIDTH_DESC","设定要生成缩略图的原始图允许的最大宽度. <br >宽度超过此值的图片将不生成缩略图.");

define("_MI_MAX_IMAGE_HEIGHT","允许生成缩略图的最大高度");
define("_MI_MAX_IMAGE_HEIGHT_DESC","设定要生成缩略图的原始图允许的最大高度. <br >高度超过此值的图片将不生成缩略图.");

define("_MI_SHOW_DIS","在哪里显示免则声明？");
define("_MI_DISCLAIMER","免责声明");
define("_MI_DISCLAIMER_DESC","输入要显示的免责声明");
define("_MI_DISCLAIMER_TEXT","请遵守论坛秩序<BR /><BR />在发帖询问之前请先搜索，尽量避免重复提问");
define("_MI_NONE","不显示");
define("_MI_POST","发表主题时");
define("_MI_REPLY","回复时");
define("_MI_OP_BOTH","两者都显示");
define("_MI_WOL_ENABLE","显示在线信息");
define("_MI_WOL_ENABLE_DESC","在首页和论坛页面下方显示在线信息");
define("_MI_WOL_ADMIN_COL","'管理员'颜色");
define("_MI_WOL_ADMIN_COL_DESC","在线信息区块中'管理员'名字显示的颜色。");
define("_MI_WOL_MOD_COL","'板主'颜色");
define("_MI_WOL_MOD_COL_DESC","在线信息区块中'板主'名字显示的颜色。");
//define("_MI_LEVELS_ENABLE","启用虚拟 HP/MP/EXP 等级模式");
//define("_MI_LEVELS_ENABLE_DESC","<b>HP</b> 决定于你平均每天发表的主题数量。<br /><b>MP</b> 是由你注册日期和发表主题的数量决定的.<br /><b>EXP</b> 的上升决定于你的发表主题数量, 发表一个主题, EXP就上升1%，当你上升到100%时，将会升一级，EXP会重新恢复到0。");
define("_MI_NULL","关闭");
define("_MI_TEXT","文本");
define("_MI_GRAPHIC","图形");
define("_MI_USERLEVEL","虚拟 HP/MP/EXP 等级模式");
define("_MI_USERLEVEL_DESC","<strong>HP</strong>  决定于你平均每天发表的主题数量<br /><strong>MP</strong> 是由你注册日期和发表主题的数量决定的<br /><strong>EXP</strong> 决定于你的发表主题数量, 发表一个主题, EXP就上升1%，当你上升到100%时，将会升一级，EXP会重新恢复到0");
define("_MI_RSS_ENABLE","启用RSS");
define("_MI_RSS_ENABLE_DESC","如果使用RSS，设置最大数目及摘要长度。");
define("_MI_RSS_MAX_ITEMS","RSS最大数目");
define("_MI_RSS_MAX_DESCRIPTION","RSS摘要最大长度");
define("_MI_RSS_UTF8","RSS使用UTF-8编码");
define("_MI_RSS_UTF8_DESCRIPTION","如果选中, RSS编码将使用'UTF-8'; 否则使用'"._CHARSET."'.");
define("_MI_RSS_CACHETIME","RSS缓存时间");
define("_MI_RSS_CACHETIME_DESCRIPTION","生成RSS的缓存时间, 单位: 分钟.");

define("_MI_MEDIA_ENABLE","允许显示图片");
define("_MI_MEDIA_ENABLE_DESC","直接显示附件上传的图片");
define("_MI_USERBAR_ENABLE","允许显示用户信息");
define("_MI_USERBAR_ENABLE_DESC","显示用户详细信息：个人资料、短信息、ICQ、MSN 等");

define("_MI_GROUPBAR_ENABLE","允许显示群组信息");
define("_MI_GROUPBAR_ENABLE_DESC","在帖子中显示用户群组信息。");

define("_MI_RATING_ENABLE","启用对主题评分");
define("_MI_RATING_ENABLE_DESC","允许对主题评分");

define("_MI_VIEWMODE","主题显示模式");
define("_MI_VIEWMODE_DESC","请选择'全部展开','树形显示','简洁模式' 或者'缺省'。");
define("_MI_COMPACT","简洁模式");

define("_MI_MENUMODE","确省菜单模式");
define("_MI_MENUMODE_DESC","'SELECT'为下拉选择框, 'HOVER'模式会影响显示速度, 'CLICK'需要启用JAVASCRIPT");

define("_MI_REPORTMOD_ENABLE","启用用户举报");
define("_MI_REPORTMOD_ENABLE_DESC","用户可以向板主和管理员举报某些有问题的帖子");
define("_MI_SHOW_JUMPBOX","显示跳转菜单");
define("_MI_JUMPBOXDESC","用户就可以从一个论坛或者一个主题直接跳转到另一个论坛。");

define("_MI_SHOW_PERMISSIONTABLE","显示权限列表");
define("_MI_SHOW_PERMISSIONTABLE_DESC","选择\"是\"将在论坛页面下端显示用户的权限");

define("_MI_EMAIL_DIGEST","精华文摘发送周期");
define("_MI_EMAIL_DIGEST_DESC","设置给用户发送论坛精华文摘的周期");
define("_MI_NEWBB_EMAIL_NONE","不发送");
define("_MI_NEWBB_EMAIL_DAILY","每天");
define("_MI_NEWBB_EMAIL_WEEKLY","每周");

define("_MI_SHOW_IP","显示用户IP地址");
define("_MI_SHOW_IP_DESC","如果允许，则板主可以查看用户的IP地址");

define("_MI_ENABLE_KARMA","启用Karma");
define("_MI_ENABLE_KARMA_DESC","用户可以设定某个帖子的karma标准。只有达到该标准的成员才能查看此帖");

define("_MI_KARMA_OPTIONS","Karma的可选值");
define("_MI_KARMA_OPTIONS_DESC","使用 ',' 分隔");

define("_MI_SINCE_OPTIONS","主题阅读和搜索的时间范围选项");
define("_MI_SINCE_OPTIONS_DESC","正数单位为天负数单位为小时。使用 ',' 分隔");

define("_MI_SINCE_DEFAULT","时间范围选项的缺省值");
define("_MI_SINCE_DEFAULT_DESC","0 - 所有");

define("_MI_MODERATOR_HTML","允许板主使用HTML");
define("_MI_MODERATOR_HTML_DESC","如果允许，板主就可以在标题中使用HTML");

define("_MI_USER_ANONYMOUS","允许登陆用户匿名发帖");
define("_MI_USER_ANONYMOUS_DESC","登录的用户就可以选择匿名发帖");

define("_MI_ANONYMOUS_PRE","匿名用户前缀");
define("_MI_ANONYMOUS_PRE_DESC","该前缀将附加在匿名用户前面");

define("_MI_REQUIRE_REPLY","允许回复看帖");
define("_MI_REQUIRE_REPLY_DESC","用户可以要求他人只有回复后才能查看");

define("_MI_EDIT_TIMELIMIT","编辑时限");
define("_MI_EDIT_TIMELIMIT_DESC","设置用户编辑帖子的有效时限。单位：分钟。如果不限制，请输入0");

define("_MI_DELETE_TIMELIMIT","删帖时限");
define("_MI_DELETE_TIMELIMIT_DESC","设置用户删除帖子的有效时限。单位：分钟。如果不限制，请输入0");

define("_MI_POST_TIMELIMIT","连续发贴限制");
define("_MI_POST_TIMELIMIT_DESC","设置两次发帖之间需要的时间间隔。单位：秒。如果不限制，请输入0");

define("_MI_RECORDEDIT_TIMELIMIT","记录编辑信息时间期限");
define("_MI_RECORDEDIT_TIMELIMIT_DESC","设定开始发帖多长时间之后开始记录每次编辑的信息。单位：分钟。如果不限制，请输入0");

define("_MI_SHOW_REALNAME","使用真实姓名");
define("_MI_SHOW_REALNAME_DESC","显示时使用真实姓名替代注册名.");

define("_MI_CACHE_ENABLE","启用内部缓存");
define("_MI_CACHE_ENABLE_DESC","将部分临时数据保存到SESSION中以减少数据库查询次数");

define("_MI_QUICKREPLY_ENABLE","启用快速回复");
define("_MI_QUICKREPLY_ENABLE_DESC","允许用使用快速回复表方便的回帖");

define("_MI_POSTSPERPAGE","每页帖子数");
define("_MI_POSTSPERPAGE_DESC","查看主题时每页显示的最多帖子数");

define("_MI_POSTSFORTHREAD","树状显示的帖子数目上限");
define("_MI_POSTSFORTHREAD_DESC","超过该限将自动转为展开模式");

define("_MI_TOPICSPERPAGE","每页主题数");
define("_MI_TOPICSPERPAGE_DESC","论坛页面上每页显示最多主题数");

define("_MI_IMG_TYPE","按钮图形文件类型");
define("_MI_IMG_TYPE_DESC","选定论坛中按钮的图形文件类型.<br />- png: 推荐高速服务器使用该类型;<br />- gif: 普通服务器;<br />- auto: 自动选择, IE浏览器下用gif其他浏览器用png");

define("_MI_PNGFORIE_ENABLE","启用png图形处理");
define("_MI_PNGFORIE_ENABLE_DESC","在IE下对png图片作透明处理(只在图形文件类型选用png时才起作用; 影响显示速度)");

define("_MI_FORM_OPTIONS","编辑器选项");
define("_MI_FORM_OPTIONS_DESC","设定用户在发帖/编辑时可选择的编辑器.");
define("_MI_FORM_COMPACT","简洁");
define("_MI_FORM_DHTML","标准");
define("_MI_FORM_SPAW","Spaw");
define("_MI_FORM_HTMLAREA","HTMLArea");
define("_MI_FORM_FCK","FCK");
define("_MI_FORM_KOIVI","Koivi");
define("_MI_FORM_TINYMCE","TinyMCE");

define("_MI_MAGICK","ImageMagick");
define("_MI_NETPBM","Netpbm");
define("_MI_GD1","GD1");
define("_MI_GD2","GD2");
define("_MI_AUTO","自动检测");

define("_MI_WELCOMEFORUM","欢迎新用户论坛");
define("_MI_WELCOMEFORUM_DESC","当有新用户第一次登陆论坛时将会自动在该论坛发布一个自我介绍的帖子");

define("_MI_PERMCHECK_ONDISPLAY","权限检查");
define("_MI_PERMCHECK_ONDISPLAY_DESC","在浏览模式下检查用户权限(对速度有影响)");

define("_MI_USERMODERATE","启用用户监视");
define("_MI_USERMODERATE_DESC","");


// RMV-NOTIFY
// Notification event descriptions and mail templates

define('_MI_NEWBB_THREAD_NOTIFY','主题');
define('_MI_NEWBB_THREAD_NOTIFYDSC','当前主题的通知选项。');

define('_MI_NEWBB_FORUM_NOTIFY','论坛');
define('_MI_NEWBB_FORUM_NOTIFYDSC','当前论坛的通知选项');

define('_MI_NEWBB_GLOBAL_NOTIFY','全局通知');
define('_MI_NEWBB_GLOBAL_NOTIFYDSC','论坛全局通知选项');

define('_MI_NEWBB_THREAD_NEWPOST_NOTIFY','新回复');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP','如果该主题有回复请通知我。');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC','当该主题有回复的时候，请通知我。');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自动通知： 有新回复！');

define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY','新主题');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP','如果该论坛有新主题，请通知我。');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC','如果当前论坛有新主题发布，请通知我。');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自动通知 : 论坛有新主题');

define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY','新论坛');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP','如果有新的论坛创建，请通知我。');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC','如果有新的论坛创建，请发通知给我。');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自动通知 : 有新论坛创建');

define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY','新帖子');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP','如果有任何新帖子请通知我。');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC','如果有任何的新帖子发布，请通知我。');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自动通知 : 有新帖');

define('_MI_NEWBB_FORUM_NEWPOST_NOTIFY','论坛新帖通知');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP','如果该论坛里有任何新帖子，请通知我');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC','在当前论坛中有任何新帖子发布，请通知我。');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自动通知 : 论坛里有新帖');

define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY','新帖全文通知');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP','如果有新的帖子，请通知我。（通知内容包括帖子全文）');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC','如果有任何新帖发布，请通知我（通知内容包括帖子全文）.');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自动通知 : 新帖全文通知');

define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY','论坛精华文摘');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP','订阅论坛精华文摘。');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC','接受论坛精华文摘通知');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自动通知 : 论坛精华文摘');


// FOR installation
define("_MI_NEWBB_INSTALL_CAT_TITLE","测试类别");
define("_MI_NEWBB_INSTALL_CAT_DESC","测试创建分类.");
define("_MI_NEWBB_INSTALL_FORUM_NAME","测试论坛");
define("_MI_NEWBB_INSTALL_FORUM_DESC","测试创建论坛.");
define("_MI_NEWBB_INSTALL_POST_SUBJECT","恭喜! 论坛已开始正常运行.");
define("_MI_NEWBB_INSTALL_POST_TEXT","
	欢迎光临".(htmlspecialchars($GLOBALS["xoopsConfig"]['sitename'], ENT_QUOTES))."论坛.
	请注册登录并开始新话题.
	
	如果您在使用中遇到任何问题, 请访问[url=http://xoops.org.cn]Xoops中文支持[/url]或[url=http://xoopsforge.com/modules/newbb/]CBB开发者网站[/url].
	");
?>