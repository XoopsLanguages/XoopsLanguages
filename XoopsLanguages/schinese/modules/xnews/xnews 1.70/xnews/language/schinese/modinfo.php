<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define("_MI_NW_NAME","新闻动态");

// A brief description of this module
define("_MI_NW_DESC","创建新闻发布区，用户可以发表新闻和评论。");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NW_BNAME1","新闻分类");
define("_MI_NW_BNAME3","重大消息");
define("_MI_NW_BNAME4","热门新闻");
define("_MI_NW_BNAME5","最新消息");
define("_MI_NW_BNAME6","一般新闻");
define("_MI_NW_BNAME7","分类导航");

// Sub menus in main menu block
define("_MI_NW_SMNAME1","新闻发布");
define("_MI_NW_SMNAME2","按月归档");

// Names of admin menu items
define("_MI_NW_ADMENU2","分类管理");
define("_MI_NW_ADMENU3","发表/编辑新闻");
define("_MI_NW_GROUPPERMS","权限");
// Added by Hervè for prune option
define("_MI_NW_PRUNENEWS","删除新闻");
// Added by Hervè
define("_MI_NW_EXPORT","新闻导出");

// Title of config items
define("_MI_NW_STORYHOME","首页要显示多少条新闻");
define("_MI_NW_NOTIFYSUBMIT","是否要通知管理员有新提交的新闻");
define("_MI_NW_DISPLAYNAV","是否每页显示导航区块");
define("_MI_NW_AUTOAPPROVE","自动发布网友提供的新闻？");
define("_MI_NW_ALLOWEDSUBMITGROUPS","可提交新闻的群组");
define("_MI_NW_ALLOWEDAPPROVEGROUPS","可审核新闻的群组");
define("_MI_NW_NEWSDISPLAY","新闻展示方式");
define("_MI_NW_NAMEDISPLAY","作者姓名");
define("_MI_NW_COLUMNMODE","栏目");
define("_MI_NW_STORYCOUNTADMIN","在管理区显示的新闻数量 (此选项也用於在管理区显示的分类数，同时也用於统计)：");
define("_MI_NW_UPLOADFILESIZE","允许上传的最大附件 (KB) 1048576 = 1 Meg");
define("_MI_NW_UPLOADGROUPS","设定可上传附件的群组");

// Description of each config items
define("_MI_NW_STORYHOMEDSC","");
define("_MI_NW_NOTIFYSUBMITDSC","");
define("_MI_NW_DISPLAYNAVDSC","");
define("_MI_NW_AUTOAPPROVEDSC","");
define("_MI_NW_ALLOWEDSUBMITGROUPSDESC","选定的群组将有权提交新闻");
define("_MI_NW_ALLOWEDAPPROVEGROUPSDESC","选定的群组将有权审核新闻");
define("_MI_NW_NEWSDISPLAYDESC","传统显示方式按发布时间顺序显示所有新闻。按类显示方式将分类显示新闻，最近的新闻显示全文其他只显示标题");
define("_MI_NW_ADISPLAYNAMEDSC","选择如何显示作者姓名");
define("_MI_NW_COLUMNMODE_DESC","选择显示新闻的列表栏目数");
define("_MI_NW_STORYCOUNTADMIN_DESC","");
define("_MI_NW_UPLOADFILESIZE_DESC","");
define("_MI_NW_UPLOADGROUPS_DESC","选定可上传附件的群组");

// Name of config item values
define("_MI_NW_NEWSCLASSIC","传统方式");
define("_MI_NW_NEWSBYTOPIC","按类显示");
define("_MI_NW_DISPLAYNAME1","帐号");
define("_MI_NW_DISPLAYNAME2","真实姓名");
define("_MI_NW_DISPLAYNAME3","不显示作者");
define("_MI_NW_UPLOAD_GROUP1","提交者和审核者");
define("_MI_NW_UPLOAD_GROUP2","仅为审核者");
define("_MI_NW_UPLOAD_GROUP3","禁止上传");

// Text for notifications
define("_MI_NW_GLOBAL_NOTIFY","全局通知");
define("_MI_NW_GLOBAL_NOTIFYDSC","应用到整个新闻模块的通知选项。");

define("_MI_NW_STORY_NOTIFY","当前分类-新消息");
define("_MI_NW_STORY_NOTIFYDSC","应用到当前分类的通知选项。");

define("_MI_NW_GLOBAL_NEWCATEGORY_NOTIFY","新分类通知");
define("_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYCAP","当有新的新闻分类创建时，通知我。");
define("_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYDSC","当有新的新闻分类创建时，接收通知。");
define("_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知：新的[新闻]分类");

define("_MI_NW_GLOBAL_STORYSUBMIT_NOTIFY","新闻提交通知");
define("_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYCAP","当有任何新闻提交(等待审核)，通知我。");
define("_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYDSC","当有任何新闻提交(等待审核)，接收通知。");
define("_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知：有新的新闻提交");

define("_MI_NW_GLOBAL_NEWSTORY_NOTIFY","新闻发布通知");
define("_MI_NW_GLOBAL_NEWSTORY_NOTIFYCAP","当有新的新闻发布时，通知我。");
define("_MI_NW_GLOBAL_NEWSTORY_NOTIFYDSC","当有任何新的新闻发布，接收通知。");
define("_MI_NW_GLOBAL_NEWSTORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知：有新的新闻发布");

define("_MI_NW_STORY_APPROVE_NOTIFY","通过审核通知");
define("_MI_NW_STORY_APPROVE_NOTIFYCAP","当该新闻通过审核时，通知我。");
define("_MI_NW_STORY_APPROVE_NOTIFYDSC","当该新闻通过审核时，接收通知。");
define("_MI_NW_STORY_APPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知：新闻审核通过");

define("_MI_NW_RESTRICTINDEX","限定索引页新闻显示？");
define("_MI_NW_RESTRICTINDEXDSC","如果选择是，用户在分类索引页将只能看到有阅读权的新闻分类的内容");

define("_MI_NW_NEWSBYTHISAUTHOR","显示同一作者发布的新闻");
define("_MI_NW_NEWSBYTHISAUTHORDSC","如果选择是，则将显示一条 \'该作者的全部新闻\' 的链接");

define("_MI_NW_PREVNEX_LINK","显示上一篇/下一篇链接？");
define("_MI_NW_PREVNEX_LINK_DESC","若此选项设定为 \'是\'，将於每篇新闻的底部显示2个新链接。该链接将按新闻的发布日期指向前一篇和後一篇。");
define("_MI_NW_SUMMARY_SHOW","显示最新列表？");
define("_MI_NW_SUMMARY_SHOW_DESC","若使用此选项，将於每篇新闻的底部显示一个包含所有最新消息的链接的总览。");
define("_MI_NW_AUTHOR_EDIT","允许作者编辑他们发表的新闻？");
define("_MI_NW_AUTHOR_EDIT_DESC","若设为允许，作者可以编辑他们自己发表的新闻。");
define("_MI_NW_RATE_NEWS","允许用户对新闻评分？");
define("_MI_NW_TOPICS_RSS","启用每个类别的 RSS feeds？");
define("_MI_NW_TOPICS_RSS_DESC","若您设定此选项为「是」，那麽类别的内容将可作为RSS feeds");
define("_MI_NW_DATEFORMAT","日期格式");
define("_MI_NW_DATEFORMAT_DESC","更多关於选择格式的信息，请查阅PHP文档 (http://www.php.net/manual/en/function.date.php)。注意，如果您不做任何指定，将使用默认日期格式。");
define("_MI_NW_META_DATA","允许输入Meta数据 (关键词和描述)？");
define("_MI_NW_META_DATA_DESC","您设定此选项为「是」，则将可以输入以下Meta数据：关键词和描述");
define("_MI_NW_BNAME8","随机新闻");
define("_MI_NW_NEWSLETTER","新闻快报");
define("_MI_NW_STATS","统计");
define("_MI_NW_FORM_OPTIONS","编辑器选项");
define("_MI_NW_FORM_COMPACT","简洁模式");
define("_MI_NW_FORM_DHTML","DHTML模式");
define("_MI_NW_FORM_SPAW","Spaw编辑器");
define("_MI_NW_FORM_HTMLAREA","HtmlArea编辑器");
define("_MI_NW_FORM_FCK","FCK编辑器");
define("_MI_NW_FORM_KOIVI","Koivi编辑器");
define("_MI_NW_FORM_OPTIONS_DESC","选择使用的编辑器。如您只是「简单的」安装了标准XOOPS安装包中提供的内在的编辑器系统，那麽您只能选择DHTML模式和简洁模式");
define("_MI_NW_KEYWORDS_HIGH","使用「高亮」显示关键词？");
define("_MI_NW_KEYWORDS_HIGH_DESC","若使用此选项，则在搜索中输入的关键词将高亮显示於新闻中");
define("_MI_NW_HIGH_COLOR","「高亮」显示关键词的颜色？");
define("_MI_NW_HIGH_COLOR_DES","只有使用「高亮」显示才有效");
define("_MI_NW_INFOTIPS","简介长度");
define("_MI_NW_INFOTIPS_DES","如果使用此选项，新闻的相关链接将包含该新闻的第一段字符。如果您将值设置为「０」，则该信息为空");
define("_MI_NW_SITE_NAVBAR","是否使用Mozilla和Opera网站的导航条？");
define("_MI_NW_SITE_NAVBAR_DESC","若您设定此选项为「是」，则您网站的访问者将可以使用网站导航条帮助导读您的新闻内容。");
define("_MI_NW_TABS_SKIN","选择一种「标签样式」的风格");
define("_MI_NW_TABS_SKIN_DESC","该风格将用於所有使用「标签样式」的区块");
define("_MI_NW_SKIN_1","Bar Style");
define("_MI_NW_SKIN_2","Beveled");
define("_MI_NW_SKIN_3","Classic");
define("_MI_NW_SKIN_4","Folders");
define("_MI_NW_SKIN_5","MacOs");
define("_MI_NW_SKIN_6","Plain");
define("_MI_NW_SKIN_7","Rounded");
define("_MI_NW_SKIN_8","ZDnet style");

// Added in version 1.50
define("_MI_NW_BNAME9","存档");
define("_MI_NW_FORM_TINYEDITOR","TinyEditor");
define("_MI_NW_FOOTNOTES","显示文章的打印版的链接？");
define("_MI_NW_DUBLINCORE","激活 Dublin Core Metadata ?");
define("_MI_NW_DUBLINCORE_DSC","<a hreh='http://dublincore.org/'>详细信息</a>");
define("_MI_NW_BOOKMARK_ME","显示'在以下站点做书签？");
define("_MI_NW_BOOKMARK_ME_DSC","在文章页面显示此区块");
define("_MI_NW_FF_MICROFORMAT","激活 Firefox 2 Micro Summaries ?");
define("_MI_NW_FF_MICROFORMAT_DSC","<a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>详细信息</a>");
define("_MI_NW_WHOS_WHO","作者列表");
define("_MI_NW_METAGEN","Metagen");
define("_MI_NW_TOPICS_DIRECTORY","文章目录");
define("_MI_NW_ADVERTISEMENT","广告");
define("_MI_NW_ADV_DESCR","输入在文章中显示的文本或者javascript代码");
define("_MI_NW_MIME_TYPES","输入可用的上传文件Mime类型 (每行一个)");
define("_MI_NW_ENHANCED_PAGENAV","采用高级页面导航？");
define("_MI_NW_ENHANCED_PAGENAV_DSC","你可以用以下方是来分页 : [pagrebreak:Page Title], 页面的导航会变为下拉列表，你还可以用 [summary] 来自动生成摘要");

// Added in version 1.54
define("_MI_NW_CATEGORY_NOTIFY","分类");
define("_MI_NW_CATEGORY_NOTIFYDSC","分类通知选项");

define("_MI_NW_CATEGORY_STORYPOSTED_NOTIFY","新文章提交");
define("_MI_NW_CATEGORY_STORYPOSTED_NOTIFYCAP","新文章提交到这个分类时通知我.");
define("_MI_NW_CATEGORY_STORYPOSTED_NOTIFYDSC","新文章提交到这个分类时接收通知.");
define("_MI_NW_CATEGORY_STORYPOSTED_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知 : 新文章");

// Added in version 1.63
define("_MI_NW_TAGS","使用关键字系统 ?");
define("_MI_NW_TAGS_DSC","XOOPS TAG模块");
define("_MI_NW_BNAME10","关键字云");
define("_MI_NW_BNAME11","热门关键字");
define("_MI_NW_INTRO_TEXT","Introduction text to show on the submit page");
define("_MI_NW_IMAGE_MAX_WIDTH","Maximum image width when it is resized");
define("_MI_NW_IMAGE_MAX_HEIGHT","Maximum image height when it is resized");

// Added in version 1.67
define("_MI_NW_CLONER","Clone Manager");

define("_MI_NW_LATESTNEWS_BLOCK","Latest News Block");

// Added in version 1.68 BETA
define("_MI_NW_TOPICDISPLAY","Display Topics ");
define("_MI_NW_TOPICDISPLAYDESC","This will enable/disable Topics title in title headers");

define("_MI_NW_SEOENABLE","SEO enable ");
define("_MI_NW_SEOENABLEDESC","This will enable/disable SEO activity.<br /> If <b>htaccess</b> is selected you will get: <br /> http://your.site.com/<b>xnews</b>/topics.1/your-topic-title.html <br /> If path-info is selected you will get: <br /> http://your.site.com/modules/xnews/index.php/topics.1/your-topic-title.html");

// Added in version 1.68 RC1
define("_MI_NW_EXTEND_META_DATA","Extend meta-data input");
define("_MI_NW_EXTEND_META_DATA_DESC","This will toggle between text and textarea for user edit meta-data input<br /> for both description and keywords.");

define("_MI_NW_NONE","None");
define("_MI_NW_TOPONLY","Top only");
define("_MI_NW_BOTTOMONLY","Bottom only");
define("_MI_NW_BOTH","Both");
define("_MI_NW_DISPLAYLINKICNS","Display Link Icons");
define("_MI_NW_DISPLAYLINKICNSDESC","Display print, friend and pdf icons none-top-bottom-both");

define("_MI_NW_SEOPATH","SEO path ");
define("_MI_NW_SEOPATHDESC","This will add a title to SEO url for both <b>htaccess</b> and <b>path-info</b> modes. <br /> If left empty you will get: <br /> http://your.site.com/topics.1/your-topic-title.html <br /> If you type <b>news</b> you will get: <br /> http://your.site.com/<b>news</b>/topics.1/your-topic-title.html <br /><br /> <b>a-z chars and minus char accepted. eg. news-of-day</b>");
define("_MI_NW_SEOLEVEL","SEO level ");
define("_MI_NW_SEOLEVELDESC","Here you can chose whether to have htaccess in xoops root dir or in module one. <br /> This will change the appearance of the url. <br /> In root level: <br /> http://your.site.com/news/topics.1/your-topic-title.html <br /> In module level: <br /> http://your.site.com/modules/xnews/news.topics.1/your-topic-title.html<br /><br /> Only works in htaccess mode and htaccess files will have to be installed accordingly.");
define("_MI_NW_MODULE_LEVEL","Module level");
define("_MI_NW_ROOT_LEVEL","Root level");

//ADDED wishcraft 1.68
define("_MI_NW_SEOENDOFURL","End of URL");
define("_MI_NW_SEOENDOFURL_DESC","File Extension to HTML Files");
define("_MI_NW_SEOENDOFURLRSS","End of URL");
define("_MI_NW_SEOENDOFURLRSS_DESC","File Extension to RSS Pages");
define("_MI_NW_SEOENDOFURLPDF","End of URL");
define("_MI_NW_SEOENDOFURLPDF_DESC","File Extension to Adobe Acrobat (PDF) Files");
?>
