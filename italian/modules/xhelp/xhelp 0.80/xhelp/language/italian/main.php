<?php
//$Id: main.php,v 1.6 2005/11/30 16:44:23 eric_juden Exp $


// modinfo.php italian version (alexcami@gmail.com)
// ALX051018 updated to 0.75 version
// ALX051103 updated to 0.77 version


define('_XHELP_CATEGORY1','Assegna incarico');
define('_XHELP_CATEGORY2','Elimina risposte');
define('_XHELP_CATEGORY3','Elimina Tickets');
define('_XHELP_CATEGORY4','Log Users\' Tickets');
define('_XHELP_CATEGORY5','Modifica Risposta');
define('_XHELP_CATEGORY6','Modifica informazioni Ticket');

define('_SEC_STAFF_ASSIGN_OWNER','1');
define('_SEC_STAFF_DELETE_RESPONSES','2');
define('_SEC_STAFF_DELETE_TICKETS','3');
define('_SEC_STAFF_LOG_USER_TICKETS','4');
define('_SEC_STAFF_MODIFY_RESPONSES','5');
define('_SEC_STAFF_MODIFY_TICKET_INFO','6');

define('_XHELP_MESSAGE_ADD_DEPT','Dipartimento aggiunto');
define('_XHELP_MESSAGE_ADD_DEPT_ERROR','Errore: dipartimento non aggiunto');
define('_XHELP_MESSAGE_UPDATE_DEPT','Dipartimento aggiornato');
define('_XHELP_MESSAGE_UPDATE_DEPT_ERROR','Errore: dipartimento non aggiornato');
define('_XHELP_MESSAGE_DEPT_DELETE','Dipartimento eliminato');
define('_XHELP_MESSAGE_DEPT_DELETE_ERROR','Errore: dipartimento non eliminato');
define('_XHELP_MESSAGE_ADDSTAFF_ERROR','Errore: memmbro di staff non aggiunto');
define('_XHELP_MESSAGE_ADDSTAFF','Membro di staff aggiunto');
define('_XHELP_MESSAGE_STAFF_DELETE','Membro di staff cancellato');
define('_XHELP_MESSAGE_STAFF_DELETE_ERROR','Membro di staff non e\' stato cancellato');
define('_XHELP_MESSAGE_EDITSTAFF','Il profilo del membro di staff e\' stato aggiornato');
define('_XHELP_MESSAGE_EDITSTAFF_ERROR','Errore: membro di staff non e\' stato aggiornato');
define('_XHELP_MESSAGE_EDITSTAFF_NOCLEAR_ERROR','Errore: il vecchio dipartimento non e\' stato rimosso');
define('_XHELP_MESSAGE_DEPT_EXISTS','Il dipartimento esiste gia\'');
define('_XHELP_MESSAGE_ADDTICKET','Ticket registrato');
define('_XHELP_MESSAGE_ADDTICKET_ERROR','Errore: ticket non registrato');
define('_XHELP_MESSAGE_LOGMESSAGE_ERROR','Errore: azione non registrata sul database');
define('_XHELP_MESSAGE_UPDATE_PRIORITY','Priorita\' Ticket aggiornata');
define('_XHELP_MESSAGE_UPDATE_PRIORITY_ERROR','Errore: la priorità del ticket non e\' stata aggiornata');
define('_XHELP_MESSAGE_UPDATE_STATUS','Lo stato del Ticket e\' stato aggiornato');
define('_XHELP_MESSAGE_UPDATE_STATUS_ERROR','Errore: Lo stato del Ticket non e\' stato aggiornato');
define('_XHELP_MESSAGE_CLAIM_OWNER','Hai richiesto la proprieta\' del Ticket');
define('_XHELP_MESSAGE_CLAIM_OWNER_ERROR','Errore: la proprietà del Ticket non e\' stata trasferita');
define('_XHELP_MESSAGE_ASSIGN_OWNER','Il Ticket ora e\' tuo');
define('_XHELP_MESSAGE_ASSIGN_OWNER_ERROR','Errore: la proprietà del ticket non e\' stata assegnata');
define('_XHELP_MESSAGE_UPDATE_OWNER','Hai aggiornato la proprieta\' del ticket');
define('_XHELP_MESSAGE_ADDFILE','File caricato');
define('_XHELP_MESSAGE_ADDFILE_ERROR','Errore: il file non e\' stato trasferito (upload)');
define('_XHELP_MESSAGE_ADDRESPONSE','Risposta aggiunta con successo');
define('_XHELP_MESSAGE_ADDRESPONSE_ERROR','Errore: risposta non aggiunta');
define('_XHELP_MESSAGE_UPDATE_CALLS_CLOSED_ERROR','Errore: campo \'chiamata chiusa\' non aggiornato');
define('_XHELP_MESSAGE_ALREADY_OWNER','%s e\' ancora l\'incaricato di questo ticket');
define('_XHELP_MESSAGE_ALREADY_STATUS','Il Ticket ha gia\' questo stato');
define('_XHELP_MESSAGE_DELETE_TICKET','Ticket cancellato con successo');
define('_XHELP_MESSAGE_DELETE_TICKET_ERROR','Errore: il Ticket non e\' stato cancellato');
define('_XHELP_MESSAGE_ADD_SIGNATURE','Firma aggiunta con successo');
define('_XHELP_MESSAGE_ADD_SIGNATURE_ERROR','Errore: firma non aggiornata');
define('_XHELP_MESSAGE_RESPONSE_TPL','Risposta predefinita aggiornata');
define('_XHELP_MESSAGE_RESPONSE_TPL_ERROR','Errore: risposta non aggiornata');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL','Risposta predefinita cancellata con successo');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL_ERROR','Errore: risposta predefinita non cancellata');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW','Recensione aggiunta');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW_ERROR','Errore: recensione non aggiunta');
define('_XHELP_MESSAGE_UPDATE_STAFF_ERROR','Errore: info del membro di staff non aggiornate');
define('_XHELP_MESSAGE_UPDATE_SIG_ERROR','Errore: firma non aggiornata');
define('_XHELP_MESSAGE_UPDATE_SIG','Firma aggiornata');
define('_XHELP_MESSAGE_EDITTICKET','Ticket aggiornato');
define('_XHELP_MESSAGE_EDITTICKET_ERROR','Errore: ticket non aggiornato');
define('_XHELP_MESSAGE_USER_MOREINFO','Ticket aggiornato.');
define('_XHELP_MESSAGE_USER_MOREINFO_ERROR','Errore: informatione non e\' stata aggiunta');
define('_XHELP_MESSAGE_EDITRESPONSE','Risposta aggiornata');
define('_XHELP_MESSAGE_EDITRESPONSE_ERROR','Error: risposta not aggiornata');
define('_XHELP_MESSAGE_NOTIFY_UPDATE','Notifiche aggiornate');
define('_XHELP_MESSAGE_NOTIFY_UPDATE_ERROR','Notifiche non sono state aggiornate');
define('_XHELP_MESSAGE_NO_NOTIFICATIONS','Utente non ha notifiche');
define('_XHELP_MESSAGE_NO_DEPTS','Errore: dipartimento non impostato. Contattare l\'amministratore.');
define('_XHELP_MESSAGE_NO_STAFF','Errore: nessun membro di staff. Contattare l\'amministratore');
define('_XHELP_MESSAGE_TICKET_REOPEN','Ticket riaperto con successo.');
define('_XHELP_MESSAGE_TICKET_REOPEN_ERROR','Errore: il ticket non e\' stato riaperto.');
// define('_XHELP_MESSAGE_NOT_USER','Errore: non e\' possibile riaprire tickets che non hai inserito tu.');
define('_XHELP_MESSAGE_NO_TICKETS','Errore: nessunticket selezionato.');
define('_XHELP_MESSAGE_NOOWNER','Nessun incaricato');
define('_XHELP_MESSAGE_UNKNOWN','Sconosciuto');
define('_XHELP_MESSAGE_WRONG_MIMETYPE','Errore: tipo di file non permesso.');
define('_XHELP_MESSAGE_NO_UID','Errore: nessun uid specificato');
define('_XHELP_MESSAGE_NO_PRIORITY','Errore: nessuna priorita\' specificata');
define('_XHELP_MESSAGE_FILE_ERROR','Errore: Non e\' stato possibile caricare il file per questa ragione:<br />%s');

define('_XHELP_ERROR_INV_TICKET','Errore: Ticket specificato non valido. Verifica il ticket e prova ancora!');
define('_XHELP_ERROR_INV_RESPONSE','Errore: Risposta specificata non valida. Verifica la risposta e prova ancora!');
define('_XHELP_ERROR_NODEPTPERM','Non puoi inserire risposte a questo ticket. Ragione: Non sei un membro di staff di questo dipartimento.');
define('_XHELP_ERROR_INV_STAFF','Errore: l\'utente non e\' un membro di staff.');
define('_XHELP_ERROR_INV_TEMPLATE','Errore: Inserisci sia il nome del template ed il testo prima di confermare');

define('_XHELP_TITLE_ADDTICKET','Registra un Ticket [xhelp]');
define('_XHELP_TITLE_ADDRESPONSE','Aggiungi risposta');
define('_XHELP_TITLE_EDITTICKET','Modifica Informazioni del Ticket');
define('_XHELP_TITLE_EDITRESPONSE','Modifica risposta');
define('_XHELP_TITLE_SEARCH','Cerca');

define('_XHELP_TEXT_ID','ID:');
define('_XHELP_TEXT_NAME','Nome utente:');
define('_XHELP_TEXT_USER','User:');
define('_XHELP_TEXT_USERID','ID utente:');
define('_XHELP_TEXT_LOOKUP','Cerca');
define('_XHELP_TEXT_LOOKUP_USER','Cerca Utente');
define('_XHELP_TEXT_EMAIL','Email:');
define('_XHELP_TEXT_ASSIGNTO','Assegna a:');
define('_XHELP_TEXT_PRIORITY','Priorita\':');
define('_XHELP_TEXT_STATUS','Stato:');
define('_XHELP_TEXT_SUBJECT','Oggetto:');
define('_XHELP_TEXT_DEPARTMENT','Dipartimento:');
define('_XHELP_TEXT_OWNER','Incaricato:');
define('_XHELP_TEXT_CLOSEDBY','Chiuso da:');
define('_XHELP_TEXT_NOTAPPLY','N/A');
define('_XHELP_TEXT_TIMESPENT','Tempo intervento:');
define('_XHELP_TEXT_DESCRIPTION','Descrizione:');
define('_XHELP_TEXT_ADDFILE','Allega File:');
define('_XHELP_TEXT_FILE','File:');
define('_XHELP_TEXT_RESPONSE','Risposta');
define('_XHELP_TEXT_RESPONSES','Risposte');
define('_XHELP_TEXT_CLAIMOWNER','Prendi in carico Ticket:');
define('_XHELP_TEXT_CLAIM_OWNER','Prendi in carico Ticket');
// define('_XHELP_TEXT_TICKETDETAILS','Dettagli Ticket');
define('_XHELP_TEXT_MINUTES','minuti');
define('_XHELP_TEXT_SEARCH','Cerca:');
define('_XHELP_TEXT_SEARCHBY','da:');
define('_XHELP_SEARCH_DESC','Descrizione');
define('_XHELP_SEARCH_SUBJECT','Oggetto');
define('_XHELP_TEXT_NUMRESULTS','Numero di voci per pagina:');
define('_XHELP_TEXT_RESULT1','5');
define('_XHELP_TEXT_RESULT2','10');
define('_XHELP_TEXT_RESULT3','25');
define('_XHELP_TEXT_RESULT4','50');
define('_XHELP_TEXT_SEARCH_RESULTS','Risultati Ricerca');
define('_XHELP_TEXT_PREDEFINED_RESPONSES','Risposte predefinite:');
define('_XHELP_TEXT_PREDEFINED0','-- Crea Risposta --');
define('_XHELP_TEXT_NO_USERS','Utenti non trovati');
define('_XHELP_TEXT_SEARCH_AGAIN','Cerca ancora');
define('_XHELP_TEXT_LOGGED_BY','Registrato da:');
define('_XHELP_TEXT_LOG_TIME','Ora registrazione:');
define('_XHELP_TEXT_OWNERSHIP_DETAILS','Dettagli incaricato');
define('_XHELP_TEXT_ACTIVITY_LOG','Log Attivita\'');
define('_XHELP_TEXT_HELPDESK_TICKET','Helpdesk Ticket:');
define('_XHELP_TEXT_YES','Si');
define('_XHELP_TEXT_NO','No');
define('_XHELP_TEXT_ALL_TICKETS','Tutti i Ticket');
define('_XHELP_TEXT_HIGH_PRIORITY','Tickets ad alta priorita\' non assegnati');
define('_XHELP_TEXT_NEW_TICKETS','Nuovi Ticket');
define('_XHELP_TEXT_MY_TICKETS','Tickets aperti assegnati a me');
define('_XHELP_TEXT_ANNOUNCEMENTS','Announcements');
define('_XHELP_TEXT_MY_PERFORMANCE','My Performance');
define('_XHELP_TEXT_RESPONSE_TIME','Tempo medio di risposta:');
define('_XHELP_TEXT_RATING','Rating:');
define('_XHELP_TEXT_NUMREVIEWS','Numbero di Reviews:');
define('_XHELP_TEXT_NUM_TICKETS_CLOSED','Numero di Ticket Chiusi:');
define('_XHELP_TEXT_TEMPLATE_NAME','Template Name:');
define('_XHELP_TEXT_MESSAGE','Messaggio:');
define('_XHELP_TEXT_ACTIONS','Azioni:');
define('_XHELP_TEXT_ACTIONS2','Azioni');
define('_XHELP_TEXT_MY_NOTIFICATIONS','My Notifications');
define('_XHELP_TEXT_SELECT_ALL','Seleziona Tutti');
define('_XHELP_TEXT_USER_IP','IP utente:');
define('_XHELP_TEXT_OWNERSHIP','In carico a');
define('_XHELP_TEXT_ASSIGN_OWNER','Assegna ticket a');
define('_XHELP_TEXT_TICKET','Ticket');
define('_XHELP_TEXT_USER_RATING','User Rating:');
define('_XHELP_TEXT_EDIT_RESPONSE','Modifica Risposta');
define('_XHELP_TEXT_FILE_ADDED','File aggiunto:');
define('_XHELP_TEXT_ACTION','Azione:');
define('_XHELP_TEXT_LAST_TICKETS','Gli ultimi Ticket inseriti da:');
define('_XHELP_TEXT_RATE_STAFF','Assegna un punteggio alla risposta dello staff');
define('_XHELP_TEXT_COMMENTS','Commenti:');
define('_XHELP_TEXT_MY_OPEN_TICKETS','I miei Ticket aperti');
define('_XHELP_TEXT_RATE_RESPONSE','Assegna un punteggio alla risposta?');
define('_XHELP_TEXT_RESPONSE_RATING','Punteggio risposta:');
define('_XHELP_TEXT_REOPEN_TICKET','Riapri il Ticket?');
define('_XHELP_TEXT_MORE_INFO','Necessarie maggiori informazioni?');
define('_XHELP_TEXT_REOPEN_REASON','Ragione di riapertura (opzionale)');
define('_XHELP_TEXT_MORE_INFO2','Sono necessarie ulteriori informazioni per la risoluzione del problema?');



// Ticket.php - Actions
define('_XHELP_TEXT_ADD_RESPONSE','Aggiungi Risposta');
define('_XHELP_TEXT_EDIT_TICKET','Modifica Ticket');
define('_XHELP_TEXT_DELETE_TICKET','Cancella Ticket');
define('_XHELP_TEXT_PRINT_TICKET','Stampa Ticket');
define('_XHELP_TEXT_UPDATE_PRIORITY','Aggiorna Priorita\'');
define('_XHELP_TEXT_UPDATE_STATUS','Aggiorna Stato');

define('_XHELP_PIC_ALT_USER_AVATAR','Avatar Utente');

// Index.php - Auto Refresh Page vars
define('_XHELP_TEXT_AUTO_REFRESH0','Nessun Auto Aggiornamento');
define('_XHELP_TEXT_AUTO_REFRESH1','Auto Aggiornamento ogni minuto');
define('_XHELP_TEXT_AUTO_REFRESH2','Auto Aggiornamento ogni 5 minuti');
define('_XHELP_TEXT_AUTO_REFRESH3','Auto Aggiornamento ogni 10 minuti');
define('_XHELP_TEXT_AUTO_REFRESH4','Auto Aggiornamento ogni 30 minuti');
define('_XHELP_AUTO_REFRESH0', 0);          // Change these to
define('_XHELP_AUTO_REFRESH1', 60);         // adjust the values
define('_XHELP_AUTO_REFRESH2', 300);        // in the select box
define('_XHELP_AUTO_REFRESH3', 600);
define('_XHELP_AUTO_REFRESH4', 1800);

//define('_XHELP_MENU_MAIN','Principale');
define('_XHELP_MENU_LOG_TICKET','Registra Ticket');
define('_XHELP_MENU_MY_PROFILE','Mio Profilo');
define('_XHELP_MENU_ALL_TICKETS','Vedi tutti i Ticket');
define('_XHELP_MENU_SEARCH','Cerca');

define('_XHELP_SEARCH_EMAIL','Email');
define('_XHELP_SEARCH_USERNAME','Nomeutente');
define('_XHELP_SEARCH_UID','ID utente');

define('_XHELP_BUTTON_ADDRESPONSE','Aggiungi Risposta');
define('_XHELP_BUTTON_ADDTICKET','Registra Ticket');
define('_XHELP_BUTTON_EDITTICKET','Modifica Ticket');
define('_XHELP_BUTTON_RESET','Reimposta');
define('_XHELP_BUTTON_EDITRESPONSE','Aggiorna Risposta');
define('_XHELP_BUTTON_SEARCH','Cerca');
define('_XHELP_BUTTON_LOG_USER','Registra per utente');
define('_XHELP_BUTTON_FIND_USER','Cerca Utente');
define('_XHELP_BUTTON_SUBMIT','Conferma');
define('_XHELP_BUTTON_DELETE','Cancella');
define('_XHELP_BUTTON_UPDATE','Aggiorna');
define('_XHELP_BUTTON_UPDATE_PRIORITY','Aggiorna Priorita\'');
define('_XHELP_BUTTON_UPDATE_STATUS','Aggiorna Stato');
define('_XHELP_BUTTON_ADD_INFO','Aggiungi Info');

define('_XHELP_PRIORITY1', 1);
define('_XHELP_PRIORITY2', 2);
define('_XHELP_PRIORITY3', 3);
define('_XHELP_PRIORITY4', 4);
define('_XHELP_PRIORITY5', 5);

define('_XHELP_STATUS0','APERTO');
define('_XHELP_STATUS1','CONGELATO');
define('_XHELP_STATUS2','CHIUSO');

define('_XHELP_RATING0','Nessun punteggio');
define('_XHELP_RATING1','Scarso');
define('_XHELP_RATING2','Sotto la media');
define('_XHELP_RATING3','medio');
define('_XHELP_RATING4','sopra la media');
define('_XHELP_RATING5','eccellente');

// Log Messages
define('_XHELP_LOG_ADDTICKET','Ticket registrato');
define('_XHELP_LOG_ADDTICKET_FORUSER','Ticket registrato per %s da %s');
define('_XHELP_LOG_EDITTICKET','Informazioni sul Ticket modificate');
define('_XHELP_LOG_UPDATE_PRIORITY','Priorita\' aggiornata da pri:%u a pri:%u');
define('_XHELP_LOG_UPDATE_STATUS','Stato aggiornato da %s a %s');
define('_XHELP_LOG_CLAIM_OWNERSHIP','Preso in carico Ticket');
define('_XHELP_LOG_ASSIGN_OWNERSHIP','Assegnato ticket a %s');
define('_XHELP_LOG_ADDRESPONSE','Risposta aggiunta');
define('_XHELP_LOG_USER_MOREINFO','Aggiunte ulteriori informazioni');
define('_XHELP_LOG_EDIT_RESPONSE','Risposta # %s modificata');
define('_XHELP_LOG_REOPEN_TICKET','Ticket riaperto');
define('_XHELP_LOG_CLOSE_TICKET','Ticket chiuso');
define('_XHELP_LOG_ADDRATING','Assegnato punteggio risposta %u');

// Error checking for no records in DB
define('_XHELP_NO_TICKETS_ERROR','Non e\' stato trovato nessun ticket');
define('_XHELP_NO_RESPONSES_ERROR','Non e\' stata trovata nessuna risposta');
define('_XHELP_NO_FILES_ERROR','Nessun file trovato');

define('_XHELP_SIG_SPACER','<br /><br />-------------------------------<br />');
define('_XHELP_COMMMENTS','Commenti?');
define("_XHELP_ANNOUNCE_READMORE","leggi ancora ...");
define("_XHELP_ANNOUNCE_ONECOMMENT","1 commento");
define("_XHELP_ANNOUNCE_NUMCOMMENTS","%s commenti");

define('_XHELP_NO_OWNER','Nessun incaricato');
define('_XHELP_RESPONSE_EDIT','Risposta modificata da %s a %s');

define('_XHELP_TIME_SECS','secondi');
define('_XHELP_TIME_MINS','minuti');
define('_XHELP_TIME_HOURS','ore');
define('_XHELP_TIME_DAYS','giorni');


// v 1.56 2004/10/18 17:52:25

define('_XHELP_JSC_TEXT_DELETE','Sei sicuro di voler cancellare questo ticket?');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT','Dipartimento aggiornato con successo');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT_ERROR','Errore: Dipartimento non aggiornato');
define('_XHELP_MESSAGE_TICKET_CLOSE','Ticket chiuso con successo.');
define('_XHELP_MESSAGE_TICKET_CLOSE_ERROR','Errore: il ticket non e\' stato chiuso.');
define('_XHELP_MESSAGE_UPDATE_EMAIL_ERROR','Errore: l\'email non e\' stata aggiornata');
define('_XHELP_MESSAGE_TICKET_DELETE_CNFRM','Sei sicuro di voler cancellare questi ticket?');
define('_XHELP_MESSAGE_DELETE_TICKETS','I Ticket sono stati cancellati');
define('_XHELP_MESSAGE_DELETE_TICKETS_ERROR','Errore: I Ticket non sono stati cancellati');
// define('_XHELP_MESSAGE_VALIDATE_ERROR','Nel tuo ticket c\'e\' un errore, correggi gli errori e riprova ancora.');
define('_XHELP_TEXT_SUBMITTED_TICKETS','I Miei Ticket inseriti');
define('_XHELP_TEXT_NO_DEPT','Nessun Dipartimento');
define('_XHELP_TEXT_NOT_EMAIL','Indirizzo Email:');
define('_XHELP_TEXT_LAST_REVIEWS','Le ultime \'Reviews\' dello Staff:');
define('_XHELP_TEXT_SORT_TICKETS','Ordina i Ticket per questa colonna');
define('_XHELP_TEXT_ELAPSED','Trascorso:');
define('_XHELP_TEXT_FILTERTICKETS','Filtra Ticket:');
define('_XHELP_TEXT_LIMIT','Tickets per pagina');
define('_XHELP_TEXT_SUBMITTEDBY','Inserito da:');
define('_XHELP_TEXT_NO_INCLUDE','ANY');
define('_XHELP_TEXT_PRIVATE_RESPONSE','Risposta Privata:');
define('_XHELP_TEXT_PRIVATE','Privato');
define('_XHELP_TEXT_CLOSE_TICKET','Chiudi Ticket?');
define('_XHELP_TEXT_ADD_SIGNATURE','Aggiungi firma alle risposte?');
define('_XHELP_TEXT_LASTUPDATE','Ultimo aggiornamento:');
define('_XHELP_TEXT_BATCH_ACTIONS','Azioni Batch:');
define('_XHELP_TEXT_BATCH_DEPARTMENT','Cambia Dipartimento');
define('_XHELP_TEXT_BATCH_PRIORITY','Cambia Priorita\'');
define('_XHELP_TEXT_BATCH_STATUS','Cambia Stato');
define('_XHELP_TEXT_BATCH_DELETE','Cancella Ticket');
define('_XHELP_TEXT_BATCH_RESPONSE','Rispondi'); // ALX041025 ex 'Respond'
define('_XHELP_TEXT_BATCH_OWNERSHIP','Prendi/Assegna incarico');

define('_XHELP_TEXT_SETDEPT','Scegli un dipartimento:');
define('_XHELP_TEXT_SETPRIORITY','Imposta la priorita\' del ticket:');
define('_XHELP_TEXT_SETOWNER','Seleziona un incaricato:');
define('_XHELP_TEXT_SETSTATUS','Imposta lo stoto del ticket:');

define('_XHELP_TEXT_SELECTED','Ai Ticket selezionati:');
define('_XHELP_BUTTON_SET','Set');
define('_XHELP_TEXT_PRIORITY1','Alta');
define('_XHELP_TEXT_PRIORITY2','Medio-Alta');
define('_XHELP_TEXT_PRIORITY3','Media');
define('_XHELP_TEXT_PRIORITY4','Medio-Bassa');
define('_XHELP_TEXT_PRIORITY5','Bassa');

define('_XHELP_LOG_SETDEPT','Assegnato al dipartimento:  %s ');

define('_XHELP_TIME_WEEKS','Settimane');
define('_XHELP_TIME_YEARS','Anni');

define('_XHELP_TIME_SEC','secondi');
define('_XHELP_TIME_MIN','minuti');
define('_XHELP_TIME_HOUR','ore');
define('_XHELP_TIME_DAY','giorno');
define('_XHELP_TIME_WEEK','settimana');
define('_XHELP_TIME_YEAR','anno');




define('_XHELP_TEXT_UPDATE_COMP','Aggiornamento completato!');
define('_XHELP_TEXT_TOPICS_ADDED','Topics Added'); // Topics Added
define('_XHELP_TEXT_CLOSE_WINDOW','Chiude Finestra');
define('_XHELP_MESSAGE_USER_NO_INFO','Errore: non hai inserito nessun altra informazione');
define('_XHELP_TEXT_EVENT','Evento');
define('_XHELP_TEXT_AVAIL_FILETYPES','Tipi files');
define('_XHELP_MESSAGE_VALIDATE_ERROR','Il tuo ticket e\' errato, controlla e riprova ancora.');
define('_XHELP_MESSAGE_UNAME_TAKEN',' e\' ancora in uso.');
define('_XHELP_MESSAGE_INVALID',' non e\' valido.');
define('_XHELP_MESSAGE_LONG',' e\' troppo corto.');
define('_XHELP_MESSAGE_SHORT',' e\' troppo lungo.');
define('_XHELP_MESSAGE_NOT_ENTERED',' non e\' stato inserito.');
define('_XHELP_MESSAGE_NOT_NUMERIC',' non e\' numerico.');
define('_XHELP_MESSAGE_RESERVED',' e\' riservato.');
define('_XHELP_MESSAGE_NO_SPACES',' non dovrebbe avere spazi');
define('_XHELP_MESSAGE_NOT_SAME',' non e\' uguale.');
define('_XHELP_MESSAGE_NOT_SUPPLIED',' non e\' stato fornito.');

define('_XHELP_MESSAGE_CREATE_USER_ERROR','Utente non creato');
define('_XHELP_MESSAGE_NO_REGISTER','Registrazione chiusa: In questo momento non sei autorizzato per l\'inserimento di un ticket.');

define('_XHELP_SEC_TICKET_ADD', 0);
define('_XHELP_SEC_TICKET_EDIT', 1);
define('_XHELP_SEC_TICKET_DELETE', 2);
define('_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_XHELP_SEC_TICKET_STATUS', 4);
define('_XHELP_SEC_TICKET_PRIORITY', 5);
define('_XHELP_SEC_TICKET_LOGUSER', 6);
define('_XHELP_SEC_RESPONSE_ADD', 7);
define('_XHELP_SEC_RESPONSE_EDIT', 8);

define('_XHELP_SEC_TEXT_TICKET_ADD','Inserisci Tickets');
define('_XHELP_SEC_TEXT_TICKET_EDIT','Modifica Tickets');
define('_XHELP_SEC_TEXT_TICKET_DELETE','Cancella Tickets');
define('_XHELP_SEC_TEXT_TICKET_OWNERSHIP','Cambia incarico Ticket');
define('_XHELP_SEC_TEXT_TICKET_STATUS','Cambia lo stato del Ticket');
define('_XHELP_SEC_TEXT_TICKET_PRIORITY','Change Ticket Priority');
define('_XHELP_SEC_TEXT_TICKET_LOGUSER','Inserisci Ticket per Utente');
define('_XHELP_SEC_TEXT_RESPONSE_ADD','Aggiungi Risposta');
define('_XHELP_SEC_TEXT_RESPONSE_EDIT','Modifica Risposta');

//Removed
//      define('_SEC_STAFF_ASSIGN_OWNER','1');
//      define('_SEC_STAFF_DELETE_RESPONSES','2');
//      define('_SEC_STAFF_DELETE_TICKETS','3');
//      define('_SEC_STAFF_LOG_USER_TICKETS','4');
//      define('_SEC_STAFF_MODIFY_RESPONSES','5');
//      define('_SEC_STAFF_MODIFY_TICKET_INFO','6');
//End removed

define('_XHELP_MESSAGE_NO_ADD_TICKET','Non hai i permessi per inserire i tickets.');
define('_XHELP_MESSAGE_NO_DELETE_TICKET','Non hai i permessi per cancellare i tickets.');
define('_XHELP_MESSAGE_NO_EDIT_TICKET','Non hai i permessi per modificare i tickets.');
define('_XHELP_MESSAGE_NO_CHANGE_OWNER','Non hai i permessi per cambiare l\'incaricato.');
define('_XHELP_MESSAGE_NO_CHANGE_PRIORITY','Non hai i permessi per cambiare la priorita\'.');
define('_XHELP_MESSAGE_NO_CHANGE_STATUS','Non hai i permessi per cambiare lo stato.');
define('_XHELP_MESSAGE_NO_ADD_RESPONSE','Non hai i permessi per aggiungere le risposte.');
define('_XHELP_MESSAGE_NO_EDIT_RESPONSE','Non hai i permessi per modificare le risposte.');

define('_XHELP_ROLE_NAME1','Ticket Manager');
define('_XHELP_ROLE_NAME2','Support');
define('_XHELP_ROLE_NAME3','Browser');
define('_XHELP_ROLE_DSC1','Puo\' fare tutto su tutto');
define('_XHELP_ROLE_DSC2','Inserisce tickets and risposte, cambia stato e priorita\', inserisce tickets per un utente');
define('_XHELP_ROLE_DSC3','Non puo\' modificare Solo visualizzazione');
//      define('_XHELP_ROLE_VAL1','511');
define('_XHELP_ROLE_VAL2','241');
define('_XHELP_ROLE_VAL3','0');
define("_XHELP_TICKET_MD5SIGNATURE","Support Key:"); // da tradurre?
define('_XHELP_USER_REGISTER','User Registration');  // da tradurre?


define('_XHELP_MESSAGE_NEW_USER_ERR','Errore: il tuo account non e\' stato creato.');
define('_XHELP_MESSAGE_EMAIL_USED','Errore: l\'email e\' stata gia\' registrata.');

define('_XHELP_MAILEVENT_CLASS0','0'); // Connection message
define('_XHELP_MAILEVENT_CLASS1','1'); // Parse message
define('_XHELP_MAILEVENT_CLASS2','2'); // Storage message
define('_XHELP_MAILEVENT_CLASS3','3'); // General message
define('_XHELP_MAILEVENT_DESC0','Collegamento al server fallito.');
define('_XHELP_MAILEVENT_DESC1','Non e\' possibile trasferire il messaggio.');
define('_XHELP_MAILEVENT_DESC2','Non e\' possibile salvare il messaggio.');
define('_XHELP_MAILEVENT_DESC3','');

define('_XHELP_MESSAGE_UPLOAD_ALLOWED_ERR','L\'upload del modulo e\' disabilitato per il modulo.');
define('_XHELP_MESSAGE_UPLOAD_ERR','Il file %s da %s non e\' stato salvato perche\' %s.');


// ver 0.75

define('_XHELP_MISMATCH_EMAIL','%s has been notified that their message was not stored. Support key matched, but message should have been sent from %s instead.');
define('_XHELP_TEXT_MERGE_TICKET','Unione Ticket');
define('_XHELP_SEC_TICKET_MERGE', 9);
define('_XHELP_SEC_TEXT_TICKET_MERGE','Unione Ticket');
define('_XHELP_MESSAGE_NO_MERGE','Non hai il permesso di unire dei ticket.');
define('_XHELP_MESSAGE_NO_TICKET2','Errore: non hai specificato un ticket da unire.');
define('_XHELP_LOG_MERGETICKETS','Ticket numero  %s  e  %s uniti');
define('_XHELP_MESSAGE_MERGE','Unione completata.');
define('_XHELP_MESSAGE_MERGE_ERROR','Errore: unione non completata.');

define('_XHELP_TEXT_TICKETDETAILS','Dettagli Ticket #%s');

define('_XHELP_TEXT_MERGE_TITLE','Inserisci in numero di ticket (ID) con cui vuoi unire il ticket.');
define('_XHELP_MESSAGE_ADDED_EMAIL','Email aggiunta.');
define('_XHELP_MESSAGE_ADDED_EMAIL_ERROR','Errore: email non aggiunta.');
define('_XHELP_BUTTON_ADD_EMAIL','Aggiungi Email');
define('_XHELP_TEXT_EMAIL_NOTIFICATION','Notifica Email:');
define('_XHELP_MESSAGE_NO_EMAIL','Errore: non hai specificato una email da aggiungere.');
define('_XHELP_TEXT_EMAIL_NOTIFICATION_TITLE','Aggiungi un indirizzo email per la notifica degli aggiornamenti.');
define('_XHELP_TEXT_RECEIVE_NOTIFICATIONS','Ricevi notifiche:');
define('_XHELP_TEXT_EMAIL_SUPPRESS','Invio Email disattivato. Click per spedire una notifica.');
define('_XHELP_TEXT_EMAIL_NOT_SUPPRESS','Inivio Email autorizzato. Click per disattivare.');
define('_XHELP_TEXT_TICKET_NOTIFICATIONS','Notifiche Ticket');
define('_XHELP_MESSAGE_ADD_EMAIL','Notifica Email aggiornata.');
define('_XHELP_MESSAGE_ADD_EMAIL_ERROR','Errore: email non e\' stata aggiornata.');

define('_XHELP_MESSAGE_NO_MERGE_TICKET','Non sei autorizzato a disattivare le notifiche email');

define('_XHELP_STATE1','Non risolto');
define('_XHELP_STATE2','Risolto');
// define('_XHELP_MESSAGE_NO_REGISTER','Fai login con il tuo user-id per inseririre un ticket.');
define('_XHELP_TEXT_STATE','Stato:');

define('_XHELP_NUM_STATE1', 1);
define('_XHELP_NUM_STATE2', 2);

define('_XHELP_MESSAGE_DELETE_FILE_ERR','Errore: file non cancellato.');
define('_XHELP_LOG_DELETEFILE','File %s cancellato');
define('_XHELP_SEC_FILE_DELETE', 10);
define('_XHELP_SEC_TEXT_FILE_DELETE','Cancella File allegati');

define('_XHELP_SIZE_BYTES','Bytes');
define('_XHELP_SIZE_KB','KB');
define('_XHELP_SIZE_MB','MB');
define('_XHELP_SIZE_GB','GB');
define('_XHELP_SIZE_TB','TB');
define('_XHELP_MESSAGE_NO_FILE_DELETE','Non sei autorizzato a cancellare i files.');

define('_XHELP_NO_MAILBOX_ERROR','Casella Mailbox non valida');

define('_XHELP_MBOX_ERR_LOGIN','Connessione fallita al mail server: user/password non valido');
define('_XHELP_MBOX_INV_BOXTYPE','Il tipo di mailbox specificato non e\' supportato');
define('_XHELP_TEXT_USER_NOT_ACTIVATED','L\'utente non ha teminato la procedura di attivazione.');

define('_XHELP_TEXT_VIEW1','Visualizzazione Normale');
define('_XHELP_TEXT_VIEW2','Visualizzazione Avanzata');

define('_XHELP_TEXT_SAVE_SEARCH','Salva la ricerca?');
define('_XHELP_TEXT_SEARCH_NAME','Nome Ricerca:');
define('_XHELP_TEXT_SAVED_SEARCHES','Ricerche precedenti salvate');
define('_XHELP_BUTTON_RUN','Vai!');

define('_XHELP_TEXT_SWITCH_TO','Passa a ');

// define('_XHELP_DEFAULT_PRIORITY', 4);

define('_XHELP_MESSAGE_DELETE_SEARCH_ERR','Errore: ricerca non cancellata.');

define('_XHELP_TEXT_ADMIN_DISABLED','<em>[Disabilitato da Administrator]</em>');

define('_XHELP_TEXT_CURRENT_NOTIFICATION','Metodo di Notifica Corrente');
define('_XHELP_NOTIFY_METHOD1','Messaggio Privato');
define('_XHELP_NOTIFY_METHOD2','Email');

define('_XHELP_ERROR_INV_USER','Errore: Non sei autorizzato a vedere questo ticket.');

define('_XHELP_MENU_MAIN','Sommario');

define('_XHELP_MESSAGE_NOT_USER','Errore: non puoi modificare questo ticket.');

define('_XHELP_TEXT_REALNAME','Nome');

define('_XHELP_TEXT_SIZE','Dimensione:');
define('_XHELP_MESSAGE_NO_CUSTFLD_ADDED','Errore: campi personalizzati non salvati.');
define('_XHELP_TEXT_ADDITIONAL_INFO','Informazioni Aggiuntive');
define('_XHELP_MESSAGE_REQUIRED',' e\' richiesto.');

// ALX051103 updated to 0.77 version

define('_XHELP_TEXT_TICKET_LISTS','Liste di Tickets'); // Ticket Lists
define('_XHELP_TEXT_LIST_NAME','Nome lista');
define('_XHELP_TEXT_CREATE_NEW_LIST','crea nuova lista');
define('_XHELP_TEXT_NO_RECORDS','Nessun record trovato');
define('_XHELP_TEXT_EDIT','Modifica');
define('_XHELP_TEXT_DELETE','Cancella');
define('_XHELP_TEXT_CREATE_SAVED_SEARCH','Crea Ricerca Salvata'); // Create Saved Search
define('_XHELP_MSG_ADD_TICKETLIST_ERR','Errore: la lista non e\' stata creata.');
define('_XHELP_MSG_DEL_TICKETLIST_ERR','Error: la lista non e\' stata cancellata');
define('_XHELP_MSG_NO_ID','Errore: non hai specificato un id.');
define('_XHELP_TEXT_VIEW_MORE_TICKETS','Vedi piu\' tickets');
define('_XHELP_MSG_NO_EDIT_SEARCH','Errore: non sei autorizzato a modificare questa ricerca.');
define('_XHELP_MSG_NO_DEL_SEARCH','Errore: non sei autorizzato a cancellare questa ricerca.');

// REMOVED - define('_XHELP_DEFAULT_PRIORITY', 4);

// MODIFIED
define('_XHELP_ROLE_VAL1', 2047);
define('_XHELP_TEXT_ADD_STAFF','Aggiungi membro di Staff');
?>
