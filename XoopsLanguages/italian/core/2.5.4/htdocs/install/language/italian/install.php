<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      dugris <dugris@frxoops.org>
 * @version     $Id: install.php 5478 2010-10-10 20:55:48Z forxoops $
 */

// _LANGCODE: it
// _CHARSET : UTF-8
// Translator: Xoops Italia Team - www.xoopsitalia.org
// Last translation update: 08/03/2011

define( "SHOW_HIDE_HELP", "Mostra/Nascondi testo di aiuto" );

// License
define('LICENSE_NOT_WRITEABLE', 'La licenza &egrave; %s . <br/><font style="colour:#ff0000">Rendere il file ../include/license.php scrivibile (chmod 777)</font>');
define('LICENSE_IS_WRITEABLE', 'La licenza &egrave; %s');

// Configuration check page
define( "SERVER_API", "Server API" );
define( "PHP_EXTENSION", "Estensione %s" );
define( "CHAR_ENCODING", "Codifica dei caratteri" );
define( "XML_PARSING", "Parsing XML" );
define( "REQUIREMENTS", "Requisiti" );
define( "_PHP_VERSION", "Versione PHP" );
define( "RECOMMENDED_SETTINGS", "Impostazioni raccomandate" );
define( "RECOMMENDED_EXTENSIONS", "Estensioni raccomandate" );
define( "SETTING_NAME", "Nome dell'impostazione" );
define( "RECOMMENDED", "Raccomandata" );
define( "CURRENT", "Corrente" );
define( "RECOMMENDED_EXTENSIONS_MSG", "Queste estensioni non sono necessarie per l'utilizzo base del sistema, ma possono diventarlo per alcune funzioni aggiuntive speciali
    (come il multi-lingua, il supporto RSS o le gallerie di immagini). Si raccomanda quindi di verificarne la presenza." );
define( "NONE", "Non presente" );
define( "SUCCESS", "Attiva" );
define( "WARNING", "Attenzione" );
define( "FAILED", "Non attiva" );

// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "Installazione di XOOPS" );

define( "LANGUAGE_SELECTION", "Selezione lingua" );
define( "LANGUAGE_SELECTION_TITLE", "Selezionare la lingua per l'installazione");        // L128
define( "INTRODUCTION", "Introduzione" );
define( "INTRODUCTION_TITLE", "Benevenuti nell'installazione di XOOPS" );        // L0
define( "CONFIGURATION_CHECK", "Verifica configurazione" );
define( "CONFIGURATION_CHECK_TITLE", "Verifica della configurazione del server" );
define( "PATHS_SETTINGS", "Impostazione percorsi" );
define( "PATHS_SETTINGS_TITLE", "Impostazione dei percorsi" );
define( "DATABASE_CONNECTION", "Connessione al database" );
define( "DATABASE_CONNECTION_TITLE", "Connessione al database" );
define( "DATABASE_CONFIG", "Configurazione database" );
define( "DATABASE_CONFIG_TITLE", "Configurazione del database" );
define( "CONFIG_SAVE", "Salvataggio configurazione" );
define( "CONFIG_SAVE_TITLE", "Salvataggio della configurazione di sistema" );
define( "TABLES_CREATION", "Generazione tabelle" );
define( "TABLES_CREATION_TITLE", "Generazione tabelle del database" );
define( "INITIAL_SETTINGS", "Impostazioni iniziali" );
define( "INITIAL_SETTINGS_TITLE", "Impostazioni iniziali" );
define( "DATA_INSERTION", "Inserimento dati" );
define( "DATA_INSERTION_TITLE", "Salvataggio delle impostazioni in corso" );
define( "WELCOME", "Benvenuto" );
define( "WELCOME_TITLE", "Benvenuto/a sul tuo sito XOOPS" );        // L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "Percorsi fisici XOOPS" );
define( "XOOPS_URLS", "Indirizzo Web (percorso virtuale)" );

define( "XOOPS_ROOT_PATH_LABEL", "Percorso fisico alla cartella di root XOOPS" );
define( "XOOPS_ROOT_PATH_HELP", "Percorso fisico alla cartella di root raggiungibile sul server, SENZA slash finale" );

define( "XOOPS_LIB_PATH_LABEL", "Directory XOOPS library" );
define( "XOOPS_LIB_PATH_HELP", "Percorso fisico alla cartella XOOPS library, SENZA slash finale, per compatibilit&agrave; futura. Per maggiore sicurezza collocare la cartella al di fuori del " . XOOPS_ROOT_PATH_LABEL . ", o in alternativa rinominare la cartella.");
define( "XOOPS_DATA_PATH_LABEL", "Directory XOOPS data" );
define( "XOOPS_DATA_PATH_HELP", "Percorso fisico alla cartella XOOPS data (scrivibile) , SENZA slash finale, per compatibilit&agrave; futura. Per maggiore sicurezza collocare la cartella al di fuori del " . XOOPS_ROOT_PATH_LABEL . ", o in alternativa rinominare la cartella." );

define( "XOOPS_URL_LABEL", "Indirizzo del sito Web (URL)" ); // L56
define( "XOOPS_URL_HELP", "L'indirizzo principale che verr&agrave; utilizzato per accedere al vostro sito XOOPS" ); // L58

define( "LEGEND_CONNECTION", "Connessione al server database" );
define( "LEGEND_DATABASE", "Database" ); // L51

define( "DB_HOST_LABEL", "Hostname del server" );    // L27
define( "DB_HOST_HELP",  "Hostname del server del database. Se non si &egrave; sicuri, <em>localhost</em> funzioner&agrave; nella maggiorparte dei casi"); // L67
define( "DB_USER_LABEL", "Nome utente" );    // L28
define( "DB_USER_HELP",  "Nome utente dell'account utilizzato per connettersi al server del database"); // L65
define( "DB_PASS_LABEL", "Password" );    // L52
define( "DB_PASS_HELP",  "Password dell'account utilizzato per connettersi al server del database"); // L68
define( "DB_NAME_LABEL", "Nome del database" );    // L29
define( "DB_NAME_HELP",  "Nome del database su server. Il programma di installazione tenter&agrave; di creare il database se non esiste"); // L64
define( "DB_CHARSET_LABEL", "Set di caratteri del database" );
define( "DB_CHARSET_HELP",  "MySQL include un supporto per set di caratteri che permette di archiviare i dati utilizzando diversi set di caratteri ed eseguire delle comparazioni rispetto a differenti collazioni. Il set di default &egrave; adeguato per la maggior parte dei casi");
define( "DB_COLLATION_LABEL", "Collazione del database" );
define( "DB_COLLATION_HELP",  "Una collazione &egrave; un inseme di regole per comparare i caratteri in un set caratteri.");
define( "DB_PREFIX_LABEL", "Prefisso delle tabelle" );    // L30
define( "DB_PREFIX_HELP",  "Questo prefisso verr&agrave; aggiunto a tutte le nuove tabelle generate per evitare conflitti di nomi nel database. Se non si &egrave; sicuri utilizzare il valore gi&agrave; presente."); // L63
define( "DB_PCONNECT_LABEL", "Utilizzare connessioni persistenti" );    // L54
define( "DB_PCONNECT_HELP",  "Valore di default: 'NO'. Selezionare 'NO' se non si &egrave; sicuri"); // L69
define( "DB_DATABASE_LABEL", "Database" );

define( "LEGEND_ADMIN_ACCOUNT", "Account amministratore" );
define( "ADMIN_LOGIN_LABEL", "Login amministratore" ); // L37
define( "ADMIN_EMAIL_LABEL", "E-mail amministratore" ); // L38
define( "ADMIN_PASS_LABEL", "Password amministratore" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "Conferma password" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "Indietro" ); // L42
define( "BUTTON_NEXT", "Avanti" ); // L47

// Messages
define( "XOOPS_FOUND", "%s trovato" );
define( "CHECKING_PERMISSIONS", "Controllo dei permessi di file e directory" ); // L82
define( "IS_NOT_WRITABLE", "%s NON &egrave; scrivibile." ); // L83
define( "IS_WRITABLE", "%s &egrave; scrivibile." ); // L84

define( "XOOPS_PATH_FOUND", "Percorso valido" );

define( "READY_CREATE_TABLES", "Non sono state trovate tabelle XOOPS.<br />Il programma di installazione &egrave; pronto a creare le tabelle di sistema.<br />Premere <em>avanti</em> per procedere." );
define( "XOOPS_TABLES_FOUND", "Le tabelle di sistema XOOPS sono gi&agrave; presenti nel database.<br />Premere <em>avanti</em> per andare al passaggio successivo." ); // L131
define( "XOOPS_TABLES_CREATED", "Le tabelle di sistema XOOPS sono state generate.<br />Premere <em>avanti</em> per andare al passaggio successivo." );
define( "READY_INSERT_DATA", "Il programma di installazione &egrave; pronto per inserire i dati di partenza nel database." );
define( "READY_SAVE_MAINFILE", "Il programma di installazione &egrave; pronto per salvare le impostazioni selezionate in <em>mainfile.php</em>.<br />Premere <em>avanti</em> per procedere." );
define( "SAVED_MAINFILE", "Impostazioni salvate in: mainfile.php" );
define( "SAVED_MAINFILE_MSG", "Il programma di installazione ha salvato le impostazioni selezionate in <em>mainfile.php</em>.<br />Premere <em>avanti</em> per andare al passaggio successivo." );
define( "DATA_ALREADY_INSERTED", "Sono stati trovati dati XOOPS nel database.<br />Premere <em>avanti</em> per andare al passaggio successivo." );
define( "DATA_INSERTED", "I dati iniziali sono stati inseriti nel database.<br />Premere <em>avanti</em> per andare al passaggio successivo." );


// %s is database name
define( "DATABASE_CREATED", "Il database %s &egrave; stato creato!" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "Impossibile generare la tabella %s" ); // L118
define( "TABLE_CREATED", "Tabella %s generata." ); // L45
define( "ROWS_INSERTED", "%d voce/i inserita/e nella tabella %s." ); // L119
define( "ROWS_FAILED", "Impossibile inserire %d voce/i nella tabella %s." ); // L120
define( "TABLE_ALTERED", "Tabella %s aggiornata."); // L133
define( "TABLE_NOT_ALTERED", "Impossibile aggiornare la tabella %s."); // L134
define( "TABLE_DROPPED", "Tabella %s rimossa."); // L163
define( "TABLE_NOT_DROPPED", "Impossibile eliminare la tabella %s."); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "Impossibile accedere alla cartella specificata. Verificare che sia presente e sia leggibile dal server." );
define( "ERR_NO_XOOPS_FOUND", "Non sono stati trovati file di installazione XOOPS nella cartella specificata." );
define( "ERR_INVALID_EMAIL", "Indirizzo e-mail non valido" ); // L73
define( "ERR_REQUIRED", "Informazione richiesta." ); // L41
define( "ERR_PASSWORD_MATCH", "Le due password non corrispondono" );
define( "ERR_NEED_WRITE_ACCESS", "Il server deve avere permessi di scrittura ai seguenti file e cartelle<br />(i.e. <em>chmod 777 nome_directory</em> su server UNIX/LINUX)<br />Se non sono disponibili o non sono state create correttamente, crearle manualmente e impostare i permessi corretti." );
define( "ERR_NO_DATABASE", "Non &egrave; stato possibile creare il database. Contattare l'amministratore del server per informazioni a riguardo." ); // L31
define( "ERR_NO_DBCONNECTION", "Non &egrave; stato possibile connettersi al server del database." ); // L106
define( "ERR_WRITING_CONSTANT", "Scrittura della costante %s non riuscita." ); // L122

define( "ERR_COPY_MAINFILE", "Impossibile copiare il file di distribuzione in: mainfile.php" );
define( "ERR_WRITE_MAINFILE", "Impossibile scrivere in: mainfile.php. Per favore verificare i permessi del file e ritentare.");
define( "ERR_READ_MAINFILE", "Impossibile aprire mainfile.php per la lettura" );

define( "ERR_INVALID_DBCHARSET", "Il charset '%s' non &egrave; supportato." );
define( "ERR_INVALID_DBCOLLATION", "La collazione '%s' non &egrave; supportata." );
define( "ERR_CHARSET_NOT_SET", "Non &egrave; stato impostato un set di caratteri di default per il database XOOPS." );


define("_INSTALL_CHARSET", "UTF-8");

define( "SUPPORT", "Supporto");

define( "LOGIN", "Credenziali di accesso");
define( "LOGIN_TITLE", "Credenziali di accesso");
define( "USER_LOGIN", "Dati di accesso Amministratore" );
define( "USERNAME", "Nome utente:");
define( "PASSWORD", "Password:");

define( "ICONV_CONVERSION", "Conversione del Set di caratteri");
define( "ZLIB_COMPRESSION", "Compressione Zlib");
define( "IMAGE_FUNCTIONS", "Funzioni delle immagini");
define( "IMAGE_METAS", "Meta dati delle immagini (exif)");

define( "ADMIN_EXIST", "L'account amministratore &egrave; gi&agrave; presente<br />Premere <strong>Avanti</strong> per procedere al passo successivo.");

define( "CONFIG_SITE", "Configurazione del sito" );
define( "CONFIG_SITE_TITLE", "Configurazione del sito" );
define( "MODULES", "Installazione Moduli" );
define( "MODULES_TITLE", "Installazione Moduli" );
define( "THEME", "Selezione Tema" );
define( "THEME_TITLE", "Selezione del tema di default" );

define( "INSTALLED_MODULES", "Sono stati installati i seguenti moduli.<br />Premere <strong>Avanti</strong> per procedere al passo successivo.");
define( "NO_MODULES_FOUND", "Non è stato trovato alcun modulo.<br />Premere <strong>Avanti</strong> per procedere al passo successivo.");
define( "NO_INSTALLED_MODULES", "Nessun modulo installato.<br />Premere <strong>Avanti</strong> per procedere al passo successivo.");

define( "THEME_NO_SCREENSHOT", "Non è presente alcuna miniatura");

define( "IS_VALOR", " => ");

// password message
define( "PASSWORD_LABEL", "Sicurezza della password: ");
define( "PASSWORD_DESC", "Password non inserita");
define( "PASSWORD_GENERATOR", "Generatore di password");
define( "PASSWORD_GENERATE", "Genera");
define( "PASSWORD_COPY", "Copia");

define( "PASSWORD_VERY_WEAK", "Molto debole");
define( "PASSWORD_WEAK", "Debole");
define( "PASSWORD_BETTER", "Adeguata");
define( "PASSWORD_MEDIUM", "Media");
define( "PASSWORD_STRONG", "Alta");
define( "PASSWORD_STRONGEST", "Massima")
?>