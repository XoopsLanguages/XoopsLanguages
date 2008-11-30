<?php
// $Id: preferences.php,v 1.16 2003/03/29 15:49:35 w4z004 Exp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change


define("_MD_AM_SITEPREF","%s beállításai");
define("_MD_AM_SITENAME","Az oldal neve");
define("_MD_AM_SLOGAN","Az oldal szlogenje");
define("_MD_AM_ADMINML","Az admin e-mail címe");
define("_MD_AM_LANGUAGE","Alapértelmezett nyelv");
define("_MD_AM_STARTPAGE","A kezdõoldalhoz tartozó modul");
define("_MD_AM_NONE","Nincs");
define("_MD_AM_SERVERTZ","Szerver idõzónája");
define("_MD_AM_DEFAULTTZ","Alapértelmezett idõzóna");
define("_MD_AM_DTHEME","Alapértelmezett kinézet");
define("_MD_AM_THEMESET","Kinézet készlet");
define("_MD_AM_ANONNAME","A névtelen felhasználók felhasználóneve");
define("_MD_AM_LOADINGIMG","Mutassa a betöltés... képet?");
define("_MD_AM_USEGZIP","Gzip tömörítés használata?");
define("_MD_AM_USERCOOKIE","Felhasználói cookie-k neve.");
define("_MD_AM_USERCOOKIEDSC","Ez a cookie csak a felhasználónevet tartalmazza, és a felhasználó gépén lesz tárolva 1 évre (ha a felhasználó szeretné). Ha a felhasználónak megvan ez a cookie, a felhasználónév automatikusan beillesztésre kerül a bejelentkezés dobozba.");
define("_MD_AM_USEMYSESS","Egyéni session használata");
define("_MD_AM_USEMYSESSDSC","Válassz igent a session értékek egyéni igényekre szabásához.");
define("_MD_AM_SESSNAME","Session neve");
define("_MD_AM_SESSNAMEDSC","A session neve (Csak akkor érvényesül, ha az 'Egyéni session használata' be van kapcsolva)");
define("_MD_AM_SESSEXPIRE","Session lejárati idõ");
define("_MD_AM_SESSEXPIREDSC","Maximális hossza a session tétlenség idejének percekben (Csak akkor érvényesül, ha az 'Egyéni session használata' be van kapcsolva. Csak PHP4.2.0 vagy újabb használatakos mûködik.)");
define("_MD_AM_BANNERS","Reklámcsíkok bekapcsolása?");
define("_MD_AM_MYIP","Az IP címed");
define("_MD_AM_MYIPDSC","Ez az IP cím nem lesz beleszámolva a reklámcsíkok megjelenítésének számába");
define("_MD_AM_ALWDHTML","HTML tag-ok engedélyezettek az összes hozzászólásban.");
define("_MD_AM_INVLDMINPASS","Érvénytelen érték a jelszó minimális hosszúságának.");
define("_MD_AM_INVLDUCOOK","Érvénytelen érték az egyéni cookie névnek.");
define("_MD_AM_INVLDSCOOK","Érvénytelen érték a sessioncookie névnek.");
define("_MD_AM_INVLDSEXP","Érvénytelen érték a session lájárati idõnek");
define("_MD_AM_ADMNOTSET","Az admin e-mail címe nincs beállítva.");
define("_MD_AM_YES","Igen");
define("_MD_AM_NO","Nem");
define("_MD_AM_DONTCHNG","Nincs változtatás!");
define("_MD_AM_REMEMBER","Emlékezz hogy ennek a fáljnak (chmod 666) jogosultsága legyen, hogy a rendszer megfelelõen tudjon írni bele.");
define("_MD_AM_IFUCANT","Ha nem tudod átállítani a jogosultságokat, szerkesztheted a fájlban található beállításokat saját kezüleg is.");


define("_MD_AM_COMMODE","Alapértelmezett hozzászólás megjelenítési mód");
define("_MD_AM_COMORDER","Alapértelmezett hozzászólás megjelenítési sorrend");
define("_MD_AM_ALLOWHTML","HTML tag-ok engedélyezése a hozzászólásokban?");
define("_MD_AM_DEBUGMODE","Hibakeresõ mód");
define("_MD_AM_DEBUGMODEDSC","Különféle hibakeresõ beállítások. A futó weboldalaknál ezt javasolt kikapcsolni.");

define("_MD_AM_AVATARCONF","Egyéni avatar beállítások");
define("_MD_AM_CHNGUTHEME","Az összes felhasználó kinézetének cseréje");
define("_MD_AM_NOTIFYTO","Válaszd ki a csoportot, aminek a tagjai figyelmeztetõ levelet kapnak az új regisztrációkról");
define("_MD_AM_ALLOWTHEME","Felhasználók válthatnak kinézetet?");
define("_MD_AM_ALLOWIMAGE","Felhasználók jeleníthetnek meg képeket a hozzászólásokban?");

define('_MD_AM_USESSL', 'SSL használata bejelentkezéshez?');
define('_MD_AM_SSLPOST', 'SSL Post változó neve');
define('_MD_AM_SSLPOSTDSC', 'A változó neve, amit a session értékek átvitelére használunk POST metódussal. Ha nem vagy benne biztos, állíts be bármilyen nevet, amit nehéz másoknak kitalálni.');
define('_MD_AM_DEBUGMODE0','Ki');
define('_MD_AM_DEBUGMODE1','PHP hibakeresõ');
define('_MD_AM_DEBUGMODE2','MySQL/Blokk hibakeresõ');
define('_MD_AM_DEBUGMODE3','Sablon hibakeresõ');

define('_MD_AM_GENERAL', 'Általános beállítások');

define('_MD_AM_IPBAN', 'IP Tiltás');

define('_MD_AM_DOBADIPS', 'IP tiltások bekapcsolása?');
define('_MD_AM_DOBADIPSDSC', 'A megadott címekrõl érkezõ látogatók nem férhetnek hozzá az oldalhoz');
define('_MD_AM_BADIPS', 'Add meg az IP címeket, amelyeket ki szeretnél tiltani az oldalról.<br />Válaszd el õket <b>|</b> jelekkel, regex bekapcsolva.');
define('_MD_AM_BADIPSDSC', '^aaa.bbb.ccc kitiltja az oldalról az aaa.bbb.ccc -vel kezdõdõ IP címeket<br />aaa.bbb.ccc$ kitiltja az aaa.bbb.ccc -vel végzõdõ IP címeket<br />aaa.bbb.ccc kitiltja az oldalról az aaa.bbb.ccc -t tartalmazó IP-ket');
define('_MD_AM_PREFMAIN', 'Beállítások fõoldal');
define('_MD_AM_METAKEY', 'Meta kulcsszaval');
define('_MD_AM_METAKEYDSC', 'A meta kulcsszavak tag egy kulcsszavakból álló sorozat, melyek az oldalad tartalmára jellemzõek. Írdd be a kulcsszavakat vesszõvel vagy szóközzel elválasztva egymástól. (Pl. XOOPS, PHP, mySQL, portál rendszer)');
define('_MD_AM_METARATING', 'Meta Osztályozás');
define('_MD_AM_METARATINGDSC', 'Az osztályozás meta tag meghatározza az oldalad korhatárát és a tartalom osztályozását');
define('_MD_AM_METAOGEN', 'Általános');
define('_MD_AM_METAO14YRS', '14 éves');
define('_MD_AM_METAOREST', 'Korlátozott');
define('_MD_AM_METAOMAT', 'Felnõtt');
define('_MD_AM_METAROBOTS', 'Meta Robotok');
define('_MD_AM_METAROBOTSDSC', 'A robotok Tag megadja a keresõ motoroknak a tartalom indexet');
define('_MD_AM_INDEXFOLLOW', 'Index, Követ');
define('_MD_AM_NOINDEXFOLLOW', 'Nem Index, Követ');
define('_MD_AM_INDEXNOFOLLOW', 'Index, Nem Követ');
define('_MD_AM_NOINDEXNOFOLLOW', 'Nem Index, Nem Követ');
define('_MD_AM_METAAUTHOR', 'Meta Szerzõ');
define('_MD_AM_METAAUTHORDSC', 'A szerzõ meta tag meghatározza a dokumentum szerzõjének a nevét. Támogatott formátumok tartalmazzák a nevet, a webmester e-mail címét, cég nevét vagy URL-jét.');
define('_MD_AM_METACOPYR', 'Meta Szerzõi jog');
define('_MD_AM_METACOPYRDSC', 'A szerzõi jog (Copyright) meta tag meghatározza a weboldaladra vonatkozó szerzõi jogokat.');
define('_MD_AM_METADESC', 'Meta Leírás');
define('_MD_AM_METADESCDSC', 'A leírás meta tag egy általános leírása a weboldalad tartalmának');
define('_MD_AM_METAFOOTER', 'Meta Tag-ok és Lábléc');
define('_MD_AM_FOOTER', 'Lábléc');
define('_MD_AM_FOOTERDSC', 'Figyelj arra, hogy teljes URL címeket adj meg, a http:// -el kezdve, különben a linkek nem fognak helyesen mûködni a modul oldalakon.');
define('_MD_AM_CENSOR', 'Cenzúra beállítások');
define('_MD_AM_DOCENSOR', 'Nem kívánt szavak cenzúrázásának bekapcsolása?');
define('_MD_AM_DOCENSORDSC', 'A szavak cenzúrázva lesznek, ha ezt az opciót bekapcsolod. Az oldal sebességének növelése érdekében ezt az opciót javasolt kikapcsolni.');
define('_MD_AM_CENSORWRD', 'Cenzúrázandó szavak');
define('_MD_AM_CENSORWRDDSC', 'Add meg a hozzászólásokban cenzúrázandó szavakat.<br />Válaszd el õket <b>|</b> jelekkel, kis és nagybetû nem számít.');
define('_MD_AM_CENSORRPLC', 'A csúnya szavak ki lesznek cserélve ezzel:');
define('_MD_AM_CENSORRPLCDSC', 'A cenzúrázott szavak ki lesznek cserélve az alábbi szövegdobozban megadott karakterekre');

define('_MD_AM_SEARCH', 'Keresõ beállítások');
define('_MD_AM_DOSEARCH', 'Globális keresések bekapcsolása?');
define('_MD_AM_DOSEARCHDSC', 'A hozzászólások, elemek keresésének engedélyezése az oldaladon.');
define('_MD_AM_MINSEARCH', 'Minimális kulcsszó hosszúság');
define('_MD_AM_MINSEARCHDSC', 'Add meg a kereséshez szükséges kulcsszó minimális hosszát');
define('_MD_AM_MODCONFIG', 'Modul Beállítások');
define('_MD_AM_DSPDSCLMR', 'Jogi nyilatkozat megjelenítése?');
define('_MD_AM_DSPDSCLMRDSC', 'Válaszd az Igen-t, a jogi nyilatkozat regisztrációs oldalon történõ megjelenítéséhez');
define('_MD_AM_REGDSCLMR', 'Regisztrációs jogi nyilatkozat');
define('_MD_AM_REGDSCLMRDSC', 'Add meg a regisztrációs jogi nyilatkozat szövegét');
define('_MD_AM_ALLOWREG', 'Felhasználói regisztrációk engedélyezése?');
define('_MD_AM_ALLOWREGDSC', 'Válaszd az igent a regisztrációk engedélyezéséhez');
define('_MD_AM_THEMEFILE', 'A modul sablonok .html fájljainak frissítése a themes/kinézeted_neve/templates könyvtárból?');
define('_MD_AM_THEMEFILEDSC', 'Ha ez az opció be van kapcsolva a modul sablonok .html fájljai automatikusan frissítve lesznek ha új fájlok vannak a themes/kinézeted_neve/templates könyvtárban a jelenlegi kinézethez. Javasolt ezt kikapcsolni, ha az oldal megnyílik a nyilvánosság elõtt.');
define('_MD_AM_CLOSESITE', 'Kikapcsolod az oldaladat?');
define('_MD_AM_CLOSESITEDSC', 'Válaszd az igent az oldalad kikapcsolásához, így csak a megadott csoportok tagjai férhetnek hozzá az oldaladhoz. ');
define('_MD_AM_CLOSESITEOK', 'Válaszd ki a csoportokat, melyek tagjai hozzáférhetnek az oldalhoz amikor az ki van kapcsolva.');
define('_MD_AM_CLOSESITEOKDSC', 'Az alapértelmezett webmester csoport tagjai mindíg rendelkeznek eléréssel.');
define('_MD_AM_CLOSESITETXT', 'Az oldal kikapcsolásának oka');
define('_MD_AM_CLOSESITETXTDSC', 'A szöveg, ami a lezárt oldalon ki lesz írva.');
define('_MD_AM_SITECACHE', 'Oldal szintü Cache');
define('_MD_AM_SITECACHEDSC', 'Oldal szintû Cache-ek idõtartama a jobb minõség érdekében. A oldal szintû cache beállítás felülírja a modul szintû, a blokk szintû, valamint a modul elem szintû cache beállításokat, ha vannak.');
define('_MD_AM_MODCACHE', 'Modul szintû Cache');
define('_MD_AM_MODCACHEDSC', 'A modulok tartalmára vonatkozó modul szintû Cache-ek idõtartama a jobb minõség érdekében. A modul szintû cache beállítások felülírják a modul elem szintû cache beállításokat, ha vannak.');
define('_MD_AM_NOMODULE', 'Nincs cache-elhetõ modul.');
define('_MD_AM_DTPLSET', 'Alpértelmezett sablon készlet');
define('_MD_AM_SSLLINK', 'Az SSL bejelentkezés oldal URL-je');

// added for mailer
define("_MD_AM_MAILER","Levél beállítások");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","Küldõ címe");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","Küldõ neve");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","Küldõ felhasználó");
define("_MD_AM_MAILFROMUIDDESC","Ha a rendszer privát üzenetet küld, melyik felhasználó legyen a feladója?");
define("_MD_AM_MAILERMETHOD","Levél kézbesítés módja");
define("_MD_AM_MAILERMETHODDESC","A levél kézbesítésére használt módszer. Az alapértelmezett a \"PHP mail()\", csak akkor válassz mást, ha ez nem mûködik.");
define("_MD_AM_SMTPHOST","SMTP szerverek");
define("_MD_AM_SMTPHOSTDESC","Az SMTP szerverek listája, ahová megpróbálunk csatlakozni. Pontosvesszõvel (;) válaszd el õket.");
define("_MD_AM_SMTPUSER","SMTPAuth felhasználó név");
define("_MD_AM_SMTPUSERDESC","Az SMTP szerverhez tartozó felhasználónév, ahová az SMTPAuth -al kapcsolódunk.");
define("_MD_AM_SMTPPASS","SMTPAuth jelszava");
define("_MD_AM_SMTPPASSDESC","Az SMTP szerverhez tartozó jelszó, ahová az SMTPAuth -al kapcsolódunk.");
define("_MD_AM_SENDMAILPATH","A sendmail elérési útja");
define("_MD_AM_SENDMAILPATHDESC","A sendmail program (vagy valamely azt helyettesítõ program) elérési útja a webszerveren.");
define("_MD_AM_THEMEOK","Választható kinézetek");
define("_MD_AM_THEMEOKDSC","Válaszd ki a felhasználók által választható kinézeteket");

define("_MD_AM_ADMINTHEME","Admin felület kinézete");
define("_MD_AM_FRONTSIDE_THEME","Az oldal témájának használata");
define("_MD_AM_MODULEPREF","Modul beállítások");
define("_MD_AM_AUTHENTICATION","Azonosítási beállítások");
define("_MD_AM_AUTHMETHOD","Azonosítási mód");
define("_MD_AM_AUTHMETHODDESC","A felhasználók bejelentkezéséhez szükséges azonosítási mód. CSAK akkor válaszd az LDAP-ot, ha biztosan tudod, hogy mit csinálsz!!!");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Mail Field Name");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","The name of the E-Mail field in your LDAP directory tree.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Common Name Field Name");
define("_MD_AM_LDAP_NAME_ATTR_DESC","The name of the Comman Name field in your LDAP directory.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Surname Fiend Name");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","The name of the Surname field in your LDAP directory.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Given Name Field Name");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","The name of the Given Name field in your LDAP directory.");
define("_MD_AM_LDAP_UID_ATTR","LDAP - UID Field Name");
define("_MD_AM_LDAP_UID_ATTR_DESC","The name of the User ID field in your LDAP directory.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "The base DN (Distinguished Name) of your LDAP directory tree.");
define("_MD_AM_LDAP_PORT","LDAP - Port Number");
define("_MD_AM_LDAP_PORT_DESC","The port number needed to access your LDAP directory server.");
define("_MD_AM_LDAP_SERVER","LDAP - Server Name");
define("_MD_AM_LDAP_SERVER_DESC","The name of your LDAP directory server.");
define("_MD_AM_LDAP_UID_ASDN", "UID as DN");
define("_MD_AM_LDAP_UID_ASDN_DESC", "The uid attribute is used as DN");
define("_MD_AM_LDAP_MANAGER_DN", "DN of the LDAP manager");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "The DN of the user allow to make search (eg manager)");
define("_MD_AM_LDAP_MANAGER_PASS", "Password of the LDAP manager");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "The password of the user allow to make search");
define("_MD_AM_LDAP_VERSION", "LDAP Version protocol");
define("_MD_AM_LDAP_VERSION_DESC", "The LDAP Version protocol : 2 or 3");
?>