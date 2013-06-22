<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_APCAL_CNST_LOADED' ) ) {



// Appended by Xoops Language Checker -GIJOE- in 2005-05-17 17:34:01
define('_APCAL_BTN_DELETE_ONE','Remove just one');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:14
define('_APCAL_JS_CALENDAR','calendar-en.js');
define('_APCAL_JSFMT_YMDN','%d %B %Y (%A)');
define('_APCAL_DTFMT_MINUTE','i');
define('_APCAL_FMT_YMDN','%3$s %2$s %1$s %4$s');
define('_APCAL_FMT_DHI','%1$s %2$s:%3$s');
define('_APCAL_FMT_HI','%1$s:%2$s');
define('_APCAL_TH_TIMEZONE','Time Zone');

define( '_APCAL_CNST_LOADED' , 1 ) ;


// format for date()  see http://jp.php.net/date
define('_APCAL_DTFMT_TIME','H:i') ;

// set your locale
define('_APCAL_LOCALE','it_IT') ;
// format for strftime()  see http://jp.php.net/strftime
define('_APCAL_STRFFMT_DATE','%d %b %Y (%a)') ;
define('_APCAL_STRFFMT_DATE_FOR_BLOCK','%d %b') ;
define('_APCAL_STRFFMT_TIME','%H:%M') ;

// definition of orders     Y:year  M:month  W:week  D:day  O:operand
define('_APCAL_FMT_MD','%2$s %1$s') ;
define('_APCAL_FMT_YMD','%3$s %2$s %1$s') ;
define('_APCAL_FMT_YMDO','%4$s%3$s%2$s%1$s') ;
define('_APCAL_FMT_YMW','%3$s %2$s %1$s') ;
define('_APCAL_FMT_YW','SETTIMANA%2$s %1$s') ;
define('_APCAL_FMT_YEAR_MONTH','%2$s %1$s') ;
define('_APCAL_FMT_YEAR','<font size="-1">ANNO </font>%s') ;
define('_APCAL_FMT_WEEKNO','SETTIMANA %s') ;

define('_APCAL_ICON_LIST','Elenco') ;
define('_APCAL_ICON_DAILY','Giornaliero') ;
define('_APCAL_ICON_WEEKLY','Settimanale') ;
define('_APCAL_ICON_MONTHLY','Mensile') ;
define('_APCAL_ICON_YEARLY','Annuale') ;

define('_APCAL_MB_APCALSHOWALLCAT','Tutte le categorie') ;

define('_APCAL_MB_APCALLINKTODAY','Oggi') ;
define('_APCAL_MB_APCALNOSUBJECT','(senza titolo)') ;

define('_APCAL_MB_APCALPREV_DATE','Ieri') ;
define('_APCAL_MB_APCALNEXT_DATE','Domani') ;
define('_APCAL_MB_APCALPREV_WEEK','Settimana Precedente') ;
define('_APCAL_MB_APCALNEXT_WEEK','Settimana Successiva') ;
define('_APCAL_MB_APCALPREV_MONTH','Mese Precedente') ;
define('_APCAL_MB_APCALNEXT_MONTH','Mese Successivo') ;
define('_APCAL_MB_APCALPREV_YEAR','Anno Precedente') ;
define('_APCAL_MB_APCALNEXT_YEAR','Anno Successivo') ;

define('_APCAL_MB_APCALNOEVENT','Nessun evento') ;
define('_APCAL_MB_APCALADDEVENT','Aggiungi un evento') ;
define('_APCAL_MB_APCALCONTINUING','(continua)') ;
define('_APCAL_MB_APCALRESTEVENT_PRE','altri') ;
define('_APCAL_MB_APCALRESTEVENT_SUF','eventi') ;
define('_APCAL_MB_APCALTIMESEPARATOR','--') ;

define('_APCAL_MB_APCALALLDAY_EVENT','Tutto-il-giorno') ;
define('_APCAL_MB_APCALLONG_EVENT','Mostra come barra') ;
define('_APCAL_MB_APCALLONG_SPECIALDAY','Anniversario, ecc.') ;

define('_APCAL_MB_APCALPUBLIC','Pubblica') ;
define('_APCAL_MB_APCALPRIVATE','Privato') ;
define('_APCAL_MB_APCALPRIVATETARGET',' per %s') ;

define('_APCAL_MB_APCALLINK_TO_RRULE1ST','Vai al primo evento ') ;
define('_APCAL_MB_APCALRRULE1ST','Questo è il primo evento') ;

define('_APCAL_MB_APCALEVENT_NOTREGISTER','Non Registrato') ;
define('_APCAL_MB_APCALEVENT_ADMITTED','Approvato') ;
define('_APCAL_MB_APCALEVENT_NEEDADMIT','In attesa di approvazione') ;

define('_APCAL_MB_APCALTITLE_EVENTINFO','Pianificazione eventi') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTDETAIL','Lista dettagliata') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTEDIT','Modifica') ;

define('_APCAL_MB_APCALHOUR_SUF',':') ;
define('_APCAL_MB_APCALMINUTE_SUF','') ;

define('_APCAL_MB_APCALORDER_ASC','ascendente') ;
define('_APCAL_MB_APCALORDER_DESC','discendente') ;
define('_APCAL_MB_APCALSORTBY','Ordina per:') ;
define('_APCAL_MB_APCALCURSORTEDBY','Eventi ordinati per:') ;

define("_APCAL_MB_APCALLABEL_CHECKEDITEMS","Gli eventi selezionati sono:");
define("_APCAL_MB_APCALLABEL_OUTPUTICS","da esportare in iCalendar");

define("_APCAL_MB_APCALICALSELECTPLATFORM","Seleziona la piattaforma");

define('_APCAL_TH_SUMMARY','Sommario') ;
define('_APCAL_TH_STARTDATETIME','DataOra Inizio') ;
define('_APCAL_TH_ENDDATETIME','DataOra Fine') ;
define('_APCAL_TH_ALLDAYOPTIONS','Opzioni di tutto-il-giorno') ;
define('_APCAL_TH_LOCATION','Luogo') ;
define('_APCAL_TH_CONTACT','Contatto') ;
define('_APCAL_TH_CATEGORIES','Categorie') ;
define('_APCAL_TH_SUBMITTER','Inviato da') ;
define('_APCAL_TH_CLASS','Tipologia') ;
define('_APCAL_TH_DESCRIPTION','Descrizione') ;
define('_APCAL_TH_RRULE','Ricorrenza') ;
define('_APCAL_TH_ADMISSIONSTATUS','Stato') ;
define('_APCAL_TH_LASTMODIFIED','Ultima modifica') ;

define('_APCAL_NTC_MONTHLYBYMONTHDAY','(Inserisci il numero)') ;
define('_APCAL_NTC_EXTRACTLIMIT','** Solo %s eventi sono estratti al massimo.') ;
define('_APCAL_NTC_NUMBEROFNEEDADMIT','(%s eventi da approvare)') ;

define('_APCAL_OPT_PRIVATEMYSELF','solo per me') ;
define('_APCAL_OPT_PRIVATEGROUP','gruppo %s') ;
define('_APCAL_OPT_PRIVATEINVALID','(gruppo invalido)') ;

define('_APCAL_MB_APCALOP_AFTER','Dopo') ;
define('_APCAL_MB_APCALOP_BEFORE','Prima') ;
define('_APCAL_MB_APCALOP_ON','il') ;
define('_APCAL_MB_APCALOP_ALL','tutto') ;

define('_APCAL_CNFM_SAVEAS_YN','Confermi salvataggio come un altro evento?') ;
define('_APCAL_CNFM_DELETE_YN','Confermi eliminazione di questo evento?') ;

define('_APCAL_ERR_INVALID_EVENT_ID','Errore: EventID non trovato') ;
define('_APCAL_ERR_NOPERM_TO_SHOW',"Errore: Non hai i privilegi per visualizzare") ;
define('_APCAL_ERR_NOPERM_TO_OUTPUTICS',"Errore: Non hai i privilegi per esportare iCalendar") ;
define('_APCAL_ERR_LACKINDISPITEM','L\'evento %s è vuoto.<br />Premi il pulsante \'indietro\' del browser!') ;

define('_APCAL_BTN_JUMP','Vai') ;
define('_APCAL_BTN_NEWINSERTED','Nuovo inserimento') ;
define('_APCAL_BTN_SUBMITCHANGES',' Modifica! ') ;
define('_APCAL_BTN_SAVEAS','Salva come') ;
define('_APCAL_BTN_DELETE','Cancella') ;
define('_APCAL_BTN_EDITEVENT','Modifica') ;
define('_APCAL_BTN_RESET','Reimposta') ;
define('_APCAL_BTN_OUTPUTICS_WIN','iCalendar(Win)') ;
define('_APCAL_BTN_OUTPUTICS_MAC','iCalendar(Mac)') ;
define('_APCAL_BTN_PRINT','Stampa') ;
define("_APCAL_BTN_IMPORT","Importa!");
define("_APCAL_BTN_UPLOAD","Upload!");
define("_APCAL_BTN_EXPORT","Esporta!");
define("_APCAL_BTN_EXTRACT","Estrai");
define("_APCAL_BTN_ADMIT","Approva");
define("_APCAL_BTN_MOVE","Muovi");
define("_APCAL_BTN_COPY","Copia");

define('_APCAL_RR_EVERYDAY','Tutti i giorni') ;
define('_APCAL_RR_EVERYWEEK','Tutte le settimane') ;
define('_APCAL_RR_EVERYMONTH','Tutti i mesi') ;
define('_APCAL_RR_EVERYYEAR','Tutti gli anni') ;
define('_APCAL_RR_FREQDAILY','Giornaliero') ;
define('_APCAL_RR_FREQWEEKLY','Settimanale') ;
define('_APCAL_RR_FREQMONTHLY','Mensile') ;
define('_APCAL_RR_FREQYEARLY','Annuale') ;
define('_APCAL_RR_FREQDAILY_PRE','Ogni') ;
define('_APCAL_RR_FREQWEEKLY_PRE','Ogni') ;
define('_APCAL_RR_FREQMONTHLY_PRE','Ogni') ;
define('_APCAL_RR_FREQYEARLY_PRE','Ogni') ;
define('_APCAL_RR_FREQDAILY_SUF','giorni') ;
define('_APCAL_RR_FREQWEEKLY_SUF','settimane') ;
define('_APCAL_RR_FREQMONTHLY_SUF','mesi') ;
define('_APCAL_RR_FREQYEARLY_SUF','anni') ;
define('_APCAL_RR_PERDAY','ogni %s giorni') ;
define('_APCAL_RR_PERWEEK','ogni %s settimane') ;
define('_APCAL_RR_PERMONTH','ogni %s mesi') ;
define('_APCAL_RR_PERYEAR','ogni %s anni') ;
define('_APCAL_RR_COUNT','<br />%s volte') ;
define('_APCAL_RR_UNTIL','<br />fino al %s') ;
define('_APCAL_RR_R_NORRULE','Non Ricorrente') ;
define('_APCAL_RR_R_YESRRULE','Ricorrente') ;
define('_APCAL_RR_OR','or') ;
define('_APCAL_RR_S_NOTSELECTED','-non selezionato-') ;
define('_APCAL_RR_S_SAMEASBDATE','Stessa della data di inizio') ;
define('_APCAL_RR_R_NOCOUNTUNTIL','Nessuna condizione di fine evento') ;
define('_APCAL_RR_R_USECOUNT_PRE','ripeti') ;
define('_APCAL_RR_R_USECOUNT_SUF','volte') ;
define('_APCAL_RR_R_USEUNTIL','fino al') ;

}

?>
