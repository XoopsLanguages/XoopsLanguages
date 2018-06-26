<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Mostrar / ocultar el texto de ayuda');
// License
define('LICENSE_NOT_WRITEABLE', '¡El archivo de licencia "%s" NO se puede escribir!');
define('LICENSE_IS_WRITEABLE', '%s La licencia puede escribirse.');
// Configuration check page
define('SERVER_API', 'API del servidor');
define('PHP_EXTENSION', 'extensión %s');
define('CHAR_ENCODING', 'Codificación de caracteres');
define('XML_PARSING', 'Análisis XML');
define('REQUIREMENTS', 'Requisitos');
define('_PHP_VERSION', 'Versión de PHP');
define('RECOMMENDED_SETTINGS', 'Configuraciones recomendadas');
define('RECOMMENDED_EXTENSIONS', 'Extensiones recomendadas');
define('SETTING_NAME', 'Nombre de ajuste');
define('RECOMMENDED', 'Recomendado');
define('CURRENT', 'Actual');
define('RECOMMENDED_EXTENSIONS_MSG', 'Estas extensiones no son necesarias para el uso normal, pero pueden ser necesarias para explorar
algunas características específicas (como el soporte de varios idiomas o RSS). Por lo tanto, se recomienda tenerlos instalados.');
define('NONE', 'Ninguno');
define('SUCCESS', 'Éxito');
define('WARNING', 'ADVERTENCIA');
define('FAILED', 'Falló');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Asistente de instalación de XOOPS');
define('LANGUAGE_SELECTION', 'Selección de idioma');
define('LANGUAGE_SELECTION_TITLE', 'Elija su idioma');        // L128
define('INTRODUCTION', 'Introducción');
define('INTRODUCTION_TITLE', 'Bienvenido al Asistente de instalación de XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Verificación  de Configuración');
define('CONFIGURATION_CHECK_TITLE', 'Comprobación de la configuración del servidor');
define('PATHS_SETTINGS', 'Configuración de rutas');
define('PATHS_SETTINGS_TITLE', 'Configuración de rutas');
define('DATABASE_CONNECTION', 'Conexión a la base de datos');
define('DATABASE_CONNECTION_TITLE', 'Conexión a la base de datos');
define('DATABASE_CONFIG', 'Configuración de base de datos');
define('DATABASE_CONFIG_TITLE', 'Configuración de base de datos');
define('CONFIG_SAVE', 'Guardar configuración');
define('CONFIG_SAVE_TITLE', 'Guardando la configuración del sistema');
define('TABLES_CREATION', 'Creación de tablas');
define('TABLES_CREATION_TITLE', 'Creación de tablas de base de datos');
define('INITIAL_SETTINGS', 'Configuraciones iniciales');
define('INITIAL_SETTINGS_TITLE', 'Ingrese su configuración inicial');
define('DATA_INSERTION', 'Inserción de datos');
define('DATA_INSERTION_TITLE', 'Guardando la configuración en la base de datos');
define('WELCOME', 'Bienvenido');
define('WELCOME_TITLE', 'Bienvenido a su Sitio Web');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Rutas Físicas de XOOPS');
define('XOOPS_URLS', 'Ubicaciones Web');
define('XOOPS_ROOT_PATH_LABEL', 'Ruta física de la raíz de XOOPS');
define('XOOPS_ROOT_PATH_HELP', 'Ruta física al directorio de documentos XOOPS (servido) SIN barra inclinada');
define('XOOPS_LIB_PATH_LABEL', 'Directorio de la librería de XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'Directorio de archivos de datos de XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'ubicación del sitio web (URL)'); // L56
define('XOOPS_URL_HELP', 'URL principal que se utilizará para acceder a la instalación de XOOPS'); // L58
define('LEGEND_CONNECTION', 'Conexión del servidor');
define('LEGEND_DATABASE', 'Base de Datos'); // L51
define('DB_HOST_LABEL', 'Nombre de host del servidor');    // L27
define('DB_HOST_HELP', 'Nombre de host del servidor de base de datos. Si no está seguro, <em> localhost </ em> funciona en la mayoría de los casos'); // L67
define('DB_USER_LABEL', 'Usuario');    // L28
define('DB_USER_HELP', 'Nombre de la cuenta de usuario que se utilizará para conectarse al servidor de base de datos'); // L65
define('DB_PASS_LABEL', 'Contraseña');    // L52
define('DB_PASS_HELP', 'Contraseña de su cuenta de usuario de base de datos'); // L68
define('DB_NAME_LABEL', 'Nombre de la base de datos');    // L29
define('DB_NAME_HELP', 'El nombre de la base de datos en el host. El instalador intentará crear la base de datos si no existe'); // L64
define('DB_CHARSET_LABEL', 'Conjunto de caracteres de base de datos');
define('DB_CHARSET_HELP', 'MySQL incluye soporte de conjunto de caracteres que le permite almacenar datos usando una variedad de conjuntos de caracteres y realizar comparaciones de acuerdo a una variedad de intercalaciones.');
define('DB_COLLATION_LABEL', 'Intercalación de base de datos');
define('DB_COLLATION_HELP', 'Un agrupamiento es un conjunto de reglas para comparar caracteres en un conjunto de caracteres.');
define('DB_PREFIX_LABEL', 'Tabla de prefijos');    // L30
define('DB_PREFIX_HELP', 'Este prefijo se agregará a todas las nuevas tablas creadas para evitar conflictos de nombres en la base de datos. Si no está seguro, simplemente mantenga el valor predeterminado'); // L63
define('DB_PCONNECT_LABEL', 'Utilizar la conexión persistente');    // L54
define('DB_PCONNECT_HELP', "El valor predeterminado es 'No'. Deje en blanco si no está seguro"); // L69
define('DB_DATABASE_LABEL', 'Base de Datos');
define('LEGEND_ADMIN_ACCOUNT', 'Cuenta de administrador');
define('ADMIN_LOGIN_LABEL', 'Ingreso del Admin'); // L37
define('ADMIN_EMAIL_LABEL', 'Correo del Admin'); // L38
define('ADMIN_PASS_LABEL', 'Contraseña de Administrador'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Confirmar Contraseña'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Anterior'); // L42
define('BUTTON_NEXT', 'Continuar'); // L47
// Messages
define('XOOPS_FOUND', '%s encontrado');
define('CHECKING_PERMISSIONS', 'Comprobación de permisos de archivos y directorios...'); // L82
define('IS_NOT_WRITABLE', '%s NO se puede escribir.'); // L83
define('IS_WRITABLE', '%s es escribible.'); // L84
define('XOOPS_PATH_FOUND', 'Ruta encontrada.');
//define('READY_CREATE_TABLES', 'No se detectaron tablas XOOPS. <br>El instalador ahora está listo para crear las tablas del sistema XOOPS.');
define('XOOPS_TABLES_FOUND', 'Las tablas del sistema XOOPS ya existen en su base de datos.'); // L131
define('XOOPS_TABLES_CREATED', 'Se han creado las tablas del sistema XOOPS.');
//define('READY_INSERT_DATA', 'El instalador ahora está listo para insertar datos iniciales en su base de datos.');
//define('READY_SAVE_MAINFILE', 'El instalador ahora está listo para guardar las configuraciones especificadas en <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Configuración Guardada');
define('SAVED_MAINFILE_MSG', 'El instalador ha guardado las configuraciones especificadas en <em> mainfile.php </em> y <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'Datos de XOOPS encontrados en la base de datos.');
define('DATA_INSERTED', 'Los datos iniciales se han insertado en la base de datos.');
// %s is database name
define('DATABASE_CREATED', 'Se ha creado la base de datos %s!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'No se puede crear la tabla %s'); // L118
define('TABLE_CREATED', 'Se creó la tabla %s.'); // L45
define('ROWS_INSERTED', '%d entradas insertadas en la tabla %s.'); // L119
define('ROWS_FAILED', 'Error al insertar %d entradas en la tabla %s.'); // L120
define('TABLE_ALTERED', 'Tabla %s actualizada.'); // L133
define('TABLE_NOT_ALTERED', 'No se pudo actualizar la tabla %s.'); // L134
define('TABLE_DROPPED', 'La tabla %s se cayó.'); // L163
define('TABLE_NOT_DROPPED', 'Error al eliminar la tabla %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'No se pudo acceder a la carpeta especificada. Compruebe que existe y es legible por el servidor.');
define('ERR_NO_XOOPS_FOUND', 'No se pudo encontrar ninguna instalación XOOPS en la carpeta especificada.');
define('ERR_INVALID_EMAIL', 'Email no válido!'); // L73
define('ERR_REQUIRED', 'Se requiere información.'); // L41
define('ERR_PASSWORD_MATCH', 'Las dos contraseñas no coinciden');
define('ERR_NEED_WRITE_ACCESS', 'El servidor debe tener acceso de escritura a los siguientes archivos y carpetas<br>(es decir, <em>chmod 775 nombre_directorio</em> en un servidor UNIX / LINUX) <br>Si no están disponibles o no se crearon correctamente, cree manualmente y establezca los permisos adecuados.');
define('ERR_NO_DATABASE', 'No se pudo crear la base de datos. Póngase en contacto con el administrador del servidor para obtener más información.'); // L31
define('ERR_NO_DBCONNECTION', 'No se pudo conectar con el servidor de base de datos.'); // L106
define('ERR_WRITING_CONSTANT', 'Error al escribir constante %s.'); // L122
define('ERR_COPY_MAINFILE', 'No se pudo copiar el archivo de distribución en %s');
define('ERR_WRITE_MAINFILE', 'No se pudo escribir en %s. Compruebe el permiso del archivo y vuelva a intentarlo.');
define('ERR_READ_MAINFILE', 'No se pudo abrir %s para leer');
define('ERR_INVALID_DBCHARSET', "El conjunto de caracteres '%s' no es compatible.");
define('ERR_INVALID_DBCOLLATION', "No se admite la intercalación '%s'.");
define('ERR_CHARSET_NOT_SET', 'El conjunto de caracteres predeterminado no está establecido para la base de datos.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Soporte');
define('LOGIN', 'Autentificación');
define('LOGIN_TITLE', 'Autentificación');
define('USER_LOGIN', 'Inicio de sesión del Administrador');
define('USERNAME', 'Usuario:');
define('PASSWORD', 'Contraseña');
define('ICONV_CONVERSION', 'Conversión de conjunto de caracteres');
define('ZLIB_COMPRESSION', 'Compresión Zlib');
define('IMAGE_FUNCTIONS', 'Funciones de imagen');
define('IMAGE_METAS', 'Metadatos de imagen (exif)');
define('FILTER_FUNCTIONS', 'Funciones de filtro');
define('ADMIN_EXIST', 'La cuenta de administrador ya existe.');
define('CONFIG_SITE', 'Configuración del sitio');
define('CONFIG_SITE_TITLE', 'Configuración del sitio');
define('MODULES', 'Instalación de módulos');
define('MODULES_TITLE', 'Instalación de módulos');
define('THEME', 'Seleccione el diseño');
define('THEME_TITLE', 'Seleccione el tema predeterminado');
define('INSTALLED_MODULES', 'Los siguientes módulos han sido instalados.');
define('NO_MODULES_FOUND', 'No se encontraron módulos.');
define('NO_INSTALLED_MODULES', 'No hay módulos instalados.');
define('THEME_NO_SCREENSHOT', 'No se ha encontrado ninguna captura de pantalla');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Seguridad de la contraseña');
define('PASSWORD_DESC', 'Contraseña no ingresada');
define('PASSWORD_GENERATOR', 'Generador de contraseñas');
define('PASSWORD_GENERATE', 'Generar');
define('PASSWORD_COPY', 'Copiar');
define('PASSWORD_VERY_WEAK', 'Muy débil');
define('PASSWORD_WEAK', 'Débil');
define('PASSWORD_BETTER', 'Mejor');
define('PASSWORD_MEDIUM', 'Medio');
define('PASSWORD_STRONG', 'Fuerte');
define('PASSWORD_STRONGEST', 'Más fuerte');
//2.5.7
define('WRITTEN_LICENSE', 'Se escribió XOOPS %s Clave de Licencia: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Reintentar');
define('CHMOD_CHGRP_IGNORE', 'Utilizar de todos modos');
define('CHMOD_CHGRP_ERROR', 'El instalador no puede escribir el archivo de configuración %1$s. <p> PHP está escribiendo archivos bajo el usuario %2$s y el grupo %3$s. <p> El directorio %4$s / tiene el usuario %5$s y grupo %6$s');
//2.5.9
define("CURL_HTTP", "Biblioteca de URL del cliente (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', ' Dominio de Cookies para el Sitio Web');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Dominio para establecer cookies. Puede estar en blanco, el host completo de la URL (www.example.com) o el dominio registrado sin subdominios (example.com) para compartir en los subdominios (www.example.com y blog.ejemplo.com).');
define('INTL_SUPPORT', 'Funciones de internacionalización');
define('XOOPS_SOURCE_CODE', "XOOPS en GitHub");
define('XOOPS_INSTALLING', 'Instalando');
define('XOOPS_ERROR_ENCOUNTERED', 'Error');
define('XOOPS_ERROR_SEE_BELOW', 'Vea a continuación los mensajes.');
define('MODULES_AVAILABLE', 'Módulos Disponibles');
define('INSTALL_THIS_MODULE', 'Añadir %s');
