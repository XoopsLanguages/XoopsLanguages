<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {

define( '_MI_APCAL_APCALLOADED' , 1 ) ;

// Module Info

// The name of this module
define("_MI_APCAL_NAME","APCal");

// A brief description of this module
define("_MI_APCAL_DESC","Kalendermodul mit Terminplaner");

// Default Locale
define('_MI_APCAL_DEFAULTLOCALE','austria');

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL","Minikalender");
define("_MI_APCAL_BNAME_MINICAL_DESC","Minikalender-Block anzeigen");
define('_MI_APCAL_BNAME_MINICALEX','MiniCalendarEx');
define('_MI_APCAL_BNAME_MINICALEX_DESC','Erweiterbarer Minikalender mit Plugin-System');
define("_MI_APCAL_BNAME_MONTHCAL","Monatskalender");
define("_MI_APCAL_BNAME_MONTHCAL_DESC","Monatskalender in voller Größe anzeigen");
define("_MI_APCAL_BNAME_TODAYS","Heutige Termine");
define("_MI_APCAL_BNAME_TODAYS_DESC","Heutige Termine anzeigen");
define("_MI_APCAL_BNAME_THEDAYS","Termine des %s");
define("_MI_APCAL_BNAME_THEDAYS_DESC","Termine des Tages markiert anzeigen");
define("_MI_APCAL_BNAME_COMING","Kommende Termine");
define("_MI_APCAL_BNAME_COMING_DESC","Kommende Termine anzeigen");
define("_MI_APCAL_BNAME_AFTER","Termine nach %s");
define("_MI_APCAL_BNAME_AFTER_DESC","Termine nach diesem Tag markiert anzeigen");
define("_MI_APCAL_BNAME_NEW","Neu eingetragene Termine");
define("_MI_APCAL_BNAME_NEW_DESC","Termine werden geordnet angezeigt (neuere zuerst)");
define("_MI_APCAL_BNAME_MAP", 'Karte mit den Events von diesem Monat');
define("_MI_APCAL_BNAME_MAP_DESC", 'Karte mit den Events von diesem Monat');

// Names of submenu
define("_MI_APCAL_SM_SUBMIT","Eintragen");

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCAL_USERS_AUTHORITY", "Berechtigungen für Benutzer");
define("_MI_APCAL_GUESTS_AUTHORITY", "Berechtigungen für Gäste");
define("_MI_APCAL_DEFAULT_VIEW", "Standardansicht");
define("_MI_APCAL_MINICAL_TARGET", "Ansicht, die angezeigt werden soll, wenn ein Datum auf dem MiniKalender angeklickt wird");
define("_MI_APCAL_COMING_NUMROWS", "Anzahl der angezeigten Termine im 'Kommende Termine Block'");
define("_MI_APCAL_SKINFOLDER", "Skin");
define("_MI_APCAL_LOCALE", "Anzeige der Feiertage in:");
define("_MI_APCAL_SUNDAYCOLOR", "Textfarbe für Sonntag");
define("_MI_APCAL_WEEKDAYCOLOR", "Textfarbe für Wochentage");
define("_MI_APCAL_SATURDAYCOLOR", "Textfarbe für Samstag");
define("_MI_APCAL_HOLIDAYCOLOR", "Textfarbe für Feiertage");
define("_MI_APCAL_TARGETDAYCOLOR", "Textfarbe für ausgewählten Tag");
define("_MI_APCAL_SUNDAYBGCOLOR", "Hintergrundfarbe für Sonntag");
define("_MI_APCAL_WEEKDAYBGCOLOR", "Hintergrundfarbe für Wochentage");
define("_MI_APCAL_SATURDAYBGCOLOR", "Hintergrundfarbe für Samstag");
define("_MI_APCAL_HOLIDAYBGCOLOR", "Hintergrundfarbe für Feiertage");
define("_MI_APCAL_TARGETDAYBGCOLOR", "Hintergrundfarbe für ausgewählten Tag");
define("_MI_APCAL_CALHEADCOLOR", "Farbe des Kalender-Headers");
define("_MI_APCAL_CALHEADBGCOLOR", "Hintergrundfarbe des Kalender-Headers");
define("_MI_APCAL_CALFRAMECSS", "CSS-Stil des Kalenderrahmens");
define("_MI_APCAL_CANOUTPUTICS", "iCalendar-Datei (.ics) Ausgabe ermöglichen?");
define("_MI_APCAL_MAXRRULEEXTRACT", "max. Anzahl an Terminen, die durch die Regeln für wiederkehrende Termine erzeugt werden");
define("_MI_APCAL_WEEKSTARTFROM", "Die Woche beginnt mit");
define("_MI_APCAL_WEEKNUMBERING", "Wochennummerierung");
define('_MI_APCAL_DAYSTARTFROM','Zeitpunkt des Tagesbeginns');
define('_MI_APCAL_TIMEZONE_USING','Zeitzone des Servers');
define('_MI_APCAL_USE24HOUR','24 Stunden-System (Nein heißt, 12 Stunden-System)');
define('_MI_APCAL_NAMEORUNAME','Welcher \'Name\' des Autors soll angezeigt werden?');

define("_MI_APCAL_GMLAT" , "\"Google Map\" Standard-Latitude" ) ;
define("_MI_APCAL_GMLNG" , "\"Google Map\" Standard-Longitude" ) ;
define("_MI_APCAL_GMZOOM" , "\"Google Map\" Standard-Zoom-Level" ) ;
define("_MI_APCAL_GMHEIGHT" , "\"Google Map\" Höhe (in Pixel)" ) ;
define("_MI_APCAL_USEURLREWRITE" , "URL rewriting verwenden" ) ;
define("_MI_APCAL_WIDERWEEKEND" , "Breitere Spalten in der Monatsansicht für:" ) ;
define('_MI_APCAL_GETTHMCOLOR', 'Haupt-CSS-Datei im Theme-Verzeichnis');
define('_MI_APCAL_THMORDEFAULT', 'Farben von:');
define('_MI_APCAL_ENABLECALMAP', 'Google Map in der Kalenderansicht anzeigen');
define('_MI_APCAL_ENABLEEVENTMAP', 'Google Map in der Event-Detailansicht anzeigen');
define('_MI_APCAL_ENABLESHARING', 'Usern ermöglichen, deinen Kalender in deren Website zu verwenden');
define('_MI_APCAL_EVENTNAVENABLED', 'Navigationsmenü in der Event-Detailansicht ermöglichen');
define('_MI_APCAL_DISPLAYCATTITLE', 'Kategorietitel als Seitentitel anzeigen');
define('_MI_APCAL_ENABLESOCIAL', 'Social-Networks-Links ermöglichen');
define('_MI_APCAL_NBPICS', 'Maximale Anzahl an erlaubten Bildern (0 wenn sie keine erlauben wollen)');
define('_MI_APCAL_PICSWIDTH', 'Maximale Breite des Bildes in der Event-Detailansicht');
define('_MI_APCAL_PICSHEIGHT', 'Maximale Höhe des Bildes in der Event-Detailansichtw');
define('_MI_APCAL_SHOWPICMONTHLY', 'Zeige Hauptbild in Monatsansicht');
define('_MI_APCAL_SHOWPICWEEKLY', 'Zeige Hauptbild in Wochenansicht');
define('_MI_APCAL_SHOWPICDAILY', 'Zeige Hauptbild in Tagesansicht');
define('_MI_APCAL_SHOWPICLIST', 'Zeige Hauptbild in Listenansicht');
define('_MI_APCAL_EVENTBGCOLOR', 'Hintergrundfarbe Eventeintrag');
define('_MI_APCAL_EVENTCOLOR', 'Farbe Eventeintrag');
define('_MI_APCAL_ALLCATSCOLOR', 'Farbe Standard-Kategorie');
define('_MI_APCAL_DISPLAYTIMEZONE', 'Zeitzone anzeigen, wenn Zeit angezeigt wird');
define('_MI_APCAL_ICSNEWCAL', 'Erstelle neuen Kalender für ical-Export');
define('_MI_APCAL_ENABLEREGISTRATION', 'Ermöglichen Onlineanmeldung');

define('_MI_APCAL_USERS', 'Users');
define('_MI_APCAL_COLORS', 'Farben');
define('_MI_APCAL_SETTINGS', 'Allgemeine Eintellungen');
define('_MI_APCAL_CALSETTINGS', 'Kalender-Eintellungen');
define('_MI_APCAL_CALDISPLAY', 'Kalender-Anzeige');
define('_MI_APCAL_EVENTS', 'Events');
define('_MI_APCAL_PICTURES', 'Bilder');
define('_MI_APCAL_MAP', 'Google Map');
define('_MI_APCAL_COMMENTSNOT', 'Kommentare & Benachrichtigungen');

// Description of each config items
define("_MI_APCAL_EDITBYGUESTDSC", "Berechtigungen für Gäste, um Termine hinzuzufügen");
define("_MI_APCAL_LOCALEDESC", "Die Feiertage sind standardmäßig nur für USA, Canada, Canada-fr und Frankreich verfügbar. Bei anderen Ländern bitte überprüfen und erforderlichenfalls selbst erstellen.");
define("_MI_APCAL_DESCNAMEORUNAME" , "Auswahl, welcher Name angezeigt wird" );
define("_MI_APCAL_DESCUSEURLREWRITE" , "<b>Damit Url-Rewriting richtig funktioniert, kopieren sie bitte /modules/APCal/doc/.htaccess in das Verzeichnis /modules/APCal/.</b><br /><br />Url-Rewriting funktioniert nur, wenn \"mod_rewrite\" auf dem Server installiert ist. Für Details kontaktieren Sie bitte Ihren System-Administrator." ) ;
define("_MI_APCAL_WIDERWEEKENDDESC" , "Für Mehrfachauswahl bitte die \"Strg\"-Taste gedrückt halten." );
define('_MI_APCAL_THMORDEFAULTDESC', 'Theme verwenden: Hier den Namen der CSS-Datei angeben (die Verwendung einer CSS wird empfohlen)<br />Individuell anpassen: Bitte die nächsten 13 Felder ausfüllen.<br />Standard: Verwendung der Standardfarben.');

// Options of each config items
define("_MI_APCAL_OPT_AUTH_NONE", "dürfen nicht hinzufügen");
define("_MI_APCAL_OPT_AUTH_WAIT", "dürfen hinzufügen, brauchen aber Freigabe");
define("_MI_APCAL_OPT_AUTH_POST", "dürfen direkt ohne Freigabe hinzufügen");
define("_MI_APCAL_OPT_AUTH_BYGROUP", "Festgelegt durch Gruppenberechtigungen");
define("_MI_APCAL_OPT_MINI_PHPSELF", "aktuelle Seite");
define("_MI_APCAL_OPT_MINI_MONTHLY", "Monatskalender");
define("_MI_APCAL_OPT_MINI_WEEKLY", "Wochenkalender");
define("_MI_APCAL_OPT_MINI_DAILY", "Tageskalender");
define("_MI_APCAL_OPT_MINI_LIST", "Terminliste");
define("_MI_APCAL_OPT_CANOUTPUTICS", "ICS Ausgabe aktivieren");
define("_MI_APCAL_OPT_CANNOTOUTPUTICS", "ICS Ausgabe deaktivieren");
define("_MI_APCAL_OPT_STARTFROMSUN", "Sonntag");
define("_MI_APCAL_OPT_STARTFROMMON", "Montag");
define("_MI_APCAL_OPT_WEEKNOEACHMONTH", "jeweils für einen Monat");
define("_MI_APCAL_OPT_WEEKNOWHOLEYEAR", "durchgehend für das ganze Jahr");
define('_MI_APCAL_OPT_USENAME','Name');
define('_MI_APCAL_OPT_USEUNAME','Login Name');
define('_MI_APCAL_OPT_TZ_USEXOOPS','Wähle die XOOPS-Konfiguration');
define('_MI_APCAL_OPT_TZ_USEWINTER','Wähle die Zeit des Servers als Winterzeit (empfohlen)');
define('_MI_APCAL_OPT_TZ_USESUMMER','Wähle die Zeit des Servers als Sommerzeit');
define('_MI_APCAL_OPT_THM', 'Theme verwenden');
define('_MI_APCAL_OPT_CUSTOM', 'Individuell anpassen');
define('_MI_APCAL_OPT_DEFAULT', 'Standard');
define("_MI_APCAL_OPT_NONE", "Keine");
define('_MI_APCAL_SUNDAY', 'Sonntag');
define('_MI_APCAL_MONDAY', 'Montag');
define('_MI_APCAL_TUESDAY', 'Dienstag');
define('_MI_APCAL_WEDNESDAY', 'Mittwoch');
define('_MI_APCAL_THURSDAY', 'Donnerstag');
define('_MI_APCAL_FRIDAY', 'Freitag');
define('_MI_APCAL_SATURDAY', 'Samstag');

// Admin Menus
define('_MI_APCAL_INDEX', 'Index');
define("_MI_APCAL_ADMENU0","Termin-Freigabe");
define("_MI_APCAL_ADMENU1","Termin-Manager");
define("_MI_APCAL_ADMENU_CAT","Kategorie-Manager");
define("_MI_APCAL_ADMENU_CAT2GROUP","Kategorie-Berechtigungen");
define("_MI_APCAL_ADMENU2","Gruppenberechtigungen");
define("_MI_APCAL_ADMENU_TM","Tabellen-Wartung");
define("_MI_APCAL_ADMENU_PLUGINS","Plugins Manager");
define("_MI_APCAL_ADMENU_ICAL","iCalendar Import");
define('_MI_APCAL_ADMENU_MYTPLSADMIN','Templates');
define("_MI_APCAL_ADMENU_MYBLOCKSADMIN","Block- & Gruppen-Admininistration");

// Text for notifications
define('_MI_APCAL_GLOBAL_NOTIFY', 'Global');
define('_MI_APCAL_GLOBAL_NOTIFYDSC', 'Globale APCal Benachrichtigungsoptionen');
define('_MI_APCAL_CATEGORY_NOTIFY', 'Kategorie');
define('_MI_APCAL_CATEGORY_NOTIFYDSC', 'Benachrichtigungsoptionen, die der aktuellen Kategorie entsprechen');
define('_MI_APCAL_EVENT_NOTIFY', 'Termin');
define('_MI_APCAL_EVENT_NOTIFYDSC', 'Benachrichtigungsoptionen, die dem aktuellen Termin entsprechen');

define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY', 'Neuer Termin');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP', 'Benachrichtigung erfolgt, wenn ein neuer Termin eingetragen wird.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC', 'Eine Benachrichtigung wird automatisch zugeschickt, sobald ein neuer Termin eingetragen wird.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Termin');

define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY', 'Neuer Termin in dieser Kategorie');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP', 'Benachrichtigung erfolgt, wenn ein neuer Termin in dieser Kategorie eingetragen wird.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC', 'Eine Benachrichtigung wird automatisch zugeschickt, sobald ein neuer Termin in dieser Kategorie eingetragen wird.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Termin');

}

?>