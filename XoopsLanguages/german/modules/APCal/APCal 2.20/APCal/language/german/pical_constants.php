<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_CNST_LOADED' ) ) {


// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:11
define('_PICAL_JS_CALENDAR','calendar-de.js');
define('_PICAL_JSFMT_YMDN','%d %B %Y (%A)');
define('_PICAL_DTFMT_MINUTE','i');
define('_PICAL_FMT_YMDN','%3$s %2$s %1$s %4$s'); //tt.mmm.jjjj wochentag
define('_PICAL_FMT_NYMD','%4$s, %3$s %2$s %1$s');//wochentag, tt.mmm.jjjj
define('_PICAL_FMT_DHI','%1$s %2$s:%3$s');
define('_PICAL_FMT_HI','%1$s:%2$s');
define('_PICAL_TH_TIMEZONE','Zeitzone');

define( 'PICAL_CNST_LOADED' , 1 ) ;


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

define('_PICAL_MB_APCALSHOWALLCAT','Alle Kategorien') ;

define('_PICAL_MB_APCALLINKTODAY','Heute') ;
define('_PICAL_MB_APCALNOSUBJECT','(Kein Betreff)') ;

define('_PICAL_MB_APCALPREV_DATE','Gestern') ;
define('_PICAL_MB_APCALNEXT_DATE','Morgen') ;
define('_PICAL_MB_APCALPREV_WEEK','Vorherige Woche') ;
define('_PICAL_MB_APCALNEXT_WEEK','Nächste Woche') ;
define('_PICAL_MB_APCALPREV_MONTH','Vorheriger Monat') ;
define('_PICAL_MB_APCALNEXT_MONTH','Nächster Monat') ;
define('_PICAL_MB_APCALPREV_YEAR','Vorheriges Jahr') ;
define('_PICAL_MB_APCALNEXT_YEAR','Nächstes Jahr') ;

define('_PICAL_MB_APCALNOEVENT','Keine Termine') ;
define('_PICAL_MB_APCALADDEVENT','Termin(e) hinzufügen') ;
define('_PICAL_MB_APCALCONTINUING','(aktuell)') ;
define('_PICAL_MB_APCALRESTEVENT_PRE','weitere ') ;
define('_PICAL_MB_APCALRESTEVENT_SUF','Einträge vorhanden') ;
define('_PICAL_MB_APCALTIMESEPARATOR','--') ;

define('_PICAL_MB_APCALALLDAY_EVENT','Ganztagstermin') ;
define('_PICAL_MB_APCALLONG_EVENT','Als Balken darstellen') ;
define('_PICAL_MB_APCALLONG_SPECIALDAY','Geburtstag, etc.') ;

define('_PICAL_MB_APCALPUBLIC','Öffentlich') ;
define('_PICAL_MB_APCALPRIVATE','Privat') ;
define('_PICAL_MB_APCALPRIVATETARGET',' %s') ;

define('_PICAL_MB_APCALLINK_TO_RRULE1ST','Zum 1. Termin springen') ;
define('_PICAL_MB_APCALRRULE1ST','Das ist der 1. Termin') ;

define('_PICAL_MB_APCALEVENT_NOTREGISTER','nicht eingetragen') ;
define('_PICAL_MB_APCALEVENT_ADMITTED','freigegeben') ;
define('_PICAL_MB_APCALEVENT_NEEDADMIT','wartet auf Freigabe') ;

define('_PICAL_MB_APCALTITLE_EVENTINFO','Terminplaner') ;
define('_PICAL_MB_APCALSUBTITLE_EVENTDETAIL','Detailansicht') ;
define('_PICAL_MB_APCALSUBTITLE_EVENTEDIT','Bearbeitungsansicht') ;

define('_PICAL_MB_APCALHOUR_SUF',':') ;
define('_PICAL_MB_APCALMINUTE_SUF','') ;

define('_PICAL_MB_APCALORDER_ASC','aufsteigend') ;
define('_PICAL_MB_APCALORDER_DESC','absteigend') ;
define('_PICAL_MB_APCALSORTBY','Sortieren nach:') ;
define('_PICAL_MB_APCALCURSORTEDBY','Termine derzeit sortiert nach:') ;

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
define('_PICAL_BTN_SUBMITCHANGES','Änderungen zuweisen') ;
define('_PICAL_BTN_SAVEAS','Speichern unter') ;
define('_PICAL_BTN_DELETE','Löschen') ;
define('_PICAL_BTN_DELETE_ONE','Nur diesen Eintrag löschen') ;
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
define('_PICAL_MB_APCALLABEL_CHECKEDITEMS','Ausgewählte Einträge:');
define('_PICAL_MB_APCALLABEL_OUTPUTICS','mit iCalendar exportieren');
define('_PICAL_MB_APCALICALSELECTPLATFORM','Plattform wählen');
define('_PICAL_MB_APCALOP_AFTER','Nachher');
define('_PICAL_MB_APCALOP_BEFORE','Vorher');
define('_PICAL_MB_APCALOP_ON','Aktuell');
define('_PICAL_MB_APCALOP_ALL','Alle');
define('_PICAL_BTN_IMPORT','Import!');
define('_PICAL_BTN_UPLOAD','Upload!');
define('_PICAL_BTN_EXPORT','Export!');
define('_PICAL_BTN_EXTRACT','Extrahieren');
define('_PICAL_BTN_ADMIT','Zulassen');
define('_PICAL_BTN_MOVE','Verschieben');
define('_PICAL_BTN_COPY','Kopieren');

// Appended by Goffy for eventmember handling
define('_PICAL_EM_CANCEL','Vorgang abgebrochen');
define('_PICAL_EM_RADIO_YES','Ja');
define('_PICAL_EM_RADIO_NO','Nein');

define('_PICAL_EM_ONLINE_POSS','Bei diesen Terminen ist eine Onlineanmeldung möglich. ');
define('_PICAL_EM_ONLY_MEMBERS','Eine Onlineanmeldung kann nur von registrierten Mitgliedern durchgeführt werden. ');
define('_PICAL_EM_ONLINE_NO','Online-Anmeldung für diese Veranstaltung nicht aktiviert');
define('_PICAL_EM_ONLINE_YES','Online-Anmeldung für diese Veranstaltung aktiviert');
define('_PICAL_EM_ONLINE_ACTIVATE','Online-Anmeldung für diese Veranstaltung aktivieren');
define('_PICAL_EM_ONLINE_DEACTIVATE','Online-Anmeldung für diese Veranstaltung nicht verwenden')
;define('_PICAL_EM_ONLINE','Anmeldungen');
define('_PICAL_EM_BTN_ADD','Anmelden');
define('_PICAL_EM_BTN_ADDMORE','Weitere Personen anmelden');
define('_PICAL_EM_BTN_REMOVE','Abmelden');
define('_PICAL_EM_ENABLE_ONLINE','Online-Anmeldung');
define('_PICAL_EM_NOMEMBERS','Keine Anmeldungen zu diesem Event vorhanden');
define('_PICAL_EM_BTN_LISTMEMBERS','Teilnehmerliste');
define('_PICAL_EM_SUCCESS_ADD','Sie wurden erfolgreich zu dieser Veranstaltung angemeldet');
define('_PICAL_EM_SUCCESS_REMOVE','Sie wurden erfolgreich von dieser Veranstaltung abgemeldet');
define('_PICAL_EM_UNAME','Anmelder(in)');
define('_PICAL_EM_FIRSTNAME','Vorname');
define('_PICAL_EM_LASTNAME','Familienname');
define('_PICAL_EM_REMARKS','Anmerkungen');
define('_PICAL_EM_BTN_CONF_ADD','Anmeldung bestätigen');
define('_PICAL_EM_BTN_CONF_REMOVE','Abmeldung bestätigen');
define('_PICAL_EM_BTN_CANCEL','Abbrechen');
define('_PICAL_EM_EVENT','Veranstaltung');
define('_PICAL_EM_TITLE1','Anmeldung zu einer Veranstaltung');
define('_PICAL_EM_OBLIGATORY','Gekennzeichnete Felder zwingend erforderlich!');
define('_PICAL_EM_TEL','Telefon');
define('_PICAL_EM_EMAIL','E-Mail-Adresse');
define('_PICAL_EM_ERROR_REMOVE','Unerwarteter Fehler beim Löschen der Anmeldedaten');
define('_PICAL_EM_ERROR_ADD','Unerwarteter Fehler beim Erstellen der Anmeldung');
define('_PICAL_EM_BTN_BACK','Zurück');
define('_PICAL_EM_BACK','Sie werden auf die vorherige Seite weitergeleitet');
define('_PICAL_EM_ONLINE2','Online-Anmeldungen');

define('_PICAL_EM_TITLE2','Aktivierung der Online-Registrierung für eine Veranstaltung');
define('_PICAL_EM_BTN_RO_EDIT','Aktivierung bearbeiten');
define('_PICAL_EM_BTN_RO_DEACTIVATE','Aktivierung löschen');
define('_PICAL_EM_BTN_RO_ACTIVATE','Aktivieren');
define('_PICAL_EM_QUANTITY','Maximale Anzahl an Teilnehmern<br/>(0 bedeutet: Kein Limit)');
define('_PICAL_EM_DATELIMIT','Frist für Registrierung');
define('_PICAL_EM_EMAIL_NOTIFY','E-Mail-Adresse, die bei An-/Abmeldungen verständigt werden soll (wenn keine Benachrichtigung erfolgen soll, einfach frei lassen)');
define('_PICAL_EM_BTN_CONF_ACTIVATE','Bestätigen');
define('_PICAL_EM_ERROR_RO_ACTIVATE','Unerwarteter Fehler beim Aktivieren der Online-Registrierung');
define('_PICAL_EM_SUCCESS_RO_ACTIVATE','Aktivieren/Ändern der Online-Registrierung erfolgreich');
define('_PICAL_EM_ERROR_RO_DEACTIVATE','Unerwarteter Fehler beim Deaktivieren der Online-Registrierung');
define('_PICAL_EM_SUCCESS_RO_DEACTIVATE','Deaktivieren der Online-Registrierung erfolgreich');
define('_PICAL_EM_ERROR_FULL','Es tut uns leid, aber für diese Veranstaltung sind keine Plätze mehr frei');
define('_PICAL_EM_ERROR_TIMEOUT','Es tut uns leid, aber die Anmeldefrist für diese Veranstaltung ist abgelaufen');
define('_PICAL_EM_BTN_CONF_EDIT','Änderungen speichern');

define('_PICAL_EM_MAIL_SUBJ_ADD','Info Anmeldung');
define('_PICAL_EM_MAIL_SUBJ_REMOVE','Info Abmeldung');
define('_PICAL_EM_MAIL_SUBJ_TEXT','Veranstaltungsinfo');
define('_PICAL_EM_DATE','Datum');
define('_PICAL_EM_LOCATION','Ort');
define('_PICAL_EM_LINK','Link zur Veranstaltung');
define('_PICAL_EM_TITLE3','Übersicht über bereits durchgeführte Anmeldungen');
define('_PICAL_EM_TITLE4','Allen gemeldeten Teilnehmer, die eine E-Mail-Adresse angegeben haben, eine E-Mail schicken');
define('_PICAL_EM_MAIL_SENDER','Absender');
define('_PICAL_EM_MAIL_SUBJ','Betreff');
define('_PICAL_EM_MAIL_BODY1','Mailtext');
define('_PICAL_EM_MAIL_BODY2','Die Ausdrücke in den geschwungenen Klammern werden entsprechend ersetzt (z.B. {NAME} wird durch Vor- und Familienname ersetzt)');
define('_PICAL_EM_BTN_SEND','Senden');
define('_PICAL_EM_MAILSENT',' Nachricht(en) wurde(n) verschickt');

define('_PICAL_EM_TITLE5','Ändern von Anmeldungen');
define('_PICAL_EM_BTN_EDIT','Bearbeiten');
define('_PICAL_EM_SUCCESS_EDIT','Ändern der Anmeldedaten erfolgreich');
define('_PICAL_EM_ERROR_EDIT','Unerwarteter Fehler beim Ändern der Anmeldedaten');
define('_PICAL_EM_SEND_CONF1','E-Mail-Bestätigung');
define('_PICAL_EM_SEND_CONF2','senden an');
define('_PICAL_EM_SEND_CONF3','E-Mail-Bestätigung senden: ');

define('_PICAL_EM_REDIRECT','Sie werden zur Aktivierung der Onlineanmeldung weitergeleitet');
define('_PICAL_SUCCESS_NEW_EVENT','Termin wurde erfolgreich angelegt');
define('_PICAL_EM_SUCCESS_DELETE_EVENT','Termin wurde erfolgreich gelöscht');
define('_PICAL_SUCCESS_UPDATE_EVENT','Änderungen Termin wurden erfolgreich durchgeführt');
define('_PICAL_SUCCESS_COPY_EVENT','Termin wurde erfolgreich kopiert');

}

?>