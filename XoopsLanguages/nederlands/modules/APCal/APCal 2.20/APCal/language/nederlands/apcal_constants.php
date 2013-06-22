<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_APCAL_CNST_LOADED' ) ) {



// Appended by Xoops Language Checker -GIJOE- in 2005-05-17 17:34:00
define('_APCAL_BTN_DELETE_ONE','Remove just one');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:13
define('_APCAL_JS_CALENDAR','calendar-en.js');
define('_APCAL_JSFMT_YMDN','%d %B %Y (%A)');
define('_APCAL_DTFMT_MINUTE','i');
define('_APCAL_FMT_YMDN','%3$s %2$s %1$s %4$s');
define('_APCAL_FMT_DHI','%1$s %2$s:%3$s');
define('_APCAL_FMT_HI','%1$s:%2$s');
define('_APCAL_TH_TIMEZONE','Time Zone');

define( '_APCAL_CNST_LOADED' , 1 ) ;


// format for date()  see http://jp.php.net/date
define('_APCAL_DTFMT_TIME','a g:i') ;

// set your locale
define('_APCAL_LOCALE','nl_NL') ;
// format for strftime()  see http://jp.php.net/strftime
define('_APCAL_STRFFMT_DATE','%x') ;

define('_APCAL_FMT_MD','%2$s %1$s') ;
define('_APCAL_FMT_YMD','%3$s %2$s %1$s') ;
define('_APCAL_FMT_YMW','%3$s %2$s %1$s') ;
define('_APCAL_FMT_YEAR_MONTH','%2$s %1$s') ;
define('_APCAL_FMT_YEAR','<font size="-1">Jaar </font>%s') ;

define('_APCAL_ICON_DAILY','Dagvoorstelling') ;
define('_APCAL_ICON_WEEKLY','Weekvoorstelling') ;
define('_APCAL_ICON_MONTHLY','Maandvoorstelling') ;
define('_APCAL_ICON_YEARLY','Jaarvoorstelling') ;

define('_APCAL_MB_APCALLINKTODAY','Vandaag') ;
define('_APCAL_MB_APCALNOSUBJECT','(geen onderwerp)') ;

define('_APCAL_MB_APCALPREV_DATE','Gisteren') ;
define('_APCAL_MB_APCALNEXT_DATE','Morgen') ;
define('_APCAL_MB_APCALPREV_WEEK','Vorige week') ;
define('_APCAL_MB_APCALNEXT_WEEK','Volgende week') ;
define('_APCAL_MB_APCALPREV_MONTH','Vorige maand') ;
define('_APCAL_MB_APCALNEXT_MONTH','Volgende maand') ;
define('_APCAL_MB_APCALPREV_YEAR','Vorige jaar') ;
define('_APCAL_MB_APCALNEXT_YEAR','Volgend jaar') ;

define('_APCAL_MB_APCALNOEVENT','Geen activiteiten') ;
define('_APCAL_MB_APCALADDEVENT','Activiteiten toevoegen') ;
define('_APCAL_MB_APCALCONTINUING','(lopende)') ;
define('_APCAL_MB_APCALRESTEVENT_PRE','meer') ;
define('_APCAL_MB_APCALRESTEVENT_SUF','info') ;
define('_APCAL_MB_APCALTIMESEPARATOR','--') ;

define('_APCAL_MB_APCALALLDAY_EVENT','Volledige dag') ;
define('_APCAL_MB_APCALLONG_EVENT','Als balk voorstellen') ;
define('_APCAL_MB_APCALLONG_SPECIALDAY','Verjaardag, etc.') ;

define('_APCAL_MB_APCALPUBLIC','publiek') ;
define('_APCAL_MB_APCALPRIVATE','privé') ;
define('_APCAL_MB_APCALPRIVATETARGET',' %s') ;

define('_APCAL_MB_APCALLINK_TO_RRULE1ST','Naar 1ste activiteit springen') ;
define('_APCAL_MB_APCALRRULE1ST','Dat is de 1ste activiteit') ;

define('_APCAL_MB_APCALEVENT_NOTREGISTER','niet geregistreerd') ;
define('_APCAL_MB_APCALEVENT_ADMITTED','goedgekeurd') ;
define('_APCAL_MB_APCALEVENT_NEEDADMIT','wacht op goedkeuring') ;

define('_APCAL_MB_APCALTITLE_EVENTINFO','Activiteitsplanner') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTDETAIL','Detailweergave') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTEDIT','Editeerweergave') ;

define('_APCAL_MB_APCALHOUR_SUF',':') ;
define('_APCAL_MB_APCALMINUTE_SUF','') ;

define('_APCAL_TH_SUMMARY','Titel') ;
define('_APCAL_TH_STARTDATETIME','Begin') ;
define('_APCAL_TH_ENDDATETIME','Einde') ;
define('_APCAL_TH_ALLDAYOPTIONS','Volledige dag') ;
define('_APCAL_TH_LOCATION','Plaats') ;
define('_APCAL_TH_CONTACT','Verantwoordelijke') ;
define('_APCAL_TH_CLASS','Klasse') ;
define('_APCAL_TH_DESCRIPTION','Omschrijving') ;
define('_APCAL_TH_RRULE','Terugkeerpatroon') ;
define('_APCAL_TH_ADMISSIONSTATUS','Status') ;

define('_APCAL_NTC_MONTHLYBYMONTHDAY','(Getal ingeven)') ;
define('_APCAL_NTC_EXTRACTLIMIT','-> max. %s activiteiten worden ingegeven') ;
define('_APCAL_NTC_NUMBEROFNEEDADMIT','(Activiteiten die nog op goedkeuring wachten: %s )') ;

define('_APCAL_OPT_PRIVATEMYSELF','alleen ikzelf') ;
define('_APCAL_OPT_PRIVATEGROUP','Groep %s') ;
define('_APCAL_OPT_PRIVATEINVALID','(ungeldige groep)') ;

define('_APCAL_CNFM_SAVEAS_YN','Ingave opslaan - OK?') ;
define('_APCAL_CNFM_DELETE_YN','Ingave verwijderen -OK?') ;

define('_APCAL_ERR_INVALID_EVENT_ID','Error: EventID niet gevonden') ;
define('_APCAL_ERR_NOPERM_TO_SHOW',"Error: geen rechten") ;
define('_APCAL_ERR_NOPERM_TO_OUTPUTICS',"Error: geen rechten voor iCalender output") ;
define('_APCAL_ERR_LACKINDISPITEM','Ingave %s is leeg.<br />Ga terug') ;

define('_APCAL_BTN_JUMP','Ga naar') ;
define('_APCAL_BTN_NEWINSERTED','Nieuwe ingave') ;
define('_APCAL_BTN_SUBMITCHANGES',' Wijzigingen doorvoeren ') ;
define('_APCAL_BTN_SAVEAS','Opslaan als') ;
define('_APCAL_BTN_DELETE','Verwijderen') ;
define('_APCAL_BTN_EDITEVENT','Editeren') ;
define('_APCAL_BTN_RESET','Terugzetten') ;
define('_APCAL_BTN_OUTPUTICS_WIN','iCalendar(Win)') ;
define('_APCAL_BTN_OUTPUTICS_MAC','iCalendar(Mac)') ;

define('_APCAL_RR_EVERYDAY','Elke dag') ;
define('_APCAL_RR_EVERYWEEK','Elke week') ;
define('_APCAL_RR_EVERYMONTH','Elke maand') ;
define('_APCAL_RR_EVERYYEAR','Elk jaar') ;
define('_APCAL_RR_FREQDAILY','dagelijks') ;
define('_APCAL_RR_FREQWEEKLY','wekelijks') ;
define('_APCAL_RR_FREQMONTHLY','maandelijks') ;
define('_APCAL_RR_FREQYEARLY','jaarlijks') ;
define('_APCAL_RR_FREQDAILY_PRE','Alle') ;
define('_APCAL_RR_FREQWEEKLY_PRE','Alle') ;
define('_APCAL_RR_FREQMONTHLY_PRE','Alle') ;
define('_APCAL_RR_FREQYEARLY_PRE','Alle') ;
define('_APCAL_RR_FREQDAILY_SUF','Dagen') ;
define('_APCAL_RR_FREQWEEKLY_SUF','Weken') ;
define('_APCAL_RR_FREQMONTHLY_SUF','Maanden') ;
define('_APCAL_RR_FREQYEARLY_SUF','Jaren') ;
define('_APCAL_RR_PERDAY','alle %s dagen') ;
define('_APCAL_RR_PERWEEK','alle %s weken') ;
define('_APCAL_RR_PERMONTH','alle %s maanden') ;
define('_APCAL_RR_PERYEAR','alle %s jaren') ;
define('_APCAL_RR_COUNT','<br />%s-keer') ;
define('_APCAL_RR_UNTIL','<br />tot %s') ;
define('_APCAL_RR_R_NORRULE','weerkerend NEEN') ;
define('_APCAL_RR_R_YESRRULE','weerkerend JA') ;
define('_APCAL_RR_OR','of') ;
define('_APCAL_RR_S_NOTSELECTED','-niet geselecteerd-') ;
define('_APCAL_RR_S_SAMEASBDATE','gelijk aan begin') ;
define('_APCAL_RR_R_NOCOUNTUNTIL','Geen einde') ;
define('_APCAL_RR_R_USECOUNT_PRE','Herhalingen') ;
define('_APCAL_RR_R_USECOUNT_SUF','keer') ;
define('_APCAL_RR_R_USEUNTIL','tot') ;



// Appended by Xoops Language Checker -GIJOE- in 2003-12-05 14:18:43
define('_APCAL_TH_SUBMITTER','Submitter');

// Appended by Xoops Language Checker -GIJOE- in 2003-12-26 10:55:16
define('_APCAL_STRFFMT_DATE_FOR_BLOCK','%d %b');
define('_APCAL_STRFFMT_TIME','%H:%M');

// Appended by Xoops Language Checker -GIJOE- in 2004-01-14 18:31:01
define('_APCAL_FMT_YW','WEEK%2$s %1$s');
define('_APCAL_FMT_WEEKNO','WEEK %s');
define('_APCAL_ICON_LIST','List View');
define('_APCAL_MB_APCALSHOWALLCAT','All Categories');
define('_APCAL_MB_APCALORDER_ASC','ascending');
define('_APCAL_MB_APCALORDER_DESC','descending');
define('_APCAL_MB_APCALSORTBY','Sort by:');
define('_APCAL_MB_APCALCURSORTEDBY','Events currently sorted by:');
define('_APCAL_TH_CATEGORIES','Categories');
define('_APCAL_TH_LASTMODIFIED','Last Modified');
define('_APCAL_BTN_PRINT','Print');

// Appended by Xoops Language Checker -GIJOE- in 2004-01-17 18:09:08
define('_APCAL_FMT_YMDO','%4$s%3$s%2$s%1$s');
define('_APCAL_MB_APCALLABEL_CHECKEDITEMS','Checked events are:');
define('_APCAL_MB_APCALLABEL_OUTPUTICS','to be exported in iCalendar');
define('_APCAL_MB_APCALICALSELECTPLATFORM','Select platform');
define('_APCAL_MB_APCALOP_AFTER','After');
define('_APCAL_MB_APCALOP_BEFORE','Before');
define('_APCAL_MB_APCALOP_ON','On');
define('_APCAL_MB_APCALOP_ALL','All');
define('_APCAL_BTN_IMPORT','Import!');
define('_APCAL_BTN_UPLOAD','Upload!');
define('_APCAL_BTN_EXPORT','Export!');
define('_APCAL_BTN_EXTRACT','Extract');
define('_APCAL_BTN_ADMIT','Admit');
define('_APCAL_BTN_MOVE','Move');
define('_APCAL_BTN_COPY','Copy');

}

?>
