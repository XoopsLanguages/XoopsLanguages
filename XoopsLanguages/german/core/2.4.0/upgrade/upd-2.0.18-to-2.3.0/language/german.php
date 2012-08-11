<?php
// $Id$
// _LANGCODE: de
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define("LEGEND_XOOPS_PATHS","XOOPS physikalischer Pfad" );
define("LEGEND_DATABASE","Datenbank Character Set" );

define("XOOPS_LIB_PATH_LABEL","XOOPS Bibliothek-Verzeichnis" );
define("XOOPS_LIB_PATH_HELP","Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH . " to make it secure." );
define("XOOPS_DATA_PATH_LABEL","XOOPS Daten-Verzeichnis" );
define("XOOPS_DATA_PATH_HELP","Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH . " to make it secure." );

define("DB_COLLATION_LABEL","Datenbank Character set und Collation" );
define("DB_COLLATION_HELP",  "As of 4.12 MySQL supports custom character set and collation. However it is more complex than expected, so DON'T make any change unless you are confident with your choice.");
define("DB_COLLATION_NOCHANGE",  "Dies nicht ändern");

define("XOOPS_PATH_FOUND","Pfad gefunden." );
define("ERR_COULD_NOT_ACCESS","Could not access the specified folder. Please verify that it exists and is readable by the server." );
define("CHECKING_PERMISSIONS","Prüfe datei und Verzeichnisrechte ..." );
define("ERR_NEED_WRITE_ACCESS","The server must be given write access to the following files and folder<br />(i.e. <em>chmod 777 directory_name</em> on a UNIX/LINUX server)" );
define("IS_NOT_WRITABLE","%s ist NICHT beschreibbar." );
define("IS_WRITABLE","%s ist beschreibbar." );
define("ERR_COULD_NOT_WRITE_MAINFILE","Error writing content to mainfile.php, write the content into mainfile.php manually." );

define("LEGEND_XOOPS_MAINFILE_FORPROTECTOR","XOOPS mainfile preparation");
define("XOOPS_MAINFILE_LABEL_FORPROTECTOR","If you need to install protector module from GIJOE, please replace the file <em>/upgrade/" . basename(dirname(dirname(__FILE__))) . "/mainfile.dist.php</em> with <em>/extras/mainfile.dist.php.protector</em>" .
                                            " (Make sure to change the file name to <em>mainfile.dist.php</em>).<br />" .
                                            "If the protector module has already been installed and works correctly, please ignore this replacement.");

?>
