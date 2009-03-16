<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Protector");

// A brief description of this module
define($constpref."_DESC","Ovaj Modul &scaron;titi webstranicu od napada Hakera (DoS , SQL Injekcija i Variable Infekcija)");

// Menu
define($constpref."_ADMININDEX","Protekt Centar");
define($constpref."_ADVISORY","Savjeti za sigurnost");
define($constpref."_PREFIXMANAGER","Prefix Manadzer");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Odobrenja') ;

// Configs
define($constpref.'_GLOBAL_DISBL','Trenutno je Protektor deaktiviran');
define($constpref.'_GLOBAL_DISBLDSC','Sve sigurnosne funkcije su trenutno deaktivirane!<br />Kada podesi&scaron; ispravno Modul nemoj zaboraviti da ga aktivira&scaron;, ili ako u Modulu gre&scaron;ke prepravi&scaron;!');

define($constpref.'_DEFAULT_LANG','Standardni govor');
define($constpref.'_DEFAULT_LANGDSC','Odredi standardni govor za prikazivanje obavje&scaron;tajnih poruka prilikom procesa common.php');

define($constpref.'_RELIABLE_IPS','Pouzdane i sigurne IP');
define($constpref.'_RELIABLE_IPSDSC','Mo&#382;e&scaron; IP Adrese rastaviti ovom | oznakom. ^ na po&#269;wtku stavi ovaj string, $ a na kraju stavi ovaj string.');

define($constpref.'_LOG_LEVEL','Evidencije Levela');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','Baovane IP su suspenzovane za (sekunde)');

define($constpref.'_LOGLEVEL0','ni&scaron;ta');
define($constpref.'_LOGLEVEL15','miran');
define($constpref.'_LOGLEVEL63','miran');
define($constpref.'_LOGLEVEL255','pun');

define($constpref.'_HIJACK_TOPBIT','Za&scaron;ti&#263;eni IP bitsi za ovaj Session');
define($constpref.'_HIJACK_TOPBITDSC','Anti Session Hi-Jacking:<br />Standard je 32(bit). (Svi Bitsi su za&scaron;ti&#263;eni)<br />Ako nemate stati&#269;ne IP Adrese, stavi u IP polje brojeve pojedinih Bitsa.<br />(eg) Ako se tvoja IP u podru&#269;ju od 192.168.0.0 do 192.168.0.255 nalazi, postavi onda na 24(bit) ovdje');
define($constpref.'_HIJACK_DENYGP','Grupe kojima se mjenjaju IP u okviru jednog Session(posjete) se otkazuje.');
define($constpref.'_HIJACK_DENYGPDSC','Anti Session Hi-Jacking:<br />Izaberi Grupu, kojoj je otkazano da se njene IP zbog jedne posjete Session se mijenjaju..<br />(Najmanje izaberi Administratora-Grupe ti se preporu&#269;uje.)');
define($constpref.'_SAN_NULLBYTE','Saniranje (&#269;i&scaron;&#263;enje) null-bytesa');
define($constpref.'_SAN_NULLBYTEDSC','Zavr&scaron;ne oznake "\\0" Hakeri &#269;esto koriste u napadima.<br />Ovi se Null-Bytsi konvertiraju u prazne oznake.<br />(uklju&#269;enje se obavezno preporu&#269;uje!)');
define($constpref.'_DIE_NULLBYTE','Blokirati radnju, ako se Null-Bytsi prona&#273;u');
define($constpref.'_DIE_NULLBYTEDSC','Zavr&scaron;ne oznake "\\0" Hakeri &#269;esto koriste u napadima.<br />(obavezno se preporu&#269;uje)');
define($constpref.'_DIE_BADEXT','Blokirati radnju, ako se nedozvoljeni podaci uploaduju');
define($constpref.'_DIE_BADEXTDSC','Ako neko proba, podatke sa zavr&scaron;nim oznakama kao .php da uploaduje, Modul blokira pristup osobi da ima kontakt sa stranicom.<br />Ako ti &#269;esto koristi&scaron; B-Wiki ili PukiWikiMod pode&scaron;avanje, onda dok ne obavi&scaron; svoju radnju isklju&#269;i ovu opciju.');
define($constpref.'_CONTAMI_ACTION','Preventiva, ako se ne&#269;isto&#263;e budu prona&scaron;le:');
define($constpref.'_CONTAMI_ACTIONDS','Izaberi jednu od akcija, ako neko proba, globalne XOOPS-Variable da zaprlja.<br />(Preporuka je "Bijeli prozor")');
define($constpref.'_ISOCOM_ACTION','Preventiva, ako izolirani komentar bude prona&#273;en:');
define($constpref.'_ISOCOM_ACTIONDSC','Anti SQL Injekcije:<br />Izaberi jednu od Preventiva, koja reaguje na izolirane komentare "/*" koje prona&#273;e.<br />"Saniranje (&#269;i&scaron;&#263;enje)" ozna&#269;ava dodatne  "*/" zaka&#269;ke.<br />(Preporuka je "Saniranje (&#269;i&scaron;&#263;enje)" )');
define($constpref.'_UNION_ACTION','Preventiva ako UNION bude prona&#273;en.');
define($constpref.'_UNION_ACTIONDSC','Anti SQL Injekcije:<br />Izaberi jednu od Preventiva, ako bude SQL-Komanda UNION prona&#273;ena.<br />"Saniranje (&#269;i&scaron;&#263;enje)" ozna&#269;ava da se "union" u "uni-on" pretvori.<br />(Preporuka je "Saniranje (&#269;i&scaron;&#263;enje))');
define($constpref.'_ID_INTVAL','Prisili intval za Variable kao npr. ID');
define($constpref.'_ID_INTVALDSC','Svi upiti sa "*id" bi&#263;e kao Integer preuzeti.<br />Ova opcija &scaron;titi stranicu od jedne vrste XSS-(Cross Site Scripting-) i SQL-Injekcije-Napada.<br />Iako je preporuka da se ova opcija uklju&#269;, onda bi mogla nekom Modulima i da zasmeta.');
define($constpref.'_FILE_DOTDOT','Pokupi nejasne podatke');
define($constpref.'_FILE_DOTDOTDSC','Elimini&scaron;i ".." one koji gledaju po podacima');

define($constpref.'_BF_COUNT','Protiv grube prisile');
define($constpref.'_BF_COUNTDSC','Postavi broj poku&scaron;aja za ulogovanje gostiju u roku 10 minuta. Kada se taj broj ulogovanja pre&#273;e, onda se IP banuje automatski i unosi u Listu lo&scaron;ih IP adresa.');

define($constpref.'_DOS_SKIPMODS','Moduli koji se za DoS/Crawler ne provjeravaju');
define($constpref.'_DOS_SKIPMODSDSC','Unesi nazive direktorija Modula i rastavi svaki sa ovom oznakom |. Ova opcija poma&#382;e kod Chat modula.');

define($constpref.'_DOS_EXPIRE','','Vremenski limit za visoko preotere&#263;enje Servera (sekunde)');
define($constpref.'_DOS_EXPIREDSC','Ova vrijednost daje vremensko ograni&#269;enje za brza,u &#269;estala ponavljanja u&#269;itavanja stranice (F5 napadi) i za pretra&#382;ne ma&scaron;ine sa visokim u&#269;itavanjima stranice kojima se optere&#263;uje normalan rad Servera.');

define($constpref.'_DOS_F5COUNT','Odredi broj &scaron;tetnih brzih u&#269;itavanja stranice sa F5 napadima koji optere&#263;uju normalan rad Servera');
define($constpref.'_DOS_F5COUNTDSC','preventiva za DoS napade.<br />Ova vrijednost daje ograni&#269;enje koliko uzastopno se smije u&#269;itavati stranica (F5) i prelaz ograni&#269;enja blokira IP za daljnje napade Servera.');
define($constpref.'_DOS_F5ACTION','Preventiva protiv F5 Hakerskih napada');

define($constpref.'_DOS_CRCOUNT','Odredi broj &scaron;tetnih brzih u&#269;itavanja stranice za pretra&#382;ne ma&scaron;ine');
define($constpref.'_DOS_CRCOUNTDSC','Za&scaron;tita Servera od intezivnih upita i u&#269;itavanja stranice preko pretra&#382;nih ma&scaron;ina.<br /Ova vrijednost daje ograni&#269;enje koliko uzastopno se smije u&#269;itavati stranica.');
define($constpref.'_DOS_CRACTION','Preventiva protiv intezivnih upita i u&#269;itavanja stranice preko pretra&#382;nih ma&scaron;ina');

define($constpref.'_DOS_CRSAFE','Ovla&scaron;teni korisni&#269;ki Agenti');
define($constpref.'_DOS_CRSAFEDSC','Regularni Perl-Ekspresija za korisni&#269;ke Agente.<br />Ako se expresija primjenjuje, onda se nikada pretra&#382;ne ma&scaron;ine  kao &scaron;tetne za Server ne ozna&#269;avaju.<br />Npr: (msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','Ni&scaron;ta (samo ulogovanje)');
define($constpref.'_OPT_SAN','Saniranje (&#269;i&scaron;&#263;enje)');
define($constpref.'_OPT_EXIT','Bijeli prozor');
define($constpref.'_OPT_BIP','IP ban');
define($constpref.'_OPT_BIPTIME0','Ban IP (moratorium)');

define($constpref.'_DOSOPT_NONE','Ni&scaron;ta (samo ulogovanje)');
define($constpref.'_DOSOPT_SLEEP','Odmor');
define($constpref.'_DOSOPT_EXIT','Weiﬂer Bildschirm');
define($constpref.'_DOSOPT_BIP','Ban IP(bez limita)');
define($constpref.'_DOSOPT_BIPTIME0','Ban IP (moratorium)');
define($constpref.'_DOSOPT_HTA','DENY by .htaccess(Experimentalno)');

define($constpref.'_BIP_EXCEPT','Grupe kojima se nikada njihove IP ne ura&#269;unavaju kao "lo&scaron;e IP" adrese.');
define($constpref.'_BIP_EXCEPTDSC','&#268;lanovima koji pripadaju ovoj Grupi, nikada ne&#263;e dobiti IP ban.<br />(Preporuka je, Administartore-Grupu da izabere&scaron;.)');

define($constpref.'_DISABLES','Deaktiviraj sigurnosne mogu&#263;nosti Protectora u XOOPS-u');

define($constpref.'_BIGUMBRELLA','aktiviraj anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','Ova funkcija &scaron;titi stranicu od napada preko XSS predvidivosti. Ne &scaron;titi 100%');

define($constpref.'_SPAMURI4U','anti-SPAM: Broj URL-a za normalne korisnike');
define($constpref.'_SPAMURI4UDSC','Ako se ovaj odre&#273;eni broj URL-a pre&#273;e u postovima od &#268;lanova (ne Admina) onda je post kao spam ozna&#269;en. 0 ozna&#269;ava da je ova mogu&#263;nost isklju&#269;ena.');
define($constpref.'_SPAMURI4G','anti-SPAM: Broj URLa za Goste');
define($constpref.'_SPAMURI4GDSC','Ako se ovaj odre&#273;eni broj URL-a pre&#273;e u postovima od gostiju (ne Admina) onda je post kao spam ozna&#269;en. 0 ozna&#269;ava da je ova mogu&#263;nost isklju&#269;ena.');

}

?>
