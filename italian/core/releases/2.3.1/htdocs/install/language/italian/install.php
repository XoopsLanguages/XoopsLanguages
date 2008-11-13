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
 * @version     $Id: install.php 2055 2008-09-05 06:26:48Z phppp $
 */

define( "SHOW_HIDE_HELP", "Visualizza/nascondi testo di aiuto" );

// Configuration check page
define( "SERVER_API", "Server API" );
define( "PHP_EXTENSION", "%s estensioni" );
define( "CHAR_ENCODING", "Codifica dei caratteri" );
define( "XML_PARSING", "parsing XML" );
define( "REQUIREMENTS", "Requisiti" );
define( "_PHP_VERSION", "Versione di PHP" );
define( "RECOMMENDED_SETTINGS", "Settaggi raccomandati" );
define( "RECOMMENDED_EXTENSIONS", "Estensioni raccomandate" );
define( "SETTING_NAME", "Impostazioni nome" );
define( "RECOMMENDED", "Raccomandato" );
define( "CURRENT", "Corrente" );
define( "RECOMMENDED_EXTENSIONS_MSG", "Queste estensioni non sono richieste per un utilizzo normale, ma sono necessarie per utilizzare alcune funzioni speciali (come il supporto per i siti multi-lingua e il supporto agli RSS). Quindi, si raccomanda di averle installate." );
define( "NONE", "Niente" );
define( "SUCCESS", "Successo" );
define( "WARNING", "Attenzione" );
define( "FAILED", "Fallito" );



// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "XOOPS procedura guidata di installazione" );

define( "LANGUAGE_SELECTION", "Selezione lingua" );
define( "LANGUAGE_SELECTION_TITLE", "Scegli la tua lingua");        // L128
define( "INTRODUCTION", "Introduzione" );
define( "INTRODUCTION_TITLE", "Benvenuto nell'assistente all'installazione di XOOPS" );        // L0
define( "CONFIGURATION_CHECK", "Controllo configurazione" );
define( "CONFIGURATION_CHECK_TITLE", "Controlla la configurazione del tuo server" );
define( "PATHS_SETTINGS", "Impostazioni del Path" );
define( "PATHS_SETTINGS_TITLE", "Impostazioni del Path" );
define( "DATABASE_CONNECTION", "Connessione al Database" );
define( "DATABASE_CONNECTION_TITLE", "Connessione al Database" );
define( "DATABASE_CONFIG", "Configurazione del Database " );
define( "DATABASE_CONFIG_TITLE", "Configurazione del Database" );
define( "CONFIG_SAVE", "Salvataggio della configurazione" );
define( "CONFIG_SAVE_TITLE", "Salva la configurazione del tuo sistema" );
define( "TABLES_CREATION", "Creazione delle tabelle" );
define( "TABLES_CREATION_TITLE", "Crea le tabelle nel Database" );
define( "INITIAL_SETTINGS", "Settaggi iniziali" );
define( "INITIAL_SETTINGS_TITLE", "Prego, inserisci i tuoi settaggi iniziali" );
define( "DATA_INSERTION", "Inserisci i dati" );
define( "DATA_INSERTION_TITLE", "Salva i tuoi settaggi nel Database" );
define( "WELCOME", "Benvenuto" );
define( "WELCOME_TITLE", "Benvenuto sul tuo sito XOOPS" );        // L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "XOOPS percorso fisico" );
define( "XOOPS_URLS", "Indirizzo web" );

define( "XOOPS_ROOT_PATH_LABEL", "XOOPS percorso fisico" );
define( "XOOPS_ROOT_PATH_HELP", "Percorso fisico dove risiedono i file di installazione di XOOPS (served) directory senza trailing slash" );

define( "XOOPS_LIB_PATH_LABEL", "XOOPS library directory" );
define( "XOOPS_LIB_PATH_HELP", "Percorso fisico dove risiedono le librerie di XOOPS directory senza trailing slash, per compatibilità future. Crea la directory fuori da " . XOOPS_ROOT_PATH_LABEL . " per un'installazione più sicura.");
define( "XOOPS_DATA_PATH_LABEL", "XOOPS datafiles directory" );
define( "XOOPS_DATA_PATH_HELP", "Percorso fisico dove risiedono i datafiles di XOOPS (scrivibile) directory senza trailing slash, per compatibilità future. Crea la directory fuori da " . XOOPS_ROOT_PATH_LABEL . " per un'installazione più sicura.");

define( "XOOPS_URL_LABEL", "Indirizzo del sito web (URL)" ); // L56
define( "XOOPS_URL_HELP", "Indirizzo principale per accedere alla tua installazione di XOOPS" ); // L58

define( "LEGEND_CONNECTION", "Connessione al server" );
define( "LEGEND_DATABASE", "Database" ); // L51

define( "DB_HOST_LABEL", "Server hostname" );    // L27
define( "DB_HOST_HELP",  "Hostname del database server. Se non sei sicuro, <em>localhost</em> va bene nella maggior parte dei casi"); // L67
define( "DB_USER_LABEL", "User name" );    // L28
define( "DB_USER_HELP",  "Nome utente usato per la connessione al server del Database"); // L65
define( "DB_PASS_LABEL", "Password" );    // L52
define( "DB_PASS_HELP",  "Password dell'account per il Database"); // L68
define( "DB_NAME_LABEL", "Nome del Database" );    // L29
define( "DB_NAME_HELP",  "Il nome del Database nell'host. Se non esiste ne verrà creato uno durant ela procedura di installazione"); // L64
define( "DB_CHARSET_LABEL", "Set di caratteri per il Database" );
define( "DB_CHARSET_HELP",  "MySQL include il supporto per i set di caratteri che ti permettono di salvare i dati utilizzando diversi tipi di set di caratteri e di fare comparazioni tra i vari tipi di collation.");
define( "DB_COLLATION_LABEL", "Collation del Database" );
define( "DB_COLLATION_HELP",  "Una collation è un insieme di regole per la comparazione di caratteri in diversi set di caratteri.");
define( "DB_PREFIX_LABEL", "Prefisso tabelle" );    // L30
define( "DB_PREFIX_HELP",  "Questo prefisso viene aggiunto a tutte le nuove tabelle create per evitare dei conflitti interni al Database. Se non sei sicuro lascia quella di default"); // L63
define( "DB_PCONNECT_LABEL", "Usa connessioni persistenti" );    // L54
define( "DB_PCONNECT_HELP",  "L'impostazione di default è 'NO'. Scegli 'NO' se non sei sicuro"); // L69
define( "DB_DATABASE_LABEL", "Database" );

define( "LEGEND_ADMIN_ACCOUNT", "Account dell'amministratore" );
define( "ADMIN_LOGIN_LABEL", "Admin login" ); // L37
define( "ADMIN_EMAIL_LABEL", "Admin e-mail" ); // L38
define( "ADMIN_PASS_LABEL", "Admin password" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "Conferma la password" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "Precedente" ); // L42
define( "BUTTON_NEXT", "Successivo" ); // L47

// Messages
define( "XOOPS_FOUND", "%s trovato" );
define( "CHECKING_PERMISSIONS", "Controllo i permessi dei file e delle cartelle..." ); // L82
define( "IS_NOT_WRITABLE", "%s non è scrivibile." ); // L83
define( "IS_WRITABLE", "%s è scrivibile." ); // L84

define( "XOOPS_PATH_FOUND", "Percorso trovato." );

define( "READY_CREATE_TABLES", "Nessuna tabella di XOOPS trovata.<br />L'installer creerà ora le tabelle di sistema per XOOPS.<br />premi <em>successivo</em> per procedere." );
define( "XOOPS_TABLES_FOUND", "Le tabelle di sistema di XOOPS sono già presenti nel tuo Database.<br />Premi <em>successivo</em> per andare al punto successivo." ); // L131
define( "XOOPS_TABLES_CREATED", "Le tabelle di XOOPS sono state create con successo.<br />Premi <em>successivo</em> per andare al punto successivo." );
define( "READY_INSERT_DATA", "L'installer è ora pronto per inserire nel database i dati iniziali." );
define( "READY_SAVE_MAINFILE", "L'installer è pronto per salvare i settaggi nel file <em>mainfile.php</em>.<br />Premi <em>successivo</em> per procedere." );
define( "SAVED_MAINFILE", "Settaggi salvati nel file mainfile.php" );
define( "SAVED_MAINFILE_MSG", "L'installer ha salvato i settaggi nel file <em>mainfile.php</em>. Premi <em>successivo</em> per andare al punto successivo." );
define( "DATA_ALREADY_INSERTED", "Trovati dei dati XOOPS nel Database.<br />Premi <em>successivo</em> per andare al punto successivo." );
define( "DATA_INSERTED", "I dati iniziali sono stati inseriti nel Database.<br />Premi <em>Successivo</em> per andare al punto successivo." );


// %s is database name
define( "DATABASE_CREATED", "Database %s creato!" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "Impossibile creare la tabella %s" ); // L118
define( "TABLE_CREATED", "Tabella %s creata." ); // L45
define( "ROWS_INSERTED", "%d voci inserite nella tabella %s." ); // L119
define( "ROWS_FAILED", "Errore inserimento di %d voci nella tabella %s." ); // L120
define( "TABLE_ALTERED", "Tabella %s aggiornata."); // L133
define( "TABLE_NOT_ALTERED", "Aggiornamento tabella fallito %s."); // L134
define( "TABLE_DROPPED", "Tabella %s eliminata."); // L163
define( "TABLE_NOT_DROPPED", "Errore eliminazione tabella %s."); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "Impossibile accedere alla cartella specificata. Controlla che esista sul server e che sia scrivibile." );
define( "ERR_NO_XOOPS_FOUND", "Nessuna installazione di XOOPS trovata nella cartella specificata." );
define( "ERR_INVALID_EMAIL", "Email non valida" ); // L73
define( "ERR_REQUIRED", "Informazione richiesta." ); // L41
define( "ERR_PASSWORD_MATCH", "Le due password non corrispondono" );
define( "ERR_NEED_WRITE_ACCESS", "Il server deve avere accesso in scrittura per i seguenti file e cartelle<br />(i.e. <em>chmod 777 nome_della_cartella</em> inun server UNIX/LINUX)<br />Se non sono disponibili o non sono state create correttamente, creale a mano e applica i permessi corretti." );
define( "ERR_NO_DATABASE", "Impossibile creare il Database. Contatta l'amministratore del server per i dettagli." ); // L31
define( "ERR_NO_DBCONNECTION", "Impossibile connettersi al server del Database." ); // L106
define( "ERR_WRITING_CONSTANT", "Errore di scrittura per la costante %s." ); // L122

define( "ERR_COPY_MAINFILE", "Impossibile copiare i file della distribuzione sul file mainfile.php" );
define( "ERR_WRITE_MAINFILE", "Impossibile scrivere nel file mainfile.php. Perfavore, controlla i permessi del file e riprova.");
define( "ERR_READ_MAINFILE", "Impossibile aprire il file mainfile.php per la lettura" );

define( "ERR_INVALID_DBCHARSET", "Il set di caratteri '%s' non è supportato." );
define( "ERR_INVALID_DBCOLLATION", "La collation '%s' non è supportata." );
define( "ERR_CHARSET_NOT_SET", "Il set di caratteri di default non è settato per il Database di XOOPS." );


define("_INSTALL_CHARSET", "UTF-8");
?>