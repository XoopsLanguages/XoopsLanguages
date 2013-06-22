<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'APCAL_MB_APCALLOADED' ) ) {

define( 'APCAL_MB_APCALLOADED' , 1 ) ;

// index.php
define('_MB_APCAL_ERR_NOPERMTOUPDATE',"Keine Berechtigung vorhanden, um Termine zu ändern");
define('_APCAL_APURL', 'http://xoops.antiquespromotion.ca');
define('_APCAL_APURL2', 'http://www.antiquespromotion.ca');
define('_AM_APCAL_COPYRIGHT' , '<a href="http://xoops.antiquespromotion.ca" title="Calendar for Xoops" target="_blank">APCal</a> by <a href="http://www.antiquespromotion.ca" title="Antiques Promotion Canada" target="_blank">AP</a>');
define('_MB_APCAL_ERR_NOPERMTOINSERT',"Keine Berechtigung vorhanden, um Termine hinzuzufügen");
define('_MB_APCAL_ERR_NOPERMTODELETE',"Keine Berechtigung vorhanden, um Termine zu löschen");
define('_MB_APCAL_ALT_PRINTTHISEVENT',"Diesen Termin drucken");
define('_APCAL_CALENDAR', 'Kalender');

// print.php
define('_MB_APCAL_COMESFROM',"Dies ist ein Eintrag auf der Website: %s");

// edit event
define('_APCAL_TH_GETCOORDS', 'Position suchen');
define('_APCAL_TH_LATITUDE', 'Latitude');
define('_APCAL_TH_LONGITUDE', 'Longitude');
define('_APCAL_TH_ZOOM', 'Zoom level');
define('_APCAL_TH_EMAIL', 'Email');
define('_APCAL_TH_URL', 'URL');
define('_APCAL_MAINPICTURE', 'Hauptbild');
define('_APCAL_PICTURES', 'Andere Bidler');
define('_APCAL_TH_MAINCATEGORY', 'Hauptkartegorie');
define('_APCAL_NONE', 'keine');
define('_APCAL_DAY', 'Tag');
define('_APCAL_DIFFERENTHOURS', 'Unterschiedliche Stunden für jeden Tag');
define('_APCAL_SAMEHOURS', 'Für jeden Tag die gleichen Stunden verwenden');

// API texts
define('_APCAL_PROVIDEDBY', 'Ergebnis zur Verfügung gestellt von');
define('_APCAL_X', 'by');
define('_APCAL_AP', 'Antiques Promotion Canada');
define('_APCAL_CALENDAROF', 'Kalender von');

// Share admin
define('_APCAL_SHARECALENDARFORM', 'Dieses Formular ausfüllen, wenn Sie den Kalender auf Ihrer Webseite verwenden möchten.');
define('_APCAL_SHOWALLCAT', 'Alle Kategorien');
define('_APCAL_GENERATE', 'Erzeugen');
define('_APCAL_GENERATEHINT', 'Bei manchen Browsern kann es sein, dass Sie zwei mal auf Erzeugen klicken müssen.');
define('_APCAL_CATEGORIES', 'Kategorien');
define('_APCAL_NBEVENTS', 'Anzahl der angezeigten Events');
define('_APCAL_WIDTH', 'Blockbreite');
define('_APCAL_STYLE', 'Style und Farben');
define('_APCAL_IFCUSTOM', 'Wenn Sie "Individuell anpassen" wählen, füllen Sie bitte den nachstehenden Bereich aus (in CSS).');
define('_APCAL_BORDER', 'Block-Rahmen');
define('_APCAL_TITLE', 'Kalender-Titel');
define('_APCAL_TEXT', 'Kalender-Text');
define('_APCAL_LINK', 'Event-Links');
define('_APCAL_EVEN', 'Event-Zeile');
define('_APCAL_ODD', 'Alternierende Reihen');
define('_APCAL_DEFAULT', 'Standard');
define('_APCAL_CUSTOM', 'Individuell anpassen');
define('_APCAL_THEME', 'Von ihrem Theme');
define('_APCAL_SHAREINFO', 'Für die Verwendung dieses Kalenders in Ihrer Webseite müssen Sie diesen HTML-Code kopieren und in Ihrer Webseite einfügen.');
define('_APCAL_SHARECALENDAR', 'Anzeige dieses Kalenders in Ihrer Webseite');

// Event view
define('_APCAL_PREVEVENT', 'Vorheriges Event');
define('_APCAL_NEXTEVENT', 'Nächstes Event');
define('_APCAL_BACKTOCAL', 'Zurück zum Kalender');

// Tooltip
define('_APCAL_CLICKFORDETAILS', 'Für nähere Details bitte klicken');
define('_APCAL_BEGIN', 'Von');
define('_APCAL_END', 'Bis');
define('_APCAL_LOCATION', 'Ort');

// Tell a friend
define('_APCAL_TELLAFRIEND', 'Tell a friend');
define('_APCAL_FROM', 'Von');
define('_APCAL_TO', 'An');
define('_APCAL_SUBJECT', 'Betreff');
define('_APCAL_MESSAGE', 'Nachricht');
define('_APCAL_TELLAFRIENDTEXT', 'Besuche diesen tollen Kalender auf');

// Share
define('_APCAL_FB_LNG', 'de_DE');
define('_APCAL_GPLUS_LNG', 'de');

}

?>
