<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: modulesadmin.php 5580 2010-10-21 19:38:48Z forxoops $
 */
//Translator: Xoops Italia Team - www.xoopsitalia.org
//Last translation update: 20/02/2011

// Navigation
define("_AM_SYSTEM_MODULES_ADMIN", "Gestione Moduli");
define("_AM_SYSTEM_MODULES_LIST", "Elenco moduli");
define("_AM_SYSTEM_MODULES_TOINSTALL", "Installazione modulo");
define("_AM_SYSTEM_MODULES_VALIDATE","Conferma modifiche");
define("_AM_SYSTEM_MODULES_SUBMITRES","Invio risultati");

// Messages
define("_AM_SYSTEM_MODULES_RUSUREINS","Premere il pulsante per installare questo modulo");
define("_AM_SYSTEM_MODULES_RUSUREUNINS","Si &egrave; sicuri di voler disinstallare questo modulo?");
define("_AM_SYSTEM_MODULES_RUSUREUPD","Premere il pulsante per aggiornare questo modulo");
define("_AM_SYSTEM_MODULES_BTOMADMIN","Torna alla Gestione Moduli");
define("_AM_SYSTEM_MODULES_INSTALLING","Installazione in corso ");
define("_AM_SYSTEM_MODULES_UNINSTAL","Disinstalla ");
define("_AM_SYSTEM_MODULES_DEACTIVATE","Disattiva ");
define("_AM_SYSTEM_MODULES_ACTIVATE","Attiva ");
define("_AM_SYSTEM_MODULES_UPDATING","Aggiornamento in corso ");

// Main
define("_AM_SYSTEM_MODULES_INSTALL","Installa");
define("_AM_SYSTEM_MODULES_UNINSTALL","Disinstalla");
define("_AM_SYSTEM_MODULES_UPDATE","Aggiorna");
define("_AM_SYSTEM_MODULES_VIEWLARGE","Vista estesa");
define("_AM_SYSTEM_MODULES_VIEWLINE","Vista compatta");

// %s represents module name
define("_AM_SYSTEM_MODULES_FAILINS","Impossibile installare %s.");
define("_AM_SYSTEM_MODULES_FAILACT","Impossibile attivare %s.");
define("_AM_SYSTEM_MODULES_FAILDEACT","Impossibile disattivare %s.");
define("_AM_SYSTEM_MODULES_FAILUPD","Impossibile aggiornare %s.");
define("_AM_SYSTEM_MODULES_FAILUNINS","Impossibile disinstallare %s.");
define("_AM_SYSTEM_MODULES_FAILORDER","Impossibile riordinare %s.");
define("_AM_SYSTEM_MODULES_FAILWRITE","Impossibile modificare il Menu principale.");
define("_AM_SYSTEM_MODULES_ALEXISTS","Il modulo %s &egrave; gi&agrave; presente.");
define("_AM_SYSTEM_MODULES_ERRORSC","Errore(i):");
define("_AM_SYSTEM_MODULES_OKINS","Modulo %s installato con successo.");
define("_AM_SYSTEM_MODULES_OKACT","Modulo %s attivato con successo.");
define("_AM_SYSTEM_MODULES_OKDEACT","Modulo %s disattivato con successo.");
define("_AM_SYSTEM_MODULES_OKUPD","Modulo %s aggiornato con successo.");
define("_AM_SYSTEM_MODULES_OKUNINS","Modulo %s disinstallato con successo.");
define("_AM_SYSTEM_MODULES_OKORDER","Modulo %s modificato con successo.");

define("_AM_SYSTEM_MODULES_MODULE","Moudulo");
define("_AM_SYSTEM_MODULES_VERSION","Versione");
define("_AM_SYSTEM_MODULES_LASTUP","Ultimo aggiornamento");
define("_AM_SYSTEM_MODULES_DEACTIVATED","Disattivato");
define("_AM_SYSTEM_MODULES_ACTION","Azione");
define("_AM_SYSTEM_MODULES_MENU","Menu");
define("_AM_SYSTEM_MODULES_HIDE","Nascondi");
define("_AM_SYSTEM_MODULES_SHOW","Mostra");

define("_AM_SYSTEM_MODULES_DUPEN","Voci duplicate nella tabella moduli!");
define("_AM_SYSTEM_MODULES_DEACTED","Il modulo selezionato &egrave; stato disattivato ed &egrave; ora possibile disinstallarlo.");
define("_AM_SYSTEM_MODULES_ACTED","Il modulo selezionato &egrave; stato attivato!");
define("_AM_SYSTEM_MODULES_UPDTED","Il modulo selezionato &egrave; stato stato aggiornato!");
define("_AM_SYSTEM_MODULES_SYSNO","Il modulo di Sistema non pu&ograve; essere disattivato.");
define("_AM_SYSTEM_MODULES_STRTNO","Questo modulo &egrave; impostato come pagina iniziale del sito. Per favore modificare il modulo iniziale.");

define("_AM_SYSTEM_MODULES_ORDER","Ordine");
define("_AM_SYSTEM_MODULES_ORDER0","(0 = nascosto)");
define("_AM_SYSTEM_MODULES_ACTIVE","Attivo");
define("_AM_SYSTEM_MODULES_INACTIVE","Non attivo");
define("_AM_SYSTEM_MODULES_NOTINSTALLED","Non installato");
define("_AM_SYSTEM_MODULES_NOCHANGE","Nessuna modifica");
define("_AM_SYSTEM_MODULES_SUBMIT","Invia");
define("_AM_SYSTEM_MODULES_CANCEL","Annulla");
define("_AM_SYSTEM_MODULES_DBUPDATE",_AM_SYSTEM_DBUPDATED);
define("_AM_SYSTEM_MODULES_LISTUPBLKS","I seguenti blocchi saranno aggiornati.<br />Selezionare i blocchi i cui contenuti (template e opzioni) possono esssere svorascritti.<br />");
define("_AM_SYSTEM_MODULES_NEWBLKS","Nuovi blocchi");
define("_AM_SYSTEM_MODULES_DEPREBLKS","Blocchi deprecati");

// Logger
define("_AM_SYSTEM_MODULES_TABLE_RESERVED","%s &egrave; una tabella riservata!");
define("_AM_SYSTEM_MODULES_CREATE_TABLES","Creazione tabelle in corso...");
define("_AM_SYSTEM_MODULES_TABLE_CREATED","Tabella %s creata");
define("_AM_SYSTEM_MODULES_INSERT_DATA","&nbsp;&nbsp; Dati inseriti nella tabella %s");
define("_AM_SYSTEM_MODULES_INSERT_DATA_FAILD","Impossibile inserire %s nel database.");
define("_AM_SYSTEM_MODULES_INSERT_DATA_DONE","Dati del modulo inseriti con successo.");
define("_AM_SYSTEM_MODULES_MODULEID"," ID Modulo: %s");
define("_AM_SYSTEM_MODULES_SQL_FOUND","File SQL rilevato in %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_FOUND","File SQL non rilevato in %s");
define("_AM_SYSTEM_MODULES_SQL_NOT_CREATE","ERRORE: Impossibile creare %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_VALID","%s non è SQL valido!");
define("_AM_SYSTEM_MODULES_GROUP_ID"," ID Gruppo: %s ");
define("_AM_SYSTEM_MODULES_NAME"," Nome: ");
define("_AM_SYSTEM_MODULES_VALUE"," Valore: ");

// Templates
define("_AM_SYSTEM_MODULES_TEMPLATES_ADD","Aggiunta templates in corso...");
define("_AM_SYSTEM_MODULES_TEMPLATES_DELETE","Rimozione  templates in corso...");
define("_AM_SYSTEM_MODULES_TEMPLATES_UPDATE","Aggiornamento templates in corso...");
define("_AM_SYSTEM_MODULES_TEMPLATE_ID","ID Template: %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA","Template %s aggiunto al database");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR","ERRORE: Impossibile inserire il template %s nel database.");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED","Template %s compilato ");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED","ERRORE: Compilazione del template %s fallita");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA","Template %s eliminato dal database. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD","ERRORE: Impossibile eliminare il template %s dal database.");
define("_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA","Template %s inserito nel database. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE","Template %s ricompilato");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD","ERRORE: Ricompilazione del template %s fallita");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR","ERRORE: Impossibile ricompilare il template %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR","ERRORE: Impossibile eliminare il precedente template %s. Annullamento dell'aggiornamento in corso. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE","Template %s aggiornato. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR","ERRORE: Impossibile aggiornare il template %s. ");

// Blocks
define("_AM_SYSTEM_MODULES_BLOCKS_ADD","Aggiunta blocchi in corso...");
define("_AM_SYSTEM_MODULES_BLOCKS_DELETE","Eliminazione blocchi in corso...");
define("_AM_SYSTEM_MODULES_BLOCKS_REBUILD","Rigenerazione blocchi in corso...");
define("_AM_SYSTEM_MODULES_BLOCK_ID"," ID Blocco: %s ");
define("_AM_SYSTEM_MODULES_BLOCK_ACCESS","Aggiunto il permesso di accesso al blocco");
define("_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR","ERRORE: Impossibile aggiungere il permesso di accesso al blocco");
define("_AM_SYSTEM_MODULES_BLOCK_ADD","Blocco %s aggiunto ");
define("_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR","ERRORE: Impossibile aggiungere il blocco %s al database! ");
define("_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE","Errore database: %s ");
define("_AM_SYSTEM_MODULES_BLOCK_CREATED","Blocco %s creato ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE","Blocco %s eliminato. ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA","Template del blocco %s eliminato dal database. ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR","ERRORE: Impossibile eliminare il blocco %s");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR","ERRORE: Impossibile eliminare il template del blocco %s dal database");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED","Template del blocco %s deprecato ");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR","ERRORE: Impossibile rimuovere il template del blocco deprecato.  ");
define("_AM_SYSTEM_MODULES_BLOCK_UPDATE","Blocco %s aggiornato. ");

// Configs
define("_AM_SYSTEM_MODULES_GONFIG_ID","ID Configurazione: %s");
define("_AM_SYSTEM_MODULES_MODULE_DATA_ADD","Aggiunta dei dati di configurazione del modulo in corso...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_DELETE","Eliminazione dei dati di configurazione del modulo in corso...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE","Dati del modulo aggiornati.");
define("_AM_SYSTEM_MODULES_CONFIG_ADD"," Opzione di configurazione aggiunta");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD"," Configurazione %s aggiunta al database");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR"," ERRORE: Impossibile aggiungere la configurazione %s al database. ");
define("_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE","Dati di configurazione eliminati dal database. ");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR","ERRORE: Impossibile eliminare i dati di configurazione dal database");

// Access
define("_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD","Impostazione dei permessi del gruppo in corso...");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR","ERRORE: Impossibile eliminare i peremssi del gruppo ");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED","Permessi dei gruppi eliminati ");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD","Aggiunto il permesso di amministrazione per il Gruppo con ID %s");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR","ERRORE: Impossibile aggiungere il permesso di amministrazione per il Gruppo con ID %s");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR","Aggiunto il permesso di accesso per il Gruppo con ID: %s");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR","ERRORE: Impossibile aggiungere il permesso di accesso per il Gruppo con ID: %s");

// execute module specific install script if any
define("_AM_SYSTEM_MODULES_FAILED_EXECUTE","Esecuzione di %s non riuscita");
define("_AM_SYSTEM_MODULES_FAILED_SUCESS","%s eseguito con successo.");
define("_AM_SYSTEM_MODULES_DELETE_ERROR","ERRORE: Impossibile eliminare %s");
define("_AM_SYSTEM_MODULES_UPDATE_ERROR","ERRORE: Impossibile aggionare %s");
define("_AM_SYSTEM_MODULES_DELETE_MOD_TABLES","Eliminazione delle tabelle in corso...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE","Eliminazione dei commenti in corso...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR","ERRORE: Impossibile eliminare i commenti");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETED","Commenti eliminati");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE","Eliminazione delle notifiche in corso...");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR","ERRORE: Impossibile eliminare le notifiche");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED","Notifiche eliminate");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED","Tabella %s eliminata!");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR","ERRORE: Impossibile eliminare la tabella %s");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED", "ERRORE: Non autorizzato a eliminare la tabella %s !");

// Tips
define("_AM_SYSTEM_MODULES_TIPS", 
"<ul>
<li>Se si installa un nuovo modulo, ricordarsi di impostarne le preferenze, i blocchi e i permessi!</li>
<li>Per nascondere un modulo nel blocco del Menu Principale impostare l'ordine su 0.</li>
<li>Eliminare dal server i file dei moduli non utilizzati per evitare problemi di sicurezza e mantenere il sito protetto.</li>
<li>Per modificare l'ordinamento dei moduli nel blocco del Menu Principale &egrave; suffuciente trascinare e rilasciare la riga del nella posizione desiderata.</li>
</ul>");
define("_AM_SYSTEM_MODULES_CONFIRM_TIPS",
"<ul>
<li>Verifica di tutte le modifiche prima dell'accettazione.</li>
</ul>");

?>