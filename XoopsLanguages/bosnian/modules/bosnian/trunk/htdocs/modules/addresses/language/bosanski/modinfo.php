<?php
// $Id: modinfo.php,v 1.7 2003/11/11 Shine Exp $
// Module Info

// The name of this module
define("_MI_MYADDRESSES_NAME","Adresar + Google karta");

// A brief description of this module
define("_MI_MYADDRESSES_DESC","Napravi Adresar gdje registrovani mogu tra&#382;iti/slati/ocjenjivati Adrese.");

// Names of blocks for this module (Not all module has blocks)
//hack LUCIO - start
define("_MI_MYADDRESSES_BNAME1","Najnovije Adrese");
define("_MI_MYADDRESSES_BDESC1","Prika&#382;i najnovije Adrese");
define("_MI_MYADDRESSES_BNAME2","Top Adrese");
define("_MI_MYADDRESSES_BDESC2","Prika&#382;i najpopularnije Adrese");
define("_MI_MYADDRESSES_BNAME3","Kategorije");
define("_MI_MYADDRESSES_BDESC3","Prika&#382;i glavne kategorije");
//hack LUCIO - end


// Sub menu titles
define("_MI_MYADDRESSES_SMNAME1","Po&scaron;alji");
define("_MI_MYADDRESSES_SMNAME2","Popularne");
define("_MI_MYADDRESSES_SMNAME3","Top ocjenjene");

// Names of admin menu items
define("_MI_MYADDRESSES_ADMENU1","Dodaj/Uredi kategorije");
define("_MI_MYADDRESSES_ADMENU2","Dodaj/Uredi Adrese");
define("_MI_MYADDRESSES_ADMENU3","Poslate Adrese");
define("_MI_MYADDRESSES_ADMENU4","Neispravne Adrese");
define("_MI_MYADDRESSES_ADMENU5","Promijenjene Adrese");
define("_MI_MYADDRESSES_ADMENU6","Provjera linkovaod Adresa");

// Title of config items
define('_MI_MYADDRESSES_POPULAR','Odredi koliko jedna Adresa treba da ima klikov pa da bi bila popularna');
define('_MI_MYADDRESSES_NEWLINKS','Odredi koji max. broj Adresa treba prikazati po stranici');
define('_MI_MYADDRESSES_PERPAGE','Odredi koji max. broj Adresa treba prikazati po stranici');
define('_MI_MYADDRESSES_USESHOTS','Izaberi DA da se prikazuje baner/logo slike kod Adresa koje ih imaju');
define('_MI_MYADDRESSES_USEFRAMES','&#381;eli&scaron; li prikazati linkovane Adrese unutar Frame?');
define('_MI_MYADDRESSES_SHOTWIDTH','Max. dozvoljena &scaron;irina slike za baner/logo');
define('_MI_MYADDRESSES_ANONPOST','Dozvoljava&scaron; li gostima da ¹alju Adrese?');
define('_MI_MYADDRESSES_AUTOAPPROVE','Automatski objavljivati Adrese bez intervencije Webmastera?');
//hack LUCIO - start
define('_MI_MYADDRESSES_API_KEY','[Google karta]<br />Paste here your Google Maps API Key for:<br \>'.XOOPS_URL.'/modules/addresses/');
define('_MI_MYADDRESSES_DEFAULT_LAT','[Google karta]<br />Standardna Google karte geografska &scaron;irina:');
define('_MI_MYADDRESSES_DEFAULT_LON','[Google karta]<br />Standardna Google karte geografska du&#382;ina:');
define('_MI_MYADDRESSES_DEFAULT_ZOOM','[Google karta]<br />Standardni Google karte zoom level:');
define('_MI_MYADDRESSES_DEFAULT_ADDR','[Google karta]<br />Standardna Adresa:');
define('_MI_MYADDRESSES_POPUP_OPTIONS','[Google karta]<br />Google karta popup prozora atributi:');

// Options of config items
define('_MI_MYADDRESSES_PERPAGE_ALL','Sve');
//hack LUCIO - end

// Description of each config items
define('_MI_MYADDRESSES_POPULARDSC','');
define('_MI_MYADDRESSES_NEWLINKSDSC','');
define('_MI_MYADDRESSES_PERPAGEDSC','');
define('_MI_MYADDRESSES_USEFRAMEDSC','');
define('_MI_MYADDRESSES_USESHOTSDSC','');
define('_MI_MYADDRESSES_SHOTWIDTHDSC','');
define('_MI_MYADDRESSES_AUTOAPPROVEDSC','');

//hack LUCIO - start
define('_MI_MYADDRESSES_API_KEYDSC','Idi na google i API Key dobij:<br /><a href="http://www.google.com/apis/maps/" target="_blank">http://www.google.com/apis/maps/</a>');
define('_MI_MYADDRESSES_DEFAULT_LATDSC','Decimal, izme&#273;u -90 i +90');
define('_MI_MYADDRESSES_DEFAULT_LONDSC','Decimal, izme&#273;u -180 i +180');
define('_MI_MYADDRESSES_DEFAULT_ZOOMDSC','Integer, between 0 i 17');
define('_MI_MYADDRESSES_DEFAULT_ADDRDSC','');
define('_MI_MYADDRESSES_POPUP_OPTIONSDSC','Bez &#39; ili &quot;<br />Vidi Javascript metodu window.open() attributes');
//hack LUCIO - start

// Text for notifications
define('_MI_MYADDRESSES_GLOBAL_NOTIFY','Globalno');
define('_MI_MYADDRESSES_GLOBAL_NOTIFYDSC','Globalna opcija obavijesti za Adresar.');

define('_MI_MYADDRESSES_CATEGORY_NOTIFY','Kategorija');
define('_MI_MYADDRESSES_CATEGORY_NOTIFYDSC','Obavijest o mogu&#263;nostima koja se odnose na trenutnu adresu kategorija.');

define('_MI_MYADDRESSES_LINK_NOTIFY','Adresa');
define('_MI_MYADDRESSES_LINK_NOTIFYDSC','Obavijest o mogu&#263;nostima koja se odnose na trenutnu adresu.');

define('_MI_MYADDRESSES_GLOBAL_NEWCATEGORY_NOTIFY','Nova kategorija');
define('_MI_MYADDRESSES_GLOBAL_NEWCATEGORY_NOTIFYCAP','Obavijesti me kada se nova adresa u kategoriji obajavi.');
define('_MI_MYADDRESSES_GLOBAL_NEWCATEGORY_NOTIFYDSC','Primi obavijest ako se nova adresa u kategoriji objavi');
define('_MI_MYADDRESSES_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New address category');

define('_MI_MYADDRESSES_GLOBAL_LINKMODIFY_NOTIFY','Zahtjev za promjenu Adrese');
define('_MI_MYADDRESSES_GLOBAL_LINKMODIFY_NOTIFYCAP','Obavijesti me ako je bilo kakav zahtjev za promjenu Adrese poslat.');
define('_MI_MYADDRESSES_GLOBAL_LINKMODIFY_NOTIFYDSC','Primi obavijest ako je bilo ko podnio zahtjev da promijeni svoju upisanu Adresu.');
define('_MI_MYADDRESSES_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Zahtjev za promjenu Adrese');

define('_MI_MYADDRESSES_GLOBAL_LINKBROKEN_NOTIFY','Prijava neispravne Adrese');
define('_MI_MYADDRESSES_GLOBAL_LINKBROKEN_NOTIFYCAP','Obavijesti me ako je bilo ko prijavio neku neispravnu Adresu.');
define('_MI_MYADDRESSES_GLOBAL_LINKBROKEN_NOTIFYDSC','Primi obavijest ako je bilo ko podnio prijavu za neispravnu Adresu.');
define('_MI_MYADDRESSES_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Prijava neispravne Adrese');

define('_MI_MYADDRESSES_GLOBAL_LINKSUBMIT_NOTIFY','Nova Adresa je poslata');
define('_MI_MYADDRESSES_GLOBAL_LINKSUBMIT_NOTIFYCAP','Obavijesti me ako je neko poslao novu Adresu (koje &#269;ekaju odobrenje).');
define('_MI_MYADDRESSES_GLOBAL_LINKSUBMIT_NOTIFYDSC','Primi obavijest ako je neko poslao novu Adresu (koja &#269;eka odobrenje).');
define('_MI_MYADDRESSES_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova Adresa je poslata');

define('_MI_MYADDRESSES_GLOBAL_NEWLINK_NOTIFY','Nova Adresa');
define('_MI_MYADDRESSES_GLOBAL_NEWLINK_NOTIFYCAP','Obavijesti me ako je nova Adresa poslata.');
define('_MI_MYADDRESSES_GLOBAL_NEWLINK_NOTIFYDSC','Dobij obavijest ako je nova Adresa poslata.');
define('_MI_MYADDRESSES_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova Adresa');

define('_MI_MYADDRESSES_CATEGORY_LINKSUBMIT_NOTIFY','Nova Adresa je poslata');
define('_MI_MYADDRESSES_CATEGORY_LINKSUBMIT_NOTIFYCAP','Obavijesti me ako je nova Adresa poslata (koja &#269;eka odobrenje) u aktuelnoj kategoriji.');
define('_MI_MYADDRESSES_CATEGORY_LINKSUBMIT_NOTIFYDSC','Dobij obavijest ako je nova Adresa poslata (koja &#269;eka odobrenje) u aktuelnoj kategoriji.');
define('_MI_MYADDRESSES_CATEGORY_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova Adresa je poslata u kategoriju');

define('_MI_MYADDRESSES_CATEGORY_NEWLINK_NOTIFY','Nova Adresa');
define('_MI_MYADDRESSES_CATEGORY_NEWLINK_NOTIFYCAP','Obavijesti me kada se nova Adresa objavi u kategoriji.');
define('_MI_MYADDRESSES_CATEGORY_NEWLINK_NOTIFYDSC','Dobij obavijest ako se nova Adresa objavi u kategoriji.');
define('_MI_MYADDRESSES_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova Adresa u kategoriji');

define('_MI_MYADDRESSES_LINK_APPROVE_NOTIFY','Adresa je objavljena');
define('_MI_MYADDRESSES_LINK_APPROVE_NOTIFYCAP','Obavijesti me kada bude ova Adresa objavljena.');
define('_MI_MYADDRESSES_LINK_APPROVE_NOTIFYDSC','Dobij obavijest kada se bude ova Adresa objavila.');
define('_MI_MYADDRESSES_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Adresa je objavljena');

?>
