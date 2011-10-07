<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Xoops Protector");

// A brief description of this module
define($constpref."_DESC","Dette module beskytter dine Xoops side mod flere angreb såsom DoS , SQL Injection , og Variables contaminations.");

// Menu
define($constpref."_ADMININDEX","Beskyttelses Center");
define($constpref."_ADVISORY","Sikkerheds anbefalinger");
define($constpref."_PREFIXMANAGER","Præfiks vedligeholdelse");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Rettigheder') ;

// Configs
define($constpref.'_GLOBAL_DISBL','Midlertidig slået fra');
define($constpref.'_GLOBAL_DISBLDSC','Alle beskyttelser er slået fra midlertidigt.<br />Glem ikke at slå dem til igen efter fejlsøgning');

define($constpref.'_RELIABLE_IPS','Pålidelige IP-Adresser');
define($constpref.'_RELIABLE_IPSDSC','Indsæt IP-Adresser du anser som pålidelige, adskil med  | . ^ matches the head of string, $ matches the tail of string.');

define($constpref.'_LOG_LEVEL','Lognings niveau');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','Skadelige IP-adresse suspenderes i hvor mange sekunder?');

define($constpref.'_LOGLEVEL0','Ingen');
define($constpref.'_LOGLEVEL15','Stille');
define($constpref.'_LOGLEVEL63','stille');
define($constpref.'_LOGLEVEL255','fuld');

define($constpref.'_HIJACK_TOPBIT','Beskyttede IP-bits for sessionen');
define($constpref.'_HIJACK_TOPBITDSC','Anti Session Hi-Jacking:<br />Standard 32(bit). (Alle bits er beskyttet)<br />Hvis din IP-adresse ikke er fast, så indstil IP-adressen ved hjælp af antallet af bits.<br />(eg) Hvis din IP-adresse kan ligge mellem 192.168.0.0-192.168.0.255, sæt så til 24(bit) her');
define($constpref.'_HIJACK_DENYGP','Grupper der afvises ved IP-adresse ændring i en session');
define($constpref.'_HIJACK_DENYGPDSC','Anti Session Hi-Jacking:<br />Vælg grupper, for hvem det ikke er tilladt at flytte deres IP-adresse i en session.<br />(Det anbefales at slå administrator til.)');
define($constpref.'_SAN_NULLBYTE','Sanitizing null-bytes');
define($constpref.'_SAN_NULLBYTEDSC','Det afslutende karakter "\\0" benyttes ofte til ondsindede angreb.<br />en null-byte vil blive ændret til et mellemrum.<br />(anbefales stærkt som til)');
define($constpref.'_DIE_NULLBYTE','Exit if null bytes are found');
define($constpref.'_DIE_NULLBYTEDSC','The terminating character "\\0" is often used in malicious attacks.<br />(highly recommended as On)');
define($constpref.'_DIE_BADEXT','Afslut hvis skadelige filer forsøges uploadet');
define($constpref.'_DIE_BADEXTDSC','Hvis nogen forsøger at uploade filer, som kan have skadelig virkning (.PHP), vil dette modul smide den ud af din XOOPS.<br />Hvis du ofte vedhæfter php-filer i B-Wiki eller PukiWikiMod, deaktivere dette.');
define($constpref.'_CONTAMI_ACTION','Aktion, hvis noget skadeligt forsøges');
define($constpref.'_CONTAMI_ACTIONDS','Vælg hvad der skal ske, når nogen forsøger at inficere systemets globale variabler i din XOOPS.<br />(anbefalet indstilling er blank skærm)');
define($constpref.'_ISOCOM_ACTION','Aktion, hvis et isoleret kommentar-in forsøges');
define($constpref.'_ISOCOM_ACTIONDSC','Anti SQL Injection:<br />Vælg hvad der skal ske, når et isoleret "/*" er fundet.<br />"Sanitizing" betyder at tilføje en anden "*/" i halen.<br />(anbefalet indstilling er Sanitizing)');
define($constpref.'_UNION_ACTION','Action hvis en UNION forsøges');
define($constpref.'_UNION_ACTIONDSC','Anti SQL Injection:<br />Vælg hvad der skal ske, ved syntaks UNION i SQL.<br />"Sanitizing" betyder at tilføje en anden "union" i "uni-on".<br />(anbefalet indstilling er Sanitizing)');
define($constpref.'_ID_INTVAL','Tving intval til variabler som id');
define($constpref.'_ID_INTVALDSC','Alle forespørgsler med "*id" vil blive behandlet som heltal.<br />Denne indstilling beskytter dig mod nogen former for XSS og SQL-injektion.<br />Selv om det anbefales at slå denne indstilling til, kan det give problemer med nogle moduler.');
define($constpref.'_FILE_DOTDOT','Beskyttelse mod Directroy Traversals');
define($constpref.'_FILE_DOTDOTDSC','Det eliminerer ".." fra alle forespørgsler, som ligner Directory Traversals');

define($constpref.'_BF_COUNT','Anti Brute Force');
define($constpref.'_BF_COUNTDSC','Vælg det antal gange du tillader en gæst at forsøge at logge ind, inden for 10 minutter. Hvis nogen forsøger flere gange end dette antal, vil hans/hendes IP-adresse blive udelukket.');

define($constpref.'_BWLIMIT_COUNT','Bandwidth limitation');
define($constpref.'_BWLIMIT_COUNTDSC','Specify the max access to mainfile.php during watching time. This value should be 0 for normal environments which have enough CPU bandwidth. The number fewer than 10 will be ignored.');

define($constpref.'_DOS_SKIPMODS','Moduler der fritages DoS/Crawler check');
define($constpref.'_DOS_SKIPMODSDSC','Angiv mappenavnene på modulerne adskilt med |. Denne mulighed er god til chat-moduler og lign.');

define($constpref.'_DOS_EXPIRE','Watch time for high loadings (sec)');
define($constpref.'_DOS_EXPIREDSC','Denne værdi angiver tiden for hyppige genindlæsning (F5 angreb) og webcrawlere der belaster siden meget.');

define($constpref.'_DOS_F5COUNT','Bad counts for F5 Attack');
define($constpref.'_DOS_F5COUNTDSC','Forebyggelse af DoS-angreb.<br />Denne værdi angiver hvornår en genindlæsning skal betragtes som en ondsindet angreb.');
define($constpref.'_DOS_F5ACTION','Vælg hvad der skal ske, ved F5 angreb');

define($constpref.'_DOS_CRCOUNT','Bad counts for Crawlers');
define($constpref.'_DOS_CRCOUNTDSC','Forebyggelse af webcrawlere der giver høj belastning.<br />Denne værdi angiver adgangsantal, som anses for at være en dårlig crawler.');
define($constpref.'_DOS_CRACTION','Vælg hvad der skal ske, ved disse dårlige webcrawlere');

define($constpref.'_DOS_CRSAFE','Welcomed User-Agent');
define($constpref.'_DOS_CRSAFEDSC','Et perl mønster for User-Agent.<br />Hvis det passer, vil webcrawleren aldrig betragtes som en høj loading crawler.<br />eg) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','Ingen (kun logning)');
define($constpref.'_OPT_SAN','Sanitizing');
define($constpref.'_OPT_EXIT','Hvid skærm');
define($constpref.'_OPT_BIP','Ban IP-adressen (Ingen grænser)');
define($constpref.'_OPT_BIPTIME0','Ban IP-adressen (Midlertidigt)');

define($constpref.'_DOSOPT_NONE','Ingen (kun logning)');
define($constpref.'_DOSOPT_SLEEP','Sleep');
define($constpref.'_DOSOPT_EXIT','Hvid skærm');
define($constpref.'_DOSOPT_BIP','Forbyd IP-adressen (Ingen grænser)');
define($constpref.'_DOSOPT_BIPTIME0','Forbyd IP-adressen (Midlertidigt)');
define($constpref.'_DOSOPT_HTA','Forbyd i .htaccess(Eksperimentel)');

define($constpref.'_BIP_EXCEPT','Grupper der aldrig vil blive forbudte IP-adresse');
define($constpref.'_BIP_EXCEPTDSC','En bruger, der tilhører den gruppe angivet her, vil aldrig blive forbudt.<br />(Det anbefales at sætte Administrator til.)');

define($constpref.'_DISABLES','Deaktiver farlige funktioner i XOOPS');

define($constpref.'_DBLAYERTRAP','Enable DB Layer trapping anti-SQL-Injection');
define($constpref.'_DBLAYERTRAPDSC','Almost SQL Injection attacks will be canceled by this feature. This feature is required a support from databasefactory. You can check it on Security Advisory page. This setting must be on. Never turn it off casually.');
define($constpref.'_DBTRAPWOSRV','Never checking _SERVER for anti-SQL-Injection');
define($constpref.'_DBTRAPWOSRVDSC','Some servers always enable DB Layer trapping. It causes wrong detections as SQL Injection attack. If you got such errors, turn this option on. You should know this option weakens the security of DB Layer trapping anti-SQL-Injection.');

define($constpref.'_BIGUMBRELLA','aktivere anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','Dette beskytter dig mod næsten alle angreb via XSS sårbarheder. Men det er ikke 100% sikkert');

define($constpref.'_SPAMURI4U','Anti-Spam: webadresser til normale brugere');
define($constpref.'_SPAMURI4UDSC','Hvis dette antal webadresser, findes i indlæg fra andre brugere end admin, POST betragtes som spam. 0 betyder at deaktivere denne funktion.');
define($constpref.'_SPAMURI4G','Anti-Spam: webadresser til gæster');
define($constpref.'_SPAMURI4GDSC','Hvis dette antal webadresser, findes i indlæg fra gæster, POST betragtes som spam. 0 betyder at deaktivere denne funktion.');

}

?>
