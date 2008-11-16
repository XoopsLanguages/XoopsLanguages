<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Xoops Protector");

// A brief description of this module
define($constpref."_DESC","Denna modul beskytter dina Xoops sida mod fler angrepp såsom DoS , SQL Injection , och Variables contaminations.");

// Menu
define($constpref."_ADMININDEX","Skyddscentra");
define($constpref."_ADVISORY","Säkerhets rekommendationer");
define($constpref."_PREFIXMANAGER","Prefix Hanterare");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Behörigheter') ;

// Configs
define($constpref.'_GLOBAL_DISBL','Tillfälligt avaktiverad');
define($constpref.'_GLOBAL_DISBLDSC','Alla beskyttelser är tillfälligt avaktiverad.<br />Glöm inte att aktivera dem igen efter felsökning');

define($constpref.'_RELIABLE_IPS','Säkra IP-Adresser');
define($constpref.'_RELIABLE_IPSDSC','Infoga IP-Adresser du anser som säkre, separerat med  | . ^ matchar början av sträng, $ matchar ändan av sträng.');

define($constpref.'_LOG_LEVEL','Logg nivå');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','Svartlistade IP avstängning tid (sek)');

define($constpref.'_LOGLEVEL0','Ingen');
define($constpref.'_LOGLEVEL15','Svag');
define($constpref.'_LOGLEVEL63','Svår');
define($constpref.'_LOGLEVEL255','Full');

define($constpref.'_HIJACK_TOPBIT','Skyddad IP-bits för sessionen');
define($constpref.'_HIJACK_TOPBITDSC','Anti Session Hi-Jacking:<br />Standard 32(bit). (Alla bits är skyddad)<br />Om din IP-adress inte är fast, så ställ in IP-adressen vid hjälp av antalet av bits.<br />(eg.) Om din IP-adress ligga mellan 192.168.0.0–192.168.0.255, sätt så till 24(bit) här');
define($constpref.'_HIJACK_DENYGP','Grupper som avvisas vid IP-adress ändring i en session');
define($constpref.'_HIJACK_DENYGPDSC','Anti Session Hi-Jacking:<br />Välj grupper, för vem den inte är tillåten att flytta deras IP-adress i en session.<br /> (Det rekommenderas att slå administrator till.)');
define($constpref.'_SAN_NULLBYTE','Sanitizing null-bytes');
define($constpref.'_SAN_NULLBYTEDSC','Det avslutande karaktär "\\0" används ofta till ondsinnade angrepp.<br />en null-byte kommer att bli ändrat till ett mellanrum.<br />(rekommenderas stärkt som till)');
define($constpref.'_DIE_BADEXT','Avslut om skadlige filer försöka uppladdades');
define($constpref.'_DIE_BADEXTDSC','Om någon försöker att ladda upp filer, som kan ha skadlig verkan (.PHP), vill detta modul kasta den ut av din XOOPS.<br />Om du ofta bifogar php-filer i B-Wiki eller PukiWikiMod, avaktivera detta.');
define($constpref.'_CONTAMI_ACTION','Aktion, om något skadligt försökas');
define($constpref.'_CONTAMI_ACTIONDS','Välj vad som skall ske, när någon försöker att inficiera systemets globale variabler i din XOOPS.<br /> (rekommenderad inställning är blank skärm)');
define($constpref.'_ISOCOM_ACTION','Aktion, om ett isolerat kommentar-in försökas');
define($constpref.'_ISOCOM_ACTIONDSC','Anti SQL Injection:<br />Välj vad som skall ske, när ett isolerat "/*" är funnit.<br />"Sanitizing" betyder att tillägga en annan "*/" i ändan.<br />(rekommenderad inställning är Sanitizing)');
define($constpref.'_UNION_ACTION','Action om en UNION försökas');
define($constpref.'_UNION_ACTIONDSC','Anti SQL Injection:<br />Välj vad som skall ske, vet syntaks UNION i SQL.<br />"Sanitizing" betyder att tillägga en annan "union" i "uni-on".<br />(rekommenderad inställning är Sanitizing)');
define($constpref.'_ID_INTVAL','Tving intval till variabler som id');
define($constpref.'_ID_INTVALDSC','Alla förfrågningar med "*id" kommer att bli hanterat som heltal.<br />Denna inställning skyddar dig mod någon formar för XSS och SQL-injektion.<br />Även om den rekommenderas att slå denna inställning till, kan den ge problem med några moduler.');
define($constpref.'_FILE_DOTDOT','Skydd emot Directroy Traversals');
define($constpref.'_FILE_DOTDOTDSC','Det eliminerar ".." från alla förfrågningar, som liknar Directory Traversals');

define($constpref.'_BF_COUNT','Anti Brute Force');
define($constpref.'_BF_COUNTDSC','Välj antal gånger du tillåter en gäst att försöka att logga in, innan för 10 minuter. Om någon försöker fler gånger än detta antal, vill hans/hennes IP-adress bli avstängt.');

define($constpref.'_DOS_SKIPMODS','Moduler som undvikare DoS/Crawler check');
define($constpref.'_DOS_SKIPMODSDSC','Angiv mapp namnen på modulerna åtskilt med |. Denna möjlighet är god till chatt-moduler och likn.');

define($constpref.'_DOS_EXPIRE','Observerar tid för höga belastningar  (sek)');
define($constpref.'_DOS_EXPIREDSC','Detta värde uppger tiden för upprepande återinläsning (F5 angrepp) och webcrawlere som belastar sajten mycket.');

define($constpref.'_DOS_F5COUNT','Bad counts för F5 angrepp');
define($constpref.'_DOS_F5COUNTDSC','Förebyggande av DoS- angrepp.<br />Detta värde uppger när en återinläsning skall betraktas som ett ondsinnat angrepp.');
define($constpref.'_DOS_F5ACTION','Välj vad som skall ske, vid F5 angrep');

define($constpref.'_DOS_CRCOUNT','Bad counts för Crawlers');
define($constpref.'_DOS_CRCOUNTDSC','Förebyggande av webcrawlere som ger hög belastning.<br />Denna värde uppger åtgångsantal, som anses för att vara en dålig crawler.');
define($constpref.'_DOS_CRACTION','Välj vad som skall ske, vid dessa dåliga webcrawlere');

define($constpref.'_DOS_CRSAFE','Välkomna User-Agent');
define($constpref.'_DOS_CRSAFEDSC','Ett perl mönster för User-Agent.<br />Om den passar, vill webcrawleren aldrig betraktas som en hög belastning crawler.<br />eg) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','Ingen (enbart loggning)');
define($constpref.'_OPT_SAN','Sanitizing');
define($constpref.'_OPT_EXIT','Vit skärm');
define($constpref.'_OPT_BIP','Inskränkningar av IP-adressen (Inga gränser)');
define($constpref.'_OPT_BIPTIME0','Ban IP-adressen (Tillfälligt)');

define($constpref.'_DOSOPT_NONE','Ingen (bara loggning)');
define($constpref.'_DOSOPT_SLEEP','Sleep');
define($constpref.'_DOSOPT_EXIT','Vit skärm');
define($constpref.'_DOSOPT_BIP','Inskränkningar av IP-adressen (Inga gränser)');
define($constpref.'_DOSOPT_BIPTIME0','Inskränkningar av IP-adressen (Tillfälligt)');
define($constpref.'_DOSOPT_HTA','Inskränkningar av .htaccess(Experimentell)');

define($constpref.'_BIP_EXCEPT','Grupper som aldrig kommer att bli inskränka IP-adressen');
define($constpref.'_BIP_EXCEPTDSC','En använder, som åhörare den grupp angivet här, vill aldrig bli förmenat<br />(Den rekommenderas att sätta Administrator till.)');

define($constpref.'_DISABLES','Avaktivera kritiske funktioner i XOOPS');

define($constpref.'_BIGUMBRELLA','aktivera anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','Denna beskytter dig mod nästan alla angrepp via XSS sårbarheder. Utan den är inte 100 % säkert');

define($constpref.'_SPAMURI4U','Anti-Spam: webbadresser till vanliga användare');
define($constpref.'_SPAMURI4UDSC','Om detta antal webbadresser, finns i inlägg från andra användare än admin, POST betraktas som spam. 0 betyder att avaktivera denna funktion.');
define($constpref.'_SPAMURI4G','Anti-Spam: webbadresser till gäster');
define($constpref.'_SPAMURI4GDSC','Om detta antal webbadresser, finns i inlägg från gäster, POST betraktas som spam. 0 betyder att avaktivera denna funktion.');

}

?>