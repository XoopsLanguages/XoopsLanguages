<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Xoops Protector");

// A brief description of this module
define($constpref."_DESC","Den här modulen skyddar din XOOPS-sajt från olika attacker som DoS , SQL Injection  och variabelkontaminering.");

// Menu
define($constpref."_ADMININDEX","Skyddscenter");
define($constpref."_ADVISORY","Säkerhetsrådgivare");
define($constpref."_PREFIXMANAGER","Prefixhanterare");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Behörigheter') ;

// Configs
define($constpref.'_GLOBAL_DISBL','Tillfälligt avaktiverad');
define($constpref.'_GLOBAL_DISBLDSC','Allt skydd är tillfälligt avaktiverat.<br />Glöm inte att aktivera det igen när du är klar med felsökningen.');

define($constpref.'_DEFAULT_LANG','Standardspråk');
define($constpref.'_DEFAULT_LANGDSC','Specificera det språk som ska användas för meddelanden som visas innan common.php behandlas');

define($constpref.'_RELIABLE_IPS','Tillförlitliga IP-adresser');
define($constpref.'_RELIABLE_IPSDSC','Ange IP-adresser som är tillförlitliga och separera dem med | . ^ matchar början av strängen, $ matchar slutet av strängen.');

define($constpref.'_LOG_LEVEL','Loggningsnivå');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','Avstängningstid för avstängda IP-adresser (i sek)');

define($constpref.'_LOGLEVEL0','ingen');
define($constpref.'_LOGLEVEL15','Tyst');
define($constpref.'_LOGLEVEL63','tyst');
define($constpref.'_LOGLEVEL255','fullständig');

define($constpref.'_HIJACK_TOPBIT','Skyddade IP-bitar för sessionen');
define($constpref.'_HIJACK_TOPBITDSC','Anti-sessionskapning:<br />Standard 32(bitar). (Alla bits är skyddade)<br />När du inte har en fast IP-adress, ange IP-räckvidden genom antalet bitar.<br />T ex om din IP kan röra sig i intervallet 192.168.0.0-192.168.0.255, ange 24(bitar) här');
define($constpref.'_HIJACK_DENYGP','Grupper som ej är tillåtna att byta IP-adress i en session');
define($constpref.'_HIJACK_DENYGPDSC','Anti-sessionskapning:<br />Välj de grupper som inte får byta IP-adress i en session.<br />(Det är rekommenderat att slå på Administrator.)');
define($constpref.'_SAN_NULLBYTE','Sanerar null-bytes');
define($constpref.'_SAN_NULLBYTEDSC','Det avslutande tecknet "\\0" används ofta i skadliga attacker.<br />Ett null-byte-tecken ändras till ett blanksteg.<br />(Rekommenderas starkt)');
define($constpref.'_DIE_NULLBYTE','Avbryt om null bytes hittas');
define($constpref.'_DIE_NULLBYTEDSC','Det avslutande tecknet "\\0" används ofta i skadliga attacker.<br />(Rekommenderas starkt)');
define($constpref.'_DIE_BADEXT','Avbryt om skadliga filer laddas upp');
define($constpref.'_DIE_BADEXTDSC','Om någon försöker ladda upp filer som har potentiellt skadliga tillägg, t ex .php, kommer den här modulen gå ur XOOPS.<br />Om du ofta bifogar php-filer i B-Wiki eller PukiWikiMod, rekommenderas att stänga av det här alternativet.');
define($constpref.'_CONTAMI_ACTION','Ågärd om kontaminering hittas');
define($constpref.'_CONTAMI_ACTIONDS','Välj åtgärd när någon försöker kontaminera systemglobala variabler i ditt XOOPS.<br />(Rekommenderat alternativ är tom sida)');
define($constpref.'_ISOCOM_ACTION','Åtgärd om en isolerad utkommentering hittas');
define($constpref.'_ISOCOM_ACTIONDSC','Anti-SQL Injection:<br />Välj en åtgärd att utföra när "/*" hittas.<br />"Sanering" innebär att ett "*/" läggs in i slutet av strängen.<br />(Rekommenderat alternativ är Sanering)');
define($constpref.'_UNION_ACTION','Åtgärd om en UNION hittas');
define($constpref.'_UNION_ACTIONDSC','Anti-SQL Injection:<br />Välj en åtgär att utföra när en syntax som UNION i SQL hittas.<br />"Sanering" innebär att "union" ändras till "uni-on".<br />(Rekommenderat alternativ är Sanering)');
define($constpref.'_ID_INTVAL','Tvinga intval för variabler som ID');
define($constpref.'_ID_INTVALDSC','Alla variabler som har namnet "*id" kommer behandlas som ett heltal.<br />Det här alternativet skyddar dig från vissa typer av XSS och SQL Injections.<br />Det är rekommenderat att ha det här alternativet påslaget, men notera att det kan orsaka problem med vissa moduler.');
define($constpref.'_FILE_DOTDOT','Skydd mot katalogbyte');
define($constpref.'_FILE_DOTDOTDSC','Tar bort ".." från alla frågor som liknar katalogbyten');

define($constpref.'_BF_COUNT','Anti rå kraft');
define($constpref.'_BF_COUNTDSC','Anger antalet gånger du tillåter användare att försöka logga in sig inom en tiominutersperiod. Om någon misslyckas fler gånger än det angivna antalet kommer användarens IP-adress stängas av.');

define($constpref.'_BWLIMIT_COUNT','Bandbreddsbegränsning');
define($constpref.'_BWLIMIT_COUNTDSC','Specificera maximal tillgång till mainfile.php under bevakningstiden. Det här värdet bör vara 0 för normala miljöer som har tillräcklig CPU-bandbredd. Lägre antal än 10 kommer ignoreras.');

define($constpref.'_DOS_SKIPMODS','"Out of DoS/Crawler" kontroll för moduler');
define($constpref.'_DOS_SKIPMODSDSC','Ange katalognamnen på modulerna separerade av |. Det här alternativet är användbart med t ex chatt-moduler.');

define($constpref.'_DOS_EXPIRE','Bevakningstid för stort antal laddningar (sek)');
define($constpref.'_DOS_EXPIREDSC','Det här värde anger bevakningstiden för högfrekevent uppdatering (F5-attack) och crawlers med många laddningar.');

define($constpref.'_DOS_F5COUNT','Otillåtet antal för F5-attack');
define($constpref.'_DOS_F5COUNTDSC','Förhindrar DoS-attacker.<br />Det här värdet anger antalet uppdateringar som ska anses som en skadlig attack.');
define($constpref.'_DOS_F5ACTION','Åtgärd mot F5-attack');

define($constpref.'_DOS_CRCOUNT','Otillåtet antal för crawlers');
define($constpref.'_DOS_CRCOUNTDSC','Förhindrar crawlers med många laddningar.<br />Det här värdet anger antalet laddningar av sidan från crawlers som ska anses som skadligt..');
define($constpref.'_DOS_CRACTION','Åtgärd mot crawlers med många laddningar');

define($constpref.'_DOS_CRSAFE','Välkomnad användaragent');
define($constpref.'_DOS_CRSAFEDSC','Ett perl regex mönster för användaragenter.<br />Om den matchar kommer crawlern inte anses som skadlig.<br />eg) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','Ingen (bara loggning)');
define($constpref.'_OPT_SAN','Sanering');
define($constpref.'_OPT_EXIT','Tom skärm');
define($constpref.'_OPT_BIP','Stäng av IP-adressen (ingen tidsbegränsning)');
define($constpref.'_OPT_BIPTIME0','Stäng av IP-adressen (moratorium)');

define($constpref.'_DOSOPT_NONE','Ingen (bara loggning)');
define($constpref.'_DOSOPT_SLEEP','Sov');
define($constpref.'_DOSOPT_EXIT','Tom skärm');
define($constpref.'_DOSOPT_BIP','Stäng av IP-adressen (ingen tidsbegränsning)');
define($constpref.'_DOSOPT_BIPTIME0','Stäng av IP-adressen (moratorium)');
define($constpref.'_DOSOPT_HTA','DENY i .htaccess(experimentell)');

define($constpref.'_BIP_EXCEPT','Grupper som aldrig ska registreras som avstängda IP-adresser');
define($constpref.'_BIP_EXCEPTDSC','En användare som tillhör den angivna gruppen kommer aldrig bli avstängd.<br />(Rekommenderat att slå på Administrator.)');

define($constpref.'_DISABLES','Avaktivera potentiellt farliga funktioner i XOOPS');

define($constpref.'_DBLAYERTRAP','Aktivera fångst av anti-SQL-Injection i DB-lagret');
define($constpref.'_DBLAYERTRAPDSC','Nästan alla SQL Injection-attacker kommer avbrytas av den här funktionen. Den här funktionen är nödvändig för att stödja databasen. Du kan kontrollera den på säkerhetsrådgivarsidan. Den här inställningen måste vara påslagen. Stäng aldrig av den utan vidare.');
define($constpref.'_DBTRAPWOSRV','Kontrollera aldrig _SERVER för att hitta anti-SQL-Injection');
define($constpref.'_DBTRAPWOSRVDSC','Vissa servrar aktiverar DB-lagersfångst. Det orsakar fel vid identifiering av SQL Injection-attacker. Om du får liknande fel, slå på den här inställningen. Var dock medveten om att det här alternativet försvagar säkerheten vid DB-lagersfångst.');

define($constpref.'_BIGUMBRELLA','Aktivera anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','Det här skyddar dig från nästan alla attacker via XSS-sårbarheter, men är inte 100% säker.');

define($constpref.'_SPAMURI4U','Anti-SPAM: URL för normala användare');
define($constpref.'_SPAMURI4UDSC','Om antalet URL i ett inlägg från en användare annan än administratör överstiger det här numret kommer inlägget att betraktas som spam. 0 innebär att funktionen stängs av.');
define($constpref.'_SPAMURI4G','Anti-SPAM: URL för gäster');
define($constpref.'_SPAMURI4GDSC','Om antalet URL i ett inlägg från en gäst överstiger det här numret kommer inlägget att betraktas som spam. 0 innebär att funktionen stängs av.');

}

?>