<?php
// $Id: english.php 3580 2009-09-05 23:38:38Z trabis $
// _LANGCODE: es
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define( "LEGEND_XOOPS_PATHS", "Ruta física de XOOPS" );
define( "LEGEND_DATABASE", "Codificación de la base de datos" );

define( "XOOPS_LIB_PATH_LABEL", "Directorio de librería XOOPS" );
define( "XOOPS_LIB_PATH_HELP", "Ruta física al directorio de la librería XOOPS sin barra al final. Coloque el directorio fuera de " . XOOPS_ROOT_PATH . " para mantenerlo seguro." );
define( "XOOPS_DATA_PATH_LABEL", "Directorio de archivos de datos de XOOPS" );
define( "XOOPS_DATA_PATH_HELP", "Ruta física al directorio datafiles de XOOPS (escribible) sin barra al final. Coloque el directorio fuera de " . XOOPS_ROOT_PATH . " para mantenerlo seguro." );

define( "DB_COLLATION_LABEL", "Codificación de la base de datos y collation" );
define( "DB_COLLATION_HELP",  "Debido a que 4.12 MySQL soporta caracteres personalizados y collation. Sin embargo es bastante más complejo de lo esperado, así que no haga cambios a menos que esté seguro de su acción.");
define( "DB_COLLATION_NOCHANGE",  "No cambiar (recomendado en caso de dudas)");

define( "XOOPS_PATH_FOUND", "Ruta encontrada." );
define( "ERR_COULD_NOT_ACCESS", "Imposible acceder al directorio indicado. Por favor, compruebe que existe y es accesible por el servidor." );
define( "CHECKING_PERMISSIONS", "Comprobación de los permisos de los archivos y directorios..." );
define( "ERR_NEED_WRITE_ACCESS", "El servidor debe tener acceso de escritura a los siguientes archivos y directorios<br />(i.e. <em>chmod 777 nombre_directorio</em> en servidores UNIX/LINUX)" );
define( "IS_NOT_WRITABLE", "%s no es escribible." );
define( "IS_WRITABLE", "%s es escribible." );
define( "ERR_COULD_NOT_WRITE_MAINFILE", "Error añadiendo contenido a mainfile.php, añade usted mismo el las modificaciones a mainfile.php manualmente." );

?>