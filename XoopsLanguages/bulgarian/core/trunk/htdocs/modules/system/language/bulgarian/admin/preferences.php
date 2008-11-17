<?php
// $Id: preferences.php 1970 2008-08-24 02:16:51Z phppp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define('_MD_AM_SITEPREF', 'Настройки');
define('_MD_AM_SITENAME', 'Име на сайта');
define('_MD_AM_SLOGAN', 'Мото на сайта');
define('_MD_AM_ADMINML', 'Поща на администратора');
define('_MD_AM_LANGUAGE', 'Език по подразбиране');
define('_MD_AM_STARTPAGE', 'Начален модул');
define('_MD_AM_NONE', 'Няма');
define('_MD_AM_SERVERTZ', 'Времева зона на сървъра');
define('_MD_AM_DEFAULTTZ', 'Времева зона по подразбиране');
define('_MD_AM_DTHEME', 'Тема по подразбиране');
define('_MD_AM_THEMESET', 'Избор на теми');
define('_MD_AM_ANONNAME', 'Потребителско име за анонимните');
define('_MD_AM_MINPASS', 'Минимална дължина на паролите');
define('_MD_AM_NEWUNOTIFY', 'Известие, при нова потребителска регистрация?');
define('_MD_AM_SELFDELETE', 'Позволявате ли на потребителите да трят профилите си?');
define('_MD_AM_LOADINGIMG', 'Да показва ли картинка за зареждане ?');
define('_MD_AM_USEGZIP', 'Да използва ли gzip компресия ?');
define('_MD_AM_UNAMELVL', 'Ниво на стриктност при регистрация на потребителите');
define('_MD_AM_STRICT', 'Стриктно (само букви и цифри)');
define('_MD_AM_MEDIUM', 'Средно');
define('_MD_AM_LIGHT', 'Олекотено (препоръчва се при използване на азиатска писменост)');
define('_MD_AM_USERCOOKIE', 'Име за бисквитките');
define('_MD_AM_USERCOOKIEDSC', 'If the cookie name is set, \'Remember me\' will be enabled for user login. If a user has chosen \'Remember me\', he will be logged in automatically. The expiration for the cookie is one year.');
define('_MD_AM_USEMYSESS', 'Ползване на частна сесия');
define('_MD_AM_USEMYSESSDSC', 'Изберете да, ако искате да промените стойностите сврзани със сесията');
define('_MD_AM_SESSNAME', 'Име на сесията');
define('_MD_AM_SESSNAMEDSC', '');
define('_MD_AM_SESSEXPIRE', 'Прикляване на сесията');
define('_MD_AM_SESSEXPIREDSC', '');
define('_MD_AM_BANNERS', 'Ще активирате ли рекламата?');
define('_MD_AM_MYIP', 'Вашият IP адрес');
define('_MD_AM_MYIPDSC', '');
define('_MD_AM_ALWDHTML', 'HTML тагове са позволени за всички публикации');
define('_MD_AM_INVLDMINPASS', 'Невалидна стойност за минимална дължина на паролата');
define('_MD_AM_INVLDUCOOK', 'Невалидна стойност за име на бисквитките.');
define('_MD_AM_INVLDSCOOK', 'Невалидна стойнсот за име на сесията');
define('_MD_AM_INVLDSEXP', 'Невалидна стойност за време на сесията');
define('_MD_AM_ADMNOTSET', 'Поща на администратора не е въведена');
define('_MD_AM_YES', 'Да');
define('_MD_AM_NO', 'Не');
define('_MD_AM_DONTCHNG', 'Без промяна');
define('_MD_AM_REMEMBER', 'Запомнете да смените правата на този файл на 666 за да работи системата безпроблемно.');
define('_MD_AM_IFUCANT', 'Ако не можете да смените правата, можете да редактирате файла на рка');
define('_MD_AM_COMMODE', 'Режим за показване на коментарите');
define('_MD_AM_COMORDER', 'Режим за подреждане на коментарите');
define('_MD_AM_ALLOWHTML', 'Позволени HTML тагове за коментарите ?');
define('_MD_AM_DEBUGMODE', 'Дебугер');
define('_MD_AM_DEBUGMODEDSC', '');
define('_MD_AM_AVATARALLOW', 'Позволено е да се качват лични аватари');
define('_MD_AM_AVATARMP', 'Минимум мнения');
define('_MD_AM_AVATARMPDSC', '');
define('_MD_AM_AVATARW', 'Ширина на аватара');
define('_MD_AM_AVATARH', 'Височина на аватара');
define('_MD_AM_AVATARMAX', 'Размер на файла на аватара');
define('_MD_AM_AVATARCONF', 'Настройки на аватара');
define('_MD_AM_CHNGUTHEME', 'Промяна на темата за всички потребители');
define('_MD_AM_NOTIFYTO', 'Изберете група към която да се изпращат писма при регистрация на нов потребител');
define('_MD_AM_ALLOWTHEME', 'Разрешавате на потребителите да избират тема?');
define('_MD_AM_ALLOWIMAGE', 'Разрешавате на потребителите да публикуват снимки в мненията си?');
define('_MD_AM_USERACTV', 'Задължително активиране от потребител (препоръчва се)');
define('_MD_AM_AUTOACTV', 'Автоматично активиране');
define('_MD_AM_ADMINACTV', 'Активиране от администратор');
define('_MD_AM_ACTVTYPE', 'Изберете типа активиране при регистрация');
define('_MD_AM_ACTVGROUP', 'Изберете група за изпращане на писма за активиране');
define('_MD_AM_ACTVGROUPDSC', 'Валидно само когато е избрано \'Активиране от администратори\'');
define('_MD_AM_USESSL', 'Use SSL for login?');
define('_MD_AM_SSLPOST', 'SSL Post variable name');
define('_MD_AM_SSLPOSTDSC', 'The name of variable used to transfer session value via POST. If you are unsure, set any name that is hard to guess.');
define('_MD_AM_DEBUGMODE0', 'Off');
define('_MD_AM_DEBUGMODE1', 'Enable debug (inline mode)');
define('_MD_AM_DEBUGMODE2', 'Enable debug (popup mode)');
define('_MD_AM_DEBUGMODE3', 'Smarty Templates Debug');
define('_MD_AM_MINUNAME', 'Minimum length of username required');
define('_MD_AM_MAXUNAME', 'Maximum length of username');
define('_MD_AM_GENERAL', 'General Settings');
define('_MD_AM_USERSETTINGS', 'User Info Settings');
define('_MD_AM_ALLWCHGMAIL', 'Allow users to change email address?');
define('_MD_AM_ALLWCHGMAILDSC', '');
define('_MD_AM_IPBAN', 'IP Banning');
define('_MD_AM_BADEMAILS', 'Enter emails that should not be used in user profile');
define('_MD_AM_BADEMAILSDSC', 'Separate each with a <strong>|</strong>, case insensitive, regex enabled.');
define('_MD_AM_BADUNAMES', 'Enter names that should not be selected as username');
define('_MD_AM_BADUNAMESDSC', 'Separate each with a <strong>|</strong>, case insensitive, regex enabled.');
define('_MD_AM_DOBADIPS', 'Enable IP bans?');
define('_MD_AM_DOBADIPSDSC', 'Users from specified IP addresses will not be able to view your site');
define('_MD_AM_BADIPS', 'Enter IP addresses that should be banned from the site.<br />Separate each with a <strong>|</strong>, case insensitive, regex enabled.');
define('_MD_AM_BADIPSDSC', '^aaa.bbb.ccc will disallow visitors with an IP that starts with aaa.bbb.ccc<br />aaa.bbb.ccc$ will disallow visitors with an IP that ends with aaa.bbb.ccc<br />aaa.bbb.ccc will disallow visitors with an IP that contains aaa.bbb.ccc');
define('_MD_AM_PREFMAIN', 'Настройки');
define('_MD_AM_METAKEY', 'Meta Keywords');
define('_MD_AM_METAKEYDSC', 'The keywords meta tag is a series of keywords that represents the content of your site. Type in keywords with each separated by a comma or a space in between. (Ex. XOOPS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING', 'Meta Rating');
define('_MD_AM_METARATINGDSC', 'The rating meta tag defines your site age and content rating');
define('_MD_AM_METAOGEN', 'General');
define('_MD_AM_METAO14YRS', '14 years');
define('_MD_AM_METAOREST', 'Restricted');
define('_MD_AM_METAOMAT', 'Mature');
define('_MD_AM_METAROBOTS', 'Meta Robots');
define('_MD_AM_METAROBOTSDSC', 'The Robots Tag declares to search engines what content to index and spider');
define('_MD_AM_INDEXFOLLOW', 'Index, Follow');
define('_MD_AM_NOINDEXFOLLOW', 'No Index, Follow');
define('_MD_AM_INDEXNOFOLLOW', 'Index, No Follow');
define('_MD_AM_NOINDEXNOFOLLOW', 'No Index, No Follow');
define('_MD_AM_METAAUTHOR', 'Meta Author');
define('_MD_AM_METAAUTHORDSC', 'The author meta tag defines the name of the author of the document being read. Supported data formats include the name, email address of the webmaster, company name or URL.');
define('_MD_AM_METACOPYR', 'Meta Copyright');
define('_MD_AM_METACOPYRDSC', 'The copyright meta tag defines any copyright statements you wish to disclose about your web page documents.');
define('_MD_AM_METADESC', 'Meta Description');
define('_MD_AM_METADESCDSC', 'The description meta tag is a general description of what is contained in your web page');
define('_MD_AM_METAFOOTER', 'Meta Tags and Footer');
define('_MD_AM_FOOTER', 'Footer');
define('_MD_AM_FOOTERDSC', 'Be sure to type links in full path starting from http:
define("_MD_AM_CENSOR", "Word Censoring Options');
define('_MD_AM_CENSOR', 'Word Censoring Options');
define('_MD_AM_DOCENSOR', 'Enable censoring of unwanted words?');
define('_MD_AM_DOCENSORDSC', 'Words will be censored if this option is enabled. This option may be turned off for enhanced site speed.');
define('_MD_AM_CENSORWRD', 'Words to censor');
define('_MD_AM_CENSORWRDDSC', 'Enter words that should be censored in user posts.<br />Separate each with a <strong>|</strong>, case insensitive.');
define('_MD_AM_CENSORRPLC', 'Bad words will be replaced with:');
define('_MD_AM_CENSORRPLCDSC', 'Censored words will be replaced with the characters entered in this textbox');
define('_MD_AM_SEARCH', 'Search Options');
define('_MD_AM_DOSEARCH', 'Enable global searches?');
define('_MD_AM_DOSEARCHDSC', 'Allow searching for posts/items within your site.');
define('_MD_AM_MINSEARCH', 'Minimum keyword length');
define('_MD_AM_MINSEARCHDSC', 'Enter the minimum keyword length that users are required to enter to perform search');
define('_MD_AM_MODCONFIG', 'Module Config Options');
define('_MD_AM_DSPDSCLMR', 'Display disclaimer?');
define('_MD_AM_DSPDSCLMRDSC', 'Select yes to display disclaimer in registration page');
define('_MD_AM_REGDSCLMR', 'Registration disclaimer');
define('_MD_AM_REGDSCLMRDSC', 'Enter text to be displayed as registration disclaimer');
define('_MD_AM_ALLOWREG', 'Allow new user registration?');
define('_MD_AM_ALLOWREGDSC', 'Select yes to accept new user registration');
define('_MD_AM_THEMEFILE', 'Check templates for modifications ?');
define('_MD_AM_THEMEFILEDSC', 'If this option is enabled, modified templates will be automatically recompiled when they are displayed. You must turn this option off on a production site.');
define('_MD_AM_CLOSESITE', 'Turn your site off?');
define('_MD_AM_CLOSESITEDSC', 'Select yes to turn your site off so that only users in selected groups have access to the site. ');
define('_MD_AM_CLOSESITEOK', 'Select groups that are allowed to access while the site is turned off.');
define('_MD_AM_CLOSESITEOKDSC', 'Users in the default webmasters group are always granted access.');
define('_MD_AM_CLOSESITETXT', 'Reason for turning off the site');
define('_MD_AM_CLOSESITETXTDSC', 'The text that is presented when the site is closed.');
define('_MD_AM_SITECACHE', 'Site-wide Cache');
define('_MD_AM_SITECACHEDSC', 'Caches whole contents of the site for a specified amount of time to enhance performance. Setting site-wide cache will override module-level cache, block-level cache, and module item level cache if any.');
define('_MD_AM_MODCACHE', 'Module-wide Cache');
define('_MD_AM_MODCACHEDSC', 'Caches module contents for a specified amount of time to enhance performance. Setting module-wide cache will override module item level cache if any.');
define('_MD_AM_NOMODULE', 'There is no module that can be cached.');
define('_MD_AM_DTPLSET', 'Default template set');
define('_MD_AM_SSLLINK', 'URL where SSL login page is located');
// added for mailer
define('_MD_AM_MAILER', 'Mail Setup');
define('_MD_AM_MAILER_MAIL', '');
define('_MD_AM_MAILER_SENDMAIL', '');
define('_MD_AM_MAILER_', '');
define('_MD_AM_MAILFROM', 'FROM address');
define('_MD_AM_MAILFROMDESC', '');
define('_MD_AM_MAILFROMNAME', 'FROM name');
define('_MD_AM_MAILFROMNAMEDESC', '');
// RMV-NOTIFY
define('_MD_AM_MAILFROMUID', 'FROM user');
define('_MD_AM_MAILFROMUIDDESC', 'When the system sends a private message, which user should appear to have sent it?');
define('_MD_AM_MAILERMETHOD', 'Mail delivery method');
define('_MD_AM_MAILERMETHODDESC', 'Method used to deliver mail. Default is "mail", use others only if that makes trouble.');
define('_MD_AM_SMTPHOST', 'SMTP host(s)');
define('_MD_AM_SMTPHOSTDESC', 'List of SMTP servers to try to connect to.');
define('_MD_AM_SMTPUSER', 'SMTPAuth username');
define('_MD_AM_SMTPUSERDESC', 'Username to connect to an SMTP host with SMTPAuth.');
define('_MD_AM_SMTPPASS', 'SMTPAuth password');
define('_MD_AM_SMTPPASSDESC', 'Password to connect to an SMTP host with SMTPAuth.');
define('_MD_AM_SENDMAILPATH', 'Path to sendmail');
define('_MD_AM_SENDMAILPATHDESC', 'Path to the sendmail program (or substitute) on the webserver.');
define('_MD_AM_THEMEOK', 'Selectable themes');
define('_MD_AM_THEMEOKDSC', 'Choose themes that users can select as the default theme');
// Xoops Authentication constants
define('_MD_AM_AUTH_CONFOPTION_XOOPS', 'XOOPS Database');
define('_MD_AM_AUTH_CONFOPTION_LDAP', 'Standard LDAP Directory');
define('_MD_AM_AUTH_CONFOPTION_AD', 'Microsoft Active Directory &copy');
define('_MD_AM_AUTHENTICATION', 'Authentication Options');
define('_MD_AM_AUTHMETHOD', 'Authentication Method');
define('_MD_AM_AUTHMETHODDESC', 'Which authentication method would you like to use for signing on users.');
define('_MD_AM_LDAP_MAIL_ATTR', 'LDAP - Mail Field Name');
define('_MD_AM_LDAP_MAIL_ATTR_DESC', 'The name of the E-Mail attribute in your LDAP directory tree.');
define('_MD_AM_LDAP_NAME_ATTR', 'LDAP - Common Name Field Name');
define('_MD_AM_LDAP_NAME_ATTR_DESC', 'The name of the Common Name attribute in your LDAP directory.');
define('_MD_AM_LDAP_SURNAME_ATTR', 'LDAP - Surname Field Name');
define('_MD_AM_LDAP_SURNAME_ATTR_DESC', 'The name of the Surname attribute in your LDAP directory.');
define('_MD_AM_LDAP_GIVENNAME_ATTR', 'LDAP - Given Name Field Name');
define('_MD_AM_LDAP_GIVENNAME_ATTR_DSC', 'The name of the Given Name attribute in your LDAP directory.');
define('_MD_AM_LDAP_BASE_DN', 'LDAP - Base DN');
define('_MD_AM_LDAP_BASE_DN_DESC', 'The base DN (Distinguished Name) of your LDAP directory tree.');
define('_MD_AM_LDAP_PORT', 'LDAP - Port Number');
define('_MD_AM_LDAP_PORT_DESC', 'The port number needed to access your LDAP directory server.');
define('_MD_AM_LDAP_SERVER', 'LDAP - Server Name');
define('_MD_AM_LDAP_SERVER_DESC', 'The name of your LDAP directory server.');
define('_MD_AM_LDAP_MANAGER_DN', 'DN of the LDAP manager');
define('_MD_AM_LDAP_MANAGER_DN_DESC', 'The DN of the user allow to make search (eg manager)');
define('_MD_AM_LDAP_MANAGER_PASS', 'Password of the LDAP manager');
define('_MD_AM_LDAP_MANAGER_PASS_DESC', 'The password of the user allow to make search');
define('_MD_AM_LDAP_VERSION', 'LDAP Version protocol');
define('_MD_AM_LDAP_VERSION_DESC', 'The LDAP Version protocol : 2 or 3');
define('_MD_AM_LDAP_USERS_BYPASS', 'Users allowed to bypass LDAP authentication');
define('_MD_AM_LDAP_USERS_BYPASS_DESC', 'Users to be authenticated with native XOOPS method');
define('_MD_AM_LDAP_USETLS', ' Use TLS connection');
define('_MD_AM_LDAP_USETLS_DESC', 'Use a TLS (Transport Layer Security) connection. TLS use standard 389 port number<BR>" .
								  " and the LDAP version must be set to 3.');
define('_MD_AM_LDAP_LOGINLDAP_ATTR', 'LDAP Attribute use to search the user');
define('_MD_AM_LDAP_LOGINLDAP_ATTR_D', 'When Login name use in the DN option is set to yes, must correspond to the login name XOOPS');
define('_MD_AM_LDAP_LOGINNAME_ASDN', 'Login name use in the DN');
define('_MD_AM_LDAP_LOGINNAME_ASDN_D', 'The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search');
define('_MD_AM_LDAP_FILTER_PERSON', 'The search filter LDAP query to find user');
define('_MD_AM_LDAP_FILTER_PERSON_DESC', 'Special LDAP Filter to find user. @@loginname@@ is replace by the users\'s login name<br> MUST BE BLANK IF YOU DON\'T KNOW WHAT YOU DO\' !" .
		"<br />Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br />Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP');
define('_MD_AM_LDAP_DOMAIN_NAME', 'The domain name');
define('_MD_AM_LDAP_DOMAIN_NAME_DESC', 'Windows domain name. for ADS and NT Server only');
define('_MD_AM_LDAP_PROVIS', 'Automatic xoops account provisionning');
define('_MD_AM_LDAP_PROVIS_DESC', 'Create xoops user database if not exists');
define('_MD_AM_LDAP_PROVIS_GROUP', 'Default affect group');
define('_MD_AM_LDAP_PROVIS_GROUP_DSC', 'The new user is assign to these groups');
define('_MD_AM_LDAP_FIELD_MAPPING_ATTR', 'Xoops-Auth server fields mapping');
define('_MD_AM_LDAP_FIELD_MAPPING_DESC', 'Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br /><br />Format [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br />for example : email=mail" .
		"<br />Separate each with a |" .
		"<br /><br />!! For advanced users !!');
define('_MD_AM_LDAP_PROVIS_UPD', 'Maintain xoops account provisionning');
define('_MD_AM_LDAP_PROVIS_UPD_DESC', 'The Xoops User account is always synchronized with the Authentication Server');
define('_MD_AM_CPANEL', 'Control Panel GUI');
define('_MD_AM_CPANELDSC', 'For backend');
define('_MD_AM_WELCOMETYPE', 'Sending welcoming message');
define('_MD_AM_WELCOMETYPE_DESC', 'The way of sending out a welcoming message to a user upon his successful registration.');
define('_MD_AM_WELCOMETYPE_EMAIL', 'Email');
define('_MD_AM_WELCOMETYPE_PM', 'Message');
define('_MD_AM_WELCOMETYPE_BOTH', 'Email and message');
?>