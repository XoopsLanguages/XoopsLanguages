<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Xoops Protector");

// A brief description of this module
define($constpref."_DESC","Denne modul beskytter din XOOPS side mot flere angrep såsom DoS , SQL Injection , og Variables contaminations.");

// Menu
define($constpref."_ADMININDEX","Beskyttelses Senter");
define($constpref."_ADVISORY","Sikkerhets-anbefalinger");
define($constpref."_PREFIXMANAGER","Prefiks vedlikehold");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Rettigheter') ;

// Configs
define($constpref.'_GLOBAL_DISBL','Midlertidig slått av');
define($constpref.'_GLOBAL_DISBLDSC','Alle beskyttelser er slått av midlertidig.<br />Glem ikke å slå dem på igjen etter feilsøking');

define($constpref.'_RELIABLE_IPS','Pålitelige IP-Adresser');
define($constpref.'_RELIABLE_IPSDSC','Innsett IP-Adresser du anser som pålitelige, adskill med  | . ^ matches the head of string, $ matches the tail of string.');

define($constpref.'_LOG_LEVEL','Loggingsniv�');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','Skadelige IP-adresser suspenderes i hvor mange sekunder?');

define($constpref.'_LOGLEVEL0','Ingen');
define($constpref.'_LOGLEVEL15','Stille');
define($constpref.'_LOGLEVEL63','stille');
define($constpref.'_LOGLEVEL255','full');

define($constpref.'_HIJACK_TOPBIT','Beskyttede IP-bits for sessionen');
define($constpref.'_HIJACK_TOPBITDSC','Anti Session Hi-Jacking:<br />Standard 32(bit). (Alle bits er beskyttet)<br />Hvis din IP-adresse ikke er fast, så innstill IP-adressen ved hjelp av antallet av bits.<br />(eg) Hvis din IP-adresse kan ligge mellom 192.168.0.0-192.168.0.255, sett så til 24(bit) her');
define($constpref.'_HIJACK_DENYGP','Grupper som avvises ved IP-adresse endring i en session');
define($constpref.'_HIJACK_DENYGPDSC','Anti Session Hi-Jacking:<br />Velg grupper, for hvem det ikke er tillatt å flytte deres IP-adresse i en session.<br />(Det anbefales å slå administrator til.)');
define($constpref.'_SAN_NULLBYTE','Sanitizing null-bytes');
define($constpref.'_SAN_NULLBYTEDSC','Det avsluttende karakter "\\0" benyttes ofte til ondsinnede angrep.<br />en null-byte vil blive endret til et mellomrom.<br />(anbefales sterkt som på)');
define($constpref.'_DIE_BADEXT','Avslutt hvis skadelige filer forsøkes uploadet');
define($constpref.'_DIE_BADEXTDSC','Hvis noen forsøker å uploade filer, som kan ha skadelig virkning (.PHP), vil denne modul kaste den ut av din XOOPS.<br />Hvis du ofte vedhefter php-filer i B-Wiki eller PukiWikiMod, deaktivere dette.');
define($constpref.'_CONTAMI_ACTION','Aktion, hvis noget skadeligt forsøges');
define($constpref.'_CONTAMI_ACTIONDS','Velg hva som skal skje når noen forsøker å infisere systemets globale variabler i din XOOPS.<br />(anbefalt innstilling er blank skjerm)');
define($constpref.'_ISOCOM_ACTION','Handling hvis et isolert kommentar-in forsøkes');
define($constpref.'_ISOCOM_ACTIONDSC','Anti SQL Injection:<br />Velg hva som skal skje når et isolert "/*" blir funnet.<br />"Sanitizing" betyr å tilføye en annen "*/" i halen.<br />(anbefalt innstilling er Sanitizing)');
define($constpref.'_UNION_ACTION','Action hvis en UNION forsøkes');
define($constpref.'_UNION_ACTIONDSC','Anti SQL Injection:<br />Velg hva som skal skje ved syntaks UNION i SQL.<br />"Sanitizing" betyr å tilføye en annen "union" i "uni-on".<br />(anbefalt innstilling er Sanitizing)');
define($constpref.'_ID_INTVAL','Tving intvall til variabler som id');
define($constpref.'_ID_INTVALDSC','Alle forespørsler med "*id" vil bli behandlet som heltall.<br />Denne innstilling beskytter deg mot noen former for XSS og SQL-injektion.<br />Selv om det anbefales å slå denne indstilling på, kan det gi problemer med noen moduler.');
define($constpref.'_FILE_DOTDOT','Beskyttelse mot Directroy Traversals');
define($constpref.'_FILE_DOTDOTDSC','Det eliminerer ".." fra alle forespørsler, som ligner Directory Traversals');

define($constpref.'_BF_COUNT','Anti Brute Force');
define($constpref.'_BF_COUNTDSC','Velg det antall ganger du tillater en gjest å forsøke å logge inn, innenfor 10 minutter. Hvis noen forsøker flere ganger enn dette antall, vil hans/hennes IP-adresse bli utelukket.');

define($constpref.'_DOS_SKIPMODS','Moduler som fritas DoS/Crawler sjekk');
define($constpref.'_DOS_SKIPMODSDSC','Angi mappenavnene på modulene adskilt med |. Denne mulighet er god til chat-moduler og lign.');

define($constpref.'_DOS_EXPIRE','Watch time for high loadings (sec)');
define($constpref.'_DOS_EXPIREDSC','Denne verdi angir tiden for hyppige gjeninnlesning (F5 angreb) og webcrawlere som belaster siden mye.');

define($constpref.'_DOS_F5COUNT','Bad counts for F5 Attack');
define($constpref.'_DOS_F5COUNTDSC','Forebyggelse av DoS-angreb.<br />Denne verdi angir når en gjeninnlesning skal betraktes som et ondsinnet angrep.');
define($constpref.'_DOS_F5ACTION','Velg hva som skal skje ved F5 angreb');

define($constpref.'_DOS_CRCOUNT','Bad counts for Crawlers');
define($constpref.'_DOS_CRCOUNTDSC','Forebyggelse av webcrawlere som gir høy belastning.<br />Denne verdi angir adgangsantall, som anses for at være en dårlig crawler.');
define($constpref.'_DOS_CRACTION','Velg hva som skal skje ved disse dårlige webcrawlere');

define($constpref.'_DOS_CRSAFE','Welcomed User-Agent');
define($constpref.'_DOS_CRSAFEDSC','Et perl mønster for User-Agent.<br />Om du ønsker vil webcrawleren aldri betraktes som en høy loading crawler.<br />eg) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','Ingen (kun logging)');
define($constpref.'_OPT_SAN','Sanitizing');
define($constpref.'_OPT_EXIT','Blank skjerm');
define($constpref.'_OPT_BIP','Ban IP-adressen (Ingen grenser)');
define($constpref.'_OPT_BIPTIME0','Ban IP-adressen (Midlertidig)');

define($constpref.'_DOSOPT_NONE','Ingen (kun logging)');
define($constpref.'_DOSOPT_SLEEP','Sleep');
define($constpref.'_DOSOPT_EXIT','Blank skjerm');
define($constpref.'_DOSOPT_BIP','Forby IP-adressen (Ingen grenser)');
define($constpref.'_DOSOPT_BIPTIME0','Forby IP-adressen (Midlertidig)');
define($constpref.'_DOSOPT_HTA','Forby i .htaccess (Eksperimentell)');

define($constpref.'_BIP_EXCEPT','Grupper som aldri vil bli forbudte IP-adresser');
define($constpref.'_BIP_EXCEPTDSC','En bruker, som tilhører den gruppe angitt her, vil aldri bli nektet adgang.<br />(Det anbefales å legge til Administrator.)');

define($constpref.'_DISABLES','Deaktiver farlige funksjoner i XOOPS');

define($constpref.'_BIGUMBRELLA','Aktivere anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','Dette beskytter deg mot nesten alle angrep via XSS sårbarheter. Men det er ikke 100% sikkert');

define($constpref.'_SPAMURI4U','Anti-Spam: webadresser til normale brukere');
define($constpref.'_SPAMURI4UDSC','Hvis dette antall webadresser, finnes i innlegg fra andre brukere enn admin, POST betraktes som spam. 0 betyr å deaktivere denne funksjon.');
define($constpref.'_SPAMURI4G','Anti-Spam: webadresser til gjester');
define($constpref.'_SPAMURI4GDSC','Hvis dette antall webadresser finnes i innlegg fra gjester, POST betraktes som spam. 0 betyr å deaktivere denne funksjon.');

}

?>