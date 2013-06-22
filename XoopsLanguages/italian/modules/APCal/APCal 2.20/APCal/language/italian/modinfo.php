<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {






// Appended by Xoops Language Checker -GIJOE- in 2006-02-15 05:31:19
define('_MI_APCAL_ADMENU_MYTPLSADMIN','Templates');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-06 18:04:00
define('_MI_APCALTIMEZONE_USING','Timezone of the server');
define('_MI_APCALOPT_TZ_USEXOOPS','value of XOOPS config');
define('_MI_APCALOPT_TZ_USEWINTER','value told from the server as winter time (recommended)');
define('_MI_APCALOPT_TZ_USESUMMER','value told from the server as summer time');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:13
define('_MI_APCALUSE24HOUR','24hours system (No means 12hours system)');
define('_MI_APCAL_ADMENU_PLUGINS','Plugins Manager');

// Appended by Xoops Language Checker -GIJOE- in 2005-04-22 12:02:02
define('_MI_APCAL_BNAME_MINICALEX','MiniCalendarEx');
define('_MI_APCAL_BNAME_MINICALEX_DESC','Extensible minicalendar with plugin system');

// Appended by Xoops Language Checker -GIJOE- in 2005-01-08 04:36:50
define('_MI_APCAL_DEFAULTLOCALE','italia');
define('_MI_APCAL_LOCALE','Locale (controlla i file in locales/*.php)');

define( '_MI_APCAL_APCALLOADED' , 1 ) ;

// Module Info

// The name of this module
define("_MI_APCAL_NAME","APCal");

// A brief description of this module
define("_MI_APCAL_DESC","Modulo Calendario e Pianificazione eventi");

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL","CalendarioMini");
define("_MI_APCAL_BNAME_MINICAL_DESC","Mostra il calendarioMini nel blocco");
define("_MI_APCAL_BNAME_MONTHCAL","Calendario mensile");
define("_MI_APCAL_BNAME_MONTHCAL_DESC","Mostra il calendario mensile a grandezza piena");
define("_MI_APCAL_BNAME_TODAYS","Eventi di oggi");
define("_MI_APCAL_BNAME_TODAYS_DESC","Mostra gli eventi di oggi");
define("_MI_APCAL_BNAME_THEDAYS","Eventi del %s");
define("_MI_APCAL_BNAME_THEDAYS_DESC","Mostra gli eventi del giorno specificato");
define("_MI_APCAL_BNAME_COMING","Prossimi eventi");
define("_MI_APCAL_BNAME_COMING_DESC","Mostra prossimi eventi");
define("_MI_APCAL_BNAME_AFTER","Eventi dopo il %s");
define("_MI_APCAL_BNAME_AFTER_DESC","Mostra gli eventi dopo il giorno indicato");
define("_MI_APCAL_BNAME_NEW","Nuovi eventi inviati");
define("_MI_APCAL_BNAME_NEW_DESC","Mostra gli ultimi eventi inviati");

// Names of submenu
define("_MI_APCAL_SM_SUBMIT","Invia");

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCALUSERS_AUTHORITY", "Permessi degli Utenti");
define("_MI_APCALGUESTS_AUTHORITY", "Permessi degli ospiti");
define("_MI_APCALDEFAULT_VIEW", "Vista centrale predefinita");
define("_MI_APCALMINICAL_TARGET", "Vista per il calendarioMini");
define("_MI_APCALCOMING_NUMROWS", "Numero di eventi da visualizzare nel blocco 'Prossimi Eventi'");
define("_MI_APCALSKINFOLDER", "Nome della directory del tema");
define("_MI_APCALSUNDAYCOLOR", "Colore della Domenica");
define("_MI_APCALWEEKDAYCOLOR", "Colore dei feriali");
define("_MI_APCALSATURDAYCOLOR", "Colore del Sabato");
define("_MI_APCALHOLIDAYCOLOR", "Colore delle feste");
define("_MI_APCALTARGETDAYCOLOR", "Colore del giorno selezionato");
define("_MI_APCALSUNDAYBGCOLOR", "Colore di sfondo della Domenica");
define("_MI_APCALWEEKDAYBGCOLOR", "Colore di sfondo dei feriali");
define("_MI_APCALSATURDAYBGCOLOR", "Colore di sfondodel Sabato");
define("_MI_APCALHOLIDAYBGCOLOR", "Colore di sfondodelle feste");
define("_MI_APCALTARGETDAYBGCOLOR", "Colore di sfondodel giorno selezionato");
define("_MI_APCALCALHEADCOLOR", "Colore della testata del calendario");
define("_MI_APCALCALHEADBGCOLOR", "Colore di sfondo della testata del calendario");
define("_MI_APCALCALFRAMECSS", "Stile del bordo del calendario");
define("_MI_APCALCANOUTPUTICS", "Permessi di esportazione file ics");
define("_MI_APCALMAXRRULEEXTRACT", "Limite di eventi estratti da rrule. (COUNT)");
define("_MI_APCALWEEKSTARTFROM", "Inizio della settimana");
define("_MI_APCALWEEKNUMBERING", "Numerazione delle settimane");
define("_MI_APCALDAYSTARTFROM", "Ora limite per separare i giorni");
define("_MI_APCALNAMEORUNAME" , "Nome visualizzato" ) ;
define("_MI_APCALDESCNAMEORUNAME" , "Scegli quale 'nome' è visualizzato" ) ;

// Description of each config items
define("_MI_APCALEDITBYGUESTDSC", "Permessi degli ospiti di inserire eventi");

// Options of each config items
define("_MI_APCALOPT_AUTH_NONE", "non può inserire");
define("_MI_APCALOPT_AUTH_WAIT", "può inserire ma necessita approvazione");
define("_MI_APCALOPT_AUTH_POST", "puà inserire senza approvazione");
define("_MI_APCALOPT_AUTH_BYGROUP", "Speficificato nei permessi di gruppo");
define("_MI_APCALOPT_MINI_PHPSELF", "Pagina attuale");
define("_MI_APCALOPT_MINI_MONTHLY", "calendario mensile");
define("_MI_APCALOPT_MINI_WEEKLY", "calendario settimanale");
define("_MI_APCALOPT_MINI_DAILY", "calendario giornaliero");
define("_MI_APCALOPT_MINI_LIST", "lista eventi");
define("_MI_APCALOPT_CANOUTPUTICS", "può esportare");
define("_MI_APCALOPT_CANNOTOUTPUTICS", "non può esportare");
define("_MI_APCALOPT_STARTFROMSUN", "Domenica");
define("_MI_APCALOPT_STARTFROMMON", "Lunedì");
define("_MI_APCALOPT_WEEKNOEACHMONTH", "per ogni mese");
define("_MI_APCALOPT_WEEKNOWHOLEYEAR", "per l'intero anno");
define("_MI_APCALOPT_USENAME" , "Nickname" ) ;
define("_MI_APCALOPT_USEUNAME" , "Nome del Login" ) ;

// Admin Menus
define("_MI_APCAL_ADMENU0","Eventi da approvare");
define("_MI_APCAL_ADMENU1","Gestione Eventi");
define("_MI_APCAL_ADMENU_CAT","Gestione Categorie");
define("_MI_APCAL_ADMENU_CAT2GROUP","Permessi delle categorie");
define("_MI_APCAL_ADMENU2","Permessi Globali");
define("_MI_APCAL_ADMENU_TM","Manutenzione Tabella");
define("_MI_APCAL_ADMENU_ICAL","Importazione iCalendar");
define("_MI_APCAL_ADMENU_MYBLOCKSADMIN","Amministrazione Blocchi&Gruppi");

// Text for notifications
define('_MI_APCAL_GLOBAL_NOTIFY', 'Globale');
define('_MI_APCAL_GLOBAL_NOTIFYDSC', 'Opzioni globali di notifica APCal.');
define('_MI_APCAL_CATEGORY_NOTIFY', 'Categoria');
define('_MI_APCAL_CATEGORY_NOTIFYDSC', 'Opzioni di nofica per la categoria corrente.');
define('_MI_APCAL_EVENT_NOTIFY', 'Eventi');
define('_MI_APCAL_EVENT_NOTIFYDSC', 'Opzioni di notifica per l\'evento corrente.');

define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY', 'Nuovo evento');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP', 'Notifica quando un nuovo evento viene creato.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC', 'Ricevi notifica quando un nuovo evento viene creato.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica : Nuovo evento');

define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY', 'Nuovo Evento nella Categoria');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP', 'Notifica quando un nuovo evento è creato nella Categoria.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC', 'Ricevi notifica quando un nuovo evento è creato nella Categoria.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica : Nuovo Evento in {CATEGORY_TITLE}');

}

?>
