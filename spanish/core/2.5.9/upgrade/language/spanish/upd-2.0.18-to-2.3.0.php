<?php
// _LANGCODE: es
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Ruta Física de XOOPS');
define('LEGEND_DATABASE', 'Conjunto de Caracteres de Base de Datos');

define('XOOPS_LIB_PATH_LABEL', 'Directorio de la librería de XOOPS (xoops_lib)');
define('XOOPS_LIB_PATH_HELP', 'Ruta física al directorio de la librería de XOOPS SIN barra inclinada, para compatibilidad directa. Ubicar la carpeta fuera de ' . XOOPS_ROOT_PATH . ' para hacerla segura.');
define('XOOPS_DATA_PATH_LABEL', 'Directorio de Archivos de Datos de XOOPS (xoops_data)');
define('XOOPS_DATA_PATH_HELP', 'Ruta física al directorio de archivos de datos de XOOPS (escribible) SIN barra diagonal, para compatibilidad con versiones anteriores. Ubicar la carpeta fuera de ' . XOOPS_ROOT_PATH . ' to para hacerla segura.');

define('DB_COLLATION_LABEL', 'Conjunto de caracteres de la base de datos y colación');
define('DB_COLLATION_HELP', "A partir de 4.12 MySQL admite conjuntos de caracteres personalizados y colación. Sin embargo, es más complejo de lo esperado, por lo que NO realice ningún cambio a menos que tenga confianza con su elección.");
define('DB_COLLATION_NOCHANGE', 'No cambiar');

define('XOOPS_PATH_FOUND', 'Ruta Encontrada.');
define('ERR_COULD_NOT_ACCESS', 'No se pudo acceder a la carpeta especificada. Verifique que exista y que el servidor pueda leerla.');
define('CHECKING_PERMISSIONS', 'Comprobando archivos y permisos de directorio...');
define('ERR_NEED_WRITE_ACCESS', 'El servidor debe tener acceso de escritura a los siguientes archivos y carpetas<br>(es decir, <em> chmod 777 nombre_direcctorio</em> en un servidor UNIX / LINUX)');
define('IS_NOT_WRITABLE', '%s NO se puede escribir.');
define('IS_WRITABLE', '%s es escribible.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Error al escribir el contenido en mainfile.php, escriba el contenido en mainfile.php de forma manual.');
