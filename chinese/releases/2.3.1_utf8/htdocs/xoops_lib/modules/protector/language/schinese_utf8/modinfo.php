<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Xoops安全卫士");

// A brief description of this module
define($constpref."_DESC","该模块可以保护你的XOOPS网站免受各类攻击，比如DoS, SQL注入, 变量污染等.");

// Menu
define($constpref."_ADMININDEX","管理中心");
define($constpref."_ADVISORY","安全建议");
define($constpref."_PREFIXMANAGER","数据表前缀管理");
define($constpref.'_ADMENU_MYBLOCKSADMIN','权限设置') ;

// Configs
define($constpref.'_GLOBAL_DISBL','暂停保护');
define($constpref.'_GLOBAL_DISBLDSC','所有保护将被停止。<br />别忘了，网站维护后要关闭此项。');

define($constpref.'_RELIABLE_IPS','信任 IP 地址');
define($constpref.'_RELIABLE_IPSDSC','请用 | 分隔关键词。<br />^aaa.bbb.ccc 将拒绝以aaa.bbb.ccc开头的IP地址的访问。<br />
aaa.bbb.ccc$ 将允许以aaa.bbb.ccc结尾的IP地址的访问。<br />
aaa.bbb.ccc 将允许包含aaa.bbb.ccc的IP地址的访问。');

define($constpref.'_LOG_LEVEL','日志级别');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','恶意 IP 屏蔽时间 (秒)');

define($constpref.'_LOGLEVEL0','无');
define($constpref.'_LOGLEVEL15','Quiet');
define($constpref.'_LOGLEVEL63','quiet');
define($constpref.'_LOGLEVEL255','全部');

define($constpref.'_HIJACK_TOPBIT','保护 IP 位数');
define($constpref.'_HIJACK_TOPBITDSC',' Session 欺骗拦截:<br />默认 32(位). (每一位都受到保护)<br />当你的 IP 不稳定时, 可以设置一个 IP 段的位数.<br />(如)如果你的IP可以在这个范围里面切换 192.168.0.0-192.168.0.255, 在这个选项中设置为 24(bit)');
define($constpref.'_HIJACK_DENYGP','不允许将 IP 地址转移到 session中的群组');
define($constpref.'_HIJACK_DENYGPDSC','反 Session 拦截:<br />选中的群组将不能把当前的IP转移到session中。<br />(推荐管理员群组启用.)');
define($constpref.'_SAN_NULLBYTE','空字符过滤');
define($constpref.'_SAN_NULLBYTEDSC','这个空字符 "\\0" 经常用于恶意攻击<br />启用此功能后空字符将会被转换成空格。<br />(高度推荐启用)');
define($constpref.'_DIE_NULLBYTE','如果发现空字符攻击后停用模块');
define($constpref.'_DIE_NULLBYTEDSC','这个空字符 "\\0" 经常用于恶意攻击.<br />(高度推荐启用)');
define($constpref.'_DIE_BADEXT','如果有恶意文件上传后停用模块');
define($constpref.'_DIE_BADEXTDSC','如果有人尝试上传特殊扩展名的文件如 .php 等, 这个模块将被停用.<br />如果经常要添加 php 文件到 B-Wiki 或者 PukiWikiMod, 请关闭此项.');
define($constpref.'_CONTAMI_ACTION','如果发现全局变量污染现象后的行为');
define($constpref.'_CONTAMI_ACTIONDS','选择一个行为，当有人试图污染全局变量时候执行这个行为。<br />(推荐选择白屏)');
define($constpref.'_ISOCOM_ACTION','如果发现半个注释符号后的行为');
define($constpref.'_ISOCOM_ACTIONDSC','SQL注入拦截:<br />选择一个行为， 在发现半个注释符号"/*"后执行的行为.<br />"转换" 就是把缺少的一半注释符号 "*/" 补全.<br />(推荐选择转换)');
define($constpref.'_UNION_ACTION','如果发现请求中带有 “UNION” 后的行为');
define($constpref.'_UNION_ACTIONDSC','SQL注入拦截:<br />选择一个行为，比如在SQL中出现 UNION 后执行的行为.<br />"转换" 就是把 "union" 改为 "uni-on".<br />(推荐选择转换)');
define($constpref.'_ID_INTVAL','强制初始化变量类型为整数');
define($constpref.'_ID_INTVALDSC','所有名为 "*id" 的请求将被转换为整数。<br />这个选项保护你的网站不会受到SQL注入和跨站攻击（XSS）。<br />推荐启用此功能, 但是可能会导致一些模块出现问题.');
define($constpref.'_FILE_DOTDOT','目录系统保护');
define($constpref.'_FILE_DOTDOTDSC','此功能将会去除请求中的 ".." 如目录遍历 ');

define($constpref.'_BF_COUNT','反暴力破解');
define($constpref.'_BF_COUNTDSC','设置最多重试登录时间为10分钟。如果有人失败的时间超过了这个时间限制，他/她的IP地址将被禁止。');

define($constpref.'_DOS_SKIPMODS','不检测 DDoS/（爬虫）Crawler 的模块');
define($constpref.'_DOS_SKIPMODSDSC','设置模块的目录以“|”隔开. 这个选项是非常有用的，比如聊天室模块等等。');

define($constpref.'_DOS_EXPIRE','高频重载监控时间 (秒)');
define($constpref.'_DOS_EXPIREDSC','高频重载(F5攻击)和高负荷爬虫的监控时间.');

define($constpref.'_DOS_F5COUNT','F5攻击的次数限值');
define($constpref.'_DOS_F5COUNTDSC','防止DoS攻击.<br />如果重载次数超过该值, 将被当作有害攻击处理.');
define($constpref.'_DOS_F5ACTION','针对F5的措施');

define($constpref.'_DOS_CRCOUNT','爬虫的次数限值');
define($constpref.'_DOS_CRCOUNTDSC','防止高负荷爬虫.<br />如果重载次数超过该值, 将被当作有害爬虫.');
define($constpref.'_DOS_CRACTION','针对高负荷爬虫的措施');

define($constpref.'_DOS_CRSAFE','受欢迎的User-Agent');
define($constpref.'_DOS_CRSAFEDSC','User-Agent的perl正则表达式.<br />如果符合该表达式, 该爬虫将不再当作高负荷爬虫处理.<br />例如 /(Baidu|msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','否 (只记录)');
define($constpref.'_OPT_SAN','转换');
define($constpref.'_OPT_EXIT','白屏');
define($constpref.'_OPT_BIP','封IP (永久)');
define($constpref.'_OPT_BIPTIME0','封IP (暂时)');

define($constpref.'_DOSOPT_NONE','否 (只记录)');
define($constpref.'_DOSOPT_SLEEP','休眠');
define($constpref.'_DOSOPT_EXIT','白屏');
define($constpref.'_DOSOPT_BIP','封IP (永久)');
define($constpref.'_DOSOPT_BIPTIME0','封IP (延期)');
define($constpref.'_DOSOPT_HTA','DENY by .htaccess');

define($constpref.'_BIP_EXCEPT','不被记录为恶意IP地址的群组');
define($constpref.'_BIP_EXCEPTDSC','属于这些群组的用户将永远不会被禁止。<br />(推荐管理员群组启用此项)');

define($constpref.'_DISABLES','禁用XOOPS的危险特性');

define($constpref.'_BIGUMBRELLA','跨站攻击拦截 (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','此功能可以保护你的网站不会受到由XSS漏洞导致的攻击。但是不能够 100% 的拦截。');

define($constpref.'_SPAMURI4U','反垃圾邮件（anti-SPAM）: URLs for normal users');
define($constpref.'_SPAMURI4UDSC','If this number of URLs are found in POST data from users other than admin, the POST is considered as SPAM. 填0表示禁用此功能.');
define($constpref.'_SPAMURI4G','反垃圾邮件（anti-SPAM）: URLs for guests');
define($constpref.'_SPAMURI4GDSC','If this number of URLs are found in POST data from guests, the POST is considered as SPAM. 填0表示禁用此功能.');

}

?>