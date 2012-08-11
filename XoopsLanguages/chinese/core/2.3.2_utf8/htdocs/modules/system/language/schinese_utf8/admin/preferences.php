<?php
// $Id: preferences.php 1507 2008-04-26 12:08:47Z phppp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF","网站参数设置");
define("_MD_AM_SITENAME","网站名称");
define("_MD_AM_SLOGAN","网站口号");
define("_MD_AM_ADMINML","管理员Email");
define("_MD_AM_LANGUAGE","网站默认语言");
define("_MD_AM_STARTPAGE","网站首页所用模块");
define("_MD_AM_NONE","无");
define("_MD_AM_SERVERTZ","服务器时区");
define("_MD_AM_DEFAULTTZ","网站默认时区");
define("_MD_AM_DTHEME","默认风格（theme）");
define("_MD_AM_THEMESET","模板风格");
define("_MD_AM_ANONNAME","匿名用户名称");
define("_MD_AM_MINPASS","密码最小长度");
define("_MD_AM_NEWUNOTIFY","有新会员注册时发邮件通知?");
define("_MD_AM_SELFDELETE","允许会员删除自己的帐号?");
define("_MD_AM_LOADINGIMG","显示“正在载入...”图片?");
define("_MD_AM_USEGZIP","使用 gzip 压缩?");
define("_MD_AM_UNAMELVL","会员帐号的允许类型");
define("_MD_AM_STRICT","严格 （只允许字母和数字）");
define("_MD_AM_MEDIUM","中等");
define("_MD_AM_LIGHT","宽松（可使用汉字）");
define("_MD_AM_USERCOOKIE","设置会员帐号的cookies名称。可以让会员不用每次都输入用户名。");
define("_MD_AM_USERCOOKIEDSC","使用此cookie保存会员帐号一年（如果会员愿意）。如果有此cookie，登录框将自动显示会员帐号。");
define("_MD_AM_USEMYSESS","使用自定义 session");
define("_MD_AM_USEMYSESSDSC","是否使用定制session");
define("_MD_AM_SESSNAME","Session名称");
define("_MD_AM_SESSNAMEDSC","Session名称（启用定制session才有作用）");
define("_MD_AM_SESSEXPIRE","Session有效时间");
define("_MD_AM_SESSEXPIREDSC","最大sesssion有效时间[以分钟计]（只有当启用定制seesion时才有效）");
define("_MD_AM_BANNERS","启用广告?");
define("_MD_AM_MYIP","您的IP地址");
define("_MD_AM_MYIPDSC","来自此IP的展示不计入广告的展示统计");
define("_MD_AM_ALWDHTML","允许使用的HTML标签。");
define("_MD_AM_INVLDMINPASS","密码最小长度");
define("_MD_AM_INVLDUCOOK","无效的帐号cookies名称。");
define("_MD_AM_INVLDSCOOK","无效的session cookies名称。");
define("_MD_AM_INVLDSEXP","无效的session时间。");
define("_MD_AM_ADMNOTSET","管理员邮件地址未设置。");
define("_MD_AM_YES","是");
define("_MD_AM_NO","否");
define("_MD_AM_DONTCHNG","请勿修改！");
define("_MD_AM_REMEMBER","为了让系统能正常修改文件，请将该文件的属性设为666.");
define("_MD_AM_IFUCANT","如果无法修改属性的话请手动手动修改文件。");


define("_MD_AM_COMMODE","默认的评论显示模式");
define("_MD_AM_COMORDER","默认的评论排序方式");
define("_MD_AM_ALLOWHTML","允许在评论中使用HTML");
define("_MD_AM_DEBUGMODE","打开查错模式");
define("_MD_AM_DEBUGMODEDSC","打开后将会显示错误信息。网站正式运行后请关闭此功能。");
define("_MD_AM_AVATARALLOW","允许上传头像");
define("_MD_AM_AVATARMP","最少发布文章数");
define("_MD_AM_AVATARMPDSC","只有发帖超过该数目的会员才可以上传头像");
define("_MD_AM_AVATARW","头像最大宽度（像素）");
define("_MD_AM_AVATARH","头像最大高度（像素）");
define("_MD_AM_AVATARMAX","头像文件大小（字节）");
define("_MD_AM_AVATARCONF","自定义头像设置");
define("_MD_AM_CHNGUTHEME","修改所有会员的风格");
define("_MD_AM_NOTIFYTO","会员注册时通知群组");
define("_MD_AM_ALLOWTHEME","允许会员选择风格");
define("_MD_AM_ALLOWIMAGE","允许会员在发表的文章中显示图片");

define("_MD_AM_USERACTV","需要通过Email激活帐号");
define("_MD_AM_AUTOACTV","注册后自动激活");
define("_MD_AM_ADMINACTV","由管理员手动激活");
define("_MD_AM_ACTVTYPE","选择会员注册的激活方式");
define("_MD_AM_ACTVGROUP","选择激活邮件要附送的群组");
define("_MD_AM_ACTVGROUPDSC","只有选用 '由管理员激活' 才有效");
define('_MD_AM_USESSL','使用SSL加密方式登录?');
define('_MD_AM_SSLPOST','SSL Post变量名');
define('_MD_AM_SSLPOSTDSC','通过POST发送Session值时所用的变量名。如果您不了解此变量，请选一个不容易猜到的名称。');
define('_MD_AM_DEBUGMODE0','关闭');
define('_MD_AM_DEBUGMODE1','PHP 查错');
define('_MD_AM_DEBUGMODE2','MySQL/Blocks 查错');
define('_MD_AM_DEBUGMODE3','Smarty 模板查错');
define('_MD_AM_MINUNAME','帐号最小长度');
define('_MD_AM_MAXUNAME','帐号最大长度');
define('_MD_AM_GENERAL','基本参数设置');
define('_MD_AM_USERSETTINGS','会员管理设置');
define('_MD_AM_ALLWCHGMAIL','允许会员修改邮件地址');
define('_MD_AM_ALLWCHGMAILDSC','');
define('_MD_AM_IPBAN','IP屏蔽');
define('_MD_AM_BADEMAILS','用户注册时不可使用的Email');
define('_MD_AM_BADEMAILSDSC','请用 <strong>|</strong> 分隔关键词，不区分大小写，可使用regex。');
define('_MD_AM_BADUNAMES','禁用的帐号名称');
define('_MD_AM_BADUNAMESDSC','请用 <strong>|</strong> 分隔关键词，不区分大小写，可使用regex。');
define('_MD_AM_DOBADIPS','启用IP屏蔽功能');
define('_MD_AM_DOBADIPSDSC','使用此IP地址的用户将无法浏览您的网站');
define('_MD_AM_BADIPS','输入要屏蔽的IP地址。<br />请用 <strong>|</strong> 分隔关键词，不区分大小写，可使用regex。');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc 将拒绝以aaa.bbb.ccc开头的IP地址的访问。<br />aaa.bbb.ccc$ 将拒绝以aaa.bbb.ccc结尾的IP地址的访问。 <br />aaa.bbb.ccc 将拒绝包含aaa.bbb.ccc的IP地址的访问。');
define('_MD_AM_PREFMAIN','系统参数设置');
define('_MD_AM_METAKEY','Meta 关键字');
define('_MD_AM_METAKEYDSC','关键字标记用于代表站点的主要内容。通常由多个关键词组成。填入多个关键词请用半角逗号（,）隔开（如 XOOP, PHP, mySQL, portal system）');
define('_MD_AM_METARATING','Meta 等级');
define('_MD_AM_METARATINGDSC','等级标记用来定义站点的适合年龄及内容的等级');
define('_MD_AM_METAOGEN','一般');
define('_MD_AM_METAO14YRS','14 岁');
define('_MD_AM_METAOREST','限制');
define('_MD_AM_METAOMAT','成人');
define('_MD_AM_METAROBOTS','Meta 机器人');
define('_MD_AM_METAROBOTSDSC','机器人标记用来告知搜索引擎什么样的内容可供其爬行索引');
define("_MD_AM_INDEXFOLLOW","Index, Follow");
define("_MD_AM_NOINDEXFOLLOW","No Index, Follow");
define("_MD_AM_INDEXNOFOLLOW","Index, No Follow");
define("_MD_AM_NOINDEXNOFOLLOW","No Index, No Follow");
define('_MD_AM_METAAUTHOR','META作者');
define('_MD_AM_METAAUTHORDSC','作者名称，email及网址。');
define('_MD_AM_METACOPYR','Meta 版权');
define('_MD_AM_METACOPYRDSC','版权标记用来定义网站页面文件所遵循的版权说明。');
define('_MD_AM_METADESC','Meta 描述');
define('_MD_AM_METADESCDSC','描述标记相当于网站的摘要，通常用一小段文字来表达。');
define('_MD_AM_METAFOOTER','Meta 及页脚');
define('_MD_AM_FOOTER','页尾注脚');
define('_MD_AM_FOOTERDSC','确定使用完整网址, 否则链接在模块页面将不能正常工作。');
define('_MD_AM_CENSOR','敏感词语检查');
define('_MD_AM_DOCENSOR','启用敏感词语检查');
define('_MD_AM_DOCENSORDSC','若此选项打开，将会过滤文章中的敏感词语。 若为了提升网站速度，建议关闭此选项。');
define('_MD_AM_CENSORWRD','敏感词语');
define('_MD_AM_CENSORWRDDSC','输入要禁用的敏感词语。<br />使用 <strong>|</strong> 分开，不区分大小写。');
define('_MD_AM_CENSORRPLC','敏感词语将被取代为:');
define('_MD_AM_CENSORRPLCDSC','敏感词语将会被取代成您所输入的字符');

define('_MD_AM_SEARCH','搜索选项');
define('_MD_AM_DOSEARCH','启用全站搜索');
define('_MD_AM_DOSEARCHDSC','允许搜索全站范围的内容。');
define('_MD_AM_MINSEARCH','关键字最小长度');
define('_MD_AM_MINSEARCHDSC','搜索时输入最少字数');
define('_MD_AM_MODCONFIG','模块设置选项');
define('_MD_AM_DSPDSCLMR','显示注册条款声明');
define('_MD_AM_DSPDSCLMRDSC','选择是，将在注册页面显示条款声明');
define('_MD_AM_REGDSCLMR','注册条款声明');
define('_MD_AM_REGDSCLMRDSC','会员注册时显示的条款');
define('_MD_AM_ALLOWREG','允许新会员注册');
define('_MD_AM_ALLOWREGDSC','如果不再接受新会员，就选“否”');
define('_MD_AM_THEMEFILE','从/themes/yourtheme/templates更新模块的模板文件');
define('_MD_AM_THEMEFILEDSC','启用这个选项后，如果/themes/yourtheme/templates有了更新，模块的.html模板文件将自动更新，而不再继续使用缓存的旧文件。网站正式运行后，请关闭该功能。');
define('_MD_AM_CLOSESITE','关闭网站');
define('_MD_AM_CLOSESITEDSC','网站关闭后只允许有被授权群组的会员才能进入。');
define('_MD_AM_CLOSESITEOK','选择网站关闭后有权进入的会员群组。');
define('_MD_AM_CLOSESITEOKDSC','网站最高管理权者不受限制。');
define('_MD_AM_CLOSESITETXT','网站关闭原因');
define('_MD_AM_CLOSESITETXTDSC','网站关闭时该段内容自动显示在首页。');
define('_MD_AM_SITECACHE','网站缓存');
define('_MD_AM_SITECACHEDSC','缓存保存网站的内容，如模块、区块等。');
define('_MD_AM_MODCACHE','模块缓存');
define('_MD_AM_MODCACHEDSC','缓存模块数据。');
define('_MD_AM_NOMODULE','没有模块使用缓存。');
define('_MD_AM_DTPLSET','默认模板组');
define('_MD_AM_SSLLINK','SSL登录页面的URL');

// added for mailer
define("_MD_AM_MAILER","邮件设置");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","发件人地址");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","发件人姓名");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","来自");
define("_MD_AM_MAILFROMUIDDESC","当系统发送一条短消息，显示的发件人名称");
define("_MD_AM_MAILERMETHOD","邮件分发方式");
define("_MD_AM_MAILERMETHODDESC","用于分发邮件的方式。默认为“mail”，除非这种方式无法正常工作，否则不要用其他方式");
define("_MD_AM_SMTPHOST","SMTP服务器");
define("_MD_AM_SMTPHOSTDESC","尝试连接的SMTP服务器列表.");
define("_MD_AM_SMTPUSER","SMTPAuth的用户名");
define("_MD_AM_SMTPUSERDESC","很多SMTP服务器都启用了验证功能，请输入您的会员名");
define("_MD_AM_SMTPPASS","SMTPAuth的密码");
define("_MD_AM_SMTPPASSDESC","输入您在SMTP服务器的会员的密码");
define("_MD_AM_SENDMAILPATH","sendmail路径");
define("_MD_AM_SENDMAILPATHDESC","请输入您Web服务器上的Sendmail程序（或者其他邮件服务器程序）的路径.");
define("_MD_AM_THEMEOK","用户可选择的风格");
define("_MD_AM_THEMEOKDSC","可供用户选择的风格");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","XOOPS 数据库");
define("_MD_AM_AUTH_CONFOPTION_LDAP","标准LDAP目录");
define("_MD_AM_AUTH_CONFOPTION_AD","微软活动目录 &copy");
define("_MD_AM_AUTHENTICATION","认证方式管理");
define("_MD_AM_AUTHMETHOD","认证方法");
define("_MD_AM_AUTHMETHODDESC","选择对会员身份进行认证的方法。");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - 邮件域名称");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","LDAP 目录树中邮件域的名称。");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - 通用名(CN)的域名称");
define("_MD_AM_LDAP_NAME_ATTR_DESC","LDAP目录中通用名(Common Name)的域名称。");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - 姓的域名称");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","LDAP目录中姓(Surname)的域名称.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - 名的域名称");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","LDAP目录中名(Given Name)的域名称.");
define("_MD_AM_LDAP_BASE_DN","LDAP - 基本区别名");
define("_MD_AM_LDAP_BASE_DN_DESC","LDAP目录树的基本区别名(Distinguished Name).");
define("_MD_AM_LDAP_PORT","LDAP - 端口号");
define("_MD_AM_LDAP_PORT_DESC","登录LDAP目录服务器的端口号。");
define("_MD_AM_LDAP_SERVER","LDAP - 服务器名");
define("_MD_AM_LDAP_SERVER_DESC","LDAP目录服务器的名称.");

define("_MD_AM_LDAP_MANAGER_DN","LDAP 管理员区别名");
define("_MD_AM_LDAP_MANAGER_DN_DESC","允许搜索的人员区别名。");
define("_MD_AM_LDAP_MANAGER_PASS","LDAP 管理员的密码");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","允许搜索的人员的密码");
define("_MD_AM_LDAP_VERSION","LDAP 版本协议");
define("_MD_AM_LDAP_VERSION_DESC","LDAP 版本协议：2或3");
define("_MD_AM_LDAP_USERS_BYPASS","用户可以绕过LDAP验证");
define("_MD_AM_LDAP_USERS_BYPASS_DESC","用户以XOOPS方式验证");

define("_MD_AM_LDAP_USETLS"," 使用 TLS 链接");
define("_MD_AM_LDAP_USETLS_DESC","使用 TLS (Transport Layer Security-传输层安全) 连接。 TLS 使用标准的389端口。<BR>" .
								  " 并且 LDAP 的版本为3");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","用于搜索会员的LDAP属性");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","当在区别名（DN）选项中设置登录名为是时, 必须与XOOPS中的登录名一致");
define("_MD_AM_LDAP_LOGINNAME_ASDN","在区别名中使用的登录名");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","LDAP的区别名（DN）中使用的XOOPS登录名（如：uid=<loginname>,dc=xoops,dc=org）<br />该线程不用搜索，而是直接在目录服务器中读取");

define("_MD_AM_LDAP_FILTER_PERSON","LDAP查询用户的搜索过滤器");
define("_MD_AM_LDAP_FILTER_PERSON_DESC","用户搜索会员的特殊LDAP过期器。@@loginname@@ 被替换为用户的登录名。如果你不清楚，请务必留空！" .
		"<br />例如：(&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br />例如：(&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME","域名");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","Windows域名（仅活动目录服务器（ADS）和NT服务器）");

define("_MD_AM_LDAP_PROVIS","自动创建会员帐号");
define("_MD_AM_LDAP_PROVIS_DESC","如果没有XOOPS用户数据库，那么将自动创建");

define("_MD_AM_LDAP_PROVIS_GROUP","预设新会员群组");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","新会员将会被设定为该群组");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","Xoops-Auth server fields mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br /><br />Format [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br />for example : email=mail" .
		"<br />Separate each with a |" .
		"<br /><br />!! For advanced users !!");
		
define("_MD_AM_LDAP_PROVIS_UPD","Maintain xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","The Xoops User account is always synchronized with the Authentication Server");


define("_MD_AM_CPANEL","控制面板界面（Control Panel GUI）");
define("_MD_AM_CPANELDSC","后台");

define("_MD_AM_WELCOMETYPE","发送欢迎信息");
define("_MD_AM_WELCOMETYPE_DESC","选择一种方式，在用户成功注册以后发送欢迎信息。");
define("_MD_AM_WELCOMETYPE_EMAIL","电子邮件");
define("_MD_AM_WELCOMETYPE_PM","短信息");
define("_MD_AM_WELCOMETYPE_BOTH","电子邮件和短信息");

?>