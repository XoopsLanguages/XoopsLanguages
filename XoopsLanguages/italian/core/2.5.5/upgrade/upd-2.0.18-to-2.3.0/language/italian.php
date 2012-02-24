<?php
// $Id: english.php 3580 2009-09-05 23:38:38Z trabis $
// _LANGCODE: it
// _CHARSET : UTF-8
// Translator: Xoops Italia Team - www.xoopsitalia.org
// Last translation update: 10/04/2011

define( "LEGEND_XOOPS_PATHS", "Percorsi fisici XOOPS" );
define( "LEGEND_DATABASE", "Set di Caratteri del Database" );

define( "XOOPS_LIB_PATH_LABEL", "Cartella XOOPS Library (xoops_lib)" );
define( "XOOPS_LIB_PATH_HELP", "Percorso fisico delle cartella XOOPS Library SENZA slash finale, per ragioni di compatibilit&agrave;. Per maggiore sicurezza, posizionare la cartella al di fuori di '" . XOOPS_ROOT_PATH . "' o almeno rinominarla" );
define( "XOOPS_DATA_PATH_LABEL", "Cartella XOOPS datafiles (xoops_data)" );
define( "XOOPS_DATA_PATH_HELP", "Percorso fisico della cartella XOOPS datafiles (deve essere scrivibile) SENZA slash finale, per ragioni di compatibilit&agrave;. Per maggiore sicurezza, posizionare la cartella al di fuori di '" . XOOPS_ROOT_PATH . "' o almeno rinominarla." );

define( "DB_COLLATION_LABEL", "Set di caratteri del Database e collazione" );
define( "DB_COLLATION_HELP",  "Dalla versione 4.12, MySQL supporta set di caratteri e collazioni personalizzabili. Tuttavia il processo &egrave; pi&ugrave; complesso di quanto si creda, per tale ragione NON eseguire alcuna modifica a meno che non si sappia quel che si sta facendo.");
define( "DB_COLLATION_NOCHANGE",  "Non modificare");

define( "XOOPS_PATH_FOUND", "Percorso trovato." );
define( "ERR_COULD_NOT_ACCESS", "Non &egrave; stato possibile accedere alla cartella specificata. Per favore verificare che sia presente e raggiungibile sul server." );
define( "CHECKING_PERMISSIONS", "Verifica dei permessi dei file e delle cartelle in corso..." );
define( "ERR_NEED_WRITE_ACCESS", "Il server deve avere accesso in scrittura ai seguenti file e cartelle<br />(per esempio <em>chmod 777 nome_directory</em> su server UNIX/LINUX)" );
define( "IS_NOT_WRITABLE", "%s NON &egrave; scrivibile" );
define( "IS_WRITABLE", "%s &egrave; scrivibile." );
define( "ERR_COULD_NOT_WRITE_MAINFILE", "Errore durante la scrittura su mainfile.php, modificare il file manualmente." );

?>