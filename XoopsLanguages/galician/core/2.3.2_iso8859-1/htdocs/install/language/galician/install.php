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

define( "SHOW_HIDE_HELP", "Mostrar/ocultar el texto de ayuda" );

// Configuration check page
define( "SERVER_API", "API del servidor" );
define( "PHP_EXTENSION", "%s (extensi�n)" );
define( "CHAR_ENCODING", "Codificaci�n de caracteres" );
define( "XML_PARSING", "XML parsing" );
define( "REQUIREMENTS", "Requerimientos" );
define( "_PHP_VERSION", "Versi�n de PHP" );
define( "RECOMMENDED_SETTINGS", "Ajustes recomendados" );
define( "RECOMMENDED_EXTENSIONS", "Extensiones recomendadas" );
define( "SETTING_NAME", "Setting name" );
define( "RECOMMENDED", "Recomendado" );
define( "CURRENT", "Actual" );
define( "RECOMMENDED_EXTENSIONS_MSG", "Estas extensiones no son necesarias para un uso normal de este sistema, pero s� para poder utilizar algunas caracter�sticas espec�ficas (como el multilenguaje o el soporte de RSS). Por esta raz�n es recomendable tenerlas instaladas." );
define( "NONE", "Ninguna" );
define( "SUCCESS", "�xito" );
define( "WARNING", "Advertencia" );
define( "FAILED", "Fall�" );

// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "Asistente de instalaci�n de XOOPS" );

define( "LANGUAGE_SELECTION", "Selecci�n de idioma" );
define( "LANGUAGE_SELECTION_TITLE", "Elija su idioma");		// L128
define( "INTRODUCTION", "Introducci�n" );
define( "INTRODUCTION_TITLE", "Bienvenido al asistente de instalaci�n de XOOPS" );        // L0
define( "CONFIGURATION_CHECK", "Comprobaci�n de la configuraci�n" );
define( "CONFIGURATION_CHECK_TITLE", "Comprobando la configuraci�n de su servidor" );
define( "PATHS_SETTINGS", "Configuraci�n de las rutas" );
define( "PATHS_SETTINGS_TITLE", "Configuraci�n de las rutas" );
define( "DATABASE_CONNECTION", "Conexi�n de la base de datos" );
define( "DATABASE_CONNECTION_TITLE", "Conexi�n de la base de datos" );
define( "DATABASE_CONFIG", "Configuraci�n de la base de datos" );
define( "DATABASE_CONFIG_TITLE", "Configuraci�n de la base de datos" );
define( "CONFIG_SAVE", "Configuraci�n guardada" );
define( "CONFIG_SAVE_TITLE", "Guardando la configuraci�n de su sistema" );
define( "TABLES_CREATION", "Creaci�n de tablas" );
define( "TABLES_CREATION_TITLE", "Creaci�n de las tablas de la base de datos" );
define( "INITIAL_SETTINGS", "Ajustes iniciales" );
define( "INITIAL_SETTINGS_TITLE", "Por favor, establezca su configuraci�n inicial." );
define( "DATA_INSERTION", "Inserci�n de los datos" );
define( "DATA_INSERTION_TITLE", "Guardando sus ajustes o configuraci�n en la base de datos" );
define( "WELCOME", "Bienvenido" );
define( "WELCOME_TITLE", "Bienvenido a su sitio web creado con XOOPS." );        // L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "Ruta f�sica a XOOPS" );
define( "XOOPS_URLS", "Localizaci�n del sitio web" );

define( "XOOPS_ROOT_PATH_LABEL", "Ruta al directorio que contendr� la instalaci�n de XOOPS" ); // L55
define( "XOOPS_ROOT_PATH_HELP", "Ruta f�sica al 'trust path' de XOOPS SIN la barra invertida a la izquierda(\)" );

define( "XOOPS_LIB_PATH_LABEL", "XOOPS Carpeta biblioteca" );//revisar lineas 70 a 73
define( "XOOPS_LIB_PATH_HELP", "Ruta al directorio de datos (escribible) SIN barra invertida a la izquierda (\), para mantener la compatibilidad en el futuro col�quela fuera de " . XOOPS_ROOT_PATH_LABEL . " para que sea m�s segura.");
define( "XOOPS_DATA_PATH_LABEL", "Carpeta de datos de XOOPS" );
define( "XOOPS_DATA_PATH_HELP", "Ruta al directorio de datos (escribible) SIN la barra invertida a la izquierda (\). Para mantener la compatibilidad en el futuro col�quela fuera de " . XOOPS_ROOT_PATH_LABEL . " para que sea m�s segura." );

define( "XOOPS_URL_LABEL", "Localizaci�n del sitio web (URL)" ); // L56
define( "XOOPS_URL_HELP", "URL que ser� usada para acceder a la instalaci�n de su sitio XOOPS" ); // L58

define( "LEGEND_CONNECTION", "Conexi�n con el servidor" );
define( "LEGEND_DATABASE", "Base de datos" ); // L51

define( "DB_HOST_LABEL", "Nombre del host" );    // L27
define( "DB_HOST_HELP",  "Nombre del host del servidor de la base de datos. Si no est� seguro, 'localhost' deber�a de funcionar en la mayor�a de las ocasiones."); // L67
define( "DB_USER_LABEL", "Nombre del usuario de la base de datos" );    // L28
define( "DB_USER_HELP",  "Nombre del usuario de la base de datos en el host"); // L65
define( "DB_PASS_LABEL", "Contrase�a" );    // L52
define( "DB_PASS_HELP",  "Contrase�a de su cuenta de usuario en la base de datos que est� utilizando."); // L68
define( "DB_NAME_LABEL", "Nombre de la base de datos" );	// L29
define( "DB_NAME_HELP",  "El nombre de la base de datos en el host. El instalador tratar� de crear la base de datos en caso de que no exista.");// L64
define( "DB_CHARSET_LABEL", "Conjunto de caracteres" );
define( "DB_CHARSET_HELP",  "MySQL incluye el soporte de conjunto de caracteres que le permite almacenar los datos usando una variedad de distintos conjuntos de caracteres y realizar comparaciones de acuerdo a la variedad de cotejamientos.");//MySQL includes character set support that enables you to store data using a variety of character sets and perform comparisons according to a variety of collations.
define( "DB_COLLATION_LABEL", "Cotejamiento de la base de datos" );
define( "DB_COLLATION_HELP",  "Un cotejamiento es un conjunto de reglas para la comparaci�n de caracteres de un conjunto de caracteres.");//A collation is a set of rules for comparing characters in a character set.
define( "DB_PREFIX_LABEL", "Prefijos para las tablas" );	// L30
define( "DB_PREFIX_HELP",  "El prefijo ser� antepuesto a los nombres de todas las tablas nuevas que se creen para evitar problemas de duplicidad con otros contenidos. Si no est� seguro, mantenga el que aparece por defecto."); // L63
define( "DB_PCONNECT_LABEL", "Usar conexi�n persistente" );	// L54
define( "DB_PCONNECT_HELP",  "Por defecto es 'NO'. Elija 'NO' en caso de no estar seguro de qu� hacer."); // L69

define( "LEGEND_ADMIN_ACCOUNT", "Cuenta del administrador" );
define( "ADMIN_LOGIN_LABEL", "Login del administrador" ); // L37 

define( "ADMIN_EMAIL_LABEL", "Correo electr�nico del administrador" ); // L38
define( "ADMIN_PASS_LABEL", "Contrase�a del administrador" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "Confirmar la contrase�a" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "Previo" ); // L42
define( "BUTTON_NEXT", "Siguiente" ); // L47

// Messages
define( "XOOPS_FOUND", "%s encontrado" );
define( "CHECKING_PERMISSIONS", "Comprobando los permisos en archivos y directorios..." ); // L82
define( "IS_NOT_WRITABLE", "%s no es escribible." ); // L83
define( "IS_WRITABLE", "%s es escribible." ); // L84

define( "XOOPS_PATH_FOUND", "Ruta (path) correcta." );

define( "READY_CREATE_TABLES", "No se ha detectado que las tablas necesarias para el funcionamiento de XOOPS hayan sido creadas con anterioridad.<br />El asistente de la instalaci�n est� preparado para crear las mismas.<br />Haga clic en <em>Siguiente</em> para continuar." );
define( "XOOPS_TABLES_FOUND", "Las tablas necesarias para el funcionamiento de XOOPS ya existen en su base de datos.<br />Haga clic en <em>Siguiente</em> para continuar el proceso de instalaci�n." ); // L131
define( "XOOPS_TABLES_CREATED", "Tablas del sistema creadas.<br />Clic en <em>siguiente</em> para continuar con la instalaci�n." );
define( "READY_INSERT_DATA", "El asistente de instalaci�n est� listo para insertar los datos iniciales en su base de datos." );
define( "READY_SAVE_MAINFILE", "El asistente est� preparado para guadar la configuraci�n especificada en el archivo <em>mainfile.php</em>.<br />Haga clic sobre <em>Siguiente</em> para continuar." );
define( "SAVED_MAINFILE", "Guardando la configuraci�n en mainfile.php" );
define( "SAVED_MAINFILE_MSG", "El instalador guard� la configuraci�n para <em> mainfile.php </em>. Haga clic sobre <em> Siguiente </em> para continuar el proceso de instalaci�n." );
define( "DATA_ALREADY_INSERTED", "Los datos necesarios para el funcionamiento de XOOPS ya est�n almacenados en su base de datos. Ning�n dato m�s ser� almacenado con esta acci�n.<br />Presione en <em>Siguiente</em> para continuar el proceso con el siguiente paso." );
define( "DATA_INSERTED", "Los datos iniciales, se han a�adido a la base de datos. <br /> Haga clic sobre <em> siguiente </em> para proseguir el proceso." );


// %s is database name
define( "DATABASE_CREATED", "Base de datos %s creada" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "Fue imposible crear la tabla %s" ); // L118
define( "TABLE_CREATED", "Tabla %s creada." ); // L45
define( "ROWS_INSERTED", "%d entradas insertadas en la tabla %s." ); // L119
define( "ROWS_FAILED", "Falllo insertando %d entradas en la tabla %s." ); // L120
define( "TABLE_ALTERED", "Tabla %s actualizada."); // L133
define( "TABLE_NOT_ALTERED", "Fallo actualizando la tabla %s."); // L134
define( "TABLE_DROPPED", "Tabla %s omitida."); // L163
define( "TABLE_NOT_DROPPED", "Fallo eliminando la tabla %s."); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "No fue posible acceder a la carpeta especificada. Por favor, compruebe que la misma existe y que el servidor web puede escribir en ella." );
define( "ERR_NO_XOOPS_FOUND", "No se pudo encontrar el script de instalaci�n de XOOPS en la carpeta que se ha especificado." );
define( "ERR_INVALID_EMAIL", "Direcci�n de correo electr�nico no v�lida" ); // L73
define( "ERR_REQUIRED", "Por favor, introduzca toda la informaci�n necesaria." ); // L41
define( "ERR_PASSWORD_MATCH", "Las dos contrase�as introducidas no son iguales" );
define( "ERR_NEED_WRITE_ACCESS", "El servidor debe tener permisos de escritura con relaci�n a los siguientes archivos y carpetas <br />(i.e. <em>chmod 777 nombre_del_directorio</em> en un servidor UNIX/LINUX)" ); // L72
define( "ERR_NO_DATABASE", "No fue posible crear la base de datos. Por favor, contacte con el administrador del servidor para conocer m�s detalles." ); // L31
define( "ERR_NO_DBCONNECTION", "No fue posible la conexi�n con el servidor de la base de datos." ); // L106
define( "ERR_WRITING_CONSTANT", "Fallo al escribir la constante %s." ); // L122

define( "ERR_COPY_MAINFILE", "No fue posible copiar el archivo proporcionado por la distribuci�n a mainfile.php" );
define( "ERR_WRITE_MAINFILE", "No fue posible escribir la configuraci�n en el archivo mainfile.php. Por favor, compruebe que los permisos del mismo son los requeridos y vuelva a intentarlo.");
define( "ERR_READ_MAINFILE", "No fue posible abrir el archivo mainfile.php para leer su contenido." );

define( "ERR_INVALID_DBCHARSET", "El conjunto de caracteres '%s' no est� soportado." );
define( "ERR_INVALID_DBCOLLATION", "Cotejamiento '%s' no soportado." );
define( "ERR_CHARSET_NOT_SET", "Conjunto de caracteres por defecto no configurado para la base de datos XOOPS." );


define("_INSTALL_CHARSET", "ISO-8859-1");
?>