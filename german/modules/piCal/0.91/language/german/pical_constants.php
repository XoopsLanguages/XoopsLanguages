<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_CNST_LOADED' ) ) {



// Appended by Xoops Language Checker -GIJOE- in 2005-05-17 17:33:58
define('_PICAL_BTN_DELETE_ONE','Remove just one');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:11
define('_PICAL_JS_CALENDAR','calendar-de.js');
define('_PICAL_JSFMT_YMDN','%d %B %Y (%A)');
define('_PICAL_DTFMT_MINUTE','i');
define('_PICAL_FMT_YMDN','%3$s %2$s %1$s %4$s');
define('_PICAL_FMT_DHI','%1$s %2$s:%3$s');
define('_PICAL_FMT_HI','%1$s:%2$s');
define('_PICAL_TH_TIMEZONE','Zeitzone');

define('PICAL_CNST_LOADED' , 1 ) ;


// format for date()  see http://de.php.net/date
define('_PICAL_DTFMT_TIME','H:i') ;

// set your locale
define('_PICAL_LOCALE','de') ;
// format for strftime()  see http://de.php.net/strftime
define('_PICAL_STRFFMT_DATE','%x') ;
define('_PICAL_STRFFMT_DATE_FOR_BLOCK','%d %b') ;
define('_PICAL_STRFFMT_TIME','%H:%M') ;

define('_PICAL_FMT_MD','%2$s %1$s') ;
define('_PICAL_FMT_YMD','%3$s %2$s %1$s') ;
define('_PICAL_FMT_YMW','%3$s %2$s %1$s') ;
define('_PICAL_FMT_YW','Kalenderwoche %2$s %1$s') ;
define('_PICAL_FMT_YEAR_MONTH','%2$s %1$s') ;
define('_PICAL_FMT_YEAR','<font size="-1">Jahr </font>%s') ;
define('_PICAL_FMT_WEEKNO','Kalenderwoche %s') ;

define('_PICAL_ICON_LIST','Listenansicht') ;
define('_PICAL_ICON_DAILY','Tagesansicht') ;
define('_PICAL_ICON_WEEKLY','Wochenansicht') ;
define('_PICAL_ICON_MONTHLY','Monatsansicht') ;
define('_PICAL_ICON_YEARLY','Jahresansicht') ;

define('_PICAL_MB_SHOWALLCAT','Alle Kategorien') ;

define('_PICAL_MB_LINKTODAY','Heute') ;
define('_PICAL_MB_NOSUBJECT','(Kein Betreff)') ;

define('_PICAL_MB_PREV_DATE','Gestern') ;
define('_PICAL_MB_NEXT_DATE','Morgen') ;
define('_PICAL_MB_PREV_WEEK','Vorherige Woche') ;
define('_PICAL_MB_NEXT_WEEK','Nächste Woche') ;
define('_PICAL_MB_PREV_MONTH','Vorheriger Monat') ;
define('_PICAL_MB_NEXT_MONTH','Nächster Monat') ;
define('_PICAL_MB_PREV_YEAR','Vorheriges Jahr') ;
define('_PICAL_MB_NEXT_YEAR','Nächstes Jahr') ;

define('_PICAL_MB_NOEVENT','Keine Termine') ;
define('_PICAL_MB_ADDEVENT','Termin(e) hinzufügen') ;
define('_PICAL_MB_CONTINUING','(dauernd)') ;
define('_PICAL_MB_RESTEVENT_PRE','weitere ') ;
define('_PICAL_MB_RESTEVENT_SUF','Einträge vorhanden') ;
define('_PICAL_MB_TIMESEPARATOR','--') ;

define('_PICAL_MB_ALLDAY_EVENT','Ganztagstermin') ;
define('_PICAL_MB_LONG_EVENT','Als Balken darstellen') ;
define('_PICAL_MB_LONG_SPECIALDAY','Geburtstag, etc.') ;

define('_PICAL_MB_PUBLIC','Öffentlich') ;
define('_PICAL_MB_PRIVATE','privat') ;
define('_PICAL_MB_PRIVATETARGET',' %s') ;

define('_PICAL_MB_LINK_TO_RRULE1ST','Zum 1. Termin springen') ;
define('_PICAL_MB_RRULE1ST','Das ist der 1. Termin') ;

define('_PICAL_MB_EVENT_NOTREGISTER','nicht eingetragen') ;
define('_PICAL_MB_EVENT_ADMITTED','freigegeben') ;
define('_PICAL_MB_EVENT_NEEDADMIT','wartet auf Freigabe') ;

define('_PICAL_MB_TITLE_EVENTINFO','Terminplaner') ;
define('_PICAL_MB_SUBTITLE_EVENTDETAIL','Detailansicht') ;
define('_PICAL_MB_SUBTITLE_EVENTEDIT','Bearbeitungsansicht') ;

define('_PICAL_MB_HOUR_SUF',':') ;
define('_PICAL_MB_MINUTE_SUF','') ;

define('_PICAL_MB_ORDER_ASC','aufsteigend') ;
define('_PICAL_MB_ORDER_DESC','absteigend') ;
define('_PICAL_MB_SORTBY','Sortieren nach:') ;
define('_PICAL_MB_CURSORTEDBY','Termine derzeit sortiert nach:') ;

define('_PICAL_TH_SUMMARY','Titel') ;
define('_PICAL_TH_STARTDATETIME','Start-Zeitpunkt') ;
define('_PICAL_TH_ENDDATETIME','End-Zeitpunkt') ;
define('_PICAL_TH_ALLDAYOPTIONS','Ganztagsoptionen') ;
define('_PICAL_TH_LOCATION','Ort') ;
define('_PICAL_TH_CONTACT','Kontakt') ;
define('_PICAL_TH_CATEGORIES','Kategorie') ;
define('_PICAL_TH_SUBMITTER','Eingetragen von') ;
define('_PICAL_TH_CLASS','Klasse') ;
define('_PICAL_TH_DESCRIPTION','Beschreibung') ;
define('_PICAL_TH_RRULE','Regeln für wiederkehrende Termine') ;
define('_PICAL_TH_ADMISSIONSTATUS','Status') ;
define('_PICAL_TH_LASTMODIFIED','Letzte Änderung') ;

define('_PICAL_NTC_MONTHLYBYMONTHDAY','(Zahl eingeben)') ;
define('_PICAL_NTC_EXTRACTLIMIT','-> max. %s Termine werden eingetragen') ;
define('_PICAL_NTC_NUMBEROFNEEDADMIT','(Termine, die noch auf Freigabe warten: %s )') ;

define('_PICAL_OPT_PRIVATEMYSELF','nur ich selbst') ;
define('_PICAL_OPT_PRIVATEGROUP','Gruppe %s') ;
define('_PICAL_OPT_PRIVATEINVALID','(ungültige Gruppe)') ;

define('_PICAL_CNFM_SAVEAS_YN','Als einen weiteren Eintrag speichern - OK?') ;
define('_PICAL_CNFM_DELETE_YN','Eintrag löschen - OK?') ;

define('_PICAL_ERR_INVALID_EVENT_ID','Fehler: EventID nicht gefunden') ;
define('_PICAL_ERR_NOPERM_TO_SHOW',"Fehler: Keine Zugriffsberechtigung") ;
define('_PICAL_ERR_NOPERM_TO_OUTPUTICS',"Fehler: Keine Berechtigung für die iCalendar Ausgabe") ;
define('_PICAL_ERR_LACKINDISPITEM','Eintrag %s ist leer.<br />Zurück-Button des Browsers drücken') ;

define('_PICAL_BTN_JUMP','Zeigen') ;
define('_PICAL_BTN_NEWINSERTED','Jetzt Eintragen') ;
define('_PICAL_BTN_SUBMITCHANGES',' Änderungen zuweisen ') ;
define('_PICAL_BTN_SAVEAS','Speichern unter') ;
define('_PICAL_BTN_DELETE','Löschen') ;
define('_PICAL_BTN_EDITEVENT','Bearbeiten') ;
define('_PICAL_BTN_RESET','Zurücksetzen') ;
define('_PICAL_BTN_OUTPUTICS_WIN','iCalendar(Win)') ;
define('_PICAL_BTN_OUTPUTICS_MAC','iCalendar(Mac)') ;
define('_PICAL_BTN_PRINT','Drucken') ;

define('_PICAL_RR_EVERYDAY','Jeden Tag') ;
define('_PICAL_RR_EVERYWEEK','Jede Woche') ;
define('_PICAL_RR_EVERYMONTH','Jedes Monat') ;
define('_PICAL_RR_EVERYYEAR','Jedes Jahr') ;
define('_PICAL_RR_FREQDAILY','täglich') ;
define('_PICAL_RR_FREQWEEKLY','wöchentlich') ;
define('_PICAL_RR_FREQMONTHLY','monatlich') ;
define('_PICAL_RR_FREQYEARLY','jährlich') ;
define('_PICAL_RR_FREQDAILY_PRE','Alle') ;
define('_PICAL_RR_FREQWEEKLY_PRE','Alle') ;
define('_PICAL_RR_FREQMONTHLY_PRE','Alle') ;
define('_PICAL_RR_FREQYEARLY_PRE','Alle') ;
define('_PICAL_RR_FREQDAILY_SUF','Tage') ;
define('_PICAL_RR_FREQWEEKLY_SUF','Wochen') ;
define('_PICAL_RR_FREQMONTHLY_SUF','Monate') ;
define('_PICAL_RR_FREQYEARLY_SUF','Jahre') ;
define('_PICAL_RR_PERDAY','alle %s Tage') ;
define('_PICAL_RR_PERWEEK','alle %s Wochen') ;
define('_PICAL_RR_PERMONTH','alle %s Monate') ;
define('_PICAL_RR_PERYEAR','alle %s Jahre') ;
define('_PICAL_RR_COUNT','<br />%s-mal') ;
define('_PICAL_RR_UNTIL','<br />bis %s') ;
define('_PICAL_RR_R_NORRULE','wiederkehrend NEIN') ;
define('_PICAL_RR_R_YESRRULE','wiederkehrend JA') ;
define('_PICAL_RR_OR','oder') ;
define('_PICAL_RR_S_NOTSELECTED','-nicht ausgewählt-') ;
define('_PICAL_RR_S_SAMEASBDATE','gleich wie Start-Zeitpunkt') ;
define('_PICAL_RR_R_NOCOUNTUNTIL','Keine Endbedingungen') ;
define('_PICAL_RR_R_USECOUNT_PRE','Wiederholungen') ;
define('_PICAL_RR_R_USECOUNT_SUF','mal') ;
define('_PICAL_RR_R_USEUNTIL','bis') ;

// Appended by Xoops Language Checker -GIJOE- in 2004-01-17 18:09:07
define('_PICAL_FMT_YMDO','%4$s%3$s%2$s%1$s');
define('_PICAL_MB_LABEL_CHECKEDITEMS','Checked events are:');
define('_PICAL_MB_LABEL_OUTPUTICS','to be exported in iCalendar');
define('_PICAL_MB_ICALSELECTPLATFORM','Select platform');
define('_PICAL_MB_OP_AFTER','After');
define('_PICAL_MB_OP_BEFORE','Before');
define('_PICAL_MB_OP_ON','On');
define('_PICAL_MB_OP_ALL','All');
define('_PICAL_BTN_IMPORT','Import!');
define('_PICAL_BTN_UPLOAD','Upload!');
define('_PICAL_BTN_EXPORT','Export!');
define('_PICAL_BTN_EXTRACT','Extract');
define('_PICAL_BTN_ADMIT','Admit');
define('_PICAL_BTN_MOVE','Move');
define('_PICAL_BTN_COPY','Copy');

}

?>