<?php
// $Id: english.php 3580 2009-09-05 23:38:38Z trabis $
// _LANGCODE: es
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define( "LEGEND_XOOPS_PATHS", "Ruta f�sica de XOOPS" );
define( "LEGEND_DATABASE", "Codificaci�n de la base de datos" );

define( "XOOPS_LIB_PATH_LABEL", "Directorio de librer�a XOOPS" );
define( "XOOPS_LIB_PATH_HELP", "Ruta f�sica al directorio de la librer�a XOOPS sin barra al final. Coloque el directorio fuera de " . XOOPS_ROOT_PATH . " para mantenerlo seguro." );
define( "XOOPS_DATA_PATH_LABEL", "Directorio de archivos de datos de XOOPS" );
define( "XOOPS_DATA_PATH_HELP", "Ruta f�sica al directorio datafiles de XOOPS (escribible) sin barra al final. Coloque el directorio fuera de " . XOOPS_ROOT_PATH . " para mantenerlo seguro." );

define( "DB_COLLATION_LABEL", "Codificaci�n de la base de datos y collation" );
define( "DB_COLLATION_HELP",  "Debido a que 4.12 MySQL soporta caracteres personalizados y collation. Sin embargo es bastante m�s complejo de lo esperado, as� que no haga cambios a menos que est� seguro de su acci�n.");
define( "DB_COLLATION_NOCHANGE",  "No cambiar (recomendado en caso de dudas)");

define( "XOOPS_PATH_FOUND", "Ruta encontrada." );
define( "ERR_COULD_NOT_ACCESS", "Imposible acceder al directorio indicado. Por favor, compruebe que existe y es accesible por el servidor." );
define( "CHECKING_PERMISSIONS", "Comprobaci�n de los permisos de los archivos y directorios..." );
define( "ERR_NEED_WRITE_ACCESS", "El servidor debe tener acceso de escritura a los siguientes archivos y directorios<br />(i.e. <em>chmod 777 nombre_directorio</em> en servidores UNIX/LINUX)" );
define( "IS_NOT_WRITABLE", "%s no es escribible." );
define( "IS_WRITABLE", "%s es escribible." );
define( "ERR_COULD_NOT_WRITE_MAINFILE", "Error a�adiendo contenido a mainfile.php, a�ade usted mismo el las modificaciones a mainfile.php manualmente." );

?>