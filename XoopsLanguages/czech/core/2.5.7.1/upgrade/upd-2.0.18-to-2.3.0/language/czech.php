<?php
// $Id: english.php 10054 2015-03-07
// _LANGCODE: cz
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define("LEGEND_XOOPS_PATHS","XOOPS fyzické cesty" );
define("LEGEND_DATABASE","Kódování databáze" );

define("XOOPS_LIB_PATH_LABEL","Adresář knihovny XOOPSu" ); // XOOPS  library directory
define("XOOPS_LIB_PATH_HELP","Fyzická cesta k adresáři knihovny XOOPSu BEZ koncového zpětného lomítka. Informace důležitá pro dopřednou kompatibilitu. Tento adresář by měl být, z bezpečnostních důvodů, umístěný mimo " . XOOPS_ROOT_PATH . " ." );
define("XOOPS_DATA_PATH_LABEL","Adresář s datovými soubory XOOPSu" ); // XOOPS  datafiles directory
define("XOOPS_DATA_PATH_HELP","Fyzická cesta k adresáři s datovými soubory XOOPSu BEZ koncového lomítka. Informace důležitá pro dopřednou kompatibilitu. Tento adresář by měl být z bezpečnostních důvodů, umístěný mimo " . XOOPS_ROOT_PATH . " ." );

define("DB_COLLATION_LABEL","Kódování databáze a její řazení" ); // Database character set and collation
define("DB_COLLATION_HELP",  "Databáze MySQL od verze 4.12 dovoluje uživatelské nastavení kódování a řazení databází. Nicméně to je složitější, než se očekávalo, takže se nemusíte provádět žádné změny, pokud si nejste jisti tím, co děláte.");
define("DB_COLLATION_NOCHANGE",  "Neměnit");

define("XOOPS_PATH_FOUND","Cesta neexistuje." );
define("ERR_COULD_NOT_ACCESS","Nemohu získat přístup k těmto adresářům. Zkontrlujte prosím, jestli existují a jestli do nich smí server zapisovat." );
define("CHECKING_PERMISSIONS","Zkontrolujte oprávnění souborů a adresářů..." );
define("ERR_NEED_WRITE_ACCESS","Server musí mít možnost zápisu do těchto souborů a adresářů<br />(např. <em>chmod 777 directory_name</em> na UNIX/LINUX systémech)." );
define("IS_NOT_WRITABLE","%s nelze zapisovat." );
define("IS_WRITABLE","%s lze zapisovat." );
define("ERR_COULD_NOT_WRITE_MAINFILE","Při zápisu do souboru mainfile.php došlo k chybě, zapište potřebné změny do souboru mainfile.php ručně." );

?>