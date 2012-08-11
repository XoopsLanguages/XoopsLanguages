<?php
// $Id: preferences.php,v 1.16.22.7 2005/07/24 10:23:46 mithyt2 Exp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change

define("_MD_AM_SITEPREF","%s Preferences");
define("_MD_AM_SITENAME","Site name");
define("_MD_AM_SLOGAN","Slogan for your site");
define("_MD_AM_ADMINML","Admin mail address");
define("_MD_AM_LANGUAGE","Default language");
define("_MD_AM_STARTPAGE","Module for your start page");
define("_MD_AM_NONE","None");
define("_MD_AM_SERVERTZ","Server timezone");
define("_MD_AM_DEFAULTTZ","Default timezone");
define("_MD_AM_DTHEME","Default theme");
define("_MD_AM_THEMESET","Theme Set");
define("_MD_AM_ANONNAME","Username for anonymous users");
define("_MD_AM_LOADINGIMG","Display loading... image?");
define("_MD_AM_USEGZIP","Use gzip compression?");
define("_MD_AM_USERCOOKIE","Name for user cookies.");
define("_MD_AM_USERCOOKIEDSC","This cookie contains only a user name and is saved in a user pc for a year (if the user wishes). If a user have this cookie, username will be automatically inserted in the login box.");
define("_MD_AM_USEMYSESS","Use custom session");
define("_MD_AM_USEMYSESSDSC","Select yes to customise session related values.");
define("_MD_AM_SESSNAME","Session name");
define("_MD_AM_SESSNAMEDSC","The name of session (Valid only when 'use custom session' is enabled)");
define("_MD_AM_SESSEXPIRE","Session expiration");
define("_MD_AM_SESSEXPIREDSC","Maximum duration of session idle time in minutes (Valid only when 'use custom session' is enabled. Works only when you are using PHP4.2.0 or later.)");
define("_MD_AM_BANNERS","Activate banner ads?");
define("_MD_AM_MYIP","Your IP address");
define("_MD_AM_MYIPDSC","This IP will not counted as impression for banners");
define("_MD_AM_ALWDHTML","HTML tags allowed in all posts.");
define("_MD_AM_INVLDMINPASS","Invalid value for minimum length of password.");
define("_MD_AM_INVLDUCOOK","Invalid value for usercookie name.");
define("_MD_AM_INVLDSCOOK","Invalid value for sessioncookie name.");
define("_MD_AM_INVLDSEXP","Invalid value for session expiration time.");
define("_MD_AM_ADMNOTSET","Admin mail is not set.");
define("_MD_AM_YES","Yes");
define("_MD_AM_NO","No");
define("_MD_AM_DONTCHNG","Don't change!");
define("_MD_AM_REMEMBER","Remember to chmod 666 this file in order to let the system write to it properly.");
define("_MD_AM_IFUCANT","If you can't change the permissions you can edit the rest of this file by hand.");


define("_MD_AM_COMMODE","Default Comment Display Mode");
define("_MD_AM_COMORDER","Default Comments Display Order");
define("_MD_AM_ALLOWHTML","Allow HTML tags in user comments?");
define("_MD_AM_DEBUGMODE","Debug mode");
define("_MD_AM_DEBUGMODEDSC","Several debug options. A running website should have this turned off.");
define("_MD_AM_AVATARCONF","Custom avatar settings");
define("_MD_AM_CHNGUTHEME","Change all users' theme");
define("_MD_AM_NOTIFYTO","Select group to which new user notification mail will be sent");
define("_MD_AM_ALLOWTHEME","Allow users to select theme?");
define("_MD_AM_ALLOWIMAGE","Allow users to display image files in posts?");

define('_MD_AM_USESSL','Use SSL for login?');
define('_MD_AM_SSLPOST','SSL Post variable name');
define('_MD_AM_SSLPOSTDSC','The name of variable used to transfer session value via POST. If you are unsure, set any name that is hard to guess.');
define('_MD_AM_DEBUGMODE0','Off');
define('_MD_AM_DEBUGMODE1','PHP Debug');
define('_MD_AM_DEBUGMODE2','MySQL/Blocks Debug');
define('_MD_AM_DEBUGMODE3','Smarty Templates Debug');
define('_MD_AM_GENERAL','General Settings');
define('_MD_AM_IPBAN','IP Banning');
define('_MD_AM_DOBADIPS','Enable IP bans?');
define('_MD_AM_DOBADIPSDSC','Users from specified IP addresses will not be able to view your site');
define('_MD_AM_BADIPS','Enter IP addresses that should be banned from the site.<br />Separate each with a <b>|</b>, case insensitive, regex enabled.');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc will disallow visitors with an IP that starts with aaa.bbb.ccc<br />aaa.bbb.ccc$ will disallow visitors with an IP that ends with aaa.bbb.ccc<br />aaa.bbb.ccc will disallow visitors with an IP that contains aaa.bbb.ccc');
define('_MD_AM_PREFMAIN','Preferences Main');
define('_MD_AM_METAKEY','Meta Keywords');
define('_MD_AM_METAKEYDSC','The keywords meta tag is a series of keywords that represents the content of your site. Type in keywords with each separated by a comma or a space in between. (Ex. XOOPS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING','Meta Rating');
define('_MD_AM_METARATINGDSC','The rating meta tag defines your site age and content rating');
define('_MD_AM_METAOGEN','General');
define('_MD_AM_METAO14YRS','14 years');
define('_MD_AM_METAOREST','Restricted');
define('_MD_AM_METAOMAT','Mature');
define('_MD_AM_METAROBOTS','Meta Robots');
define('_MD_AM_METAROBOTSDSC','The Robots Tag declares to search engines what content to index and spider');
define('_MD_AM_INDEXFOLLOW','Index, Follow');
define('_MD_AM_NOINDEXFOLLOW','No Index, Follow');
define('_MD_AM_INDEXNOFOLLOW','Index, No Follow');
define('_MD_AM_NOINDEXNOFOLLOW','No Index, No Follow');
define('_MD_AM_METAAUTHOR','Meta Author');
define('_MD_AM_METAAUTHORDSC','The author meta tag defines the name of the author of the document being read. Supported data formats include the name, email address of the webmaster, company name or URL.');
define('_MD_AM_METACOPYR','Meta Copyright');
define('_MD_AM_METACOPYRDSC','The copyright meta tag defines any copyright statements you wish to disclose about your web page documents.');
define('_MD_AM_METADESC','Meta Description');
define('_MD_AM_METADESCDSC','The description meta tag is a general description of what is contained in your web page');
define('_MD_AM_METAFOOTER','Meta Tags and Footer');
define('_MD_AM_FOOTER','Footer');
define('_MD_AM_FOOTERDSC','Be sure to type links in full path starting from http://, otherwise the links will not work correctly in modules pages.');
define('_MD_AM_CENSOR','Word Censoring Options');
define('_MD_AM_DOCENSOR','Enable censoring of unwanted words?');
define('_MD_AM_DOCENSORDSC','Words will be censored if this option is enabled. This option may be turned off for enhanced site speed.');
define('_MD_AM_CENSORWRD','Words to censor');
define('_MD_AM_CENSORWRDDSC','Enter words that should be censored in user posts.<br />Separate each with a <b>|</b>, case insensitive.');
define('_MD_AM_CENSORRPLC','Bad words will be replaced with:');
define('_MD_AM_CENSORRPLCDSC','Censored words will be replaced with the characters entered in this textbox');

define('_MD_AM_SEARCH','Search Options');
define('_MD_AM_DOSEARCH','Enable global searches?');
define('_MD_AM_DOSEARCHDSC','Allow searching for posts/items within your site.');
define('_MD_AM_MINSEARCH','Minimum keyword length');
define('_MD_AM_MINSEARCHDSC','Enter the minimum keyword length that users are required to enter to perform search');
define('_MD_AM_MODCONFIG','Module Config Options');
define('_MD_AM_DSPDSCLMR','Display disclaimer?');
define('_MD_AM_DSPDSCLMRDSC','Select yes to display disclaimer in registration page');
define('_MD_AM_REGDSCLMR','Registration disclaimer');
define('_MD_AM_REGDSCLMRDSC','Enter text to be displayed as registration disclaimer');
define('_MD_AM_ALLOWREG','Allow new user registration?');
define('_MD_AM_ALLOWREGDSC','Select yes to accept new user registration');
define('_MD_AM_THEMEFILE','Update module template .html files from themes/your theme/templates directory?');
define('_MD_AM_THEMEFILEDSC','If this option is enabled, module template .html files will be updated automatically if there are newer files under the themes/your theme/templates directory for the current theme. This should be turned off once the site goes public.');
define('_MD_AM_CLOSESITE','Turn your site off?');
define('_MD_AM_CLOSESITEDSC','Select yes to turn your site off so that only users in selected groups have access to the site. ');
define('_MD_AM_CLOSESITEOK','Select groups that are allowed to access while the site is turned off.');
define('_MD_AM_CLOSESITEOKDSC','Users in the default webmasters group are always granted access.');
define('_MD_AM_CLOSESITETXT','Reason for turning off the site');
define('_MD_AM_CLOSESITETXTDSC','The text that is presented when the site is closed.');
define('_MD_AM_SITECACHE','Site-wide Cache');
define('_MD_AM_SITECACHEDSC','Caches whole contents of the site for a specified amount of time to enhance performance. Setting site-wide cache will override module-level cache, block-level cache, and module item level cache if any.');
define('_MD_AM_MODCACHE','Module-wide Cache');
define('_MD_AM_MODCACHEDSC','Caches module contents for a specified amount of time to enhance performance. Setting module-wide cache will override module item level cache if any.');
define('_MD_AM_NOMODULE','There is no module that can be cached.');
define('_MD_AM_DTPLSET','Default template set');
define('_MD_AM_SSLLINK','URL where SSL login page is located');

// added for mailer
define("_MD_AM_MAILER","Mail Setup");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","FROM address");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","FROM name");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","FROM user");
define("_MD_AM_MAILFROMUIDDESC","When the system sends a private message, which user should appear to have sent it?");
define("_MD_AM_MAILERMETHOD","Mail delivery method");
define("_MD_AM_MAILERMETHODDESC","Method used to deliver mail. Default is \"PHP mail()\", use others only if that makes trouble.");
define("_MD_AM_SMTPHOST","SMTP host(s)");
define("_MD_AM_SMTPHOSTDESC","List of SMTP servers to try to connect to. Separate multiple servers with semi-colon ; ");
define("_MD_AM_SMTPUSER","SMTPAuth username");
define("_MD_AM_SMTPUSERDESC","Username to connect to an SMTP host with SMTPAuth.");
define("_MD_AM_SMTPPASS","SMTPAuth password");
define("_MD_AM_SMTPPASSDESC","Password to connect to an SMTP host with SMTPAuth.");
define("_MD_AM_SENDMAILPATH","Path to sendmail");
define("_MD_AM_SENDMAILPATHDESC","Path to the sendmail program (or substitute) on the webserver.");
define("_MD_AM_THEMEOK","Selectable themes");
define("_MD_AM_THEMEOKDSC","Choose themes that users can select as the default theme");

define("_MD_AM_ADMINTHEME","Admin Theme");
define("_MD_AM_FRONTSIDE_THEME","Use frontside theme");

define('_MD_AM_MODULEPREF','Module Preferences');

// Authentication constants

define("_MD_AM_AUTHENTICATION","Authentication Options");
define("_MD_AM_AUTHMETHOD","Authentication Method");
define("_MD_AM_AUTHMETHODDESC","Which authentication method would you like to use for signing on users.");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Mail Field Name");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","The name of the E-Mail field in your LDAP directory tree.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Common Name Field Name");
define("_MD_AM_LDAP_NAME_ATTR_DESC","The name of the Comman Name field in your LDAP directory.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Surname Fiend Name");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","The name of the Surname field in your LDAP directory.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Given Name Field Name");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","The name of the Given Name field in your LDAP directory.");
define("_MD_AM_LDAP_UID_ATTR","LDAP - UID Field Name");
define("_MD_AM_LDAP_UID_ATTR_DESC","The name of the User ID field in your LDAP directory.");
define("_MD_AM_LDAP_BASE_DN","LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC","The base DN (Distinguished Name) of your LDAP directory tree.");
define("_MD_AM_LDAP_PORT","LDAP - Port Number");
define("_MD_AM_LDAP_PORT_DESC","The port number needed to access your LDAP directory server.");
define("_MD_AM_LDAP_SERVER","LDAP - Server Name");
define("_MD_AM_LDAP_SERVER_DESC","The name of your LDAP directory server.");
define("_MD_AM_LDAP_UID_ASDN","UID as DN");
define("_MD_AM_LDAP_UID_ASDN_DESC","The uid attribute is used as DN");

define("_MD_AM_LDAP_MANAGER_DN","DN of the LDAP manager");
define("_MD_AM_LDAP_MANAGER_DN_DESC","The DN of the user allow to make search (eg manager)");
define("_MD_AM_LDAP_MANAGER_PASS","Password of the LDAP manager");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","The password of the user allow to make search");
define("_MD_AM_LDAP_VERSION","LDAP Version protocol");
define("_MD_AM_LDAP_VERSION_DESC","The LDAP Version protocol : 2 or 3");
?>