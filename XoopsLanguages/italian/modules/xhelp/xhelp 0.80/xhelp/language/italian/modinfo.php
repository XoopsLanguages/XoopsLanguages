<?php
//$Id: modinfo.php,v 1.5 2005/11/07 15:23:03 eric_juden Exp $

// modinfo.php italian version (alexcami@gmail.com)
// ALX051018 updated to 0.75 version
// ALX051103 updated to 0.77 version


define('_MI_XHELP_NAME','xhelp');
define('_MI_XHELP_DESC','Used to store client requests for help with their problems');

//Template variables
define('_MI_XHELP_TEMP_ADDTICKET','Template per \'addTicket.php\'');
define('_MI_XHELP_TEMP_SEARCH','Template per \'search.php\'');
define('_MI_XHELP_TEMP_STAFF_INDEX','Template di Staff per \'index.php\'');
define('_MI_XHELP_TEMP_STAFF_PROFILE','Template per \'profile.php\'');
define('_MI_XHELP_TEMP_STAFF_TICKETDETAILS','Template di Staff per \'ticket.php\'');
define('_MI_XHELP_TEMP_USER_INDEX','Template utente per \'index.php\'');
define('_MI_XHELP_TEMP_USER_TICKETDETAILS','Template utente per \'ticket.php\'');
define('_MI_XHELP_TEMP_STAFF_RESPONSE','Template per \'response.php\'');
define('_MI_XHELP_TEMP_LOOKUP','Template per \'lookup.php\'');
define('_MI_XHELP_TEMP_STAFFREVIEW','Template per riepilogo membro di staff');
define('_MI_XHELP_TEMP_EDITTICKET','Template per modificare il ticket');
define('_MI_XHELP_TEMP_EDITRESPONSE','Template per modificare una risposta');
define('_MI_XHELP_TEMP_ANNOUNCEMENT','Template per annunci');
define('_MI_XHELP_TEMP_STAFF_HEADER','Template per opzioni di menu staff');
define('_MI_XHELP_TEMP_USER_HEADER','Template per opzioni di menu per utente');
define('_MI_XHELP_TEMP_PRINT','Template per per la pagina printer-friendly');
define('_MI_XHELP_TEMP_STAFF_ALL','Template per Pagina \'Staff View All\'');
define('_MI_XHELP_TEMP_STAFF_TICKET_TABLE','Template per visulalizzare i ticket di staff');
define('_MI_XHELP_TEMP_SETDEPT','Template per la pagina per impostare il dipartimento');
define('_MI_XHELP_TEMP_SETPRIORITY','Template per la pagina per impostare la priorita\'');
define('_MI_XHELP_TEMP_SETOWNER','Template per la pagina per impostare l\'incaricatoe');
define('_MI_XHELP_TEMP_SETSTATUS','Template per la pagina per impostare lo stato');
define('_MI_XHELP_TEMP_DELETE','Template per la pagina per la cancellazione dei gruppi di ticket');
define('_MI_XHELP_TEMP_BATCHRESPONSE','Template per la pagina per la risposta a gruppi di ticket');
define('_MI_XHELP_TEMP_ANON_ADDTICKET','Template per aggiunta di ticket da parte di utenti anonimi');
define('_MI_XHELP_TEMP_ERROR','Template per pagina d\'errore');


// Block variables
define('_MI_XHELP_BNAME1','I Miei Tickets');
define('_MI_XHELP_BNAME1_DESC','Visualizza una lista dei ticket aperti per utente');
define('_MI_XHELP_BNAME2','Tickets di dipartimento');
define('_MI_XHELP_BNAME2_DESC','Visualizza il numero di tickets aperti per ogni dipartimento.');
define('_MI_XHELP_BNAME3','Tickets visti di recente');
define('_MI_XHELP_BNAME3_DESC','Visualizza i tickets che un membro di staff ha visto recentemente.');
define('_MI_XHELP_BNAME4','Azioni Tickets');
define('_MI_XHELP_BNAME4_DESC','Visualizza le azioni che un membro di staff puo\' fare su un ticket');

// Config variables
define('_MI_XHELP_TITLE','Titolo Helpdesk');
define('_MI_XHELP_TITLE_DSC','Dai un nome al tuo helpdesk:');
define('_MI_XHELP_UPLOAD','Directory di Upload');
define('_MI_XHELP_UPLOAD_DSC','Percorso dove gli utenti memorizzano i files che vengono aggiunti al ticket');
define('_MI_XHELP_ALLOW_UPLOAD','Consenti Uploads');
define('_MI_XHELP_ALLOW_UPLOAD_DSC','Consenti agli utenti di aggiungere un file alle proprie richieste?');
define('_MI_XHELP_UPLOAD_SIZE','Dimensione Upload');
define('_MI_XHELP_UPLOAD_SIZE_DSC','Massima dimensione di upload (in bytes)');
define('_MI_XHELP_UPLOAD_WIDTH','Larghezza Upload');
define('_MI_XHELP_UPLOAD_WIDTH_DSC','Massima larghezza dell\'upload (in pixels)');
define('_MI_XHELP_UPLOAD_HEIGHT','Altezza Upload');
define('_MI_XHELP_UPLOAD_HEIGHT_DSC','Massima altezza dell\'upload (in pixels)');
define('_MI_XHELP_ANNOUNCEMENTS','Announcements News Topic');
//define('_MI_XHELP_ANNOUNCEMENTS_DSC','This is the news topic that pulls announcements for xhelp. Update the xHelp module to see newly added news categories');
define('_MI_XHELP_ANNOUNCEMENTS_DSC',"Questo e' l'argomento delle news che aggiorna gli annunci per xhelp. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateTopics\", \"xoops_module_install_xhelp\",400, 300);'>Clicca qui</a> per aggiornare le gaterie delle news.");
define('_MI_XHELP_ANNOUNCEMENTS_NONE','***Disabilita annunci***');
define('_MI_XHELP_ALLOW_REOPEN','Consenti riapertura ticket');
define('_MI_XHELP_ALLOW_REOPEN_DSC','Consenti agli utenti di riaprire un ticket dopo la sua chiusura?');
define('_MI_XHELP_STAFF_TC','Numero di ticket per lo staff');
define('_MI_XHELP_STAFF_TC_DSC','Quanti tickets possono essere visualizzati per ogni sezione della pagina index di staff?');
define('_MI_XHELP_STAFF_ACTIONS','Azioni staff');
define('_MI_XHELP_STAFF_ACTIONS_DSC','Come devono apparire le azioni di staff? \'Inline\' e\' la visualizzazione predefinita, \'Block-Style\' necessita l\'abilitazione del blocco per le azioni di staff.');
define('_MI_XHELP_ACTION1','\'Inline-Style\'');
define('_MI_XHELP_ACTION2','\'Block-Style\'');
define('_MI_XHELP_DEFAULT_DEPT','Dipartimento predefinito');
define('_MI_XHELP_DEFAULT_DEPT_DSC',"Questo sara\' il dipartimento di default che sara\' selezionato quando viene aggiunto un ticket. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateDepts\", \"xoops_module_install_xhelp\",400, 300);'>Clicca qui</a> per aggiornare i dipartimenti.");
define('_MI_XHELP_OVERDUE_TIME','Massimo tempo di svolgimento ticket');
define('_MI_XHELP_OVERDUE_TIME_DSC','Questo parametro definisce in quanto tempo lo staff puo\' risolvere il ticket prima che sia definito in \' ritardo\' (in ore).');
define('_MI_XHELP_ALLOW_ANON','Consenti l\'immissione di ticket da parte di utenti anonimi');
define('_MI_XHELP_ALLOW_ANON_DSC','Questa opzione consente la creazione di ticket da parte di chiunque sul tuo sito. Quando un utente inserisce un ticket viene richiesto di creare un account.');

// Admin Menu variables
define('_MI_XHELP_MENU_BLOCKS','Amministra Blocchi');
define('_MI_XHELP_MENU_MANAGE_DEPARTMENTS','Amministra Dipartimenti');
define('_MI_XHELP_MENU_MANAGE_STAFF','Amministra Staff');
define('_MI_XHELP_MENU_MODIFY_EMLTPL','Modifica Template per le e-mail');
define('_MI_XHELP_MENU_MODIFY_TICKET_FIELDS','Modifica Campi Ticket');
define('_MI_XHELP_MENU_GROUP_PERM','Permessi di Gruppo');
define('_MI_XHELP_MENU_ADD_STAFF','Aggiungi Staff');
define('_MI_XHELP_MENU_MIMETYPES','Amministra Mimetype');
define('_MI_XHELP_MENU_CHECK_TABLES','Controlla/Verifica tabelle');
define('_MI_XHELP_MENU_MANAGE_ROLES','Amministra Ruoli');
define('_MI_XHELP_MENU_MAIL_EVENTS','Mail Events');
define('_MI_XHELP_MENU_CHECK_EMAIL','Controlla Email');

////NOTIFICATION vars
define('_MI_XHELP_DEPT_NOTIFY','Dipartimento');
define('_MI_XHELP_DEPT_NOTIFYDSC','Opzioni di notifica applicate ad un dipartimento');

define('_MI_XHELP_TICKET_NOTIFY','Ticket');
define('_MI_XHELP_TICKET_NOTIFYDSC','Opzioni di notifica da applicare al ticket corrente');

define('_MI_XHELP_DEPT_NEWTICKET_NOTIFY','Dipartimento: Nuovo Ticket');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYCAP','Notifica per creazione nuovo ticket');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYDSC','Notifica di ricezione a seguito di creazione di un ticket');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYSBJ','[{X_SITENAME}] NUOVO TICKET: {TICKET_SUBJECT}');
// define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Ticket created'); //
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYTPL','dept_newticket_notify.tpl');

define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFY','Dipartimento: Cancellazione Ticket');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYCAP','Notifica quando vengono cancellati i tickets');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYDSC','Ricevi notifica quando viene cancellato un ticket');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} CANCELLATO');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYTPL','dept_removedticket_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFY','Dipartimento: Ticket Modificato');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYCAP','Notifica quando i ticket vengono modificati');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYDSC','Ricevi notifica quando viene modificato un ticket');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} MODIFICATO');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYTPL','dept_modifiedticket_notify.tpl');

define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFY','Dipartimento: Nuova risposta');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYCAP','Notifica nuove risposte per i miei ticket');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYDSC','Ricevi notifica quando viene aggiunta una nuova risposta');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} NUOVA RISPOSTA');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYTPL','dept_newresponse_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFY','Dipartimento: Modificata Risposta');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYCAP','Notifica quando viene modificata una risposta');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYDSC','Ricevi notifica quando viene modificata una risposta');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} RISPOSTA MODIFICATA');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYTPL','dept_modifiedresponse_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFY','Dipartimento: Cambio stato del ticket');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYCAP','Notifica quando lo stato del ticket cambia');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYDSC','Ricevi notifica quando lo stato del ticket viene cambiato');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} CAMBIO STATO');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYTPL','dept_changedstatus_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFY','Dipartimento: Cambiata Priorita\' Ticket');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYCAP','Notifica quando la priorita\' del ticket cambia');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYDSC','Ricevi notifica quando la priorita\' del ticket viene cambiata');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} PRIORITA\' CAMBIATA');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYTPL','dept_changedpriority_notify.tpl');

define('_MI_XHELP_DEPT_NEWOWNER_NOTIFY','Dipartimento: Nuovo Incaricato');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYCAP','Notifica quando acquisto o perdo un incarico per un ticket');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYDSC','Ricevi notifica quando cambia l\'incarico per un ticket');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} CAMBIO INCARICATO');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYTPL','dept_newowner_notify.tpl');

/*
 define('_MI_XHELP_DEPT_CLAIMOWNER_NOTIFY','Claim Ticket Owner');
 define('_MI_XHELP_DEPT_CLAIMOWNER_NOTIFYCAP','Notify me when the owner of a ticket is claimed');
 define('_MI_XHELP_DEPT_CLAIMOWNER_NOTIFYDSC','Receive notification when the owner of a ticket is claimed');
 define('_MI_XHELP_DEPT_CLAIMOWNER_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Ticket ownership claimed');
 */

define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFY','Ticket: Cancellato');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYCAP','Notifica quando questo ticket viene cancellato');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYDSC','Ricevi notifica quando questo ticket viene cancellato');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} CANCELLATO');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYTPL','ticket_removedticket_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFY','Ticket: Modificato');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYCAP','Notifica quando questo ticket viene modificato');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYDSC','Ricevi notifica quando questo ticket viene modificato');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} MODIFICATO');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYTPL','ticket_modifiedticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFY','Ticket: Nuova risposta');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYCAP','Notifica quando viene creata una risposta per questo ticket');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYDSC','Ricevi notifica quando viene creata una risposta per questo ticket');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYSBJ','[TICKET {TICKET_ID}] Re: {TICKET_SUBJECT}');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYTPL','ticket_newresponse_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFY','Ticket: Risposta modificata');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYCAP','Notifica quando viene modificata una risposta per questo ticket');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYDSC','Ricevi notifica quando viene modificata una risposta per questo ticket');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} RISPOSTA MODIFICATA');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYTPL','ticket_modifiedresponse_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFY','Ticket: Cambio stato');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYCAP','Notifica quando lo stato del ticket viene modificato');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYDSC','Ricevi notifica quando viene modificato lo stato del ticket');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} MODIFICA STATO');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYTPL','ticket_changedstatus_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFY','Ticket: Cambio Priorita\'');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYCAP','Notifica quando la priorita\' di questo ticket viene cambiata');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYDSC','Ricevi notifica quando la priorita\' del ticket viene cambiata');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} PRIORITA\' CAMBIATA');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYTPL','ticket_changedpriority_notify.tpl');

define('_MI_XHELP_TICKET_NEWOWNER_NOTIFY','Ticket: Nuovo incaricato');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYCAP','Notifica quando l\'incarico viene cambiato');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYDSC','Ricevi notifica quando l\'incarico viene cambiato per questo ticket');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} CAMBIO INCARICATO ({TICKET_OWNER})');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYTPL','ticket_newowner_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_NOTIFY','Ticket: Nuovo Ticket');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYCAP','Conferma quando viene creato un nuovo ticket');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYDSC','Ricevi notifica quando viene creato un nuovo ticket');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYSBJ','[TICKET] Re: {TICKET_SUBJECT}');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYTPL','ticket_newticket_notify.tpl');

define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFY','Dipartimento: Chiuso Ticket');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYCAP','Notifica quando viene chiuso un ticket');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYDSC','Ricevi notifica quando viene chiuso un ticket');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} CHIUSO');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYTPL','dept_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFY','Ticket: Chiuso Ticket');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYCAP','Conferma quando viene chiuso un ticket');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYDSC','Ricevi notifica quando viene chiuso un ticket');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYSBJ','[{X_SITENAME}] TICKET {TICKET_ID} CHIUSO');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYTPL','ticket_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWUSER_NOTIFY','Ticket: Creato nuovo utente');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYCAP','Notifica la creazione di un nuovo account');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYDSC','Ricevi notifica quando viene creato un nuovo utente da una richiesta email (Richiede Attivazione)');

define('_MI_XHELP_TICKET_NEWUSER_NOTIFYSBJ','[{X_SITENAME}] CREATO NUOVO UTENTE (*)');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYTPL','ticket_new_user_byemail.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFY','Ticket: Creato nuovo utente');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYCAP','Notifica la creazione di  un nuovo account');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYDSC','Ricevi notifica quando viene creato un nuovo utente da una richiesta email (Auto Attivazione)');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYSBJ','[{X_SITENAME}] CREATO NUOVO UTENTE (**)');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYTPL','ticket_new_user_activation1.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFY','Ticket: Creato nuovo utente');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYCAP','Notifica la creazione di un nuovo account');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYDSC','Ricevi notifica quando viene creato un nuovo utente da una richiesta email (Richiede Attivazione di un Amministratore)');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYSBJ','[{X_SITENAME}] CREATO NUOVO UTENTE (***)');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYTPL','ticket_new_user_activation2.tpl');

// 0.75 news

define('_MI_XHELP_APPLY_VISIBILITY','Applca visibilita\' dipartimento ai membri dello staff?');
define('_MI_XHELP_APPLY_VISIBILITY_DSC','');   // This determines if staff are limited to what departments they can submit tickets to. If "yes" is selected, staff members will be limited to submitting tickets to departments where the XOOPS group they belong to is selected.
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFY','Ticket: Errore Email');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYCAP','Notifica l\'utente che la mail di richiesta non e\' stata memorizzata');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYDSC','Ricevi nofica quando una richiesta via mail non viene memorizzata');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYSBJ','RE: {TICKET_SUBJECT}');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYTPL','ticket_email_error.tpl');

define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFY','Dip: Unione Ticket');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYCAP','Notificami quando i ticket vengono uniti');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYDSC','Ricevi notifica quando i ticket vengono uniti');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Ticket uniti');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYTPL','dept_mergeticket_notify.tpl');

define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFY','Ticket: Unione Ticket');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYCAP','Notificami quando i ticket vengono uniti');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYDSC','Ricevi notifica quando i ticket vengono uniti');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Ticket uniti');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYTPL','ticket_mergeticket_notify.tpl');

define('_MI_XHELP_MENU_MANAGE_FILES','Gestisci i Files');
define('_MI_XHELP_ADMIN_ABOUT','Info');
define('_MI_XHELP_TEXT_MANAGE_STATUSES','Gestisci gli Stati');
define('_MI_XHELP_TEXT_MANAGE_FIELDS','Gestisci i campi personalizzati');

define('_MI_XHELP_TEXT_NOTIFICATIONS','Gestisci le Notifiche');

//// Modified
//define('_MI_XHELP_DEPT_NEWTICKET_NOTIFY','Staff: New Ticket');
//define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFY','Staff: Delete Ticket');
//define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFY','Staff: Modified Ticket');
//define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFY','Staff: New Response');
//define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFY','Staff: Modified Response');
//define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFY','Staff: Changed Ticket Status');
//define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFY','Staff: Changed Ticket Priority');
//define('_MI_XHELP_DEPT_NEWOWNER_NOTIFY','Staff: New Ticket Owner');
//define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFY','User: Ticket Deleted');
//define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFY','User: Ticket Modified');
//define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFY','User: New Response');
//define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFY','User: Modified Response');
//define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFY','User: Changed Status');
//define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFY','User: Changed Priority');
//define('_MI_XHELP_TICKET_NEWOWNER_NOTIFY','User: New Owner');
//define('_MI_XHELP_TICKET_NEWTICKET_NOTIFY','User: New Ticket');
//define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFY','Staff: Close Ticket');
//define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFY','User: Close Ticket');
//define('_MI_XHELP_TICKET_NEWUSER_NOTIFY','User: New User created');
//define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFY','User: New User created');
//define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFY','User: New User created');
//define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFY','User: Email Error');
//define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFY','Staff: Merge Tickets');
//define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFY','User: Merge Tickets');
//define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFY','User: New Ticket By Email');
//// Modified:
//define('_MI_XHELP_TICKET_NEWUSER_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} User Confirmation');
//define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} User Confirmation');


define('_MI_XHELP_DISPLAY_NAME','Visualizza nome utente oppure il nome reale');
define('_MI_XHELP_DISPLAY_NAME_DSC','Consente di visualizzare il nome reale dove normalmente viene visualizzato il nome utente (il nome utente verrà visualizzato se non è disponibile un nome reale).');
define('_MI_XHELP_USERNAME','Nome utente ');
define('_MI_XHELP_REALNAME','Nome reale');
define('_MI_XHELP_BNAME5','Ticket Main Action'); // Ticket Main Actions
define('_MI_XHELP_BNAME5_DESC','Visualizza le azioni per il sistema di gestione dei ticket');  // Displays main actions for ticketing system

define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFY','Utente: Nuovo Ticket da Email');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYCAP','Conferma la creazione del ticket via e-mail');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYDSC','Ricevi notifica quando un ticket viene creato via email');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYSBJ','RE: {TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYTPL','ticket_newticket_byemail_notify.tpl');


// ALX051103 updated to 0.77 version



define('_MI_XHELP_TEMP_EDITSEARCH','Template per modificare le ricerche salvate.');
define('_MI_XHELP_NUM_TICKET_UPLOADS','Numero massimo di files da traferire (Upload)');
define('_MI_XHELP_NUM_TICKET_UPLOADS_DSC','Questo e\' il numero massimo di files che possono essere trasferiti durante l\'immissione del ticket (Non sono inclusi i files dei campi personalizzati).'); // (This is the maximum number of files that can be uploaded to a ticket on ticket submission (does not include file custom fields).
define('_MI_XHELP_TEMP_USER_ALL','Template for user view all page'); // Template for user view all page



?>
