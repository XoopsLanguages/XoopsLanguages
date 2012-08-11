<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_CNST_LOADED' ) ) {

define('PICAL_CNST_LOADED' , 1 ) ;

// the language file for jscalendar "DHTML Date/Time Selector"
define('_PICAL_JS_CALENDAR','calendar-en.js');

// format for jscalendar. see common/jscalendar/doc/html/reference.html
define('_PICAL_JSFMT_YMDN','%e %B %Y %A');

// format for date()  see http://jp.php.net/date
define('_PICAL_DTFMT_MINUTE','i');

// definition of orders     Y:year  M:month  W:week  D:day  N:dayname  O:operand
define('_PICAL_FMT_MD','%2$s %1$s');
define('_PICAL_FMT_YMD','%3$s %2$s %1$s');
define('_PICAL_FMT_YMDN','%3$s %2$s %1$s %4$s');
define('_PICAL_FMT_YMDO','%4$s%3$s%2$s%1$s');
define('_PICAL_FMT_YMW','%3$s %2$s %1$s');
define('_PICAL_FMT_YW','UGE%2$s %1$s');
define('_PICAL_FMT_DHI','%1$s %2$s:%3$s');
define('_PICAL_FMT_HI','%1$s:%2$s');

// formats for sprintf()
define('_PICAL_FMT_YEAR_MONTH','%2$s %1$s');
define('_PICAL_FMT_YEAR','ÅR %s');
define('_PICAL_FMT_WEEKNO','UGE %s');

define('_PICAL_ICON_LIST','Liste visning');
define('_PICAL_ICON_DAILY','Daglig visning');
define('_PICAL_ICON_WEEKLY','Ugentlig visning');
define('_PICAL_ICON_MONTHLY','Månedlig visning');
define('_PICAL_ICON_YEARLY','Årlig visning');

define('_PICAL_MB_SHOWALLCAT','Alle kategorier');

define('_PICAL_MB_LINKTODAY','I dag');
define('_PICAL_MB_NOSUBJECT','(Intet emne)');

define('_PICAL_MB_PREV_DATE','I går');
define('_PICAL_MB_NEXT_DATE','I morgen');
define('_PICAL_MB_PREV_WEEK','Sidste uge');
define('_PICAL_MB_NEXT_WEEK','Næste uge');
define('_PICAL_MB_PREV_MONTH','Sidste måned');
define('_PICAL_MB_NEXT_MONTH','Næste måned');
define('_PICAL_MB_PREV_YEAR','Sidste år');
define('_PICAL_MB_NEXT_YEAR','Næste år ');

define('_PICAL_MB_NOEVENT','Ingen events');
define('_PICAL_MB_ADDEVENT','Tilføj en event');
define('_PICAL_MB_CONTINUING','(fortsættes)');
define('_PICAL_MB_RESTEVENT_PRE','');
define('_PICAL_MB_RESTEVENT_SUF','Flere..');
define('_PICAL_MB_TIMESEPARATOR','--');

define('_PICAL_MB_ALLDAY_EVENT','Hele dagen');
define('_PICAL_MB_LONG_EVENT','Vis som bar');
define('_PICAL_MB_LONG_SPECIALDAY','Jubilæum etc.');

define('_PICAL_MB_PUBLIC','Offentligt');
define('_PICAL_MB_PRIVATE','Privat');
define('_PICAL_MB_PRIVATETARGET',' mellem%s');

define('_PICAL_MB_LINK_TO_RRULE1ST','Hop til den første event');
define('_PICAL_MB_RRULE1ST','Dette er den første event');

define('_PICAL_MB_EVENT_NOTREGISTER','Ikke registreret');
define('_PICAL_MB_EVENT_ADMITTED','Godkendt');
define('_PICAL_MB_EVENT_NEEDADMIT','Afventer godkendelse');

define('_PICAL_MB_TITLE_EVENTINFO','Planlægning');
define('_PICAL_MB_SUBTITLE_EVENTDETAIL','Detaljeret visning');
define('_PICAL_MB_SUBTITLE_EVENTEDIT','Redigerings visning');

define('_PICAL_MB_HOUR_SUF',':');
define('_PICAL_MB_MINUTE_SUF','');

define('_PICAL_MB_ORDER_ASC','Opadgående');
define('_PICAL_MB_ORDER_DESC','Nedadgående');
define('_PICAL_MB_SORTBY','Sorteret efter:');
define('_PICAL_MB_CURSORTEDBY','Events er lige nu sorteret efter:');

define('_PICAL_MB_LABEL_CHECKEDITEMS','Markerede events skal:');
define('_PICAL_MB_LABEL_OUTPUTICS','eksporteres til iCalendar');

define('_PICAL_MB_ICALSELECTPLATFORM','Vælg platform');

define('_PICAL_TH_SUMMARY','Sammendrag');
define('_PICAL_TH_TIMEZONE','Tidszone');
define('_PICAL_TH_STARTDATETIME','Starter dato/tid');
define('_PICAL_TH_ENDDATETIME','Slutter dato/tid');
define('_PICAL_TH_ALLDAYOPTIONS','Heldags muligheder');
define('_PICAL_TH_LOCATION','Lokation');
define('_PICAL_TH_CONTACT','Kontakt');
define('_PICAL_TH_CATEGORIES','Kategori');
define('_PICAL_TH_SUBMITTER','Indsender');
define('_PICAL_TH_CLASS','Klasse');
define('_PICAL_TH_DESCRIPTION','Beskrivelse');
define('_PICAL_TH_RRULE','Gentagelse');
define('_PICAL_TH_ADMISSIONSTATUS','Status');
define('_PICAL_TH_LASTMODIFIED','Sidst ændret');

define('_PICAL_NTC_MONTHLYBYMONTHDAY','(Input nummer)');
define('_PICAL_NTC_EXTRACTLIMIT','** Kun %s events bliver trukket ud hvis maks.');
define('_PICAL_NTC_NUMBEROFNEEDADMIT','(%s items afventer godkendelse)');

define('_PICAL_OPT_PRIVATEMYSELF','kun mig selv');
define('_PICAL_OPT_PRIVATEGROUP','gruppe %s');
define('_PICAL_OPT_PRIVATEINVALID','(forkert gruppe)');

define('_PICAL_MB_OP_AFTER','Efter');
define('_PICAL_MB_OP_BEFORE','Før');
define('_PICAL_MB_OP_ON','Den');
define('_PICAL_MB_OP_ALL','Alle');

define('_PICAL_CNFM_SAVEAS_YN','Er det OK at gemme denne som en ny record?');
define('_PICAL_CNFM_DELETE_YN','Er det OK at slette denne record?');

define('_PICAL_ERR_INVALID_EVENT_ID','Fejl: EventID blev ikke fundet');
define('_PICAL_ERR_NOPERM_TO_SHOW','Fejl: Du har ikke rettigheder til denne visning');
define('_PICAL_ERR_NOPERM_TO_OUTPUTICS','Fejl: Du har ikke rettigheder til at lave udtræk til iCalendar');
define('_PICAL_ERR_LACKINDISPITEM','Item %s er tom.<br />Klik på tilbage i din browser');

define('_PICAL_BTN_JUMP','Hop');
define('_PICAL_BTN_NEWINSERTED','Godkend');
define('_PICAL_BTN_SUBMITCHANGES',' Ændre det!');
define('_PICAL_BTN_SAVEAS','Gem som');
define('_PICAL_BTN_DELETE','Fjern det');
define('_PICAL_BTN_DELETE_ONE','Fjern kun én');
define('_PICAL_BTN_EDITEVENT','Rediger det');
define('_PICAL_BTN_RESET','Fortryd');
define('_PICAL_BTN_OUTPUTICS_WIN','iCalendar(Windows)');
define('_PICAL_BTN_OUTPUTICS_MAC','iCalendar(Mac)');
define('_PICAL_BTN_PRINT','Print');
define('_PICAL_BTN_IMPORT','Importer!');
define('_PICAL_BTN_UPLOAD','Upload!');
define('_PICAL_BTN_EXPORT','Eksporter!');
define('_PICAL_BTN_EXTRACT','Udtræk');
define('_PICAL_BTN_ADMIT','Godkend');
define('_PICAL_BTN_MOVE','Flyt');
define('_PICAL_BTN_COPY','Kopier');

define('_PICAL_RR_EVERYDAY','Hver dag');
define('_PICAL_RR_EVERYWEEK','Hver uge');
define('_PICAL_RR_EVERYMONTH','Hver måned');
define('_PICAL_RR_EVERYYEAR','Hvert år');
define('_PICAL_RR_FREQDAILY','Dagligt');
define('_PICAL_RR_FREQWEEKLY','Ugenligt');
define('_PICAL_RR_FREQMONTHLY','Månedligt');
define('_PICAL_RR_FREQYEARLY','Årligt');
define('_PICAL_RR_FREQDAILY_PRE','Hver');
define('_PICAL_RR_FREQWEEKLY_PRE','Hver');
define('_PICAL_RR_FREQMONTHLY_PRE','Hver');
define('_PICAL_RR_FREQYEARLY_PRE','Hver');
define('_PICAL_RR_FREQDAILY_SUF','dag(e)');
define('_PICAL_RR_FREQWEEKLY_SUF','Uge(er)');
define('_PICAL_RR_FREQMONTHLY_SUF','Måned(er)');
define('_PICAL_RR_FREQYEARLY_SUF','År');
define('_PICAL_RR_PERDAY','every %s dage');
define('_PICAL_RR_PERWEEK','every %s uger');
define('_PICAL_RR_PERMONTH','every %s måneder');
define('_PICAL_RR_PERYEAR','every %s år');
define('_PICAL_RR_COUNT','<br />%s gange');
define('_PICAL_RR_UNTIL','<br />indtil %s');
define('_PICAL_RR_R_NORRULE','Gentages Nej');
define('_PICAL_RR_R_YESRRULE','Gentages Ja');
define('_PICAL_RR_OR','eller');
define('_PICAL_RR_S_NOTSELECTED','-ikke valgt-');
define('_PICAL_RR_S_SAMEASBDATE','Samme som begyndelses dato');
define('_PICAL_RR_R_NOCOUNTUNTIL','Ingen slutning');
define('_PICAL_RR_R_USECOUNT_PRE','gentagelser');
define('_PICAL_RR_R_USECOUNT_SUF','antal gange');
define('_PICAL_RR_R_USEUNTIL','til');


}

?>