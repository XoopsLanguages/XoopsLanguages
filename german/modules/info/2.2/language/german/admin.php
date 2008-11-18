<?php
if (!defined("_INFO_ADMINTITLE")) {
define("_INFO_ADMINTITLE","Informationen");
define("_INFO_MAINMENU","----------");
define("_INFO_SUBMENU","Hauptmenü?");

define("_INFO_ADDCONTENT","Seite hinzufügen");
define("_INFO_EDITCONTENT","Seite speichern");

define("_INFO_HOMEPAGE","Navigationskategorie");
define("_INFO_POSITION","Position");
define("_INFO_LINKNAME","Linkname");
define("_INFO_EXTURL","Datei oder URL <br /><small>bei externer URL mit http:// beginnen</small>");
define("_INFO_STORYID","ID");
define("_INFO_VISIBLE","Naviblock?");
define("_INFO_CONTENT","Text");
define("_INFO_URL","Datei auswählen");
define("_INFO_UPLOAD","Hochladen");
define("_INFO_VISIBLE_GROUP","sichtbar für Gruppe");

define("_INFO_LINKID","Reihenfolge");
define("_INFO_ACTION","Aktion");
define("_INFO_EDIT","Ändern");
define("_INFO_DELETE","Löschen");

define('_INFO_DISABLECOM','Kommentare deaktivieren');
define('_INFO_DBUPDATED','Datenbank erfolgreich aktualisiert!');
define('_INFO_ERRORINSERT','Fehler beim Aktualisieren der Datenbank!');
define('_INFO_RUSUREDEL','Diesen Content wirklich löschen?');

define('_INFO_DISABLEBREAKS','automatischen Zeilenumbruch deaktivieren (Wichtig bei HTML-Code!)');

define('_INFO_URLART','Art der angezeigten Seite');
define('_INFO_URL_NORMAL','normale Seite');
define('_INFO_URL_KATEGORIE','Kategorietitel');
define('_INFO_URL_CAT','Kategorie erstellen');
define('_INFO_URL_EXTLINK','Link unter '.XOOPS_URL.'/');
define('_INFO_URL_INTLINK','externen Link öffnen');
define('_INFO_URL_INTDATEI','lokale Datei einbinden');

define('_INFO_LISTBLOCKCAT','Navigationsblöcke bearbeiten');
define('_INFO_ADDBLOCKCAT','Navigationsblock hinzufügen');
define('_INFO_EDITBLOCKCAT','Navigationsblock bearbeiten');
define('_INFO_ERROR_NOBLOCKTITLE','Kein Navigationsblocktitel angegeben!');
define('_INFO_ERROR_ISSETBLOCKTITLE','Navigationsblocktitel ist schon vorhanden!');
define('_INFO_ERROR_NOINSERTDB','Datensatz konnte nicht eingetragen werden!');
define('_INFO_SETDELETE','Löschen bestätigen');
define('_INFO_SETDELETE_FRAGE','Soll die Navigationskategorie<br /><b>%s</b><br /> mit allen dazugehörigen Seiten wirklich gelöscht werden ?');
define('_INFO_SETDELETE_LIST','In dieser Kategorie befinden sich <b>%s</b> dazugehörige Seiten.');
define('_INFO_DELFLUSH','Löschen abgebrochen');
define('_INFO_ERROR_NODEFAULT','Default-Navigationskategorie kann nicht gelöscht werden');
define('_INFO_INFODELETE_FRAGE','Soll die Seite<br /><b>%s</b><br /> wirklich gelöscht werden ?');
define('_INFO_ADMIN_URLINTERN','Interne Links dürfen nicht mit <b>http://</b> beginnen!');
define('_INFO_LAST_EDITED','letzte Änderung');
define('_INFO_LAST_EDITEDTEXT','von <b>%s</b> am <b>%s</b>');

//Added in 1.04
define('_INFO_FRONTPAGE','Startseite');
define('_INFO_CLICK','Anklickbar');
define('_INFO_SELF','im neuen Fenster öffnen');

//Added in 1.05
define('_AM_HP_SEITE','Startseite des Moduls:');
define('_AM_HP_SEITE_NODEF','keine definiert');
define('_INFO_AM_GROUP','Gruppe');
define('_INFO_URL_IFRAME','Seite mit IFRAME einbinden');
define('_INFO_URL_INTERN','URL der Seite<br />Angabe ohne <b>'.XOOPS_URL.'</b> !<br>Für '.XOOPS_URL.' tragen Sie nur <b>/</b> ein');
define('_INFO_URL_EXTERN','URL der Seite<br />Angabe muss mit http:// oder https:// beginnen !');
define('_INFO_URL_DATEI','Pfad der Datei<br />Angabe ausgehend von XOOPS_ROOT_PATH</b> !');
define('_INFO_URL_FRAME','Url der Seite<br />Angabe muss mit http:// oder https:// beginnen !');
define('_INFO_URL_FRAME_HEIGHT','Höhe des Frames<br />Angabe in Pixel !');
define('_INFO_URL_FRAME_BORDER','Rahmen um den Frame<br />Angabe in Pixel (0 -> keiner)!');
define('_INFO_ADMIN_ERRURL','URL muss mit http:// oder https:// beginnen!');

define("_MIC_INFO_GOMOD","Gehe zum Modul");
define("_MIC_INFO_ADMENU0","Modulvoreinstellung");
define("_MIC_INFO_ADMENU1","Seite bearbeiten/erstellen");

//Added in 1.06
define('_INFO_TITLESICHT','Titelüberschrift zeigen');
define('_INFO_FOOTERSICHT','Fusszeile zeigen');
define('_INFO_URL_FRAME_WIDTH','Breite des IFRAME<br />Angabe in Prozent (0 = 100%)');
define('_INFO_URL_FRAME_ALIGN','Ausrichtung des IFRAME');

//Added in 2.0
define("_AM_INFO_PERMISSIONS","Zugriffsrechte setzen");
define("_AM_INFO_CANCREATE","Seite erstellen");
define("_AM_INFO_CANUPDATEALL","alle Seiten bearbeiten");
define("_AM_INFO_CANUPDATE","eigene Seite bearbeiten");
define("_AM_INFO_CANACCESS","alle Seite freigeben");
define("_AM_INFO_CANDELETE","Seiten löschen");
define("_AM_INFO_CANFREEALL","Seiten freigeben");

define("_AM_INFO_CANUPDATE_CAT","Kategorie wählen");
define("_AM_INFO_CANUPDATE_POSITION","Menüposition wählen");
define("_AM_INFO_CANUPDATE_GROUPS","Ansichtberechtigung setzen");
define("_AM_INFO_CANUPDATE_SITEART","Seitenart setzen");
define('_INFO_ADMIN_ERRDATEI','angegebene Datei ist nicht vorhanden');
//define('_AD_NAV_MODHOME','Gehe zum Modul');
//define('_AD_NAV_MODADMIN','Administration');
define('_INFO_OWNER','Ersteller');
define('_AM_INFO_CANUPDATE_SITEFULL','sofortige Freigabe');
define('_INFO_LINKVERSION','derzeitige Version');
define('_INFO_VISIBLE_LEFTBLOCK','linke Blöcke anzeigen');
define('_INFO_VISIBLE_RIGHTBLOCK','rechte Blöcke anzeigen');

define('_AM_INFO_CANFREEPERM','Zugriffsrechte setzen');
}
?>