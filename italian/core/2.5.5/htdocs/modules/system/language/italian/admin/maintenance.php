<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id$
 */
//Translator: Xoops Italia Team - www.xoopsitalia.org
//Last translation update: 20/02/2011

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER", "Manutenzione");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST","Manutenzione");
define("_AM_SYSTEM_MAINTENANCE_NAV_DUMP","Dump");

define("_AM_SYSTEM_MAINTENANCE_SESSION","Svuotamento della tabella sessioni");
define("_AM_SYSTEM_MAINTENANCE_SESSION_OK","Manutenzione sessione: OK");
define("_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK","Manutenzione sessione: Errore");
define("_AM_SYSTEM_MAINTENANCE_CACHE","Pulizia delle cartelle di cache");
define("_AM_SYSTEM_MAINTENANCE_CACHE_OK","Manutenzione cache: OK");
define("_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK","Mantenzione cache: Errore");
define("_AM_SYSTEM_MAINTENANCE_TABLES","Manutenzione tabelle");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OK","Manutenzione tabelle: OK");
define("_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK","Manutenzione tabelle: Errore");
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC","Ottimizza, Controlla, Ripara e Analizza le tabelle del database");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK","Manutenzione database: OK");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK","Manutenzione database: Errore");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1","Ottimizza tabella(e)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2","Controlla tabella(e)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3","Ripara tabella(e)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4","Analizza tabella(e)");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC", 
"ANALIZZA: analizza e memorizza la chiave di distribuzione di una tabella. Durante l'analisi la tabella &egrave; momentaneamente bloccata in lettura.<br />
CONTROLLA: verifica la presenza di errori nelle tabelle.<br />
OTTIMIZZA: libera spazio non utilizzato e deframmenta i dati.<br />
RIPARA: ripara una tabella potenzialmente corrotta.");

define("_AM_SYSTEM_MAINTENANCE_RESULT","Risultato");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT","Nessun risultato");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE","Pulizia cartelle cache");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION","Svuotamento tabella sessioni");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY","Manutenzione tabelle database");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE","Nessuna opzione di manutenzione selezionata");

define("_AM_SYSTEM_MAINTENANCE_TABLES1","Tabelle");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE","Ottimizza");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK","Controlla"); 
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR","Ripara");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE","Analizza");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP","Dump");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES","Selezionare tabella(e) o modulo(i)");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP","Aggiungere al dump l'istruzione DROP TABLE IF EXISTS 'nome_tabella'<br />Attenzione! in caso di importazione attivando questa impostazione i dati del dump sovrascriveranno le tabelle gi&agrave; esistenti");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR", "OPPURE");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND", "E");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES", "&Egrave; necessario selezionare almeno una tabella o un modulo");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES", "Nessuna tabella");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES", "Tabella(e)");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES", "Struttura");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS", "Numero di record");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED", "File generato");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT", "Stato");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS", "record");

// Tips
define("_AM_SYSTEM_MAINTENANCE_TIPS", 
"<ul>
<li>&Egrave; possibile eseguire un'immediata manutenzione della propria intallazione di Xoops.  Svuotare le cache o la tabella sessioni ed eseguire operazioni sulle tabelle del database.</li>
</ul>");

?>  