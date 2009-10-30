<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Xoops Zaštita");

// A brief description of this module
define($constpref."_DESC","Ovaj modul štiti vaše xoops stranice od raznih napada kao što su DoS , SQL ubacivanje , te zagađivanje varijablama.");

// Menu
define($constpref."_ADMININDEX","Zaštitni centar");
define($constpref."_ADVISORY","Zaštitno savjetovanje");
define($constpref."_PREFIXMANAGER","Upravitelj prefiksima");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Dozvole') ;

// Configs
define($constpref.'_GLOBAL_DISBL','Trenutno onemogućeno');
define($constpref.'_GLOBAL_DISBLDSC','Sve zaštite su trenutno onemogućene.<br />Ne zaboravite ovo isključiti nakon što sredite problem');

define($constpref.'_DEFAULT_LANG','Zadani jezik');
define($constpref.'_DEFAULT_LANGDSC','Odredite jezik za prikazivanje poruka prije pokretanja common.php');

define($constpref.'_RELIABLE_IPS','Pouzdane IP');
define($constpref.'_RELIABLE_IPSDSC','postavite IP-ove kojima možete vjerovati odvojene sa | . ^ zamjenjuje čelo teksta, $ zamjenju rep teksta.');

define($constpref.'_LOG_LEVEL','Nivo zapisa');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','Vrijeme suspenzije zabranjeni IP-ovima (sek)');

define($constpref.'_LOGLEVEL0','ništa');
define($constpref.'_LOGLEVEL15','Tiho');
define($constpref.'_LOGLEVEL63','tiho');
define($constpref.'_LOGLEVEL255','puno');

define($constpref.'_HIJACK_TOPBIT','Zaštičeni bitovi IP-a za sesiju');
define($constpref.'_HIJACK_TOPBITDSC','Protiv krađe sesije:<br />Zadano 32(bit). (Svi bitovi su zaštičeni)<br />Kad vaš IP nije stabilan, postavite raspon IP-ova po broju bitova.<br />(npr) Ako vaš IP može biti unutar raspona 192.168.0.0-192.168.0.255, postavite 24(bit) ovdje');
define($constpref.'_HIJACK_DENYGP','Grupe kojima je zabranjeno mjenjanje IP-a u sesiji');
define($constpref.'_HIJACK_DENYGPDSC','Protiv krađe sesije:<br />Izaberite grupe kojima nije dozvoljeno mjenjanje njihovih IP u sesiji.<br />(Predlažem da administrator uključite.)');
define($constpref.'_SAN_NULLBYTE','Saniranje null-bajtova');
define($constpref.'_SAN_NULLBYTEDSC','Znak za prekid "\\0" se često koristi za maliciozne napade.<br />null-bajt će biti promjenjen u razmak.<br />(Svakako preporučam da je ovo uključeno)');
define($constpref.'_DIE_NULLBYTE','Izađi ako su null-bajtovi pronađeni');
define($constpref.'_DIE_NULLBYTEDSC','Znak za prekid "\\0" se često koristi za maliciozne napade.<br />(svakako preporučamo da je ovo uključeno)');
define($constpref.'_DIE_BADEXT','Izađi ako su uploadane loše datoteke');
define($constpref.'_DIE_BADEXTDSC','Ako netko pokuša uploadati datoteke koje imaju loše ekstenzije kao .php , ovaj će modul izaći iz vašeg XOOPS-a.<br />Ako često dodajete php datoteke u B-Wiki ili PukiWikiMod, ugasite ovo.');
define($constpref.'_CONTAMI_ACTION','Radnja ako je pronađena zagađena datoteka');
define($constpref.'_CONTAMI_ACTIONDS','Izaberite radnju ako netko pokuša zagaditi sustav globalnih varijabli u vašem XOOPS-u.<br />(preporučena opcija je prazan ekran)');
define($constpref.'_ISOCOM_ACTION','Radnja ako je pronađen izolirani komentar');
define($constpref.'_ISOCOM_ACTIONDSC','Protiv SQL ubacivanja:<br />Izaberite ovu radnju kad se izolirani "/*" pronađe.<br />"Saniranje" znači dodavanje sljedećeg "*/" na kraju.<br />(preporučena opcija je saniranje)');
define($constpref.'_UNION_ACTION','Radnja ako je pronađen UNION');
define($constpref.'_UNION_ACTIONDSC','Protiv SQL ubacivanja:<br />Izaberite radnju kad netko upiše nešto kao UNION iz SQL-a.<br />"Saniranje" znači mjenjanje "union" u "uni-on".<br />(preporučena opcija je saniranje)');
define($constpref.'_ID_INTVAL','Prisili intval na varijable kao id');
define($constpref.'_ID_INTVALDSC','Svi zahtjevi imena "*id" će biti obrađeni kao cijelobrojni.<br />Ova opcija vas štiti od nekih vrsta XSS i SQL ubacivanja.<br />Iako preporučam da se ovo uključi, može prouzročiti probleme sa nekim modulima.');
define($constpref.'_FILE_DOTDOT','Zaštita od putanja za mape');
define($constpref.'_FILE_DOTDOTDSC','Eliminira ".." iz svih zahtjeva koji liče na putanje za mape');

define($constpref.'_BF_COUNT','Protiv Brute Force');
define($constpref.'_BF_COUNTDSC','Postavlja brojač gdje dozvoljavate gostu da se pokuša prijaviti unutar 10 minuta. Ako se netko ne uspije prijaviti unutar tog broja, njegov/a IP će biti zabranjena.');

define($constpref.'_BWLIMIT_COUNT','Ograničenje prometa');
define($constpref.'_BWLIMIT_COUNTDSC','Određuje maksimalni pristup prema mainfile.php za vrijeme praćenja. Ova bi vrijednost trebala biti 0 za normalne uvjete koji imaju dovoljno CPU prometa. Broj manji od 10 će biti zanemaren.');

define($constpref.'_DOS_SKIPMODS','Moduli izvan DoS/Crawler provjere');
define($constpref.'_DOS_SKIPMODSDSC','određuje imena mapa modula odvojeno sa |. Ova opcija će biti korisna sa modulima za brbljanje i sl.');

define($constpref.'_DOS_EXPIRE','Vrijeme praćenja za visoku zauzetost (sek)');
define($constpref.'_DOS_EXPIREDSC','Ova vrijednost određuje vrijeme praćenja visoko frekentna učitavanja (F5 napad) i visoko potrošne crawlere.');

define($constpref.'_DOS_F5COUNT','Brojač za F5 napad');
define($constpref.'_DOS_F5COUNTDSC','Štiti od DoS napada.<br />Ova vrijednost određuje broj učitavanja koji će se smatrati kao maliciozni napad.');
define($constpref.'_DOS_F5ACTION','Radnja protiv F5 napada');

define($constpref.'_DOS_CRCOUNT','Brojač za Crawlere');
define($constpref.'_DOS_CRCOUNTDSC','Štiti od visoko potrošnih crawlera.<br />Ova vrijednost određuje broj pristupa koji će se smatrati kao loše ponašajući crawler.');
define($constpref.'_DOS_CRACTION','Radnja protiv visoko potrošnih crawlera');

define($constpref.'_DOS_CRSAFE','Dobro došli korisnički-agent');
define($constpref.'_DOS_CRSAFEDSC','Perl regex uzorak za korisničkog-agenta.<br />Ako se poklapa, crawler se nikad ne smatra kao visoko potrošni crawler.<br />npr) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','Ništa (samo zapisivanje)');
define($constpref.'_OPT_SAN','Sanacija');
define($constpref.'_OPT_EXIT','Prazan ekran');
define($constpref.'_OPT_BIP','Zabrani IP (Nema ograničenja)');
define($constpref.'_OPT_BIPTIME0','Zabrani IP (moratorij)');

define($constpref.'_DOSOPT_NONE','Ništa (samo zapisivanje)');
define($constpref.'_DOSOPT_SLEEP','Spavanje');
define($constpref.'_DOSOPT_EXIT','Prazan ekran');
define($constpref.'_DOSOPT_BIP','Zabrani IP (Nena ograničenja)');
define($constpref.'_DOSOPT_BIPTIME0','Zabrani IP (moratorij)');
define($constpref.'_DOSOPT_HTA','ODBIJENO od .htaccess(Eksperimentalno)');

define($constpref.'_BIP_EXCEPT','Grupe koje nikad ne ne mogu biti zabranjene IP');
define($constpref.'_BIP_EXCEPTDSC','Korisnik koji pripada ovdje navedenoj grupi neće nikad biti zabranjen.<br />(Preporučam da uključite Administratore.)');

define($constpref.'_DISABLES','Onemogući opasna svojstva u XOOPS-u');

define($constpref.'_DBLAYERTRAP','Uključi DB Layer trapping anti-SQL-Injection');
define($constpref.'_DBLAYERTRAPDSC','Skoro svi SQL Injection napadi će biti onemogućeni s ovom mogućnosti. Ova mogućnost zahtjeva potporu iz databasefactory. Možete provjeriti stranicu sigurnosnog savjetnika. Ova postavka mora biti uključena. Ne isključujte je ni povremeno.');
define($constpref.'_DBTRAPWOSRV','Nikad ne provjeravaj _SERVER za anti-SQL-Injection');
define($constpref.'_DBTRAPWOSRVDSC','Neki poslužitelji imaju stalno uključeno DB Layer trapping. Radi toga se krivo detektira kao SQL Injection napad. Ako dobivate takve greške, uključite ovo. Trebali bi ste znati da ova opcija oslabljuje sigurnost DB Layer trapping anti-SQL-Injection.');

define($constpref.'_BIGUMBRELLA','omogući anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','Ovo vas štiti od gotovo svih napada preko XSS ranjiovsti. Ali nije 100% siguran');

define($constpref.'_SPAMURI4U','anti-SPAM: URL-ovi normalnih korisnika');
define($constpref.'_SPAMURI4UDSC','Ako se ovaj broj URL-a nađe u POST podatku od korisnika koji nisu administratori, POST će se smatrati za SPAM. 0 znači da je ovo svojstvo onemogućeno.');
define($constpref.'_SPAMURI4G','anti-SPAM: URL-ovi gostiju');
define($constpref.'_SPAMURI4GDSC','Ako se ovaj broj URL-a nađe u POST podatku od gosta, POST će se smatrati za SPAM. 0 znači da je ovo svojstvo onemogućeno.');

}

?>