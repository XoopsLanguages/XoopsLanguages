<?php   
/**
 * ****************************************************************************
 *  - TDMCreate By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - Licence GPL Copyright (c)  (http://www.tdmxoops.net)
 *  - Revision Copyright (c)  (http://www.txmodxoops.org)
 *
 * This license contains restrictions!!!
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @license     TDM GPL license
 * @author		TDM TEAM DEV MODULE 
 * @author      TXMod Xoops (info@txmodxoops.org)
 *
 * Version : 1.39 Tue 2012/02/14 16:20:18 : Timgno Exp $
 * ****************************************************************************
 */	
//Menu
define('_AM_TDMCREATE_ADMIN_INDEX',"Indice");
define('_AM_TDMCREATE_ADMIN_MODULES',"Aggiungi modulo");
define('_AM_TDMCREATE_ADMIN_TABLES',"Aggiungi tabella");
define('_AM_TDMCREATE_ADMIN_CONST',"Pannello Costruzione Modulo");
define('_AM_TDMCREATE_ADMIN_ABOUT',"Informazioni");
define('_AM_TDMCREATE_STATISTICS',"Statistiche Del Modulo");
define('_AM_TDMCREATE_MODULES',"Statistiche Moduli");
define('_AM_TDMCREATE_THEREARE_MODULES_ONLINE',"Moduli nel Database: <span class='bold'>%s</span> ");
define('_AM_TDMCREATE_THEREARE_MODULES_PENDING',"Ci sono <span class='bold'>%s</span> Moduli in attesa nel Database");
define('_AM_TDMCREATE_TABLES',"Statistiche Tabelle");
define('_AM_TDMCREATE_THEREARE_TABLES_ONLINE',"Tabelle nel Database: <span class='bold'>%s</span> ");
define('_AM_TDMCREATE_THEREARE_TABLES_PENDING',"Ci sono <span class='bold'>%s</span> Tabelle in attesa nel Database");
define('_AM_TDMCREATE_LANGUAGES',"Statistiche Lingue");
define('_AM_TDMCREATE_THEREARE_LANGUAGES_ONLINE',"Lingue nel Database: <span class='bold'>%s</span> ");
define('_AM_TDMCREATE_THEREARE_LANGUAGES_PENDING',"Ci sono <span class='bold'>%s</span> Lingue in attesa nel Database");

//Buttons
define('_AM_TDMCREATE_MODULES_NEW',"Aggiungi Modulo");
define('_AM_TDMCREATE_LANGUAGES_NEWFOLDER',"Aggiungi Cartella");
define('_AM_TDMCREATE_LANGUAGES_NEWFILE',"Aggiungi File");
define('_AM_TDMCREATE_MODULES_LIST',"Lista Moduli");
define('_AM_TDMCREATE_TABLES_NEW',"Aggiungi Tabella");
define('_AM_TDMCREATE_TABLES_LIST',"Lista Tabelle");
define('_AM_TDMCREATE_TABLES_TOPICS',"Nuovo Topics");

define('_AM_TDMCREATE_LANGUAGES_NEW',"Aggiungi Define Lingua");
define('_AM_TDMCREATE_LANGUAGES_LIST',"Lista Define Lingue");

//General
define('_AM_TDMCREATE_FORMOK',"Registrato con successo");
define('_AM_TDMCREATE_FORMDELOK',"Cancellato con successo");
define('_AM_TDMCREATE_FORMSUREDEL',"Sei sicuro di voler cancellare: <span style='color : Red'><b>%s</b></span>");
define('_AM_TDMCREATE_FORMSURERENEW',"Sei sicuro di voler rinnovare:<span style='color : Red'><b>%s</b></span>");
define('_AM_TDMCREATE_FORMUPLOAD',"Caricare Nuovo File -> ");
define('_AM_TDMCREATE_FORMIMAGE_PATH',"File presenti in %s");
define('_AM_TDMCREATE_FORMACTION',"Azione");
define('_AM_TDMCREATE_FORMEDIT',"Modifica");
define('_AM_TDMCREATE_FORMDEL',"Elimina");
define('_AM_TDMCREATE_FORMCHAMPS',"Modifica comando di campo");
define('_AM_TDMCREATE_FORM_INFO_TABLE',"Informazioni sul tavolo");
define('_AM_TDMCREATE_FORM_INFO_TABLE_FIELD',"<b>È possibile aggiungere altri campi in questa tabella:<br /><font color='green'>tables_(submitter, publisher, created, published, expired, status, online, pending)</font></b>");
define('_AM_TDMCREATE_FORM_INFO_ADDITONAL',"File aggiuntivi");
define('_AM_TDMCREATE_FORM_INFO_TABLE_ADDITONAL',"<b>È possibile aggiungere file di ricerca e commenti</b>");
//define('_AM_TDMCREATE_TABLES_TOPIC_ADD',"Aggiungi la tabella per la categoria");

define('_AM_TDMCREATE_OFF',"Non In Linea");
define('_AM_TDMCREATE_ON',"In linea");
define('_AM_TDMCREATE_EDIT',"Modifica");
define('_AM_TDMCREATE_DELETE',"Elimina");

// Modules.php
define('_AM_TDMCREATE_ID',"Id");
define('_AM_TDMCREATE_NAME',"Nome");
define('_AM_TDMCREATE_FOLDER',"Cartella");
define('_AM_TDMCREATE_BLOCKS',"Blocchi");
define('_AM_TDMCREATE_IMAGE',"Immagine");
define('_AM_TDMCREATE_VERSION',"Versione");
define('_AM_TDMCREATE_RELEASE',"Data creazione");
define('_AM_TDMCREATE_STATUS',"Status");
define('_AM_TDMCREATE_SEARCH',"Ricerca");
define('_AM_TDMCREATE_DISPLAY_USER',"Visibile lato Utente");
define('_AM_TDMCREATE_DISPLAY_ADMIN',"Visibile lato Admin");
define('_AM_TDMCREATE_COMMENTS',"Commenti");

define('_AM_TDMCREATE_MODULES_ADD',"Aggiungi un modulo");
define('_AM_TDMCREATE_MODULES_EDIT',"Modifica di un modulo");
define('_AM_TDMCREATE_MODULES_DELETE',"Eliminare un modulo");

define('_AM_TDMCREATE_MODULES_IMPORTANT',"Informazioni");
define('_AM_TDMCREATE_MODULES_NOTIMPORTANT',"Informazioni facoltative");
define('_AM_TDMCREATE_MODULES_ID',"Id");
define('_AM_TDMCREATE_MODULES_NAMEANDFOLDER',"Nome Modulo e Cartella");
define('_AM_TDMCREATE_MODULES_NAME',"Nome Modulo");
define('_AM_TDMCREATE_MODULES_FOLDER',"Nome Cartella");
define('_AM_TDMCREATE_MODULES_VERSION',"Versione");
define('_AM_TDMCREATE_MODULES_DESCRIPTION',"Descrizione");
define('_AM_TDMCREATE_MODULES_AUTHOR',"Autore");
define('_AM_TDMCREATE_MODULES_AUTHOR_MAIL',"Email dell'autore");
define('_AM_TDMCREATE_MODULES_AUTHOR_WEBSITE_URL',"Url del sito web dell'autore");
define('_AM_TDMCREATE_MODULES_AUTHOR_WEBSITE_NAME',"Nome del sito web dell'autore");
define('_AM_TDMCREATE_MODULES_CREDITS',"Crediti");
define('_AM_TDMCREATE_MODULES_LICENSE',"Licenza");
define('_AM_TDMCREATE_MODULES_RELEASE_INFO',"Informazioni di rilascio");
define('_AM_TDMCREATE_MODULES_RELEASE_FILE',"File del Rilascio");
define('_AM_TDMCREATE_MODULES_MANUAL',"Manuale");
define('_AM_TDMCREATE_MODULES_MANUAL_FILE',"File del Manuale");
define('_AM_TDMCREATE_MODULES_IMAGE',"Immagine");
define('_AM_TDMCREATE_MODULES_DEMO_SITE_URL',"Url Demo del sito");
define('_AM_TDMCREATE_MODULES_DEMO_SITE_NAME',"Nome Demo del sito");
define('_AM_TDMCREATE_MODULES_FORUM_SITE_URL',"Url del Forum del sito");
define('_AM_TDMCREATE_MODULES_FORUM_SITE_NAME',"Nome del Forum del sito");
define('_AM_TDMCREATE_MODULES_WEBSITE_URL',"Url del sito web del modulo");
define('_AM_TDMCREATE_MODULES_WEBSITE_NAME',"Nome del sito web del modulo");
define('_AM_TDMCREATE_MODULES_RELEASE',"Data Rilascio");
define('_AM_TDMCREATE_MODULES_STATUS',"Stato");
define('_AM_TDMCREATE_MODULES_DONATIONS',"Donazioni");
define('_AM_TDMCREATE_MODULES_DISPLAY_ADMIN',"Visibile lato Admin");
define('_AM_TDMCREATE_MODULES_DISPLAY_USER',"Visibile lato Utente");
define('_AM_TDMCREATE_MODULES_ACTIVE_SEARCH',"Ricerca attiva");
define('_AM_TDMCREATE_MODULES_ACTIVE_COMS',"Comments");

// tables.php
define('_AM_TDMCREATE_NB_CHAMPS',"Numero Campi");
define('_AM_TDMCREATE_TABLES_ADD',"Creazione Nuova Tabella");
define('_AM_TDMCREATE_TABLES_EDIT',"Modifica Tabella");
define('_AM_TDMCREATE_TABLES_DELETE',"Elimina Tabelle");

define('_AM_TDMCREATE_TABLES_TOPIC_ADD',"Aggiungi un argomento");
define('_AM_TDMCREATE_TABLES_IMAGE',"Immagine");

define('_AM_TDMCREATE_TABLES_ID',"Id");
define('_AM_TDMCREATE_TABLES_MODULES',"Moduli");
define('_AM_TDMCREATE_TABLES_MODULE_TABLE',"Modulo da tavolo");
define('_AM_TDMCREATE_TABLES_NAME',"Nome Tabella");
define('_AM_TDMCREATE_TABLES_NAME_EMPTY',"Se attivato, i campi della tabella avranno un prefisso");
define('_AM_TDMCREATE_TABLES_IMG',"IMG");
define('_AM_TDMCREATE_TABLES_BLOCKS',"Creare blocchi: (casuale, tardi, oggi)");
define('_AM_TDMCREATE_TABLES_NB_CHAMPS',"Numero Campi");
define('_AM_TDMCREATE_TABLES_CHAMPS',"Campi");
define('_AM_TDMCREATE_TABLES_PARAMETRES',"Parametri");
define('_AM_TDMCREATE_TABLES_DISPLAY_ADMIN',"Visibile in Admin");
define('_AM_TDMCREATE_TABLES_DISPLAY_USER',"Visibile in Utenti");
define('_AM_TDMCREATE_TABLES_CHECKOPTIONS',"Opzione Campi Extra");
define('_AM_TDMCREATE_TABLES_SUBMITTER',"Mittente");
define('_AM_TDMCREATE_TABLES_PUBLISHER',"Pubblicatore");
define('_AM_TDMCREATE_TABLES_CREATED',"Data Creazione");
define('_AM_TDMCREATE_TABLES_PUBLISHED',"Data Inizio");
define('_AM_TDMCREATE_TABLES_EXPIRED',"Data Fine");
define('_AM_TDMCREATE_TABLES_STATUS',"Stato");
define('_AM_TDMCREATE_TABLES_ONLINE',"Online");
define('_AM_TDMCREATE_TABLES_PENDING',"In attesa");
define('_AM_TDMCREATE_TABLES_SEARCH',"Ricerca");
define('_AM_TDMCREATE_TABLES_COMS',"Commenti");

//Champs
define('_AM_TDMCREATE_CHAMPS_ADD',"Aggiungi tabella");
define('_AM_TDMCREATE_CHAMPS_EDIT',"Modifica tabella");
define('_AM_TDMCREATE_CHAMPS_ID',"ID");
define('_AM_TDMCREATE_CHAMPS_NAME',"Campo");
define('_AM_TDMCREATE_CHAMPS_TYPE',"Tipo");
define('_AM_TDMCREATE_CHAMPS_VALUE',"Valore");
define('_AM_TDMCREATE_CHAMPS_ATTRIBUTES',"Attributo");
define('_AM_TDMCREATE_CHAMPS_NULL',"Nullo");
define('_AM_TDMCREATE_CHAMPS_DEFAULT',"(Predefinito)");
define('_AM_TDMCREATE_CHAMPS_KEY',"Chiave");
define('_AM_TDMCREATE_CHAMPS_OTHERS',"Parametri");
define('_AM_TDMCREATE_CHAMPS_ELEMENTS',"Form: Elementi");
define('_AM_TDMCREATE_CHAMPS_DISPLAY_ADMIN',"Pagina: Vista admin");
define('_AM_TDMCREATE_CHAMPS_DISPLAY_USER',"Pagina: Vista utente");
define('_AM_TDMCREATE_CHAMPS_BLOCK',"Blocco: Visializza Blocco");
define('_AM_TDMCREATE_CHAMPS_MAIN_FIELD',"Tabella: Campo principale");
define('_AM_TDMCREATE_CHAMPS_SEARCH',"Ricerca: Indice");
define('_AM_TDMCREATE_CHAMPS_REQUIRED',"Form: Richiedi campo");
define('_AM_TDMCREATE_CHAMPS_SUBMIT',"Inoltra");

// language.php
define('_AM_TDMCREATE_LANGUAGES_ADD',"Aggiungi lingua");
define('_AM_TDMCREATE_LANGUAGES_EDIT',"Modifica lingua");
define('_AM_TDMCREATE_LANGUAGES_DELETE',"Eliminare lingua");

define('_AM_TDMCREATE_LANGUAGES_ID',"Id");
define('_AM_TDMCREATE_LANGUAGES_NEWLINE',"New Line <br /> <i>senza estensione (ad esempio: admin).</i> <br /> <i>se si tratta di linguaggio/file admin.php (ad esempio: cognome, nome o il nome)</i>");
define('_AM_TDMCREATE_LANGUAGES_MODULES',"Nome modulo");
define('_AM_TDMCREATE_LANGUAGES_FILE',"Nome file");
define('_AM_TDMCREATE_LANGUAGES_DEF',"Definizione");
define('_AM_TDMCREATE_LANGUAGES_DESC',"Descrizione");

// builder.php
define('_AM_TDMCREATE_CONST_MODULES',"Selezionare il modulo che si vuole costruire");
define('_AM_TDMCREATE_CONST_TABLES',"Selezionare la tabella che si vuole compilare<br /><i>Permette di creare solo i file delle tabelle selezionate nella root del modulo</i>.");

//Creation
//OK
define('_AM_TDMCREATE_CONST_OK_ARCHITECTURE',"Creazione dell&#39;architettura del modulo (file, index.html, icone ,...)");
define('_AM_TDMCREATE_CONST_OK_XOOPS_VERSION',"Creazione del file <b>xoops_version.php</b> nella cartella principale del modulo");
define('_AM_TDMCREATE_CONST_OK_INDEX_USER',"Creazione del file <b>index.php</b>");
define('_AM_TDMCREATE_CONST_OK_BLOCKS',"Creazione del file <b>blocks.php</b> nella cartella: blocks");
define('_AM_TDMCREATE_CONST_OK_SQL',"Creazione del file <b>%s</b> nella cartella: sql");
define('_AM_TDMCREATE_CONST_OK_SEARCH',"Creazione del file <b>search.inc.php</b> nella cartella: include");
define('_AM_TDMCREATE_CONST_OK_COMS',"Creazione dei file per i commenti");
define('_AM_TDMCREATE_CONST_OK_DOCS',"Creazione del file <b>%s</b> nella cartella: docs");
define('_AM_TDMCREATE_CONST_OK_CSS',"Creazione del file <b>%s</b> nella cartella: css");
define('_AM_TDMCREATE_CONST_OK_ROOTS',"Creazione del file <b>%s</b> nella cartella principale del modulo");
define('_AM_TDMCREATE_CONST_OK_CLASSES',"Creazione del file <b>%s</b> nella cartella: class");
define('_AM_TDMCREATE_CONST_OK_ADMINS',"Creazione del file <b>%s</b> nella cartella: admin");
define('_AM_TDMCREATE_CONST_OK_LANGUAGES',"Creazione del file <b>%s</b> nella cartella: lingue");
define('_AM_TDMCREATE_CONST_OK_INCLUDES',"Creazione del file <b>%s</b> nella cartella: include");
define('_AM_TDMCREATE_CONST_OK_TEMPLATES',"Creazione del file <b>%s</b> nella cartella: templates");
define('_AM_TDMCREATE_CONST_OK_TEMPLATES_BLOCKS',"Creazione del file <b>%s</b> nella cartella: templates/blocks");
define('_AM_TDMCREATE_CONST_OK_TEMPLATES_ADMIN',"Creazione del file <b>%s</b> nella cartella: templates/admin");

//NOTOK
define('_AM_TDMCREATE_CONST_NOTOK_ARCHITECTURE',"Problemi: Creazione di architettura modulo (file, index.html, icone ,...)");
define('_AM_TDMCREATE_CONST_NOTOK_XOOPS_VERSION',"Problemi: Creazione del file <b>xoops_version.php</b>");
define('_AM_TDMCREATE_CONST_NOTOK_BLOCKS',"Problemi: Creazione di blocchi nella cartella blocchi");
define('_AM_TDMCREATE_CONST_NOTOK_SQL',"Problemi: Creazione di <b>mysql.sql</b> nella cartella sql");
define('_AM_TDMCREATE_CONST_NOTOK_SEARCH',"Problemi: Creazione di <b>search.inc.php</b> nella cartella include");
define('_AM_TDMCREATE_CONST_NOTOK_COMS',"Problemi: Creazione dei file per i commenti");
define('_AM_TDMCREATE_CONST_NOTOK_DOCS',"Problema: La creazione del file <b>%s</b> nella cartella: docs");
define('_AM_TDMCREATE_CONST_NOTOK_CSS',"Problema: La creazione del file <b>%s</b> nella cartella: css");
define('_AM_TDMCREATE_CONST_NOTOK_ROOTS',"Problema: Creazione del file <b>%s</b> nella radice del modulo");
define('_AM_TDMCREATE_CONST_NOTOK_CLASSES',"Problemi: Creazione del file <b>%s</b> nella cartella class");
define('_AM_TDMCREATE_CONST_NOTOK_ADMINS',"Problema: La creazione del file: <b>%s</b> nella cartella: admin");
define('_AM_TDMCREATE_CONST_NOTOK_LANGUAGES',"Problema: La creazione del file: <b>%s</b> nella cartella: lingue");
define('_AM_TDMCREATE_CONST_NOTOK_INCLUDES',"Problema: La creazione del file: <b>%s</b> nella cartella: include");
define('_AM_TDMCREATE_CONST_NOTOK_TEMPLATES',"Problema: La creazione del file: <b>%s</b> nella cartella: templates");
define('_AM_TDMCREATE_CONST_NOTOK_TEMPLATES_BLOCKS',"Problema: La creazione del file: <b>%s</b> nella cartella: templates/blocchi");
define('_AM_TDMCREATE_CONST_NOTOK_TEMPLATES_ADMIN',"Problema: La creazione del file: <b>%s</b> nella cartella: templates/admin");

// Filemanager.php
//Nav
define('_AM_TDMCREATE_FILEMANAGER_NAV_MANAGER',"File Manager");
define('_AM_TDMCREATE_FILEMANAGER_NAV_MAIN',"File Manager");

// Consigli
define('_AM_TDMCREATE_FILEMANAGER_NAV_TIPS',"
<ul>
 <li>Cambia i permessi dei file, dei contenuti o semplicemente elimina i file inutilizzati dal tuo sito XOOPS.</li>
</ul>
");

// Main Filemanager
define('_AM_TDMCREATE_FILEMANAGER_DIRECTORY',"Directory");
define('_AM_TDMCREATE_FILEMANAGER_FILES',"File");
define('_AM_TDMCREATE_FILEMANAGER_GENERATE',"Forza generazione");
define('_AM_TDMCREATE_FILEMANAGER_SELECT_THEME',"Seleziona tema");
define('_AM_TDMCREATE_FILEMANAGER_FORCE_GENERATED',"Forza generata");
define('_AM_TDMCREATE_FILEMANAGER_NAV_FILE_GENERATED',"File generati");
define('_AM_TDMCREATE_FILEMANAGER_NOT_CREATED',"Nessun file creato");
define('_AM_TDMCREATE_FILEMANAGER_HOME',"Home");
define('_AM_TDMCREATE_FILEMANAGER_SAVE',"Salva");
define('_AM_TDMCREATE_FILEMANAGER_CANCEL',"Cancella");
define('_AM_TDMCREATE_FILEMANAGER_RESTORE',"Ripristina");
define('_AM_TDMCREATE_FILEMANAGER_REFRESH',"Aggiorna");
define('_AM_TDMCREATE_FILEMANAGER_UPLOAD',"Carica file");
define('_AM_TDMCREATE_FILEMANAGER_UPLOAD_CHOOSE',"Seleziona il file da caricare");
define('_AM_TDMCREATE_FILEMANAGER_ADDDIR',"Aggiungi directory");
define('_AM_TDMCREATE_FILEMANAGER_ADDDIR_NAME',"Scegli il nome della directory");
define('_AM_TDMCREATE_FILEMANAGER_ADDFILE',"Aggiungi nuovo file");
define('_AM_TDMCREATE_FILEMANAGER_DELDIR',"Cancella Elenco");

define('_AM_TDMCREATE_FILEMANAGER_RESTORE_ERROR_FILE_EXISTS',"Errore: file inesistente");
define('_AM_TDMCREATE_FILEMANAGER_RESTORE_ERROR_FILE_DELETE',"Errore: file non cancellato");
define('_AM_TDMCREATE_FILEMANAGER_RESTORE_ERROR_FILE_RENAME',"Errore: non puoi rinominare il file");
define('_AM_TDMCREATE_FILEMANAGER_BACK',"Indietro");
define('_AM_TDMCREATE_FILEMANAGER_DELETE',"Cancella");
define('_AM_TDMCREATE_FILEMANAGER_ERROR',"Errore");
define('_AM_TDMCREATE_FILEMANAGER_EDIT',"Modifica:");
define('_AM_TDMCREATE_FILEMANAGER_EMPTY_FILE',"File vuoto");
define('_AM_TDMCREATE_FILEMANAGER_DELDIR_NOTOK',"Errore: nel cancellare questa cartella");
define('_AM_TDMCREATE_FILEMANAGER_DELDIR_OK',"Directory cancellata con successo");

// Messaggio
define('_AM_TDMCREATE_FILEMANAGER_UPLOAD_FILE',"File caricato con successo");
define('_AM_TDMCREATE_FILEMANAGER_EXTRACT_FILE',"File estratti correttamente");
define('_AM_TDMCREATE_FILEMANAGER_EXTRACT_ERROR',"I file non possono essere estratti");
define('_AM_TDMCREATE_FILEMANAGER_DELETE_FILE',"File cancellato con successo");
define('_AM_TDMCREATE_FILEMANAGER_DIR_SUCCESS',"Directory creata con successo");
define('_AM_TDMCREATE_FILEMANAGER_DIR_ERROR',"La directory non può essere creata");
define('_AM_TDMCREATE_FILEMANAGER_DIR_RYSDEL',"Sei sicuro di voler cancellare questa cartella?");
define('_AM_TDMCREATE_FILEMANAGER_FILE_SUCCESS',"File creato con successo");
define('_AM_TDMCREATE_FILEMANAGER_SUREDEL',"Sei sicuro di voler cancellare il file %s?");
define('_AM_TDMCREATE_FILEMANAGER_DIR_SUREDEL',"Sei sicuro di voler cancellare la directory %s? <br /> Attenzione: tutte le sottodirectory e file verranno eliminati");

//Error NoFrameworks
//define('_AM_MODULEADMIN_MISSING',"Errore: non stai utilizzando il Frameworks 'modulo admin'. Si prega di installare questo Frameworks");
define('_AM_TDMCREATE_MAINTAINEDBY',"<span class='bold green'>%s</span><span class=' small italic'> &#232; gestito da <a href='http://www.txmodxoops.org/modules/newbb/' title='Visit TXMod Xoops Community' class='tooltip' rel='external'>TXMod Xoops Community</a> e da <a href='http://www.xoops.org/modules/newbb/' title='Visit Xoops Community' class='tooltip' rel='external'>Xoops Community</a></span>");
// Readme
define('_AM_TDMCREATE_README',"Leggimi");
define('_AM_TDMCREATE_CHANGELOG',"Cambio Log");
define('_AM_TDMCREATE_CREDITS',"Crediti");
define('_AM_TDMCREATE_INSTALL',"Installazione");
define('_AM_TDMCREATE_LICENCE',"Licenza");
define('_AM_TDMCREATE_LANGDIFF',"Differenze Lingua");
?>