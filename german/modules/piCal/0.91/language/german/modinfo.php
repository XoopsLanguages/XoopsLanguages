<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_MI_LOADED' ) ) {







// Appended by Xoops Language Checker -GIJOE- in 2006-11-05 06:41:41
define('_MI_PROXYSETTINGS','Proxy settings (host:port:user:pass)');

// Appended by Xoops Language Checker -GIJOE- in 2006-02-15 05:31:21
define('_MI_PICAL_ADMENU_MYTPLSADMIN','Templates');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-06 18:03:58
define('_MI_TIMEZONE_USING','Zeitzone des Servers');
define('_MI_OPT_TZ_USEXOOPS','Wähle die XOOPS-Konfiguration');
define('_MI_OPT_TZ_USEWINTER','Wähle die Zeit des Servers als Winterzeit (empfohlen)');
define('_MI_OPT_TZ_USESUMMER','Wähle die Zeit des Servers als Sommerzeit');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:11
define('_MI_USE24HOUR','24 Stunden-System (Nein heißt, 12 Stunden-System)');
define('_MI_PICAL_ADMENU_PLUGINS','Plugin Manager');

// Appended by Xoops Language Checker -GIJOE- in 2005-04-22 12:02:00
define('_MI_PICAL_BNAME_MINICALEX','MiniCalendarEx');
define('_MI_PICAL_BNAME_MINICALEX_DESC','Erweiterbarer Minikalender mit Plugin-System');

// Appended by Xoops Language Checker -GIJOE- in 2005-01-08 04:36:48
define('_MI_PICAL_DEFAULTLOCALE','austria');
define('_MI_PICAL_LOCALE','Locale (check files in locales/*.php)');

define('PICAL_MI_LOADED' , 1 ) ;

// Module Info

// The name of this module

// Appended by Xoops Language Checker -GIJOE- in 2004-06-22 18:39:02
define('_MI_PICAL_ADMENU_MYBLOCKSADMIN','Blocks&Groups Admin');

define("_MI_PICAL_NAME","piCal");

// A brief description of this module
define("_MI_PICAL_DESC","Kalendermodul mit Terminplaner");

// Names of blocks for this module (Not all module has blocks)
define("_MI_PICAL_BNAME_MINICAL","Minikalender");
define("_MI_PICAL_BNAME_MINICAL_DESC","Minikalender-Block anzeigen");
define("_MI_PICAL_BNAME_MONTHCAL","Monatskalender");
define("_MI_PICAL_BNAME_MONTHCAL_DESC","Monatskalender in voller Größe anzeigen");
define("_MI_PICAL_BNAME_TODAYS","Heutige Termine");
define("_MI_PICAL_BNAME_TODAYS_DESC","Heutige Termine anzeigen");
define("_MI_PICAL_BNAME_THEDAYS","Termine des %s");
define("_MI_PICAL_BNAME_THEDAYS_DESC","Termine des Tages markiert anzeigen");
define("_MI_PICAL_BNAME_COMING","Kommende Termine");
define("_MI_PICAL_BNAME_COMING_DESC","Kommende Termine anzeigen");
define("_MI_PICAL_BNAME_AFTER","Termine nach %s");
define("_MI_PICAL_BNAME_AFTER_DESC","Termine nach diesem Tag markiert anzeigen");
define("_MI_PICAL_BNAME_NEW","Neu eingetragene Termine");
define("_MI_PICAL_BNAME_NEW_DESC","Termine werden geordnet angezeigt (neuere zuerst)");

// Names of submenu
define("_MI_PICAL_SM_SUBMIT","Eintragen");

//define("_MI_PICAL_ADMENU1","");

// Title of config items
define("_MI_USERS_AUTHORITY","Berechtigungen für Benutzer");
define("_MI_GUESTS_AUTHORITY","Berechtigungen für Gäste");
define("_MI_DEFAULT_VIEW","Standardansicht");
define("_MI_MINICAL_TARGET","Ansicht, die angezeigt werden soll, wenn ein Datum auf dem MiniKalender angeklickt wird");
define("_MI_COMING_NUMROWS","Anzahl der angezeigten Termine im 'Kommende Termine Block'");
define("_MI_SKINFOLDER","Skin");
define("_MI_SUNDAYCOLOR","Textfarbe für Sonntag");
define("_MI_WEEKDAYCOLOR","Textfarbe für Wochentage");
define("_MI_SATURDAYCOLOR","Textfarbe für Samstag");
define("_MI_HOLIDAYCOLOR","Textfarbe für Feiertage");
define("_MI_TARGETDAYCOLOR","Textfarbe für ausgewählten Tag");
define("_MI_SUNDAYBGCOLOR","Hintergrundfarbe für Sonntag");
define("_MI_WEEKDAYBGCOLOR","Hintergrundfarbe für Wochentage");
define("_MI_SATURDAYBGCOLOR","Hintergrundfarbe für Samstag");
define("_MI_HOLIDAYBGCOLOR","Hintergrundfarbe für Feiertage");
define("_MI_TARGETDAYBGCOLOR","Hintergrundfarbe für ausgewählten Tag");
define("_MI_CALHEADCOLOR","Farbe des Kalender-Headers");
define("_MI_CALHEADBGCOLOR","Hintergrundfarbe des Kalender-Headers");
define("_MI_CALFRAMECSS","CSS-Stil des Kalenderrahmens");
define("_MI_CANOUTPUTICS","iCalendar-Datei (.ics) Ausgabe ermöglichen?");
define("_MI_MAXRRULEEXTRACT","max. Anzahl an Terminen, die durch die Regeln für wiederkehrende Termine erzeugt werden");
define("_MI_WEEKSTARTFROM","Die Woche beginnt mit");
define("_MI_WEEKNUMBERING","Wochennummerierung");
define('_MI_DAYSTARTFROM','Zeitpunkt des Tagesbeginns');
define('_MI_NAMEORUNAME','Welcher \'Name\' des Autors soll angezeigt werden?');
define('_MI_DESCNAMEORUNAME','');

// Description of each config items
define("_MI_EDITBYGUESTDSC","Berechtigungen für Gäste, um Termine hinzuzufügen");

// Options of each config items
define("_MI_OPT_AUTH_NONE","dürfen nicht hinzufügen");
define("_MI_OPT_AUTH_WAIT","dürfen hinzufügen, brauchen aber Freigabe");
define("_MI_OPT_AUTH_POST","dürfen direkt ohne Freigabe hinzufügen");
define("_MI_OPT_AUTH_BYGROUP","Festgelegt durch Gruppenberechtigungen");
define("_MI_OPT_MINI_PHPSELF","aktuelle Seite");
define("_MI_OPT_MINI_MONTHLY","Monatskalender");
define("_MI_OPT_MINI_WEEKLY","Wochenkalender");
define("_MI_OPT_MINI_DAILY","Tageskalender");
define("_MI_OPT_MINI_LIST","Terminliste");
define("_MI_OPT_CANOUTPUTICS","ICS Ausgabe aktivieren");
define("_MI_OPT_CANNOTOUTPUTICS","ICS Ausgabe deaktivieren");
define("_MI_OPT_STARTFROMSUN","Sonntag");
define("_MI_OPT_STARTFROMMON","Montag");
define("_MI_OPT_WEEKNOEACHMONTH","jeweils für einen Monat");
define("_MI_OPT_WEEKNOWHOLEYEAR","durchgehend für das ganze Jahr");
define('_MI_OPT_USENAME','Name');
define('_MI_OPT_USEUNAME','Login Name');

// Admin Menus
define("_MI_PICAL_ADMENU0","Termin-Freigabe");
define("_MI_PICAL_ADMENU1","Termin-Manager");
define("_MI_PICAL_ADMENU_CAT","Kategorie-Manager");
define("_MI_PICAL_ADMENU_CAT2GROUP","Kategorie-Berechtigungen");
define("_MI_PICAL_ADMENU2","Gruppenberechtigungen");
define("_MI_PICAL_ADMENU_TM","Tabellen-Wartung");
define("_MI_PICAL_ADMENU_ICAL","iCalendar Import");

// Text for notifications
define('_MI_PICAL_GLOBAL_NOTIFY','Global');
define('_MI_PICAL_GLOBAL_NOTIFYDSC','Globale piCal Benachrichtigungsoptionen');
define('_MI_PICAL_CATEGORY_NOTIFY','Kategorie');
define('_MI_PICAL_CATEGORY_NOTIFYDSC','Benachrichtigungsoptionen, die der aktuellen Kategorie entsprechen');
define('_MI_PICAL_EVENT_NOTIFY','Termin');
define('_MI_PICAL_EVENT_NOTIFYDSC','Benachrichtigungsoptionen, die dem aktuellen Termin entsprechen');

define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFY','Neuer Termin');
define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFYCAP','Benachrichtigung erfolgt, wenn ein neuer Termin eingetragen wird.');
define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFYDSC','Eine Benachrichtigung wird automatisch zugeschickt, sobald ein neuer Termin eingetragen wird.');
define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Termin');

define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFY','Neuer Termin in dieser Kategorie');
define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFYCAP','Benachrichtigung erfolgt, wenn ein neuer Termin in dieser Kategorie eingetragen wird.');
define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFYDSC','Eine Benachrichtigung wird automatisch zugeschickt, sobald ein neuer Termin in dieser Kategorie eingetragen wird.');
define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Termin');


}

?>