<?php
// -------------------------------------------------------------------------------- //
// Updated by Ianez - Xoops Italia Staff
// Original translation by Marco Ragogna (blueangel)
// Published by Xoops Italian Official Support Site - www.xoopsitalia.org
// -------------------------------------------------------------------------------- //
// $Id: modulesadmin.php 1441 2008-04-15 04:13:21Z julionc $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Amministrazione Moduli");
define("_MD_AM_MODULE","Modulo");
define("_MD_AM_VERSION","Versione");
define("_MD_AM_LASTUP","Ultimo Aggiornamento");
define("_MD_AM_DEACTIVATED","Disattivato");
define("_MD_AM_ACTION","Azione");
define("_MD_AM_DEACTIVATE","Disattiva");
define("_MD_AM_ACTIVATE","Attiva");
define("_MD_AM_UPDATE","Aggiorna");
define("_MD_AM_DUPEN","Query doppie nelle tabelle dei moduli!");
define("_MD_AM_DEACTED","Il modulo selezionato &egrave; stato disattivato con successo! Adesso &egrave; possibile disinstallare il modulo.");
define("_MD_AM_ACTED","Il modulo selezionato &egrave; stato attivato con successo!");
define("_MD_AM_UPDTED","Il modulo selezionato &egrave; stato aggiornato con successo!");
define("_MD_AM_SYSNO","Il modulo System non pu&ograve; essere disattivato.");
define("_MD_AM_STRTNO","Questo modulo &egrave; impostato come modulo di default per la pagina iniziale. Per favore modifica il modulo iniziale secondo le tue esigenze.");

// added in RC2
define("_MD_AM_PCMFM","Per favore conferma:");

// added in RC3
define("_MD_AM_ORDER","Ordine");
define("_MD_AM_ORDER0","(0 = nascondi)");
define("_MD_AM_ACTIVE","Attivo");
define("_MD_AM_INACTIVE","Non attivo");
define("_MD_AM_NOTINSTALLED","Non installato");
define("_MD_AM_NOCHANGE","Nessuna modifica");
define("_MD_AM_INSTALL","Installa");
define("_MD_AM_UNINSTALL","Disinstalla");
define("_MD_AM_SUBMIT","Invia");
define("_MD_AM_CANCEL","Annulla");
define("_MD_AM_DBUPDATE","Database aggiornato con successo!");
define("_MD_AM_BTOMADMIN","Torna all'Amministrazione Moduli");

// %s represents module name
define("_MD_AM_FAILINS","Non &egrave; possibile installare %s.");
define("_MD_AM_FAILACT","Non &egrave; possibile attivare %s.");
define("_MD_AM_FAILDEACT","Non &egrave; possibile disattivare %s.");
define("_MD_AM_FAILUPD","Non &egrave; possibile aggiornare %s.");
define("_MD_AM_FAILUNINS","Non &egrave; possibile disinstallare %s.");
define("_MD_AM_FAILORDER","Non &egrave; possibile riordinare %s.");
define("_MD_AM_FAILWRITE","Non &egrave;  stato possibile aggiungere l'elemento al menu principale.");
define("_MD_AM_ALEXISTS","Il modulo %s &egrave; gi&agrave; presente.");
define("_MD_AM_ERRORSC","Errore(i):");
define("_MD_AM_OKINS","Il modulo %s &egrave; stato installato con successo!");
define("_MD_AM_OKACT","Il modulo %s &egrave; stato attivato con successo!");
define("_MD_AM_OKDEACT","Il modulo %s &egrave; stato disattivato con successo!");
define("_MD_AM_OKUPD","Il modulo %s &egrave; stato aggiornato con successo!");
define("_MD_AM_OKUNINS","Il modulo %s &egrave; stato disinstallato con successo!");
define("_MD_AM_OKORDER","Il modulo %s &egrave; stato modificato con successo!");

define('_MD_AM_RUSUREINS','Premere il pulsante per installare questo modulo');
define('_MD_AM_RUSUREUPD','Premere il pulsante per aggiornare questo modulo');
define('_MD_AM_RUSUREUNINS','Sei sicuro di voler disinstallare questo modulo?');
define('_MD_AM_LISTUPBLKS','I seguenti blocchi verranno aggiornati.<br />Seleziona i blocchi il cui contenuto (opzioni e template) pu&ograve; essere sovrascritto.<br />');
define('_MD_AM_NEWBLKS','Nuovi blocchi');
define('_MD_AM_DEPREBLKS','Blocchi deprecati');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Installazione in corso ');
define('_MD_AM_TABLE_RESERVED','%s &egrave; una tabella riservata!');
define('_MD_AM_CREATE_TABLES','Creazione delle tabelle in corso...');
define('_MD_AM_TABLE_CREATED','Tabella %s generata');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Dati inseriti nella tabella %s');
define('_MD_AM_INSERT_DATA_FAILD','Non &egrave; stato possibile inserire %s nel database.');
define('_MD_AM_INSERT_DATA_DONE','Dati del modulo inseriti con successo.');
define('_MD_AM_MODULEID',' ID Modulo: %s');
define('_MD_AM_SQL_FOUND','File SQL trovato in %s ');
define('_MD_AM_SQL_NOT_FOUND','File SQL non trovato in %s');
define('_MD_AM_SQL_NOT_CREATE','ERRORE: Non &egrave; stato possibile creare %s ');
define('_MD_AM_SQL_NOT_VALID','%s non &egrave; un file con codice SQL valido!');

define('_MD_AM_GROUP_ID',' ID Gruppo: %s ');
define('_MD_AM_NAME',' Nome: ');
define('_MD_AM_VALUE',' Valore: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Aggiunta dei templates in corso...');
define('_MD_AM_TEMPLATES_DELETE','Eliminazione dei templates in corso...');
define('_MD_AM_TEMPLATES_UPDATE','Aggiornamento dei templates in corso...');

define('_MD_AM_TEMPLATE_ID','ID Template: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','Template %s aggiunto al database');
define('_MD_AM_TEMPLATE_ADD_ERROR','ERRORE: Non &egrave; stato possibile aggiungere il template %s al database.');
define('_MD_AM_TEMPLATE_COMPILED','Template %s compilato con successo ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','ERRORE: Compilazione del template %s non riuscita');
define('_MD_AM_TEMPLATE_DELETE_DATA','Template %s rimosso dal database. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','ERRORE: Non &egrave; stato possibile rimuovere il template %s dal database. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','Template %s inserito nel database. ');
define('_MD_AM_TEMPLATE_RECOMPILE','Template %s ricompilato con successo');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','ERRORE: Ricompilazione del template %s non riuscita');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','ERRORE: Non &egrave; stato possibile ricompilare il template %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','ERRORE: Impossibile eliminare il precedente template %s. Aggiornamento del file annullato. ');
define('_MD_AM_TEMPLATE_UPDATE','Template %s aggiornato con successo. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','ERRORE: Non &egrave; stato possibile aggiornare %s template. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Aggiunta dei blocchi...');
define('_MD_AM_BLOCKS_DELETE','Eliminazione dei blocchi in corso...');
define('_MD_AM_BLOCKS_REBUILD','Rigenerazione dei blocchi in corso...');

define('_MD_AM_BLOCK_ID',' ID Blocco: %s ');

define('_MD_AM_BLOCK_ACCESS','Permesso di accesso al blocco: aggiunto');
define('_MD_AM_BLOCK_ACCESS_ERROR','ERRORE: Impossibile impostare un permesso per questo blocco ');
define('_MD_AM_BLOCK_ADD','Blocco %s aggiunto con successo ');
define('_MD_AM_BLOCK_ADD_ERROR','ERRORE: Non &egrave; stato possibile aggiungere il blocco %s al database! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Errore del database: %s ');
define('_MD_AM_BLOCK_CREATED','Blocco %s creato con successo ');
define('_MD_AM_BLOCK_DELETE','Blocco %s eliminato. ');
define('_MD_AM_BLOCK_DELETE_DATA','Template del blocco %s eliminato dal dabase. ');
define('_MD_AM_BLOCK_DELETE_ERROR','ERRORE: Non &egrave; stato possibile eliminare il blocco %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','ERRORE: Impossibile eliminare il template del blocco %s dal database');
define('_MD_AM_BLOCK_DEPRECATED','Template del blocco %s deprecato ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','ERRORE: non &egrave; stato possibile rimuovere il template del blocco deprecato.  ');
define('_MD_AM_BLOCK_UPDATE','Blocco %s aggiornato. ');

/* Configs */
define('_MD_AM_GONFIG_ID','ID Config: %s');
define('_MD_AM_MODULE_DATA_ADD','Aggiunta dei dati di configurazione del modulo in corso...');
define('_MD_AM_MODULE_DATA_DELETE','Eliminazione delle opzioni di configurazione del modulo in corso...');
define('_MD_AM_MODULE_DATA_UPDATE','Dati del modulo aggiornati con successo.');

define('_MD_AM_CONFIG_ADD',' Opzione di configurazione aggiunta - ');
define('_MD_AM_CONFIG_DATA_ADD',' Configurazione %s aggiunta al database');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' ERRORE: Non &egrave; stato possibile inserire la configurazione %s nel database. ');
define('_MD_AM_GONFIG_DATA_DELETE','Dati di configurazione eliminati dal database. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','ERRORE: Impossibile eliminare i dati di configurazione dal database');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Impostazione dei permessi in corso...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','ERRORE: Impossibile eliminare i permessi del gruppo ');
define('_MD_AM_GROUP_PERMS_DELETED','Permessi dei gruppi eliminati ');

define('_MD_AM_ACCESS_ADMIN_ADD','Aggiunto permesso di amministrazione per il Gruppo ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','ERRORE: Impossibile aggiungere il permesso di amministrazione per Gruppo ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Aggiunto permesso di accesso per il Gruppo ID: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','ERRORE: Impossibile aggiungere il permesso di accesso per il Gruppo ID: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Esecuzione di %s non riuscita');
define('_MD_AM_FAILED_SUCESS','Script %s eseguito con successo.');

define('_MD_AM_DELETE_ERROR','ERRORE: Impossibile eliminare %s');
define('_MD_AM_UPDATE_ERROR','ERRORE: Impossibile aggiornare %s');
define('_MD_AM_DELETE_MOD_TABLES','Eliminazione delle tabelle del modulo in corso...');

define('_MD_AM_COMMENTS_DELETE','Eliminazione dei commenti in corso...');
define('_MD_AM_COMMENTS_DELETE_ERROR','ERRORE: Non &egrave; stato possibile eliminare i commenti');
define('_MD_AM_COMMENTS_DELETED','Commenti eliminati');

define('_MD_AM_NOTIFICATIONS_DELETE','Eliminazione delle notifiche in corso...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','ERRORE: Non &egrave; stato possibile eliminare le notifiche');
define('_MD_AM_NOTIFICATIONS_DELETED','Notifiche eliminate');

define('_MD_AM_TABLE_DROPPED','Tabella %s rimossa!');
define('_MD_AM_TABLE_DROPPED_ERROR','ERRORE: non &egrave; stato possibile rimuovere la tabella %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','ERRORE: Non autorizzato a rimuovere la tabella %s !');
?>
