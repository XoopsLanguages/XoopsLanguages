<?php
// -------------------------------------------------------------------------------- //
// Translated by Ianez - Xoops Italia Staff
// Published by Xoops Italian Official Support Site - www.xoopsitalia.org
// -------------------------------------------------------------------------------- //
// $Id: english.php 2087 2008-09-15 04:50:23Z phppp $

define("LEGEND_XOOPS_PATHS","Percorsi fisici XOOPS" );
define("LEGEND_DATABASE","Set di Caratteri del Database" );

define("XOOPS_LIB_PATH_LABEL","Cartella XOOPS Library (xoops_lib)" );
define("XOOPS_LIB_PATH_HELP","Percorso fisico delle cartella XOOPS Library SENZA slash finale, per ragioni di compatibilit&agrave;. Per maggiore sicurezza, posizionare la cartella al di fuori di '" . XOOPS_ROOT_PATH . "' oppure rinominarla" );
define("XOOPS_DATA_PATH_LABEL","Cartella XOOPS datafiles (xoops_data)" );
define("XOOPS_DATA_PATH_HELP","Percorso fisico della cartella XOOPS datafiles (deve essere scrivibile) SENZA slash finale, per ragioni di compatibilit&agrave;. Per maggiore sicurezza, posizionare la cartella al di fuori di '" . XOOPS_ROOT_PATH . "' oppure rinominarla." );

define("DB_COLLATION_LABEL","Set di caratteri del Database e collazione" );
define("DB_COLLATION_HELP",  "Dalla versione 4.12, MySQL supporta sett di caratteri e collazioni personalizzabili. Tuttavia il processo &egrave; pi&ugrave; complesso di quanto si creda, per tale ragione NON eseguire alcuna modifica a meno che non si sappia quel che si sta facendo.");
define("DB_COLLATION_NOCHANGE",  "Non modificare");

define("XOOPS_PATH_FOUND","Percorso trovato." );
define("ERR_COULD_NOT_ACCESS","Non &egrave; stato possibile accedere alla cartella specificata. Per favore verificare che sia presente e raggiungibili sul server." );
define("CHECKING_PERMISSIONS","Verifica dei permessi dei file e delle cartelle in corso..." );
define("ERR_NEED_WRITE_ACCESS","Il server deve avere accesso in scrittura ai seguenti file e cartelle<br />(i.e. <em>chmod 777 nome_directory</em> su server UNIX/LINUX)" );
define("IS_NOT_WRITABLE","%s NON &egrave; scrivibile" );
define("IS_WRITABLE","%s &egrave; scrivibile." );
define("ERR_COULD_NOT_WRITE_MAINFILE","Errore durante la scrittura su mainfile.php, modificare il file manualmente." );

define("LEGEND_XOOPS_MAINFILE_FORPROTECTOR","Preparazione del mainfile XOOPS");
define("XOOPS_MAINFILE_LABEL_FORPROTECTOR","Se si desidera installare il modulo Protector di GIJOE, sostituire il file <em>/upgrade/" . basename(dirname(dirname(__FILE__))) . "/mainfile.dist.php</em> con <em>/extras/mainfile.dist.php.protector</em><br />" .
                                            "(Ricordarsi di rinominare il file come: <em>mainfile.dist.php</em>).<br />" .
                                            "Se il modulo Protector &egrave; stato gi&agrave; installato e funziona correttamente, ignorare la sostituzione.");
?>