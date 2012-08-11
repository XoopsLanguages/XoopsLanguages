<?php
// Nom du module
define('_MI_MP_NAME','Privatne poruke');

// Description du module
define('_MI_MP_DESC','Menadzer za privatne poruke');

// Nom des menus
define('_MI_MP_ADMENU0','Index');
define('_MI_MP_ADMENU1','Sortiranje');
define("_MI_MP_ADMENU2","Napi&scaron;i poruku(e)");
define("_MI_MP_ADMENU3","Po&#269;isti poruke");
define("_MI_MP_ADMENU4","Obavje&scaron;tenja");
define("_MI_MP_ADMENU5","Statut");
define("_MI_MP_ADMENU6","Folderi");
define("_MI_MP_ADMENU7","Winksi");
define("_MI_MP_ADMENU8","Odobrenja");

//menu utilisateur
define("_MPMANAGER_MI_MES","Poruka");
define("_MPMANAGER_MI_CONT","Kontakt");
define("_MPMANAGER_MI_FILE","Podatak");
define("_MPMANAGER_MI_OPTION","Opcije");

//block
define("_BL_MP_NEW","Nova poruka");
define("_BL_MP_STATS","Moji Kontakti");

//form
define("_PM_FALALERT","Memorisana upozorenja(u bytima)");
define("_PM_FALALERTCOM","Dobija&scaron; obavijest ako limit u bazi podataka bude pre&#273;en.");
define("_PM_ALERTBOITE","Upozorenje-Sandu&#269;e za poruke je pun");
define("_PM_COMALERTBOITE","&#268;lan dobija obavijest u css isko&#269;nom prozoru kada mu sandu&#269;e bude puno.");

define("_PM_ALERTCOOK","U&#269;estalost upozorenja");
define("_PM_COMALERTCOOK","Odredi za koliko minuta upozorenje treba opet &#269;lanu prikazati / 0 je da se upozori kada mu(joj) nova privatna poruka od nekoga stigne.");

define("_PM_FALOPT","Optimizirati poruke u bazi podataka");
define("_PM_USEALERT","Odredi Max. broj poruka za svakog &#269;lana");
define("_PM_FILEMAX","Odredi Max. broj foldera za svakog &#269;lana");
define("_PM_NEWMSG","Upozorenje za nove poruke");
define("_PM_POPUP","Css Popup");
define("_PM_HPOPUP","Centar Popup / Desno na rubu");
define("_PM_LPOPUP","Centar Popup / Desno na rubu");
define("_PM_TEXTE","Tekst");
define("_PM_IMAGE","Slika");
define("_PM_SON","Zvuk");
define("_PM_ANIM","Animacija");
define("_PM_FALOPTCOM","Optimizirati poruke u bazi podataka nakon svakog brisanja poruka");
define("_PM_CSSPBACK","CSS Prozor / Pozadinska farba");
define("_PM_CSSPTEXT","CSS Prozor / Tekst farba");
define("_PM_CSSBTEXT","Tekst nove poruke / Tekst farba");
define("_PM_CSSBBACK","Tekst nove poruke / Pozadinska farba");
define("_PM_CLINOEIL","Aktivirati Winks");
define("_PM_SENDUSER","Max. broj &#269;lanova kojima se privatna poruka odjedanput mo&#382;e poslati");
define("_PM_NOTIF","Aktivirati mail obavje&scaron;tenja");
define("_PM_DESC_NOTIF","Svaki &#269;lan pojedinaèno ovu opciju mo&#382;e isklju&#269;iti");
define("_MP_WYSIWYG","Dozvoli kori&scaron;tenje Wysiwyg Editor");
define("_MP_WYSIWYG_DESC","&#268;lanovima je onda omogu&#263;en izbor editora za upotrebu.");
define("_PM_CORP_NOTIF","Mail body");
define("_PM_CORP_DESC","
<b>Korisni tagovi</b> :<br /><span class='small'>
{X_UNAME} prikazuje se Nik ime &#269;lana<br />
{X_ADMINMAIL} prikazuje se od  webmaster-a mail<br />
{X_SITENAME} prikazuje se naziv web stranice<br />
{X_SITEURL} prikazuje se link web stranice<br />
{X_LINK} prikazuje se link za ulaznu po&scaron;tu &#269;lana</span>");
define("_MP_AUTO","Autoporuke auto");
define("_MP_AUTO_DESC","Automatske poruke novim &#269;lanovima");
define("_MP_AUTO_SUBJECT","Naziv autoporuke");
define("_MP_AUTO_TEXT","Tekst autoporuke");

define("_MP_NOTIF_MAIL","Vozdra {X_UNAME},

Ima&scaron; novu privatnu poruku u svojoj ulaznoj po&scaron;ti na  {X_SITENAME} 

Direktan link je ispod :

{X_LINK}

-----------
({X_SITEURL}) 
Pozz Webmaster
{X_ADMINMAIL}

------------
");

define("_MP_AUTO_MAILS","Dobro nam do&scaron;ao(la)");
define("_MP_AUTO_MAIL","Vozdra {X_UNAME},

Drago mi je da si sa nama na {X_SITENAME} , nadam se da &#263;e&scaron; kod nas ste&#263;i puno svojih prijatelja i da &#263;e ti biti ugodno. Preporu&#269;ujem ti da razgleda&scaron; stranicu na miru i da se upozna&scaron; sa svojim Network-om gdje si sam(a) sebi Administrator. Pitati za pomo&#263; mo&#382;e&scaron; uvijek putem privatne poruke, na LiveChat-u ili Forumu.<br/>Srda&#269;an pozz<br/>

-----------
({X_SITEURL}) 
 Webmaster
{X_ADMINMAIL}

------------
");

define("_PM_AUTO_PRUNE","Poruka za sistemsko &#269;i&scaron;&#263;enje poruka");
define("_PM_PRUNE_DESC","
<b>Limit za privatne poruke je dostignut</b> :<br /><span class='small'>
{X_COUNT} Ovde je broj izbrisanih privatnih poruka</span>");
define("_MP_NOTIF_PRUNE","Vozdra ,

Sistem je automatski izbrisao privatne poruke zbog limita, 
Broj {X_COUNT} izbrisanih poruka u tvome sandu&#269;etu.
Razlog brisanja je u&scaron;teda prostora kojeg imamo na serveru.");
// Nom des blocks
define('_MI_MP_BNAME','Privatne poruke');

//fichier joint
define("_MP_UPMAX","Max. broj podataka koji se mogu poslati u privatnoj poruci:");
define("_MP_MIMETYPE","Dozvoljeni podaci su:");
define("_MP_MIMEMAX","Max. veli&#269;ina podatka u bitima za upload");

//profile
define("_PM_MI_LINK_TITLE","Privatne poruke link");
define("_PM_MI_LINK_DESCRIPTION","Prikazuje se direktni link od poruke &#269;lanu");
define("_PM_MI_MESSAGE","Napi&scaron;i poruku za");

//2.7
define("_MP_AUTOHTML","Dozvoli HTML");
define('_MP_AUTOHTML_DESC','Dozvoli html koristiti u privatnim porukama.');
define("_MP_AUTO_MESS","Uid zadnjeg.");
define("_MP_MAXTITLE","Max. broj slova(oznaka) za naslov poruke.");
?>