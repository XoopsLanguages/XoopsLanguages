<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_APCAL_LOADED' ) ) {

define( '_AM_APCAL_LOADED' , 1 ) ;
define('_AM_APCAL_COPYRIGHT' , '<a href="http://xoops.antiquespromotion.ca" title="Calendar for Xoops" target="_blank">APCal</a> by <a href="http://www.antiquespromotion.ca" title="Antiques Promotion Canada" target="_blank">AP</a>');

// Index
define('_AM_APCAL_TIMEZONE', 'Zeitzonen');
define('_AM_APCAL_MODULEADMIN_CONFIG', 'Konfiguration');
define('_AM_APCAL_NBWAITINGEVENTS', 'Es warten %s events auf Bestätigung.');
define('_AM_APCAL_NBEVENTS', 'Es gibt are %s kommende Events.');
define('_AM_APCAL_NBCATS', 'Es gibt %s Kategorien.');
define('_AM_APCAL_MODULEADMIN_CONFIG_PHP', 'Erforderliche Php-Version %s (Ihre aktuelle Version ist %s)');
define('_AM_APCAL_MODULEADMIN_CONFIG_XOOPS', 'Erforderliche Xoops-Version %s (Ihre aktuelle Version ist %s)');
define('_AM_APCAL_PREFS', 'Einstellungen');
define('_AM_APCAL_UPDATE', 'Update');
define('_AM_APCAL_BLOCKS', 'Blöcke');
define('_AM_APCAL_GOTOMODULE', 'Gehe zum Modul');

// titles
define("_AM_APCAL_ADMISSION","Termin-Freigabe");
define("_AM_APCAL_MENU_EVENTS","Termin-Manager");
define("_AM_APCAL_MENU_CATEGORIES","Kategorie-Manager");
define("_AM_APCAL_MENU_CAT2GROUP","Kategorie-Berechtigungen");
define("_AM_APCAL_ICALENDAR_IMPORT","iCalendar Import");
define("_AM_APCAL_GROUPPERM","Gruppenberechtigungen");
define("_AM_APCAL_TABLEMAINTAIN","Tabellen-Wartung (Upgrade)");
define("_AM_APCAL_MYBLOCKSADMIN","APCal\'s Block&Gruppen-Admin");

// forms
define("_AM_APCAL_BUTTON_EXTRACT","Herausfiltern");
define("_AM_APCAL_BUTTON_ADMIT","Freigeben");
define("_AM_APCAL_BUTTON_MOVE","Verschieben");
define("_AM_APCAL_BUTTON_COPY","Kopieren");
define("_AM_APCAL_CONFIRM_DELETE","Löschen - OK?");
define("_AM_APCAL_CONFIRM_MOVE","Die Zuordnung zur alten Kategorie löschen und zur angegebenen Kategorie hinzufügen - OK?");
define("_AM_APCAL_CONFIRM_COPY","Der ausgewählten Kategorie zuordnen - OK?");
define('_AM_APCAL_OPT_PAST','früher');
define('_AM_APCAL_OPT_FUTURE','später');
define('_AM_APCAL_OPT_PASTANDFUTURE','früher & später');

// format
define("_AM_APCAL_DTFMT_LIST_ALLDAY",'d-m-Y');
define("_AM_APCAL_DTFMT_LIST_NORMAL",'d-m-Y<\b\r />H:i');

// timezones
define("_AM_APCAL_TZOPT_SERVER","Zeitzone des Servers");
define("_AM_APCAL_TZOPT_GMT","Als GMT");
define("_AM_APCAL_TZOPT_USER","Als Zeitzone des Users");

// admission
define("_AM_APCAL_LABEL_ADMIT","Ausgewählte Termine: ");
define("_AM_APCAL_MES_ADMITTED","Termine wurden freigegeben");
define("_AM_APCAL_ADMIT_TH0","Benutzer");
define("_AM_APCAL_ADMIT_TH1","Start-Zeitpunkt");
define("_AM_APCAL_ADMIT_TH2","End-Zeitpunkt");
define("_AM_APCAL_ADMIT_TH3","Titel");
define("_AM_APCAL_ADMIT_TH4","Regeln für wiederkehrende Termine");

// events manager & importing iCalendar
define("_AM_APCAL_LABEL_IMPORTFROMWEB","iCalendar Daten aus dem Web importieren (URL beginnt mit 'http://' oder 'webcal://')");
define("_AM_APCAL_LABEL_UPLOADFROMFILE","iCalendar Daten uploaden (lokale Datei)");
define("_AM_APCAL_LABEL_IO_CHECKEDITEMS","Ausgewählte Termine:");
define("_AM_APCAL_LABEL_IO_OUTPUT","werden im iCalendar ausgegeben");
define("_AM_APCAL_LABEL_IO_DELETE","werden gelöscht");
define("_AM_APCAL_MES_EVENTLINKTOCAT","Termin(e) wurde(n) dieser Kategorie zugeordnet");
define("_AM_APCAL_MES_EVENTUNLINKED","Termin(e) wurde(n) aus der Zuordnung zu der alten Kategorie entfernt");
define("_AM_APCAL_FMT_IMPORTED","Termin(e) wurde(n) aus '%s' importiert");
define("_AM_APCAL_MES_DELETED","Termin(e) wurde(n) gelöscht");
define("_AM_APCAL_IO_TH0","Benutzer");
define("_AM_APCAL_IO_TH1","Start-Zeitpunkt");
define("_AM_APCAL_IO_TH2","End-Zeitpunkt");
define("_AM_APCAL_IO_TH3","Titel");
define("_AM_APCAL_IO_TH4","Regeln für wiederkehrende Termine");
define("_AM_APCAL_IO_TH5","Freigabe");

// Group's Permissions
define( '_AM_APCAL_GPERM_G_INSERTABLE' , "dürfen hinzufügen" ) ;
define( '_AM_APCAL_GPERM_G_SUPERINSERT' , "dürfen uneingeschränkt hinzufügen" ) ;
define( '_AM_APCAL_GPERM_G_EDITABLE' , "dürfen editieren" ) ;
define( '_AM_APCAL_GPERM_G_SUPEREDIT' , "dürfen uneingeschränkt editieren" ) ;
define( '_AM_APCAL_GPERM_G_DELETABLE' , "dürfen löschen") ;
define( '_AM_APCAL_GPERM_G_SUPERDELETE' , "dürfen uneingeschränkt löschen" ) ;
define( '_AM_APCAL_GPERM_G_TOUCHOTHERS' , "dürfen die Eingaben anderer Benutzer ändern" ) ;
define( '_AM_APCAL_CAT2GROUPDESC' , "Kategorien auswählen, zu denen Zugriff gewährt werden soll" ) ;
define( '_AM_APCAL_GROUPPERMDESC' , "Hier können die Berechtigungen für jede Benutzergruppe einzeln eingestellt werden.<br />Um diese Funktion zu aktivieren, muss zuerst unter 'Einstellungen -> Berechtigungen für Benutzer' die Option 'Festgelegt durch Gruppenberechtigungen' ausgewählt werden.<br />Anmerkung: Die Einstellungen für die beiden Gruppen 'Administratoren'(Webmasters) und 'Gäste'(Anonymous Users) werden ignoriert." ) ;

// Table Maintenance
define( '_AM_APCAL_MB_SUCCESSUPDATETABLE' , "Tabellen-Update war erfolgreich" ) ;
define( '_AM_APCAL_MB_FAILUPDATETABLE' , "Tabellen-Update ist fehlgeschlagen" ) ;
define( '_AM_APCAL_NOTICE_NOERRORS' , "Es existiert kein Fehler in den Tabellen oder Einträgen." ) ;
define( '_AM_APCAL_ALRT_CATTABLENOTEXIST' , "Die Kategorie-Tabelle existiert nicht.<br />\nSoll diese Tabelle erstellt werden?" ) ;
define( '_AM_APCAL_ALRT_OLDTABLE' , "Die Tabellenstruktur der Termin-Tabelle ist veraltet.<br />\nSoll diese Tabelle aktualisiert werden?" ) ;
define( '_AM_APCAL_ALRT_TOOOLDTABLE' , "Ein Tabellen-Fehler ist aufgetreten.<br />\nVielleicht wird APCal 0.3x (oder früher) verwendet.<br />\nZuerst auf 0.4x oder 0.5x updaten." ) ;
define( '_AM_APCAL_FMT_SERVER_TZ_ALL' , "Server-Zeitzone (Winter): %+2.1f<br />Server-Zeitzone (Sommer): %+2.1f<br />Server-Zeitzonename: %s<br />Wert aus XOOPS config: %+2.1f<br />Wert, der von APCal verwednet wird: %+2.1f<br />" ) ;
define( '_AM_APCAL_FMT_WRONGSTZ' , "%s Termin(e) sind mit einer falschen Zeitzone eingetragen.<br />Soll das repariert werden?" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_COUNT' , "Events" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_VALUE' , "Zeitzone" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_VALUE_TO' , "Änderung (-14.0??14.0)" ) ;
define( '_AM_APCAL_JSALRT_SERVER_TZ' , "Vor dieser Aktion bitte zuerst ein Backup der Event-Tabellen anfertigen" ) ;
define( '_AM_APCAL_NOTICE_SERVER_TZ' , "If your server set the timezone area with summer time (=Day Light Saving) and some events were registerd in APCal 0.6x or 0.7x, dont't push this button.<br />eg) It is natural to display both -5.0 and -4.0 in EDT" ) ;
define( '_AM_APCAL_MB_SUCCESSTZUPDATE' , "Events are modified with the timezone(s)." ) ;

// Categories
define( '_AM_APCAL_CAT_TH_TITLE' , 'Titel' ) ;
define( '_AM_APCAL_CAT_TH_DESC' , 'Beschreibung' ) ;
define( '_AM_APCAL_CAT_TH_PARENT' , 'Übergeordnete Kategorie' ) ;
define( '_AM_APCAL_CAT_TH_OPTIONS' , 'Optionen' ) ;
define( '_AM_APCAL_CAT_TH_LASTMODIFY' , 'Letzte Änderung' ) ;
define( '_AM_APCAL_CAT_TH_OPERATION' , 'Operation' ) ;
define( '_AM_APCAL_CAT_TH_ENABLED' , 'Aktivieren' ) ;
define( '_AM_APCAL_CAT_TH_WEIGHT' , 'Position' ) ;
define( '_AM_APCAL_CAT_TH_SUBMENU' , 'im Untermenü eintragen' ) ;
define( '_AM_APCAL_BTN_UPDATE' , 'Aktualisieren' ) ;
define( '_AM_APCAL_MENU_CAT_EDIT' , 'Kategorie editieren' ) ;
define( '_AM_APCAL_MENU_CAT_NEW' , 'Neue Kategorie erstellen' ) ;
define( '_AM_APCAL_MB_MAKESUBCAT' , 'Unterkategorie' ) ;
define( '_AM_APCAL_MB_MAKETOPCAT' , 'Top-Level-Kategorie erstellen' ) ;
define( '_AM_APCAL_MB_CAT_INSERTED' , 'Neue Kategorie erstellt' ) ;
define( '_AM_APCAL_MB_CAT_UPDATED' , 'Kategorie aktualisiert' ) ;
define( '_AM_APCAL_FMT_CAT_DELETED' , '%s Kategorie(n) gelöscht' ) ;
define( '_AM_APCAL_FMT_CAT_BATCHUPDATED' , '%s Kategorie(n) aktualisiert' ) ;
define( '_AM_APCAL_FMT_CATDELCONFIRM' , 'Soll die Kategorie %s gelöscht werden?' ) ;
define('_AM_APCAL_CANBEMAIN', 'Als Hauptkategorie verwenden');
define('_AM_APCAL_COLOR', 'Farbe');

// Plugins
define('_AM_APCAL_PI_UPDATED','Plugins wurden updated');
define('_AM_APCAL_PI_TH_TYPE','Typ');
define('_AM_APCAL_PI_TH_OPTIONS' , 'Optionen (normalerweise leer)' ) ;
define('_AM_APCAL_PI_TH_TITLE','Titel');
define('_AM_APCAL_PI_TH_DIRNAME','Modul Verzeichnisname');
define('_AM_APCAL_PI_TH_FILE','Plugin Datei');
define('_AM_APCAL_PI_TH_DOTGIF','Dot GIF');
define('_AM_APCAL_PI_TH_OPERATION','Operation');
define('_AM_APCAL_PI_ENABLED','Aktiv');
define('_AM_APCAL_PI_DELETE','Löschen');
define('_AM_APCAL_PI_NEW','Neu');
define('_AM_APCAL_PI_VIEWYEARLY','Jahresansicht');
define('_AM_APCAL_PI_VIEWMONTHLY','Monatsansicht');
define('_AM_APCAL_PI_VIEWWEEKLY','Wochenansicht');
define('_AM_APCAL_PI_VIEWDAILY','Tagesansicht');

// Blocks & Groups Admin
define('_AM_APCAL_TITLE', 'Titel');
define('_AM_APCAL_SIDE', 'Ort');
define('_AM_APCAL_WEIGHT', 'Reihung');
define('_AM_APCAL_VISIBLEIN', 'Sichtbar in');
define('_AM_APCAL_BCACHETIME', 'Cache time');
define('_AM_APCAL_ACTION', 'AKtion');
define('_AM_APCAL_ACTIVERIGHTS', 'Rechte Moduladministration');
define('_AM_APCAL_ACCESSRIGHTS', 'Rechte Moduladministration');
define('_AM_APCAL_BADMIN', 'Blockadministration');
//define('_AM_APCAL_ADGS', 'Gruppen');

}

?>