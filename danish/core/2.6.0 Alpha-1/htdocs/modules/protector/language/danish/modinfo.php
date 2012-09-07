<?php

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined('_MI_PROTECTOR_LOADED')) {

define('_MI_PROTECTOR_LOADED', 1);

// The name of this module
define("_MI_PROTECTOR_NAME","Xoops Protector");

// A brief description of this module
define("_MI_PROTECTOR_DESC","Dette module beskytter dine Xoops side mod flere angreb såsom DoS , SQL Injection , og Variables contaminations.");

// Menu
define("_MI_PROTECTOR_ADMININDEX","Beskyttelses Center");
define("_MI_PROTECTOR_ADVISORY","Sikkerheds anbefalinger");
define("_MI_PROTECTOR_PREFIXMANAGER","Præfiks vedligeholdelse");
define('_MI_PROTECTOR_ADMENU_MYBLOCKSADMIN','Rettigheder') ;

// Configs
define('_MI_PROTECTOR_GLOBAL_DISBL','Midlertidig slået fra');
define('_MI_PROTECTOR_GLOBAL_DISBLDSC','Alle beskyttelser er slået fra midlertidigt.<br />Glem ikke at slå dem til igen efter fejlsøgning');

define('_MI_PROTECTOR_RELIABLE_IPS','Pålidelige IP-Adresser');
define('_MI_PROTECTOR_RELIABLE_IPSDSC','Indsæt IP-Adresser du anser som pålidelige, adskil med  | . ^ matches the head of string, $ matches the tail of string.');

define('_MI_PROTECTOR_LOG_LEVEL','Lognings niveau');
define('_MI_PROTECTOR_LOG_LEVELDSC','');

define('_MI_PROTECTOR_BANIP_TIME0','Skadelige IP-adresse suspenderes i hvor mange sekunder?');

define('_MI_PROTECTOR_LOGLEVEL0','Ingen');
define('_MI_PROTECTOR_LOGLEVEL15','Stille');
define('_MI_PROTECTOR_LOGLEVEL63','stille');
define('_MI_PROTECTOR_LOGLEVEL255','fuld');

define('_MI_PROTECTOR_HIJACK_TOPBIT','Beskyttede IP-bits for sessionen');
define('_MI_PROTECTOR_HIJACK_TOPBITDSC','Anti Session Hi-Jacking:<br />Standard 32(bit). (Alle bits er beskyttet)<br />Hvis din IP-adresse ikke er fast, så indstil IP-adressen ved hjælp af antallet af bits.<br />(eg) Hvis din IP-adresse kan ligge mellem 192.168.0.0-192.168.0.255, sæt så til 24(bit) her');
define('_MI_PROTECTOR_HIJACK_DENYGP','Grupper der afvises ved IP-adresse ændring i en session');
define('_MI_PROTECTOR_HIJACK_DENYGPDSC','Anti Session Hi-Jacking:<br />Vælg grupper, for hvem det ikke er tilladt at flytte deres IP-adresse i en session.<br />(Det anbefales at slå administrator til.)');
define('_MI_PROTECTOR_SAN_NULLBYTE','Sanitizing null-bytes');
define('_MI_PROTECTOR_SAN_NULLBYTEDSC','Det afslutende karakter "\\0" benyttes ofte til ondsindede angreb.<br />en null-byte vil blive ændret til et mellemrum.<br />(anbefales stærkt som til)');
define('_MI_PROTECTOR_DIE_NULLBYTE','Exit if null bytes are found');
define('_MI_PROTECTOR_DIE_NULLBYTEDSC','The terminating character "\\0" is often used in malicious attacks.<br />(highly recommended as On)');
define('_MI_PROTECTOR_DIE_BADEXT','Afslut hvis skadelige filer forsøges uploadet');
define('_MI_PROTECTOR_DIE_BADEXTDSC','Hvis nogen forsøger at uploade filer, som kan have skadelig virkning (.PHP), vil dette modul smide den ud af din XOOPS.<br />Hvis du ofte vedhæfter php-filer i B-Wiki eller PukiWikiMod, deaktivere dette.');
define('_MI_PROTECTOR_CONTAMI_ACTION','Aktion, hvis noget skadeligt forsøges');
define('_MI_PROTECTOR_CONTAMI_ACTIONDS','Vælg hvad der skal ske, når nogen forsøger at inficere systemets globale variabler i din XOOPS.<br />(anbefalet indstilling er blank skærm)');
define('_MI_PROTECTOR_ISOCOM_ACTION','Aktion, hvis et isoleret kommentar-in forsøges');
define('_MI_PROTECTOR_ISOCOM_ACTIONDSC','Anti SQL Injection:<br />Vælg hvad der skal ske, når et isoleret "/*" er fundet.<br />"Sanitizing" betyder at tilføje en anden "*/" i halen.<br />(anbefalet indstilling er Sanitizing)');
define('_MI_PROTECTOR_UNION_ACTION','Action hvis en UNION forsøges');
define('_MI_PROTECTOR_UNION_ACTIONDSC','Anti SQL Injection:<br />Vælg hvad der skal ske, ved syntaks UNION i SQL.<br />"Sanitizing" betyder at tilføje en anden "union" i "uni-on".<br />(anbefalet indstilling er Sanitizing)');
define('_MI_PROTECTOR_ID_INTVAL','Tving intval til variabler som id');
define('_MI_PROTECTOR_ID_INTVALDSC','Alle forespørgsler med "*id" vil blive behandlet som heltal.<br />Denne indstilling beskytter dig mod nogen former for XSS og SQL-injektion.<br />Selv om det anbefales at slå denne indstilling til, kan det give problemer med nogle moduler.');
define('_MI_PROTECTOR_FILE_DOTDOT','Beskyttelse mod Directroy Traversals');
define('_MI_PROTECTOR_FILE_DOTDOTDSC','Det eliminerer ".." fra alle forespørgsler, som ligner Directory Traversals');

define('_MI_PROTECTOR_BF_COUNT','Anti Brute Force');
define('_MI_PROTECTOR_BF_COUNTDSC','Vælg det antal gange du tillader en gæst at forsøge at logge ind, inden for 10 minutter. Hvis nogen forsøger flere gange end dette antal, vil hans/hendes IP-adresse blive udelukket.');

define('_MI_PROTECTOR_BWLIMIT_COUNT','Bandwidth limitation');
define('_MI_PROTECTOR_BWLIMIT_COUNTDSC','Specify the max access to mainfile.php during watching time. This value should be 0 for normal environments which have enough CPU bandwidth. The number fewer than 10 will be ignored.');

define('_MI_PROTECTOR_DOS_SKIPMODS','Moduler der fritages DoS/Crawler check');
define('_MI_PROTECTOR_DOS_SKIPMODSDSC','Angiv mappenavnene på modulerne adskilt med |. Denne mulighed er god til chat-moduler og lign.');

define('_MI_PROTECTOR_DOS_EXPIRE','Watch time for high loadings (sec)');
define('_MI_PROTECTOR_DOS_EXPIREDSC','Denne værdi angiver tiden for hyppige genindlæsning (F5 angreb) og webcrawlere der belaster siden meget.');

define('_MI_PROTECTOR_DOS_F5COUNT','Bad counts for F5 Attack');
define('_MI_PROTECTOR_DOS_F5COUNTDSC','Forebyggelse af DoS-angreb.<br />Denne værdi angiver hvornår en genindlæsning skal betragtes som en ondsindet angreb.');
define('_MI_PROTECTOR_DOS_F5ACTION','Vælg hvad der skal ske, ved F5 angreb');

define('_MI_PROTECTOR_DOS_CRCOUNT','Bad counts for Crawlers');
define('_MI_PROTECTOR_DOS_CRCOUNTDSC','Forebyggelse af webcrawlere der giver høj belastning.<br />Denne værdi angiver adgangsantal, som anses for at være en dårlig crawler.');
define('_MI_PROTECTOR_DOS_CRACTION','Vælg hvad der skal ske, ved disse dårlige webcrawlere');

define('_MI_PROTECTOR_DOS_CRSAFE','Welcomed User-Agent');
define('_MI_PROTECTOR_DOS_CRSAFEDSC','Et perl mønster for User-Agent.<br />Hvis det passer, vil webcrawleren aldrig betragtes som en høj loading crawler.<br />eg) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define('_MI_PROTECTOR_OPT_NONE','Ingen (kun logning)');
define('_MI_PROTECTOR_OPT_SAN','Sanitizing');
define('_MI_PROTECTOR_OPT_EXIT','Hvid skærm');
define('_MI_PROTECTOR_OPT_BIP','Ban IP-adressen (Ingen grænser)');
define('_MI_PROTECTOR_OPT_BIPTIME0','Ban IP-adressen (Midlertidigt)');

define('_MI_PROTECTOR_DOSOPT_NONE','Ingen (kun logning)');
define('_MI_PROTECTOR_DOSOPT_SLEEP','Sleep');
define('_MI_PROTECTOR_DOSOPT_EXIT','Hvid skærm');
define('_MI_PROTECTOR_DOSOPT_BIP','Forbyd IP-adressen (Ingen grænser)');
define('_MI_PROTECTOR_DOSOPT_BIPTIME0','Forbyd IP-adressen (Midlertidigt)');
define('_MI_PROTECTOR_DOSOPT_HTA','Forbyd i .htaccess(Eksperimentel)');

define('_MI_PROTECTOR_BIP_EXCEPT','Grupper der aldrig vil blive forbudte IP-adresse');
define('_MI_PROTECTOR_BIP_EXCEPTDSC','En bruger, der tilhører den gruppe angivet her, vil aldrig blive forbudt.<br />(Det anbefales at sætte Administrator til.)');

define('_MI_PROTECTOR_DISABLES','Deaktiver farlige funktioner i XOOPS');

define('_MI_PROTECTOR_DBLAYERTRAP','Enable DB Layer trapping anti-SQL-Injection');
define('_MI_PROTECTOR_DBLAYERTRAPDSC','Almost SQL Injection attacks will be canceled by this feature. This feature is required a support from databasefactory. You can check it on Security Advisory page. This setting must be on. Never turn it off casually.');
define('_MI_PROTECTOR_DBTRAPWOSRV','Never checking _SERVER for anti-SQL-Injection');
define('_MI_PROTECTOR_DBTRAPWOSRVDSC','Some servers always enable DB Layer trapping. It causes wrong detections as SQL Injection attack. If you got such errors, turn this option on. You should know this option weakens the security of DB Layer trapping anti-SQL-Injection.');

define('_MI_PROTECTOR_BIGUMBRELLA','aktivere anti-XSS (BigUmbrella)');
define('_MI_PROTECTOR_BIGUMBRELLADSC','Dette beskytter dig mod næsten alle angreb via XSS sårbarheder. Men det er ikke 100% sikkert');

define('_MI_PROTECTOR_SPAMURI4U','Anti-Spam: webadresser til normale brugere');
define('_MI_PROTECTOR_SPAMURI4UDSC','Hvis dette antal webadresser, findes i indlæg fra andre brugere end admin, POST betragtes som spam. 0 betyder at deaktivere denne funktion.');
define('_MI_PROTECTOR_SPAMURI4G','Anti-Spam: webadresser til gæster');
define('_MI_PROTECTOR_SPAMURI4GDSC','Hvis dette antal webadresser, findes i indlæg fra gæster, POST betragtes som spam. 0 betyder at deaktivere denne funktion.');
//3.40b
define("_MI_PROTECTOR_ADMINHOME","Hjem");
define("_MI_PROTECTOR_ADMINABOUT","Om");
//3.50
define('_MI_PROTECTOR_STOPFORUMSPAM_ACTION','Stop Forum Spam');
define('_MI_PROTECTOR_STOPFORUMSPAM_ACTIONDSC','Checks POST data for spammers registeret på www.stopforumspam.com database. Php CURL lib. nødvendigt');

}

?><?php // Translation done by Culex - 2012-03-15 18:40 ?>
