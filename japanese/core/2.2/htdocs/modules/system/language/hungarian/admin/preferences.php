<?php
// $Id: preferences.php,v 1.16 2003/03/29 15:49:35 w4z004 Exp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change


define("_MD_AM_SITEPREF","%s be�ll�t�sai");
define("_MD_AM_SITENAME","Az oldal neve");
define("_MD_AM_SLOGAN","Az oldal szlogenje");
define("_MD_AM_ADMINML","Az admin e-mail c�me");
define("_MD_AM_LANGUAGE","Alap�rtelmezett nyelv");
define("_MD_AM_STARTPAGE","A kezd�oldalhoz tartoz� modul");
define("_MD_AM_NONE","Nincs");
define("_MD_AM_SERVERTZ","Szerver id�z�n�ja");
define("_MD_AM_DEFAULTTZ","Alap�rtelmezett id�z�na");
define("_MD_AM_DTHEME","Alap�rtelmezett kin�zet");
define("_MD_AM_THEMESET","Kin�zet k�szlet");
define("_MD_AM_ANONNAME","A n�vtelen felhaszn�l�k felhaszn�l�neve");
define("_MD_AM_LOADINGIMG","Mutassa a bet�lt�s... k�pet?");
define("_MD_AM_USEGZIP","Gzip t�m�r�t�s haszn�lata?");
define("_MD_AM_USERCOOKIE","Felhaszn�l�i cookie-k neve.");
define("_MD_AM_USERCOOKIEDSC","Ez a cookie csak a felhaszn�l�nevet tartalmazza, �s a felhaszn�l� g�p�n lesz t�rolva 1 �vre (ha a felhaszn�l� szeretn�). Ha a felhaszn�l�nak megvan ez a cookie, a felhaszn�l�n�v automatikusan beilleszt�sre ker�l a bejelentkez�s dobozba.");
define("_MD_AM_USEMYSESS","Egy�ni session haszn�lata");
define("_MD_AM_USEMYSESSDSC","V�lassz igent a session �rt�kek egy�ni ig�nyekre szab�s�hoz.");
define("_MD_AM_SESSNAME","Session neve");
define("_MD_AM_SESSNAMEDSC","A session neve (Csak akkor �rv�nyes�l, ha az 'Egy�ni session haszn�lata' be van kapcsolva)");
define("_MD_AM_SESSEXPIRE","Session lej�rati id�");
define("_MD_AM_SESSEXPIREDSC","Maxim�lis hossza a session t�tlens�g idej�nek percekben (Csak akkor �rv�nyes�l, ha az 'Egy�ni session haszn�lata' be van kapcsolva. Csak PHP4.2.0 vagy �jabb haszn�latakos m�k�dik.)");
define("_MD_AM_BANNERS","Rekl�mcs�kok bekapcsol�sa?");
define("_MD_AM_MYIP","Az IP c�med");
define("_MD_AM_MYIPDSC","Ez az IP c�m nem lesz belesz�molva a rekl�mcs�kok megjelen�t�s�nek sz�m�ba");
define("_MD_AM_ALWDHTML","HTML tag-ok enged�lyezettek az �sszes hozz�sz�l�sban.");
define("_MD_AM_INVLDMINPASS","�rv�nytelen �rt�k a jelsz� minim�lis hossz�s�g�nak.");
define("_MD_AM_INVLDUCOOK","�rv�nytelen �rt�k az egy�ni cookie n�vnek.");
define("_MD_AM_INVLDSCOOK","�rv�nytelen �rt�k a sessioncookie n�vnek.");
define("_MD_AM_INVLDSEXP","�rv�nytelen �rt�k a session l�j�rati id�nek");
define("_MD_AM_ADMNOTSET","Az admin e-mail c�me nincs be�ll�tva.");
define("_MD_AM_YES","Igen");
define("_MD_AM_NO","Nem");
define("_MD_AM_DONTCHNG","Nincs v�ltoztat�s!");
define("_MD_AM_REMEMBER","Eml�kezz hogy ennek a f�ljnak (chmod 666) jogosults�ga legyen, hogy a rendszer megfelel�en tudjon �rni bele.");
define("_MD_AM_IFUCANT","Ha nem tudod �t�ll�tani a jogosults�gokat, szerkesztheted a f�jlban tal�lhat� be�ll�t�sokat saj�t kez�leg is.");


define("_MD_AM_COMMODE","Alap�rtelmezett hozz�sz�l�s megjelen�t�si m�d");
define("_MD_AM_COMORDER","Alap�rtelmezett hozz�sz�l�s megjelen�t�si sorrend");
define("_MD_AM_ALLOWHTML","HTML tag-ok enged�lyez�se a hozz�sz�l�sokban?");
define("_MD_AM_DEBUGMODE","Hibakeres� m�d");
define("_MD_AM_DEBUGMODEDSC","K�l�nf�le hibakeres� be�ll�t�sok. A fut� weboldalakn�l ezt javasolt kikapcsolni.");

define("_MD_AM_AVATARCONF","Egy�ni avatar be�ll�t�sok");
define("_MD_AM_CHNGUTHEME","Az �sszes felhaszn�l� kin�zet�nek cser�je");
define("_MD_AM_NOTIFYTO","V�laszd ki a csoportot, aminek a tagjai figyelmeztet� levelet kapnak az �j regisztr�ci�kr�l");
define("_MD_AM_ALLOWTHEME","Felhaszn�l�k v�lthatnak kin�zetet?");
define("_MD_AM_ALLOWIMAGE","Felhaszn�l�k jelen�thetnek meg k�peket a hozz�sz�l�sokban?");

define('_MD_AM_USESSL', 'SSL haszn�lata bejelentkez�shez?');
define('_MD_AM_SSLPOST', 'SSL Post v�ltoz� neve');
define('_MD_AM_SSLPOSTDSC', 'A v�ltoz� neve, amit a session �rt�kek �tvitel�re haszn�lunk POST met�dussal. Ha nem vagy benne biztos, �ll�ts be b�rmilyen nevet, amit neh�z m�soknak kital�lni.');
define('_MD_AM_DEBUGMODE0','Ki');
define('_MD_AM_DEBUGMODE1','PHP hibakeres�');
define('_MD_AM_DEBUGMODE2','MySQL/Blokk hibakeres�');
define('_MD_AM_DEBUGMODE3','Sablon hibakeres�');

define('_MD_AM_GENERAL', '�ltal�nos be�ll�t�sok');

define('_MD_AM_IPBAN', 'IP Tilt�s');

define('_MD_AM_DOBADIPS', 'IP tilt�sok bekapcsol�sa?');
define('_MD_AM_DOBADIPSDSC', 'A megadott c�mekr�l �rkez� l�togat�k nem f�rhetnek hozz� az oldalhoz');
define('_MD_AM_BADIPS', 'Add meg az IP c�meket, amelyeket ki szeretn�l tiltani az oldalr�l.<br />V�laszd el �ket <b>|</b> jelekkel, regex bekapcsolva.');
define('_MD_AM_BADIPSDSC', '^aaa.bbb.ccc kitiltja az oldalr�l az aaa.bbb.ccc -vel kezd�d� IP c�meket<br />aaa.bbb.ccc$ kitiltja az aaa.bbb.ccc -vel v�gz�d� IP c�meket<br />aaa.bbb.ccc kitiltja az oldalr�l az aaa.bbb.ccc -t tartalmaz� IP-ket');
define('_MD_AM_PREFMAIN', 'Be�ll�t�sok f�oldal');
define('_MD_AM_METAKEY', 'Meta kulcsszaval');
define('_MD_AM_METAKEYDSC', 'A meta kulcsszavak tag egy kulcsszavakb�l �ll� sorozat, melyek az oldalad tartalm�ra jellemz�ek. �rdd be a kulcsszavakat vessz�vel vagy sz�k�zzel elv�lasztva egym�st�l. (Pl. XOOPS, PHP, mySQL, port�l rendszer)');
define('_MD_AM_METARATING', 'Meta Oszt�lyoz�s');
define('_MD_AM_METARATINGDSC', 'Az oszt�lyoz�s meta tag meghat�rozza az oldalad korhat�r�t �s a tartalom oszt�lyoz�s�t');
define('_MD_AM_METAOGEN', '�ltal�nos');
define('_MD_AM_METAO14YRS', '14 �ves');
define('_MD_AM_METAOREST', 'Korl�tozott');
define('_MD_AM_METAOMAT', 'Feln�tt');
define('_MD_AM_METAROBOTS', 'Meta Robotok');
define('_MD_AM_METAROBOTSDSC', 'A robotok Tag megadja a keres� motoroknak a tartalom indexet');
define('_MD_AM_INDEXFOLLOW', 'Index, K�vet');
define('_MD_AM_NOINDEXFOLLOW', 'Nem Index, K�vet');
define('_MD_AM_INDEXNOFOLLOW', 'Index, Nem K�vet');
define('_MD_AM_NOINDEXNOFOLLOW', 'Nem Index, Nem K�vet');
define('_MD_AM_METAAUTHOR', 'Meta Szerz�');
define('_MD_AM_METAAUTHORDSC', 'A szerz� meta tag meghat�rozza a dokumentum szerz�j�nek a nev�t. T�mogatott form�tumok tartalmazz�k a nevet, a webmester e-mail c�m�t, c�g nev�t vagy URL-j�t.');
define('_MD_AM_METACOPYR', 'Meta Szerz�i jog');
define('_MD_AM_METACOPYRDSC', 'A szerz�i jog (Copyright) meta tag meghat�rozza a weboldaladra vonatkoz� szerz�i jogokat.');
define('_MD_AM_METADESC', 'Meta Le�r�s');
define('_MD_AM_METADESCDSC', 'A le�r�s meta tag egy �ltal�nos le�r�sa a weboldalad tartalm�nak');
define('_MD_AM_METAFOOTER', 'Meta Tag-ok �s L�bl�c');
define('_MD_AM_FOOTER', 'L�bl�c');
define('_MD_AM_FOOTERDSC', 'Figyelj arra, hogy teljes URL c�meket adj meg, a http:// -el kezdve, k�l�nben a linkek nem fognak helyesen m�k�dni a modul oldalakon.');
define('_MD_AM_CENSOR', 'Cenz�ra be�ll�t�sok');
define('_MD_AM_DOCENSOR', 'Nem k�v�nt szavak cenz�r�z�s�nak bekapcsol�sa?');
define('_MD_AM_DOCENSORDSC', 'A szavak cenz�r�zva lesznek, ha ezt az opci�t bekapcsolod. Az oldal sebess�g�nek n�vel�se �rdek�ben ezt az opci�t javasolt kikapcsolni.');
define('_MD_AM_CENSORWRD', 'Cenz�r�zand� szavak');
define('_MD_AM_CENSORWRDDSC', 'Add meg a hozz�sz�l�sokban cenz�r�zand� szavakat.<br />V�laszd el �ket <b>|</b> jelekkel, kis �s nagybet� nem sz�m�t.');
define('_MD_AM_CENSORRPLC', 'A cs�nya szavak ki lesznek cser�lve ezzel:');
define('_MD_AM_CENSORRPLCDSC', 'A cenz�r�zott szavak ki lesznek cser�lve az al�bbi sz�vegdobozban megadott karakterekre');

define('_MD_AM_SEARCH', 'Keres� be�ll�t�sok');
define('_MD_AM_DOSEARCH', 'Glob�lis keres�sek bekapcsol�sa?');
define('_MD_AM_DOSEARCHDSC', 'A hozz�sz�l�sok, elemek keres�s�nek enged�lyez�se az oldaladon.');
define('_MD_AM_MINSEARCH', 'Minim�lis kulcssz� hossz�s�g');
define('_MD_AM_MINSEARCHDSC', 'Add meg a keres�shez sz�ks�ges kulcssz� minim�lis hossz�t');
define('_MD_AM_MODCONFIG', 'Modul Be�ll�t�sok');
define('_MD_AM_DSPDSCLMR', 'Jogi nyilatkozat megjelen�t�se?');
define('_MD_AM_DSPDSCLMRDSC', 'V�laszd az Igen-t, a jogi nyilatkozat regisztr�ci�s oldalon t�rt�n� megjelen�t�s�hez');
define('_MD_AM_REGDSCLMR', 'Regisztr�ci�s jogi nyilatkozat');
define('_MD_AM_REGDSCLMRDSC', 'Add meg a regisztr�ci�s jogi nyilatkozat sz�veg�t');
define('_MD_AM_ALLOWREG', 'Felhaszn�l�i regisztr�ci�k enged�lyez�se?');
define('_MD_AM_ALLOWREGDSC', 'V�laszd az igent a regisztr�ci�k enged�lyez�s�hez');
define('_MD_AM_THEMEFILE', 'A modul sablonok .html f�jljainak friss�t�se a themes/kin�zeted_neve/templates k�nyvt�rb�l?');
define('_MD_AM_THEMEFILEDSC', 'Ha ez az opci� be van kapcsolva a modul sablonok .html f�jljai automatikusan friss�tve lesznek ha �j f�jlok vannak a themes/kin�zeted_neve/templates k�nyvt�rban a jelenlegi kin�zethez. Javasolt ezt kikapcsolni, ha az oldal megny�lik a nyilv�noss�g el�tt.');
define('_MD_AM_CLOSESITE', 'Kikapcsolod az oldaladat?');
define('_MD_AM_CLOSESITEDSC', 'V�laszd az igent az oldalad kikapcsol�s�hoz, �gy csak a megadott csoportok tagjai f�rhetnek hozz� az oldaladhoz. ');
define('_MD_AM_CLOSESITEOK', 'V�laszd ki a csoportokat, melyek tagjai hozz�f�rhetnek az oldalhoz amikor az ki van kapcsolva.');
define('_MD_AM_CLOSESITEOKDSC', 'Az alap�rtelmezett webmester csoport tagjai mind�g rendelkeznek el�r�ssel.');
define('_MD_AM_CLOSESITETXT', 'Az oldal kikapcsol�s�nak oka');
define('_MD_AM_CLOSESITETXTDSC', 'A sz�veg, ami a lez�rt oldalon ki lesz �rva.');
define('_MD_AM_SITECACHE', 'Oldal szint� Cache');
define('_MD_AM_SITECACHEDSC', 'Oldal szint� Cache-ek id�tartama a jobb min�s�g �rdek�ben. A oldal szint� cache be�ll�t�s fel�l�rja a modul szint�, a blokk szint�, valamint a modul elem szint� cache be�ll�t�sokat, ha vannak.');
define('_MD_AM_MODCACHE', 'Modul szint� Cache');
define('_MD_AM_MODCACHEDSC', 'A modulok tartalm�ra vonatkoz� modul szint� Cache-ek id�tartama a jobb min�s�g �rdek�ben. A modul szint� cache be�ll�t�sok fel�l�rj�k a modul elem szint� cache be�ll�t�sokat, ha vannak.');
define('_MD_AM_NOMODULE', 'Nincs cache-elhet� modul.');
define('_MD_AM_DTPLSET', 'Alp�rtelmezett sablon k�szlet');
define('_MD_AM_SSLLINK', 'Az SSL bejelentkez�s oldal URL-je');

// added for mailer
define("_MD_AM_MAILER","Lev�l be�ll�t�sok");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","K�ld� c�me");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","K�ld� neve");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","K�ld� felhaszn�l�");
define("_MD_AM_MAILFROMUIDDESC","Ha a rendszer priv�t �zenetet k�ld, melyik felhaszn�l� legyen a felad�ja?");
define("_MD_AM_MAILERMETHOD","Lev�l k�zbes�t�s m�dja");
define("_MD_AM_MAILERMETHODDESC","A lev�l k�zbes�t�s�re haszn�lt m�dszer. Az alap�rtelmezett a \"PHP mail()\", csak akkor v�lassz m�st, ha ez nem m�k�dik.");
define("_MD_AM_SMTPHOST","SMTP szerverek");
define("_MD_AM_SMTPHOSTDESC","Az SMTP szerverek list�ja, ahov� megpr�b�lunk csatlakozni. Pontosvessz�vel (;) v�laszd el �ket.");
define("_MD_AM_SMTPUSER","SMTPAuth felhaszn�l� n�v");
define("_MD_AM_SMTPUSERDESC","Az SMTP szerverhez tartoz� felhaszn�l�n�v, ahov� az SMTPAuth -al kapcsol�dunk.");
define("_MD_AM_SMTPPASS","SMTPAuth jelszava");
define("_MD_AM_SMTPPASSDESC","Az SMTP szerverhez tartoz� jelsz�, ahov� az SMTPAuth -al kapcsol�dunk.");
define("_MD_AM_SENDMAILPATH","A sendmail el�r�si �tja");
define("_MD_AM_SENDMAILPATHDESC","A sendmail program (vagy valamely azt helyettes�t� program) el�r�si �tja a webszerveren.");
define("_MD_AM_THEMEOK","V�laszthat� kin�zetek");
define("_MD_AM_THEMEOKDSC","V�laszd ki a felhaszn�l�k �ltal v�laszthat� kin�zeteket");

define("_MD_AM_ADMINTHEME","Admin fel�let kin�zete");
define("_MD_AM_FRONTSIDE_THEME","Az oldal t�m�j�nak haszn�lata");
define("_MD_AM_MODULEPREF","Modul be�ll�t�sok");
define("_MD_AM_AUTHENTICATION","Azonos�t�si be�ll�t�sok");
define("_MD_AM_AUTHMETHOD","Azonos�t�si m�d");
define("_MD_AM_AUTHMETHODDESC","A felhaszn�l�k bejelentkez�s�hez sz�ks�ges azonos�t�si m�d. CSAK akkor v�laszd az LDAP-ot, ha biztosan tudod, hogy mit csin�lsz!!!");
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