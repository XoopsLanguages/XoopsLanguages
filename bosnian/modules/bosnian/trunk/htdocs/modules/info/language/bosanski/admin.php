<?php
if (!defined("_INFO_ADMINTITLE")) {
define("_INFO_ADMINTITLE","Informacije");
define("_INFO_MAINMENU","----------");
define("_INFO_SUBMENU","Glavni meni?");

define("_INFO_ADDCONTENT","Stranicu napravi");
define("_INFO_EDITCONTENT","Stranicu memo&scaron;i");

define("_INFO_HOMEPAGE","Navigacijske kategorije");
define("_INFO_POSITION","Pozicija");
define("_INFO_LINKNAME","Naziv linka");
define("_INFO_EXTURL","Podatak ili URL <br /><small>kod externog URL-a sa http:// obavezno</small>");
define("_INFO_STORYID","ID");
define("_INFO_VISIBLE","Navigacijski blok?");
define("_INFO_CONTENT","Tekst");
define("_INFO_URL","Izaberi podatak");
define("_INFO_UPLOAD","Upload");
define("_INFO_VISIBLE_GROUP","Vidno za Grupe");

define("_INFO_LINKID","Redoslijed");
define("_INFO_ACTION","Akcija");
define("_INFO_EDIT","Uredi");
define("_INFO_DELETE","Izbri&scaron;i");

define('_INFO_DISABLECOM','Komentare deaktivirati');
define('_INFO_DBUPDATED','Baza podataka je uspje&scaron;no aktulizirana!');
define('_INFO_ERRORINSERT','Do&scaron;lo je do gre&scaron;ke prilikom aktuliziranja Baze podataka!');
define('_INFO_RUSUREDEL','Treba li ovaj sadr&#382;aj stvarno izbrisati?');

define('_INFO_DISABLEBREAKS','Automatsi prelom redaka deaktivirati (Ovo je va&#382;no kod kori&scaron;tenja HTML-Code!)');

define('_INFO_URLART','Na&#269;in prikazivanja webstranice');
define('_INFO_URL_NORMAL','Normalna stranica');
define('_INFO_URL_KATEGORIE','Naziv kategorije');
define('_INFO_URL_CAT','Kategoriju napravi');
define('_INFO_URL_EXTLINK','Link ispod '.XOOPS_URL.'/');
define('_INFO_URL_INTLINK','Externi Link otvoriti');
define('_INFO_URL_INTDATEI','Lokalni podatak povezati');

define('_INFO_LISTBLOCKCAT','Navigacijske blokove urediti');
define('_INFO_ADDBLOCKCAT','Navigacijske blok napraviti');
define('_INFO_EDITBLOCKCAT','Navigacijske blok urditi');
define('_INFO_ERROR_NOBLOCKTITLE','Bez naziva Navigacijskog bloka!');
define('_INFO_ERROR_ISSETBLOCKTITLE','Naziv Navigacijskog bloka ve&#263; postoji!');
define('_INFO_ERROR_NOINSERTDB','Bilje&scaron;ka se nemo&#382;e upisati!');
define('_INFO_SETDELETE','Brisanje potvrdi');
define('_INFO_SETDELETE_FRAGE','Treba li Navigacijsku kategoriju <br /><b>%s</b><br /> sa svim nje&#382;inim Stranicama stvarno izbrisati ?');
define('_INFO_SETDELETE_LIST','U kategoriji se nalazi ove <b>%s</b> njene stranice.');
define('_INFO_DELFLUSH','Odustani od brisanja');
define('_INFO_ERROR_NODEFAULT','Standardna-Navigacijska kategorija se nemo&#382;e izbrisati');
define('_INFO_INFODELETE_FRAGE','Treba li se Stranica <br /><b>%s</b><br /> stvarno definitivno izbrisati ?');
define('_INFO_ADMIN_URLINTERN','Interni Linkovi nesmiju sa <b>http://</b> po&#269;injati!');
define('_INFO_LAST_EDITED','Zadnja promjena');
define('_INFO_LAST_EDITEDTEXT','od <b>%s</b> dana <b>%s</b>');

//Added in 1.04
define('_INFO_FRONTPAGE','Start stranica');
define('_INFO_CLICK','Klikni');
define('_INFO_SELF','u novom prozoru otvoriti');

//Added in 1.05
define('_AM_HP_SEITE','Start stranica Modula:');
define('_AM_HP_SEITE_NODEF','Nije definisana');
define('_INFO_AM_GROUP','Grupe');
define('_INFO_URL_IFRAME','Stranicu sa IFRAME povezati');
define('_INFO_URL_INTERN','URL od Stranice<br />Upisati bez <b>'.XOOPS_URL.'</b> !<br>Za '.XOOPS_URL.' upisati samo <b>/</b> ');
define('_INFO_URL_EXTERN','URL od Stranice<br />Upisati se mora http:// ili https:// obavezno!');
define('_INFO_URL_DATEI','Veza od podatka<br />Upisati iz veze XOOPS_ROOT_PATH</b> !');
define('_INFO_URL_FRAME','Url od Stranice<br />Upisati se mora http:// ili https:// obavezno !');
define('_INFO_URL_FRAME_HEIGHT','Visina od Frame<br />Upisati u Pixelima !');
define('_INFO_URL_FRAME_BORDER','Okvir rama od Frame<br />Upisati u Pixelima (0 -> bez okvira)!');
define('_INFO_ADMIN_ERRURL','URL mora biti sa http:// ili https:// obavezno!');

define("_MIC_INFO_GOMOD","Idi u Modul");
define("_MIC_INFO_ADMENU0","Pode&scaron;avanje");
define("_MIC_INFO_ADMENU1","Stranicu uredi/napravi");

//Added in 1.06
define('_INFO_TITLESICHT','Naslov prikazati');
define('_INFO_FOOTERSICHT','Dno stranice prikazati');
define('_INFO_URL_FRAME_WIDTH','&Scaron;irina od IFRAME<br />Upisati u procentima (0 = 100%)');
define('_INFO_URL_FRAME_ALIGN','Redoslijed IFRAME');

//Added in 2.0
define("_AM_INFO_PERMISSIONS","Odobrenje pristupa odredi");
define("_AM_INFO_CANCREATE","Stranicu napravi");
define("_AM_INFO_CANUPDATEALL","Sve Stranice uredi");
define("_AM_INFO_CANUPDATE","Svoje Stranice uredi");
define("_AM_INFO_CANACCESS","Sve Stranice objavi");
define("_AM_INFO_CANDELETE","Stranice izbri&scaron;i");
define("_AM_INFO_CANFREEALL","Stranice objavi");

define("_AM_INFO_CANUPDATE_CAT","Kategoriju izaberi");
define("_AM_INFO_CANUPDATE_POSITION","Meni opciju izaberi");
define("_AM_INFO_CANUPDATE_GROUPS","Odobrenje vidno za Grupe odredi");
define("_AM_INFO_CANUPDATE_SITEART","Odredi vrstu za stranicu");
define('_INFO_ADMIN_ERRDATEI','Dati podatak nije prona&#273;i');
//define('_AD_NAV_MODHOME','Gehe zum Modul');
//define('_AD_NAV_MODADMIN','Administration');
define('_INFO_OWNER','Autor');
define('_AM_INFO_CANUPDATE_SITEFULL','Odmah objaviti');
define('_INFO_LINKVERSION','Trenutna verija');
define('_INFO_VISIBLE_LEFTBLOCK','Lijeve Blokove prikazati');
define('_INFO_VISIBLE_RIGHTBLOCK','Desne Blokove prikazati');

define('_AM_INFO_CANFREEPERM','Pristup odobrenja odredi');
}
?>