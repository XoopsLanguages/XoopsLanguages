<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_APCAL_LOADED' ) ) {





// Appended by Xoops Language Checker -GIJOE- in 2005-06-29 17:19:29
define('_AM_APCAL_PI_TH_OPTIONS','Options (usually blank)');
define('_AM_APCAL_COPYRIGHT' , '<a href="http://xoops.antiquespromotion.ca" title="Calendar for Xoops" target="_blank">APCal</a> by <a href="http://www.antiquespromotion.ca" title="Antiques Promotion Canada" target="_blank">AP</a>');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-24 19:05:05
define('_AM_APCAL_TZOPT_SERVER','As server timezone');
define('_AM_APCAL_TZOPT_GMT','As GMT');
define('_AM_APCAL_TZOPT_USER','As user\'s timezone');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-06 18:04:00
define('_AM_APCAL_FMT_SERVER_TZ_ALL','Timezone of the server (winter): %+2.1f<br />Timezone of the server (summer): %+2.1f<br />Zonename of the server: %s<br />The value of XOOPS config: %+2.1f<br />The value of APCal using: %+2.1f<br />');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:13
define('_AM_APCAL_FMT_SERVER_TZ_SYSTEM','Timezone in winter: %+2.1f');
define('_AM_APCAL_TH_SERVER_TZ_COUNT','Events');
define('_AM_APCAL_TH_SERVER_TZ_VALUE','Timezone');
define('_AM_APCAL_TH_SERVER_TZ_VALUE_TO','Changes (-14.0¡Á14.0)');
define('_AM_APCAL_JSALRT_SERVER_TZ','Don\'t forget backing-up events table before this operation');
define('_AM_APCAL_NOTICE_SERVER_TZ','If your server set the timezone area with summer time (=Day Light Saving) and some events were registerd in APCal 0.6x or 0.7x, dont\'t push this button.<br />eg) It is natural to display both -5.0 and -4.0 in EDT');
define('_AM_APCAL_MB_SUCCESSTZUPDATE','Events are modified with the timezone(s).');
define('_AM_APCAL_PI_UPDATED','Plugins are updated');
define('_AM_APCAL_PI_TH_TYPE','Type');
define('_AM_APCAL_PI_TH_TITLE','Title');
define('_AM_APCAL_PI_TH_DIRNAME','Module\'s dirname');
define('_AM_APCAL_PI_TH_FILE','Plugin file');
define('_AM_APCAL_PI_TH_DOTGIF','Dot GIF');
define('_AM_APCAL_PI_TH_OPERATION','Operation');
define('_AM_APCAL_PI_ENABLED','Enabled');
define('_AM_APCAL_PI_DELETE','Delete');
define('_AM_APCAL_PI_NEW','New');
define('_AM_APCAL_PI_VIEWYEARLY','Yearly View');
define('_AM_APCAL_PI_VIEWMONTHLY','Monthly View');
define('_AM_APCAL_PI_VIEWWEEKLY','Weekly View');
define('_AM_APCAL_PI_VIEWDAILY','Daily View');

define( '_AM_APCAL_LOADED' , 1 ) ;


// titles
define("_AM_APCAL_CONFIG","Configurazione di APCal");
define("_AM_APCAL_GENERALCONF","Impostazioni generali di APCal");
define("_AM_APCAL_ADMISSION","Eventi da approvare");
define("_AM_APCAL_MENU_EVENTS","Gestione Eventi");
define("_AM_APCAL_MENU_CATEGORIES","Gestione Categorie");
define("_AM_APCAL_MENU_CAT2GROUP","Permessi delle categorie");
define("_AM_APCAL_ICALENDAR_IMPORT","Importazione iCalendar");
define("_AM_APCAL_GROUPPERM","Permessi Globali");
define("_AM_APCAL_TABLEMAINTAIN","Manutenzione Tabella");
define("_AM_APCAL_MYBLOCKSADMIN","Amministrazione Blocchi&Gruppi");

// forms
define("_AM_APCAL_BUTTON_EXTRACT","Estrai");
define("_AM_APCAL_BUTTON_ADMIT","Approva");
define("_AM_APCAL_BUTTON_MOVE","Muovi");
define("_AM_APCAL_BUTTON_COPY","Copia");
define("_AM_APCAL_CONFIRM_DELETE","Eliminazione Eventi, OK?");
define("_AM_APCAL_CONFIRM_MOVE","Rimozione del link dalla categoria precedente e Inserimento del link alla categoria specificata, OK?");
define("_AM_APCAL_CONFIRM_COPY","Inserimento di un link alla categoria specificata, OK?");
define("_AM_APCAL_OPT_PAST","Passato");
define("_AM_APCAL_OPT_FUTURE","Futuro");
define("_AM_APCAL_OPT_PASTANDFUTURE","Passato&Futuro");

// format
define("_AM_APCAL_DTFMT_LIST_ALLDAY",'y-m-d');
define("_AM_APCAL_DTFMT_LIST_NORMAL",'y-m-d<\b\r />H:i');

// admission
define("_AM_APCAL_LABEL_ADMIT","Gli eventi selezionati sono: da approvare");
define("_AM_APCAL_MES_ADMITTED","Gli eventi sono stati approvati");
define("_AM_APCAL_ADMIT_TH0","Utente");
define("_AM_APCAL_ADMIT_TH1","Dataora Inizio");
define("_AM_APCAL_ADMIT_TH2","Dataora Fine");
define("_AM_APCAL_ADMIT_TH3","Titolo");
define("_AM_APCAL_ADMIT_TH4","Rrule");

// events manager & importing iCalendar

define("_AM_APCAL_LABEL_IMPORTFROMWEB","Importa iCalendar dal web (Inserisci l'URL preceduto da 'http://' o 'webcal://')");
define("_AM_APCAL_LABEL_UPLOADFROMFILE","Invia iCalendar (Seleziona un file dal tuo computer locale)");
define("_AM_APCAL_LABEL_IO_CHECKEDITEMS","Gli eventi selezionati sono:");
define("_AM_APCAL_LABEL_IO_OUTPUT","da esportare in iCalendar");
define("_AM_APCAL_LABEL_IO_DELETE","da eliminare");
define("_AM_APCAL_MES_EVENTLINKTOCAT","eventi sono stati collegati da questa categoria");
define("_AM_APCAL_MES_EVENTUNLINKED","collegamenti agli eventi sono stati rimossi dalla categoria precedente");
define("_AM_APCAL_FMT_IMPORTED","eventi sono stati importati da '%s'");
define("_AM_APCAL_MES_DELETED","eventi sono dati eliminati");
define("_AM_APCAL_IO_TH0","Utente");
define("_AM_APCAL_IO_TH1","Dataora Inizio");
define("_AM_APCAL_IO_TH2","Dataora Fine");
define("_AM_APCAL_IO_TH3","Titolo");
define("_AM_APCAL_IO_TH4","Rrule");
define("_AM_APCAL_IO_TH5","Approvazione");

// Group's Permissions
define( '_AM_APCAL_GPERM_G_INSERTABLE' , "Può inserire" ) ;
define( '_AM_APCAL_GPERM_G_SUPERINSERT' , "Super inserimento" ) ;
define( '_AM_APCAL_GPERM_G_EDITABLE' , "Può modificare" ) ;
define( '_AM_APCAL_GPERM_G_SUPEREDIT' , "Super modifica" ) ;
define( '_AM_APCAL_GPERM_G_DELETABLE' , "Può eliminare" ) ;
define( '_AM_APCAL_GPERM_G_SUPERDELETE' , "Super eliminazione" ) ;
define( '_AM_APCAL_GPERM_G_TOUCHOTHERS' , "Può intervenire sugli altri" ) ;
define( '_AM_APCAL_CAT2GROUPDESC' , "Seleziona le categorie a cui vuoi consentire l'accesso" ) ;
define( '_AM_APCAL_GROUPPERMDESC' , "Seleziona i permessi per ciascun gruppo <br />Per rendere attive queste impostazioni, seleziona prima 'Specificato nei Permessi di Gruppo' in Preferenze &gt; Permessi degli Utenti.<br />Le impostazioni dei gruppi 'Amministratori' e 'Ospiti' sono comunque ignorate." ) ;

// Table Maintenance
define( '_AM_APCAL_MB_SUCCESSUPDATETABLE' , "Aggiornamento tabelle avvenuto con successo" ) ;
define( '_AM_APCAL_MB_FAILUPDATETABLE' , "Aggiornamento tabelle fallito" ) ;
define( '_AM_APCAL_NOTICE_NOERRORS' , "Errore con le tabelle o i dati." ) ;
define( '_AM_APCAL_ALRT_CATTABLENOTEXIST' , "La tabella delle categorie non esiste.<br />\nVuoi creare la tabella?" ) ;
define( '_AM_APCAL_ALRT_OLDTABLE' , "La struttura della tabella degli eventi è obsoleta.<br />\nVuoi aggiornare la tabella?" ) ;
define( '_AM_APCAL_ALRT_TOOOLDTABLE' , "Si è verificato un errore nella tabella.<br />\nForse hai usato APCal 0.3x o precedente.<br />\nAggiorna alla versione 0.4x o 0.5x prima." ) ;
define( '_AM_APCAL_FMT_WRONGSTZ' , "Ci sono %s eventi registrati con un fuso orario errato.<br />Vuoi correggerli?" ) ;

// Categories
define( '_AM_APCAL_CAT_TH_TITLE' , 'Titolo' ) ;
define( '_AM_APCAL_CAT_TH_DESC' , 'Descrizione' ) ;
define( '_AM_APCAL_CAT_TH_PARENT' , 'Categoria Madre' ) ;
define( '_AM_APCAL_CAT_TH_OPTIONS' , 'Opzioni' ) ;
define( '_AM_APCAL_CAT_TH_LASTMODIFY' , 'Ultima Modifica' ) ;
define( '_AM_APCAL_CAT_TH_OPERATION' , 'Opzioni' ) ;
define( '_AM_APCAL_CAT_TH_ENABLED' , 'Abilita' ) ;
define( '_AM_APCAL_CAT_TH_WEIGHT' , 'Peso' ) ;
define( '_AM_APCAL_CAT_TH_SUBMENU' , 'inserisci nel sotto Menu' ) ;
define( '_AM_APCAL_BTN_UPDATE' , 'AGGIORNA' ) ;
define( '_AM_APCAL_MENU_CAT_EDIT' , 'Modifica la Categoria' ) ;
define( '_AM_APCAL_MENU_CAT_NEW' , 'Crea una nuova Categoria' ) ;
define( '_AM_APCAL_MB_MAKESUBCAT' , 'Sotto Categoria' ) ;
define( '_AM_APCAL_MB_MAKETOPCAT' , 'Crea una Categoria principale' ) ;
define( '_AM_APCAL_MB_CAT_INSERTED' , 'Nuova categoria creata' ) ;
define( '_AM_APCAL_MB_CAT_UPDATED' , 'Categoria aggiornata' ) ;
define( '_AM_APCAL_FMT_CAT_DELETED' , '%s Categorie eliminate' ) ;
define( '_AM_APCAL_FMT_CAT_BATCHUPDATED' , '%s Categorie aggiornate' ) ;
define( '_AM_APCAL_FMT_CATDELCONFIRM' , 'Vuoi eliminare la categoria %s ?' ) ;

}

?>
