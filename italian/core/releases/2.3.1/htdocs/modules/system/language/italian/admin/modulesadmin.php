<?php
// $Id: modulesadmin.php 1441 2008-04-15 04:13:21Z julionc $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Amministrazione moduli");
define("_MD_AM_MODULE","Modulo");
define("_MD_AM_VERSION","Versione");
define("_MD_AM_LASTUP","Ultimo aggiornamento");
define("_MD_AM_DEACTIVATED","Disattivato");
define("_MD_AM_ACTION","Azione");
define("_MD_AM_DEACTIVATE","Disattiva");
define("_MD_AM_ACTIVATE","Attiva");
define("_MD_AM_UPDATE","Aggiorna");
define("_MD_AM_DUPEN","Valore duplicato nella tabella del modulo!");
define("_MD_AM_DEACTED","Il modulo selezionato è stato disattivato. Adesso puoi disinstallarlo corretamente.");
define("_MD_AM_ACTED","Il modulo selezionato è stato attivato con successo!");
define("_MD_AM_UPDTED","Il modulo selezionato è stato aggiornato con successo!");
define("_MD_AM_SYSNO","Il modulo Sistema non può essere disattivato.");
define("_MD_AM_STRTNO","Questo modulo è visualizzato di default com pagina principale del tuo sito. Prego, cambia dalle preferenze il modulo per la tua Home page.");

// added in RC2
define("_MD_AM_PCMFM","Conferma:");

// added in RC3
define("_MD_AM_ORDER","Ordine");
define("_MD_AM_ORDER0","(0 = nascondi)");
define("_MD_AM_ACTIVE","Attivo");
define("_MD_AM_INACTIVE","Inattivo");
define("_MD_AM_NOTINSTALLED","Non installato");
define("_MD_AM_NOCHANGE","Nessun cambiamento");
define("_MD_AM_INSTALL","Installa");
define("_MD_AM_UNINSTALL","Disinstalla");
define("_MD_AM_SUBMIT","Invia");
define("_MD_AM_CANCEL","Cancella");
define("_MD_AM_DBUPDATE","Database aggiornato con successo!");
define("_MD_AM_BTOMADMIN","Torna alla pagina di amministrazione moduli");

// %s represents module name
define("_MD_AM_FAILINS","Impossibile installare %s.");
define("_MD_AM_FAILACT","Impossibile attivare %s.");
define("_MD_AM_FAILDEACT","Impossobile disattivare %s.");
define("_MD_AM_FAILUPD","Impossibile aggiornare %s.");
define("_MD_AM_FAILUNINS","Impossibile disinstallare %s.");
define("_MD_AM_FAILORDER","Impossibile riordinare %s.");
define("_MD_AM_FAILWRITE","Impossibile scivere nel Main Menu.");
define("_MD_AM_ALEXISTS","Il modulo %s esiste già.");
define("_MD_AM_ERRORSC", "Errori:");
define("_MD_AM_OKINS","Modulo %s installato con successo.");
define("_MD_AM_OKACT","Modulo %s attivato con successo.");
define("_MD_AM_OKDEACT","Modulo %s disattivato con successo.");
define("_MD_AM_OKUPD","Modulo %s aggiornato con successo.");
define("_MD_AM_OKUNINS","Modulo %s disinstallato con successo.");
define("_MD_AM_OKORDER","Modulo %s cambiato con successo.");

define('_MD_AM_RUSUREINS', 'Premere il pulsante sottostante per installare il modulo');
define('_MD_AM_RUSUREUPD', 'Premere il pulsante sottostante per aggiornare il modulo');
define('_MD_AM_RUSUREUNINS', 'Sei sicuro di voler disinstallare questo modulo?');
define('_MD_AM_LISTUPBLKS', 'I seguenti blocchi saranno aggiornati.<br />Seleziona i blocchi (template and options) che possono essere sovrascritti.<br />');
define('_MD_AM_NEWBLKS', 'Nuovo blocco');
define('_MD_AM_DEPREBLKS', 'Blocco deprecato');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING', 'Installazione ');
define('_MD_AM_TABLE_RESERVED', '%s è una tabella riservata!');
define('_MD_AM_CREATE_TABLES', 'Creazione tabelle...');
define('_MD_AM_TABLE_CREATED', 'Tabella %s creata');
define('_MD_AM_INSERT_DATA', '&nbsp;&nbsp; Dati inseriti nella tabella %s');
define('_MD_AM_INSERT_DATA_FAILD', 'Impossibile inserire %s nel database.');
define('_MD_AM_INSERT_DATA_DONE', 'Dati del modulo inseriti correttamente.');
define('_MD_AM_MODULEID', 'ID del modulo: %s');
define('_MD_AM_SQL_FOUND', 'Trovato file SQL a %s ');
define('_MD_AM_SQL_NOT_FOUND', 'File SQL non trovato a %s');
define('_MD_AM_SQL_NOT_CREATE', 'ERRORE: Impossibile creare %s ');
define('_MD_AM_SQL_NOT_VALID', '%s non è un SQL valido!');

define('_MD_AM_GROUP_ID', 'ID del gruppo: %s ');
define('_MD_AM_NAME', ' Name: ');
define('_MD_AM_VALUE', ' Value: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD', 'Aggiungi templates...');
define('_MD_AM_TEMPLATES_DELETE', 'Eliminazione template...');
define('_MD_AM_TEMPLATES_UPDATE', 'Aggiornamento template...');

define('_MD_AM_TEMPLATE_ID', 'ID del template: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA', 'Template %s aggiunto al database');
define('_MD_AM_TEMPLATE_ADD_ERROR', 'ERRORE: Impossibile inerire il template %s nel database.');
define('_MD_AM_TEMPLATE_COMPILED', 'Template %s compilato ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED', 'ERRORE: Compilazione del template fallita %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA', 'Template %s cancellato dal database. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD', 'ERRORE: Impossibile cancellare il template %s dal database. ');
define('_MD_AM_TEMPLATE_INSERT_DATA', 'Template %s inserito nel database. ');
define('_MD_AM_TEMPLATE_RECOMPILE', 'Template %s ricompilato');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD', 'ERRORE: Template %s non ricompilato');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR', 'ERRORE: Impossibile ricompilare il template %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR', 'ERRORE: Impossibile cancellare il vecchio template %s. Aggiornamento di qusto file interrotto. ');
define('_MD_AM_TEMPLATE_UPDATE', 'Template %s aggiornato. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR', 'ERRORE: Impossibile aggiornare il template %s. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD', 'Aggiungi blocco...');
define('_MD_AM_BLOCKS_DELETE', 'Eliminazione blocco...');
define('_MD_AM_BLOCKS_REBUILD', 'Aggiornamento blocchi...');

define('_MD_AM_BLOCK_ID', ' ID del blocco: %s ');

define('_MD_AM_BLOCK_ACCESS', 'Permessi per il blocco aggiunto');
define('_MD_AM_BLOCK_ACCESS_ERROR', 'ERRORE: Impossibile aggiungere i permessi al blocco');
define('_MD_AM_BLOCK_ADD', 'Blocco %s aggiunto ');
define('_MD_AM_BLOCK_ADD_ERROR', 'ERRORE: Impossibile aggiungere il blocco %s al database! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE', 'Errore database: %s ');
define('_MD_AM_BLOCK_CREATED', 'Blocco %s creato ');
define('_MD_AM_BLOCK_DELETE', 'Blocco %s eliminato. ');
define('_MD_AM_BLOCK_DELETE_DATA', 'Template del bloccp %s eliminato dale database. ');
define('_MD_AM_BLOCK_DELETE_ERROR', 'ERRORE: Impossibile cancellare il blocco %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR', 'ERRORE: Impossibile cancellare il template del blocco %s dal database');
define('_MD_AM_BLOCK_DEPRECATED', 'Template del blocco %s deprecato ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR', 'ERRORE: Impossibile eliminare template deprecati del blocco.  ');
define('_MD_AM_BLOCK_UPDATE', 'Block %s Aggiornato. ');

/* Configs */
define('_MD_AM_GONFIG_ID', 'ID configurazione: %s');
define('_MD_AM_MODULE_DATA_ADD', 'Aggiungi dati di configurazione del modulo...');
define('_MD_AM_MODULE_DATA_DELETE', 'Opzioni di eliminazione dati di configurazione del modulo...');
define('_MD_AM_MODULE_DATA_UPDATE', 'Dati del modulo aggiornati.');

define('_MD_AM_CONFIG_ADD', ' Opzioni di configurazioni aggiunte');
define('_MD_AM_CONFIG_DATA_ADD', ' Configurazione %s aggiunta al database');
define('_MD_AM_CONFIG_DATA_ADD_ERROR', ' ERRORE: Impossibile inserire configurazione %s nel database. ');
define('_MD_AM_GONFIG_DATA_DELETE', 'Dati di configurazione cancellati dal database. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR', 'ERRORE: Impossibile cancellare i dati di configurazione dal database');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD', 'Settaggio dei permessi per i gruppi...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR', 'ERRORE: Impossibile cancellare i permessi del gruppo ');
define('_MD_AM_GROUP_PERMS_DELETED', 'Permessi del gruppo cancellati ');

define('_MD_AM_ACCESS_ADMIN_ADD', 'Aggiunto accesso Admin per il gruppo ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR', 'ERRORE: Impossibile dare accesso Admin al gruppo ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR', 'Aggiunto permesso di accesso al gruppo ID: %s per gli utenti');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR', 'ERRORE: Impossibile dare accesso al gruppo ID: %s per gli utenti');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE', 'Esecuzione fallita %s');
define('_MD_AM_FAILED_SUCESS', '%s Eseguito con successo.');

define('_MD_AM_DELETE_ERROR', 'ERRORE: Impossibile cancellare %s');
define('_MD_AM_UPDATE_ERROR', 'ERRORE: Impossibile aggiornare %s');
define('_MD_AM_DELETE_MOD_TABLES', 'Eliminazione tabelle del modulo...');

define('_MD_AM_COMMENTS_DELETE', 'Eliminazione commenti...');
define('_MD_AM_COMMENTS_DELETE_ERROR', 'ERRORE: Impossibile eliminare i commenti');
define('_MD_AM_COMMENTS_DELETED', 'Commenti cancellati');

define('_MD_AM_NOTIFICATIONS_DELETE', 'Eliminazione notifiche...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR', 'ERRORE: Impossibile eliminare le notifiche');
define('_MD_AM_NOTIFICATIONS_DELETED', 'Notifiche cancellate');

define('_MD_AM_TABLE_DROPPED', 'Tabella %s svuotata!');
define('_MD_AM_TABLE_DROPPED_ERROR', 'ERRORE: Impossibile svuotare la tabella %s');
define('_MD_AM_TABLE_DROPPED_FAILDED', 'ERRORE: Non hai il permesso di svuotare la tabella %s !');
?>