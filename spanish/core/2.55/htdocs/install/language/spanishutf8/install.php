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
 * @version     $Id$
 */

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define("SHOW_HIDE_HELP","Mostrar/ocultar texto de ayuda" );

// License
define('LICENSE_NOT_WRITEABLE','La licencia es %s . <br/><font style="colour:#ff0000">Haga ../include/license.php Escribible</font>');
define('LICENSE_IS_WRITEABLE','La licencia es %s');

// Configuration check page
define("SERVER_API","API del servidor" );
define("PHP_EXTENSION","%s (extensión)" );
define("CHAR_ENCODING","Codificación de caracteres" );
define("XML_PARSING","XML parsing" );
define("REQUIREMENTS","Requerimientos" );
define("_PHP_VERSION","Versión de PHP" );
define("RECOMMENDED_SETTINGS","Ajustes recomendados" );
define("RECOMMENDED_EXTENSIONS","Extensiones recomendadas" );
define("SETTING_NAME","Nombre de ajuste" );
define("RECOMMENDED","Recomendado" );
define("CURRENT","Actual" );
define("RECOMMENDED_EXTENSIONS_MSG","Estas extensiones no son necesarias para un uso normal de este sistema, pero sí para poder utilizar algunas características específicas (como el multilenguaje o el soporte de RSS). Por esta razón es recomendable tenerlas instaladas." );
define("NONE","Ninguna" );
define("SUCCESS","Éxito" );
define("WARNING","Advertencia" );
define("FAILED","Falló" );

// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","Asistente de Instalación" );

define("LANGUAGE_SELECTION","Selección de idioma" );
define("LANGUAGE_SELECTION_TITLE","Elija su idioma");        // L128
define("INTRODUCTION","Introducción" );
define("INTRODUCTION_TITLE","Bienvenido al Asistente de Instalación" );        // L0
define("CONFIGURATION_CHECK","Comprobación de la configuración" );
define("CONFIGURATION_CHECK_TITLE","Comprobando la configuración de su servidor" );
define("PATHS_SETTINGS","Configuración de las rutas" );
define("PATHS_SETTINGS_TITLE","Configuración de las rutas" );
define("DATABASE_CONNECTION","Conexión de la base de datos" );
define("DATABASE_CONNECTION_TITLE","Conexión de la base de datos" );
define("DATABASE_CONFIG","Configuración de la base de datos" );
define("DATABASE_CONFIG_TITLE","Configuración de la base de datos" );
define("CONFIG_SAVE","Configuración guardada" );
define("CONFIG_SAVE_TITLE","Guardando la configuración de su sistema" );
define("TABLES_CREATION","Creación de tablas" );
define("TABLES_CREATION_TITLE","Creación de las tablas de la base de datos" );
define("INITIAL_SETTINGS","Ajustes iniciales" );
define("INITIAL_SETTINGS_TITLE","Por favor, establezca su configuración inicial" );
define("DATA_INSERTION","Inserción de los datos" );
define("DATA_INSERTION_TITLE","Guardando sus ajustes o configuración en la base de datos" );
define("WELCOME","Bienvenido" );
define("WELCOME_TITLE","Bienvenido a su sitio web creado con XOOPS." );        // L0


// Settings (labels and help text)
define("XOOPS_PATHS","Ruta física a XOOPS" );
define("XOOPS_URLS","Localización del sitio web" );

define("XOOPS_ROOT_PATH_LABEL","Ruta a la carpeta que contendrá la instalación de XOOPS" );
define("XOOPS_ROOT_PATH_HELP","Ruta física al 'trust path' de XOOPS SIN la barra invertida a la izquierda(\)" );

define("XOOPS_LIB_PATH_LABEL","XOOPS Carpeta biblioteca" );
define("XOOPS_LIB_PATH_HELP","Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH_LABEL . " to make it secure.");
define("XOOPS_DATA_PATH_LABEL","Carpeta de datos de XOOPS" );
define("XOOPS_DATA_PATH_HELP","Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH_LABEL . " to make it secure." );

define("XOOPS_URL_LABEL","Localización del sitio web (URL)" ); // L56
define("XOOPS_URL_HELP","URL que será usada para acceder a la instalación de su sitio XOOPS" ); // L58

define("LEGEND_CONNECTION","Conexión con el servidor" );
define("LEGEND_DATABASE","Base de datos" ); // L51

define("DB_HOST_LABEL","Nombre del host" );    // L27
define("DB_HOST_HELP",  "Nombre del host del servidor de la base de datos. Si no está seguro, 'localhost' debería de funcionar en la mayoría de las ocasiones."); // L67
define("DB_USER_LABEL","Nombre del usuario de la base de datos" );    // L28
define("DB_USER_HELP",  "Nombre del usuario de la base de datos en el host"); // L65
define("DB_PASS_LABEL","Contraseña" );    // L52
define("DB_PASS_HELP",  "Contraseña de su cuenta de usuario en la base de datos que está utilizando."); // L68
define("DB_NAME_LABEL","Nombre de la base de datos" );    // L29
define("DB_NAME_HELP",  "El nombre de la base de datos en el host. El instalador tratará de crear la base de datos en caso de que no exista."); // L64
define("DB_CHARSET_LABEL","Conjunto de caracteres" );
define("DB_CHARSET_HELP",  "MySQL incluye el soporte de conjunto de caracteres que le permite almacenar los datos usando una variedad de distintos conjuntos de caracteres y realizar comparaciones de acuerdo a la variedad de cotejamientos.");
define("DB_COLLATION_LABEL","Cotejamiento de la base de datos" );
define("DB_COLLATION_HELP",  "Un cotejamiento es un conjunto de reglas para la comparación de caracteres de un conjunto de caracteres.");
define("DB_PREFIX_LABEL","Prefijos para las tablas" );    // L30
define("DB_PREFIX_HELP",  "El prefijo será antepuesto a los nombres de todas las tablas nuevas que se creen para evitar problemas de duplicidad con otros contenidos. Si no está seguro, mantenga el que aparece por defecto."); // L63
define("DB_PCONNECT_LABEL","Usar conexión persistente" );    // L54
define("DB_PCONNECT_HELP",  "Por defecto es 'NO'. Elija 'NO' en caso de no estar seguro de qué hacer."); // L69
define("DB_DATABASE_LABEL","Base de datos" );

define("LEGEND_ADMIN_ACCOUNT","Cuenta del administrador" );
define("ADMIN_LOGIN_LABEL","Login del administrador" ); // L37
define("ADMIN_EMAIL_LABEL","Correo electrónico del administrador" ); // L38
define("ADMIN_PASS_LABEL","Contraseña del administrador" ); // L39
define("ADMIN_CONFIRMPASS_LABEL","Confirmar la contraseña" ); // L74

// Buttons
define("BUTTON_PREVIOUS","Anterior" ); // L42
define("BUTTON_NEXT","Siguiente" ); // L47

// Messages
define("XOOPS_FOUND","%s encontrado" );
define("CHECKING_PERMISSIONS","Comprobando los permisos en archivos y carpetas..." ); // L82
define("IS_NOT_WRITABLE","%s no es escribible." ); // L83
define("IS_WRITABLE","%s es escribible." ); // L84

define("XOOPS_PATH_FOUND","Ruta (path) correcta." );

define("READY_CREATE_TABLES","No se ha detectado que las tablas necesarias para el funcionamiento de XOOPS hayan sido creadas con anterioridad.<br />El asistente de la instalación está preparado para crear las mismas.<br />Haga clic en <em>Siguiente</em> para continuar." );
define("XOOPS_TABLES_FOUND","Las tablas necesarias para el funcionamiento de XOOPS ya existen en su base de datos.<br />Haga clic en <em>Siguiente</em> para continuar el proceso de instalación." ); // L131
define("XOOPS_TABLES_CREATED","Tablas del sistema creadas.<br />Clic en <em>siguiente</em> para continuar con la instalación." );
define("READY_INSERT_DATA","El asistente de instalación está listo para insertar los datos iniciales en su base de datos." );
define("READY_SAVE_MAINFILE","El asistente está preparado para guadar la configuración especificada en el archivo <em>mainfile.php</em>.<br />Haga clic sobre <em>Siguiente</em> para continuar." );
define("SAVED_MAINFILE","Guardando la configuración en mainfile.php" );
define("SAVED_MAINFILE_MSG","El instalador guardó la configuración para <em> mainfile.php </em>. Haga clic sobre <em> Siguiente </em> para continuar el proceso de instalación." );
define("DATA_ALREADY_INSERTED","Los datos necesarios para el funcionamiento de XOOPS ya están almacenados en su base de datos. Ningún dato más será almacenado con esta acción.<br />Haga clic sobre <em>Siguiente</em> para continuar el proceso con el siguiente paso." );
define("DATA_INSERTED","Los datos iniciales, se han añadido a la base de datos. <br /> Haga clic sobre <em> siguiente </em> para proseguir el proceso." );


// %s is database name
define("DATABASE_CREATED","Base de datos %s creada" ); // L43
// %s is table name
define("TABLE_NOT_CREATED","Fue imposible crear la tabla %s" ); // L118
define("TABLE_CREATED","Tabla %s creada." ); // L45
define("ROWS_INSERTED","%d entradas insertadas en la tabla %s." ); // L119
define("ROWS_FAILED","Fallo insertando %d entradas en la tabla %s." ); // L120
define("TABLE_ALTERED","Tabla %s actualizada."); // L133
define("TABLE_NOT_ALTERED","Fallo actualizando la tabla %s."); // L134
define("TABLE_DROPPED","Tabla %s omitida."); // L163
define("TABLE_NOT_DROPPED","Fallo eliminando la tabla %s."); // L164

// Error messages
define("ERR_COULD_NOT_ACCESS","No fue posible acceder a la carpeta especificada. Por favor, compruebe que la misma existe y que el servidor web puede escribir en ella." );
define("ERR_NO_XOOPS_FOUND","No se pudo encontrar el script de instalación en la carpeta que se ha especificado." );
define("ERR_INVALID_EMAIL","Dirección de correo electrónico no válida" ); // L73
define("ERR_REQUIRED","Por favor, introduzca toda la información necesaria." ); // L41
define("ERR_PASSWORD_MATCH","Las dos contraseñas introducidas no son iguales" );
define("ERR_NEED_WRITE_ACCESS","El servidor debe tener acceso de escritura a los archivos y las carpetas siguientes < br />(i.e. <em>chmod 777 nombre_carpeta</em> en servidor UNIX/LINUX) < br / > Si no están disponibles o no se han creado correctamente, hagalas manualmente y establezca los permisos adecuados." );
define("ERR_NO_DATABASE","No fue posible crear la base de datos. Por favor, contacte con el administrador del servidor para conocer más detalles." ); // L31
define("ERR_NO_DBCONNECTION","No fue posible la conexión con el servidor de la base de datos." ); // L106
define("ERR_WRITING_CONSTANT","Fallo al escribir la constante %s." ); // L122

define("ERR_COPY_MAINFILE","No fue posible copiar el archivo proporcionado por la distribución a mainfile.php" );
define("ERR_WRITE_MAINFILE","No fue posible escribir la configuración en el archivo mainfile.php. Por favor, compruebe que los permisos del mismo son los requeridos y vuelva a intentarlo.");
define("ERR_READ_MAINFILE","No fue posible abrir el archivo mainfile.php para leer su contenido." );

define("ERR_INVALID_DBCHARSET","El conjunto de caracteres '%s' no está soportado." );
define("ERR_INVALID_DBCOLLATION","Cotejamiento '%s' no soportado." );
define("ERR_CHARSET_NOT_SET","Conjunto de caracteres por defecto no configurado para la base de datos XOOPS." );


define("_INSTALL_CHARSET","UTF-8");

define("SUPPORT","Apoyo");

define("LOGIN","Autenticación");
define("LOGIN_TITLE","Autenticación");
define("USER_LOGIN","Login del administrador" );
define("USERNAME","Usuario :");
define("PASSWORD","Contraseña :");

define("ICONV_CONVERSION","Conversión de conjuntos de caracteres");
define("ZLIB_COMPRESSION","Compresión zlib");
define("IMAGE_FUNCTIONS","Funciones para las imágenes");
define("IMAGE_METAS","Image meta data (exif)");
define("FILTER_FUNCTIONS","Funciones de filtro");

define("ADMIN_EXIST","La cuenta del administrador ya existe.<br />Haga clic sobre <strong>Siguiente</strong> para continuar.");

define("CONFIG_SITE","Configuración del sitio" );
define("CONFIG_SITE_TITLE","Configuración del sitio" );
define("MODULES","Instalación de módulos" );
define("MODULES_TITLE","Instalación de módulos" );
define("THEME","Seleccione el tema" );
define("THEME_TITLE","Elija el tema por defecto" );

define("INSTALLED_MODULES","Los siguientes módulos se han instalado.<br />Haga clic sobre <strong>Siguiente</strong> para continuar.");
define("NO_MODULES_FOUND","No se encuentran módulos.<br />Haga clic sobre <strong>Siguiente</strong> para continuar.");
define("NO_INSTALLED_MODULES","No hay módulos instalados.<br />Haga clic sobre <strong>Siguiente</strong> para continuar.");

define("THEME_NO_SCREENSHOT","Captura de pantalla no encontrada");

define("IS_VALOR"," => ");

// password message
define("PASSWORD_LABEL","Fuerza de la contraseña : ");
define("PASSWORD_DESC","Contraseña no ingresada");
define("PASSWORD_GENERATOR","Generar contraseña");
define("PASSWORD_GENERATE","Generar");
define("PASSWORD_COPY","Copiar");

define("PASSWORD_VERY_WEAK","Muy débil");
define("PASSWORD_WEAK","Débil");
define("PASSWORD_BETTER","Mejor");
define("PASSWORD_MEDIUM","Medio");
define("PASSWORD_STRONG","Fuerte");
define("PASSWORD_STRONGEST","Muy fuerte");
?>