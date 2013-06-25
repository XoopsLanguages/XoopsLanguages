<?php


// admin.php italian version (alexcami@gmail.com)
// ALX051018 updated to 0.75 version
// ALX051103 updated to 0.77 version

//Menu choices
define('_AM_XHELP_ADMIN_TITLE','%s - Menu Amministrazione');
define('_AM_XHELP_BLOCK_TEXT','Amministra i Blocchi');
define('_AM_XHELP_MENU_MANAGE_DEPARTMENTS','Amministra Dipartimenti');
define('_AM_XHELP_MENU_MANAGE_STAFF','Amministra Staff');
define('_AM_XHELP_MENU_MODIFY_EMLTPL','Modifica Template delle Email');
define('_AM_XHELP_MENU_MODIFY_TICKET_FIELDS','Modifica  i campi dei ticket');
define('_AM_XHELP_MENU_GROUP_PERM','Permessi di Gruppo');
define('_AM_XHELP_MENU_MIMETYPES','Amministrazione Mimetype');
define('_AM_XHELP_MENU_PREFERENCES','Preferenze');
define('_AM_XHELP_MENU_ADD_STAFF','Aggiungi Staff');
define('_AM_XHELP_UPDATE_MODULE','Aggiorna Modulo');
define('_AM_XHELP_MENU_MANAGE_ROLES','Amministra Ruoli');

define('_AM_XHELP_SEC_TICKET_ADD', 0);
define('_AM_XHELP_SEC_TICKET_EDIT', 1);
define('_AM_XHELP_SEC_TICKET_DELETE', 2);
define('_AM_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_AM_XHELP_SEC_TICKET_STATUS', 4);
define('_AM_XHELP_SEC_TICKET_PRIORITY', 5);
define('_AM_XHELP_SEC_TICKET_LOGUSER', 6);
define('_AM_XHELP_SEC_RESPONSE_ADD', 7);
define('_AM_XHELP_SEC_RESPONSE_EDIT', 8);

define('_AM_XHELP_SEC_TEXT_TICKET_ADD','Inserisci Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_EDIT','Modifica Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_DELETE','Cancella Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_OWNERSHIP','Cambia Incaricato');
define('_AM_XHELP_SEC_TEXT_TICKET_STATUS','Cambia stato ticket');
define('_AM_XHELP_SEC_TEXT_TICKET_PRIORITY','Cambia priorita\' ticket');
define('_AM_XHELP_SEC_TEXT_TICKET_LOGUSER','Inserisci ticket per utente');
define('_AM_XHELP_SEC_TEXT_RESPONSE_ADD','Inserisci risposta');
define('_AM_XHELP_SEC_TEXT_RESPONSE_EDIT','Modifica risposta');

//Permissions
define('_AM_XHELP_GROUP_PERM','Permessi di gruppo');
define('_AM_XHELP_GROUP_PERM_TITLE','Modifica permessi di gruppo');
define('_AM_XHELP_GROUP_PERM_NAME','Permessi');
define('_AM_XHELP_GROUP_PERM_DESC','Seleziona servizio(i) che ogni gruppo potra\' modificare');

// Messages
define('_AM_XHELP_MESSAGE_STAFF_UPDATE_ERROR','Errore: staff non aggiornato');
define('_AM_XHELP_MESSAGE_FILE_READONLY','Questo file e\' di sola lettura. Modifica la directory \'modules/xhelp/language/italian/mail_templates\'');
define('_AM_XHELP_MESSAGE_FILE_UPDATED','File aggiornato');
define('_AM_XHELP_MESSAGE_FILE_UPDATED_ERROR','Errore: file non aggiornato');
define('_AM_XHELP_MESSAGE_ROLE_INSERT','Ruolo inserito.');
define('_AM_XHELP_MESSAGE_ROLE_INSERT_ERROR','Errore: ruolo non creato.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE','Ruolo cancellato.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE_ERROR','Errore: ruolo non cancellato.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE','Ruolo aggiornato.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE_ERROR','Errore: ruolo non aggiornato.');
define('_AM_XHELP_MESSAGE_DEPT_STORE','Permessi di dipartimento aggiornati.');
define('_AM_XHELP_MESSAGE_DEPT_STORE_ERROR','Errore: Permessi di dipartimento non aggiornati.');
define('_AM_XHELP_MESSAGE_DEF_ROLES','Sono stati impostati i permessi predefiniti.');
define('_AM_XHELP_MESSAGE_DEF_ROLES_ERROR','I permessi predefiniti non sono stati aggiunti.');

// Buttons
define('_AM_XHELP_BUTTON_DELETE','Cancella');
define('_AM_XHELP_BUTTON_EDIT','Modifica');
define('_AM_XHELP_BUTTON_SUBMIT','Inserisci');
define('_AM_XHELP_BUTTON_RESET','Reimposta');
define('_AM_XHELP_BUTTON_ADDSTAFF','Aggiungi Staff');
define('_AM_XHELP_BUTTON_UPDATESTAFF','Modifica Staff');
define('_AM_XHELP_BUTTON_CANCEL','Cancella');
define('_AM_XHELP_BUTTON_UPDATE','Aggiorna');
define('_AM_XHELP_BUTTON_CREATE_ROLE','Crea Nuovo Ruolo');
define('_AM_XHELP_BUTTON_CLEAR_PERMS','Cancella Autorizzazioni');
//define('_AM_XHELP_BUTTON_ADD_DEPT','Add Department');

define('_AM_XHELP_EDIT_DEPARTMENT','Modifica Dipartimento');
define('_AM_XHELP_EXISTING_DEPARTMENTS','Dipartimenti esistenti:');
define('_AM_XHELP_MANAGE_DEPARTMENTS','Modifica Dipartimenti');
define('_AM_XHELP_MANAGE_STAFF','Modifica Staff');
define('_AM_XHELP_EXISTING_STAFF','Membri di staff esistenti:');
define('_AM_XHELP_ADD_STAFF','Aggingi membri di Staff');
define('_AM_XHELP_EDIT_STAFF','Modifica Membri di Staff');
define('_AM_XHELP_INDEX','Indice'); //Index
define('_AM_XHELP_ADMIN_GOTOMODULE','Vai al Modulo');
define('_AM_XHELP_DEPARTMENT_SERVERS','Mailbox di dipartimento');
define('_AM_XHELP_DEPARTMENT_SERVERS_EMAIL','Indirizzo Email');
define('_AM_XHELP_DEPARTMENT_SERVERS_TYPE','Tipo Mailbox');
define('_AM_XHELP_DEPARTMENT_SERVERS_PRIORITY','Priorita\' predefinita');
define('_AM_XHELP_DEPARTMENT_SERVERS_SERVERNAME','Server');
define('_AM_XHELP_DEPARTMENT_SERVERS_PORT','Porta');
define('_AM_XHELP_DEPARTMENT_SERVERS_ACTION','Azioni');
define('_AM_XHELP_DEPARTMENT_ADD_SERVER','Aggiungi Mailbox da controllare');
define('_AM_XHELP_DEPARTMENT_SERVER_USERNAME','Username');
define('_AM_XHELP_DEPARTMENT_SERVER_PASSWORD','Password');
define('_AM_XHELP_DEPARTMENT_SERVER_EMAILADDRESS','Reply-To Email Address');
define('_AM_XHELP_DEPARTMENT_NO_ID','Non trovo l\'ID del dipartimento. Interrotto.');
define('_AM_XHELP_DEPARTMENT_SERVER_SAVED','Aggiunta mailbox al Dipartimento.');
define('_AM_XHELP_DEPARTMENT_SERVER_ERROR','Errore salvando la Mailbox per il Dipartimento.');
define('_AM_XHELP_DEPARTMENT_SERVER_NO_ID','Mailbox di dipartimento non specificata.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETED','Cancella mailbox dal dipartimento.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETE_ERROR','Errore di cancellazione Mailbox dal dipartimento.');
define('_AM_XHELP_STAFF_ERROR_DEPTARTMENTS','Devi assegnare un utente ad 1 opiù dipartimenti prima di salvare');
define('_AM_XHELP_STAFF_ERROR_ROLES','Devi assegnare un utente ad 1 o piu\' ruoli prima di salvare');

define('_AM_XHELP_MBOX_POP3','POP3');
define('_AM_XHELP_MBOX_IMAP','IMAP');

define('_AM_XHELP_TEXT_ADD_DEPT','Aggiungi Dipartimento:');
define('_AM_XHELP_TEXT_EDIT_DEPT','Modifica nome dipartimento:');
define('_AM_XHELP_TEXT_EDIT','Modifica');
define('_AM_XHELP_TEXT_DELETE','Cancella');
define('_AM_XHELP_TEXT_SELECTUSER','Seleziona Nome Utente:');
define('_AM_XHELP_TEXT_DEPARTMENTS','Dipartimenti:');
define('_AM_XHELP_TEXT_USER','Nome Utente:');
define('_AM_XHELP_TEXT_ALL_DEPTS','Tutti');
define('_AM_XHELP_TEXT_NO_DEPTS','Nessuno');
define('_AM_XHELP_TEXT_MAKE_DEPTS','Devi aggiungere i dipartimenti prima di aggiungere lo staff!');
define('_AM_XHELP_LINK_ADD_DEPT','Aggiungi Dipartimenti');
define('_AM_XHELP_TEXT_TOP_CLOSERS','Migliori \'Closers\'');
define('_AM_XHELP_TEXT_WORST_CLOSERS','Peggiori \'Closers\'');
define('_AM_XHELP_TEXT_HIGH_PRIORITY','Tickets aperti ad alta priorita\'');
define('_AM_XHELP_TEXT_NO_OWNER','Nessun Incaricato'); // No Owner
define('_AM_XHELP_TEXT_NO_DEPT','Nessun Dipartimento');
define('_AM_XHELP_TEXT_RESPONSE_TIME','Tempo di risposta piu\' veloce');
define('_AM_XHELP_TEXT_RESPONSE_TIME_SLOW','Tempo di risposta piu\' lento');
define('_AM_XHELP_TEXT_PRIORITY','Priorita\':');
define('_AM_XHELP_TEXT_ELAPSED','Trascorso:');
define('_AM_XHELP_TEXT_STATUS','Stato:');
define('_AM_XHELP_TEXT_SUBJECT','Oggetto:');
define('_AM_XHELP_TEXT_DEPARTMENT','Dipartimento:');
define('_AM_XHELP_TEXT_OWNER','Incaricato:');
define('_AM_XHELP_TEXT_LAST_UPDATED','Ultimo aggiornamento:');
define('_AM_XHELP_TEXT_LOGGED_BY','Registrato da:');
define('_AM_XHELP_TEXT_EXISTING_ROLES','Ruoli esistenti');
define('_AM_XHELP_TEXT_NO_ROLES','Nessun Ruolo Trovato');
define('_AM_XHELP_TEXT_ROLES','Ruoli:');
define('_AM_XHELP_TEXT_CREATE_ROLE','Crea Nuovo Ruolo');
define('_AM_XHELP_TEXT_EDIT_ROLE','Modifica Ruolo');
define('_AM_XHELP_TEXT_NAME','Nome:');
define('_AM_XHELP_TEXT_PERMISSIONS','Autorizzazioni:');
define('_AM_XHELP_TEXT_SELECT_ALL','Seleziona tutti');
define('_AM_XHELP_TEXT_DEPT_PERMS','Personalizza Autorizzazioni di Dipartimento');
define('_AM_XHELP_TEXT_CUSTOMIZE','Personalizza');
define('_AM_XHELP_TEXT_ACTIONS','Azioni:');
define('_AM_XHELP_TEXT_ID','ID:');
define('_AM_XHELP_TEXT_LOOKUP_USER','Trova utente');
define('_AM_XHELP_SEARCH_BEGINEGINDATE','Data inizio:');
define('_AM_XHELP_SEARCH_ENDDATE','Data fine:');

define('_AM_XHELP_TEXT_MAIL_EVENTS','Eventi Posta');
define('_AM_XHELP_TEXT_MAILBOX','Mailbox:');
define('_AM_XHELP_TEXT_EVENT_CLASS','Eventi Classi:');
define('_AM_XHELP_TEXT_TIME','Ora:');
define('_AM_XHELP_NO_EVENTS','Nessun Evento Trovato');
define('_AM_XHELP_SEARCH_EVENTS','Cerca Eventi di Posta');
define('_AM_XHELP_BUTTON_SEARCH','Cerca');


// Mimetypes
define("_AM_XHELP_MIME_ID","ID");  // ID
define("_AM_XHELP_MIME_EXT","EXT"); //EXT
define("_AM_XHELP_MIME_NAME","Tipo Applicazione");
// define("_AM_XHELP_MIME_ADMIN","Amministratore"); // Admin
define("_AM_XHELP_MIME_USER","Utente");   // User
// Mimetype Form
define("_AM_XHELP_MIME_CREATEF","Crea Mimetype");
define("_AM_XHELP_MIME_MODIFYF","Modifica Mimetype");
define("_AM_XHELP_MIME_EXTF","Estensione file:");
//
define("_AM_XHELP_MIME_NAMEF","Tipo Applicazione/Nome:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Inserisci l'applicazione associata a questa estensione.</span></div>");
//
define("_AM_XHELP_MIME_TYPEF","Mimetypes:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Inserisci ogni mimetype associato alla estensione file. Ogni mimetype deve essere separato con uno spazio.</span></div>");
//
define("_AM_XHELP_MIME_ADMINF","Mimetype consentiti ad Amministratore");
define("_AM_XHELP_MIME_ADMINFINFO","<b>Mimetypes che sono disponibili per uploads dell'amministratore:</b>");
define("_AM_XHELP_MIME_USERF","Mimetype consentiti ad Utente");
define("_AM_XHELP_MIME_USERFINFO","<b>Mimetypes che sono disponibili per uploads dell'utente:</b>");
define("_AM_XHELP_MIME_NOMIMEINFO","Nessun mimetypes selezionato.");
// define("_AM_XHELP_MIME_FINDMIMETYPE","Trova nuovo Mimetype:");
define("_AM_XHELP_MIME_EXTFIND","Cerca Estensione File:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Inserisci l'estensione che vuoi cercare.</span></div>");
define("_AM_XHELP_MIME_INFOTEXT","<ul><li>Tramite questo form &egrave possibile creare, modificare o cancellare facilmente i mimetypes.</li>
	<li>Cerca nuovi mimetypes attraverso un sito web esterno.</li> 
	<li>Vedi i mimetypes visualizzati per l'upload di Amministratore e Utente.</li> 
	<li>Cambia lo stato dei mimetype per l'upload.</li></ul> 
	");

// Mimetype Buttons
define("_AM_XHELP_MIME_CREATE","Crea");
define("_AM_XHELP_MIME_CLEAR","Reset");
define("_AM_XHELP_MIME_CANCEL","Annulla"); //Cancel
define("_AM_XHELP_MIME_MODIFY","Modifica");
define("_AM_XHELP_MIME_DELETE","Cancella");
define("_AM_XHELP_MIME_FINDIT","Trova Estensione!");
// Mimetype Database
define("_AM_XHELP_MIME_DELETETHIS","Cancella i Mimetype selezionati?");
define("_AM_XHELP_MIME_MIMEDELETED","Il Mimetype %s e\' stato cancellato");
define("_AM_XHELP_MIME_CREATED","Informazioni Mimetype Create");
define("_AM_XHELP_MIME_MODIFIED","Information Mimetype Modificate");

define("_AM_XHELP_MINDEX_ACTION","Azione");
define("_AM_XHELP_MINDEX_PAGE","<b>Pagina:</b> ");

//image admin icon
define("_AM_XHELP_ICO_EDIT","Modifica questo articolo");
define("_AM_XHELP_ICO_DELETE","Cancella questo articolo");
define("_AM_XHELP_ICO_ONLINE","Online");
define("_AM_XHELP_ICO_OFFLINE","Offline");
define("_AM_XHELP_ICO_APPROVED","Approvato");
define("_AM_XHELP_ICO_NOTAPPROVED","Non Approvato");

define("_AM_XHELP_ICO_LINK","Link Correlati");
define("_AM_XHELP_ICO_URL","Inserisci URL Correlati");
define("_AM_XHELP_ICO_ADD","Inserisci");
define("_AM_XHELP_ICO_APPROVE","Approva");
define("_AM_XHELP_ICO_STATS","Stato");

define("_AM_XHELP_ICO_IGNORE","Ignora");
define("_AM_XHELP_ICO_ACK","Broken Report Acknowledged"); // *** WORKHERE ***
define("_AM_XHELP_ICO_REPORT","Acknowledge Broken Report?"); // *** WORKHERE ***
define("_AM_XHELP_ICO_CONFIRM","Broken Report Confirmed"); // *** WORKHERE ***
define("_AM_XHELP_ICO_CONBROKEN","Confirm Broken Report?"); // *** WORKHERE ***

define("_AM_XHELP_UPLOADFILE","Upload del file completeato");
define('_AM_XHELP_TEXT_TICKET_INFO','Informationi Ticket');
define('_AM_XHELP_TEXT_OPEN_TICKETS','Tickets aperti');
define('_AM_XHELP_TEXT_HOLD_TICKETS','Tickets congelati');
define('_AM_XHELP_TEXT_CLOSED_TICKETS','Tickets chiusi');
define('_AM_XHELP_TEXT_TOTAL_TICKETS','Tickets totali');

define('_AM_XHELP_TEXT_TEMPLATE_NAME','Nome Template:');
define('_AM_XHELP_TEXT_DESCRIPTION','Descrizione:');
define('_AM_XHELP_TEXT_GENERAL_TAGS','Tags Correnti');
define('_AM_XHELP_TEXT_GENERAL_TAGS1','X_SITEURL - URL del sito');
define('_AM_XHELP_TEXT_GENERAL_TAGS2','X_SITENAME - nome del sito');
define('_AM_XHELP_TEXT_GENERAL_TAGS3','X_ADMINMAIL - indirizzo email dell\'amministratore');
define('_AM_XHELP_TEXT_GENERAL_TAGS4','X_MODULE - nome del modulo');
define('_AM_XHELP_TEXT_GENERAL_TAGS5','X_MODULE_URL - link alla index page del modulo');
define('_AM_XHELP_TEXT_TAGS_NO_MODIFY','Non modificare i tags diversi da questi in lista!');

define('_AM_XHELP_CURRENTVER','Version Corrente: <span class="currentVer">%s</span>');
define('_AM_XHELP_DBVER','Versione Database: <span class="dbVer">%s</span>');
define('_AM_XHELP_DB_NOUPDATE','Il tuo database e\' aggiornato. Non sono necessari aggiornamenti.');
define('_AM_XHELP_DB_NEEDUPDATE','Il tuo databse e\' scaduto. Aggiorna le tabelle del tuo database!');
define('_AM_XHELP_UPDATE_NOW','Aggiorna Ora!');
define('_AM_XHELP_DB_NEEDINSTALL','Il tuo database non e\' sincronizzato con la versione installata. Installa la stessa versione del database');

define('_AM_XHELP_VERSION_ERR','Non e\' possibile determinare la precedente versione.');
define('_AM_XHELP_MSG_MODIFYTABLE','Modificata la tablella table %s');
define('_AM_XHELP_MSG_MODIFYTABLE_ERR','Errore modificando la tabella %s');
define('_AM_XHELP_MSG_ADDTABLE','Aggiunta la tabella %s');
define('_AM_XHELP_MSG_ADDTABLE_ERR','Errore aggiungendo la tabella %s');
define('_AM_XHELP_MSG_UPDATESTAFF','Aggiornato staff #%s');
define('_AM_XHELP_MSG_UPDATESTAFF_ERR','Errore aggiornando staff #%s');
define('_AM_XHELP_UPDATE_DB','Aggiornamento Database:');
define('_AM_XHELP_UPDATE_TO','Aggiornamento alla versione %s:');
define('_AM_XHELP_UPDATE_OK','Aggiornamento alla versione %s completato');
define('_AM_XHELP_UPDATE_ERR','Errori di aggiornamento alla versione %s');
define('_AM_XHELP_MSG_UPD_PERMS','Aurotizzazioni di Staff #%s aggiunte al dipartimento %s.');
define('_AM_XHELP_MSG_REMOVE_TABLE','Tabella %s rimossa dal database.');
define('_AM_XHELP_MSG_GLOBAL_PERMS','Staff #%s ha autorizzazioni globali.');
define('_AM_XHELP_MSG_NOT_REMOVE_TABLE','Errore: la tabella %s NON e\' stata rimossa dal tuo database.');
define('_AM_XHELP_MSG_RENAME_TABLE','La tabella %s e\' stata rinominata %s.');
define('_AM_XHELP_MSG_RENAME_TABLE_ERR','Errore: tabella %s non e\' stata rinominata.');

//news in 0.75 version
define('_AM_XHELP_ADMIN_ABOUT','Info su'); //About
define('_AM_XHELP_TEXT_CONTRIB_INFO','Contributor Information'); //Contributor Information
define('_AM_XHELP_TEXT_DEVELOPERS','Sviluppatori:');
define('_AM_XHELP_TEXT_TRANSLATORS','Traduttori:');
define('_AM_XHELP_TEXT_TESTERS','Addetti ai Test:');
define('_AM_XHELP_TEXT_DOCUMENTER','Documentatori:');
define('_AM_XHELP_TEXT_MODULE_DEVELOPMENT','Module Development Information'); // Module Development Information
define('_AM_XHELP_TEXT_DEMO_SITE','Sito Demo:');
define('_AM_XHELP_DEMO_SITE','Sito Demo 3Dev');
define('_AM_XHELP_TEXT_OFFICIAL_SITE','Sito ufficiale di supporto:');
define('_AM_XHELP_OFFICIAL_SITE','3Dev.org');
define('_AM_XHELP_TEXT_REPORT_BUG','Trovato un bug?'); // Got a bug
define('_AM_XHELP_REPORT_BUG','Segnala un Bug');
define('_AM_XHELP_TEXT_NEW_FEATURE','Nuova funzionalit&agrave?');
define('_AM_XHELP_NEW_FEATURE','Richiedi Nuova Funzione');
define('_AM_XHELP_TEXT_QUESTIONS','Domande?');
define('_AM_XHELP_QUESTIONS','Fai una domanda agli sviluppatori del modulo');
define('_AM_XHELP_TEXT_RELEASE_DATE','Data di Rilascio:');
define('_AM_XHELP_TEXT_DISCLAIMER','Clausola di esonero'); //Disclaimer
define('_AM_XHELP_DISCLAIMER','ATTENZIONE: Questo modulo e\' ancora in stato di lavorazione \'Beta\'. Non dovrebbe essere utilizzato in ambiente di produzione. Gli sviluppatori non sono responsabili per l\'uso improprio di questo modulo e per ogni problema derivante dall\'uso del modulo stesso.');
define('_AM_XHELP_TEXT_CHANGELOG','Elenco modifiche (Change Log)'); // Change Log
define('_AM_XHELP_TEXT_EDIT_DEPT_PERMS','Department Visibility:'); // Department Visibility


define('_AM_XHELP_SEC_TICKET_MERGE', 9);
define('_AM_XHELP_SEC_TEXT_TICKET_MERGE','Unione Tickets'); // Merge Tickets
define('_AM_XHELP_MSG_UPDATE_ROLE','%s autorizzazioni aggiornate.');
define('_AM_XHELP_MSG_UPDATE_ROLE_ERR','Errore: %s autorizzazioni non aggiornate.');

define('_AM_XHELP_TEXT_ADD_STATUS','Aggiungi Stato');
define('_AM_XHELP_TEXT_STATE','Stato:'); // State
define('_AM_XHELP_MESSAGE_NO_DESC','Errore: non hai specificato una descrizione.');
define('_AM_MESSAGE_ADD_STATUS_ERR','Errore: stato non aggiunto.');
define('_AM_XHELP_TEXT_MANAGE_STATUSES','Gestisci gli stati');
define('_AM_XHELP_TEXT_EDIT_STATUS','Modifica Stato');
define('_AM_MESSAGE_EDIT_STATUS_ERR','Errore: stato non modificato.');
define('_AM_XHELP_DEL_STATUS_ERR','Error: stato non cancellato.');
define('_AM_XHELP_MSG_ADD_STATUS_ERR','Errore: lo stato \'%s\' non e\' stato aggiunto.');
define('_AM_XHELP_MSG_ADD_STATUS','lo stato \'%s\' e\' stato aggiunto.');
define('_AM_XHELP_MSG_CHANGED_STATUS','I Ticket sono stati aggiornati con il nuovo stato.');
define('_AM_XHELP_MSG_CHANGED_STATUS_ERR','Errore: gli stati del ticket non sono stati aggiornati.');

//define('_AM_XHELP_TEXT_CODE','Codice:');
define('_AM_XHELP_POSITION','Posizione');
//define('_AM_XHELP_SEARCH_BEGINEGINDATE','Inizio Data:');
//define('_AM_XHELP_SEARCH_ENDDATE','Fine Data:');

define('_AM_XHELP_SEC_FILE_DELETE', 10);
define('_AM_XHELP_SEC_TEXT_FILE_DELETE','Cancella files allegati');
define('_AM_XHELP_TEXT_MANAGE_FILES','Gestisci i files');
define('_AM_XHELP_TEXT_TICKETID','Ticket ID:');
define('_AM_XHELP_TEXT_FILENAME','Nome file:');
define('_AM_XHELP_TEXT_MIMETYPE','Mimetype:');

define('_AM_XHELP_TEXT_TOTAL_USED_SPACE','Spazio totale usato');
define('_AM_XHELP_TEXT_SIZE','Dimensione:');
define('_AM_XHELP_MSG_DELETE_RESOLVED','Sei sicuro di voler RIMUOVERE gli allegati da tutti i tickets chiusi?'); // *** ??? ***
define('_AM_XHELP_TEXT_DELETE_RESOLVED','Cancella allegati dai ticket chiusi?'); // *** ??? ***
define('_AM_XHELP_TEXT_NO_FILES','Nessun file trovato');
define('_AM_XHELP_TEXT_RESOLVED_ATTACH','Allegati relativi a ticket chiusi:'); // *** ??? ***
define('_AM_XHELP_TEXT_ALL_ATTACH','Tutti gli allegati:');

define('_AM_XHELP_MESSAGE_ACTIVATE','Attiva');
define('_AM_XHELP_MESSAGE_DEACTIVATE','Disattiva');

define('_AM_XHELP_BUTTON_TEST','Test');

define('_AM_XHELP_MSG_DELETE_FILE','Sei sicuro di voler rimuovere questo allegato?');

define('_AM_XHELP_TEXT_BY','a cura di'); // By
define('_AM_XHELP_TEXT_CODE','Patches:');

define('_AM_XHELP_TEXT_ACTIVE','Active'); // Active
define('_AM_XHELP_TEXT_INACTIVE','In-Active'); // In-Active
define('_AM_XHELP_TEXT_ACTIVITY','Activity'); // Activity
define('_AM_XHELP_DEPARTMENT_EDIT_SERVER','Aggiorna Mailbox di Dipartimento');

define('_AM_XHELP_MSG_ADD_CONFIG_ERR','Error: configuration value for department was not saved'); // *** ??? ***

define('_AM_XHELP_MSG_UPDATE_CONFIG_ERR','Error: configuration value for department was not updated'); // *** ??? ***
// define('_AM_XHELP_TEXT_CONTROLTYPE','Tipo Controllo');
// define('_AM_XHELP_TEXT_REQUIRED','Rischiesto');

define('_AM_XHELP_TEXT_MANAGE_FIELDS','Gestisci Campi Personalizzati');

define('_AM_XHELP_TEXT_MAINTENANCE','Maintenance Tasks'); // *** ??? ***
define('_AM_XHELP_TEXT_ORPHANED','Rimuovi i record di staff orfani dalla tabella xhelp_staff?');
define('_AM_XHELP_MSG_CLEAR_ORPHANED_ERR','I tuoi record di staff sono aggiornati.');

define('_AM_XHELP_TEXT_DELETE_STAFF_DEPT','Rimuovi staff dal dipartimento');
define('_AM_XHELP_MSG_NO_DEPTID','Errore: nessun id dipartimento specificato.');
define('_AM_XHELP_MSG_NO_UID','Errore: nessun utente specificato.');
define('_AM_XHELP_MSG_REMOVE_STAFF_DEPT_ERR','Errore: staff non e\' stato rimosso dal dipartimento.');

define('_AM_XHELP_ADD_FIELD','Aggiungi Campo personalizzato');
define('_AM_XHELP_TEXT_FIELDNAME','Nome Campo:');
define('_AM_XHELP_TEXT_CONTROLTYPE','Tipo controllo:');
define('_AM_XHELP_TEXT_REQUIRED','Immissione obbligatoria:');
define('_AM_XHELP_TEXT_REQUIRED_DESC','Deve essere richiesto questo campo durante l\'aggiunta di un ticket?');
define('_AM_XHELP_TEXT_DATATYPE','Tipo dati:');
define('_AM_XHELP_TEXT_WEIGHT','Peso:');
define('_AM_XHELP_TEXT_FIELDVALUES','Lista di valori per il campo:');
define('_AM_XHELP_TEXT_FIELDVALUES_DESC','*** Placeholder: need description text'); // *** Placeholder: need description text
define('_AM_XHELP_TEXT_DEFAULTVALUE','Valore di default:');
define('_AM_XHELP_TEXT_LENGTH','Lunghezza:');

define('_XHELP_CONTROL_DESC_TXTBOX','Text Box');
define('_XHELP_CONTROL_DESC_TXTAREA','Multi-line Text Box');
define('_XHELP_CONTROL_DESC_SELECT','Select Box');
define('_XHELP_CONTROL_DESC_MULTISELECT','Multi-Select Box');
define('_XHELP_CONTROL_DESC_YESNO','Yes / No');
define('_XHELP_CONTROL_DESC_CHECKBOX','Checkbox');
define('_XHELP_CONTROL_DESC_RADIOBOX','Radiobox');
define('_XHELP_CONTROL_DESC_DATETIME','Date+Time');
define('_XHELP_CONTROL_DESC_FILE','File');

define('_XHELP_DATATYPE_TEXT','Testo');
define('_XHELP_DATATYPE_NUMBER_INT','Numero (Intero)');
define('_XHELP_DATATYPE_NUMBER_DEC','Numero (Decimale)');

define('_AM_XHELP_MSG_FIELD_DEL_CFRM','Sei sicuro di voler rimuovere il campo #%u?');

define('_AM_XHELP_MESSAGE_NO_ID','Errore: id non specificato.');
define('_AM_XHELP_MESSAGE_NO_VALUE','Errore: \'mimetype\' non specificato.');
define('_AM_XHELP_MESSAGE_EDIT_MIME_ERROR','Errore: \'mimetype\' non aggiornato.');
define('_AM_XHELP_MESSAGE_DELETE_MIME_ERROR','Errore: \'mimetype\' non cancellato.');
define('_AM_XHELP_MESSAGE_ADD_MIME_ERROR','Errore: \'mimetype\' not aggiunto.');
define('_AM_XHELP_TEXT_ASCENDING','Crescente');
define('_AM_XHELP_TEXT_DESCENDING','Descescente');
define('_AM_XHELP_TEXT_SORT_BY','Ordinato per:');
define('_AM_XHELP_TEXT_ORDER_BY','Ordinato per:');
define('_AM_XHELP_TEXT_NUMBER_PER_PAGE','Numero per pagina:');
define('_AM_XHELP_TEXT_SEARCH_MIME','Cerca Mimetypes');
define('_AM_XHELP_TEXT_SEARCH_BY','Cerca per:');
define('_AM_XHELP_TEXT_NO_RECORDS','Nessun Record Trovato');
define('_AM_XHELP_TEXT_GO_BACK_SEARCH','Ritorna lla ricerca');
define('_AM_XHELP_TEXT_SEARCH_TEXT','Ricerca Testo:');

define("_AM_XHELP_MIME_FINDMIMETYPE","Cerca Nuovo \'Mimetype\'");
define("_AM_XHELP_MIME_ADMIN","Staff");

define('_AM_XHELP_EDIT_FIELD','Modify Custom Field');
define('_AM_XHELP_TEXT_VALIDATION','Validation:');
define('_AM_XHELP_TEXT_REGEX_CUSTOM','Custom');
define('_AM_XHELP_TEXT_REGEX_USPHONE','Phone Number');
define('_AM_XHELP_TEXT_REGEX_USZIP','US Zip + 4');
define('_AM_XHELP_TEXT_REGEX_EMAIL','Email Address');

define('_AM_XHELP_VALID_ERR_CONTROLTYPE','Tipo di controllo selezionato non valido.');
define('_AM_XHELP_TEXT_SESSION_RESET','Correggi errori');
define('_AM_XHELP_VALID_ERR_NAME','Nome non impostato');
define('_AM_XHELP_VALID_ERR_FIELDNAME','Nome Campo non impostato');
define('_AM_XHELP_VALID_ERR_FIELDNAME_UNIQUE','Nome Campo deve essere univoco');
define('_AM_XHELP_VALID_ERR_LENGTH','Lunghezza deve essere un valore numerico compreso tra %u e %u');
define('_AM_XHELP_VALID_ERR_DEFAULTVALUE','Il valore di Default deve essere nella lista opzioni');
define('_AM_XHELP_VALID_ERR_VALUE_LENGTH','Il valore "%s" e\' piu\' grande della lunghezza campo, %u caratteri');
define('_AM_XHELP_VALID_ERR_VALUE','You must supply a value set for this field');
define('_AM_XHELP_MSG_FIELD_ADD_OK','Campo aggiunto con successo');
define('_AM_XHELP_MSG_FIELD_ADD_ERR','Errori durante l\'aggiunta del campo');
define('_AM_XHELP_MSG_FIELD_UPD_OK','Campo aggiornato con successo');
define('_AM_XHELP_MSG_FIELD_UPD_ERR','Errori durante l\'aaggiornamento del campo');
define('_AM_XHELP_MSG_SUBMISSION_ERR','Richiesta errata. Controlla e Riprova');

define('_AM_XHELP_TEXT_DEFAULT_STATUS','Stato di Default');

define('_AM_XHELP_VALID_ERR_MIME_EXT','Estensione file non impostata');
define('_AM_XHELP_VALID_ERR_MIME_NAME','Tipo/nome Applicazione non impostata');
define('_AM_XHELP_VALID_ERR_MIME_TYPES','Mimetype non impostati');

define('_AM_XHELP_TEXT_MANAGE_NOTIFICATIONS','Gestisci Notifiche');
define('_AM_XHELP_TEXT_NOTIF_NAME','Nome Notifica');
define('_AM_XHELP_TEXT_SUBSCRIBED_MEMBERS','Destinatario notifica');
define('_AM_XHELP_STAFF_SETTING1','Aggiungi Staff');
define('_AM_XHELP_STAFF_SETTING2','Dipartimento');
define('_AM_XHELP_STAFF_SETTING3','Incaricato');
define('_AM_XHELP_STAFF_SETTING4','Notifica Non Attiva');
define('_AM_XHELP_USER_SETTING1','Notifica Attiva');
define('_AM_XHELP_USER_SETTING2','Notifiche Non attive');
define('_AM_XHELP_TEXT_SUBMITTER','Richiedente');
define('_AM_XHELP_TEXT_NOTIF_STAFF','Notifiche di Staff');
define('_AM_XHELP_TEXT_NOTIF_USER','Notifiche utente');
define('_AM_XHELP_TEXT_ASSOC_TPL','Template associati');

define('_AM_XHELP_TEXT_FIND_USERS','Trova utente');
define('_AM_XHELP_STAFF_ERROR_USERS','Devi assegnare un utente a membro di staff.');
define('_AM_XHELP_STAFF_EXISTS','Errore: questo utente e\' gia\' un membro di staff.');
define('_AM_XHELP_MSG_NEED_UID','Errore: devi prima selezionare l\'utente.');

define('_AM_XHELP_TEXT_NAME_DESC','Nome che verra\' visualizzato a tutti durante la compilazione delle informazioni del ticket.');
define('_AM_XHELP_TEXT_FIELDNAME_DESC','Usato nel codice per identificare il nome dell\'elemento.');
define('_AM_XHELP_TEXT_DESCRIPTION_DESC','Note e spiegazioni per chiarire a cosa serve e come viene usato questo campo.)');
define('_AM_XHELP_TEXT_CONTROLTYPE_DESC','Il tipo di controllo HTML che verra\' assegnato a questo campo personalizzato.');
define('_AM_XHELP_TEXT_DEPT_DESC','Per quale dipartimento deve essere visualizzato questo campo?');
define('_AM_XHELP_TEXT_DATATYPE_DESC','Che tipo dati ha questo campo?');
define('_AM_XHELP_TEXT_VALIDATION_DESC','Utilizza una \'regular expression\' per convalidare i dati inseriti dall\'utente.');
define('_AM_XHELP_TEXT_WEIGHT_DESC','Usato per ordinare i campi personalizzati.');
// define('_AM_XHELP_TEXT_FIELDVALUES_DESC','Esempio:<br />N=Non Specificato<br />M=Maschile<br />F=Femminile<br /><br />Questo viene usato per le caselle di selezione o altri tipi di campo con valori di scelta multipla. la stringa prima del simbolo \'=\' e\' la chiave, il resto è il valore.');
define('_AM_XHELP_TEXT_DEFAULTVALUE_DESC','Il valore di dafault che verra\' fornito nel campo personalizzato.<br />Per un campo personalizzato che ha piu\' di un valore possibile, utilizzare la chiave dell\'elemento.');
define('_AM_XHELP_TEXT_LENGTH_DESC','Lunghezza del campo personalizzato.');

define('_AM_XHELP_TEXT_PATH','Percorso:');
define('_AM_XHELP_PATH_CONFIG',"Directory configurata per il modulo");
define('_AM_XHELP_PATH_TICKETATTACH','Allegati ai Ticket');
define('_AM_XHELP_PATH_EMAILTPL','Template Email');
define('_AM_XHELP_TEXT_CREATETHEDIR','Crea la directory');
define('_AM_XHELP_TEXT_SETPERM','Imposta permessi');
define('_AM_XHELP_PATH_AVAILABLE',"<span style='font-weight: bold; color: green;'>Disponibile</span>");
define('_AM_XHELP_PATH_NOTAVAILABLE',"<span style='font-weight: bold; color: red;'>Non Disponibile</span>");
define('_AM_XHELP_PATH_NOTWRITABLE',"<span style='font-weight: bold; color: red;'>Non scrivibile</span>");
define('_AM_XHELP_PATH_CREATED',"Directory creata con successo");
define('_AM_XHELP_PATH_NOTCREATED',"Non e\' stato possibile creare la Directory");

define('_AM_XHELP_NOTIF_NEW_TICKET','Nuovo Ticket');
define('_AM_XHELP_NOTIF_DEL_TICKET','Cancella Ticket');
define('_AM_XHELP_NOTIF_MOD_TICKET','Ticket Modificato');
define('_AM_XHELP_NOTIF_NEW_RESPONSE','Nuova Risposta');
define('_AM_XHELP_NOTIF_MOD_RESPONSE','Risposta Modificata');
define('_AM_XHELP_NOTIF_MOD_STATUS','Cambio stato Ticket');
define('_AM_XHELP_NOTIF_MOD_PRIORITY','Cambio di Priorita\'');
define('_AM_XHELP_NOTIF_MOD_OWNER','Cambio di incaricato');
define('_AM_XHELP_NOTIF_CLOSE_TICKET','Ticket Chiuso');
define('_AM_XHELP_NOTIF_MERGE_TICKET','Unione di Ticket');

//Used for Manage Notifications page

//define('_AM_XHELP_STAFF_SETTING1','Tutto Staff');
//define('_AM_XHELP_STAFF_SETTING2','Dipartimento');
//define('_AM_XHELP_STAFF_SETTING3','Incaricato');
//define('_AM_XHELP_STAFF_SETTING4','Notifica Non attiva');
//define('_AM_XHELP_USER_SETTING1','Notifica Attiva');
//define('_AM_XHELP_USER_SETTING2','Notifica Non attiva');
//define('_AM_XHELP_TEXT_SUBMITTER','Richiedente');
//define('_AM_XHELP_TEXT_NOTIF_STAFF','Notifica Staff');
//define('_AM_XHELP_TEXT_NOTIF_USER','Notifica Utente');
//define('_AM_XHELP_TEXT_ASSOC_TPL','Template associato');
define('_AM_XHELP_TEXT_AND','e');


// ALX051103 0.77

define('_AM_XHELP_TEXT_DEFAULT','Default');
define('_AM_XHELP_TEXT_MAKE_DEFAULT_DEPT','Inposta come dipartimento di default');
define('_AM_XHELP_TEXT_DEFAULT_DEPT','Dipartimento di Default');
define('_AM_XHELP_MSG_CHANGED_DEFAULT_DEPT','Aggiornato il dipartimento di default.');
define('_AM_XHELP_MSG_UPDATE_SEARCH','La ricerca salvata #%u e\' stata aggiornata.');
define('_AM_XHELP_MSG_UPDATE_SEARCH_ERR','Errore: la ricerca salvata #%u non e\' stata aggiornata.');

// 0.78
define('_AM_XHELP_PATH_PERMSET','Permessi impostati sulla directory.');
define('_AM_XHELP_PATH_NOTPERMSET','Non sono stati impostati i permessi sulla directory.');
?>