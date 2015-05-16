<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname);

if ( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1);

// The name of this module
define($constpref."_NAME","Protector");

// A brief description of this module
define($constpref."_DESC","Tento modul chrání XOOPS proti různým útokům typu DoS, SQL Injection, podvržení proměnné a podobně.");

// Menu
define($constpref."_ADMININDEX","Centrum zabezpečení");
define($constpref."_ADVISORY","Přehled zabezpečení");
define($constpref."_PREFIXMANAGER","Správce prefixů");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Oprávnění');

// Configs
define($constpref.'_GLOBAL_DISBL','Dočasně vypnout');
define($constpref.'_GLOBAL_DISBLDSC','Tato volba dočasně vypne všechny ochranny.<br />Nezapomeňte systém po vyřešení potíží zase zapnout.');

define($constpref.'_DEFAULT_LANG','Výchozí jazyk');
define($constpref.'_DEFAULT_LANGDSC','Specify the language set to display messages before processing common.php');

define($constpref.'_RELIABLE_IPS','Spolehlivé IP adresy');
define($constpref.'_RELIABLE_IPSDSC','Zde napište IP adresy, kterým důvěřujete. Oddělujte je znakem \"|\" . ^ označuje začátek řetězce, $ označuje konec řetězce.');

define($constpref.'_LOG_LEVEL','Úroveň záznamů');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','Doba blokování IP adres na černé listině (sekundy):');

define($constpref.'_LOGLEVEL0','Nic');
define($constpref.'_LOGLEVEL15','Quiet');
define($constpref.'_LOGLEVEL63','quiet');
define($constpref.'_LOGLEVEL255','Vše');

define($constpref.'_HIJACK_TOPBIT','Protected IP bits for the session');
define($constpref.'_HIJACK_TOPBITDSC','Anti Session Hi-Jacking:<br />Default 32(bit). (All bits are protected)<br />When your IP is not stable, set the IP range by number of the bits.<br />(eg) If your IP can move in the range of 192.168.0.0-192.168.0.255, set 24(bit) here');
define($constpref.'_HIJACK_DENYGP','Groups disallowed IP moving in a session');
define($constpref.'_HIJACK_DENYGPDSC','Anti Session Hi-Jacking:<br />Select groups which is disallowed to move their IP in a session.<br />(I recommend to turn Administrator on.)');
define($constpref.'_SAN_NULLBYTE','Sanitizing null-bytes');
define($constpref.'_SAN_NULLBYTEDSC','The terminating character "\\0" is often used in malicious attacks.<br />a null-byte will be changed to a space.<br />(highly recommended as On)');
define($constpref.'_DIE_NULLBYTE','Exit if null bytes are found');
define($constpref.'_DIE_NULLBYTEDSC','The terminating character "\\0" is often used in malicious attacks.<br />(highly recommended as On)');
define($constpref.'_DIE_BADEXT','Exit if bad files are uploaded');
define($constpref.'_DIE_BADEXTDSC','If someone tries to upload files which have bad extensions like .php , this module exits your XOOPS.<br />If you often attach php files into B-Wiki or PukiWikiMod, turn this off.');
define($constpref.'_CONTAMI_ACTION','Action if a contamination is found');
define($constpref.'_CONTAMI_ACTIONDS','Select the action when someone tries to contaminate system global variables into your XOOPS.<br />(recommended option is blank screen)');
define($constpref.'_ISOCOM_ACTION','Action if an isolated comment-in is found');
define($constpref.'_ISOCOM_ACTIONDSC','Anti SQL Injection:<br />Select the action when an isolated "/*" is found.<br />"Sanitizing" means adding another "*/" in tail.<br />(recommended option is Sanitizing)');
define($constpref.'_UNION_ACTION','Action if a UNION is found');
define($constpref.'_UNION_ACTIONDSC','Anti SQL Injection:<br />Select the action when some syntax like UNION of SQL.<br />"Sanitizing" means changing "union" to "uni-on".<br />(recommended option is Sanitizing)');
define($constpref.'_ID_INTVAL','Force intval to variables like id');
define($constpref.'_ID_INTVALDSC','All requests named "*id" will be treated as integer.<br />This option protects you from some kind of XSS and SQL Injections.<br />Though I recommend to turn this option on, it can cause problems with some modules.');
define($constpref.'_FILE_DOTDOT','Protection from Directory Traversals');
define($constpref.'_FILE_DOTDOTDSC','It eliminates ".." from all requests looks like Directory Traversals');

define($constpref.'_BF_COUNT','Ochrana proti útoku hrubou silou');
define($constpref.'_BF_COUNTDSC','Set count you allow guest try to login within 10 minutes. If someone fails to login more than this number, her/his IP will be banned.');

define($constpref.'_BWLIMIT_COUNT','Omezení šířky pásma'); // Bandwidth limitation
define($constpref.'_BWLIMIT_COUNTDSC','Specify the max access to mainfile.php during watching time. This value should be 0 for normal environments which have enough CPU bandwidth. The number fewer than 10 will be ignored.');

define($constpref.'_DOS_SKIPMODS','Moduly vyjmuté z kontrly útoku typ DoS/Crawler');
define($constpref.'_DOS_SKIPMODSDSC','set the dirnames of the modules separated with |. This option will be useful with chatting module etc.');

define($constpref.'_DOS_EXPIRE','Čas pro rozpoznání pokusu o přetížení (sek)');
define($constpref.'_DOS_EXPIREDSC','This value specifies the watch time for high-frequent reloading (F5 attack) and high loading crawlers.');

define($constpref.'_DOS_F5COUNT','Počet obnovení pro rozpoznání útoku F5');
define($constpref.'_DOS_F5COUNTDSC','Preventing from DoS attacks.<br />This value specifies the reloading counts to be considered as a malicious attack.');
define($constpref.'_DOS_F5ACTION','Obrana proti útoku F5');

define($constpref.'_DOS_CRCOUNT','Počet obnovení pro rozpoznání škodlivého robota (Crawlers)');
define($constpref.'_DOS_CRCOUNTDSC','Preventing from high loading crawlers.<br />This value specifies the access counts to be considered as a bad-manner crawler.');
define($constpref.'_DOS_CRACTION','Obrana proti škodlivému robotu');

define($constpref.'_DOS_CRSAFE','Vítaní roboti'); // Welcomed User-Agent
define($constpref.'_DOS_CRSAFEDSC','A perl regex pattern for User-Agent.<br />If it matches, the crawler is never considered as a high loading crawler.<br />eg) /(bingbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','Nic (pouze zaznamenat)');
define($constpref.'_OPT_SAN','Vyčistit');
define($constpref.'_OPT_EXIT','Prázdná obrazovka');
define($constpref.'_OPT_BIP','Na černou listinu (neomezeně)');
define($constpref.'_OPT_BIPTIME0','Na černou listinu (dočasně)');

define($constpref.'_DOSOPT_NONE','Nic (pouze zaznamenat)');
define($constpref.'_DOSOPT_SLEEP','Uspat');
define($constpref.'_DOSOPT_EXIT','Prázná obrazovka');
define($constpref.'_DOSOPT_BIP','Na černou listinu (neomezeně)');
define($constpref.'_DOSOPT_BIPTIME0','Na černou listinu (dočasně)');
define($constpref.'_DOSOPT_HTA','DENY v .htaccess (experimentálně)');

define($constpref.'_BIP_EXCEPT','Skupiny, které se nemohou dostat na černou listinu');
define($constpref.'_BIP_EXCEPTDSC','A user who belongs to the group specified here will never be banned.<br />(I recommend to turn Administrator on.)');

define($constpref.'_DISABLES','Vypnout nebezpečné vlastnosti XOOPSu');

define($constpref.'_DBLAYERTRAP','Enable DB Layer trapping anti-SQL-Injection');
define($constpref.'_DBLAYERTRAPDSC','Almost SQL Injection attacks will be canceled by this feature. This feature is required a support from databasefactory. You can check it on Security Advisory page. This setting must be on. Never turn it off casually.');
define($constpref.'_DBTRAPWOSRV','Nikdy nekontrolovat _SERVER proti SQL-Injection'); // Never checking _SERVER for anti-SQL-Injection
define($constpref.'_DBTRAPWOSRVDSC','Some servers always enable DB Layer trapping. It causes wrong detections as SQL Injection attack. If you got such errors, turn this option on. You should know this option weakens the security of DB Layer trapping anti-SQL-Injection.');

define($constpref.'_BIGUMBRELLA','Povolit ochranu anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','This protects you from almost attacks via XSS vulnerabilities. But it is not 100%');

define($constpref.'_SPAMURI4U','anti-SPAM: Počet odkazů pro registrované uživatele');
define($constpref.'_SPAMURI4UDSC','If this number of URLs are found in POST data from users other than admin, the POST is considered as SPAM. 0 means disabling this feature.');
define($constpref.'_SPAMURI4G','anti-SPAM: Počet odkazů pro anonymní uživatele');
define($constpref.'_SPAMURI4GDSC','If this number of URLs are found in POST data from guests, the POST is considered as SPAM. 0 means disabling this feature.');

//3.40b
define($constpref."_ADMINHOME","Domů");
define($constpref."_ADMINABOUT","O modulu");
//3.50
define($constpref.'_STOPFORUMSPAM_ACTION','Stop Forum Spam');
define($constpref.'_STOPFORUMSPAM_ACTIONDSC','Checks POST data against spammers registered on www.stopforumspam.com database. Requires php CURL lib.');
}
