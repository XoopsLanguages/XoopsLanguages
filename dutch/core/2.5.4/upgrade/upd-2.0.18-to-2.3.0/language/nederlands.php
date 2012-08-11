<?php
/**
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE: nl
 * _CHARSET : UTF-8
 * Vertaald door	Renetjuh
 * (Ver)taalfouten of suggesties?
 * AUB hier melden: http://www.xoops.nl
**/

define("LEGEND_XOOPS_PATHS","XOOPS fysieke mappen" );
define("LEGEND_DATABASE","Database karakterset" );

define("XOOPS_LIB_PATH_LABEL","XOOPS bibliotheekmap" );
define("XOOPS_LIB_PATH_HELP","Fysieke map naar de XOOPS bibliotheekmap ZONDER afsluitende schuine streep, nodig voor toekomstige verenigbaarheid. Plaats de map buiten " . XOOPS_ROOT_PATH . " voor de veiligheid." );
define("XOOPS_DATA_PATH_LABEL","XOOPS databestanden map" );
define("XOOPS_DATA_PATH_HELP","Fysieke pad naar de XOOPS databestanden (beschrijfbaar) map ZONDER afsluitende schuine streep, nodig voor toekomstige verenigbaarheid. Plaats de map buiten " . XOOPS_ROOT_PATH . " voor de veiligheid." );

define("DB_COLLATION_LABEL","Database karakterset en bundels" );
define("DB_COLLATION_HELP",  "Vanaf MySQL 4.12 ondersteunt deze aangepaste karaktersets en bundels. Maar het is ingewikkelder dan verwacht, dus maak geen verandering, tenzij u er zeker van bent.");
define("DB_COLLATION_NOCHANGE",  "Niet veranderen");

define("XOOPS_PATH_FOUND","Map gevonden." );
define("ERR_COULD_NOT_ACCESS","Kan geen toegang krijgen tot de opgegeven map. Controleer dat de map bestaat en leesbaar is." );
define("CHECKING_PERMISSIONS","Controleer bestands- en maprechten..." );
define("ERR_NEED_WRITE_ACCESS","De server moet schrijfrechten krijgen tot de volgende bestanden en mappen<br />(i.e. <em>chmod 777 mapnaam</em> op een UNIX/LINUX server)" );
define("IS_NOT_WRITABLE","%s is NIET schrijfbaar." );
define("IS_WRITABLE","%s is schrijfbaar." );
define("ERR_COULD_NOT_WRITE_MAINFILE","Fout bij het schrijven van gegevens in mainfile.php, wijzig de inhoud van mainfile.php handmatig" );

?>